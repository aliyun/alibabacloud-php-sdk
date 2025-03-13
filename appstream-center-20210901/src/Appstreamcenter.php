<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AccessPageSetAclResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BuySessionPackageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateImageFromAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAccessPageResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponse;
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
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListSessionPackagesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\LogOffAllSessionsInAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyTenantConfigResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RenewAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UnbindResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use AlibabaCloud\Tea\Tea;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AccessPageSetAclResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AccessPageSetAclResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Sets the execution time of an over-the-air (OTA) update task.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApproveOtaTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sets the execution time of an over-the-air (OTA) update task.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AskSessionPackagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AskSessionPackagePriceResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 授权用户
     *  *
     * @param AuthorizeInstanceGroupRequest $tmpReq  AuthorizeInstanceGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeInstanceGroupResponse AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AuthorizeInstanceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userMeta)) {
            $request->userMetaShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userMeta, 'UserMeta', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->authorizeUserIds)) {
            $bodyFlat['AuthorizeUserIds'] = $request->authorizeUserIds;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->unAuthorizeUserIds)) {
            $bodyFlat['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }
        if (!Utils::isUnset($request->userMetaShrink)) {
            $body['UserMeta'] = $request->userMetaShrink;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuthorizeInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BuySessionPackageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BuySessionPackageResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccessPageResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (!Utils::isUnset($request->appPackageType)) {
            $body['AppPackageType'] = $request->appPackageType;
        }
        if (!Utils::isUnset($request->appPolicyId)) {
            $body['AppPolicyId'] = $request->appPolicyId;
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
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
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
        if (!Utils::isUnset($request->subPayType)) {
            $body['SubPayType'] = $request->subPayType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Creates a new image by debugging the delivery group.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateImageFromAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateImageFromAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a new image by debugging the delivery group.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAccessPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccessPageResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *  *
     * @description >  You cannot call this operation to delete a subscription delivery group.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a delivery group that uses the By Resource - Pay-as-you-go billing method.
     *  *
     * @description >  You cannot call this operation to delete a subscription delivery group.
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
     * @summary Deletes an application instance.
     *  *
     * @description Only application instances that are in the Initializing or Idle state can be deleted. The operation can be called only by specific customers.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAppInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application instance.
     *  *
     * @description Only application instances that are in the Initializing or Idle state can be deleted. The operation can be called only by specific customers.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAccessPageSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAccessPageSessionResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Queries the credential that is used to connect to App Streaming.
     *  *
     * @description You must call this operation at least twice to obtain a connection credential.
     * The first time you call this operation, the system assigns an application instance to the specified convenience account and then starts the application. In this case, the ID of the started task, which is indicated by `TaskID`, is returned.
     * In subsequent calls, you must configure `TaskID` to query whether the task is completed. If the value of `TaskStatus` in the response is `Finished`, the connection credential, which is indicated by `Ticket`, is returned.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetConnectionTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the credential that is used to connect to App Streaming.
     *  *
     * @description You must call this operation at least twice to obtain a connection credential.
     * The first time you call this operation, the system assigns an application instance to the specified convenience account and then starts the application. In this case, the ID of the started task, which is indicated by `TaskID`, is returned.
     * In subsequent calls, you must configure `TaskID` to query whether the task is completed. If the value of `TaskStatus` in the response is `Finished`, the connection credential, which is indicated by `Ticket`, is returned.
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
     * @summary Queries information that is used to debug an application instance.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDebugAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDebugAppInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information that is used to debug an application instance.
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
     * @summary Queries the details of an over-the-air (OTA) update task, including the available versions and version description.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOtaTaskByTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an over-the-air (OTA) update task, including the available versions and version description.
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
     * @summary Queries resource prices.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourcePriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries resource prices.
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
     * @summary Queries the renewal prices of App Streaming resources.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourceRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceRenewPriceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the renewal prices of App Streaming resources.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAccessPagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAccessPagesResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Queries the details of multiple delivery groups that meet the query conditions.
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
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of multiple delivery groups that meet the query conditions.
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
     * @summary Queries the details of application instances in a delivery group, including the IDs, status, creation time, update time, session status, and public IP addresses associated with the primary NICs of the instances.
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
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAppInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAppInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of application instances in a delivery group, including the IDs, status, creation time, update time, session status, and public IP addresses associated with the primary NICs of the instances.
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
     * @summary 查询绑定信息，支持分页
     *  *
     * @param ListBindInfoRequest $request ListBindInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBindInfoResponse ListBindInfoResponse
     */
    public function listBindInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appIdList)) {
            $body['AppIdList'] = $request->appIdList;
        }
        if (!Utils::isUnset($request->appInstanceGroupIdList)) {
            $body['AppInstanceGroupIdList'] = $request->appInstanceGroupIdList;
        }
        if (!Utils::isUnset($request->appInstanceIdList)) {
            $body['AppInstanceIdList'] = $request->appInstanceIdList;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $body['UserIdList'] = $request->userIdList;
        }
        if (!Utils::isUnset($request->wyIdList)) {
            $body['WyIdList'] = $request->wyIdList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBindInfo',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListBindInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBindInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询绑定信息，支持分页
     *  *
     * @param ListBindInfoRequest $request ListBindInfoRequest
     *
     * @return ListBindInfoResponse ListBindInfoResponse
     */
    public function listBindInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource types that are available for purchase when you create a delivery group.
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
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->gpu)) {
            $query['Gpu'] = $request->gpu;
        }
        if (!Utils::isUnset($request->gpuMemory)) {
            $query['GpuMemory'] = $request->gpuMemory;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->nodeInstanceType)) {
            $query['NodeInstanceType'] = $request->nodeInstanceType;
        }
        if (!Utils::isUnset($request->nodeInstanceTypeFamily)) {
            $query['NodeInstanceTypeFamily'] = $request->nodeInstanceTypeFamily;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
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
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodeInstanceTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource types that are available for purchase when you create a delivery group.
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
     * @summary 查询节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
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
            'action'      => 'ListNodes',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about over-the-air (OTA) update tasks.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOtaTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about over-the-air (OTA) update tasks.
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
     * @summary Queries the regions that are supported by App Streaming.
     *  *
     * @description >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
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
        if (!Utils::isUnset($request->bizSource)) {
            $query['BizSource'] = $request->bizSource;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the regions that are supported by App Streaming.
     *  *
     * @description >  All supported regions instead of available regions are returned by this operation. For more information, see [Supported regions](https://help.aliyun.com/document_detail/426036.html).
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSessionPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSessionPackagesResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Queries the tags added to one or more cloud resources.
     *  *
     * @param ListTagCloudResourcesRequest $request ListTagCloudResourcesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagCloudResourcesResponse ListTagCloudResourcesResponse
     */
    public function listTagCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagCloudResources',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagCloudResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags added to one or more cloud resources.
     *  *
     * @param ListTagCloudResourcesRequest $request ListTagCloudResourcesRequest
     *
     * @return ListTagCloudResourcesResponse ListTagCloudResourcesResponse
     */
    public function listTagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of the administrator account, such as whether the resource expiration reminder feature is enabled.
     *  *
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTenantConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of the administrator account, such as whether the resource expiration reminder feature is enabled.
     *  *
     * @return ListTenantConfigResponse ListTenantConfigResponse
     */
    public function listTenantConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantConfigWithOptions($runtime);
    }

    /**
     * @summary Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *  *
     * @description >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LogOffAllSessionsInAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Closes all sessions in a pay-as-you-go delivery group for which a scheduled scaling policy is used.
     *  *
     * @description >  This operation can be called only if you use a pay-as-you-go delivery group for which a scheduled scaling policy is used and if you call the operation at a time other than the scheduled time.
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
     * @summary Modifies the general policies of a delivery group, including the number of concurrent sessions and the retention period of disconnected sessions.
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
        if (!Utils::isUnset($request->perSessionPerApp)) {
            $body['PerSessionPerApp'] = $request->perSessionPerApp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the general policies of a delivery group, including the number of concurrent sessions and the retention period of disconnected sessions.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyAppPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAppPolicyResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary 包年包月交付组节点数量升级
     *  *
     * @param ModifyNodePoolAmountRequest $tmpReq  ModifyNodePoolAmountRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNodePoolAmountResponse ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmountWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyNodePoolAmountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodePool)) {
            $request->nodePoolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodePool, 'NodePool', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->nodePoolShrink)) {
            $body['NodePool'] = $request->nodePoolShrink;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolAmount',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyNodePoolAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNodePoolAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 包年包月交付组节点数量升级
     *  *
     * @param ModifyNodePoolAmountRequest $request ModifyNodePoolAmountRequest
     *
     * @return ModifyNodePoolAmountResponse ModifyNodePoolAmountResponse
     */
    public function modifyNodePoolAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAmountWithOptions($request, $runtime);
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNodePoolAttributeResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @summary Modifies the configurations of the administrator account, such as whether to enable the resource expiration reminder feature.
     *  *
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyTenantConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyTenantConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of the administrator account, such as whether to enable the resource expiration reminder feature.
     *  *
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
     * @summary Queries the assigned users that are added to a delivery group by page.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PageListAppInstanceGroupUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the assigned users that are added to a delivery group by page.
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
     * @summary Renews a delivery group.
     *  *
     * @description Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RenewAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenewAppInstanceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Renews a delivery group.
     *  *
     * @description Before you call this operation, make sure that you fully understand the [billing methods and prices](https://help.aliyun.com/document_detail/426039.html) of App Streaming.
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
     * @summary 为云资源创建并绑定标签
     *  *
     * @param TagCloudResourcesRequest $request TagCloudResourcesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return TagCloudResourcesResponse TagCloudResourcesResponse
     */
    public function tagCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagCloudResources',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagCloudResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 为云资源创建并绑定标签
     *  *
     * @param TagCloudResourcesRequest $request TagCloudResourcesRequest
     *
     * @return TagCloudResourcesResponse TagCloudResourcesResponse
     */
    public function tagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds a user and a session.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnbindResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Unbinds a user and a session.
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
     * @summary Removes tags from cloud resources.
     *  *
     * @param UntagCloudResourcesRequest $request UntagCloudResourcesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagCloudResourcesResponse UntagCloudResourcesResponse
     */
    public function untagCloudResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $body['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagCloudResources',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagCloudResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagCloudResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from cloud resources.
     *  *
     * @param UntagCloudResourcesRequest $request UntagCloudResourcesRequest
     *
     * @return UntagCloudResourcesResponse UntagCloudResourcesResponse
     */
    public function untagCloudResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagCloudResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the image of a delivery group.
     *  *
     * @description **
     * **Warning** After the image is updated, the end user session accessing the cloud application will be disconnected. Exercise caution to avoid end user data loss.
     * >  After the image of the delivery group is updated, the change takes effect on the terminal in approximately 2 minutes.
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAppInstanceGroupImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the image of a delivery group.
     *  *
     * @description **
     * **Warning** After the image is updated, the end user session accessing the cloud application will be disconnected. Exercise caution to avoid end user data loss.
     * >  After the image of the delivery group is updated, the change takes effect on the terminal in approximately 2 minutes.
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
