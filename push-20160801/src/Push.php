<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Push\V20160801\Models\BindAliasRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindAliasResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\BindPhoneRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindPhoneResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\BindTagRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindTagResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CancelPushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CancelPushResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckCertificateResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckDeviceRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckDeviceResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CompleteContinuouslyPushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CompleteContinuouslyPushResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\ContinuouslyPushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\ContinuouslyPushResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\ListSummaryAppsResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\ListTagsRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\ListTagsResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\MassPushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushMessageToAndroidRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\PushMessageToAndroidResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushMessageToiOSRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\PushMessageToiOSResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushNoticeToAndroidRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\PushNoticeToAndroidResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushNoticeToiOSRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\PushNoticeToiOSResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\PushResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\PushShrinkRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceInfoResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAccountRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAccountResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAliasRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDevicesByAliasResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushRecordsResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByAppResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryTagsRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryTagsResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryUniqueDeviceStatRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryUniqueDeviceStatResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\RemoveTagRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\RemoveTagResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindAliasRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindAliasResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindPhoneRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindPhoneResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindTagRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\UnbindTagResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Push extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'cloudpush.aliyuncs.com',
            'ap-northeast-2-pop' => 'cloudpush.aliyuncs.com',
            'ap-south-1' => 'cloudpush.aliyuncs.com',
            'ap-southeast-1' => 'cloudpush.aliyuncs.com',
            'ap-southeast-2' => 'cloudpush.aliyuncs.com',
            'ap-southeast-3' => 'cloudpush.aliyuncs.com',
            'ap-southeast-5' => 'cloudpush.aliyuncs.com',
            'cn-beijing' => 'cloudpush.aliyuncs.com',
            'cn-beijing-finance-1' => 'cloudpush.aliyuncs.com',
            'cn-beijing-finance-pop' => 'cloudpush.aliyuncs.com',
            'cn-beijing-gov-1' => 'cloudpush.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'cloudpush.aliyuncs.com',
            'cn-chengdu' => 'cloudpush.aliyuncs.com',
            'cn-edge-1' => 'cloudpush.aliyuncs.com',
            'cn-fujian' => 'cloudpush.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-finance' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-test-306' => 'cloudpush.aliyuncs.com',
            'cn-hongkong' => 'cloudpush.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'cloudpush.aliyuncs.com',
            'cn-huhehaote' => 'cloudpush.aliyuncs.com',
            'cn-north-2-gov-1' => 'cloudpush.aliyuncs.com',
            'cn-qingdao' => 'cloudpush.aliyuncs.com',
            'cn-qingdao-nebula' => 'cloudpush.aliyuncs.com',
            'cn-shanghai' => 'cloudpush.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'cloudpush.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'cloudpush.aliyuncs.com',
            'cn-shanghai-finance-1' => 'cloudpush.aliyuncs.com',
            'cn-shanghai-inner' => 'cloudpush.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-inner' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'cloudpush.aliyuncs.com',
            'cn-wuhan' => 'cloudpush.aliyuncs.com',
            'cn-yushanfang' => 'cloudpush.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'cloudpush.aliyuncs.com',
            'cn-zhangjiakou' => 'cloudpush.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'cloudpush.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'cloudpush.aliyuncs.com',
            'eu-central-1' => 'cloudpush.aliyuncs.com',
            'eu-west-1' => 'cloudpush.aliyuncs.com',
            'eu-west-1-oxs' => 'cloudpush.aliyuncs.com',
            'me-east-1' => 'cloudpush.aliyuncs.com',
            'rus-west-1-pop' => 'cloudpush.aliyuncs.com',
            'us-east-1' => 'cloudpush.aliyuncs.com',
            'us-west-1' => 'cloudpush.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('push', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 绑定别名.
     *
     * @param request - BindAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAliasResponse
     *
     * @param BindAliasRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BindAliasResponse
     */
    public function bindAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAlias',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定别名.
     *
     * @param request - BindAliasRequest
     *
     * @returns BindAliasResponse
     *
     * @param BindAliasRequest $request
     *
     * @return BindAliasResponse
     */
    public function bindAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAliasWithOptions($request, $runtime);
    }

    /**
     * 绑定手机号码
     *
     * @param request - BindPhoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindPhoneResponse
     *
     * @param BindPhoneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BindPhoneResponse
     */
    public function bindPhoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindPhone',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定手机号码
     *
     * @param request - BindPhoneRequest
     *
     * @returns BindPhoneResponse
     *
     * @param BindPhoneRequest $request
     *
     * @return BindPhoneResponse
     */
    public function bindPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPhoneWithOptions($request, $runtime);
    }

    /**
     * 绑定标签.
     *
     * @param request - BindTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindTagResponse
     *
     * @param BindTagRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindTagResponse
     */
    public function bindTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->clientKey) {
            @$query['ClientKey'] = $request->clientKey;
        }

        if (null !== $request->keyType) {
            @$query['KeyType'] = $request->keyType;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindTag',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定标签.
     *
     * @param request - BindTagRequest
     *
     * @returns BindTagResponse
     *
     * @param BindTagRequest $request
     *
     * @return BindTagResponse
     */
    public function bindTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindTagWithOptions($request, $runtime);
    }

    /**
     * 取消定时推送任务
     *
     * @param request - CancelPushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPushResponse
     *
     * @param CancelPushRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelPushResponse
     */
    public function cancelPushWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelPush',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消定时推送任务
     *
     * @param request - CancelPushRequest
     *
     * @returns CancelPushResponse
     *
     * @param CancelPushRequest $request
     *
     * @return CancelPushResponse
     */
    public function cancelPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPushWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCertificateResponse
     *
     * @param CheckCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckCertificateResponse
     */
    public function checkCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCertificate',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckCertificateRequest
     *
     * @returns CheckCertificateResponse
     *
     * @param CheckCertificateRequest $request
     *
     * @return CheckCertificateResponse
     */
    public function checkCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCertificateWithOptions($request, $runtime);
    }

    /**
     * 【废弃】验证设备有效性.
     *
     * @deprecated openAPI CheckDevice is deprecated, please use Push::2016-08-01::CheckDevices instead
     *
     * @param request - CheckDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDeviceResponse
     *
     * @param CheckDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDeviceResponse
     */
    public function checkDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDevice',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 【废弃】验证设备有效性.
     *
     * @deprecated openAPI CheckDevice is deprecated, please use Push::2016-08-01::CheckDevices instead
     *
     * @param request - CheckDeviceRequest
     *
     * @returns CheckDeviceResponse
     *
     * @param CheckDeviceRequest $request
     *
     * @return CheckDeviceResponse
     */
    public function checkDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDeviceWithOptions($request, $runtime);
    }

    /**
     * 批量检查设备有效性.
     *
     * @param request - CheckDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDevicesResponse
     *
     * @param CheckDevicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckDevicesResponse
     */
    public function checkDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceIds) {
            @$query['DeviceIds'] = $request->deviceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDevices',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量检查设备有效性.
     *
     * @param request - CheckDevicesRequest
     *
     * @returns CheckDevicesResponse
     *
     * @param CheckDevicesRequest $request
     *
     * @return CheckDevicesResponse
     */
    public function checkDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDevicesWithOptions($request, $runtime);
    }

    /**
     * 完成持续推送任务
     *
     * @param request - CompleteContinuouslyPushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteContinuouslyPushResponse
     *
     * @param CompleteContinuouslyPushRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CompleteContinuouslyPushResponse
     */
    public function completeContinuouslyPushWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteContinuouslyPush',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteContinuouslyPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 完成持续推送任务
     *
     * @param request - CompleteContinuouslyPushRequest
     *
     * @returns CompleteContinuouslyPushResponse
     *
     * @param CompleteContinuouslyPushRequest $request
     *
     * @return CompleteContinuouslyPushResponse
     */
    public function completeContinuouslyPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeContinuouslyPushWithOptions($request, $runtime);
    }

    /**
     * 持续推送
     *
     * @param request - ContinuouslyPushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinuouslyPushResponse
     *
     * @param ContinuouslyPushRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuouslyPushResponse
     */
    public function continuouslyPushWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinuouslyPush',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinuouslyPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 持续推送
     *
     * @param request - ContinuouslyPushRequest
     *
     * @returns ContinuouslyPushResponse
     *
     * @param ContinuouslyPushRequest $request
     *
     * @return ContinuouslyPushResponse
     */
    public function continuouslyPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuouslyPushWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * 【废弃】查询用户已创建的app列表.
     *
     * @deprecated openAPI ListSummaryApps is deprecated, please use Mhub::2017-08-25::ListApps instead
     *
     * @param request - ListSummaryAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSummaryAppsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListSummaryAppsResponse
     */
    public function listSummaryAppsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListSummaryApps',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSummaryAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 【废弃】查询用户已创建的app列表.
     *
     * @deprecated openAPI ListSummaryApps is deprecated, please use Mhub::2017-08-25::ListApps instead
     *
     * @returns ListSummaryAppsResponse
     *
     * @return ListSummaryAppsResponse
     */
    public function listSummaryApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSummaryAppsWithOptions($runtime);
    }

    /**
     * 获取标签列表.
     *
     * @param request - ListTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标签列表.
     *
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * 批量推送
     *
     * @param request - MassPushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MassPushResponse
     *
     * @param MassPushRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MassPushResponse
     */
    public function massPushWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->idempotentToken) {
            @$query['IdempotentToken'] = $request->idempotentToken;
        }

        $body = [];
        if (null !== $request->pushTask) {
            @$body['PushTask'] = $request->pushTask;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MassPush',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MassPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量推送
     *
     * @param request - MassPushRequest
     *
     * @returns MassPushResponse
     *
     * @param MassPushRequest $request
     *
     * @return MassPushResponse
     */
    public function massPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->massPushWithOptions($request, $runtime);
    }

    /**
     * 高级推送接口.
     *
     * @param tmpReq - PushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushResponse
     *
     * @param PushRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return PushResponse
     */
    public function pushWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->androidOppoPrivateContentParameters) {
            $request->androidOppoPrivateContentParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidOppoPrivateContentParameters, 'AndroidOppoPrivateContentParameters', 'json');
        }

        if (null !== $tmpReq->androidOppoPrivateTitleParameters) {
            $request->androidOppoPrivateTitleParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->androidOppoPrivateTitleParameters, 'AndroidOppoPrivateTitleParameters', 'json');
        }

        $query = [];
        if (null !== $request->androidActivity) {
            @$query['AndroidActivity'] = $request->androidActivity;
        }

        if (null !== $request->androidBadgeAddNum) {
            @$query['AndroidBadgeAddNum'] = $request->androidBadgeAddNum;
        }

        if (null !== $request->androidBadgeClass) {
            @$query['AndroidBadgeClass'] = $request->androidBadgeClass;
        }

        if (null !== $request->androidBadgeSetNum) {
            @$query['AndroidBadgeSetNum'] = $request->androidBadgeSetNum;
        }

        if (null !== $request->androidBigBody) {
            @$query['AndroidBigBody'] = $request->androidBigBody;
        }

        if (null !== $request->androidBigPictureUrl) {
            @$query['AndroidBigPictureUrl'] = $request->androidBigPictureUrl;
        }

        if (null !== $request->androidBigTitle) {
            @$query['AndroidBigTitle'] = $request->androidBigTitle;
        }

        if (null !== $request->androidExtParameters) {
            @$query['AndroidExtParameters'] = $request->androidExtParameters;
        }

        if (null !== $request->androidHonorTargetUserType) {
            @$query['AndroidHonorTargetUserType'] = $request->androidHonorTargetUserType;
        }

        if (null !== $request->androidHuaweiLiveNotificationPayload) {
            @$query['AndroidHuaweiLiveNotificationPayload'] = $request->androidHuaweiLiveNotificationPayload;
        }

        if (null !== $request->androidHuaweiReceiptId) {
            @$query['AndroidHuaweiReceiptId'] = $request->androidHuaweiReceiptId;
        }

        if (null !== $request->androidHuaweiTargetUserType) {
            @$query['AndroidHuaweiTargetUserType'] = $request->androidHuaweiTargetUserType;
        }

        if (null !== $request->androidImageUrl) {
            @$query['AndroidImageUrl'] = $request->androidImageUrl;
        }

        if (null !== $request->androidInboxBody) {
            @$query['AndroidInboxBody'] = $request->androidInboxBody;
        }

        if (null !== $request->androidMeizuNoticeMsgType) {
            @$query['AndroidMeizuNoticeMsgType'] = $request->androidMeizuNoticeMsgType;
        }

        if (null !== $request->androidMessageHuaweiCategory) {
            @$query['AndroidMessageHuaweiCategory'] = $request->androidMessageHuaweiCategory;
        }

        if (null !== $request->androidMessageHuaweiUrgency) {
            @$query['AndroidMessageHuaweiUrgency'] = $request->androidMessageHuaweiUrgency;
        }

        if (null !== $request->androidMessageOppoCategory) {
            @$query['AndroidMessageOppoCategory'] = $request->androidMessageOppoCategory;
        }

        if (null !== $request->androidMessageOppoNotifyLevel) {
            @$query['AndroidMessageOppoNotifyLevel'] = $request->androidMessageOppoNotifyLevel;
        }

        if (null !== $request->androidMessageVivoCategory) {
            @$query['AndroidMessageVivoCategory'] = $request->androidMessageVivoCategory;
        }

        if (null !== $request->androidMusic) {
            @$query['AndroidMusic'] = $request->androidMusic;
        }

        if (null !== $request->androidNotificationBarPriority) {
            @$query['AndroidNotificationBarPriority'] = $request->androidNotificationBarPriority;
        }

        if (null !== $request->androidNotificationBarType) {
            @$query['AndroidNotificationBarType'] = $request->androidNotificationBarType;
        }

        if (null !== $request->androidNotificationChannel) {
            @$query['AndroidNotificationChannel'] = $request->androidNotificationChannel;
        }

        if (null !== $request->androidNotificationGroup) {
            @$query['AndroidNotificationGroup'] = $request->androidNotificationGroup;
        }

        if (null !== $request->androidNotificationHonorChannel) {
            @$query['AndroidNotificationHonorChannel'] = $request->androidNotificationHonorChannel;
        }

        if (null !== $request->androidNotificationHuaweiChannel) {
            @$query['AndroidNotificationHuaweiChannel'] = $request->androidNotificationHuaweiChannel;
        }

        if (null !== $request->androidNotificationNotifyId) {
            @$query['AndroidNotificationNotifyId'] = $request->androidNotificationNotifyId;
        }

        if (null !== $request->androidNotificationThreadId) {
            @$query['AndroidNotificationThreadId'] = $request->androidNotificationThreadId;
        }

        if (null !== $request->androidNotificationVivoChannel) {
            @$query['AndroidNotificationVivoChannel'] = $request->androidNotificationVivoChannel;
        }

        if (null !== $request->androidNotificationXiaomiChannel) {
            @$query['AndroidNotificationXiaomiChannel'] = $request->androidNotificationXiaomiChannel;
        }

        if (null !== $request->androidNotifyType) {
            @$query['AndroidNotifyType'] = $request->androidNotifyType;
        }

        if (null !== $request->androidOpenType) {
            @$query['AndroidOpenType'] = $request->androidOpenType;
        }

        if (null !== $request->androidOpenUrl) {
            @$query['AndroidOpenUrl'] = $request->androidOpenUrl;
        }

        if (null !== $request->androidOppoPrivateContentParametersShrink) {
            @$query['AndroidOppoPrivateContentParameters'] = $request->androidOppoPrivateContentParametersShrink;
        }

        if (null !== $request->androidOppoPrivateMsgTemplateId) {
            @$query['AndroidOppoPrivateMsgTemplateId'] = $request->androidOppoPrivateMsgTemplateId;
        }

        if (null !== $request->androidOppoPrivateTitleParametersShrink) {
            @$query['AndroidOppoPrivateTitleParameters'] = $request->androidOppoPrivateTitleParametersShrink;
        }

        if (null !== $request->androidPopupActivity) {
            @$query['AndroidPopupActivity'] = $request->androidPopupActivity;
        }

        if (null !== $request->androidPopupBody) {
            @$query['AndroidPopupBody'] = $request->androidPopupBody;
        }

        if (null !== $request->androidPopupTitle) {
            @$query['AndroidPopupTitle'] = $request->androidPopupTitle;
        }

        if (null !== $request->androidRemind) {
            @$query['AndroidRemind'] = $request->androidRemind;
        }

        if (null !== $request->androidRenderStyle) {
            @$query['AndroidRenderStyle'] = $request->androidRenderStyle;
        }

        if (null !== $request->androidTargetUserType) {
            @$query['AndroidTargetUserType'] = $request->androidTargetUserType;
        }

        if (null !== $request->androidVivoPushMode) {
            @$query['AndroidVivoPushMode'] = $request->androidVivoPushMode;
        }

        if (null !== $request->androidVivoReceiptId) {
            @$query['AndroidVivoReceiptId'] = $request->androidVivoReceiptId;
        }

        if (null !== $request->androidXiaoMiActivity) {
            @$query['AndroidXiaoMiActivity'] = $request->androidXiaoMiActivity;
        }

        if (null !== $request->androidXiaoMiNotifyBody) {
            @$query['AndroidXiaoMiNotifyBody'] = $request->androidXiaoMiNotifyBody;
        }

        if (null !== $request->androidXiaoMiNotifyTitle) {
            @$query['AndroidXiaoMiNotifyTitle'] = $request->androidXiaoMiNotifyTitle;
        }

        if (null !== $request->androidXiaomiBigPictureUrl) {
            @$query['AndroidXiaomiBigPictureUrl'] = $request->androidXiaomiBigPictureUrl;
        }

        if (null !== $request->androidXiaomiImageUrl) {
            @$query['AndroidXiaomiImageUrl'] = $request->androidXiaomiImageUrl;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->deviceType) {
            @$query['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->harmonyAction) {
            @$query['HarmonyAction'] = $request->harmonyAction;
        }

        if (null !== $request->harmonyActionType) {
            @$query['HarmonyActionType'] = $request->harmonyActionType;
        }

        if (null !== $request->harmonyBadgeAddNum) {
            @$query['HarmonyBadgeAddNum'] = $request->harmonyBadgeAddNum;
        }

        if (null !== $request->harmonyBadgeSetNum) {
            @$query['HarmonyBadgeSetNum'] = $request->harmonyBadgeSetNum;
        }

        if (null !== $request->harmonyCategory) {
            @$query['HarmonyCategory'] = $request->harmonyCategory;
        }

        if (null !== $request->harmonyExtParameters) {
            @$query['HarmonyExtParameters'] = $request->harmonyExtParameters;
        }

        if (null !== $request->harmonyExtensionExtraData) {
            @$query['HarmonyExtensionExtraData'] = $request->harmonyExtensionExtraData;
        }

        if (null !== $request->harmonyExtensionPush) {
            @$query['HarmonyExtensionPush'] = $request->harmonyExtensionPush;
        }

        if (null !== $request->harmonyImageUrl) {
            @$query['HarmonyImageUrl'] = $request->harmonyImageUrl;
        }

        if (null !== $request->harmonyInboxContent) {
            @$query['HarmonyInboxContent'] = $request->harmonyInboxContent;
        }

        if (null !== $request->harmonyLiveViewPayload) {
            @$query['HarmonyLiveViewPayload'] = $request->harmonyLiveViewPayload;
        }

        if (null !== $request->harmonyNotificationSlotType) {
            @$query['HarmonyNotificationSlotType'] = $request->harmonyNotificationSlotType;
        }

        if (null !== $request->harmonyNotifyId) {
            @$query['HarmonyNotifyId'] = $request->harmonyNotifyId;
        }

        if (null !== $request->harmonyReceiptId) {
            @$query['HarmonyReceiptId'] = $request->harmonyReceiptId;
        }

        if (null !== $request->harmonyRemind) {
            @$query['HarmonyRemind'] = $request->harmonyRemind;
        }

        if (null !== $request->harmonyRemindBody) {
            @$query['HarmonyRemindBody'] = $request->harmonyRemindBody;
        }

        if (null !== $request->harmonyRemindTitle) {
            @$query['HarmonyRemindTitle'] = $request->harmonyRemindTitle;
        }

        if (null !== $request->harmonyRenderStyle) {
            @$query['HarmonyRenderStyle'] = $request->harmonyRenderStyle;
        }

        if (null !== $request->harmonyTestMessage) {
            @$query['HarmonyTestMessage'] = $request->harmonyTestMessage;
        }

        if (null !== $request->harmonyUri) {
            @$query['HarmonyUri'] = $request->harmonyUri;
        }

        if (null !== $request->idempotentToken) {
            @$query['IdempotentToken'] = $request->idempotentToken;
        }

        if (null !== $request->jobKey) {
            @$query['JobKey'] = $request->jobKey;
        }

        if (null !== $request->pushTime) {
            @$query['PushTime'] = $request->pushTime;
        }

        if (null !== $request->pushType) {
            @$query['PushType'] = $request->pushType;
        }

        if (null !== $request->sendChannels) {
            @$query['SendChannels'] = $request->sendChannels;
        }

        if (null !== $request->sendSpeed) {
            @$query['SendSpeed'] = $request->sendSpeed;
        }

        if (null !== $request->smsDelaySecs) {
            @$query['SmsDelaySecs'] = $request->smsDelaySecs;
        }

        if (null !== $request->smsParams) {
            @$query['SmsParams'] = $request->smsParams;
        }

        if (null !== $request->smsSendPolicy) {
            @$query['SmsSendPolicy'] = $request->smsSendPolicy;
        }

        if (null !== $request->smsSignName) {
            @$query['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->smsTemplateName) {
            @$query['SmsTemplateName'] = $request->smsTemplateName;
        }

        if (null !== $request->storeOffline) {
            @$query['StoreOffline'] = $request->storeOffline;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->trim) {
            @$query['Trim'] = $request->trim;
        }

        if (null !== $request->iOSApnsEnv) {
            @$query['iOSApnsEnv'] = $request->iOSApnsEnv;
        }

        if (null !== $request->iOSBadge) {
            @$query['iOSBadge'] = $request->iOSBadge;
        }

        if (null !== $request->iOSBadgeAutoIncrement) {
            @$query['iOSBadgeAutoIncrement'] = $request->iOSBadgeAutoIncrement;
        }

        if (null !== $request->iOSExtParameters) {
            @$query['iOSExtParameters'] = $request->iOSExtParameters;
        }

        if (null !== $request->iOSInterruptionLevel) {
            @$query['iOSInterruptionLevel'] = $request->iOSInterruptionLevel;
        }

        if (null !== $request->iOSLiveActivityAttributes) {
            @$query['iOSLiveActivityAttributes'] = $request->iOSLiveActivityAttributes;
        }

        if (null !== $request->iOSLiveActivityAttributesType) {
            @$query['iOSLiveActivityAttributesType'] = $request->iOSLiveActivityAttributesType;
        }

        if (null !== $request->iOSLiveActivityContentState) {
            @$query['iOSLiveActivityContentState'] = $request->iOSLiveActivityContentState;
        }

        if (null !== $request->iOSLiveActivityDismissalDate) {
            @$query['iOSLiveActivityDismissalDate'] = $request->iOSLiveActivityDismissalDate;
        }

        if (null !== $request->iOSLiveActivityEvent) {
            @$query['iOSLiveActivityEvent'] = $request->iOSLiveActivityEvent;
        }

        if (null !== $request->iOSLiveActivityId) {
            @$query['iOSLiveActivityId'] = $request->iOSLiveActivityId;
        }

        if (null !== $request->iOSLiveActivityStaleDate) {
            @$query['iOSLiveActivityStaleDate'] = $request->iOSLiveActivityStaleDate;
        }

        if (null !== $request->iOSMusic) {
            @$query['iOSMusic'] = $request->iOSMusic;
        }

        if (null !== $request->iOSMutableContent) {
            @$query['iOSMutableContent'] = $request->iOSMutableContent;
        }

        if (null !== $request->iOSNotificationCategory) {
            @$query['iOSNotificationCategory'] = $request->iOSNotificationCategory;
        }

        if (null !== $request->iOSNotificationCollapseId) {
            @$query['iOSNotificationCollapseId'] = $request->iOSNotificationCollapseId;
        }

        if (null !== $request->iOSNotificationThreadId) {
            @$query['iOSNotificationThreadId'] = $request->iOSNotificationThreadId;
        }

        if (null !== $request->iOSRelevanceScore) {
            @$query['iOSRelevanceScore'] = $request->iOSRelevanceScore;
        }

        if (null !== $request->iOSRemind) {
            @$query['iOSRemind'] = $request->iOSRemind;
        }

        if (null !== $request->iOSRemindBody) {
            @$query['iOSRemindBody'] = $request->iOSRemindBody;
        }

        if (null !== $request->iOSSilentNotification) {
            @$query['iOSSilentNotification'] = $request->iOSSilentNotification;
        }

        if (null !== $request->iOSSubtitle) {
            @$query['iOSSubtitle'] = $request->iOSSubtitle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Push',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 高级推送接口.
     *
     * @param request - PushRequest
     *
     * @returns PushResponse
     *
     * @param PushRequest $request
     *
     * @return PushResponse
     */
    public function push($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushWithOptions($request, $runtime);
    }

    /**
     * 推送消息给Android设备.
     *
     * @param request - PushMessageToAndroidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushMessageToAndroidResponse
     *
     * @param PushMessageToAndroidRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PushMessageToAndroidResponse
     */
    public function pushMessageToAndroidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->jobKey) {
            @$query['JobKey'] = $request->jobKey;
        }

        if (null !== $request->storeOffline) {
            @$query['StoreOffline'] = $request->storeOffline;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushMessageToAndroid',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushMessageToAndroidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送消息给Android设备.
     *
     * @param request - PushMessageToAndroidRequest
     *
     * @returns PushMessageToAndroidResponse
     *
     * @param PushMessageToAndroidRequest $request
     *
     * @return PushMessageToAndroidResponse
     */
    public function pushMessageToAndroid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMessageToAndroidWithOptions($request, $runtime);
    }

    /**
     * 推送消息给iOS设备.
     *
     * @param request - PushMessageToiOSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushMessageToiOSResponse
     *
     * @param PushMessageToiOSRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMessageToiOSResponse
     */
    public function pushMessageToiOSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->jobKey) {
            @$query['JobKey'] = $request->jobKey;
        }

        if (null !== $request->storeOffline) {
            @$query['StoreOffline'] = $request->storeOffline;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushMessageToiOS',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushMessageToiOSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送消息给iOS设备.
     *
     * @param request - PushMessageToiOSRequest
     *
     * @returns PushMessageToiOSResponse
     *
     * @param PushMessageToiOSRequest $request
     *
     * @return PushMessageToiOSResponse
     */
    public function pushMessageToiOS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMessageToiOSWithOptions($request, $runtime);
    }

    /**
     * 推送通知给Android设备.
     *
     * @param request - PushNoticeToAndroidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushNoticeToAndroidResponse
     *
     * @param PushNoticeToAndroidRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushNoticeToAndroidResponse
     */
    public function pushNoticeToAndroidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->extParameters) {
            @$query['ExtParameters'] = $request->extParameters;
        }

        if (null !== $request->jobKey) {
            @$query['JobKey'] = $request->jobKey;
        }

        if (null !== $request->storeOffline) {
            @$query['StoreOffline'] = $request->storeOffline;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushNoticeToAndroid',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushNoticeToAndroidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送通知给Android设备.
     *
     * @param request - PushNoticeToAndroidRequest
     *
     * @returns PushNoticeToAndroidResponse
     *
     * @param PushNoticeToAndroidRequest $request
     *
     * @return PushNoticeToAndroidResponse
     */
    public function pushNoticeToAndroid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushNoticeToAndroidWithOptions($request, $runtime);
    }

    /**
     * 推送通知给iOS设备.
     *
     * @param request - PushNoticeToiOSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushNoticeToiOSResponse
     *
     * @param PushNoticeToiOSRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PushNoticeToiOSResponse
     */
    public function pushNoticeToiOSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apnsEnv) {
            @$query['ApnsEnv'] = $request->apnsEnv;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->extParameters) {
            @$query['ExtParameters'] = $request->extParameters;
        }

        if (null !== $request->jobKey) {
            @$query['JobKey'] = $request->jobKey;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushNoticeToiOS',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushNoticeToiOSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送通知给iOS设备.
     *
     * @param request - PushNoticeToiOSRequest
     *
     * @returns PushNoticeToiOSResponse
     *
     * @param PushNoticeToiOSRequest $request
     *
     * @return PushNoticeToiOSResponse
     */
    public function pushNoticeToiOS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushNoticeToiOSWithOptions($request, $runtime);
    }

    /**
     * 查询别名.
     *
     * @param request - QueryAliasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAliasesResponse
     *
     * @param QueryAliasesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAliasesResponse
     */
    public function queryAliasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAliases',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询别名.
     *
     * @param request - QueryAliasesRequest
     *
     * @returns QueryAliasesResponse
     *
     * @param QueryAliasesRequest $request
     *
     * @return QueryAliasesResponse
     */
    public function queryAliases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAliasesWithOptions($request, $runtime);
    }

    /**
     * 查询设备详情.
     *
     * @param request - QueryDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDeviceInfoResponse
     *
     * @param QueryDeviceInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceInfoResponse
     */
    public function queryDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDeviceInfo',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备详情.
     *
     * @param request - QueryDeviceInfoRequest
     *
     * @returns QueryDeviceInfoResponse
     *
     * @param QueryDeviceInfoRequest $request
     *
     * @return QueryDeviceInfoResponse
     */
    public function queryDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * 设备新增与留存.
     *
     * @param request - QueryDeviceStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDeviceStatResponse
     *
     * @param QueryDeviceStatRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceStatResponse
     */
    public function queryDeviceStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceType) {
            @$query['DeviceType'] = $request->deviceType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDeviceStat',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDeviceStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备新增与留存.
     *
     * @param request - QueryDeviceStatRequest
     *
     * @returns QueryDeviceStatResponse
     *
     * @param QueryDeviceStatRequest $request
     *
     * @return QueryDeviceStatResponse
     */
    public function queryDeviceStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceStatWithOptions($request, $runtime);
    }

    /**
     * 通过账户查询设备列表.
     *
     * @param request - QueryDevicesByAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDevicesByAccountResponse
     *
     * @param QueryDevicesByAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDevicesByAccountResponse
     */
    public function queryDevicesByAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDevicesByAccount',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDevicesByAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过账户查询设备列表.
     *
     * @param request - QueryDevicesByAccountRequest
     *
     * @returns QueryDevicesByAccountResponse
     *
     * @param QueryDevicesByAccountRequest $request
     *
     * @return QueryDevicesByAccountResponse
     */
    public function queryDevicesByAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicesByAccountWithOptions($request, $runtime);
    }

    /**
     * 通过别名查询设备列表.
     *
     * @param request - QueryDevicesByAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDevicesByAliasResponse
     *
     * @param QueryDevicesByAliasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDevicesByAliasResponse
     */
    public function queryDevicesByAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDevicesByAlias',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDevicesByAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过别名查询设备列表.
     *
     * @param request - QueryDevicesByAliasRequest
     *
     * @returns QueryDevicesByAliasResponse
     *
     * @param QueryDevicesByAliasRequest $request
     *
     * @return QueryDevicesByAliasResponse
     */
    public function queryDevicesByAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicesByAliasWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushRecordsResponse
     *
     * @param QueryPushRecordsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPushRecordsResponse
     */
    public function queryPushRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pushType) {
            @$query['PushType'] = $request->pushType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPushRecords',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushRecordsRequest
     *
     * @returns QueryPushRecordsResponse
     *
     * @param QueryPushRecordsRequest $request
     *
     * @return QueryPushRecordsResponse
     */
    public function queryPushRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushRecordsWithOptions($request, $runtime);
    }

    /**
     * App维度推送统计
     *
     * @param request - QueryPushStatByAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushStatByAppResponse
     *
     * @param QueryPushStatByAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPushStatByAppResponse
     */
    public function queryPushStatByAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPushStatByApp',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushStatByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * App维度推送统计
     *
     * @param request - QueryPushStatByAppRequest
     *
     * @returns QueryPushStatByAppResponse
     *
     * @param QueryPushStatByAppRequest $request
     *
     * @return QueryPushStatByAppResponse
     */
    public function queryPushStatByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushStatByAppWithOptions($request, $runtime);
    }

    /**
     * 任务维度推送统计
     *
     * @param request - QueryPushStatByMsgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushStatByMsgResponse
     *
     * @param QueryPushStatByMsgRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPushStatByMsgResponse
     */
    public function queryPushStatByMsgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPushStatByMsg',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushStatByMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务维度推送统计
     *
     * @param request - QueryPushStatByMsgRequest
     *
     * @returns QueryPushStatByMsgResponse
     *
     * @param QueryPushStatByMsgRequest $request
     *
     * @return QueryPushStatByMsgResponse
     */
    public function queryPushStatByMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushStatByMsgWithOptions($request, $runtime);
    }

    /**
     * 查询标签列表.
     *
     * @param request - QueryTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagsResponse
     *
     * @param QueryTagsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryTagsResponse
     */
    public function queryTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->clientKey) {
            @$query['ClientKey'] = $request->clientKey;
        }

        if (null !== $request->keyType) {
            @$query['KeyType'] = $request->keyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTags',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询标签列表.
     *
     * @param request - QueryTagsRequest
     *
     * @returns QueryTagsResponse
     *
     * @param QueryTagsRequest $request
     *
     * @return QueryTagsResponse
     */
    public function queryTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagsWithOptions($request, $runtime);
    }

    /**
     * 去重设备统计
     *
     * @param request - QueryUniqueDeviceStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUniqueDeviceStatResponse
     *
     * @param QueryUniqueDeviceStatRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUniqueDeviceStatResponse
     */
    public function queryUniqueDeviceStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUniqueDeviceStat',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUniqueDeviceStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 去重设备统计
     *
     * @param request - QueryUniqueDeviceStatRequest
     *
     * @returns QueryUniqueDeviceStatResponse
     *
     * @param QueryUniqueDeviceStatRequest $request
     *
     * @return QueryUniqueDeviceStatResponse
     */
    public function queryUniqueDeviceStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUniqueDeviceStatWithOptions($request, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param request - RemoveTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveTagResponse
     *
     * @param RemoveTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveTagResponse
     */
    public function removeTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveTag',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - RemoveTagRequest
     *
     * @returns RemoveTagResponse
     *
     * @param RemoveTagRequest $request
     *
     * @return RemoveTagResponse
     */
    public function removeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTagWithOptions($request, $runtime);
    }

    /**
     * 解绑别名.
     *
     * @param request - UnbindAliasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAliasResponse
     *
     * @param UnbindAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindAliasResponse
     */
    public function unbindAliasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliasName) {
            @$query['AliasName'] = $request->aliasName;
        }

        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->unbindAll) {
            @$query['UnbindAll'] = $request->unbindAll;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindAlias',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑别名.
     *
     * @param request - UnbindAliasRequest
     *
     * @returns UnbindAliasResponse
     *
     * @param UnbindAliasRequest $request
     *
     * @return UnbindAliasResponse
     */
    public function unbindAlias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAliasWithOptions($request, $runtime);
    }

    /**
     * 解绑手机号码
     *
     * @param request - UnbindPhoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindPhoneResponse
     *
     * @param UnbindPhoneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindPhoneResponse
     */
    public function unbindPhoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindPhone',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑手机号码
     *
     * @param request - UnbindPhoneRequest
     *
     * @returns UnbindPhoneResponse
     *
     * @param UnbindPhoneRequest $request
     *
     * @return UnbindPhoneResponse
     */
    public function unbindPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPhoneWithOptions($request, $runtime);
    }

    /**
     * 绑定标签.
     *
     * @param request - UnbindTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindTagResponse
     *
     * @param UnbindTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindTagResponse
     */
    public function unbindTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKey) {
            @$query['AppKey'] = $request->appKey;
        }

        if (null !== $request->clientKey) {
            @$query['ClientKey'] = $request->clientKey;
        }

        if (null !== $request->keyType) {
            @$query['KeyType'] = $request->keyType;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindTag',
            'version' => '2016-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定标签.
     *
     * @param request - UnbindTagRequest
     *
     * @returns UnbindTagResponse
     *
     * @param UnbindTagRequest $request
     *
     * @return UnbindTagResponse
     */
    public function unbindTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindTagWithOptions($request, $runtime);
    }
}
