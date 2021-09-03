<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AcceptMergeRequestRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AcceptMergeRequestResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddRepositoryMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddRepositoryMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddWebhookRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\AddWebhookResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateBranchRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateBranchResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateFileRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateFileResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestCommentRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestCommentResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateMergeRequestResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryDeployKeyRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryDeployKeyResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryGroupRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryGroupResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateSshKeyRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateSshKeyResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateTagResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteBranchRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteBranchResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteGroupMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteGroupMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryGroupRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryGroupResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberWithExternUidRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryMemberWithExternUidResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryProtectedBranchRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryProtectedBranchResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryTagRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryTagResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryTagV2Request;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryTagV2Response;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryWebhookRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\DeleteRepositoryWebhookResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\EnableRepositoryDeployKeyRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\EnableRepositoryDeployKeyResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetBranchInfoRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetBranchInfoResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetCodeCompletionRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetCodeCompletionResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetCodeupOrganizationRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetCodeupOrganizationResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileBlobsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileBlobsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileLastCommitRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetFileLastCommitResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetGroupDetailRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetGroupDetailResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestApproveStatusRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestApproveStatusResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestDetailResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestSettingRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestSettingResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationRepositorySettingResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationSecurityCenterStatusRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetOrganizationSecurityCenterStatusResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetProjectMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetProjectMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryCommitRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryCommitResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2Request;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2Response;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupRepositoriesRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupRepositoriesResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestCommentsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestCommentsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationSecurityScoresResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListOrganizationsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoriesRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoriesResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryBranchesRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryBranchesResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCommitDiffRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCommitDiffResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCommitsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCommitsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryTagsRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryTagsResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryTreeRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryTreeResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryWebhookRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryWebhookResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\MergeMergeRequestResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\TriggerRepositoryMirrorSyncRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\TriggerRepositoryMirrorSyncResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateGroupMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateGroupMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestCommentRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestCommentResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestSettingRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateMergeRequestSettingResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryMemberRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryMemberResponse;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Codeup\V20200414\Models\UpdateRepositoryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Codeup extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('codeup', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string                        $ProjectId
     * @param string                        $UserId
     * @param DeleteRepositoryMemberRequest $request
     *
     * @return DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMember($ProjectId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ProjectId
     * @param string                        $UserId
     * @param DeleteRepositoryMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryMemberResponse::fromMap($this->doROARequest('DeleteRepositoryMember', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/members/' . $UserId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                                 $ProjectId
     * @param CreateRepositoryProtectedBranchRequest $request
     *
     * @return CreateRepositoryProtectedBranchResponse
     */
    public function createRepositoryProtectedBranch($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryProtectedBranchWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $ProjectId
     * @param CreateRepositoryProtectedBranchRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateRepositoryProtectedBranchResponse
     */
    public function createRepositoryProtectedBranchWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateRepositoryProtectedBranchResponse::fromMap($this->doROARequest('CreateRepositoryProtectedBranch', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/protect_branches', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param CreateMergeRequestRequest $request
     *
     * @return CreateMergeRequestResponse
     */
    public function createMergeRequest($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMergeRequestWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param CreateMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMergeRequestResponse
     */
    public function createMergeRequestWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateMergeRequestResponse::fromMap($this->doROARequest('CreateMergeRequest', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/merge_requests', 'json', $req, $runtime));
    }

    /**
     * @param string                                     $ProjectId
     * @param DeleteRepositoryMemberWithExternUidRequest $request
     *
     * @return DeleteRepositoryMemberWithExternUidResponse
     */
    public function deleteRepositoryMemberWithExternUid($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryMemberWithExternUidWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                                     $ProjectId
     * @param DeleteRepositoryMemberWithExternUidRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteRepositoryMemberWithExternUidResponse
     */
    public function deleteRepositoryMemberWithExternUidWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->externUserId)) {
            @$query['ExternUserId'] = $request->externUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryMemberWithExternUidResponse::fromMap($this->doROARequest('DeleteRepositoryMemberWithExternUid', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/members/remove', 'json', $req, $runtime));
    }

    /**
     * @param string                  $ProjectId
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ProjectId
     * @param DeleteRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryResponse::fromMap($this->doROARequest('DeleteRepository', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/remove', 'json', $req, $runtime));
    }

    /**
     * @param string                  $ProjectId
     * @param string                  $TagName
     * @param GetRepositoryTagRequest $request
     *
     * @return GetRepositoryTagResponse
     */
    public function getRepositoryTag($ProjectId, $TagName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryTagWithOptions($ProjectId, $TagName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ProjectId
     * @param string                  $TagName
     * @param GetRepositoryTagRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetRepositoryTagResponse
     */
    public function getRepositoryTagWithOptions($ProjectId, $TagName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetRepositoryTagResponse::fromMap($this->doROARequest('GetRepositoryTag', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/tags/' . $TagName . '', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param string                    $MergeRequestId
     * @param UpdateMergeRequestRequest $request
     *
     * @return UpdateMergeRequestResponse
     */
    public function updateMergeRequest($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param string                    $MergeRequestId
     * @param UpdateMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMergeRequestResponse
     */
    public function updateMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateMergeRequestResponse::fromMap($this->doROARequest('UpdateMergeRequest', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                  $ProjectId
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ProjectId
     * @param UpdateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateRepositoryResponse::fromMap($this->doROARequest('UpdateRepository', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $MergeRequestId
     * @param string                           $NoteId
     * @param UpdateMergeRequestCommentRequest $request
     *
     * @return UpdateMergeRequestCommentResponse
     */
    public function updateMergeRequestComment($ProjectId, $MergeRequestId, $NoteId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestCommentWithOptions($ProjectId, $MergeRequestId, $NoteId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $MergeRequestId
     * @param string                           $NoteId
     * @param UpdateMergeRequestCommentRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMergeRequestCommentResponse
     */
    public function updateMergeRequestCommentWithOptions($ProjectId, $MergeRequestId, $NoteId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateMergeRequestCommentResponse::fromMap($this->doROARequest('UpdateMergeRequestComment', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '/merge_requests/' . $MergeRequestId . '/notes/' . $NoteId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                             $ProjectId
     * @param TriggerRepositoryMirrorSyncRequest $request
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSync($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerRepositoryMirrorSyncWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $ProjectId
     * @param TriggerRepositoryMirrorSyncRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSyncWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->account)) {
            @$query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->token)) {
            @$query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return TriggerRepositoryMirrorSyncResponse::fromMap($this->doROARequest('TriggerRepositoryMirrorSync', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/mirror', 'json', $req, $runtime));
    }

    /**
     * @param string              $ProjectId
     * @param DeleteBranchRequest $request
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranch($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBranchWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string              $ProjectId
     * @param DeleteBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranchWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            @$query['BranchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteBranchResponse::fromMap($this->doROARequest('DeleteBranch', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/branches/delete', 'json', $req, $runtime));
    }

    /**
     * @param string                          $ProjectId
     * @param string                          $Sha
     * @param ListRepositoryCommitDiffRequest $request
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiff($ProjectId, $Sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitDiffWithOptions($ProjectId, $Sha, $request, $headers, $runtime);
    }

    /**
     * @param string                          $ProjectId
     * @param string                          $Sha
     * @param ListRepositoryCommitDiffRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiffWithOptions($ProjectId, $Sha, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->contextLine)) {
            @$query['ContextLine'] = $request->contextLine;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryCommitDiffResponse::fromMap($this->doROARequest('ListRepositoryCommitDiff', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/commits/' . $Sha . '/diff', 'json', $req, $runtime));
    }

    /**
     * @param GetRepositoryInfoRequest $request
     *
     * @return GetRepositoryInfoResponse
     */
    public function getRepositoryInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRepositoryInfoRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetRepositoryInfoResponse
     */
    public function getRepositoryInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->identity)) {
            @$query['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetRepositoryInfoResponse::fromMap($this->doROARequest('GetRepositoryInfo', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/info', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param string                    $MergeRequestId
     * @param AcceptMergeRequestRequest $request
     *
     * @return AcceptMergeRequestResponse
     */
    public function acceptMergeRequest($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->acceptMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param string                    $MergeRequestId
     * @param AcceptMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return AcceptMergeRequestResponse
     */
    public function acceptMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AcceptMergeRequestResponse::fromMap($this->doROARequest('AcceptMergeRequest', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '/accept', 'json', $req, $runtime));
    }

    /**
     * @param string            $ProjectId
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string            $ProjectId
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->branchName)) {
            @$query['BranchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->filePath)) {
            @$query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            @$query['CommitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteFileResponse::fromMap($this->doROARequest('DeleteFile', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/files', 'json', $req, $runtime));
    }

    /**
     * @param string                                 $ProjectId
     * @param string                                 $ProtectedBranchId
     * @param DeleteRepositoryProtectedBranchRequest $request
     *
     * @return DeleteRepositoryProtectedBranchResponse
     */
    public function deleteRepositoryProtectedBranch($ProjectId, $ProtectedBranchId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryProtectedBranchWithOptions($ProjectId, $ProtectedBranchId, $request, $headers, $runtime);
    }

    /**
     * @param string                                 $ProjectId
     * @param string                                 $ProtectedBranchId
     * @param DeleteRepositoryProtectedBranchRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteRepositoryProtectedBranchResponse
     */
    public function deleteRepositoryProtectedBranchWithOptions($ProjectId, $ProtectedBranchId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryProtectedBranchResponse::fromMap($this->doROARequest('DeleteRepositoryProtectedBranch', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/protect_branches/' . $ProtectedBranchId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ProjectId
     * @param DeleteRepositoryTagV2Request $request
     *
     * @return DeleteRepositoryTagV2Response
     */
    public function deleteRepositoryTagV2($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryTagV2WithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ProjectId
     * @param DeleteRepositoryTagV2Request $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRepositoryTagV2Response
     */
    public function deleteRepositoryTagV2WithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->tagName)) {
            @$query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryTagV2Response::fromMap($this->doROARequest('DeleteRepositoryTagV2', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/tag/delete', 'json', $req, $runtime));
    }

    /**
     * @param string                   $ProjectId
     * @param GetFileLastCommitRequest $request
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommit($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileLastCommitWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ProjectId
     * @param GetFileLastCommitRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommitWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->sha)) {
            @$query['Sha'] = $request->sha;
        }
        if (!Utils::isUnset($request->filePath)) {
            @$query['FilePath'] = $request->filePath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetFileLastCommitResponse::fromMap($this->doROARequest('GetFileLastCommit', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/files/last_commit', 'json', $req, $runtime));
    }

    /**
     * @param string            $ProjectId
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string            $ProjectId
     * @param UpdateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateFileResponse::fromMap($this->doROARequest('UpdateFile', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/files', 'json', $req, $runtime));
    }

    /**
     * @param string                        $ProjectId
     * @param string                        $UserId
     * @param UpdateRepositoryMemberRequest $request
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMember($ProjectId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ProjectId
     * @param string                        $UserId
     * @param UpdateRepositoryMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateRepositoryMemberResponse::fromMap($this->doROARequest('UpdateRepositoryMember', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '/members/' . $UserId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                     $ProjectId
     * @param AddRepositoryMemberRequest $request
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMember($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addRepositoryMemberWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ProjectId
     * @param AddRepositoryMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMemberWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddRepositoryMemberResponse::fromMap($this->doROARequest('AddRepositoryMember', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/members', 'json', $req, $runtime));
    }

    /**
     * @param CreateSshKeyRequest $request
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSshKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSshKeyRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKeyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateSshKeyResponse::fromMap($this->doROARequest('CreateSshKey', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/user/keys', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param ListRepositoryTagsRequest $request
     *
     * @return ListRepositoryTagsResponse
     */
    public function listRepositoryTags($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTagsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param ListRepositoryTagsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRepositoryTagsResponse
     */
    public function listRepositoryTagsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sort)) {
            @$query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->showSignature)) {
            @$query['ShowSignature'] = $request->showSignature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryTagsResponse::fromMap($this->doROARequest('ListRepositoryTags', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/tags', 'json', $req, $runtime));
    }

    /**
     * @param string            $ProjectId
     * @param AddWebhookRequest $request
     *
     * @return AddWebhookResponse
     */
    public function addWebhook($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWebhookWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string            $ProjectId
     * @param AddWebhookRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddWebhookResponse
     */
    public function addWebhookWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddWebhookResponse::fromMap($this->doROARequest('AddWebhook', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/hooks', 'json', $req, $runtime));
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $KeyId
     * @param EnableRepositoryDeployKeyRequest $request
     *
     * @return EnableRepositoryDeployKeyResponse
     */
    public function enableRepositoryDeployKey($ProjectId, $KeyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableRepositoryDeployKeyWithOptions($ProjectId, $KeyId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $KeyId
     * @param EnableRepositoryDeployKeyRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableRepositoryDeployKeyResponse
     */
    public function enableRepositoryDeployKeyWithOptions($ProjectId, $KeyId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return EnableRepositoryDeployKeyResponse::fromMap($this->doROARequest('EnableRepositoryDeployKey', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/keys/' . $KeyId . '/enable', 'json', $req, $runtime));
    }

    /**
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserInfoRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetUserInfoResponse::fromMap($this->doROARequest('GetUserInfo', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/user/current', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param ListRepositoryTreeRequest $request
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTree($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTreeWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param ListRepositoryTreeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTreeWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->path)) {
            @$query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->refName)) {
            @$query['RefName'] = $request->refName;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryTreeResponse::fromMap($this->doROARequest('ListRepositoryTree', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/tree', 'json', $req, $runtime));
    }

    /**
     * @param string                       $GroupId
     * @param DeleteRepositoryGroupRequest $request
     *
     * @return DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroup($GroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryGroupWithOptions($GroupId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $GroupId
     * @param DeleteRepositoryGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroupWithOptions($GroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryGroupResponse::fromMap($this->doROARequest('DeleteRepositoryGroup', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/groups/' . $GroupId . '/remove', 'json', $req, $runtime));
    }

    /**
     * @param string                         $ProjectId
     * @param string                         $WebhookId
     * @param DeleteRepositoryWebhookRequest $request
     *
     * @return DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhook($ProjectId, $WebhookId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWebhookWithOptions($ProjectId, $WebhookId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ProjectId
     * @param string                         $WebhookId
     * @param DeleteRepositoryWebhookRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhookWithOptions($ProjectId, $WebhookId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryWebhookResponse::fromMap($this->doROARequest('DeleteRepositoryWebhook', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/hooks/' . $WebhookId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                      $ProjectId
     * @param ListRepositoryMemberRequest $request
     *
     * @return ListRepositoryMemberResponse
     */
    public function listRepositoryMember($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryMemberWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ProjectId
     * @param ListRepositoryMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListRepositoryMemberResponse
     */
    public function listRepositoryMemberWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->query)) {
            @$query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryMemberResponse::fromMap($this->doROARequest('ListRepositoryMember', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/members', 'json', $req, $runtime));
    }

    /**
     * @param string           $ProjectId
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTagWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string           $ProjectId
     * @param CreateTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateTagResponse::fromMap($this->doROARequest('CreateTag', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/tags', 'json', $req, $runtime));
    }

    /**
     * @param string                     $ProjectId
     * @param string                     $Sha
     * @param GetRepositoryCommitRequest $request
     *
     * @return GetRepositoryCommitResponse
     */
    public function getRepositoryCommit($ProjectId, $Sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryCommitWithOptions($ProjectId, $Sha, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ProjectId
     * @param string                     $Sha
     * @param GetRepositoryCommitRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetRepositoryCommitResponse
     */
    public function getRepositoryCommitWithOptions($ProjectId, $Sha, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetRepositoryCommitResponse::fromMap($this->doROARequest('GetRepositoryCommit', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/commits/' . $Sha . '', 'json', $req, $runtime));
    }

    /**
     * @param string                $GroupId
     * @param AddGroupMemberRequest $request
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMember($GroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupMemberWithOptions($GroupId, $request, $headers, $runtime);
    }

    /**
     * @param string                $GroupId
     * @param AddGroupMemberRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($GroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return AddGroupMemberResponse::fromMap($this->doROARequest('AddGroupMember', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/groups/' . $GroupId . '/members', 'json', $req, $runtime));
    }

    /**
     * @param string               $ProjectId
     * @param GetBranchInfoRequest $request
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfo($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBranchInfoWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ProjectId
     * @param GetBranchInfoRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfoWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        if (!Utils::isUnset($request->branchName)) {
            @$query['BranchName'] = $request->branchName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetBranchInfoResponse::fromMap($this->doROARequest('GetBranchInfo', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/branches/detail', 'json', $req, $runtime));
    }

    /**
     * @param string                          $ProjectId
     * @param string                          $MergeRequestId
     * @param ListMergeRequestCommentsRequest $request
     *
     * @return ListMergeRequestCommentsResponse
     */
    public function listMergeRequestComments($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestCommentsWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $ProjectId
     * @param string                          $MergeRequestId
     * @param ListMergeRequestCommentsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMergeRequestCommentsResponse
     */
    public function listMergeRequestCommentsWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->fromCommit)) {
            @$query['FromCommit'] = $request->fromCommit;
        }
        if (!Utils::isUnset($request->toCommit)) {
            @$query['ToCommit'] = $request->toCommit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListMergeRequestCommentsResponse::fromMap($this->doROARequest('ListMergeRequestComments', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '/comments', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepositoryGroupRequest $request
     *
     * @return CreateRepositoryGroupResponse
     */
    public function createRepositoryGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRepositoryGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRepositoryGroupResponse
     */
    public function createRepositoryGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateRepositoryGroupResponse::fromMap($this->doROARequest('CreateRepositoryGroup', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/groups', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ProjectId
     * @param string                       $MergeRequestId
     * @param GetMergeRequestDetailRequest $request
     *
     * @return GetMergeRequestDetailResponse
     */
    public function getMergeRequestDetail($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestDetailWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ProjectId
     * @param string                       $MergeRequestId
     * @param GetMergeRequestDetailRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetMergeRequestDetailResponse
     */
    public function getMergeRequestDetailWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMergeRequestDetailResponse::fromMap($this->doROARequest('GetMergeRequestDetail', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '', 'json', $req, $runtime));
    }

    /**
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListGroupsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        if (!Utils::isUnset($request->includePersonal)) {
            @$query['IncludePersonal'] = $request->includePersonal;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListGroupsResponse::fromMap($this->doROARequest('ListGroups', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/groups/all', 'json', $req, $runtime));
    }

    /**
     * @param string                               $ProjectId
     * @param ListRepositoryProtectedBranchRequest $request
     *
     * @return ListRepositoryProtectedBranchResponse
     */
    public function listRepositoryProtectedBranch($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryProtectedBranchWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $ProjectId
     * @param ListRepositoryProtectedBranchRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListRepositoryProtectedBranchResponse
     */
    public function listRepositoryProtectedBranchWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryProtectedBranchResponse::fromMap($this->doROARequest('ListRepositoryProtectedBranch', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/protect_branches', 'json', $req, $runtime));
    }

    /**
     * @param ListOrganizationsRequest $request
     *
     * @return ListOrganizationsResponse
     */
    public function listOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOrganizationsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListOrganizationsResponse
     */
    public function listOrganizationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->accessLevel)) {
            @$query['AccessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->minAccessLevel)) {
            @$query['MinAccessLevel'] = $request->minAccessLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListOrganizationsResponse::fromMap($this->doROARequest('ListOrganizations', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/organization', 'json', $req, $runtime));
    }

    /**
     * @param string                  $ProjectId
     * @param string                  $UserId
     * @param GetProjectMemberRequest $request
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMember($ProjectId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ProjectId
     * @param string                  $UserId
     * @param GetProjectMemberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($ProjectId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetProjectMemberResponse::fromMap($this->doROARequest('GetProjectMember', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/members/' . $UserId . '', 'json', $req, $runtime));
    }

    /**
     * @param string            $ProjectId
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string            $ProjectId
     * @param CreateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateFileResponse::fromMap($this->doROARequest('CreateFile', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/files', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ProjectId
     * @param ListRepositoryCommitsRequest $request
     *
     * @return ListRepositoryCommitsResponse
     */
    public function listRepositoryCommits($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ProjectId
     * @param ListRepositoryCommitsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepositoryCommitsResponse
     */
    public function listRepositoryCommitsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->path)) {
            @$query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->refName)) {
            @$query['RefName'] = $request->refName;
        }
        if (!Utils::isUnset($request->showSignature)) {
            @$query['ShowSignature'] = $request->showSignature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryCommitsResponse::fromMap($this->doROARequest('ListRepositoryCommits', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/commits', 'json', $req, $runtime));
    }

    /**
     * @param string                              $ProjectId
     * @param string                              $MergeRequestId
     * @param GetMergeRequestApproveStatusRequest $request
     *
     * @return GetMergeRequestApproveStatusResponse
     */
    public function getMergeRequestApproveStatus($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestApproveStatusWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                              $ProjectId
     * @param string                              $MergeRequestId
     * @param GetMergeRequestApproveStatusRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetMergeRequestApproveStatusResponse
     */
    public function getMergeRequestApproveStatusWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMergeRequestApproveStatusResponse::fromMap($this->doROARequest('GetMergeRequestApproveStatus', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '/approve_status', 'json', $req, $runtime));
    }

    /**
     * @param ListRepositoriesRequest $request
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRepositoriesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->sort)) {
            @$query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->archive)) {
            @$query['Archive'] = $request->archive;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoriesResponse::fromMap($this->doROARequest('ListRepositories', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/all', 'json', $req, $runtime));
    }

    /**
     * @param string                           $ProjectId
     * @param UpdateMergeRequestSettingRequest $request
     *
     * @return UpdateMergeRequestSettingResponse
     */
    public function updateMergeRequestSetting($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestSettingWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $ProjectId
     * @param UpdateMergeRequestSettingRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMergeRequestSettingResponse
     */
    public function updateMergeRequestSettingWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateMergeRequestSettingResponse::fromMap($this->doROARequest('UpdateMergeRequestSetting', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v4/projects/' . $ProjectId . '/settings/merge_requests', 'json', $req, $runtime));
    }

    /**
     * @param string                 $GroupId
     * @param ListGroupMemberRequest $request
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMember($GroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupMemberWithOptions($GroupId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $GroupId
     * @param ListGroupMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMemberWithOptions($GroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListGroupMemberResponse::fromMap($this->doROARequest('ListGroupMember', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/groups/' . $GroupId . '/members', 'json', $req, $runtime));
    }

    /**
     * @param string                   $GroupId
     * @param string                   $UserId
     * @param UpdateGroupMemberRequest $request
     *
     * @return UpdateGroupMemberResponse
     */
    public function updateGroupMember($GroupId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupMemberWithOptions($GroupId, $UserId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $GroupId
     * @param string                   $UserId
     * @param UpdateGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGroupMemberResponse
     */
    public function updateGroupMemberWithOptions($GroupId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return UpdateGroupMemberResponse::fromMap($this->doROARequest('UpdateGroupMember', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/groups/' . $GroupId . '/members/' . $UserId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $MergeRequestId
     * @param CreateMergeRequestCommentRequest $request
     *
     * @return CreateMergeRequestCommentResponse
     */
    public function createMergeRequestComment($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMergeRequestCommentWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $ProjectId
     * @param string                           $MergeRequestId
     * @param CreateMergeRequestCommentRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMergeRequestCommentResponse
     */
    public function createMergeRequestCommentWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateMergeRequestCommentResponse::fromMap($this->doROARequest('CreateMergeRequestComment', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v4/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '/comments', 'json', $req, $runtime));
    }

    /**
     * @param string                           $ProjectId
     * @param CreateRepositoryDeployKeyRequest $request
     *
     * @return CreateRepositoryDeployKeyResponse
     */
    public function createRepositoryDeployKey($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryDeployKeyWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $ProjectId
     * @param CreateRepositoryDeployKeyRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRepositoryDeployKeyResponse
     */
    public function createRepositoryDeployKeyWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateRepositoryDeployKeyResponse::fromMap($this->doROARequest('CreateRepositoryDeployKey', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/keys', 'json', $req, $runtime));
    }

    /**
     * @param string                     $ProjectId
     * @param string                     $TagName
     * @param DeleteRepositoryTagRequest $request
     *
     * @return DeleteRepositoryTagResponse
     */
    public function deleteRepositoryTag($ProjectId, $TagName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryTagWithOptions($ProjectId, $TagName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ProjectId
     * @param string                     $TagName
     * @param DeleteRepositoryTagRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRepositoryTagResponse
     */
    public function deleteRepositoryTagWithOptions($ProjectId, $TagName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteRepositoryTagResponse::fromMap($this->doROARequest('DeleteRepositoryTag', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/tags/' . $TagName . '', 'json', $req, $runtime));
    }

    /**
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->sync)) {
            @$query['Sync'] = $request->sync;
        }
        if (!Utils::isUnset($request->createParentPath)) {
            @$query['CreateParentPath'] = $request->createParentPath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateRepositoryResponse::fromMap($this->doROARequest('CreateRepository', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects', 'json', $req, $runtime));
    }

    /**
     * @param string                   $ServiceName
     * @param GetCodeCompletionRequest $request
     *
     * @return GetCodeCompletionResponse
     */
    public function getCodeCompletion($ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeCompletionWithOptions($ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ServiceName
     * @param GetCodeCompletionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetCodeCompletionResponse
     */
    public function getCodeCompletionWithOptions($ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fetchKeys)) {
            @$query['FetchKeys'] = $request->fetchKeys;
        }
        if (!Utils::isUnset($request->isEncrypted)) {
            @$query['IsEncrypted'] = $request->isEncrypted;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetCodeCompletionResponse::fromMap($this->doROARequest('GetCodeCompletion', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v2/service/invoke/' . $ServiceName . '', 'json', $req, $runtime));
    }

    /**
     * @param ListMergeRequestsRequest $request
     *
     * @return ListMergeRequestsResponse
     */
    public function listMergeRequests($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMergeRequestsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListMergeRequestsResponse
     */
    public function listMergeRequestsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->groupIdList)) {
            @$query['GroupIdList'] = $request->groupIdList;
        }
        if (!Utils::isUnset($request->projectIdList)) {
            @$query['ProjectIdList'] = $request->projectIdList;
        }
        if (!Utils::isUnset($request->authorCodeupIdList)) {
            @$query['AuthorCodeupIdList'] = $request->authorCodeupIdList;
        }
        if (!Utils::isUnset($request->authorIdList)) {
            @$query['AuthorIdList'] = $request->authorIdList;
        }
        if (!Utils::isUnset($request->assigneeCodeupIdList)) {
            @$query['AssigneeCodeupIdList'] = $request->assigneeCodeupIdList;
        }
        if (!Utils::isUnset($request->assigneeIdList)) {
            @$query['AssigneeIdList'] = $request->assigneeIdList;
        }
        if (!Utils::isUnset($request->subscriberCodeupIdList)) {
            @$query['SubscriberCodeupIdList'] = $request->subscriberCodeupIdList;
        }
        if (!Utils::isUnset($request->state)) {
            @$query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->order)) {
            @$query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->afterDate)) {
            @$query['AfterDate'] = $request->afterDate;
        }
        if (!Utils::isUnset($request->beforeDate)) {
            @$query['BeforeDate'] = $request->beforeDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListMergeRequestsResponse::fromMap($this->doROARequest('ListMergeRequests', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/merge_requests/advanced_search', 'json', $req, $runtime));
    }

    /**
     * @param ListOrganizationSecurityScoresRequest $request
     *
     * @return ListOrganizationSecurityScoresResponse
     */
    public function listOrganizationSecurityScores($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationSecurityScoresWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListOrganizationSecurityScoresRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListOrganizationSecurityScoresResponse
     */
    public function listOrganizationSecurityScoresWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListOrganizationSecurityScoresResponse::fromMap($this->doROARequest('ListOrganizationSecurityScores', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/organization/security/scores', 'json', $req, $runtime));
    }

    /**
     * @param string              $ProjectId
     * @param GetFileBlobsRequest $request
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobs($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileBlobsWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string              $ProjectId
     * @param GetFileBlobsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobsWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->filePath)) {
            @$query['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->ref)) {
            @$query['Ref'] = $request->ref;
        }
        if (!Utils::isUnset($request->from)) {
            @$query['From'] = $request->from;
        }
        if (!Utils::isUnset($request->to)) {
            @$query['To'] = $request->to;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetFileBlobsResponse::fromMap($this->doROARequest('GetFileBlobs', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/repository/blobs', 'json', $req, $runtime));
    }

    /**
     * @param string                   $ProjectId
     * @param string                   $MergeRequestId
     * @param MergeMergeRequestRequest $request
     *
     * @return MergeMergeRequestResponse
     */
    public function mergeMergeRequest($ProjectId, $MergeRequestId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ProjectId
     * @param string                   $MergeRequestId
     * @param MergeMergeRequestRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return MergeMergeRequestResponse
     */
    public function mergeMergeRequestWithOptions($ProjectId, $MergeRequestId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return MergeMergeRequestResponse::fromMap($this->doROARequest('MergeMergeRequest', '2020-04-14', 'HTTPS', 'PUT', 'AK', '/api/v3/projects/' . $ProjectId . '/merge_request/' . $MergeRequestId . '/merge', 'json', $req, $runtime));
    }

    /**
     * @param string                   $GroupId
     * @param string                   $UserId
     * @param DeleteGroupMemberRequest $request
     *
     * @return DeleteGroupMemberResponse
     */
    public function deleteGroupMember($GroupId, $UserId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupMemberWithOptions($GroupId, $UserId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $GroupId
     * @param string                   $UserId
     * @param DeleteGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteGroupMemberResponse
     */
    public function deleteGroupMemberWithOptions($GroupId, $UserId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteGroupMemberResponse::fromMap($this->doROARequest('DeleteGroupMember', '2020-04-14', 'HTTPS', 'DELETE', 'AK', '/api/v3/groups/' . $GroupId . '/members/' . $UserId . '', 'json', $req, $runtime));
    }

    /**
     * @param string                                   $ProjectId
     * @param ListRepositoryMemberWithInheritedRequest $request
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInherited($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryMemberWithInheritedWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $ProjectId
     * @param ListRepositoryMemberWithInheritedRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInheritedWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryMemberWithInheritedResponse::fromMap($this->doROARequest('ListRepositoryMemberWithInherited', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/all_members', 'json', $req, $runtime));
    }

    /**
     * @param GetGroupDetailRequest $request
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetGroupDetailRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetGroupDetailResponse::fromMap($this->doROARequest('GetGroupDetail', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/groups/detail', 'json', $req, $runtime));
    }

    /**
     * @param string                       $OrganizationIdentity
     * @param GetCodeupOrganizationRequest $request
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganization($OrganizationIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeupOrganizationWithOptions($OrganizationIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                       $OrganizationIdentity
     * @param GetCodeupOrganizationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganizationWithOptions($OrganizationIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetCodeupOrganizationResponse::fromMap($this->doROARequest('GetCodeupOrganization', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/organization/' . $OrganizationIdentity . '', 'json', $req, $runtime));
    }

    /**
     * @param GetOrganizationSecurityCenterStatusRequest $request
     *
     * @return GetOrganizationSecurityCenterStatusResponse
     */
    public function getOrganizationSecurityCenterStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationSecurityCenterStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetOrganizationSecurityCenterStatusRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return GetOrganizationSecurityCenterStatusResponse
     */
    public function getOrganizationSecurityCenterStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetOrganizationSecurityCenterStatusResponse::fromMap($this->doROARequest('GetOrganizationSecurityCenterStatus', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/organization/security/status', 'json', $req, $runtime));
    }

    /**
     * @param string                        $ProjectId
     * @param ListRepositoryBranchesRequest $request
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranches($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryBranchesWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ProjectId
     * @param ListRepositoryBranchesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranchesWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryBranchesResponse::fromMap($this->doROARequest('ListRepositoryBranches', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/branches', 'json', $req, $runtime));
    }

    /**
     * @param string              $ProjectId
     * @param CreateBranchRequest $request
     *
     * @return CreateBranchResponse
     */
    public function createBranch($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBranchWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string              $ProjectId
     * @param CreateBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBranchResponse
     */
    public function createBranchWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateBranchResponse::fromMap($this->doROARequest('CreateBranch', '2020-04-14', 'HTTPS', 'POST', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/branches', 'json', $req, $runtime));
    }

    /**
     * @param GetOrganizationRepositorySettingRequest $request
     *
     * @return GetOrganizationRepositorySettingResponse
     */
    public function getOrganizationRepositorySetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationRepositorySettingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetOrganizationRepositorySettingRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetOrganizationRepositorySettingResponse
     */
    public function getOrganizationRepositorySettingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetOrganizationRepositorySettingResponse::fromMap($this->doROARequest('GetOrganizationRepositorySetting', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/organization/settings/repo', 'json', $req, $runtime));
    }

    /**
     * @param string                       $Identity
     * @param ListGroupRepositoriesRequest $request
     *
     * @return ListGroupRepositoriesResponse
     */
    public function listGroupRepositories($Identity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupRepositoriesWithOptions($Identity, $request, $headers, $runtime);
    }

    /**
     * @param string                       $Identity
     * @param ListGroupRepositoriesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListGroupRepositoriesResponse
     */
    public function listGroupRepositoriesWithOptions($Identity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->isMember)) {
            @$query['IsMember'] = $request->isMember;
        }
        if (!Utils::isUnset($request->subUserId)) {
            @$query['SubUserId'] = $request->subUserId;
        }
        if (!Utils::isUnset($request->search)) {
            @$query['Search'] = $request->search;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListGroupRepositoriesResponse::fromMap($this->doROARequest('ListGroupRepositories', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/groups/' . $Identity . '/projects', 'json', $req, $runtime));
    }

    /**
     * @param string                    $ProjectId
     * @param GetRepositoryTagV2Request $request
     *
     * @return GetRepositoryTagV2Response
     */
    public function getRepositoryTagV2($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryTagV2WithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ProjectId
     * @param GetRepositoryTagV2Request $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetRepositoryTagV2Response
     */
    public function getRepositoryTagV2WithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->tagName)) {
            @$query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetRepositoryTagV2Response::fromMap($this->doROARequest('GetRepositoryTagV2', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/repository/tag/info', 'json', $req, $runtime));
    }

    /**
     * @param string                        $ProjectId
     * @param GetMergeRequestSettingRequest $request
     *
     * @return GetMergeRequestSettingResponse
     */
    public function getMergeRequestSetting($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestSettingWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ProjectId
     * @param GetMergeRequestSettingRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetMergeRequestSettingResponse
     */
    public function getMergeRequestSettingWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetMergeRequestSettingResponse::fromMap($this->doROARequest('GetMergeRequestSetting', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v4/projects/' . $ProjectId . '/settings/merge_requests', 'json', $req, $runtime));
    }

    /**
     * @param string                       $ProjectId
     * @param ListRepositoryWebhookRequest $request
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhook($ProjectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryWebhookWithOptions($ProjectId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ProjectId
     * @param ListRepositoryWebhookRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhookWithOptions($ProjectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            @$query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            @$query['OrganizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRepositoryWebhookResponse::fromMap($this->doROARequest('ListRepositoryWebhook', '2020-04-14', 'HTTPS', 'GET', 'AK', '/api/v3/projects/' . $ProjectId . '/hooks', 'json', $req, $runtime));
    }
}
