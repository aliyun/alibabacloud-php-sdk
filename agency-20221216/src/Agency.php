<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoRequest;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponse;
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
     * @summary 作废优惠券
     *  *
     * @param CancelCouponRequest $request CancelCouponRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCouponResponse CancelCouponResponse
     */
    public function cancelCouponWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->couponId)) {
            $query['CouponId'] = $request->couponId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCoupon',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCouponResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 作废优惠券
     *  *
     * @param CancelCouponRequest $request CancelCouponRequest
     *
     * @return CancelCouponResponse CancelCouponResponse
     */
    public function cancelCoupon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCouponWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *  *
     * @description Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * You can call this operation to cancel the subscription to only one type of bill at a time.
     * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     * **This topic is published only on the international site (alibabacloud.com).
     *  *
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
     * @summary Cancels the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *  *
     * @description Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
     * You can call this operation to cancel the subscription to only one type of bill at a time.
     * After the subscription to a type of bill is canceled, bills of this type are no longer pushed to the specified Object Storage Service (OSS) bucket.
     * **This topic is published only on the international site (alibabacloud.com).
     *  *
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
     * @summary 优惠券审批状态列表
     *  *
     * @param CouponApprovalStatusListRequest $request CouponApprovalStatusListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CouponApprovalStatusListResponse CouponApprovalStatusListResponse
     */
    public function couponApprovalStatusListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateStatus)) {
            $query['TemplateStatus'] = $request->templateStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CouponApprovalStatusList',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CouponApprovalStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 优惠券审批状态列表
     *  *
     * @param CouponApprovalStatusListRequest $request CouponApprovalStatusListRequest
     *
     * @return CouponApprovalStatusListResponse CouponApprovalStatusListResponse
     */
    public function couponApprovalStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->couponApprovalStatusListWithOptions($request, $runtime);
    }

    /**
     * @summary 创建优惠券模板
     *  *
     * @param CreateCouponTemplateRequest $tmpReq  CreateCouponTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCouponTemplateResponse CreateCouponTemplateResponse
     */
    public function createCouponTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCouponTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->productType)) {
            $request->productTypeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->productType, 'ProductType', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->applicableProducts)) {
            $query['ApplicableProducts'] = $request->applicableProducts;
        }
        if (!Utils::isUnset($request->costBearer)) {
            $query['CostBearer'] = $request->costBearer;
        }
        if (!Utils::isUnset($request->couponDescription)) {
            $query['CouponDescription'] = $request->couponDescription;
        }
        if (!Utils::isUnset($request->expireddate)) {
            $query['Expireddate'] = $request->expireddate;
        }
        if (!Utils::isUnset($request->limitPerPerson)) {
            $query['LimitPerPerson'] = $request->limitPerPerson;
        }
        if (!Utils::isUnset($request->productTypeShrink)) {
            $query['ProductType'] = $request->productTypeShrink;
        }
        if (!Utils::isUnset($request->purchaseType)) {
            $query['PurchaseType'] = $request->purchaseType;
        }
        if (!Utils::isUnset($request->reasonForApplication)) {
            $query['ReasonForApplication'] = $request->reasonForApplication;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->vailddate)) {
            $query['Vailddate'] = $request->vailddate;
        }
        if (!Utils::isUnset($request->vaildperioddays)) {
            $query['Vaildperioddays'] = $request->vaildperioddays;
        }
        if (!Utils::isUnset($request->validUntil)) {
            $query['ValidUntil'] = $request->validUntil;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCouponTemplate',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCouponTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建优惠券模板
     *  *
     * @param CreateCouponTemplateRequest $request CreateCouponTemplateRequest
     *
     * @return CreateCouponTemplateResponse CreateCouponTemplateResponse
     */
    public function createCouponTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCouponTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary This function is designed for create a customer who is to be invited.
     *  *
     * @param CreateCustomerRequest $request CreateCustomerRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomerResponse CreateCustomerResponse
     */
    public function createCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customerName)) {
            $query['CustomerName'] = $request->customerName;
        }
        if (!Utils::isUnset($request->customerSource)) {
            $query['CustomerSource'] = $request->customerSource;
        }
        if (!Utils::isUnset($request->customerSubTrade)) {
            $query['CustomerSubTrade'] = $request->customerSubTrade;
        }
        if (!Utils::isUnset($request->customerTrade)) {
            $query['CustomerTrade'] = $request->customerTrade;
        }
        if (!Utils::isUnset($request->nation)) {
            $query['Nation'] = $request->nation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomer',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This function is designed for create a customer who is to be invited.
     *  *
     * @param CreateCustomerRequest $request CreateCustomerRequest
     *
     * @return CreateCustomerResponse CreateCustomerResponse
     */
    public function createCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomerWithOptions($request, $runtime);
    }

    /**
     * @summary Query quota adjustment list of Distribution Customer from International Site. Not available on Domestic Site.
     *  *
     * @param CustomerQuotaRecordListRequest $request CustomerQuotaRecordListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CustomerQuotaRecordListResponse CustomerQuotaRecordListResponse
     */
    public function customerQuotaRecordListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CustomerQuotaRecordList',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomerQuotaRecordListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query quota adjustment list of Distribution Customer from International Site. Not available on Domestic Site.
     *  *
     * @param CustomerQuotaRecordListRequest $request CustomerQuotaRecordListRequest
     *
     * @return CustomerQuotaRecordListResponse CustomerQuotaRecordListResponse
     */
    public function customerQuotaRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customerQuotaRecordListWithOptions($request, $runtime);
    }

    /**
     * @summary This API is used to offset the Deducted Credit of a Distribution Customer. For example, if the current Deducted Credit is 500 and the Available Credit is 1000, by offsetting 300, the Deducted Credit will then become 200, and the Available Credit becomes 1300.
     *  *
     * @description Note that sometimes you may find that the customer\\"s Used Credit is negative. This indicates that there is no need to restore the Used Credit, and its ready for customer\\"s usage. This phenomenon occurs because a refund is generated while the customer\\"s credit is full, thereby triggered additional increasing on the customer\\"s credit.
     * For example, if the customer\\"s maximum Available Credit is 1000 with no usage, and a refund of 300 occurs, the Used Credit will become -300.
     *  *
     * @param DeductOutstandingBalanceRequest $request DeductOutstandingBalanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeductOutstandingBalanceResponse DeductOutstandingBalanceResponse
     */
    public function deductOutstandingBalanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deductAmount)) {
            $query['DeductAmount'] = $request->deductAmount;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeductOutstandingBalance',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeductOutstandingBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This API is used to offset the Deducted Credit of a Distribution Customer. For example, if the current Deducted Credit is 500 and the Available Credit is 1000, by offsetting 300, the Deducted Credit will then become 200, and the Available Credit becomes 1300.
     *  *
     * @description Note that sometimes you may find that the customer\\"s Used Credit is negative. This indicates that there is no need to restore the Used Credit, and its ready for customer\\"s usage. This phenomenon occurs because a refund is generated while the customer\\"s credit is full, thereby triggered additional increasing on the customer\\"s credit.
     * For example, if the customer\\"s maximum Available Credit is 1000 with no usage, and a refund of 300 occurs, the Used Credit will become -300.
     *  *
     * @param DeductOutstandingBalanceRequest $request DeductOutstandingBalanceRequest
     *
     * @return DeductOutstandingBalanceResponse DeductOutstandingBalanceResponse
     */
    public function deductOutstandingBalance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deductOutstandingBalanceWithOptions($request, $runtime);
    }

    /**
     * @summary 作废优惠券模板
     *  *
     * @param DeleteCouponTemplateRequest $request DeleteCouponTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCouponTemplateResponse DeleteCouponTemplateResponse
     */
    public function deleteCouponTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCouponTemplate',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCouponTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 作废优惠券模板
     *  *
     * @param DeleteCouponTemplateRequest $request DeleteCouponTemplateRequest
     *
     * @return DeleteCouponTemplateResponse DeleteCouponTemplateResponse
     */
    public function deleteCouponTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCouponTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Set the after-shutdown instance status for post-pay End Users as a Reseller.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditEndUserStatusRequest $request EditEndUserStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return EditEndUserStatusResponse EditEndUserStatusResponse
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
     * @summary Set the after-shutdown instance status for post-pay End Users as a Reseller.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditEndUserStatusRequest $request EditEndUserStatusRequest
     *
     * @return EditEndUserStatusResponse EditEndUserStatusResponse
     */
    public function editEndUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editEndUserStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Set the New Buy status for Sub-Customer as a Partner.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditNewBuyStatusRequest $request EditNewBuyStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return EditNewBuyStatusResponse EditNewBuyStatusResponse
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
     * @summary Set the New Buy status for Sub-Customer as a Partner.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditNewBuyStatusRequest $request EditNewBuyStatusRequest
     *
     * @return EditNewBuyStatusResponse EditNewBuyStatusResponse
     */
    public function editNewBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editNewBuyStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modify the End User\\"s Shutdown Policy as a Reseller.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditZeroCreditShutdownRequest $request EditZeroCreditShutdownRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return EditZeroCreditShutdownResponse EditZeroCreditShutdownResponse
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
     * @summary Modify the End User\\"s Shutdown Policy as a Reseller.
     *  *
     * @description The caller should be the Partner as identified in the Alibaba Cloud distribution model. </br>
     * **This content is only published on the international site. **
     *  *
     * @param EditZeroCreditShutdownRequest $request EditZeroCreditShutdownRequest
     *
     * @return EditZeroCreditShutdownResponse EditZeroCreditShutdownResponse
     */
    public function editZeroCreditShutdown($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editZeroCreditShutdownWithOptions($request, $runtime);
    }

    /**
     * @summary Export quota amount adjustment history as a Distribution Customer from International Site. Only available on International Site.
     *  *
     * @description Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *  *
     * @param ExportCustomerQuotaRecordRequest $request ExportCustomerQuotaRecordRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportCustomerQuotaRecordResponse ExportCustomerQuotaRecordResponse
     */
    public function exportCustomerQuotaRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->endUserPk)) {
            $query['EndUserPk'] = $request->endUserPk;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportCustomerQuotaRecord',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportCustomerQuotaRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Export quota amount adjustment history as a Distribution Customer from International Site. Only available on International Site.
     *  *
     * @description Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *  *
     * @param ExportCustomerQuotaRecordRequest $request ExportCustomerQuotaRecordRequest
     *
     * @return ExportCustomerQuotaRecordResponse ExportCustomerQuotaRecordResponse
     */
    public function exportCustomerQuotaRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCustomerQuotaRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Return Distribution Customer\\"s account information.
     *  *
     * @param GetAccountInfoRequest $request GetAccountInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountInfoResponse GetAccountInfoResponse
     */
    public function getAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountInfo',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Return Distribution Customer\\"s account information.
     *  *
     * @param GetAccountInfoRequest $request GetAccountInfoRequest
     *
     * @return GetAccountInfoResponse GetAccountInfoResponse
     */
    public function getAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询优惠券模板详情
     *  *
     * @param GetCouponTemplateDetailRequest $request GetCouponTemplateDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCouponTemplateDetailResponse GetCouponTemplateDetailResponse
     */
    public function getCouponTemplateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCouponTemplateDetail',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCouponTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询优惠券模板详情
     *  *
     * @param GetCouponTemplateDetailRequest $request GetCouponTemplateDetailRequest
     *
     * @return GetCouponTemplateDetailResponse GetCouponTemplateDetailResponse
     */
    public function getCouponTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCouponTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 国际渠道分销优惠券可抵扣产品
     *  *
     * @param GetCoupondeductProductCodeRequest $request GetCoupondeductProductCodeRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCoupondeductProductCodeResponse GetCoupondeductProductCodeResponse
     */
    public function getCoupondeductProductCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCoupondeductProductCode',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCoupondeductProductCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际渠道分销优惠券可抵扣产品
     *  *
     * @param GetCoupondeductProductCodeRequest $request GetCoupondeductProductCodeRequest
     *
     * @return GetCoupondeductProductCodeResponse GetCoupondeductProductCodeResponse
     */
    public function getCoupondeductProductCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoupondeductProductCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Query Credit Control information of Distribution Customers. The PopCreditInfoJson in the Return Parameter will be empty if the Distribution Customer is an Agency. This function is only available for Resellers and Distributors.
     *  *
     * @param GetCreditInfoRequest $request GetCreditInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreditInfoResponse GetCreditInfoResponse
     */
    public function getCreditInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreditInfo',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Credit Control information of Distribution Customers. The PopCreditInfoJson in the Return Parameter will be empty if the Distribution Customer is an Agency. This function is only available for Resellers and Distributors.
     *  *
     * @param GetCreditInfoRequest $request GetCreditInfoRequest
     *
     * @return GetCreditInfoResponse GetCreditInfoResponse
     */
    public function getCreditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreditInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 客户订单查询
     *  *
     * @param GetCustomerOrdersRequest $request GetCustomerOrdersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomerOrdersResponse GetCustomerOrdersResponse
     */
    public function getCustomerOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomerOrders',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomerOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 客户订单查询
     *  *
     * @param GetCustomerOrdersRequest $request GetCustomerOrdersRequest
     *
     * @return GetCustomerOrdersResponse GetCustomerOrdersResponse
     */
    public function getCustomerOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary Issue Distributor\\"s daily Bill. This function is only available for Resellers and Distributors.
     *  *
     * @param GetDailyBillRequest $request GetDailyBillRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDailyBillResponse GetDailyBillResponse
     */
    public function getDailyBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwner)) {
            $query['BillOwner'] = $request->billOwner;
        }
        if (!Utils::isUnset($request->billType)) {
            $query['BillType'] = $request->billType;
        }
        if (!Utils::isUnset($request->date)) {
            $query['Date'] = $request->date;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDailyBill',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDailyBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Issue Distributor\\"s daily Bill. This function is only available for Resellers and Distributors.
     *  *
     * @param GetDailyBillRequest $request GetDailyBillRequest
     *
     * @return GetDailyBillResponse GetDailyBillResponse
     */
    public function getDailyBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDailyBillWithOptions($request, $runtime);
    }

    /**
     * @summary Query invitation status of customer who have been created and invited.
     *  *
     * @param GetInviteStatusRequest $request GetInviteStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInviteStatusResponse GetInviteStatusResponse
     */
    public function getInviteStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inviteStatusList)) {
            $query['InviteStatusList'] = $request->inviteStatusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInviteStatus',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInviteStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query invitation status of customer who have been created and invited.
     *  *
     * @param GetInviteStatusRequest $request GetInviteStatusRequest
     *
     * @return GetInviteStatusResponse GetInviteStatusResponse
     */
    public function getInviteStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInviteStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Issue Distributor\\"s Monthly Bill. This function is only available for Resellers and Distributors.
     *  *
     * @param GetMonthlyBillRequest $request GetMonthlyBillRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMonthlyBillResponse GetMonthlyBillResponse
     */
    public function getMonthlyBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwner)) {
            $query['BillOwner'] = $request->billOwner;
        }
        if (!Utils::isUnset($request->billType)) {
            $query['BillType'] = $request->billType;
        }
        if (!Utils::isUnset($request->month)) {
            $query['Month'] = $request->month;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMonthlyBill',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMonthlyBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Issue Distributor\\"s Monthly Bill. This function is only available for Resellers and Distributors.
     *  *
     * @param GetMonthlyBillRequest $request GetMonthlyBillRequest
     *
     * @return GetMonthlyBillResponse GetMonthlyBillResponse
     */
    public function getMonthlyBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonthlyBillWithOptions($request, $runtime);
    }

    /**
     * @summary Query all the Unassociated Customer.
     *  *
     * @param GetUnassociatedCustomerRequest $request GetUnassociatedCustomerRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUnassociatedCustomerResponse GetUnassociatedCustomerResponse
     */
    public function getUnassociatedCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUnassociatedCustomer',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUnassociatedCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query all the Unassociated Customer.
     *  *
     * @param GetUnassociatedCustomerRequest $request GetUnassociatedCustomerRequest
     *
     * @return GetUnassociatedCustomerResponse GetUnassociatedCustomerResponse
     */
    public function getUnassociatedCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUnassociatedCustomerWithOptions($request, $runtime);
    }

    /**
     * @summary Initiate the Partner registration invitation.
     *  *
     * @description The current API request rate for the Cloud Product has not been disclosed.
     *  *
     * @param InviteSubAccountRequest $request InviteSubAccountRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InviteSubAccountResponse InviteSubAccountResponse
     */
    public function inviteSubAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountInfoList)) {
            $query['AccountInfoList'] = $request->accountInfoList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InviteSubAccount',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InviteSubAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiate the Partner registration invitation.
     *  *
     * @description The current API request rate for the Cloud Product has not been disclosed.
     *  *
     * @param InviteSubAccountRequest $request InviteSubAccountRequest
     *
     * @return InviteSubAccountResponse InviteSubAccountResponse
     */
    public function inviteSubAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inviteSubAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 发放优惠券
     *  *
     * @param IssueCouponForCustomerRequest $request IssueCouponForCustomerRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return IssueCouponForCustomerResponse IssueCouponForCustomerResponse
     */
    public function issueCouponForCustomerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->couponTemplateId)) {
            $query['CouponTemplateId'] = $request->couponTemplateId;
        }
        if (!Utils::isUnset($request->uidlist)) {
            $query['Uidlist'] = $request->uidlist;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IssueCouponForCustomer',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IssueCouponForCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发放优惠券
     *  *
     * @param IssueCouponForCustomerRequest $request IssueCouponForCustomerRequest
     *
     * @return IssueCouponForCustomerResponse IssueCouponForCustomerResponse
     */
    public function issueCouponForCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->issueCouponForCustomerWithOptions($request, $runtime);
    }

    /**
     * @summary This function is available for all Distributors. It displays the corresponding region code information based on the operable countries as agreed in the Distributor\\"s contract.
     *  *
     * @description The current API request rate for cloud products has not been disclosed.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCountriesResponse ListCountriesResponse
     */
    public function listCountriesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListCountries',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCountriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This function is available for all Distributors. It displays the corresponding region code information based on the operable countries as agreed in the Distributor\\"s contract.
     *  *
     * @description The current API request rate for cloud products has not been disclosed.
     *  *
     * @return ListCountriesResponse ListCountriesResponse
     */
    public function listCountries()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCountriesWithOptions($runtime);
    }

    /**
     * @summary 优惠券使用量列表查询
     *  *
     * @param ListCouponUsageRequest $request ListCouponUsageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCouponUsageResponse ListCouponUsageResponse
     */
    public function listCouponUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
        if (!Utils::isUnset($request->couponTemplateId)) {
            $query['CouponTemplateId'] = $request->couponTemplateId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCouponUsage',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCouponUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 优惠券使用量列表查询
     *  *
     * @param ListCouponUsageRequest $request ListCouponUsageRequest
     *
     * @return ListCouponUsageResponse ListCouponUsageResponse
     */
    public function listCouponUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCouponUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Check the result of export quota list as a Distribution Customer from International Site. Only available on International Site.
     *  *
     * @description Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *  *
     * @param QuotaListExportPagedRequest $request QuotaListExportPagedRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QuotaListExportPagedResponse QuotaListExportPagedResponse
     */
    public function quotaListExportPagedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuotaListExportPaged',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuotaListExportPagedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Check the result of export quota list as a Distribution Customer from International Site. Only available on International Site.
     *  *
     * @description Caller must be a Partner from International Site, either Distribution or Reseller will do.
     *  *
     * @param QuotaListExportPagedRequest $request QuotaListExportPagedRequest
     *
     * @return QuotaListExportPagedResponse QuotaListExportPagedResponse
     */
    public function quotaListExportPaged($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->quotaListExportPagedWithOptions($request, $runtime);
    }

    /**
     * @summary Resend invitation email.
     *  *
     * @param ResendEmailRequest $request ResendEmailRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResendEmailResponse ResendEmailResponse
     */
    public function resendEmailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inviteId)) {
            $query['InviteId'] = $request->inviteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResendEmail',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResendEmailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resend invitation email.
     *  *
     * @param ResendEmailRequest $request ResendEmailRequest
     *
     * @return ResendEmailResponse ResendEmailResponse
     */
    public function resendEmail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resendEmailWithOptions($request, $runtime);
    }

    /**
     * @summary This function is designed for Sub Account information maintenance, including Nickname and Remark.
     *  *
     * @param SetAccountInfoRequest $request SetAccountInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAccountInfoResponse SetAccountInfoResponse
     */
    public function setAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNickname)) {
            $query['AccountNickname'] = $request->accountNickname;
        }
        if (!Utils::isUnset($request->customerBd)) {
            $query['CustomerBd'] = $request->customerBd;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAccountInfo',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary This function is designed for Sub Account information maintenance, including Nickname and Remark.
     *  *
     * @param SetAccountInfoRequest $request SetAccountInfoRequest
     *
     * @return SetAccountInfoResponse SetAccountInfoResponse
     */
    public function setAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAccountInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Set Credit Line for Distribution Customers. This function is only available for Resellers and Distributors.
     *  *
     * @param SetCreditLineRequest $request SetCreditLineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCreditLineResponse SetCreditLineResponse
     */
    public function setCreditLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creditLine)) {
            $query['CreditLine'] = $request->creditLine;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCreditLine',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCreditLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Set Credit Line for Distribution Customers. This function is only available for Resellers and Distributors.
     *  *
     * @param SetCreditLineRequest $request SetCreditLineRequest
     *
     * @return SetCreditLineResponse SetCreditLineResponse
     */
    public function setCreditLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCreditLineWithOptions($request, $runtime);
    }

    /**
     * @summary You can use this API to set the threshold for the use of credit control. When the customer credit control reaches below the threshold, it will pass through the notification email distributor. This feature is for Reseller and Distributor only.
     *  *
     * @param SetWarningThresholdRequest $request SetWarningThresholdRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetWarningThresholdResponse SetWarningThresholdResponse
     */
    public function setWarningThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->warningValue)) {
            $query['WarningValue'] = $request->warningValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetWarningThreshold',
            'version'     => '2022-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetWarningThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can use this API to set the threshold for the use of credit control. When the customer credit control reaches below the threshold, it will pass through the notification email distributor. This feature is for Reseller and Distributor only.
     *  *
     * @param SetWarningThresholdRequest $request SetWarningThresholdRequest
     *
     * @return SetWarningThresholdResponse SetWarningThresholdResponse
     */
    public function setWarningThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWarningThresholdWithOptions($request, $runtime);
    }

    /**
     * @summary Generates the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *  *
     * @description *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
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
     *  *
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
     * @summary Generates the subscription to multi-level bills as an Alibaba Cloud eco-partner.
     *  *
     * @description *   Make sure that you are a distributor of the Alibaba Cloud international ecosystem.
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
     *  *
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
