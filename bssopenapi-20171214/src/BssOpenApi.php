<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AddAccountRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AddAccountRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConfirmRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConfirmRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateSavingsPlansInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateSavingsPlansInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateSavingsPlansInstanceShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByAmortizationPeriodRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByAmortizationPeriodResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByConsumePeriodRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceAmortizedCostByConsumePeriodResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeProductAmortizedCostByAmortizationPeriodRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeProductAmortizedCostByAmortizationPeriodResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeProductAmortizedCostByConsumePeriodRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeProductAmortizedCostByConsumePeriodResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceUsageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetAccountRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetAccountRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\InquiryPriceRefundInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\InquiryPriceRefundInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyAccountRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyAccountRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\PayOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\PayOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryFinancialAccountInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryFinancialAccountInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceByTagRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceByTagResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPriceEntityListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerUserAlarmThresholdRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerUserAlarmThresholdResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDiscountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDiscountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RefundInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RefundInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RelieveAccountRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RelieveAccountRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewChangeInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewChangeInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetAllExpirationDayRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetAllExpirationDayResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetSavingPlanUserDeductRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetSavingPlanUserDeductRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetSavingPlanUserDeductRuleShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\TagResourcesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\TagResourcesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageResponse;
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
     * Creates a financial relationship.
     *
     * @remarks
     * For more information about a financial relationship, see <props="intl">[Usage notes on the trusteeship]( https://www.alibabacloud.com/help/doc-detail/116383.html).
     * If enterprise names used by the management account and a member for real-name verification are the same, you do not need to call an API operation for confirmation. Otherwise, you must call the ConfirmRelation operation for confirmation.
     *
     * @param request - AddAccountRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAccountRelationResponse
     *
     * @param AddAccountRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAccountRelationResponse
     */
    public function addAccountRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childNick) {
            @$query['ChildNick'] = $request->childNick;
        }

        if (null !== $request->childUserId) {
            @$query['ChildUserId'] = $request->childUserId;
        }

        if (null !== $request->parentUserId) {
            @$query['ParentUserId'] = $request->parentUserId;
        }

        if (null !== $request->permissionCodes) {
            @$query['PermissionCodes'] = $request->permissionCodes;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->roleCodes) {
            @$query['RoleCodes'] = $request->roleCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAccountRelation',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a financial relationship.
     *
     * @remarks
     * For more information about a financial relationship, see <props="intl">[Usage notes on the trusteeship]( https://www.alibabacloud.com/help/doc-detail/116383.html).
     * If enterprise names used by the management account and a member for real-name verification are the same, you do not need to call an API operation for confirmation. Otherwise, you must call the ConfirmRelation operation for confirmation.
     *
     * @param request - AddAccountRelationRequest
     *
     * @returns AddAccountRelationResponse
     *
     * @param AddAccountRelationRequest $request
     *
     * @return AddAccountRelationResponse
     */
    public function addAccountRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccountRelationWithOptions($request, $runtime);
    }

    /**
     * Allocates resource instances (instance-based and attached-resource-based) from a source financial unit to a destination financial unit.
     *
     * @param request - AllocateCostUnitResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AllocateCostUnitResourceResponse
     *
     * @param AllocateCostUnitResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromUnitId) {
            @$query['FromUnitId'] = $request->fromUnitId;
        }

        if (null !== $request->fromUnitUserId) {
            @$query['FromUnitUserId'] = $request->fromUnitUserId;
        }

        if (null !== $request->resourceInstanceList) {
            @$query['ResourceInstanceList'] = $request->resourceInstanceList;
        }

        if (null !== $request->toUnitId) {
            @$query['ToUnitId'] = $request->toUnitId;
        }

        if (null !== $request->toUnitUserId) {
            @$query['ToUnitUserId'] = $request->toUnitUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AllocateCostUnitResource',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AllocateCostUnitResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allocates resource instances (instance-based and attached-resource-based) from a source financial unit to a destination financial unit.
     *
     * @param request - AllocateCostUnitResourceRequest
     *
     * @returns AllocateCostUnitResourceResponse
     *
     * @param AllocateCostUnitResourceRequest $request
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateCostUnitResourceWithOptions($request, $runtime);
    }

    /**
     * Submits an invoice application.
     *
     * @param request - ApplyInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyInvoiceResponse
     *
     * @param ApplyInvoiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->applyUserNick) {
            @$query['ApplyUserNick'] = $request->applyUserNick;
        }

        if (null !== $request->customerId) {
            @$query['CustomerId'] = $request->customerId;
        }

        if (null !== $request->invoiceAmount) {
            @$query['InvoiceAmount'] = $request->invoiceAmount;
        }

        if (null !== $request->invoiceByAmount) {
            @$query['InvoiceByAmount'] = $request->invoiceByAmount;
        }

        if (null !== $request->invoicingType) {
            @$query['InvoicingType'] = $request->invoicingType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processWay) {
            @$query['ProcessWay'] = $request->processWay;
        }

        if (null !== $request->selectedIds) {
            @$query['SelectedIds'] = $request->selectedIds;
        }

        if (null !== $request->userRemark) {
            @$query['UserRemark'] = $request->userRemark;
        }

        if (null !== $request->emails) {
            @$query['emails'] = $request->emails;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyInvoice',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an invoice application.
     *
     * @param request - ApplyInvoiceRequest
     *
     * @returns ApplyInvoiceResponse
     *
     * @param ApplyInvoiceRequest $request
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyInvoiceWithOptions($request, $runtime);
    }

    /**
     * Cancels an unpaid order.
     *
     * @param request - CancelOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOrderResponse
     *
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'CancelOrder',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an unpaid order.
     *
     * @param request - CancelOrderRequest
     *
     * @returns CancelOrderResponse
     *
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * Deducts user quota consumption.
     *
     * @remarks
     * Deducts user quota consumption.
     *
     * @param request - ChangeResellerConsumeAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResellerConsumeAmountResponse
     *
     * @param ChangeResellerConsumeAmountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeResellerConsumeAmountResponse
     */
    public function changeResellerConsumeAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adjustType) {
            @$query['AdjustType'] = $request->adjustType;
        }

        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->currency) {
            @$query['Currency'] = $request->currency;
        }

        if (null !== $request->extendMap) {
            @$query['ExtendMap'] = $request->extendMap;
        }

        if (null !== $request->outBizId) {
            @$query['OutBizId'] = $request->outBizId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResellerConsumeAmount',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResellerConsumeAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deducts user quota consumption.
     *
     * @remarks
     * Deducts user quota consumption.
     *
     * @param request - ChangeResellerConsumeAmountRequest
     *
     * @returns ChangeResellerConsumeAmountResponse
     *
     * @param ChangeResellerConsumeAmountRequest $request
     *
     * @return ChangeResellerConsumeAmountResponse
     */
    public function changeResellerConsumeAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResellerConsumeAmountWithOptions($request, $runtime);
    }

    /**
     * Confirms an invitation initiated by the main account for a linked account.
     *
     * @remarks
     * 1. Currently, only financial management linking is supported. The linked account needs to confirm the invitation only when the real-name verification information of the main account and the linked account is inconsistent.
     * 2. The permissions to be confirmed must be exactly the same as the permissions specified in the invitation initiated by the main account for the confirmation to succeed.
     *
     * @param request - ConfirmRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmRelationResponse
     *
     * @param ConfirmRelationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmRelationResponse
     */
    public function confirmRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childUserId) {
            @$query['ChildUserId'] = $request->childUserId;
        }

        if (null !== $request->confirmCode) {
            @$query['ConfirmCode'] = $request->confirmCode;
        }

        if (null !== $request->parentUserId) {
            @$query['ParentUserId'] = $request->parentUserId;
        }

        if (null !== $request->permissionCodes) {
            @$query['PermissionCodes'] = $request->permissionCodes;
        }

        if (null !== $request->relationId) {
            @$query['RelationId'] = $request->relationId;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmRelation',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirms an invitation initiated by the main account for a linked account.
     *
     * @remarks
     * 1. Currently, only financial management linking is supported. The linked account needs to confirm the invitation only when the real-name verification information of the main account and the linked account is inconsistent.
     * 2. The permissions to be confirmed must be exactly the same as the permissions specified in the invitation initiated by the main account for the confirmation to succeed.
     *
     * @param request - ConfirmRelationRequest
     *
     * @returns ConfirmRelationResponse
     *
     * @param ConfirmRelationRequest $request
     *
     * @return ConfirmRelationResponse
     */
    public function confirmRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmRelationWithOptions($request, $runtime);
    }

    /**
     * Changes the subscription type for an instance. Currently, this operation supports converting pay-as-you-go instances of SLB, EIP, and NAT Gateway to subscription instances, and converting subscription instances of SLB and EIP to pay-as-you-go instances.
     *
     * @param request - ConvertChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertChargeTypeResponse
     *
     * @param ConvertChargeTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
            'action' => 'ConvertChargeType',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the subscription type for an instance. Currently, this operation supports converting pay-as-you-go instances of SLB, EIP, and NAT Gateway to subscription instances, and converting subscription instances of SLB and EIP to pay-as-you-go instances.
     *
     * @param request - ConvertChargeTypeRequest
     *
     * @returns ConvertChargeTypeResponse
     *
     * @param ConvertChargeTypeRequest $request
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Creates an account linking relationship.
     *
     * @remarks
     * Creates a master-member relationship for financial management.
     *
     * @param request - CreateAgAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgAccountResponse
     *
     * @param CreateAgAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountAttr) {
            @$query['AccountAttr'] = $request->accountAttr;
        }

        if (null !== $request->cityName) {
            @$query['CityName'] = $request->cityName;
        }

        if (null !== $request->enterpriseName) {
            @$query['EnterpriseName'] = $request->enterpriseName;
        }

        if (null !== $request->firstName) {
            @$query['FirstName'] = $request->firstName;
        }

        if (null !== $request->lastName) {
            @$query['LastName'] = $request->lastName;
        }

        if (null !== $request->loginEmail) {
            @$query['LoginEmail'] = $request->loginEmail;
        }

        if (null !== $request->nationCode) {
            @$query['NationCode'] = $request->nationCode;
        }

        if (null !== $request->postcode) {
            @$query['Postcode'] = $request->postcode;
        }

        if (null !== $request->provinceName) {
            @$query['ProvinceName'] = $request->provinceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAgAccount',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account linking relationship.
     *
     * @remarks
     * Creates a master-member relationship for financial management.
     *
     * @param request - CreateAgAccountRequest
     *
     * @returns CreateAgAccountResponse
     *
     * @param CreateAgAccountRequest $request
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgAccountWithOptions($request, $runtime);
    }

    /**
     * Creates financial units. Batch creation is supported.
     *
     * @param request - CreateCostUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCostUnitResponse
     *
     * @param CreateCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->unitEntityList) {
            @$query['UnitEntityList'] = $request->unitEntityList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCostUnit',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates financial units. Batch creation is supported.
     *
     * @param request - CreateCostUnitRequest
     *
     * @returns CreateCostUnitResponse
     *
     * @param CreateCostUnitRequest $request
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostUnitWithOptions($request, $runtime);
    }

    /**
     * Creates an instance resource. This operation creates an order for a new instance resource and completes automatic payment. ECS and RDS product series are not supported.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->logistics) {
            @$query['Logistics'] = $request->logistics;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameter) {
            @$query['Parameter'] = $request->parameter;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->renewPeriod) {
            @$query['RenewPeriod'] = $request->renewPeriod;
        }

        if (null !== $request->renewalStatus) {
            @$query['RenewalStatus'] = $request->renewalStatus;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance resource. This operation creates an order for a new instance resource and completes automatic payment. ECS and RDS product series are not supported.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a user quota ledger and a quota consumption ledger.
     *
     * @param request - CreateResellerUserQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResellerUserQuotaResponse
     *
     * @param CreateResellerUserQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->currency) {
            @$query['Currency'] = $request->currency;
        }

        if (null !== $request->outBizId) {
            @$query['OutBizId'] = $request->outBizId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResellerUserQuota',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResellerUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user quota ledger and a quota consumption ledger.
     *
     * @param request - CreateResellerUserQuotaRequest
     *
     * @returns CreateResellerUserQuotaResponse
     *
     * @param CreateResellerUserQuotaRequest $request
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResellerUserQuotaWithOptions($request, $runtime);
    }

    /**
     * 创建资源包.
     *
     * @param request - CreateResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourcePackageResponse
     *
     * @param CreateResourcePackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->effectiveDate) {
            @$query['EffectiveDate'] = $request->effectiveDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateResourcePackage',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源包.
     *
     * @param request - CreateResourcePackageRequest
     *
     * @returns CreateResourcePackageResponse
     *
     * @param CreateResourcePackageRequest $request
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourcePackageWithOptions($request, $runtime);
    }

    /**
     * 创建节省计划实例.
     *
     * @param tmpReq - CreateSavingsPlansInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSavingsPlansInstanceResponse
     *
     * @param CreateSavingsPlansInstanceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSavingsPlansInstanceResponse
     */
    public function createSavingsPlansInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSavingsPlansInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extendMap) {
            $request->extendMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extendMap, 'ExtendMap', 'json');
        }

        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->effectiveDate) {
            @$query['EffectiveDate'] = $request->effectiveDate;
        }

        if (null !== $request->extendMapShrink) {
            @$query['ExtendMap'] = $request->extendMapShrink;
        }

        if (null !== $request->payMode) {
            @$query['PayMode'] = $request->payMode;
        }

        if (null !== $request->poolValue) {
            @$query['PoolValue'] = $request->poolValue;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSavingsPlansInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSavingsPlansInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建节省计划实例.
     *
     * @param request - CreateSavingsPlansInstanceRequest
     *
     * @returns CreateSavingsPlansInstanceResponse
     *
     * @param CreateSavingsPlansInstanceRequest $request
     *
     * @return CreateSavingsPlansInstanceResponse
     */
    public function createSavingsPlansInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSavingsPlansInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a financial unit.
     *
     * @param request - DeleteCostUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCostUnitResponse
     *
     * @param DeleteCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerUid) {
            @$query['OwnerUid'] = $request->ownerUid;
        }

        if (null !== $request->unitId) {
            @$query['UnitId'] = $request->unitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCostUnit',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a financial unit.
     *
     * @param request - DeleteCostUnitRequest
     *
     * @returns DeleteCostUnitResponse
     *
     * @param DeleteCostUnitRequest $request
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostUnitWithOptions($request, $runtime);
    }

    /**
     * Queries a summary of cost budgets.
     *
     * @remarks
     * This OpenAPI is in beta and available only to whitelisted users. Excessive calls may cause performance issues, such as response timeouts.
     *
     * @param request - DescribeCostBudgetsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCostBudgetsSummaryResponse
     *
     * @param DescribeCostBudgetsSummaryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCostBudgetsSummaryResponse
     */
    public function describeCostBudgetsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->budgetName) {
            @$query['BudgetName'] = $request->budgetName;
        }

        if (null !== $request->budgetStatus) {
            @$query['BudgetStatus'] = $request->budgetStatus;
        }

        if (null !== $request->budgetType) {
            @$query['BudgetType'] = $request->budgetType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCostBudgetsSummary',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCostBudgetsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a summary of cost budgets.
     *
     * @remarks
     * This OpenAPI is in beta and available only to whitelisted users. Excessive calls may cause performance issues, such as response timeouts.
     *
     * @param request - DescribeCostBudgetsSummaryRequest
     *
     * @returns DescribeCostBudgetsSummaryResponse
     *
     * @param DescribeCostBudgetsSummaryRequest $request
     *
     * @return DescribeCostBudgetsSummaryResponse
     */
    public function describeCostBudgetsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostBudgetsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the monthly amortized costs of instances for a specified amortization month.
     *
     * @remarks
     * - Amortized costs cannot be used for settlement or reconciliation. They are used to allocate your subscription and pay-as-you-go fees based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. The reason for this delay is that scenarios such as delayed billing, refunds, bill adjustments, and overdue payment write-offs can occur during the month. The data for the current month does not include unsettled pay-as-you-go fees for which bills have not yet been generated.
     * - Amortized cost data from the last 12 months is available.
     * - Data for attached resources is reflected in the amortized costs 48 hours after the split bill is generated. To use this feature, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data for items that are not attached resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs are not updated intra-month. They are updated only after 12:00 on the sixth day of the following month. Consequently, specific costs for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available for these months.
     * - Amortized cost data is available for querying 48 hours after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature.
     *
     * @param request - DescribeInstanceAmortizedCostByAmortizationPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodRequest $request
     * @param RuntimeOptions                                           $runtime
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->consumePeriodFilter) {
            @$body['ConsumePeriodFilter'] = $request->consumePeriodFilter;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->instanceIdList) {
            @$body['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAmortizedCostByAmortizationPeriod',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monthly amortized costs of instances for a specified amortization month.
     *
     * @remarks
     * - Amortized costs cannot be used for settlement or reconciliation. They are used to allocate your subscription and pay-as-you-go fees based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. The reason for this delay is that scenarios such as delayed billing, refunds, bill adjustments, and overdue payment write-offs can occur during the month. The data for the current month does not include unsettled pay-as-you-go fees for which bills have not yet been generated.
     * - Amortized cost data from the last 12 months is available.
     * - Data for attached resources is reflected in the amortized costs 48 hours after the split bill is generated. To use this feature, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data for items that are not attached resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs are not updated intra-month. They are updated only after 12:00 on the sixth day of the following month. Consequently, specific costs for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available for these months.
     * - Amortized cost data is available for querying 48 hours after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature.
     *
     * @param request - DescribeInstanceAmortizedCostByAmortizationPeriodRequest
     *
     * @returns DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodRequest $request
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAmortizedCostByAmortizationPeriodWithOptions($request, $runtime);
    }

    /**
     * 实例摊销日摊销成本.
     *
     * @param request - DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse
     *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriodDateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amortizationDateEnd) {
            @$body['AmortizationDateEnd'] = $request->amortizationDateEnd;
        }

        if (null !== $request->amortizationDateStart) {
            @$body['AmortizationDateStart'] = $request->amortizationDateStart;
        }

        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->instanceIdList) {
            @$body['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAmortizedCostByAmortizationPeriodDate',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例摊销日摊销成本.
     *
     * @param request - DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest
     *
     * @returns DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse
     *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest $request
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriodDate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAmortizedCostByAmortizationPeriodDateWithOptions($request, $runtime);
    }

    /**
     * Queries the monthly amortized cost of an instance by billing cycle.
     *
     * @remarks
     * - Amortized costs are not used for settlement or reconciliation. They are used to allocate your cloud expenses, including both subscription and pay-as-you-go fees, based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. This delay accounts for events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs. Data for the current month does not include unsettled pay-as-you-go fees.
     * - Amortized cost data is available for the past 12 months.
     * - Data for attached resources in the amortized costs is updated 48 hours after the split bill is generated. To view the costs of attached resources, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data for other resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs are not updated mid-month. They are updated only after 12:00 on the sixth day of the following month. In addition, specific costs for attached resources, such as domain names, buckets, and EIPs, of products such as CDN, OSS, and Internet Shared Bandwidth, are not provided for this period.
     * - Amortized cost data is available only after you enable the [Amortized Costs](https://usercenter2.aliyun.com/finance/amortized-costs) feature. The data becomes available 48 hours after enablement.
     *
     * @param request - DescribeInstanceAmortizedCostByConsumePeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAmortizedCostByConsumePeriodResponse
     *
     * @param DescribeInstanceAmortizedCostByConsumePeriodRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeInstanceAmortizedCostByConsumePeriodResponse
     */
    public function describeInstanceAmortizedCostByConsumePeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amortizationPeriodFilter) {
            @$body['AmortizationPeriodFilter'] = $request->amortizationPeriodFilter;
        }

        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->instanceIdList) {
            @$body['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAmortizedCostByConsumePeriod',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAmortizedCostByConsumePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monthly amortized cost of an instance by billing cycle.
     *
     * @remarks
     * - Amortized costs are not used for settlement or reconciliation. They are used to allocate your cloud expenses, including both subscription and pay-as-you-go fees, based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. This delay accounts for events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs. Data for the current month does not include unsettled pay-as-you-go fees.
     * - Amortized cost data is available for the past 12 months.
     * - Data for attached resources in the amortized costs is updated 48 hours after the split bill is generated. To view the costs of attached resources, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data for other resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs are not updated mid-month. They are updated only after 12:00 on the sixth day of the following month. In addition, specific costs for attached resources, such as domain names, buckets, and EIPs, of products such as CDN, OSS, and Internet Shared Bandwidth, are not provided for this period.
     * - Amortized cost data is available only after you enable the [Amortized Costs](https://usercenter2.aliyun.com/finance/amortized-costs) feature. The data becomes available 48 hours after enablement.
     *
     * @param request - DescribeInstanceAmortizedCostByConsumePeriodRequest
     *
     * @returns DescribeInstanceAmortizedCostByConsumePeriodResponse
     *
     * @param DescribeInstanceAmortizedCostByConsumePeriodRequest $request
     *
     * @return DescribeInstanceAmortizedCostByConsumePeriodResponse
     */
    public function describeInstanceAmortizedCostByConsumePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAmortizedCostByConsumePeriodWithOptions($request, $runtime);
    }

    /**
     * Queries the consumption summary of all product instances or billable items for a user within a specific billing cycle.
     *
     * @remarks
     * - The query results for the current month are for reference only and cannot be used as the basis for reconciliation. The final bill for the current month can be viewed or exported after 12:00 on the 3rd day of the next month. During the month, a few scenarios may occur, including but not limited to delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - The bill data for the current month does not include unsettled pay-as-you-go data that is unbilled or accumulating.
     * - Data for the last 18 months is supported.
     * - Bill data is updated with a 24-hour delay compared to actual consumption. Information related to the instance ID, such as instance configuration, instance type, instance alias, resource group, public IP address, private IP address, and zone, is updated with a 48-hour delay.
     * - Bill data does not provide the specific costs of individual split items, such as domain names, buckets, and EIPs, for split-type cloud services, such as CDN, OSS, and Internet Shared Bandwidth. To view data that includes split items, go to the split bill page.
     * - For cloud communication products, only detail data from June 2020 onwards is supported. For HiChina products, including domain names and trademarks, only detail data from November 2020 onwards is supported.
     * - The rate limit is 10 requests per second per user. If a timeout occurs, retry the request.
     *
     * @param request - DescribeInstanceBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceBillResponse
     *
     * @param DescribeInstanceBillRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceBillResponse
     */
    public function describeInstanceBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->billingDate) {
            @$query['BillingDate'] = $request->billingDate;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->instanceID) {
            @$query['InstanceID'] = $request->instanceID;
        }

        if (null !== $request->isBillingItem) {
            @$query['IsBillingItem'] = $request->isBillingItem;
        }

        if (null !== $request->isHideZeroCharge) {
            @$query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipCode) {
            @$query['PipCode'] = $request->pipCode;
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
            'action' => 'DescribeInstanceBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the consumption summary of all product instances or billable items for a user within a specific billing cycle.
     *
     * @remarks
     * - The query results for the current month are for reference only and cannot be used as the basis for reconciliation. The final bill for the current month can be viewed or exported after 12:00 on the 3rd day of the next month. During the month, a few scenarios may occur, including but not limited to delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - The bill data for the current month does not include unsettled pay-as-you-go data that is unbilled or accumulating.
     * - Data for the last 18 months is supported.
     * - Bill data is updated with a 24-hour delay compared to actual consumption. Information related to the instance ID, such as instance configuration, instance type, instance alias, resource group, public IP address, private IP address, and zone, is updated with a 48-hour delay.
     * - Bill data does not provide the specific costs of individual split items, such as domain names, buckets, and EIPs, for split-type cloud services, such as CDN, OSS, and Internet Shared Bandwidth. To view data that includes split items, go to the split bill page.
     * - For cloud communication products, only detail data from June 2020 onwards is supported. For HiChina products, including domain names and trademarks, only detail data from November 2020 onwards is supported.
     * - The rate limit is 10 requests per second per user. If a timeout occurs, retry the request.
     *
     * @param request - DescribeInstanceBillRequest
     *
     * @returns DescribeInstanceBillResponse
     *
     * @param DescribeInstanceBillRequest $request
     *
     * @return DescribeInstanceBillResponse
     */
    public function describeInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceBillWithOptions($request, $runtime);
    }

    /**
     * 实例摊销日抵扣还原摊销成本.
     *
     * @param request - DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceDeductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->instanceIdList) {
            @$body['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDeductAmortizedCostByAmortizationPeriod',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例摊销日抵扣还原摊销成本.
     *
     * @param request - DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest
     *
     * @returns DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest $request
     *
     * @return DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceDeductAmortizedCostByAmortizationPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDeductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime);
    }

    /**
     * Queries the module information of a specific Alibaba Cloud product.
     *
     * @param request - DescribePricingModuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePricingModuleResponse
     *
     * @param DescribePricingModuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribePricingModule',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePricingModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the module information of a specific Alibaba Cloud product.
     *
     * @param request - DescribePricingModuleRequest
     *
     * @returns DescribePricingModuleResponse
     *
     * @param DescribePricingModuleRequest $request
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePricingModuleWithOptions($request, $runtime);
    }

    /**
     * Queries the monthly amortized cost of products for a specified month.
     *
     * @remarks
     * - Amortized costs are for cost allocation purposes only and cannot be used for settlement or reconciliation. This feature allocates your cloud expenses, including both subscription and pay-as-you-go fees, based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. Data for the current month is not final. This is because it does not include unsettled pay-as-you-go fees and may change due to events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - Amortized cost data for the past 12 months is available.
     * - Data for attached resources, which requires you to enable [split bills](https://usercenter2.aliyun.com/finance/split-bill), is updated 48 hours after the split bill is generated. Data for other resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs were not updated during the month. They were updated only after 12:00 on the sixth day of the following month. In addition, cost details for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available for this period.
     * - Amortized cost data becomes available 48 hours after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature.
     *
     * @param request - DescribeProductAmortizedCostByAmortizationPeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeProductAmortizedCostByAmortizationPeriodRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DescribeProductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeProductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->consumePeriodFilter) {
            @$body['ConsumePeriodFilter'] = $request->consumePeriodFilter;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProductAmortizedCostByAmortizationPeriod',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monthly amortized cost of products for a specified month.
     *
     * @remarks
     * - Amortized costs are for cost allocation purposes only and cannot be used for settlement or reconciliation. This feature allocates your cloud expenses, including both subscription and pay-as-you-go fees, based on specified allocation rules.
     * - The final data for a month is available after 12:00 on the sixth day of the following month. Data for the current month is not final. This is because it does not include unsettled pay-as-you-go fees and may change due to events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - Amortized cost data for the past 12 months is available.
     * - Data for attached resources, which requires you to enable [split bills](https://usercenter2.aliyun.com/finance/split-bill), is updated 48 hours after the split bill is generated. Data for other resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs were not updated during the month. They were updated only after 12:00 on the sixth day of the following month. In addition, cost details for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available for this period.
     * - Amortized cost data becomes available 48 hours after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature.
     *
     * @param request - DescribeProductAmortizedCostByAmortizationPeriodRequest
     *
     * @returns DescribeProductAmortizedCostByAmortizationPeriodResponse
     *
     * @param DescribeProductAmortizedCostByAmortizationPeriodRequest $request
     *
     * @return DescribeProductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeProductAmortizedCostByAmortizationPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime);
    }

    /**
     * Queries the monthly amortized cost of a product for a specific billing cycle.
     *
     * @remarks
     * - Amortized costs are used for cost allocation and cannot be used for settlement or reconciliation. This feature allocates your cloud expenses, including both subscription and pay-as-you-go fees, based on specified rules.
     * - The final data for a given month is available after 12:00 on the sixth day of the following month. This delay ensures that potential mid-month events, such as delayed billing, refunds, bill adjustments, and overdue payment write-offs, are included. Data for the current month does not include unsettled pay-as-you-go fees that have not yet been billed or are still accumulating.
     * - Amortized cost data for the past 12 months is available.
     * - Data related to attached resources is updated in the amortized costs 48 hours after the corresponding split bill is generated. To view the costs of attached resources, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data that is not related to attached resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs were not updated mid-month and were only updated after 12:00 on the sixth day of the following month. Additionally, for this period, specific costs for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available.
     * - Amortized cost data is provided only after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature. The data is available 48 hours after you enable it.
     *
     * @param request - DescribeProductAmortizedCostByConsumePeriodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductAmortizedCostByConsumePeriodResponse
     *
     * @param DescribeProductAmortizedCostByConsumePeriodRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeProductAmortizedCostByConsumePeriodResponse
     */
    public function describeProductAmortizedCostByConsumePeriodWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->amortizationPeriodFilter) {
            @$body['AmortizationPeriodFilter'] = $request->amortizationPeriodFilter;
        }

        if (null !== $request->billOwnerIdList) {
            @$body['BillOwnerIdList'] = $request->billOwnerIdList;
        }

        if (null !== $request->billUserIdList) {
            @$body['BillUserIdList'] = $request->billUserIdList;
        }

        if (null !== $request->billingCycle) {
            @$body['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->costUnitCode) {
            @$body['CostUnitCode'] = $request->costUnitCode;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productDetail) {
            @$body['ProductDetail'] = $request->productDetail;
        }

        if (null !== $request->subscriptionType) {
            @$body['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProductAmortizedCostByConsumePeriod',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProductAmortizedCostByConsumePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monthly amortized cost of a product for a specific billing cycle.
     *
     * @remarks
     * - Amortized costs are used for cost allocation and cannot be used for settlement or reconciliation. This feature allocates your cloud expenses, including both subscription and pay-as-you-go fees, based on specified rules.
     * - The final data for a given month is available after 12:00 on the sixth day of the following month. This delay ensures that potential mid-month events, such as delayed billing, refunds, bill adjustments, and overdue payment write-offs, are included. Data for the current month does not include unsettled pay-as-you-go fees that have not yet been billed or are still accumulating.
     * - Amortized cost data for the past 12 months is available.
     * - Data related to attached resources is updated in the amortized costs 48 hours after the corresponding split bill is generated. To view the costs of attached resources, you must first enable [split bills](https://usercenter2.aliyun.com/finance/split-bill). Data that is not related to attached resources is updated 48 hours after the detailed bill is generated.
     * - For months before August 2021, amortized costs were not updated mid-month and were only updated after 12:00 on the sixth day of the following month. Additionally, for this period, specific costs for attached resources, such as domain names, buckets, and EIPs, for products such as CDN, OSS, and Internet Shared Bandwidth are not available.
     * - Amortized cost data is provided only after you enable the [Amortized Cost](https://usercenter2.aliyun.com/finance/amortized-costs) feature. The data is available 48 hours after you enable it.
     *
     * @param request - DescribeProductAmortizedCostByConsumePeriodRequest
     *
     * @returns DescribeProductAmortizedCostByConsumePeriodResponse
     *
     * @param DescribeProductAmortizedCostByConsumePeriodRequest $request
     *
     * @return DescribeProductAmortizedCostByConsumePeriodResponse
     */
    public function describeProductAmortizedCostByConsumePeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductAmortizedCostByConsumePeriodWithOptions($request, $runtime);
    }

    /**
     * Queries the coverage details of reserved instances and storage capacity units (SCUs).
     *
     * @remarks
     * 1. The data is consistent with the list data in the Coverage Overview section of the Resource Instance Management menu in the User Center.
     * 2. Currently, coverage queries are supported for reserved instances (RIs) and storage capacity units (SCUs).
     * 3. Coverage queries are provided in three dimensions: hour, day, and month.
     *
     * @param request - DescribeResourceCoverageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceCoverageDetailResponse
     *
     * @param DescribeResourceCoverageDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourceCoverageDetailResponse
     */
    public function describeResourceCoverageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceCoverageDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceCoverageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the coverage details of reserved instances and storage capacity units (SCUs).
     *
     * @remarks
     * 1. The data is consistent with the list data in the Coverage Overview section of the Resource Instance Management menu in the User Center.
     * 2. Currently, coverage queries are supported for reserved instances (RIs) and storage capacity units (SCUs).
     * 3. Coverage queries are provided in three dimensions: hour, day, and month.
     *
     * @param request - DescribeResourceCoverageDetailRequest
     *
     * @returns DescribeResourceCoverageDetailResponse
     *
     * @param DescribeResourceCoverageDetailRequest $request
     *
     * @return DescribeResourceCoverageDetailResponse
     */
    public function describeResourceCoverageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceCoverageDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the coverage summary of reserved instances and storage capacity units (SCUs).
     *
     * @remarks
     * Returns the same summary data as the Coverage Overview in the Resource Instance Management menu of the User Center.
     * Currently, coverage queries are supported for two resource types: reserved instances (RIs) and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceCoverageTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceCoverageTotalResponse
     *
     * @param DescribeResourceCoverageTotalRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourceCoverageTotalResponse
     */
    public function describeResourceCoverageTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceCoverageTotal',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceCoverageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the coverage summary of reserved instances and storage capacity units (SCUs).
     *
     * @remarks
     * Returns the same summary data as the Coverage Overview in the Resource Instance Management menu of the User Center.
     * Currently, coverage queries are supported for two resource types: reserved instances (RIs) and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceCoverageTotalRequest
     *
     * @returns DescribeResourceCoverageTotalResponse
     *
     * @param DescribeResourceCoverageTotalRequest $request
     *
     * @return DescribeResourceCoverageTotalResponse
     */
    public function describeResourceCoverageTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceCoverageTotalWithOptions($request, $runtime);
    }

    /**
     * Queries the information about resource plans of an Alibaba Cloud service.
     *
     * @param request - DescribeResourcePackageProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourcePackageProductResponse
     *
     * @param DescribeResourcePackageProductRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourcePackageProduct',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourcePackageProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about resource plans of an Alibaba Cloud service.
     *
     * @param request - DescribeResourcePackageProductRequest
     *
     * @returns DescribeResourcePackageProductResponse
     *
     * @param DescribeResourcePackageProductRequest $request
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackageProductWithOptions($request, $runtime);
    }

    /**
     * Queries the usage details of reserved instances and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceUsageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceUsageDetailResponse
     *
     * @param DescribeResourceUsageDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeResourceUsageDetailResponse
     */
    public function describeResourceUsageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceUsageDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceUsageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage details of reserved instances and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceUsageDetailRequest
     *
     * @returns DescribeResourceUsageDetailResponse
     *
     * @param DescribeResourceUsageDetailRequest $request
     *
     * @return DescribeResourceUsageDetailResponse
     */
    public function describeResourceUsageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the usage summary of reserved instances and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceUsageTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceUsageTotalResponse
     *
     * @param DescribeResourceUsageTotalRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeResourceUsageTotalResponse
     */
    public function describeResourceUsageTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceUsageTotal',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceUsageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage summary of reserved instances and storage capacity units (SCUs).
     *
     * @param request - DescribeResourceUsageTotalRequest
     *
     * @returns DescribeResourceUsageTotalResponse
     *
     * @param DescribeResourceUsageTotalRequest $request
     *
     * @return DescribeResourceUsageTotalResponse
     */
    public function describeResourceUsageTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageTotalWithOptions($request, $runtime);
    }

    /**
     * Queries the coverage details of savings plans.
     *
     * @param tmpReq - DescribeSavingsPlansCoverageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSavingsPlansCoverageDetailResponse
     *
     * @param DescribeSavingsPlansCoverageDetailRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSavingsPlansCoverageDetailResponse
     */
    public function describeSavingsPlansCoverageDetailWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSavingsPlansCoverageDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParam) {
            $request->filterParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParam, 'FilterParam', 'json');
        }

        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->filterParamShrink) {
            @$query['FilterParam'] = $request->filterParamShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSavingsPlansCoverageDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSavingsPlansCoverageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the coverage details of savings plans.
     *
     * @param request - DescribeSavingsPlansCoverageDetailRequest
     *
     * @returns DescribeSavingsPlansCoverageDetailResponse
     *
     * @param DescribeSavingsPlansCoverageDetailRequest $request
     *
     * @return DescribeSavingsPlansCoverageDetailResponse
     */
    public function describeSavingsPlansCoverageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSavingsPlansCoverageDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the summary of savings plan coverage.
     *
     * @param tmpReq - DescribeSavingsPlansCoverageTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSavingsPlansCoverageTotalResponse
     *
     * @param DescribeSavingsPlansCoverageTotalRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSavingsPlansCoverageTotalResponse
     */
    public function describeSavingsPlansCoverageTotalWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSavingsPlansCoverageTotalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParam) {
            $request->filterParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParam, 'FilterParam', 'json');
        }

        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->filterParamShrink) {
            @$query['FilterParam'] = $request->filterParamShrink;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSavingsPlansCoverageTotal',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSavingsPlansCoverageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the summary of savings plan coverage.
     *
     * @param request - DescribeSavingsPlansCoverageTotalRequest
     *
     * @returns DescribeSavingsPlansCoverageTotalResponse
     *
     * @param DescribeSavingsPlansCoverageTotalRequest $request
     *
     * @return DescribeSavingsPlansCoverageTotalResponse
     */
    public function describeSavingsPlansCoverageTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSavingsPlansCoverageTotalWithOptions($request, $runtime);
    }

    /**
     * Queries the usage details of savings plans.
     *
     * @param tmpReq - DescribeSavingsPlansUsageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSavingsPlansUsageDetailResponse
     *
     * @param DescribeSavingsPlansUsageDetailRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSavingsPlansUsageDetailResponse
     */
    public function describeSavingsPlansUsageDetailWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSavingsPlansUsageDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParam) {
            $request->filterParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParam, 'FilterParam', 'json');
        }

        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->filterParamShrink) {
            @$query['FilterParam'] = $request->filterParamShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSavingsPlansUsageDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSavingsPlansUsageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage details of savings plans.
     *
     * @param request - DescribeSavingsPlansUsageDetailRequest
     *
     * @returns DescribeSavingsPlansUsageDetailResponse
     *
     * @param DescribeSavingsPlansUsageDetailRequest $request
     *
     * @return DescribeSavingsPlansUsageDetailResponse
     */
    public function describeSavingsPlansUsageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSavingsPlansUsageDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the usage summary of savings plans.
     *
     * @param tmpReq - DescribeSavingsPlansUsageTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSavingsPlansUsageTotalResponse
     *
     * @param DescribeSavingsPlansUsageTotalRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSavingsPlansUsageTotalResponse
     */
    public function describeSavingsPlansUsageTotalWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSavingsPlansUsageTotalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterParam) {
            $request->filterParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterParam, 'FilterParam', 'json');
        }

        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->endPeriod) {
            @$query['EndPeriod'] = $request->endPeriod;
        }

        if (null !== $request->filterParamShrink) {
            @$query['FilterParam'] = $request->filterParamShrink;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        if (null !== $request->startPeriod) {
            @$query['StartPeriod'] = $request->startPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSavingsPlansUsageTotal',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSavingsPlansUsageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage summary of savings plans.
     *
     * @param request - DescribeSavingsPlansUsageTotalRequest
     *
     * @returns DescribeSavingsPlansUsageTotalResponse
     *
     * @param DescribeSavingsPlansUsageTotalRequest $request
     *
     * @return DescribeSavingsPlansUsageTotalResponse
     */
    public function describeSavingsPlansUsageTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSavingsPlansUsageTotalWithOptions($request, $runtime);
    }

    /**
     * Queries split bills.
     *
     * @remarks
     * - The query results for the current month\\"s split bills are for reference only and cannot be used as the basis for reconciliation. The final bill for the current month can be queried after 12:00 on the 4th day of the next month. The split bill data for the current month does not include unsettled pay-as-you-go data (unbilled or being accumulated).
     * - Split bill data is available for the last 12 months.
     * - Split bill data is updated with a 48-hour delay compared to actual expenses. For split cloud services (such as CDN, OSS, and Internet Shared Bandwidth), the specific expenses for each attached resource (such as domain names, buckets, and EIPs) are updated with a 72-hour delay.
     * - Split bill data is available only after you enable the feature on the <props="china">[Split Bill](https://usercenter2.aliyun.com/finance/split-bill)<props="intl">[Split Bill](https://usercenter2-intl.aliyun.com/finance/split-bill) page in the console. The data becomes available 24 hours after you enable the feature.
     * - The rate limit is 10 requests per second per user. If a timeout occurs, retry the request.
     *
     * @param request - DescribeSplitItemBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSplitItemBillResponse
     *
     * @param DescribeSplitItemBillRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSplitItemBillResponse
     */
    public function describeSplitItemBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->billingDate) {
            @$query['BillingDate'] = $request->billingDate;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->instanceID) {
            @$query['InstanceID'] = $request->instanceID;
        }

        if (null !== $request->isHideZeroCharge) {
            @$query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipCode) {
            @$query['PipCode'] = $request->pipCode;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->splitItemID) {
            @$query['SplitItemID'] = $request->splitItemID;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        if (null !== $request->tagFilter) {
            @$query['TagFilter'] = $request->tagFilter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSplitItemBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSplitItemBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries split bills.
     *
     * @remarks
     * - The query results for the current month\\"s split bills are for reference only and cannot be used as the basis for reconciliation. The final bill for the current month can be queried after 12:00 on the 4th day of the next month. The split bill data for the current month does not include unsettled pay-as-you-go data (unbilled or being accumulated).
     * - Split bill data is available for the last 12 months.
     * - Split bill data is updated with a 48-hour delay compared to actual expenses. For split cloud services (such as CDN, OSS, and Internet Shared Bandwidth), the specific expenses for each attached resource (such as domain names, buckets, and EIPs) are updated with a 72-hour delay.
     * - Split bill data is available only after you enable the feature on the <props="china">[Split Bill](https://usercenter2.aliyun.com/finance/split-bill)<props="intl">[Split Bill](https://usercenter2-intl.aliyun.com/finance/split-bill) page in the console. The data becomes available 24 hours after you enable the feature.
     * - The rate limit is 10 requests per second per user. If a timeout occurs, retry the request.
     *
     * @param request - DescribeSplitItemBillRequest
     *
     * @returns DescribeSplitItemBillResponse
     *
     * @param DescribeSplitItemBillRequest $request
     *
     * @return DescribeSplitItemBillResponse
     */
    public function describeSplitItemBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSplitItemBillWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an account linking.
     *
     * @param request - GetAccountRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountRelationResponse
     *
     * @param GetAccountRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAccountRelationResponse
     */
    public function getAccountRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountRelation',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an account linking.
     *
     * @param request - GetAccountRelationRequest
     *
     * @returns GetAccountRelationResponse
     *
     * @param GetAccountRelationRequest $request
     *
     * @return GetAccountRelationResponse
     */
    public function getAccountRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountRelationWithOptions($request, $runtime);
    }

    /**
     * Queries the account information of an end customer under a partner.
     *
     * @param request - GetCustomerAccountInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerAccountInfoResponse
     *
     * @param GetCustomerAccountInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerAccountInfo',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the account information of an end customer under a partner.
     *
     * @param request - GetCustomerAccountInfoRequest
     *
     * @returns GetCustomerAccountInfoResponse
     *
     * @param GetCustomerAccountInfoRequest $request
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerAccountInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the list of end customer UIDs under a partner.
     *
     * @remarks
     * The system queries the list of associated end customer UIDs based on the AccessKey pair in the request.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetCustomerList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of end customer UIDs under a partner.
     *
     * @remarks
     * The system queries the list of associated end customer UIDs based on the AccessKey pair in the request.
     *
     * @returns GetCustomerListResponse
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerListWithOptions($runtime);
    }

    /**
     * Queries the details of a specific order for a user or a distribution customer.
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
            'version' => '2017-12-14',
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
     * Queries the details of a specific order for a user or a distribution customer.
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
     * Queries the price of a pay-as-you-go product.
     *
     * @remarks
     * ### Operation description
     * 1. Call QueryProductList to obtain the product code. For more information, see [Query product information](https://help.aliyun.com/document_detail/95984.html).
     * 2. Call the DescribePricingModule operation to obtain the configuration parameters of a product. For more information, see [Query pricing module information](https://help.aliyun.com/document_detail/96469.html).
     * 3. Call this operation with the obtained product configuration parameters to query the price of a pay-as-you-go product.
     *
     * @param request - GetPayAsYouGoPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPayAsYouGoPriceResponse
     *
     * @param GetPayAsYouGoPriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->moduleList) {
            @$query['ModuleList'] = $request->moduleList;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPayAsYouGoPrice',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPayAsYouGoPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price of a pay-as-you-go product.
     *
     * @remarks
     * ### Operation description
     * 1. Call QueryProductList to obtain the product code. For more information, see [Query product information](https://help.aliyun.com/document_detail/95984.html).
     * 2. Call the DescribePricingModule operation to obtain the configuration parameters of a product. For more information, see [Query pricing module information](https://help.aliyun.com/document_detail/96469.html).
     * 3. Call this operation with the obtained product configuration parameters to query the price of a pay-as-you-go product.
     *
     * @param request - GetPayAsYouGoPriceRequest
     *
     * @returns GetPayAsYouGoPriceResponse
     *
     * @param GetPayAsYouGoPriceRequest $request
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPayAsYouGoPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the price of a resource plan.
     *
     * @param request - GetResourcePackagePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourcePackagePriceResponse
     *
     * @param GetResourcePackagePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->effectiveDate) {
            @$query['EffectiveDate'] = $request->effectiveDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourcePackagePrice',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourcePackagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price of a resource plan.
     *
     * @param request - GetResourcePackagePriceRequest
     *
     * @returns GetResourcePackagePriceResponse
     *
     * @param GetResourcePackagePriceRequest $request
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePackagePriceWithOptions($request, $runtime);
    }

    /**
     * Queries the prices of subscription products.
     *
     * @remarks
     * 1. Call QueryProductList to obtain the product code. For more information, see [Query product information](https://help.aliyun.com/document_detail/95984.html).
     * 2. Call the DescribePricingModule operation to obtain the configuration parameters of the product. For more information, see [Query product module information](https://help.aliyun.com/document_detail/96469.html).
     * 3. Call this operation to query the prices of subscription products based on the obtained product configuration parameters.
     * 4. Concatenate the Config parameter under ModuleList based on the config parameter returned by the DescribePricingModule operation. Do not omit any parameters. Otherwise, an error occurs during the price inquiry.
     *
     * @param request - GetSubscriptionPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionPriceResponse
     *
     * @param GetSubscriptionPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSubscriptionPriceResponse
     */
    public function getSubscriptionPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleList) {
            @$query['ModuleList'] = $request->moduleList;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->servicePeriodQuantity) {
            @$query['ServicePeriodQuantity'] = $request->servicePeriodQuantity;
        }

        if (null !== $request->servicePeriodUnit) {
            @$query['ServicePeriodUnit'] = $request->servicePeriodUnit;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubscriptionPrice',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the prices of subscription products.
     *
     * @remarks
     * 1. Call QueryProductList to obtain the product code. For more information, see [Query product information](https://help.aliyun.com/document_detail/95984.html).
     * 2. Call the DescribePricingModule operation to obtain the configuration parameters of the product. For more information, see [Query product module information](https://help.aliyun.com/document_detail/96469.html).
     * 3. Call this operation to query the prices of subscription products based on the obtained product configuration parameters.
     * 4. Concatenate the Config parameter under ModuleList based on the config parameter returned by the DescribePricingModule operation. Do not omit any parameters. Otherwise, an error occurs during the price inquiry.
     *
     * @param request - GetSubscriptionPriceRequest
     *
     * @returns GetSubscriptionPriceResponse
     *
     * @param GetSubscriptionPriceRequest $request
     *
     * @return GetSubscriptionPriceResponse
     */
    public function getSubscriptionPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the refund amount for an instance that you want to unsubscribe from.
     *
     * @remarks
     * 1. **Carefully verify the information about the resource to be unsubscribed, and confirm the unsubscription terms and refund amount. Resources cannot be recovered after unsubscription.**
     * 2. Only the actual paid amount is refunded. Used vouchers are not refunded.
     * 3. For other questions, refer to: <props="china">[Refund rules](https://help.aliyun.com/knowledge_detail/116043.html?spm=a2c81.e1d666e.app.2.62ae11271Kd6iM)<props="intl">[Refund rules for Alibaba Cloud International Website](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules)
     *
     * @param request - InquiryPriceRefundInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InquiryPriceRefundInstanceResponse
     *
     * @param InquiryPriceRefundInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return InquiryPriceRefundInstanceResponse
     */
    public function inquiryPriceRefundInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InquiryPriceRefundInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InquiryPriceRefundInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the refund amount for an instance that you want to unsubscribe from.
     *
     * @remarks
     * 1. **Carefully verify the information about the resource to be unsubscribed, and confirm the unsubscription terms and refund amount. Resources cannot be recovered after unsubscription.**
     * 2. Only the actual paid amount is refunded. Used vouchers are not refunded.
     * 3. For other questions, refer to: <props="china">[Refund rules](https://help.aliyun.com/knowledge_detail/116043.html?spm=a2c81.e1d666e.app.2.62ae11271Kd6iM)<props="intl">[Refund rules for Alibaba Cloud International Website](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules)
     *
     * @param request - InquiryPriceRefundInstanceRequest
     *
     * @returns InquiryPriceRefundInstanceResponse
     *
     * @param InquiryPriceRefundInstanceRequest $request
     *
     * @return InquiryPriceRefundInstanceResponse
     */
    public function inquiryPriceRefundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inquiryPriceRefundInstanceWithOptions($request, $runtime);
    }

    /**
     * Adds or deletes permissions for an account linking relationship.
     *
     * @param request - ModifyAccountRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountRelationResponse
     *
     * @param ModifyAccountRelationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountRelationResponse
     */
    public function modifyAccountRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childNick) {
            @$query['ChildNick'] = $request->childNick;
        }

        if (null !== $request->childUserId) {
            @$query['ChildUserId'] = $request->childUserId;
        }

        if (null !== $request->parentUserId) {
            @$query['ParentUserId'] = $request->parentUserId;
        }

        if (null !== $request->permissionCodes) {
            @$query['PermissionCodes'] = $request->permissionCodes;
        }

        if (null !== $request->relationId) {
            @$query['RelationId'] = $request->relationId;
        }

        if (null !== $request->relationOperation) {
            @$query['RelationOperation'] = $request->relationOperation;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->roleCodes) {
            @$query['RoleCodes'] = $request->roleCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountRelation',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or deletes permissions for an account linking relationship.
     *
     * @param request - ModifyAccountRelationRequest
     *
     * @returns ModifyAccountRelationResponse
     *
     * @param ModifyAccountRelationRequest $request
     *
     * @return ModifyAccountRelationResponse
     */
    public function modifyAccountRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountRelationWithOptions($request, $runtime);
    }

    /**
     * Modifies financial units. Batch modification is supported.
     *
     * @param request - ModifyCostUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCostUnitResponse
     *
     * @param ModifyCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->unitEntityList) {
            @$query['UnitEntityList'] = $request->unitEntityList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCostUnit',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies financial units. Batch modification is supported.
     *
     * @param request - ModifyCostUnitRequest
     *
     * @returns ModifyCostUnitResponse
     *
     * @param ModifyCostUnitRequest $request
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostUnitWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource configuration of an instance. Invoking this operation creates an order for the Upgrade/Downgrade of instance resources and processes automatic payment. This operation does not support configuration changes for ECS or RDS products. Use the dedicated API of the corresponding product to execute the Upgrade/Downgrade.
     *
     * @param request - ModifyInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameter) {
            @$query['Parameter'] = $request->parameter;
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
            'action' => 'ModifyInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource configuration of an instance. Invoking this operation creates an order for the Upgrade/Downgrade of instance resources and processes automatic payment. This operation does not support configuration changes for ECS or RDS products. Use the dedicated API of the corresponding product to execute the Upgrade/Downgrade.
     *
     * @param request - ModifyInstanceRequest
     *
     * @returns ModifyInstanceResponse
     *
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
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
            'version' => '2017-12-14',
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
     * Queries the user\\"s account balance.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountBalanceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalanceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryAccountBalance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the user\\"s account balance.
     *
     * @returns QueryAccountBalanceResponse
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalance()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBalanceWithOptions($runtime);
    }

    /**
     * Queries account spending within a billing cycle and aggregates the data by resource owner.
     *
     * @remarks
     * - Data for the current month is for reference only. Do not use it for reconciliation. The final bill for the current month is available to view or export after 12:00 on the third day of the next month. This delay accounts for mid-month events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - Data from the last 18 months is available.
     * - Billing data is updated 24 hours after actual resource consumption. Information related to instance IDs, such as instance configurations, instance types, instance nicknames, resource groups, public IP addresses, private IP addresses, and zones, is updated with a 48-hour delay.
     * - Billing data does not include the costs of attached resources, such as domain names, buckets, and elastic IP addresses (EIPs), for products such as CDN, OSS, and Internet Shared Bandwidth. To view statistics that include data for attached resources, go to Split Bill.
     * - For Alibaba Cloud Communications products, detailed data is available only from June 2020 onwards. For HiChina products, such as Domain Names and trademarks, detailed data is available only from November 2020 onwards.
     * - Each account is limited to 10 queries per second. If a timeout occurs, retry the request.
     *
     * @param request - QueryAccountBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountBillResponse
     *
     * @param QueryAccountBillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAccountBillResponse
     */
    public function queryAccountBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->billingDate) {
            @$query['BillingDate'] = $request->billingDate;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->isGroupByProduct) {
            @$query['IsGroupByProduct'] = $request->isGroupByProduct;
        }

        if (null !== $request->ownerID) {
            @$query['OwnerID'] = $request->ownerID;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries account spending within a billing cycle and aggregates the data by resource owner.
     *
     * @remarks
     * - Data for the current month is for reference only. Do not use it for reconciliation. The final bill for the current month is available to view or export after 12:00 on the third day of the next month. This delay accounts for mid-month events such as delayed billing, refunds, bill adjustments, and overdue payment write-offs.
     * - Data from the last 18 months is available.
     * - Billing data is updated 24 hours after actual resource consumption. Information related to instance IDs, such as instance configurations, instance types, instance nicknames, resource groups, public IP addresses, private IP addresses, and zones, is updated with a 48-hour delay.
     * - Billing data does not include the costs of attached resources, such as domain names, buckets, and elastic IP addresses (EIPs), for products such as CDN, OSS, and Internet Shared Bandwidth. To view statistics that include data for attached resources, go to Split Bill.
     * - For Alibaba Cloud Communications products, detailed data is available only from June 2020 onwards. For HiChina products, such as Domain Names and trademarks, detailed data is available only from November 2020 onwards.
     * - Each account is limited to 10 queries per second. If a timeout occurs, retry the request.
     *
     * @param request - QueryAccountBillRequest
     *
     * @returns QueryAccountBillResponse
     *
     * @param QueryAccountBillRequest $request
     *
     * @return QueryAccountBillResponse
     */
    public function queryAccountBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBillWithOptions($request, $runtime);
    }

    /**
     * Queries the income and expenditure details of account transactions.
     *
     * @param request - QueryAccountTransactionDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountTransactionDetailsResponse
     *
     * @param QueryAccountTransactionDetailsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAccountTransactionDetailsResponse
     */
    public function queryAccountTransactionDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->recordID) {
            @$query['RecordID'] = $request->recordID;
        }

        if (null !== $request->transactionChannel) {
            @$query['TransactionChannel'] = $request->transactionChannel;
        }

        if (null !== $request->transactionChannelSN) {
            @$query['TransactionChannelSN'] = $request->transactionChannelSN;
        }

        if (null !== $request->transactionNumber) {
            @$query['TransactionNumber'] = $request->transactionNumber;
        }

        if (null !== $request->transactionType) {
            @$query['TransactionType'] = $request->transactionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountTransactionDetails',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountTransactionDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the income and expenditure details of account transactions.
     *
     * @param request - QueryAccountTransactionDetailsRequest
     *
     * @returns QueryAccountTransactionDetailsResponse
     *
     * @param QueryAccountTransactionDetailsRequest $request
     *
     * @return QueryAccountTransactionDetailsResponse
     */
    public function queryAccountTransactionDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountTransactionDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the transaction records of a user account.
     *
     * @param request - QueryAccountTransactionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountTransactionsResponse
     *
     * @param QueryAccountTransactionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->recordID) {
            @$query['RecordID'] = $request->recordID;
        }

        if (null !== $request->transactionChannel) {
            @$query['TransactionChannel'] = $request->transactionChannel;
        }

        if (null !== $request->transactionChannelSN) {
            @$query['TransactionChannelSN'] = $request->transactionChannelSN;
        }

        if (null !== $request->transactionFlow) {
            @$query['TransactionFlow'] = $request->transactionFlow;
        }

        if (null !== $request->transactionNumber) {
            @$query['TransactionNumber'] = $request->transactionNumber;
        }

        if (null !== $request->transactionType) {
            @$query['TransactionType'] = $request->transactionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountTransactions',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountTransactionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the transaction records of a user account.
     *
     * @param request - QueryAccountTransactionsRequest
     *
     * @returns QueryAccountTransactionsResponse
     *
     * @param QueryAccountTransactionsRequest $request
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountTransactionsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of available instances for the user.
     *
     * @param request - QueryAvailableInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAvailableInstancesResponse
     *
     * @param QueryAvailableInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->endTimeStart) {
            @$query['EndTimeStart'] = $request->endTimeStart;
        }

        if (null !== $request->instanceIDs) {
            @$query['InstanceIDs'] = $request->instanceIDs;
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

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->renewStatus) {
            @$query['RenewStatus'] = $request->renewStatus;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAvailableInstances',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAvailableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of available instances for the user.
     *
     * @param request - QueryAvailableInstancesRequest
     *
     * @returns QueryAvailableInstancesResponse
     *
     * @param QueryAvailableInstancesRequest $request
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the settlement bills of a user within a specific billing cycle.
     *
     * @param request - QueryBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBillResponse
     *
     * @param QueryBillRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryBillResponse
     */
    public function queryBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->isDisplayLocalCurrency) {
            @$query['IsDisplayLocalCurrency'] = $request->isDisplayLocalCurrency;
        }

        if (null !== $request->isHideZeroCharge) {
            @$query['IsHideZeroCharge'] = $request->isHideZeroCharge;
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

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the settlement bills of a user within a specific billing cycle.
     *
     * @param request - QueryBillRequest
     *
     * @returns QueryBillResponse
     *
     * @param QueryBillRequest $request
     *
     * @return QueryBillResponse
     */
    public function queryBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillWithOptions($request, $runtime);
    }

    /**
     * Queries the bill overview of a user for a specific billing cycle.
     *
     * @param request - QueryBillOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBillOverviewResponse
     *
     * @param QueryBillOverviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
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
            'action' => 'QueryBillOverview',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBillOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bill overview of a user for a specific billing cycle.
     *
     * @param request - QueryBillOverviewRequest
     *
     * @returns QueryBillOverviewResponse
     *
     * @param QueryBillOverviewRequest $request
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillOverviewWithOptions($request, $runtime);
    }

    /**
     * Queries the records of bill subscriptions to OSS buckets.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBillToOSSSubscriptionResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscriptionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryBillToOSSSubscription',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBillToOSSSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the records of bill subscriptions to OSS buckets.
     *
     * @returns QueryBillToOSSSubscriptionResponse
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscription()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillToOSSSubscriptionWithOptions($runtime);
    }

    /**
     * Queries user voucher information.
     *
     * @param request - QueryCashCouponsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCashCouponsResponse
     *
     * @param QueryCashCouponsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCouponsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveOrNot) {
            @$query['EffectiveOrNot'] = $request->effectiveOrNot;
        }

        if (null !== $request->expiryTimeEnd) {
            @$query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }

        if (null !== $request->expiryTimeStart) {
            @$query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCashCoupons',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCashCouponsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user voucher information.
     *
     * @param request - QueryCashCouponsRequest
     *
     * @returns QueryCashCouponsResponse
     *
     * @param QueryCashCouponsRequest $request
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCoupons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCashCouponsWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of commodity information based on a product code.
     *
     * @remarks
     * Retrieves a list of commodity information based on a product code.
     *
     * @param request - QueryCommodityListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommodityListResponse
     *
     * @param QueryCommodityListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCommodityListResponse
     */
    public function queryCommodityListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommodityList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommodityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of commodity information based on a product code.
     *
     * @remarks
     * Retrieves a list of commodity information based on a product code.
     *
     * @param request - QueryCommodityListRequest
     *
     * @returns QueryCommodityListResponse
     *
     * @param QueryCommodityListRequest $request
     *
     * @return QueryCommodityListResponse
     */
    public function queryCommodityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommodityListWithOptions($request, $runtime);
    }

    /**
     * Queries all financial unit nodes under the current node of the financial unit tree. If ParentUnitId is set to -1, all financial units are queried.
     *
     * @param request - QueryCostUnitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostUnitResponse
     *
     * @param QueryCostUnitRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerUid) {
            @$query['OwnerUid'] = $request->ownerUid;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentUnitId) {
            @$query['ParentUnitId'] = $request->parentUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCostUnit',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all financial unit nodes under the current node of the financial unit tree. If ParentUnitId is set to -1, all financial units are queried.
     *
     * @param request - QueryCostUnitRequest
     *
     * @returns QueryCostUnitResponse
     *
     * @param QueryCostUnitRequest $request
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostUnitWithOptions($request, $runtime);
    }

    /**
     * Queries the list of resource instances that belong to a financial unit of a user. When UnitId is set to 0, the query returns unallocated primary and sub-resource instances.
     *
     * @param request - QueryCostUnitResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCostUnitResourceResponse
     *
     * @param QueryCostUnitResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerUid) {
            @$query['OwnerUid'] = $request->ownerUid;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->unitId) {
            @$query['UnitId'] = $request->unitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCostUnitResource',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCostUnitResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of resource instances that belong to a financial unit of a user. When UnitId is set to 0, the query returns unallocated primary and sub-resource instances.
     *
     * @param request - QueryCostUnitResourceRequest
     *
     * @returns QueryCostUnitResourceResponse
     *
     * @param QueryCostUnitResourceRequest $request
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostUnitResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the Alibaba Cloud invoice mailing address information service.
     *
     * @param request - QueryCustomerAddressListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomerAddressListResponse
     *
     * @param QueryCustomerAddressListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomerAddressList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomerAddressListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Alibaba Cloud invoice mailing address information service.
     *
     * @param request - QueryCustomerAddressListRequest
     *
     * @returns QueryCustomerAddressListResponse
     *
     * @param QueryCustomerAddressListRequest $request
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerAddressListWithOptions($request, $runtime);
    }

    /**
     * Queries the usage of resource plans, including reserved instances (RIs) and storage capacity units (SCUs).
     *
     * @remarks
     * Limits:
     * - Only usage records from the past year are supported.
     *
     * @param request - QueryDPUtilizationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDPUtilizationDetailResponse
     *
     * @param QueryDPUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDPUtilizationDetailResponse
     */
    public function queryDPUtilizationDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->deductedInstanceId) {
            @$query['DeductedInstanceId'] = $request->deductedInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->includeShare) {
            @$query['IncludeShare'] = $request->includeShare;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->lastToken) {
            @$query['LastToken'] = $request->lastToken;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDPUtilizationDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDPUtilizationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of resource plans, including reserved instances (RIs) and storage capacity units (SCUs).
     *
     * @remarks
     * Limits:
     * - Only usage records from the past year are supported.
     *
     * @param request - QueryDPUtilizationDetailRequest
     *
     * @returns QueryDPUtilizationDetailResponse
     *
     * @param QueryDPUtilizationDetailRequest $request
     *
     * @return QueryDPUtilizationDetailResponse
     */
    public function queryDPUtilizationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDPUtilizationDetailWithOptions($request, $runtime);
    }

    /**
     * Queries a list of objects that are eligible for invoicing.
     *
     * @param request - QueryEvaluateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEvaluateListResponse
     *
     * @param QueryEvaluateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->bizTypeList) {
            @$query['BizTypeList'] = $request->bizTypeList;
        }

        if (null !== $request->endAmount) {
            @$query['EndAmount'] = $request->endAmount;
        }

        if (null !== $request->endBizTime) {
            @$query['EndBizTime'] = $request->endBizTime;
        }

        if (null !== $request->endSearchTime) {
            @$query['EndSearchTime'] = $request->endSearchTime;
        }

        if (null !== $request->outBizId) {
            @$query['OutBizId'] = $request->outBizId;
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

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->startAmount) {
            @$query['StartAmount'] = $request->startAmount;
        }

        if (null !== $request->startBizTime) {
            @$query['StartBizTime'] = $request->startBizTime;
        }

        if (null !== $request->startSearchTime) {
            @$query['StartSearchTime'] = $request->startSearchTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryEvaluateList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryEvaluateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of objects that are eligible for invoicing.
     *
     * @param request - QueryEvaluateListRequest
     *
     * @returns QueryEvaluateListResponse
     *
     * @param QueryEvaluateListRequest $request
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEvaluateListWithOptions($request, $runtime);
    }

    /**
     * Queries the enterprise financial account information of an account that has primary-subsidiary relationship permissions.
     *
     * @param request - QueryFinancialAccountInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFinancialAccountInfoResponse
     *
     * @param QueryFinancialAccountInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryFinancialAccountInfoResponse
     */
    public function queryFinancialAccountInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFinancialAccountInfo',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFinancialAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the enterprise financial account information of an account that has primary-subsidiary relationship permissions.
     *
     * @param request - QueryFinancialAccountInfoRequest
     *
     * @returns QueryFinancialAccountInfoResponse
     *
     * @param QueryFinancialAccountInfoRequest $request
     *
     * @return QueryFinancialAccountInfoResponse
     */
    public function queryFinancialAccountInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFinancialAccountInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the usage summary of all product instances or billable items for an account in a billing cycle. This operation has been upgraded to DescribeInstanceBill. This operation no longer queries data beyond the 50,000th row.
     *
     * @remarks
     * ## API description
     * Note the following when you call this operation:
     * - The API for instance bills has been upgraded. We recommend that you use the new operation [DescribeInstanceBill](https://help.aliyun.com/document_detail/209402.html). This operation no longer supports querying data beyond the 50,000th row.
     * - Instance bills are generated based on split billing data. A delay of about one day may occur.
     * - Instance information may change within a billing cycle. The instance Config and Spec in the monthly summary reflect the information at the time the record was generated. For more information, see the corresponding detailed bill.
     * - Data for Alibaba Cloud Communications products is available from June 2020. Data for HiChina products is available from November 2020.
     * <props="intl">
     * - For the international site (alibabacloud.com), select Singapore as the endpoint.
     *
     * @param request - QueryInstanceBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceBillResponse
     *
     * @param QueryInstanceBillRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->billingDate) {
            @$query['BillingDate'] = $request->billingDate;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->isBillingItem) {
            @$query['IsBillingItem'] = $request->isBillingItem;
        }

        if (null !== $request->isHideZeroCharge) {
            @$query['IsHideZeroCharge'] = $request->isHideZeroCharge;
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
            'action' => 'QueryInstanceBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage summary of all product instances or billable items for an account in a billing cycle. This operation has been upgraded to DescribeInstanceBill. This operation no longer queries data beyond the 50,000th row.
     *
     * @remarks
     * ## API description
     * Note the following when you call this operation:
     * - The API for instance bills has been upgraded. We recommend that you use the new operation [DescribeInstanceBill](https://help.aliyun.com/document_detail/209402.html). This operation no longer supports querying data beyond the 50,000th row.
     * - Instance bills are generated based on split billing data. A delay of about one day may occur.
     * - Instance information may change within a billing cycle. The instance Config and Spec in the monthly summary reflect the information at the time the record was generated. For more information, see the corresponding detailed bill.
     * - Data for Alibaba Cloud Communications products is available from June 2020. Data for HiChina products is available from November 2020.
     * <props="intl">
     * - For the international site (alibabacloud.com), select Singapore as the endpoint.
     *
     * @param request - QueryInstanceBillRequest
     *
     * @returns QueryInstanceBillResponse
     *
     * @param QueryInstanceBillRequest $request
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceBillWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances by tags.
     *
     * @param request - QueryInstanceByTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceByTagResponse
     *
     * @param QueryInstanceByTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInstanceByTagResponse
     */
    public function queryInstanceByTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInstanceByTag',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstanceByTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances by tags.
     *
     * @param request - QueryInstanceByTagRequest
     *
     * @returns QueryInstanceByTagResponse
     *
     * @param QueryInstanceByTagRequest $request
     *
     * @return QueryInstanceByTagResponse
     */
    public function queryInstanceByTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceByTagWithOptions($request, $runtime);
    }

    /**
     * This API is deprecated. Use the following APIs to retrieve the amortized cost: `DescribeInstanceAmortizedCostByAmortizationPeriod` - retrieves instance costs by amortization period; `DescribeProductAmortizedCostByAmortizationPeriod` - retrieves product costs by amortization period; `DescribeInstanceAmortizedCostByConsumePeriod` - retrieves instance costs by consume period; `DescribeProductAmortizedCostByConsumePeriod` - retrieves product costs by consume period.
     *
     * @param request - QueryInstanceGaapCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceGaapCostResponse
     *
     * @param QueryInstanceGaapCostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'QueryInstanceGaapCost',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstanceGaapCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API is deprecated. Use the following APIs to retrieve the amortized cost: `DescribeInstanceAmortizedCostByAmortizationPeriod` - retrieves instance costs by amortization period; `DescribeProductAmortizedCostByAmortizationPeriod` - retrieves product costs by amortization period; `DescribeInstanceAmortizedCostByConsumePeriod` - retrieves instance costs by consume period; `DescribeProductAmortizedCostByConsumePeriod` - retrieves product costs by consume period.
     *
     * @param request - QueryInstanceGaapCostRequest
     *
     * @returns QueryInstanceGaapCostResponse
     *
     * @param QueryInstanceGaapCostRequest $request
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceGaapCostWithOptions($request, $runtime);
    }

    /**
     * Queries the invoicing information of an Alibaba Cloud user.
     *
     * @param request - QueryInvoicingCustomerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInvoicingCustomerListResponse
     *
     * @param QueryInvoicingCustomerListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInvoicingCustomerList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInvoicingCustomerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the invoicing information of an Alibaba Cloud user.
     *
     * @param request - QueryInvoicingCustomerListRequest
     *
     * @returns QueryInvoicingCustomerListResponse
     *
     * @param QueryInvoicingCustomerListRequest $request
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInvoicingCustomerListWithOptions($request, $runtime);
    }

    /**
     * Queries the orders of users or distribution customers. By default, this operation queries orders created within the last hour. To query orders over a longer period, specify the CreateTimeStart and CreateTimeEnd parameters.
     *
     * @param request - QueryOrdersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrdersResponse
     *
     * @param QueryOrdersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOrdersResponse
     */
    public function queryOrdersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
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
            'action' => 'QueryOrders',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the orders of users or distribution customers. By default, this operation queries orders created within the last hour. To query orders over a longer period, specify the CreateTimeStart and CreateTimeEnd parameters.
     *
     * @param request - QueryOrdersRequest
     *
     * @returns QueryOrdersResponse
     *
     * @param QueryOrdersRequest $request
     *
     * @return QueryOrdersResponse
     */
    public function queryOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrdersWithOptions($request, $runtime);
    }

    /**
     * Queries the permissions for a master-member relationship based on the relationship ID.
     *
     * @param request - QueryPermissionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPermissionListResponse
     *
     * @param QueryPermissionListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryPermissionListResponse
     */
    public function queryPermissionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relationId) {
            @$query['RelationId'] = $request->relationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPermissionList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPermissionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the permissions for a master-member relationship based on the relationship ID.
     *
     * @param request - QueryPermissionListRequest
     *
     * @returns QueryPermissionListResponse
     *
     * @param QueryPermissionListRequest $request
     *
     * @return QueryPermissionListResponse
     */
    public function queryPermissionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPermissionListWithOptions($request, $runtime);
    }

    /**
     * Queries user card package information.
     *
     * @param request - QueryPrepaidCardsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPrepaidCardsResponse
     *
     * @param QueryPrepaidCardsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCardsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveOrNot) {
            @$query['EffectiveOrNot'] = $request->effectiveOrNot;
        }

        if (null !== $request->expiryTimeEnd) {
            @$query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }

        if (null !== $request->expiryTimeStart) {
            @$query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPrepaidCards',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPrepaidCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user card package information.
     *
     * @param request - QueryPrepaidCardsRequest
     *
     * @returns QueryPrepaidCardsResponse
     *
     * @param QueryPrepaidCardsRequest $request
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPrepaidCardsWithOptions($request, $runtime);
    }

    /**
     * Queries the pricing entities under a commodity. A pricing entity is the smallest product capability used for metering and cost calculation.
     *
     * @remarks
     * Queries the pricing entities under a commodity. A pricing entity is the smallest product capability used for metering and cost calculation.
     *
     * @param request - QueryPriceEntityListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPriceEntityListResponse
     *
     * @param QueryPriceEntityListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryPriceEntityListResponse
     */
    public function queryPriceEntityListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPriceEntityList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPriceEntityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pricing entities under a commodity. A pricing entity is the smallest product capability used for metering and cost calculation.
     *
     * @remarks
     * Queries the pricing entities under a commodity. A pricing entity is the smallest product capability used for metering and cost calculation.
     *
     * @param request - QueryPriceEntityListRequest
     *
     * @returns QueryPriceEntityListResponse
     *
     * @param QueryPriceEntityListRequest $request
     *
     * @return QueryPriceEntityListResponse
     */
    public function queryPriceEntityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPriceEntityListWithOptions($request, $runtime);
    }

    /**
     * Queries the list of products available for the current account to order. The response includes the product code, product name, and subscription type (subscription or pay-as-you-go).
     *
     * @param request - QueryProductListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProductListResponse
     *
     * @param QueryProductListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryTotalCount) {
            @$query['QueryTotalCount'] = $request->queryTotalCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProductList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProductListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of products available for the current account to order. The response includes the product code, product name, and subscription type (subscription or pay-as-you-go).
     *
     * @param request - QueryProductListRequest
     *
     * @returns QueryProductListResponse
     *
     * @param QueryProductListRequest $request
     *
     * @return QueryProductListResponse
     */
    public function queryProductList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductListWithOptions($request, $runtime);
    }

    /**
     * Queries the usage of reserved instances (RIs).
     *
     * @param request - QueryRIUtilizationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRIUtilizationDetailResponse
     *
     * @param QueryRIUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deductedInstanceId) {
            @$query['DeductedInstanceId'] = $request->deductedInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->RICommodityCode) {
            @$query['RICommodityCode'] = $request->RICommodityCode;
        }

        if (null !== $request->RIInstanceId) {
            @$query['RIInstanceId'] = $request->RIInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRIUtilizationDetail',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRIUtilizationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of reserved instances (RIs).
     *
     * @param request - QueryRIUtilizationDetailRequest
     *
     * @returns QueryRIUtilizationDetailResponse
     *
     * @param QueryRIUtilizationDetailRequest $request
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRIUtilizationDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the redemption ticket information of a user.
     *
     * @param request - QueryRedeemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRedeemResponse
     *
     * @param QueryRedeemRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRedeem',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the redemption ticket information of a user.
     *
     * @param request - QueryRedeemRequest
     *
     * @returns QueryRedeemResponse
     *
     * @param QueryRedeemRequest $request
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRedeemWithOptions($request, $runtime);
    }

    /**
     * Queries a list of the relationships of member accounts.
     *
     * @param request - QueryRelationListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRelationListResponse
     *
     * @param QueryRelationListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryRelationListResponse
     */
    public function queryRelationListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRelationList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRelationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the relationships of member accounts.
     *
     * @param request - QueryRelationListRequest
     *
     * @returns QueryRelationListResponse
     *
     * @param QueryRelationListRequest $request
     *
     * @return QueryRelationListResponse
     */
    public function queryRelationList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRelationListWithOptions($request, $runtime);
    }

    /**
     * Queries the available quota for a user in a reseller payment scenario.
     *
     * @param request - QueryResellerAvailableQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResellerAvailableQuotaResponse
     *
     * @param QueryResellerAvailableQuotaRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->itemCodes) {
            @$query['ItemCodes'] = $request->itemCodes;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryResellerAvailableQuota',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryResellerAvailableQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available quota for a user in a reseller payment scenario.
     *
     * @param request - QueryResellerAvailableQuotaRequest
     *
     * @returns QueryResellerAvailableQuotaResponse
     *
     * @param QueryResellerAvailableQuotaRequest $request
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResellerAvailableQuotaWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * Queries the alarm thresholds for low quotas.
     *
     * @param request - QueryResellerUserAlarmThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResellerUserAlarmThresholdResponse
     *
     * @param QueryResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryResellerUserAlarmThresholdResponse
     */
    public function queryResellerUserAlarmThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmType) {
            @$query['AlarmType'] = $request->alarmType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryResellerUserAlarmThreshold',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryResellerUserAlarmThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Queries the alarm thresholds for low quotas.
     *
     * @param request - QueryResellerUserAlarmThresholdRequest
     *
     * @returns QueryResellerUserAlarmThresholdResponse
     *
     * @param QueryResellerUserAlarmThresholdRequest $request
     *
     * @return QueryResellerUserAlarmThresholdResponse
     */
    public function queryResellerUserAlarmThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResellerUserAlarmThresholdWithOptions($request, $runtime);
    }

    /**
     * Queries the instances of a specific resource plan for a user. Only valid resource plans are supported.
     *
     * @param request - QueryResourcePackageInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResourcePackageInstancesResponse
     *
     * @param QueryResourcePackageInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expiryTimeEnd) {
            @$query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }

        if (null !== $request->expiryTimeStart) {
            @$query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }

        if (null !== $request->includePartner) {
            @$query['IncludePartner'] = $request->includePartner;
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

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryResourcePackageInstances',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryResourcePackageInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instances of a specific resource plan for a user. Only valid resource plans are supported.
     *
     * @param request - QueryResourcePackageInstancesRequest
     *
     * @returns QueryResourcePackageInstancesResponse
     *
     * @param QueryResourcePackageInstancesRequest $request
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResourcePackageInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of savings plan deductions.
     *
     * @param request - QuerySavingsPlansDeductLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySavingsPlansDeductLogResponse
     *
     * @param QuerySavingsPlansDeductLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySavingsPlansDeductLogResponse
     */
    public function querySavingsPlansDeductLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySavingsPlansDeductLog',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySavingsPlansDeductLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of savings plan deductions.
     *
     * @param request - QuerySavingsPlansDeductLogRequest
     *
     * @returns QuerySavingsPlansDeductLogResponse
     *
     * @param QuerySavingsPlansDeductLogRequest $request
     *
     * @return QuerySavingsPlansDeductLogResponse
     */
    public function querySavingsPlansDeductLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySavingsPlansDeductLogWithOptions($request, $runtime);
    }

    /**
     * Queries the discount information for savings plans.
     *
     * @param request - QuerySavingsPlansDiscountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySavingsPlansDiscountResponse
     *
     * @param QuerySavingsPlansDiscountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySavingsPlansDiscountResponse
     */
    public function querySavingsPlansDiscountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySavingsPlansDiscount',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySavingsPlansDiscountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the discount information for savings plans.
     *
     * @param request - QuerySavingsPlansDiscountRequest
     *
     * @returns QuerySavingsPlansDiscountResponse
     *
     * @param QuerySavingsPlansDiscountRequest $request
     *
     * @return QuerySavingsPlansDiscountResponse
     */
    public function querySavingsPlansDiscount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySavingsPlansDiscountWithOptions($request, $runtime);
    }

    /**
     * Queries information about your savings plan instances.
     *
     * @param request - QuerySavingsPlansInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySavingsPlansInstanceResponse
     *
     * @param QuerySavingsPlansInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySavingsPlansInstanceResponse
     */
    public function querySavingsPlansInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySavingsPlansInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySavingsPlansInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about your savings plan instances.
     *
     * @param request - QuerySavingsPlansInstanceRequest
     *
     * @returns QuerySavingsPlansInstanceResponse
     *
     * @param QuerySavingsPlansInstanceRequest $request
     *
     * @return QuerySavingsPlansInstanceResponse
     */
    public function querySavingsPlansInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySavingsPlansInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the settlement bills of a user for a specific billing cycle. Supports domestic accounts with more than 50,000 bill entries.
     *
     * @remarks
     * - The query results for the current month are for reference only and cannot be used for reconciliation. The final bill for the current month is available for viewing or export after 12:00 on the 2nd of the following month. During the month, a few scenarios may occur, including but not limited to delayed billing, refunds, adjustments, and overdue payment write-offs.
     * - Bill data is updated with a 5-hour delay relative to actual cost consumption.
     * - For bills in the "Unsettled" state in historical billing cycles, the status is updated to settled 5 hours after payment. For bills in the "Unsettled" state in the current month, the status is updated to settled when the bill is generated at 12:00 on the 2nd of the following month.
     * - This API supports graceful backoff with a request rate of 600/60(s).
     * - The rate limit per user is 10 requests per second. If a timeout occurs, retry the request.
     *
     * @param request - QuerySettleBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySettleBillResponse
     *
     * @param QuerySettleBillRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySettleBillResponse
     */
    public function querySettleBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->isDisplayLocalCurrency) {
            @$query['IsDisplayLocalCurrency'] = $request->isDisplayLocalCurrency;
        }

        if (null !== $request->isHideZeroCharge) {
            @$query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->recordID) {
            @$query['RecordID'] = $request->recordID;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySettleBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySettleBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the settlement bills of a user for a specific billing cycle. Supports domestic accounts with more than 50,000 bill entries.
     *
     * @remarks
     * - The query results for the current month are for reference only and cannot be used for reconciliation. The final bill for the current month is available for viewing or export after 12:00 on the 2nd of the following month. During the month, a few scenarios may occur, including but not limited to delayed billing, refunds, adjustments, and overdue payment write-offs.
     * - Bill data is updated with a 5-hour delay relative to actual cost consumption.
     * - For bills in the "Unsettled" state in historical billing cycles, the status is updated to settled 5 hours after payment. For bills in the "Unsettled" state in the current month, the status is updated to settled when the bill is generated at 12:00 on the 2nd of the following month.
     * - This API supports graceful backoff with a request rate of 600/60(s).
     * - The rate limit per user is 10 requests per second. If a timeout occurs, retry the request.
     *
     * @param request - QuerySettleBillRequest
     *
     * @returns QuerySettleBillResponse
     *
     * @param QuerySettleBillRequest $request
     *
     * @return QuerySettleBillResponse
     */
    public function querySettleBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySettleBillWithOptions($request, $runtime);
    }

    /**
     * Queries the list of SKUs and their list prices under a specified pricing entity of a commodity. A product feature typically has 1 to multiple SKUs, and some products can have tens of thousands of SKUs. The request parameters support filtered queries based on specific SKU configuration conditions.
     *
     * @param tmpReq - QuerySkuPriceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySkuPriceListResponse
     *
     * @param QuerySkuPriceListRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySkuPriceListResponse
     */
    public function querySkuPriceListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySkuPriceListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->priceFactorConditionMap) {
            $request->priceFactorConditionMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->priceFactorConditionMap, 'PriceFactorConditionMap', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySkuPriceList',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySkuPriceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of SKUs and their list prices under a specified pricing entity of a commodity. A product feature typically has 1 to multiple SKUs, and some products can have tens of thousands of SKUs. The request parameters support filtered queries based on specific SKU configuration conditions.
     *
     * @param request - QuerySkuPriceListRequest
     *
     * @returns QuerySkuPriceListResponse
     *
     * @param QuerySkuPriceListRequest $request
     *
     * @return QuerySkuPriceListResponse
     */
    public function querySkuPriceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySkuPriceListWithOptions($request, $runtime);
    }

    /**
     * Queries split bills. This API has been upgraded. We recommend that you use the new DescribeSplitItemBill operation.
     *
     * @remarks
     * - The API for split bills is upgraded. We recommend that you use the new [DescribeSplitItemBill](https://help.aliyun.com/document_detail/208169.html) operation. This operation no longer supports querying more than 50,000 rows of data.
     * - The data is consistent with the split bill data for the specified billing cycle in the User Center.
     * - You can query split bills that were generated within the last 12 months.
     * - To use this feature, you must first enable it on the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) page in the console.
     *
     * @param request - QuerySplitItemBillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySplitItemBillResponse
     *
     * @param QuerySplitItemBillRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billOwnerId) {
            @$query['BillOwnerId'] = $request->billOwnerId;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
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
            'action' => 'QuerySplitItemBill',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySplitItemBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries split bills. This API has been upgraded. We recommend that you use the new DescribeSplitItemBill operation.
     *
     * @remarks
     * - The API for split bills is upgraded. We recommend that you use the new [DescribeSplitItemBill](https://help.aliyun.com/document_detail/208169.html) operation. This operation no longer supports querying more than 50,000 rows of data.
     * - The data is consistent with the split bill data for the specified billing cycle in the User Center.
     * - You can query split bills that were generated within the last 12 months.
     * - To use this feature, you must first enable it on the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) page in the console.
     *
     * @param request - QuerySplitItemBillRequest
     *
     * @returns QuerySplitItemBillResponse
     *
     * @param QuerySplitItemBillRequest $request
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySplitItemBillWithOptions($request, $runtime);
    }

    /**
     * Queries the metering records for the specified cloud service.
     *
     * @remarks
     * ## API description
     * - The specified cloud service parameter must be one of the following cloud service codes. The metering data types include hourly and daily.
     * - The time format must comply with the ISO 8601 standard. Time specification constraints:
     * 	-	Due to delays in data push, the data integrity of hourly metering data is guaranteed for the past 24 hours, and the data integrity of daily metering data is guaranteed for the past 2 days.
     * 	-	The time span can cover the metering data of the most recent quarter.
     *
     * @param request - QueryUserOmsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserOmsDataResponse
     *
     * @param QueryUserOmsDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->table) {
            @$query['Table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUserOmsData',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUserOmsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering records for the specified cloud service.
     *
     * @remarks
     * ## API description
     * - The specified cloud service parameter must be one of the following cloud service codes. The metering data types include hourly and daily.
     * - The time format must comply with the ISO 8601 standard. Time specification constraints:
     * 	-	Due to delays in data push, the data integrity of hourly metering data is guaranteed for the past 24 hours, and the data integrity of daily metering data is guaranteed for the past 2 days.
     * 	-	The time span can cover the metering data of the most recent quarter.
     *
     * @param request - QueryUserOmsDataRequest
     *
     * @returns QueryUserOmsDataResponse
     *
     * @param QueryUserOmsDataRequest $request
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserOmsDataWithOptions($request, $runtime);
    }

    /**
     * Unsubscribes from an instance that is no longer needed.
     *
     * @remarks
     * 1. Only the actual paid amount is refunded. Used vouchers are not refunded.
     * 2. Carefully verify the information about the resource to be unsubscribed, and confirm the unsubscription terms and refund amount. Resources cannot be recovered after unsubscription.
     * 1. This operation can be called only by direct customers. Reseller customers cannot use this operation.
     * 4. For other questions, refer to: <props="china">[Refund policy](https://help.aliyun.com/knowledge_detail/116043.html?spm=a2c81.e1d666e.app.2.62ae11271Kd6iM)<props="intl">[Refund rules for Alibaba Cloud International site](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules)
     *
     * @param request - RefundInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefundInstanceResponse
     *
     * @param RefundInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->immediatelyRelease) {
            @$query['ImmediatelyRelease'] = $request->immediatelyRelease;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefundInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefundInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unsubscribes from an instance that is no longer needed.
     *
     * @remarks
     * 1. Only the actual paid amount is refunded. Used vouchers are not refunded.
     * 2. Carefully verify the information about the resource to be unsubscribed, and confirm the unsubscription terms and refund amount. Resources cannot be recovered after unsubscription.
     * 1. This operation can be called only by direct customers. Reseller customers cannot use this operation.
     * 4. For other questions, refer to: <props="china">[Refund policy](https://help.aliyun.com/knowledge_detail/116043.html?spm=a2c81.e1d666e.app.2.62ae11271Kd6iM)<props="intl">[Refund rules for Alibaba Cloud International site](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules)
     *
     * @param request - RefundInstanceRequest
     *
     * @returns RefundInstanceResponse
     *
     * @param RefundInstanceRequest $request
     *
     * @return RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * Releases instances by Virtual Network Operators (VNOs).
     *
     * @remarks
     * This operation is provided for only VNOs to release instances. If a non-specific VNO calls this operation, the request is blocked.
     *
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->renewStatus) {
            @$query['RenewStatus'] = $request->renewStatus;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases instances by Virtual Network Operators (VNOs).
     *
     * @remarks
     * This operation is provided for only VNOs to release instances. If a non-specific VNO calls this operation, the request is blocked.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Disassociates a RAM user from an Alibaba Cloud account.
     *
     * @param request - RelieveAccountRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RelieveAccountRelationResponse
     *
     * @param RelieveAccountRelationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RelieveAccountRelationResponse
     */
    public function relieveAccountRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->childUserId) {
            @$query['ChildUserId'] = $request->childUserId;
        }

        if (null !== $request->parentUserId) {
            @$query['ParentUserId'] = $request->parentUserId;
        }

        if (null !== $request->relationId) {
            @$query['RelationId'] = $request->relationId;
        }

        if (null !== $request->relationType) {
            @$query['RelationType'] = $request->relationType;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RelieveAccountRelation',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RelieveAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a RAM user from an Alibaba Cloud account.
     *
     * @param request - RelieveAccountRelationRequest
     *
     * @returns RelieveAccountRelationResponse
     *
     * @param RelieveAccountRelationRequest $request
     *
     * @return RelieveAccountRelationResponse
     */
    public function relieveAccountRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->relieveAccountRelationWithOptions($request, $runtime);
    }

    /**
     * Renews an instance and changes its configuration. The configuration change is applied after the renewal order takes effect. Payment is processed automatically. This operation cannot be used to create ECS or RDS instances.
     *
     * @param request - RenewChangeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewChangeInstanceResponse
     *
     * @param RenewChangeInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenewChangeInstanceResponse
     */
    public function renewChangeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameter) {
            @$query['Parameter'] = $request->parameter;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->renewPeriod) {
            @$query['RenewPeriod'] = $request->renewPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewChangeInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewChangeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews an instance and changes its configuration. The configuration change is applied after the renewal order takes effect. Payment is processed automatically. This operation cannot be used to create ECS or RDS instances.
     *
     * @param request - RenewChangeInstanceRequest
     *
     * @returns RenewChangeInstanceResponse
     *
     * @param RenewChangeInstanceRequest $request
     *
     * @return RenewChangeInstanceResponse
     */
    public function renewChangeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewChangeInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews a specified instance. This operation does not support renewing ECS, RDS, or Redis instances. To renew these instances, call the dedicated renewal API of the corresponding service.
     *
     * @param request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->renewPeriod) {
            @$query['RenewPeriod'] = $request->renewPeriod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a specified instance. This operation does not support renewing ECS, RDS, or Redis instances. To renew these instances, call the dedicated renewal API of the corresponding service.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews a resource package instance.
     *
     * @param request - RenewResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewResourcePackageResponse
     *
     * @param RenewResourcePackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->effectiveDate) {
            @$query['EffectiveDate'] = $request->effectiveDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewResourcePackage',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a resource package instance.
     *
     * @param request - RenewResourcePackageRequest
     *
     * @returns RenewResourcePackageResponse
     *
     * @param RenewResourcePackageRequest $request
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewResourcePackageWithOptions($request, $runtime);
    }

    /**
     * Sets an expiration date for all Elastic Compute Service (ECS) instances.
     *
     * @param request - SetAllExpirationDayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAllExpirationDayResponse
     *
     * @param SetAllExpirationDayRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetAllExpirationDayResponse
     */
    public function setAllExpirationDayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->unifyExpireDay) {
            @$query['UnifyExpireDay'] = $request->unifyExpireDay;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAllExpirationDay',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAllExpirationDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets an expiration date for all Elastic Compute Service (ECS) instances.
     *
     * @param request - SetAllExpirationDayRequest
     *
     * @returns SetAllExpirationDayResponse
     *
     * @param SetAllExpirationDayRequest $request
     *
     * @return SetAllExpirationDayResponse
     */
    public function setAllExpirationDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAllExpirationDayWithOptions($request, $runtime);
    }

    /**
     * Enables auto-renewal for an instance.
     *
     * @param request - SetRenewalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRenewalResponse
     *
     * @param SetRenewalRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetRenewalResponse
     */
    public function setRenewalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIDs) {
            @$query['InstanceIDs'] = $request->instanceIDs;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->renewalPeriod) {
            @$query['RenewalPeriod'] = $request->renewalPeriod;
        }

        if (null !== $request->renewalPeriodUnit) {
            @$query['RenewalPeriodUnit'] = $request->renewalPeriodUnit;
        }

        if (null !== $request->renewalStatus) {
            @$query['RenewalStatus'] = $request->renewalStatus;
        }

        if (null !== $request->subscriptionType) {
            @$query['SubscriptionType'] = $request->subscriptionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetRenewal',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetRenewalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables auto-renewal for an instance.
     *
     * @param request - SetRenewalRequest
     *
     * @returns SetRenewalResponse
     *
     * @param SetRenewalRequest $request
     *
     * @return SetRenewalResponse
     */
    public function setRenewal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRenewalWithOptions($request, $runtime);
    }

    /**
     * Configures low-balance alert rules for quotas.
     *
     * @remarks
     * Configures low-balance alert rules for quotas.
     *
     * @param request - SetResellerUserAlarmThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetResellerUserAlarmThresholdResponse
     *
     * @param SetResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmThresholds) {
            @$query['AlarmThresholds'] = $request->alarmThresholds;
        }

        if (null !== $request->alarmType) {
            @$query['AlarmType'] = $request->alarmType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetResellerUserAlarmThreshold',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetResellerUserAlarmThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures low-balance alert rules for quotas.
     *
     * @remarks
     * Configures low-balance alert rules for quotas.
     *
     * @param request - SetResellerUserAlarmThresholdRequest
     *
     * @returns SetResellerUserAlarmThresholdResponse
     *
     * @param SetResellerUserAlarmThresholdRequest $request
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserAlarmThresholdWithOptions($request, $runtime);
    }

    /**
     * Modify the quota ledger and consumption ledger.
     *
     * @remarks
     * 设置用户配额账本的Quota额度
     *
     * @param request - SetResellerUserQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetResellerUserQuotaResponse
     *
     * @param SetResellerUserQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->currency) {
            @$query['Currency'] = $request->currency;
        }

        if (null !== $request->outBizId) {
            @$query['OutBizId'] = $request->outBizId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetResellerUserQuota',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetResellerUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the quota ledger and consumption ledger.
     *
     * @remarks
     * 设置用户配额账本的Quota额度
     *
     * @param request - SetResellerUserQuotaRequest
     *
     * @returns SetResellerUserQuotaResponse
     *
     * @param SetResellerUserQuotaRequest $request
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserQuotaWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the SQL audit feature for users.
     *
     * @remarks
     * Sets the status of a reseller\\"s user account, such as frozen or hosted.
     *
     * @param request - SetResellerUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetResellerUserStatusResponse
     *
     * @param SetResellerUserStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->stopMode) {
            @$query['StopMode'] = $request->stopMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetResellerUserStatus',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetResellerUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the SQL audit feature for users.
     *
     * @remarks
     * Sets the status of a reseller\\"s user account, such as frozen or hosted.
     *
     * @param request - SetResellerUserStatusRequest
     *
     * @returns SetResellerUserStatusResponse
     *
     * @param SetResellerUserStatusRequest $request
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserStatusWithOptions($request, $runtime);
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
            'version' => '2017-12-14',
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
     * Subscribes to bill files by using Object Storage Service (OSS), which stores billing data in a specified OSS bucket.
     *
     * @remarks
     * Before calling this operation, note the following information:
     * - You can subscribe to one type of bill file at a time.
     * - After subscription, the bill file generated on the previous day is pushed daily starting from the next day. On the 4th of each month, the full bill files for the entire billing cycle of the previous month are pushed. The monthly bill PDF is pushed on the 4th of each month for the previous month.
     * - Bill files generated on a daily basis may be delayed. Delayed bills are pushed the day after they are generated and may include bills from earlier days that were delayed until the previous day. Pull the full files for the previous month at the beginning of each month.
     * > To use OSS subscription for the first time, grant the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission to the subscribing user. If the authorization is revoked, the system stops pushing files, and the user must re-authorize.
     * - This subscription is the same feature as "Bill Data Storage" in the Expenses and Costs console. Subscriptions are synchronized between the two.
     * - When subscribing to a directory under a bucket, follow the directory naming conventions:
     *     - Emojis are not allowed. Use valid UTF-8 characters.
     *     - Use / to separate paths and quickly create subdirectories. Do not start with / or \\, and do not use consecutive / characters.
     *     - A subdirectory named .. is not allowed.
     *     - The total length must be 1 to 254 characters.
     * - File names:
     *     - **BillingItemDetailForBillingPeriod** (billing item details)
     *
     *         - Daily push file name format: `UID_BillingItemDetail_YYYYMMDD`, for example, `169**_BillingItemDetail_20190310`.
     *
     *         - Full file name format at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`, for example, `169**_BillingItemDetail_201903`.
     *
     *     - **InstanceDetailForBillingPeriod** (instance bill details)
     *
     *         - Daily push file name format: `UID_InstanceDetail_YYYYMMDD`, for example, `169**_InstanceDetail_20190310`.
     *
     *         - Full file name format at the beginning of the next month: `UID_InstanceDetail_YYYYMM`, for example, `169**_InstanceDetail_201903`.
     *     - **InstanceDetailMonthly** (instance bill summary by billing cycle)
     *
     *         - Daily push file name format: `UID_InstanceDetailMonthly_YYYYMM`, for example, `169**_InstanceDetailMonthly_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **BillingItemDetailMonthly** (billing item summary by billing cycle)
     *
     *         - Daily push file name format: `UID_BillingItemDetailMonthly_YYYYMM`, for example, `169**_BillingItemDetailMonthly_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **SplitItemDetailDaily** (split bill daily summary)
     *
     *         - Daily push file name format: `UID_SplitItemDetailDaily_YYYYMM`, for example, `169**_SplitItemDetailDaily_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **MonthBill** (monthly bill PDF)
     *
     *         - Monthly push file name format: `UID_MonthBill_YYYYMM`, for example, `169**_MonthBill_201903`. The file for the previous month is pushed on the 4th of each month.
     * - Except for MonthBill, which is a PDF file, all other file types are CSV files. If the number of rows in a bill file exceeds a certain threshold, the file is automatically split into multiple CSV files, which are then compressed into a single ZIP file. The ZIP file name follows the same format.
     *
     * @param request - SubscribeBillToOSSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeBillToOSSResponse
     *
     * @param SubscribeBillToOSSRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginBillingCycle) {
            @$query['BeginBillingCycle'] = $request->beginBillingCycle;
        }

        if (null !== $request->bucketOwnerId) {
            @$query['BucketOwnerId'] = $request->bucketOwnerId;
        }

        if (null !== $request->bucketPath) {
            @$query['BucketPath'] = $request->bucketPath;
        }

        if (null !== $request->multAccountRelSubscribe) {
            @$query['MultAccountRelSubscribe'] = $request->multAccountRelSubscribe;
        }

        if (null !== $request->rowLimitPerFile) {
            @$query['RowLimitPerFile'] = $request->rowLimitPerFile;
        }

        if (null !== $request->subscribeBucket) {
            @$query['SubscribeBucket'] = $request->subscribeBucket;
        }

        if (null !== $request->subscribeType) {
            @$query['SubscribeType'] = $request->subscribeType;
        }

        if (null !== $request->usingSsl) {
            @$query['UsingSsl'] = $request->usingSsl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubscribeBillToOSS',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubscribeBillToOSSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Subscribes to bill files by using Object Storage Service (OSS), which stores billing data in a specified OSS bucket.
     *
     * @remarks
     * Before calling this operation, note the following information:
     * - You can subscribe to one type of bill file at a time.
     * - After subscription, the bill file generated on the previous day is pushed daily starting from the next day. On the 4th of each month, the full bill files for the entire billing cycle of the previous month are pushed. The monthly bill PDF is pushed on the 4th of each month for the previous month.
     * - Bill files generated on a daily basis may be delayed. Delayed bills are pushed the day after they are generated and may include bills from earlier days that were delayed until the previous day. Pull the full files for the previous month at the beginning of each month.
     * > To use OSS subscription for the first time, grant the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission to the subscribing user. If the authorization is revoked, the system stops pushing files, and the user must re-authorize.
     * - This subscription is the same feature as "Bill Data Storage" in the Expenses and Costs console. Subscriptions are synchronized between the two.
     * - When subscribing to a directory under a bucket, follow the directory naming conventions:
     *     - Emojis are not allowed. Use valid UTF-8 characters.
     *     - Use / to separate paths and quickly create subdirectories. Do not start with / or \\, and do not use consecutive / characters.
     *     - A subdirectory named .. is not allowed.
     *     - The total length must be 1 to 254 characters.
     * - File names:
     *     - **BillingItemDetailForBillingPeriod** (billing item details)
     *
     *         - Daily push file name format: `UID_BillingItemDetail_YYYYMMDD`, for example, `169**_BillingItemDetail_20190310`.
     *
     *         - Full file name format at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`, for example, `169**_BillingItemDetail_201903`.
     *
     *     - **InstanceDetailForBillingPeriod** (instance bill details)
     *
     *         - Daily push file name format: `UID_InstanceDetail_YYYYMMDD`, for example, `169**_InstanceDetail_20190310`.
     *
     *         - Full file name format at the beginning of the next month: `UID_InstanceDetail_YYYYMM`, for example, `169**_InstanceDetail_201903`.
     *     - **InstanceDetailMonthly** (instance bill summary by billing cycle)
     *
     *         - Daily push file name format: `UID_InstanceDetailMonthly_YYYYMM`, for example, `169**_InstanceDetailMonthly_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **BillingItemDetailMonthly** (billing item summary by billing cycle)
     *
     *         - Daily push file name format: `UID_BillingItemDetailMonthly_YYYYMM`, for example, `169**_BillingItemDetailMonthly_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **SplitItemDetailDaily** (split bill daily summary)
     *
     *         - Daily push file name format: `UID_SplitItemDetailDaily_YYYYMM`, for example, `169**_SplitItemDetailDaily_201903`. This file is updated daily with full data from the beginning of the month to the current day, until the 4th of the next month.
     *     - **MonthBill** (monthly bill PDF)
     *
     *         - Monthly push file name format: `UID_MonthBill_YYYYMM`, for example, `169**_MonthBill_201903`. The file for the previous month is pushed on the 4th of each month.
     * - Except for MonthBill, which is a PDF file, all other file types are CSV files. If the number of rows in a bill file exceeds a certain threshold, the file is automatically split into multiple CSV files, which are then compressed into a single ZIP file. The ZIP file name follows the same format.
     *
     * @param request - SubscribeBillToOSSRequest
     *
     * @returns SubscribeBillToOSSResponse
     *
     * @param SubscribeBillToOSSRequest $request
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeBillToOSSWithOptions($request, $runtime);
    }

    /**
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to resources.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Cancels a detailed list export subscription.
     *
     * @param request - UnsubscribeBillToOSSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnsubscribeBillToOSSResponse
     *
     * @param UnsubscribeBillToOSSRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->multAccountRelSubscribe) {
            @$query['MultAccountRelSubscribe'] = $request->multAccountRelSubscribe;
        }

        if (null !== $request->subscribeType) {
            @$query['SubscribeType'] = $request->subscribeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnsubscribeBillToOSS',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnsubscribeBillToOSSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a detailed list export subscription.
     *
     * @param request - UnsubscribeBillToOSSRequest
     *
     * @returns UnsubscribeBillToOSSResponse
     *
     * @param UnsubscribeBillToOSSRequest $request
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unsubscribeBillToOSSWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Upgrades a resource plan.
     *
     * @param request - UpgradeResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeResourcePackageResponse
     *
     * @param UpgradeResourcePackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectiveDate) {
            @$query['EffectiveDate'] = $request->effectiveDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeResourcePackage',
            'version' => '2017-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades a resource plan.
     *
     * @param request - UpgradeResourcePackageRequest
     *
     * @returns UpgradeResourcePackageResponse
     *
     * @param UpgradeResourcePackageRequest $request
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeResourcePackageWithOptions($request, $runtime);
    }
}
