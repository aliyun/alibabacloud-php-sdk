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
use AlibabaCloud\SDK\Pds\V20220301\Models\UnLinkAcountRequest;
use AlibabaCloud\SDK\Pds\V20220301\Models\UnLinkAcountResponse;
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
use Darabonba\GatewayPds\Client as DarabonbaGatewayPdsClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Pds extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client             = new DarabonbaGatewayPdsClient();
        $this->_spi                = $this->_client;
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
    }

    /**
     * @param AddGroupMemberRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddGroupMemberResponse
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
     * @param AddStoryFilesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AddStoryFilesResponse
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
     * @param AssignRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AssignRoleResponse
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
     * @param AuthorizeRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AuthorizeResponse
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
            'bodyType'    => 'json',
        ]);

        return AuthorizeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @param BatchRequest   $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BatchResponse
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
     * @param CancelAssignRoleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CancelAssignRoleResponse
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
     * @param CancelShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CancelShareLinkResponse
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
     * @param ClearRecyclebinRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ClearRecyclebinResponse
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
     * @param CompleteFileRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CompleteFileResponse
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
     * @param CopyFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return CopyFileResponse
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
     * @param CreateCustomizedStoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCustomizedStoryResponse
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
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
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
     * @param CreateDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDriveResponse
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
     * @param CreateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
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
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
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
     * @param CreateIdentityToBenefitPkgMappingRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateIdentityToBenefitPkgMappingResponse
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
     * @param CreateOrderRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateOrderResponse
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
     * @param CreateShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateShareLinkResponse
     */
    public function createShareLinkWithOptions($request, $headers, $runtime)
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
        if (!Utils::isUnset($request->officeEditable)) {
            $body['office_editable'] = $request->officeEditable;
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
     * @param CreateSimilarImageClusterTaskRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateSimilarImageClusterTaskResponse
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
     * @param CreateStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoryResponse
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
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
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
     * @param CsiGetFileInfoRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CsiGetFileInfoResponse
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
     * @param DeleteDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
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
     * @param DeleteDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteDriveResponse
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
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
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
     * @param DeleteGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
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
     * @param DeleteRevisionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteRevisionResponse
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
     * @param DeleteStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStoryResponse
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
     * @param DeleteUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
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
     * @param DeltaGetLastCursorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeltaGetLastCursorResponse
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
     * @param DownloadFileRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DownloadFileResponse
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
     * @param FileAddPermissionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FileAddPermissionResponse
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
     * @param FileDeleteUserTagsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FileDeleteUserTagsResponse
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
     * @param FileListPermissionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return FileListPermissionResponse
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
     * @param FilePutUserTagsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return FilePutUserTagsResponse
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
     * @param FileRemovePermissionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FileRemovePermissionResponse
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
     * @param GetAsyncTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsyncTaskResponse
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
     * @param GetDefaultDriveRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDefaultDriveResponse
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
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainId)) {
            $body['domain_id'] = $request->domainId;
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
     * @param GetDownloadUrlRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetDownloadUrlResponse
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
     * @param GetDriveRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetDriveResponse
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
     * @param GetFileRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFileResponse
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
     * @param GetGroupRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
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
     * @param GetIdentityToBenefitPkgMappingRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetIdentityToBenefitPkgMappingResponse
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
     * @param GetLinkInfoRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetLinkInfoResponse
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
     * @param GetLinkInfoByUserIdRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetLinkInfoByUserIdResponse
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
     * @param GetRevisionRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetRevisionResponse
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
     * @param GetShareLinkRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetShareLinkResponse
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
     * @param GetShareLinkByAnonymousRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetShareLinkByAnonymousResponse
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
     * @param GetShareLinkTokenRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetShareLinkTokenResponse
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
     * @param GetStoryRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetStoryResponse
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
     * @param GetTaskStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
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
     * @param GetUploadUrlRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetUploadUrlResponse
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
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
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
     * @param GetVideoPreviewPlayInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVideoPreviewPlayInfoResponse
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
     * @param GetVideoPreviewPlayMetaRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVideoPreviewPlayMetaResponse
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
     * @param ImportUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ImportUserResponse
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
     * @param InvestigateFileRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvestigateFileResponse
     */
    public function investigateFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->driveFileIds)) {
            $body['drive_file_ids'] = $request->driveFileIds;
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
     * @param LinkAccountRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return LinkAccountResponse
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
     * @param ListAddressGroupsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListAddressGroupsResponse
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
     * @param ListAssignmentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAssignmentResponse
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
     * @param ListDeltaRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDeltaResponse
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
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
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
     * @param ListDriveRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListDriveResponse
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
     * @param ListFacegroupsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListFacegroupsResponse
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
     * @param ListFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListFileResponse
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
     * @param ListGroupRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListGroupResponse
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
     * @param ListGroupMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListGroupMemberResponse
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
     * @param ListIdentityToBenefitPkgMappingRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListIdentityToBenefitPkgMappingResponse
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
     * @param ListMyDrivesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMyDrivesResponse
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
     * @param ListMyGroupDriveRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMyGroupDriveResponse
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
     * @param ListReceivedFileRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListReceivedFileResponse
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
     * @param ListRecyclebinRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRecyclebinResponse
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
     * @param ListRevisionRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListRevisionResponse
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
     * @param ListShareLinkRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListShareLinkResponse
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
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
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
     * @param ListUploadedPartsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUploadedPartsResponse
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
     * @param ListUserRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListUserResponse
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
     * @param MoveFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return MoveFileResponse
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
     * @param QueryOrderPriceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryOrderPriceResponse
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
     * @param RemoveFaceGroupFileRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveFaceGroupFileResponse
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
     * @param RemoveGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveGroupMemberResponse
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
     * @param RemoveStoryFilesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveStoryFilesResponse
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
     * @param RestoreFileRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RestoreFileResponse
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
     * @param RestoreRevisionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreRevisionResponse
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
     * @param ScanFileRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ScanFileResponse
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
     * @param SearchAddressGroupsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SearchAddressGroupsResponse
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
     * @param SearchDomainsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchDomainsResponse
     */
    public function searchDomainsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['instance_id'] = $request->instanceId;
        }
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
     * @param SearchDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SearchDriveResponse
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
     * @param SearchFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFileResponse
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
     * @param SearchShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SearchShareLinkResponse
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
     * @param SearchSimilarImageClustersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return SearchSimilarImageClustersResponse
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
     * @param SearchStoriesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return SearchStoriesResponse
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
     * @param SearchUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchUserResponse
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
     * @param TokenRequest   $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TokenResponse
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
     * @param TrashFileRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return TrashFileResponse
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
     * @param UnLinkAcountRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UnLinkAcountResponse
     */
    public function unLinkAcountWithOptions($request, $headers, $runtime)
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
            'action'      => 'UnLinkAcount',
            'version'     => '2022-03-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v2/account/unlink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnLinkAcountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UnLinkAcountRequest $request
     *
     * @return UnLinkAcountResponse
     */
    public function unLinkAcount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unLinkAcountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateDomainResponse
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
     * @param UpdateDriveRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateDriveResponse
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
     * @param UpdateFacegroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFacegroupResponse
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
     * @param UpdateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
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
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
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
     * @param UpdateIdentityToBenefitPkgMappingRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateIdentityToBenefitPkgMappingResponse
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
     * @param UpdateRevisionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRevisionResponse
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
     * @param UpdateShareLinkRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateShareLinkResponse
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
     * @param UpdateStoryRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStoryResponse
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
     * @param UpdateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
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
}
