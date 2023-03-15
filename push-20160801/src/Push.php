<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Push extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'cloudpush.aliyuncs.com',
            'ap-northeast-2-pop'          => 'cloudpush.aliyuncs.com',
            'ap-south-1'                  => 'cloudpush.aliyuncs.com',
            'ap-southeast-1'              => 'cloudpush.aliyuncs.com',
            'ap-southeast-2'              => 'cloudpush.aliyuncs.com',
            'ap-southeast-3'              => 'cloudpush.aliyuncs.com',
            'ap-southeast-5'              => 'cloudpush.aliyuncs.com',
            'cn-beijing'                  => 'cloudpush.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cloudpush.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cloudpush.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cloudpush.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cloudpush.aliyuncs.com',
            'cn-chengdu'                  => 'cloudpush.aliyuncs.com',
            'cn-edge-1'                   => 'cloudpush.aliyuncs.com',
            'cn-fujian'                   => 'cloudpush.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cloudpush.aliyuncs.com',
            'cn-hangzhou'                 => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cloudpush.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cloudpush.aliyuncs.com',
            'cn-hongkong'                 => 'cloudpush.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cloudpush.aliyuncs.com',
            'cn-huhehaote'                => 'cloudpush.aliyuncs.com',
            'cn-north-2-gov-1'            => 'cloudpush.aliyuncs.com',
            'cn-qingdao'                  => 'cloudpush.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cloudpush.aliyuncs.com',
            'cn-shanghai'                 => 'cloudpush.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cloudpush.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cloudpush.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cloudpush.aliyuncs.com',
            'cn-shanghai-inner'           => 'cloudpush.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cloudpush.aliyuncs.com',
            'cn-shenzhen'                 => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cloudpush.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cloudpush.aliyuncs.com',
            'cn-wuhan'                    => 'cloudpush.aliyuncs.com',
            'cn-yushanfang'               => 'cloudpush.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cloudpush.aliyuncs.com',
            'cn-zhangjiakou'              => 'cloudpush.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cloudpush.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cloudpush.aliyuncs.com',
            'eu-central-1'                => 'cloudpush.aliyuncs.com',
            'eu-west-1'                   => 'cloudpush.aliyuncs.com',
            'eu-west-1-oxs'               => 'cloudpush.aliyuncs.com',
            'me-east-1'                   => 'cloudpush.aliyuncs.com',
            'rus-west-1-pop'              => 'cloudpush.aliyuncs.com',
            'us-east-1'                   => 'cloudpush.aliyuncs.com',
            'us-west-1'                   => 'cloudpush.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param BindAliasRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BindAliasResponse
     */
    public function bindAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindAlias',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param BindPhoneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BindPhoneResponse
     */
    public function bindPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindPhone',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param BindTagRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return BindTagResponse
     */
    public function bindTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->clientKey)) {
            $query['ClientKey'] = $request->clientKey;
        }
        if (!Utils::isUnset($request->keyType)) {
            $query['KeyType'] = $request->keyType;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindTag',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelPushRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelPushResponse
     */
    public function cancelPushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelPush',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckCertificateResponse
     */
    public function checkCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckCertificate',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CheckDeviceRequest $request CheckDeviceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDeviceResponse CheckDeviceResponse
     */
    public function checkDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDevice',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CheckDeviceRequest $request CheckDeviceRequest
     *
     * @return CheckDeviceResponse CheckDeviceResponse
     */
    public function checkDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CheckDevicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckDevicesResponse
     */
    public function checkDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceIds)) {
            $query['DeviceIds'] = $request->deviceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDevices',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CompleteContinuouslyPushRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CompleteContinuouslyPushResponse
     */
    public function completeContinuouslyPushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompleteContinuouslyPush',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompleteContinuouslyPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ContinuouslyPushRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuouslyPushResponse
     */
    public function continuouslyPushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinuouslyPush',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinuouslyPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContinuouslyPushRequest $request
     *
     * @return ContinuouslyPushResponse
     */
    public function continuouslyPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuouslyPushWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSummaryAppsResponse ListSummaryAppsResponse
     */
    public function listSummaryAppsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListSummaryApps',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSummaryAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @return ListSummaryAppsResponse ListSummaryAppsResponse
     */
    public function listSummaryApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSummaryAppsWithOptions($runtime);
    }

    /**
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param MassPushRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MassPushResponse
     */
    public function massPushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pushTask)) {
            $body['PushTask'] = $request->pushTask;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MassPush',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MassPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return PushResponse
     */
    public function pushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->androidActivity)) {
            $query['AndroidActivity'] = $request->androidActivity;
        }
        if (!Utils::isUnset($request->androidBigBody)) {
            $query['AndroidBigBody'] = $request->androidBigBody;
        }
        if (!Utils::isUnset($request->androidBigPictureUrl)) {
            $query['AndroidBigPictureUrl'] = $request->androidBigPictureUrl;
        }
        if (!Utils::isUnset($request->androidBigTitle)) {
            $query['AndroidBigTitle'] = $request->androidBigTitle;
        }
        if (!Utils::isUnset($request->androidExtParameters)) {
            $query['AndroidExtParameters'] = $request->androidExtParameters;
        }
        if (!Utils::isUnset($request->androidHuaweiReceiptId)) {
            $query['AndroidHuaweiReceiptId'] = $request->androidHuaweiReceiptId;
        }
        if (!Utils::isUnset($request->androidHuaweiTargetUserType)) {
            $query['AndroidHuaweiTargetUserType'] = $request->androidHuaweiTargetUserType;
        }
        if (!Utils::isUnset($request->androidImageUrl)) {
            $query['AndroidImageUrl'] = $request->androidImageUrl;
        }
        if (!Utils::isUnset($request->androidInboxBody)) {
            $query['AndroidInboxBody'] = $request->androidInboxBody;
        }
        if (!Utils::isUnset($request->androidMessageHuaweiCategory)) {
            $query['AndroidMessageHuaweiCategory'] = $request->androidMessageHuaweiCategory;
        }
        if (!Utils::isUnset($request->androidMessageHuaweiUrgency)) {
            $query['AndroidMessageHuaweiUrgency'] = $request->androidMessageHuaweiUrgency;
        }
        if (!Utils::isUnset($request->androidMessageVivoCategory)) {
            $query['AndroidMessageVivoCategory'] = $request->androidMessageVivoCategory;
        }
        if (!Utils::isUnset($request->androidMusic)) {
            $query['AndroidMusic'] = $request->androidMusic;
        }
        if (!Utils::isUnset($request->androidNotificationBarPriority)) {
            $query['AndroidNotificationBarPriority'] = $request->androidNotificationBarPriority;
        }
        if (!Utils::isUnset($request->androidNotificationBarType)) {
            $query['AndroidNotificationBarType'] = $request->androidNotificationBarType;
        }
        if (!Utils::isUnset($request->androidNotificationChannel)) {
            $query['AndroidNotificationChannel'] = $request->androidNotificationChannel;
        }
        if (!Utils::isUnset($request->androidNotificationGroup)) {
            $query['AndroidNotificationGroup'] = $request->androidNotificationGroup;
        }
        if (!Utils::isUnset($request->androidNotificationHonorChannel)) {
            $query['AndroidNotificationHonorChannel'] = $request->androidNotificationHonorChannel;
        }
        if (!Utils::isUnset($request->androidNotificationHuaweiChannel)) {
            $query['AndroidNotificationHuaweiChannel'] = $request->androidNotificationHuaweiChannel;
        }
        if (!Utils::isUnset($request->androidNotificationNotifyId)) {
            $query['AndroidNotificationNotifyId'] = $request->androidNotificationNotifyId;
        }
        if (!Utils::isUnset($request->androidNotificationVivoChannel)) {
            $query['AndroidNotificationVivoChannel'] = $request->androidNotificationVivoChannel;
        }
        if (!Utils::isUnset($request->androidNotificationXiaomiChannel)) {
            $query['AndroidNotificationXiaomiChannel'] = $request->androidNotificationXiaomiChannel;
        }
        if (!Utils::isUnset($request->androidNotifyType)) {
            $query['AndroidNotifyType'] = $request->androidNotifyType;
        }
        if (!Utils::isUnset($request->androidOpenType)) {
            $query['AndroidOpenType'] = $request->androidOpenType;
        }
        if (!Utils::isUnset($request->androidOpenUrl)) {
            $query['AndroidOpenUrl'] = $request->androidOpenUrl;
        }
        if (!Utils::isUnset($request->androidPopupActivity)) {
            $query['AndroidPopupActivity'] = $request->androidPopupActivity;
        }
        if (!Utils::isUnset($request->androidPopupBody)) {
            $query['AndroidPopupBody'] = $request->androidPopupBody;
        }
        if (!Utils::isUnset($request->androidPopupTitle)) {
            $query['AndroidPopupTitle'] = $request->androidPopupTitle;
        }
        if (!Utils::isUnset($request->androidRemind)) {
            $query['AndroidRemind'] = $request->androidRemind;
        }
        if (!Utils::isUnset($request->androidRenderStyle)) {
            $query['AndroidRenderStyle'] = $request->androidRenderStyle;
        }
        if (!Utils::isUnset($request->androidVivoPushMode)) {
            $query['AndroidVivoPushMode'] = $request->androidVivoPushMode;
        }
        if (!Utils::isUnset($request->androidXiaoMiActivity)) {
            $query['AndroidXiaoMiActivity'] = $request->androidXiaoMiActivity;
        }
        if (!Utils::isUnset($request->androidXiaoMiNotifyBody)) {
            $query['AndroidXiaoMiNotifyBody'] = $request->androidXiaoMiNotifyBody;
        }
        if (!Utils::isUnset($request->androidXiaoMiNotifyTitle)) {
            $query['AndroidXiaoMiNotifyTitle'] = $request->androidXiaoMiNotifyTitle;
        }
        if (!Utils::isUnset($request->androidXiaomiBigPictureUrl)) {
            $query['AndroidXiaomiBigPictureUrl'] = $request->androidXiaomiBigPictureUrl;
        }
        if (!Utils::isUnset($request->androidXiaomiImageUrl)) {
            $query['AndroidXiaomiImageUrl'] = $request->androidXiaomiImageUrl;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $query['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->pushTime)) {
            $query['PushTime'] = $request->pushTime;
        }
        if (!Utils::isUnset($request->pushType)) {
            $query['PushType'] = $request->pushType;
        }
        if (!Utils::isUnset($request->sendChannels)) {
            $query['SendChannels'] = $request->sendChannels;
        }
        if (!Utils::isUnset($request->sendSpeed)) {
            $query['SendSpeed'] = $request->sendSpeed;
        }
        if (!Utils::isUnset($request->smsDelaySecs)) {
            $query['SmsDelaySecs'] = $request->smsDelaySecs;
        }
        if (!Utils::isUnset($request->smsParams)) {
            $query['SmsParams'] = $request->smsParams;
        }
        if (!Utils::isUnset($request->smsSendPolicy)) {
            $query['SmsSendPolicy'] = $request->smsSendPolicy;
        }
        if (!Utils::isUnset($request->smsSignName)) {
            $query['SmsSignName'] = $request->smsSignName;
        }
        if (!Utils::isUnset($request->smsTemplateName)) {
            $query['SmsTemplateName'] = $request->smsTemplateName;
        }
        if (!Utils::isUnset($request->storeOffline)) {
            $query['StoreOffline'] = $request->storeOffline;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->trim)) {
            $query['Trim'] = $request->trim;
        }
        if (!Utils::isUnset($request->iOSApnsEnv)) {
            $query['iOSApnsEnv'] = $request->iOSApnsEnv;
        }
        if (!Utils::isUnset($request->iOSBadge)) {
            $query['iOSBadge'] = $request->iOSBadge;
        }
        if (!Utils::isUnset($request->iOSBadgeAutoIncrement)) {
            $query['iOSBadgeAutoIncrement'] = $request->iOSBadgeAutoIncrement;
        }
        if (!Utils::isUnset($request->iOSExtParameters)) {
            $query['iOSExtParameters'] = $request->iOSExtParameters;
        }
        if (!Utils::isUnset($request->iOSInterruptionLevel)) {
            $query['iOSInterruptionLevel'] = $request->iOSInterruptionLevel;
        }
        if (!Utils::isUnset($request->iOSMusic)) {
            $query['iOSMusic'] = $request->iOSMusic;
        }
        if (!Utils::isUnset($request->iOSMutableContent)) {
            $query['iOSMutableContent'] = $request->iOSMutableContent;
        }
        if (!Utils::isUnset($request->iOSNotificationCategory)) {
            $query['iOSNotificationCategory'] = $request->iOSNotificationCategory;
        }
        if (!Utils::isUnset($request->iOSNotificationCollapseId)) {
            $query['iOSNotificationCollapseId'] = $request->iOSNotificationCollapseId;
        }
        if (!Utils::isUnset($request->iOSNotificationThreadId)) {
            $query['iOSNotificationThreadId'] = $request->iOSNotificationThreadId;
        }
        if (!Utils::isUnset($request->iOSRelevanceScore)) {
            $query['iOSRelevanceScore'] = $request->iOSRelevanceScore;
        }
        if (!Utils::isUnset($request->iOSRemind)) {
            $query['iOSRemind'] = $request->iOSRemind;
        }
        if (!Utils::isUnset($request->iOSRemindBody)) {
            $query['iOSRemindBody'] = $request->iOSRemindBody;
        }
        if (!Utils::isUnset($request->iOSSilentNotification)) {
            $query['iOSSilentNotification'] = $request->iOSSilentNotification;
        }
        if (!Utils::isUnset($request->iOSSubtitle)) {
            $query['iOSSubtitle'] = $request->iOSSubtitle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Push',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushMessageToAndroidRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PushMessageToAndroidResponse
     */
    public function pushMessageToAndroidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMessageToAndroid',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushMessageToAndroidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushMessageToiOSRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushMessageToiOSResponse
     */
    public function pushMessageToiOSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushMessageToiOS',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushMessageToiOSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushNoticeToAndroidRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushNoticeToAndroidResponse
     */
    public function pushNoticeToAndroidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->extParameters)) {
            $query['ExtParameters'] = $request->extParameters;
        }
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushNoticeToAndroid',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushNoticeToAndroidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushNoticeToiOSRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PushNoticeToiOSResponse
     */
    public function pushNoticeToiOSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apnsEnv)) {
            $query['ApnsEnv'] = $request->apnsEnv;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->extParameters)) {
            $query['ExtParameters'] = $request->extParameters;
        }
        if (!Utils::isUnset($request->jobKey)) {
            $query['JobKey'] = $request->jobKey;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushNoticeToiOS',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushNoticeToiOSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryAliasesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryAliasesResponse
     */
    public function queryAliasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAliases',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAliasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryDeviceInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceInfoResponse
     */
    public function queryDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceInfo',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryDeviceStatRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceStatResponse
     */
    public function queryDeviceStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $query['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceStat',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryDevicesByAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDevicesByAccountResponse
     */
    public function queryDevicesByAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicesByAccount',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicesByAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryDevicesByAliasRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryDevicesByAliasResponse
     */
    public function queryDevicesByAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alias)) {
            $query['Alias'] = $request->alias;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicesByAlias',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicesByAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushRecordsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPushRecordsResponse
     */
    public function queryPushRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pushType)) {
            $query['PushType'] = $request->pushType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPushRecords',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushStatByAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPushStatByAppResponse
     */
    public function queryPushStatByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPushStatByApp',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushStatByAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushStatByMsgRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPushStatByMsgResponse
     */
    public function queryPushStatByMsgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPushStatByMsg',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushStatByMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryTagsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryTagsResponse
     */
    public function queryTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->clientKey)) {
            $query['ClientKey'] = $request->clientKey;
        }
        if (!Utils::isUnset($request->keyType)) {
            $query['KeyType'] = $request->keyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTags',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryUniqueDeviceStatRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUniqueDeviceStatResponse
     */
    public function queryUniqueDeviceStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUniqueDeviceStat',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUniqueDeviceStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RemoveTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveTagResponse
     */
    public function removeTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveTag',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UnbindAliasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindAliasResponse
     */
    public function unbindAliasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->unbindAll)) {
            $query['UnbindAll'] = $request->unbindAll;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindAlias',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UnbindPhoneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindPhoneResponse
     */
    public function unbindPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindPhone',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UnbindTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UnbindTagResponse
     */
    public function unbindTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->clientKey)) {
            $query['ClientKey'] = $request->clientKey;
        }
        if (!Utils::isUnset($request->keyType)) {
            $query['KeyType'] = $request->keyType;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindTag',
            'version'     => '2016-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
