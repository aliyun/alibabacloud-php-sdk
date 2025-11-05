<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelCouponRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelCouponResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelSubscriptionBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CancelSubscriptionBillResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\CouponApprovalStatusListRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CouponApprovalStatusListResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\CreateCouponTemplateRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CreateCouponTemplateResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\CreateCouponTemplateShrinkRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CreateCustomerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CreateCustomerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\CustomerQuotaRecordListRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\CustomerQuotaRecordListResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\DeductOutstandingBalanceRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\DeductOutstandingBalanceResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\DeleteCouponTemplateRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\DeleteCouponTemplateResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditEndUserStatusRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditEndUserStatusResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditNewBuyStatusRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditNewBuyStatusResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditZeroCreditShutdownRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\EditZeroCreditShutdownResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ExportCustomerQuotaRecordRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ExportCustomerQuotaRecordResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ExportReversedDeductionHistoryRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ExportReversedDeductionHistoryResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCommissionableProductsRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCommissionableProductsResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCommissionableProductsShrinkRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCoupondeductProductCodeRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCoupondeductProductCodeResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCouponTemplateDetailRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCouponTemplateDetailResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCreditInfoRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCreditInfoResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCustomerOrdersRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetCustomerOrdersResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetDailyBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetDailyBillResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetMonthlyBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetMonthlyBillResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCountriesResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListExportTasksRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListExportTasksResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\QueryReversedDeductionHistoryRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\QueryReversedDeductionHistoryResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\QuotaListExportPagedRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\QuotaListExportPagedResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ResendEmailRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ResendEmailResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetAccountInfoRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetAccountInfoResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetCreditLineRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetCreditLineResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetWarningThresholdRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\SetWarningThresholdResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\SubscriptionBillRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\SubscriptionBillResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Agency extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'agency.aliyuncs.com',
            'ap-northeast-2-pop' => 'agency.aliyuncs.com',
            'ap-south-1' => 'agency.aliyuncs.com',
            'ap-southeast-2' => 'agency.aliyuncs.com',
            'ap-southeast-3' => 'agency.aliyuncs.com',
            'ap-southeast-5' => 'agency.aliyuncs.com',
            'cn-beijing' => 'agency.aliyuncs.com',
            'cn-beijing-finance-1' => 'agency.aliyuncs.com',
            'cn-beijing-finance-pop' => 'agency.aliyuncs.com',
            'cn-beijing-gov-1' => 'agency.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'agency.aliyuncs.com',
            'cn-chengdu' => 'agency.aliyuncs.com',
            'cn-edge-1' => 'agency.aliyuncs.com',
            'cn-fujian' => 'agency.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'agency.aliyuncs.com',
            'cn-hangzhou' => 'agency.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'agency.aliyuncs.com',
            'cn-hangzhou-finance' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'agency.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'agency.aliyuncs.com',
            'cn-hangzhou-test-306' => 'agency.aliyuncs.com',
            'cn-hongkong' => 'agency.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'agency.aliyuncs.com',
            'cn-huhehaote' => 'agency.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'agency.aliyuncs.com',
            'cn-north-2-gov-1' => 'agency.aliyuncs.com',
            'cn-qingdao' => 'agency.aliyuncs.com',
            'cn-qingdao-nebula' => 'agency.aliyuncs.com',
            'cn-shanghai' => 'agency.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'agency.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'agency.aliyuncs.com',
            'cn-shanghai-finance-1' => 'agency.aliyuncs.com',
            'cn-shanghai-inner' => 'agency.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'agency.aliyuncs.com',
            'cn-shenzhen' => 'agency.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'agency.aliyuncs.com',
            'cn-shenzhen-inner' => 'agency.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'agency.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'agency.aliyuncs.com',
            'cn-wuhan' => 'agency.aliyuncs.com',
            'cn-wulanchabu' => 'agency.aliyuncs.com',
            'cn-yushanfang' => 'agency.aliyuncs.com',
            'cn-zhangbei' => 'agency.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'agency.aliyuncs.com',
            'cn-zhangjiakou' => 'agency.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'agency.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'agency.aliyuncs.com',
            'eu-central-1' => 'agency.aliyuncs.com',
            'eu-west-1' => 'agency.aliyuncs.com',
            'eu-west-1-oxs' => 'agency.aliyuncs.com',
            'me-east-1' => 'agency.aliyuncs.com',
            'rus-west-1-pop' => 'agency.aliyuncs.com',
            'us-east-1' => 'agency.aliyuncs.com',
            'us-west-1' => 'agency.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 作废优惠券.
     *
     * @param request - CancelCouponRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCouponResponse
     *
     * @param CancelCouponRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelCouponResponse
     */
    public function cancelCouponWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCoupon',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCouponResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作废优惠券.
     *
     * @param request - CancelCouponRequest
     *
     * @returns CancelCouponResponse
     *
     * @param CancelCouponRequest $request
     *
     * @return CancelCouponResponse
     */
    public function cancelCoupon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCouponWithOptions($request, $runtime);
    }

    /**
     * Cancels the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *
     * @remarks
     * Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * You can call this operation to cancel the subscription to only one type of bill at a time.
     * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     * **This topic is published only on the international site (alibabacloud.com).
     *
     * @param request - CancelSubscriptionBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSubscriptionBillResponse
     *
     * @param CancelSubscriptionBillRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelSubscriptionBillResponse
     */
    public function cancelSubscriptionBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subscribeType) {
            @$query['SubscribeType'] = $request->subscribeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelSubscriptionBill',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSubscriptionBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *
     * @remarks
     * Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * You can call this operation to cancel the subscription to only one type of bill at a time.
     * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     * **This topic is published only on the international site (alibabacloud.com).
     *
     * @param request - CancelSubscriptionBillRequest
     *
     * @returns CancelSubscriptionBillResponse
     *
     * @param CancelSubscriptionBillRequest $request
     *
     * @return CancelSubscriptionBillResponse
     */
    public function cancelSubscriptionBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSubscriptionBillWithOptions($request, $runtime);
    }

    /**
     * 优惠券审批状态列表.
     *
     * @param request - CouponApprovalStatusListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CouponApprovalStatusListResponse
     *
     * @param CouponApprovalStatusListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CouponApprovalStatusListResponse
     */
    public function couponApprovalStatusListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateStatus) {
            @$query['TemplateStatus'] = $request->templateStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CouponApprovalStatusList',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CouponApprovalStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 优惠券审批状态列表.
     *
     * @param request - CouponApprovalStatusListRequest
     *
     * @returns CouponApprovalStatusListResponse
     *
     * @param CouponApprovalStatusListRequest $request
     *
     * @return CouponApprovalStatusListResponse
     */
    public function couponApprovalStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->couponApprovalStatusListWithOptions($request, $runtime);
    }

    /**
     * 创建优惠券模板
     *
     * @param tmpReq - CreateCouponTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCouponTemplateResponse
     *
     * @param CreateCouponTemplateRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCouponTemplateResponse
     */
    public function createCouponTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCouponTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->productType) {
            $request->productTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productType, 'ProductType', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->applicableProducts) {
            @$query['ApplicableProducts'] = $request->applicableProducts;
        }

        if (null !== $request->costBearer) {
            @$query['CostBearer'] = $request->costBearer;
        }

        if (null !== $request->couponDescription) {
            @$query['CouponDescription'] = $request->couponDescription;
        }

        if (null !== $request->expireddate) {
            @$query['Expireddate'] = $request->expireddate;
        }

        if (null !== $request->limitPerPerson) {
            @$query['LimitPerPerson'] = $request->limitPerPerson;
        }

        if (null !== $request->productTypeShrink) {
            @$query['ProductType'] = $request->productTypeShrink;
        }

        if (null !== $request->purchaseType) {
            @$query['PurchaseType'] = $request->purchaseType;
        }

        if (null !== $request->reasonForApplication) {
            @$query['ReasonForApplication'] = $request->reasonForApplication;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->vailddate) {
            @$query['Vailddate'] = $request->vailddate;
        }

        if (null !== $request->vaildperioddays) {
            @$query['Vaildperioddays'] = $request->vaildperioddays;
        }

        if (null !== $request->validUntil) {
            @$query['ValidUntil'] = $request->validUntil;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCouponTemplate',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCouponTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建优惠券模板
     *
     * @param request - CreateCouponTemplateRequest
     *
     * @returns CreateCouponTemplateResponse
     *
     * @param CreateCouponTemplateRequest $request
     *
     * @return CreateCouponTemplateResponse
     */
    public function createCouponTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCouponTemplateWithOptions($request, $runtime);
    }

    /**
     * This function is designed for create a customer who is to be invited.
     *
     * @param request - CreateCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomerResponse
     *
     * @param CreateCustomerRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCustomerResponse
     */
    public function createCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerName) {
            @$query['CustomerName'] = $request->customerName;
        }

        if (null !== $request->customerSource) {
            @$query['CustomerSource'] = $request->customerSource;
        }

        if (null !== $request->customerSubTrade) {
            @$query['CustomerSubTrade'] = $request->customerSubTrade;
        }

        if (null !== $request->customerTrade) {
            @$query['CustomerTrade'] = $request->customerTrade;
        }

        if (null !== $request->nation) {
            @$query['Nation'] = $request->nation;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomer',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This function is designed for create a customer who is to be invited.
     *
     * @param request - CreateCustomerRequest
     *
     * @returns CreateCustomerResponse
     *
     * @param CreateCustomerRequest $request
     *
     * @return CreateCustomerResponse
     */
    public function createCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerWithOptions($request, $runtime);
    }

    /**
     * Query quota adjustment list of Distribution Customer from International Site. Not available on Domestic Site.
     *
     * @param request - CustomerQuotaRecordListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CustomerQuotaRecordListResponse
     *
     * @param CustomerQuotaRecordListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CustomerQuotaRecordListResponse
     */
    public function customerQuotaRecordListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CustomerQuotaRecordList',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CustomerQuotaRecordListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query quota adjustment list of Distribution Customer from International Site. Not available on Domestic Site.
     *
     * @param request - CustomerQuotaRecordListRequest
     *
     * @returns CustomerQuotaRecordListResponse
     *
     * @param CustomerQuotaRecordListRequest $request
     *
     * @return CustomerQuotaRecordListResponse
     */
    public function customerQuotaRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customerQuotaRecordListWithOptions($request, $runtime);
    }

    /**
     * This API is used to offset the Deducted Credit of a Distribution Customer. For example, if the current Deducted Credit is 500 and the Available Credit is 1000, by offsetting 300, the Deducted Credit will then become 200, and the Available Credit becomes 1300.
     *
     * @remarks
     * Note that sometimes you may find that the customer\\"s Used Credit is negative. This indicates that there is no need to restore the Used Credit, and its ready for customer\\"s usage. This phenomenon occurs because a refund is generated while the customer\\"s credit is full, thereby triggered additional increasing on the customer\\"s credit.
     * For example, if the customer\\"s maximum Available Credit is 1000 with no usage, and a refund of 300 occurs, the Used Credit will become -300.
     *
     * @param request - DeductOutstandingBalanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeductOutstandingBalanceResponse
     *
     * @param DeductOutstandingBalanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeductOutstandingBalanceResponse
     */
    public function deductOutstandingBalanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deductAmount) {
            @$query['DeductAmount'] = $request->deductAmount;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeductOutstandingBalance',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeductOutstandingBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is used to offset the Deducted Credit of a Distribution Customer. For example, if the current Deducted Credit is 500 and the Available Credit is 1000, by offsetting 300, the Deducted Credit will then become 200, and the Available Credit becomes 1300.
     *
     * @remarks
     * Note that sometimes you may find that the customer\\"s Used Credit is negative. This indicates that there is no need to restore the Used Credit, and its ready for customer\\"s usage. This phenomenon occurs because a refund is generated while the customer\\"s credit is full, thereby triggered additional increasing on the customer\\"s credit.
     * For example, if the customer\\"s maximum Available Credit is 1000 with no usage, and a refund of 300 occurs, the Used Credit will become -300.
     *
     * @param request - DeductOutstandingBalanceRequest
     *
     * @returns DeductOutstandingBalanceResponse
     *
     * @param DeductOutstandingBalanceRequest $request
     *
     * @return DeductOutstandingBalanceResponse
     */
    public function deductOutstandingBalance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deductOutstandingBalanceWithOptions($request, $runtime);
    }

    /**
     * 作废优惠券模板
     *
     * @param request - DeleteCouponTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCouponTemplateResponse
     *
     * @param DeleteCouponTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCouponTemplateResponse
     */
    public function deleteCouponTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCouponTemplate',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCouponTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作废优惠券模板
     *
     * @param request - DeleteCouponTemplateRequest
     *
     * @returns DeleteCouponTemplateResponse
     *
     * @param DeleteCouponTemplateRequest $request
     *
     * @return DeleteCouponTemplateResponse
     */
    public function deleteCouponTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCouponTemplateWithOptions($request, $runtime);
    }

    /**
     * Set the after-shutdown instance status for post-pay End Users as a Reseller.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditEndUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditEndUserStatusResponse
     *
     * @param EditEndUserStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EditEndUserStatusResponse
     */
    public function editEndUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditEndUserStatus',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditEndUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Set the after-shutdown instance status for post-pay End Users as a Reseller.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditEndUserStatusRequest
     *
     * @returns EditEndUserStatusResponse
     *
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
     * Set the New Buy status for Sub-Customer as a Partner.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditNewBuyStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditNewBuyStatusResponse
     *
     * @param EditNewBuyStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EditNewBuyStatusResponse
     */
    public function editNewBuyStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newBuyStatus) {
            @$query['NewBuyStatus'] = $request->newBuyStatus;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditNewBuyStatus',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditNewBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Set the New Buy status for Sub-Customer as a Partner.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditNewBuyStatusRequest
     *
     * @returns EditNewBuyStatusResponse
     *
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
     * Modify the End User\\"s Shutdown Policy as a Reseller.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditZeroCreditShutdownRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditZeroCreditShutdownResponse
     *
     * @param EditZeroCreditShutdownRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return EditZeroCreditShutdownResponse
     */
    public function editZeroCreditShutdownWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->shutdownPolicy) {
            @$query['ShutdownPolicy'] = $request->shutdownPolicy;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditZeroCreditShutdown',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditZeroCreditShutdownResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the End User\\"s Shutdown Policy as a Reseller.
     *
     * @remarks
     * The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *
     * @param request - EditZeroCreditShutdownRequest
     *
     * @returns EditZeroCreditShutdownResponse
     *
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
     * Export quota amount adjustment history as a Distribution Customer from International Site. Only available on International Site.
     *
     * @remarks
     * Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *
     * @param request - ExportCustomerQuotaRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCustomerQuotaRecordResponse
     *
     * @param ExportCustomerQuotaRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportCustomerQuotaRecordResponse
     */
    public function exportCustomerQuotaRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->endUserPk) {
            @$query['EndUserPk'] = $request->endUserPk;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportCustomerQuotaRecord',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportCustomerQuotaRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export quota amount adjustment history as a Distribution Customer from International Site. Only available on International Site.
     *
     * @remarks
     * Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *
     * @param request - ExportCustomerQuotaRecordRequest
     *
     * @returns ExportCustomerQuotaRecordResponse
     *
     * @param ExportCustomerQuotaRecordRequest $request
     *
     * @return ExportCustomerQuotaRecordResponse
     */
    public function exportCustomerQuotaRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCustomerQuotaRecordWithOptions($request, $runtime);
    }

    /**
     * 额度冲减明细列表导出接口.
     *
     * @param request - ExportReversedDeductionHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportReversedDeductionHistoryResponse
     *
     * @param ExportReversedDeductionHistoryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ExportReversedDeductionHistoryResponse
     */
    public function exportReversedDeductionHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->exportUid) {
            @$query['ExportUid'] = $request->exportUid;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportReversedDeductionHistory',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportReversedDeductionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 额度冲减明细列表导出接口.
     *
     * @param request - ExportReversedDeductionHistoryRequest
     *
     * @returns ExportReversedDeductionHistoryResponse
     *
     * @param ExportReversedDeductionHistoryRequest $request
     *
     * @return ExportReversedDeductionHistoryResponse
     */
    public function exportReversedDeductionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportReversedDeductionHistoryWithOptions($request, $runtime);
    }

    /**
     * Return Distribution Customer\\"s account information.
     *
     * @param request - GetAccountInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountInfoResponse
     *
     * @param GetAccountInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccountInfoResponse
     */
    public function getAccountInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountInfo',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Return Distribution Customer\\"s account information.
     *
     * @param request - GetAccountInfoRequest
     *
     * @returns GetAccountInfoResponse
     *
     * @param GetAccountInfoRequest $request
     *
     * @return GetAccountInfoResponse
     */
    public function getAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountInfoWithOptions($request, $runtime);
    }

    /**
     * 提供返佣商品API.
     *
     * @param tmpReq - GetCommissionableProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCommissionableProductsResponse
     *
     * @param GetCommissionableProductsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetCommissionableProductsResponse
     */
    public function getCommissionableProductsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetCommissionableProductsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listShowStatusList) {
            $request->listShowStatusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listShowStatusList, 'ListShowStatusList', 'simple');
        }

        $query = [];
        if (null !== $request->commodityCodeList) {
            @$query['CommodityCodeList'] = $request->commodityCodeList;
        }

        if (null !== $request->fiscalYear) {
            @$query['FiscalYear'] = $request->fiscalYear;
        }

        if (null !== $request->listShowStatusListShrink) {
            @$query['ListShowStatusList'] = $request->listShowStatusListShrink;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pipCodeList) {
            @$query['PipCodeList'] = $request->pipCodeList;
        }

        if (null !== $request->realEndMonth) {
            @$query['RealEndMonth'] = $request->realEndMonth;
        }

        if (null !== $request->realStartMonth) {
            @$query['RealStartMonth'] = $request->realStartMonth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCommissionableProducts',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCommissionableProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提供返佣商品API.
     *
     * @param request - GetCommissionableProductsRequest
     *
     * @returns GetCommissionableProductsResponse
     *
     * @param GetCommissionableProductsRequest $request
     *
     * @return GetCommissionableProductsResponse
     */
    public function getCommissionableProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommissionableProductsWithOptions($request, $runtime);
    }

    /**
     * 查询优惠券模板详情.
     *
     * @param request - GetCouponTemplateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCouponTemplateDetailResponse
     *
     * @param GetCouponTemplateDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCouponTemplateDetailResponse
     */
    public function getCouponTemplateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCouponTemplateDetail',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCouponTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询优惠券模板详情.
     *
     * @param request - GetCouponTemplateDetailRequest
     *
     * @returns GetCouponTemplateDetailResponse
     *
     * @param GetCouponTemplateDetailRequest $request
     *
     * @return GetCouponTemplateDetailResponse
     */
    public function getCouponTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCouponTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * 国际渠道分销优惠券可抵扣产品
     *
     * @param request - GetCoupondeductProductCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCoupondeductProductCodeResponse
     *
     * @param GetCoupondeductProductCodeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCoupondeductProductCodeResponse
     */
    public function getCoupondeductProductCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCoupondeductProductCode',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCoupondeductProductCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际渠道分销优惠券可抵扣产品
     *
     * @param request - GetCoupondeductProductCodeRequest
     *
     * @returns GetCoupondeductProductCodeResponse
     *
     * @param GetCoupondeductProductCodeRequest $request
     *
     * @return GetCoupondeductProductCodeResponse
     */
    public function getCoupondeductProductCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoupondeductProductCodeWithOptions($request, $runtime);
    }

    /**
     * Query Credit Control information of Distribution Customers. The PopCreditInfoJson in the Return Parameter will be empty if the Distribution Customer is an Agency. This function is only available for Resellers and Distributors.
     *
     * @param request - GetCreditInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCreditInfoResponse
     *
     * @param GetCreditInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCreditInfoResponse
     */
    public function getCreditInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCreditInfo',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCreditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Credit Control information of Distribution Customers. The PopCreditInfoJson in the Return Parameter will be empty if the Distribution Customer is an Agency. This function is only available for Resellers and Distributors.
     *
     * @param request - GetCreditInfoRequest
     *
     * @returns GetCreditInfoResponse
     *
     * @param GetCreditInfoRequest $request
     *
     * @return GetCreditInfoResponse
     */
    public function getCreditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreditInfoWithOptions($request, $runtime);
    }

    /**
     * 客户订单查询.
     *
     * @param request - GetCustomerOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerOrdersResponse
     *
     * @param GetCustomerOrdersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCustomerOrdersResponse
     */
    public function getCustomerOrdersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerOrders',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 客户订单查询.
     *
     * @param request - GetCustomerOrdersRequest
     *
     * @returns GetCustomerOrdersResponse
     *
     * @param GetCustomerOrdersRequest $request
     *
     * @return GetCustomerOrdersResponse
     */
    public function getCustomerOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerOrdersWithOptions($request, $runtime);
    }

    /**
     * Issue Distributor\\"s daily Bill. This function is only available for Resellers and Distributors.
     *
     * @param request - GetDailyBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDailyBillResponse
     *
     * @param GetDailyBillRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDailyBillResponse
     */
    public function getDailyBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwner) {
            @$query['BillOwner'] = $request->billOwner;
        }

        if (null !== $request->billType) {
            @$query['BillType'] = $request->billType;
        }

        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDailyBill',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDailyBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issue Distributor\\"s daily Bill. This function is only available for Resellers and Distributors.
     *
     * @param request - GetDailyBillRequest
     *
     * @returns GetDailyBillResponse
     *
     * @param GetDailyBillRequest $request
     *
     * @return GetDailyBillResponse
     */
    public function getDailyBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDailyBillWithOptions($request, $runtime);
    }

    /**
     * Query invitation status of customer who have been created and invited.
     *
     * @param request - GetInviteStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInviteStatusResponse
     *
     * @param GetInviteStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInviteStatusResponse
     */
    public function getInviteStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inviteStatusList) {
            @$query['InviteStatusList'] = $request->inviteStatusList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInviteStatus',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInviteStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query invitation status of customer who have been created and invited.
     *
     * @param request - GetInviteStatusRequest
     *
     * @returns GetInviteStatusResponse
     *
     * @param GetInviteStatusRequest $request
     *
     * @return GetInviteStatusResponse
     */
    public function getInviteStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInviteStatusWithOptions($request, $runtime);
    }

    /**
     * Issue Distributor\\"s Monthly Bill. This function is only available for Resellers and Distributors.
     *
     * @param request - GetMonthlyBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonthlyBillResponse
     *
     * @param GetMonthlyBillRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetMonthlyBillResponse
     */
    public function getMonthlyBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwner) {
            @$query['BillOwner'] = $request->billOwner;
        }

        if (null !== $request->billType) {
            @$query['BillType'] = $request->billType;
        }

        if (null !== $request->month) {
            @$query['Month'] = $request->month;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMonthlyBill',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMonthlyBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Issue Distributor\\"s Monthly Bill. This function is only available for Resellers and Distributors.
     *
     * @param request - GetMonthlyBillRequest
     *
     * @returns GetMonthlyBillResponse
     *
     * @param GetMonthlyBillRequest $request
     *
     * @return GetMonthlyBillResponse
     */
    public function getMonthlyBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonthlyBillWithOptions($request, $runtime);
    }

    /**
     * Query all the Unassociated Customer.
     *
     * @param request - GetUnassociatedCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUnassociatedCustomerResponse
     *
     * @param GetUnassociatedCustomerRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUnassociatedCustomerResponse
     */
    public function getUnassociatedCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUnassociatedCustomer',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUnassociatedCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query all the Unassociated Customer.
     *
     * @param request - GetUnassociatedCustomerRequest
     *
     * @returns GetUnassociatedCustomerResponse
     *
     * @param GetUnassociatedCustomerRequest $request
     *
     * @return GetUnassociatedCustomerResponse
     */
    public function getUnassociatedCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUnassociatedCustomerWithOptions($request, $runtime);
    }

    /**
     * Initiate the Partner registration invitation.
     *
     * @remarks
     * The current API request rate for the Cloud Product has not been disclosed.
     *
     * @param request - InviteSubAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InviteSubAccountResponse
     *
     * @param InviteSubAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InviteSubAccountResponse
     */
    public function inviteSubAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountInfoList) {
            @$query['AccountInfoList'] = $request->accountInfoList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InviteSubAccount',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InviteSubAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate the Partner registration invitation.
     *
     * @remarks
     * The current API request rate for the Cloud Product has not been disclosed.
     *
     * @param request - InviteSubAccountRequest
     *
     * @returns InviteSubAccountResponse
     *
     * @param InviteSubAccountRequest $request
     *
     * @return InviteSubAccountResponse
     */
    public function inviteSubAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteSubAccountWithOptions($request, $runtime);
    }

    /**
     * 发放优惠券.
     *
     * @param request - IssueCouponForCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IssueCouponForCustomerResponse
     *
     * @param IssueCouponForCustomerRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return IssueCouponForCustomerResponse
     */
    public function issueCouponForCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->couponTemplateId) {
            @$query['CouponTemplateId'] = $request->couponTemplateId;
        }

        if (null !== $request->isUseBenefit) {
            @$query['IsUseBenefit'] = $request->isUseBenefit;
        }

        if (null !== $request->uidlist) {
            @$query['Uidlist'] = $request->uidlist;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IssueCouponForCustomer',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IssueCouponForCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发放优惠券.
     *
     * @param request - IssueCouponForCustomerRequest
     *
     * @returns IssueCouponForCustomerResponse
     *
     * @param IssueCouponForCustomerRequest $request
     *
     * @return IssueCouponForCustomerResponse
     */
    public function issueCouponForCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->issueCouponForCustomerWithOptions($request, $runtime);
    }

    /**
     * This function is available for all Distributors. It displays the corresponding region code information based on the operable countries as agreed in the Distributor\\"s contract.
     *
     * @remarks
     * The current API request rate for cloud products has not been disclosed.
     *
     * @param request - ListCountriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCountriesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListCountriesResponse
     */
    public function listCountriesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListCountries',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This function is available for all Distributors. It displays the corresponding region code information based on the operable countries as agreed in the Distributor\\"s contract.
     *
     * @remarks
     * The current API request rate for cloud products has not been disclosed.
     *
     * @returns ListCountriesResponse
     *
     * @return ListCountriesResponse
     */
    public function listCountries()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCountriesWithOptions($runtime);
    }

    /**
     * 优惠券使用量列表查询.
     *
     * @param request - ListCouponUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCouponUsageResponse
     *
     * @param ListCouponUsageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCouponUsageResponse
     */
    public function listCouponUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->couponTemplateId) {
            @$query['CouponTemplateId'] = $request->couponTemplateId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCouponUsage',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCouponUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 优惠券使用量列表查询.
     *
     * @param request - ListCouponUsageRequest
     *
     * @returns ListCouponUsageResponse
     *
     * @param ListCouponUsageRequest $request
     *
     * @return ListCouponUsageResponse
     */
    public function listCouponUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCouponUsageWithOptions($request, $runtime);
    }

    /**
     * 通用查询导出任务列表.
     *
     * @param request - ListExportTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExportTasksResponse
     *
     * @param ListExportTasksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListExportTasksResponse
     */
    public function listExportTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExportTasks',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用查询导出任务列表.
     *
     * @param request - ListExportTasksRequest
     *
     * @returns ListExportTasksResponse
     *
     * @param ListExportTasksRequest $request
     *
     * @return ListExportTasksResponse
     */
    public function listExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExportTasksWithOptions($request, $runtime);
    }

    /**
     * 额度冲减明细列表.
     *
     * @param request - QueryReversedDeductionHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReversedDeductionHistoryResponse
     *
     * @param QueryReversedDeductionHistoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryReversedDeductionHistoryResponse
     */
    public function queryReversedDeductionHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryReversedDeductionHistory',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryReversedDeductionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 额度冲减明细列表.
     *
     * @param request - QueryReversedDeductionHistoryRequest
     *
     * @returns QueryReversedDeductionHistoryResponse
     *
     * @param QueryReversedDeductionHistoryRequest $request
     *
     * @return QueryReversedDeductionHistoryResponse
     */
    public function queryReversedDeductionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryReversedDeductionHistoryWithOptions($request, $runtime);
    }

    /**
     * Check the result of export quota list as a Distribution Customer from International Site. Only available on International Site.
     *
     * @remarks
     * Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *
     * @param request - QuotaListExportPagedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuotaListExportPagedResponse
     *
     * @param QuotaListExportPagedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuotaListExportPagedResponse
     */
    public function quotaListExportPagedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuotaListExportPaged',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuotaListExportPagedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check the result of export quota list as a Distribution Customer from International Site. Only available on International Site.
     *
     * @remarks
     * Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *
     * @param request - QuotaListExportPagedRequest
     *
     * @returns QuotaListExportPagedResponse
     *
     * @param QuotaListExportPagedRequest $request
     *
     * @return QuotaListExportPagedResponse
     */
    public function quotaListExportPaged($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->quotaListExportPagedWithOptions($request, $runtime);
    }

    /**
     * Resend invitation email.
     *
     * @param request - ResendEmailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResendEmailResponse
     *
     * @param ResendEmailRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResendEmailResponse
     */
    public function resendEmailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inviteId) {
            @$query['InviteId'] = $request->inviteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResendEmail',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResendEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resend invitation email.
     *
     * @param request - ResendEmailRequest
     *
     * @returns ResendEmailResponse
     *
     * @param ResendEmailRequest $request
     *
     * @return ResendEmailResponse
     */
    public function resendEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendEmailWithOptions($request, $runtime);
    }

    /**
     * This function is designed for Sub Account information maintenance, including Nickname and Remark.
     *
     * @param request - SetAccountInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAccountInfoResponse
     *
     * @param SetAccountInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetAccountInfoResponse
     */
    public function setAccountInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountNickname) {
            @$query['AccountNickname'] = $request->accountNickname;
        }

        if (null !== $request->customerBd) {
            @$query['CustomerBd'] = $request->customerBd;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAccountInfo',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This function is designed for Sub Account information maintenance, including Nickname and Remark.
     *
     * @param request - SetAccountInfoRequest
     *
     * @returns SetAccountInfoResponse
     *
     * @param SetAccountInfoRequest $request
     *
     * @return SetAccountInfoResponse
     */
    public function setAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccountInfoWithOptions($request, $runtime);
    }

    /**
     * Set Credit Line for Distribution Customers. This function is only available for Resellers and Distributors.
     *
     * @param request - SetCreditLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCreditLineResponse
     *
     * @param SetCreditLineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetCreditLineResponse
     */
    public function setCreditLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creditLine) {
            @$query['CreditLine'] = $request->creditLine;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCreditLine',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCreditLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Set Credit Line for Distribution Customers. This function is only available for Resellers and Distributors.
     *
     * @param request - SetCreditLineRequest
     *
     * @returns SetCreditLineResponse
     *
     * @param SetCreditLineRequest $request
     *
     * @return SetCreditLineResponse
     */
    public function setCreditLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCreditLineWithOptions($request, $runtime);
    }

    /**
     * You can use this API to set the threshold for the use of credit control. When the customer credit control reaches below the threshold, it will pass through the notification email distributor. This feature is for Reseller and Distributor only.
     *
     * @param request - SetWarningThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetWarningThresholdResponse
     *
     * @param SetWarningThresholdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetWarningThresholdResponse
     */
    public function setWarningThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->warningValue) {
            @$query['WarningValue'] = $request->warningValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetWarningThreshold',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetWarningThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use this API to set the threshold for the use of credit control. When the customer credit control reaches below the threshold, it will pass through the notification email distributor. This feature is for Reseller and Distributor only.
     *
     * @param request - SetWarningThresholdRequest
     *
     * @returns SetWarningThresholdResponse
     *
     * @param SetWarningThresholdRequest $request
     *
     * @return SetWarningThresholdResponse
     */
    public function setWarningThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWarningThresholdWithOptions($request, $runtime);
    }

    /**
     * Generates the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *
     * @remarks
     *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * *   You can call this operation to subscribe to only one type of bill at a time.
     * *   After the subscription to a type of bill is generated, the bill for the previous day is pushed on a daily basis from the next day. On the fifth day of each month, the full-data bill for the previous month is pushed.
     * *   A daily bill may be delayed. The delayed bill is pushed the next day after it is generated. The delayed bill may contain the bill data that is delayed until the previous day. We recommend that you query the full-data bill for the previous month at the beginning of each month.
     * *   Your account must be granted the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     * *   The following file name formats are supported for bills:
     * ```
     * BillingItemDetailForBillingPeriod
     *
     * File name format of a daily bill: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *
     * File name format of a monthly full-data bill: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     * InstanceDetailForBillingPeriod
     *
     *  File name format of a daily bill: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *
     * File name format of a monthly full-data bill: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     * BillingItemDetailMonthly
     *
     * File name format of a daily bill: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     * InstanceDetailMonthly
     *
     * File name format of a daily bill: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     * The fileNo field exists only when the number of bill rows reaches the maximum rows in a single bill file and the bill is split into multiple files.
     * ```
     * **This topic is published only on the international site (alibabacloud.com).
     *
     * @param request - SubscriptionBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscriptionBillResponse
     *
     * @param SubscriptionBillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubscriptionBillResponse
     */
    public function subscriptionBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginBillingCycle) {
            @$query['BeginBillingCycle'] = $request->beginBillingCycle;
        }

        if (null !== $request->billFormat) {
            @$query['BillFormat'] = $request->billFormat;
        }

        if (null !== $request->bucketOwnerId) {
            @$query['BucketOwnerId'] = $request->bucketOwnerId;
        }

        if (null !== $request->subscribeBucket) {
            @$query['SubscribeBucket'] = $request->subscribeBucket;
        }

        if (null !== $request->subscribeSegmentSize) {
            @$query['SubscribeSegmentSize'] = $request->subscribeSegmentSize;
        }

        if (null !== $request->subscribeType) {
            @$query['SubscribeType'] = $request->subscribeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubscriptionBill',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubscriptionBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *
     * @remarks
     *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * *   You can call this operation to subscribe to only one type of bill at a time.
     * *   After the subscription to a type of bill is generated, the bill for the previous day is pushed on a daily basis from the next day. On the fifth day of each month, the full-data bill for the previous month is pushed.
     * *   A daily bill may be delayed. The delayed bill is pushed the next day after it is generated. The delayed bill may contain the bill data that is delayed until the previous day. We recommend that you query the full-data bill for the previous month at the beginning of each month.
     * *   Your account must be granted the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     * *   The following file name formats are supported for bills:
     * ```
     * BillingItemDetailForBillingPeriod
     *
     * File name format of a daily bill: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *
     * File name format of a monthly full-data bill: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     * InstanceDetailForBillingPeriod
     *
     *  File name format of a daily bill: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *
     * File name format of a monthly full-data bill: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     * BillingItemDetailMonthly
     *
     * File name format of a daily bill: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     * InstanceDetailMonthly
     *
     * File name format of a daily bill: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This bill contains the bill data that is generated from the beginning of the current month to the fifth day of the next month.
     * The fileNo field exists only when the number of bill rows reaches the maximum rows in a single bill file and the bill is split into multiple files.
     * ```
     * **This topic is published only on the international site (alibabacloud.com).
     *
     * @param request - SubscriptionBillRequest
     *
     * @returns SubscriptionBillResponse
     *
     * @param SubscriptionBillRequest $request
     *
     * @return SubscriptionBillResponse
     */
    public function subscriptionBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscriptionBillWithOptions($request, $runtime);
    }
}
