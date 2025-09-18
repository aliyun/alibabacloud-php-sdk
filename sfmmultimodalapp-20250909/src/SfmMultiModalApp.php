<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateCommandShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMmAppShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DeleteMmAppResponse;
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
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PublishMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\PublishMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateCommandShrinkRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppRequest;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppResponse;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppShrinkRequest;
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
}
