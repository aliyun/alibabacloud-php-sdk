<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\AddApListToApgroupRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\AddApListToApgroupResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\AddApListToApgroupShrinkRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DelApThirdAppRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DelApThirdAppResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupThirdAppRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApgroupThirdAppResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteApSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\DeleteNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EditApgroupThirdAppRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EditApgroupThirdAppResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\EffectApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetAntStaStatusByMacRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetAntStaStatusByMacResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAddressByMacRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAddressByMacResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAssetRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApAssetResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailedConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailedConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailStatusRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApDetailStatusResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupConfigByIdentityRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupConfigByIdentityResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupDetailedConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupDetailedConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupIdRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupIdResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApgroupSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApInfoFromPoolRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApInfoFromPoolResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApRunHistoryTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApRunHistoryTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApStatusByGroupIdRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetApStatusByGroupIdResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetBatchTaskProgressRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetBatchTaskProgressResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetGroupMiscAggTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetGroupMiscAggTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoWithSizeRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetNetDeviceInfoWithSizeResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetPageVisitDataRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetPageVisitDataResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetRadioRunHistoryTimeSerRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetRadioRunHistoryTimeSerResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaDetailedStatusByMacRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaDetailedStatusByMacResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaStatusListByApRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\GetStaStatusListByApResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\JudgeXingTianBusinessRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\JudgeXingTianBusinessResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickAntStaRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickAntStaResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickStaRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\KickStaResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListApgroupDescendantRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListApgroupDescendantResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersWithSizeRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersWithSizeResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewApgroupConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewApgroupConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewJobOrderRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewJobOrderResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewJobOrderShrinkRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\NewNetDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\PutAppConfigAndSaveRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\PutAppConfigAndSaveResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\QueryJobOrderRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\QueryJobOrderResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RebootApRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RebootApResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RegisterApAssetRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RegisterApAssetResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RepairApRadioRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\RepairApRadioResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApBasicConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApBasicConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupBasicConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupBasicConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupPortalConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupPortalConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupPortalConfigShrinkRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApgroupSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApPortalConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApPortalConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApPortalConfigShrinkRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApRadioConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApRadioConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApSsidConfigRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApSsidConfigResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApThirdAppRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SaveApThirdAppResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApAddressRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApAddressResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApNameRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\SetApNameResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UnRegisterApAssetRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UnRegisterApAssetResponse;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UpdateNetDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UpdateNetDeviceInfoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudwifipop extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'cloudwf.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudwifi-pop', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param tmpReq - AddApListToApgroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddApListToApgroupResponse
     *
     * @param AddApListToApgroupRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AddApListToApgroupResponse
     */
    public function addApListToApgroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddApListToApgroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->apMacList) {
            $request->apMacListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->apMacList, 'ApMacList', 'json');
        }

        $query = [];
        if (null !== $request->apGroupId) {
            @$query['ApGroupId'] = $request->apGroupId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $body = [];
        if (null !== $request->apMacListShrink) {
            @$body['ApMacList'] = $request->apMacListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddApListToApgroup',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddApListToApgroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddApListToApgroupRequest
     *
     * @returns AddApListToApgroupResponse
     *
     * @param AddApListToApgroupRequest $request
     *
     * @return AddApListToApgroupResponse
     */
    public function addApListToApgroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApListToApgroupWithOptions($request, $runtime);
    }

    /**
     * 删除设备的三方app.
     *
     * @param request - DelApThirdAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DelApThirdAppResponse
     *
     * @param DelApThirdAppRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DelApThirdAppResponse
     */
    public function delApThirdAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apAssetId) {
            @$query['ApAssetId'] = $request->apAssetId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DelApThirdApp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelApThirdAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除设备的三方app.
     *
     * @param request - DelApThirdAppRequest
     *
     * @returns DelApThirdAppResponse
     *
     * @param DelApThirdAppRequest $request
     *
     * @return DelApThirdAppResponse
     */
    public function delApThirdApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delApThirdAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteApSsidConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApSsidConfigResponse
     *
     * @param DeleteApSsidConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteApSsidConfigResponse
     */
    public function deleteApSsidConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->radioIndex) {
            @$query['RadioIndex'] = $request->radioIndex;
        }

        if (null !== $request->ssid) {
            @$query['Ssid'] = $request->ssid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApSsidConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApSsidConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteApSsidConfigRequest
     *
     * @returns DeleteApSsidConfigResponse
     *
     * @param DeleteApSsidConfigRequest $request
     *
     * @return DeleteApSsidConfigResponse
     */
    public function deleteApSsidConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteApgroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApgroupConfigResponse
     *
     * @param DeleteApgroupConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteApgroupConfigResponse
     */
    public function deleteApgroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apGroupUUId) {
            @$query['ApGroupUUId'] = $request->apGroupUUId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApgroupConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApgroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteApgroupConfigRequest
     *
     * @returns DeleteApgroupConfigResponse
     *
     * @param DeleteApgroupConfigRequest $request
     *
     * @return DeleteApgroupConfigResponse
     */
    public function deleteApgroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * 删除AP组上的SSID.
     *
     * @param request - DeleteApgroupSsidConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApgroupSsidConfigResponse
     *
     * @param DeleteApgroupSsidConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteApgroupSsidConfigResponse
     */
    public function deleteApgroupSsidConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApgroupSsidConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApgroupSsidConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除AP组上的SSID.
     *
     * @param request - DeleteApgroupSsidConfigRequest
     *
     * @returns DeleteApgroupSsidConfigResponse
     *
     * @param DeleteApgroupSsidConfigRequest $request
     *
     * @return DeleteApgroupSsidConfigResponse
     */
    public function deleteApgroupSsidConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApgroupSsidConfigWithOptions($request, $runtime);
    }

    /**
     * 删除设备组的三方app.
     *
     * @param request - DeleteApgroupThirdAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApgroupThirdAppResponse
     *
     * @param DeleteApgroupThirdAppRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteApgroupThirdAppResponse
     */
    public function deleteApgroupThirdAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApgroupThirdApp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApgroupThirdAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除设备组的三方app.
     *
     * @param request - DeleteApgroupThirdAppRequest
     *
     * @returns DeleteApgroupThirdAppResponse
     *
     * @param DeleteApgroupThirdAppRequest $request
     *
     * @return DeleteApgroupThirdAppResponse
     */
    public function deleteApgroupThirdApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApgroupThirdAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteNetDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetDeviceInfoResponse
     *
     * @param DeleteNetDeviceInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteNetDeviceInfoResponse
     */
    public function deleteNetDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetDeviceInfo',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteNetDeviceInfoRequest
     *
     * @returns DeleteNetDeviceInfoResponse
     *
     * @param DeleteNetDeviceInfoRequest $request
     *
     * @return DeleteNetDeviceInfoResponse
     */
    public function deleteNetDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 配置设备组的三方app.
     *
     * @param request - EditApgroupThirdAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditApgroupThirdAppResponse
     *
     * @param EditApgroupThirdAppRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EditApgroupThirdAppResponse
     */
    public function editApgroupThirdAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appData) {
            @$query['AppData'] = $request->appData;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->applyToSubGroup) {
            @$query['ApplyToSubGroup'] = $request->applyToSubGroup;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->inheritParentGroup) {
            @$query['InheritParentGroup'] = $request->inheritParentGroup;
        }

        if (null !== $request->thirdAppName) {
            @$query['ThirdAppName'] = $request->thirdAppName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditApgroupThirdApp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditApgroupThirdAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置设备组的三方app.
     *
     * @param request - EditApgroupThirdAppRequest
     *
     * @returns EditApgroupThirdAppResponse
     *
     * @param EditApgroupThirdAppRequest $request
     *
     * @return EditApgroupThirdAppResponse
     */
    public function editApgroupThirdApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editApgroupThirdAppWithOptions($request, $runtime);
    }

    /**
     * @param request - EffectApConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EffectApConfigResponse
     *
     * @param EffectApConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EffectApConfigResponse
     */
    public function effectApConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EffectApConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EffectApConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EffectApConfigRequest
     *
     * @returns EffectApConfigResponse
     *
     * @param EffectApConfigRequest $request
     *
     * @return EffectApConfigResponse
     */
    public function effectApConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectApConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - EffectApgroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EffectApgroupConfigResponse
     *
     * @param EffectApgroupConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EffectApgroupConfigResponse
     */
    public function effectApgroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apGroupUUId) {
            @$query['ApGroupUUId'] = $request->apGroupUUId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EffectApgroupConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EffectApgroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EffectApgroupConfigRequest
     *
     * @returns EffectApgroupConfigResponse
     *
     * @param EffectApgroupConfigRequest $request
     *
     * @return EffectApgroupConfigResponse
     */
    public function effectApgroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->effectApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * 查询蚂蚁环境终端状态
     *
     * @param request - GetAntStaStatusByMacRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAntStaStatusByMacResponse
     *
     * @param GetAntStaStatusByMacRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAntStaStatusByMacResponse
     */
    public function getAntStaStatusByMacWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->staMac) {
            @$query['StaMac'] = $request->staMac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAntStaStatusByMac',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAntStaStatusByMacResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询蚂蚁环境终端状态
     *
     * @param request - GetAntStaStatusByMacRequest
     *
     * @returns GetAntStaStatusByMacResponse
     *
     * @param GetAntStaStatusByMacRequest $request
     *
     * @return GetAntStaStatusByMacResponse
     */
    public function getAntStaStatusByMac($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAntStaStatusByMacWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApAddressByMacRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApAddressByMacResponse
     *
     * @param GetApAddressByMacRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApAddressByMacResponse
     */
    public function getApAddressByMacWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApAddressByMac',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApAddressByMacResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApAddressByMacRequest
     *
     * @returns GetApAddressByMacResponse
     *
     * @param GetApAddressByMacRequest $request
     *
     * @return GetApAddressByMacResponse
     */
    public function getApAddressByMac($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApAddressByMacWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApAssetResponse
     *
     * @param GetApAssetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetApAssetResponse
     */
    public function getApAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApAsset',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApAssetRequest
     *
     * @returns GetApAssetResponse
     *
     * @param GetApAssetRequest $request
     *
     * @return GetApAssetResponse
     */
    public function getApAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApAssetWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApDetailStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApDetailStatusResponse
     *
     * @param GetApDetailStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApDetailStatusResponse
     */
    public function getApDetailStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->needApgroupInfo) {
            @$query['NeedApgroupInfo'] = $request->needApgroupInfo;
        }

        if (null !== $request->needRadioStatus) {
            @$query['NeedRadioStatus'] = $request->needRadioStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApDetailStatus',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApDetailStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApDetailStatusRequest
     *
     * @returns GetApDetailStatusResponse
     *
     * @param GetApDetailStatusRequest $request
     *
     * @return GetApDetailStatusResponse
     */
    public function getApDetailStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApDetailStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApDetailedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApDetailedConfigResponse
     *
     * @param GetApDetailedConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetApDetailedConfigResponse
     */
    public function getApDetailedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApDetailedConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApDetailedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApDetailedConfigRequest
     *
     * @returns GetApDetailedConfigResponse
     *
     * @param GetApDetailedConfigRequest $request
     *
     * @return GetApDetailedConfigResponse
     */
    public function getApDetailedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApDetailedConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApInfoFromPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApInfoFromPoolResponse
     *
     * @param GetApInfoFromPoolRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApInfoFromPoolResponse
     */
    public function getApInfoFromPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApInfoFromPool',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApInfoFromPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApInfoFromPoolRequest
     *
     * @returns GetApInfoFromPoolResponse
     *
     * @param GetApInfoFromPoolRequest $request
     *
     * @return GetApInfoFromPoolResponse
     */
    public function getApInfoFromPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApInfoFromPoolWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApRunHistoryTimeSerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApRunHistoryTimeSerResponse
     *
     * @param GetApRunHistoryTimeSerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetApRunHistoryTimeSerResponse
     */
    public function getApRunHistoryTimeSerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApRunHistoryTimeSer',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApRunHistoryTimeSerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApRunHistoryTimeSerRequest
     *
     * @returns GetApRunHistoryTimeSerResponse
     *
     * @param GetApRunHistoryTimeSerRequest $request
     *
     * @return GetApRunHistoryTimeSerResponse
     */
    public function getApRunHistoryTimeSer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApRunHistoryTimeSerWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApStatusByGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApStatusByGroupIdResponse
     *
     * @param GetApStatusByGroupIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetApStatusByGroupIdResponse
     */
    public function getApStatusByGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApStatusByGroupId',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApStatusByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApStatusByGroupIdRequest
     *
     * @returns GetApStatusByGroupIdResponse
     *
     * @param GetApStatusByGroupIdRequest $request
     *
     * @return GetApStatusByGroupIdResponse
     */
    public function getApStatusByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApStatusByGroupIdWithOptions($request, $runtime);
    }

    /**
     * 根据组id查组的基本信息（名称之类）.
     *
     * @param request - GetApgroupConfigByIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApgroupConfigByIdentityResponse
     *
     * @param GetApgroupConfigByIdentityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetApgroupConfigByIdentityResponse
     */
    public function getApgroupConfigByIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->apgroupUuid) {
            @$query['ApgroupUuid'] = $request->apgroupUuid;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApgroupConfigByIdentity',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApgroupConfigByIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据组id查组的基本信息（名称之类）.
     *
     * @param request - GetApgroupConfigByIdentityRequest
     *
     * @returns GetApgroupConfigByIdentityResponse
     *
     * @param GetApgroupConfigByIdentityRequest $request
     *
     * @return GetApgroupConfigByIdentityResponse
     */
    public function getApgroupConfigByIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupConfigByIdentityWithOptions($request, $runtime);
    }

    /**
     * 查询设备组的完整配置(含ssid、portal等）.
     *
     * @param request - GetApgroupDetailedConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApgroupDetailedConfigResponse
     *
     * @param GetApgroupDetailedConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetApgroupDetailedConfigResponse
     */
    public function getApgroupDetailedConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->apgroupUuid) {
            @$query['ApgroupUuid'] = $request->apgroupUuid;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApgroupDetailedConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApgroupDetailedConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备组的完整配置(含ssid、portal等）.
     *
     * @param request - GetApgroupDetailedConfigRequest
     *
     * @returns GetApgroupDetailedConfigResponse
     *
     * @param GetApgroupDetailedConfigRequest $request
     *
     * @return GetApgroupDetailedConfigResponse
     */
    public function getApgroupDetailedConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupDetailedConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApgroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApgroupIdResponse
     *
     * @param GetApgroupIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetApgroupIdResponse
     */
    public function getApgroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApgroupId',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApgroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApgroupIdRequest
     *
     * @returns GetApgroupIdResponse
     *
     * @param GetApgroupIdRequest $request
     *
     * @return GetApgroupIdResponse
     */
    public function getApgroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupIdWithOptions($request, $runtime);
    }

    /**
     * @param request - GetApgroupSsidConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApgroupSsidConfigResponse
     *
     * @param GetApgroupSsidConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetApgroupSsidConfigResponse
     */
    public function getApgroupSsidConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apGroupUUId) {
            @$query['ApGroupUUId'] = $request->apGroupUUId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApgroupSsidConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApgroupSsidConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetApgroupSsidConfigRequest
     *
     * @returns GetApgroupSsidConfigResponse
     *
     * @param GetApgroupSsidConfigRequest $request
     *
     * @return GetApgroupSsidConfigResponse
     */
    public function getApgroupSsidConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApgroupSsidConfigWithOptions($request, $runtime);
    }

    /**
     * 查询批量任务的执行进度.
     *
     * @param request - GetBatchTaskProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchTaskProgressResponse
     *
     * @param GetBatchTaskProgressRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBatchTaskProgressResponse
     */
    public function getBatchTaskProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBatchTaskProgress',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBatchTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询批量任务的执行进度.
     *
     * @param request - GetBatchTaskProgressRequest
     *
     * @returns GetBatchTaskProgressResponse
     *
     * @param GetBatchTaskProgressRequest $request
     *
     * @return GetBatchTaskProgressResponse
     */
    public function getBatchTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @param request - GetGroupMiscAggTimeSerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupMiscAggTimeSerResponse
     *
     * @param GetGroupMiscAggTimeSerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGroupMiscAggTimeSerResponse
     */
    public function getGroupMiscAggTimeSerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupUuid) {
            @$query['ApgroupUuid'] = $request->apgroupUuid;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroupMiscAggTimeSer',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGroupMiscAggTimeSerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetGroupMiscAggTimeSerRequest
     *
     * @returns GetGroupMiscAggTimeSerResponse
     *
     * @param GetGroupMiscAggTimeSerRequest $request
     *
     * @return GetGroupMiscAggTimeSerResponse
     */
    public function getGroupMiscAggTimeSer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupMiscAggTimeSerWithOptions($request, $runtime);
    }

    /**
     * @param request - GetNetDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetDeviceInfoResponse
     *
     * @param GetNetDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetNetDeviceInfoResponse
     */
    public function getNetDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->idc) {
            @$query['Idc'] = $request->idc;
        }

        if (null !== $request->logicNetPod) {
            @$query['LogicNetPod'] = $request->logicNetPod;
        }

        if (null !== $request->manufacturer) {
            @$query['Manufacturer'] = $request->manufacturer;
        }

        if (null !== $request->mgnIp) {
            @$query['MgnIp'] = $request->mgnIp;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->netPod) {
            @$query['NetPod'] = $request->netPod;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->serviceTag) {
            @$query['ServiceTag'] = $request->serviceTag;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetDeviceInfo',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetNetDeviceInfoRequest
     *
     * @returns GetNetDeviceInfoResponse
     *
     * @param GetNetDeviceInfoRequest $request
     *
     * @return GetNetDeviceInfoResponse
     */
    public function getNetDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetNetDeviceInfoWithSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetDeviceInfoWithSizeResponse
     *
     * @param GetNetDeviceInfoWithSizeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetNetDeviceInfoWithSizeResponse
     */
    public function getNetDeviceInfoWithSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->idc) {
            @$query['Idc'] = $request->idc;
        }

        if (null !== $request->logicNetPod) {
            @$query['LogicNetPod'] = $request->logicNetPod;
        }

        if (null !== $request->manufacturer) {
            @$query['Manufacturer'] = $request->manufacturer;
        }

        if (null !== $request->mgnIp) {
            @$query['MgnIp'] = $request->mgnIp;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->netPod) {
            @$query['NetPod'] = $request->netPod;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->serviceTag) {
            @$query['ServiceTag'] = $request->serviceTag;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetDeviceInfoWithSize',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNetDeviceInfoWithSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetNetDeviceInfoWithSizeRequest
     *
     * @returns GetNetDeviceInfoWithSizeResponse
     *
     * @param GetNetDeviceInfoWithSizeRequest $request
     *
     * @return GetNetDeviceInfoWithSizeResponse
     */
    public function getNetDeviceInfoWithSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetDeviceInfoWithSizeWithOptions($request, $runtime);
    }

    /**
     * 获取体验加PV/UV信息.
     *
     * @param request - GetPageVisitDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPageVisitDataResponse
     *
     * @param GetPageVisitDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPageVisitDataResponse
     */
    public function getPageVisitDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPageVisitData',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPageVisitDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取体验加PV/UV信息.
     *
     * @param request - GetPageVisitDataRequest
     *
     * @returns GetPageVisitDataResponse
     *
     * @param GetPageVisitDataRequest $request
     *
     * @return GetPageVisitDataResponse
     */
    public function getPageVisitData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPageVisitDataWithOptions($request, $runtime);
    }

    /**
     * @param request - GetRadioRunHistoryTimeSerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRadioRunHistoryTimeSerResponse
     *
     * @param GetRadioRunHistoryTimeSerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetRadioRunHistoryTimeSerResponse
     */
    public function getRadioRunHistoryTimeSerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRadioRunHistoryTimeSer',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRadioRunHistoryTimeSerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetRadioRunHistoryTimeSerRequest
     *
     * @returns GetRadioRunHistoryTimeSerResponse
     *
     * @param GetRadioRunHistoryTimeSerRequest $request
     *
     * @return GetRadioRunHistoryTimeSerResponse
     */
    public function getRadioRunHistoryTimeSer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRadioRunHistoryTimeSerWithOptions($request, $runtime);
    }

    /**
     * 查询终端设备的详细状态
     *
     * @param request - GetStaDetailedStatusByMacRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStaDetailedStatusByMacResponse
     *
     * @param GetStaDetailedStatusByMacRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetStaDetailedStatusByMacResponse
     */
    public function getStaDetailedStatusByMacWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->staMac) {
            @$query['StaMac'] = $request->staMac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStaDetailedStatusByMac',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStaDetailedStatusByMacResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询终端设备的详细状态
     *
     * @param request - GetStaDetailedStatusByMacRequest
     *
     * @returns GetStaDetailedStatusByMacResponse
     *
     * @param GetStaDetailedStatusByMacRequest $request
     *
     * @return GetStaDetailedStatusByMacResponse
     */
    public function getStaDetailedStatusByMac($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStaDetailedStatusByMacWithOptions($request, $runtime);
    }

    /**
     * @param request - GetStaStatusListByApRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStaStatusListByApResponse
     *
     * @param GetStaStatusListByApRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStaStatusListByApResponse
     */
    public function getStaStatusListByApWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStaStatusListByAp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStaStatusListByApResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetStaStatusListByApRequest
     *
     * @returns GetStaStatusListByApResponse
     *
     * @param GetStaStatusListByApRequest $request
     *
     * @return GetStaStatusListByApResponse
     */
    public function getStaStatusListByAp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStaStatusListByApWithOptions($request, $runtime);
    }

    /**
     * 判断是否刑天的业务
     *
     * @param request - JudgeXingTianBusinessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JudgeXingTianBusinessResponse
     *
     * @param JudgeXingTianBusinessRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return JudgeXingTianBusinessResponse
     */
    public function judgeXingTianBusinessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->realmId) {
            @$query['RealmId'] = $request->realmId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JudgeXingTianBusiness',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JudgeXingTianBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 判断是否刑天的业务
     *
     * @param request - JudgeXingTianBusinessRequest
     *
     * @returns JudgeXingTianBusinessResponse
     *
     * @param JudgeXingTianBusinessRequest $request
     *
     * @return JudgeXingTianBusinessResponse
     */
    public function judgeXingTianBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->judgeXingTianBusinessWithOptions($request, $runtime);
    }

    /**
     * 踢除蚂蚁环境的终端.
     *
     * @param request - KickAntStaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KickAntStaResponse
     *
     * @param KickAntStaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return KickAntStaResponse
     */
    public function kickAntStaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->staMac) {
            @$query['StaMac'] = $request->staMac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KickAntSta',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KickAntStaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 踢除蚂蚁环境的终端.
     *
     * @param request - KickAntStaRequest
     *
     * @returns KickAntStaResponse
     *
     * @param KickAntStaRequest $request
     *
     * @return KickAntStaResponse
     */
    public function kickAntSta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickAntStaWithOptions($request, $runtime);
    }

    /**
     * @param request - KickStaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KickStaResponse
     *
     * @param KickStaRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return KickStaResponse
     */
    public function kickStaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->staMac) {
            @$query['StaMac'] = $request->staMac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KickSta',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KickStaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - KickStaRequest
     *
     * @returns KickStaResponse
     *
     * @param KickStaRequest $request
     *
     * @return KickStaResponse
     */
    public function kickSta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kickStaWithOptions($request, $runtime);
    }

    /**
     * 根据组id查组内第一级子组.
     *
     * @param request - ListApgroupDescendantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApgroupDescendantResponse
     *
     * @param ListApgroupDescendantRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListApgroupDescendantResponse
     */
    public function listApgroupDescendantWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->apgroupUuid) {
            @$query['ApgroupUuid'] = $request->apgroupUuid;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApgroupDescendant',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApgroupDescendantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据组id查组内第一级子组.
     *
     * @param request - ListApgroupDescendantRequest
     *
     * @returns ListApgroupDescendantResponse
     *
     * @param ListApgroupDescendantRequest $request
     *
     * @return ListApgroupDescendantResponse
     */
    public function listApgroupDescendant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApgroupDescendantWithOptions($request, $runtime);
    }

    /**
     * @param request - ListJobOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobOrdersResponse
     *
     * @param ListJobOrdersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListJobOrdersResponse
     */
    public function listJobOrdersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->changingType) {
            @$query['ChangingType'] = $request->changingType;
        }

        if (null !== $request->clientSystem) {
            @$query['ClientSystem'] = $request->clientSystem;
        }

        if (null !== $request->clientUniqueId) {
            @$query['ClientUniqueId'] = $request->clientUniqueId;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->handler) {
            @$query['Handler'] = $request->handler;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->orderStatus) {
            @$query['OrderStatus'] = $request->orderStatus;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobOrders',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListJobOrdersRequest
     *
     * @returns ListJobOrdersResponse
     *
     * @param ListJobOrdersRequest $request
     *
     * @return ListJobOrdersResponse
     */
    public function listJobOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobOrdersWithOptions($request, $runtime);
    }

    /**
     * @param request - ListJobOrdersWithSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobOrdersWithSizeResponse
     *
     * @param ListJobOrdersWithSizeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListJobOrdersWithSizeResponse
     */
    public function listJobOrdersWithSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->changingType) {
            @$query['ChangingType'] = $request->changingType;
        }

        if (null !== $request->clientSystem) {
            @$query['ClientSystem'] = $request->clientSystem;
        }

        if (null !== $request->clientUniqueId) {
            @$query['ClientUniqueId'] = $request->clientUniqueId;
        }

        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->handler) {
            @$query['Handler'] = $request->handler;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->orderStatus) {
            @$query['OrderStatus'] = $request->orderStatus;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobOrdersWithSize',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobOrdersWithSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListJobOrdersWithSizeRequest
     *
     * @returns ListJobOrdersWithSizeResponse
     *
     * @param ListJobOrdersWithSizeRequest $request
     *
     * @return ListJobOrdersWithSizeResponse
     */
    public function listJobOrdersWithSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobOrdersWithSizeWithOptions($request, $runtime);
    }

    /**
     * @param request - NewApgroupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NewApgroupConfigResponse
     *
     * @param NewApgroupConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return NewApgroupConfigResponse
     */
    public function newApgroupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parentApgroupId) {
            @$query['ParentApgroupId'] = $request->parentApgroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NewApgroupConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NewApgroupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - NewApgroupConfigRequest
     *
     * @returns NewApgroupConfigResponse
     *
     * @param NewApgroupConfigRequest $request
     *
     * @return NewApgroupConfigResponse
     */
    public function newApgroupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newApgroupConfigWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - NewJobOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NewJobOrderResponse
     *
     * @param NewJobOrderRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return NewJobOrderResponse
     */
    public function newJobOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new NewJobOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->changeType) {
            @$query['ChangeType'] = $request->changeType;
        }

        if (null !== $request->clientSystem) {
            @$query['ClientSystem'] = $request->clientSystem;
        }

        if (null !== $request->clientUniqueId) {
            @$query['ClientUniqueId'] = $request->clientUniqueId;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->referUrl) {
            @$query['ReferUrl'] = $request->referUrl;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $body = [];
        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'NewJobOrder',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NewJobOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - NewJobOrderRequest
     *
     * @returns NewJobOrderResponse
     *
     * @param NewJobOrderRequest $request
     *
     * @return NewJobOrderResponse
     */
    public function newJobOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newJobOrderWithOptions($request, $runtime);
    }

    /**
     * @param request - NewNetDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NewNetDeviceInfoResponse
     *
     * @param NewNetDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return NewNetDeviceInfoResponse
     */
    public function newNetDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->devices) {
            @$body['Devices'] = $request->devices;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'NewNetDeviceInfo',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NewNetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - NewNetDeviceInfoRequest
     *
     * @returns NewNetDeviceInfoResponse
     *
     * @param NewNetDeviceInfoRequest $request
     *
     * @return NewNetDeviceInfoResponse
     */
    public function newNetDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->newNetDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - PutAppConfigAndSaveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutAppConfigAndSaveResponse
     *
     * @param PutAppConfigAndSaveRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PutAppConfigAndSaveResponse
     */
    public function putAppConfigAndSaveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->configureType) {
            @$query['ConfigureType'] = $request->configureType;
        }

        if (null !== $request->currentTime) {
            @$query['CurrentTime'] = $request->currentTime;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutAppConfigAndSave',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutAppConfigAndSaveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutAppConfigAndSaveRequest
     *
     * @returns PutAppConfigAndSaveResponse
     *
     * @param PutAppConfigAndSaveRequest $request
     *
     * @return PutAppConfigAndSaveResponse
     */
    public function putAppConfigAndSave($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAppConfigAndSaveWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryJobOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryJobOrderResponse
     *
     * @param QueryJobOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryJobOrderResponse
     */
    public function queryJobOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryJobOrder',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryJobOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryJobOrderRequest
     *
     * @returns QueryJobOrderResponse
     *
     * @param QueryJobOrderRequest $request
     *
     * @return QueryJobOrderResponse
     */
    public function queryJobOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryJobOrderWithOptions($request, $runtime);
    }

    /**
     * @param request - RebootApRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootApResponse
     *
     * @param RebootApRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RebootApResponse
     */
    public function rebootApWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootAp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootApResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RebootApRequest
     *
     * @returns RebootApResponse
     *
     * @param RebootApRequest $request
     *
     * @return RebootApResponse
     */
    public function rebootAp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootApWithOptions($request, $runtime);
    }

    /**
     * @param request - RegisterApAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterApAssetResponse
     *
     * @param RegisterApAssetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterApAssetResponse
     */
    public function registerApAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apGroupUUId) {
            @$query['ApGroupUUId'] = $request->apGroupUUId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->serialNo) {
            @$query['SerialNo'] = $request->serialNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterApAsset',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterApAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RegisterApAssetRequest
     *
     * @returns RegisterApAssetResponse
     *
     * @param RegisterApAssetRequest $request
     *
     * @return RegisterApAssetResponse
     */
    public function registerApAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerApAssetWithOptions($request, $runtime);
    }

    /**
     * @param request - RepairApRadioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RepairApRadioResponse
     *
     * @param RepairApRadioRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RepairApRadioResponse
     */
    public function repairApRadioWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->radioIndex) {
            @$query['RadioIndex'] = $request->radioIndex;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RepairApRadio',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RepairApRadioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RepairApRadioRequest
     *
     * @returns RepairApRadioResponse
     *
     * @param RepairApRadioRequest $request
     *
     * @return RepairApRadioResponse
     */
    public function repairApRadio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->repairApRadioWithOptions($request, $runtime);
    }

    /**
     * 保存设备的基本配置.
     *
     * @param request - SaveApBasicConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApBasicConfigResponse
     *
     * @param SaveApBasicConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveApBasicConfigResponse
     */
    public function saveApBasicConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->dai) {
            @$query['Dai'] = $request->dai;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->echoInt) {
            @$query['EchoInt'] = $request->echoInt;
        }

        if (null !== $request->failover) {
            @$query['Failover'] = $request->failover;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->insecureAllowed) {
            @$query['InsecureAllowed'] = $request->insecureAllowed;
        }

        if (null !== $request->lanIp) {
            @$query['LanIp'] = $request->lanIp;
        }

        if (null !== $request->lanMask) {
            @$query['LanMask'] = $request->lanMask;
        }

        if (null !== $request->lanStatus) {
            @$query['LanStatus'] = $request->lanStatus;
        }

        if (null !== $request->logIp) {
            @$query['LogIp'] = $request->logIp;
        }

        if (null !== $request->logLevel) {
            @$query['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->passwd) {
            @$query['Passwd'] = $request->passwd;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->route) {
            @$query['Route'] = $request->route;
        }

        if (null !== $request->scan) {
            @$query['Scan'] = $request->scan;
        }

        if (null !== $request->tokenServer) {
            @$query['TokenServer'] = $request->tokenServer;
        }

        if (null !== $request->vpn) {
            @$query['Vpn'] = $request->vpn;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApBasicConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApBasicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存设备的基本配置.
     *
     * @param request - SaveApBasicConfigRequest
     *
     * @returns SaveApBasicConfigResponse
     *
     * @param SaveApBasicConfigRequest $request
     *
     * @return SaveApBasicConfigResponse
     */
    public function saveApBasicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApBasicConfigWithOptions($request, $runtime);
    }

    /**
     * 配置设备的portal.
     *
     * @param tmpReq - SaveApPortalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApPortalConfigResponse
     *
     * @param SaveApPortalConfigRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SaveApPortalConfigResponse
     */
    public function saveApPortalConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveApPortalConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->portalTypes) {
            $request->portalTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->portalTypes, 'PortalTypes', 'simple');
        }

        $query = [];
        if (null !== $request->apConfigId) {
            @$query['ApConfigId'] = $request->apConfigId;
        }

        if (null !== $request->appAuthUrl) {
            @$query['AppAuthUrl'] = $request->appAuthUrl;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSecret) {
            @$query['AuthSecret'] = $request->authSecret;
        }

        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->clientDownload) {
            @$query['ClientDownload'] = $request->clientDownload;
        }

        if (null !== $request->clientUpload) {
            @$query['ClientUpload'] = $request->clientUpload;
        }

        if (null !== $request->countdown) {
            @$query['Countdown'] = $request->countdown;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->portalTypesShrink) {
            @$query['PortalTypes'] = $request->portalTypesShrink;
        }

        if (null !== $request->portalUrl) {
            @$query['PortalUrl'] = $request->portalUrl;
        }

        if (null !== $request->timeStamp) {
            @$query['TimeStamp'] = $request->timeStamp;
        }

        if (null !== $request->totalDownload) {
            @$query['TotalDownload'] = $request->totalDownload;
        }

        if (null !== $request->totalUpload) {
            @$query['TotalUpload'] = $request->totalUpload;
        }

        if (null !== $request->webAuthUrl) {
            @$query['WebAuthUrl'] = $request->webAuthUrl;
        }

        if (null !== $request->whitelist) {
            @$query['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApPortalConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApPortalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置设备的portal.
     *
     * @param request - SaveApPortalConfigRequest
     *
     * @returns SaveApPortalConfigResponse
     *
     * @param SaveApPortalConfigRequest $request
     *
     * @return SaveApPortalConfigResponse
     */
    public function saveApPortalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApPortalConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveApRadioConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApRadioConfigResponse
     *
     * @param SaveApRadioConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveApRadioConfigResponse
     */
    public function saveApRadioConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bcastRate) {
            @$query['BcastRate'] = $request->bcastRate;
        }

        if (null !== $request->beaconInt) {
            @$query['BeaconInt'] = $request->beaconInt;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->frag) {
            @$query['Frag'] = $request->frag;
        }

        if (null !== $request->htmode) {
            @$query['Htmode'] = $request->htmode;
        }

        if (null !== $request->hwmode) {
            @$query['Hwmode'] = $request->hwmode;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mcastRate) {
            @$query['McastRate'] = $request->mcastRate;
        }

        if (null !== $request->mgmtRate) {
            @$query['MgmtRate'] = $request->mgmtRate;
        }

        if (null !== $request->minrate) {
            @$query['Minrate'] = $request->minrate;
        }

        if (null !== $request->noscan) {
            @$query['Noscan'] = $request->noscan;
        }

        if (null !== $request->probereq) {
            @$query['Probereq'] = $request->probereq;
        }

        if (null !== $request->requireMode) {
            @$query['RequireMode'] = $request->requireMode;
        }

        if (null !== $request->rts) {
            @$query['Rts'] = $request->rts;
        }

        if (null !== $request->shortgi) {
            @$query['Shortgi'] = $request->shortgi;
        }

        if (null !== $request->txpower) {
            @$query['Txpower'] = $request->txpower;
        }

        if (null !== $request->uapsd) {
            @$query['Uapsd'] = $request->uapsd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApRadioConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApRadioConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveApRadioConfigRequest
     *
     * @returns SaveApRadioConfigResponse
     *
     * @param SaveApRadioConfigRequest $request
     *
     * @return SaveApRadioConfigResponse
     */
    public function saveApRadioConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApRadioConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveApSsidConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApSsidConfigResponse
     *
     * @param SaveApSsidConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SaveApSsidConfigResponse
     */
    public function saveApSsidConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acctPort) {
            @$query['AcctPort'] = $request->acctPort;
        }

        if (null !== $request->acctSecret) {
            @$query['AcctSecret'] = $request->acctSecret;
        }

        if (null !== $request->acctServer) {
            @$query['AcctServer'] = $request->acctServer;
        }

        if (null !== $request->acctStatusServerWork) {
            @$query['AcctStatusServerWork'] = $request->acctStatusServerWork;
        }

        if (null !== $request->apAssetId) {
            @$query['ApAssetId'] = $request->apAssetId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->arpProxyEnable) {
            @$query['ArpProxyEnable'] = $request->arpProxyEnable;
        }

        if (null !== $request->authCache) {
            @$query['AuthCache'] = $request->authCache;
        }

        if (null !== $request->authPort) {
            @$query['AuthPort'] = $request->authPort;
        }

        if (null !== $request->authSecret) {
            @$query['AuthSecret'] = $request->authSecret;
        }

        if (null !== $request->authServer) {
            @$query['AuthServer'] = $request->authServer;
        }

        if (null !== $request->authStatusServerWork) {
            @$query['AuthStatusServerWork'] = $request->authStatusServerWork;
        }

        if (null !== $request->cir) {
            @$query['Cir'] = $request->cir;
        }

        if (null !== $request->cirStep) {
            @$query['CirStep'] = $request->cirStep;
        }

        if (null !== $request->cirType) {
            @$query['CirType'] = $request->cirType;
        }

        if (null !== $request->cirUl) {
            @$query['CirUl'] = $request->cirUl;
        }

        if (null !== $request->daeClient) {
            @$query['DaeClient'] = $request->daeClient;
        }

        if (null !== $request->daePort) {
            @$query['DaePort'] = $request->daePort;
        }

        if (null !== $request->daeSecret) {
            @$query['DaeSecret'] = $request->daeSecret;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->disassocLowAck) {
            @$query['DisassocLowAck'] = $request->disassocLowAck;
        }

        if (null !== $request->disassocWeakRssi) {
            @$query['DisassocWeakRssi'] = $request->disassocWeakRssi;
        }

        if (null !== $request->dynamicVlan) {
            @$query['DynamicVlan'] = $request->dynamicVlan;
        }

        if (null !== $request->encKey) {
            @$query['EncKey'] = $request->encKey;
        }

        if (null !== $request->encryption) {
            @$query['Encryption'] = $request->encryption;
        }

        if (null !== $request->fourthAuthPort) {
            @$query['FourthAuthPort'] = $request->fourthAuthPort;
        }

        if (null !== $request->fourthAuthSecret) {
            @$query['FourthAuthSecret'] = $request->fourthAuthSecret;
        }

        if (null !== $request->fourthAuthServer) {
            @$query['FourthAuthServer'] = $request->fourthAuthServer;
        }

        if (null !== $request->ftOverDs) {
            @$query['FtOverDs'] = $request->ftOverDs;
        }

        if (null !== $request->hidden) {
            @$query['Hidden'] = $request->hidden;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ieee80211r) {
            @$query['Ieee80211r'] = $request->ieee80211r;
        }

        if (null !== $request->ieee80211w) {
            @$query['Ieee80211w'] = $request->ieee80211w;
        }

        if (null !== $request->ignoreWeakProbe) {
            @$query['IgnoreWeakProbe'] = $request->ignoreWeakProbe;
        }

        if (null !== $request->isolate) {
            @$query['Isolate'] = $request->isolate;
        }

        if (null !== $request->liteEffect) {
            @$query['LiteEffect'] = $request->liteEffect;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->maxInactivity) {
            @$query['MaxInactivity'] = $request->maxInactivity;
        }

        if (null !== $request->maxassoc) {
            @$query['Maxassoc'] = $request->maxassoc;
        }

        if (null !== $request->mobilityDomain) {
            @$query['MobilityDomain'] = $request->mobilityDomain;
        }

        if (null !== $request->multicastForward) {
            @$query['MulticastForward'] = $request->multicastForward;
        }

        if (null !== $request->nasid) {
            @$query['Nasid'] = $request->nasid;
        }

        if (null !== $request->ndProxyWork) {
            @$query['NdProxyWork'] = $request->ndProxyWork;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->ownip) {
            @$query['Ownip'] = $request->ownip;
        }

        if (null !== $request->radioIndex) {
            @$query['RadioIndex'] = $request->radioIndex;
        }

        if (null !== $request->secondaryAcctPort) {
            @$query['SecondaryAcctPort'] = $request->secondaryAcctPort;
        }

        if (null !== $request->secondaryAcctSecret) {
            @$query['SecondaryAcctSecret'] = $request->secondaryAcctSecret;
        }

        if (null !== $request->secondaryAcctServer) {
            @$query['SecondaryAcctServer'] = $request->secondaryAcctServer;
        }

        if (null !== $request->secondaryAuthPort) {
            @$query['SecondaryAuthPort'] = $request->secondaryAuthPort;
        }

        if (null !== $request->secondaryAuthSecret) {
            @$query['SecondaryAuthSecret'] = $request->secondaryAuthSecret;
        }

        if (null !== $request->secondaryAuthServer) {
            @$query['SecondaryAuthServer'] = $request->secondaryAuthServer;
        }

        if (null !== $request->sendConfigToAp) {
            @$query['SendConfigToAp'] = $request->sendConfigToAp;
        }

        if (null !== $request->shortPreamble) {
            @$query['ShortPreamble'] = $request->shortPreamble;
        }

        if (null !== $request->ssid) {
            @$query['Ssid'] = $request->ssid;
        }

        if (null !== $request->ssidLb) {
            @$query['SsidLb'] = $request->ssidLb;
        }

        if (null !== $request->thirdAuthPort) {
            @$query['ThirdAuthPort'] = $request->thirdAuthPort;
        }

        if (null !== $request->thirdAuthSecret) {
            @$query['ThirdAuthSecret'] = $request->thirdAuthSecret;
        }

        if (null !== $request->thirdAuthServer) {
            @$query['ThirdAuthServer'] = $request->thirdAuthServer;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vlanDhcp) {
            @$query['VlanDhcp'] = $request->vlanDhcp;
        }

        if (null !== $request->wmm) {
            @$query['Wmm'] = $request->wmm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApSsidConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApSsidConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveApSsidConfigRequest
     *
     * @returns SaveApSsidConfigResponse
     *
     * @param SaveApSsidConfigRequest $request
     *
     * @return SaveApSsidConfigResponse
     */
    public function saveApSsidConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApSsidConfigWithOptions($request, $runtime);
    }

    /**
     * 配置设备的三方app.
     *
     * @param request - SaveApThirdAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApThirdAppResponse
     *
     * @param SaveApThirdAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveApThirdAppResponse
     */
    public function saveApThirdAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addStyle) {
            @$query['AddStyle'] = $request->addStyle;
        }

        if (null !== $request->apAssetId) {
            @$query['ApAssetId'] = $request->apAssetId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appData) {
            @$query['AppData'] = $request->appData;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->thirdAppName) {
            @$query['ThirdAppName'] = $request->thirdAppName;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApThirdApp',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApThirdAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置设备的三方app.
     *
     * @param request - SaveApThirdAppRequest
     *
     * @returns SaveApThirdAppResponse
     *
     * @param SaveApThirdAppRequest $request
     *
     * @return SaveApThirdAppResponse
     */
    public function saveApThirdApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApThirdAppWithOptions($request, $runtime);
    }

    /**
     * 保存设备组的基本配置.
     *
     * @param request - SaveApgroupBasicConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApgroupBasicConfigResponse
     *
     * @param SaveApgroupBasicConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveApgroupBasicConfigResponse
     */
    public function saveApgroupBasicConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->dai) {
            @$query['Dai'] = $request->dai;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->echoInt) {
            @$query['EchoInt'] = $request->echoInt;
        }

        if (null !== $request->failover) {
            @$query['Failover'] = $request->failover;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->insecureAllowed) {
            @$query['InsecureAllowed'] = $request->insecureAllowed;
        }

        if (null !== $request->isConfigStrongConsistency) {
            @$query['IsConfigStrongConsistency'] = $request->isConfigStrongConsistency;
        }

        if (null !== $request->lanIp) {
            @$query['LanIp'] = $request->lanIp;
        }

        if (null !== $request->lanMask) {
            @$query['LanMask'] = $request->lanMask;
        }

        if (null !== $request->lanStatus) {
            @$query['LanStatus'] = $request->lanStatus;
        }

        if (null !== $request->logIp) {
            @$query['LogIp'] = $request->logIp;
        }

        if (null !== $request->logLevel) {
            @$query['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parentApgroupId) {
            @$query['ParentApgroupId'] = $request->parentApgroupId;
        }

        if (null !== $request->passwd) {
            @$query['Passwd'] = $request->passwd;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->route) {
            @$query['Route'] = $request->route;
        }

        if (null !== $request->scan) {
            @$query['Scan'] = $request->scan;
        }

        if (null !== $request->tokenServer) {
            @$query['TokenServer'] = $request->tokenServer;
        }

        if (null !== $request->vpn) {
            @$query['Vpn'] = $request->vpn;
        }

        if (null !== $request->workMode) {
            @$query['WorkMode'] = $request->workMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApgroupBasicConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApgroupBasicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存设备组的基本配置.
     *
     * @param request - SaveApgroupBasicConfigRequest
     *
     * @returns SaveApgroupBasicConfigResponse
     *
     * @param SaveApgroupBasicConfigRequest $request
     *
     * @return SaveApgroupBasicConfigResponse
     */
    public function saveApgroupBasicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApgroupBasicConfigWithOptions($request, $runtime);
    }

    /**
     * 配置设备组的portal.
     *
     * @param tmpReq - SaveApgroupPortalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApgroupPortalConfigResponse
     *
     * @param SaveApgroupPortalConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SaveApgroupPortalConfigResponse
     */
    public function saveApgroupPortalConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveApgroupPortalConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->portalTypes) {
            $request->portalTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->portalTypes, 'PortalTypes', 'simple');
        }

        $query = [];
        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->appAuthUrl) {
            @$query['AppAuthUrl'] = $request->appAuthUrl;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSecret) {
            @$query['AuthSecret'] = $request->authSecret;
        }

        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->clientDownload) {
            @$query['ClientDownload'] = $request->clientDownload;
        }

        if (null !== $request->clientUpload) {
            @$query['ClientUpload'] = $request->clientUpload;
        }

        if (null !== $request->countdown) {
            @$query['Countdown'] = $request->countdown;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->portalTypesShrink) {
            @$query['PortalTypes'] = $request->portalTypesShrink;
        }

        if (null !== $request->portalUrl) {
            @$query['PortalUrl'] = $request->portalUrl;
        }

        if (null !== $request->timeStamp) {
            @$query['TimeStamp'] = $request->timeStamp;
        }

        if (null !== $request->totalDownload) {
            @$query['TotalDownload'] = $request->totalDownload;
        }

        if (null !== $request->totalUpload) {
            @$query['TotalUpload'] = $request->totalUpload;
        }

        if (null !== $request->webAuthUrl) {
            @$query['WebAuthUrl'] = $request->webAuthUrl;
        }

        if (null !== $request->whitelist) {
            @$query['Whitelist'] = $request->whitelist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApgroupPortalConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApgroupPortalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置设备组的portal.
     *
     * @param request - SaveApgroupPortalConfigRequest
     *
     * @returns SaveApgroupPortalConfigResponse
     *
     * @param SaveApgroupPortalConfigRequest $request
     *
     * @return SaveApgroupPortalConfigResponse
     */
    public function saveApgroupPortalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApgroupPortalConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveApgroupSsidConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveApgroupSsidConfigResponse
     *
     * @param SaveApgroupSsidConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveApgroupSsidConfigResponse
     */
    public function saveApgroupSsidConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acctPort) {
            @$query['AcctPort'] = $request->acctPort;
        }

        if (null !== $request->acctSecret) {
            @$query['AcctSecret'] = $request->acctSecret;
        }

        if (null !== $request->acctServer) {
            @$query['AcctServer'] = $request->acctServer;
        }

        if (null !== $request->apgroupId) {
            @$query['ApgroupId'] = $request->apgroupId;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->authCache) {
            @$query['AuthCache'] = $request->authCache;
        }

        if (null !== $request->authPort) {
            @$query['AuthPort'] = $request->authPort;
        }

        if (null !== $request->authSecret) {
            @$query['AuthSecret'] = $request->authSecret;
        }

        if (null !== $request->authServer) {
            @$query['AuthServer'] = $request->authServer;
        }

        if (null !== $request->binding) {
            @$query['Binding'] = $request->binding;
        }

        if (null !== $request->cir) {
            @$query['Cir'] = $request->cir;
        }

        if (null !== $request->daeClient) {
            @$query['DaeClient'] = $request->daeClient;
        }

        if (null !== $request->daePort) {
            @$query['DaePort'] = $request->daePort;
        }

        if (null !== $request->daeSecret) {
            @$query['DaeSecret'] = $request->daeSecret;
        }

        if (null !== $request->disabled) {
            @$query['Disabled'] = $request->disabled;
        }

        if (null !== $request->disassocLowAck) {
            @$query['DisassocLowAck'] = $request->disassocLowAck;
        }

        if (null !== $request->disassocWeakRssi) {
            @$query['DisassocWeakRssi'] = $request->disassocWeakRssi;
        }

        if (null !== $request->dynamicVlan) {
            @$query['DynamicVlan'] = $request->dynamicVlan;
        }

        if (null !== $request->effect) {
            @$query['Effect'] = $request->effect;
        }

        if (null !== $request->encKey) {
            @$query['EncKey'] = $request->encKey;
        }

        if (null !== $request->encryption) {
            @$query['Encryption'] = $request->encryption;
        }

        if (null !== $request->hidden) {
            @$query['Hidden'] = $request->hidden;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ieee80211w) {
            @$query['Ieee80211w'] = $request->ieee80211w;
        }

        if (null !== $request->ignoreWeakProbe) {
            @$query['IgnoreWeakProbe'] = $request->ignoreWeakProbe;
        }

        if (null !== $request->isolate) {
            @$query['Isolate'] = $request->isolate;
        }

        if (null !== $request->liteEffect) {
            @$query['LiteEffect'] = $request->liteEffect;
        }

        if (null !== $request->maxInactivity) {
            @$query['MaxInactivity'] = $request->maxInactivity;
        }

        if (null !== $request->maxassoc) {
            @$query['Maxassoc'] = $request->maxassoc;
        }

        if (null !== $request->multicastForward) {
            @$query['MulticastForward'] = $request->multicastForward;
        }

        if (null !== $request->nasid) {
            @$query['Nasid'] = $request->nasid;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->newSsid) {
            @$query['NewSsid'] = $request->newSsid;
        }

        if (null !== $request->ownip) {
            @$query['Ownip'] = $request->ownip;
        }

        if (null !== $request->secondaryAcctPort) {
            @$query['SecondaryAcctPort'] = $request->secondaryAcctPort;
        }

        if (null !== $request->secondaryAcctSecret) {
            @$query['SecondaryAcctSecret'] = $request->secondaryAcctSecret;
        }

        if (null !== $request->secondaryAcctServer) {
            @$query['SecondaryAcctServer'] = $request->secondaryAcctServer;
        }

        if (null !== $request->secondaryAuthPort) {
            @$query['SecondaryAuthPort'] = $request->secondaryAuthPort;
        }

        if (null !== $request->secondaryAuthSecret) {
            @$query['SecondaryAuthSecret'] = $request->secondaryAuthSecret;
        }

        if (null !== $request->secondaryAuthServer) {
            @$query['SecondaryAuthServer'] = $request->secondaryAuthServer;
        }

        if (null !== $request->shortPreamble) {
            @$query['ShortPreamble'] = $request->shortPreamble;
        }

        if (null !== $request->ssid) {
            @$query['Ssid'] = $request->ssid;
        }

        if (null !== $request->ssidLb) {
            @$query['SsidLb'] = $request->ssidLb;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vlanDhcp) {
            @$query['VlanDhcp'] = $request->vlanDhcp;
        }

        if (null !== $request->wmm) {
            @$query['Wmm'] = $request->wmm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveApgroupSsidConfig',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveApgroupSsidConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveApgroupSsidConfigRequest
     *
     * @returns SaveApgroupSsidConfigResponse
     *
     * @param SaveApgroupSsidConfigRequest $request
     *
     * @return SaveApgroupSsidConfigResponse
     */
    public function saveApgroupSsidConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveApgroupSsidConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - SetApAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApAddressResponse
     *
     * @param SetApAddressRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetApAddressResponse
     */
    public function setApAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apAreaName) {
            @$query['ApAreaName'] = $request->apAreaName;
        }

        if (null !== $request->apBuildingName) {
            @$query['ApBuildingName'] = $request->apBuildingName;
        }

        if (null !== $request->apCampusName) {
            @$query['ApCampusName'] = $request->apCampusName;
        }

        if (null !== $request->apCityName) {
            @$query['ApCityName'] = $request->apCityName;
        }

        if (null !== $request->apFloor) {
            @$query['ApFloor'] = $request->apFloor;
        }

        if (null !== $request->apGroup) {
            @$query['ApGroup'] = $request->apGroup;
        }

        if (null !== $request->apName) {
            @$query['ApName'] = $request->apName;
        }

        if (null !== $request->apNationName) {
            @$query['ApNationName'] = $request->apNationName;
        }

        if (null !== $request->apProvinceName) {
            @$query['ApProvinceName'] = $request->apProvinceName;
        }

        if (null !== $request->apUnitId) {
            @$query['ApUnitId'] = $request->apUnitId;
        }

        if (null !== $request->apUnitName) {
            @$query['ApUnitName'] = $request->apUnitName;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->lat) {
            @$query['Lat'] = $request->lat;
        }

        if (null !== $request->lng) {
            @$query['Lng'] = $request->lng;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApAddress',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetApAddressRequest
     *
     * @returns SetApAddressResponse
     *
     * @param SetApAddressRequest $request
     *
     * @return SetApAddressResponse
     */
    public function setApAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApAddressWithOptions($request, $runtime);
    }

    /**
     * @param request - SetApNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetApNameResponse
     *
     * @param SetApNameRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetApNameResponse
     */
    public function setApNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apMac) {
            @$query['ApMac'] = $request->apMac;
        }

        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetApName',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetApNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetApNameRequest
     *
     * @returns SetApNameResponse
     *
     * @param SetApNameRequest $request
     *
     * @return SetApNameResponse
     */
    public function setApName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApNameWithOptions($request, $runtime);
    }

    /**
     * 注销AP设备.
     *
     * @param request - UnRegisterApAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnRegisterApAssetResponse
     *
     * @param UnRegisterApAssetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnRegisterApAssetResponse
     */
    public function unRegisterApAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->assetApgroupId) {
            @$query['AssetApgroupId'] = $request->assetApgroupId;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mac) {
            @$query['Mac'] = $request->mac;
        }

        if (null !== $request->serialNo) {
            @$query['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->useFor) {
            @$query['UseFor'] = $request->useFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnRegisterApAsset',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnRegisterApAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注销AP设备.
     *
     * @param request - UnRegisterApAssetRequest
     *
     * @returns UnRegisterApAssetResponse
     *
     * @param UnRegisterApAssetRequest $request
     *
     * @return UnRegisterApAssetResponse
     */
    public function unRegisterApAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unRegisterApAssetWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateNetDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetDeviceInfoResponse
     *
     * @param UpdateNetDeviceInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateNetDeviceInfoResponse
     */
    public function updateNetDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appCode) {
            @$query['AppCode'] = $request->appCode;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $body = [];
        if (null !== $request->devices) {
            @$body['Devices'] = $request->devices;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateNetDeviceInfo',
            'version' => '2019-11-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateNetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateNetDeviceInfoRequest
     *
     * @returns UpdateNetDeviceInfoResponse
     *
     * @param UpdateNetDeviceInfoRequest $request
     *
     * @return UpdateNetDeviceInfoResponse
     */
    public function updateNetDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetDeviceInfoWithOptions($request, $runtime);
    }
}
