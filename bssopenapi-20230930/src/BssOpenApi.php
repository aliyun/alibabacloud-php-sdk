<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CheckAccountExistRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CheckAccountExistResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CheckBudgetNameExistsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CheckBudgetNameExistsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateBudgetShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountPayRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountPayRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountPayRelationShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountTransferRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountTransferResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateReportDefinitionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateReportDefinitionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteBudgetRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteBudgetResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCouponDeductTagRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCouponDeductTagResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCouponDeductTagShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteReportDefinitionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteReportDefinitionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeDeductLogsShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanAllocateCreditAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanAllocateCreditAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanRecycleAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanRecycleAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanTransferAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanTransferAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanWithdrawAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanWithdrawAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountLowAvailableAmountAlarmResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountTransactionDetailsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountTransactionDetailsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountTransactionDetailsShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrdersRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrdersResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanUserDeductRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanUserDeductRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanUserDeductRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListCouponDeductTagRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListCouponDeductTagResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListCouponDeductTagShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountPayRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountPayRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceCandidateShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListInvoiceTitleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListReportDefinitionsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListReportDefinitionsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\PayOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\PayOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostByCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostByCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShareRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryMonthlySlaListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryMonthlySlaListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountLowAvailableAmountAlarmResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SubmitSlaCouponApplyRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SubmitSlaCouponApplyResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\UpdateBudgetRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\UpdateBudgetResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\UpdateBudgetShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BssOpenApi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'business.aliyuncs.com',
            'cn-shanghai' => 'business.aliyuncs.com',
            'ap-southeast-1' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'business.ap-southeast-1.aliyuncs.com',
            'cn-beijing' => 'business.aliyuncs.com',
            'cn-beijing-finance-1' => 'business.aliyuncs.com',
            'cn-beijing-finance-pop' => 'business.aliyuncs.com',
            'cn-beijing-gov-1' => 'business.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'business.aliyuncs.com',
            'cn-chengdu' => 'business.aliyuncs.com',
            'cn-edge-1' => 'business.aliyuncs.com',
            'cn-fujian' => 'business.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'business.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'business.aliyuncs.com',
            'cn-hangzhou-finance' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'business.aliyuncs.com',
            'cn-hangzhou-test-306' => 'business.aliyuncs.com',
            'cn-hongkong' => 'business.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'business.aliyuncs.com',
            'cn-huhehaote' => 'business.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'business.aliyuncs.com',
            'cn-north-2-gov-1' => 'business.aliyuncs.com',
            'cn-qingdao' => 'business.aliyuncs.com',
            'cn-qingdao-nebula' => 'business.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'business.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'business.aliyuncs.com',
            'cn-shanghai-finance-1' => 'business.aliyuncs.com',
            'cn-shanghai-inner' => 'business.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'business.aliyuncs.com',
            'cn-shenzhen' => 'business.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'business.aliyuncs.com',
            'cn-shenzhen-inner' => 'business.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'business.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'business.aliyuncs.com',
            'cn-wuhan' => 'business.aliyuncs.com',
            'cn-wulanchabu' => 'business.aliyuncs.com',
            'cn-yushanfang' => 'business.aliyuncs.com',
            'cn-zhangbei' => 'business.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'business.aliyuncs.com',
            'cn-zhangjiakou' => 'business.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'business.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'business.aliyuncs.com',
            'eu-central-1' => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs' => 'business.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'business.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop' => 'business.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'business.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'business.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bssopenapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加优惠券抵扣标签.
     *
     * @param tmpReq - AddCouponDeductTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCouponDeductTagResponse
     *
     * @param AddCouponDeductTagRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AddCouponDeductTagResponse
     */
    public function addCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddCouponDeductTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCouponDeductTag',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCouponDeductTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加优惠券抵扣标签.
     *
     * @param request - AddCouponDeductTagRequest
     *
     * @returns AddCouponDeductTagResponse
     *
     * @param AddCouponDeductTagRequest $request
     *
     * @return AddCouponDeductTagResponse
     */
    public function addCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * Allocates resource instances (instance-based and attached-resource-based) from a source cost center to a destination cost center.
     *
     * @param tmpReq - AllocateCostCenterResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateCostCenterResourceResponse
     *
     * @param AllocateCostCenterResourceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return AllocateCostCenterResourceResponse
     */
    public function allocateCostCenterResourceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AllocateCostCenterResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceInstanceList) {
            $request->resourceInstanceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceInstanceList, 'ResourceInstanceList', 'json');
        }

        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->fromCostCenterId) {
            @$body['FromCostCenterId'] = $request->fromCostCenterId;
        }

        if (null !== $request->fromOwnerAccountId) {
            @$body['FromOwnerAccountId'] = $request->fromOwnerAccountId;
        }

        if (null !== $request->resourceInstanceListShrink) {
            @$body['ResourceInstanceList'] = $request->resourceInstanceListShrink;
        }

        if (null !== $request->toCostCenterId) {
            @$body['ToCostCenterId'] = $request->toCostCenterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AllocateCostCenterResource',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateCostCenterResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allocates resource instances (instance-based and attached-resource-based) from a source cost center to a destination cost center.
     *
     * @param request - AllocateCostCenterResourceRequest
     *
     * @returns AllocateCostCenterResourceResponse
     *
     * @param AllocateCostCenterResourceRequest $request
     *
     * @return AllocateCostCenterResourceResponse
     */
    public function allocateCostCenterResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateCostCenterResourceWithOptions($request, $runtime);
    }

    /**
     * Cancels the low balance alert for a fund account.
     *
     * @remarks
     * Cancels the low balance alert for a fund account.
     *
     * @param request - CancelFundAccountLowAvailableAmountAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelFundAccountLowAvailableAmountAlarmResponse
     *
     * @param CancelFundAccountLowAvailableAmountAlarmRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return CancelFundAccountLowAvailableAmountAlarmResponse
     */
    public function cancelFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelFundAccountLowAvailableAmountAlarm',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelFundAccountLowAvailableAmountAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the low balance alert for a fund account.
     *
     * @remarks
     * Cancels the low balance alert for a fund account.
     *
     * @param request - CancelFundAccountLowAvailableAmountAlarmRequest
     *
     * @returns CancelFundAccountLowAvailableAmountAlarmResponse
     *
     * @param CancelFundAccountLowAvailableAmountAlarmRequest $request
     *
     * @return CancelFundAccountLowAvailableAmountAlarmResponse
     */
    public function cancelFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * 提货券账户检查是否存在.
     *
     * @param request - CheckAccountExistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAccountExistResponse
     *
     * @param CheckAccountExistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckAccountExistResponse
     */
    public function checkAccountExistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->toUserType) {
            @$body['ToUserType'] = $request->toUserType;
        }

        if (null !== $request->transferAccount) {
            @$body['TransferAccount'] = $request->transferAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckAccountExist',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckAccountExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提货券账户检查是否存在.
     *
     * @param request - CheckAccountExistRequest
     *
     * @returns CheckAccountExistResponse
     *
     * @param CheckAccountExistRequest $request
     *
     * @return CheckAccountExistResponse
     */
    public function checkAccountExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAccountExistWithOptions($request, $runtime);
    }

    /**
     * Checks whether a specified budgetName exists.
     *
     * @param request - CheckBudgetNameExistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckBudgetNameExistsResponse
     *
     * @param CheckBudgetNameExistsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckBudgetNameExistsResponse
     */
    public function checkBudgetNameExistsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckBudgetNameExists',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckBudgetNameExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a specified budgetName exists.
     *
     * @param request - CheckBudgetNameExistsRequest
     *
     * @returns CheckBudgetNameExistsResponse
     *
     * @param CheckBudgetNameExistsRequest $request
     *
     * @return CheckBudgetNameExistsResponse
     */
    public function checkBudgetNameExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkBudgetNameExistsWithOptions($request, $runtime);
    }

    /**
     * Creates a budget.
     *
     * @param tmpReq - CreateBudgetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBudgetResponse
     *
     * @param CreateBudgetRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBudgetResponse
     */
    public function createBudgetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateBudgetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cycleQuota) {
            $request->cycleQuotaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cycleQuota, 'CycleQuota', 'json');
        }

        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->queryFilter) {
            $request->queryFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryFilter, 'QueryFilter', 'json');
        }

        if (null !== $tmpReq->warnConfs) {
            $request->warnConfsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->warnConfs, 'WarnConfs', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        if (null !== $request->budgetType) {
            @$body['BudgetType'] = $request->budgetType;
        }

        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->cycleEndPeriod) {
            @$body['CycleEndPeriod'] = $request->cycleEndPeriod;
        }

        if (null !== $request->cycleQuotaShrink) {
            @$body['CycleQuota'] = $request->cycleQuotaShrink;
        }

        if (null !== $request->cycleStartPeriod) {
            @$body['CycleStartPeriod'] = $request->cycleStartPeriod;
        }

        if (null !== $request->cycleType) {
            @$body['CycleType'] = $request->cycleType;
        }

        if (null !== $request->metric) {
            @$body['Metric'] = $request->metric;
        }

        if (null !== $request->queryFilterShrink) {
            @$body['QueryFilter'] = $request->queryFilterShrink;
        }

        if (null !== $request->quota) {
            @$body['Quota'] = $request->quota;
        }

        if (null !== $request->quotaType) {
            @$body['QuotaType'] = $request->quotaType;
        }

        if (null !== $request->warnConfsShrink) {
            @$body['WarnConfs'] = $request->warnConfsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBudget',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBudgetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a budget.
     *
     * @param request - CreateBudgetRequest
     *
     * @returns CreateBudgetResponse
     *
     * @param CreateBudgetRequest $request
     *
     * @return CreateBudgetResponse
     */
    public function createBudget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBudgetWithOptions($request, $runtime);
    }

    /**
     * Create Cost Center.
     *
     * @remarks
     * Creates one or more cost centers.
     *
     * @param tmpReq - CreateCostCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCostCenterResponse
     *
     * @param CreateCostCenterRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCostCenterResponse
     */
    public function createCostCenterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCostCenterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->costCenterEntityList) {
            $request->costCenterEntityListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->costCenterEntityList, 'CostCenterEntityList', 'json');
        }

        $query = [];
        if (null !== $request->costCenterEntityListShrink) {
            @$query['CostCenterEntityList'] = $request->costCenterEntityListShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCostCenter',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCostCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Cost Center.
     *
     * @remarks
     * Creates one or more cost centers.
     *
     * @param request - CreateCostCenterRequest
     *
     * @returns CreateCostCenterResponse
     *
     * @param CreateCostCenterRequest $request
     *
     * @return CreateCostCenterResponse
     */
    public function createCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostCenterWithOptions($request, $runtime);
    }

    /**
     * Create a financial unit auto-allocation rule.
     *
     * @param tmpReq - CreateCostCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCostCenterRuleResponse
     *
     * @param CreateCostCenterRuleRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCostCenterRuleResponse
     */
    public function createCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCostCenterRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterExpression) {
            $request->filterExpressionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }

        $query = [];
        if (null !== $request->filterExpressionShrink) {
            @$query['FilterExpression'] = $request->filterExpressionShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->costCenterId) {
            @$body['CostCenterId'] = $request->costCenterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCostCenterRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCostCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a financial unit auto-allocation rule.
     *
     * @param request - CreateCostCenterRuleRequest
     *
     * @returns CreateCostCenterRuleResponse
     *
     * @param CreateCostCenterRuleRequest $request
     *
     * @return CreateCostCenterRuleResponse
     */
    public function createCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * Create payment relationships for a fund account.
     *
     * @param tmpReq - CreateFundAccountPayRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFundAccountPayRelationResponse
     *
     * @param CreateFundAccountPayRelationRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateFundAccountPayRelationResponse
     */
    public function createFundAccountPayRelationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFundAccountPayRelationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFundAccountPayRelation',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFundAccountPayRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create payment relationships for a fund account.
     *
     * @param request - CreateFundAccountPayRelationRequest
     *
     * @returns CreateFundAccountPayRelationResponse
     *
     * @param CreateFundAccountPayRelationRequest $request
     *
     * @return CreateFundAccountPayRelationResponse
     */
    public function createFundAccountPayRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFundAccountPayRelationWithOptions($request, $runtime);
    }

    /**
     * Creates an account transfer or revocation.
     *
     * @param request - CreateFundAccountTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFundAccountTransferResponse
     *
     * @param CreateFundAccountTransferRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateFundAccountTransferResponse
     */
    public function createFundAccountTransferWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amount) {
            @$body['Amount'] = $request->amount;
        }

        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->financeType) {
            @$body['FinanceType'] = $request->financeType;
        }

        if (null !== $request->fromFundAccountId) {
            @$body['FromFundAccountId'] = $request->fromFundAccountId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->toFundAccountId) {
            @$body['ToFundAccountId'] = $request->toFundAccountId;
        }

        if (null !== $request->transferType) {
            @$body['TransferType'] = $request->transferType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFundAccountTransfer',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFundAccountTransferResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account transfer or revocation.
     *
     * @param request - CreateFundAccountTransferRequest
     *
     * @returns CreateFundAccountTransferResponse
     *
     * @param CreateFundAccountTransferRequest $request
     *
     * @return CreateFundAccountTransferResponse
     */
    public function createFundAccountTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFundAccountTransferWithOptions($request, $runtime);
    }

    /**
     * Apply for Invoice.
     *
     * @param tmpReq - CreateInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInvoiceResponse
     *
     * @param CreateInvoiceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateInvoiceResponse
     */
    public function createInvoiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateInvoiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->invoiceCandidateIds) {
            $request->invoiceCandidateIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->invoiceCandidateIds, 'InvoiceCandidateIds', 'json');
        }

        if (null !== $tmpReq->recipientEmails) {
            $request->recipientEmailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recipientEmails, 'RecipientEmails', 'json');
        }

        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->invoiceCandidateIdsShrink) {
            @$query['InvoiceCandidateIds'] = $request->invoiceCandidateIdsShrink;
        }

        if (null !== $request->invoiceMode) {
            @$query['InvoiceMode'] = $request->invoiceMode;
        }

        if (null !== $request->invoiceRemark) {
            @$query['InvoiceRemark'] = $request->invoiceRemark;
        }

        if (null !== $request->invoiceTitleId) {
            @$query['InvoiceTitleId'] = $request->invoiceTitleId;
        }

        if (null !== $request->invoiceType) {
            @$query['InvoiceType'] = $request->invoiceType;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->recipientEmailsShrink) {
            @$query['RecipientEmails'] = $request->recipientEmailsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInvoice',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Apply for Invoice.
     *
     * @param request - CreateInvoiceRequest
     *
     * @returns CreateInvoiceResponse
     *
     * @param CreateInvoiceRequest $request
     *
     * @return CreateInvoiceResponse
     */
    public function createInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInvoiceWithOptions($request, $runtime);
    }

    /**
     * Creates a billing report subscription.
     *
     * @remarks
     * When you call this API operation, note the following information:
     * - You can subscribe to one type of billing file at a time.
     * - Except for monthly bill PDFs, starting from the day after the subscription, the system pushes daily billing files that contain full detailed data from the beginning of the current month to the present. Before the 4th of each month, the system pushes full billing files for the complete billing cycle of the previous month.
     * - Monthly bill PDFs are pushed before the 4th of each month for the previous month.
     * - Billing files generated on a daily basis may have delays. Delayed billing files are pushed on the day after they are generated and may also contain bills that were delayed from before the previous day and generated on the previous day. We recommend that you pull the full files for the previous month at the beginning of each month.
     * > Apply for the required permissions by following the procedure described in the documentation: [Billing Subscription](https://help.aliyun.com/zh/user-center/user-guide/billing-subscription?spm=5176.21213303.J_v8LsmxMG6alneH-O7TCPa.1.3ef82f3d5ZIf08&scm=20140722.S_help@@%E6%96%87%E6%A1%A3@@2861820._.ID_help@@%E6%96%87%E6%A1%A3@@2861820-RL_%E8%B4%A6%E5%8D%95%E8%AE%A2%E9%98%85-LOC_2024SPHelpResult-OR_ser-PAR1_2150419517478292121114501eaee8-V_4-RE_new5-P0_0-P1_0)
     * - This subscription and the Expenses and Costs - Billing Subscription are the same feature, and subscriptions are interchangeable.
     * - When subscribing to a directory under a bucket, follow the directory naming conventions:
     *     - Emojis are not allowed. Use compliant UTF-8 characters.
     *     - Forward slashes (/) are used to separate paths and can quickly create subdirectories. However, do not start with / or \\, and do not use consecutive forward slashes (/).
     *     - Subdirectories named .. are not allowed.
     *     - The total length must be 1 to 254 characters.
     * - File names:
     *     - Example: **consumeDetailBillV2** (billing item details)
     *
     *         - Daily push file name format: `{Account UID}_{Site ID}_{Bill type}_{YYYYMM|YYYYMMDD}`, for example: `169**_2688801000001_consumeDetailBillV2_20190312`.
     *
     *         - Full file name format at the beginning of the next month: `{Account UID}_{Site ID}_{Bill type}_{YYYYMM|YYYYMM}`, for example: `169**_2688801000001_consumeDetailBillV2_201903`.
     * - Monthly bill PDF files are in .pdf format, and other file types are in .csv format. When the data volume is large, the system automatically splits the exported bills into multiple files and compresses them into one or more .zip files. The .zip file name format is the same.
     *
     * @param request - CreateReportDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReportDefinitionResponse
     *
     * @param CreateReportDefinitionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateReportDefinitionResponse
     */
    public function createReportDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginBillingCycle) {
            @$query['BeginBillingCycle'] = $request->beginBillingCycle;
        }

        if (null !== $request->includeMembers) {
            @$query['IncludeMembers'] = $request->includeMembers;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->notSendOnNoData) {
            @$query['NotSendOnNoData'] = $request->notSendOnNoData;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossBucketOwnerAccountId) {
            @$query['OssBucketOwnerAccountId'] = $request->ossBucketOwnerAccountId;
        }

        if (null !== $request->ossBucketPath) {
            @$query['OssBucketPath'] = $request->ossBucketPath;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        if (null !== $request->sendWithAttach) {
            @$query['SendWithAttach'] = $request->sendWithAttach;
        }

        if (null !== $request->splitFileOnUserId) {
            @$query['SplitFileOnUserId'] = $request->splitFileOnUserId;
        }

        $body = [];
        if (null !== $request->mcProject) {
            @$body['McProject'] = $request->mcProject;
        }

        if (null !== $request->mcTableName) {
            @$body['McTableName'] = $request->mcTableName;
        }

        if (null !== $request->reportSourceType) {
            @$body['ReportSourceType'] = $request->reportSourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateReportDefinition',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReportDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a billing report subscription.
     *
     * @remarks
     * When you call this API operation, note the following information:
     * - You can subscribe to one type of billing file at a time.
     * - Except for monthly bill PDFs, starting from the day after the subscription, the system pushes daily billing files that contain full detailed data from the beginning of the current month to the present. Before the 4th of each month, the system pushes full billing files for the complete billing cycle of the previous month.
     * - Monthly bill PDFs are pushed before the 4th of each month for the previous month.
     * - Billing files generated on a daily basis may have delays. Delayed billing files are pushed on the day after they are generated and may also contain bills that were delayed from before the previous day and generated on the previous day. We recommend that you pull the full files for the previous month at the beginning of each month.
     * > Apply for the required permissions by following the procedure described in the documentation: [Billing Subscription](https://help.aliyun.com/zh/user-center/user-guide/billing-subscription?spm=5176.21213303.J_v8LsmxMG6alneH-O7TCPa.1.3ef82f3d5ZIf08&scm=20140722.S_help@@%E6%96%87%E6%A1%A3@@2861820._.ID_help@@%E6%96%87%E6%A1%A3@@2861820-RL_%E8%B4%A6%E5%8D%95%E8%AE%A2%E9%98%85-LOC_2024SPHelpResult-OR_ser-PAR1_2150419517478292121114501eaee8-V_4-RE_new5-P0_0-P1_0)
     * - This subscription and the Expenses and Costs - Billing Subscription are the same feature, and subscriptions are interchangeable.
     * - When subscribing to a directory under a bucket, follow the directory naming conventions:
     *     - Emojis are not allowed. Use compliant UTF-8 characters.
     *     - Forward slashes (/) are used to separate paths and can quickly create subdirectories. However, do not start with / or \\, and do not use consecutive forward slashes (/).
     *     - Subdirectories named .. are not allowed.
     *     - The total length must be 1 to 254 characters.
     * - File names:
     *     - Example: **consumeDetailBillV2** (billing item details)
     *
     *         - Daily push file name format: `{Account UID}_{Site ID}_{Bill type}_{YYYYMM|YYYYMMDD}`, for example: `169**_2688801000001_consumeDetailBillV2_20190312`.
     *
     *         - Full file name format at the beginning of the next month: `{Account UID}_{Site ID}_{Bill type}_{YYYYMM|YYYYMM}`, for example: `169**_2688801000001_consumeDetailBillV2_201903`.
     * - Monthly bill PDF files are in .pdf format, and other file types are in .csv format. When the data volume is large, the system automatically splits the exported bills into multiple files and compresses them into one or more .zip files. The .zip file name format is the same.
     *
     * @param request - CreateReportDefinitionRequest
     *
     * @returns CreateReportDefinitionResponse
     *
     * @param CreateReportDefinitionRequest $request
     *
     * @return CreateReportDefinitionResponse
     */
    public function createReportDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReportDefinitionWithOptions($request, $runtime);
    }

    /**
     * Deletes a budget.
     *
     * @param request - DeleteBudgetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBudgetResponse
     *
     * @param DeleteBudgetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBudgetResponse
     */
    public function deleteBudgetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBudget',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBudgetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a budget.
     *
     * @param request - DeleteBudgetRequest
     *
     * @returns DeleteBudgetResponse
     *
     * @param DeleteBudgetRequest $request
     *
     * @return DeleteBudgetResponse
     */
    public function deleteBudget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBudgetWithOptions($request, $runtime);
    }

    /**
     * Delete Cost Center.
     *
     * @remarks
     * This API is in canary release and is only available to whitelisted users. Excessive calls may cause performance issues such as response timeouts.
     *
     * @param request - DeleteCostCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCostCenterResponse
     *
     * @param DeleteCostCenterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCostCenterResponse
     */
    public function deleteCostCenterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->costCenterId) {
            @$query['CostCenterId'] = $request->costCenterId;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->ownerAccountId) {
            @$query['OwnerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCostCenter',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCostCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Cost Center.
     *
     * @remarks
     * This API is in canary release and is only available to whitelisted users. Excessive calls may cause performance issues such as response timeouts.
     *
     * @param request - DeleteCostCenterRequest
     *
     * @returns DeleteCostCenterResponse
     *
     * @param DeleteCostCenterRequest $request
     *
     * @return DeleteCostCenterResponse
     */
    public function deleteCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostCenterWithOptions($request, $runtime);
    }

    /**
     * Delete financial unit automatic allocation rule.
     *
     * @remarks
     * This API is in canary release and is only available to whitelisted users. Excessive calls may cause performance issues such as response timeouts.
     *
     * @param tmpReq - DeleteCostCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCostCenterRuleResponse
     *
     * @param DeleteCostCenterRuleRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCostCenterRuleResponse
     */
    public function deleteCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteCostCenterRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterExpression) {
            $request->filterExpressionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }

        $query = [];
        if (null !== $request->filterExpressionShrink) {
            @$query['FilterExpression'] = $request->filterExpressionShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->costCenterId) {
            @$body['CostCenterId'] = $request->costCenterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCostCenterRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCostCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete financial unit automatic allocation rule.
     *
     * @remarks
     * This API is in canary release and is only available to whitelisted users. Excessive calls may cause performance issues such as response timeouts.
     *
     * @param request - DeleteCostCenterRuleRequest
     *
     * @returns DeleteCostCenterRuleResponse
     *
     * @param DeleteCostCenterRuleRequest $request
     *
     * @return DeleteCostCenterRuleResponse
     */
    public function deleteCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * 删除优惠券的抵扣标签.
     *
     * @param tmpReq - DeleteCouponDeductTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCouponDeductTagResponse
     *
     * @param DeleteCouponDeductTagRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCouponDeductTagResponse
     */
    public function deleteCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteCouponDeductTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->tagKeys) {
            $request->tagKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }

        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->tagKeysShrink) {
            @$query['TagKeys'] = $request->tagKeysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCouponDeductTag',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCouponDeductTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除优惠券的抵扣标签.
     *
     * @param request - DeleteCouponDeductTagRequest
     *
     * @returns DeleteCouponDeductTagResponse
     *
     * @param DeleteCouponDeductTagRequest $request
     *
     * @return DeleteCouponDeductTagResponse
     */
    public function deleteCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * Deletes a bill report export subscription.
     *
     * @param request - DeleteReportDefinitionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReportDefinitionResponse
     *
     * @param DeleteReportDefinitionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteReportDefinitionResponse
     */
    public function deleteReportDefinitionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->reportTaskId) {
            @$query['ReportTaskId'] = $request->reportTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteReportDefinition',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteReportDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a bill report export subscription.
     *
     * @param request - DeleteReportDefinitionRequest
     *
     * @returns DeleteReportDefinitionResponse
     *
     * @param DeleteReportDefinitionRequest $request
     *
     * @return DeleteReportDefinitionResponse
     */
    public function deleteReportDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReportDefinitionWithOptions($request, $runtime);
    }

    /**
     * Query a Single Budget.
     *
     * @param request - DescribeBudgetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBudgetResponse
     *
     * @param DescribeBudgetRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeBudgetResponse
     */
    public function describeBudgetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeBudget',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBudgetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Single Budget.
     *
     * @param request - DescribeBudgetRequest
     *
     * @returns DescribeBudgetResponse
     *
     * @param DescribeBudgetRequest $request
     *
     * @return DescribeBudgetResponse
     */
    public function describeBudget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBudgetWithOptions($request, $runtime);
    }

    /**
     * Query budget list.
     *
     * @param request - DescribeBudgetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBudgetsResponse
     *
     * @param DescribeBudgetsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBudgetsResponse
     */
    public function describeBudgetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        if (null !== $request->budgetType) {
            @$body['BudgetType'] = $request->budgetType;
        }

        if (null !== $request->expireStatus) {
            @$body['ExpireStatus'] = $request->expireStatus;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeBudgets',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBudgetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query budget list.
     *
     * @param request - DescribeBudgetsRequest
     *
     * @returns DescribeBudgetsResponse
     *
     * @param DescribeBudgetsRequest $request
     *
     * @return DescribeBudgetsResponse
     */
    public function describeBudgets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBudgetsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of coupons.
     *
     * @param tmpReq - DescribeCouponRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCouponResponse
     *
     * @param DescribeCouponRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeCouponResponse
     */
    public function describeCouponWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCouponShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->couponTemplateIdList) {
            $request->couponTemplateIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->couponTemplateIdList, 'CouponTemplateIdList', 'json');
        }

        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        if (null !== $request->couponNo) {
            @$query['CouponNo'] = $request->couponNo;
        }

        if (null !== $request->couponTemplateIdListShrink) {
            @$query['CouponTemplateIdList'] = $request->couponTemplateIdListShrink;
        }

        if (null !== $request->couponType) {
            @$query['CouponType'] = $request->couponType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->effectiveEndTime) {
            @$query['EffectiveEndTime'] = $request->effectiveEndTime;
        }

        if (null !== $request->effectiveStartTime) {
            @$query['EffectiveStartTime'] = $request->effectiveStartTime;
        }

        if (null !== $request->expireEndDate) {
            @$query['ExpireEndDate'] = $request->expireEndDate;
        }

        if (null !== $request->expireStartDate) {
            @$query['ExpireStartDate'] = $request->expireStartDate;
        }

        if (null !== $request->includeShare) {
            @$query['IncludeShare'] = $request->includeShare;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCoupon',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCouponResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of coupons.
     *
     * @param request - DescribeCouponRequest
     *
     * @returns DescribeCouponResponse
     *
     * @param DescribeCouponRequest $request
     *
     * @return DescribeCouponResponse
     */
    public function describeCoupon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponWithOptions($request, $runtime);
    }

    /**
     * Queries the list of products available for a coupon.
     *
     * @param tmpReq - DescribeCouponItemListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCouponItemListResponse
     *
     * @param DescribeCouponItemListRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCouponItemListResponse
     */
    public function describeCouponItemListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCouponItemListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCouponItemList',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCouponItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of products available for a coupon.
     *
     * @param request - DescribeCouponItemListRequest
     *
     * @returns DescribeCouponItemListResponse
     *
     * @param DescribeCouponItemListRequest $request
     *
     * @return DescribeCouponItemListResponse
     */
    public function describeCouponItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponItemListWithOptions($request, $runtime);
    }

    /**
     * Queries resource plan deduction records.
     *
     * @param tmpReq - DescribeDeductLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeductLogsResponse
     *
     * @param DescribeDeductLogsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeductLogsResponse
     */
    public function describeDeductLogsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeDeductLogsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->relationAccountIds) {
            $request->relationAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->relationAccountIds, 'RelationAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->billInstanceId) {
            @$query['BillInstanceId'] = $request->billInstanceId;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->billingCommodityCode) {
            @$body['BillingCommodityCode'] = $request->billingCommodityCode;
        }

        if (null !== $request->billingEndTime) {
            @$body['BillingEndTime'] = $request->billingEndTime;
        }

        if (null !== $request->billingStartTime) {
            @$body['BillingStartTime'] = $request->billingStartTime;
        }

        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->group) {
            @$body['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->relationAccountIdsShrink) {
            @$body['RelationAccountIds'] = $request->relationAccountIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDeductLogs',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeductLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource plan deduction records.
     *
     * @param request - DescribeDeductLogsRequest
     *
     * @returns DescribeDeductLogsResponse
     *
     * @param DescribeDeductLogsRequest $request
     *
     * @return DescribeDeductLogsResponse
     */
    public function describeDeductLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeductLogsWithOptions($request, $runtime);
    }

    /**
     * Queries resource plan instances.
     *
     * @param tmpReq - DescribeFrInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFrInstancesResponse
     *
     * @param DescribeFrInstancesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFrInstancesResponse
     */
    public function describeFrInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeFrInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->instanceTag) {
            @$query['InstanceTag'] = $request->instanceTag;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->capacityType) {
            @$body['CapacityType'] = $request->capacityType;
        }

        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->cycleType) {
            @$body['CycleType'] = $request->cycleType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->group) {
            @$body['Group'] = $request->group;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->sortRule) {
            @$body['SortRule'] = $request->sortRule;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeFrInstances',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFrInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource plan instances.
     *
     * @param request - DescribeFrInstancesRequest
     *
     * @returns DescribeFrInstancesResponse
     *
     * @param DescribeFrInstancesRequest $request
     *
     * @return DescribeFrInstancesResponse
     */
    public function describeFrInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFrInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取客户使用SPN的概述信息.
     *
     * @param tmpReq - DescribeUserSpnSummaryInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserSpnSummaryInfoResponse
     *
     * @param DescribeUserSpnSummaryInfoRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUserSpnSummaryInfoResponse
     */
    public function describeUserSpnSummaryInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeUserSpnSummaryInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserSpnSummaryInfo',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserSpnSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取客户使用SPN的概述信息.
     *
     * @param request - DescribeUserSpnSummaryInfoRequest
     *
     * @returns DescribeUserSpnSummaryInfoResponse
     *
     * @param DescribeUserSpnSummaryInfoRequest $request
     *
     * @return DescribeUserSpnSummaryInfoResponse
     */
    public function describeUserSpnSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserSpnSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * Query available balance of fund account.
     *
     * @param request - GetFundAccountAvailableAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountAvailableAmountResponse
     *
     * @param GetFundAccountAvailableAmountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetFundAccountAvailableAmountResponse
     */
    public function getFundAccountAvailableAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountAvailableAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountAvailableAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query available balance of fund account.
     *
     * @param request - GetFundAccountAvailableAmountRequest
     *
     * @returns GetFundAccountAvailableAmountResponse
     *
     * @param GetFundAccountAvailableAmountRequest $request
     *
     * @return GetFundAccountAvailableAmountResponse
     */
    public function getFundAccountAvailableAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountAvailableAmountWithOptions($request, $runtime);
    }

    /**
     * Query allocatable credit limit of a fund account.
     *
     * @param request - GetFundAccountCanAllocateCreditAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountCanAllocateCreditAmountResponse
     *
     * @param GetFundAccountCanAllocateCreditAmountRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetFundAccountCanAllocateCreditAmountResponse
     */
    public function getFundAccountCanAllocateCreditAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountCanAllocateCreditAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountCanAllocateCreditAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query allocatable credit limit of a fund account.
     *
     * @param request - GetFundAccountCanAllocateCreditAmountRequest
     *
     * @returns GetFundAccountCanAllocateCreditAmountResponse
     *
     * @param GetFundAccountCanAllocateCreditAmountRequest $request
     *
     * @return GetFundAccountCanAllocateCreditAmountResponse
     */
    public function getFundAccountCanAllocateCreditAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanAllocateCreditAmountWithOptions($request, $runtime);
    }

    /**
     * Queries the reclaimable amount of a fund account.
     *
     * @param request - GetFundAccountCanRecycleAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountCanRecycleAmountResponse
     *
     * @param GetFundAccountCanRecycleAmountRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetFundAccountCanRecycleAmountResponse
     */
    public function getFundAccountCanRecycleAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->recycleFromFundAccountId) {
            @$body['RecycleFromFundAccountId'] = $request->recycleFromFundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountCanRecycleAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountCanRecycleAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the reclaimable amount of a fund account.
     *
     * @param request - GetFundAccountCanRecycleAmountRequest
     *
     * @returns GetFundAccountCanRecycleAmountResponse
     *
     * @param GetFundAccountCanRecycleAmountRequest $request
     *
     * @return GetFundAccountCanRecycleAmountResponse
     */
    public function getFundAccountCanRecycleAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanRecycleAmountWithOptions($request, $runtime);
    }

    /**
     * Query the transferable amount of a fund account.
     *
     * @param request - GetFundAccountCanTransferAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountCanTransferAmountResponse
     *
     * @param GetFundAccountCanTransferAmountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetFundAccountCanTransferAmountResponse
     */
    public function getFundAccountCanTransferAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountCanTransferAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountCanTransferAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the transferable amount of a fund account.
     *
     * @param request - GetFundAccountCanTransferAmountRequest
     *
     * @returns GetFundAccountCanTransferAmountResponse
     *
     * @param GetFundAccountCanTransferAmountRequest $request
     *
     * @return GetFundAccountCanTransferAmountResponse
     */
    public function getFundAccountCanTransferAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanTransferAmountWithOptions($request, $runtime);
    }

    /**
     * Query Withdrawable Amount of Fund Account.
     *
     * @param request - GetFundAccountCanWithdrawAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountCanWithdrawAmountResponse
     *
     * @param GetFundAccountCanWithdrawAmountRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetFundAccountCanWithdrawAmountResponse
     */
    public function getFundAccountCanWithdrawAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountCanWithdrawAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountCanWithdrawAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Withdrawable Amount of Fund Account.
     *
     * @param request - GetFundAccountCanWithdrawAmountRequest
     *
     * @returns GetFundAccountCanWithdrawAmountResponse
     *
     * @param GetFundAccountCanWithdrawAmountRequest $request
     *
     * @return GetFundAccountCanWithdrawAmountResponse
     */
    public function getFundAccountCanWithdrawAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanWithdrawAmountWithOptions($request, $runtime);
    }

    /**
     * Query Fund Account Low Balance Alert.
     *
     * @param request - GetFundAccountLowAvailableAmountAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountLowAvailableAmountAlarmResponse
     *
     * @param GetFundAccountLowAvailableAmountAlarmRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetFundAccountLowAvailableAmountAlarmResponse
     */
    public function getFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountLowAvailableAmountAlarm',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountLowAvailableAmountAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Fund Account Low Balance Alert.
     *
     * @param request - GetFundAccountLowAvailableAmountAlarmRequest
     *
     * @returns GetFundAccountLowAvailableAmountAlarmResponse
     *
     * @param GetFundAccountLowAvailableAmountAlarmRequest $request
     *
     * @return GetFundAccountLowAvailableAmountAlarmResponse
     */
    public function getFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * Query fund account transaction details.
     *
     * @param tmpReq - GetFundAccountTransactionDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFundAccountTransactionDetailsResponse
     *
     * @param GetFundAccountTransactionDetailsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return GetFundAccountTransactionDetailsResponse
     */
    public function getFundAccountTransactionDetailsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetFundAccountTransactionDetailsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->transactionChannelList) {
            $request->transactionChannelListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transactionChannelList, 'TransactionChannelList', 'json');
        }

        if (null !== $tmpReq->transactionTypeList) {
            $request->transactionTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transactionTypeList, 'TransactionTypeList', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->billNumber) {
            @$body['BillNumber'] = $request->billNumber;
        }

        if (null !== $request->channelTransactionNumber) {
            @$body['ChannelTransactionNumber'] = $request->channelTransactionNumber;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->transactionChannelListShrink) {
            @$body['TransactionChannelList'] = $request->transactionChannelListShrink;
        }

        if (null !== $request->transactionDirection) {
            @$body['TransactionDirection'] = $request->transactionDirection;
        }

        if (null !== $request->transactionNumber) {
            @$body['TransactionNumber'] = $request->transactionNumber;
        }

        if (null !== $request->transactionType) {
            @$body['TransactionType'] = $request->transactionType;
        }

        if (null !== $request->transactionTypeListShrink) {
            @$body['TransactionTypeList'] = $request->transactionTypeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFundAccountTransactionDetails',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFundAccountTransactionDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query fund account transaction details.
     *
     * @param request - GetFundAccountTransactionDetailsRequest
     *
     * @returns GetFundAccountTransactionDetailsResponse
     *
     * @param GetFundAccountTransactionDetailsRequest $request
     *
     * @return GetFundAccountTransactionDetailsResponse
     */
    public function getFundAccountTransactionDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountTransactionDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specific order for a user or a reseller\\"s customer.
     *
     * @param request - GetOrderDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrderDetailResponse
     *
     * @param GetOrderDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOrderDetail',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific order for a user or a reseller\\"s customer.
     *
     * @param request - GetOrderDetailRequest
     *
     * @returns GetOrderDetailResponse
     *
     * @param GetOrderDetailRequest $request
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the order list of a user or a reseller customer. By default, this operation queries orders created within the most recent hour. To query orders over a longer time range, set the CreateTimeStart and CreateTimeEnd parameters.
     *
     * @param request - GetOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrdersResponse
     *
     * @param GetOrdersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetOrdersResponse
     */
    public function getOrdersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->memberUid) {
            @$query['MemberUid'] = $request->memberUid;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentStatus) {
            @$query['PaymentStatus'] = $request->paymentStatus;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOrders',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the order list of a user or a reseller customer. By default, this operation queries orders created within the most recent hour. To query orders over a longer time range, set the CreateTimeStart and CreateTimeEnd parameters.
     *
     * @param request - GetOrdersRequest
     *
     * @returns GetOrdersResponse
     *
     * @param GetOrdersRequest $request
     *
     * @return GetOrdersResponse
     */
    public function getOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrdersWithOptions($request, $runtime);
    }

    /**
     * 获取节省计划及可抵扣商品信息.
     *
     * @param tmpReq - GetSavingPlanDeductableCommodityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSavingPlanDeductableCommodityResponse
     *
     * @param GetSavingPlanDeductableCommodityRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return GetSavingPlanDeductableCommodityResponse
     */
    public function getSavingPlanDeductableCommodityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSavingPlanDeductableCommodityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSavingPlanDeductableCommodity',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSavingPlanDeductableCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节省计划及可抵扣商品信息.
     *
     * @param request - GetSavingPlanDeductableCommodityRequest
     *
     * @returns GetSavingPlanDeductableCommodityResponse
     *
     * @param GetSavingPlanDeductableCommodityRequest $request
     *
     * @return GetSavingPlanDeductableCommodityResponse
     */
    public function getSavingPlanDeductableCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanDeductableCommodityWithOptions($request, $runtime);
    }

    /**
     * 获取节省计划实例共享账号信息.
     *
     * @param tmpReq - GetSavingPlanShareAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSavingPlanShareAccountsResponse
     *
     * @param GetSavingPlanShareAccountsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSavingPlanShareAccountsResponse
     */
    public function getSavingPlanShareAccountsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSavingPlanShareAccountsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->spnInstanceCode) {
            @$query['SpnInstanceCode'] = $request->spnInstanceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSavingPlanShareAccounts',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSavingPlanShareAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节省计划实例共享账号信息.
     *
     * @param request - GetSavingPlanShareAccountsRequest
     *
     * @returns GetSavingPlanShareAccountsResponse
     *
     * @param GetSavingPlanShareAccountsRequest $request
     *
     * @return GetSavingPlanShareAccountsResponse
     */
    public function getSavingPlanShareAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanShareAccountsWithOptions($request, $runtime);
    }

    /**
     * 获取节省计划实例客户自定义规则.
     *
     * @param tmpReq - GetSavingPlanUserDeductRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSavingPlanUserDeductRuleResponse
     *
     * @param GetSavingPlanUserDeductRuleRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSavingPlanUserDeductRuleResponse
     */
    public function getSavingPlanUserDeductRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSavingPlanUserDeductRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->spnInstanceCode) {
            @$query['SpnInstanceCode'] = $request->spnInstanceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSavingPlanUserDeductRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSavingPlanUserDeductRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节省计划实例客户自定义规则.
     *
     * @param request - GetSavingPlanUserDeductRuleRequest
     *
     * @returns GetSavingPlanUserDeductRuleResponse
     *
     * @param GetSavingPlanUserDeductRuleRequest $request
     *
     * @return GetSavingPlanUserDeductRuleResponse
     */
    public function getSavingPlanUserDeductRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanUserDeductRuleWithOptions($request, $runtime);
    }

    /**
     * 查询优惠券设置的抵扣标签.
     *
     * @param tmpReq - ListCouponDeductTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCouponDeductTagResponse
     *
     * @param ListCouponDeductTagRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListCouponDeductTagResponse
     */
    public function listCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCouponDeductTagShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->couponId) {
            @$query['CouponId'] = $request->couponId;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCouponDeductTag',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCouponDeductTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询优惠券设置的抵扣标签.
     *
     * @param request - ListCouponDeductTagRequest
     *
     * @returns ListCouponDeductTagResponse
     *
     * @param ListCouponDeductTagRequest $request
     *
     * @return ListCouponDeductTagResponse
     */
    public function listCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * Query fund account list.
     *
     * @param request - ListFundAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFundAccountResponse
     *
     * @param ListFundAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFundAccountResponse
     */
    public function listFundAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->queryOnlyInUse) {
            @$body['QueryOnlyInUse'] = $request->queryOnlyInUse;
        }

        if (null !== $request->queryOnlyManage) {
            @$body['QueryOnlyManage'] = $request->queryOnlyManage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFundAccount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFundAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query fund account list.
     *
     * @param request - ListFundAccountRequest
     *
     * @returns ListFundAccountResponse
     *
     * @param ListFundAccountRequest $request
     *
     * @return ListFundAccountResponse
     */
    public function listFundAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFundAccountWithOptions($request, $runtime);
    }

    /**
     * Query payment relationships of an account.
     *
     * @param request - ListFundAccountPayRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFundAccountPayRelationResponse
     *
     * @param ListFundAccountPayRelationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListFundAccountPayRelationResponse
     */
    public function listFundAccountPayRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFundAccountPayRelation',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFundAccountPayRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query payment relationships of an account.
     *
     * @param request - ListFundAccountPayRelationRequest
     *
     * @returns ListFundAccountPayRelationResponse
     *
     * @param ListFundAccountPayRelationRequest $request
     *
     * @return ListFundAccountPayRelationResponse
     */
    public function listFundAccountPayRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFundAccountPayRelationWithOptions($request, $runtime);
    }

    /**
     * Query invoice candidate data, which can be used for invoicing.
     *
     * @param tmpReq - ListInvoiceCandidateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInvoiceCandidateResponse
     *
     * @param ListInvoiceCandidateRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListInvoiceCandidateResponse
     */
    public function listInvoiceCandidateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInvoiceCandidateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->billingCycles) {
            $request->billingCyclesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->billingCycles, 'BillingCycles', 'json');
        }

        if (null !== $tmpReq->businessIds) {
            $request->businessIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->businessIds, 'BusinessIds', 'json');
        }

        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->invoiceIssuers) {
            $request->invoiceIssuersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->invoiceIssuers, 'InvoiceIssuers', 'json');
        }

        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }

        if (null !== $tmpReq->types) {
            $request->typesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }

        $query = [];
        if (null !== $request->billingCyclesShrink) {
            @$query['BillingCycles'] = $request->billingCyclesShrink;
        }

        if (null !== $request->businessIdsShrink) {
            @$query['BusinessIds'] = $request->businessIdsShrink;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->invoiceIssuersShrink) {
            @$query['InvoiceIssuers'] = $request->invoiceIssuersShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statusShrink) {
            @$query['Status'] = $request->statusShrink;
        }

        if (null !== $request->typesShrink) {
            @$query['Types'] = $request->typesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInvoiceCandidate',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInvoiceCandidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query invoice candidate data, which can be used for invoicing.
     *
     * @param request - ListInvoiceCandidateRequest
     *
     * @returns ListInvoiceCandidateResponse
     *
     * @param ListInvoiceCandidateRequest $request
     *
     * @return ListInvoiceCandidateResponse
     */
    public function listInvoiceCandidate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvoiceCandidateWithOptions($request, $runtime);
    }

    /**
     * Query the list of available invoice titles.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInvoiceTitleResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListInvoiceTitleResponse
     */
    public function listInvoiceTitleWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListInvoiceTitle',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInvoiceTitleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of available invoice titles.
     *
     * @returns ListInvoiceTitleResponse
     *
     * @return ListInvoiceTitleResponse
     */
    public function listInvoiceTitle()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvoiceTitleWithOptions($runtime);
    }

    /**
     * Queries the list of subscribed reports.
     *
     * @param request - ListReportDefinitionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReportDefinitionsResponse
     *
     * @param ListReportDefinitionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListReportDefinitionsResponse
     */
    public function listReportDefinitionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListReportDefinitions',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListReportDefinitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of subscribed reports.
     *
     * @param request - ListReportDefinitionsRequest
     *
     * @returns ListReportDefinitionsResponse
     *
     * @param ListReportDefinitionsRequest $request
     *
     * @return ListReportDefinitionsResponse
     */
    public function listReportDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportDefinitionsWithOptions($request, $runtime);
    }

    /**
     * Modify cost centers.
     *
     * @remarks
     * Modifies one or more cost centers.
     *
     * @param tmpReq - ModifyCostCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCostCenterResponse
     *
     * @param ModifyCostCenterRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCostCenterResponse
     */
    public function modifyCostCenterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCostCenterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->costCenterEntityList) {
            $request->costCenterEntityListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->costCenterEntityList, 'CostCenterEntityList', 'json');
        }

        $query = [];
        if (null !== $request->costCenterEntityListShrink) {
            @$query['CostCenterEntityList'] = $request->costCenterEntityListShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCostCenter',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCostCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify cost centers.
     *
     * @remarks
     * Modifies one or more cost centers.
     *
     * @param request - ModifyCostCenterRequest
     *
     * @returns ModifyCostCenterResponse
     *
     * @param ModifyCostCenterRequest $request
     *
     * @return ModifyCostCenterResponse
     */
    public function modifyCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostCenterWithOptions($request, $runtime);
    }

    /**
     * Modify financial unit rules.
     *
     * @remarks
     * Modify one or more financial units
     *
     * @param tmpReq - ModifyCostCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCostCenterRuleResponse
     *
     * @param ModifyCostCenterRuleRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyCostCenterRuleResponse
     */
    public function modifyCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyCostCenterRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterExpression) {
            $request->filterExpressionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }

        $query = [];
        if (null !== $request->filterExpressionShrink) {
            @$query['FilterExpression'] = $request->filterExpressionShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->costCenterId) {
            @$body['CostCenterId'] = $request->costCenterId;
        }

        if (null !== $request->ownerAccountId) {
            @$body['OwnerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyCostCenterRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCostCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify financial unit rules.
     *
     * @remarks
     * Modify one or more financial units
     *
     * @param request - ModifyCostCenterRuleRequest
     *
     * @returns ModifyCostCenterRuleResponse
     *
     * @param ModifyCostCenterRuleRequest $request
     *
     * @return ModifyCostCenterRuleResponse
     */
    public function modifyCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * 对客订单支付接口.
     *
     * @param request - PayOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PayOrderResponse
     *
     * @param PayOrderRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PayOrderResponse
     */
    public function payOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buyerId) {
            @$query['BuyerId'] = $request->buyerId;
        }

        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->paySubmitUid) {
            @$query['PaySubmitUid'] = $request->paySubmitUid;
        }

        if (null !== $request->payerId) {
            @$query['PayerId'] = $request->payerId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PayOrder',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PayOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 对客订单支付接口.
     *
     * @param request - PayOrderRequest
     *
     * @returns PayOrderResponse
     *
     * @param PayOrderRequest $request
     *
     * @return PayOrderResponse
     */
    public function payOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->payOrderWithOptions($request, $runtime);
    }

    /**
     * Query cost center expense overview.
     *
     * @remarks
     * Query cost center expense overview results for a specified billing period
     *
     * @param request - QueryCostByCostCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostByCostCenterResponse
     *
     * @param QueryCostByCostCenterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCostByCostCenterResponse
     */
    public function queryCostByCostCenterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingMonth) {
            @$query['BillingMonth'] = $request->billingMonth;
        }

        if (null !== $request->displayZeroAmountBills) {
            @$query['DisplayZeroAmountBills'] = $request->displayZeroAmountBills;
        }

        if (null !== $request->groupByCostCenterLevel) {
            @$query['GroupByCostCenterLevel'] = $request->groupByCostCenterLevel;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->ownerAccountId) {
            @$query['OwnerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCostByCostCenter',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostByCostCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query cost center expense overview.
     *
     * @remarks
     * Query cost center expense overview results for a specified billing period
     *
     * @param request - QueryCostByCostCenterRequest
     *
     * @returns QueryCostByCostCenterResponse
     *
     * @param QueryCostByCostCenterRequest $request
     *
     * @return QueryCostByCostCenterResponse
     */
    public function queryCostByCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostByCostCenterWithOptions($request, $runtime);
    }

    /**
     * Queries financial units.
     *
     * @remarks
     * Queries a parent financial unit and its child financial units.
     *
     * @param tmpReq - QueryCostCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostCenterResponse
     *
     * @param QueryCostCenterRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return QueryCostCenterResponse
     */
    public function queryCostCenterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCostCenterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->ownerAccountId) {
            @$query['OwnerAccountId'] = $request->ownerAccountId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentCostCenterId) {
            @$query['ParentCostCenterId'] = $request->parentCostCenterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCostCenter',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries financial units.
     *
     * @remarks
     * Queries a parent financial unit and its child financial units.
     *
     * @param request - QueryCostCenterRequest
     *
     * @returns QueryCostCenterResponse
     *
     * @param QueryCostCenterRequest $request
     *
     * @return QueryCostCenterResponse
     */
    public function queryCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterWithOptions($request, $runtime);
    }

    /**
     * Queries the list of resource instances that belong to a cost center of the user. When CostCenterId is 0, it queries unallocated primary and sub-resource instances.
     *
     * @param request - QueryCostCenterResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostCenterResourceResponse
     *
     * @param QueryCostCenterResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCostCenterResourceResponse
     */
    public function queryCostCenterResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $body = [];
        if (null !== $request->costCenterId) {
            @$body['CostCenterId'] = $request->costCenterId;
        }

        if (null !== $request->ownerAccountId) {
            @$body['OwnerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCostCenterResource',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostCenterResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource instances that belong to a cost center of the user. When CostCenterId is 0, it queries unallocated primary and sub-resource instances.
     *
     * @param request - QueryCostCenterResourceRequest
     *
     * @returns QueryCostCenterResourceResponse
     *
     * @param QueryCostCenterResourceRequest $request
     *
     * @return QueryCostCenterResourceResponse
     */
    public function queryCostCenterResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterResourceWithOptions($request, $runtime);
    }

    /**
     * Query cost center rules.
     *
     * @remarks
     * Query parent cost center and its child cost centers.
     *
     * @param request - QueryCostCenterRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostCenterRuleResponse
     *
     * @param QueryCostCenterRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCostCenterRuleResponse
     */
    public function queryCostCenterRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->costCenterId) {
            @$body['CostCenterId'] = $request->costCenterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCostCenterRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostCenterRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query cost center rules.
     *
     * @remarks
     * Query parent cost center and its child cost centers.
     *
     * @param request - QueryCostCenterRuleRequest
     *
     * @returns QueryCostCenterRuleResponse
     *
     * @param QueryCostCenterRuleRequest $request
     *
     * @return QueryCostCenterRuleResponse
     */
    public function queryCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * Query cost center sharing rules.
     *
     * @remarks
     * Queries the sharing rules of user cost centers.
     *
     * @param request - QueryCostCenterShareRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostCenterShareRuleResponse
     *
     * @param QueryCostCenterShareRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCostCenterShareRuleResponse
     */
    public function queryCostCenterShareRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccountId) {
            @$query['OwnerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCostCenterShareRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostCenterShareRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query cost center sharing rules.
     *
     * @remarks
     * Queries the sharing rules of user cost centers.
     *
     * @param request - QueryCostCenterShareRuleRequest
     *
     * @returns QueryCostCenterShareRuleResponse
     *
     * @param QueryCostCenterShareRuleRequest $request
     *
     * @return QueryCostCenterShareRuleResponse
     */
    public function queryCostCenterShareRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterShareRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the SLA compensation list of a user.
     *
     * @remarks
     * Queries the SLA compensation details list of a user. Only data from the last two months is available.
     *
     * @param request - QueryMonthlySlaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMonthlySlaListResponse
     *
     * @param QueryMonthlySlaListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMonthlySlaListResponse
     */
    public function queryMonthlySlaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->months) {
            @$body['Months'] = $request->months;
        }

        if (null !== $request->payStatuses) {
            @$body['PayStatuses'] = $request->payStatuses;
        }

        if (null !== $request->productCodes) {
            @$body['ProductCodes'] = $request->productCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMonthlySlaList',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMonthlySlaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SLA compensation list of a user.
     *
     * @remarks
     * Queries the SLA compensation details list of a user. Only data from the last two months is available.
     *
     * @param request - QueryMonthlySlaListRequest
     *
     * @returns QueryMonthlySlaListResponse
     *
     * @param QueryMonthlySlaListRequest $request
     *
     * @return QueryMonthlySlaListResponse
     */
    public function queryMonthlySlaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlySlaListWithOptions($request, $runtime);
    }

    /**
     * Modifies cost center sharing rules, including creating, modifying, and deleting sharing rules.
     *
     * @param tmpReq - SaveCostCenterShareRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveCostCenterShareRuleResponse
     *
     * @param SaveCostCenterShareRuleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SaveCostCenterShareRuleResponse
     */
    public function saveCostCenterShareRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveCostCenterShareRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createShareRuleList) {
            $request->createShareRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createShareRuleList, 'CreateShareRuleList', 'json');
        }

        if (null !== $tmpReq->modifyShareRuleList) {
            $request->modifyShareRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modifyShareRuleList, 'ModifyShareRuleList', 'json');
        }

        if (null !== $tmpReq->removeShareRuleList) {
            $request->removeShareRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->removeShareRuleList, 'RemoveShareRuleList', 'json');
        }

        $query = [];
        if (null !== $request->createShareRuleListShrink) {
            @$query['CreateShareRuleList'] = $request->createShareRuleListShrink;
        }

        if (null !== $request->modifyShareRuleListShrink) {
            @$query['ModifyShareRuleList'] = $request->modifyShareRuleListShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        if (null !== $request->ownerAccountId) {
            @$query['OwnerAccountId'] = $request->ownerAccountId;
        }

        if (null !== $request->removeShareRuleListShrink) {
            @$query['RemoveShareRuleList'] = $request->removeShareRuleListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveCostCenterShareRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveCostCenterShareRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies cost center sharing rules, including creating, modifying, and deleting sharing rules.
     *
     * @param request - SaveCostCenterShareRuleRequest
     *
     * @returns SaveCostCenterShareRuleResponse
     *
     * @param SaveCostCenterShareRuleRequest $request
     *
     * @return SaveCostCenterShareRuleResponse
     */
    public function saveCostCenterShareRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveCostCenterShareRuleWithOptions($request, $runtime);
    }

    /**
     * Set the credit control limit for a fund account.
     *
     * @param request - SetFundAccountCreditAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetFundAccountCreditAmountResponse
     *
     * @param SetFundAccountCreditAmountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetFundAccountCreditAmountResponse
     */
    public function setFundAccountCreditAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creditAmount) {
            @$body['CreditAmount'] = $request->creditAmount;
        }

        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetFundAccountCreditAmount',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetFundAccountCreditAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Set the credit control limit for a fund account.
     *
     * @param request - SetFundAccountCreditAmountRequest
     *
     * @returns SetFundAccountCreditAmountResponse
     *
     * @param SetFundAccountCreditAmountRequest $request
     *
     * @return SetFundAccountCreditAmountResponse
     */
    public function setFundAccountCreditAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFundAccountCreditAmountWithOptions($request, $runtime);
    }

    /**
     * Set Fund Account Low Balance Alert.
     *
     * @param request - SetFundAccountLowAvailableAmountAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetFundAccountLowAvailableAmountAlarmResponse
     *
     * @param SetFundAccountLowAvailableAmountAlarmRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetFundAccountLowAvailableAmountAlarmResponse
     */
    public function setFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fundAccountId) {
            @$body['FundAccountId'] = $request->fundAccountId;
        }

        if (null !== $request->thresholdAmount) {
            @$body['ThresholdAmount'] = $request->thresholdAmount;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetFundAccountLowAvailableAmountAlarm',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetFundAccountLowAvailableAmountAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Set Fund Account Low Balance Alert.
     *
     * @param request - SetFundAccountLowAvailableAmountAlarmRequest
     *
     * @returns SetFundAccountLowAvailableAmountAlarmResponse
     *
     * @param SetFundAccountLowAvailableAmountAlarmRequest $request
     *
     * @return SetFundAccountLowAvailableAmountAlarmResponse
     */
    public function setFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * 设置节省计划用户级抵扣规则.
     *
     * @param tmpReq - SetSavingPlanUserDeductRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSavingPlanUserDeductRuleResponse
     *
     * @param SetSavingPlanUserDeductRuleRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return SetSavingPlanUserDeductRuleResponse
     */
    public function setSavingPlanUserDeductRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetSavingPlanUserDeductRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->userDeductRules) {
            $request->userDeductRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userDeductRules, 'UserDeductRules', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->spnInstanceCode) {
            @$body['SpnInstanceCode'] = $request->spnInstanceCode;
        }

        if (null !== $request->userDeductRulesShrink) {
            @$body['UserDeductRules'] = $request->userDeductRulesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetSavingPlanUserDeductRule',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSavingPlanUserDeductRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置节省计划用户级抵扣规则.
     *
     * @param request - SetSavingPlanUserDeductRuleRequest
     *
     * @returns SetSavingPlanUserDeductRuleResponse
     *
     * @param SetSavingPlanUserDeductRuleRequest $request
     *
     * @return SetSavingPlanUserDeductRuleResponse
     */
    public function setSavingPlanUserDeductRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSavingPlanUserDeductRuleWithOptions($request, $runtime);
    }

    /**
     * User claims coupons for the last two months.
     *
     * @remarks
     * 1. Call QueryMonthlySlaList to obtain the claimable months and records.
     * 2. Claim by month or by record.
     * Note: Only compensation for the last two months can be claimed. Historical compensation has been automatically issued.
     *
     * @param request - SubmitSlaCouponApplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSlaCouponApplyResponse
     *
     * @param SubmitSlaCouponApplyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitSlaCouponApplyResponse
     */
    public function submitSlaCouponApplyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecIdAccountIds) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->damagedIds) {
            @$body['DamagedIds'] = $request->damagedIds;
        }

        if (null !== $request->month) {
            @$body['Month'] = $request->month;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSlaCouponApply',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSlaCouponApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User claims coupons for the last two months.
     *
     * @remarks
     * 1. Call QueryMonthlySlaList to obtain the claimable months and records.
     * 2. Claim by month or by record.
     * Note: Only compensation for the last two months can be claimed. Historical compensation has been automatically issued.
     *
     * @param request - SubmitSlaCouponApplyRequest
     *
     * @returns SubmitSlaCouponApplyResponse
     *
     * @param SubmitSlaCouponApplyRequest $request
     *
     * @return SubmitSlaCouponApplyResponse
     */
    public function submitSlaCouponApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSlaCouponApplyWithOptions($request, $runtime);
    }

    /**
     * Updates a budget.
     *
     * @param tmpReq - UpdateBudgetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBudgetResponse
     *
     * @param UpdateBudgetRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateBudgetResponse
     */
    public function updateBudgetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateBudgetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cycleQuota) {
            $request->cycleQuotaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cycleQuota, 'CycleQuota', 'json');
        }

        if (null !== $tmpReq->ecIdAccountIds) {
            $request->ecIdAccountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }

        if (null !== $tmpReq->queryFilter) {
            $request->queryFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryFilter, 'QueryFilter', 'json');
        }

        if (null !== $tmpReq->warnConfs) {
            $request->warnConfsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->warnConfs, 'WarnConfs', 'json');
        }

        $query = [];
        if (null !== $request->ecIdAccountIdsShrink) {
            @$query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }

        if (null !== $request->nbid) {
            @$query['Nbid'] = $request->nbid;
        }

        $body = [];
        if (null !== $request->budgetName) {
            @$body['BudgetName'] = $request->budgetName;
        }

        if (null !== $request->budgetType) {
            @$body['BudgetType'] = $request->budgetType;
        }

        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->cycleEndPeriod) {
            @$body['CycleEndPeriod'] = $request->cycleEndPeriod;
        }

        if (null !== $request->cycleQuotaShrink) {
            @$body['CycleQuota'] = $request->cycleQuotaShrink;
        }

        if (null !== $request->cycleStartPeriod) {
            @$body['CycleStartPeriod'] = $request->cycleStartPeriod;
        }

        if (null !== $request->cycleType) {
            @$body['CycleType'] = $request->cycleType;
        }

        if (null !== $request->metric) {
            @$body['Metric'] = $request->metric;
        }

        if (null !== $request->originalBudgetName) {
            @$body['OriginalBudgetName'] = $request->originalBudgetName;
        }

        if (null !== $request->queryFilterShrink) {
            @$body['QueryFilter'] = $request->queryFilterShrink;
        }

        if (null !== $request->quota) {
            @$body['Quota'] = $request->quota;
        }

        if (null !== $request->quotaType) {
            @$body['QuotaType'] = $request->quotaType;
        }

        if (null !== $request->warnConfsShrink) {
            @$body['WarnConfs'] = $request->warnConfsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBudget',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateBudgetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a budget.
     *
     * @param request - UpdateBudgetRequest
     *
     * @returns UpdateBudgetResponse
     *
     * @param UpdateBudgetRequest $request
     *
     * @return UpdateBudgetResponse
     */
    public function updateBudget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBudgetWithOptions($request, $runtime);
    }
}
