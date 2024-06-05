<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddStoryFilesRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AddStoryFilesResponse;
use AlibabaCloud\SDK\Pds\V20220301\Models\AssignRoleRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\AssignRoleResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPds\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Pds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $gatewayClient             = new Client();
        $this->_spi                = $gatewayClient;
        $this->_signatureAlgorithm = 'v2';
        $this->_disableHttp2       = true;
        $this->_endpointRule       = '';
    }

    /**
     * @summary Adds a member to a group.
     *  *
     * @param AddGroupMemberRequest $request AddGroupMemberRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGroupMemberResponse AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $body['member_id'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['member_type'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGroupMember',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/add_member',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a member to a group.
     *  *
     * @param AddGroupMemberRequest $request AddGroupMemberRequest
     *
     * @return AddGroupMemberResponse AddGroupMemberResponse
     */
    public function addGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 故事添加文件
     *  *
     * @param AddStoryFilesRequest $request AddStoryFilesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddStoryFilesResponse AddStoryFilesResponse
     */
    public function addStoryFilesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddStoryFiles',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/add_story_files',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddStoryFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 故事添加文件
     *  *
     * @param AddStoryFilesRequest $request AddStoryFilesRequest
     *
     * @return AddStoryFilesResponse AddStoryFilesResponse
     */
    public function addStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addStoryFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Assigns a group administrator role to a user.
     *  *
     * @description You can call this operation to assign a group administrator role to a user.
     *  *
     * @param AssignRoleRequest $request AssignRoleRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignRoleResponse AssignRoleResponse
     */
    public function assignRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->manageResourceId)) {
            $body['manage_resource_id'] = $request->manageResourceId;
        }
        if (!Utils::isUnset($request->manageResourceType)) {
            $body['manage_resource_type'] = $request->manageResourceType;
        }
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssignRole',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/role/assign',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AssignRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Assigns a group administrator role to a user.
     *  *
     * @description You can call this operation to assign a group administrator role to a user.
     *  *
     * @param AssignRoleRequest $request AssignRoleRequest
     *
     * @return AssignRoleResponse AssignRoleResponse
     */
    public function assignRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->assignRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Requests permissions by using OAuth 2.0.
     *  *
     * @description For more information, see "OAuth 2.0 For Web Server Applications" at [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/en/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications) in User Guide.
     *  *
     * @param AuthorizeRequest $tmpReq  AuthorizeRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeResponse AuthorizeResponse
     */
    public function authorizeWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AuthorizeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->scope)) {
            $request->scopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scope, 'scope', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->hideConsent)) {
            $query['hide_consent'] = $request->hideConsent;
        }
        if (!Utils::isUnset($request->loginType)) {
            $query['login_type'] = $request->loginType;
        }
        if (!Utils::isUnset($request->redirectUri)) {
            $query['redirect_uri'] = $request->redirectUri;
        }
        if (!Utils::isUnset($request->responseType)) {
            $query['response_type'] = $request->responseType;
        }
        if (!Utils::isUnset($request->scopeShrink)) {
            $query['scope'] = $request->scopeShrink;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Authorize',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/oauth/authorize',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'binary',
        ]);

        return AuthorizeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Requests permissions by using OAuth 2.0.
     *  *
     * @description For more information, see "OAuth 2.0 For Web Server Applications" at [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/en/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications) in User Guide.
     *  *
     * @param AuthorizeRequest $request AuthorizeRequest
     *
     * @return AuthorizeResponse AuthorizeResponse
     */
    public function authorize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Calls multiple operations at a time to improve call efficiency.
     *  *
     * @param BatchRequest   $request BatchRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchResponse BatchResponse
     */
    public function batchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->requests)) {
            $body['requests'] = $request->requests;
        }
        if (!Utils::isUnset($request->resource)) {
            $body['resource'] = $request->resource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Batch',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/batch',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BatchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Calls multiple operations at a time to improve call efficiency.
     *  *
     * @param BatchRequest $request BatchRequest
     *
     * @return BatchResponse BatchResponse
     */
    public function batch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Cancels a role.
     *  *
     * @description You can cancel only the group administrator role.
     *  *
     * @param CancelAssignRoleRequest $request CancelAssignRoleRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAssignRoleResponse CancelAssignRoleResponse
     */
    public function cancelAssignRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->manageResourceId)) {
            $body['manage_resource_id'] = $request->manageResourceId;
        }
        if (!Utils::isUnset($request->manageResourceType)) {
            $body['manage_resource_type'] = $request->manageResourceType;
        }
        if (!Utils::isUnset($request->roleId)) {
            $body['role_id'] = $request->roleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelAssignRole',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/role/cancel_assign',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelAssignRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels a role.
     *  *
     * @description You can cancel only the group administrator role.
     *  *
     * @param CancelAssignRoleRequest $request CancelAssignRoleRequest
     *
     * @return CancelAssignRoleResponse CancelAssignRoleResponse
     */
    public function cancelAssignRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelAssignRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a share link.
     *  *
     * @param CancelShareLinkRequest $request CancelShareLinkRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelShareLinkResponse CancelShareLinkResponse
     */
    public function cancelShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a share link.
     *  *
     * @param CancelShareLinkRequest $request CancelShareLinkRequest
     *
     * @return CancelShareLinkResponse CancelShareLinkResponse
     */
    public function cancelShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Empties the recycle bin.
     *  *
     * @param ClearRecyclebinRequest $request ClearRecyclebinRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearRecyclebinResponse ClearRecyclebinResponse
     */
    public function clearRecyclebinWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ClearRecyclebin',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/recyclebin/clear',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ClearRecyclebinResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Empties the recycle bin.
     *  *
     * @param ClearRecyclebinRequest $request ClearRecyclebinRequest
     *
     * @return ClearRecyclebinResponse ClearRecyclebinResponse
     */
    public function clearRecyclebin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->clearRecyclebinWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Completes the upload of a file.
     *  *
     * @param CompleteFileRequest $request CompleteFileRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CompleteFileResponse CompleteFileResponse
     */
    public function completeFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $body['upload_id'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CompleteFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/complete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CompleteFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Completes the upload of a file.
     *  *
     * @param CompleteFileRequest $request CompleteFileRequest
     *
     * @return CompleteFileResponse CompleteFileResponse
     */
    public function completeFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Copies a file or folder.
     *  *
     * @param CopyFileRequest $request CopyFileRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyFileResponse CopyFileResponse
     */
    public function copyFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRename)) {
            $body['auto_rename'] = $request->autoRename;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->toDriveId)) {
            $body['to_drive_id'] = $request->toDriveId;
        }
        if (!Utils::isUnset($request->toParentFileId)) {
            $body['to_parent_file_id'] = $request->toParentFileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/copy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CopyFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Copies a file or folder.
     *  *
     * @param CopyFileRequest $request CopyFileRequest
     *
     * @return CopyFileResponse CopyFileResponse
     */
    public function copyFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->copyFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建自定义故事
     *  *
     * @param CreateCustomizedStoryRequest $request CreateCustomizedStoryRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomizedStoryResponse CreateCustomizedStoryResponse
     */
    public function createCustomizedStoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customLabels)) {
            $body['custom_labels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->storyCover)) {
            $body['story_cover'] = $request->storyCover;
        }
        if (!Utils::isUnset($request->storyFiles)) {
            $body['story_files'] = $request->storyFiles;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['story_name'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storySubType)) {
            $body['story_sub_type'] = $request->storySubType;
        }
        if (!Utils::isUnset($request->storyType)) {
            $body['story_type'] = $request->storyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomizedStory',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/create_customized_story',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCustomizedStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义故事
     *  *
     * @param CreateCustomizedStoryRequest $request CreateCustomizedStoryRequest
     *
     * @return CreateCustomizedStoryResponse CreateCustomizedStoryResponse
     */
    public function createCustomizedStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCustomizedStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Create domain.
     *  *
     * @description If you want to perform secondary operations based on Drive and Photo Service and perform fine-grained control on your tenants, you can use the parent-child domain feature of Drive and Photo Service. For more information, join the DingTalk group whose ID is 23146118.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['domain_name'] = $request->domainName;
        }
        if (!Utils::isUnset($request->initDriveEnable)) {
            $body['init_drive_enable'] = $request->initDriveEnable;
        }
        if (!Utils::isUnset($request->initDriveSize)) {
            $body['init_drive_size'] = $request->initDriveSize;
        }
        if (!Utils::isUnset($request->parentDomainId)) {
            $body['parent_domain_id'] = $request->parentDomainId;
        }
        if (!Utils::isUnset($request->sizeQuota)) {
            $body['size_quota'] = $request->sizeQuota;
        }
        if (!Utils::isUnset($request->userCountQuota)) {
            $body['user_count_quota'] = $request->userCountQuota;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create domain.
     *  *
     * @description If you want to perform secondary operations based on Drive and Photo Service and perform fine-grained control on your tenants, you can use the parent-child domain feature of Drive and Photo Service. For more information, join the DingTalk group whose ID is 23146118.
     *  *
     * @param CreateDomainRequest $request CreateDomainRequest
     *
     * @return CreateDomainResponse CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a drive.
     *  *
     * @param CreateDriveRequest $request CreateDriveRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDriveResponse CreateDriveResponse
     */
    public function createDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->default_)) {
            $body['default'] = $request->default_;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->driveName)) {
            $body['drive_name'] = $request->driveName;
        }
        if (!Utils::isUnset($request->driveType)) {
            $body['drive_type'] = $request->driveType;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $body['owner_type'] = $request->ownerType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->totalSize)) {
            $body['total_size'] = $request->totalSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a drive.
     *  *
     * @param CreateDriveRequest $request CreateDriveRequest
     *
     * @return CreateDriveResponse CreateDriveResponse
     */
    public function createDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a file or folder.
     *  *
     * @param CreateFileRequest $request CreateFileRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkNameMode)) {
            $body['check_name_mode'] = $request->checkNameMode;
        }
        if (!Utils::isUnset($request->contentHash)) {
            $body['content_hash'] = $request->contentHash;
        }
        if (!Utils::isUnset($request->contentHashName)) {
            $body['content_hash_name'] = $request->contentHashName;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['content_type'] = $request->contentType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->hidden)) {
            $body['hidden'] = $request->hidden;
        }
        if (!Utils::isUnset($request->imageMediaMetadata)) {
            $body['image_media_metadata'] = $request->imageMediaMetadata;
        }
        if (!Utils::isUnset($request->localCreatedAt)) {
            $body['local_created_at'] = $request->localCreatedAt;
        }
        if (!Utils::isUnset($request->localModifiedAt)) {
            $body['local_modified_at'] = $request->localModifiedAt;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parallelUpload)) {
            $body['parallel_upload'] = $request->parallelUpload;
        }
        if (!Utils::isUnset($request->parentFileId)) {
            $body['parent_file_id'] = $request->parentFileId;
        }
        if (!Utils::isUnset($request->partInfoList)) {
            $body['part_info_list'] = $request->partInfoList;
        }
        if (!Utils::isUnset($request->preHash)) {
            $body['pre_hash'] = $request->preHash;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['size'] = $request->size;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userTags)) {
            $body['user_tags'] = $request->userTags;
        }
        if (!Utils::isUnset($request->videoMediaMetadata)) {
            $body['video_media_metadata'] = $request->videoMediaMetadata;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a file or folder.
     *  *
     * @param CreateFileRequest $request CreateFileRequest
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['group_name'] = $request->groupName;
        }
        if (!Utils::isUnset($request->isRoot)) {
            $body['is_root'] = $request->isRoot;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $body['parent_group_id'] = $request->parentGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a group.
     *  *
     * @param CreateGroupRequest $request CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *  *
     * @description If you need to manage a large number of users based on Drive and Photo Service, you can control the features and quotas that users can use based on the benefits to which they are entitled. For more information, join the DingTalk group (ID 23146118).
     *  *
     * @param CreateIdentityToBenefitPkgMappingRequest $request CreateIdentityToBenefitPkgMappingRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIdentityToBenefitPkgMappingResponse CreateIdentityToBenefitPkgMappingResponse
     */
    public function createIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amount)) {
            $body['amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->benefitPkgId)) {
            $body['benefit_pkg_id'] = $request->benefitPkgId;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['expire_time'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->identityId)) {
            $body['identity_id'] = $request->identityId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['identity_type'] = $request->identityType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIdentityToBenefitPkgMapping',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/benefit/identity_to_benefit_pkg_mapping/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *  *
     * @description If you need to manage a large number of users based on Drive and Photo Service, you can control the features and quotas that users can use based on the benefits to which they are entitled. For more information, join the DingTalk group (ID 23146118).
     *  *
     * @param CreateIdentityToBenefitPkgMappingRequest $request CreateIdentityToBenefitPkgMappingRequest
     *
     * @return CreateIdentityToBenefitPkgMappingResponse CreateIdentityToBenefitPkgMappingResponse
     */
    public function createIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建凌霄订单
     *  *
     * @param CreateOrderRequest $request CreateOrderRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderResponse CreateOrderResponse
     */
    public function createOrderWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoPay)) {
            $body['auto_pay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['auto_renew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instance_id'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $body['order_type'] = $request->orderType;
        }
        if (!Utils::isUnset($request->package)) {
            $body['package'] = $request->package;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['period_unit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->totalSize)) {
            $body['total_size'] = $request->totalSize;
        }
        if (!Utils::isUnset($request->userCount)) {
            $body['user_count'] = $request->userCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrder',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/create_order',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建凌霄订单
     *  *
     * @param CreateOrderRequest $request CreateOrderRequest
     *
     * @return CreateOrderResponse CreateOrderResponse
     */
    public function createOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a share URL.
     *  *
     * @description A share is a file view container. You can grant anonymous users the permissions to access files in the user drive by using the share URL. Anonymous users can access the files based on the granted permissions.
     *  *
     * @param CreateShareLinkRequest $request CreateShareLinkRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateShareLinkResponse CreateShareLinkResponse
     */
    public function createShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creatable)) {
            $body['creatable'] = $request->creatable;
        }
        if (!Utils::isUnset($request->creatableFileIdList)) {
            $body['creatable_file_id_list'] = $request->creatableFileIdList;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableDownload)) {
            $body['disable_download'] = $request->disableDownload;
        }
        if (!Utils::isUnset($request->disablePreview)) {
            $body['disable_preview'] = $request->disablePreview;
        }
        if (!Utils::isUnset($request->disableSave)) {
            $body['disable_save'] = $request->disableSave;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $body['download_limit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->expiration)) {
            $body['expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->fileIdList)) {
            $body['file_id_list'] = $request->fileIdList;
        }
        if (!Utils::isUnset($request->previewLimit)) {
            $body['preview_limit'] = $request->previewLimit;
        }
        if (!Utils::isUnset($request->saveLimit)) {
            $body['save_limit'] = $request->saveLimit;
        }
        if (!Utils::isUnset($request->shareAllFiles)) {
            $body['share_all_files'] = $request->shareAllFiles;
        }
        if (!Utils::isUnset($request->shareName)) {
            $body['share_name'] = $request->shareName;
        }
        if (!Utils::isUnset($request->sharePwd)) {
            $body['share_pwd'] = $request->sharePwd;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a share URL.
     *  *
     * @description A share is a file view container. You can grant anonymous users the permissions to access files in the user drive by using the share URL. Anonymous users can access the files based on the granted permissions.
     *  *
     * @param CreateShareLinkRequest $request CreateShareLinkRequest
     *
     * @return CreateShareLinkResponse CreateShareLinkResponse
     */
    public function createShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建相似图片聚类任务
     *  *
     * @param CreateSimilarImageClusterTaskRequest $request CreateSimilarImageClusterTaskRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSimilarImageClusterTaskResponse CreateSimilarImageClusterTaskResponse
     */
    public function createSimilarImageClusterTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSimilarImageClusterTask',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/create_similar_image_cluster_task',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSimilarImageClusterTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建相似图片聚类任务
     *  *
     * @param CreateSimilarImageClusterTaskRequest $request CreateSimilarImageClusterTaskRequest
     *
     * @return CreateSimilarImageClusterTaskResponse CreateSimilarImageClusterTaskResponse
     */
    public function createSimilarImageClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSimilarImageClusterTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建推荐故事
     *  *
     * @param CreateStoryRequest $request CreateStoryRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStoryResponse CreateStoryResponse
     */
    public function createStoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->address)) {
            $body['address'] = $request->address;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $body['custom_labels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->maxImageCount)) {
            $body['max_image_count'] = $request->maxImageCount;
        }
        if (!Utils::isUnset($request->minImageCount)) {
            $body['min_image_count'] = $request->minImageCount;
        }
        if (!Utils::isUnset($request->storyEndTime)) {
            $body['story_end_time'] = $request->storyEndTime;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['story_name'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storyStartTime)) {
            $body['story_start_time'] = $request->storyStartTime;
        }
        if (!Utils::isUnset($request->storySubType)) {
            $body['story_sub_type'] = $request->storySubType;
        }
        if (!Utils::isUnset($request->storyType)) {
            $body['story_type'] = $request->storyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStory',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/create_story',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建推荐故事
     *  *
     * @param CreateStoryRequest $request CreateStoryRequest
     *
     * @return CreateStoryResponse CreateStoryResponse
     */
    public function createStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a user.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->avatar)) {
            $body['avatar'] = $request->avatar;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->groupInfoList)) {
            $body['group_info_list'] = $request->groupInfoList;
        }
        if (!Utils::isUnset($request->nickName)) {
            $body['nick_name'] = $request->nickName;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->role)) {
            $body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a user.
     *  *
     * @param CreateUserRequest $request CreateUserRequest
     *
     * @return CreateUserResponse CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取文件内容安全信息
     *  *
     * @param CsiGetFileInfoRequest $request CsiGetFileInfoRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CsiGetFileInfoResponse CsiGetFileInfoResponse
     */
    public function csiGetFileInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CsiGetFileInfo',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/csi/get_file_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CsiGetFileInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取文件内容安全信息
     *  *
     * @param CsiGetFileInfoRequest $request CsiGetFileInfoRequest
     *
     * @return CsiGetFileInfoResponse CsiGetFileInfoResponse
     */
    public function csiGetFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->csiGetFileInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Delete the domain
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainId)) {
            $body['domain_id'] = $request->domainId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete the domain
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a drive.
     *  *
     * @param DeleteDriveRequest $request DeleteDriveRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDriveResponse DeleteDriveResponse
     */
    public function deleteDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a drive.
     *  *
     * @param DeleteDriveRequest $request DeleteDriveRequest
     *
     * @return DeleteDriveResponse DeleteDriveResponse
     */
    public function deleteDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a file or folder.
     *  *
     * @param DeleteFileRequest $request DeleteFileRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a file or folder.
     *  *
     * @param DeleteFileRequest $request DeleteFileRequest
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes groups. Before you delete a group, make sure that no other groups or users exist in the group. Otherwise, the group fails to be deleted.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes groups. Before you delete a group, make sure that no other groups or users exist in the group. Otherwise, the group fails to be deleted.
     *  *
     * @param DeleteGroupRequest $request DeleteGroupRequest
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a historical version of a file. You cannot delete the latest version of a file.
     *  *
     * @param DeleteRevisionRequest $request DeleteRevisionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRevisionResponse DeleteRevisionResponse
     */
    public function deleteRevisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->revisionId)) {
            $body['revision_id'] = $request->revisionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRevision',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/revision/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a historical version of a file. You cannot delete the latest version of a file.
     *  *
     * @param DeleteRevisionRequest $request DeleteRevisionRequest
     *
     * @return DeleteRevisionResponse DeleteRevisionResponse
     */
    public function deleteRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除故事
     *  *
     * @param DeleteStoryRequest $request DeleteStoryRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStoryResponse DeleteStoryResponse
     */
    public function deleteStoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteStory',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/delete_story',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除故事
     *  *
     * @param DeleteStoryRequest $request DeleteStoryRequest
     *
     * @return DeleteStoryResponse DeleteStoryResponse
     */
    public function deleteStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Deletes a user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a user.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the cursor of incremental information.
     *  *
     * @param DeltaGetLastCursorRequest $request DeltaGetLastCursorRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeltaGetLastCursorResponse DeltaGetLastCursorResponse
     */
    public function deltaGetLastCursorWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->syncRootId)) {
            $body['sync_root_id'] = $request->syncRootId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeltaGetLastCursor',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get_last_cursor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeltaGetLastCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the cursor of incremental information.
     *  *
     * @param DeltaGetLastCursorRequest $request DeltaGetLastCursorRequest
     *
     * @return DeltaGetLastCursorResponse DeltaGetLastCursorResponse
     */
    public function deltaGetLastCursor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deltaGetLastCursorWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Downloads a file.
     *  *
     * @description For information about best practices for downloading a file.
     *  *
     * @param DownloadFileRequest $request DownloadFileRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DownloadFileResponse DownloadFileResponse
     */
    public function downloadFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->driveId)) {
            $query['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $query['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->officeThumbnailProcess)) {
            $query['office_thumbnail_process'] = $request->officeThumbnailProcess;
        }
        if (!Utils::isUnset($request->shareId)) {
            $query['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->videoThumbnailProcess)) {
            $query['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/download',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'binary',
        ]);

        return DownloadFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Downloads a file.
     *  *
     * @description For information about best practices for downloading a file.
     *  *
     * @param DownloadFileRequest $request DownloadFileRequest
     *
     * @return DownloadFileResponse DownloadFileResponse
     */
    public function downloadFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downloadFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Grants permissions to access files to a user or group.
     *  *
     * @param FileAddPermissionRequest $request FileAddPermissionRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return FileAddPermissionResponse FileAddPermissionResponse
     */
    public function fileAddPermissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->memberList)) {
            $body['member_list'] = $request->memberList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileAddPermission',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/add_permission',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileAddPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Grants permissions to access files to a user or group.
     *  *
     * @param FileAddPermissionRequest $request FileAddPermissionRequest
     *
     * @return FileAddPermissionResponse FileAddPermissionResponse
     */
    public function fileAddPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileAddPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes custom tags from a file.
     *  *
     * @param FileDeleteUserTagsRequest $request FileDeleteUserTagsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return FileDeleteUserTagsResponse FileDeleteUserTagsResponse
     */
    public function fileDeleteUserTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->keyList)) {
            $body['key_list'] = $request->keyList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileDeleteUserTags',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/delete_usertags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileDeleteUserTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes custom tags from a file.
     *  *
     * @param FileDeleteUserTagsRequest $request FileDeleteUserTagsRequest
     *
     * @return FileDeleteUserTagsResponse FileDeleteUserTagsResponse
     */
    public function fileDeleteUserTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileDeleteUserTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the sharing authorization records of a file.
     *  *
     * @param FileListPermissionRequest $request FileListPermissionRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return FileListPermissionResponse FileListPermissionResponse
     */
    public function fileListPermissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileListPermission',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/list_permission',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return FileListPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the sharing authorization records of a file.
     *  *
     * @param FileListPermissionRequest $request FileListPermissionRequest
     *
     * @return FileListPermissionResponse FileListPermissionResponse
     */
    public function fileListPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileListPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Adds custom tags to a file.
     *  *
     * @description This operation is an incremental update operation. Take note of the following items:
     * *   If a tag name specified in the request is the same as an existing tag name, the existing tag is overwritten.
     * *   If a tag name specified in the request is different from the existing tag names, the specified tag is added.
     * *   The existing tags with unique names are not affected.
     *  *
     * @param FilePutUserTagsRequest $request FilePutUserTagsRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return FilePutUserTagsResponse FilePutUserTagsResponse
     */
    public function filePutUserTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->userTags)) {
            $body['user_tags'] = $request->userTags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FilePutUserTags',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/put_usertags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FilePutUserTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds custom tags to a file.
     *  *
     * @description This operation is an incremental update operation. Take note of the following items:
     * *   If a tag name specified in the request is the same as an existing tag name, the existing tag is overwritten.
     * *   If a tag name specified in the request is different from the existing tag names, the specified tag is added.
     * *   The existing tags with unique names are not affected.
     *  *
     * @param FilePutUserTagsRequest $request FilePutUserTagsRequest
     *
     * @return FilePutUserTagsResponse FilePutUserTagsResponse
     */
    public function filePutUserTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->filePutUserTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Cancels the permissions on a shared file.
     *  *
     * @param FileRemovePermissionRequest $request FileRemovePermissionRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FileRemovePermissionResponse FileRemovePermissionResponse
     */
    public function fileRemovePermissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->memberList)) {
            $body['member_list'] = $request->memberList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileRemovePermission',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/remove_permission',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FileRemovePermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels the permissions on a shared file.
     *  *
     * @param FileRemovePermissionRequest $request FileRemovePermissionRequest
     *
     * @return FileRemovePermissionResponse FileRemovePermissionResponse
     */
    public function fileRemovePermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->fileRemovePermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about an asynchronous task.
     *  *
     * @param GetAsyncTaskRequest $request GetAsyncTaskRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->asyncTaskId)) {
            $body['async_task_id'] = $request->asyncTaskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncTask',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/async_task/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an asynchronous task.
     *  *
     * @param GetAsyncTaskRequest $request GetAsyncTaskRequest
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAsyncTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the default drive of a user.
     *  *
     * @param GetDefaultDriveRequest $request GetDefaultDriveRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultDriveResponse GetDefaultDriveResponse
     */
    public function getDefaultDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/get_default_drive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDefaultDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the default drive of a user.
     *  *
     * @param GetDefaultDriveRequest $request GetDefaultDriveRequest
     *
     * @return GetDefaultDriveResponse GetDefaultDriveResponse
     */
    public function getDefaultDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDefaultDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get domain information.
     *  *
     * @param GetDomainRequest $request GetDomainRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainId)) {
            $body['domain_id'] = $request->domainId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->getQuotaUsed)) {
            $body['get_quota_used'] = $request->getQuotaUsed;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get domain information.
     *  *
     * @param GetDomainRequest $request GetDomainRequest
     *
     * @return GetDomainResponse GetDomainResponse
     */
    public function getDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取domain限额
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDomainQuotaResponse GetDomainQuotaResponse
     */
    public function getDomainQuotaWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDomainQuota',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/get_quota',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取domain限额
     *  *
     * @return GetDomainQuotaResponse GetDomainQuotaResponse
     */
    public function getDomainQuota()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainQuotaWithOptions($headers, $runtime);
    }

    /**
     * @summary Queries the download URL of a file. For more information about best practices, visit https://help.aliyun.com/document_detail/175889.html.
     *  *
     * @param GetDownloadUrlRequest $request GetDownloadUrlRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDownloadUrlResponse GetDownloadUrlResponse
     */
    public function getDownloadUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->expireSec)) {
            $body['expire_sec'] = $request->expireSec;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['file_name'] = $request->fileName;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDownloadUrl',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get_download_url',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDownloadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the download URL of a file. For more information about best practices, visit https://help.aliyun.com/document_detail/175889.html.
     *  *
     * @param GetDownloadUrlRequest $request GetDownloadUrlRequest
     *
     * @return GetDownloadUrlResponse GetDownloadUrlResponse
     */
    public function getDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDownloadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a drive.
     *  *
     * @param GetDriveRequest $request GetDriveRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDriveResponse GetDriveResponse
     */
    public function getDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a drive.
     *  *
     * @param GetDriveRequest $request GetDriveRequest
     *
     * @return GetDriveResponse GetDriveResponse
     */
    public function getDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a file.
     *  *
     * @param GetFileRequest $request GetFileRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFileResponse GetFileResponse
     */
    public function getFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->thumbnailProcesses)) {
            $body['thumbnail_processes'] = $request->thumbnailProcesses;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a file.
     *  *
     * @param GetFileRequest $request GetFileRequest
     *
     * @return GetFileResponse GetFileResponse
     */
    public function getFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a group.
     *  *
     * @param GetGroupRequest $request GetGroupRequest
     *
     * @return GetGroupResponse GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the mapping between an entity and a benefit package. You can call this operation to query the benefit package that is associated with a user.
     *  *
     * @param GetIdentityToBenefitPkgMappingRequest $request GetIdentityToBenefitPkgMappingRequest
     * @param string[]                              $headers map
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIdentityToBenefitPkgMappingResponse GetIdentityToBenefitPkgMappingResponse
     */
    public function getIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->benefitPkgId)) {
            $body['benefit_pkg_id'] = $request->benefitPkgId;
        }
        if (!Utils::isUnset($request->identityId)) {
            $body['identity_id'] = $request->identityId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['identity_type'] = $request->identityType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIdentityToBenefitPkgMapping',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/benefit/identity_to_benefit_pkg_mapping/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the mapping between an entity and a benefit package. You can call this operation to query the benefit package that is associated with a user.
     *  *
     * @param GetIdentityToBenefitPkgMappingRequest $request GetIdentityToBenefitPkgMappingRequest
     *
     * @return GetIdentityToBenefitPkgMappingResponse GetIdentityToBenefitPkgMappingResponse
     */
    public function getIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户认证方式详情
     *  *
     * @param GetLinkInfoRequest $request GetLinkInfoRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLinkInfoResponse GetLinkInfoResponse
     */
    public function getLinkInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLinkInfo',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/account/get_link_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLinkInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取用户认证方式详情
     *  *
     * @param GetLinkInfoRequest $request GetLinkInfoRequest
     *
     * @return GetLinkInfoResponse GetLinkInfoResponse
     */
    public function getLinkInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLinkInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a user based on the user ID.
     *  *
     * @param GetLinkInfoByUserIdRequest $request GetLinkInfoByUserIdRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLinkInfoByUserIdResponse GetLinkInfoByUserIdResponse
     */
    public function getLinkInfoByUserIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLinkInfoByUserId',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/account/get_link_info_by_user_id',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLinkInfoByUserIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a user based on the user ID.
     *  *
     * @param GetLinkInfoByUserIdRequest $request GetLinkInfoByUserIdRequest
     *
     * @return GetLinkInfoByUserIdResponse GetLinkInfoByUserIdResponse
     */
    public function getLinkInfoByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLinkInfoByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a version.
     *  *
     * @param GetRevisionRequest $request GetRevisionRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRevisionResponse GetRevisionResponse
     */
    public function getRevisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->revisionId)) {
            $body['revision_id'] = $request->revisionId;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRevision',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/revision/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a version.
     *  *
     * @param GetRevisionRequest $request GetRevisionRequest
     *
     * @return GetRevisionResponse GetRevisionResponse
     */
    public function getRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the share URL of a file.
     *  *
     * @param GetShareLinkRequest $request GetShareLinkRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetShareLinkResponse GetShareLinkResponse
     */
    public function getShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the share URL of a file.
     *  *
     * @param GetShareLinkRequest $request GetShareLinkRequest
     *
     * @return GetShareLinkResponse GetShareLinkResponse
     */
    public function getShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a share link anonymously.
     *  *
     * @param GetShareLinkByAnonymousRequest $request GetShareLinkByAnonymousRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetShareLinkByAnonymousResponse GetShareLinkByAnonymousResponse
     */
    public function getShareLinkByAnonymousWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetShareLinkByAnonymous',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/get_by_anonymous',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShareLinkByAnonymousResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a share link anonymously.
     *  *
     * @param GetShareLinkByAnonymousRequest $request GetShareLinkByAnonymousRequest
     *
     * @return GetShareLinkByAnonymousResponse GetShareLinkByAnonymousResponse
     */
    public function getShareLinkByAnonymous($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkByAnonymousWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a share token anonymously.
     *  *
     * @description To access a file by using a share link, you must first obtain a share token, even if the value of share_pwd of this share is an empty string, which specifies that the share is not private.
     *  *
     * @param GetShareLinkTokenRequest $request GetShareLinkTokenRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetShareLinkTokenResponse GetShareLinkTokenResponse
     */
    public function getShareLinkTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->expireSec)) {
            $body['expire_sec'] = $request->expireSec;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->sharePwd)) {
            $body['share_pwd'] = $request->sharePwd;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetShareLinkToken',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/get_share_token',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShareLinkTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a share token anonymously.
     *  *
     * @description To access a file by using a share link, you must first obtain a share token, even if the value of share_pwd of this share is an empty string, which specifies that the share is not private.
     *  *
     * @param GetShareLinkTokenRequest $request GetShareLinkTokenRequest
     *
     * @return GetShareLinkTokenResponse GetShareLinkTokenResponse
     */
    public function getShareLinkToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareLinkTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取故事详情
     *  *
     * @param GetStoryRequest $request GetStoryRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStoryResponse GetStoryResponse
     */
    public function getStoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coverImageThumbnailProcess)) {
            $body['cover_image_thumbnail_process'] = $request->coverImageThumbnailProcess;
        }
        if (!Utils::isUnset($request->coverVideoThumbnailProcess)) {
            $body['cover_video_thumbnail_process'] = $request->coverVideoThumbnailProcess;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->imageUrlProcess)) {
            $body['image_url_process'] = $request->imageUrlProcess;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        if (!Utils::isUnset($request->videoThumbnailProcess)) {
            $body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStory',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/get_story',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取故事详情
     *  *
     * @param GetStoryRequest $request GetStoryRequest
     *
     * @return GetStoryResponse GetStoryResponse
     */
    public function getStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the execution status of a value-added asynchronous task. You can call this operation to query the execution status of an asynchronous task that is created by calling the CreateSimilarImageClusterTask operation.
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service**.
     * To call this operation, make sure that the value-added image processing feature is enabled.
     * Before you call this operation, a value-added asynchronous task must be created. For example, you can call the CreateSimilarImageClusterTask operation to create an asynchronous task. Then, you can call this operation to query the execution status of the asynchronous task based on the task ID.
     *  *
     * @param GetTaskStatusRequest $request GetTaskStatusRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['task_id'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/get_task_status',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution status of a value-added asynchronous task. You can call this operation to query the execution status of an asynchronous task that is created by calling the CreateSimilarImageClusterTask operation.
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/425220.html) of Drive and Photo Service**.
     * To call this operation, make sure that the value-added image processing feature is enabled.
     * Before you call this operation, a value-added asynchronous task must be created. For example, you can call the CreateSimilarImageClusterTask operation to create an asynchronous task. Then, you can call this operation to query the execution status of the asynchronous task based on the task ID.
     *  *
     * @param GetTaskStatusRequest $request GetTaskStatusRequest
     *
     * @return GetTaskStatusResponse GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the upload URL of a file.
     *  *
     * @param GetUploadUrlRequest $request GetUploadUrlRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadUrlResponse GetUploadUrlResponse
     */
    public function getUploadUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->partInfoList)) {
            $body['part_info_list'] = $request->partInfoList;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $body['upload_id'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUploadUrl',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get_upload_url',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUploadUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the upload URL of a file.
     *  *
     * @param GetUploadUrlRequest $request GetUploadUrlRequest
     *
     * @return GetUploadUrlResponse GetUploadUrlResponse
     */
    public function getUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUploadUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a user.
     *  *
     * @param GetUserRequest $request GetUserRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/get',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a user.
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about video playback.
     *  *
     * @description For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *  *
     * @param GetVideoPreviewPlayInfoRequest $request GetVideoPreviewPlayInfoRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoPreviewPlayInfoResponse GetVideoPreviewPlayInfoResponse
     */
    public function getVideoPreviewPlayInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->getMasterUrl)) {
            $body['get_master_url'] = $request->getMasterUrl;
        }
        if (!Utils::isUnset($request->getWithoutUrl)) {
            $body['get_without_url'] = $request->getWithoutUrl;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['template_id'] = $request->templateId;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVideoPreviewPlayInfo',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get_video_preview_play_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoPreviewPlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about video playback.
     *  *
     * @description For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *  *
     * @param GetVideoPreviewPlayInfoRequest $request GetVideoPreviewPlayInfoRequest
     *
     * @return GetVideoPreviewPlayInfoResponse GetVideoPreviewPlayInfoResponse
     */
    public function getVideoPreviewPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoPreviewPlayInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the preview metadata of a video.
     *  *
     * @description For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *  *
     * @param GetVideoPreviewPlayMetaRequest $request GetVideoPreviewPlayMetaRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoPreviewPlayMetaResponse GetVideoPreviewPlayMetaResponse
     */
    public function getVideoPreviewPlayMetaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVideoPreviewPlayMeta',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/get_video_preview_play_meta',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVideoPreviewPlayMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the preview metadata of a video.
     *  *
     * @description For more information about best practices, see [Preview videos online](https://help.aliyun.com/document_detail/427477.html).
     *  *
     * @param GetVideoPreviewPlayMetaRequest $request GetVideoPreviewPlayMetaRequest
     *
     * @return GetVideoPreviewPlayMetaResponse GetVideoPreviewPlayMetaResponse
     */
    public function getVideoPreviewPlayMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVideoPreviewPlayMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新用户组名字
     *  *
     * @param GroupUpdateNameRequest $request GroupUpdateNameRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GroupUpdateNameResponse GroupUpdateNameResponse
     */
    public function groupUpdateNameWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GroupUpdateName',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/update_name',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GroupUpdateNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新用户组名字
     *  *
     * @param GroupUpdateNameRequest $request GroupUpdateNameRequest
     *
     * @return GroupUpdateNameResponse GroupUpdateNameResponse
     */
    public function groupUpdateName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->groupUpdateNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Imports a user.
     *  *
     * @param ImportUserRequest $request ImportUserRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportUserResponse ImportUserResponse
     */
    public function importUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authenticationDisplayName)) {
            $body['authentication_display_name'] = $request->authenticationDisplayName;
        }
        if (!Utils::isUnset($request->authenticationType)) {
            $body['authentication_type'] = $request->authenticationType;
        }
        if (!Utils::isUnset($request->autoCreateDrive)) {
            $body['auto_create_drive'] = $request->autoCreateDrive;
        }
        if (!Utils::isUnset($request->driveTotalSize)) {
            $body['drive_total_size'] = $request->driveTotalSize;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->nickName)) {
            $body['nick_name'] = $request->nickName;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $body['parent_group_id'] = $request->parentGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImportUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/import',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ImportUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Imports a user.
     *  *
     * @param ImportUserRequest $request ImportUserRequest
     *
     * @return ImportUserResponse ImportUserResponse
     */
    public function importUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->importUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 送审文件
     *  *
     * @param InvestigateFileRequest $request InvestigateFileRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InvestigateFileResponse InvestigateFileResponse
     */
    public function investigateFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveFileIds)) {
            $body['drive_file_ids'] = $request->driveFileIds;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->recursive)) {
            $body['recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvestigateFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/csi/investigate_file',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InvestigateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 送审文件
     *  *
     * @param InvestigateFileRequest $request InvestigateFileRequest
     *
     * @return InvestigateFileResponse InvestigateFileResponse
     */
    public function investigateFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->investigateFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Associates an account with a user.
     *  *
     * @param LinkAccountRequest $request LinkAccountRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return LinkAccountResponse LinkAccountResponse
     */
    public function linkAccountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LinkAccount',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/account/link',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LinkAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Associates an account with a user.
     *  *
     * @param LinkAccountRequest $request LinkAccountRequest
     *
     * @return LinkAccountResponse LinkAccountResponse
     */
    public function linkAccount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->linkAccountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries location-based groups.
     *  *
     * @param ListAddressGroupsRequest $request ListAddressGroupsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAddressGroupsResponse ListAddressGroupsResponse
     */
    public function listAddressGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->videoThumbnailProcess)) {
            $body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAddressGroups',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/list_address_groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAddressGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries location-based groups.
     *  *
     * @param ListAddressGroupsRequest $request ListAddressGroupsRequest
     *
     * @return ListAddressGroupsResponse ListAddressGroupsResponse
     */
    public function listAddressGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAddressGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of assigned roles. For example, you can query the administrators of a group by group ID.
     *  *
     * @param ListAssignmentRequest $request ListAssignmentRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAssignmentResponse ListAssignmentResponse
     */
    public function listAssignmentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->manageResourceId)) {
            $body['manage_resource_id'] = $request->manageResourceId;
        }
        if (!Utils::isUnset($request->manageResourceType)) {
            $body['manage_resource_type'] = $request->manageResourceType;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAssignment',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/role/list_assignment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAssignmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of assigned roles. For example, you can query the administrators of a group by group ID.
     *  *
     * @param ListAssignmentRequest $request ListAssignmentRequest
     *
     * @return ListAssignmentResponse ListAssignmentResponse
     */
    public function listAssignment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAssignmentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries incremental information.
     *  *
     * @param ListDeltaRequest $request ListDeltaRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeltaResponse ListDeltaResponse
     */
    public function listDeltaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->syncRootId)) {
            $body['sync_root_id'] = $request->syncRootId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDelta',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/list_delta',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeltaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries incremental information.
     *  *
     * @param ListDeltaRequest $request ListDeltaRequest
     *
     * @return ListDeltaResponse ListDeltaResponse
     */
    public function listDelta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeltaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举 domain
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->parentDomainId)) {
            $body['parent_domain_id'] = $request->parentDomainId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['service_code'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列举 domain
     *  *
     * @param ListDomainsRequest $request ListDomainsRequest
     *
     * @return ListDomainsResponse ListDomainsResponse
     */
    public function listDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of drives.
     *  *
     * @param ListDriveRequest $request ListDriveRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDriveResponse ListDriveResponse
     */
    public function listDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $body['owner_type'] = $request->ownerType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of drives.
     *  *
     * @param ListDriveRequest $request ListDriveRequest
     *
     * @return ListDriveResponse ListDriveResponse
     */
    public function listDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries face-based groups.
     *  *
     * @param ListFacegroupsRequest $request ListFacegroupsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFacegroupsResponse ListFacegroupsResponse
     */
    public function listFacegroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->returnTotalCount)) {
            $body['return_total_count'] = $request->returnTotalCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFacegroups',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/list_facegroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFacegroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries face-based groups.
     *  *
     * @param ListFacegroupsRequest $request ListFacegroupsRequest
     *
     * @return ListFacegroupsResponse ListFacegroupsResponse
     */
    public function listFacegroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFacegroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of files and folders.
     *  *
     * @param ListFileRequest $request ListFileRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFileResponse ListFileResponse
     */
    public function listFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['order_by'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $body['order_direction'] = $request->orderDirection;
        }
        if (!Utils::isUnset($request->parentFileId)) {
            $body['parent_file_id'] = $request->parentFileId;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->thumbnailProcesses)) {
            $body['thumbnail_processes'] = $request->thumbnailProcesses;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of files and folders.
     *  *
     * @param ListFileRequest $request ListFileRequest
     *
     * @return ListFileResponse ListFileResponse
     */
    public function listFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries groups.
     *  *
     * @param ListGroupRequest $request ListGroupRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupResponse ListGroupResponse
     */
    public function listGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries groups.
     *  *
     * @param ListGroupRequest $request ListGroupRequest
     *
     * @return ListGroupResponse ListGroupResponse
     */
    public function listGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the members of a group.
     *  *
     * @param ListGroupMemberRequest $request ListGroupMemberRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupMemberResponse ListGroupMemberResponse
     */
    public function listGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['member_type'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGroupMember',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/list_member',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the members of a group.
     *  *
     * @param ListGroupMemberRequest $request ListGroupMemberRequest
     *
     * @return ListGroupMemberResponse ListGroupMemberResponse
     */
    public function listGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 列举用户或团队已分配的角色列表
     *  *
     * @param ListIdentityRoleRequest $request ListIdentityRoleRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIdentityRoleResponse ListIdentityRoleResponse
     */
    public function listIdentityRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIdentityRole',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/role/list_identity_role',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIdentityRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列举用户或团队已分配的角色列表
     *  *
     * @param ListIdentityRoleRequest $request ListIdentityRoleRequest
     *
     * @return ListIdentityRoleResponse ListIdentityRoleResponse
     */
    public function listIdentityRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the mappings between entities and benefit packages. You can call this operation to query the benefit packages that are associated with a user.
     *  *
     * @param ListIdentityToBenefitPkgMappingRequest $request ListIdentityToBenefitPkgMappingRequest
     * @param string[]                               $headers map
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIdentityToBenefitPkgMappingResponse ListIdentityToBenefitPkgMappingResponse
     */
    public function listIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identityId)) {
            $body['identity_id'] = $request->identityId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['identity_type'] = $request->identityType;
        }
        if (!Utils::isUnset($request->includeExpired)) {
            $body['include_expired'] = $request->includeExpired;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIdentityToBenefitPkgMapping',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/benefit/identity_to_benefit_pkg_mapping/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the mappings between entities and benefit packages. You can call this operation to query the benefit packages that are associated with a user.
     *  *
     * @param ListIdentityToBenefitPkgMappingRequest $request ListIdentityToBenefitPkgMappingRequest
     *
     * @return ListIdentityToBenefitPkgMappingResponse ListIdentityToBenefitPkgMappingResponse
     */
    public function listIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the drives of the current user.
     *  *
     * @param ListMyDrivesRequest $request ListMyDrivesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMyDrivesResponse ListMyDrivesResponse
     */
    public function listMyDrivesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMyDrives',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/list_my_drives',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMyDrivesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the drives of the current user.
     *  *
     * @param ListMyDrivesRequest $request ListMyDrivesRequest
     *
     * @return ListMyDrivesResponse ListMyDrivesResponse
     */
    public function listMyDrives($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMyDrivesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the team drives that can be accessed by the authorized users.
     *  *
     * @param ListMyGroupDriveRequest $request ListMyGroupDriveRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMyGroupDriveResponse ListMyGroupDriveResponse
     */
    public function listMyGroupDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMyGroupDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/list_my_group_drive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMyGroupDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the team drives that can be accessed by the authorized users.
     *  *
     * @param ListMyGroupDriveRequest $request ListMyGroupDriveRequest
     *
     * @return ListMyGroupDriveResponse ListMyGroupDriveResponse
     */
    public function listMyGroupDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMyGroupDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of files that are shared with a user. You can call this operation to query a list of files in a personal drive on which a user is granted permissions.
     *  *
     * @param ListReceivedFileRequest $request ListReceivedFileRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListReceivedFileResponse ListReceivedFileResponse
     */
    public function listReceivedFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListReceivedFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/list_received_file',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListReceivedFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of files that are shared with a user. You can call this operation to query a list of files in a personal drive on which a user is granted permissions.
     *  *
     * @param ListReceivedFileRequest $request ListReceivedFileRequest
     *
     * @return ListReceivedFileResponse ListReceivedFileResponse
     */
    public function listReceivedFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReceivedFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about files and folders in the recycle bin.
     *  *
     * @param ListRecyclebinRequest $request ListRecyclebinRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecyclebinResponse ListRecyclebinResponse
     */
    public function listRecyclebinWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRecyclebin',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/recyclebin/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRecyclebinResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about files and folders in the recycle bin.
     *  *
     * @param ListRecyclebinRequest $request ListRecyclebinRequest
     *
     * @return ListRecyclebinResponse ListRecyclebinResponse
     */
    public function listRecyclebin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRecyclebinWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the versions of a file.
     *  *
     * @param ListRevisionRequest $request ListRevisionRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRevisionResponse ListRevisionResponse
     */
    public function listRevisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRevision',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/revision/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the versions of a file.
     *  *
     * @param ListRevisionRequest $request ListRevisionRequest
     *
     * @return ListRevisionResponse ListRevisionResponse
     */
    public function listRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries shares.
     *  *
     * @description This operation is discontinued. To query shares, you can call the SearchShareLink operation.
     *  *
     * @param ListShareLinkRequest $request ListShareLinkRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListShareLinkResponse ListShareLinkResponse
     */
    public function listShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creator)) {
            $body['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->includeCancelled)) {
            $body['include_cancelled'] = $request->includeCancelled;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['order_by'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $body['order_direction'] = $request->orderDirection;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries shares.
     *  *
     * @description This operation is discontinued. To query shares, you can call the SearchShareLink operation.
     *  *
     * @param ListShareLinkRequest $request ListShareLinkRequest
     *
     * @return ListShareLinkResponse ListShareLinkResponse
     */
    public function listShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries tags.
     *  *
     * @description You can call this operation to query the tags within the specified drive at a time. The top 2,000 tags of the images are returned.
     *  *
     * @param ListTagsRequest $request ListTagsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->videoThumbnailProcess)) {
            $body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/list_tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries tags.
     *  *
     * @description You can call this operation to query the tags within the specified drive at a time. The top 2,000 tags of the images are returned.
     *  *
     * @param ListTagsRequest $request ListTagsRequest
     *
     * @return ListTagsResponse ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the file parts that are uploaded.
     *  *
     * @param ListUploadedPartsRequest $request ListUploadedPartsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUploadedPartsResponse ListUploadedPartsResponse
     */
    public function listUploadedPartsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->partNumberMarker)) {
            $body['part_number_marker'] = $request->partNumberMarker;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $body['upload_id'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUploadedParts',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/list_uploaded_parts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUploadedPartsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the file parts that are uploaded.
     *  *
     * @param ListUploadedPartsRequest $request ListUploadedPartsRequest
     *
     * @return ListUploadedPartsResponse ListUploadedPartsResponse
     */
    public function listUploadedParts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUploadedPartsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries users.
     *  *
     * @param ListUserRequest $request ListUserRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserResponse ListUserResponse
     */
    public function listUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries users.
     *  *
     * @param ListUserRequest $request ListUserRequest
     *
     * @return ListUserResponse ListUserResponse
     */
    public function listUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Moves files or folders.
     *  *
     * @param MoveFileRequest $request MoveFileRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveFileResponse MoveFileResponse
     */
    public function moveFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkNameMode)) {
            $body['check_name_mode'] = $request->checkNameMode;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->toParentFileId)) {
            $body['to_parent_file_id'] = $request->toParentFileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MoveFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/move',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MoveFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Moves files or folders.
     *  *
     * @param MoveFileRequest $request MoveFileRequest
     *
     * @return MoveFileResponse MoveFileResponse
     */
    public function moveFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->moveFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询凌霄订单价格
     *  *
     * @param QueryOrderPriceRequest $request QueryOrderPriceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOrderPriceResponse QueryOrderPriceResponse
     */
    public function queryOrderPriceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instance_id'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $body['order_type'] = $request->orderType;
        }
        if (!Utils::isUnset($request->package)) {
            $body['package'] = $request->package;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['period_unit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->totalSize)) {
            $body['total_size'] = $request->totalSize;
        }
        if (!Utils::isUnset($request->userCount)) {
            $body['user_count'] = $request->userCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderPrice',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/query_order_price',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryOrderPriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询凌霄订单价格
     *  *
     * @param QueryOrderPriceRequest $request QueryOrderPriceRequest
     *
     * @return QueryOrderPriceResponse QueryOrderPriceResponse
     */
    public function queryOrderPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryOrderPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 从人脸分组中的移除指定的文件
     *  *
     * @param RemoveFaceGroupFileRequest $request RemoveFaceGroupFileRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveFaceGroupFileResponse RemoveFaceGroupFileResponse
     */
    public function removeFaceGroupFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->faceGroupId)) {
            $body['face_group_id'] = $request->faceGroupId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveFaceGroupFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/albums/unassign_facegroup_item',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveFaceGroupFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 从人脸分组中的移除指定的文件
     *  *
     * @param RemoveFaceGroupFileRequest $request RemoveFaceGroupFileRequest
     *
     * @return RemoveFaceGroupFileResponse RemoveFaceGroupFileResponse
     */
    public function removeFaceGroupFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeFaceGroupFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes a member from a group.
     *  *
     * @param RemoveGroupMemberRequest $request RemoveGroupMemberRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveGroupMemberResponse RemoveGroupMemberResponse
     */
    public function removeGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $body['member_id'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['member_type'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveGroupMember',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/remove_member',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes a member from a group.
     *  *
     * @param RemoveGroupMemberRequest $request RemoveGroupMemberRequest
     *
     * @return RemoveGroupMemberResponse RemoveGroupMemberResponse
     */
    public function removeGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 故事移除文件
     *  *
     * @param RemoveStoryFilesRequest $request RemoveStoryFilesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveStoryFilesResponse RemoveStoryFilesResponse
     */
    public function removeStoryFilesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveStoryFiles',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/remove_story_files',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveStoryFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 故事移除文件
     *  *
     * @param RemoveStoryFilesRequest $request RemoveStoryFilesRequest
     *
     * @return RemoveStoryFilesResponse RemoveStoryFilesResponse
     */
    public function removeStoryFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeStoryFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Restores a file or folder from the recycle bin.
     *  *
     * @param RestoreFileRequest $request RestoreFileRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreFileResponse RestoreFileResponse
     */
    public function restoreFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestoreFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/recyclebin/restore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestoreFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Restores a file or folder from the recycle bin.
     *  *
     * @param RestoreFileRequest $request RestoreFileRequest
     *
     * @return RestoreFileResponse RestoreFileResponse
     */
    public function restoreFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Restores a historical version of a file. You cannot restore the latest version of a file.
     *  *
     * @param RestoreRevisionRequest $request RestoreRevisionRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreRevisionResponse RestoreRevisionResponse
     */
    public function restoreRevisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->revisionId)) {
            $body['revision_id'] = $request->revisionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestoreRevision',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/revision/restore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestoreRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Restores a historical version of a file. You cannot restore the latest version of a file.
     *  *
     * @param RestoreRevisionRequest $request RestoreRevisionRequest
     *
     * @return RestoreRevisionResponse RestoreRevisionResponse
     */
    public function restoreRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Scans files.
     *  *
     * @param ScanFileRequest $request ScanFileRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ScanFileResponse ScanFileResponse
     */
    public function scanFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScanFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/scan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScanFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Scans files.
     *  *
     * @param ScanFileRequest $request ScanFileRequest
     *
     * @return ScanFileResponse ScanFileResponse
     */
    public function scanFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scanFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries location-based groups based on specific locations.
     *  *
     * @param SearchAddressGroupsRequest $request SearchAddressGroupsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchAddressGroupsResponse SearchAddressGroupsResponse
     */
    public function searchAddressGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addressLevel)) {
            $body['address_level'] = $request->addressLevel;
        }
        if (!Utils::isUnset($request->addressNames)) {
            $body['address_names'] = $request->addressNames;
        }
        if (!Utils::isUnset($request->brGeoPoint)) {
            $body['br_geo_point'] = $request->brGeoPoint;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->tlGeoPoint)) {
            $body['tl_geo_point'] = $request->tlGeoPoint;
        }
        if (!Utils::isUnset($request->videoThumbnailProcess)) {
            $body['video_thumbnail_process'] = $request->videoThumbnailProcess;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchAddressGroups',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/search_address_groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchAddressGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries location-based groups based on specific locations.
     *  *
     * @param SearchAddressGroupsRequest $request SearchAddressGroupsRequest
     *
     * @return SearchAddressGroupsResponse SearchAddressGroupsResponse
     */
    public function searchAddressGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchAddressGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Search domain with specified attributes
     *  *
     * @param SearchDomainsRequest $request SearchDomainsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDomainsResponse SearchDomainsResponse
     */
    public function searchDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['order_by'] = $request->orderBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchDomains',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Search domain with specified attributes
     *  *
     * @param SearchDomainsRequest $request SearchDomainsRequest
     *
     * @return SearchDomainsResponse SearchDomainsResponse
     */
    public function searchDomains($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchDomainsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries drives.
     *  *
     * @param SearchDriveRequest $request SearchDriveRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDriveResponse SearchDriveResponse
     */
    public function searchDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveName)) {
            $body['drive_name'] = $request->driveName;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $body['owner_type'] = $request->ownerType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries drives.
     *  *
     * @param SearchDriveRequest $request SearchDriveRequest
     *
     * @return SearchDriveResponse SearchDriveResponse
     */
    public function searchDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries files. For more information about best practices, visit https://help.aliyun.com/document_detail/175890.html.
     *  *
     * @param SearchFileRequest $request SearchFileRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchFileResponse SearchFileResponse
     */
    public function searchFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fields)) {
            $body['fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['order_by'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->returnTotalCount)) {
            $body['return_total_count'] = $request->returnTotalCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries files. For more information about best practices, visit https://help.aliyun.com/document_detail/175890.html.
     *  *
     * @param SearchFileRequest $request SearchFileRequest
     *
     * @return SearchFileResponse SearchFileResponse
     */
    public function searchFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries share URLs.
     *  *
     * @param SearchShareLinkRequest $request SearchShareLinkRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchShareLinkResponse SearchShareLinkResponse
     */
    public function searchShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creators)) {
            $body['creators'] = $request->creators;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['order_by'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $body['order_direction'] = $request->orderDirection;
        }
        if (!Utils::isUnset($request->query)) {
            $body['query'] = $request->query;
        }
        if (!Utils::isUnset($request->returnTotalCount)) {
            $body['return_total_count'] = $request->returnTotalCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries share URLs.
     *  *
     * @param SearchShareLinkRequest $request SearchShareLinkRequest
     *
     * @return SearchShareLinkResponse SearchShareLinkResponse
     */
    public function searchShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取相似图片聚类结果
     *  *
     * @param SearchSimilarImageClustersRequest $request SearchSimilarImageClustersRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchSimilarImageClustersResponse SearchSimilarImageClustersResponse
     */
    public function searchSimilarImageClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->imageThumbnailProcess)) {
            $body['image_thumbnail_process'] = $request->imageThumbnailProcess;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchSimilarImageClusters',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/query_similar_image_clusters',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchSimilarImageClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取相似图片聚类结果
     *  *
     * @param SearchSimilarImageClustersRequest $request SearchSimilarImageClustersRequest
     *
     * @return SearchSimilarImageClustersResponse SearchSimilarImageClustersResponse
     */
    public function searchSimilarImageClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchSimilarImageClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询故事列表
     *  *
     * @param SearchStoriesRequest $request SearchStoriesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchStoriesResponse SearchStoriesResponse
     */
    public function searchStoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coverImageThumbnailProcess)) {
            $body['cover_image_thumbnail_process'] = $request->coverImageThumbnailProcess;
        }
        if (!Utils::isUnset($request->coverVideoThumbnailProcess)) {
            $body['cover_video_thumbnail_process'] = $request->coverVideoThumbnailProcess;
        }
        if (!Utils::isUnset($request->createTimeRange)) {
            $body['create_time_range'] = $request->createTimeRange;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $body['custom_labels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->faceGroupIds)) {
            $body['face_group_ids'] = $request->faceGroupIds;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->storyEndTimeRange)) {
            $body['story_end_time_range'] = $request->storyEndTimeRange;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['story_name'] = $request->storyName;
        }
        if (!Utils::isUnset($request->storyStartTimeRange)) {
            $body['story_start_time_range'] = $request->storyStartTimeRange;
        }
        if (!Utils::isUnset($request->storyType)) {
            $body['story_type'] = $request->storyType;
        }
        if (!Utils::isUnset($request->urlExpireSec)) {
            $body['url_expire_sec'] = $request->urlExpireSec;
        }
        if (!Utils::isUnset($request->withEmptyStories)) {
            $body['with_empty_stories'] = $request->withEmptyStories;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchStories',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/find_stories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchStoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询故事列表
     *  *
     * @param SearchStoriesRequest $request SearchStoriesRequest
     *
     * @return SearchStoriesResponse SearchStoriesResponse
     */
    public function searchStories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchStoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Searches for users.
     *  *
     * @param SearchUserRequest $request SearchUserRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchUserResponse SearchUserResponse
     */
    public function searchUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->limit)) {
            $body['limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $body['marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->nickName)) {
            $body['nick_name'] = $request->nickName;
        }
        if (!Utils::isUnset($request->nickNameForFuzzy)) {
            $body['nick_name_for_fuzzy'] = $request->nickNameForFuzzy;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->role)) {
            $body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['user_name'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Searches for users.
     *  *
     * @param SearchUserRequest $request SearchUserRequest
     *
     * @return SearchUserResponse SearchUserResponse
     */
    public function searchUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Generates an access token based on Open Authorization (OAuth) 2.0.
     *  *
     * @description For more information about how to access Drive and Photo Service from a web server application by using OAuth 2.0, visit [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications).
     * For more information about how to access Drive and Photo Service by using a JSON Web Token (JWT) application, visit [Access process for JWT applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/access-process-for-jwt-applications).
     *  *
     * @param TokenRequest   $request TokenRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return TokenResponse TokenResponse
     */
    public function tokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assertion)) {
            $body['assertion'] = $request->assertion;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['client_id'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $body['client_secret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->grantType)) {
            $body['grant_type'] = $request->grantType;
        }
        if (!Utils::isUnset($request->redirectUri)) {
            $body['redirect_uri'] = $request->redirectUri;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $body['refresh_token'] = $request->refreshToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Token',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/oauth/token',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates an access token based on Open Authorization (OAuth) 2.0.
     *  *
     * @description For more information about how to access Drive and Photo Service from a web server application by using OAuth 2.0, visit [OAuth 2.0 For Web Server Applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/oauth-2-0-access-process-for-web-server-applications).
     * For more information about how to access Drive and Photo Service by using a JSON Web Token (JWT) application, visit [Access process for JWT applications](https://www.alibabacloud.com/help/zh/pds/drive-and-photo-service-dev/user-guide/access-process-for-jwt-applications).
     *  *
     * @param TokenRequest $request TokenRequest
     *
     * @return TokenResponse TokenResponse
     */
    public function token($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Moves a file or folder to the recycle bin.
     *  *
     * @param TrashFileRequest $request TrashFileRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return TrashFileResponse TrashFileResponse
     */
    public function trashFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TrashFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/recyclebin/trash',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrashFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Moves a file or folder to the recycle bin.
     *  *
     * @param TrashFileRequest $request TrashFileRequest
     *
     * @return TrashFileResponse TrashFileResponse
     */
    public function trashFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trashFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消账号绑定
     *  *
     * @param UnLinkAccountRequest $request UnLinkAccountRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnLinkAccountResponse UnLinkAccountResponse
     */
    public function unLinkAccountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnLinkAccount',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/account/unlink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnLinkAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 取消账号绑定
     *  *
     * @param UnLinkAccountRequest $request UnLinkAccountRequest
     *
     * @return UnLinkAccountResponse UnLinkAccountResponse
     */
    public function unLinkAccount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLinkAccountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Update domain information.
     *  *
     * @param UpdateDomainRequest $request UpdateDomainRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->domainId)) {
            $body['domain_id'] = $request->domainId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['domain_name'] = $request->domainName;
        }
        if (!Utils::isUnset($request->initDriveEnable)) {
            $body['init_drive_enable'] = $request->initDriveEnable;
        }
        if (!Utils::isUnset($request->initDriveSize)) {
            $body['init_drive_size'] = $request->initDriveSize;
        }
        if (!Utils::isUnset($request->publishedAppAccessStrategy)) {
            $body['published_app_access_strategy'] = $request->publishedAppAccessStrategy;
        }
        if (!Utils::isUnset($request->sizeQuota)) {
            $body['size_quota'] = $request->sizeQuota;
        }
        if (!Utils::isUnset($request->userCountQuota)) {
            $body['user_count_quota'] = $request->userCountQuota;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomain',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/domain/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update domain information.
     *  *
     * @param UpdateDomainRequest $request UpdateDomainRequest
     *
     * @return UpdateDomainResponse UpdateDomainResponse
     */
    public function updateDomain($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDomainWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies a drive.
     *  *
     * @param UpdateDriveRequest $request UpdateDriveRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDriveResponse UpdateDriveResponse
     */
    public function updateDriveWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->driveName)) {
            $body['drive_name'] = $request->driveName;
        }
        if (!Utils::isUnset($request->owner)) {
            $body['owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->totalSize)) {
            $body['total_size'] = $request->totalSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDrive',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/drive/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDriveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a drive.
     *  *
     * @param UpdateDriveRequest $request UpdateDriveRequest
     *
     * @return UpdateDriveResponse UpdateDriveResponse
     */
    public function updateDrive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDriveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates a face-based group.
     *  *
     * @param UpdateFacegroupRequest $request UpdateFacegroupRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFacegroupResponse UpdateFacegroupResponse
     */
    public function updateFacegroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->groupCoverFaceId)) {
            $body['group_cover_face_id'] = $request->groupCoverFaceId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['group_name'] = $request->groupName;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['remarks'] = $request->remarks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFacegroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/update_facegroup_info',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFacegroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a face-based group.
     *  *
     * @param UpdateFacegroupRequest $request UpdateFacegroupRequest
     *
     * @return UpdateFacegroupResponse UpdateFacegroupResponse
     */
    public function updateFacegroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFacegroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the information about a file instead of the file data.
     *  *
     * @param UpdateFileRequest $request UpdateFileRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFileResponse UpdateFileResponse
     */
    public function updateFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkNameMode)) {
            $body['check_name_mode'] = $request->checkNameMode;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->hidden)) {
            $body['hidden'] = $request->hidden;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->localModifiedAt)) {
            $body['local_modified_at'] = $request->localModifiedAt;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->starred)) {
            $body['starred'] = $request->starred;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFile',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a file instead of the file data.
     *  *
     * @param UpdateFileRequest $request UpdateFileRequest
     *
     * @return UpdateFileResponse UpdateFileResponse
     */
    public function updateFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the information about a group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['group_id'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['group_name'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/group/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a group.
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates the mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *  *
     * @param UpdateIdentityToBenefitPkgMappingRequest $request UpdateIdentityToBenefitPkgMappingRequest
     * @param string[]                                 $headers map
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIdentityToBenefitPkgMappingResponse UpdateIdentityToBenefitPkgMappingResponse
     */
    public function updateIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amount)) {
            $body['amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->benefitPkgId)) {
            $body['benefit_pkg_id'] = $request->benefitPkgId;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $body['expire_time'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->identityId)) {
            $body['identity_id'] = $request->identityId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['identity_type'] = $request->identityType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIdentityToBenefitPkgMapping',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/benefit/identity_to_benefit_pkg_mapping/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIdentityToBenefitPkgMappingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the mapping between an entity and a benefit package. You can call this operation to associate a benefit package with a user.
     *  *
     * @param UpdateIdentityToBenefitPkgMappingRequest $request UpdateIdentityToBenefitPkgMappingRequest
     *
     * @return UpdateIdentityToBenefitPkgMappingResponse UpdateIdentityToBenefitPkgMappingResponse
     */
    public function updateIdentityToBenefitPkgMapping($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIdentityToBenefitPkgMappingWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Updates the version information. You can call this operation to permanently retain a version or modify the description of a version. You can permanently retain up to 50 versions of a file.
     *  *
     * @param UpdateRevisionRequest $request UpdateRevisionRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRevisionResponse UpdateRevisionResponse
     */
    public function updateRevisionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $body['file_id'] = $request->fileId;
        }
        if (!Utils::isUnset($request->keepForever)) {
            $body['keep_forever'] = $request->keepForever;
        }
        if (!Utils::isUnset($request->revisionDescription)) {
            $body['revision_description'] = $request->revisionDescription;
        }
        if (!Utils::isUnset($request->revisionId)) {
            $body['revision_id'] = $request->revisionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRevision',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/file/revision/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRevisionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the version information. You can call this operation to permanently retain a version or modify the description of a version. You can permanently retain up to 50 versions of a file.
     *  *
     * @param UpdateRevisionRequest $request UpdateRevisionRequest
     *
     * @return UpdateRevisionResponse UpdateRevisionResponse
     */
    public function updateRevision($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRevisionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies a share link.
     *  *
     * @param UpdateShareLinkRequest $request UpdateShareLinkRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateShareLinkResponse UpdateShareLinkResponse
     */
    public function updateShareLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableDownload)) {
            $body['disable_download'] = $request->disableDownload;
        }
        if (!Utils::isUnset($request->disablePreview)) {
            $body['disable_preview'] = $request->disablePreview;
        }
        if (!Utils::isUnset($request->disableSave)) {
            $body['disable_save'] = $request->disableSave;
        }
        if (!Utils::isUnset($request->downloadCount)) {
            $body['download_count'] = $request->downloadCount;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $body['download_limit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->expiration)) {
            $body['expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->previewCount)) {
            $body['preview_count'] = $request->previewCount;
        }
        if (!Utils::isUnset($request->previewLimit)) {
            $body['preview_limit'] = $request->previewLimit;
        }
        if (!Utils::isUnset($request->reportCount)) {
            $body['report_count'] = $request->reportCount;
        }
        if (!Utils::isUnset($request->saveCount)) {
            $body['save_count'] = $request->saveCount;
        }
        if (!Utils::isUnset($request->saveLimit)) {
            $body['save_limit'] = $request->saveLimit;
        }
        if (!Utils::isUnset($request->shareId)) {
            $body['share_id'] = $request->shareId;
        }
        if (!Utils::isUnset($request->shareName)) {
            $body['share_name'] = $request->shareName;
        }
        if (!Utils::isUnset($request->sharePwd)) {
            $body['share_pwd'] = $request->sharePwd;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->videoPreviewCount)) {
            $body['video_preview_count'] = $request->videoPreviewCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateShareLink',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/share_link/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateShareLinkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a share link.
     *  *
     * @param UpdateShareLinkRequest $request UpdateShareLinkRequest
     *
     * @return UpdateShareLinkResponse UpdateShareLinkResponse
     */
    public function updateShareLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateShareLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新故事
     *  *
     * @param UpdateStoryRequest $request UpdateStoryRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStoryResponse UpdateStoryResponse
     */
    public function updateStoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cover)) {
            $body['cover'] = $request->cover;
        }
        if (!Utils::isUnset($request->customLabels)) {
            $body['custom_labels'] = $request->customLabels;
        }
        if (!Utils::isUnset($request->driveId)) {
            $body['drive_id'] = $request->driveId;
        }
        if (!Utils::isUnset($request->storyId)) {
            $body['story_id'] = $request->storyId;
        }
        if (!Utils::isUnset($request->storyName)) {
            $body['story_name'] = $request->storyName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStory',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/image/update_story',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateStoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新故事
     *  *
     * @param UpdateStoryRequest $request UpdateStoryRequest
     *
     * @return UpdateStoryResponse UpdateStoryResponse
     */
    public function updateStory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Modifies the information about a user.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->avatar)) {
            $body['avatar'] = $request->avatar;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->groupInfoList)) {
            $body['group_info_list'] = $request->groupInfoList;
        }
        if (!Utils::isUnset($request->nickName)) {
            $body['nick_name'] = $request->nickName;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->role)) {
            $body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['user_data'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['user_id'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/user/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a user.
     *  *
     * @param UpdateUserRequest $request UpdateUserRequest
     *
     * @return UpdateUserResponse UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserWithOptions($request, $headers, $runtime);
    }
}
