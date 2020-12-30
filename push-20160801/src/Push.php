<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Push\V20160801\Models\BindAliasRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindAliasResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\BindPhoneRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindPhoneResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\BindTagRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\BindTagResponse;
use AlibabaCloud\SDK\Push\V20160801\Models\CancelPushRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\CancelPushResponse;
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
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceCountRequest;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceCountResponse;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAliasResponse::fromMap($this->doRPCRequest('BindAlias', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindPhoneResponse::fromMap($this->doRPCRequest('BindPhone', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindTagResponse::fromMap($this->doRPCRequest('BindTag', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelPushResponse::fromMap($this->doRPCRequest('CancelPush', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDeviceResponse
     */
    public function checkDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDeviceResponse::fromMap($this->doRPCRequest('CheckDevice', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CheckDevicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckDevicesResponse
     */
    public function checkDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDevicesResponse::fromMap($this->doRPCRequest('CheckDevices', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteContinuouslyPushResponse::fromMap($this->doRPCRequest('CompleteContinuouslyPush', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ContinuouslyPushResponse::fromMap($this->doRPCRequest('ContinuouslyPush', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return ListSummaryAppsResponse
     */
    public function listSummaryAppsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListSummaryAppsResponse::fromMap($this->doRPCRequest('ListSummaryApps', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListSummaryAppsResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagsResponse::fromMap($this->doRPCRequest('ListTags', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MassPushResponse::fromMap($this->doRPCRequest('MassPush', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushResponse::fromMap($this->doRPCRequest('Push', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushMessageToAndroidResponse::fromMap($this->doRPCRequest('PushMessageToAndroid', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushMessageToiOSResponse::fromMap($this->doRPCRequest('PushMessageToiOS', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushNoticeToAndroidResponse::fromMap($this->doRPCRequest('PushNoticeToAndroid', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushNoticeToiOSResponse::fromMap($this->doRPCRequest('PushNoticeToiOS', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAliasesResponse::fromMap($this->doRPCRequest('QueryAliases', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDeviceCountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDeviceCountResponse
     */
    public function queryDeviceCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceCountResponse::fromMap($this->doRPCRequest('QueryDeviceCount', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceCountRequest $request
     *
     * @return QueryDeviceCountResponse
     */
    public function queryDeviceCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceCountWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceInfoResponse::fromMap($this->doRPCRequest('QueryDeviceInfo', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDevicesByAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDevicesByAccountResponse
     */
    public function queryDevicesByAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicesByAccountResponse::fromMap($this->doRPCRequest('QueryDevicesByAccount', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicesByAliasResponse::fromMap($this->doRPCRequest('QueryDevicesByAlias', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDeviceStatRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDeviceStatResponse
     */
    public function queryDeviceStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceStatResponse::fromMap($this->doRPCRequest('QueryDeviceStat', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryPushRecordsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPushRecordsResponse
     */
    public function queryPushRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPushRecordsResponse::fromMap($this->doRPCRequest('QueryPushRecords', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPushStatByAppResponse::fromMap($this->doRPCRequest('QueryPushStatByApp', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPushStatByMsgResponse::fromMap($this->doRPCRequest('QueryPushStatByMsg', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTagsResponse::fromMap($this->doRPCRequest('QueryTags', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUniqueDeviceStatResponse::fromMap($this->doRPCRequest('QueryUniqueDeviceStat', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTagResponse::fromMap($this->doRPCRequest('RemoveTag', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindAliasResponse::fromMap($this->doRPCRequest('UnbindAlias', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindPhoneResponse::fromMap($this->doRPCRequest('UnbindPhone', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindTagResponse::fromMap($this->doRPCRequest('UnbindTag', '2016-08-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
