<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddStoryFilesRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddStoryFilesResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AssignRoleRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AssignRoleResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AuditLogExportRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AuditLogExportResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AuthorizeRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AuthorizeResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AuthorizeShrinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\BatchResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CancelAssignRoleRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CancelAssignRoleResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CancelShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CancelShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ClearRecyclebinRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ClearRecyclebinResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CompleteFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CompleteFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CopyFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CopyFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateIdentityToBenefitPkgMappingRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateIdentityToBenefitPkgMappingResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateOrderRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateOrderResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateSimilarImageClusterTaskRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateSimilarImageClusterTaskResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateStoryRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateStoryResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\CsiGetFileInfoRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\CsiGetFileInfoResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteRevisionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteRevisionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteStoryRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteStoryResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeltaGetLastCursorRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DeltaGetLastCursorResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\DownloadFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\DownloadFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileAddPermissionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileAddPermissionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileDeleteUserTagsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileDeleteUserTagsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileListPermissionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileListPermissionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\FilePutUserTagsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\FilePutUserTagsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileRemovePermissionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\FileRemovePermissionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetAsyncTaskRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetAsyncTaskResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDefaultDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDefaultDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDomainQuotaResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDomainRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDomainResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDownloadUrlRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDownloadUrlResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetGroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetGroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetIdentityToBenefitPkgMappingRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetIdentityToBenefitPkgMappingResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetLinkInfoByUserIdRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetLinkInfoByUserIdResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetLinkInfoRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetLinkInfoResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetRevisionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetRevisionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkByAnonymousRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkByAnonymousResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkTokenRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetShareLinkTokenResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetStoryRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetStoryResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetVideoPreviewPlayInfoRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetVideoPreviewPlayInfoResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetVideoPreviewPlayMetaRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GetVideoPreviewPlayMetaResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\GroupUpdateNameRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\GroupUpdateNameResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ImportUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ImportUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\LinkAccountRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\LinkAccountResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListAddressGroupsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListAddressGroupsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListAssignmentRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListAssignmentResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDeltaRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDeltaResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListFacegroupsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListFacegroupsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListGroupMemberRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListGroupMemberResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListGroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListGroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListIdentityRoleRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListIdentityRoleResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListIdentityToBenefitPkgMappingRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListIdentityToBenefitPkgMappingResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListMyDrivesRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListMyDrivesResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListMyGroupDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListMyGroupDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListReceivedFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListReceivedFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListRecyclebinRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListRecyclebinResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListRevisionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListRevisionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListTagsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListTagsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListUploadedPartsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListUploadedPartsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\MoveFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\MoveFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\QueryOrderPriceRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\QueryOrderPriceResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveFaceGroupFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveFaceGroupFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveGroupMemberRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveGroupMemberResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveStoryFilesRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveStoryFilesResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\RestoreFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\RestoreFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\RestoreRevisionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\RestoreRevisionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\ScanFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\ScanFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchAddressGroupsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchAddressGroupsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchDomainsRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchDomainsResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchSimilarImageClustersRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchSimilarImageClustersResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\TokenRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\TokenResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\TrashFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\TrashFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UnLinkAccountRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UnLinkAccountResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateDomainRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateDomainResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateDriveRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateDriveResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateFacegroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateFacegroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateIdentityToBenefitPkgMappingRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateIdentityToBenefitPkgMappingResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateRevisionRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateRevisionResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateShareLinkRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateShareLinkResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateStoryRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateStoryResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoDRMLicenseRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\VideoDRMLicenseResponse;
use Darabonba\GatewayPds\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Pds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'pds';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_disableHttp2 = true;
        $this->_endpointRule = '';
    }

    /**
     * Adds a member to a group.
     *
     * @param request - AddGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGroupMemberResponse
     *
     * @param AddGroupMemberRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->memberId) {
            @$body['member_id'] = $request->memberId;
        }

        if (null !== $request->memberType) {
            @$body['member_type'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGroupMember',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/add_member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a member to a group.
     *
     * @param request - AddGroupMemberRequest
     *
     * @returns AddGroupMemberResponse
     *
     * @param AddGroupMemberRequest $request
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 故事添加文件.
     *
     * @param request - AddStoryFilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddStoryFilesResponse
     *
     * @param AddStoryFilesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddStoryFilesResponse
     */
    public function addStoryFilesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddStoryFiles',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/add_story_files',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddStoryFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 故事添加文件.
     *
     * @param request - AddStoryFilesRequest
     *
     * @returns AddStoryFilesResponse
     *
     * @param AddStoryFilesRequest $request
     *
     * @return AddStoryFilesResponse
     */
    public function addStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addStoryFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * Assigns a group administrator role to a user.
     *
     * @remarks
     * You can call this operation to assign a group administrator role to a user.
     *
     * @param request - AssignRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignRoleResponse
     *
     * @param AssignRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AssignRoleResponse
     */
    public function assignRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->manageResourceId) {
            @$body['manage_resource_id'] = $request->manageResourceId;
        }

        if (null !== $request->manageResourceType) {
            @$body['manage_resource_type'] = $request->manageResourceType;
        }

        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignRole',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/role/assign',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssignRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Assigns a group administrator role to a user.
     *
     * @remarks
     * You can call this operation to assign a group administrator role to a user.
     *
     * @param request - AssignRoleRequest
     *
     * @returns AssignRoleResponse
     *
     * @param AssignRoleRequest $request
     *
     * @return AssignRoleResponse
     */
    public function assignRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->assignRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Exports audit logs.
     *
     * @remarks
     * Log audit is a value-added feature that is provided by Drive and Photo Service (PDS) Developer Edition. Before you call this operation, make sure that you learn about the [value-added billable items](https://www.alibabacloud.com/help/document_detail/425220.html).
     *
     * @param request - AuditLogExportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuditLogExportResponse
     *
     * @param AuditLogExportRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AuditLogExportResponse
     */
    public function auditLogExportWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileName) {
            @$body['file_name'] = $request->fileName;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuditLogExport',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/audit_log/export',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuditLogExportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Exports audit logs.
     *
     * @remarks
     * Log audit is a value-added feature that is provided by Drive and Photo Service (PDS) Developer Edition. Before you call this operation, make sure that you learn about the [value-added billable items](https://www.alibabacloud.com/help/document_detail/425220.html).
     *
     * @param request - AuditLogExportRequest
     *
     * @returns AuditLogExportResponse
     *
     * @param AuditLogExportRequest $request
     *
     * @return AuditLogExportResponse
     */
    public function auditLogExport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->auditLogExportWithOptions($request, $headers, $runtime);
    }

    /**
     * Requests permissions by using OAuth 2.0.
     *
     * @remarks
     * For more information, see "OAuth 2.0 For Web Server Applications" at [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/en/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications) in User Guide.
     *
     * @param tmpReq - AuthorizeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeResponse
     *
     * @param AuthorizeRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AuthorizeResponse
     */
    public function authorizeWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scope) {
            $request->scopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scope, 'scope', 'simple');
        }

        $query = [];
        if (null !== $request->clientId) {
            @$query['client_id'] = $request->clientId;
        }

        if (null !== $request->hideConsent) {
            @$query['hide_consent'] = $request->hideConsent;
        }

        if (null !== $request->loginType) {
            @$query['login_type'] = $request->loginType;
        }

        if (null !== $request->redirectUri) {
            @$query['redirect_uri'] = $request->redirectUri;
        }

        if (null !== $request->responseType) {
            @$query['response_type'] = $request->responseType;
        }

        if (null !== $request->scopeShrink) {
            @$query['scope'] = $request->scopeShrink;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Authorize',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/oauth/authorize',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'binary',
        ]);

        return AuthorizeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Requests permissions by using OAuth 2.0.
     *
     * @remarks
     * For more information, see "OAuth 2.0 For Web Server Applications" at [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/en/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications) in User Guide.
     *
     * @param request - AuthorizeRequest
     *
     * @returns AuthorizeResponse
     *
     * @param AuthorizeRequest $request
     *
     * @return AuthorizeResponse
     */
    public function authorize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeWithOptions($request, $headers, $runtime);
    }

    /**
     * Calls multiple operations at a time to improve call efficiency.
     *
     * @param request - BatchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchResponse
     *
     * @param BatchRequest   $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BatchResponse
     */
    public function batchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->requests) {
            @$body['requests'] = $request->requests;
        }

        if (null !== $request->resource) {
            @$body['resource'] = $request->resource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Batch',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/batch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Calls multiple operations at a time to improve call efficiency.
     *
     * @param request - BatchRequest
     *
     * @returns BatchResponse
     *
     * @param BatchRequest $request
     *
     * @return BatchResponse
     */
    public function batch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels a role.
     *
     * @remarks
     * You can cancel only the group administrator role.
     *
     * @param request - CancelAssignRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAssignRoleResponse
     *
     * @param CancelAssignRoleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CancelAssignRoleResponse
     */
    public function cancelAssignRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->manageResourceId) {
            @$body['manage_resource_id'] = $request->manageResourceId;
        }

        if (null !== $request->manageResourceType) {
            @$body['manage_resource_type'] = $request->manageResourceType;
        }

        if (null !== $request->roleId) {
            @$body['role_id'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelAssignRole',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/role/cancel_assign',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelAssignRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels a role.
     *
     * @remarks
     * You can cancel only the group administrator role.
     *
     * @param request - CancelAssignRoleRequest
     *
     * @returns CancelAssignRoleResponse
     *
     * @param CancelAssignRoleRequest $request
     *
     * @return CancelAssignRoleResponse
     */
    public function cancelAssignRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAssignRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a share link.
     *
     * @param request - CancelShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelShareLinkResponse
     *
     * @param CancelShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CancelShareLinkResponse
     */
    public function cancelShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a share link.
     *
     * @param request - CancelShareLinkRequest
     *
     * @returns CancelShareLinkResponse
     *
     * @param CancelShareLinkRequest $request
     *
     * @return CancelShareLinkResponse
     */
    public function cancelShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Empties the recycle bin.
     *
     * @param request - ClearRecyclebinRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearRecyclebinResponse
     *
     * @param ClearRecyclebinRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ClearRecyclebinResponse
     */
    public function clearRecyclebinWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ClearRecyclebin',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/recyclebin/clear',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ClearRecyclebinResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Empties the recycle bin.
     *
     * @param request - ClearRecyclebinRequest
     *
     * @returns ClearRecyclebinResponse
     *
     * @param ClearRecyclebinRequest $request
     *
     * @return ClearRecyclebinResponse
     */
    public function clearRecyclebin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->clearRecyclebinWithOptions($request, $headers, $runtime);
    }

    /**
     * Completes the upload of a file.
     *
     * @param request - CompleteFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteFileResponse
     *
     * @param CompleteFileRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CompleteFileResponse
     */
    public function completeFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->crc64Hash) {
            @$body['crc64_hash'] = $request->crc64Hash;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->uploadId) {
            @$body['upload_id'] = $request->uploadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompleteFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/complete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompleteFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Completes the upload of a file.
     *
     * @param request - CompleteFileRequest
     *
     * @returns CompleteFileResponse
     *
     * @param CompleteFileRequest $request
     *
     * @return CompleteFileResponse
     */
    public function completeFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Copies a file or folder.
     *
     * @param request - CopyFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyFileResponse
     *
     * @param CopyFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return CopyFileResponse
     */
    public function copyFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRename) {
            @$body['auto_rename'] = $request->autoRename;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->toDriveId) {
            @$body['to_drive_id'] = $request->toDriveId;
        }

        if (null !== $request->toParentFileId) {
            @$body['to_parent_file_id'] = $request->toParentFileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/copy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CopyFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Copies a file or folder.
     *
     * @param request - CopyFileRequest
     *
     * @returns CopyFileResponse
     *
     * @param CopyFileRequest $request
     *
     * @return CopyFileResponse
     */
    public function copyFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->copyFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建自定义故事.
     *
     * @param request - CreateCustomizedStoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomizedStoryResponse
     *
     * @param CreateCustomizedStoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCustomizedStoryResponse
     */
    public function createCustomizedStoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customLabels) {
            @$body['custom_labels'] = $request->customLabels;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->storyCover) {
            @$body['story_cover'] = $request->storyCover;
        }

        if (null !== $request->storyFiles) {
            @$body['story_files'] = $request->storyFiles;
        }

        if (null !== $request->storyName) {
            @$body['story_name'] = $request->storyName;
        }

        if (null !== $request->storySubType) {
            @$body['story_sub_type'] = $request->storySubType;
        }

        if (null !== $request->storyType) {
            @$body['story_type'] = $request->storyType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCustomizedStory',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/create_customized_story',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCustomizedStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建自定义故事.
     *
     * @param request - CreateCustomizedStoryRequest
     *
     * @returns CreateCustomizedStoryResponse
     *
     * @param CreateCustomizedStoryRequest $request
     *
     * @return CreateCustomizedStoryResponse
     */
    public function createCustomizedStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomizedStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * test_domain.
     *
     * @remarks
     * The description of the domain.
     *
     * @param request - CreateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainName) {
            @$body['domain_name'] = $request->domainName;
        }

        if (null !== $request->initDriveEnable) {
            @$body['init_drive_enable'] = $request->initDriveEnable;
        }

        if (null !== $request->initDriveSize) {
            @$body['init_drive_size'] = $request->initDriveSize;
        }

        if (null !== $request->parentDomainId) {
            @$body['parent_domain_id'] = $request->parentDomainId;
        }

        if (null !== $request->sizeQuota) {
            @$body['size_quota'] = $request->sizeQuota;
        }

        if (null !== $request->userCountQuota) {
            @$body['user_count_quota'] = $request->userCountQuota;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * test_domain.
     *
     * @remarks
     * The description of the domain.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a drive.
     *
     * @param request - CreateDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDriveResponse
     *
     * @param CreateDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDriveResponse
     */
    public function createDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->default) {
            @$body['default'] = $request->default;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->driveName) {
            @$body['drive_name'] = $request->driveName;
        }

        if (null !== $request->driveType) {
            @$body['drive_type'] = $request->driveType;
        }

        if (null !== $request->owner) {
            @$body['owner'] = $request->owner;
        }

        if (null !== $request->ownerType) {
            @$body['owner_type'] = $request->ownerType;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->totalSize) {
            @$body['total_size'] = $request->totalSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a drive.
     *
     * @param request - CreateDriveRequest
     *
     * @returns CreateDriveResponse
     *
     * @param CreateDriveRequest $request
     *
     * @return CreateDriveResponse
     */
    public function createDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a file or folder.
     *
     * @param request - CreateFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileResponse
     *
     * @param CreateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkNameMode) {
            @$body['check_name_mode'] = $request->checkNameMode;
        }

        if (null !== $request->contentHash) {
            @$body['content_hash'] = $request->contentHash;
        }

        if (null !== $request->contentHashName) {
            @$body['content_hash_name'] = $request->contentHashName;
        }

        if (null !== $request->contentType) {
            @$body['content_type'] = $request->contentType;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->hidden) {
            @$body['hidden'] = $request->hidden;
        }

        if (null !== $request->imageMediaMetadata) {
            @$body['image_media_metadata'] = $request->imageMediaMetadata;
        }

        if (null !== $request->localCreatedAt) {
            @$body['local_created_at'] = $request->localCreatedAt;
        }

        if (null !== $request->localModifiedAt) {
            @$body['local_modified_at'] = $request->localModifiedAt;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parallelUpload) {
            @$body['parallel_upload'] = $request->parallelUpload;
        }

        if (null !== $request->parentFileId) {
            @$body['parent_file_id'] = $request->parentFileId;
        }

        if (null !== $request->partInfoList) {
            @$body['part_info_list'] = $request->partInfoList;
        }

        if (null !== $request->preHash) {
            @$body['pre_hash'] = $request->preHash;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->size) {
            @$body['size'] = $request->size;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->userTags) {
            @$body['user_tags'] = $request->userTags;
        }

        if (null !== $request->videoMediaMetadata) {
            @$body['video_media_metadata'] = $request->videoMediaMetadata;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a file or folder.
     *
     * @param request - CreateFileRequest
     *
     * @returns CreateFileResponse
     *
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a group.
     *
     * @param request - CreateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$body['group_name'] = $request->groupName;
        }

        if (null !== $request->isRoot) {
            @$body['is_root'] = $request->isRoot;
        }

        if (null !== $request->parentGroupId) {
            @$body['parent_group_id'] = $request->parentGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a group.
     *
     * @param request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *
     * @remarks
     * If you need to manage a large number of users based on Drive and Photo Service, you can control the features and quotas that users can use based on the benefits to which they are entitled. For more information, join the DingTalk group (ID 23146118).
     *
     * @param request - CreateIdentityToBenefitPkgMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdentityToBenefitPkgMappingResponse
     *
     * @param CreateIdentityToBenefitPkgMappingRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateIdentityToBenefitPkgMappingResponse
     */
    public function createIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->benefitPkgId) {
            @$body['benefit_pkg_id'] = $request->benefitPkgId;
        }

        if (null !== $request->expireTime) {
            @$body['expire_time'] = $request->expireTime;
        }

        if (null !== $request->identityId) {
            @$body['identity_id'] = $request->identityId;
        }

        if (null !== $request->identityType) {
            @$body['identity_type'] = $request->identityType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIdentityToBenefitPkgMapping',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/benefit/identity_to_benefit_pkg_mapping/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *
     * @remarks
     * If you need to manage a large number of users based on Drive and Photo Service, you can control the features and quotas that users can use based on the benefits to which they are entitled. For more information, join the DingTalk group (ID 23146118).
     *
     * @param request - CreateIdentityToBenefitPkgMappingRequest
     *
     * @returns CreateIdentityToBenefitPkgMappingResponse
     *
     * @param CreateIdentityToBenefitPkgMappingRequest $request
     *
     * @return CreateIdentityToBenefitPkgMappingResponse
     */
    public function createIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建凌霄订单.
     *
     * @param request - CreateOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
     */
    public function createOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoPay) {
            @$body['auto_pay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['auto_renew'] = $request->autoRenew;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->instanceId) {
            @$body['instance_id'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$body['order_type'] = $request->orderType;
        }

        if (null !== $request->package) {
            @$body['package'] = $request->package;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['period_unit'] = $request->periodUnit;
        }

        if (null !== $request->totalSize) {
            @$body['total_size'] = $request->totalSize;
        }

        if (null !== $request->userCount) {
            @$body['user_count'] = $request->userCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrder',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/create_order',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建凌霄订单.
     *
     * @param request - CreateOrderRequest
     *
     * @returns CreateOrderResponse
     *
     * @param CreateOrderRequest $request
     *
     * @return CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a share URL.
     *
     * @remarks
     * A share is a file view container. You can grant anonymous users the permissions to access files in the user drive by using the share URL. Anonymous users can access the files based on the granted permissions.
     *
     * @param request - CreateShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateShareLinkResponse
     *
     * @param CreateShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateShareLinkResponse
     */
    public function createShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creatable) {
            @$body['creatable'] = $request->creatable;
        }

        if (null !== $request->creatableFileIdList) {
            @$body['creatable_file_id_list'] = $request->creatableFileIdList;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->disableDownload) {
            @$body['disable_download'] = $request->disableDownload;
        }

        if (null !== $request->disablePreview) {
            @$body['disable_preview'] = $request->disablePreview;
        }

        if (null !== $request->disableSave) {
            @$body['disable_save'] = $request->disableSave;
        }

        if (null !== $request->downloadLimit) {
            @$body['download_limit'] = $request->downloadLimit;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->expiration) {
            @$body['expiration'] = $request->expiration;
        }

        if (null !== $request->fileIdList) {
            @$body['file_id_list'] = $request->fileIdList;
        }

        if (null !== $request->officeEditable) {
            @$body['office_editable'] = $request->officeEditable;
        }

        if (null !== $request->previewLimit) {
            @$body['preview_limit'] = $request->previewLimit;
        }

        if (null !== $request->requireLogin) {
            @$body['require_login'] = $request->requireLogin;
        }

        if (null !== $request->saveLimit) {
            @$body['save_limit'] = $request->saveLimit;
        }

        if (null !== $request->shareAllFiles) {
            @$body['share_all_files'] = $request->shareAllFiles;
        }

        if (null !== $request->shareName) {
            @$body['share_name'] = $request->shareName;
        }

        if (null !== $request->sharePwd) {
            @$body['share_pwd'] = $request->sharePwd;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a share URL.
     *
     * @remarks
     * A share is a file view container. You can grant anonymous users the permissions to access files in the user drive by using the share URL. Anonymous users can access the files based on the granted permissions.
     *
     * @param request - CreateShareLinkRequest
     *
     * @returns CreateShareLinkResponse
     *
     * @param CreateShareLinkRequest $request
     *
     * @return CreateShareLinkResponse
     */
    public function createShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建相似图片聚类任务
     *
     * @param request - CreateSimilarImageClusterTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimilarImageClusterTaskResponse
     *
     * @param CreateSimilarImageClusterTaskRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateSimilarImageClusterTaskResponse
     */
    public function createSimilarImageClusterTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSimilarImageClusterTask',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/create_similar_image_cluster_task',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSimilarImageClusterTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建相似图片聚类任务
     *
     * @param request - CreateSimilarImageClusterTaskRequest
     *
     * @returns CreateSimilarImageClusterTaskResponse
     *
     * @param CreateSimilarImageClusterTaskRequest $request
     *
     * @return CreateSimilarImageClusterTaskResponse
     */
    public function createSimilarImageClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSimilarImageClusterTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建推荐故事.
     *
     * @param request - CreateStoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStoryResponse
     *
     * @param CreateStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoryResponse
     */
    public function createStoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->address) {
            @$body['address'] = $request->address;
        }

        if (null !== $request->customLabels) {
            @$body['custom_labels'] = $request->customLabels;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->maxImageCount) {
            @$body['max_image_count'] = $request->maxImageCount;
        }

        if (null !== $request->minImageCount) {
            @$body['min_image_count'] = $request->minImageCount;
        }

        if (null !== $request->storyEndTime) {
            @$body['story_end_time'] = $request->storyEndTime;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        if (null !== $request->storyName) {
            @$body['story_name'] = $request->storyName;
        }

        if (null !== $request->storyStartTime) {
            @$body['story_start_time'] = $request->storyStartTime;
        }

        if (null !== $request->storySubType) {
            @$body['story_sub_type'] = $request->storySubType;
        }

        if (null !== $request->storyType) {
            @$body['story_type'] = $request->storyType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateStory',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/create_story',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建推荐故事.
     *
     * @param request - CreateStoryRequest
     *
     * @returns CreateStoryResponse
     *
     * @param CreateStoryRequest $request
     *
     * @return CreateStoryResponse
     */
    public function createStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a user.
     *
     * @param request - CreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->groupInfoList) {
            @$body['group_info_list'] = $request->groupInfoList;
        }

        if (null !== $request->nickName) {
            @$body['nick_name'] = $request->nickName;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->role) {
            @$body['role'] = $request->role;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->userData) {
            @$body['user_data'] = $request->userData;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a user.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文件内容安全信息.
     *
     * @param request - CsiGetFileInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CsiGetFileInfoResponse
     *
     * @param CsiGetFileInfoRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CsiGetFileInfoResponse
     */
    public function csiGetFileInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CsiGetFileInfo',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/csi/get_file_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CsiGetFileInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文件内容安全信息.
     *
     * @param request - CsiGetFileInfoRequest
     *
     * @returns CsiGetFileInfoResponse
     *
     * @param CsiGetFileInfoRequest $request
     *
     * @return CsiGetFileInfoResponse
     */
    public function csiGetFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->csiGetFileInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Delete the domain.
     *
     * @param request - DeleteDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainId) {
            @$body['domain_id'] = $request->domainId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete the domain.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a drive.
     *
     * @param request - DeleteDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDriveResponse
     *
     * @param DeleteDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteDriveResponse
     */
    public function deleteDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a drive.
     *
     * @param request - DeleteDriveRequest
     *
     * @returns DeleteDriveResponse
     *
     * @param DeleteDriveRequest $request
     *
     * @return DeleteDriveResponse
     */
    public function deleteDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a file or folder.
     *
     * @param request - DeleteFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileResponse
     *
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a file or folder.
     *
     * @param request - DeleteFileRequest
     *
     * @returns DeleteFileResponse
     *
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes groups. Before you delete a group, make sure that no other groups or users exist in the group. Otherwise, the group fails to be deleted.
     *
     * @param request - DeleteGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes groups. Before you delete a group, make sure that no other groups or users exist in the group. Otherwise, the group fails to be deleted.
     *
     * @param request - DeleteGroupRequest
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a historical version of a file. You cannot delete the latest version of a file.
     *
     * @param request - DeleteRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRevisionResponse
     *
     * @param DeleteRevisionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteRevisionResponse
     */
    public function deleteRevisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->revisionId) {
            @$body['revision_id'] = $request->revisionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRevision',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/revision/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a historical version of a file. You cannot delete the latest version of a file.
     *
     * @param request - DeleteRevisionRequest
     *
     * @returns DeleteRevisionResponse
     *
     * @param DeleteRevisionRequest $request
     *
     * @return DeleteRevisionResponse
     */
    public function deleteRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除故事.
     *
     * @param request - DeleteStoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStoryResponse
     *
     * @param DeleteStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStoryResponse
     */
    public function deleteStoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteStory',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/delete_story',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除故事.
     *
     * @param request - DeleteStoryRequest
     *
     * @returns DeleteStoryResponse
     *
     * @param DeleteStoryRequest $request
     *
     * @return DeleteStoryResponse
     */
    public function deleteStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a user.
     *
     * @param request - DeleteUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserResponse
     *
     * @param DeleteUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a user.
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
        $headers = [];

        return $this->deleteUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the cursor of incremental information.
     *
     * @param request - DeltaGetLastCursorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeltaGetLastCursorResponse
     *
     * @param DeltaGetLastCursorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeltaGetLastCursorResponse
     */
    public function deltaGetLastCursorWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->syncRootId) {
            @$body['sync_root_id'] = $request->syncRootId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeltaGetLastCursor',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get_last_cursor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeltaGetLastCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the cursor of incremental information.
     *
     * @param request - DeltaGetLastCursorRequest
     *
     * @returns DeltaGetLastCursorResponse
     *
     * @param DeltaGetLastCursorRequest $request
     *
     * @return DeltaGetLastCursorResponse
     */
    public function deltaGetLastCursor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deltaGetLastCursorWithOptions($request, $headers, $runtime);
    }

    /**
     * Downloads a file.
     *
     * @remarks
     * For information about best practices for downloading a file.
     *
     * @param request - DownloadFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadFileResponse
     *
     * @param DownloadFileRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DownloadFileResponse
     */
    public function downloadFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->driveId) {
            @$query['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$query['file_id'] = $request->fileId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$query['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->officeThumbnailProcess) {
            @$query['office_thumbnail_process'] = $request->officeThumbnailProcess;
        }

        if (null !== $request->shareId) {
            @$query['share_id'] = $request->shareId;
        }

        if (null !== $request->videoThumbnailProcess) {
            @$query['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/download',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'binary',
        ]);

        return DownloadFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Downloads a file.
     *
     * @remarks
     * For information about best practices for downloading a file.
     *
     * @param request - DownloadFileRequest
     *
     * @returns DownloadFileResponse
     *
     * @param DownloadFileRequest $request
     *
     * @return DownloadFileResponse
     */
    public function downloadFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Grants permissions to access files to a user or group.
     *
     * @param request - FileAddPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileAddPermissionResponse
     *
     * @param FileAddPermissionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FileAddPermissionResponse
     */
    public function fileAddPermissionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->memberList) {
            @$body['member_list'] = $request->memberList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileAddPermission',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/add_permission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FileAddPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Grants permissions to access files to a user or group.
     *
     * @param request - FileAddPermissionRequest
     *
     * @returns FileAddPermissionResponse
     *
     * @param FileAddPermissionRequest $request
     *
     * @return FileAddPermissionResponse
     */
    public function fileAddPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAddPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes custom tags from a file.
     *
     * @param request - FileDeleteUserTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileDeleteUserTagsResponse
     *
     * @param FileDeleteUserTagsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FileDeleteUserTagsResponse
     */
    public function fileDeleteUserTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->keyList) {
            @$body['key_list'] = $request->keyList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileDeleteUserTags',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/delete_usertags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FileDeleteUserTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes custom tags from a file.
     *
     * @param request - FileDeleteUserTagsRequest
     *
     * @returns FileDeleteUserTagsResponse
     *
     * @param FileDeleteUserTagsRequest $request
     *
     * @return FileDeleteUserTagsResponse
     */
    public function fileDeleteUserTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileDeleteUserTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the sharing authorization records of a file.
     *
     * @param request - FileListPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileListPermissionResponse
     *
     * @param FileListPermissionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FileListPermissionResponse
     */
    public function fileListPermissionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileListPermission',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/list_permission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return FileListPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the sharing authorization records of a file.
     *
     * @param request - FileListPermissionRequest
     *
     * @returns FileListPermissionResponse
     *
     * @param FileListPermissionRequest $request
     *
     * @return FileListPermissionResponse
     */
    public function fileListPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileListPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds custom tags to a file.
     *
     * @remarks
     * This operation is an incremental update operation. Take note of the following items:
     * *   If a tag name specified in the request is the same as an existing tag name, the existing tag is overwritten.
     * *   If a tag name specified in the request is different from the existing tag names, the specified tag is added.
     * *   The existing tags with unique names are not affected.
     *
     * @param request - FilePutUserTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FilePutUserTagsResponse
     *
     * @param FilePutUserTagsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return FilePutUserTagsResponse
     */
    public function filePutUserTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->userTags) {
            @$body['user_tags'] = $request->userTags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FilePutUserTags',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/put_usertags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FilePutUserTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds custom tags to a file.
     *
     * @remarks
     * This operation is an incremental update operation. Take note of the following items:
     * *   If a tag name specified in the request is the same as an existing tag name, the existing tag is overwritten.
     * *   If a tag name specified in the request is different from the existing tag names, the specified tag is added.
     * *   The existing tags with unique names are not affected.
     *
     * @param request - FilePutUserTagsRequest
     *
     * @returns FilePutUserTagsResponse
     *
     * @param FilePutUserTagsRequest $request
     *
     * @return FilePutUserTagsResponse
     */
    public function filePutUserTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->filePutUserTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Cancels the permissions on a shared file.
     *
     * @param request - FileRemovePermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileRemovePermissionResponse
     *
     * @param FileRemovePermissionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FileRemovePermissionResponse
     */
    public function fileRemovePermissionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->memberList) {
            @$body['member_list'] = $request->memberList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileRemovePermission',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/remove_permission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FileRemovePermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels the permissions on a shared file.
     *
     * @param request - FileRemovePermissionRequest
     *
     * @returns FileRemovePermissionResponse
     *
     * @param FileRemovePermissionRequest $request
     *
     * @return FileRemovePermissionResponse
     */
    public function fileRemovePermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileRemovePermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncTaskResponse
     *
     * @param GetAsyncTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asyncTaskId) {
            @$body['async_task_id'] = $request->asyncTaskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAsyncTask',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/async_task/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an asynchronous task.
     *
     * @param request - GetAsyncTaskRequest
     *
     * @returns GetAsyncTaskResponse
     *
     * @param GetAsyncTaskRequest $request
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the default drive of a user.
     *
     * @param request - GetDefaultDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDefaultDriveResponse
     *
     * @param GetDefaultDriveRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDefaultDriveResponse
     */
    public function getDefaultDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDefaultDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/get_default_drive',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDefaultDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the default drive of a user.
     *
     * @param request - GetDefaultDriveRequest
     *
     * @returns GetDefaultDriveResponse
     *
     * @param GetDefaultDriveRequest $request
     *
     * @return GetDefaultDriveResponse
     */
    public function getDefaultDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDefaultDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Get domain information.
     *
     * @param request - GetDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainResponse
     *
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainId) {
            @$body['domain_id'] = $request->domainId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->getQuotaUsed) {
            @$body['get_quota_used'] = $request->getQuotaUsed;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDomain',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get domain information.
     *
     * @param request - GetDomainRequest
     *
     * @returns GetDomainResponse
     *
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取domain限额.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDomainQuotaResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDomainQuotaResponse
     */
    public function getDomainQuotaWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDomainQuota',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/get_quota',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDomainQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取domain限额.
     *
     * @returns GetDomainQuotaResponse
     *
     * @return GetDomainQuotaResponse
     */
    public function getDomainQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainQuotaWithOptions($headers, $runtime);
    }

    /**
     * Queries the download URL of a file. For more information about best practices, visit https://help.aliyun.com/document_detail/175889.html.
     *
     * @param request - GetDownloadUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDownloadUrlResponse
     *
     * @param GetDownloadUrlRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->expireSec) {
            @$body['expire_sec'] = $request->expireSec;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->fileName) {
            @$body['file_name'] = $request->fileName;
        }

        if (null !== $request->responseContentType) {
            @$body['response_content_type'] = $request->responseContentType;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDownloadUrl',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get_download_url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDownloadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the download URL of a file. For more information about best practices, visit https://help.aliyun.com/document_detail/175889.html.
     *
     * @param request - GetDownloadUrlRequest
     *
     * @returns GetDownloadUrlResponse
     *
     * @param GetDownloadUrlRequest $request
     *
     * @return GetDownloadUrlResponse
     */
    public function getDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDownloadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a drive.
     *
     * @param request - GetDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDriveResponse
     *
     * @param GetDriveRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetDriveResponse
     */
    public function getDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a drive.
     *
     * @param request - GetDriveRequest
     *
     * @returns GetDriveResponse
     *
     * @param GetDriveRequest $request
     *
     * @return GetDriveResponse
     */
    public function getDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a file.
     *
     * @param request - GetFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileResponse
     *
     * @param GetFileRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
     */
    public function getFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->thumbnailProcesses) {
            @$body['thumbnail_processes'] = $request->thumbnailProcesses;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a file.
     *
     * @param request - GetFileRequest
     *
     * @returns GetFileResponse
     *
     * @param GetFileRequest $request
     *
     * @return GetFileResponse
     */
    public function getFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a group.
     *
     * @param request - GetGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a group.
     *
     * @param request - GetGroupRequest
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     *
     * @return GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the mapping between an entity and a benefit package. You can call this operation to query the benefit package that is associated with a user.
     *
     * @param request - GetIdentityToBenefitPkgMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdentityToBenefitPkgMappingResponse
     *
     * @param GetIdentityToBenefitPkgMappingRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetIdentityToBenefitPkgMappingResponse
     */
    public function getIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->benefitPkgId) {
            @$body['benefit_pkg_id'] = $request->benefitPkgId;
        }

        if (null !== $request->identityId) {
            @$body['identity_id'] = $request->identityId;
        }

        if (null !== $request->identityType) {
            @$body['identity_type'] = $request->identityType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetIdentityToBenefitPkgMapping',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/benefit/identity_to_benefit_pkg_mapping/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the mapping between an entity and a benefit package. You can call this operation to query the benefit package that is associated with a user.
     *
     * @param request - GetIdentityToBenefitPkgMappingRequest
     *
     * @returns GetIdentityToBenefitPkgMappingResponse
     *
     * @param GetIdentityToBenefitPkgMappingRequest $request
     *
     * @return GetIdentityToBenefitPkgMappingResponse
     */
    public function getIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about an account.
     *
     * @param request - GetLinkInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLinkInfoResponse
     *
     * @param GetLinkInfoRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetLinkInfoResponse
     */
    public function getLinkInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extra) {
            @$body['extra'] = $request->extra;
        }

        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLinkInfo',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/account/get_link_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLinkInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an account.
     *
     * @param request - GetLinkInfoRequest
     *
     * @returns GetLinkInfoResponse
     *
     * @param GetLinkInfoRequest $request
     *
     * @return GetLinkInfoResponse
     */
    public function getLinkInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLinkInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a user based on the user ID.
     *
     * @param request - GetLinkInfoByUserIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLinkInfoByUserIdResponse
     *
     * @param GetLinkInfoByUserIdRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetLinkInfoByUserIdResponse
     */
    public function getLinkInfoByUserIdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLinkInfoByUserId',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/account/get_link_info_by_user_id',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLinkInfoByUserIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a user based on the user ID.
     *
     * @param request - GetLinkInfoByUserIdRequest
     *
     * @returns GetLinkInfoByUserIdResponse
     *
     * @param GetLinkInfoByUserIdRequest $request
     *
     * @return GetLinkInfoByUserIdResponse
     */
    public function getLinkInfoByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLinkInfoByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a version.
     *
     * @param request - GetRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRevisionResponse
     *
     * @param GetRevisionRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetRevisionResponse
     */
    public function getRevisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->revisionId) {
            @$body['revision_id'] = $request->revisionId;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRevision',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/revision/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a version.
     *
     * @param request - GetRevisionRequest
     *
     * @returns GetRevisionResponse
     *
     * @param GetRevisionRequest $request
     *
     * @return GetRevisionResponse
     */
    public function getRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the share URL of a file.
     *
     * @param request - GetShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetShareLinkResponse
     *
     * @param GetShareLinkRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetShareLinkResponse
     */
    public function getShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the share URL of a file.
     *
     * @param request - GetShareLinkRequest
     *
     * @returns GetShareLinkResponse
     *
     * @param GetShareLinkRequest $request
     *
     * @return GetShareLinkResponse
     */
    public function getShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a share link anonymously.
     *
     * @param request - GetShareLinkByAnonymousRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetShareLinkByAnonymousResponse
     *
     * @param GetShareLinkByAnonymousRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetShareLinkByAnonymousResponse
     */
    public function getShareLinkByAnonymousWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetShareLinkByAnonymous',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/get_by_anonymous',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetShareLinkByAnonymousResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a share link anonymously.
     *
     * @param request - GetShareLinkByAnonymousRequest
     *
     * @returns GetShareLinkByAnonymousResponse
     *
     * @param GetShareLinkByAnonymousRequest $request
     *
     * @return GetShareLinkByAnonymousResponse
     */
    public function getShareLinkByAnonymous($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkByAnonymousWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a share token anonymously.
     *
     * @remarks
     * To access a file by using a share link, you must first obtain a share token, even if the value of share_pwd of this share is an empty string, which specifies that the share is not private.
     *
     * @param request - GetShareLinkTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetShareLinkTokenResponse
     *
     * @param GetShareLinkTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetShareLinkTokenResponse
     */
    public function getShareLinkTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireSec) {
            @$body['expire_sec'] = $request->expireSec;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->sharePwd) {
            @$body['share_pwd'] = $request->sharePwd;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetShareLinkToken',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/get_share_token',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetShareLinkTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a share token anonymously.
     *
     * @remarks
     * To access a file by using a share link, you must first obtain a share token, even if the value of share_pwd of this share is an empty string, which specifies that the share is not private.
     *
     * @param request - GetShareLinkTokenRequest
     *
     * @returns GetShareLinkTokenResponse
     *
     * @param GetShareLinkTokenRequest $request
     *
     * @return GetShareLinkTokenResponse
     */
    public function getShareLinkToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取故事详情.
     *
     * @param request - GetStoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStoryResponse
     *
     * @param GetStoryRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetStoryResponse
     */
    public function getStoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coverImageThumbnailProcess) {
            @$body['cover_image_thumbnail_process'] = $request->coverImageThumbnailProcess;
        }

        if (null !== $request->coverVideoThumbnailProcess) {
            @$body['cover_video_thumbnail_process'] = $request->coverVideoThumbnailProcess;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->imageUrlProcess) {
            @$body['image_url_process'] = $request->imageUrlProcess;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        if (null !== $request->videoThumbnailProcess) {
            @$body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetStory',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/get_story',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取故事详情.
     *
     * @param request - GetStoryRequest
     *
     * @returns GetStoryResponse
     *
     * @param GetStoryRequest $request
     *
     * @return GetStoryResponse
     */
    public function getStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the execution status of a value-added asynchronous task. You can call this operation to query the execution status of an asynchronous task that is created by calling the CreateSimilarImageClusterTask operation.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service**.
     * To call this operation, make sure that the value-added image processing feature is enabled.
     * Before you call this operation, a value-added asynchronous task must be created. For example, you can call the CreateSimilarImageClusterTask operation to create an asynchronous task. Then, you can call this operation to query the execution status of the asynchronous task based on the task ID.
     *
     * @param request - GetTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->taskId) {
            @$body['task_id'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/get_task_status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the execution status of a value-added asynchronous task. You can call this operation to query the execution status of an asynchronous task that is created by calling the CreateSimilarImageClusterTask operation.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service**.
     * To call this operation, make sure that the value-added image processing feature is enabled.
     * Before you call this operation, a value-added asynchronous task must be created. For example, you can call the CreateSimilarImageClusterTask operation to create an asynchronous task. Then, you can call this operation to query the execution status of the asynchronous task based on the task ID.
     *
     * @param request - GetTaskStatusRequest
     *
     * @returns GetTaskStatusResponse
     *
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the upload URL of a file.
     *
     * @param request - GetUploadUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadUrlResponse
     *
     * @param GetUploadUrlRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetUploadUrlResponse
     */
    public function getUploadUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->partInfoList) {
            @$body['part_info_list'] = $request->partInfoList;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->uploadId) {
            @$body['upload_id'] = $request->uploadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUploadUrl',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get_upload_url',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUploadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the upload URL of a file.
     *
     * @param request - GetUploadUrlRequest
     *
     * @returns GetUploadUrlResponse
     *
     * @param GetUploadUrlRequest $request
     *
     * @return GetUploadUrlResponse
     */
    public function getUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUploadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about a user.
     *
     * @param request - GetUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a user.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about video playback.
     *
     * @remarks
     *   **Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service (PDS).**
     * *   Before you call this operation, make sure that the transcoding mode which you want to specify by using the category parameter is enabled for the domain. To enable the transcoding feature and configure transcoding templates, contact our technical support. For more information, see [Contact us](https://help.aliyun.com/document_detail/175917.html).
     * *   This operation is a synchronous operation. If the specified file is not transcoded in the specified transcoding mode, the API call returns **202 VideoPreviewWaitAndRetry**, which indicates that you need to wait a moment and try again. If the specified file cannot be transcoded in the specified transcoding mode, the API call returns **404 NotFound.VideoPreviewInfo**.
     * *   This operation generates transcoding data and stores it in the space that is used to store the value-added data of the tenant domain. This way, end users can play audio and videos online. For specific transcoding modes, this operation provides domain-level deduplication for transcoding.
     * *   If the transcoding mode is set to quick_video, the playback URL returned by this operation contains the `{` and `}` characters that are not URL-encoded. For development on iOS, decode and encode the returned URL first to avoid decoding failure of the NSURL library of the system.
     * *   If the transcoding mode is set to quick_video, you cannot use the GET Range method to obtain segments of the M3U8 file in the playback URL.
     * >
     *
     * @param request - GetVideoPreviewPlayInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoPreviewPlayInfoResponse
     *
     * @param GetVideoPreviewPlayInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVideoPreviewPlayInfoResponse
     */
    public function getVideoPreviewPlayInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->getMasterUrl) {
            @$body['get_master_url'] = $request->getMasterUrl;
        }

        if (null !== $request->getWithoutUrl) {
            @$body['get_without_url'] = $request->getWithoutUrl;
        }

        if (null !== $request->reTranscode) {
            @$body['re_transcode'] = $request->reTranscode;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->templateId) {
            @$body['template_id'] = $request->templateId;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVideoPreviewPlayInfo',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get_video_preview_play_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoPreviewPlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about video playback.
     *
     * @remarks
     *   **Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service (PDS).**
     * *   Before you call this operation, make sure that the transcoding mode which you want to specify by using the category parameter is enabled for the domain. To enable the transcoding feature and configure transcoding templates, contact our technical support. For more information, see [Contact us](https://help.aliyun.com/document_detail/175917.html).
     * *   This operation is a synchronous operation. If the specified file is not transcoded in the specified transcoding mode, the API call returns **202 VideoPreviewWaitAndRetry**, which indicates that you need to wait a moment and try again. If the specified file cannot be transcoded in the specified transcoding mode, the API call returns **404 NotFound.VideoPreviewInfo**.
     * *   This operation generates transcoding data and stores it in the space that is used to store the value-added data of the tenant domain. This way, end users can play audio and videos online. For specific transcoding modes, this operation provides domain-level deduplication for transcoding.
     * *   If the transcoding mode is set to quick_video, the playback URL returned by this operation contains the `{` and `}` characters that are not URL-encoded. For development on iOS, decode and encode the returned URL first to avoid decoding failure of the NSURL library of the system.
     * *   If the transcoding mode is set to quick_video, you cannot use the GET Range method to obtain segments of the M3U8 file in the playback URL.
     * >
     *
     * @param request - GetVideoPreviewPlayInfoRequest
     *
     * @returns GetVideoPreviewPlayInfoResponse
     *
     * @param GetVideoPreviewPlayInfoRequest $request
     *
     * @return GetVideoPreviewPlayInfoResponse
     */
    public function getVideoPreviewPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoPreviewPlayInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the preview metadata of a video.
     *
     * @remarks
     * For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *
     * @param request - GetVideoPreviewPlayMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoPreviewPlayMetaResponse
     *
     * @param GetVideoPreviewPlayMetaRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVideoPreviewPlayMetaResponse
     */
    public function getVideoPreviewPlayMetaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVideoPreviewPlayMeta',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/get_video_preview_play_meta',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoPreviewPlayMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the preview metadata of a video.
     *
     * @remarks
     * For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *
     * @param request - GetVideoPreviewPlayMetaRequest
     *
     * @returns GetVideoPreviewPlayMetaResponse
     *
     * @param GetVideoPreviewPlayMetaRequest $request
     *
     * @return GetVideoPreviewPlayMetaResponse
     */
    public function getVideoPreviewPlayMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoPreviewPlayMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新用户组名字.
     *
     * @param request - GroupUpdateNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GroupUpdateNameResponse
     *
     * @param GroupUpdateNameRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GroupUpdateNameResponse
     */
    public function groupUpdateNameWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GroupUpdateName',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/update_name',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GroupUpdateNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新用户组名字.
     *
     * @param request - GroupUpdateNameRequest
     *
     * @returns GroupUpdateNameResponse
     *
     * @param GroupUpdateNameRequest $request
     *
     * @return GroupUpdateNameResponse
     */
    public function groupUpdateName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->groupUpdateNameWithOptions($request, $headers, $runtime);
    }

    /**
     * Imports a user.
     *
     * @param request - ImportUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportUserResponse
     *
     * @param ImportUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ImportUserResponse
     */
    public function importUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authenticationDisplayName) {
            @$body['authentication_display_name'] = $request->authenticationDisplayName;
        }

        if (null !== $request->authenticationType) {
            @$body['authentication_type'] = $request->authenticationType;
        }

        if (null !== $request->autoCreateDrive) {
            @$body['auto_create_drive'] = $request->autoCreateDrive;
        }

        if (null !== $request->driveTotalSize) {
            @$body['drive_total_size'] = $request->driveTotalSize;
        }

        if (null !== $request->extra) {
            @$body['extra'] = $request->extra;
        }

        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->nickName) {
            @$body['nick_name'] = $request->nickName;
        }

        if (null !== $request->parentGroupId) {
            @$body['parent_group_id'] = $request->parentGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/import',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ImportUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports a user.
     *
     * @param request - ImportUserRequest
     *
     * @returns ImportUserResponse
     *
     * @param ImportUserRequest $request
     *
     * @return ImportUserResponse
     */
    public function importUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 送审文件.
     *
     * @param request - InvestigateFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvestigateFileResponse
     *
     * @param InvestigateFileRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvestigateFileResponse
     */
    public function investigateFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveFileIds) {
            @$body['drive_file_ids'] = $request->driveFileIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvestigateFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/csi/investigate_file',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvestigateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 送审文件.
     *
     * @param request - InvestigateFileRequest
     *
     * @returns InvestigateFileResponse
     *
     * @param InvestigateFileRequest $request
     *
     * @return InvestigateFileResponse
     */
    public function investigateFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->investigateFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Associates an account with a user.
     *
     * @param request - LinkAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LinkAccountResponse
     *
     * @param LinkAccountRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return LinkAccountResponse
     */
    public function linkAccountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extra) {
            @$body['extra'] = $request->extra;
        }

        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LinkAccount',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/account/link',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LinkAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates an account with a user.
     *
     * @param request - LinkAccountRequest
     *
     * @returns LinkAccountResponse
     *
     * @param LinkAccountRequest $request
     *
     * @return LinkAccountResponse
     */
    public function linkAccount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->linkAccountWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries location-based groups.
     *
     * @param request - ListAddressGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAddressGroupsResponse
     *
     * @param ListAddressGroupsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAddressGroupsResponse
     */
    public function listAddressGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->videoThumbnailProcess) {
            @$body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAddressGroups',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/list_address_groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAddressGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries location-based groups.
     *
     * @param request - ListAddressGroupsRequest
     *
     * @returns ListAddressGroupsResponse
     *
     * @param ListAddressGroupsRequest $request
     *
     * @return ListAddressGroupsResponse
     */
    public function listAddressGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddressGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of assigned roles. For example, you can query the administrators of a group by group ID.
     *
     * @param request - ListAssignmentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssignmentResponse
     *
     * @param ListAssignmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAssignmentResponse
     */
    public function listAssignmentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->manageResourceId) {
            @$body['manage_resource_id'] = $request->manageResourceId;
        }

        if (null !== $request->manageResourceType) {
            @$body['manage_resource_type'] = $request->manageResourceType;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAssignment',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/role/list_assignment',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAssignmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of assigned roles. For example, you can query the administrators of a group by group ID.
     *
     * @param request - ListAssignmentRequest
     *
     * @returns ListAssignmentResponse
     *
     * @param ListAssignmentRequest $request
     *
     * @return ListAssignmentResponse
     */
    public function listAssignment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAssignmentWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries incremental information.
     *
     * @param request - ListDeltaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeltaResponse
     *
     * @param ListDeltaRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDeltaResponse
     */
    public function listDeltaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cursor) {
            @$body['cursor'] = $request->cursor;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->syncRootId) {
            @$body['sync_root_id'] = $request->syncRootId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDelta',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/list_delta',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeltaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries incremental information.
     *
     * @param request - ListDeltaRequest
     *
     * @returns ListDeltaResponse
     *
     * @param ListDeltaRequest $request
     *
     * @return ListDeltaResponse
     */
    public function listDelta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeltaWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举 domain.
     *
     * @param request - ListDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->parentDomainId) {
            @$body['parent_domain_id'] = $request->parentDomainId;
        }

        if (null !== $request->serviceCode) {
            @$body['service_code'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDomains',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举 domain.
     *
     * @param request - ListDomainsRequest
     *
     * @returns ListDomainsResponse
     *
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of drives.
     *
     * @param request - ListDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDriveResponse
     *
     * @param ListDriveRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDriveResponse
     */
    public function listDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->owner) {
            @$body['owner'] = $request->owner;
        }

        if (null !== $request->ownerType) {
            @$body['owner_type'] = $request->ownerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of drives.
     *
     * @param request - ListDriveRequest
     *
     * @returns ListDriveResponse
     *
     * @param ListDriveRequest $request
     *
     * @return ListDriveResponse
     */
    public function listDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries face-based groups.
     *
     * @param request - ListFacegroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFacegroupsResponse
     *
     * @param ListFacegroupsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListFacegroupsResponse
     */
    public function listFacegroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->remarks) {
            @$body['remarks'] = $request->remarks;
        }

        if (null !== $request->returnTotalCount) {
            @$body['return_total_count'] = $request->returnTotalCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFacegroups',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/list_facegroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFacegroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries face-based groups.
     *
     * @param request - ListFacegroupsRequest
     *
     * @returns ListFacegroupsResponse
     *
     * @param ListFacegroupsRequest $request
     *
     * @return ListFacegroupsResponse
     */
    public function listFacegroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFacegroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of files and folders.
     *
     * @param request - ListFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFileResponse
     *
     * @param ListFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
     */
    public function listFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$body['order_direction'] = $request->orderDirection;
        }

        if (null !== $request->parentFileId) {
            @$body['parent_file_id'] = $request->parentFileId;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->thumbnailProcesses) {
            @$body['thumbnail_processes'] = $request->thumbnailProcesses;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of files and folders.
     *
     * @param request - ListFileRequest
     *
     * @returns ListFileResponse
     *
     * @param ListFileRequest $request
     *
     * @return ListFileResponse
     */
    public function listFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries groups.
     *
     * @param request - ListGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListGroupResponse
     */
    public function listGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListGroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries groups.
     *
     * @param request - ListGroupRequest
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $request
     *
     * @return ListGroupResponse
     */
    public function listGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the members of a group.
     *
     * @param request - ListGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupMemberResponse
     *
     * @param ListGroupMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->memberType) {
            @$body['member_type'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListGroupMember',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/list_member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the members of a group.
     *
     * @param request - ListGroupMemberRequest
     *
     * @returns ListGroupMemberResponse
     *
     * @param ListGroupMemberRequest $request
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举用户或团队已分配的角色列表.
     *
     * @param request - ListIdentityRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityRoleResponse
     *
     * @param ListIdentityRoleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListIdentityRoleResponse
     */
    public function listIdentityRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIdentityRole',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/role/list_identity_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIdentityRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举用户或团队已分配的角色列表.
     *
     * @param request - ListIdentityRoleRequest
     *
     * @returns ListIdentityRoleResponse
     *
     * @param ListIdentityRoleRequest $request
     *
     * @return ListIdentityRoleResponse
     */
    public function listIdentityRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the mappings between entities and benefit packages. You can call this operation to query the benefit packages that are associated with a user.
     *
     * @param request - ListIdentityToBenefitPkgMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIdentityToBenefitPkgMappingResponse
     *
     * @param ListIdentityToBenefitPkgMappingRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIdentityToBenefitPkgMappingResponse
     */
    public function listIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identityId) {
            @$body['identity_id'] = $request->identityId;
        }

        if (null !== $request->identityType) {
            @$body['identity_type'] = $request->identityType;
        }

        if (null !== $request->includeExpired) {
            @$body['include_expired'] = $request->includeExpired;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIdentityToBenefitPkgMapping',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/benefit/identity_to_benefit_pkg_mapping/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the mappings between entities and benefit packages. You can call this operation to query the benefit packages that are associated with a user.
     *
     * @param request - ListIdentityToBenefitPkgMappingRequest
     *
     * @returns ListIdentityToBenefitPkgMappingResponse
     *
     * @param ListIdentityToBenefitPkgMappingRequest $request
     *
     * @return ListIdentityToBenefitPkgMappingResponse
     */
    public function listIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the drives of the current user.
     *
     * @param request - ListMyDrivesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMyDrivesResponse
     *
     * @param ListMyDrivesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMyDrivesResponse
     */
    public function listMyDrivesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMyDrives',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/list_my_drives',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMyDrivesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the drives of the current user.
     *
     * @param request - ListMyDrivesRequest
     *
     * @returns ListMyDrivesResponse
     *
     * @param ListMyDrivesRequest $request
     *
     * @return ListMyDrivesResponse
     */
    public function listMyDrives($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMyDrivesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the team drives that can be accessed by the authorized users.
     *
     * @param request - ListMyGroupDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMyGroupDriveResponse
     *
     * @param ListMyGroupDriveRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMyGroupDriveResponse
     */
    public function listMyGroupDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveName) {
            @$body['drive_name'] = $request->driveName;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMyGroupDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/list_my_group_drive',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMyGroupDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the team drives that can be accessed by the authorized users.
     *
     * @param request - ListMyGroupDriveRequest
     *
     * @returns ListMyGroupDriveResponse
     *
     * @param ListMyGroupDriveRequest $request
     *
     * @return ListMyGroupDriveResponse
     */
    public function listMyGroupDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMyGroupDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of files that are shared with a user. You can call this operation to query a list of files in a personal drive on which a user is granted permissions.
     *
     * @param request - ListReceivedFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReceivedFileResponse
     *
     * @param ListReceivedFileRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListReceivedFileResponse
     */
    public function listReceivedFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListReceivedFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/list_received_file',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListReceivedFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of files that are shared with a user. You can call this operation to query a list of files in a personal drive on which a user is granted permissions.
     *
     * @param request - ListReceivedFileRequest
     *
     * @returns ListReceivedFileResponse
     *
     * @param ListReceivedFileRequest $request
     *
     * @return ListReceivedFileResponse
     */
    public function listReceivedFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReceivedFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the information about files and folders in the recycle bin.
     *
     * @param request - ListRecyclebinRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecyclebinResponse
     *
     * @param ListRecyclebinRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRecyclebinResponse
     */
    public function listRecyclebinWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->thumbnailProcesses) {
            @$body['thumbnail_processes'] = $request->thumbnailProcesses;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRecyclebin',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/recyclebin/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRecyclebinResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about files and folders in the recycle bin.
     *
     * @param request - ListRecyclebinRequest
     *
     * @returns ListRecyclebinResponse
     *
     * @param ListRecyclebinRequest $request
     *
     * @return ListRecyclebinResponse
     */
    public function listRecyclebin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecyclebinWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the versions of a file.
     *
     * @param request - ListRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRevisionResponse
     *
     * @param ListRevisionRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListRevisionResponse
     */
    public function listRevisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRevision',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/revision/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the versions of a file.
     *
     * @param request - ListRevisionRequest
     *
     * @returns ListRevisionResponse
     *
     * @param ListRevisionRequest $request
     *
     * @return ListRevisionResponse
     */
    public function listRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries shares.
     *
     * @remarks
     * This operation is discontinued. To query shares, you can call the SearchShareLink operation.
     *
     * @param request - ListShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListShareLinkResponse
     *
     * @param ListShareLinkRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListShareLinkResponse
     */
    public function listShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creator) {
            @$body['creator'] = $request->creator;
        }

        if (null !== $request->includeCancelled) {
            @$body['include_cancelled'] = $request->includeCancelled;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$body['order_direction'] = $request->orderDirection;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries shares.
     *
     * @remarks
     * This operation is discontinued. To query shares, you can call the SearchShareLink operation.
     *
     * @param request - ListShareLinkRequest
     *
     * @returns ListShareLinkResponse
     *
     * @param ListShareLinkRequest $request
     *
     * @return ListShareLinkResponse
     */
    public function listShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries tags.
     *
     * @remarks
     * You can call this operation to query the tags within the specified drive at a time. The top 2,000 tags of the images are returned.
     *
     * @param request - ListTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->videoThumbnailProcess) {
            @$body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/list_tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries tags.
     *
     * @remarks
     * You can call this operation to query the tags within the specified drive at a time. The top 2,000 tags of the images are returned.
     *
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the file parts that are uploaded.
     *
     * @param request - ListUploadedPartsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUploadedPartsResponse
     *
     * @param ListUploadedPartsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUploadedPartsResponse
     */
    public function listUploadedPartsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->partNumberMarker) {
            @$body['part_number_marker'] = $request->partNumberMarker;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->uploadId) {
            @$body['upload_id'] = $request->uploadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUploadedParts',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/list_uploaded_parts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUploadedPartsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the file parts that are uploaded.
     *
     * @param request - ListUploadedPartsRequest
     *
     * @returns ListUploadedPartsResponse
     *
     * @param ListUploadedPartsRequest $request
     *
     * @return ListUploadedPartsResponse
     */
    public function listUploadedParts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUploadedPartsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries users.
     *
     * @param request - ListUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserResponse
     *
     * @param ListUserRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListUserResponse
     */
    public function listUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries users.
     *
     * @param request - ListUserRequest
     *
     * @returns ListUserResponse
     *
     * @param ListUserRequest $request
     *
     * @return ListUserResponse
     */
    public function listUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Moves files or folders.
     *
     * @param request - MoveFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveFileResponse
     *
     * @param MoveFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return MoveFileResponse
     */
    public function moveFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkNameMode) {
            @$body['check_name_mode'] = $request->checkNameMode;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->toParentFileId) {
            @$body['to_parent_file_id'] = $request->toParentFileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MoveFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/move',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MoveFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves files or folders.
     *
     * @param request - MoveFileRequest
     *
     * @returns MoveFileResponse
     *
     * @param MoveFileRequest $request
     *
     * @return MoveFileResponse
     */
    public function moveFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询凌霄订单价格
     *
     * @param request - QueryOrderPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrderPriceResponse
     *
     * @param QueryOrderPriceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryOrderPriceResponse
     */
    public function queryOrderPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->instanceId) {
            @$body['instance_id'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$body['order_type'] = $request->orderType;
        }

        if (null !== $request->package) {
            @$body['package'] = $request->package;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['period_unit'] = $request->periodUnit;
        }

        if (null !== $request->totalSize) {
            @$body['total_size'] = $request->totalSize;
        }

        if (null !== $request->userCount) {
            @$body['user_count'] = $request->userCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryOrderPrice',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/query_order_price',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryOrderPriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询凌霄订单价格
     *
     * @param request - QueryOrderPriceRequest
     *
     * @returns QueryOrderPriceResponse
     *
     * @param QueryOrderPriceRequest $request
     *
     * @return QueryOrderPriceResponse
     */
    public function queryOrderPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrderPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 从人脸分组中的移除指定的文件.
     *
     * @param request - RemoveFaceGroupFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveFaceGroupFileResponse
     *
     * @param RemoveFaceGroupFileRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveFaceGroupFileResponse
     */
    public function removeFaceGroupFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->faceGroupId) {
            @$body['face_group_id'] = $request->faceGroupId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveFaceGroupFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/albums/unassign_facegroup_item',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveFaceGroupFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 从人脸分组中的移除指定的文件.
     *
     * @param request - RemoveFaceGroupFileRequest
     *
     * @returns RemoveFaceGroupFileResponse
     *
     * @param RemoveFaceGroupFileRequest $request
     *
     * @return RemoveFaceGroupFileResponse
     */
    public function removeFaceGroupFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeFaceGroupFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes a member from a group.
     *
     * @param request - RemoveGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveGroupMemberResponse
     *
     * @param RemoveGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveGroupMemberResponse
     */
    public function removeGroupMemberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->memberId) {
            @$body['member_id'] = $request->memberId;
        }

        if (null !== $request->memberType) {
            @$body['member_type'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveGroupMember',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/remove_member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes a member from a group.
     *
     * @param request - RemoveGroupMemberRequest
     *
     * @returns RemoveGroupMemberResponse
     *
     * @param RemoveGroupMemberRequest $request
     *
     * @return RemoveGroupMemberResponse
     */
    public function removeGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 故事移除文件.
     *
     * @param request - RemoveStoryFilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveStoryFilesResponse
     *
     * @param RemoveStoryFilesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveStoryFilesResponse
     */
    public function removeStoryFilesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveStoryFiles',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/remove_story_files',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveStoryFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 故事移除文件.
     *
     * @param request - RemoveStoryFilesRequest
     *
     * @returns RemoveStoryFilesResponse
     *
     * @param RemoveStoryFilesRequest $request
     *
     * @return RemoveStoryFilesResponse
     */
    public function removeStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeStoryFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * Restores a file or folder from the recycle bin.
     *
     * @param request - RestoreFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreFileResponse
     *
     * @param RestoreFileRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RestoreFileResponse
     */
    public function restoreFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/recyclebin/restore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestoreFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restores a file or folder from the recycle bin.
     *
     * @param request - RestoreFileRequest
     *
     * @returns RestoreFileResponse
     *
     * @param RestoreFileRequest $request
     *
     * @return RestoreFileResponse
     */
    public function restoreFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Restores a historical version of a file. You cannot restore the latest version of a file.
     *
     * @param request - RestoreRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreRevisionResponse
     *
     * @param RestoreRevisionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreRevisionResponse
     */
    public function restoreRevisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->revisionId) {
            @$body['revision_id'] = $request->revisionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreRevision',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/revision/restore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestoreRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restores a historical version of a file. You cannot restore the latest version of a file.
     *
     * @param request - RestoreRevisionRequest
     *
     * @returns RestoreRevisionResponse
     *
     * @param RestoreRevisionRequest $request
     *
     * @return RestoreRevisionResponse
     */
    public function restoreRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * Scans files.
     *
     * @param request - ScanFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScanFileResponse
     *
     * @param ScanFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ScanFileResponse
     */
    public function scanFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScanFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/scan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScanFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Scans files.
     *
     * @param request - ScanFileRequest
     *
     * @returns ScanFileResponse
     *
     * @param ScanFileRequest $request
     *
     * @return ScanFileResponse
     */
    public function scanFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scanFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries location-based groups based on specific locations.
     *
     * @param request - SearchAddressGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchAddressGroupsResponse
     *
     * @param SearchAddressGroupsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SearchAddressGroupsResponse
     */
    public function searchAddressGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addressLevel) {
            @$body['address_level'] = $request->addressLevel;
        }

        if (null !== $request->addressNames) {
            @$body['address_names'] = $request->addressNames;
        }

        if (null !== $request->brGeoPoint) {
            @$body['br_geo_point'] = $request->brGeoPoint;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->tlGeoPoint) {
            @$body['tl_geo_point'] = $request->tlGeoPoint;
        }

        if (null !== $request->videoThumbnailProcess) {
            @$body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchAddressGroups',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/search_address_groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchAddressGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries location-based groups based on specific locations.
     *
     * @param request - SearchAddressGroupsRequest
     *
     * @returns SearchAddressGroupsResponse
     *
     * @param SearchAddressGroupsRequest $request
     *
     * @return SearchAddressGroupsResponse
     */
    public function searchAddressGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchAddressGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Search domain with specified attributes.
     *
     * @param request - SearchDomainsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchDomainsResponse
     *
     * @param SearchDomainsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchDomainsResponse
     */
    public function searchDomainsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchDomains',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Search domain with specified attributes.
     *
     * @param request - SearchDomainsRequest
     *
     * @returns SearchDomainsResponse
     *
     * @param SearchDomainsRequest $request
     *
     * @return SearchDomainsResponse
     */
    public function searchDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries drives.
     *
     * @param request - SearchDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchDriveResponse
     *
     * @param SearchDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SearchDriveResponse
     */
    public function searchDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveName) {
            @$body['drive_name'] = $request->driveName;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->owner) {
            @$body['owner'] = $request->owner;
        }

        if (null !== $request->ownerType) {
            @$body['owner_type'] = $request->ownerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries drives.
     *
     * @param request - SearchDriveRequest
     *
     * @returns SearchDriveResponse
     *
     * @param SearchDriveRequest $request
     *
     * @return SearchDriveResponse
     */
    public function searchDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Searches for files.
     *
     * @param request - SearchFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFileResponse
     *
     * @param SearchFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFileResponse
     */
    public function searchFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fields) {
            @$body['fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->recursive) {
            @$body['recursive'] = $request->recursive;
        }

        if (null !== $request->returnTotalCount) {
            @$body['return_total_count'] = $request->returnTotalCount;
        }

        if (null !== $request->thumbnailProcesses) {
            @$body['thumbnail_processes'] = $request->thumbnailProcesses;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Searches for files.
     *
     * @param request - SearchFileRequest
     *
     * @returns SearchFileResponse
     *
     * @param SearchFileRequest $request
     *
     * @return SearchFileResponse
     */
    public function searchFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries share URLs.
     *
     * @param request - SearchShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchShareLinkResponse
     *
     * @param SearchShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SearchShareLinkResponse
     */
    public function searchShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creators) {
            @$body['creators'] = $request->creators;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->orderBy) {
            @$body['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$body['order_direction'] = $request->orderDirection;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->returnTotalCount) {
            @$body['return_total_count'] = $request->returnTotalCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries share URLs.
     *
     * @param request - SearchShareLinkRequest
     *
     * @returns SearchShareLinkResponse
     *
     * @param SearchShareLinkRequest $request
     *
     * @return SearchShareLinkResponse
     */
    public function searchShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取相似图片聚类结果.
     *
     * @param request - SearchSimilarImageClustersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchSimilarImageClustersResponse
     *
     * @param SearchSimilarImageClustersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return SearchSimilarImageClustersResponse
     */
    public function searchSimilarImageClustersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->imageThumbnailProcess) {
            @$body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchSimilarImageClusters',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/query_similar_image_clusters',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchSimilarImageClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取相似图片聚类结果.
     *
     * @param request - SearchSimilarImageClustersRequest
     *
     * @returns SearchSimilarImageClustersResponse
     *
     * @param SearchSimilarImageClustersRequest $request
     *
     * @return SearchSimilarImageClustersResponse
     */
    public function searchSimilarImageClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchSimilarImageClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询故事列表.
     *
     * @param request - SearchStoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchStoriesResponse
     *
     * @param SearchStoriesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchStoriesResponse
     */
    public function searchStoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coverImageThumbnailProcess) {
            @$body['cover_image_thumbnail_process'] = $request->coverImageThumbnailProcess;
        }

        if (null !== $request->coverVideoThumbnailProcess) {
            @$body['cover_video_thumbnail_process'] = $request->coverVideoThumbnailProcess;
        }

        if (null !== $request->createTimeRange) {
            @$body['create_time_range'] = $request->createTimeRange;
        }

        if (null !== $request->customLabels) {
            @$body['custom_labels'] = $request->customLabels;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->faceGroupIds) {
            @$body['face_group_ids'] = $request->faceGroupIds;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->sort) {
            @$body['sort'] = $request->sort;
        }

        if (null !== $request->storyEndTimeRange) {
            @$body['story_end_time_range'] = $request->storyEndTimeRange;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        if (null !== $request->storyName) {
            @$body['story_name'] = $request->storyName;
        }

        if (null !== $request->storyStartTimeRange) {
            @$body['story_start_time_range'] = $request->storyStartTimeRange;
        }

        if (null !== $request->storyType) {
            @$body['story_type'] = $request->storyType;
        }

        if (null !== $request->urlExpireSec) {
            @$body['url_expire_sec'] = $request->urlExpireSec;
        }

        if (null !== $request->withEmptyStories) {
            @$body['with_empty_stories'] = $request->withEmptyStories;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchStories',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/find_stories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchStoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询故事列表.
     *
     * @param request - SearchStoriesRequest
     *
     * @returns SearchStoriesResponse
     *
     * @param SearchStoriesRequest $request
     *
     * @return SearchStoriesResponse
     */
    public function searchStories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchStoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Searches for users.
     *
     * @param request - SearchUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchUserResponse
     *
     * @param SearchUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchUserResponse
     */
    public function searchUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->marker) {
            @$body['marker'] = $request->marker;
        }

        if (null !== $request->nickName) {
            @$body['nick_name'] = $request->nickName;
        }

        if (null !== $request->nickNameForFuzzy) {
            @$body['nick_name_for_fuzzy'] = $request->nickNameForFuzzy;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->role) {
            @$body['role'] = $request->role;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->userName) {
            @$body['user_name'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Searches for users.
     *
     * @param request - SearchUserRequest
     *
     * @returns SearchUserResponse
     *
     * @param SearchUserRequest $request
     *
     * @return SearchUserResponse
     */
    public function searchUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Generates an access token based on Open Authorization (OAuth) 2.0.
     *
     * @remarks
     * For more information about how to access Drive and Photo Service from a web server application by using OAuth 2.0, visit [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications).
     * For more information about how to access Drive and Photo Service by using a JSON Web Token (JWT) application, visit [Access process for JWT applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/access-process-for-jwt-applications).
     *
     * @param request - TokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TokenResponse
     *
     * @param TokenRequest   $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TokenResponse
     */
    public function tokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assertion) {
            @$body['assertion'] = $request->assertion;
        }

        if (null !== $request->clientId) {
            @$body['client_id'] = $request->clientId;
        }

        if (null !== $request->clientSecret) {
            @$body['client_secret'] = $request->clientSecret;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->grantType) {
            @$body['grant_type'] = $request->grantType;
        }

        if (null !== $request->redirectUri) {
            @$body['redirect_uri'] = $request->redirectUri;
        }

        if (null !== $request->refreshToken) {
            @$body['refresh_token'] = $request->refreshToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Token',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/oauth/token',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Generates an access token based on Open Authorization (OAuth) 2.0.
     *
     * @remarks
     * For more information about how to access Drive and Photo Service from a web server application by using OAuth 2.0, visit [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications).
     * For more information about how to access Drive and Photo Service by using a JSON Web Token (JWT) application, visit [Access process for JWT applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/access-process-for-jwt-applications).
     *
     * @param request - TokenRequest
     *
     * @returns TokenResponse
     *
     * @param TokenRequest $request
     *
     * @return TokenResponse
     */
    public function token($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tokenWithOptions($request, $headers, $runtime);
    }

    /**
     * Moves a file or folder to the recycle bin.
     *
     * @param request - TrashFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TrashFileResponse
     *
     * @param TrashFileRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return TrashFileResponse
     */
    public function trashFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TrashFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/recyclebin/trash',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TrashFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a file or folder to the recycle bin.
     *
     * @param request - TrashFileRequest
     *
     * @returns TrashFileResponse
     *
     * @param TrashFileRequest $request
     *
     * @return TrashFileResponse
     */
    public function trashFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trashFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Unlink Account Binding.
     *
     * @param request - UnLinkAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnLinkAccountResponse
     *
     * @param UnLinkAccountRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UnLinkAccountResponse
     */
    public function unLinkAccountWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extra) {
            @$body['extra'] = $request->extra;
        }

        if (null !== $request->identity) {
            @$body['identity'] = $request->identity;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnLinkAccount',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/account/unlink',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnLinkAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unlink Account Binding.
     *
     * @param request - UnLinkAccountRequest
     *
     * @returns UnLinkAccountResponse
     *
     * @param UnLinkAccountRequest $request
     *
     * @return UnLinkAccountResponse
     */
    public function unLinkAccount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLinkAccountWithOptions($request, $headers, $runtime);
    }

    /**
     * Update domain information.
     *
     * @param request - UpdateDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainResponse
     *
     * @param UpdateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDomainResponse
     */
    public function updateDomainWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->domainId) {
            @$body['domain_id'] = $request->domainId;
        }

        if (null !== $request->domainName) {
            @$body['domain_name'] = $request->domainName;
        }

        if (null !== $request->initDriveEnable) {
            @$body['init_drive_enable'] = $request->initDriveEnable;
        }

        if (null !== $request->initDriveSize) {
            @$body['init_drive_size'] = $request->initDriveSize;
        }

        if (null !== $request->publishedAppAccessStrategy) {
            @$body['published_app_access_strategy'] = $request->publishedAppAccessStrategy;
        }

        if (null !== $request->sizeQuota) {
            @$body['size_quota'] = $request->sizeQuota;
        }

        if (null !== $request->userCountQuota) {
            @$body['user_count_quota'] = $request->userCountQuota;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDomain',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/domain/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update domain information.
     *
     * @param request - UpdateDomainRequest
     *
     * @returns UpdateDomainResponse
     *
     * @param UpdateDomainRequest $request
     *
     * @return UpdateDomainResponse
     */
    public function updateDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies a drive.
     *
     * @param request - UpdateDriveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDriveResponse
     *
     * @param UpdateDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateDriveResponse
     */
    public function updateDriveWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->driveName) {
            @$body['drive_name'] = $request->driveName;
        }

        if (null !== $request->owner) {
            @$body['owner'] = $request->owner;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->totalSize) {
            @$body['total_size'] = $request->totalSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDrive',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/drive/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a drive.
     *
     * @param request - UpdateDriveRequest
     *
     * @returns UpdateDriveResponse
     *
     * @param UpdateDriveRequest $request
     *
     * @return UpdateDriveResponse
     */
    public function updateDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates a face-based group.
     *
     * @param request - UpdateFacegroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFacegroupResponse
     *
     * @param UpdateFacegroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFacegroupResponse
     */
    public function updateFacegroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->groupCoverFaceId) {
            @$body['group_cover_face_id'] = $request->groupCoverFaceId;
        }

        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$body['group_name'] = $request->groupName;
        }

        if (null !== $request->remarks) {
            @$body['remarks'] = $request->remarks;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFacegroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/update_facegroup_info',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFacegroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a face-based group.
     *
     * @param request - UpdateFacegroupRequest
     *
     * @returns UpdateFacegroupResponse
     *
     * @param UpdateFacegroupRequest $request
     *
     * @return UpdateFacegroupResponse
     */
    public function updateFacegroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFacegroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the information about a file instead of the file data.
     *
     * @param request - UpdateFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileResponse
     *
     * @param UpdateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkNameMode) {
            @$body['check_name_mode'] = $request->checkNameMode;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->hidden) {
            @$body['hidden'] = $request->hidden;
        }

        if (null !== $request->labels) {
            @$body['labels'] = $request->labels;
        }

        if (null !== $request->localModifiedAt) {
            @$body['local_modified_at'] = $request->localModifiedAt;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->starred) {
            @$body['starred'] = $request->starred;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFile',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about a file instead of the file data.
     *
     * @param request - UpdateFileRequest
     *
     * @returns UpdateFileResponse
     *
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the information about a group.
     *
     * @param request - UpdateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$body['group_id'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$body['group_name'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/group/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about a group.
     *
     * @param request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *
     * @param request - UpdateIdentityToBenefitPkgMappingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIdentityToBenefitPkgMappingResponse
     *
     * @param UpdateIdentityToBenefitPkgMappingRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateIdentityToBenefitPkgMappingResponse
     */
    public function updateIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['amount'] = $request->amount;
        }

        if (null !== $request->benefitPkgId) {
            @$body['benefit_pkg_id'] = $request->benefitPkgId;
        }

        if (null !== $request->expireTime) {
            @$body['expire_time'] = $request->expireTime;
        }

        if (null !== $request->identityId) {
            @$body['identity_id'] = $request->identityId;
        }

        if (null !== $request->identityType) {
            @$body['identity_type'] = $request->identityType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateIdentityToBenefitPkgMapping',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/benefit/identity_to_benefit_pkg_mapping/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *
     * @param request - UpdateIdentityToBenefitPkgMappingRequest
     *
     * @returns UpdateIdentityToBenefitPkgMappingResponse
     *
     * @param UpdateIdentityToBenefitPkgMappingRequest $request
     *
     * @return UpdateIdentityToBenefitPkgMappingResponse
     */
    public function updateIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the version information. You can call this operation to permanently retain a version or modify the description of a version. You can permanently retain up to 50 versions of a file.
     *
     * @param request - UpdateRevisionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRevisionResponse
     *
     * @param UpdateRevisionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRevisionResponse
     */
    public function updateRevisionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->fileId) {
            @$body['file_id'] = $request->fileId;
        }

        if (null !== $request->keepForever) {
            @$body['keep_forever'] = $request->keepForever;
        }

        if (null !== $request->revisionDescription) {
            @$body['revision_description'] = $request->revisionDescription;
        }

        if (null !== $request->revisionId) {
            @$body['revision_id'] = $request->revisionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRevision',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/revision/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the version information. You can call this operation to permanently retain a version or modify the description of a version. You can permanently retain up to 50 versions of a file.
     *
     * @param request - UpdateRevisionRequest
     *
     * @returns UpdateRevisionResponse
     *
     * @param UpdateRevisionRequest $request
     *
     * @return UpdateRevisionResponse
     */
    public function updateRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies a share link.
     *
     * @param request - UpdateShareLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateShareLinkResponse
     *
     * @param UpdateShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateShareLinkResponse
     */
    public function updateShareLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->disableDownload) {
            @$body['disable_download'] = $request->disableDownload;
        }

        if (null !== $request->disablePreview) {
            @$body['disable_preview'] = $request->disablePreview;
        }

        if (null !== $request->disableSave) {
            @$body['disable_save'] = $request->disableSave;
        }

        if (null !== $request->downloadCount) {
            @$body['download_count'] = $request->downloadCount;
        }

        if (null !== $request->downloadLimit) {
            @$body['download_limit'] = $request->downloadLimit;
        }

        if (null !== $request->expiration) {
            @$body['expiration'] = $request->expiration;
        }

        if (null !== $request->officeEditable) {
            @$body['office_editable'] = $request->officeEditable;
        }

        if (null !== $request->previewCount) {
            @$body['preview_count'] = $request->previewCount;
        }

        if (null !== $request->previewLimit) {
            @$body['preview_limit'] = $request->previewLimit;
        }

        if (null !== $request->reportCount) {
            @$body['report_count'] = $request->reportCount;
        }

        if (null !== $request->saveCount) {
            @$body['save_count'] = $request->saveCount;
        }

        if (null !== $request->saveLimit) {
            @$body['save_limit'] = $request->saveLimit;
        }

        if (null !== $request->shareId) {
            @$body['share_id'] = $request->shareId;
        }

        if (null !== $request->shareName) {
            @$body['share_name'] = $request->shareName;
        }

        if (null !== $request->sharePwd) {
            @$body['share_pwd'] = $request->sharePwd;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->videoPreviewCount) {
            @$body['video_preview_count'] = $request->videoPreviewCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateShareLink',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/share_link/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a share link.
     *
     * @param request - UpdateShareLinkRequest
     *
     * @returns UpdateShareLinkResponse
     *
     * @param UpdateShareLinkRequest $request
     *
     * @return UpdateShareLinkResponse
     */
    public function updateShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新故事.
     *
     * @param request - UpdateStoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStoryResponse
     *
     * @param UpdateStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStoryResponse
     */
    public function updateStoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cover) {
            @$body['cover'] = $request->cover;
        }

        if (null !== $request->customLabels) {
            @$body['custom_labels'] = $request->customLabels;
        }

        if (null !== $request->driveId) {
            @$body['drive_id'] = $request->driveId;
        }

        if (null !== $request->storyId) {
            @$body['story_id'] = $request->storyId;
        }

        if (null !== $request->storyName) {
            @$body['story_name'] = $request->storyName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStory',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/image/update_story',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新故事.
     *
     * @param request - UpdateStoryRequest
     *
     * @returns UpdateStoryResponse
     *
     * @param UpdateStoryRequest $request
     *
     * @return UpdateStoryResponse
     */
    public function updateStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the information about a user.
     *
     * @param request - UpdateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserResponse
     *
     * @param UpdateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->email) {
            @$body['email'] = $request->email;
        }

        if (null !== $request->groupInfoList) {
            @$body['group_info_list'] = $request->groupInfoList;
        }

        if (null !== $request->nickName) {
            @$body['nick_name'] = $request->nickName;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->role) {
            @$body['role'] = $request->role;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->userData) {
            @$body['user_data'] = $request->userData;
        }

        if (null !== $request->userId) {
            @$body['user_id'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUser',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/user/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information about a user.
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
        $headers = [];

        return $this->updateUserWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain the digital rights management (DRM) license of a video.
     *
     * @param request - VideoDRMLicenseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoDRMLicenseResponse
     *
     * @param VideoDRMLicenseRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return VideoDRMLicenseResponse
     */
    public function videoDRMLicenseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->drmType) {
            @$body['drmType'] = $request->drmType;
        }

        if (null !== $request->licenseRequest) {
            @$body['licenseRequest'] = $request->licenseRequest;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoDRMLicense',
            'version' => '2022-03-01',
            'protocol' => 'HTTPS',
            'pathname' => '/v2/file/video_drm_license',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VideoDRMLicenseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain the digital rights management (DRM) license of a video.
     *
     * @param request - VideoDRMLicenseRequest
     *
     * @returns VideoDRMLicenseResponse
     *
     * @param VideoDRMLicenseRequest $request
     *
     * @return VideoDRMLicenseResponse
     */
    public function videoDRMLicense($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->videoDRMLicenseWithOptions($request, $headers, $runtime);
    }
}
