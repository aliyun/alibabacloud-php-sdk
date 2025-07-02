<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AllotDatasetAccelerationTaskRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AllotDatasetAccelerationTaskResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AuthorizeMenuRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\AuthorizeMenuResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponse;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicket4CopilotRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicket4CopilotResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateUserGroupRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\CreateUserGroupResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataInterpretationRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataInterpretationResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataSetBloodRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataSetBloodResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataSourceBloodRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\DataSourceBloodResponse;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetDataSourceConnectionInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetDataSourceConnectionInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetMailTaskStatusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetMailTaskStatusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetUserGroupInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetUserGroupInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListApiDatasourceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListApiDatasourceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListByUserGroupIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCollectionsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCollectionsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCubeDataLevelPermissionConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListCubeDataLevelPermissionConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataSourceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataSourceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListOrganizationRolesResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListOrganizationRoleUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListOrganizationRoleUsersResponse;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRolesRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRolesResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRoleUsersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListWorkspaceRoleUsersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ManualRunMailTaskRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ManualRunMailTaskResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ModifyApiDatasourceParametersRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ModifyApiDatasourceParametersResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ModifyCopilotEmbedConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ModifyCopilotEmbedConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryApprovalInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryApprovalInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryAuditLogRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryAuditLogResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryComponentPerformanceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryComponentPerformanceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubePerformanceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubePerformanceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRangeResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetDetailInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetDetailInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSmartqStatusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSmartqStatusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSwitchInfoRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetSwitchInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedStatusRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedStatusResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryLlmCubeWithThemeListByUserIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryLlmCubeWithThemeListByUserIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationRoleConfigResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReportPerformanceRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReportPerformanceResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryShareListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryShareListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySharesToUserListRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySharesToUserListResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySmartqPermissionByCubeIdRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QuerySmartqPermissionByCubeIdResponse;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceRoleConfigRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceRoleConfigResponse;
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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthorizeRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthorizeResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthTransferRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqAuthTransferResponse;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityRequest;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Add selected groups of people incrementally for a single row and column permission rule.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.\\n
     *
     * @param request - AddDataLevelPermissionRuleUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDataLevelPermissionRuleUsersResponse
     *
     * @param AddDataLevelPermissionRuleUsersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddDataLevelPermissionRuleUsersResponse
     */
    public function addDataLevelPermissionRuleUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addUserModel) {
            @$query['AddUserModel'] = $request->addUserModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDataLevelPermissionRuleUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDataLevelPermissionRuleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add selected groups of people incrementally for a single row and column permission rule.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.\\n
     *
     * @param request - AddDataLevelPermissionRuleUsersRequest
     *
     * @returns AddDataLevelPermissionRuleUsersResponse
     *
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
     * 43342***435,1553a****41231.
     *
     * @remarks
     * ROW_LEVEL
     *
     * @param request - AddDataLevelPermissionWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDataLevelPermissionWhiteListResponse
     *
     * @param AddDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddDataLevelPermissionWhiteListResponse
     */
    public function addDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->targetIds) {
            @$query['TargetIds'] = $request->targetIds;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDataLevelPermissionWhiteList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 43342***435,1553a****41231.
     *
     * @remarks
     * ROW_LEVEL
     *
     * @param request - AddDataLevelPermissionWhiteListRequest
     *
     * @returns AddDataLevelPermissionWhiteListResponse
     *
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
     * Add a sharing configuration for data works.
     *
     * @param request - AddShareReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddShareReportResponse
     *
     * @param AddShareReportRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddShareReportResponse
     */
    public function addShareReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPoint) {
            @$query['AuthPoint'] = $request->authPoint;
        }

        if (null !== $request->expireDate) {
            @$query['ExpireDate'] = $request->expireDate;
        }

        if (null !== $request->shareToId) {
            @$query['ShareToId'] = $request->shareToId;
        }

        if (null !== $request->shareToType) {
            @$query['ShareToType'] = $request->shareToType;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddShareReport',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddShareReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a sharing configuration for data works.
     *
     * @param request - AddShareReportRequest
     *
     * @returns AddShareReportResponse
     *
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
     * Add an organization member.
     *
     * @param request - AddUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserResponse
     *
     * @param AddUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->adminUser) {
            @$query['AdminUser'] = $request->adminUser;
        }

        if (null !== $request->authAdminUser) {
            @$query['AuthAdminUser'] = $request->authAdminUser;
        }

        if (null !== $request->nickName) {
            @$query['NickName'] = $request->nickName;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $body = [];
        if (null !== $request->roleIds) {
            @$body['RoleIds'] = $request->roleIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUser',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add an organization member.
     *
     * @param request - AddUserRequest
     *
     * @returns AddUserResponse
     *
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
     * Adds an organization member to a specified user group.
     *
     * @param request - AddUserGroupMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserGroupMemberResponse
     *
     * @param AddUserGroupMemberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddUserGroupMemberResponse
     */
    public function addUserGroupMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        if (null !== $request->userIdList) {
            @$query['UserIdList'] = $request->userIdList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserGroupMember',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an organization member to a specified user group.
     *
     * @param request - AddUserGroupMemberRequest
     *
     * @returns AddUserGroupMemberResponse
     *
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
     * Add users to a specified user group at a time.
     *
     * @param request - AddUserGroupMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserGroupMembersResponse
     *
     * @param AddUserGroupMembersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddUserGroupMembersResponse
     */
    public function addUserGroupMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserGroupMembers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add users to a specified user group at a time.
     *
     * @param request - AddUserGroupMembersRequest
     *
     * @returns AddUserGroupMembersResponse
     *
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
     * Add organization member tag metadata.
     *
     * @param request - AddUserTagMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserTagMetaResponse
     *
     * @param AddUserTagMetaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddUserTagMetaResponse
     */
    public function addUserTagMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagDescription) {
            @$query['TagDescription'] = $request->tagDescription;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserTagMeta',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add organization member tag metadata.
     *
     * @param request - AddUserTagMetaRequest
     *
     * @returns AddUserTagMetaResponse
     *
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
     * Add a member to the specified workspace.
     *
     * @param request - AddUserToWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToWorkspaceResponse
     *
     * @param AddUserToWorkspaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddUserToWorkspaceResponse
     */
    public function addUserToWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToWorkspace',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a member to the specified workspace.
     *
     * @param request - AddUserToWorkspaceRequest
     *
     * @returns AddUserToWorkspaceResponse
     *
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
     * Batch add members to the workspace.
     *
     * @param request - AddWorkspaceUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWorkspaceUsersResponse
     *
     * @param AddWorkspaceUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddWorkspaceUsersResponse
     */
    public function addWorkspaceUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddWorkspaceUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddWorkspaceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch add members to the workspace.
     *
     * @param request - AddWorkspaceUsersRequest
     *
     * @returns AddWorkspaceUsersResponse
     *
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
     * Trigger the collection acceleration of the Quick engine for datasets.
     *
     * @param request - AllotDatasetAccelerationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllotDatasetAccelerationTaskResponse
     *
     * @param AllotDatasetAccelerationTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AllotDatasetAccelerationTaskResponse
     */
    public function allotDatasetAccelerationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllotDatasetAccelerationTask',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllotDatasetAccelerationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Trigger the collection acceleration of the Quick engine for datasets.
     *
     * @param request - AllotDatasetAccelerationTaskRequest
     *
     * @returns AllotDatasetAccelerationTaskResponse
     *
     * @param AllotDatasetAccelerationTaskRequest $request
     *
     * @return AllotDatasetAccelerationTaskResponse
     */
    public function allotDatasetAccelerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allotDatasetAccelerationTaskWithOptions($request, $runtime);
    }

    /**
     * Batch authorization of BI portal menu will be skipped automatically.
     *
     * @param request - AuthorizeMenuRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeMenuResponse
     *
     * @param AuthorizeMenuRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AuthorizeMenuResponse
     */
    public function authorizeMenuWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPointsValue) {
            @$query['AuthPointsValue'] = $request->authPointsValue;
        }

        if (null !== $request->dataPortalId) {
            @$query['DataPortalId'] = $request->dataPortalId;
        }

        if (null !== $request->menuIds) {
            @$query['MenuIds'] = $request->menuIds;
        }

        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeMenu',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch authorization of BI portal menu will be skipped automatically.
     *
     * @param request - AuthorizeMenuRequest
     *
     * @returns AuthorizeMenuResponse
     *
     * @param AuthorizeMenuRequest $request
     *
     * @return AuthorizeMenuResponse
     */
    public function authorizeMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeMenuWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * 批量添加飞书用户。
     *
     * @deprecated OpenAPI BatchAddFeishuUsers is deprecated
     *
     * @param request - BatchAddFeishuUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddFeishuUsersResponse
     *
     * @param BatchAddFeishuUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchAddFeishuUsersResponse
     */
    public function batchAddFeishuUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feishuUsers) {
            @$query['FeishuUsers'] = $request->feishuUsers;
        }

        if (null !== $request->isAdmin) {
            @$query['IsAdmin'] = $request->isAdmin;
        }

        if (null !== $request->isAuthAdmin) {
            @$query['IsAuthAdmin'] = $request->isAuthAdmin;
        }

        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchAddFeishuUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchAddFeishuUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 批量添加飞书用户。
     *
     * @deprecated OpenAPI BatchAddFeishuUsers is deprecated
     *
     * @param request - BatchAddFeishuUsersRequest
     *
     * @returns BatchAddFeishuUsersResponse
     *
     * @param BatchAddFeishuUsersRequest $request
     *
     * @return BatchAddFeishuUsersResponse
     */
    public function batchAddFeishuUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddFeishuUsersWithOptions($request, $runtime);
    }

    /**
     * Cancel the authorization records for specified users and user groups based on the portal menu ID.
     *
     * @param request - CancelAuthorizationMenuRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAuthorizationMenuResponse
     *
     * @param CancelAuthorizationMenuRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelAuthorizationMenuResponse
     */
    public function cancelAuthorizationMenuWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPortalId) {
            @$query['DataPortalId'] = $request->dataPortalId;
        }

        if (null !== $request->menuIds) {
            @$query['MenuIds'] = $request->menuIds;
        }

        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAuthorizationMenu',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAuthorizationMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel the authorization records for specified users and user groups based on the portal menu ID.
     *
     * @param request - CancelAuthorizationMenuRequest
     *
     * @returns CancelAuthorizationMenuResponse
     *
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
     * Cancel the data works from the user\\"s collection.
     *
     * @param request - CancelCollectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCollectionResponse
     *
     * @param CancelCollectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelCollectionResponse
     */
    public function cancelCollectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCollection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel the data works from the user\\"s collection.
     *
     * @param request - CancelCollectionRequest
     *
     * @returns CancelCollectionResponse
     *
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
     * Delete a share authorization for a data work.
     *
     * @param request - CancelReportShareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelReportShareResponse
     *
     * @param CancelReportShareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelReportShareResponse
     */
    public function cancelReportShareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->shareToIds) {
            @$query['ShareToIds'] = $request->shareToIds;
        }

        if (null !== $request->shareToType) {
            @$query['ShareToType'] = $request->shareToType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelReportShare',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelReportShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a share authorization for a data work.
     *
     * @param request - CancelReportShareRequest
     *
     * @returns CancelReportShareResponse
     *
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
     * Modifies the visibility mode of the BI portal menu and whether the menu is only authorized to be visible.
     *
     * @param request - ChangeVisibilityModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeVisibilityModelResponse
     *
     * @param ChangeVisibilityModelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeVisibilityModelResponse
     */
    public function changeVisibilityModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPortalId) {
            @$query['DataPortalId'] = $request->dataPortalId;
        }

        if (null !== $request->menuIds) {
            @$query['MenuIds'] = $request->menuIds;
        }

        if (null !== $request->showOnlyWithAccess) {
            @$query['ShowOnlyWithAccess'] = $request->showOnlyWithAccess;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeVisibilityModel',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeVisibilityModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the visibility mode of the BI portal menu and whether the menu is only authorized to be visible.
     *
     * @param request - ChangeVisibilityModelRequest
     *
     * @returns ChangeVisibilityModelResponse
     *
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
     * Queries whether a user has permissions to view data works, such as dashboards and workbooks.
     *
     * @param request - CheckReadableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckReadableResponse
     *
     * @param CheckReadableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckReadableResponse
     */
    public function checkReadableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckReadable',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckReadableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a user has permissions to view data works, such as dashboards and workbooks.
     *
     * @param request - CheckReadableRequest
     *
     * @returns CheckReadableResponse
     *
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
     * Generate a ticket for third-party embedding.
     *
     * @remarks
     * For detailed usage, please refer to [Report Embedding Data Permission Control and Parameter Passing Security Enhancement Solution](https://help.aliyun.com/document_detail/391291.html).
     *
     * @param request - CreateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->cmptId) {
            @$query['CmptId'] = $request->cmptId;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->globalParam) {
            @$query['GlobalParam'] = $request->globalParam;
        }

        if (null !== $request->ticketNum) {
            @$query['TicketNum'] = $request->ticketNum;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->watermarkParam) {
            @$query['WatermarkParam'] = $request->watermarkParam;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate a ticket for third-party embedding.
     *
     * @remarks
     * For detailed usage, please refer to [Report Embedding Data Permission Control and Parameter Passing Security Enhancement Solution](https://help.aliyun.com/document_detail/391291.html).
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
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
     * Generate an embedding ticket for Smart Q.
     *
     * @param request - CreateTicket4CopilotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicket4CopilotResponse
     *
     * @param CreateTicket4CopilotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTicket4CopilotResponse
     */
    public function createTicket4CopilotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->copilotId) {
            @$query['CopilotId'] = $request->copilotId;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->ticketNum) {
            @$query['TicketNum'] = $request->ticketNum;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTicket4Copilot',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTicket4CopilotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate an embedding ticket for Smart Q.
     *
     * @param request - CreateTicket4CopilotRequest
     *
     * @returns CreateTicket4CopilotResponse
     *
     * @param CreateTicket4CopilotRequest $request
     *
     * @return CreateTicket4CopilotResponse
     */
    public function createTicket4Copilot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicket4CopilotWithOptions($request, $runtime);
    }

    /**
     * Create a user group. You can specify a parent user group.
     *
     * @param request - CreateUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserGroupResponse
     *
     * @param CreateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUserGroupResponse
     */
    public function createUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parentUserGroupId) {
            @$query['ParentUserGroupId'] = $request->parentUserGroupId;
        }

        if (null !== $request->userGroupDescription) {
            @$query['UserGroupDescription'] = $request->userGroupDescription;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        if (null !== $request->userGroupName) {
            @$query['UserGroupName'] = $request->userGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserGroup',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a user group. You can specify a parent user group.
     *
     * @param request - CreateUserGroupRequest
     *
     * @returns CreateUserGroupResponse
     *
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
     * 数据解读开放接口.
     *
     * @param request - DataInterpretationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DataInterpretationResponse
     *
     * @param DataInterpretationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DataInterpretationResponse
     */
    public function dataInterpretationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->promptForceOverride) {
            @$query['PromptForceOverride'] = $request->promptForceOverride;
        }

        if (null !== $request->userPrompt) {
            @$query['UserPrompt'] = $request->userPrompt;
        }

        if (null !== $request->userQuestion) {
            @$query['UserQuestion'] = $request->userQuestion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DataInterpretation',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DataInterpretationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据解读开放接口.
     *
     * @param request - DataInterpretationRequest
     *
     * @returns DataInterpretationResponse
     *
     * @param DataInterpretationRequest $request
     *
     * @return DataInterpretationResponse
     */
    public function dataInterpretation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataInterpretationWithOptions($request, $runtime);
    }

    /**
     * Query works information under the specified dataset.
     *
     * @param request - DataSetBloodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DataSetBloodResponse
     *
     * @param DataSetBloodRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DataSetBloodResponse
     */
    public function dataSetBloodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSetIds) {
            @$query['DataSetIds'] = $request->dataSetIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->worksType) {
            @$query['WorksType'] = $request->worksType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DataSetBlood',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DataSetBloodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query works information under the specified dataset.
     *
     * @param request - DataSetBloodRequest
     *
     * @returns DataSetBloodResponse
     *
     * @param DataSetBloodRequest $request
     *
     * @return DataSetBloodResponse
     */
    public function dataSetBlood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataSetBloodWithOptions($request, $runtime);
    }

    /**
     * Query dataset information under the specified data source.
     *
     * @param request - DataSourceBloodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DataSourceBloodResponse
     *
     * @param DataSourceBloodRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DataSourceBloodResponse
     */
    public function dataSourceBloodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceId) {
            @$query['DataSourceId'] = $request->dataSourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DataSourceBlood',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DataSourceBloodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query dataset information under the specified data source.
     *
     * @param request - DataSourceBloodRequest
     *
     * @returns DataSourceBloodResponse
     *
     * @param DataSourceBloodRequest $request
     *
     * @return DataSourceBloodResponse
     */
    public function dataSourceBlood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataSourceBloodWithOptions($request, $runtime);
    }

    /**
     * Update the expiration time of the ticket embedded in the report.
     *
     * @param request - DelayTicketExpireTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DelayTicketExpireTimeResponse
     *
     * @param DelayTicketExpireTimeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DelayTicketExpireTimeResponse
     */
    public function delayTicketExpireTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DelayTicketExpireTime',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelayTicketExpireTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the expiration time of the ticket embedded in the report.
     *
     * @param request - DelayTicketExpireTimeRequest
     *
     * @returns DelayTicketExpireTimeResponse
     *
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
     * { "ruleId": "a5bb24da- ***-a891683e14da", // The ID of the row-column permission rule. "cubeId": "7c7223ae- ***-3c744528014b", // The ID of the dataset. "delModel": { "userGroups": [ "0d5fb19b- ***-1248 fc27ca51", // Delete the user group ID of the user group. "3d2c23d4-***-f6390f325c2d" ], "users": [ "4334 ***358", // Delete the UserID of the user group. "Huang***3fa822" ] } }.
     *
     * @remarks
     * {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *
     * @param request - DeleteDataLevelPermissionRuleUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLevelPermissionRuleUsersResponse
     *
     * @param DeleteDataLevelPermissionRuleUsersRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteDataLevelPermissionRuleUsersResponse
     */
    public function deleteDataLevelPermissionRuleUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteUserModel) {
            @$query['DeleteUserModel'] = $request->deleteUserModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLevelPermissionRuleUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLevelPermissionRuleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * { "ruleId": "a5bb24da- ***-a891683e14da", // The ID of the row-column permission rule. "cubeId": "7c7223ae- ***-3c744528014b", // The ID of the dataset. "delModel": { "userGroups": [ "0d5fb19b- ***-1248 fc27ca51", // Delete the user group ID of the user group. "3d2c23d4-***-f6390f325c2d" ], "users": [ "4334 ***358", // Delete the UserID of the user group. "Huang***3fa822" ] } }.
     *
     * @remarks
     * {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *
     * @param request - DeleteDataLevelPermissionRuleUsersRequest
     *
     * @returns DeleteDataLevelPermissionRuleUsersResponse
     *
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
     * The ID of the request.
     *
     * @remarks
     * The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * @param request - DeleteDataLevelRuleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLevelRuleConfigResponse
     *
     * @param DeleteDataLevelRuleConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDataLevelRuleConfigResponse
     */
    public function deleteDataLevelRuleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLevelRuleConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLevelRuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *
     * @param request - DeleteDataLevelRuleConfigRequest
     *
     * @returns DeleteDataLevelRuleConfigResponse
     *
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
     * Delete Third-Party Embedded Ticket.
     *
     * @param request - DeleteTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTicketResponse
     *
     * @param DeleteTicketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteTicketResponse
     */
    public function deleteTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTicket',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Third-Party Embedded Ticket.
     *
     * @param request - DeleteTicketRequest
     *
     * @returns DeleteTicketResponse
     *
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
     * Delete the specified organization user.
     *
     * @param request - DeleteUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->transferUserId) {
            @$query['TransferUserId'] = $request->transferUserId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the specified organization user.
     *
     * @param request - DeleteUserRequest
     *
     * @returns DeleteUserResponse
     *
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
     * Delete a member from the specified workspace.
     *
     * @param request - DeleteUserFromWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserFromWorkspaceResponse
     *
     * @param DeleteUserFromWorkspaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteUserFromWorkspaceResponse
     */
    public function deleteUserFromWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserFromWorkspace',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserFromWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a member from the specified workspace.
     *
     * @param request - DeleteUserFromWorkspaceRequest
     *
     * @returns DeleteUserFromWorkspaceResponse
     *
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
     * Deletes a user group in an organization.
     *
     * @param request - DeleteUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserGroupResponse
     *
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserGroup',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user group in an organization.
     *
     * @param request - DeleteUserGroupRequest
     *
     * @returns DeleteUserGroupResponse
     *
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
     * Deletes a specified member from a specified user group.
     *
     * @param request - DeleteUserGroupMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserGroupMemberResponse
     *
     * @param DeleteUserGroupMemberRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteUserGroupMemberResponse
     */
    public function deleteUserGroupMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserGroupMember',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified member from a specified user group.
     *
     * @param request - DeleteUserGroupMemberRequest
     *
     * @returns DeleteUserGroupMemberResponse
     *
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
     * Batch remove specified users from user groups.
     *
     * @param request - DeleteUserGroupMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserGroupMembersResponse
     *
     * @param DeleteUserGroupMembersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserGroupMembersResponse
     */
    public function deleteUserGroupMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserGroupMembers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch remove specified users from user groups.
     *
     * @param request - DeleteUserGroupMembersRequest
     *
     * @returns DeleteUserGroupMembersResponse
     *
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
     * Deletes the tag metadata of an organization member.
     *
     * @param request - DeleteUserTagMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserTagMetaResponse
     *
     * @param DeleteUserTagMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteUserTagMetaResponse
     */
    public function deleteUserTagMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserTagMeta',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the tag metadata of an organization member.
     *
     * @param request - DeleteUserTagMetaRequest
     *
     * @returns DeleteUserTagMetaResponse
     *
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
     * Get Data Source Information.
     *
     * @param request - GetDataSourceConnectionInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataSourceConnectionInfoResponse
     *
     * @param GetDataSourceConnectionInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDataSourceConnectionInfoResponse
     */
    public function getDataSourceConnectionInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dsId) {
            @$query['DsId'] = $request->dsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataSourceConnectionInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataSourceConnectionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Data Source Information.
     *
     * @param request - GetDataSourceConnectionInfoRequest
     *
     * @returns GetDataSourceConnectionInfoResponse
     *
     * @param GetDataSourceConnectionInfoRequest $request
     *
     * @return GetDataSourceConnectionInfoResponse
     */
    public function getDataSourceConnectionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceConnectionInfoWithOptions($request, $runtime);
    }

    /**
     * Check the running status of mail tasks within an organization.
     *
     * @param request - GetMailTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMailTaskStatusResponse
     *
     * @param GetMailTaskStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMailTaskStatusResponse
     */
    public function getMailTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mailId) {
            @$query['MailId'] = $request->mailId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMailTaskStatus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMailTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check the running status of mail tasks within an organization.
     *
     * @param request - GetMailTaskStatusRequest
     *
     * @returns GetMailTaskStatusResponse
     *
     * @param GetMailTaskStatusRequest $request
     *
     * @return GetMailTaskStatusResponse
     */
    public function getMailTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMailTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Search for user group information based on the keyword of the user group name.
     *
     * @param request - GetUserGroupInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserGroupInfoResponse
     *
     * @param GetUserGroupInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserGroupInfoResponse
     */
    public function getUserGroupInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserGroupInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Search for user group information based on the keyword of the user group name.
     *
     * @param request - GetUserGroupInfoRequest
     *
     * @returns GetUserGroupInfoResponse
     *
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
     * Query the list of embedded reports.
     *
     * @param request - GetWorksEmbedListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorksEmbedListResponse
     *
     * @param GetWorksEmbedListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetWorksEmbedListResponse
     */
    public function getWorksEmbedListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->worksType) {
            @$query['WorksType'] = $request->worksType;
        }

        if (null !== $request->wsId) {
            @$query['WsId'] = $request->wsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorksEmbedList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorksEmbedListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of embedded reports.
     *
     * @param request - GetWorksEmbedListRequest
     *
     * @returns GetWorksEmbedListResponse
     *
     * @param GetWorksEmbedListRequest $request
     *
     * @return GetWorksEmbedListResponse
     */
    public function getWorksEmbedList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorksEmbedListWithOptions($request, $runtime);
    }

    /**
     * Queries API data sources.
     *
     * @remarks
     * For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *
     * @param request - ListApiDatasourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApiDatasourceResponse
     *
     * @param ListApiDatasourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListApiDatasourceResponse
     */
    public function listApiDatasourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApiDatasource',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApiDatasourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries API data sources.
     *
     * @remarks
     * For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *
     * @param request - ListApiDatasourceRequest
     *
     * @returns ListApiDatasourceResponse
     *
     * @param ListApiDatasourceRequest $request
     *
     * @return ListApiDatasourceResponse
     */
    public function listApiDatasource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiDatasourceWithOptions($request, $runtime);
    }

    /**
     * Queries user group information at a time by user group ID.
     *
     * @param request - ListByUserGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListByUserGroupIdResponse
     *
     * @param ListByUserGroupIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListByUserGroupIdResponse
     */
    public function listByUserGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListByUserGroupId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListByUserGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user group information at a time by user group ID.
     *
     * @param request - ListByUserGroupIdRequest
     *
     * @returns ListByUserGroupIdResponse
     *
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
     * The ID of the work.
     *
     * @param request - ListCollectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCollectionsResponse
     *
     * @param ListCollectionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCollectionsResponse
     */
    public function listCollectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCollections',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the work.
     *
     * @param request - ListCollectionsRequest
     *
     * @returns ListCollectionsResponse
     *
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
     * You can this operation to obtain a list of row and column permission configurations for a specified dataset.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *
     * @param request - ListCubeDataLevelPermissionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCubeDataLevelPermissionConfigResponse
     *
     * @param ListCubeDataLevelPermissionConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListCubeDataLevelPermissionConfigResponse
     */
    public function listCubeDataLevelPermissionConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCubeDataLevelPermissionConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCubeDataLevelPermissionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can this operation to obtain a list of row and column permission configurations for a specified dataset.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *
     * @param request - ListCubeDataLevelPermissionConfigRequest
     *
     * @returns ListCubeDataLevelPermissionConfigResponse
     *
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
     * Retrieve the whitelist for dataset row and column permissions based on the type of permission.
     *
     * @remarks
     * > This API only supports the new row and column permission model of Quick BI. If you are still using the old row and column permissions, please migrate to the new row and column permission model before calling this interface. To migrate to the new row and column permission model, follow these steps: In Organization Management -> Security Configuration -> Upgrade Row and Column Permissions, click **One-Click Upgrade** to upgrade to the new row-level permissions.
     *
     * @param request - ListDataLevelPermissionWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataLevelPermissionWhiteListResponse
     *
     * @param ListDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListDataLevelPermissionWhiteListResponse
     */
    public function listDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataLevelPermissionWhiteList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the whitelist for dataset row and column permissions based on the type of permission.
     *
     * @remarks
     * > This API only supports the new row and column permission model of Quick BI. If you are still using the old row and column permissions, please migrate to the new row and column permission model before calling this interface. To migrate to the new row and column permission model, follow these steps: In Organization Management -> Security Configuration -> Upgrade Row and Column Permissions, click **One-Click Upgrade** to upgrade to the new row-level permissions.
     *
     * @param request - ListDataLevelPermissionWhiteListRequest
     *
     * @returns ListDataLevelPermissionWhiteListResponse
     *
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
     * Query all data sources under the specified space.
     *
     * @param request - ListDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceResponse
     *
     * @param ListDataSourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataSourceResponse
     */
    public function listDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dsType) {
            @$query['DsType'] = $request->dsType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSource',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query all data sources under the specified space.
     *
     * @param request - ListDataSourceRequest
     *
     * @returns ListDataSourceResponse
     *
     * @param ListDataSourceRequest $request
     *
     * @return ListDataSourceResponse
     */
    public function listDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithOptions($request, $runtime);
    }

    /**
     * Overview.
     *
     * @param request - ListFavoriteReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFavoriteReportsResponse
     *
     * @param ListFavoriteReportsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFavoriteReportsResponse
     */
    public function listFavoriteReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->treeType) {
            @$query['TreeType'] = $request->treeType;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFavoriteReports',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFavoriteReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Overview.
     *
     * @param request - ListFavoriteReportsRequest
     *
     * @returns ListFavoriteReportsResponse
     *
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
     * Get user list under the specified organization role.
     *
     * @param request - ListOrganizationRoleUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationRoleUsersResponse
     *
     * @param ListOrganizationRoleUsersRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListOrganizationRoleUsersResponse
     */
    public function listOrganizationRoleUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationRoleUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get user list under the specified organization role.
     *
     * @param request - ListOrganizationRoleUsersRequest
     *
     * @returns ListOrganizationRoleUsersResponse
     *
     * @param ListOrganizationRoleUsersRequest $request
     *
     * @return ListOrganizationRoleUsersResponse
     */
    public function listOrganizationRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationRoleUsersWithOptions($request, $runtime);
    }

    /**
     * Retrieve the list of custom roles at the organization level.
     *
     * @param request - ListOrganizationRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationRolesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListOrganizationRolesResponse
     */
    public function listOrganizationRolesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListOrganizationRoles',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOrganizationRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of custom roles at the organization level.
     *
     * @returns ListOrganizationRolesResponse
     *
     * @return ListOrganizationRolesResponse
     */
    public function listOrganizationRoles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationRolesWithOptions($runtime);
    }

    /**
     * Obtains the list of authorization details for a BI portal menu.
     *
     * @param request - ListPortalMenuAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPortalMenuAuthorizationResponse
     *
     * @param ListPortalMenuAuthorizationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListPortalMenuAuthorizationResponse
     */
    public function listPortalMenuAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPortalId) {
            @$query['DataPortalId'] = $request->dataPortalId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPortalMenuAuthorization',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPortalMenuAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the list of authorization details for a BI portal menu.
     *
     * @param request - ListPortalMenuAuthorizationRequest
     *
     * @returns ListPortalMenuAuthorizationResponse
     *
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
     * Gets a hierarchical list of menus under a specific BI portal.
     *
     * @param request - ListPortalMenusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPortalMenusResponse
     *
     * @param ListPortalMenusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPortalMenusResponse
     */
    public function listPortalMenusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPortalId) {
            @$query['DataPortalId'] = $request->dataPortalId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPortalMenus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPortalMenusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets a hierarchical list of menus under a specific BI portal.
     *
     * @param request - ListPortalMenusRequest
     *
     * @returns ListPortalMenusResponse
     *
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
     * You can call this operation to obtain a list of the most frequently viewed and footsteps displayed in the homepage dashboard for a specified user.
     *
     * @param request - ListRecentViewReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecentViewReportsResponse
     *
     * @param ListRecentViewReportsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRecentViewReportsResponse
     */
    public function listRecentViewReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->offsetDay) {
            @$query['OffsetDay'] = $request->offsetDay;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryMode) {
            @$query['QueryMode'] = $request->queryMode;
        }

        if (null !== $request->treeType) {
            @$query['TreeType'] = $request->treeType;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecentViewReports',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecentViewReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to obtain a list of the most frequently viewed and footsteps displayed in the homepage dashboard for a specified user.
     *
     * @param request - ListRecentViewReportsRequest
     *
     * @returns ListRecentViewReportsResponse
     *
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
     * You can this operation to obtain the list of authorized works displayed on the homepage of a specified user.
     *
     * @param request - ListSharedReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSharedReportsResponse
     *
     * @param ListSharedReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSharedReportsResponse
     */
    public function listSharedReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->treeType) {
            @$query['TreeType'] = $request->treeType;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSharedReports',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSharedReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can this operation to obtain the list of authorized works displayed on the homepage of a specified user.
     *
     * @param request - ListSharedReportsRequest
     *
     * @returns ListSharedReportsResponse
     *
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
     * Queries all user groups to which a user belongs based on the user ID.
     *
     * @param request - ListUserGroupsByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserGroupsByUserIdResponse
     *
     * @param ListUserGroupsByUserIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserGroupsByUserIdResponse
     */
    public function listUserGroupsByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserGroupsByUserId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserGroupsByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all user groups to which a user belongs based on the user ID.
     *
     * @param request - ListUserGroupsByUserIdRequest
     *
     * @returns ListUserGroupsByUserIdResponse
     *
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
     * Get user list under the specified workspace role.
     *
     * @param request - ListWorkspaceRoleUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspaceRoleUsersResponse
     *
     * @param ListWorkspaceRoleUsersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListWorkspaceRoleUsersResponse
     */
    public function listWorkspaceRoleUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaceRoleUsers',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkspaceRoleUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get user list under the specified workspace role.
     *
     * @param request - ListWorkspaceRoleUsersRequest
     *
     * @returns ListWorkspaceRoleUsersResponse
     *
     * @param ListWorkspaceRoleUsersRequest $request
     *
     * @return ListWorkspaceRoleUsersResponse
     */
    public function listWorkspaceRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspaceRoleUsersWithOptions($request, $runtime);
    }

    /**
     * Get the list of workspace roles.
     *
     * @param request - ListWorkspaceRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspaceRolesResponse
     *
     * @param ListWorkspaceRolesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListWorkspaceRolesResponse
     */
    public function listWorkspaceRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaceRoles',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkspaceRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of workspace roles.
     *
     * @param request - ListWorkspaceRolesRequest
     *
     * @returns ListWorkspaceRolesResponse
     *
     * @param ListWorkspaceRolesRequest $request
     *
     * @return ListWorkspaceRolesResponse
     */
    public function listWorkspaceRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspaceRolesWithOptions($request, $runtime);
    }

    /**
     * Manually Execute Email Task.
     *
     * @param request - ManualRunMailTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManualRunMailTaskResponse
     *
     * @param ManualRunMailTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ManualRunMailTaskResponse
     */
    public function manualRunMailTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mailId) {
            @$query['MailId'] = $request->mailId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ManualRunMailTask',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManualRunMailTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually Execute Email Task.
     *
     * @param request - ManualRunMailTaskRequest
     *
     * @returns ManualRunMailTaskResponse
     *
     * @param ManualRunMailTaskRequest $request
     *
     * @return ManualRunMailTaskResponse
     */
    public function manualRunMailTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualRunMailTaskWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a specified API data source.
     *
     * @remarks
     * When you modify a query statement, you can modify only the top-level JsonObject. You cannot modify parameters that are nested in multiple layers. For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *
     * @param request - ModifyApiDatasourceParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApiDatasourceParametersResponse
     *
     * @param ModifyApiDatasourceParametersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyApiDatasourceParametersResponse
     */
    public function modifyApiDatasourceParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyApiDatasourceParameters',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApiDatasourceParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a specified API data source.
     *
     * @remarks
     * When you modify a query statement, you can modify only the top-level JsonObject. You cannot modify parameters that are nested in multiple layers. For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *
     * @param request - ModifyApiDatasourceParametersRequest
     *
     * @returns ModifyApiDatasourceParametersResponse
     *
     * @param ModifyApiDatasourceParametersRequest $request
     *
     * @return ModifyApiDatasourceParametersResponse
     */
    public function modifyApiDatasourceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiDatasourceParametersWithOptions($request, $runtime);
    }

    /**
     * Modify Intelligent Query Embedding Configuration.
     *
     * @param request - ModifyCopilotEmbedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCopilotEmbedConfigResponse
     *
     * @param ModifyCopilotEmbedConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyCopilotEmbedConfigResponse
     */
    public function modifyCopilotEmbedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->copilotId) {
            @$query['CopilotId'] = $request->copilotId;
        }

        if (null !== $request->dataRange) {
            @$query['DataRange'] = $request->dataRange;
        }

        if (null !== $request->moduleName) {
            @$query['ModuleName'] = $request->moduleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCopilotEmbedConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCopilotEmbedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Intelligent Query Embedding Configuration.
     *
     * @param request - ModifyCopilotEmbedConfigRequest
     *
     * @returns ModifyCopilotEmbedConfigResponse
     *
     * @param ModifyCopilotEmbedConfigRequest $request
     *
     * @return ModifyCopilotEmbedConfigResponse
     */
    public function modifyCopilotEmbedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCopilotEmbedConfigWithOptions($request, $runtime);
    }

    /**
     * Get approval flow information based on the approver.
     *
     * @param request - QueryApprovalInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApprovalInfoResponse
     *
     * @param QueryApprovalInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryApprovalInfoResponse
     */
    public function queryApprovalInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryApprovalInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryApprovalInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get approval flow information based on the approver.
     *
     * @param request - QueryApprovalInfoRequest
     *
     * @returns QueryApprovalInfoResponse
     *
     * @param QueryApprovalInfoRequest $request
     *
     * @return QueryApprovalInfoResponse
     */
    public function queryApprovalInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryApprovalInfoWithOptions($request, $runtime);
    }

    /**
     * Query audit log information.
     *
     * @param request - QueryAuditLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuditLogResponse
     *
     * @param QueryAuditLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAuditLogResponse
     */
    public function queryAuditLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessSourceFlag) {
            @$query['AccessSourceFlag'] = $request->accessSourceFlag;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->operatorId) {
            @$query['OperatorId'] = $request->operatorId;
        }

        if (null !== $request->operatorTypes) {
            @$query['OperatorTypes'] = $request->operatorTypes;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->userAccessDevice) {
            @$query['UserAccessDevice'] = $request->userAccessDevice;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAuditLog',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query audit log information.
     *
     * @param request - QueryAuditLogRequest
     *
     * @returns QueryAuditLogResponse
     *
     * @param QueryAuditLogRequest $request
     *
     * @return QueryAuditLogResponse
     */
    public function queryAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuditLogWithOptions($request, $runtime);
    }

    /**
     * Queries component performance logs.
     *
     * @param request - QueryComponentPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryComponentPerformanceResponse
     *
     * @param QueryComponentPerformanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryComponentPerformanceResponse
     */
    public function queryComponentPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->costTimeAvgMin) {
            @$query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryComponentPerformance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryComponentPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries component performance logs.
     *
     * @param request - QueryComponentPerformanceRequest
     *
     * @returns QueryComponentPerformanceResponse
     *
     * @param QueryComponentPerformanceRequest $request
     *
     * @return QueryComponentPerformanceResponse
     */
    public function queryComponentPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryComponentPerformanceWithOptions($request, $runtime);
    }

    /**
     * Get the List of Configurations for Activating XiaoQ Embedding.
     *
     * @param request - QueryCopilotEmbedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCopilotEmbedConfigResponse
     *
     * @param QueryCopilotEmbedConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCopilotEmbedConfigResponse
     */
    public function queryCopilotEmbedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCopilotEmbedConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCopilotEmbedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the List of Configurations for Activating XiaoQ Embedding.
     *
     * @param request - QueryCopilotEmbedConfigRequest
     *
     * @returns QueryCopilotEmbedConfigResponse
     *
     * @param QueryCopilotEmbedConfigRequest $request
     *
     * @return QueryCopilotEmbedConfigResponse
     */
    public function queryCopilotEmbedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopilotEmbedConfigWithOptions($request, $runtime);
    }

    /**
     * Queries dataset optimization suggestions.
     *
     * @param request - QueryCubeOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCubeOptimizationResponse
     *
     * @param QueryCubeOptimizationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCubeOptimizationResponse
     */
    public function queryCubeOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCubeOptimization',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCubeOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries dataset optimization suggestions.
     *
     * @param request - QueryCubeOptimizationRequest
     *
     * @returns QueryCubeOptimizationResponse
     *
     * @param QueryCubeOptimizationRequest $request
     *
     * @return QueryCubeOptimizationResponse
     */
    public function queryCubeOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCubeOptimizationWithOptions($request, $runtime);
    }

    /**
     * Queries the performance logs of a dataset.
     *
     * @param request - QueryCubePerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCubePerformanceResponse
     *
     * @param QueryCubePerformanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCubePerformanceResponse
     */
    public function queryCubePerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->costTimeAvgMin) {
            @$query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }

        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCubePerformance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCubePerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the performance logs of a dataset.
     *
     * @param request - QueryCubePerformanceRequest
     *
     * @returns QueryCubePerformanceResponse
     *
     * @param QueryCubePerformanceRequest $request
     *
     * @return QueryCubePerformanceResponse
     */
    public function queryCubePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCubePerformanceWithOptions($request, $runtime);
    }

    /**
     * Invoke the open data service API.
     *
     * @remarks
     * ### Prerequisites
     * You need to create a data service API through Quick BI\\"s data service. For more details, see: [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * ### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call will also be intercepted by the row-level permission policy.
     *
     * @param request - QueryDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDataResponse
     *
     * @param QueryDataRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryDataResponse
     */
    public function queryDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->conditions) {
            @$query['Conditions'] = $request->conditions;
        }

        if (null !== $request->returnFields) {
            @$query['ReturnFields'] = $request->returnFields;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryData',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the open data service API.
     *
     * @remarks
     * ### Prerequisites
     * You need to create a data service API through Quick BI\\"s data service. For more details, see: [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * ### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call will also be intercepted by the row-level permission policy.
     *
     * @param request - QueryDataRequest
     *
     * @returns QueryDataResponse
     *
     * @param QueryDataRequest $request
     *
     * @return QueryDataResponse
     */
    public function queryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataWithOptions($request, $runtime);
    }

    /**
     * Get Data Range Catalog List.
     *
     * @param request - QueryDataRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDataRangeResponse
     *
     * @param QueryDataRangeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryDataRangeResponse
     */
    public function queryDataRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDataRange',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDataRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Data Range Catalog List.
     *
     * @param request - QueryDataRangeRequest
     *
     * @returns QueryDataRangeResponse
     *
     * @param QueryDataRangeRequest $request
     *
     * @return QueryDataRangeResponse
     */
    public function queryDataRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataRangeWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Invoke an already created API in the data service.
     *
     * @remarks
     * #### Prerequisites
     * You create the data service API through Quick BI\\"s data service. For more details, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * #### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call may be intercepted by the row-level permission policy.
     *
     * @deprecated openAPI QueryDataService is deprecated, please use quickbi-public::2022-01-01::QueryData instead
     *
     * @param request - QueryDataServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDataServiceResponse
     *
     * @param QueryDataServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDataServiceResponse
     */
    public function queryDataServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiId) {
            @$query['ApiId'] = $request->apiId;
        }

        if (null !== $request->conditions) {
            @$query['Conditions'] = $request->conditions;
        }

        if (null !== $request->returnFields) {
            @$query['ReturnFields'] = $request->returnFields;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDataService',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDataServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Invoke an already created API in the data service.
     *
     * @remarks
     * #### Prerequisites
     * You create the data service API through Quick BI\\"s data service. For more details, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * #### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call may be intercepted by the row-level permission policy.
     *
     * @deprecated openAPI QueryDataService is deprecated, please use quickbi-public::2022-01-01::QueryData instead
     *
     * @param request - QueryDataServiceRequest
     *
     * @returns QueryDataServiceResponse
     *
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
     * Query Data Service API List.
     *
     * @param request - QueryDataServiceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDataServiceListResponse
     *
     * @param QueryDataServiceListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryDataServiceListResponse
     */
    public function queryDataServiceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDataServiceList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDataServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Data Service API List.
     *
     * @param request - QueryDataServiceListRequest
     *
     * @returns QueryDataServiceListResponse
     *
     * @param QueryDataServiceListRequest $request
     *
     * @return QueryDataServiceListResponse
     */
    public function queryDataServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataServiceListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified dataset, including the data source, directory, and dataset model.
     *
     * @remarks
     * The data source, directory, and dataset model (including dimensions, measures, physical fields, custom SQL text, and association relationships).
     *
     * @param request - QueryDatasetDetailInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDatasetDetailInfoResponse
     *
     * @param QueryDatasetDetailInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDatasetDetailInfoResponse
     */
    public function queryDatasetDetailInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDatasetDetailInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDatasetDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified dataset, including the data source, directory, and dataset model.
     *
     * @remarks
     * The data source, directory, and dataset model (including dimensions, measures, physical fields, custom SQL text, and association relationships).
     *
     * @param request - QueryDatasetDetailInfoRequest
     *
     * @returns QueryDatasetDetailInfoResponse
     *
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
     * Indicates whether the table is a custom SQL table. Valid values:
     * \\*   true: custom SQL table
     * \\*   false: non-custom SQL table
     *
     * @param request - QueryDatasetInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDatasetInfoResponse
     *
     * @param QueryDatasetInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDatasetInfoResponse
     */
    public function queryDatasetInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetId) {
            @$query['DatasetId'] = $request->datasetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDatasetInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDatasetInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the table is a custom SQL table. Valid values:
     * \\*   true: custom SQL table
     * \\*   false: non-custom SQL table
     *
     * @param request - QueryDatasetInfoRequest
     *
     * @returns QueryDatasetInfoResponse
     *
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
     * The name of the training dataset.
     *
     * @param request - QueryDatasetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDatasetListResponse
     *
     * @param QueryDatasetListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDatasetListResponse
     */
    public function queryDatasetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->withChildren) {
            @$query['WithChildren'] = $request->withChildren;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDatasetList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDatasetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The name of the training dataset.
     *
     * @param request - QueryDatasetListRequest
     *
     * @returns QueryDatasetListResponse
     *
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
     * Check if the Dataset has Enabled Smart Query.
     *
     * @param request - QueryDatasetSmartqStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDatasetSmartqStatusResponse
     *
     * @param QueryDatasetSmartqStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDatasetSmartqStatusResponse
     */
    public function queryDatasetSmartqStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDatasetSmartqStatus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDatasetSmartqStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if the Dataset has Enabled Smart Query.
     *
     * @param request - QueryDatasetSmartqStatusRequest
     *
     * @returns QueryDatasetSmartqStatusResponse
     *
     * @param QueryDatasetSmartqStatusRequest $request
     *
     * @return QueryDatasetSmartqStatusResponse
     */
    public function queryDatasetSmartqStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetSmartqStatusWithOptions($request, $runtime);
    }

    /**
     * 获取指定数据集的行级权限开关状态。
     *
     * @param request - QueryDatasetSwitchInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDatasetSwitchInfoResponse
     *
     * @param QueryDatasetSwitchInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDatasetSwitchInfoResponse
     */
    public function queryDatasetSwitchInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDatasetSwitchInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDatasetSwitchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定数据集的行级权限开关状态。
     *
     * @param request - QueryDatasetSwitchInfoRequest
     *
     * @returns QueryDatasetSwitchInfoResponse
     *
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
     * Obtain the embedding configuration in the organization, including the maximum number of embeddings and the number of embeddings.
     *
     * @param request - QueryEmbeddedInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEmbeddedInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryEmbeddedInfoResponse
     */
    public function queryEmbeddedInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryEmbeddedInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEmbeddedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the embedding configuration in the organization, including the maximum number of embeddings and the number of embeddings.
     *
     * @returns QueryEmbeddedInfoResponse
     *
     * @return QueryEmbeddedInfoResponse
     */
    public function queryEmbeddedInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmbeddedInfoWithOptions($runtime);
    }

    /**
     * Queries whether embedding is enabled for a report.
     *
     * @param request - QueryEmbeddedStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEmbeddedStatusResponse
     *
     * @param QueryEmbeddedStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryEmbeddedStatusResponse
     */
    public function queryEmbeddedStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEmbeddedStatus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEmbeddedStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether embedding is enabled for a report.
     *
     * @param request - QueryEmbeddedStatusRequest
     *
     * @returns QueryEmbeddedStatusResponse
     *
     * @param QueryEmbeddedStatusRequest $request
     *
     * @return QueryEmbeddedStatusResponse
     */
    public function queryEmbeddedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmbeddedStatusWithOptions($request, $runtime);
    }

    /**
     * Check which datasets and analysis themes the user has question authorization for.
     *
     * @param request - QueryLlmCubeWithThemeListByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLlmCubeWithThemeListByUserIdResponse
     *
     * @param QueryLlmCubeWithThemeListByUserIdRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryLlmCubeWithThemeListByUserIdResponse
     */
    public function queryLlmCubeWithThemeListByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryLlmCubeWithThemeListByUserId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLlmCubeWithThemeListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check which datasets and analysis themes the user has question authorization for.
     *
     * @param request - QueryLlmCubeWithThemeListByUserIdRequest
     *
     * @returns QueryLlmCubeWithThemeListByUserIdResponse
     *
     * @param QueryLlmCubeWithThemeListByUserIdRequest $request
     *
     * @return QueryLlmCubeWithThemeListByUserIdResponse
     */
    public function queryLlmCubeWithThemeListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLlmCubeWithThemeListByUserIdWithOptions($request, $runtime);
    }

    /**
     * Gets the configuration of the specified organization role.
     *
     * @param request - QueryOrganizationRoleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrganizationRoleConfigResponse
     *
     * @param QueryOrganizationRoleConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOrganizationRoleConfigResponse
     */
    public function queryOrganizationRoleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOrganizationRoleConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrganizationRoleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the configuration of the specified organization role.
     *
     * @param request - QueryOrganizationRoleConfigRequest
     *
     * @returns QueryOrganizationRoleConfigResponse
     *
     * @param QueryOrganizationRoleConfigRequest $request
     *
     * @return QueryOrganizationRoleConfigResponse
     */
    public function queryOrganizationRoleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrganizationRoleConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieve the list of workspaces under the current organization.
     *
     * @param request - QueryOrganizationWorkspaceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrganizationWorkspaceListResponse
     *
     * @param QueryOrganizationWorkspaceListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryOrganizationWorkspaceListResponse
     */
    public function queryOrganizationWorkspaceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOrganizationWorkspaceList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrganizationWorkspaceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of workspaces under the current organization.
     *
     * @param request - QueryOrganizationWorkspaceListRequest
     *
     * @returns QueryOrganizationWorkspaceListResponse
     *
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
     * Queries the list of works that a user has the permission to view, including the statements that are authorized to share in a space.
     *
     * @param request - QueryReadableResourcesListByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReadableResourcesListByUserIdResponse
     *
     * @param QueryReadableResourcesListByUserIdRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryReadableResourcesListByUserIdResponse
     */
    public function queryReadableResourcesListByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReadableResourcesListByUserId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReadableResourcesListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of works that a user has the permission to view, including the statements that are authorized to share in a space.
     *
     * @param request - QueryReadableResourcesListByUserIdRequest
     *
     * @returns QueryReadableResourcesListByUserIdResponse
     *
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
     * Queries report performance logs.
     *
     * @param request - QueryReportPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReportPerformanceResponse
     *
     * @param QueryReportPerformanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryReportPerformanceResponse
     */
    public function queryReportPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->costTimeAvgMin) {
            @$query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReportPerformance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReportPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries report performance logs.
     *
     * @param request - QueryReportPerformanceRequest
     *
     * @returns QueryReportPerformanceResponse
     *
     * @param QueryReportPerformanceRequest $request
     *
     * @return QueryReportPerformanceResponse
     */
    public function queryReportPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReportPerformanceWithOptions($request, $runtime);
    }

    /**
     * Query the list of objects to which a work has been shared, returning only the sharing configurations that are still within their validity period.
     *
     * @param request - QueryShareListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryShareListResponse
     *
     * @param QueryShareListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryShareListResponse
     */
    public function queryShareListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryShareList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryShareListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of objects to which a work has been shared, returning only the sharing configurations that are still within their validity period.
     *
     * @param request - QueryShareListRequest
     *
     * @returns QueryShareListResponse
     *
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
     * You can call this operation to query the list of works authorized to a user.
     *
     * @param request - QuerySharesToUserListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySharesToUserListResponse
     *
     * @param QuerySharesToUserListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySharesToUserListResponse
     */
    public function querySharesToUserListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySharesToUserList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySharesToUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the list of works authorized to a user.
     *
     * @param request - QuerySharesToUserListRequest
     *
     * @returns QuerySharesToUserListResponse
     *
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
     * Check if a user has permission for a specific smart question dataset.
     *
     * @param request - QuerySmartqPermissionByCubeIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmartqPermissionByCubeIdResponse
     *
     * @param QuerySmartqPermissionByCubeIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QuerySmartqPermissionByCubeIdResponse
     */
    public function querySmartqPermissionByCubeIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmartqPermissionByCubeId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmartqPermissionByCubeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check if a user has permission for a specific smart question dataset.
     *
     * @param request - QuerySmartqPermissionByCubeIdRequest
     *
     * @returns QuerySmartqPermissionByCubeIdResponse
     *
     * @param QuerySmartqPermissionByCubeIdRequest $request
     *
     * @return QuerySmartqPermissionByCubeIdResponse
     */
    public function querySmartqPermissionByCubeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmartqPermissionByCubeIdWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of a specified ticket for a report that is not embedded in the report.
     *
     * @param request - QueryTicketInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTicketInfoResponse
     *
     * @param QueryTicketInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTicketInfoResponse
     */
    public function queryTicketInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTicketInfo',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTicketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a specified ticket for a report that is not embedded in the report.
     *
     * @param request - QueryTicketInfoRequest
     *
     * @returns QueryTicketInfoResponse
     *
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
     * You can this operation to obtain information about child user groups under a specified parent user group.
     *
     * @param request - QueryUserGroupListByParentIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserGroupListByParentIdResponse
     *
     * @param QueryUserGroupListByParentIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryUserGroupListByParentIdResponse
     */
    public function queryUserGroupListByParentIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parentUserGroupId) {
            @$query['ParentUserGroupId'] = $request->parentUserGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserGroupListByParentId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserGroupListByParentIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can this operation to obtain information about child user groups under a specified parent user group.
     *
     * @param request - QueryUserGroupListByParentIdRequest
     *
     * @returns QueryUserGroupListByParentIdResponse
     *
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
     * Retrieve the list of members under a user group.
     *
     * @param request - QueryUserGroupMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserGroupMemberResponse
     *
     * @param QueryUserGroupMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserGroupMemberResponse
     */
    public function queryUserGroupMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserGroupMember',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of members under a user group.
     *
     * @param request - QueryUserGroupMemberRequest
     *
     * @returns QueryUserGroupMemberResponse
     *
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
     * Queries user information based on the Alibaba Cloud ID or Alibaba Cloud account name.
     *
     * @param request - QueryUserInfoByAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserInfoByAccountResponse
     *
     * @param QueryUserInfoByAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryUserInfoByAccountResponse
     */
    public function queryUserInfoByAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->parentAccountName) {
            @$query['ParentAccountName'] = $request->parentAccountName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserInfoByAccount',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserInfoByAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user information based on the Alibaba Cloud ID or Alibaba Cloud account name.
     *
     * @param request - QueryUserInfoByAccountRequest
     *
     * @returns QueryUserInfoByAccountResponse
     *
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
     * Queries user information based on the user ID.
     *
     * @param request - QueryUserInfoByUserIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserInfoByUserIdResponse
     *
     * @param QueryUserInfoByUserIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUserInfoByUserIdResponse
     */
    public function queryUserInfoByUserIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserInfoByUserId',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserInfoByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user information based on the user ID.
     *
     * @param request - QueryUserInfoByUserIdRequest
     *
     * @returns QueryUserInfoByUserIdResponse
     *
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
     * Queries the members of an organization.
     *
     * @param request - QueryUserListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserListResponse
     *
     * @param QueryUserListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryUserListResponse
     */
    public function queryUserListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the members of an organization.
     *
     * @param request - QueryUserListRequest
     *
     * @returns QueryUserListResponse
     *
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
     * Get the preset workspace role information for a specified workspace member.
     *
     * @param request - QueryUserRoleInfoInWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserRoleInfoInWorkspaceResponse
     *
     * @param QueryUserRoleInfoInWorkspaceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryUserRoleInfoInWorkspaceResponse
     */
    public function queryUserRoleInfoInWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserRoleInfoInWorkspace',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserRoleInfoInWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the preset workspace role information for a specified workspace member.
     *
     * @param request - QueryUserRoleInfoInWorkspaceRequest
     *
     * @returns QueryUserRoleInfoInWorkspaceResponse
     *
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
     * Queries the metadata list of member tags in an organization.
     *
     * @param request - QueryUserTagMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserTagMetaListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryUserTagMetaListResponse
     */
    public function queryUserTagMetaListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryUserTagMetaList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserTagMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metadata list of member tags in an organization.
     *
     * @returns QueryUserTagMetaListResponse
     *
     * @return QueryUserTagMetaListResponse
     */
    public function queryUserTagMetaList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserTagMetaListWithOptions($runtime);
    }

    /**
     * Query the list of specific user tag values.
     *
     * @param request - QueryUserTagValueListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserTagValueListResponse
     *
     * @param QueryUserTagValueListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUserTagValueListResponse
     */
    public function queryUserTagValueListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserTagValueList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserTagValueListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of specific user tag values.
     *
     * @param request - QueryUserTagValueListRequest
     *
     * @returns QueryUserTagValueListResponse
     *
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
     * Queries information about a specified data work.
     *
     * @param request - QueryWorksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorksResponse
     *
     * @param QueryWorksRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryWorksResponse
     */
    public function queryWorksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorks',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a specified data work.
     *
     * @param request - QueryWorksRequest
     *
     * @returns QueryWorksResponse
     *
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
     * Obtains the kinship of a data work, including the datasets referenced by each component and query field information. Currently, only supported data works include dashboards, workbooks, and self-service data retrieval.
     *
     * @param request - QueryWorksBloodRelationshipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorksBloodRelationshipResponse
     *
     * @param QueryWorksBloodRelationshipRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryWorksBloodRelationshipResponse
     */
    public function queryWorksBloodRelationshipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorksBloodRelationship',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorksBloodRelationshipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the kinship of a data work, including the datasets referenced by each component and query field information. Currently, only supported data works include dashboards, workbooks, and self-service data retrieval.
     *
     * @param request - QueryWorksBloodRelationshipRequest
     *
     * @returns QueryWorksBloodRelationshipResponse
     *
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
     * Query all works under the entire organization, with the option to specify the type of work.
     *
     * @param request - QueryWorksByOrganizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorksByOrganizationResponse
     *
     * @param QueryWorksByOrganizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryWorksByOrganizationResponse
     */
    public function queryWorksByOrganizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->thirdPartAuthFlag) {
            @$query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }

        if (null !== $request->worksType) {
            @$query['WorksType'] = $request->worksType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorksByOrganization',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorksByOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query all works under the entire organization, with the option to specify the type of work.
     *
     * @param request - QueryWorksByOrganizationRequest
     *
     * @returns QueryWorksByOrganizationResponse
     *
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
     * Queries all works in a workspace under an organization. You can specify the type of work.
     *
     * @param request - QueryWorksByWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorksByWorkspaceResponse
     *
     * @param QueryWorksByWorkspaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryWorksByWorkspaceResponse
     */
    public function queryWorksByWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->thirdPartAuthFlag) {
            @$query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }

        if (null !== $request->worksType) {
            @$query['WorksType'] = $request->worksType;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorksByWorkspace',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorksByWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all works in a workspace under an organization. You can specify the type of work.
     *
     * @param request - QueryWorksByWorkspaceRequest
     *
     * @returns QueryWorksByWorkspaceResponse
     *
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
     * Get Configuration Information for a Specified Workspace Role.
     *
     * @param request - QueryWorkspaceRoleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorkspaceRoleConfigResponse
     *
     * @param QueryWorkspaceRoleConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryWorkspaceRoleConfigResponse
     */
    public function queryWorkspaceRoleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorkspaceRoleConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorkspaceRoleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Configuration Information for a Specified Workspace Role.
     *
     * @param request - QueryWorkspaceRoleConfigRequest
     *
     * @returns QueryWorkspaceRoleConfigResponse
     *
     * @param QueryWorkspaceRoleConfigRequest $request
     *
     * @return QueryWorkspaceRoleConfigResponse
     */
    public function queryWorkspaceRoleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorkspaceRoleConfigWithOptions($request, $runtime);
    }

    /**
     * Query the list of members under a specified workspace.
     *
     * @param request - QueryWorkspaceUserListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorkspaceUserListResponse
     *
     * @param QueryWorkspaceUserListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryWorkspaceUserListResponse
     */
    public function queryWorkspaceUserListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorkspaceUserList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorkspaceUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of members under a specified workspace.
     *
     * @param request - QueryWorkspaceUserListRequest
     *
     * @returns QueryWorkspaceUserListResponse
     *
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
     * You can customize the callback interface for approval processes to process Quick BI approval processes.
     *
     * @param request - ResultCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResultCallbackResponse
     *
     * @param ResultCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResultCallbackResponse
     */
    public function resultCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->handleReason) {
            @$query['HandleReason'] = $request->handleReason;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResultCallback',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResultCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can customize the callback interface for approval processes to process Quick BI approval processes.
     *
     * @param request - ResultCallbackRequest
     *
     * @returns ResultCallbackResponse
     *
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
     * Add a user\\"s favorite work.
     *
     * @param request - SaveFavoritesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveFavoritesResponse
     *
     * @param SaveFavoritesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SaveFavoritesResponse
     */
    public function saveFavoritesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveFavorites',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveFavoritesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a user\\"s favorite work.
     *
     * @param request - SaveFavoritesRequest
     *
     * @returns SaveFavoritesResponse
     *
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
     * 设置行列权限的额外配置.
     *
     * @param request - SetDataLevelPermissionExtraConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDataLevelPermissionExtraConfigResponse
     *
     * @param SetDataLevelPermissionExtraConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SetDataLevelPermissionExtraConfigResponse
     */
    public function setDataLevelPermissionExtraConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->missHitPolicy) {
            @$query['MissHitPolicy'] = $request->missHitPolicy;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDataLevelPermissionExtraConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDataLevelPermissionExtraConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置行列权限的额外配置.
     *
     * @param request - SetDataLevelPermissionExtraConfigRequest
     *
     * @returns SetDataLevelPermissionExtraConfigResponse
     *
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
     * 设置单条数据集行列权限配置信息（新增和更新）.
     *
     * @param request - SetDataLevelPermissionRuleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDataLevelPermissionRuleConfigResponse
     *
     * @param SetDataLevelPermissionRuleConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SetDataLevelPermissionRuleConfigResponse
     */
    public function setDataLevelPermissionRuleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleModel) {
            @$query['RuleModel'] = $request->ruleModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDataLevelPermissionRuleConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDataLevelPermissionRuleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置单条数据集行列权限配置信息（新增和更新）.
     *
     * @param request - SetDataLevelPermissionRuleConfigRequest
     *
     * @returns SetDataLevelPermissionRuleConfigResponse
     *
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
     * Sets the whitelist for the specified row-level permissions.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *
     * @param request - SetDataLevelPermissionWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDataLevelPermissionWhiteListResponse
     *
     * @param SetDataLevelPermissionWhiteListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SetDataLevelPermissionWhiteListResponse
     */
    public function setDataLevelPermissionWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->whiteListModel) {
            @$query['WhiteListModel'] = $request->whiteListModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDataLevelPermissionWhiteList',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDataLevelPermissionWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the whitelist for the specified row-level permissions.
     *
     * @remarks
     * > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *
     * @param request - SetDataLevelPermissionWhiteListRequest
     *
     * @returns SetDataLevelPermissionWhiteListResponse
     *
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
     * Synchronize the question count permissions of a specified user to other users.
     *
     * @param request - SmartqAuthTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmartqAuthTransferResponse
     *
     * @param SmartqAuthTransferRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SmartqAuthTransferResponse
     */
    public function smartqAuthTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->originUserId) {
            @$query['OriginUserId'] = $request->originUserId;
        }

        if (null !== $request->targetUserIds) {
            @$query['TargetUserIds'] = $request->targetUserIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmartqAuthTransfer',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmartqAuthTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronize the question count permissions of a specified user to other users.
     *
     * @param request - SmartqAuthTransferRequest
     *
     * @returns SmartqAuthTransferResponse
     *
     * @param SmartqAuthTransferRequest $request
     *
     * @return SmartqAuthTransferResponse
     */
    public function smartqAuthTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqAuthTransferWithOptions($request, $runtime);
    }

    /**
     * Batch Management of Smart Q\\\\\\&A Authorizations.
     *
     * @remarks
     * Used for batch management of smart Q&A authorizations. Repeatedly adding an authorization will be treated as a new addition; repeatedly deleting an authorization will be skipped by default and will not be recorded in the audit log.
     *
     * @param request - SmartqAuthorizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmartqAuthorizeResponse
     *
     * @param SmartqAuthorizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SmartqAuthorizeResponse
     */
    public function smartqAuthorizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeIds) {
            @$query['CubeIds'] = $request->cubeIds;
        }

        if (null !== $request->expireDay) {
            @$query['ExpireDay'] = $request->expireDay;
        }

        if (null !== $request->llmCubeThemes) {
            @$query['LlmCubeThemes'] = $request->llmCubeThemes;
        }

        if (null !== $request->llmCubes) {
            @$query['LlmCubes'] = $request->llmCubes;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmartqAuthorize',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmartqAuthorizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Management of Smart Q\\\\\\&A Authorizations.
     *
     * @remarks
     * Used for batch management of smart Q&A authorizations. Repeatedly adding an authorization will be treated as a new addition; repeatedly deleting an authorization will be skipped by default and will not be recorded in the audit log.
     *
     * @param request - SmartqAuthorizeRequest
     *
     * @returns SmartqAuthorizeResponse
     *
     * @param SmartqAuthorizeRequest $request
     *
     * @return SmartqAuthorizeResponse
     */
    public function smartqAuthorize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqAuthorizeWithOptions($request, $runtime);
    }

    /**
     * Query Capability Open.
     *
     * @remarks
     * Special Note: When a user is authorized to call this API, it is assumed that the user has the permission to query the corresponding data by passing in the userId as that user.
     *
     * @param request - SmartqQueryAbilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmartqQueryAbilityResponse
     *
     * @param SmartqQueryAbilityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SmartqQueryAbilityResponse
     */
    public function smartqQueryAbilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userQuestion) {
            @$query['UserQuestion'] = $request->userQuestion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmartqQueryAbility',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmartqQueryAbilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Capability Open.
     *
     * @remarks
     * Special Note: When a user is authorized to call this API, it is assumed that the user has the permission to query the corresponding data by passing in the userId as that user.
     *
     * @param request - SmartqQueryAbilityRequest
     *
     * @returns SmartqQueryAbilityResponse
     *
     * @param SmartqQueryAbilityRequest $request
     *
     * @return SmartqQueryAbilityResponse
     */
    public function smartqQueryAbility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqQueryAbilityWithOptions($request, $runtime);
    }

    /**
     * Indicates whether the request is successful. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *
     * @remarks
     * The execution result of the interface. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *
     * @param request - UpdateDataLevelPermissionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDataLevelPermissionStatusResponse
     *
     * @param UpdateDataLevelPermissionStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateDataLevelPermissionStatusResponse
     */
    public function updateDataLevelPermissionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cubeId) {
            @$query['CubeId'] = $request->cubeId;
        }

        if (null !== $request->isOpen) {
            @$query['IsOpen'] = $request->isOpen;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDataLevelPermissionStatus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDataLevelPermissionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Indicates whether the request is successful. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *
     * @remarks
     * The execution result of the interface. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *
     * @param request - UpdateDataLevelPermissionStatusRequest
     *
     * @returns UpdateDataLevelPermissionStatusResponse
     *
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
     * Change the embedding status of a report, turn on embedding, or turn off embedding.
     *
     * @param request - UpdateEmbeddedStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEmbeddedStatusResponse
     *
     * @param UpdateEmbeddedStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEmbeddedStatusResponse
     */
    public function updateEmbeddedStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->thirdPartAuthFlag) {
            @$query['ThirdPartAuthFlag'] = $request->thirdPartAuthFlag;
        }

        if (null !== $request->worksId) {
            @$query['WorksId'] = $request->worksId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEmbeddedStatus',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEmbeddedStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Change the embedding status of a report, turn on embedding, or turn off embedding.
     *
     * @param request - UpdateEmbeddedStatusRequest
     *
     * @returns UpdateEmbeddedStatusResponse
     *
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
     * Update the ticket quantity on the specified ticket used for the exemption embedded report.
     *
     * @param request - UpdateTicketNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTicketNumResponse
     *
     * @param UpdateTicketNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTicketNumResponse
     */
    public function updateTicketNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ticket) {
            @$query['Ticket'] = $request->ticket;
        }

        if (null !== $request->ticketNum) {
            @$query['TicketNum'] = $request->ticketNum;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTicketNum',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTicketNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the ticket quantity on the specified ticket used for the exemption embedded report.
     *
     * @param request - UpdateTicketNumRequest
     *
     * @returns UpdateTicketNumResponse
     *
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
     * Updates the information of a specified member in an organization.
     *
     * @param request - UpdateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminUser) {
            @$query['AdminUser'] = $request->adminUser;
        }

        if (null !== $request->authAdminUser) {
            @$query['AuthAdminUser'] = $request->authAdminUser;
        }

        if (null !== $request->isDeleted) {
            @$query['IsDeleted'] = $request->isDeleted;
        }

        if (null !== $request->nickName) {
            @$query['NickName'] = $request->nickName;
        }

        if (null !== $request->roleIds) {
            @$query['RoleIds'] = $request->roleIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of a specified member in an organization.
     *
     * @param request - UpdateUserRequest
     *
     * @returns UpdateUserResponse
     *
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
     * Updates information about a specified user group in an organization.
     *
     * @param request - UpdateUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserGroupResponse
     *
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userGroupDescription) {
            @$query['UserGroupDescription'] = $request->userGroupDescription;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        if (null !== $request->userGroupName) {
            @$query['UserGroupName'] = $request->userGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserGroup',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates information about a specified user group in an organization.
     *
     * @param request - UpdateUserGroupRequest
     *
     * @returns UpdateUserGroupResponse
     *
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
     * Used for updating the metadata of organization member tags.
     *
     * @param request - UpdateUserTagMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserTagMetaResponse
     *
     * @param UpdateUserTagMetaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateUserTagMetaResponse
     */
    public function updateUserTagMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagDescription) {
            @$query['TagDescription'] = $request->tagDescription;
        }

        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserTagMeta',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserTagMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used for updating the metadata of organization member tags.
     *
     * @param request - UpdateUserTagMetaRequest
     *
     * @returns UpdateUserTagMetaResponse
     *
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
     * Update the tag value of an organization member.
     *
     * @param request - UpdateUserTagValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserTagValueResponse
     *
     * @param UpdateUserTagValueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateUserTagValueResponse
     */
    public function updateUserTagValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tagId) {
            @$query['TagId'] = $request->tagId;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserTagValue',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserTagValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the tag value of an organization member.
     *
     * @param request - UpdateUserTagValueRequest
     *
     * @returns UpdateUserTagValueResponse
     *
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
     * Modify the role of a specified member under the workspace, existing roles will be overwritten.
     *
     * @param request - UpdateWorkspaceUserRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceUserRoleResponse
     *
     * @param UpdateWorkspaceUserRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWorkspaceUserRoleResponse
     */
    public function updateWorkspaceUserRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->roleIds) {
            @$query['RoleIds'] = $request->roleIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspaceUserRole',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceUserRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the role of a specified member under the workspace, existing roles will be overwritten.
     *
     * @param request - UpdateWorkspaceUserRoleRequest
     *
     * @returns UpdateWorkspaceUserRoleResponse
     *
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
     * Batch update the role information of workspace members, existing roles will be overwritten.
     *
     * @param request - UpdateWorkspaceUsersRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceUsersRoleResponse
     *
     * @param UpdateWorkspaceUsersRoleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateWorkspaceUsersRoleResponse
     */
    public function updateWorkspaceUsersRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleId) {
            @$query['RoleId'] = $request->roleId;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspaceUsersRole',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkspaceUsersRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch update the role information of workspace members, existing roles will be overwritten.
     *
     * @param request - UpdateWorkspaceUsersRoleRequest
     *
     * @returns UpdateWorkspaceUsersRoleResponse
     *
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
     * Make the user exit all user groups. This process is irreversible. Exercise caution when performing this operation.
     *
     * @param request - WithdrawAllUserGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WithdrawAllUserGroupsResponse
     *
     * @param WithdrawAllUserGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return WithdrawAllUserGroupsResponse
     */
    public function withdrawAllUserGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WithdrawAllUserGroups',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WithdrawAllUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Make the user exit all user groups. This process is irreversible. Exercise caution when performing this operation.
     *
     * @param request - WithdrawAllUserGroupsRequest
     *
     * @returns WithdrawAllUserGroupsResponse
     *
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
