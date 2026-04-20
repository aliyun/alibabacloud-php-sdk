<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateProfileRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateProfileResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateProfileShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMemoryRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMemoryResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteProfileRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteProfileResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListPublishedMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListPublishedMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingMcpRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingMcpResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingMcpShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingRagRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingRagResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\MmAppBindingRagShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PatchMemoryConfigRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PatchMemoryConfigResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PublishMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PublishMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryConfigRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryConfigResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryListRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryMemoryListResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryProfileRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryProfileResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryUserProfileRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QueryUserProfileResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMemoryRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMemoryResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMemoryShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppMemoryRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppMemoryResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagConfigRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagConfigResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagWeightRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagWeightResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRagWeightShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppTransitionRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppTransitionResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateProfileRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateProfileResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateProfileShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SfmMultiModalApp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sfmmultimodalapp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 指令创建.
     *
     * @param tmpReq - CreateCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCommandResponse
     *
     * @param CreateCommandRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->toolExamples) {
            $request->toolExamplesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toolExamples, 'ToolExamples', 'json');
        }

        if (null !== $tmpReq->toolParams) {
            $request->toolParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toolParams, 'ToolParams', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->toolDescription) {
            @$query['ToolDescription'] = $request->toolDescription;
        }

        if (null !== $request->toolExamplesShrink) {
            @$query['ToolExamples'] = $request->toolExamplesShrink;
        }

        if (null !== $request->toolName) {
            @$query['ToolName'] = $request->toolName;
        }

        if (null !== $request->toolParamsShrink) {
            @$query['ToolParams'] = $request->toolParamsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCommand',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指令创建.
     *
     * @param request - CreateCommandRequest
     *
     * @returns CreateCommandResponse
     *
     * @param CreateCommandRequest $request
     *
     * @return CreateCommandResponse
     */
    public function createCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * 新增用户记忆.
     *
     * @param tmpReq - CreateMemoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMemoryResponse
     *
     * @param CreateMemoryRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemoryResponse
     */
    public function createMemoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMemoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metaData) {
            $request->metaDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metaData, 'MetaData', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoUpdate) {
            @$query['AutoUpdate'] = $request->autoUpdate;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
        }

        if (null !== $request->messagesJson) {
            @$query['MessagesJson'] = $request->messagesJson;
        }

        if (null !== $request->metaDataShrink) {
            @$query['MetaData'] = $request->metaDataShrink;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMemory',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增用户记忆.
     *
     * @param request - CreateMemoryRequest
     *
     * @returns CreateMemoryResponse
     *
     * @param CreateMemoryRequest $request
     *
     * @return CreateMemoryResponse
     */
    public function createMemory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMemoryWithOptions($request, $runtime);
    }

    /**
     * 创建多模态应用.
     *
     * @param tmpReq - CreateMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMmAppResponse
     *
     * @param CreateMmAppRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateMmAppResponse
     */
    public function createMmAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMmAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bindingConfig) {
            $request->bindingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bindingConfig, 'BindingConfig', 'json');
        }

        if (null !== $tmpReq->conversationConfig) {
            $request->conversationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->conversationConfig, 'ConversationConfig', 'json');
        }

        if (null !== $tmpReq->modelConfig) {
            $request->modelConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelConfig, 'ModelConfig', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bindingConfigShrink) {
            @$query['BindingConfig'] = $request->bindingConfigShrink;
        }

        if (null !== $request->conversationConfigShrink) {
            @$query['ConversationConfig'] = $request->conversationConfigShrink;
        }

        if (null !== $request->modelConfigShrink) {
            @$query['ModelConfig'] = $request->modelConfigShrink;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建多模态应用.
     *
     * @param request - CreateMmAppRequest
     *
     * @returns CreateMmAppResponse
     *
     * @param CreateMmAppRequest $request
     *
     * @return CreateMmAppResponse
     */
    public function createMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMmAppWithOptions($request, $runtime);
    }

    /**
     * 创建用户画像配置.
     *
     * @param tmpReq - CreateProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProfileResponse
     *
     * @param CreateProfileRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProfileResponse
     */
    public function createProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->attributesShrink) {
            @$query['Attributes'] = $request->attributesShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProfile',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建用户画像配置.
     *
     * @param request - CreateProfileRequest
     *
     * @returns CreateProfileResponse
     *
     * @param CreateProfileRequest $request
     *
     * @return CreateProfileResponse
     */
    public function createProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProfileWithOptions($request, $runtime);
    }

    /**
     * 删除指令.
     *
     * @param request - DeleteCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCommandResponse
     *
     * @param DeleteCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->toolId) {
            @$query['ToolId'] = $request->toolId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCommand',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指令.
     *
     * @param request - DeleteCommandRequest
     *
     * @returns DeleteCommandResponse
     *
     * @param DeleteCommandRequest $request
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommandWithOptions($request, $runtime);
    }

    /**
     * 删除用户记忆.
     *
     * @param request - DeleteMemoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMemoryResponse
     *
     * @param DeleteMemoryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->memoryNodeId) {
            @$query['MemoryNodeId'] = $request->memoryNodeId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMemory',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户记忆.
     *
     * @param request - DeleteMemoryRequest
     *
     * @returns DeleteMemoryResponse
     *
     * @param DeleteMemoryRequest $request
     *
     * @return DeleteMemoryResponse
     */
    public function deleteMemory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMemoryWithOptions($request, $runtime);
    }

    /**
     * 删除多模态应用.
     *
     * @param request - DeleteMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMmAppResponse
     *
     * @param DeleteMmAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteMmAppResponse
     */
    public function deleteMmAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除多模态应用.
     *
     * @param request - DeleteMmAppRequest
     *
     * @returns DeleteMmAppResponse
     *
     * @param DeleteMmAppRequest $request
     *
     * @return DeleteMmAppResponse
     */
    public function deleteMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMmAppWithOptions($request, $runtime);
    }

    /**
     * 删除用户画像配置.
     *
     * @param request - DeleteProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProfileResponse
     *
     * @param DeleteProfileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProfileResponse
     */
    public function deleteProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProfile',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户画像配置.
     *
     * @param request - DeleteProfileRequest
     *
     * @returns DeleteProfileResponse
     *
     * @param DeleteProfileRequest $request
     *
     * @return DeleteProfileResponse
     */
    public function deleteProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProfileWithOptions($request, $runtime);
    }

    /**
     * 指令详情.
     *
     * @param request - DescribeCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCommandResponse
     *
     * @param DescribeCommandRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCommandResponse
     */
    public function describeCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->toolId) {
            @$query['ToolId'] = $request->toolId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCommand',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指令详情.
     *
     * @param request - DescribeCommandRequest
     *
     * @returns DescribeCommandResponse
     *
     * @param DescribeCommandRequest $request
     *
     * @return DescribeCommandResponse
     */
    public function describeCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandWithOptions($request, $runtime);
    }

    /**
     * 多模态应用详情.
     *
     * @param request - DescribeMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMmAppResponse
     *
     * @param DescribeMmAppRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeMmAppResponse
     */
    public function describeMmAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态应用详情.
     *
     * @param request - DescribeMmAppRequest
     *
     * @returns DescribeMmAppResponse
     *
     * @param DescribeMmAppRequest $request
     *
     * @return DescribeMmAppResponse
     */
    public function describeMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMmAppWithOptions($request, $runtime);
    }

    /**
     * 指令列表.
     *
     * @param request - ListCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommandResponse
     *
     * @param ListCommandRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListCommandResponse
     */
    public function listCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->toolName) {
            @$query['ToolName'] = $request->toolName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCommand',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指令列表.
     *
     * @param request - ListCommandRequest
     *
     * @returns ListCommandResponse
     *
     * @param ListCommandRequest $request
     *
     * @return ListCommandResponse
     */
    public function listCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommandWithOptions($request, $runtime);
    }

    /**
     * 获取多模态应用列表.
     *
     * @param request - ListMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMmAppResponse
     *
     * @param ListMmAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListMmAppResponse
     */
    public function listMmAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取多模态应用列表.
     *
     * @param request - ListMmAppRequest
     *
     * @returns ListMmAppResponse
     *
     * @param ListMmAppRequest $request
     *
     * @return ListMmAppResponse
     */
    public function listMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMmAppWithOptions($request, $runtime);
    }

    /**
     * 应用发布列表.
     *
     * @param request - ListPublishedMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedMmAppResponse
     *
     * @param ListPublishedMmAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListPublishedMmAppResponse
     */
    public function listPublishedMmAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
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
            'action' => 'ListPublishedMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用发布列表.
     *
     * @param request - ListPublishedMmAppRequest
     *
     * @returns ListPublishedMmAppResponse
     *
     * @param ListPublishedMmAppRequest $request
     *
     * @return ListPublishedMmAppResponse
     */
    public function listPublishedMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedMmAppWithOptions($request, $runtime);
    }

    /**
     * 多模态应用绑定MCP.
     *
     * @param tmpReq - MmAppBindingMcpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MmAppBindingMcpResponse
     *
     * @param MmAppBindingMcpRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return MmAppBindingMcpResponse
     */
    public function mmAppBindingMcpWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MmAppBindingMcpShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->mcps) {
            $request->mcpsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mcps, 'Mcps', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->mcpsShrink) {
            @$query['Mcps'] = $request->mcpsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MmAppBindingMcp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MmAppBindingMcpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态应用绑定MCP.
     *
     * @param request - MmAppBindingMcpRequest
     *
     * @returns MmAppBindingMcpResponse
     *
     * @param MmAppBindingMcpRequest $request
     *
     * @return MmAppBindingMcpResponse
     */
    public function mmAppBindingMcp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mmAppBindingMcpWithOptions($request, $runtime);
    }

    /**
     * 多模态应用绑定知识库.
     *
     * @param tmpReq - MmAppBindingRagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MmAppBindingRagResponse
     *
     * @param MmAppBindingRagRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return MmAppBindingRagResponse
     */
    public function mmAppBindingRagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MmAppBindingRagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->knowledgeBaseCodeList) {
            $request->knowledgeBaseCodeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->knowledgeBaseCodeList, 'KnowledgeBaseCodeList', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->knowledgeBaseCodeListShrink) {
            @$query['KnowledgeBaseCodeList'] = $request->knowledgeBaseCodeListShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MmAppBindingRag',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MmAppBindingRagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态应用绑定知识库.
     *
     * @param request - MmAppBindingRagRequest
     *
     * @returns MmAppBindingRagResponse
     *
     * @param MmAppBindingRagRequest $request
     *
     * @return MmAppBindingRagResponse
     */
    public function mmAppBindingRag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mmAppBindingRagWithOptions($request, $runtime);
    }

    /**
     * 变更用户记忆配置.
     *
     * @param request - PatchMemoryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PatchMemoryConfigResponse
     *
     * @param PatchMemoryConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PatchMemoryConfigResponse
     */
    public function patchMemoryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->autoUpdate) {
            @$query['AutoUpdate'] = $request->autoUpdate;
        }

        if (null !== $request->expirationTime) {
            @$query['ExpirationTime'] = $request->expirationTime;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PatchMemoryConfig',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PatchMemoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更用户记忆配置.
     *
     * @param request - PatchMemoryConfigRequest
     *
     * @returns PatchMemoryConfigResponse
     *
     * @param PatchMemoryConfigRequest $request
     *
     * @return PatchMemoryConfigResponse
     */
    public function patchMemoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->patchMemoryConfigWithOptions($request, $runtime);
    }

    /**
     * 多模态应用发布.
     *
     * @param request - PublishMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishMmAppResponse
     *
     * @param PublishMmAppRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PublishMmAppResponse
     */
    public function publishMmAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态应用发布.
     *
     * @param request - PublishMmAppRequest
     *
     * @returns PublishMmAppResponse
     *
     * @param PublishMmAppRequest $request
     *
     * @return PublishMmAppResponse
     */
    public function publishMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishMmAppWithOptions($request, $runtime);
    }

    /**
     * 查询用户记忆配置.
     *
     * @param request - QueryMemoryConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMemoryConfigResponse
     *
     * @param QueryMemoryConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMemoryConfigResponse
     */
    public function queryMemoryConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMemoryConfig',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMemoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户记忆配置.
     *
     * @param request - QueryMemoryConfigRequest
     *
     * @returns QueryMemoryConfigResponse
     *
     * @param QueryMemoryConfigRequest $request
     *
     * @return QueryMemoryConfigResponse
     */
    public function queryMemoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMemoryConfigWithOptions($request, $runtime);
    }

    /**
     * 查询用户记忆列表.
     *
     * @param request - QueryMemoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMemoryListResponse
     *
     * @param QueryMemoryListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMemoryListResponse
     */
    public function queryMemoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMemoryList',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMemoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户记忆列表.
     *
     * @param request - QueryMemoryListRequest
     *
     * @returns QueryMemoryListResponse
     *
     * @param QueryMemoryListRequest $request
     *
     * @return QueryMemoryListResponse
     */
    public function queryMemoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMemoryListWithOptions($request, $runtime);
    }

    /**
     * 查询用户画像配置.
     *
     * @param request - QueryProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProfileResponse
     *
     * @param QueryProfileRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryProfileResponse
     */
    public function queryProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProfile',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户画像配置.
     *
     * @param request - QueryProfileRequest
     *
     * @returns QueryProfileResponse
     *
     * @param QueryProfileRequest $request
     *
     * @return QueryProfileResponse
     */
    public function queryProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProfileWithOptions($request, $runtime);
    }

    /**
     * 查询用户画像.
     *
     * @param request - QueryUserProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserProfileResponse
     *
     * @param QueryUserProfileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUserProfileResponse
     */
    public function queryUserProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserProfile',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户画像.
     *
     * @param request - QueryUserProfileRequest
     *
     * @returns QueryUserProfileResponse
     *
     * @param QueryUserProfileRequest $request
     *
     * @return QueryUserProfileResponse
     */
    public function queryUserProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserProfileWithOptions($request, $runtime);
    }

    /**
     * 指令更新.
     *
     * @param tmpReq - UpdateCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCommandResponse
     *
     * @param UpdateCommandRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateCommandResponse
     */
    public function updateCommandWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->toolExamples) {
            $request->toolExamplesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toolExamples, 'ToolExamples', 'json');
        }

        if (null !== $tmpReq->toolParams) {
            $request->toolParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toolParams, 'ToolParams', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->domainCode) {
            @$query['DomainCode'] = $request->domainCode;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->toolDescription) {
            @$query['ToolDescription'] = $request->toolDescription;
        }

        if (null !== $request->toolExamplesShrink) {
            @$query['ToolExamples'] = $request->toolExamplesShrink;
        }

        if (null !== $request->toolId) {
            @$query['ToolId'] = $request->toolId;
        }

        if (null !== $request->toolName) {
            @$query['ToolName'] = $request->toolName;
        }

        if (null !== $request->toolParamsShrink) {
            @$query['ToolParams'] = $request->toolParamsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCommand',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指令更新.
     *
     * @param request - UpdateCommandRequest
     *
     * @returns UpdateCommandResponse
     *
     * @param UpdateCommandRequest $request
     *
     * @return UpdateCommandResponse
     */
    public function updateCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommandWithOptions($request, $runtime);
    }

    /**
     * 更新用户记忆.
     *
     * @param tmpReq - UpdateMemoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMemoryResponse
     *
     * @param UpdateMemoryRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemoryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMemoryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metaData) {
            $request->metaDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metaData, 'MetaData', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->memoryNodeId) {
            @$query['MemoryNodeId'] = $request->memoryNodeId;
        }

        if (null !== $request->metaDataShrink) {
            @$query['MetaData'] = $request->metaDataShrink;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMemory',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新用户记忆.
     *
     * @param request - UpdateMemoryRequest
     *
     * @returns UpdateMemoryResponse
     *
     * @param UpdateMemoryRequest $request
     *
     * @return UpdateMemoryResponse
     */
    public function updateMemory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMemoryWithOptions($request, $runtime);
    }

    /**
     * 多模态应用更新.
     *
     * @param tmpReq - UpdateMmAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppResponse
     *
     * @param UpdateMmAppRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMmAppResponse
     */
    public function updateMmAppWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMmAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bindingConfig) {
            $request->bindingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bindingConfig, 'BindingConfig', 'json');
        }

        if (null !== $tmpReq->conversationConfig) {
            $request->conversationConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->conversationConfig, 'ConversationConfig', 'json');
        }

        if (null !== $tmpReq->modelConfig) {
            $request->modelConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelConfig, 'ModelConfig', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bindingConfigShrink) {
            @$query['BindingConfig'] = $request->bindingConfigShrink;
        }

        if (null !== $request->conversationConfigShrink) {
            @$query['ConversationConfig'] = $request->conversationConfigShrink;
        }

        if (null !== $request->modelConfigShrink) {
            @$query['ModelConfig'] = $request->modelConfigShrink;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmApp',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态应用更新.
     *
     * @param request - UpdateMmAppRequest
     *
     * @returns UpdateMmAppResponse
     *
     * @param UpdateMmAppRequest $request
     *
     * @return UpdateMmAppResponse
     */
    public function updateMmApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppWithOptions($request, $runtime);
    }

    /**
     * 修改多模态应用长期记忆开关.
     *
     * @param request - UpdateMmAppMemoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppMemoryResponse
     *
     * @param UpdateMmAppMemoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMmAppMemoryResponse
     */
    public function updateMmAppMemoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmAppMemory',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppMemoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改多模态应用长期记忆开关.
     *
     * @param request - UpdateMmAppMemoryRequest
     *
     * @returns UpdateMmAppMemoryResponse
     *
     * @param UpdateMmAppMemoryRequest $request
     *
     * @return UpdateMmAppMemoryResponse
     */
    public function updateMmAppMemory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppMemoryWithOptions($request, $runtime);
    }

    /**
     * 修改知识库开关.
     *
     * @param request - UpdateMmAppRagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppRagResponse
     *
     * @param UpdateMmAppRagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateMmAppRagResponse
     */
    public function updateMmAppRagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmAppRag',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppRagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改知识库开关.
     *
     * @param request - UpdateMmAppRagRequest
     *
     * @returns UpdateMmAppRagResponse
     *
     * @param UpdateMmAppRagRequest $request
     *
     * @return UpdateMmAppRagResponse
     */
    public function updateMmAppRag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppRagWithOptions($request, $runtime);
    }

    /**
     * 修改知识库配置.
     *
     * @param request - UpdateMmAppRagConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppRagConfigResponse
     *
     * @param UpdateMmAppRagConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMmAppRagConfigResponse
     */
    public function updateMmAppRagConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->promptStrategy) {
            @$query['PromptStrategy'] = $request->promptStrategy;
        }

        if (null !== $request->retrieveMaxLength) {
            @$query['RetrieveMaxLength'] = $request->retrieveMaxLength;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmAppRagConfig',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppRagConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改知识库配置.
     *
     * @param request - UpdateMmAppRagConfigRequest
     *
     * @returns UpdateMmAppRagConfigResponse
     *
     * @param UpdateMmAppRagConfigRequest $request
     *
     * @return UpdateMmAppRagConfigResponse
     */
    public function updateMmAppRagConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppRagConfigWithOptions($request, $runtime);
    }

    /**
     * 修改知识库权重.
     *
     * @param tmpReq - UpdateMmAppRagWeightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppRagWeightResponse
     *
     * @param UpdateMmAppRagWeightRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMmAppRagWeightResponse
     */
    public function updateMmAppRagWeightWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMmAppRagWeightShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rankWeights) {
            $request->rankWeightsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rankWeights, 'RankWeights', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->rankWeightsShrink) {
            @$query['RankWeights'] = $request->rankWeightsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmAppRagWeight',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppRagWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改知识库权重.
     *
     * @param request - UpdateMmAppRagWeightRequest
     *
     * @returns UpdateMmAppRagWeightResponse
     *
     * @param UpdateMmAppRagWeightRequest $request
     *
     * @return UpdateMmAppRagWeightResponse
     */
    public function updateMmAppRagWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppRagWeightWithOptions($request, $runtime);
    }

    /**
     * 修改应用承接语开关.
     *
     * @param request - UpdateMmAppTransitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMmAppTransitionResponse
     *
     * @param UpdateMmAppTransitionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMmAppTransitionResponse
     */
    public function updateMmAppTransitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMmAppTransition',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMmAppTransitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用承接语开关.
     *
     * @param request - UpdateMmAppTransitionRequest
     *
     * @returns UpdateMmAppTransitionResponse
     *
     * @param UpdateMmAppTransitionRequest $request
     *
     * @return UpdateMmAppTransitionResponse
     */
    public function updateMmAppTransition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMmAppTransitionWithOptions($request, $runtime);
    }

    /**
     * 变更用户画像配置.
     *
     * @param tmpReq - UpdateProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProfileResponse
     *
     * @param UpdateProfileRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProfileResponse
     */
    public function updateProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributesOperations) {
            $request->attributesOperationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributesOperations, 'AttributesOperations', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->attributesOperationsShrink) {
            @$query['AttributesOperations'] = $request->attributesOperationsShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->userDefinedId) {
            @$query['UserDefinedId'] = $request->userDefinedId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProfile',
            'version' => '2025-09-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更用户画像配置.
     *
     * @param request - UpdateProfileRequest
     *
     * @returns UpdateProfileResponse
     *
     * @param UpdateProfileRequest $request
     *
     * @return UpdateProfileResponse
     */
    public function updateProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProfileWithOptions($request, $runtime);
    }
}
