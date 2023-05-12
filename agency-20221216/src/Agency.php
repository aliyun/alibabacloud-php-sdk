<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelSubscriptionBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelSubscriptionBillResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditEndUserStatusRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditEndUserStatusResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditNewBuyStatusRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditNewBuyStatusResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditZeroCreditShutdownRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditZeroCreditShutdownResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\SubscriptionBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\SubscriptionBillResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Agency extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'agency.aliyuncs.com',
            'ap-northeast-2-pop'          => 'agency.aliyuncs.com',
            'ap-south-1'                  => 'agency.aliyuncs.com',
            'ap-southeast-2'              => 'agency.aliyuncs.com',
            'ap-southeast-3'              => 'agency.aliyuncs.com',
            'ap-southeast-5'              => 'agency.aliyuncs.com',
            'cn-beijing'                  => 'agency.aliyuncs.com',
            'cn-beijing-finance-1'        => 'agency.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'agency.aliyuncs.com',
            'cn-beijing-gov-1'            => 'agency.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'agency.aliyuncs.com',
            'cn-chengdu'                  => 'agency.aliyuncs.com',
            'cn-edge-1'                   => 'agency.aliyuncs.com',
            'cn-fujian'                   => 'agency.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'agency.aliyuncs.com',
            'cn-hangzhou'                 => 'agency.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'agency.aliyuncs.com',
            'cn-hangzhou-finance'         => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'agency.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'agency.aliyuncs.com',
            'cn-hongkong'                 => 'agency.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'agency.aliyuncs.com',
            'cn-huhehaote'                => 'agency.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'agency.aliyuncs.com',
            'cn-north-2-gov-1'            => 'agency.aliyuncs.com',
            'cn-qingdao'                  => 'agency.aliyuncs.com',
            'cn-qingdao-nebula'           => 'agency.aliyuncs.com',
            'cn-shanghai'                 => 'agency.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'agency.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'agency.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'agency.aliyuncs.com',
            'cn-shanghai-inner'           => 'agency.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'agency.aliyuncs.com',
            'cn-shenzhen'                 => 'agency.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'agency.aliyuncs.com',
            'cn-shenzhen-inner'           => 'agency.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'agency.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'agency.aliyuncs.com',
            'cn-wuhan'                    => 'agency.aliyuncs.com',
            'cn-wulanchabu'               => 'agency.aliyuncs.com',
            'cn-yushanfang'               => 'agency.aliyuncs.com',
            'cn-zhangbei'                 => 'agency.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'agency.aliyuncs.com',
            'cn-zhangjiakou'              => 'agency.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'agency.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'agency.aliyuncs.com',
            'eu-central-1'                => 'agency.aliyuncs.com',
            'eu-west-1'                   => 'agency.aliyuncs.com',
            'eu-west-1-oxs'               => 'agency.aliyuncs.com',
            'me-east-1'                   => 'agency.aliyuncs.com',
            'rus-west-1-pop'              => 'agency.aliyuncs.com',
            'us-east-1'                   => 'agency.aliyuncs.com',
            'us-west-1'                   => 'agency.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agency', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     *   * You can call this operation to cancel the subscription to only one type of bill at a time.
     *   * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     *   * **This topic is published only on the international site (alibabacloud.com).
     *   *
     * @param CancelSubscriptionBillRequest $request CancelSubscriptionBillRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelSubscriptionBillResponse CancelSubscriptionBillResponse
     */
    public function cancelSubscriptionBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subscribeType)) {
            $query['SubscribeType'] = $request->subscribeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelSubscriptionBill',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelSubscriptionBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     *   * You can call this operation to cancel the subscription to only one type of bill at a time.
     *   * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     *   * **This topic is published only on the international site (alibabacloud.com).
     *   *
     * @param CancelSubscriptionBillRequest $request CancelSubscriptionBillRequest
     *
     * @return CancelSubscriptionBillResponse CancelSubscriptionBillResponse
     */
    public function cancelSubscriptionBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSubscriptionBillWithOptions($request, $runtime);
    }

    /**
     * @param EditEndUserStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EditEndUserStatusResponse
     */
    public function editEndUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditEndUserStatus',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditEndUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditEndUserStatusRequest $request
     *
     * @return EditEndUserStatusResponse
     */
    public function editEndUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editEndUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param EditNewBuyStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EditNewBuyStatusResponse
     */
    public function editNewBuyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newBuyStatus)) {
            $query['NewBuyStatus'] = $request->newBuyStatus;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditNewBuyStatus',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditNewBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditNewBuyStatusRequest $request
     *
     * @return EditNewBuyStatusResponse
     */
    public function editNewBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editNewBuyStatusWithOptions($request, $runtime);
    }

    /**
     * @param EditZeroCreditShutdownRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EditZeroCreditShutdownResponse
     */
    public function editZeroCreditShutdownWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->shutdownPolicy)) {
            $query['ShutdownPolicy'] = $request->shutdownPolicy;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditZeroCreditShutdown',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditZeroCreditShutdownResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditZeroCreditShutdownRequest $request
     *
     * @return EditZeroCreditShutdownResponse
     */
    public function editZeroCreditShutdown($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editZeroCreditShutdownWithOptions($request, $runtime);
    }

    /**
     * *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     *   * *   You can call this operation to subscribe to only one type of bill at a time.
     *   * *   After the subscription to a type of bill is generated, the bill for the previous day is pushed on a daily basis from the next day. On the fifth day of each month, the full-data bill for the previous month is pushed.
     *   * *   A daily bill may be delayed. The delayed bill is pushed the next day after it is generated. The delayed bill may contain the bill data that is delayed until the previous day. We recommend that you query the full-data bill for the previous month at the beginning of each month.
     *   * *   Your account must be granted the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     *   * *   The following file name formats are supported for bills:
     *   * ```
     *   * BillingItemDetailForBillingPeriod.
     *   *
     *   * File name format of a daily bill: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *   *
     *   * File name format of a monthly full-data bill: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     *   * InstanceDetailForBillingPeriod
     *   *
     *   *  File name format of a daily bill: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *   *
     *   * File name format of a monthly full-data bill: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     *   * BillingItemDetailMonthly
     *   *
     *   * File name format of a daily bill: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     *   * InstanceDetailMonthly
     *   *
     *   * File name format of a daily bill: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     *   * The fileNo field exists only when the number of bill rows reaches the maximum rows in a single bill file and the bill is split into multiple files.
     *   * ```
     *   * **This topic is published only on the international site (alibabacloud.com).
     *   *
     * @param SubscriptionBillRequest $request SubscriptionBillRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubscriptionBillResponse SubscriptionBillResponse
     */
    public function subscriptionBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginBillingCycle)) {
            $query['BeginBillingCycle'] = $request->beginBillingCycle;
        }
        if (!Utils::isUnset($request->billFormat)) {
            $query['BillFormat'] = $request->billFormat;
        }
        if (!Utils::isUnset($request->bucketOwnerId)) {
            $query['BucketOwnerId'] = $request->bucketOwnerId;
        }
        if (!Utils::isUnset($request->subscribeBucket)) {
            $query['SubscribeBucket'] = $request->subscribeBucket;
        }
        if (!Utils::isUnset($request->subscribeSegmentSize)) {
            $query['SubscribeSegmentSize'] = $request->subscribeSegmentSize;
        }
        if (!Utils::isUnset($request->subscribeType)) {
            $query['SubscribeType'] = $request->subscribeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubscriptionBill',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubscriptionBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     *   * *   You can call this operation to subscribe to only one type of bill at a time.
     *   * *   After the subscription to a type of bill is generated, the bill for the previous day is pushed on a daily basis from the next day. On the fifth day of each month, the full-data bill for the previous month is pushed.
     *   * *   A daily bill may be delayed. The delayed bill is pushed the next day after it is generated. The delayed bill may contain the bill data that is delayed until the previous day. We recommend that you query the full-data bill for the previous month at the beginning of each month.
     *   * *   Your account must be granted the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     *   * *   The following file name formats are supported for bills:
     *   * ```
     *   * BillingItemDetailForBillingPeriod.
     *   *
     *   * File name format of a daily bill: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *   *
     *   * File name format of a monthly full-data bill: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     *   * InstanceDetailForBillingPeriod
     *   *
     *   *  File name format of a daily bill: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *   *
     *   * File name format of a monthly full-data bill: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     *   * BillingItemDetailMonthly
     *   *
     *   * File name format of a daily bill: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     *   * InstanceDetailMonthly
     *   *
     *   * File name format of a daily bill: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     *   * The fileNo field exists only when the number of bill rows reaches the maximum rows in a single bill file and the bill is split into multiple files.
     *   * ```
     *   * **This topic is published only on the international site (alibabacloud.com).
     *   *
     * @param SubscriptionBillRequest $request SubscriptionBillRequest
     *
     * @return SubscriptionBillResponse SubscriptionBillResponse
     */
    public function subscriptionBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscriptionBillWithOptions($request, $runtime);
    }
}
