<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\OperateAppServiceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerResponse;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 提交创建Logo任务
     *  *
     * @param CreateLogoTaskRequest $request CreateLogoTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLogoTaskResponse CreateLogoTaskResponse
     */
    public function createLogoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->logoVersion)) {
            $query['LogoVersion'] = $request->logoVersion;
        }
        if (!Utils::isUnset($request->negativePrompt)) {
            $query['NegativePrompt'] = $request->negativePrompt;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 提交创建Logo任务
     *  *
     * @param CreateLogoTaskRequest $request CreateLogoTaskRequest
     *
     * @return CreateLogoTaskResponse CreateLogoTaskResponse
     */
    public function createLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogoTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Logo创建任务
     *  *
     * @param GetCreateLogoTaskRequest $request GetCreateLogoTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreateLogoTaskResponse GetCreateLogoTaskResponse
     */
    public function getCreateLogoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询Logo创建任务
     *  *
     * @param GetCreateLogoTaskRequest $request GetCreateLogoTaskRequest
     *
     * @return GetCreateLogoTaskResponse GetCreateLogoTaskResponse
     */
    public function getCreateLogoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateLogoTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴操作应用
     *  *
     * @param OperateAppInstanceForPartnerRequest $request OperateAppInstanceForPartnerRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateAppInstanceForPartnerResponse OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->operateEvent)) {
            $query['OperateEvent'] = $request->operateEvent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 合作伙伴操作应用
     *  *
     * @param OperateAppInstanceForPartnerRequest $request OperateAppInstanceForPartnerRequest
     *
     * @return OperateAppInstanceForPartnerResponse OperateAppInstanceForPartnerResponse
     */
    public function operateAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppInstanceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴操作应用服务
     *  *
     * @param OperateAppServiceForPartnerRequest $request OperateAppServiceForPartnerRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateAppServiceForPartnerResponse OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->extend)) {
            $query['Extend'] = $request->extend;
        }
        if (!Utils::isUnset($request->operateEvent)) {
            $query['OperateEvent'] = $request->operateEvent;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 合作伙伴操作应用服务
     *  *
     * @param OperateAppServiceForPartnerRequest $request OperateAppServiceForPartnerRequest
     *
     * @return OperateAppServiceForPartnerResponse OperateAppServiceForPartnerResponse
     */
    public function operateAppServiceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateAppServiceForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴同步应用实例
     *  *
     * @param SyncAppInstanceForPartnerRequest $tmpReq  SyncAppInstanceForPartnerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncAppInstanceForPartnerResponse SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartnerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncAppInstanceForPartnerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appInstance)) {
            $request->appInstanceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appInstance, 'AppInstance', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInstanceShrink)) {
            $query['AppInstance'] = $request->appInstanceShrink;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->operator)) {
            $query['Operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->sourceBizId)) {
            $query['SourceBizId'] = $request->sourceBizId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 合作伙伴同步应用实例
     *  *
     * @param SyncAppInstanceForPartnerRequest $request SyncAppInstanceForPartnerRequest
     *
     * @return SyncAppInstanceForPartnerResponse SyncAppInstanceForPartnerResponse
     */
    public function syncAppInstanceForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAppInstanceForPartnerWithOptions($request, $runtime);
    }
}
