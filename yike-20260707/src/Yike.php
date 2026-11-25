<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yike\V20260707\Models\AddProjectMembersRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\AddProjectMembersResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetMediasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetMediasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetVideoCharacterReplaceJobsRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetVideoCharacterReplaceJobsResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CancelGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CancelGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateInfiniteCanvasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateInfiniteCanvasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateOssUploadRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateOssUploadResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateUploadMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateUploadMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteInfiniteCanvasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteInfiniteCanvasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteMediasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteMediasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GenerateYikeLoginTokenRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GenerateYikeLoginTokenResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAgentJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAgentJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetImageGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetImageGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetInfiniteCanvasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetInfiniteCanvasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetProjectRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetProjectResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetRemakeScriptJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetRemakeScriptJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoCharacterReplaceJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoCharacterReplaceJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoCreativeGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoCreativeGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoDetextJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoDetextJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRemakeJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRemakeJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRenderJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRenderJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoTranslationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoTranslationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeAccountCreditRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeAccountCreditResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeJobCreditRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeJobCreditResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ImportMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ImportMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListAssetCategoriesRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListAssetCategoriesResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListInfiniteCanvasesRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListInfiniteCanvasesResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListMediaFoldersRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListMediaFoldersResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\PrecheckVideoCharacterReplaceJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\PrecheckVideoCharacterReplaceJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitAgentJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitAgentJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitImageGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitImageGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitMediaComprehensionJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitMediaComprehensionJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitRemakeScriptJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitRemakeScriptJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoCharacterReplaceJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoCharacterReplaceJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoCreativeGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoCreativeGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoDetextJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoDetextJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRemakeJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRemakeJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRenderJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRenderJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoTranslationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoTranslationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateInfiniteCanvasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateInfiniteCanvasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateProjectResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yike extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Yike';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yike', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds members to a project.
     *
     * @remarks
     * Adds users under the same Alibaba Cloud account to a specified project in the default workspace of the Alibaba Cloud account, and grants the Edit permission by default. ProjectId specifies the project ID. YikeUserIds specifies a comma-separated list of Yike user IDs, which are not Alibaba Cloud UIDs. Currently, only the default workspace of the Alibaba Cloud account is supported, and projects in newly created workspaces are not supported. This operation follows the behavior of the original member API operation: adding an existing member resets the project permissions. Regular members are assigned the Edit permission, and SuperAdmins of the default workspace retain the Manage permission. Only Alibaba Cloud accounts that have activated ProductionOpenAPI are supported. Default Alibaba Cloud account projects (pd_Alibaba Cloud account ID) are not supported.
     *
     * @param request - AddProjectMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddProjectMembersResponse
     *
     * @param AddProjectMembersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddProjectMembersResponse
     */
    public function addProjectMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->yikeUserIds) {
            @$query['YikeUserIds'] = $request->yikeUserIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddProjectMembers',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds members to a project.
     *
     * @remarks
     * Adds users under the same Alibaba Cloud account to a specified project in the default workspace of the Alibaba Cloud account, and grants the Edit permission by default. ProjectId specifies the project ID. YikeUserIds specifies a comma-separated list of Yike user IDs, which are not Alibaba Cloud UIDs. Currently, only the default workspace of the Alibaba Cloud account is supported, and projects in newly created workspaces are not supported. This operation follows the behavior of the original member API operation: adding an existing member resets the project permissions. Regular members are assigned the Edit permission, and SuperAdmins of the default workspace retain the Manage permission. Only Alibaba Cloud accounts that have activated ProductionOpenAPI are supported. Default Alibaba Cloud account projects (pd_Alibaba Cloud account ID) are not supported.
     *
     * @param request - AddProjectMembersRequest
     *
     * @returns AddProjectMembersResponse
     *
     * @param AddProjectMembersRequest $request
     *
     * @return AddProjectMembersResponse
     */
    public function addProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectMembersWithOptions($request, $runtime);
    }

    /**
     * Retrieves the information of multiple media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - BatchGetMediasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetMediasResponse
     *
     * @param BatchGetMediasRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BatchGetMediasResponse
     */
    public function batchGetMediasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->returnDynamicMeta) {
            @$query['ReturnDynamicMeta'] = $request->returnDynamicMeta;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetMedias',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetMediasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information of multiple media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - BatchGetMediasRequest
     *
     * @returns BatchGetMediasResponse
     *
     * @param BatchGetMediasRequest $request
     *
     * @return BatchGetMediasResponse
     */
    public function batchGetMedias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediasWithOptions($request, $runtime);
    }

    /**
     * Queries multiple video character replacement jobs.
     *
     * @remarks
     * Queries the status and results of multiple video character replacement jobs. JobIds is a comma-separated string of job IDs. The response includes a JobList. The input parameters for each job are located in the AppInputConfig field. For the single query operation GetVideoCharacterReplaceJob, the corresponding field is AppParams. When the Status is Finished, you can retrieve the output media assets from the Result field.
     *
     * @param request - BatchGetVideoCharacterReplaceJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetVideoCharacterReplaceJobsResponse
     *
     * @param BatchGetVideoCharacterReplaceJobsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchGetVideoCharacterReplaceJobsResponse
     */
    public function batchGetVideoCharacterReplaceJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetVideoCharacterReplaceJobs',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetVideoCharacterReplaceJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries multiple video character replacement jobs.
     *
     * @remarks
     * Queries the status and results of multiple video character replacement jobs. JobIds is a comma-separated string of job IDs. The response includes a JobList. The input parameters for each job are located in the AppInputConfig field. For the single query operation GetVideoCharacterReplaceJob, the corresponding field is AppParams. When the Status is Finished, you can retrieve the output media assets from the Result field.
     *
     * @param request - BatchGetVideoCharacterReplaceJobsRequest
     *
     * @returns BatchGetVideoCharacterReplaceJobsResponse
     *
     * @param BatchGetVideoCharacterReplaceJobsRequest $request
     *
     * @return BatchGetVideoCharacterReplaceJobsResponse
     */
    public function batchGetVideoCharacterReplaceJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetVideoCharacterReplaceJobsWithOptions($request, $runtime);
    }

    /**
     * Cancels a generation task.
     *
     * @param request - CancelGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelGenerationJobResponse
     *
     * @param CancelGenerationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelGenerationJobResponse
     */
    public function cancelGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a generation task.
     *
     * @param request - CancelGenerationJobRequest
     *
     * @returns CancelGenerationJobResponse
     *
     * @param CancelGenerationJobRequest $request
     *
     * @return CancelGenerationJobResponse
     */
    public function cancelGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Creates a media asset category.
     *
     * @remarks
     * Categories support up to three levels of hierarchy, and each level supports up to 100 subcategories.
     *
     * @param request - CreateAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAssetCategoryResponse
     *
     * @param CreateAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAssetCategoryResponse
     */
    public function createAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryName) {
            @$query['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a media asset category.
     *
     * @remarks
     * Categories support up to three levels of hierarchy, and each level supports up to 100 subcategories.
     *
     * @param request - CreateAssetCategoryRequest
     *
     * @returns CreateAssetCategoryResponse
     *
     * @param CreateAssetCategoryRequest $request
     *
     * @return CreateAssetCategoryResponse
     */
    public function createAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Creates an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - CreateInfiniteCanvasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInfiniteCanvasResponse
     *
     * @param CreateInfiniteCanvasRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateInfiniteCanvasResponse
     */
    public function createInfiniteCanvasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverUrl) {
            @$query['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->productionId) {
            @$query['ProductionId'] = $request->productionId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInfiniteCanvas',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInfiniteCanvasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - CreateInfiniteCanvasRequest
     *
     * @returns CreateInfiniteCanvasResponse
     *
     * @param CreateInfiniteCanvasRequest $request
     *
     * @return CreateInfiniteCanvasResponse
     */
    public function createInfiniteCanvas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInfiniteCanvasWithOptions($request, $runtime);
    }

    /**
     * Generates OSS upload credentials for client-side direct upload without registering media assets or creating media asset records.
     *
     * @remarks
     * ## Request description
     * - This API operation generates a temporary OSS upload credential so that the client can directly upload files to a specified OSS bucket.
     * - The `FileExt` parameter is required and specifies the file name extension of the file to be uploaded, such as mp4 or wav. Do not include the dot.
     * - The `FileType` parameter is optional. The default value is `Media`. This parameter affects the path segment in the returned `ObjectKey`.
     *
     * @param request - CreateOssUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOssUploadResponse
     *
     * @param CreateOssUploadRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateOssUploadResponse
     */
    public function createOssUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->credentialType) {
            @$query['CredentialType'] = $request->credentialType;
        }

        if (null !== $request->fileExt) {
            @$query['FileExt'] = $request->fileExt;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->targetBucket) {
            @$query['TargetBucket'] = $request->targetBucket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOssUpload',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOssUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates OSS upload credentials for client-side direct upload without registering media assets or creating media asset records.
     *
     * @remarks
     * ## Request description
     * - This API operation generates a temporary OSS upload credential so that the client can directly upload files to a specified OSS bucket.
     * - The `FileExt` parameter is required and specifies the file name extension of the file to be uploaded, such as mp4 or wav. Do not include the dot.
     * - The `FileType` parameter is optional. The default value is `Media`. This parameter affects the path segment in the returned `ObjectKey`.
     *
     * @param request - CreateOssUploadRequest
     *
     * @returns CreateOssUploadResponse
     *
     * @param CreateOssUploadRequest $request
     *
     * @return CreateOssUploadResponse
     */
    public function createOssUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOssUploadWithOptions($request, $runtime);
    }

    /**
     * Creates a project.
     *
     * @remarks
     * Creates a project in a specified workspace and returns the project ID. If WorkspaceId is not specified, the default workspace of the current account is used. After the project is created, you can call GetProject to query the details or call ListProjects to list projects.
     *
     * @param request - CreateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a project.
     *
     * @remarks
     * Creates a project in a specified workspace and returns the project ID. If WorkspaceId is not specified, the default workspace of the current account is used. After the project is created, you can call GetProject to query the details or call ListProjects to list projects.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * Creates or overwrites a media asset for upload and obtains upload credentials.
     *
     * @remarks
     * ## Request description
     * - This operation supports two modes: creating a new media asset and overwriting an existing one.
     * - When creating a new media asset, the `FileInfo` and `MediaMetaData` parameters are required.
     * - When overwriting an existing media asset, you must set `Overwrite` to true and provide `MediaId`.
     * - You can specify the credential type by using `CredentialType`. The default value is STS_TOKEN.
     *
     * @param request - CreateUploadMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUploadMediaResponse
     *
     * @param CreateUploadMediaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credentialType) {
            @$query['CredentialType'] = $request->credentialType;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->fileInfo) {
            @$query['FileInfo'] = $request->fileInfo;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMetaData) {
            @$query['MediaMetaData'] = $request->mediaMetaData;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->storageLocation) {
            @$query['StorageLocation'] = $request->storageLocation;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUploadMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or overwrites a media asset for upload and obtains upload credentials.
     *
     * @remarks
     * ## Request description
     * - This operation supports two modes: creating a new media asset and overwriting an existing one.
     * - When creating a new media asset, the `FileInfo` and `MediaMetaData` parameters are required.
     * - When overwriting an existing media asset, you must set `Overwrite` to true and provide `MediaId`.
     * - You can specify the credential type by using `CredentialType`. The default value is STS_TOKEN.
     *
     * @param request - CreateUploadMediaRequest
     *
     * @returns CreateUploadMediaResponse
     *
     * @param CreateUploadMediaRequest $request
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadMediaWithOptions($request, $runtime);
    }

    /**
     * Creates a studio.
     *
     * @remarks
     * Creates a studio and triggers the automatic creation of a default project for the studio. Returns the WorkspaceId and the ProjectId of the default project. You can use the ProjectId directly without creating the default project again.
     *
     * @param request - CreateWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userCountLimit) {
            @$query['UserCountLimit'] = $request->userCountLimit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a studio.
     *
     * @remarks
     * Creates a studio and triggers the automatic creation of a default project for the studio. Returns the WorkspaceId and the ProjectId of the default project. You can use the ProjectId directly without creating the default project again.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkspaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes its subcategories, including level-2 and level-3 subcategories. Proceed with caution.
     *
     * @param request - DeleteAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAssetCategoryResponse
     *
     * @param DeleteAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAssetCategoryResponse
     */
    public function deleteAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes its subcategories, including level-2 and level-3 subcategories. Proceed with caution.
     *
     * @param request - DeleteAssetCategoryRequest
     *
     * @returns DeleteAssetCategoryResponse
     *
     * @param DeleteAssetCategoryRequest $request
     *
     * @return DeleteAssetCategoryResponse
     */
    public function deleteAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Deletes an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - DeleteInfiniteCanvasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInfiniteCanvasResponse
     *
     * @param DeleteInfiniteCanvasRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInfiniteCanvasResponse
     */
    public function deleteInfiniteCanvasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->canvasId) {
            @$query['CanvasId'] = $request->canvasId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInfiniteCanvas',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInfiniteCanvasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - DeleteInfiniteCanvasRequest
     *
     * @returns DeleteInfiniteCanvasResponse
     *
     * @param DeleteInfiniteCanvasRequest $request
     *
     * @return DeleteInfiniteCanvasResponse
     */
    public function deleteInfiniteCanvas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInfiniteCanvasWithOptions($request, $runtime);
    }

    /**
     * Deletes media asset information.
     *
     * @param request - DeleteMediasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediasResponse
     *
     * @param DeleteMediasRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMediasResponse
     */
    public function deleteMediasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->deletePhysicalFiles) {
            @$query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }

        if (null !== $request->inputURLs) {
            @$query['InputURLs'] = $request->inputURLs;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMedias',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes media asset information.
     *
     * @param request - DeleteMediasRequest
     *
     * @returns DeleteMediasResponse
     *
     * @param DeleteMediasRequest $request
     *
     * @return DeleteMediasResponse
     */
    public function deleteMedias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediasWithOptions($request, $runtime);
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * Deletes a project by ProjectId. The caller must have project management permissions.
     * Default projects cannot be deleted. If you attempt to delete a default project, DefaultProductionNotSupported is returned. This operation marks the project as deleted and does not physically delete all assets in the project.
     *
     * @param request - DeleteProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a project.
     *
     * @remarks
     * Deletes a project by ProjectId. The caller must have project management permissions.
     * Default projects cannot be deleted. If you attempt to delete a default project, DefaultProductionNotSupported is returned. This operation marks the project as deleted and does not physically delete all assets in the project.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * Retrieves the logon token for an enterprise account.
     *
     * @remarks
     * >Notice:  The AI generation-related API operations in the current 2026-03-19 API version will be retired soon. Upgrade to the 2026-07-07 API version.
     *
     * @param request - GenerateYikeLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateYikeLoginTokenResponse
     *
     * @param GenerateYikeLoginTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GenerateYikeLoginTokenResponse
     */
    public function generateYikeLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCreateProduction) {
            @$query['AutoCreateProduction'] = $request->autoCreateProduction;
        }

        if (null !== $request->expires) {
            @$query['Expires'] = $request->expires;
        }

        if (null !== $request->nickName) {
            @$query['NickName'] = $request->nickName;
        }

        if (null !== $request->productionAuth) {
            @$query['ProductionAuth'] = $request->productionAuth;
        }

        if (null !== $request->subUserCredit) {
            @$query['SubUserCredit'] = $request->subUserCredit;
        }

        if (null !== $request->tenant) {
            @$query['Tenant'] = $request->tenant;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateYikeLoginToken',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateYikeLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the logon token for an enterprise account.
     *
     * @remarks
     * >Notice:  The AI generation-related API operations in the current 2026-03-19 API version will be retired soon. Upgrade to the 2026-07-07 API version.
     *
     * @param request - GenerateYikeLoginTokenRequest
     *
     * @returns GenerateYikeLoginTokenResponse
     *
     * @param GenerateYikeLoginTokenRequest $request
     *
     * @return GenerateYikeLoginTokenResponse
     */
    public function generateYikeLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateYikeLoginTokenWithOptions($request, $runtime);
    }

    /**
     * Retrieves an intelligent workflow task.
     *
     * @param request - GetAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAIAppJobResponse
     *
     * @param GetAIAppJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAIAppJobResponse
     */
    public function getAIAppJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->onlyOutputs) {
            @$query['OnlyOutputs'] = $request->onlyOutputs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAIAppJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves an intelligent workflow task.
     *
     * @param request - GetAIAppJobRequest
     *
     * @returns GetAIAppJobResponse
     *
     * @param GetAIAppJobRequest $request
     *
     * @return GetAIAppJobResponse
     */
    public function getAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIAppJobWithOptions($request, $runtime);
    }

    /**
     * Queries an asynchronous task of the agent node.
     *
     * @param request - GetAgentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentJobResponse
     *
     * @param GetAgentJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAgentJobResponse
     */
    public function getAgentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an asynchronous task of the agent node.
     *
     * @param request - GetAgentJobRequest
     *
     * @returns GetAgentJobResponse
     *
     * @param GetAgentJobRequest $request
     *
     * @return GetAgentJobResponse
     */
    public function getAgentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentJobWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a specified category and a list of its subcategories.
     *
     * @param request - GetAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAssetCategoryResponse
     *
     * @param GetAssetCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAssetCategoryResponse
     */
    public function getAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a specified category and a list of its subcategories.
     *
     * @param request - GetAssetCategoryRequest
     *
     * @returns GetAssetCategoryResponse
     *
     * @param GetAssetCategoryRequest $request
     *
     * @return GetAssetCategoryResponse
     */
    public function getAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Queries an image generation task.
     *
     * @param request - GetImageGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageGenerationJobResponse
     *
     * @param GetImageGenerationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetImageGenerationJobResponse
     */
    public function getImageGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an image generation task.
     *
     * @param request - GetImageGenerationJobRequest
     *
     * @returns GetImageGenerationJobResponse
     *
     * @param GetImageGenerationJobRequest $request
     *
     * @return GetImageGenerationJobResponse
     */
    public function getImageGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Queries an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - GetInfiniteCanvasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInfiniteCanvasResponse
     *
     * @param GetInfiniteCanvasRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetInfiniteCanvasResponse
     */
    public function getInfiniteCanvasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->canvasId) {
            @$query['CanvasId'] = $request->canvasId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInfiniteCanvas',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInfiniteCanvasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - GetInfiniteCanvasRequest
     *
     * @returns GetInfiniteCanvasResponse
     *
     * @param GetInfiniteCanvasRequest $request
     *
     * @return GetInfiniteCanvasResponse
     */
    public function getInfiniteCanvas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInfiniteCanvasWithOptions($request, $runtime);
    }

    /**
     * Queries media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - GetMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaResponse
     *
     * @param GetMediaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetMediaResponse
     */
    public function getMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media asset content understanding jobs.
     *
     * @param request - GetMediaRequest
     *
     * @returns GetMediaResponse
     *
     * @param GetMediaRequest $request
     *
     * @return GetMediaResponse
     */
    public function getMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaWithOptions($request, $runtime);
    }

    /**
     * Queries media content comprehension jobs.
     *
     * @remarks
     * ## Request description
     * This operation queries media content comprehension jobs.
     *
     * @param request - GetMediaComprehensionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaComprehensionJobResponse
     *
     * @param GetMediaComprehensionJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMediaComprehensionJobResponse
     */
    public function getMediaComprehensionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMediaComprehensionJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaComprehensionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries media content comprehension jobs.
     *
     * @remarks
     * ## Request description
     * This operation queries media content comprehension jobs.
     *
     * @param request - GetMediaComprehensionJobRequest
     *
     * @returns GetMediaComprehensionJobResponse
     *
     * @param GetMediaComprehensionJobRequest $request
     *
     * @return GetMediaComprehensionJobResponse
     */
    public function getMediaComprehensionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaComprehensionJobWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a project.
     *
     * @remarks
     * Queries the basic information of a project and the permissions of the current caller on the project based on the ProjectId. The project information is contained in the Project object of the response and does not include the list of project assets.
     *
     * @param request - GetProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a project.
     *
     * @remarks
     * Queries the basic information of a project and the permissions of the current caller on the project based on the ProjectId. The project information is contained in the Project object of the response and does not include the list of project assets.
     *
     * @param request - GetProjectRequest
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * Queries a creative script generation task.
     *
     * @param request - GetRemakeScriptJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRemakeScriptJobResponse
     *
     * @param GetRemakeScriptJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRemakeScriptJobResponse
     */
    public function getRemakeScriptJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRemakeScriptJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRemakeScriptJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a creative script generation task.
     *
     * @param request - GetRemakeScriptJobRequest
     *
     * @returns GetRemakeScriptJobResponse
     *
     * @param GetRemakeScriptJobRequest $request
     *
     * @return GetRemakeScriptJobResponse
     */
    public function getRemakeScriptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemakeScriptJobWithOptions($request, $runtime);
    }

    /**
     * Queries a video character replacement task.
     *
     * @remarks
     * Queries the status and result of a single task by using the JobId returned by the submit operation. When the Status is Finished, you can read the output media assets in Result. Executing indicates that the task is still running.
     * This operation uses AppParams to return the task input parameters. The corresponding field name in the batch query operation is AppInputConfig. The output results are categorized into ImageResult, VideoResult, and AudioResult. Each category contains MediaId and OutputUrl.
     *
     * @param request - GetVideoCharacterReplaceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoCharacterReplaceJobResponse
     *
     * @param GetVideoCharacterReplaceJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetVideoCharacterReplaceJobResponse
     */
    public function getVideoCharacterReplaceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoCharacterReplaceJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoCharacterReplaceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a video character replacement task.
     *
     * @remarks
     * Queries the status and result of a single task by using the JobId returned by the submit operation. When the Status is Finished, you can read the output media assets in Result. Executing indicates that the task is still running.
     * This operation uses AppParams to return the task input parameters. The corresponding field name in the batch query operation is AppInputConfig. The output results are categorized into ImageResult, VideoResult, and AudioResult. Each category contains MediaId and OutputUrl.
     *
     * @param request - GetVideoCharacterReplaceJobRequest
     *
     * @returns GetVideoCharacterReplaceJobResponse
     *
     * @param GetVideoCharacterReplaceJobRequest $request
     *
     * @return GetVideoCharacterReplaceJobResponse
     */
    public function getVideoCharacterReplaceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoCharacterReplaceJobWithOptions($request, $runtime);
    }

    /**
     * Queries video creative generation jobs.
     *
     * @param request - GetVideoCreativeGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoCreativeGenerationJobResponse
     *
     * @param GetVideoCreativeGenerationJobRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetVideoCreativeGenerationJobResponse
     */
    public function getVideoCreativeGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoCreativeGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoCreativeGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries video creative generation jobs.
     *
     * @param request - GetVideoCreativeGenerationJobRequest
     *
     * @returns GetVideoCreativeGenerationJobResponse
     *
     * @param GetVideoCreativeGenerationJobRequest $request
     *
     * @return GetVideoCreativeGenerationJobResponse
     */
    public function getVideoCreativeGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoCreativeGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Queries the status, input parameters, and video results of a video text removal job.
     *
     * @remarks
     * Queries the status, input, parameters, and final results of a video text removal job based on the `JobId`.
     *
     * @param request - GetVideoDetextJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoDetextJobResponse
     *
     * @param GetVideoDetextJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetVideoDetextJobResponse
     */
    public function getVideoDetextJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVideoDetextJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoDetextJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status, input parameters, and video results of a video text removal job.
     *
     * @remarks
     * Queries the status, input, parameters, and final results of a video text removal job based on the `JobId`.
     *
     * @param request - GetVideoDetextJobRequest
     *
     * @returns GetVideoDetextJobResponse
     *
     * @param GetVideoDetextJobRequest $request
     *
     * @return GetVideoDetextJobResponse
     */
    public function getVideoDetextJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoDetextJobWithOptions($request, $runtime);
    }

    /**
     * Queries a video generation task.
     *
     * @param request - GetVideoGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoGenerationJobResponse
     *
     * @param GetVideoGenerationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVideoGenerationJobResponse
     */
    public function getVideoGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a video generation task.
     *
     * @param request - GetVideoGenerationJobRequest
     *
     * @returns GetVideoGenerationJobResponse
     *
     * @param GetVideoGenerationJobRequest $request
     *
     * @return GetVideoGenerationJobResponse
     */
    public function getVideoGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Queries a content understanding and creative script generation task.
     *
     * @remarks
     * Queries the task status based on the JobId returned by SubmitVideoRemakeJob. Upon completion, returns the download URLs of the JSON files for the video content understanding results and the creative script. If the task fails, returns ErrorCode and ErrorMessage.
     *
     * @param request - GetVideoRemakeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoRemakeJobResponse
     *
     * @param GetVideoRemakeJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetVideoRemakeJobResponse
     */
    public function getVideoRemakeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoRemakeJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoRemakeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a content understanding and creative script generation task.
     *
     * @remarks
     * Queries the task status based on the JobId returned by SubmitVideoRemakeJob. Upon completion, returns the download URLs of the JSON files for the video content understanding results and the creative script. If the task fails, returns ErrorCode and ErrorMessage.
     *
     * @param request - GetVideoRemakeJobRequest
     *
     * @returns GetVideoRemakeJobResponse
     *
     * @param GetVideoRemakeJobRequest $request
     *
     * @return GetVideoRemakeJobResponse
     */
    public function getVideoRemakeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoRemakeJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video rendering and compositing job.
     *
     * @param request - GetVideoRenderJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoRenderJobResponse
     *
     * @param GetVideoRenderJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetVideoRenderJobResponse
     */
    public function getVideoRenderJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoRenderJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoRenderJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video rendering and compositing job.
     *
     * @param request - GetVideoRenderJobRequest
     *
     * @returns GetVideoRenderJobResponse
     *
     * @param GetVideoRenderJobRequest $request
     *
     * @return GetVideoRenderJobResponse
     */
    public function getVideoRenderJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoRenderJobWithOptions($request, $runtime);
    }

    /**
     * Queries the status, input parameters, and multilingual outputs of a video translation job.
     *
     * @remarks
     * Queries the status, input, parameters, and final results of a video translation job based on JobId.
     *
     * @param request - GetVideoTranslationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoTranslationJobResponse
     *
     * @param GetVideoTranslationJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetVideoTranslationJobResponse
     */
    public function getVideoTranslationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVideoTranslationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status, input parameters, and multilingual outputs of a video translation job.
     *
     * @remarks
     * Queries the status, input, parameters, and final results of a video translation job based on JobId.
     *
     * @param request - GetVideoTranslationJobRequest
     *
     * @returns GetVideoTranslationJobResponse
     *
     * @param GetVideoTranslationJobRequest $request
     *
     * @return GetVideoTranslationJobResponse
     */
    public function getVideoTranslationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoTranslationJobWithOptions($request, $runtime);
    }

    /**
     * Retrieves the membership plan and credit information of the Yike main account.
     *
     * @param request - GetYikeAccountCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeAccountCreditResponse
     *
     * @param GetYikeAccountCreditRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetYikeAccountCreditResponse
     */
    public function getYikeAccountCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetYikeAccountCredit',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeAccountCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the membership plan and credit information of the Yike main account.
     *
     * @param request - GetYikeAccountCreditRequest
     *
     * @returns GetYikeAccountCreditResponse
     *
     * @param GetYikeAccountCreditRequest $request
     *
     * @return GetYikeAccountCreditResponse
     */
    public function getYikeAccountCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeAccountCreditWithOptions($request, $runtime);
    }

    /**
     * Queries the actual credits consumed by a task.
     *
     * @param request - GetYikeJobCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeJobCreditResponse
     *
     * @param GetYikeJobCreditRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetYikeJobCreditResponse
     */
    public function getYikeJobCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetYikeJobCredit',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeJobCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the actual credits consumed by a task.
     *
     * @param request - GetYikeJobCreditRequest
     *
     * @returns GetYikeJobCreditResponse
     *
     * @param GetYikeJobCreditRequest $request
     *
     * @return GetYikeJobCreditResponse
     */
    public function getYikeJobCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeJobCreditWithOptions($request, $runtime);
    }

    /**
     * Imports media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media content understanding jobs.
     *
     * @param request - ImportMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportMediaResponse
     *
     * @param ImportMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImportMediaResponse
     */
    public function importMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dynamicMetaData) {
            @$query['DynamicMetaData'] = $request->dynamicMetaData;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->importSource) {
            @$query['ImportSource'] = $request->importSource;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaTags) {
            @$query['MediaTags'] = $request->mediaTags;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->registerConfig) {
            @$query['RegisterConfig'] = $request->registerConfig;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->yikeAssetConfig) {
            @$query['YikeAssetConfig'] = $request->yikeAssetConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports media assets.
     *
     * @remarks
     * ## Request description
     * This API operation queries media content understanding jobs.
     *
     * @param request - ImportMediaRequest
     *
     * @returns ImportMediaResponse
     *
     * @param ImportMediaRequest $request
     *
     * @return ImportMediaResponse
     */
    public function importMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importMediaWithOptions($request, $runtime);
    }

    /**
     * Retrieves a paginated list of categories.
     *
     * @param request - ListAssetCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssetCategoriesResponse
     *
     * @param ListAssetCategoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAssetCategoriesResponse
     */
    public function listAssetCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAssetCategories',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAssetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of categories.
     *
     * @param request - ListAssetCategoriesRequest
     *
     * @returns ListAssetCategoriesResponse
     *
     * @param ListAssetCategoriesRequest $request
     *
     * @return ListAssetCategoriesResponse
     */
    public function listAssetCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssetCategoriesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of infinite canvases.
     *
     * @remarks
     * ## Request description
     * This operation queries media asset content understanding jobs.
     *
     * @param request - ListInfiniteCanvasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInfiniteCanvasesResponse
     *
     * @param ListInfiniteCanvasesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInfiniteCanvasesResponse
     */
    public function listInfiniteCanvasesWithOptions($request, $runtime)
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

        if (null !== $request->productionId) {
            @$query['ProductionId'] = $request->productionId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInfiniteCanvases',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInfiniteCanvasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of infinite canvases.
     *
     * @remarks
     * ## Request description
     * This operation queries media asset content understanding jobs.
     *
     * @param request - ListInfiniteCanvasesRequest
     *
     * @returns ListInfiniteCanvasesResponse
     *
     * @param ListInfiniteCanvasesRequest $request
     *
     * @return ListInfiniteCanvasesResponse
     */
    public function listInfiniteCanvases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInfiniteCanvasesWithOptions($request, $runtime);
    }

    /**
     * Queries a paginated list of media folders in a specified project.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves all media folders in a specified project (`ProductionId`). Pagination is supported by using the `PageNo` and `PageSize` parameters.
     * - If `ProductionId` is not provided, the default project of the current account is used.
     *
     * @param request - ListMediaFoldersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMediaFoldersResponse
     *
     * @param ListMediaFoldersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMediaFoldersResponse
     */
    public function listMediaFoldersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productionId) {
            @$query['ProductionId'] = $request->productionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMediaFolders',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMediaFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a paginated list of media folders in a specified project.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves all media folders in a specified project (`ProductionId`). Pagination is supported by using the `PageNo` and `PageSize` parameters.
     * - If `ProductionId` is not provided, the default project of the current account is used.
     *
     * @param request - ListMediaFoldersRequest
     *
     * @returns ListMediaFoldersResponse
     *
     * @param ListMediaFoldersRequest $request
     *
     * @return ListMediaFoldersResponse
     */
    public function listMediaFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaFoldersWithOptions($request, $runtime);
    }

    /**
     * Queries the list of projects.
     *
     * @remarks
     * Queries the list of projects accessible to the current caller. You can use WorkspaceId to filter projects by workspace. For pagination, specify both PageNo and PageSize as positive integers starting from 1. If valid values are not provided for both parameters, the query defaults to page 1 with 10 entries per page. The response includes ProjectList but does not include TotalCount. MaxResults and NextToken are retained for backward compatibility and are not used for pagination.
     *
     * @param request - ListProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
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
            'action' => 'ListProjects',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of projects.
     *
     * @remarks
     * Queries the list of projects accessible to the current caller. You can use WorkspaceId to filter projects by workspace. For pagination, specify both PageNo and PageSize as positive integers starting from 1. If valid values are not provided for both parameters, the query defaults to page 1 with 10 entries per page. The response includes ProjectList but does not include TotalCount. MaxResults and NextToken are retained for backward compatibility and are not used for pagination.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of workspaces.
     *
     * @remarks
     * Queries the list of workspaces accessible to the current caller. You can use PageNo and PageSize to paginate the results. The default page number is 1, and the default page size is 10. The response includes WorkspaceList and TotalCount. The ID of the default project for a workspace is returned in the DefaultProjectId field.
     *
     * @param request - ListWorkspacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of workspaces.
     *
     * @remarks
     * Queries the list of workspaces accessible to the current caller. You can use PageNo and PageSize to paginate the results. The default page number is 1, and the default page size is 10. The response includes WorkspaceList and TotalCount. The ID of the default project for a workspace is returned in the DefaultProjectId field.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkspacesWithOptions($request, $runtime);
    }

    /**
     * Pre-validates a video character replacement task.
     *
     * @remarks
     * Before submitting a task, validates the input materials for a specified application. AppParams is a JSON-serialized string. The field names must match the input definition of the application corresponding to the AppId. Image, audio, and video materials must match the input types and be accessible.
     * If Status is Success, the validation passes and Result is an empty array. If Status is Failed, Result returns the failed parameter keys and error codes for each item. This operation does not create a task. After the validation passes, call SubmitVideoCharacterReplaceJob to submit the task.
     *
     * @param request - PrecheckVideoCharacterReplaceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrecheckVideoCharacterReplaceJobResponse
     *
     * @param PrecheckVideoCharacterReplaceJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PrecheckVideoCharacterReplaceJobResponse
     */
    public function precheckVideoCharacterReplaceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appParams) {
            @$query['AppParams'] = $request->appParams;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PrecheckVideoCharacterReplaceJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrecheckVideoCharacterReplaceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pre-validates a video character replacement task.
     *
     * @remarks
     * Before submitting a task, validates the input materials for a specified application. AppParams is a JSON-serialized string. The field names must match the input definition of the application corresponding to the AppId. Image, audio, and video materials must match the input types and be accessible.
     * If Status is Success, the validation passes and Result is an empty array. If Status is Failed, Result returns the failed parameter keys and error codes for each item. This operation does not create a task. After the validation passes, call SubmitVideoCharacterReplaceJob to submit the task.
     *
     * @param request - PrecheckVideoCharacterReplaceJobRequest
     *
     * @returns PrecheckVideoCharacterReplaceJobResponse
     *
     * @param PrecheckVideoCharacterReplaceJobRequest $request
     *
     * @return PrecheckVideoCharacterReplaceJobResponse
     */
    public function precheckVideoCharacterReplaceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->precheckVideoCharacterReplaceJobWithOptions($request, $runtime);
    }

    /**
     * Retrieves media asset information that matches the specified parameters.
     *
     * @param request - SearchMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMediaResponse
     *
     * @param SearchMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->match) {
            @$query['Match'] = $request->match;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->scrollToken) {
            @$query['ScrollToken'] = $request->scrollToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves media asset information that matches the specified parameters.
     *
     * @param request - SearchMediaRequest
     *
     * @returns SearchMediaResponse
     *
     * @param SearchMediaRequest $request
     *
     * @return SearchMediaResponse
     */
    public function searchMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * Starts an intelligent workflow.
     *
     * @param request - SubmitAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAIAppJobResponse
     *
     * @param SubmitAIAppJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitAIAppJobResponse
     */
    public function submitAIAppJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->inputs) {
            @$body['Inputs'] = $request->inputs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitAIAppJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an intelligent workflow.
     *
     * @param request - SubmitAIAppJobRequest
     *
     * @returns SubmitAIAppJobResponse
     *
     * @param SubmitAIAppJobRequest $request
     *
     * @return SubmitAIAppJobResponse
     */
    public function submitAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIAppJobWithOptions($request, $runtime);
    }

    /**
     * Submits an asynchronous task for an agent node.
     *
     * @param request - SubmitAgentJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAgentJobResponse
     *
     * @param SubmitAgentJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitAgentJobResponse
     */
    public function submitAgentJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->skill) {
            @$query['Skill'] = $request->skill;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAgentJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAgentJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an asynchronous task for an agent node.
     *
     * @param request - SubmitAgentJobRequest
     *
     * @returns SubmitAgentJobResponse
     *
     * @param SubmitAgentJobRequest $request
     *
     * @return SubmitAgentJobResponse
     */
    public function submitAgentJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAgentJobWithOptions($request, $runtime);
    }

    /**
     * Submits an image generation task.
     *
     * @param request - SubmitImageGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImageGenerationJobResponse
     *
     * @param SubmitImageGenerationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitImageGenerationJobResponse
     */
    public function submitImageGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$query['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->n) {
            @$query['N'] = $request->n;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitImageGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitImageGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an image generation task.
     *
     * @param request - SubmitImageGenerationJobRequest
     *
     * @returns SubmitImageGenerationJobResponse
     *
     * @param SubmitImageGenerationJobRequest $request
     *
     * @return SubmitImageGenerationJobResponse
     */
    public function submitImageGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImageGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Submits a media content understanding job.
     *
     * @remarks
     * ## Request description
     * This API operation performs content understanding based on provided media files, such as video URLs. Additionally, you can pass custom parameters through the `UserData` field, which are returned as-is in the callback.
     *
     * @param request - SubmitMediaComprehensionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMediaComprehensionJobResponse
     *
     * @param SubmitMediaComprehensionJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitMediaComprehensionJobResponse
     */
    public function submitMediaComprehensionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMediaComprehensionJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMediaComprehensionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a media content understanding job.
     *
     * @remarks
     * ## Request description
     * This API operation performs content understanding based on provided media files, such as video URLs. Additionally, you can pass custom parameters through the `UserData` field, which are returned as-is in the callback.
     *
     * @param request - SubmitMediaComprehensionJobRequest
     *
     * @returns SubmitMediaComprehensionJobResponse
     *
     * @param SubmitMediaComprehensionJobRequest $request
     *
     * @return SubmitMediaComprehensionJobResponse
     */
    public function submitMediaComprehensionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaComprehensionJobWithOptions($request, $runtime);
    }

    /**
     * Submits a creative script generation task.
     *
     * @remarks
     * This API generates a new voiceover script based on content understanding results and new product or avatar information. It also supports passing custom parameters through the UserData field, which are returned as-is in the callback.
     *
     * @param request - SubmitRemakeScriptJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitRemakeScriptJobResponse
     *
     * @param SubmitRemakeScriptJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitRemakeScriptJobResponse
     */
    public function submitRemakeScriptJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->remakeParams) {
            @$query['RemakeParams'] = $request->remakeParams;
        }

        if (null !== $request->remakeType) {
            @$query['RemakeType'] = $request->remakeType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitRemakeScriptJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitRemakeScriptJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a creative script generation task.
     *
     * @remarks
     * This API generates a new voiceover script based on content understanding results and new product or avatar information. It also supports passing custom parameters through the UserData field, which are returned as-is in the callback.
     *
     * @param request - SubmitRemakeScriptJobRequest
     *
     * @returns SubmitRemakeScriptJobResponse
     *
     * @param SubmitRemakeScriptJobRequest $request
     *
     * @return SubmitRemakeScriptJobResponse
     */
    public function submitRemakeScriptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitRemakeScriptJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video character replacement job.
     *
     * @remarks
     * Performs an asynchronous commit for a video character replacement node. First, call PrecheckVideoCharacterReplaceJob with the same AppId and AppParams to check the input materials.
     * A returned JobId only indicates that the node has been submitted, not that it has been completed. Use GetVideoCharacterReplaceJob or BatchGetVideoCharacterReplaceJobs to query the status and output results. ProjectId is used to specify a project, and FolderId is used to specify a file folder.
     *
     * @param request - SubmitVideoCharacterReplaceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoCharacterReplaceJobResponse
     *
     * @param SubmitVideoCharacterReplaceJobRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitVideoCharacterReplaceJobResponse
     */
    public function submitVideoCharacterReplaceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appParams) {
            @$body['AppParams'] = $request->appParams;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        if (null !== $request->projectId) {
            @$body['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoCharacterReplaceJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoCharacterReplaceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video character replacement job.
     *
     * @remarks
     * Performs an asynchronous commit for a video character replacement node. First, call PrecheckVideoCharacterReplaceJob with the same AppId and AppParams to check the input materials.
     * A returned JobId only indicates that the node has been submitted, not that it has been completed. Use GetVideoCharacterReplaceJob or BatchGetVideoCharacterReplaceJobs to query the status and output results. ProjectId is used to specify a project, and FolderId is used to specify a file folder.
     *
     * @param request - SubmitVideoCharacterReplaceJobRequest
     *
     * @returns SubmitVideoCharacterReplaceJobResponse
     *
     * @param SubmitVideoCharacterReplaceJobRequest $request
     *
     * @return SubmitVideoCharacterReplaceJobResponse
     */
    public function submitVideoCharacterReplaceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoCharacterReplaceJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video creative generation job.
     *
     * @param request - SubmitVideoCreativeGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoCreativeGenerationJobResponse
     *
     * @param SubmitVideoCreativeGenerationJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitVideoCreativeGenerationJobResponse
     */
    public function submitVideoCreativeGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->avatarData) {
            @$query['AvatarData'] = $request->avatarData;
        }

        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
        }

        if (null !== $request->outputLanguages) {
            @$query['OutputLanguages'] = $request->outputLanguages;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->userMaterials) {
            @$query['UserMaterials'] = $request->userMaterials;
        }

        if (null !== $request->withSubtitles) {
            @$query['WithSubtitles'] = $request->withSubtitles;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoCreativeGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoCreativeGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video creative generation job.
     *
     * @param request - SubmitVideoCreativeGenerationJobRequest
     *
     * @returns SubmitVideoCreativeGenerationJobResponse
     *
     * @param SubmitVideoCreativeGenerationJobRequest $request
     *
     * @return SubmitVideoCreativeGenerationJobResponse
     */
    public function submitVideoCreativeGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoCreativeGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Submits an asynchronous video text erasure task that supports full-area erasure, time ranges, and specified regions.
     *
     * @remarks
     * Submits an asynchronous video text erasure task. The input can be an accessible video URL or a Yike video media asset ID. You can configure the erasure time range and text region.
     *
     * @param request - SubmitVideoDetextJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoDetextJobResponse
     *
     * @param SubmitVideoDetextJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitVideoDetextJobResponse
     */
    public function submitVideoDetextJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$body['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->output) {
            @$body['Output'] = $request->output;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoDetextJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoDetextJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an asynchronous video text erasure task that supports full-area erasure, time ranges, and specified regions.
     *
     * @remarks
     * Submits an asynchronous video text erasure task. The input can be an accessible video URL or a Yike video media asset ID. You can configure the erasure time range and text region.
     *
     * @param request - SubmitVideoDetextJobRequest
     *
     * @returns SubmitVideoDetextJobResponse
     *
     * @param SubmitVideoDetextJobRequest $request
     *
     * @return SubmitVideoDetextJobResponse
     */
    public function submitVideoDetextJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoDetextJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video generation task.
     *
     * @param request - SubmitVideoGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoGenerationJobResponse
     *
     * @param SubmitVideoGenerationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitVideoGenerationJobResponse
     */
    public function submitVideoGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$query['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->n) {
            @$query['N'] = $request->n;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video generation task.
     *
     * @param request - SubmitVideoGenerationJobRequest
     *
     * @returns SubmitVideoGenerationJobResponse
     *
     * @param SubmitVideoGenerationJobRequest $request
     *
     * @return SubmitVideoGenerationJobResponse
     */
    public function submitVideoGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoGenerationJobWithOptions($request, $runtime);
    }

    /**
     * Submits a content understanding and creative script generation task.
     *
     * @remarks
     * Submits the original video and remake information such as new products and characters to asynchronously complete video content understanding and creative script generation. Uses the returned JobId to call GetVideoRemakeJob to query the progress and outputs. Video rendering requires a separate call to SubmitVideoRenderJob.
     *
     * @param request - SubmitVideoRemakeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoRemakeJobResponse
     *
     * @param SubmitVideoRemakeJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitVideoRemakeJobResponse
     */
    public function submitVideoRemakeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->remakeParams) {
            @$query['RemakeParams'] = $request->remakeParams;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoRemakeJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoRemakeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a content understanding and creative script generation task.
     *
     * @remarks
     * Submits the original video and remake information such as new products and characters to asynchronously complete video content understanding and creative script generation. Uses the returned JobId to call GetVideoRemakeJob to query the progress and outputs. Video rendering requires a separate call to SubmitVideoRenderJob.
     *
     * @param request - SubmitVideoRemakeJobRequest
     *
     * @returns SubmitVideoRemakeJobResponse
     *
     * @param SubmitVideoRemakeJobRequest $request
     *
     * @return SubmitVideoRemakeJobResponse
     */
    public function submitVideoRemakeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoRemakeJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video rendering and compositing task.
     *
     * @param request - SubmitVideoRenderJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoRenderJobResponse
     *
     * @param SubmitVideoRenderJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitVideoRenderJobResponse
     */
    public function submitVideoRenderJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->script) {
            @$query['Script'] = $request->script;
        }

        if (null !== $request->settings) {
            @$query['Settings'] = $request->settings;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoRenderJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoRenderJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video rendering and compositing task.
     *
     * @param request - SubmitVideoRenderJobRequest
     *
     * @returns SubmitVideoRenderJobResponse
     *
     * @param SubmitVideoRenderJobRequest $request
     *
     * @return SubmitVideoRenderJobResponse
     */
    public function submitVideoRenderJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoRenderJobWithOptions($request, $runtime);
    }

    /**
     * Submits an asynchronous video translation task that supports subtitle translation, voice translation, primary subtitle removal, and on-screen text translation.
     *
     * @remarks
     * Submits an asynchronous video translation task. The input supports a media URL or a Yike media asset ID. The task parameters are used to select the source language, target language, and the translation capabilities to be enabled.
     *
     * @param request - SubmitVideoTranslationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoTranslationJobResponse
     *
     * @param SubmitVideoTranslationJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$body['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->output) {
            @$body['Output'] = $request->output;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoTranslationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an asynchronous video translation task that supports subtitle translation, voice translation, primary subtitle removal, and on-screen text translation.
     *
     * @remarks
     * Submits an asynchronous video translation task. The input supports a media URL or a Yike media asset ID. The task parameters are used to select the source language, target language, and the translation capabilities to be enabled.
     *
     * @param request - SubmitVideoTranslationJobRequest
     *
     * @returns SubmitVideoTranslationJobResponse
     *
     * @param SubmitVideoTranslationJobRequest $request
     *
     * @return SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoTranslationJobWithOptions($request, $runtime);
    }

    /**
     * Updates a media asset category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to update the name of the category by specifying its ID.
     *
     * @param request - UpdateAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAssetCategoryResponse
     *
     * @param UpdateAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAssetCategoryResponse
     */
    public function updateAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryName) {
            @$query['CategoryName'] = $request->categoryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a media asset category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to update the name of the category by specifying its ID.
     *
     * @param request - UpdateAssetCategoryRequest
     *
     * @returns UpdateAssetCategoryResponse
     *
     * @param UpdateAssetCategoryRequest $request
     *
     * @return UpdateAssetCategoryResponse
     */
    public function updateAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Updates the information of an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - UpdateInfiniteCanvasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInfiniteCanvasResponse
     *
     * @param UpdateInfiniteCanvasRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateInfiniteCanvasResponse
     */
    public function updateInfiniteCanvasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->canvasId) {
            @$query['CanvasId'] = $request->canvasId;
        }

        if (null !== $request->coverUrl) {
            @$query['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInfiniteCanvas',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInfiniteCanvasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information of an infinite canvas.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - UpdateInfiniteCanvasRequest
     *
     * @returns UpdateInfiniteCanvasResponse
     *
     * @param UpdateInfiniteCanvasRequest $request
     *
     * @return UpdateInfiniteCanvasResponse
     */
    public function updateInfiniteCanvas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInfiniteCanvasWithOptions($request, $runtime);
    }

    /**
     * Updates media asset information.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - UpdateMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaResponse
     *
     * @param UpdateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMediaResponse
     */
    public function updateMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appendTags) {
            @$query['AppendTags'] = $request->appendTags;
        }

        if (null !== $request->bizConfig) {
            @$query['BizConfig'] = $request->bizConfig;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dynamicMetaData) {
            @$query['DynamicMetaData'] = $request->dynamicMetaData;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaTags) {
            @$query['MediaTags'] = $request->mediaTags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates media asset information.
     *
     * @remarks
     * ## Request description
     * This API queries media asset content understanding jobs.
     *
     * @param request - UpdateMediaRequest
     *
     * @returns UpdateMediaResponse
     *
     * @param UpdateMediaRequest $request
     *
     * @return UpdateMediaResponse
     */
    public function updateMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWithOptions($request, $runtime);
    }

    /**
     * Updates the name of a project.
     *
     * @remarks
     * Updates the name of a project based on the ProjectId and uses Title to specify the new name. This operation only supports modifying the name and does not support modifying the description or cover image. The caller must have edit permissions for the project.
     *
     * @param request - UpdateProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the name of a project.
     *
     * @remarks
     * Updates the name of a project based on the ProjectId and uses Title to specify the new name. This operation only supports modifying the name and does not support modifying the description or cover image. The caller must have edit permissions for the project.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }
}
