<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddDataLevelPermissionRuleUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddDataLevelPermissionRuleUsersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddDataLevelPermissionWhiteListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddDataLevelPermissionWhiteListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddShareReportRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddShareReportResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserGroupMemberRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserGroupMemberResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserGroupMembersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserGroupMembersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserTagMetaRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserTagMetaResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserToWorkspaceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddUserToWorkspaceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddWorkspaceUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AddWorkspaceUsersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AuthorizeMenuRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AuthorizeMenuResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelAuthorizationMenuRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelAuthorizationMenuResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelCollectionRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelCollectionResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelReportShareRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CancelReportShareResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ChangeVisibilityModelRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ChangeVisibilityModelResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CheckReadableRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CheckReadableResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DelayTicketExpireTimeRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DelayTicketExpireTimeResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteDataLevelPermissionRuleUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteDataLevelPermissionRuleUsersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteDataLevelRuleConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteDataLevelRuleConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteTicketRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteTicketResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserFromWorkspaceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserFromWorkspaceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupMemberRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupMemberResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupMembersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupMembersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserTagMetaRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DeleteUserTagMetaResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetUserGroupInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetUserGroupInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCollectionsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCollectionsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCubeDataLevelPermissionConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCubeDataLevelPermissionConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListRecentViewReportsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListRecentViewReportsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListSharedReportsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListSharedReportsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListUserGroupsByUserIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListUserGroupsByUserIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetDetailInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetDetailInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSwitchInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSwitchInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryShareListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryShareListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySharesToUserListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySharesToUserListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryTicketInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryTicketInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupListByParentIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupListByParentIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupMemberRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserGroupMemberResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByAccountRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByAccountResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByUserIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserInfoByUserIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserRoleInfoInWorkspaceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserRoleInfoInWorkspaceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserTagMetaListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserTagValueListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserTagValueListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByWorkspaceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByWorkspaceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceUserListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceUserListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ResultCallbackRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ResultCallbackResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SaveFavoritesRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SaveFavoritesResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionExtraConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionExtraConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionRuleConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionRuleConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionWhiteListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SetDataLevelPermissionWhiteListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateDataLevelPermissionStatusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateDataLevelPermissionStatusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateEmbeddedStatusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateEmbeddedStatusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateTicketNumRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateTicketNumResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserTagMetaRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserTagMetaResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserTagValueRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateUserTagValueResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUserRoleRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUserRoleResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUsersRoleRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\UpdateWorkspaceUsersRoleResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\WithdrawAllUserGroupsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\WithdrawAllUserGroupsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Quickbipublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('quickbi-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDataLevelPermissionRuleUsersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddDataLevelPermissionRuleUsersResponse
     */
    public function addDataLevelPermissionRuleUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addUserModel)) {
            $query['AddUserModel'] = $request->addUserModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDataLevelPermissionRuleUsers',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDataLevelPermissionRuleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDataLevelPermissionRuleUsersRequest $request
     *
     * @return AddDataLevelPermissionRuleUsersResponse
     */
    public function addDataLevelPermissionRuleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataLevelPermissionRuleUsersWithOptions($request, $runtime);
    }

    /**
     * @param AddDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddDataLevelPermissionWhiteListResponse
     */
    public function addDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->targetIds)) {
            $query['TargetIds'] = $request->targetIds;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDataLevelPermissionWhiteList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDataLevelPermissionWhiteListRequest $request
     *
     * @return AddDataLevelPermissionWhiteListResponse
     */
    public function addDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param AddShareReportRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddShareReportResponse
     */
    public function addShareReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authPoint)) {
            $query['AuthPoint'] = $request->authPoint;
        }
        if (!Utils::isUnset($request->expireDate)) {
            $query['ExpireDate'] = $request->expireDate;
        }
        if (!Utils::isUnset($request->shareToId)) {
            $query['ShareToId'] = $request->shareToId;
        }
        if (!Utils::isUnset($request->shareToType)) {
            $query['ShareToType'] = $request->shareToType;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddShareReport',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddShareReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddShareReportRequest $request
     *
     * @return AddShareReportResponse
     */
    public function addShareReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShareReportWithOptions($request, $runtime);
    }

    /**
     * @param AddUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->adminUser)) {
            $query['AdminUser'] = $request->adminUser;
        }
        if (!Utils::isUnset($request->authAdminUser)) {
            $query['AuthAdminUser'] = $request->authAdminUser;
        }
        if (!Utils::isUnset($request->nickName)) {
            $query['NickName'] = $request->nickName;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUser',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserRequest $request
     *
     * @return AddUserResponse
     */
    public function addUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserWithOptions($request, $runtime);
    }

    /**
     * @param AddUserGroupMemberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddUserGroupMemberResponse
     */
    public function addUserGroupMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserGroupMember',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserGroupMemberRequest $request
     *
     * @return AddUserGroupMemberResponse
     */
    public function addUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @param AddUserGroupMembersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddUserGroupMembersResponse
     */
    public function addUserGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserGroupMembers',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserGroupMembersRequest $request
     *
     * @return AddUserGroupMembersResponse
     */
    public function addUserGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param AddUserTagMetaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserTagMetaResponse
     */
    public function addUserTagMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagDescription)) {
            $query['TagDescription'] = $request->tagDescription;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserTagMeta',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserTagMetaRequest $request
     *
     * @return AddUserTagMetaResponse
     */
    public function addUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @param AddUserToWorkspaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddUserToWorkspaceResponse
     */
    public function addUserToWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToWorkspace',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserToWorkspaceRequest $request
     *
     * @return AddUserToWorkspaceResponse
     */
    public function addUserToWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param AddWorkspaceUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddWorkspaceUsersResponse
     */
    public function addWorkspaceUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceUsers',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceUsersRequest $request
     *
     * @return AddWorkspaceUsersResponse
     */
    public function addWorkspaceUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWorkspaceUsersWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeMenuRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AuthorizeMenuResponse
     */
    public function authorizeMenuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authPointsValue)) {
            $query['AuthPointsValue'] = $request->authPointsValue;
        }
        if (!Utils::isUnset($request->dataPortalId)) {
            $query['DataPortalId'] = $request->dataPortalId;
        }
        if (!Utils::isUnset($request->menuIds)) {
            $query['MenuIds'] = $request->menuIds;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeMenu',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeMenuRequest $request
     *
     * @return AuthorizeMenuResponse
     */
    public function authorizeMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeMenuWithOptions($request, $runtime);
    }

    /**
     * @param CancelAuthorizationMenuRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelAuthorizationMenuResponse
     */
    public function cancelAuthorizationMenuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataPortalId)) {
            $query['DataPortalId'] = $request->dataPortalId;
        }
        if (!Utils::isUnset($request->menuIds)) {
            $query['MenuIds'] = $request->menuIds;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelAuthorizationMenu',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAuthorizationMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelAuthorizationMenuRequest $request
     *
     * @return CancelAuthorizationMenuResponse
     */
    public function cancelAuthorizationMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAuthorizationMenuWithOptions($request, $runtime);
    }

    /**
     * @param CancelCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelCollectionResponse
     */
    public function cancelCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCollection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelCollectionRequest $request
     *
     * @return CancelCollectionResponse
     */
    public function cancelCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCollectionWithOptions($request, $runtime);
    }

    /**
     * @param CancelReportShareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelReportShareResponse
     */
    public function cancelReportShareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->shareToIds)) {
            $query['ShareToIds'] = $request->shareToIds;
        }
        if (!Utils::isUnset($request->shareToType)) {
            $query['ShareToType'] = $request->shareToType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelReportShare',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelReportShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelReportShareRequest $request
     *
     * @return CancelReportShareResponse
     */
    public function cancelReportShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelReportShareWithOptions($request, $runtime);
    }

    /**
     * @param ChangeVisibilityModelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeVisibilityModelResponse
     */
    public function changeVisibilityModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataPortalId)) {
            $query['DataPortalId'] = $request->dataPortalId;
        }
        if (!Utils::isUnset($request->menuIds)) {
            $query['MenuIds'] = $request->menuIds;
        }
        if (!Utils::isUnset($request->showOnlyWithAccess)) {
            $query['ShowOnlyWithAccess'] = $request->showOnlyWithAccess;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeVisibilityModel',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeVisibilityModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeVisibilityModelRequest $request
     *
     * @return ChangeVisibilityModelResponse
     */
    public function changeVisibilityModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVisibilityModelWithOptions($request, $runtime);
    }

    /**
     * @param CheckReadableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckReadableResponse
     */
    public function checkReadableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckReadable',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckReadableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckReadableRequest $request
     *
     * @return CheckReadableResponse
     */
    public function checkReadable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkReadableWithOptions($request, $runtime);
    }

    /**
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->cmptId)) {
            $query['CmptId'] = $request->cmptId;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->globalParam)) {
            $query['GlobalParam'] = $request->globalParam;
        }
        if (!Utils::isUnset($request->ticketNum)) {
            $query['TicketNum'] = $request->ticketNum;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->watermarkParam)) {
            $query['WatermarkParam'] = $request->watermarkParam;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTicket',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentUserGroupId)) {
            $query['ParentUserGroupId'] = $request->parentUserGroupId;
        }
        if (!Utils::isUnset($request->userGroupDescription)) {
            $query['UserGroupDescription'] = $request->userGroupDescription;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserGroupRequest $request
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DelayTicketExpireTimeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DelayTicketExpireTimeResponse
     */
    public function delayTicketExpireTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelayTicketExpireTime',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelayTicketExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelayTicketExpireTimeRequest $request
     *
     * @return DelayTicketExpireTimeResponse
     */
    public function delayTicketExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delayTicketExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataLevelPermissionRuleUsersRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteDataLevelPermissionRuleUsersResponse
     */
    public function deleteDataLevelPermissionRuleUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteUserModel)) {
            $query['DeleteUserModel'] = $request->deleteUserModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataLevelPermissionRuleUsers',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataLevelPermissionRuleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataLevelPermissionRuleUsersRequest $request
     *
     * @return DeleteDataLevelPermissionRuleUsersResponse
     */
    public function deleteDataLevelPermissionRuleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLevelPermissionRuleUsersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataLevelRuleConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDataLevelRuleConfigResponse
     */
    public function deleteDataLevelRuleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataLevelRuleConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataLevelRuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataLevelRuleConfigRequest $request
     *
     * @return DeleteDataLevelRuleConfigResponse
     */
    public function deleteDataLevelRuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLevelRuleConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteTicketResponse
     */
    public function deleteTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTicket',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTicketRequest $request
     *
     * @return DeleteTicketResponse
     */
    public function deleteTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->transferUserId)) {
            $query['TransferUserId'] = $request->transferUserId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserFromWorkspaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUserFromWorkspaceResponse
     */
    public function deleteUserFromWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserFromWorkspace',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserFromWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserFromWorkspaceRequest $request
     *
     * @return DeleteUserFromWorkspaceResponse
     */
    public function deleteUserFromWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserFromWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserGroupRequest $request
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserGroupMemberRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserGroupMemberResponse
     */
    public function deleteUserGroupMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroupMember',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserGroupMemberRequest $request
     *
     * @return DeleteUserGroupMemberResponse
     */
    public function deleteUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserGroupMembersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserGroupMembersResponse
     */
    public function deleteUserGroupMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserGroupMembers',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserGroupMembersRequest $request
     *
     * @return DeleteUserGroupMembersResponse
     */
    public function deleteUserGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserTagMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteUserTagMetaResponse
     */
    public function deleteUserTagMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserTagMeta',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserTagMetaRequest $request
     *
     * @return DeleteUserTagMetaResponse
     */
    public function deleteUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetUserGroupInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserGroupInfoResponse
     */
    public function getUserGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserGroupInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserGroupInfoRequest $request
     *
     * @return GetUserGroupInfoResponse
     */
    public function getUserGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListByUserGroupIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListByUserGroupIdResponse
     */
    public function listByUserGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListByUserGroupId',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListByUserGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListByUserGroupIdRequest $request
     *
     * @return ListByUserGroupIdResponse
     */
    public function listByUserGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listByUserGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param ListCollectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCollectionsResponse
     */
    public function listCollectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCollections',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCollectionsRequest $request
     *
     * @return ListCollectionsResponse
     */
    public function listCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListCubeDataLevelPermissionConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListCubeDataLevelPermissionConfigResponse
     */
    public function listCubeDataLevelPermissionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCubeDataLevelPermissionConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCubeDataLevelPermissionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCubeDataLevelPermissionConfigRequest $request
     *
     * @return ListCubeDataLevelPermissionConfigResponse
     */
    public function listCubeDataLevelPermissionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCubeDataLevelPermissionConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListDataLevelPermissionWhiteListResponse
     */
    public function listDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataLevelPermissionWhiteList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataLevelPermissionWhiteListRequest $request
     *
     * @return ListDataLevelPermissionWhiteListResponse
     */
    public function listDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ListFavoriteReportsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFavoriteReportsResponse
     */
    public function listFavoriteReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->treeType)) {
            $query['TreeType'] = $request->treeType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFavoriteReports',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFavoriteReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFavoriteReportsRequest $request
     *
     * @return ListFavoriteReportsResponse
     */
    public function listFavoriteReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFavoriteReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListPortalMenuAuthorizationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListPortalMenuAuthorizationResponse
     */
    public function listPortalMenuAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataPortalId)) {
            $query['DataPortalId'] = $request->dataPortalId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPortalMenuAuthorization',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPortalMenuAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPortalMenuAuthorizationRequest $request
     *
     * @return ListPortalMenuAuthorizationResponse
     */
    public function listPortalMenuAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPortalMenuAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param ListPortalMenusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPortalMenusResponse
     */
    public function listPortalMenusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataPortalId)) {
            $query['DataPortalId'] = $request->dataPortalId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPortalMenus',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPortalMenusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPortalMenusRequest $request
     *
     * @return ListPortalMenusResponse
     */
    public function listPortalMenus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPortalMenusWithOptions($request, $runtime);
    }

    /**
     * @param ListRecentViewReportsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentViewReportsResponse
     */
    public function listRecentViewReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->offsetDay)) {
            $query['OffsetDay'] = $request->offsetDay;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryMode)) {
            $query['QueryMode'] = $request->queryMode;
        }
        if (!Utils::isUnset($request->treeType)) {
            $query['TreeType'] = $request->treeType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecentViewReports',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecentViewReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRecentViewReportsRequest $request
     *
     * @return ListRecentViewReportsResponse
     */
    public function listRecentViewReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentViewReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListSharedReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSharedReportsResponse
     */
    public function listSharedReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->treeType)) {
            $query['TreeType'] = $request->treeType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSharedReports',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSharedReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSharedReportsRequest $request
     *
     * @return ListSharedReportsResponse
     */
    public function listSharedReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserGroupsByUserIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserGroupsByUserIdResponse
     */
    public function listUserGroupsByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserGroupsByUserId',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserGroupsByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserGroupsByUserIdRequest $request
     *
     * @return ListUserGroupsByUserIdResponse
     */
    public function listUserGroupsByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsByUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryDataServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDataServiceResponse
     */
    public function queryDataServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['Conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->returnFields)) {
            $query['ReturnFields'] = $request->returnFields;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDataService',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDataServiceRequest $request
     *
     * @return QueryDataServiceResponse
     */
    public function queryDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataServiceWithOptions($request, $runtime);
    }

    /**
     * @param QueryDatasetDetailInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDatasetDetailInfoResponse
     */
    public function queryDatasetDetailInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDatasetDetailInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDatasetDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDatasetDetailInfoRequest $request
     *
     * @return QueryDatasetDetailInfoResponse
     */
    public function queryDatasetDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetDetailInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDatasetInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDatasetInfoResponse
     */
    public function queryDatasetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDatasetInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDatasetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDatasetInfoRequest $request
     *
     * @return QueryDatasetInfoResponse
     */
    public function queryDatasetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDatasetListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDatasetListResponse
     */
    public function queryDatasetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->withChildren)) {
            $query['WithChildren'] = $request->withChildren;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDatasetList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDatasetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDatasetListRequest $request
     *
     * @return QueryDatasetListResponse
     */
    public function queryDatasetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetListWithOptions($request, $runtime);
    }

    /**
     * @param QueryDatasetSwitchInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDatasetSwitchInfoResponse
     */
    public function queryDatasetSwitchInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDatasetSwitchInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDatasetSwitchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDatasetSwitchInfoRequest $request
     *
     * @return QueryDatasetSwitchInfoResponse
     */
    public function queryDatasetSwitchInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetSwitchInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryEmbeddedInfoResponse
     */
    public function queryEmbeddedInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryEmbeddedInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEmbeddedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryEmbeddedInfoResponse
     */
    public function queryEmbeddedInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmbeddedInfoWithOptions($runtime);
    }

    /**
     * @param QueryOrganizationWorkspaceListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryOrganizationWorkspaceListResponse
     */
    public function queryOrganizationWorkspaceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrganizationWorkspaceList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrganizationWorkspaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrganizationWorkspaceListRequest $request
     *
     * @return QueryOrganizationWorkspaceListResponse
     */
    public function queryOrganizationWorkspaceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrganizationWorkspaceListWithOptions($request, $runtime);
    }

    /**
     * @param QueryReadableResourcesListByUserIdRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryReadableResourcesListByUserIdResponse
     */
    public function queryReadableResourcesListByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryReadableResourcesListByUserId',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryReadableResourcesListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryReadableResourcesListByUserIdRequest $request
     *
     * @return QueryReadableResourcesListByUserIdResponse
     */
    public function queryReadableResourcesListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReadableResourcesListByUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryShareListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryShareListResponse
     */
    public function queryShareListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryShareList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryShareListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryShareListRequest $request
     *
     * @return QueryShareListResponse
     */
    public function queryShareList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShareListWithOptions($request, $runtime);
    }

    /**
     * @param QuerySharesToUserListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySharesToUserListResponse
     */
    public function querySharesToUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySharesToUserList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySharesToUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySharesToUserListRequest $request
     *
     * @return QuerySharesToUserListResponse
     */
    public function querySharesToUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySharesToUserListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTicketInfoResponse
     */
    public function queryTicketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTicketInfo',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTicketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTicketInfoRequest $request
     *
     * @return QueryTicketInfoResponse
     */
    public function queryTicketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserGroupListByParentIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryUserGroupListByParentIdResponse
     */
    public function queryUserGroupListByParentIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentUserGroupId)) {
            $query['ParentUserGroupId'] = $request->parentUserGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserGroupListByParentId',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserGroupListByParentIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserGroupListByParentIdRequest $request
     *
     * @return QueryUserGroupListByParentIdResponse
     */
    public function queryUserGroupListByParentId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserGroupListByParentIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserGroupMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserGroupMemberResponse
     */
    public function queryUserGroupMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserGroupMember',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserGroupMemberRequest $request
     *
     * @return QueryUserGroupMemberResponse
     */
    public function queryUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserInfoByAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryUserInfoByAccountResponse
     */
    public function queryUserInfoByAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserInfoByAccount',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserInfoByAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserInfoByAccountRequest $request
     *
     * @return QueryUserInfoByAccountResponse
     */
    public function queryUserInfoByAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserInfoByAccountWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserInfoByUserIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUserInfoByUserIdResponse
     */
    public function queryUserInfoByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserInfoByUserId',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserInfoByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserInfoByUserIdRequest $request
     *
     * @return QueryUserInfoByUserIdResponse
     */
    public function queryUserInfoByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserInfoByUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryUserListResponse
     */
    public function queryUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserListRequest $request
     *
     * @return QueryUserListResponse
     */
    public function queryUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserListWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserRoleInfoInWorkspaceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryUserRoleInfoInWorkspaceResponse
     */
    public function queryUserRoleInfoInWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserRoleInfoInWorkspace',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserRoleInfoInWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserRoleInfoInWorkspaceRequest $request
     *
     * @return QueryUserRoleInfoInWorkspaceResponse
     */
    public function queryUserRoleInfoInWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserRoleInfoInWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryUserTagMetaListResponse
     */
    public function queryUserTagMetaListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryUserTagMetaList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserTagMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryUserTagMetaListResponse
     */
    public function queryUserTagMetaList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserTagMetaListWithOptions($runtime);
    }

    /**
     * @param QueryUserTagValueListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUserTagValueListResponse
     */
    public function queryUserTagValueListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserTagValueList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserTagValueListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserTagValueListRequest $request
     *
     * @return QueryUserTagValueListResponse
     */
    public function queryUserTagValueList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserTagValueListWithOptions($request, $runtime);
    }

    /**
     * @param QueryWorksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryWorksResponse
     */
    public function queryWorksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWorks',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWorksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorksRequest $request
     *
     * @return QueryWorksResponse
     */
    public function queryWorks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksWithOptions($request, $runtime);
    }

    /**
     * @param QueryWorksBloodRelationshipRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryWorksBloodRelationshipResponse
     */
    public function queryWorksBloodRelationshipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWorksBloodRelationship',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWorksBloodRelationshipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorksBloodRelationshipRequest $request
     *
     * @return QueryWorksBloodRelationshipResponse
     */
    public function queryWorksBloodRelationship($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksBloodRelationshipWithOptions($request, $runtime);
    }

    /**
     * @param QueryWorksByOrganizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryWorksByOrganizationResponse
     */
    public function queryWorksByOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartAuthFlag)) {
            $query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }
        if (!Utils::isUnset($request->worksType)) {
            $query['WorksType'] = $request->worksType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWorksByOrganization',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWorksByOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorksByOrganizationRequest $request
     *
     * @return QueryWorksByOrganizationResponse
     */
    public function queryWorksByOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksByOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param QueryWorksByWorkspaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryWorksByWorkspaceResponse
     */
    public function queryWorksByWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdPartAuthFlag)) {
            $query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }
        if (!Utils::isUnset($request->worksType)) {
            $query['WorksType'] = $request->worksType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWorksByWorkspace',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWorksByWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorksByWorkspaceRequest $request
     *
     * @return QueryWorksByWorkspaceResponse
     */
    public function queryWorksByWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksByWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param QueryWorkspaceUserListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryWorkspaceUserListResponse
     */
    public function queryWorkspaceUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWorkspaceUserList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWorkspaceUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWorkspaceUserListRequest $request
     *
     * @return QueryWorkspaceUserListResponse
     */
    public function queryWorkspaceUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorkspaceUserListWithOptions($request, $runtime);
    }

    /**
     * @param ResultCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResultCallbackResponse
     */
    public function resultCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->handleReason)) {
            $query['HandleReason'] = $request->handleReason;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResultCallback',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResultCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResultCallbackRequest $request
     *
     * @return ResultCallbackResponse
     */
    public function resultCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resultCallbackWithOptions($request, $runtime);
    }

    /**
     * @param SaveFavoritesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SaveFavoritesResponse
     */
    public function saveFavoritesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveFavorites',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveFavoritesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveFavoritesRequest $request
     *
     * @return SaveFavoritesResponse
     */
    public function saveFavorites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveFavoritesWithOptions($request, $runtime);
    }

    /**
     * @param SetDataLevelPermissionExtraConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SetDataLevelPermissionExtraConfigResponse
     */
    public function setDataLevelPermissionExtraConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->missHitPolicy)) {
            $query['MissHitPolicy'] = $request->missHitPolicy;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataLevelPermissionExtraConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataLevelPermissionExtraConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataLevelPermissionExtraConfigRequest $request
     *
     * @return SetDataLevelPermissionExtraConfigResponse
     */
    public function setDataLevelPermissionExtraConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionExtraConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDataLevelPermissionRuleConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetDataLevelPermissionRuleConfigResponse
     */
    public function setDataLevelPermissionRuleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleModel)) {
            $query['RuleModel'] = $request->ruleModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataLevelPermissionRuleConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataLevelPermissionRuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataLevelPermissionRuleConfigRequest $request
     *
     * @return SetDataLevelPermissionRuleConfigResponse
     */
    public function setDataLevelPermissionRuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionRuleConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetDataLevelPermissionWhiteListResponse
     */
    public function setDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->whiteListModel)) {
            $query['WhiteListModel'] = $request->whiteListModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataLevelPermissionWhiteList',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataLevelPermissionWhiteListRequest $request
     *
     * @return SetDataLevelPermissionWhiteListResponse
     */
    public function setDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDataLevelPermissionStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateDataLevelPermissionStatusResponse
     */
    public function updateDataLevelPermissionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->isOpen)) {
            $query['IsOpen'] = $request->isOpen;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataLevelPermissionStatus',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDataLevelPermissionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDataLevelPermissionStatusRequest $request
     *
     * @return UpdateDataLevelPermissionStatusResponse
     */
    public function updateDataLevelPermissionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLevelPermissionStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEmbeddedStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEmbeddedStatusResponse
     */
    public function updateEmbeddedStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->thirdPartAuthFlag)) {
            $query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }
        if (!Utils::isUnset($request->worksId)) {
            $query['WorksId'] = $request->worksId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEmbeddedStatus',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEmbeddedStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEmbeddedStatusRequest $request
     *
     * @return UpdateEmbeddedStatusResponse
     */
    public function updateEmbeddedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEmbeddedStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTicketNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTicketNumResponse
     */
    public function updateTicketNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        if (!Utils::isUnset($request->ticketNum)) {
            $query['TicketNum'] = $request->ticketNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTicketNum',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTicketNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTicketNumRequest $request
     *
     * @return UpdateTicketNumResponse
     */
    public function updateTicketNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketNumWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adminUser)) {
            $query['AdminUser'] = $request->adminUser;
        }
        if (!Utils::isUnset($request->authAdminUser)) {
            $query['AuthAdminUser'] = $request->authAdminUser;
        }
        if (!Utils::isUnset($request->nickName)) {
            $query['NickName'] = $request->nickName;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userGroupDescription)) {
            $query['UserGroupDescription'] = $request->userGroupDescription;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserGroupRequest $request
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserTagMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateUserTagMetaResponse
     */
    public function updateUserTagMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagDescription)) {
            $query['TagDescription'] = $request->tagDescription;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserTagMeta',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserTagMetaRequest $request
     *
     * @return UpdateUserTagMetaResponse
     */
    public function updateUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserTagValueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateUserTagValueResponse
     */
    public function updateUserTagValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserTagValue',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserTagValueRequest $request
     *
     * @return UpdateUserTagValueResponse
     */
    public function updateUserTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserTagValueWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWorkspaceUserRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWorkspaceUserRoleResponse
     */
    public function updateWorkspaceUserRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceUserRole',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceUserRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceUserRoleRequest $request
     *
     * @return UpdateWorkspaceUserRoleResponse
     */
    public function updateWorkspaceUserRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceUserRoleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWorkspaceUsersRoleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateWorkspaceUsersRoleResponse
     */
    public function updateWorkspaceUsersRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceUsersRole',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceUsersRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceUsersRoleRequest $request
     *
     * @return UpdateWorkspaceUsersRoleResponse
     */
    public function updateWorkspaceUsersRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceUsersRoleWithOptions($request, $runtime);
    }

    /**
     * @param WithdrawAllUserGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return WithdrawAllUserGroupsResponse
     */
    public function withdrawAllUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WithdrawAllUserGroups',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WithdrawAllUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WithdrawAllUserGroupsRequest $request
     *
     * @return WithdrawAllUserGroupsResponse
     */
    public function withdrawAllUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawAllUserGroupsWithOptions($request, $runtime);
    }
}
