<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerResponse;
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
        if (null !== $request->negativePrompt) {
            @$query['NegativePrompt'] = $request->negativePrompt;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
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
}
