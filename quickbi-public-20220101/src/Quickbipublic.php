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
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdV2Request;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdV2Response;
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
     * @summary Add selected groups of people incrementally for a single row and column permission rule.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.\\n
     *  *
     * @param AddDataLevelPermissionRuleUsersRequest $request AddDataLevelPermissionRuleUsersRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDataLevelPermissionRuleUsersResponse AddDataLevelPermissionRuleUsersResponse
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
     * @summary Add selected groups of people incrementally for a single row and column permission rule.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.\\n
     *  *
     * @param AddDataLevelPermissionRuleUsersRequest $request AddDataLevelPermissionRuleUsersRequest
     *
     * @return AddDataLevelPermissionRuleUsersResponse AddDataLevelPermissionRuleUsersResponse
     */
    public function addDataLevelPermissionRuleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataLevelPermissionRuleUsersWithOptions($request, $runtime);
    }

    /**
     * @summary 43342***435,1553a****41231
     *  *
     * @description ROW_LEVEL
     *  *
     * @param AddDataLevelPermissionWhiteListRequest $request AddDataLevelPermissionWhiteListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDataLevelPermissionWhiteListResponse AddDataLevelPermissionWhiteListResponse
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
     * @summary 43342***435,1553a****41231
     *  *
     * @description ROW_LEVEL
     *  *
     * @param AddDataLevelPermissionWhiteListRequest $request AddDataLevelPermissionWhiteListRequest
     *
     * @return AddDataLevelPermissionWhiteListResponse AddDataLevelPermissionWhiteListResponse
     */
    public function addDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Add a sharing configuration for data works.
     *  *
     * @param AddShareReportRequest $request AddShareReportRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddShareReportResponse AddShareReportResponse
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
     * @summary Add a sharing configuration for data works.
     *  *
     * @param AddShareReportRequest $request AddShareReportRequest
     *
     * @return AddShareReportResponse AddShareReportResponse
     */
    public function addShareReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShareReportWithOptions($request, $runtime);
    }

    /**
     * @summary Add an organization member.
     *  *
     * @param AddUserRequest $request AddUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
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
        $body = [];
        if (!Utils::isUnset($request->roleIds)) {
            $body['RoleIds'] = $request->roleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Add an organization member.
     *  *
     * @param AddUserRequest $request AddUserRequest
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an organization member to a specified user group.
     *  *
     * @param AddUserGroupMemberRequest $request AddUserGroupMemberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserGroupMemberResponse AddUserGroupMemberResponse
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
     * @summary Adds an organization member to a specified user group.
     *  *
     * @param AddUserGroupMemberRequest $request AddUserGroupMemberRequest
     *
     * @return AddUserGroupMemberResponse AddUserGroupMemberResponse
     */
    public function addUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @summary Add users to a specified user group at a time.
     *  *
     * @param AddUserGroupMembersRequest $request AddUserGroupMembersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserGroupMembersResponse AddUserGroupMembersResponse
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
     * @summary Add users to a specified user group at a time.
     *  *
     * @param AddUserGroupMembersRequest $request AddUserGroupMembersRequest
     *
     * @return AddUserGroupMembersResponse AddUserGroupMembersResponse
     */
    public function addUserGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Add organization member tag metadata.
     *  *
     * @param AddUserTagMetaRequest $request AddUserTagMetaRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserTagMetaResponse AddUserTagMetaResponse
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
     * @summary Add organization member tag metadata.
     *  *
     * @param AddUserTagMetaRequest $request AddUserTagMetaRequest
     *
     * @return AddUserTagMetaResponse AddUserTagMetaResponse
     */
    public function addUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Add a member to the specified workspace.
     *  *
     * @param AddUserToWorkspaceRequest $request AddUserToWorkspaceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToWorkspaceResponse AddUserToWorkspaceResponse
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
     * @summary Add a member to the specified workspace.
     *  *
     * @param AddUserToWorkspaceRequest $request AddUserToWorkspaceRequest
     *
     * @return AddUserToWorkspaceResponse AddUserToWorkspaceResponse
     */
    public function addUserToWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Batch add members to the workspace.
     *  *
     * @param AddWorkspaceUsersRequest $request AddWorkspaceUsersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddWorkspaceUsersResponse AddWorkspaceUsersResponse
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
     * @summary Batch add members to the workspace.
     *  *
     * @param AddWorkspaceUsersRequest $request AddWorkspaceUsersRequest
     *
     * @return AddWorkspaceUsersResponse AddWorkspaceUsersResponse
     */
    public function addWorkspaceUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWorkspaceUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Trigger the collection acceleration of the Quick engine for datasets.
     *  *
     * @param AllotDatasetAccelerationTaskRequest $request AllotDatasetAccelerationTaskRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AllotDatasetAccelerationTaskResponse AllotDatasetAccelerationTaskResponse
     */
    public function allotDatasetAccelerationTaskWithOptions($request, $runtime)
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
     * @summary Trigger the collection acceleration of the Quick engine for datasets.
     *  *
     * @param AllotDatasetAccelerationTaskRequest $request AllotDatasetAccelerationTaskRequest
     *
     * @return AllotDatasetAccelerationTaskResponse AllotDatasetAccelerationTaskResponse
     */
    public function allotDatasetAccelerationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allotDatasetAccelerationTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Batch authorization of BI portal menu will be skipped automatically.
     *  *
     * @param AuthorizeMenuRequest $request AuthorizeMenuRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeMenuResponse AuthorizeMenuResponse
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
     * @summary Batch authorization of BI portal menu will be skipped automatically.
     *  *
     * @param AuthorizeMenuRequest $request AuthorizeMenuRequest
     *
     * @return AuthorizeMenuResponse AuthorizeMenuResponse
     */
    public function authorizeMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeMenuWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI BatchAddFeishuUsers is deprecated
     *  *
     * @summary 批量添加飞书用户。
     *  *
     * Deprecated
     *
     * @param BatchAddFeishuUsersRequest $request BatchAddFeishuUsersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchAddFeishuUsersResponse BatchAddFeishuUsersResponse
     */
    public function batchAddFeishuUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->feishuUsers)) {
            $query['FeishuUsers'] = $request->feishuUsers;
        }
        if (!Utils::isUnset($request->isAdmin)) {
            $query['IsAdmin'] = $request->isAdmin;
        }
        if (!Utils::isUnset($request->isAuthAdmin)) {
            $query['IsAuthAdmin'] = $request->isAuthAdmin;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

    /**
     * @deprecated OpenAPI BatchAddFeishuUsers is deprecated
     *  *
     * @summary 批量添加飞书用户。
     *  *
     * Deprecated
     *
     * @param BatchAddFeishuUsersRequest $request BatchAddFeishuUsersRequest
     *
     * @return BatchAddFeishuUsersResponse BatchAddFeishuUsersResponse
     */
    public function batchAddFeishuUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddFeishuUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Cancel the authorization records for specified users and user groups based on the portal menu ID.
     *  *
     * @param CancelAuthorizationMenuRequest $request CancelAuthorizationMenuRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAuthorizationMenuResponse CancelAuthorizationMenuResponse
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
     * @summary Cancel the authorization records for specified users and user groups based on the portal menu ID.
     *  *
     * @param CancelAuthorizationMenuRequest $request CancelAuthorizationMenuRequest
     *
     * @return CancelAuthorizationMenuResponse CancelAuthorizationMenuResponse
     */
    public function cancelAuthorizationMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAuthorizationMenuWithOptions($request, $runtime);
    }

    /**
     * @summary Cancel the data works from the user\\"s collection.
     *  *
     * @param CancelCollectionRequest $request CancelCollectionRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCollectionResponse CancelCollectionResponse
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
     * @summary Cancel the data works from the user\\"s collection.
     *  *
     * @param CancelCollectionRequest $request CancelCollectionRequest
     *
     * @return CancelCollectionResponse CancelCollectionResponse
     */
    public function cancelCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCollectionWithOptions($request, $runtime);
    }

    /**
     * @summary Delete a share authorization for a data work.
     *  *
     * @param CancelReportShareRequest $request CancelReportShareRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelReportShareResponse CancelReportShareResponse
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
     * @summary Delete a share authorization for a data work.
     *  *
     * @param CancelReportShareRequest $request CancelReportShareRequest
     *
     * @return CancelReportShareResponse CancelReportShareResponse
     */
    public function cancelReportShare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelReportShareWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the visibility mode of the BI portal menu and whether the menu is only authorized to be visible.
     *  *
     * @param ChangeVisibilityModelRequest $request ChangeVisibilityModelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeVisibilityModelResponse ChangeVisibilityModelResponse
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
     * @summary Modifies the visibility mode of the BI portal menu and whether the menu is only authorized to be visible.
     *  *
     * @param ChangeVisibilityModelRequest $request ChangeVisibilityModelRequest
     *
     * @return ChangeVisibilityModelResponse ChangeVisibilityModelResponse
     */
    public function changeVisibilityModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVisibilityModelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether a user has permissions to view data works, such as dashboards and workbooks.
     *  *
     * @param CheckReadableRequest $request CheckReadableRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckReadableResponse CheckReadableResponse
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
     * @summary Queries whether a user has permissions to view data works, such as dashboards and workbooks.
     *  *
     * @param CheckReadableRequest $request CheckReadableRequest
     *
     * @return CheckReadableResponse CheckReadableResponse
     */
    public function checkReadable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkReadableWithOptions($request, $runtime);
    }

    /**
     * @summary Generate a ticket for third-party embedding.
     *  *
     * @description For detailed usage, please refer to [Report Embedding Data Permission Control and Parameter Passing Security Enhancement Solution](https://help.aliyun.com/document_detail/391291.html).
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTicketResponse CreateTicketResponse
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
     * @summary Generate a ticket for third-party embedding.
     *  *
     * @description For detailed usage, please refer to [Report Embedding Data Permission Control and Parameter Passing Security Enhancement Solution](https://help.aliyun.com/document_detail/391291.html).
     *  *
     * @param CreateTicketRequest $request CreateTicketRequest
     *
     * @return CreateTicketResponse CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Generate an embedding ticket for Smart Q.
     *  *
     * @param CreateTicket4CopilotRequest $request CreateTicket4CopilotRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTicket4CopilotResponse CreateTicket4CopilotResponse
     */
    public function createTicket4CopilotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->copilotId)) {
            $query['CopilotId'] = $request->copilotId;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->ticketNum)) {
            $query['TicketNum'] = $request->ticketNum;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Generate an embedding ticket for Smart Q.
     *  *
     * @param CreateTicket4CopilotRequest $request CreateTicket4CopilotRequest
     *
     * @return CreateTicket4CopilotResponse CreateTicket4CopilotResponse
     */
    public function createTicket4Copilot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTicket4CopilotWithOptions($request, $runtime);
    }

    /**
     * @summary Create a user group. You can specify a parent user group.
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
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
     * @summary Create a user group. You can specify a parent user group.
     *  *
     * @param CreateUserGroupRequest $request CreateUserGroupRequest
     *
     * @return CreateUserGroupResponse CreateUserGroupResponse
     */
    public function createUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 数据解读开放接口
     *  *
     * @param DataInterpretationRequest $request DataInterpretationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DataInterpretationResponse DataInterpretationResponse
     */
    public function dataInterpretationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->modelCode)) {
            $query['ModelCode'] = $request->modelCode;
        }
        if (!Utils::isUnset($request->promptForceOverride)) {
            $query['PromptForceOverride'] = $request->promptForceOverride;
        }
        if (!Utils::isUnset($request->userPrompt)) {
            $query['UserPrompt'] = $request->userPrompt;
        }
        if (!Utils::isUnset($request->userQuestion)) {
            $query['UserQuestion'] = $request->userQuestion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 数据解读开放接口
     *  *
     * @param DataInterpretationRequest $request DataInterpretationRequest
     *
     * @return DataInterpretationResponse DataInterpretationResponse
     */
    public function dataInterpretation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataInterpretationWithOptions($request, $runtime);
    }

    /**
     * @summary Query works information under the specified dataset.
     *  *
     * @param DataSetBloodRequest $request DataSetBloodRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DataSetBloodResponse DataSetBloodResponse
     */
    public function dataSetBloodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSetIds)) {
            $query['DataSetIds'] = $request->dataSetIds;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->worksType)) {
            $query['WorksType'] = $request->worksType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query works information under the specified dataset.
     *  *
     * @param DataSetBloodRequest $request DataSetBloodRequest
     *
     * @return DataSetBloodResponse DataSetBloodResponse
     */
    public function dataSetBlood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataSetBloodWithOptions($request, $runtime);
    }

    /**
     * @summary Query dataset information under the specified data source
     *  *
     * @param DataSourceBloodRequest $request DataSourceBloodRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DataSourceBloodResponse DataSourceBloodResponse
     */
    public function dataSourceBloodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['DataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query dataset information under the specified data source
     *  *
     * @param DataSourceBloodRequest $request DataSourceBloodRequest
     *
     * @return DataSourceBloodResponse DataSourceBloodResponse
     */
    public function dataSourceBlood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataSourceBloodWithOptions($request, $runtime);
    }

    /**
     * @summary Update the expiration time of the ticket embedded in the report.
     *  *
     * @param DelayTicketExpireTimeRequest $request DelayTicketExpireTimeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DelayTicketExpireTimeResponse DelayTicketExpireTimeResponse
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
     * @summary Update the expiration time of the ticket embedded in the report.
     *  *
     * @param DelayTicketExpireTimeRequest $request DelayTicketExpireTimeRequest
     *
     * @return DelayTicketExpireTimeResponse DelayTicketExpireTimeResponse
     */
    public function delayTicketExpireTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delayTicketExpireTimeWithOptions($request, $runtime);
    }

    /**
     * @summary { "ruleId": "a5bb24da- ***-a891683e14da", // The ID of the row-column permission rule. "cubeId": "7c7223ae- ***-3c744528014b", // The ID of the dataset. "delModel": { "userGroups": [ "0d5fb19b- ***-1248 fc27ca51", // Delete the user group ID of the user group. "3d2c23d4-***-f6390f325c2d" ], "users": [ "4334 ***358", // Delete the UserID of the user group. "Huang***3fa822" ] } }
     *  *
     * @description {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *  *
     * @param DeleteDataLevelPermissionRuleUsersRequest $request DeleteDataLevelPermissionRuleUsersRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataLevelPermissionRuleUsersResponse DeleteDataLevelPermissionRuleUsersResponse
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
     * @summary { "ruleId": "a5bb24da- ***-a891683e14da", // The ID of the row-column permission rule. "cubeId": "7c7223ae- ***-3c744528014b", // The ID of the dataset. "delModel": { "userGroups": [ "0d5fb19b- ***-1248 fc27ca51", // Delete the user group ID of the user group. "3d2c23d4-***-f6390f325c2d" ], "users": [ "4334 ***358", // Delete the UserID of the user group. "Huang***3fa822" ] } }
     *  *
     * @description {"ruleId":"a5bb24da-***-a891683e14da","cubeId":"7c7223ae-***-3c744528014b","delModel":{"userGroups":["0d5fb19b-***-1248fc27ca51","3d2c23d4-***-f6390f325c2d"],"users":["4334***358","Huang***3fa822"]}}
     *  *
     * @param DeleteDataLevelPermissionRuleUsersRequest $request DeleteDataLevelPermissionRuleUsersRequest
     *
     * @return DeleteDataLevelPermissionRuleUsersResponse DeleteDataLevelPermissionRuleUsersResponse
     */
    public function deleteDataLevelPermissionRuleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLevelPermissionRuleUsersWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *  *
     * @param DeleteDataLevelRuleConfigRequest $request DeleteDataLevelRuleConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataLevelRuleConfigResponse DeleteDataLevelRuleConfigResponse
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
     * @summary The ID of the request.
     *  *
     * @description The ID of the training dataset that you want to remove from the specified custom linguistic model.
     *  *
     * @param DeleteDataLevelRuleConfigRequest $request DeleteDataLevelRuleConfigRequest
     *
     * @return DeleteDataLevelRuleConfigResponse DeleteDataLevelRuleConfigResponse
     */
    public function deleteDataLevelRuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLevelRuleConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Third-Party Embedded Ticket
     *  *
     * @param DeleteTicketRequest $request DeleteTicketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTicketResponse DeleteTicketResponse
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
     * @summary Delete Third-Party Embedded Ticket
     *  *
     * @param DeleteTicketRequest $request DeleteTicketRequest
     *
     * @return DeleteTicketResponse DeleteTicketResponse
     */
    public function deleteTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Delete the specified organization user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
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
     * @summary Delete the specified organization user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @summary Delete a member from the specified workspace.
     *  *
     * @param DeleteUserFromWorkspaceRequest $request DeleteUserFromWorkspaceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserFromWorkspaceResponse DeleteUserFromWorkspaceResponse
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
     * @summary Delete a member from the specified workspace.
     *  *
     * @param DeleteUserFromWorkspaceRequest $request DeleteUserFromWorkspaceRequest
     *
     * @return DeleteUserFromWorkspaceResponse DeleteUserFromWorkspaceResponse
     */
    public function deleteUserFromWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserFromWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a user group in an organization.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
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
     * @summary Deletes a user group in an organization.
     *  *
     * @param DeleteUserGroupRequest $request DeleteUserGroupRequest
     *
     * @return DeleteUserGroupResponse DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified member from a specified user group.
     *  *
     * @param DeleteUserGroupMemberRequest $request DeleteUserGroupMemberRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupMemberResponse DeleteUserGroupMemberResponse
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
     * @summary Deletes a specified member from a specified user group.
     *  *
     * @param DeleteUserGroupMemberRequest $request DeleteUserGroupMemberRequest
     *
     * @return DeleteUserGroupMemberResponse DeleteUserGroupMemberResponse
     */
    public function deleteUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @summary Batch remove specified users from user groups.
     *  *
     * @param DeleteUserGroupMembersRequest $request DeleteUserGroupMembersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserGroupMembersResponse DeleteUserGroupMembersResponse
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
     * @summary Batch remove specified users from user groups.
     *  *
     * @param DeleteUserGroupMembersRequest $request DeleteUserGroupMembersRequest
     *
     * @return DeleteUserGroupMembersResponse DeleteUserGroupMembersResponse
     */
    public function deleteUserGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupMembersWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the tag metadata of an organization member.
     *  *
     * @param DeleteUserTagMetaRequest $request DeleteUserTagMetaRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserTagMetaResponse DeleteUserTagMetaResponse
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
     * @summary Deletes the tag metadata of an organization member.
     *  *
     * @param DeleteUserTagMetaRequest $request DeleteUserTagMetaRequest
     *
     * @return DeleteUserTagMetaResponse DeleteUserTagMetaResponse
     */
    public function deleteUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Get Data Source Information
     *  *
     * @param GetDataSourceConnectionInfoRequest $request GetDataSourceConnectionInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceConnectionInfoResponse GetDataSourceConnectionInfoResponse
     */
    public function getDataSourceConnectionInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dsId)) {
            $query['DsId'] = $request->dsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get Data Source Information
     *  *
     * @param GetDataSourceConnectionInfoRequest $request GetDataSourceConnectionInfoRequest
     *
     * @return GetDataSourceConnectionInfoResponse GetDataSourceConnectionInfoResponse
     */
    public function getDataSourceConnectionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceConnectionInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Check the running status of mail tasks within an organization
     *  *
     * @param GetMailTaskStatusRequest $request GetMailTaskStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMailTaskStatusResponse GetMailTaskStatusResponse
     */
    public function getMailTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mailId)) {
            $query['MailId'] = $request->mailId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Check the running status of mail tasks within an organization
     *  *
     * @param GetMailTaskStatusRequest $request GetMailTaskStatusRequest
     *
     * @return GetMailTaskStatusResponse GetMailTaskStatusResponse
     */
    public function getMailTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMailTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Search for user group information based on the keyword of the user group name.
     *  *
     * @param GetUserGroupInfoRequest $request GetUserGroupInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserGroupInfoResponse GetUserGroupInfoResponse
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
     * @summary Search for user group information based on the keyword of the user group name.
     *  *
     * @param GetUserGroupInfoRequest $request GetUserGroupInfoRequest
     *
     * @return GetUserGroupInfoResponse GetUserGroupInfoResponse
     */
    public function getUserGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Query the list of embedded reports
     *  *
     * @param GetWorksEmbedListRequest $request GetWorksEmbedListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorksEmbedListResponse GetWorksEmbedListResponse
     */
    public function getWorksEmbedListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->worksType)) {
            $query['WorksType'] = $request->worksType;
        }
        if (!Utils::isUnset($request->wsId)) {
            $query['WsId'] = $request->wsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query the list of embedded reports
     *  *
     * @param GetWorksEmbedListRequest $request GetWorksEmbedListRequest
     *
     * @return GetWorksEmbedListResponse GetWorksEmbedListResponse
     */
    public function getWorksEmbedList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorksEmbedListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries API data sources.
     *  *
     * @description For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *  *
     * @param ListApiDatasourceRequest $request ListApiDatasourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApiDatasourceResponse ListApiDatasourceResponse
     */
    public function listApiDatasourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
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
     * @summary Queries API data sources.
     *  *
     * @description For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *  *
     * @param ListApiDatasourceRequest $request ListApiDatasourceRequest
     *
     * @return ListApiDatasourceResponse ListApiDatasourceResponse
     */
    public function listApiDatasource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiDatasourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user group information at a time by user group ID.
     *  *
     * @param ListByUserGroupIdRequest $request ListByUserGroupIdRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListByUserGroupIdResponse ListByUserGroupIdResponse
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
     * @summary Queries user group information at a time by user group ID.
     *  *
     * @param ListByUserGroupIdRequest $request ListByUserGroupIdRequest
     *
     * @return ListByUserGroupIdResponse ListByUserGroupIdResponse
     */
    public function listByUserGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listByUserGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the work.
     *  *
     * @param ListCollectionsRequest $request ListCollectionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCollectionsResponse ListCollectionsResponse
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
     * @summary The ID of the work.
     *  *
     * @param ListCollectionsRequest $request ListCollectionsRequest
     *
     * @return ListCollectionsResponse ListCollectionsResponse
     */
    public function listCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCollectionsWithOptions($request, $runtime);
    }

    /**
     * @summary You can this operation to obtain a list of row and column permission configurations for a specified dataset.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *  *
     * @param ListCubeDataLevelPermissionConfigRequest $request ListCubeDataLevelPermissionConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCubeDataLevelPermissionConfigResponse ListCubeDataLevelPermissionConfigResponse
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
     * @summary You can this operation to obtain a list of row and column permission configurations for a specified dataset.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *  *
     * @param ListCubeDataLevelPermissionConfigRequest $request ListCubeDataLevelPermissionConfigRequest
     *
     * @return ListCubeDataLevelPermissionConfigResponse ListCubeDataLevelPermissionConfigResponse
     */
    public function listCubeDataLevelPermissionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCubeDataLevelPermissionConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieve the whitelist for dataset row and column permissions based on the type of permission.
     *  *
     * @description > This API only supports the new row and column permission model of Quick BI. If you are still using the old row and column permissions, please migrate to the new row and column permission model before calling this interface. To migrate to the new row and column permission model, follow these steps: In Organization Management -> Security Configuration -> Upgrade Row and Column Permissions, click **One-Click Upgrade** to upgrade to the new row-level permissions.
     *  *
     * @param ListDataLevelPermissionWhiteListRequest $request ListDataLevelPermissionWhiteListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataLevelPermissionWhiteListResponse ListDataLevelPermissionWhiteListResponse
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
     * @summary Retrieve the whitelist for dataset row and column permissions based on the type of permission.
     *  *
     * @description > This API only supports the new row and column permission model of Quick BI. If you are still using the old row and column permissions, please migrate to the new row and column permission model before calling this interface. To migrate to the new row and column permission model, follow these steps: In Organization Management -> Security Configuration -> Upgrade Row and Column Permissions, click **One-Click Upgrade** to upgrade to the new row-level permissions.
     *  *
     * @param ListDataLevelPermissionWhiteListRequest $request ListDataLevelPermissionWhiteListRequest
     *
     * @return ListDataLevelPermissionWhiteListResponse ListDataLevelPermissionWhiteListResponse
     */
    public function listDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Query all data sources under the specified space
     *  *
     * @param ListDataSourceRequest $request ListDataSourceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dsType)) {
            $query['DsType'] = $request->dsType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query all data sources under the specified space
     *  *
     * @param ListDataSourceRequest $request ListDataSourceRequest
     *
     * @return ListDataSourceResponse ListDataSourceResponse
     */
    public function listDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Overview
     *  *
     * @param ListFavoriteReportsRequest $request ListFavoriteReportsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFavoriteReportsResponse ListFavoriteReportsResponse
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
     * @summary Overview
     *  *
     * @param ListFavoriteReportsRequest $request ListFavoriteReportsRequest
     *
     * @return ListFavoriteReportsResponse ListFavoriteReportsResponse
     */
    public function listFavoriteReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFavoriteReportsWithOptions($request, $runtime);
    }

    /**
     * @summary Get user list under the specified organization role.
     *  *
     * @param ListOrganizationRoleUsersRequest $request ListOrganizationRoleUsersRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationRoleUsersResponse ListOrganizationRoleUsersResponse
     */
    public function listOrganizationRoleUsersWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get user list under the specified organization role.
     *  *
     * @param ListOrganizationRoleUsersRequest $request ListOrganizationRoleUsersRequest
     *
     * @return ListOrganizationRoleUsersResponse ListOrganizationRoleUsersResponse
     */
    public function listOrganizationRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationRoleUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieve the list of custom roles at the organization level.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationRolesResponse ListOrganizationRolesResponse
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
     * @summary Retrieve the list of custom roles at the organization level.
     *  *
     * @return ListOrganizationRolesResponse ListOrganizationRolesResponse
     */
    public function listOrganizationRoles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrganizationRolesWithOptions($runtime);
    }

    /**
     * @summary Obtains the list of authorization details for a BI portal menu.
     *  *
     * @param ListPortalMenuAuthorizationRequest $request ListPortalMenuAuthorizationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPortalMenuAuthorizationResponse ListPortalMenuAuthorizationResponse
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
     * @summary Obtains the list of authorization details for a BI portal menu.
     *  *
     * @param ListPortalMenuAuthorizationRequest $request ListPortalMenuAuthorizationRequest
     *
     * @return ListPortalMenuAuthorizationResponse ListPortalMenuAuthorizationResponse
     */
    public function listPortalMenuAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPortalMenuAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @summary Gets a hierarchical list of menus under a specific BI portal.
     *  *
     * @param ListPortalMenusRequest $request ListPortalMenusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPortalMenusResponse ListPortalMenusResponse
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
     * @summary Gets a hierarchical list of menus under a specific BI portal.
     *  *
     * @param ListPortalMenusRequest $request ListPortalMenusRequest
     *
     * @return ListPortalMenusResponse ListPortalMenusResponse
     */
    public function listPortalMenus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPortalMenusWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to obtain a list of the most frequently viewed and footsteps displayed in the homepage dashboard for a specified user.
     *  *
     * @param ListRecentViewReportsRequest $request ListRecentViewReportsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecentViewReportsResponse ListRecentViewReportsResponse
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
     * @summary You can call this operation to obtain a list of the most frequently viewed and footsteps displayed in the homepage dashboard for a specified user.
     *  *
     * @param ListRecentViewReportsRequest $request ListRecentViewReportsRequest
     *
     * @return ListRecentViewReportsResponse ListRecentViewReportsResponse
     */
    public function listRecentViewReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecentViewReportsWithOptions($request, $runtime);
    }

    /**
     * @summary You can this operation to obtain the list of authorized works displayed on the homepage of a specified user.
     *  *
     * @param ListSharedReportsRequest $request ListSharedReportsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSharedReportsResponse ListSharedReportsResponse
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
     * @summary You can this operation to obtain the list of authorized works displayed on the homepage of a specified user.
     *  *
     * @param ListSharedReportsRequest $request ListSharedReportsRequest
     *
     * @return ListSharedReportsResponse ListSharedReportsResponse
     */
    public function listSharedReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSharedReportsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all user groups to which a user belongs based on the user ID.
     *  *
     * @param ListUserGroupsByUserIdRequest $request ListUserGroupsByUserIdRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserGroupsByUserIdResponse ListUserGroupsByUserIdResponse
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
     * @summary Queries all user groups to which a user belongs based on the user ID.
     *  *
     * @param ListUserGroupsByUserIdRequest $request ListUserGroupsByUserIdRequest
     *
     * @return ListUserGroupsByUserIdResponse ListUserGroupsByUserIdResponse
     */
    public function listUserGroupsByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserGroupsByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary Get user list under the specified workspace role.
     *  *
     * @param ListWorkspaceRoleUsersRequest $request ListWorkspaceRoleUsersRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspaceRoleUsersResponse ListWorkspaceRoleUsersResponse
     */
    public function listWorkspaceRoleUsersWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get user list under the specified workspace role.
     *  *
     * @param ListWorkspaceRoleUsersRequest $request ListWorkspaceRoleUsersRequest
     *
     * @return ListWorkspaceRoleUsersResponse ListWorkspaceRoleUsersResponse
     */
    public function listWorkspaceRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspaceRoleUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Get the list of workspace roles.
     *  *
     * @param ListWorkspaceRolesRequest $request ListWorkspaceRolesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspaceRolesResponse ListWorkspaceRolesResponse
     */
    public function listWorkspaceRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get the list of workspace roles.
     *  *
     * @param ListWorkspaceRolesRequest $request ListWorkspaceRolesRequest
     *
     * @return ListWorkspaceRolesResponse ListWorkspaceRolesResponse
     */
    public function listWorkspaceRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspaceRolesWithOptions($request, $runtime);
    }

    /**
     * @summary Manually Execute Email Task
     *  *
     * @param ManualRunMailTaskRequest $request ManualRunMailTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ManualRunMailTaskResponse ManualRunMailTaskResponse
     */
    public function manualRunMailTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mailId)) {
            $query['MailId'] = $request->mailId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Manually Execute Email Task
     *  *
     * @param ManualRunMailTaskRequest $request ManualRunMailTaskRequest
     *
     * @return ManualRunMailTaskResponse ManualRunMailTaskResponse
     */
    public function manualRunMailTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualRunMailTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a specified API data source.
     *  *
     * @description When you modify a query statement, you can modify only the top-level JsonObject. You cannot modify parameters that are nested in multiple layers. For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *  *
     * @param ModifyApiDatasourceParametersRequest $request ModifyApiDatasourceParametersRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyApiDatasourceParametersResponse ModifyApiDatasourceParametersResponse
     */
    public function modifyApiDatasourceParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiId)) {
            $query['ApiId'] = $request->apiId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the configurations of a specified API data source.
     *  *
     * @description When you modify a query statement, you can modify only the top-level JsonObject. You cannot modify parameters that are nested in multiple layers. For more information about the parameters, see [Create an API data source](https://help.aliyun.com/document_detail/409330.html).
     *  *
     * @param ModifyApiDatasourceParametersRequest $request ModifyApiDatasourceParametersRequest
     *
     * @return ModifyApiDatasourceParametersResponse ModifyApiDatasourceParametersResponse
     */
    public function modifyApiDatasourceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiDatasourceParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Modify Intelligent Query Embedding Configuration
     *  *
     * @param ModifyCopilotEmbedConfigRequest $request ModifyCopilotEmbedConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCopilotEmbedConfigResponse ModifyCopilotEmbedConfigResponse
     */
    public function modifyCopilotEmbedConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentName)) {
            $query['AgentName'] = $request->agentName;
        }
        if (!Utils::isUnset($request->copilotId)) {
            $query['CopilotId'] = $request->copilotId;
        }
        if (!Utils::isUnset($request->dataRange)) {
            $query['DataRange'] = $request->dataRange;
        }
        if (!Utils::isUnset($request->moduleName)) {
            $query['ModuleName'] = $request->moduleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modify Intelligent Query Embedding Configuration
     *  *
     * @param ModifyCopilotEmbedConfigRequest $request ModifyCopilotEmbedConfigRequest
     *
     * @return ModifyCopilotEmbedConfigResponse ModifyCopilotEmbedConfigResponse
     */
    public function modifyCopilotEmbedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCopilotEmbedConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Get approval flow information based on the approver.
     *  *
     * @param QueryApprovalInfoRequest $request QueryApprovalInfoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryApprovalInfoResponse QueryApprovalInfoResponse
     */
    public function queryApprovalInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get approval flow information based on the approver.
     *  *
     * @param QueryApprovalInfoRequest $request QueryApprovalInfoRequest
     *
     * @return QueryApprovalInfoResponse QueryApprovalInfoResponse
     */
    public function queryApprovalInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryApprovalInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Query audit log information.
     *  *
     * @param QueryAuditLogRequest $request QueryAuditLogRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuditLogResponse QueryAuditLogResponse
     */
    public function queryAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessSourceFlag)) {
            $query['AccessSourceFlag'] = $request->accessSourceFlag;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $query['OperatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->operatorTypes)) {
            $query['OperatorTypes'] = $request->operatorTypes;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->userAccessDevice)) {
            $query['UserAccessDevice'] = $request->userAccessDevice;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query audit log information.
     *  *
     * @param QueryAuditLogRequest $request QueryAuditLogRequest
     *
     * @return QueryAuditLogResponse QueryAuditLogResponse
     */
    public function queryAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries component performance logs.
     *  *
     * @param QueryComponentPerformanceRequest $request QueryComponentPerformanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryComponentPerformanceResponse QueryComponentPerformanceResponse
     */
    public function queryComponentPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->costTimeAvgMin)) {
            $query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries component performance logs.
     *  *
     * @param QueryComponentPerformanceRequest $request QueryComponentPerformanceRequest
     *
     * @return QueryComponentPerformanceResponse QueryComponentPerformanceResponse
     */
    public function queryComponentPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryComponentPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Get the List of Configurations for Activating XiaoQ Embedding
     *  *
     * @param QueryCopilotEmbedConfigRequest $request QueryCopilotEmbedConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCopilotEmbedConfigResponse QueryCopilotEmbedConfigResponse
     */
    public function queryCopilotEmbedConfigWithOptions($request, $runtime)
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
     * @summary Get the List of Configurations for Activating XiaoQ Embedding
     *  *
     * @param QueryCopilotEmbedConfigRequest $request QueryCopilotEmbedConfigRequest
     *
     * @return QueryCopilotEmbedConfigResponse QueryCopilotEmbedConfigResponse
     */
    public function queryCopilotEmbedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopilotEmbedConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries dataset optimization suggestions.
     *  *
     * @param QueryCubeOptimizationRequest $request QueryCubeOptimizationRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCubeOptimizationResponse QueryCubeOptimizationResponse
     */
    public function queryCubeOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries dataset optimization suggestions.
     *  *
     * @param QueryCubeOptimizationRequest $request QueryCubeOptimizationRequest
     *
     * @return QueryCubeOptimizationResponse QueryCubeOptimizationResponse
     */
    public function queryCubeOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCubeOptimizationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the performance logs of a dataset.
     *  *
     * @param QueryCubePerformanceRequest $request QueryCubePerformanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCubePerformanceResponse QueryCubePerformanceResponse
     */
    public function queryCubePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->costTimeAvgMin)) {
            $query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the performance logs of a dataset.
     *  *
     * @param QueryCubePerformanceRequest $request QueryCubePerformanceRequest
     *
     * @return QueryCubePerformanceResponse QueryCubePerformanceResponse
     */
    public function queryCubePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCubePerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Invoke the open data service API.
     *  *
     * @description ### Prerequisites
     * You need to create a data service API through Quick BI\\"s data service. For more details, see: [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * ### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call will also be intercepted by the row-level permission policy.
     *  *
     * @param QueryDataRequest $request QueryDataRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDataResponse QueryDataResponse
     */
    public function queryDataWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Invoke the open data service API.
     *  *
     * @description ### Prerequisites
     * You need to create a data service API through Quick BI\\"s data service. For more details, see: [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * ### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call will also be intercepted by the row-level permission policy.
     *  *
     * @param QueryDataRequest $request QueryDataRequest
     *
     * @return QueryDataResponse QueryDataResponse
     */
    public function queryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataWithOptions($request, $runtime);
    }

    /**
     * @summary Get Data Range Catalog List
     *  *
     * @param QueryDataRangeRequest $request QueryDataRangeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDataRangeResponse QueryDataRangeResponse
     */
    public function queryDataRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get Data Range Catalog List
     *  *
     * @param QueryDataRangeRequest $request QueryDataRangeRequest
     *
     * @return QueryDataRangeResponse QueryDataRangeResponse
     */
    public function queryDataRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataRangeWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI QueryDataService is deprecated, please use quickbi-public::2022-01-01::QueryData instead
     *  *
     * @summary Invoke an already created API in the data service.
     *  *
     * @description #### Prerequisites
     * You create the data service API through Quick BI\\"s data service. For more details, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * #### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call may be intercepted by the row-level permission policy.
     *  *
     * Deprecated
     *
     * @param QueryDataServiceRequest $request QueryDataServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDataServiceResponse QueryDataServiceResponse
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

    /**
     * @deprecated openAPI QueryDataService is deprecated, please use quickbi-public::2022-01-01::QueryData instead
     *  *
     * @summary Invoke an already created API in the data service.
     *  *
     * @description #### Prerequisites
     * You create the data service API through Quick BI\\"s data service. For more details, see [Data Service](https://help.aliyun.com/document_detail/144980.html).
     * #### Usage Restrictions
     * * The data service feature is only available to professional edition customers.
     * * The timeout for data service API calls is 60s, and the QPS for a single API is 10 times/second.
     * * If row-level permissions are enabled on the dataset referenced by the data service API, the API call may be intercepted by the row-level permission policy.
     *  *
     * Deprecated
     *
     * @param QueryDataServiceRequest $request QueryDataServiceRequest
     *
     * @return QueryDataServiceResponse QueryDataServiceResponse
     */
    public function queryDataService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Query Data Service API List
     *  *
     * @param QueryDataServiceListRequest $request QueryDataServiceListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDataServiceListResponse QueryDataServiceListResponse
     */
    public function queryDataServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
     * @summary Query Data Service API List
     *  *
     * @param QueryDataServiceListRequest $request QueryDataServiceListRequest
     *
     * @return QueryDataServiceListResponse QueryDataServiceListResponse
     */
    public function queryDataServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDataServiceListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a specified dataset, including the data source, directory, and dataset model.
     *  *
     * @description The data source, directory, and dataset model (including dimensions, measures, physical fields, custom SQL text, and association relationships).
     *  *
     * @param QueryDatasetDetailInfoRequest $request QueryDatasetDetailInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDatasetDetailInfoResponse QueryDatasetDetailInfoResponse
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
     * @summary Queries the details of a specified dataset, including the data source, directory, and dataset model.
     *  *
     * @description The data source, directory, and dataset model (including dimensions, measures, physical fields, custom SQL text, and association relationships).
     *  *
     * @param QueryDatasetDetailInfoRequest $request QueryDatasetDetailInfoRequest
     *
     * @return QueryDatasetDetailInfoResponse QueryDatasetDetailInfoResponse
     */
    public function queryDatasetDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetDetailInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether the table is a custom SQL table. Valid values:
     * \\*   true: custom SQL table
     * \\*   false: non-custom SQL table
     *  *
     * @param QueryDatasetInfoRequest $request QueryDatasetInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDatasetInfoResponse QueryDatasetInfoResponse
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
     * @summary Indicates whether the table is a custom SQL table. Valid values:
     * \\*   true: custom SQL table
     * \\*   false: non-custom SQL table
     *  *
     * @param QueryDatasetInfoRequest $request QueryDatasetInfoRequest
     *
     * @return QueryDatasetInfoResponse QueryDatasetInfoResponse
     */
    public function queryDatasetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetInfoWithOptions($request, $runtime);
    }

    /**
     * @summary The name of the training dataset.
     *  *
     * @param QueryDatasetListRequest $request QueryDatasetListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDatasetListResponse QueryDatasetListResponse
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
     * @summary The name of the training dataset.
     *  *
     * @param QueryDatasetListRequest $request QueryDatasetListRequest
     *
     * @return QueryDatasetListResponse QueryDatasetListResponse
     */
    public function queryDatasetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetListWithOptions($request, $runtime);
    }

    /**
     * @summary Check if the Dataset has Enabled Smart Query
     *  *
     * @param QueryDatasetSmartqStatusRequest $request QueryDatasetSmartqStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDatasetSmartqStatusResponse QueryDatasetSmartqStatusResponse
     */
    public function queryDatasetSmartqStatusWithOptions($request, $runtime)
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
     * @summary Check if the Dataset has Enabled Smart Query
     *  *
     * @param QueryDatasetSmartqStatusRequest $request QueryDatasetSmartqStatusRequest
     *
     * @return QueryDatasetSmartqStatusResponse QueryDatasetSmartqStatusResponse
     */
    public function queryDatasetSmartqStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetSmartqStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定数据集的行级权限开关状态。
     *  *
     * @param QueryDatasetSwitchInfoRequest $request QueryDatasetSwitchInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDatasetSwitchInfoResponse QueryDatasetSwitchInfoResponse
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
     * @summary 获取指定数据集的行级权限开关状态。
     *  *
     * @param QueryDatasetSwitchInfoRequest $request QueryDatasetSwitchInfoRequest
     *
     * @return QueryDatasetSwitchInfoResponse QueryDatasetSwitchInfoResponse
     */
    public function queryDatasetSwitchInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDatasetSwitchInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Obtain the embedding configuration in the organization, including the maximum number of embeddings and the number of embeddings.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEmbeddedInfoResponse QueryEmbeddedInfoResponse
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
     * @summary Obtain the embedding configuration in the organization, including the maximum number of embeddings and the number of embeddings.
     *  *
     * @return QueryEmbeddedInfoResponse QueryEmbeddedInfoResponse
     */
    public function queryEmbeddedInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmbeddedInfoWithOptions($runtime);
    }

    /**
     * @summary Queries whether embedding is enabled for a report.
     *  *
     * @param QueryEmbeddedStatusRequest $request QueryEmbeddedStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryEmbeddedStatusResponse QueryEmbeddedStatusResponse
     */
    public function queryEmbeddedStatusWithOptions($request, $runtime)
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
     * @summary Queries whether embedding is enabled for a report.
     *  *
     * @param QueryEmbeddedStatusRequest $request QueryEmbeddedStatusRequest
     *
     * @return QueryEmbeddedStatusResponse QueryEmbeddedStatusResponse
     */
    public function queryEmbeddedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEmbeddedStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Check which datasets and analysis themes the user has question authorization for
     *  *
     * @param QueryLlmCubeWithThemeListByUserIdRequest $request QueryLlmCubeWithThemeListByUserIdRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryLlmCubeWithThemeListByUserIdResponse QueryLlmCubeWithThemeListByUserIdResponse
     */
    public function queryLlmCubeWithThemeListByUserIdWithOptions($request, $runtime)
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
     * @summary Check which datasets and analysis themes the user has question authorization for
     *  *
     * @param QueryLlmCubeWithThemeListByUserIdRequest $request QueryLlmCubeWithThemeListByUserIdRequest
     *
     * @return QueryLlmCubeWithThemeListByUserIdResponse QueryLlmCubeWithThemeListByUserIdResponse
     */
    public function queryLlmCubeWithThemeListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLlmCubeWithThemeListByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary Gets the configuration of the specified organization role.
     *  *
     * @param QueryOrganizationRoleConfigRequest $request QueryOrganizationRoleConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOrganizationRoleConfigResponse QueryOrganizationRoleConfigResponse
     */
    public function queryOrganizationRoleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Gets the configuration of the specified organization role.
     *  *
     * @param QueryOrganizationRoleConfigRequest $request QueryOrganizationRoleConfigRequest
     *
     * @return QueryOrganizationRoleConfigResponse QueryOrganizationRoleConfigResponse
     */
    public function queryOrganizationRoleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrganizationRoleConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieve the list of workspaces under the current organization.
     *  *
     * @param QueryOrganizationWorkspaceListRequest $request QueryOrganizationWorkspaceListRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOrganizationWorkspaceListResponse QueryOrganizationWorkspaceListResponse
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
     * @summary Retrieve the list of workspaces under the current organization.
     *  *
     * @param QueryOrganizationWorkspaceListRequest $request QueryOrganizationWorkspaceListRequest
     *
     * @return QueryOrganizationWorkspaceListResponse QueryOrganizationWorkspaceListResponse
     */
    public function queryOrganizationWorkspaceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrganizationWorkspaceListWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI QueryReadableResourcesListByUserId is deprecated, please use quickbi-public::2022-01-01::QueryReadableResourcesListByUserIdV2 instead
     *  *
     * @summary Queries the list of works that a user has the permission to view, including the statements that are authorized to share in a space.
     *  *
     * Deprecated
     *
     * @param QueryReadableResourcesListByUserIdRequest $request QueryReadableResourcesListByUserIdRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReadableResourcesListByUserIdResponse QueryReadableResourcesListByUserIdResponse
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
     * @deprecated openAPI QueryReadableResourcesListByUserId is deprecated, please use quickbi-public::2022-01-01::QueryReadableResourcesListByUserIdV2 instead
     *  *
     * @summary Queries the list of works that a user has the permission to view, including the statements that are authorized to share in a space.
     *  *
     * Deprecated
     *
     * @param QueryReadableResourcesListByUserIdRequest $request QueryReadableResourcesListByUserIdRequest
     *
     * @return QueryReadableResourcesListByUserIdResponse QueryReadableResourcesListByUserIdResponse
     */
    public function queryReadableResourcesListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReadableResourcesListByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户有权查看的作品列表(新)
     *  *
     * @param QueryReadableResourcesListByUserIdV2Request $request QueryReadableResourcesListByUserIdV2Request
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReadableResourcesListByUserIdV2Response QueryReadableResourcesListByUserIdV2Response
     */
    public function queryReadableResourcesListByUserIdV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workType)) {
            $query['WorkType'] = $request->workType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReadableResourcesListByUserIdV2',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReadableResourcesListByUserIdV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户有权查看的作品列表(新)
     *  *
     * @param QueryReadableResourcesListByUserIdV2Request $request QueryReadableResourcesListByUserIdV2Request
     *
     * @return QueryReadableResourcesListByUserIdV2Response QueryReadableResourcesListByUserIdV2Response
     */
    public function queryReadableResourcesListByUserIdV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReadableResourcesListByUserIdV2WithOptions($request, $runtime);
    }

    /**
     * @summary Queries report performance logs.
     *  *
     * @param QueryReportPerformanceRequest $request QueryReportPerformanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryReportPerformanceResponse QueryReportPerformanceResponse
     */
    public function queryReportPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->costTimeAvgMin)) {
            $query['CostTimeAvgMin'] = $request->costTimeAvgMin;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries report performance logs.
     *  *
     * @param QueryReportPerformanceRequest $request QueryReportPerformanceRequest
     *
     * @return QueryReportPerformanceResponse QueryReportPerformanceResponse
     */
    public function queryReportPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReportPerformanceWithOptions($request, $runtime);
    }

    /**
     * @summary Query the list of objects to which a work has been shared, returning only the sharing configurations that are still within their validity period.
     *  *
     * @param QueryShareListRequest $request QueryShareListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryShareListResponse QueryShareListResponse
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
     * @summary Query the list of objects to which a work has been shared, returning only the sharing configurations that are still within their validity period.
     *  *
     * @param QueryShareListRequest $request QueryShareListRequest
     *
     * @return QueryShareListResponse QueryShareListResponse
     */
    public function queryShareList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShareListWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the list of works authorized to a user.
     *  *
     * @param QuerySharesToUserListRequest $request QuerySharesToUserListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySharesToUserListResponse QuerySharesToUserListResponse
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
     * @summary You can call this operation to query the list of works authorized to a user.
     *  *
     * @param QuerySharesToUserListRequest $request QuerySharesToUserListRequest
     *
     * @return QuerySharesToUserListResponse QuerySharesToUserListResponse
     */
    public function querySharesToUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySharesToUserListWithOptions($request, $runtime);
    }

    /**
     * @summary Check if a user has permission for a specific smart question dataset
     *  *
     * @param QuerySmartqPermissionByCubeIdRequest $request QuerySmartqPermissionByCubeIdRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmartqPermissionByCubeIdResponse QuerySmartqPermissionByCubeIdResponse
     */
    public function querySmartqPermissionByCubeIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Check if a user has permission for a specific smart question dataset
     *  *
     * @param QuerySmartqPermissionByCubeIdRequest $request QuerySmartqPermissionByCubeIdRequest
     *
     * @return QuerySmartqPermissionByCubeIdResponse QuerySmartqPermissionByCubeIdResponse
     */
    public function querySmartqPermissionByCubeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmartqPermissionByCubeIdWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of a specified ticket for a report that is not embedded in the report.
     *  *
     * @param QueryTicketInfoRequest $request QueryTicketInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTicketInfoResponse QueryTicketInfoResponse
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
     * @summary Obtains the details of a specified ticket for a report that is not embedded in the report.
     *  *
     * @param QueryTicketInfoRequest $request QueryTicketInfoRequest
     *
     * @return QueryTicketInfoResponse QueryTicketInfoResponse
     */
    public function queryTicketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketInfoWithOptions($request, $runtime);
    }

    /**
     * @summary You can this operation to obtain information about child user groups under a specified parent user group.
     *  *
     * @param QueryUserGroupListByParentIdRequest $request QueryUserGroupListByParentIdRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserGroupListByParentIdResponse QueryUserGroupListByParentIdResponse
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
     * @summary You can this operation to obtain information about child user groups under a specified parent user group.
     *  *
     * @param QueryUserGroupListByParentIdRequest $request QueryUserGroupListByParentIdRequest
     *
     * @return QueryUserGroupListByParentIdResponse QueryUserGroupListByParentIdResponse
     */
    public function queryUserGroupListByParentId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserGroupListByParentIdWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieve the list of members under a user group.
     *  *
     * @param QueryUserGroupMemberRequest $request QueryUserGroupMemberRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserGroupMemberResponse QueryUserGroupMemberResponse
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
     * @summary Retrieve the list of members under a user group.
     *  *
     * @param QueryUserGroupMemberRequest $request QueryUserGroupMemberRequest
     *
     * @return QueryUserGroupMemberResponse QueryUserGroupMemberResponse
     */
    public function queryUserGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserGroupMemberWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user information based on the Alibaba Cloud ID or Alibaba Cloud account name.
     *  *
     * @param QueryUserInfoByAccountRequest $request QueryUserInfoByAccountRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserInfoByAccountResponse QueryUserInfoByAccountResponse
     */
    public function queryUserInfoByAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->parentAccountName)) {
            $query['ParentAccountName'] = $request->parentAccountName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries user information based on the Alibaba Cloud ID or Alibaba Cloud account name.
     *  *
     * @param QueryUserInfoByAccountRequest $request QueryUserInfoByAccountRequest
     *
     * @return QueryUserInfoByAccountResponse QueryUserInfoByAccountResponse
     */
    public function queryUserInfoByAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserInfoByAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user information based on the user ID.
     *  *
     * @param QueryUserInfoByUserIdRequest $request QueryUserInfoByUserIdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserInfoByUserIdResponse QueryUserInfoByUserIdResponse
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
     * @summary Queries user information based on the user ID.
     *  *
     * @param QueryUserInfoByUserIdRequest $request QueryUserInfoByUserIdRequest
     *
     * @return QueryUserInfoByUserIdResponse QueryUserInfoByUserIdResponse
     */
    public function queryUserInfoByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserInfoByUserIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the members of an organization.
     *  *
     * @param QueryUserListRequest $request QueryUserListRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserListResponse QueryUserListResponse
     */
    public function queryUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the members of an organization.
     *  *
     * @param QueryUserListRequest $request QueryUserListRequest
     *
     * @return QueryUserListResponse QueryUserListResponse
     */
    public function queryUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserListWithOptions($request, $runtime);
    }

    /**
     * @summary Get the preset workspace role information for a specified workspace member.
     *  *
     * @param QueryUserRoleInfoInWorkspaceRequest $request QueryUserRoleInfoInWorkspaceRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserRoleInfoInWorkspaceResponse QueryUserRoleInfoInWorkspaceResponse
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
     * @summary Get the preset workspace role information for a specified workspace member.
     *  *
     * @param QueryUserRoleInfoInWorkspaceRequest $request QueryUserRoleInfoInWorkspaceRequest
     *
     * @return QueryUserRoleInfoInWorkspaceResponse QueryUserRoleInfoInWorkspaceResponse
     */
    public function queryUserRoleInfoInWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserRoleInfoInWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metadata list of member tags in an organization.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserTagMetaListResponse QueryUserTagMetaListResponse
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
     * @summary Queries the metadata list of member tags in an organization.
     *  *
     * @return QueryUserTagMetaListResponse QueryUserTagMetaListResponse
     */
    public function queryUserTagMetaList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserTagMetaListWithOptions($runtime);
    }

    /**
     * @summary Query the list of specific user tag values.
     *  *
     * @param QueryUserTagValueListRequest $request QueryUserTagValueListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserTagValueListResponse QueryUserTagValueListResponse
     */
    public function queryUserTagValueListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query the list of specific user tag values.
     *  *
     * @param QueryUserTagValueListRequest $request QueryUserTagValueListRequest
     *
     * @return QueryUserTagValueListResponse QueryUserTagValueListResponse
     */
    public function queryUserTagValueList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserTagValueListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a specified data work.
     *  *
     * @param QueryWorksRequest $request QueryWorksRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorksResponse QueryWorksResponse
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
     * @summary Queries information about a specified data work.
     *  *
     * @param QueryWorksRequest $request QueryWorksRequest
     *
     * @return QueryWorksResponse QueryWorksResponse
     */
    public function queryWorks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the kinship of a data work, including the datasets referenced by each component and query field information. Currently, only supported data works include dashboards, workbooks, and self-service data retrieval.
     *  *
     * @param QueryWorksBloodRelationshipRequest $request QueryWorksBloodRelationshipRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorksBloodRelationshipResponse QueryWorksBloodRelationshipResponse
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
     * @summary Obtains the kinship of a data work, including the datasets referenced by each component and query field information. Currently, only supported data works include dashboards, workbooks, and self-service data retrieval.
     *  *
     * @param QueryWorksBloodRelationshipRequest $request QueryWorksBloodRelationshipRequest
     *
     * @return QueryWorksBloodRelationshipResponse QueryWorksBloodRelationshipResponse
     */
    public function queryWorksBloodRelationship($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksBloodRelationshipWithOptions($request, $runtime);
    }

    /**
     * @summary Query all works under the entire organization, with the option to specify the type of work.
     *  *
     * @param QueryWorksByOrganizationRequest $request QueryWorksByOrganizationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorksByOrganizationResponse QueryWorksByOrganizationResponse
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
     * @summary Query all works under the entire organization, with the option to specify the type of work.
     *  *
     * @param QueryWorksByOrganizationRequest $request QueryWorksByOrganizationRequest
     *
     * @return QueryWorksByOrganizationResponse QueryWorksByOrganizationResponse
     */
    public function queryWorksByOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksByOrganizationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all works in a workspace under an organization. You can specify the type of work.
     *  *
     * @param QueryWorksByWorkspaceRequest $request QueryWorksByWorkspaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorksByWorkspaceResponse QueryWorksByWorkspaceResponse
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
     * @summary Queries all works in a workspace under an organization. You can specify the type of work.
     *  *
     * @param QueryWorksByWorkspaceRequest $request QueryWorksByWorkspaceRequest
     *
     * @return QueryWorksByWorkspaceResponse QueryWorksByWorkspaceResponse
     */
    public function queryWorksByWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorksByWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @summary Get Configuration Information for a Specified Workspace Role
     *  *
     * @param QueryWorkspaceRoleConfigRequest $request QueryWorkspaceRoleConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorkspaceRoleConfigResponse QueryWorkspaceRoleConfigResponse
     */
    public function queryWorkspaceRoleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Get Configuration Information for a Specified Workspace Role
     *  *
     * @param QueryWorkspaceRoleConfigRequest $request QueryWorkspaceRoleConfigRequest
     *
     * @return QueryWorkspaceRoleConfigResponse QueryWorkspaceRoleConfigResponse
     */
    public function queryWorkspaceRoleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorkspaceRoleConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Query the list of members under a specified workspace.
     *  *
     * @param QueryWorkspaceUserListRequest $request QueryWorkspaceUserListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWorkspaceUserListResponse QueryWorkspaceUserListResponse
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
     * @summary Query the list of members under a specified workspace.
     *  *
     * @param QueryWorkspaceUserListRequest $request QueryWorkspaceUserListRequest
     *
     * @return QueryWorkspaceUserListResponse QueryWorkspaceUserListResponse
     */
    public function queryWorkspaceUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorkspaceUserListWithOptions($request, $runtime);
    }

    /**
     * @summary You can customize the callback interface for approval processes to process Quick BI approval processes.
     *  *
     * @param ResultCallbackRequest $request ResultCallbackRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResultCallbackResponse ResultCallbackResponse
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
     * @summary You can customize the callback interface for approval processes to process Quick BI approval processes.
     *  *
     * @param ResultCallbackRequest $request ResultCallbackRequest
     *
     * @return ResultCallbackResponse ResultCallbackResponse
     */
    public function resultCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resultCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary Add a user\\"s favorite work
     *  *
     * @param SaveFavoritesRequest $request SaveFavoritesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveFavoritesResponse SaveFavoritesResponse
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
     * @summary Add a user\\"s favorite work
     *  *
     * @param SaveFavoritesRequest $request SaveFavoritesRequest
     *
     * @return SaveFavoritesResponse SaveFavoritesResponse
     */
    public function saveFavorites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveFavoritesWithOptions($request, $runtime);
    }

    /**
     * @summary 设置行列权限的额外配置
     *  *
     * @param SetDataLevelPermissionExtraConfigRequest $request SetDataLevelPermissionExtraConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDataLevelPermissionExtraConfigResponse SetDataLevelPermissionExtraConfigResponse
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
     * @summary 设置行列权限的额外配置
     *  *
     * @param SetDataLevelPermissionExtraConfigRequest $request SetDataLevelPermissionExtraConfigRequest
     *
     * @return SetDataLevelPermissionExtraConfigResponse SetDataLevelPermissionExtraConfigResponse
     */
    public function setDataLevelPermissionExtraConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionExtraConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 设置单条数据集行列权限配置信息（新增和更新）
     *  *
     * @param SetDataLevelPermissionRuleConfigRequest $request SetDataLevelPermissionRuleConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDataLevelPermissionRuleConfigResponse SetDataLevelPermissionRuleConfigResponse
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
     * @summary 设置单条数据集行列权限配置信息（新增和更新）
     *  *
     * @param SetDataLevelPermissionRuleConfigRequest $request SetDataLevelPermissionRuleConfigRequest
     *
     * @return SetDataLevelPermissionRuleConfigResponse SetDataLevelPermissionRuleConfigResponse
     */
    public function setDataLevelPermissionRuleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionRuleConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the whitelist for the specified row-level permissions.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *  *
     * @param SetDataLevelPermissionWhiteListRequest $request SetDataLevelPermissionWhiteListRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDataLevelPermissionWhiteListResponse SetDataLevelPermissionWhiteListResponse
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
     * @summary Sets the whitelist for the specified row-level permissions.
     *  *
     * @description > : You can only Quick BI the new row-column permission model. If you are still using the old row-column permission model, migrate to the new row-column permission model before you call this operation. To migrate row-level permissions to the new row-level permission model, perform the following steps: Choose Organizations> Security Configurations> Upgrade Row-Level Permissions. On the Upgrade Row-Level Permissions page, click **Upgrade**.
     *  *
     * @param SetDataLevelPermissionWhiteListRequest $request SetDataLevelPermissionWhiteListRequest
     *
     * @return SetDataLevelPermissionWhiteListResponse SetDataLevelPermissionWhiteListResponse
     */
    public function setDataLevelPermissionWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataLevelPermissionWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronize the question count permissions of a specified user to other users
     *  *
     * @param SmartqAuthTransferRequest $request SmartqAuthTransferRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SmartqAuthTransferResponse SmartqAuthTransferResponse
     */
    public function smartqAuthTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->originUserId)) {
            $query['OriginUserId'] = $request->originUserId;
        }
        if (!Utils::isUnset($request->targetUserIds)) {
            $query['TargetUserIds'] = $request->targetUserIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Synchronize the question count permissions of a specified user to other users
     *  *
     * @param SmartqAuthTransferRequest $request SmartqAuthTransferRequest
     *
     * @return SmartqAuthTransferResponse SmartqAuthTransferResponse
     */
    public function smartqAuthTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqAuthTransferWithOptions($request, $runtime);
    }

    /**
     * @summary Batch Management of Smart Q\\\\\\&A Authorizations
     *  *
     * @description Used for batch management of smart Q&A authorizations. Repeatedly adding an authorization will be treated as a new addition; repeatedly deleting an authorization will be skipped by default and will not be recorded in the audit log.
     *  *
     * @param SmartqAuthorizeRequest $request SmartqAuthorizeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SmartqAuthorizeResponse SmartqAuthorizeResponse
     */
    public function smartqAuthorizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeIds)) {
            $query['CubeIds'] = $request->cubeIds;
        }
        if (!Utils::isUnset($request->expireDay)) {
            $query['ExpireDay'] = $request->expireDay;
        }
        if (!Utils::isUnset($request->llmCubeThemes)) {
            $query['LlmCubeThemes'] = $request->llmCubeThemes;
        }
        if (!Utils::isUnset($request->llmCubes)) {
            $query['LlmCubes'] = $request->llmCubes;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Batch Management of Smart Q\\\\\\&A Authorizations
     *  *
     * @description Used for batch management of smart Q&A authorizations. Repeatedly adding an authorization will be treated as a new addition; repeatedly deleting an authorization will be skipped by default and will not be recorded in the audit log.
     *  *
     * @param SmartqAuthorizeRequest $request SmartqAuthorizeRequest
     *
     * @return SmartqAuthorizeResponse SmartqAuthorizeResponse
     */
    public function smartqAuthorize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqAuthorizeWithOptions($request, $runtime);
    }

    /**
     * @summary Query Capability Open
     *  *
     * @description Special Note: When a user is authorized to call this API, it is assumed that the user has the permission to query the corresponding data by passing in the userId as that user.
     *  *
     * @param SmartqQueryAbilityRequest $request SmartqQueryAbilityRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SmartqQueryAbilityResponse SmartqQueryAbilityResponse
     */
    public function smartqQueryAbilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cubeId)) {
            $query['CubeId'] = $request->cubeId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userQuestion)) {
            $query['UserQuestion'] = $request->userQuestion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Query Capability Open
     *  *
     * @description Special Note: When a user is authorized to call this API, it is assumed that the user has the permission to query the corresponding data by passing in the userId as that user.
     *  *
     * @param SmartqQueryAbilityRequest $request SmartqQueryAbilityRequest
     *
     * @return SmartqQueryAbilityResponse SmartqQueryAbilityResponse
     */
    public function smartqQueryAbility($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartqQueryAbilityWithOptions($request, $runtime);
    }

    /**
     * @summary Indicates whether the request is successful. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *  *
     * @description The execution result of the interface. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *  *
     * @param UpdateDataLevelPermissionStatusRequest $request UpdateDataLevelPermissionStatusRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDataLevelPermissionStatusResponse UpdateDataLevelPermissionStatusResponse
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
     * @summary Indicates whether the request is successful. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *  *
     * @description The execution result of the interface. Valid values:
     * *   true: The request was successful.
     * *   false: The request failed.
     *  *
     * @param UpdateDataLevelPermissionStatusRequest $request UpdateDataLevelPermissionStatusRequest
     *
     * @return UpdateDataLevelPermissionStatusResponse UpdateDataLevelPermissionStatusResponse
     */
    public function updateDataLevelPermissionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataLevelPermissionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Change the embedding status of a report, turn on embedding, or turn off embedding.
     *  *
     * @param UpdateEmbeddedStatusRequest $request UpdateEmbeddedStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEmbeddedStatusResponse UpdateEmbeddedStatusResponse
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
     * @summary Change the embedding status of a report, turn on embedding, or turn off embedding.
     *  *
     * @param UpdateEmbeddedStatusRequest $request UpdateEmbeddedStatusRequest
     *
     * @return UpdateEmbeddedStatusResponse UpdateEmbeddedStatusResponse
     */
    public function updateEmbeddedStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEmbeddedStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Update the ticket quantity on the specified ticket used for the exemption embedded report.
     *  *
     * @param UpdateTicketNumRequest $request UpdateTicketNumRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTicketNumResponse UpdateTicketNumResponse
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
     * @summary Update the ticket quantity on the specified ticket used for the exemption embedded report.
     *  *
     * @param UpdateTicketNumRequest $request UpdateTicketNumRequest
     *
     * @return UpdateTicketNumResponse UpdateTicketNumResponse
     */
    public function updateTicketNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketNumWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information of a specified member in an organization.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
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
        if (!Utils::isUnset($request->isDeleted)) {
            $query['IsDeleted'] = $request->isDeleted;
        }
        if (!Utils::isUnset($request->nickName)) {
            $query['NickName'] = $request->nickName;
        }
        if (!Utils::isUnset($request->roleIds)) {
            $query['RoleIds'] = $request->roleIds;
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
     * @summary Updates the information of a specified member in an organization.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a specified user group in an organization.
     *  *
     * @param UpdateUserGroupRequest $request UpdateUserGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserGroupResponse UpdateUserGroupResponse
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
     * @summary Updates information about a specified user group in an organization.
     *  *
     * @param UpdateUserGroupRequest $request UpdateUserGroupRequest
     *
     * @return UpdateUserGroupResponse UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Used for updating the metadata of organization member tags
     *  *
     * @param UpdateUserTagMetaRequest $request UpdateUserTagMetaRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserTagMetaResponse UpdateUserTagMetaResponse
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
     * @summary Used for updating the metadata of organization member tags
     *  *
     * @param UpdateUserTagMetaRequest $request UpdateUserTagMetaRequest
     *
     * @return UpdateUserTagMetaResponse UpdateUserTagMetaResponse
     */
    public function updateUserTagMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserTagMetaWithOptions($request, $runtime);
    }

    /**
     * @summary Update the tag value of an organization member.
     *  *
     * @param UpdateUserTagValueRequest $request UpdateUserTagValueRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserTagValueResponse UpdateUserTagValueResponse
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
     * @summary Update the tag value of an organization member.
     *  *
     * @param UpdateUserTagValueRequest $request UpdateUserTagValueRequest
     *
     * @return UpdateUserTagValueResponse UpdateUserTagValueResponse
     */
    public function updateUserTagValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserTagValueWithOptions($request, $runtime);
    }

    /**
     * @summary Modify the role of a specified member under the workspace, existing roles will be overwritten.
     *  *
     * @param UpdateWorkspaceUserRoleRequest $request UpdateWorkspaceUserRoleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceUserRoleResponse UpdateWorkspaceUserRoleResponse
     */
    public function updateWorkspaceUserRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->roleId)) {
            $query['RoleId'] = $request->roleId;
        }
        if (!Utils::isUnset($request->roleIds)) {
            $query['RoleIds'] = $request->roleIds;
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
     * @summary Modify the role of a specified member under the workspace, existing roles will be overwritten.
     *  *
     * @param UpdateWorkspaceUserRoleRequest $request UpdateWorkspaceUserRoleRequest
     *
     * @return UpdateWorkspaceUserRoleResponse UpdateWorkspaceUserRoleResponse
     */
    public function updateWorkspaceUserRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceUserRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Batch update the role information of workspace members, existing roles will be overwritten
     *  *
     * @param UpdateWorkspaceUsersRoleRequest $request UpdateWorkspaceUsersRoleRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceUsersRoleResponse UpdateWorkspaceUsersRoleResponse
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
     * @summary Batch update the role information of workspace members, existing roles will be overwritten
     *  *
     * @param UpdateWorkspaceUsersRoleRequest $request UpdateWorkspaceUsersRoleRequest
     *
     * @return UpdateWorkspaceUsersRoleResponse UpdateWorkspaceUsersRoleResponse
     */
    public function updateWorkspaceUsersRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkspaceUsersRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Make the user exit all user groups. This process is irreversible. Exercise caution when performing this operation.
     *  *
     * @param WithdrawAllUserGroupsRequest $request WithdrawAllUserGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return WithdrawAllUserGroupsResponse WithdrawAllUserGroupsResponse
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
     * @summary Make the user exit all user groups. This process is irreversible. Exercise caution when performing this operation.
     *  *
     * @param WithdrawAllUserGroupsRequest $request WithdrawAllUserGroupsRequest
     *
     * @return WithdrawAllUserGroupsResponse WithdrawAllUserGroupsResponse
     */
    public function withdrawAllUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawAllUserGroupsWithOptions($request, $runtime);
    }
}
