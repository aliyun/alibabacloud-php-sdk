<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreatePromptRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreatePromptResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreatePromptVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreatePromptVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreateSkillDraftRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\CreateSkillDraftResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeletePromptRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeletePromptResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DownloadSkillVersionViaOssRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\DownloadSkillVersionViaOssResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ForcePublishSkillVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ForcePublishSkillVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetNamespaceRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetNamespaceResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillDetailRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillDetailResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillImportFileUrlRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillImportFileUrlResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillVersionDetailRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetSkillVersionDetailResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListNamespacesRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptsRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptsResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptVersionsRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptVersionsResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListSkillsRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListSkillsResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\OfflineSkillRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\OfflineSkillResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\OnlineSkillRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\OnlineSkillResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\PublishSkillVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\PublishSkillVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\SubmitPromptVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\SubmitPromptVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\SubmitSkillVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\SubmitSkillVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateNamespaceRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateNamespaceResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdatePromptRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdatePromptResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdatePromptShrinkRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdatePromptVersionRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdatePromptVersionResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillBizTagsRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillBizTagsResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillDraftRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillDraftResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillLabelsRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillLabelsResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillScopeRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UpdateSkillScopeResponse;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UploadSkillViaOssRequest;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\UploadSkillViaOssResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AIRegistry extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('airegistry', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建 AI Registry 命名空间.
     *
     * @param request - CreateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scanPolicy) {
            @$query['ScanPolicy'] = $request->scanPolicy;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNamespace',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 AI Registry 命名空间.
     *
     * @param request - CreateNamespaceRequest
     *
     * @returns CreateNamespaceResponse
     *
     * @param CreateNamespaceRequest $request
     *
     * @return CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * 创建 Prompt.
     *
     * @param request - CreatePromptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePromptResponse
     *
     * @param CreatePromptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePromptResponse
     */
    public function createPromptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizTags) {
            @$query['BizTags'] = $request->bizTags;
        }

        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        if (null !== $request->variables) {
            @$query['Variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePrompt',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Prompt.
     *
     * @param request - CreatePromptRequest
     *
     * @returns CreatePromptResponse
     *
     * @param CreatePromptRequest $request
     *
     * @return CreatePromptResponse
     */
    public function createPrompt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPromptWithOptions($request, $runtime);
    }

    /**
     * 创建 Prompt 草稿版本。Prompt 必须已存在，且当前没有正在编辑的草稿。只对草稿版本生效。
     *
     * @param request - CreatePromptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePromptVersionResponse
     *
     * @param CreatePromptVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePromptVersionResponse
     */
    public function createPromptVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basedOnVersion) {
            @$query['BasedOnVersion'] = $request->basedOnVersion;
        }

        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        if (null !== $request->variables) {
            @$query['Variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePromptVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePromptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Prompt 草稿版本。Prompt 必须已存在，且当前没有正在编辑的草稿。只对草稿版本生效。
     *
     * @param request - CreatePromptVersionRequest
     *
     * @returns CreatePromptVersionResponse
     *
     * @param CreatePromptVersionRequest $request
     *
     * @return CreatePromptVersionResponse
     */
    public function createPromptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPromptVersionWithOptions($request, $runtime);
    }

    /**
     * 创建 Skill 草稿版本.
     *
     * @param request - CreateSkillDraftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillDraftResponse
     *
     * @param CreateSkillDraftRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillDraftResponse
     */
    public function createSkillDraftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->basedOnVersion) {
            @$query['BasedOnVersion'] = $request->basedOnVersion;
        }

        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillCard) {
            @$query['SkillCard'] = $request->skillCard;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkillDraft',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Skill 草稿版本.
     *
     * @param request - CreateSkillDraftRequest
     *
     * @returns CreateSkillDraftResponse
     *
     * @param CreateSkillDraftRequest $request
     *
     * @return CreateSkillDraftResponse
     */
    public function createSkillDraft($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillDraftWithOptions($request, $runtime);
    }

    /**
     * 删除命名空间.
     *
     * @param request - DeleteNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNamespace',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除命名空间.
     *
     * @param request - DeleteNamespaceRequest
     *
     * @returns DeleteNamespaceResponse
     *
     * @param DeleteNamespaceRequest $request
     *
     * @return DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * 删除 Prompt.
     *
     * @param request - DeletePromptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePromptResponse
     *
     * @param DeletePromptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePromptResponse
     */
    public function deletePromptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePrompt',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Prompt.
     *
     * @param request - DeletePromptRequest
     *
     * @returns DeletePromptResponse
     *
     * @param DeletePromptRequest $request
     *
     * @return DeletePromptResponse
     */
    public function deletePrompt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePromptWithOptions($request, $runtime);
    }

    /**
     * 删除 Skill.
     *
     * @param request - DeleteSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSkill',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Skill.
     *
     * @param request - DeleteSkillRequest
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillWithOptions($request, $runtime);
    }

    /**
     * 通过 OSS 下载 Skill 版本 - 返回 OSS 下载 URL.
     *
     * @param request - DownloadSkillVersionViaOssRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadSkillVersionViaOssResponse
     *
     * @param DownloadSkillVersionViaOssRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DownloadSkillVersionViaOssResponse
     */
    public function downloadSkillVersionViaOssWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadSkillVersionViaOss',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadSkillVersionViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过 OSS 下载 Skill 版本 - 返回 OSS 下载 URL.
     *
     * @param request - DownloadSkillVersionViaOssRequest
     *
     * @returns DownloadSkillVersionViaOssResponse
     *
     * @param DownloadSkillVersionViaOssRequest $request
     *
     * @return DownloadSkillVersionViaOssResponse
     */
    public function downloadSkillVersionViaOss($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadSkillVersionViaOssWithOptions($request, $runtime);
    }

    /**
     * 强制发布版本.
     *
     * @param request - ForcePublishSkillVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForcePublishSkillVersionResponse
     *
     * @param ForcePublishSkillVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ForcePublishSkillVersionResponse
     */
    public function forcePublishSkillVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        if (null !== $request->updateLatestLabel) {
            @$query['UpdateLatestLabel'] = $request->updateLatestLabel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ForcePublishSkillVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ForcePublishSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 强制发布版本.
     *
     * @param request - ForcePublishSkillVersionRequest
     *
     * @returns ForcePublishSkillVersionResponse
     *
     * @param ForcePublishSkillVersionRequest $request
     *
     * @return ForcePublishSkillVersionResponse
     */
    public function forcePublishSkillVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forcePublishSkillVersionWithOptions($request, $runtime);
    }

    /**
     * 获取命名空间详细信息.
     *
     * @param request - GetNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNamespaceResponse
     */
    public function getNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNamespace',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取命名空间详细信息.
     *
     * @param request - GetNamespaceRequest
     *
     * @returns GetNamespaceResponse
     *
     * @param GetNamespaceRequest $request
     *
     * @return GetNamespaceResponse
     */
    public function getNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNamespaceWithOptions($request, $runtime);
    }

    /**
     * 获取 Prompt 详情信息.
     *
     * @param request - GetPromptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptResponse
     *
     * @param GetPromptRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPromptResponse
     */
    public function getPromptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrompt',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 Prompt 详情信息.
     *
     * @param request - GetPromptRequest
     *
     * @returns GetPromptResponse
     *
     * @param GetPromptRequest $request
     *
     * @return GetPromptResponse
     */
    public function getPrompt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPromptWithOptions($request, $runtime);
    }

    /**
     * 获取 Prompt 某个版本的信息.
     *
     * @param request - GetPromptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptVersionResponse
     *
     * @param GetPromptVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPromptVersionResponse
     */
    public function getPromptVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->promptVersion) {
            @$query['PromptVersion'] = $request->promptVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPromptVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPromptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 Prompt 某个版本的信息.
     *
     * @param request - GetPromptVersionRequest
     *
     * @returns GetPromptVersionResponse
     *
     * @param GetPromptVersionRequest $request
     *
     * @return GetPromptVersionResponse
     */
    public function getPromptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPromptVersionWithOptions($request, $runtime);
    }

    /**
     * 获取 Skill 详情.
     *
     * @param request - GetSkillDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillDetailResponse
     *
     * @param GetSkillDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSkillDetailResponse
     */
    public function getSkillDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillDetail',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 Skill 详情.
     *
     * @param request - GetSkillDetailRequest
     *
     * @returns GetSkillDetailResponse
     *
     * @param GetSkillDetailRequest $request
     *
     * @return GetSkillDetailResponse
     */
    public function getSkillDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillDetailWithOptions($request, $runtime);
    }

    /**
     * 获取 Skill 导入用 OSS 上传 URL。客户端使用返回的 uploadUrl 执行 PUT 上传后，.
     *
     * @param request - GetSkillImportFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillImportFileUrlResponse
     *
     * @param GetSkillImportFileUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSkillImportFileUrlResponse
     */
    public function getSkillImportFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillImportFileUrl',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillImportFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 Skill 导入用 OSS 上传 URL。客户端使用返回的 uploadUrl 执行 PUT 上传后，.
     *
     * @param request - GetSkillImportFileUrlRequest
     *
     * @returns GetSkillImportFileUrlResponse
     *
     * @param GetSkillImportFileUrlRequest $request
     *
     * @return GetSkillImportFileUrlResponse
     */
    public function getSkillImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillImportFileUrlWithOptions($request, $runtime);
    }

    /**
     * 获取指定版本详情.
     *
     * @param request - GetSkillVersionDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillVersionDetailResponse
     *
     * @param GetSkillVersionDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSkillVersionDetailResponse
     */
    public function getSkillVersionDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillVersionDetail',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillVersionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定版本详情.
     *
     * @param request - GetSkillVersionDetailRequest
     *
     * @returns GetSkillVersionDetailResponse
     *
     * @param GetSkillVersionDetailRequest $request
     *
     * @return GetSkillVersionDetailResponse
     */
    public function getSkillVersionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillVersionDetailWithOptions($request, $runtime);
    }

    /**
     * 获取命名空间列表.
     *
     * @param request - ListNamespacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($request, $runtime)
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

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNamespaces',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取命名空间列表.
     *
     * @param request - ListNamespacesRequest
     *
     * @returns ListNamespacesResponse
     *
     * @param ListNamespacesRequest $request
     *
     * @return ListNamespacesResponse
     */
    public function listNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNamespacesWithOptions($request, $runtime);
    }

    /**
     * 列出Prompt版本列表.
     *
     * @param request - ListPromptVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromptVersionsResponse
     *
     * @param ListPromptVersionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPromptVersionsResponse
     */
    public function listPromptVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPromptVersions',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPromptVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出Prompt版本列表.
     *
     * @param request - ListPromptVersionsRequest
     *
     * @returns ListPromptVersionsResponse
     *
     * @param ListPromptVersionsRequest $request
     *
     * @return ListPromptVersionsResponse
     */
    public function listPromptVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromptVersionsWithOptions($request, $runtime);
    }

    /**
     * 获取Prompt列表.
     *
     * @param request - ListPromptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPromptsResponse
     *
     * @param ListPromptsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPromptsResponse
     */
    public function listPromptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizTags) {
            @$query['BizTags'] = $request->bizTags;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrompts',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPromptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Prompt列表.
     *
     * @param request - ListPromptsRequest
     *
     * @returns ListPromptsResponse
     *
     * @param ListPromptsRequest $request
     *
     * @return ListPromptsResponse
     */
    public function listPrompts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPromptsWithOptions($request, $runtime);
    }

    /**
     * 列出 Skills.
     *
     * @param request - ListSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出 Skills.
     *
     * @param request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillsWithOptions($request, $runtime);
    }

    /**
     * 下线版本.
     *
     * @param request - OfflineSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OfflineSkillResponse
     *
     * @param OfflineSkillRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OfflineSkillResponse
     */
    public function offlineSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OfflineSkill',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OfflineSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下线版本.
     *
     * @param request - OfflineSkillRequest
     *
     * @returns OfflineSkillResponse
     *
     * @param OfflineSkillRequest $request
     *
     * @return OfflineSkillResponse
     */
    public function offlineSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineSkillWithOptions($request, $runtime);
    }

    /**
     * 上线 Skill.
     *
     * @param request - OnlineSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OnlineSkillResponse
     *
     * @param OnlineSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OnlineSkillResponse
     */
    public function onlineSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OnlineSkill',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OnlineSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上线 Skill.
     *
     * @param request - OnlineSkillRequest
     *
     * @returns OnlineSkillResponse
     *
     * @param OnlineSkillRequest $request
     *
     * @return OnlineSkillResponse
     */
    public function onlineSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onlineSkillWithOptions($request, $runtime);
    }

    /**
     * 发布版本.
     *
     * @param request - PublishSkillVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishSkillVersionResponse
     *
     * @param PublishSkillVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PublishSkillVersionResponse
     */
    public function publishSkillVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        if (null !== $request->updateLatestLabel) {
            @$query['UpdateLatestLabel'] = $request->updateLatestLabel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishSkillVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布版本.
     *
     * @param request - PublishSkillVersionRequest
     *
     * @returns PublishSkillVersionResponse
     *
     * @param PublishSkillVersionRequest $request
     *
     * @return PublishSkillVersionResponse
     */
    public function publishSkillVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishSkillVersionWithOptions($request, $runtime);
    }

    /**
     * 提交 Prompt 版本, 将 Prompt 的草稿版本转化为正式版本.
     *
     * @param request - SubmitPromptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitPromptVersionResponse
     *
     * @param SubmitPromptVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitPromptVersionResponse
     */
    public function submitPromptVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->promptVersion) {
            @$query['PromptVersion'] = $request->promptVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitPromptVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitPromptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交 Prompt 版本, 将 Prompt 的草稿版本转化为正式版本.
     *
     * @param request - SubmitPromptVersionRequest
     *
     * @returns SubmitPromptVersionResponse
     *
     * @param SubmitPromptVersionRequest $request
     *
     * @return SubmitPromptVersionResponse
     */
    public function submitPromptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPromptVersionWithOptions($request, $runtime);
    }

    /**
     * 提交 Skill Draft 审核.
     *
     * @param request - SubmitSkillVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSkillVersionResponse
     *
     * @param SubmitSkillVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitSkillVersionResponse
     */
    public function submitSkillVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSkillVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSkillVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交 Skill Draft 审核.
     *
     * @param request - SubmitSkillVersionRequest
     *
     * @returns SubmitSkillVersionResponse
     *
     * @param SubmitSkillVersionRequest $request
     *
     * @return SubmitSkillVersionResponse
     */
    public function submitSkillVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSkillVersionWithOptions($request, $runtime);
    }

    /**
     * 更新命名空间信息.
     *
     * @param request - UpdateNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->scanPolicy) {
            @$query['ScanPolicy'] = $request->scanPolicy;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNamespace',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新命名空间信息.
     *
     * @param request - UpdateNamespaceRequest
     *
     * @returns UpdateNamespaceResponse
     *
     * @param UpdateNamespaceRequest $request
     *
     * @return UpdateNamespaceResponse
     */
    public function updateNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNamespaceWithOptions($request, $runtime);
    }

    /**
     * 更新 Prompt 元数据，支持同时更新 description、bizTags、labels。
     *
     * @param tmpReq - UpdatePromptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePromptResponse
     *
     * @param UpdatePromptRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePromptResponse
     */
    public function updatePromptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePromptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizTags) {
            $request->bizTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizTags, 'BizTags', 'json');
        }

        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        $query = [];
        if (null !== $request->bizTagsShrink) {
            @$query['BizTags'] = $request->bizTagsShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePrompt',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Prompt 元数据，支持同时更新 description、bizTags、labels。
     *
     * @param request - UpdatePromptRequest
     *
     * @returns UpdatePromptResponse
     *
     * @param UpdatePromptRequest $request
     *
     * @return UpdatePromptResponse
     */
    public function updatePrompt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePromptWithOptions($request, $runtime);
    }

    /**
     * 更新 Prompt 草稿版本内容。只对草稿版本生效，已发布的版本不可修改。
     *
     * @param request - UpdatePromptVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePromptVersionResponse
     *
     * @param UpdatePromptVersionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePromptVersionResponse
     */
    public function updatePromptVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->promptKey) {
            @$query['PromptKey'] = $request->promptKey;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        if (null !== $request->variables) {
            @$query['Variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePromptVersion',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePromptVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Prompt 草稿版本内容。只对草稿版本生效，已发布的版本不可修改。
     *
     * @param request - UpdatePromptVersionRequest
     *
     * @returns UpdatePromptVersionResponse
     *
     * @param UpdatePromptVersionRequest $request
     *
     * @return UpdatePromptVersionResponse
     */
    public function updatePromptVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePromptVersionWithOptions($request, $runtime);
    }

    /**
     * 更新业务标签.
     *
     * @param request - UpdateSkillBizTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillBizTagsResponse
     *
     * @param UpdateSkillBizTagsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSkillBizTagsResponse
     */
    public function updateSkillBizTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizTags) {
            @$query['BizTags'] = $request->bizTags;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillBizTags',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillBizTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新业务标签.
     *
     * @param request - UpdateSkillBizTagsRequest
     *
     * @returns UpdateSkillBizTagsResponse
     *
     * @param UpdateSkillBizTagsRequest $request
     *
     * @return UpdateSkillBizTagsResponse
     */
    public function updateSkillBizTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillBizTagsWithOptions($request, $runtime);
    }

    /**
     * 更新 Draft.
     *
     * @param request - UpdateSkillDraftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillDraftResponse
     *
     * @param UpdateSkillDraftRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillDraftResponse
     */
    public function updateSkillDraftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillCard) {
            @$query['SkillCard'] = $request->skillCard;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillDraft',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillDraftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Draft.
     *
     * @param request - UpdateSkillDraftRequest
     *
     * @returns UpdateSkillDraftResponse
     *
     * @param UpdateSkillDraftRequest $request
     *
     * @return UpdateSkillDraftResponse
     */
    public function updateSkillDraft($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillDraftWithOptions($request, $runtime);
    }

    /**
     * 更新版本标签.
     *
     * @param request - UpdateSkillLabelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillLabelsResponse
     *
     * @param UpdateSkillLabelsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSkillLabelsResponse
     */
    public function updateSkillLabelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillLabels',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新版本标签.
     *
     * @param request - UpdateSkillLabelsRequest
     *
     * @returns UpdateSkillLabelsResponse
     *
     * @param UpdateSkillLabelsRequest $request
     *
     * @return UpdateSkillLabelsResponse
     */
    public function updateSkillLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillLabelsWithOptions($request, $runtime);
    }

    /**
     * 更新可见性.
     *
     * @param request - UpdateSkillScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillScopeResponse
     *
     * @param UpdateSkillScopeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillScopeResponse
     */
    public function updateSkillScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->skillName) {
            @$query['SkillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillScope',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新可见性.
     *
     * @param request - UpdateSkillScopeRequest
     *
     * @returns UpdateSkillScopeResponse
     *
     * @param UpdateSkillScopeRequest $request
     *
     * @return UpdateSkillScopeResponse
     */
    public function updateSkillScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillScopeWithOptions($request, $runtime);
    }

    /**
     * 通过 OSS 上传 Skill (ZIP) - 从 OSS 拉取文件内容后上传到 Nacos.
     *
     * @param request - UploadSkillViaOssRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadSkillViaOssResponse
     *
     * @param UploadSkillViaOssRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadSkillViaOssResponse
     */
    public function uploadSkillViaOssWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commitMsg) {
            @$query['CommitMsg'] = $request->commitMsg;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->ossObjectName) {
            @$query['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadSkillViaOss',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadSkillViaOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过 OSS 上传 Skill (ZIP) - 从 OSS 拉取文件内容后上传到 Nacos.
     *
     * @param request - UploadSkillViaOssRequest
     *
     * @returns UploadSkillViaOssResponse
     *
     * @param UploadSkillViaOssRequest $request
     *
     * @return UploadSkillViaOssResponse
     */
    public function uploadSkillViaOss($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadSkillViaOssWithOptions($request, $runtime);
    }
}
