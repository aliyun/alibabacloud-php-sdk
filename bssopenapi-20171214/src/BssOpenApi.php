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
     * Transfers resource instances from the source cost center to the destination cost center.
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
     * Transfers resource instances from the source cost center to the destination cost center.
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
     * Submits an application for an invoice.
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
     * Submits an application for an invoice.
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
     * Confirms the invitation initiated by the master account.
     *
     * @remarks
     * 1\\. A member needs to confirm an invitation only if a financial management relationship is established between the management account and the member and enterprise names used by the management account and the member for real-name verification are different. 2. The permissions to be confirmed must be the same as those granted to the member when the management account initiates the invitation.
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
     * Confirms the invitation initiated by the master account.
     *
     * @remarks
     * 1\\. A member needs to confirm an invitation only if a financial management relationship is established between the management account and the member and enterprise names used by the management account and the member for real-name verification are different. 2. The permissions to be confirmed must be the same as those granted to the member when the management account initiates the invitation.
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
     * Changes the billing method of an instance. You can call this operation to switch the billing method from pay-as-you-go to subscription for Server Load Balancer (SLB) instances, elastic IP addresses (EIPs), and NAT gateways, and switch the billing method from subscription to pay-as-you-go for SLB instances and EIPs.
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
     * Changes the billing method of an instance. You can call this operation to switch the billing method from pay-as-you-go to subscription for Server Load Balancer (SLB) instances, elastic IP addresses (EIPs), and NAT gateways, and switch the billing method from subscription to pay-as-you-go for SLB instances and EIPs.
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
     * Creates an account to establish a financial relationship.
     *
     * @remarks
     * You can call this operation to create an account so as to establish a master-member financial relationship.
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
     * Creates an account to establish a financial relationship.
     *
     * @remarks
     * You can call this operation to create an account so as to establish a master-member financial relationship.
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
     * Creates a cost center. You can create multiple cost centers at a time.
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
     * Creates a cost center. You can create multiple cost centers at a time.
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
     * Creates an instance. If you call this operation, an order for a new instance is created and the order is automatically paid for. You cannot create Elastic Compute Service (ECS) instances or ApsaraDB RDS instances by calling the operation.
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
     * Creates an instance. If you call this operation, an order for a new instance is created and the order is automatically paid for. You cannot create Elastic Compute Service (ECS) instances or ApsaraDB RDS instances by calling the operation.
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
     * Indicates whether the call is successful. A value of true indicates that the call is successful. A value of false indicates that the call failed.
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
     * Indicates whether the call is successful. A value of true indicates that the call is successful. A value of false indicates that the call failed.
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
     * Creates a resource plan.
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
     * Creates a resource plan.
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
     * Creates a savings plan. After you call this operation, a savings plan is purchased and paid for.
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
     * Creates a savings plan. After you call this operation, a savings plan is purchased and paid for.
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
     * Deletes a cost center.
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
     * Deletes a cost center.
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
     * Query the summary information of the user "Cost Management-Budget".
     *
     * @remarks
     * This operation is in beta testing and is only available for specific users in the whitelist. Excessive calls may result in performance issues. For example, the response times out.
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
     * Query the summary information of the user "Cost Management-Budget".
     *
     * @remarks
     * This operation is in beta testing and is only available for specific users in the whitelist. Excessive calls may result in performance issues. For example, the response times out.
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
     * Queries the monthly allocated costs of instances by allocation month.
     *
     * @remarks
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
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
     * Queries the monthly allocated costs of instances by allocation month.
     *
     * @remarks
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
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
     * 实例账期月摊销成本.
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
     * 实例账期月摊销成本.
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
     * Queries the billing information about instances or billable items in a billing cycle.
     *
     * @remarks
     *   Instance bills are generated after the total bill is split. In most cases, the instance bills do not include data generated on the last day of the specified billing cycle.
     * *   The instance information may change during the billing cycle. The instance configurations and types in monthly bills are subject to the point in time when you query bills. For more information, see the corresponding bill details.
     * *   You can query data generated after June 2020 for Cloud Communications services. You can query data generated after November 2020 for Alibaba Cloud Domains.
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
     * Queries the billing information about instances or billable items in a billing cycle.
     *
     * @remarks
     *   Instance bills are generated after the total bill is split. In most cases, the instance bills do not include data generated on the last day of the specified billing cycle.
     * *   The instance information may change during the billing cycle. The instance configurations and types in monthly bills are subject to the point in time when you query bills. For more information, see the corresponding bill details.
     * *   You can query data generated after June 2020 for Cloud Communications services. You can query data generated after November 2020 for Alibaba Cloud Domains.
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
     * Queries the pricing information about an Alibaba Cloud service.
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
     * Queries the pricing information about an Alibaba Cloud service.
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
     * Queries the allocated costs of services by allocation month.
     *
     * @remarks
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
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
     * Queries the allocated costs of services by allocation month.
     *
     * @remarks
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
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
     * 产品账期月摊销成本.
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
     * 产品账期月摊销成本.
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
     * Queries the coverage details of reserved instances (RIs) or storage capacity units (SCUs).
     *
     * @remarks
     * 1\\. The queried coverage details are the same as those displayed in the table on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     * 2\\. You can call this operation to query the coverage details of RIs or SCUs.
     * 3\\. You can call this operation to query coverage details at an hourly, daily, or monthly granularity.
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
     * Queries the coverage details of reserved instances (RIs) or storage capacity units (SCUs).
     *
     * @remarks
     * 1\\. The queried coverage details are the same as those displayed in the table on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     * 2\\. You can call this operation to query the coverage details of RIs or SCUs.
     * 3\\. You can call this operation to query coverage details at an hourly, daily, or monthly granularity.
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
     * Queries the total coverage data of reserved instances (RIs) or storage capacity units (SCUs).
     *
     * @remarks
     * The queried total coverage data is the same as the aggregated data displayed on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     * You can call this operation to query the total coverage data of RIs or SCUs.
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
     * Queries the total coverage data of reserved instances (RIs) or storage capacity units (SCUs).
     *
     * @remarks
     * The queried total coverage data is the same as the aggregated data displayed on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     * You can call this operation to query the total coverage data of RIs or SCUs.
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
     * Queries the usage details of reserved instances (RIs) or storage capacity units (SCUs).
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
     * Queries the usage details of reserved instances (RIs) or storage capacity units (SCUs).
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
     * Queries the total usage data of reserved instances or storage capacity units (SCUs).
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
     * Queries the total usage data of reserved instances or storage capacity units (SCUs).
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
     * Queries the coverage summary of savings plans.
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
     * Queries the coverage summary of savings plans.
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
     *   The data that you query by calling this operation is the same as the data that is queried by billing cycles in the Split Bill module of Cost Allocation.
     * *   You can query split bills that were generated within the last 12 months by calling this operation.
     * *   You can query split bills only after you enable the [Split Bill](https://usercenter2-intl.aliyun.com/finance/split-bill) service in the User Center console.
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
     *   The data that you query by calling this operation is the same as the data that is queried by billing cycles in the Split Bill module of Cost Allocation.
     * *   You can query split bills that were generated within the last 12 months by calling this operation.
     * *   You can query split bills only after you enable the [Split Bill](https://usercenter2-intl.aliyun.com/finance/split-bill) service in the User Center console.
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
     * Queries the details of a financial relationship.
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
     * Queries the details of a financial relationship.
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
     * Queries the account information about a customer of a virtual network operator (VNO).
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
     * Queries the account information about a customer of a virtual network operator (VNO).
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
     * Queries the IDs of customers of a virtual network operator (VNO).
     *
     * @remarks
     * The system queries the IDs of customers of a VNO based on the AccessKey pair used in the request.
     *
     * @param request - GetCustomerListRequest
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
     * Queries the IDs of customers of a virtual network operator (VNO).
     *
     * @remarks
     * The system queries the IDs of customers of a VNO based on the AccessKey pair used in the request.
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
     * Queries the details of an order that belongs to your Alibaba Cloud account or distributors.
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
     * Queries the details of an order that belongs to your Alibaba Cloud account or distributors.
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
     * Queries the pay-as-you-go price of an Alibaba Cloud service.
     *
     * @remarks
     * ### Usage notes
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](https://help.aliyun.com/document_detail/95984.html).
     * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](https://help.aliyun.com/document_detail/96469.html).
     * 3.  Call the GetPayAsYouGoPrice operation to obtain the pay-as-you-go price of the service based on the returned configuration parameters.
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
     * Queries the pay-as-you-go price of an Alibaba Cloud service.
     *
     * @remarks
     * ### Usage notes
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](https://help.aliyun.com/document_detail/95984.html).
     * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](https://help.aliyun.com/document_detail/96469.html).
     * 3.  Call the GetPayAsYouGoPrice operation to obtain the pay-as-you-go price of the service based on the returned configuration parameters.
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
     * Queries the subscription price of an Alibaba Cloud service.
     *
     * @remarks
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](https://help.aliyun.com/document_detail/95984.html).
     * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](https://help.aliyun.com/document_detail/96469.html).
     * 3.  Call the GetSubscriptionPrice operation to obtain the pricing of the service based on the returned configuration parameters.
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
     * Queries the subscription price of an Alibaba Cloud service.
     *
     * @remarks
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](https://help.aliyun.com/document_detail/95984.html).
     * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](https://help.aliyun.com/document_detail/96469.html).
     * 3.  Call the GetSubscriptionPrice operation to obtain the pricing of the service based on the returned configuration parameters.
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
     * Queries the refundable amount for an instance from which you want to unsubscribe.
     *
     * @remarks
     * 1.  **Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.**
     * 2.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/en/user-center/user-guide/refund-rules).
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
     * Queries the refundable amount for an instance from which you want to unsubscribe.
     *
     * @remarks
     * 1.  **Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.**
     * 2.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/en/user-center/user-guide/refund-rules).
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
     * Adds or removes permissions granted to a member in a financial relationship.
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
     * Adds or removes permissions granted to a member in a financial relationship.
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
     * Modifies one or more cost centers.
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
     * Modifies one or more cost centers.
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
     * Modifies the configurations of an instance. When you call this operation, the system generates a modification order and automatically completes the payment. You cannot call this operation to modify the configurations of an Elastic Compute Service (ECS) instance or ApsaraDB RDS instance. To modify the configurations of an ECS or ApsaraDB RDS instance, call the dedicated operation of the corresponding service.
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
     * Modifies the configurations of an instance. When you call this operation, the system generates a modification order and automatically completes the payment. You cannot call this operation to modify the configurations of an Elastic Compute Service (ECS) instance or ApsaraDB RDS instance. To modify the configurations of an ECS or ApsaraDB RDS instance, call the dedicated operation of the corresponding service.
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
     * Queries the balance of your account.
     *
     * @param request - QueryAccountBalanceRequest
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
     * Queries the balance of your account.
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
     * Queries the bills of your Alibaba Cloud account within a billing cycle. You can summarize the bills by resource owner.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   Account bills are summarized based on instance bills. In most cases, the account bills do not include the data generated on the last day of the specified period.
     * *   You can query the data generated in June 2020 or later for Cloud Communications services. However, the query results do not include the data of Alibaba Cloud Domains.
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
     * Queries the bills of your Alibaba Cloud account within a billing cycle. You can summarize the bills by resource owner.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   Account bills are summarized based on instance bills. In most cases, the account bills do not include the data generated on the last day of the specified period.
     * *   You can query the data generated in June 2020 or later for Cloud Communications services. However, the query results do not include the data of Alibaba Cloud Domains.
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
     * Queries the details of transactions within your account.
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
     * Queries the details of transactions within your account.
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
     * Queries transactions within your Alibaba Cloud account.
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
     * Queries transactions within your Alibaba Cloud account.
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
     * Queries available instances.
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
     * Queries available instances.
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
     * Queries the bills in a billing cycle.
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
     * Queries the bills in a billing cycle.
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
     * Queries the bill overview information in a billing cycle.
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
     * Queries the bill overview information in a billing cycle.
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
     * Queries the subscribed bills that are stored in Object Storage Service (OSS) bucket.
     *
     * @param request - QueryBillToOSSSubscriptionRequest
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
     * Queries the subscribed bills that are stored in Object Storage Service (OSS) bucket.
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
     * Queries the information about vouchers.
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
     * Queries the information about vouchers.
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
     * Queries the information about a service based on the service code.
     *
     * @remarks
     * You can call this operation to query the information about a service based on the service code.
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
     * Queries the information about a service based on the service code.
     *
     * @remarks
     * You can call this operation to query the information about a service based on the service code.
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
     * Queries all cost centers within the current node of the cost center tree. If the ParentUnitId parameter is set to -1, all cost centers are queried.
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
     * Queries all cost centers within the current node of the cost center tree. If the ParentUnitId parameter is set to -1, all cost centers are queried.
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
     * Queries the resource instances that are allocated to a cost center. If the unitId parameter is set to 0, the unallocated primary resource instances and sub-resource instances are queried.
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
     * Queries the resource instances that are allocated to a cost center. If the unitId parameter is set to 0, the unallocated primary resource instances and sub-resource instances are queried.
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
     * Queries the addresses to which invoices are mailed.
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
     * Queries the addresses to which invoices are mailed.
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
     * *   Only the usage records within the past year can be queried.
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
     * *   Only the usage records within the past year can be queried.
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
     * Queries the information about the orders for which you want to apply for invoices.
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
     * Queries the information about the orders for which you want to apply for invoices.
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
     * Queries the information about a financial account.
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
     * Queries the information about a financial account.
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
     * Queries the bills of instances or billable items in a billing cycle.
     *
     * @remarks
     * ##
     * *   This API operation has been upgraded to DescribeInstanceBill. We recommend that you call the [DescribeInstanceBill](https://help.aliyun.com/document_detail/209402.html) operation to query the bills of instances or billable items in a billing cycle. You can call the QueryInstanceBill operation to query a maximum of 50,000 data rows in a bill.
     * *   Instance bills are generated after bills are split. In most cases, the instance bills do not include data generated on the last day of the specified period.
     * *   The instance information changes within a billing cycle. The instance configurations and specifications and the time when the instance was used in the billing cycle are all recorded. For more information, see the corresponding bill details.
     * *   You can query the data generated in June 2020 or later for Cloud Communications services, and the data generated in November 2020 or later for Alibaba Cloud Domains.
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
     * Queries the bills of instances or billable items in a billing cycle.
     *
     * @remarks
     * ##
     * *   This API operation has been upgraded to DescribeInstanceBill. We recommend that you call the [DescribeInstanceBill](https://help.aliyun.com/document_detail/209402.html) operation to query the bills of instances or billable items in a billing cycle. You can call the QueryInstanceBill operation to query a maximum of 50,000 data rows in a bill.
     * *   Instance bills are generated after bills are split. In most cases, the instance bills do not include data generated on the last day of the specified period.
     * *   The instance information changes within a billing cycle. The instance configurations and specifications and the time when the instance was used in the billing cycle are all recorded. For more information, see the corresponding bill details.
     * *   You can query the data generated in June 2020 or later for Cloud Communications services, and the data generated in November 2020 or later for Alibaba Cloud Domains.
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
     * Queries instances by tag.
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
     * Queries instances by tag.
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
     * The code of the service.
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
     * The code of the service.
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
     * Queries the information about invoice titles.
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
     * Queries the information about invoice titles.
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
     * Queries the orders of your Alibaba Cloud account or distributors. By default, orders within the last hour are queried. To query earlier orders, specify the CreateTimeStart and CreateTimeEnd parameters.
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
     * Queries the orders of your Alibaba Cloud account or distributors. By default, orders within the last hour are queried. To query earlier orders, specify the CreateTimeStart and CreateTimeEnd parameters.
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
     * Queries, by relationship ID, permissions granted to accounts between which a management-member relationship is established.
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
     * Queries, by relationship ID, permissions granted to accounts between which a management-member relationship is established.
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
     * Queries prepaid cards.
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
     * Queries prepaid cards.
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
     * Queries the billable items of a service.
     *
     * @remarks
     * You can call this operation to query the billable items of a service. A billable item is the minimum unit used to calculate costs.
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
     * Queries the billable items of a service.
     *
     * @remarks
     * You can call this operation to query the billable items of a service. A billable item is the minimum unit used to calculate costs.
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
     * Queries the information about all Alibaba Cloud services.
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
     * Queries the information about all Alibaba Cloud services.
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
     * Queries the usage details of a reserved instance (RI).
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
     * Queries the usage details of a reserved instance (RI).
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
     * Queries the information about a redemption coupon.
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
     * Queries the information about a redemption coupon.
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
     * Queries the members of a management account.
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
     * Queries the members of a management account.
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
     * Indicates whether the call is successful. A value of true indicates that the call is successful. A value of false indicates that the call failed.
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
     * Indicates whether the call is successful. A value of true indicates that the call is successful. A value of false indicates that the call failed.
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
     * 查询用户的信控预警阀值,该接口暂未测试启用.
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
     * 查询用户的信控预警阀值,该接口暂未测试启用.
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
     * Queries the instances of a resource plan. You can query the resource plans that are expired within one year.
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
     * Queries the instances of a resource plan. You can query the resource plans that are expired within one year.
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
     * Queries the deduction details of savings plans.
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
     * Queries the deduction details of savings plans.
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
     * Queries discounts on savings plans.
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
     * Queries discounts on savings plans.
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
     * Queries the information about savings plan instances of the current user.
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
     * Queries the information about savings plan instances of the current user.
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
     * The code of the service.
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
     * The code of the service.
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
     * Queries the stock keeping units (SKUs) of a service. In most cases, a service has one or more SKUs. A service may even have tens of thousands of SKUs. You can call this operation to query the SKUs of a specific service and the prices of the SKUs. You can configure request parameters to query the specified SKUs based on the configurations of the SKUs.
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
     * Queries the stock keeping units (SKUs) of a service. In most cases, a service has one or more SKUs. A service may even have tens of thousands of SKUs. You can call this operation to query the SKUs of a specific service and the prices of the SKUs. You can configure request parameters to query the specified SKUs based on the configurations of the SKUs.
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
     * Queries split bills.
     *
     * @remarks
     *   This API operation has been upgraded to DescribeSplitItemBill. We recommend that you call the [DescribeSplitItemBill](https://help.aliyun.com/document_detail/208169.html) operation to query split bills. You can call the QuerySplitItemBill operation to query a maximum of 50,000 data rows in a bill.
     * *   The data queried by calling the QuerySplitItemBill operation is consistent with the data that is displayed for the specified billing cycle on the Split Bill page in User Center.
     * *   You can call this operation to query split bills generated within the last 12 months.
     * *   This operation returns split bills only after you activate the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in User Center.
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
     * Queries split bills.
     *
     * @remarks
     *   This API operation has been upgraded to DescribeSplitItemBill. We recommend that you call the [DescribeSplitItemBill](https://help.aliyun.com/document_detail/208169.html) operation to query split bills. You can call the QuerySplitItemBill operation to query a maximum of 50,000 data rows in a bill.
     * *   The data queried by calling the QuerySplitItemBill operation is consistent with the data that is displayed for the specified billing cycle on the Split Bill page in User Center.
     * *   You can call this operation to query split bills generated within the last 12 months.
     * *   This operation returns split bills only after you activate the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in User Center.
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
     * Queries the usage data of an Alibaba Cloud service.
     *
     * @remarks
     * You can call this operation to query the usage data of an Alibaba Cloud service. Take note of the following items:
     * *   The service code that you specify for querying the usage data of a specific Alibaba Cloud service must be valid. You can query the usage data by hour or by day.
     * *   The time that you specify must follow the ISO8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *     *   Latency exists in data pushes. Therefore, if you set the DataType parameter to Hour, the integrity of usage data recorded in the last 24 hours can be ensured. If you set the DataType parameter to Day, the integrity of usage data recorded in the last two days can be ensured.
     *     *   You can query the usage data that is recorded in the last quarter.
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
     * Queries the usage data of an Alibaba Cloud service.
     *
     * @remarks
     * You can call this operation to query the usage data of an Alibaba Cloud service. Take note of the following items:
     * *   The service code that you specify for querying the usage data of a specific Alibaba Cloud service must be valid. You can query the usage data by hour or by day.
     * *   The time that you specify must follow the ISO8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *     *   Latency exists in data pushes. Therefore, if you set the DataType parameter to Hour, the integrity of usage data recorded in the last 24 hours can be ensured. If you set the DataType parameter to Day, the integrity of usage data recorded in the last two days can be ensured.
     *     *   You can query the usage data that is recorded in the last quarter.
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
     * 1.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     * 2.  Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.
     * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/en/user-center/refund-rules).
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
     * 1.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     * 2.  Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.
     * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/en/user-center/refund-rules).
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
     * Terminates a financial relationship between the management account and a member.
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
     * Terminates a financial relationship between the management account and a member.
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
     * 续费变配接口.
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
     * 续费变配接口.
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
     * Renews a specified instance. You cannot call this operation to renew Elastic Compute Service (ECS) instances, ApsaraDB RDS instances, or ApsaraDB for Redis instances. To renew these types of instances, call the dedicated operation of the corresponding service.
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
     * Renews a specified instance. You cannot call this operation to renew Elastic Compute Service (ECS) instances, ApsaraDB RDS instances, or ApsaraDB for Redis instances. To renew these types of instances, call the dedicated operation of the corresponding service.
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
     * Renews a resource plan.
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
     * Renews a resource plan.
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
     * Subscribes to the bills that are stored in Object Storage Service (OSS) buckets.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   You can subscribe to only one type of bill at a time.
     * *   The bills generated on the previous day are pushed on a daily basis the next day after you subscribe to the bills. The full-data bills for the previous month are pushed on the fourth day of each month. The monthly bills in the PDF format for the previous month are pushed on the fourth day of each month.
     * *   The daily bills may be delayed. The delayed bills are pushed the next day after they are generated. The delayed bills may include the bills that should have been pushed on the previous day. We recommend that you query the full-data bills for the previous month at the beginning of each month.
     * *   The bill subscriber must have the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     * *   The SubscribeBillToOSS operation has the same functionality as the Save Expense Details to OSS Bucket feature in User Center.
     * *   To subscribe to the bills stored in an OSS bucket, make sure that the directory name specified for the OSS bucket conforms to the following naming rules:
     * 1.  1.  The directory name can contain only UTF-8 characters and cannot contain emoticons.
     * 2.  2.  Forward slashes (/) are used to separate paths and can be used to create subdirectories with ease. The directory name cannot start with a forward slash (/), a backslash (\\\\), or consecutive forward slashes (/).
     * 3.  3.  The name of a subdirectory cannot be set to two consecutive periods (..).
     * 4.  4.  The directory name must be 1 to 254 characters in length.
     * *   File names:
     *     *   **BillingItemDetailForBillingPeriod** (Detailed bills of billable items)
     *         *   File name format for a daily push: `UID_BillingItemDetail_YYYYMMDD`. Example: `169**_BillingItemDetail_20190310`.
     *         *   File name format for a full-data push at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`. Example: `169**_BillingItemDetail_201903`.
     *     *   **InstanceDetailForBillingPeriod** (Detailed bills of instances)
     *         *   File name format for a daily push: `UID_InstanceDetail_YYYYMMDD`. Example: `169**_InstanceDetail_20190310`.
     *         *   File name format for a full-data push at the beginning of the next month: `UID_InstanceDetail_YYYYMM`. Example: `169**_InstanceDetail_201903`.
     *     *   **InstanceDetailMonthly** (Instance-based bills summarized by billing cycle)
     *         *   File name format for a daily push: `UID_InstanceDetailMonthly_YYYYMM`. Example: `169**_InstanceDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **BillingItemDetailMonthly** (Billable item-based bills summarized by billing cycle)
     *         *   File name format for a daily push: `UID_BillingItemDetailMonthly_YYYYMM`. Example: `169**_BillingItemDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **SplitItemDetailDaily** (Split bills summarized by day)
     *         *   File name format for a daily push: `UID_SplitItemDetailDaily_YYYYMM`. Example: `169**_SplitItemDetailDaily_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **MonthBill** (Monthly bill in the PDF format)
     *         *   File name format for a monthly push: `UID_MonthBill_YYYYMM`. Example: `169**_MonthBill_201903`. The bill for the previous month is pushed on the fourth day of each month.
     * *   The bills of the MonthBill type are PDF files, whereas the bills of other types are CSV files. If the number of data rows in a bill exceeds a threshold, the bill is automatically split into multiple CSV files. Then, the multiple CSV files are automatically merged and compressed into a ZIP file that has the same name format as the original file.
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
     * Subscribes to the bills that are stored in Object Storage Service (OSS) buckets.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   You can subscribe to only one type of bill at a time.
     * *   The bills generated on the previous day are pushed on a daily basis the next day after you subscribe to the bills. The full-data bills for the previous month are pushed on the fourth day of each month. The monthly bills in the PDF format for the previous month are pushed on the fourth day of each month.
     * *   The daily bills may be delayed. The delayed bills are pushed the next day after they are generated. The delayed bills may include the bills that should have been pushed on the previous day. We recommend that you query the full-data bills for the previous month at the beginning of each month.
     * *   The bill subscriber must have the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     * *   The SubscribeBillToOSS operation has the same functionality as the Save Expense Details to OSS Bucket feature in User Center.
     * *   To subscribe to the bills stored in an OSS bucket, make sure that the directory name specified for the OSS bucket conforms to the following naming rules:
     * 1.  1.  The directory name can contain only UTF-8 characters and cannot contain emoticons.
     * 2.  2.  Forward slashes (/) are used to separate paths and can be used to create subdirectories with ease. The directory name cannot start with a forward slash (/), a backslash (\\\\), or consecutive forward slashes (/).
     * 3.  3.  The name of a subdirectory cannot be set to two consecutive periods (..).
     * 4.  4.  The directory name must be 1 to 254 characters in length.
     * *   File names:
     *     *   **BillingItemDetailForBillingPeriod** (Detailed bills of billable items)
     *         *   File name format for a daily push: `UID_BillingItemDetail_YYYYMMDD`. Example: `169**_BillingItemDetail_20190310`.
     *         *   File name format for a full-data push at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`. Example: `169**_BillingItemDetail_201903`.
     *     *   **InstanceDetailForBillingPeriod** (Detailed bills of instances)
     *         *   File name format for a daily push: `UID_InstanceDetail_YYYYMMDD`. Example: `169**_InstanceDetail_20190310`.
     *         *   File name format for a full-data push at the beginning of the next month: `UID_InstanceDetail_YYYYMM`. Example: `169**_InstanceDetail_201903`.
     *     *   **InstanceDetailMonthly** (Instance-based bills summarized by billing cycle)
     *         *   File name format for a daily push: `UID_InstanceDetailMonthly_YYYYMM`. Example: `169**_InstanceDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **BillingItemDetailMonthly** (Billable item-based bills summarized by billing cycle)
     *         *   File name format for a daily push: `UID_BillingItemDetailMonthly_YYYYMM`. Example: `169**_BillingItemDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **SplitItemDetailDaily** (Split bills summarized by day)
     *         *   File name format for a daily push: `UID_SplitItemDetailDaily_YYYYMM`. Example: `169**_SplitItemDetailDaily_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *     *   **MonthBill** (Monthly bill in the PDF format)
     *         *   File name format for a monthly push: `UID_MonthBill_YYYYMM`. Example: `169**_MonthBill_201903`. The bill for the previous month is pushed on the fourth day of each month.
     * *   The bills of the MonthBill type are PDF files, whereas the bills of other types are CSV files. If the number of data rows in a bill exceeds a threshold, the bill is automatically split into multiple CSV files. Then, the multiple CSV files are automatically merged and compressed into a ZIP file that has the same name format as the original file.
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
     * Add tags to resources.
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
     * Add tags to resources.
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
     * Unsubscribes from the bills that are stored in Object Storage Service (OSS) buckets.
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
     * Unsubscribes from the bills that are stored in Object Storage Service (OSS) buckets.
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
