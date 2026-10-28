<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Agency\V20221216\Models\AutomaticWriteOffRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\AutomaticWriteOffResponse;
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
use AlibabaCloud\SDK\Agency\V20221216\Models\GetPurchaseControlRecordRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetPurchaseControlRecordResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetShutdownPolicyRecordRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetShutdownPolicyRecordResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetTier2CouponApprovalDetailResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubResellerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubResellerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\IssueCouponForCustomerResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCountriesResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListCouponUsageResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListExportTasksRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListExportTasksResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListTier2CouponApprovalRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ListTier2CouponApprovalResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\ProcessApprovalRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\ProcessApprovalResponse;
use AlibabaCloud\SDK\Agency\V20221216\Models\QueryAutomaticWriteOffChangeRecordsRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\QueryAutomaticWriteOffChangeRecordsResponse;
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
     * Configures the automatic write-off feature before the end-of-month settlement. When the consumed but undeducted quota reaches the specified automatic write-off amount, the amount is transferred to the deducted quota for offset.
     *
     * @param request - AutomaticWriteOffRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AutomaticWriteOffResponse
     *
     * @param AutomaticWriteOffRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AutomaticWriteOffResponse
     */
    public function automaticWriteOffWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->automaticWriteOffAmount) {
            @$query['AutomaticWriteOffAmount'] = $request->automaticWriteOffAmount;
        }

        if (null !== $request->automaticWriteOffEnabled) {
            @$query['AutomaticWriteOffEnabled'] = $request->automaticWriteOffEnabled;
        }

        if (null !== $request->customerUid) {
            @$query['CustomerUid'] = $request->customerUid;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AutomaticWriteOff',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AutomaticWriteOffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the automatic write-off feature before the end-of-month settlement. When the consumed but undeducted quota reaches the specified automatic write-off amount, the amount is transferred to the deducted quota for offset.
     *
     * @param request - AutomaticWriteOffRequest
     *
     * @returns AutomaticWriteOffResponse
     *
     * @param AutomaticWriteOffRequest $request
     *
     * @return AutomaticWriteOffResponse
     */
    public function automaticWriteOff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->automaticWriteOffWithOptions($request, $runtime);
    }

    /**
     * Invalidates a coupon.
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
     * Invalidates a coupon.
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
     * Unsubscribe from multi-level bills for international channel ecosystem partners.
     *
     * @remarks
     * Make sure that the caller is an international Alibaba Cloud master reseller partner.
     * You can unsubscribe from one type of bill file at a time.
     * After the corresponding bill type is unsubscribed, files are no longer pushed to the specified OSS space.
     * **This content is published only on the international site.**
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
     * Unsubscribe from multi-level bills for international channel ecosystem partners.
     *
     * @remarks
     * Make sure that the caller is an international Alibaba Cloud master reseller partner.
     * You can unsubscribe from one type of bill file at a time.
     * After the corresponding bill type is unsubscribed, files are no longer pushed to the specified OSS space.
     * **This content is published only on the international site.**
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
     * Queries the list of coupon approval statuses.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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
     * Queries the list of coupon approval statuses.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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
     * Creates a coupon template.
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
     * Creates a coupon template.
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
     * Registers a customer to be invited.
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
     * Registers a customer to be invited.
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
     * Queries the quota adjustment records for distribution customers on the Alibaba Cloud International Website. This operation applies only to international users and cannot be called on the Alibaba Cloud China Website.
     *
     * @remarks
     * The caller must be a channel master distributor partner or a channel distributor partner on the Alibaba Cloud International Website.
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
     * Queries the quota adjustment records for distribution customers on the Alibaba Cloud International Website. This operation applies only to international users and cannot be called on the Alibaba Cloud China Website.
     *
     * @remarks
     * The caller must be a channel master distributor partner or a channel distributor partner on the Alibaba Cloud International Website.
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
     * Reduces the deducted credit of a reseller\\"s customer. For example, if the current deducted credit is 500 and the available credit is 1000, a reduction of 300 changes the deducted credit to 200 and the available credit to 1300.
     * Note: Sometimes the used credit of a customer may be negative. This indicates that no recovery of the used credit is needed. Wait for the customer to consume the credit. This occurs when a refund is issued while the customer\\"s credit is fully used. As a result, the customer\\"s credit increases beyond the original limit.
     * For example, if the current maximum available credit of a customer is 1000 with no usage, and a refund of 300 occurs, the used credit becomes -300.
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
     * Reduces the deducted credit of a reseller\\"s customer. For example, if the current deducted credit is 500 and the available credit is 1000, a reduction of 300 changes the deducted credit to 200 and the available credit to 1300.
     * Note: Sometimes the used credit of a customer may be negative. This indicates that no recovery of the used credit is needed. Wait for the customer to consume the credit. This occurs when a refund is issued while the customer\\"s credit is fully used. As a result, the customer\\"s credit increases beyond the original limit.
     * For example, if the current maximum available credit of a customer is 1000 with no usage, and a refund of 300 occurs, the used credit becomes -300.
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
     * Invalidates a coupon template.
     *
     * @remarks
     * Make sure that the current caller is a distribution partner.
     * <notice>Available only on the China site.</notice>.
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
     * Invalidates a coupon template.
     *
     * @remarks
     * Make sure that the current caller is a distribution partner.
     * <notice>Available only on the China site.</notice>.
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
     * Manages the shutdown status of pay-as-you-go instances for resold subordinate customers by Alibaba Cloud international channel master distributor partners and Alibaba Cloud international channel distributor partners.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international channel master distributor partner or an Alibaba Cloud international channel distributor partner.
     * **This content is published only on the China site (Chinese).**.
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
     * Manages the shutdown status of pay-as-you-go instances for resold subordinate customers by Alibaba Cloud international channel master distributor partners and Alibaba Cloud international channel distributor partners.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international channel master distributor partner or an Alibaba Cloud international channel distributor partner.
     * **This content is published only on the China site (Chinese).**.
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
     * Sets the new purchase status of a subordinate reseller customer for an Alibaba Cloud reseller partner.
     *
     * @remarks
     * The caller must be an Alibaba Cloud reseller partner.
     * **This content is published only on the China site.**.
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
     * Sets the new purchase status of a subordinate reseller customer for an Alibaba Cloud reseller partner.
     *
     * @remarks
     * The caller must be an Alibaba Cloud reseller partner.
     * **This content is published only on the China site.**.
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
     * Modifies the shutdown policy of a subordinate customer by an Alibaba Cloud distributor partner or reseller partner.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international channel distributor partner or an Alibaba Cloud international channel reseller partner.
     * **This content is published only on the Chinese site.**.
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
     * Modifies the shutdown policy of a subordinate customer by an Alibaba Cloud distributor partner or reseller partner.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international channel distributor partner or an Alibaba Cloud international channel reseller partner.
     * **This content is published only on the Chinese site.**.
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
     * Exports the quota adjustment records of a distributor\\"s customer, corresponding to the total budget adjustment details export feature on ACPN.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
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
     * Exports the quota adjustment records of a distributor\\"s customer, corresponding to the total budget adjustment details export feature on ACPN.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
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
     * Exports the reversed deduction details from ACPN.
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
     * Exports the reversed deduction details from ACPN.
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
     * Returns the account information of distribution customers.
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
     * Returns the account information of distribution customers.
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
     * Queries a list of all active and delisted commission-eligible commodities for T1-level international distribution partners. This operation is available only for international users and cannot be called on the China site.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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
     * Queries a list of all active and delisted commission-eligible commodities for T1-level international distribution partners. This operation is available only for international users and cannot be called on the China site.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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
     * Queries the details of a coupon template.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the International site
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
     * Queries the details of a coupon template.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the International site
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
     * Queries the products that can be offset by international channel distribution coupons.
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
     * Queries the products that can be offset by international channel distribution coupons.
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
     * Queries the credit control information of a distributor customer. If the distributor customer is of the Agency type, the PopCreditInfoJson parameter in the response is empty. This feature is available only for Reseller and Distributor.
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
     * Queries the credit control information of a distributor customer. If the distributor customer is of the Agency type, the PopCreditInfoJson parameter in the response is empty. This feature is available only for Reseller and Distributor.
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
     * Queries customer orders on the Alibaba Cloud International site. This operation is only allowed for the international site.
     *
     * @remarks
     * The caller must be an Alibaba Cloud International site channel master distributor partner or an Alibaba Cloud International site channel distributor partner.
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
     * Queries customer orders on the Alibaba Cloud International site. This operation is only allowed for the international site.
     *
     * @remarks
     * The caller must be an Alibaba Cloud International site channel master distributor partner or an Alibaba Cloud International site channel distributor partner.
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
     * Retrieves the daily bills for resellers and distributors. This feature is only available for resellers and distributors.
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
     * Retrieves the daily bills for resellers and distributors. This feature is only available for resellers and distributors.
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
     * Queries the invitation status of registered customers who have been sent invitations.
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
     * Queries the invitation status of registered customers who have been sent invitations.
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
     * Retrieves the monthly bill for distributors. This feature is available only to resellers and distributors.
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
     * Retrieves the monthly bill for distributors. This feature is available only to resellers and distributors.
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
     * Queries order control change records.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
     *
     * @param request - GetPurchaseControlRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPurchaseControlRecordResponse
     *
     * @param GetPurchaseControlRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPurchaseControlRecordResponse
     */
    public function getPurchaseControlRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerUID) {
            @$query['CustomerUID'] = $request->customerUID;
        }

        if (null !== $request->operationTime) {
            @$query['OperationTime'] = $request->operationTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPurchaseControlRecord',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPurchaseControlRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries order control change records.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
     *
     * @param request - GetPurchaseControlRecordRequest
     *
     * @returns GetPurchaseControlRecordResponse
     *
     * @param GetPurchaseControlRecordRequest $request
     *
     * @return GetPurchaseControlRecordResponse
     */
    public function getPurchaseControlRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPurchaseControlRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the modification records of the deferred shutdown policy.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
     * **This content is published only on the international site.**.
     *
     * @param request - GetShutdownPolicyRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetShutdownPolicyRecordResponse
     *
     * @param GetShutdownPolicyRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetShutdownPolicyRecordResponse
     */
    public function getShutdownPolicyRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerUID) {
            @$query['CustomerUID'] = $request->customerUID;
        }

        if (null !== $request->operationTime) {
            @$query['OperationTime'] = $request->operationTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetShutdownPolicyRecord',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetShutdownPolicyRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the modification records of the deferred shutdown policy.
     *
     * @remarks
     * The caller must be an Alibaba Cloud international site channel master distributor partner or an Alibaba Cloud international site channel distributor partner.
     * **This content is published only on the international site.**.
     *
     * @param request - GetShutdownPolicyRecordRequest
     *
     * @returns GetShutdownPolicyRecordResponse
     *
     * @param GetShutdownPolicyRecordRequest $request
     *
     * @return GetShutdownPolicyRecordResponse
     */
    public function getShutdownPolicyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getShutdownPolicyRecordWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a coupon application initiated by a tier-2 distributor. This operation applies only to distributors.
     *
     * @param request - GetTier2CouponApprovalDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTier2CouponApprovalDetailResponse
     *
     * @param GetTier2CouponApprovalDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTier2CouponApprovalDetailResponse
     */
    public function getTier2CouponApprovalDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationSheetId) {
            @$query['ApplicationSheetId'] = $request->applicationSheetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTier2CouponApprovalDetail',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTier2CouponApprovalDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a coupon application initiated by a tier-2 distributor. This operation applies only to distributors.
     *
     * @param request - GetTier2CouponApprovalDetailRequest
     *
     * @returns GetTier2CouponApprovalDetailResponse
     *
     * @param GetTier2CouponApprovalDetailRequest $request
     *
     * @return GetTier2CouponApprovalDetailResponse
     */
    public function getTier2CouponApprovalDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTier2CouponApprovalDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves all unassociated customers.
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
     * Retrieves all unassociated customers.
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
     * Invites a customer to register as a partner customer.
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
     * Invites a customer to register as a partner customer.
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
     * Invites T2 Reseller sub-accounts in batch as a T1 partner.
     *
     * @remarks
     * 1. The caller of this operation must be a channel master reseller partner on Alibaba Cloud International Website.
     * 2. The system automatically determines whether the invitation is cross-region based on whether the RegisterNation parameter falls within the T1 contract coverage area. You can call the ListCountries operation to query the contract coverage area.
     * - If the invitation is cross-region, a cross-region invitation approval process is initiated. After Alibaba Cloud approves the request, an invitation registration email is sent to the specified email address.
     * - If the invitation is not cross-region, an invitation registration email is sent directly.
     *
     * @param request - InviteSubResellerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InviteSubResellerResponse
     *
     * @param InviteSubResellerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return InviteSubResellerResponse
     */
    public function inviteSubResellerWithOptions($request, $runtime)
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
            'action' => 'InviteSubReseller',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InviteSubResellerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invites T2 Reseller sub-accounts in batch as a T1 partner.
     *
     * @remarks
     * 1. The caller of this operation must be a channel master reseller partner on Alibaba Cloud International Website.
     * 2. The system automatically determines whether the invitation is cross-region based on whether the RegisterNation parameter falls within the T1 contract coverage area. You can call the ListCountries operation to query the contract coverage area.
     * - If the invitation is cross-region, a cross-region invitation approval process is initiated. After Alibaba Cloud approves the request, an invitation registration email is sent to the specified email address.
     * - If the invitation is not cross-region, an invitation registration email is sent directly.
     *
     * @param request - InviteSubResellerRequest
     *
     * @returns InviteSubResellerResponse
     *
     * @param InviteSubResellerRequest $request
     *
     * @return InviteSubResellerResponse
     */
    public function inviteSubReseller($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteSubResellerWithOptions($request, $runtime);
    }

    /**
     * Issues coupons.
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

        if (null !== $request->applicationReason) {
            @$query['ApplicationReason'] = $request->applicationReason;
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
     * Issues coupons.
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
     * Queries the list of serviceable regions. This feature is available to all distributors. The response returns region codes based on the serviceable countries specified in the distributor contract.
     *
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
     * Queries the list of serviceable regions. This feature is available to all distributors. The response returns region codes based on the serviceable countries specified in the distributor contract.
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
     * Queries the usage of coupons issued by a distribution partner.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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

        if (null !== $request->t2PartnerUid) {
            @$query['T2PartnerUid'] = $request->t2PartnerUid;
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
     * Queries the usage of coupons issued by a distribution partner.
     *
     * @remarks
     * Ensure that the current calling account is a distribution partner.
     * <notice>Available only on the international site.</notice>
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
     * Queries the list of exported files.
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
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
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
     * Queries the list of exported files.
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
     * Queries the coupon applications submitted by secondary distributors for their end users. This operation applies only to tier-1 distributors.
     *
     * @param request - ListTier2CouponApprovalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTier2CouponApprovalResponse
     *
     * @param ListTier2CouponApprovalRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTier2CouponApprovalResponse
     */
    public function listTier2CouponApprovalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationSheetId) {
            @$query['ApplicationSheetId'] = $request->applicationSheetId;
        }

        if (null !== $request->approvalStatus) {
            @$query['ApprovalStatus'] = $request->approvalStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->t2PartnerName) {
            @$query['T2PartnerName'] = $request->t2PartnerName;
        }

        if (null !== $request->t2PartnerUid) {
            @$query['T2PartnerUid'] = $request->t2PartnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTier2CouponApproval',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTier2CouponApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the coupon applications submitted by secondary distributors for their end users. This operation applies only to tier-1 distributors.
     *
     * @param request - ListTier2CouponApprovalRequest
     *
     * @returns ListTier2CouponApprovalResponse
     *
     * @param ListTier2CouponApprovalRequest $request
     *
     * @return ListTier2CouponApprovalResponse
     */
    public function listTier2CouponApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTier2CouponApprovalWithOptions($request, $runtime);
    }

    /**
     * Approves a process that requires partner approval. This operation is applicable only to distributors.
     *
     * @param request - ProcessApprovalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProcessApprovalResponse
     *
     * @param ProcessApprovalRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ProcessApprovalResponse
     */
    public function processApprovalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationSheetId) {
            @$query['ApplicationSheetId'] = $request->applicationSheetId;
        }

        if (null !== $request->approvalAction) {
            @$query['ApprovalAction'] = $request->approvalAction;
        }

        if (null !== $request->approvalComments) {
            @$query['ApprovalComments'] = $request->approvalComments;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProcessApproval',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProcessApprovalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Approves a process that requires partner approval. This operation is applicable only to distributors.
     *
     * @param request - ProcessApprovalRequest
     *
     * @returns ProcessApprovalResponse
     *
     * @param ProcessApprovalRequest $request
     *
     * @return ProcessApprovalResponse
     */
    public function processApproval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processApprovalWithOptions($request, $runtime);
    }

    /**
     * Queries the change records of the automatic write-off quota by using paging.
     *
     * @param request - QueryAutomaticWriteOffChangeRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAutomaticWriteOffChangeRecordsResponse
     *
     * @param QueryAutomaticWriteOffChangeRecordsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryAutomaticWriteOffChangeRecordsResponse
     */
    public function queryAutomaticWriteOffChangeRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customerUid) {
            @$query['CustomerUid'] = $request->customerUid;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAutomaticWriteOffChangeRecords',
            'version' => '2022-12-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAutomaticWriteOffChangeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the change records of the automatic write-off quota by using paging.
     *
     * @param request - QueryAutomaticWriteOffChangeRecordsRequest
     *
     * @returns QueryAutomaticWriteOffChangeRecordsResponse
     *
     * @param QueryAutomaticWriteOffChangeRecordsRequest $request
     *
     * @return QueryAutomaticWriteOffChangeRecordsResponse
     */
    public function queryAutomaticWriteOffChangeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAutomaticWriteOffChangeRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the quota offset details of a specified customer.
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
     * Queries the quota offset details of a specified customer.
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
     * Queries the quota transaction export results for international distribution users. This API operation is available only on the international site.
     *
     * @remarks
     * The caller must be an Alibaba Cloud International site channel master distributor partner or an Alibaba Cloud International site channel distributor partner.
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
     * Queries the quota transaction export results for international distribution users. This API operation is available only on the international site.
     *
     * @remarks
     * The caller must be an Alibaba Cloud International site channel master distributor partner or an Alibaba Cloud International site channel distributor partner.
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
     * Resends an invitation email.
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
     * Resends an invitation email.
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
     * Updates sub-account information, including the nickname and remarks.
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
     * Updates sub-account information, including the nickname and remarks.
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
     * Sets the credit limit for a reseller customer. This feature is available only for Resellers and Distributors.
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
     * Sets the credit limit for a reseller customer. This feature is available only for Resellers and Distributors.
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
     * Sets the credit usage threshold. When a customer\\"s available credit falls below the threshold, the reseller is notified by email. This feature is available only for Resellers and Distributors.
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
     * Sets the credit usage threshold. When a customer\\"s available credit falls below the threshold, the reseller is notified by email. This feature is available only for Resellers and Distributors.
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
     * Subscribes to multi-level ecosystem partner bills on Alibaba Cloud International and generates bill files to OSS.
     *
     * @remarks
     * - Ensure that the caller is an Alibaba Cloud international master reseller partner.
     * - A user can subscribe to one type of bill file at a time.
     * - After subscription, bill files generated on the previous day are pushed daily starting from the next day. On the 5th of each month, full bill files for the previous billing cycle are pushed.
     * - Bill files generated on a daily basis may be delayed. Delayed bill files are pushed the day after they are generated and may include bills that were delayed from earlier days. Pull the full files for the previous month at the beginning of each month.
     * - Grant the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission to the subscribing user.
     * - File names.
     * ```.
     * BillingItemDetailForBillingPeriod   (Billing item detail)
     *
     * Daily push file name format: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *
     * Full file name format at the beginning of the next month: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     * InstanceDetailForBillingPeriod  (Instance bill detail)
     *
     *  Daily push file name format: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *
     * Full file name format at the beginning of the next month: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     * BillingItemDetailMonthly   (Billing item monthly bill)
     *
     * Daily push file name format: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This file is updated daily with full data from the beginning of the month to the current day, until the 5th of the next month.
     * InstanceDetailMonthly  (Instance monthly bill)
     *
     * Daily push file name format: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This file is updated daily with full data from the beginning of the month to the current day, until the 5th of the next month.
     * fileNo exists only when the number of bill rows reaches the split threshold and the file is split.
     * ```
     * **This content is published only on the Chinese site.**.
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
     * Subscribes to multi-level ecosystem partner bills on Alibaba Cloud International and generates bill files to OSS.
     *
     * @remarks
     * - Ensure that the caller is an Alibaba Cloud international master reseller partner.
     * - A user can subscribe to one type of bill file at a time.
     * - After subscription, bill files generated on the previous day are pushed daily starting from the next day. On the 5th of each month, full bill files for the previous billing cycle are pushed.
     * - Bill files generated on a daily basis may be delayed. Delayed bill files are pushed the day after they are generated and may include bills that were delayed from earlier days. Pull the full files for the previous month at the beginning of each month.
     * - Grant the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission to the subscribing user.
     * - File names.
     * ```.
     * BillingItemDetailForBillingPeriod   (Billing item detail)
     *
     * Daily push file name format: UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_BillingItemDetail_20190310_0001_01.
     *
     * Full file name format at the beginning of the next month: UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetail_201903_0001_01.
     * InstanceDetailForBillingPeriod  (Instance bill detail)
     *
     *  Daily push file name format: UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo. Example: 169**_InstanceDetail_20190310_0001_01.
     *
     * Full file name format at the beginning of the next month: UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetail_201903_1999-0001_01.
     * BillingItemDetailMonthly   (Billing item monthly bill)
     *
     * Daily push file name format: UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_BillingItemDetailMonthly_201903_0001_01. This file is updated daily with full data from the beginning of the month to the current day, until the 5th of the next month.
     * InstanceDetailMonthly  (Instance monthly bill)
     *
     * Daily push file name format: UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo. Example: 169**_InstanceDetailMonthly_201903_0001_01. This file is updated daily with full data from the beginning of the month to the current day, until the 5th of the next month.
     * fileNo exists only when the number of bill rows reaches the split threshold and the file is split.
     * ```
     * **This content is published only on the Chinese site.**.
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
