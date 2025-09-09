<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetIcpFilingInfoForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SearchImageShrinkRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WebsiteBuild extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('websitebuild', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 提交创建Logo任务
     *
     * @param request - CreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->logoVersion) {
            @$query['LogoVersion'] = $request->logoVersion;
        }

        if (null !== $request->negativePrompt) {
            @$query['NegativePrompt'] = $request->negativePrompt;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交创建Logo任务
     *
     * @param request - CreateLogoTaskRequest
     *
     * @returns CreateLogoTaskResponse
     *
     * @param CreateLogoTaskRequest $request
     *
     * @return CreateLogoTaskResponse
     */
    public function createLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogoTaskWithOptions($request, $runtime);
    }

    /**
     * 查询Logo创建任务
     *
     * @param request - GetCreateLogoTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreateLogoTask',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreateLogoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Logo创建任务
     *
     * @param request - GetCreateLogoTaskRequest
     *
     * @returns GetCreateLogoTaskResponse
     *
     * @param GetCreateLogoTaskRequest $request
     *
     * @return GetCreateLogoTaskResponse
     */
    public function getCreateLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateLogoTaskWithOptions($request, $runtime);
    }

    /**
     * 查询域名备案信息.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIcpFilingInfoForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIcpFilingInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名备案信息.
     *
     * @param request - GetIcpFilingInfoForPartnerRequest
     *
     * @returns GetIcpFilingInfoForPartnerResponse
     *
     * @param GetIcpFilingInfoForPartnerRequest $request
     *
     * @return GetIcpFilingInfoForPartnerResponse
     */
    public function getIcpFilingInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIcpFilingInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴获取用户SLR角色授权临时凭证
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPurpose) {
            @$query['AuthPurpose'] = $request->authPurpose;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->serviceLinkedRole) {
            @$query['ServiceLinkedRole'] = $request->serviceLinkedRole;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserTmpIdentityForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserTmpIdentityForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴获取用户SLR角色授权临时凭证
     *
     * @param request - GetUserTmpIdentityForPartnerRequest
     *
     * @returns GetUserTmpIdentityForPartnerResponse
     *
     * @param GetUserTmpIdentityForPartnerRequest $request
     *
     * @return GetUserTmpIdentityForPartnerResponse
     */
    public function getUserTmpIdentityForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTmpIdentityForPartnerWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴操作应用.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴操作应用.
     *
     * @param request - OperateAppInstanceForPartnerRequest
     *
     * @returns OperateAppInstanceForPartnerResponse
     *
     * @param OperateAppInstanceForPartnerRequest $request
     *
     * @return OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴操作应用服务
     *
     * @param request - OperateAppServiceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->extend) {
            @$query['Extend'] = $request->extend;
        }

        if (null !== $request->operateEvent) {
            @$query['OperateEvent'] = $request->operateEvent;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateAppServiceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateAppServiceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴操作应用服务
     *
     * @param request - OperateAppServiceForPartnerRequest
     *
     * @returns OperateAppServiceForPartnerResponse
     *
     * @param OperateAppServiceForPartnerRequest $request
     *
     * @return OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppServiceForPartnerWithOptions($request, $runtime);
    }

    /**
     * 图片检索.
     *
     * @param tmpReq - SearchImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'simple');
        }

        $query = [];
        if (null !== $request->colorHex) {
            @$query['ColorHex'] = $request->colorHex;
        }

        if (null !== $request->hasPerson) {
            @$query['HasPerson'] = $request->hasPerson;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->imageRatio) {
            @$query['ImageRatio'] = $request->imageRatio;
        }

        if (null !== $request->maxHeight) {
            @$query['MaxHeight'] = $request->maxHeight;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->maxWidth) {
            @$query['MaxWidth'] = $request->maxWidth;
        }

        if (null !== $request->minHeight) {
            @$query['MinHeight'] = $request->minHeight;
        }

        if (null !== $request->minWidth) {
            @$query['MinWidth'] = $request->minWidth;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ossKey) {
            @$query['OssKey'] = $request->ossKey;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchImage',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片检索.
     *
     * @param request - SearchImageRequest
     *
     * @returns SearchImageResponse
     *
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴同步应用实例.
     *
     * @param tmpReq - SyncAppInstanceForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartnerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncAppInstanceForPartnerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appInstance) {
            $request->appInstanceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appInstance, 'AppInstance', 'json');
        }

        $query = [];
        if (null !== $request->appInstanceShrink) {
            @$query['AppInstance'] = $request->appInstanceShrink;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->operator) {
            @$query['Operator'] = $request->operator;
        }

        if (null !== $request->sourceBizId) {
            @$query['SourceBizId'] = $request->sourceBizId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncAppInstanceForPartner',
            'version' => '2025-04-29',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncAppInstanceForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴同步应用实例.
     *
     * @param request - SyncAppInstanceForPartnerRequest
     *
     * @returns SyncAppInstanceForPartnerResponse
     *
     * @param SyncAppInstanceForPartnerRequest $request
     *
     * @return SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAppInstanceForPartnerWithOptions($request, $runtime);
    }
}
