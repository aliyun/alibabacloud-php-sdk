<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageGetAclRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageGetAclResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackageRenewPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackageRenewPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CancelOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CancelOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAccessPageSessionRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAccessPageSessionResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetDebugAppInstanceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetProjectPoliciesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetProjectPoliciesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourceRenewPriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAccessPagesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\MigrateSessionPackageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\MigrateSessionPackageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyProjectPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyProjectPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RefreshAccessUrlRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RefreshAccessUrlResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewSessionPackageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewSessionPackageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAccessPageStateRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAccessPageStateResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 获取访问管理页配置
     *  *
     * @param AccessPageGetAclRequest $request AccessPageGetAclRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AccessPageGetAclResponse AccessPageGetAclResponse
     */
    public function accessPageGetAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccessPageGetAcl',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AccessPageGetAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取访问管理页配置
     *  *
     * @param AccessPageGetAclRequest $request AccessPageGetAclRequest
     *
     * @return AccessPageGetAclResponse AccessPageGetAclResponse
     */
    public function accessPageGetAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessPageGetAclWithOptions($request, $runtime);
    }

    /**
     * @summary 更新访问管理
     *  *
     * @param AccessPageSetAclRequest $request AccessPageSetAclRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AccessPageSetAclResponse AccessPageSetAclResponse
     */
    public function accessPageSetAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessMode)) {
            $query['AccessMode'] = $request->accessMode;
        }
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        if (!Utils::isUnset($request->accessPageName)) {
            $query['AccessPageName'] = $request->accessPageName;
        }
        if (!Utils::isUnset($request->effectTime)) {
            $query['EffectTime'] = $request->effectTime;
        }
        if (!Utils::isUnset($request->unit)) {
            $query['Unit'] = $request->unit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccessPageSetAcl',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AccessPageSetAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新访问管理
     *  *
     * @param AccessPageSetAclRequest $request AccessPageSetAclRequest
     *
     * @return AccessPageSetAclResponse AccessPageSetAclResponse
     */
    public function accessPageSetAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessPageSetAclWithOptions($request, $runtime);
    }

    /**
     * @summary 同意Ota升级
     *  *
     * @param ApproveOtaTaskRequest $request ApproveOtaTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveOtaTaskResponse ApproveOtaTaskResponse
     */
    public function approveOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->otaType)) {
            $body['OtaType'] = $request->otaType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同意Ota升级
     *  *
     * @param ApproveOtaTaskRequest $request ApproveOtaTaskRequest
     *
     * @return ApproveOtaTaskResponse ApproveOtaTaskResponse
     */
    public function approveOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 会话包收费查询
     *  *
     * @param AskSessionPackagePriceRequest $request AskSessionPackagePriceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AskSessionPackagePriceResponse AskSessionPackagePriceResponse
     */
    public function askSessionPackagePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->maxSessions)) {
            $query['MaxSessions'] = $request->maxSessions;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sessionPackageType)) {
            $query['SessionPackageType'] = $request->sessionPackageType;
        }
        if (!Utils::isUnset($request->sessionSpec)) {
            $query['SessionSpec'] = $request->sessionSpec;
        }
        if (!Utils::isUnset($request->sessionType)) {
            $query['SessionType'] = $request->sessionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AskSessionPackagePrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AskSessionPackagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话包收费查询
     *  *
     * @param AskSessionPackagePriceRequest $request AskSessionPackagePriceRequest
     *
     * @return AskSessionPackagePriceResponse AskSessionPackagePriceResponse
     */
    public function askSessionPackagePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->askSessionPackagePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 会话包续费询价
     *  *
     * @param AskSessionPackageRenewPriceRequest $request AskSessionPackageRenewPriceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AskSessionPackageRenewPriceResponse AskSessionPackageRenewPriceResponse
     */
    public function askSessionPackageRenewPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->sessionPackageId)) {
            $query['SessionPackageId'] = $request->sessionPackageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AskSessionPackageRenewPrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AskSessionPackageRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话包续费询价
     *  *
     * @param AskSessionPackageRenewPriceRequest $request AskSessionPackageRenewPriceRequest
     *
     * @return AskSessionPackageRenewPriceResponse AskSessionPackageRenewPriceResponse
     */
    public function askSessionPackageRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->askSessionPackageRenewPriceWithOptions($request, $runtime);
    }

    /**
     * @summary 授权用户
     *  *
     * @param AuthorizeInstanceGroupRequest $request AuthorizeInstanceGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeInstanceGroupResponse AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->authorizeUserIds)) {
            $body['AuthorizeUserIds'] = $request->authorizeUserIds;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->unAuthorizeUserIds)) {
            $body['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 授权用户
     *  *
     * @param AuthorizeInstanceGroupRequest $request AuthorizeInstanceGroupRequest
     *
     * @return AuthorizeInstanceGroupResponse AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 配置会话包
     *  *
     * @param BuySessionPackageRequest $request BuySessionPackageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BuySessionPackageResponse BuySessionPackageResponse
     */
    public function buySessionPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->maxSessions)) {
            $query['MaxSessions'] = $request->maxSessions;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sessionPackageName)) {
            $query['SessionPackageName'] = $request->sessionPackageName;
        }
        if (!Utils::isUnset($request->sessionPackageType)) {
            $query['SessionPackageType'] = $request->sessionPackageType;
        }
        if (!Utils::isUnset($request->sessionSpec)) {
            $query['SessionSpec'] = $request->sessionSpec;
        }
        if (!Utils::isUnset($request->sessionType)) {
            $query['SessionType'] = $request->sessionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BuySessionPackage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BuySessionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置会话包
     *  *
     * @param BuySessionPackageRequest $request BuySessionPackageRequest
     *
     * @return BuySessionPackageResponse BuySessionPackageResponse
     */
    public function buySessionPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->buySessionPackageWithOptions($request, $runtime);
    }

    /**
     * @summary 取消Ota升级
     *  *
     * @param CancelOtaTaskRequest $request CancelOtaTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelOtaTaskResponse CancelOtaTaskResponse
     */
    public function cancelOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消Ota升级
     *  *
     * @param CancelOtaTaskRequest $request CancelOtaTaskRequest
     *
     * @return CancelOtaTaskResponse CancelOtaTaskResponse
     */
    public function cancelOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建访问页面
     *  *
     * @param CreateAccessPageRequest $request CreateAccessPageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccessPageResponse CreateAccessPageResponse
     */
    public function createAccessPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageName)) {
            $query['AccessPageName'] = $request->accessPageName;
        }
        if (!Utils::isUnset($request->cloudEnvId)) {
            $query['CloudEnvId'] = $request->cloudEnvId;
        }
        if (!Utils::isUnset($request->effectTime)) {
            $query['EffectTime'] = $request->effectTime;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->unit)) {
            $query['Unit'] = $request->unit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccessPage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建访问页面
     *  *
     * @param CreateAccessPageRequest $request CreateAccessPageRequest
     *
     * @return CreateAccessPageResponse CreateAccessPageResponse
     */
    public function createAccessPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccessPageWithOptions($request, $runtime);
    }

    /**
     * @summary 创建云应用交付组
     *  *
     * @param CreateAppInstanceGroupRequest $tmpReq  CreateAppInstanceGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppInstanceGroupResponse CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppInstanceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->network)) {
            $request->networkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodePool)) {
            $request->nodePoolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }
        if (!Utils::isUnset($tmpReq->runtimePolicy)) {
            $request->runtimePolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->runtimePolicy, 'RuntimePolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityPolicy)) {
            $request->securityPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->storagePolicy)) {
            $request->storagePolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->userDefinePolicy)) {
            $request->userDefinePolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userDefinePolicy, 'UserDefinePolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoPolicy)) {
            $request->videoPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userDefinePolicyShrink)) {
            $query['UserDefinePolicy'] = $request->userDefinePolicyShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $body['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $body['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeResourceMode)) {
            $body['ChargeResourceMode'] = $request->chargeResourceMode;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->networkShrink)) {
            $body['Network'] = $request->networkShrink;
        }
        if (!Utils::isUnset($request->nodePoolShrink)) {
            $body['NodePool'] = $request->nodePoolShrink;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->preOpenAppId)) {
            $body['PreOpenAppId'] = $request->preOpenAppId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $body['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->runtimePolicyShrink)) {
            $body['RuntimePolicy'] = $request->runtimePolicyShrink;
        }
        if (!Utils::isUnset($request->securityPolicyShrink)) {
            $body['SecurityPolicy'] = $request->securityPolicyShrink;
        }
        if (!Utils::isUnset($request->sessionTimeout)) {
            $body['SessionTimeout'] = $request->sessionTimeout;
        }
        if (!Utils::isUnset($request->storagePolicyShrink)) {
            $body['StoragePolicy'] = $request->storagePolicyShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        if (!Utils::isUnset($request->videoPolicyShrink)) {
            $body['VideoPolicy'] = $request->videoPolicyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建云应用交付组
     *  *
     * @param CreateAppInstanceGroupRequest $request CreateAppInstanceGroupRequest
     *
     * @return CreateAppInstanceGroupResponse CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary CreateImageFromAppInstanceGroup
     *  *
     * @param CreateImageFromAppInstanceGroupRequest $request CreateImageFromAppInstanceGroupRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageFromAppInstanceGroupResponse CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCenterImageName)) {
            $body['AppCenterImageName'] = $request->appCenterImageName;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateImageFromAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageFromAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary CreateImageFromAppInstanceGroup
     *  *
     * @param CreateImageFromAppInstanceGroupRequest $request CreateImageFromAppInstanceGroupRequest
     *
     * @return CreateImageFromAppInstanceGroupResponse CreateImageFromAppInstanceGroupResponse
     */
    public function createImageFromAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageFromAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clipboard)) {
            $query['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->cloudEnvId)) {
            $query['CloudEnvId'] = $request->cloudEnvId;
        }
        if (!Utils::isUnset($request->contentId)) {
            $query['ContentId'] = $request->contentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileTransfer)) {
            $query['FileTransfer'] = $request->fileTransfer;
        }
        if (!Utils::isUnset($request->frameRate)) {
            $query['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->keepAliveDuration)) {
            $query['KeepAliveDuration'] = $request->keepAliveDuration;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sessionResolutionHeight)) {
            $query['SessionResolutionHeight'] = $request->sessionResolutionHeight;
        }
        if (!Utils::isUnset($request->sessionResolutionWidth)) {
            $query['SessionResolutionWidth'] = $request->sessionResolutionWidth;
        }
        if (!Utils::isUnset($request->sessionSpec)) {
            $query['SessionSpec'] = $request->sessionSpec;
        }
        if (!Utils::isUnset($request->streamingMode)) {
            $query['StreamingMode'] = $request->streamingMode;
        }
        if (!Utils::isUnset($request->terminalResolutionAdaptation)) {
            $query['TerminalResolutionAdaptation'] = $request->terminalResolutionAdaptation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建项目
     *  *
     * @param CreateProjectRequest $request CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 删除访问页面
     *  *
     * @param DeleteAccessPageRequest $request DeleteAccessPageRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccessPageResponse DeleteAccessPageResponse
     */
    public function deleteAccessPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccessPage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除访问页面
     *  *
     * @param DeleteAccessPageRequest $request DeleteAccessPageRequest
     *
     * @return DeleteAccessPageResponse DeleteAccessPageResponse
     */
    public function deleteAccessPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccessPageWithOptions($request, $runtime);
    }

    /**
     * @summary 实例组释放接口
     *  *
     * @param DeleteAppInstanceGroupRequest $request DeleteAppInstanceGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppInstanceGroupResponse DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实例组释放接口
     *  *
     * @param DeleteAppInstanceGroupRequest $request DeleteAppInstanceGroupRequest
     *
     * @return DeleteAppInstanceGroupResponse DeleteAppInstanceGroupResponse
     */
    public function deleteAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除实例
     *  *
     * @param DeleteAppInstancesRequest $request DeleteAppInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppInstancesResponse DeleteAppInstancesResponse
     */
    public function deleteAppInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceIds)) {
            $body['AppInstanceIds'] = $request->appInstanceIds;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppInstances',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实例
     *  *
     * @param DeleteAppInstancesRequest $request DeleteAppInstancesRequest
     *
     * @return DeleteAppInstancesResponse DeleteAppInstancesResponse
     */
    public function deleteAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 删除项目
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除项目
     *  *
     * @param DeleteProjectRequest $request DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @summary 访客进入访问页面的匿名api
     *  *
     * @param GetAccessPageSessionRequest $request GetAccessPageSessionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccessPageSessionResponse GetAccessPageSessionResponse
     */
    public function getAccessPageSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        if (!Utils::isUnset($request->accessPageToken)) {
            $query['AccessPageToken'] = $request->accessPageToken;
        }
        if (!Utils::isUnset($request->externalUserId)) {
            $query['ExternalUserId'] = $request->externalUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccessPageSession',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccessPageSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 访客进入访问页面的匿名api
     *  *
     * @param GetAccessPageSessionRequest $request GetAccessPageSessionRequest
     *
     * @return GetAccessPageSessionResponse GetAccessPageSessionResponse
     */
    public function getAccessPageSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessPageSessionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取交付组详情
     *  *
     * @param GetAppInstanceGroupRequest $request GetAppInstanceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppInstanceGroupResponse GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取交付组详情
     *  *
     * @param GetAppInstanceGroupRequest $request GetAppInstanceGroupRequest
     *
     * @return GetAppInstanceGroupResponse GetAppInstanceGroupResponse
     */
    public function getAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 获取连接ticket，Open API
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceGroupIdList)) {
            $body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $body['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->appInstancePersistentId)) {
            $body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }
        if (!Utils::isUnset($request->appStartParam)) {
            $body['AppStartParam'] = $request->appStartParam;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionTicket',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取连接ticket，Open API
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @summary GetDebugAppInstance
     *  *
     * @param GetDebugAppInstanceRequest $request GetDebugAppInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDebugAppInstanceResponse GetDebugAppInstanceResponse
     */
    public function getDebugAppInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDebugAppInstance',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDebugAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetDebugAppInstance
     *  *
     * @param GetDebugAppInstanceRequest $request GetDebugAppInstanceRequest
     *
     * @return GetDebugAppInstanceResponse GetDebugAppInstanceResponse
     */
    public function getDebugAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDebugAppInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取ota任务明细
     *  *
     * @param GetOtaTaskByTaskIdRequest $request GetOtaTaskByTaskIdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOtaTaskByTaskIdResponse GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOtaTaskByTaskId',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取ota任务明细
     *  *
     * @param GetOtaTaskByTaskIdRequest $request GetOtaTaskByTaskIdRequest
     *
     * @return GetOtaTaskByTaskIdResponse GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOtaTaskByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取策略配置
     *  *
     * @param GetProjectPoliciesRequest $request GetProjectPoliciesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectPoliciesResponse GetProjectPoliciesResponse
     */
    public function getProjectPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectPolicies',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取策略配置
     *  *
     * @param GetProjectPoliciesRequest $request GetProjectPoliciesRequest
     *
     * @return GetProjectPoliciesResponse GetProjectPoliciesResponse
     */
    public function getProjectPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectPoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary 云应用资源询价接口
     *  *
     * @param GetResourcePriceRequest $request GetResourcePriceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourcePriceResponse GetResourcePriceResponse
     */
    public function getResourcePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->appInstanceType)) {
            $query['AppInstanceType'] = $request->appInstanceType;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->nodeInstanceType)) {
            $query['NodeInstanceType'] = $request->nodeInstanceType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云应用资源询价接口
     *  *
     * @param GetResourcePriceRequest $request GetResourcePriceRequest
     *
     * @return GetResourcePriceResponse GetResourcePriceResponse
     */
    public function getResourcePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 云应用资源询价接口
     *  *
     * @param GetResourceRenewPriceRequest $request GetResourceRenewPriceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceRenewPriceResponse GetResourceRenewPriceResponse
     */
    public function getResourceRenewPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceRenewPrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云应用资源询价接口
     *  *
     * @param GetResourceRenewPriceRequest $request GetResourceRenewPriceRequest
     *
     * @return GetResourceRenewPriceResponse GetResourceRenewPriceResponse
     */
    public function getResourceRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceRenewPriceWithOptions($request, $runtime);
    }

    /**
     * @summary 访问页面分页查询
     *  *
     * @param ListAccessPagesRequest $request ListAccessPagesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccessPagesResponse ListAccessPagesResponse
     */
    public function listAccessPagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        if (!Utils::isUnset($request->accessPageName)) {
            $query['AccessPageName'] = $request->accessPageName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccessPages',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccessPagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 访问页面分页查询
     *  *
     * @param ListAccessPagesRequest $request ListAccessPagesRequest
     *
     * @return ListAccessPagesResponse ListAccessPagesResponse
     */
    public function listAccessPages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccessPagesWithOptions($request, $runtime);
    }

    /**
     * @summary 列表展示云应用交付组
     *  *
     * @param ListAppInstanceGroupRequest $request ListAppInstanceGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppInstanceGroupResponse ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $query['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->nodeInstanceType)) {
            $query['NodeInstanceType'] = $request->nodeInstanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列表展示云应用交付组
     *  *
     * @param ListAppInstanceGroupRequest $request ListAppInstanceGroupRequest
     *
     * @return ListAppInstanceGroupResponse ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询交付组内实例列表
     *  *
     * @param ListAppInstancesRequest $request ListAppInstancesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppInstancesResponse ListAppInstancesResponse
     */
    public function listAppInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->includeDeleted)) {
            $query['IncludeDeleted'] = $request->includeDeleted;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->appInstanceIdList)) {
            $body['AppInstanceIdList'] = $request->appInstanceIdList;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstances',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询交付组内实例列表
     *  *
     * @param ListAppInstancesRequest $request ListAppInstancesRequest
     *
     * @return ListAppInstancesResponse ListAppInstancesResponse
     */
    public function listAppInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取资源规格
     *  *
     * @param ListNodeInstanceTypeRequest $request ListNodeInstanceTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeInstanceTypeResponse ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->nodeInstanceType)) {
            $query['NodeInstanceType'] = $request->nodeInstanceType;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeInstanceType',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源规格
     *  *
     * @param ListNodeInstanceTypeRequest $request ListNodeInstanceTypeRequest
     *
     * @return ListNodeInstanceTypeResponse ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 升级历史记录
     *  *
     * @param ListOtaTaskRequest $request ListOtaTaskRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOtaTaskResponse ListOtaTaskResponse
     */
    public function listOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->otaType)) {
            $body['OtaType'] = $request->otaType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 升级历史记录
     *  *
     * @param ListOtaTaskRequest $request ListOtaTaskRequest
     *
     * @return ListOtaTaskResponse ListOtaTaskResponse
     */
    public function listOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 获取项目列表
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->stateList)) {
            $query['StateList'] = $request->stateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目列表
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 云应用支持的地域列表
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云应用支持的地域列表
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 项目的会话包列表
     *  *
     * @param ListSessionPackagesRequest $request ListSessionPackagesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSessionPackagesResponse ListSessionPackagesResponse
     */
    public function listSessionPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sessionPackageId)) {
            $query['SessionPackageId'] = $request->sessionPackageId;
        }
        if (!Utils::isUnset($request->sessionPackageName)) {
            $query['SessionPackageName'] = $request->sessionPackageName;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->stateList)) {
            $query['StateList'] = $request->stateList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSessionPackages',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSessionPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 项目的会话包列表
     *  *
     * @param ListSessionPackagesRequest $request ListSessionPackagesRequest
     *
     * @return ListSessionPackagesResponse ListSessionPackagesResponse
     */
    public function listSessionPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSessionPackagesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTenantConfigResponse ListTenantConfigResponse
     */
    public function listTenantConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListTenantConfig',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListTenantConfigResponse ListTenantConfigResponse
     */
    public function listTenantConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantConfigWithOptions($runtime);
    }

    /**
     * @summary 注销交付下所有会话
     *  *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request LogOffAllSessionsInAppInstanceGroupRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LogOffAllSessionsInAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注销交付下所有会话
     *  *
     * @param LogOffAllSessionsInAppInstanceGroupRequest $request LogOffAllSessionsInAppInstanceGroupRequest
     *
     * @return LogOffAllSessionsInAppInstanceGroupResponse LogOffAllSessionsInAppInstanceGroupResponse
     */
    public function logOffAllSessionsInAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logOffAllSessionsInAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 会话包 迁移/分配
     *  *
     * @param MigrateSessionPackageRequest $request MigrateSessionPackageRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateSessionPackageResponse MigrateSessionPackageResponse
     */
    public function migrateSessionPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destProjectId)) {
            $body['DestProjectId'] = $request->destProjectId;
        }
        if (!Utils::isUnset($request->sessionPackageId)) {
            $body['SessionPackageId'] = $request->sessionPackageId;
        }
        if (!Utils::isUnset($request->sourceProjectId)) {
            $body['SourceProjectId'] = $request->sourceProjectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MigrateSessionPackage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateSessionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话包 迁移/分配
     *  *
     * @param MigrateSessionPackageRequest $request MigrateSessionPackageRequest
     *
     * @return MigrateSessionPackageResponse MigrateSessionPackageResponse
     */
    public function migrateSessionPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateSessionPackageWithOptions($request, $runtime);
    }

    /**
     * @summary 修改云应用交付组
     *  *
     * @param ModifyAppInstanceGroupAttributeRequest $tmpReq  ModifyAppInstanceGroupAttributeRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppInstanceGroupAttributeResponse ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppInstanceGroupAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->network)) {
            $request->networkShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->network, 'Network', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodePool)) {
            $request->nodePoolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityPolicy)) {
            $request->securityPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->storagePolicy)) {
            $request->storagePolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storagePolicy, 'StoragePolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->nodePoolShrink)) {
            $query['NodePool'] = $request->nodePoolShrink;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sessionTimeout)) {
            $query['SessionTimeout'] = $request->sessionTimeout;
        }
        $body = [];
        if (!Utils::isUnset($request->networkShrink)) {
            $body['Network'] = $request->networkShrink;
        }
        if (!Utils::isUnset($request->preOpenAppId)) {
            $body['PreOpenAppId'] = $request->preOpenAppId;
        }
        if (!Utils::isUnset($request->preOpenMode)) {
            $body['PreOpenMode'] = $request->preOpenMode;
        }
        if (!Utils::isUnset($request->securityPolicyShrink)) {
            $body['SecurityPolicy'] = $request->securityPolicyShrink;
        }
        if (!Utils::isUnset($request->storagePolicyShrink)) {
            $body['StoragePolicy'] = $request->storagePolicyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppInstanceGroupAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改云应用交付组
     *  *
     * @param ModifyAppInstanceGroupAttributeRequest $request ModifyAppInstanceGroupAttributeRequest
     *
     * @return ModifyAppInstanceGroupAttributeResponse ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改策略信息
     *  *
     * @param ModifyAppPolicyRequest $tmpReq  ModifyAppPolicyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAppPolicyResponse ModifyAppPolicyResponse
     */
    public function modifyAppPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->videoPolicy)) {
            $request->videoPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoPolicy, 'VideoPolicy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appPolicyId)) {
            $query['AppPolicyId'] = $request->appPolicyId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->videoPolicyShrink)) {
            $query['VideoPolicy'] = $request->videoPolicyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppPolicy',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改策略信息
     *  *
     * @param ModifyAppPolicyRequest $request ModifyAppPolicyRequest
     *
     * @return ModifyAppPolicyResponse ModifyAppPolicyResponse
     */
    public function modifyAppPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNodePoolAttributeRequest $tmpReq  ModifyNodePoolAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodePoolAttributeResponse ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyNodePoolAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodePoolStrategy)) {
            $request->nodePoolStrategyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodePoolStrategy, 'NodePoolStrategy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->nodeCapacity)) {
            $body['NodeCapacity'] = $request->nodeCapacity;
        }
        if (!Utils::isUnset($request->nodePoolStrategyShrink)) {
            $body['NodePoolStrategy'] = $request->nodePoolStrategyShrink;
        }
        if (!Utils::isUnset($request->poolId)) {
            $body['PoolId'] = $request->poolId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNodePoolAttributeRequest $request ModifyNodePoolAttributeRequest
     *
     * @return ModifyNodePoolAttributeResponse ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary 修改项目策略
     *  *
     * @param ModifyProjectPolicyRequest $request ModifyProjectPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyProjectPolicyResponse ModifyProjectPolicyResponse
     */
    public function modifyProjectPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clipboard)) {
            $query['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->fileTransfer)) {
            $query['FileTransfer'] = $request->fileTransfer;
        }
        if (!Utils::isUnset($request->frameRate)) {
            $query['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->keepAliveDuration)) {
            $query['KeepAliveDuration'] = $request->keepAliveDuration;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sessionResolutionHeight)) {
            $query['SessionResolutionHeight'] = $request->sessionResolutionHeight;
        }
        if (!Utils::isUnset($request->sessionResolutionWidth)) {
            $query['SessionResolutionWidth'] = $request->sessionResolutionWidth;
        }
        if (!Utils::isUnset($request->streamingMode)) {
            $query['StreamingMode'] = $request->streamingMode;
        }
        if (!Utils::isUnset($request->terminalResolutionAdaptation)) {
            $query['TerminalResolutionAdaptation'] = $request->terminalResolutionAdaptation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyProjectPolicy',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyProjectPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改项目策略
     *  *
     * @param ModifyProjectPolicyRequest $request ModifyProjectPolicyRequest
     *
     * @return ModifyProjectPolicyResponse ModifyProjectPolicyResponse
     */
    public function modifyProjectPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProjectPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantConfigRequest $request ModifyTenantConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTenantConfigResponse ModifyTenantConfigResponse
     */
    public function modifyTenantConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupExpireRemind)) {
            $body['AppInstanceGroupExpireRemind'] = $request->appInstanceGroupExpireRemind;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantConfig',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantConfigRequest $request ModifyTenantConfigRequest
     *
     * @return ModifyTenantConfigResponse ModifyTenantConfigResponse
     */
    public function modifyTenantConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取授权用户列表
     *  *
     * @param PageListAppInstanceGroupUserRequest $request PageListAppInstanceGroupUserRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return PageListAppInstanceGroupUserResponse PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageListAppInstanceGroupUser',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取授权用户列表
     *  *
     * @param PageListAppInstanceGroupUserRequest $request PageListAppInstanceGroupUserRequest
     *
     * @return PageListAppInstanceGroupUserResponse PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListAppInstanceGroupUserWithOptions($request, $runtime);
    }

    /**
     * @summary 刷新访问url
     *  *
     * @param RefreshAccessUrlRequest $request RefreshAccessUrlRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshAccessUrlResponse RefreshAccessUrlResponse
     */
    public function refreshAccessUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshAccessUrl',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshAccessUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 刷新访问url
     *  *
     * @param RefreshAccessUrlRequest $request RefreshAccessUrlRequest
     *
     * @return RefreshAccessUrlResponse RefreshAccessUrlResponse
     */
    public function refreshAccessUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAccessUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 资源续费接口
     *  *
     * @param RenewAppInstanceGroupRequest $request RenewAppInstanceGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewAppInstanceGroupResponse RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 资源续费接口
     *  *
     * @param RenewAppInstanceGroupRequest $request RenewAppInstanceGroupRequest
     *
     * @return RenewAppInstanceGroupResponse RenewAppInstanceGroupResponse
     */
    public function renewAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 会话包续费
     *  *
     * @param RenewSessionPackageRequest $request RenewSessionPackageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewSessionPackageResponse RenewSessionPackageResponse
     */
    public function renewSessionPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->sessionPackageId)) {
            $query['SessionPackageId'] = $request->sessionPackageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewSessionPackage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewSessionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会话包续费
     *  *
     * @param RenewSessionPackageRequest $request RenewSessionPackageRequest
     *
     * @return RenewSessionPackageResponse RenewSessionPackageResponse
     */
    public function renewSessionPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewSessionPackageWithOptions($request, $runtime);
    }

    /**
     * @summary 解除用户绑定
     *  *
     * @param UnbindRequest  $request UnbindRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindResponse UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $body['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->appInstancePersistentId)) {
            $body['AppInstancePersistentId'] = $request->appInstancePersistentId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Unbind',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解除用户绑定
     *  *
     * @param UnbindRequest $request UnbindRequest
     *
     * @return UnbindResponse UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }

    /**
     * @summary 更新访问页面状态
     *  *
     * @param UpdateAccessPageStateRequest $request UpdateAccessPageStateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccessPageStateResponse UpdateAccessPageStateResponse
     */
    public function updateAccessPageStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPageId)) {
            $query['AccessPageId'] = $request->accessPageId;
        }
        if (!Utils::isUnset($request->accessPageState)) {
            $query['AccessPageState'] = $request->accessPageState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccessPageState',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccessPageStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新访问页面状态
     *  *
     * @param UpdateAccessPageStateRequest $request UpdateAccessPageStateRequest
     *
     * @return UpdateAccessPageStateResponse UpdateAccessPageStateResponse
     */
    public function updateAccessPageState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccessPageStateWithOptions($request, $runtime);
    }

    /**
     * @summary 更新镜像
     *  *
     * @param UpdateAppInstanceGroupImageRequest $request UpdateAppInstanceGroupImageRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppInstanceGroupImageResponse UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $query['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppInstanceGroupImage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新镜像
     *  *
     * @param UpdateAppInstanceGroupImageRequest $request UpdateAppInstanceGroupImageRequest
     *
     * @return UpdateAppInstanceGroupImageResponse UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInstanceGroupImageWithOptions($request, $runtime);
    }
}
