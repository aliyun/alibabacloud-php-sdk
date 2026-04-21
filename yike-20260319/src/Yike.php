<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yike\V20260319\Models\AddYikeUserCreditRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\AddYikeUserCreditResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAssetMediaInfosRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAssetMediaInfosResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeAssetUploadRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeAssetUploadResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeProductionRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeProductionResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeUserRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeUserResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeWorkspaceRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeWorkspaceResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\DeleteYikeAssetMediaInfosRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\DeleteYikeAssetMediaInfosResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAssetMediaInfoRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAssetMediaInfoResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeStoryboardJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeStoryboardJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeUserCreditRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeUserCreditResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeUserRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeUserResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\ListYikeAssetFoldersRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\ListYikeAssetFoldersResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\ListYikeProductionsRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\ListYikeProductionsResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\PrecheckYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\PrecheckYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\RegisterYikeAssetMediaInfoRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\RegisterYikeAssetMediaInfoResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\ResumeYikeStoryboardJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\ResumeYikeStoryboardJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SetYikeUserRoleRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SetYikeUserRoleResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeStoryboardJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeStoryboardJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubYikeUserCreditRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubYikeUserCreditResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yike extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * 增加用户积分.
     *
     * @param request - AddYikeUserCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddYikeUserCreditResponse
     *
     * @param AddYikeUserCreditRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddYikeUserCreditResponse
     */
    public function addYikeUserCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credit) {
            @$query['Credit'] = $request->credit;
        }

        if (null !== $request->yikeUserId) {
            @$query['YikeUserId'] = $request->yikeUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddYikeUserCredit',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddYikeUserCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增加用户积分.
     *
     * @param request - AddYikeUserCreditRequest
     *
     * @returns AddYikeUserCreditResponse
     *
     * @param AddYikeUserCreditRequest $request
     *
     * @return AddYikeUserCreditResponse
     */
    public function addYikeUserCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addYikeUserCreditWithOptions($request, $runtime);
    }

    /**
     * 批量获取一刻AI应用生成任务
     *
     * @param request - BatchGetYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetYikeAIAppJobResponse
     *
     * @param BatchGetYikeAIAppJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchGetYikeAIAppJobResponse
     */
    public function batchGetYikeAIAppJobWithOptions($request, $runtime)
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
            'action' => 'BatchGetYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量获取一刻AI应用生成任务
     *
     * @param request - BatchGetYikeAIAppJobRequest
     *
     * @returns BatchGetYikeAIAppJobResponse
     *
     * @param BatchGetYikeAIAppJobRequest $request
     *
     * @return BatchGetYikeAIAppJobResponse
     */
    public function batchGetYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 批量获取媒资信息.
     *
     * @param request - BatchGetYikeAssetMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetYikeAssetMediaInfosResponse
     *
     * @param BatchGetYikeAssetMediaInfosRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchGetYikeAssetMediaInfosResponse
     */
    public function batchGetYikeAssetMediaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetYikeAssetMediaInfos',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetYikeAssetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量获取媒资信息.
     *
     * @param request - BatchGetYikeAssetMediaInfosRequest
     *
     * @returns BatchGetYikeAssetMediaInfosResponse
     *
     * @param BatchGetYikeAssetMediaInfosRequest $request
     *
     * @return BatchGetYikeAssetMediaInfosResponse
     */
    public function batchGetYikeAssetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetYikeAssetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * 获取一刻媒资上传凭证
     *
     * @param request - CreateYikeAssetUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateYikeAssetUploadResponse
     *
     * @param CreateYikeAssetUploadRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateYikeAssetUploadResponse
     */
    public function createYikeAssetUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileExt) {
            @$query['FileExt'] = $request->fileExt;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateYikeAssetUpload',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateYikeAssetUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻媒资上传凭证
     *
     * @param request - CreateYikeAssetUploadRequest
     *
     * @returns CreateYikeAssetUploadResponse
     *
     * @param CreateYikeAssetUploadRequest $request
     *
     * @return CreateYikeAssetUploadResponse
     */
    public function createYikeAssetUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYikeAssetUploadWithOptions($request, $runtime);
    }

    /**
     * 创建一刻项目.
     *
     * @param request - CreateYikeProductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateYikeProductionResponse
     *
     * @param CreateYikeProductionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateYikeProductionResponse
     */
    public function createYikeProductionWithOptions($request, $runtime)
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
            'action' => 'CreateYikeProduction',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateYikeProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一刻项目.
     *
     * @param request - CreateYikeProductionRequest
     *
     * @returns CreateYikeProductionResponse
     *
     * @param CreateYikeProductionRequest $request
     *
     * @return CreateYikeProductionResponse
     */
    public function createYikeProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYikeProductionWithOptions($request, $runtime);
    }

    /**
     * 创建一刻子用户.
     *
     * @param request - CreateYikeUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateYikeUserResponse
     *
     * @param CreateYikeUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateYikeUserResponse
     */
    public function createYikeUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nickname) {
            @$query['Nickname'] = $request->nickname;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->productionIds) {
            @$query['ProductionIds'] = $request->productionIds;
        }

        if (null !== $request->userNamePrefix) {
            @$query['UserNamePrefix'] = $request->userNamePrefix;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateYikeUser',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateYikeUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一刻子用户.
     *
     * @param request - CreateYikeUserRequest
     *
     * @returns CreateYikeUserResponse
     *
     * @param CreateYikeUserRequest $request
     *
     * @return CreateYikeUserResponse
     */
    public function createYikeUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYikeUserWithOptions($request, $runtime);
    }

    /**
     * 创建工作室.
     *
     * @param request - CreateYikeWorkspaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateYikeWorkspaceResponse
     *
     * @param CreateYikeWorkspaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateYikeWorkspaceResponse
     */
    public function createYikeWorkspaceWithOptions($request, $runtime)
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
            'action' => 'CreateYikeWorkspace',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateYikeWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作室.
     *
     * @param request - CreateYikeWorkspaceRequest
     *
     * @returns CreateYikeWorkspaceResponse
     *
     * @param CreateYikeWorkspaceRequest $request
     *
     * @return CreateYikeWorkspaceResponse
     */
    public function createYikeWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYikeWorkspaceWithOptions($request, $runtime);
    }

    /**
     * 删除媒资信息.
     *
     * @param request - DeleteYikeAssetMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteYikeAssetMediaInfosResponse
     *
     * @param DeleteYikeAssetMediaInfosRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteYikeAssetMediaInfosResponse
     */
    public function deleteYikeAssetMediaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logicDelete) {
            @$query['LogicDelete'] = $request->logicDelete;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteYikeAssetMediaInfos',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteYikeAssetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除媒资信息.
     *
     * @param request - DeleteYikeAssetMediaInfosRequest
     *
     * @returns DeleteYikeAssetMediaInfosResponse
     *
     * @param DeleteYikeAssetMediaInfosRequest $request
     *
     * @return DeleteYikeAssetMediaInfosResponse
     */
    public function deleteYikeAssetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteYikeAssetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * 获取一刻AI应用任务
     *
     * @param request - GetYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeAIAppJobResponse
     *
     * @param GetYikeAIAppJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetYikeAIAppJobResponse
     */
    public function getYikeAIAppJobWithOptions($request, $runtime)
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
            'action' => 'GetYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻AI应用任务
     *
     * @param request - GetYikeAIAppJobRequest
     *
     * @returns GetYikeAIAppJobResponse
     *
     * @param GetYikeAIAppJobRequest $request
     *
     * @return GetYikeAIAppJobResponse
     */
    public function getYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 获取一刻媒资内容信息.
     *
     * @param request - GetYikeAssetMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeAssetMediaInfoResponse
     *
     * @param GetYikeAssetMediaInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetYikeAssetMediaInfoResponse
     */
    public function getYikeAssetMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYikeAssetMediaInfo',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeAssetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻媒资内容信息.
     *
     * @param request - GetYikeAssetMediaInfoRequest
     *
     * @returns GetYikeAssetMediaInfoResponse
     *
     * @param GetYikeAssetMediaInfoRequest $request
     *
     * @return GetYikeAssetMediaInfoResponse
     */
    public function getYikeAssetMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeAssetMediaInfoWithOptions($request, $runtime);
    }

    /**
     * 获取一刻故事板任务
     *
     * @param request - GetYikeStoryboardJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeStoryboardJobResponse
     *
     * @param GetYikeStoryboardJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetYikeStoryboardJobResponse
     */
    public function getYikeStoryboardJobWithOptions($request, $runtime)
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
            'action' => 'GetYikeStoryboardJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeStoryboardJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻故事板任务
     *
     * @param request - GetYikeStoryboardJobRequest
     *
     * @returns GetYikeStoryboardJobResponse
     *
     * @param GetYikeStoryboardJobRequest $request
     *
     * @return GetYikeStoryboardJobResponse
     */
    public function getYikeStoryboardJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeStoryboardJobWithOptions($request, $runtime);
    }

    /**
     * 获取一刻子用户信息.
     *
     * @param request - GetYikeUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeUserResponse
     *
     * @param GetYikeUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetYikeUserResponse
     */
    public function getYikeUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYikeUser',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻子用户信息.
     *
     * @param request - GetYikeUserRequest
     *
     * @returns GetYikeUserResponse
     *
     * @param GetYikeUserRequest $request
     *
     * @return GetYikeUserResponse
     */
    public function getYikeUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeUserWithOptions($request, $runtime);
    }

    /**
     * 查询一刻用户积分.
     *
     * @param request - GetYikeUserCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeUserCreditResponse
     *
     * @param GetYikeUserCreditRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetYikeUserCreditResponse
     */
    public function getYikeUserCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->yikeUserId) {
            @$query['YikeUserId'] = $request->yikeUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYikeUserCredit',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeUserCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一刻用户积分.
     *
     * @param request - GetYikeUserCreditRequest
     *
     * @returns GetYikeUserCreditResponse
     *
     * @param GetYikeUserCreditRequest $request
     *
     * @return GetYikeUserCreditResponse
     */
    public function getYikeUserCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeUserCreditWithOptions($request, $runtime);
    }

    /**
     * 获取一刻文件夹列表.
     *
     * @param request - ListYikeAssetFoldersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListYikeAssetFoldersResponse
     *
     * @param ListYikeAssetFoldersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListYikeAssetFoldersResponse
     */
    public function listYikeAssetFoldersWithOptions($request, $runtime)
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
            'action' => 'ListYikeAssetFolders',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListYikeAssetFoldersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻文件夹列表.
     *
     * @param request - ListYikeAssetFoldersRequest
     *
     * @returns ListYikeAssetFoldersResponse
     *
     * @param ListYikeAssetFoldersRequest $request
     *
     * @return ListYikeAssetFoldersResponse
     */
    public function listYikeAssetFolders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listYikeAssetFoldersWithOptions($request, $runtime);
    }

    /**
     * 获取一刻项目列表.
     *
     * @param request - ListYikeProductionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListYikeProductionsResponse
     *
     * @param ListYikeProductionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListYikeProductionsResponse
     */
    public function listYikeProductionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

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
            'action' => 'ListYikeProductions',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListYikeProductionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻项目列表.
     *
     * @param request - ListYikeProductionsRequest
     *
     * @returns ListYikeProductionsResponse
     *
     * @param ListYikeProductionsRequest $request
     *
     * @return ListYikeProductionsResponse
     */
    public function listYikeProductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listYikeProductionsWithOptions($request, $runtime);
    }

    /**
     * 检查应用参数是否合法.
     *
     * @param request - PrecheckYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrecheckYikeAIAppJobResponse
     *
     * @param PrecheckYikeAIAppJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PrecheckYikeAIAppJobResponse
     */
    public function precheckYikeAIAppJobWithOptions($request, $runtime)
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
            'action' => 'PrecheckYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrecheckYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查应用参数是否合法.
     *
     * @param request - PrecheckYikeAIAppJobRequest
     *
     * @returns PrecheckYikeAIAppJobResponse
     *
     * @param PrecheckYikeAIAppJobRequest $request
     *
     * @return PrecheckYikeAIAppJobResponse
     */
    public function precheckYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->precheckYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 注册一刻媒资.
     *
     * @param request - RegisterYikeAssetMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterYikeAssetMediaInfoResponse
     *
     * @param RegisterYikeAssetMediaInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RegisterYikeAssetMediaInfoResponse
     */
    public function registerYikeAssetMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->productionId) {
            @$query['ProductionId'] = $request->productionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterYikeAssetMediaInfo',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterYikeAssetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册一刻媒资.
     *
     * @param request - RegisterYikeAssetMediaInfoRequest
     *
     * @returns RegisterYikeAssetMediaInfoResponse
     *
     * @param RegisterYikeAssetMediaInfoRequest $request
     *
     * @return RegisterYikeAssetMediaInfoResponse
     */
    public function registerYikeAssetMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerYikeAssetMediaInfoWithOptions($request, $runtime);
    }

    /**
     * 故事板任务恢复继续执行任务
     *
     * @param request - ResumeYikeStoryboardJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeYikeStoryboardJobResponse
     *
     * @param ResumeYikeStoryboardJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResumeYikeStoryboardJobResponse
     */
    public function resumeYikeStoryboardJobWithOptions($request, $runtime)
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
            'action' => 'ResumeYikeStoryboardJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeYikeStoryboardJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 故事板任务恢复继续执行任务
     *
     * @param request - ResumeYikeStoryboardJobRequest
     *
     * @returns ResumeYikeStoryboardJobResponse
     *
     * @param ResumeYikeStoryboardJobRequest $request
     *
     * @return ResumeYikeStoryboardJobResponse
     */
    public function resumeYikeStoryboardJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeYikeStoryboardJobWithOptions($request, $runtime);
    }

    /**
     * 设置用户角色.
     *
     * @param request - SetYikeUserRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetYikeUserRoleResponse
     *
     * @param SetYikeUserRoleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetYikeUserRoleResponse
     */
    public function setYikeUserRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        if (null !== $request->yikeUserId) {
            @$query['YikeUserId'] = $request->yikeUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetYikeUserRole',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetYikeUserRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置用户角色.
     *
     * @param request - SetYikeUserRoleRequest
     *
     * @returns SetYikeUserRoleResponse
     *
     * @param SetYikeUserRoleRequest $request
     *
     * @return SetYikeUserRoleResponse
     */
    public function setYikeUserRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setYikeUserRoleWithOptions($request, $runtime);
    }

    /**
     * 扣减用户积分.
     *
     * @param request - SubYikeUserCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubYikeUserCreditResponse
     *
     * @param SubYikeUserCreditRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SubYikeUserCreditResponse
     */
    public function subYikeUserCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credit) {
            @$query['Credit'] = $request->credit;
        }

        if (null !== $request->yikeUserId) {
            @$query['YikeUserId'] = $request->yikeUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubYikeUserCredit',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubYikeUserCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 扣减用户积分.
     *
     * @param request - SubYikeUserCreditRequest
     *
     * @returns SubYikeUserCreditResponse
     *
     * @param SubYikeUserCreditRequest $request
     *
     * @return SubYikeUserCreditResponse
     */
    public function subYikeUserCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subYikeUserCreditWithOptions($request, $runtime);
    }

    /**
     * 提交一刻AI应用任务
     *
     * @param request - SubmitYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitYikeAIAppJobResponse
     *
     * @param SubmitYikeAIAppJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitYikeAIAppJobResponse
     */
    public function submitYikeAIAppJobWithOptions($request, $runtime)
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

        if (null !== $request->productionId) {
            @$body['ProductionId'] = $request->productionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交一刻AI应用任务
     *
     * @param request - SubmitYikeAIAppJobRequest
     *
     * @returns SubmitYikeAIAppJobResponse
     *
     * @param SubmitYikeAIAppJobRequest $request
     *
     * @return SubmitYikeAIAppJobResponse
     */
    public function submitYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 提交一刻故事板任务
     *
     * @param request - SubmitYikeStoryboardJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitYikeStoryboardJobResponse
     *
     * @param SubmitYikeStoryboardJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitYikeStoryboardJobResponse
     */
    public function submitYikeStoryboardJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->execMode) {
            @$query['ExecMode'] = $request->execMode;
        }

        if (null !== $request->modelParams) {
            @$query['ModelParams'] = $request->modelParams;
        }

        if (null !== $request->narrationVoiceId) {
            @$query['NarrationVoiceId'] = $request->narrationVoiceId;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->shotPromptMode) {
            @$query['ShotPromptMode'] = $request->shotPromptMode;
        }

        if (null !== $request->skipFailureShot) {
            @$query['SkipFailureShot'] = $request->skipFailureShot;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoModel) {
            @$query['VideoModel'] = $request->videoModel;
        }

        $body = [];
        if (null !== $request->fileURL) {
            @$body['FileURL'] = $request->fileURL;
        }

        if (null !== $request->shotSplitMode) {
            @$body['ShotSplitMode'] = $request->shotSplitMode;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->styleId) {
            @$body['StyleId'] = $request->styleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitYikeStoryboardJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitYikeStoryboardJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交一刻故事板任务
     *
     * @param request - SubmitYikeStoryboardJobRequest
     *
     * @returns SubmitYikeStoryboardJobResponse
     *
     * @param SubmitYikeStoryboardJobRequest $request
     *
     * @return SubmitYikeStoryboardJobResponse
     */
    public function submitYikeStoryboardJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitYikeStoryboardJobWithOptions($request, $runtime);
    }
}
