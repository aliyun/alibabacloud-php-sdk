<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageTotalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BssOpenApi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'business.aliyuncs.com',
            'cn-shanghai'                 => 'business.aliyuncs.com',
            'ap-southeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'business.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'business.ap-southeast-1.aliyuncs.com',
            'cn-beijing'                  => 'business.aliyuncs.com',
            'cn-beijing-finance-1'        => 'business.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'business.aliyuncs.com',
            'cn-beijing-gov-1'            => 'business.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'business.aliyuncs.com',
            'cn-chengdu'                  => 'business.aliyuncs.com',
            'cn-edge-1'                   => 'business.aliyuncs.com',
            'cn-fujian'                   => 'business.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'business.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'business.aliyuncs.com',
            'cn-hangzhou-finance'         => 'business.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'business.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'business.aliyuncs.com',
            'cn-hongkong'                 => 'business.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'business.aliyuncs.com',
            'cn-huhehaote'                => 'business.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'business.aliyuncs.com',
            'cn-north-2-gov-1'            => 'business.aliyuncs.com',
            'cn-qingdao'                  => 'business.aliyuncs.com',
            'cn-qingdao-nebula'           => 'business.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'business.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'business.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'business.aliyuncs.com',
            'cn-shanghai-inner'           => 'business.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'business.aliyuncs.com',
            'cn-shenzhen'                 => 'business.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'business.aliyuncs.com',
            'cn-shenzhen-inner'           => 'business.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'business.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'business.aliyuncs.com',
            'cn-wuhan'                    => 'business.aliyuncs.com',
            'cn-wulanchabu'               => 'business.aliyuncs.com',
            'cn-yushanfang'               => 'business.aliyuncs.com',
            'cn-zhangbei'                 => 'business.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'business.aliyuncs.com',
            'cn-zhangjiakou'              => 'business.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'business.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'business.aliyuncs.com',
            'eu-central-1'                => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'business.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'business.ap-southeast-1.aliyuncs.com',
            'us-east-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'business.ap-southeast-1.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 1\\. For more information about a financial relationship, see [Financial relationships](https://help.aliyun.com/document_detail/100376.html?spm=a2c4g.11186623.6.563.52a83908ypl4yE) or [Financial relationships](https://www.alibabacloud.com/help/en/doc-detail/116383.html). 2. If enterprise names used by the management account and a member for real-name verification are the same, you do not need to call an API operation for confirmation. Otherwise, you must call the ConfirmRelation operation for confirmation.
     *   *
     * @param AddAccountRelationRequest $request AddAccountRelationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAccountRelationResponse AddAccountRelationResponse
     */
    public function addAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childNick)) {
            $query['ChildNick'] = $request->childNick;
        }
        if (!Utils::isUnset($request->childUserId)) {
            $query['ChildUserId'] = $request->childUserId;
        }
        if (!Utils::isUnset($request->parentUserId)) {
            $query['ParentUserId'] = $request->parentUserId;
        }
        if (!Utils::isUnset($request->permissionCodes)) {
            $query['PermissionCodes'] = $request->permissionCodes;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->roleCodes)) {
            $query['RoleCodes'] = $request->roleCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddAccountRelation',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1\\. For more information about a financial relationship, see [Financial relationships](https://help.aliyun.com/document_detail/100376.html?spm=a2c4g.11186623.6.563.52a83908ypl4yE) or [Financial relationships](https://www.alibabacloud.com/help/en/doc-detail/116383.html). 2. If enterprise names used by the management account and a member for real-name verification are the same, you do not need to call an API operation for confirmation. Otherwise, you must call the ConfirmRelation operation for confirmation.
     *   *
     * @param AddAccountRelationRequest $request AddAccountRelationRequest
     *
     * @return AddAccountRelationResponse AddAccountRelationResponse
     */
    public function addAccountRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccountRelationWithOptions($request, $runtime);
    }

    /**
     * @param AllocateCostUnitResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fromUnitId)) {
            $query['FromUnitId'] = $request->fromUnitId;
        }
        if (!Utils::isUnset($request->fromUnitUserId)) {
            $query['FromUnitUserId'] = $request->fromUnitUserId;
        }
        if (!Utils::isUnset($request->resourceInstanceList)) {
            $query['ResourceInstanceList'] = $request->resourceInstanceList;
        }
        if (!Utils::isUnset($request->toUnitId)) {
            $query['ToUnitId'] = $request->toUnitId;
        }
        if (!Utils::isUnset($request->toUnitUserId)) {
            $query['ToUnitUserId'] = $request->toUnitUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateCostUnitResource',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateCostUnitResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ApplyInvoiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressId)) {
            $query['AddressId'] = $request->addressId;
        }
        if (!Utils::isUnset($request->applyUserNick)) {
            $query['ApplyUserNick'] = $request->applyUserNick;
        }
        if (!Utils::isUnset($request->customerId)) {
            $query['CustomerId'] = $request->customerId;
        }
        if (!Utils::isUnset($request->invoiceAmount)) {
            $query['InvoiceAmount'] = $request->invoiceAmount;
        }
        if (!Utils::isUnset($request->invoiceByAmount)) {
            $query['InvoiceByAmount'] = $request->invoiceByAmount;
        }
        if (!Utils::isUnset($request->invoicingType)) {
            $query['InvoicingType'] = $request->invoicingType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->processWay)) {
            $query['ProcessWay'] = $request->processWay;
        }
        if (!Utils::isUnset($request->selectedIds)) {
            $query['SelectedIds'] = $request->selectedIds;
        }
        if (!Utils::isUnset($request->userRemark)) {
            $query['UserRemark'] = $request->userRemark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyInvoice',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ChangeResellerConsumeAmountRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeResellerConsumeAmountResponse
     */
    public function changeResellerConsumeAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adjustType)) {
            $query['AdjustType'] = $request->adjustType;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->currency)) {
            $query['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->extendMap)) {
            $query['ExtendMap'] = $request->extendMap;
        }
        if (!Utils::isUnset($request->outBizId)) {
            $query['OutBizId'] = $request->outBizId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResellerConsumeAmount',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResellerConsumeAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 1\\. A member needs to confirm an invitation only if a financial management relationship is established between the management account and the member and enterprise names used by the management account and the member for real-name verification are different. 2. The permissions to be confirmed must be the same as those granted to the member when the management account initiates the invitation.
     *   *
     * @param ConfirmRelationRequest $request ConfirmRelationRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmRelationResponse ConfirmRelationResponse
     */
    public function confirmRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childUserId)) {
            $query['ChildUserId'] = $request->childUserId;
        }
        if (!Utils::isUnset($request->confirmCode)) {
            $query['ConfirmCode'] = $request->confirmCode;
        }
        if (!Utils::isUnset($request->parentUserId)) {
            $query['ParentUserId'] = $request->parentUserId;
        }
        if (!Utils::isUnset($request->permissionCodes)) {
            $query['PermissionCodes'] = $request->permissionCodes;
        }
        if (!Utils::isUnset($request->relationId)) {
            $query['RelationId'] = $request->relationId;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmRelation',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1\\. A member needs to confirm an invitation only if a financial management relationship is established between the management account and the member and enterprise names used by the management account and the member for real-name verification are different. 2. The permissions to be confirmed must be the same as those granted to the member when the management account initiates the invitation.
     *   *
     * @param ConfirmRelationRequest $request ConfirmRelationRequest
     *
     * @return ConfirmRelationResponse ConfirmRelationResponse
     */
    public function confirmRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmRelationWithOptions($request, $runtime);
    }

    /**
     * @param ConvertChargeTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertChargeType',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to create an account so as to establish a master-member financial relationship.
     *   *
     * @param CreateAgAccountRequest $request CreateAgAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAgAccountResponse CreateAgAccountResponse
     */
    public function createAgAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountAttr)) {
            $query['AccountAttr'] = $request->accountAttr;
        }
        if (!Utils::isUnset($request->cityName)) {
            $query['CityName'] = $request->cityName;
        }
        if (!Utils::isUnset($request->enterpriseName)) {
            $query['EnterpriseName'] = $request->enterpriseName;
        }
        if (!Utils::isUnset($request->firstName)) {
            $query['FirstName'] = $request->firstName;
        }
        if (!Utils::isUnset($request->lastName)) {
            $query['LastName'] = $request->lastName;
        }
        if (!Utils::isUnset($request->loginEmail)) {
            $query['LoginEmail'] = $request->loginEmail;
        }
        if (!Utils::isUnset($request->nationCode)) {
            $query['NationCode'] = $request->nationCode;
        }
        if (!Utils::isUnset($request->postcode)) {
            $query['Postcode'] = $request->postcode;
        }
        if (!Utils::isUnset($request->provinceName)) {
            $query['ProvinceName'] = $request->provinceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAgAccount',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAgAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to create an account so as to establish a master-member financial relationship.
     *   *
     * @param CreateAgAccountRequest $request CreateAgAccountRequest
     *
     * @return CreateAgAccountResponse CreateAgAccountResponse
     */
    public function createAgAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->unitEntityList)) {
            $query['UnitEntityList'] = $request->unitEntityList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCostUnit',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->logistics)) {
            $query['Logistics'] = $request->logistics;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameter)) {
            $query['Parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->renewPeriod)) {
            $query['RenewPeriod'] = $request->renewPeriod;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateResellerUserQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->currency)) {
            $query['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->outBizId)) {
            $query['OutBizId'] = $request->outBizId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResellerUserQuota',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResellerUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateResourcePackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->effectiveDate)) {
            $query['EffectiveDate'] = $request->effectiveDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourcePackage',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateSavingsPlansInstanceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSavingsPlansInstanceResponse
     */
    public function createSavingsPlansInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSavingsPlansInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendMap)) {
            $request->extendMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendMap, 'ExtendMap', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->effectiveDate)) {
            $query['EffectiveDate'] = $request->effectiveDate;
        }
        if (!Utils::isUnset($request->extendMapShrink)) {
            $query['ExtendMap'] = $request->extendMapShrink;
        }
        if (!Utils::isUnset($request->payMode)) {
            $query['PayMode'] = $request->payMode;
        }
        if (!Utils::isUnset($request->poolValue)) {
            $query['PoolValue'] = $request->poolValue;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->specType)) {
            $query['SpecType'] = $request->specType;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSavingsPlansInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSavingsPlansInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerUid)) {
            $query['OwnerUid'] = $request->ownerUid;
        }
        if (!Utils::isUnset($request->unitId)) {
            $query['UnitId'] = $request->unitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCostUnit',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * This operation is in beta testing and is only available for specific users in the whitelist. Excessive calls may result in performance issues. For example, the response times out.
     *   *
     * @param DescribeCostBudgetsSummaryRequest $request DescribeCostBudgetsSummaryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCostBudgetsSummaryResponse DescribeCostBudgetsSummaryResponse
     */
    public function describeCostBudgetsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->budgetName)) {
            $query['BudgetName'] = $request->budgetName;
        }
        if (!Utils::isUnset($request->budgetStatus)) {
            $query['BudgetStatus'] = $request->budgetStatus;
        }
        if (!Utils::isUnset($request->budgetType)) {
            $query['BudgetType'] = $request->budgetType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCostBudgetsSummary',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCostBudgetsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is in beta testing and is only available for specific users in the whitelist. Excessive calls may result in performance issues. For example, the response times out.
     *   *
     * @param DescribeCostBudgetsSummaryRequest $request DescribeCostBudgetsSummaryRequest
     *
     * @return DescribeCostBudgetsSummaryResponse DescribeCostBudgetsSummaryResponse
     */
    public function describeCostBudgetsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCostBudgetsSummaryWithOptions($request, $runtime);
    }

    /**
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
     *   *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodRequest $request DescribeInstanceAmortizedCostByAmortizationPeriodRequest
     * @param RuntimeOptions                                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodResponse DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->consumePeriodFilter)) {
            $body['ConsumePeriodFilter'] = $request->consumePeriodFilter;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAmortizedCostByAmortizationPeriod',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
     *   *
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodRequest $request DescribeInstanceAmortizedCostByAmortizationPeriodRequest
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodResponse DescribeInstanceAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAmortizedCostByAmortizationPeriodWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAmortizedCostByAmortizationPeriodDateRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse
     */
    public function describeInstanceAmortizedCostByAmortizationPeriodDateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amortizationDateEnd)) {
            $body['AmortizationDateEnd'] = $request->amortizationDateEnd;
        }
        if (!Utils::isUnset($request->amortizationDateStart)) {
            $body['AmortizationDateStart'] = $request->amortizationDateStart;
        }
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAmortizedCostByAmortizationPeriodDate',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAmortizedCostByAmortizationPeriodDateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeInstanceAmortizedCostByConsumePeriodRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return DescribeInstanceAmortizedCostByConsumePeriodResponse
     */
    public function describeInstanceAmortizedCostByConsumePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amortizationPeriodFilter)) {
            $body['AmortizationPeriodFilter'] = $request->amortizationPeriodFilter;
        }
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAmortizedCostByConsumePeriod',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAmortizedCostByConsumePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   Instance bills are generated after the total bill is split. In most cases, the instance bills do not include data generated on the last day of the specified billing cycle.
     *   * *   The instance information may change during the billing cycle. The instance configurations and types in monthly bills are subject to the point in time when you query bills. For more information, see the corresponding bill details.
     *   * *   You can query data generated after June 2020 for Cloud Communications services. You can query data generated after November 2020 for Alibaba Cloud Domains.
     *   *
     * @param DescribeInstanceBillRequest $request DescribeInstanceBillRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceBillResponse DescribeInstanceBillResponse
     */
    public function describeInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->billingDate)) {
            $query['BillingDate'] = $request->billingDate;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->instanceID)) {
            $query['InstanceID'] = $request->instanceID;
        }
        if (!Utils::isUnset($request->isBillingItem)) {
            $query['IsBillingItem'] = $request->isBillingItem;
        }
        if (!Utils::isUnset($request->isHideZeroCharge)) {
            $query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipCode)) {
            $query['PipCode'] = $request->pipCode;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Instance bills are generated after the total bill is split. In most cases, the instance bills do not include data generated on the last day of the specified billing cycle.
     *   * *   The instance information may change during the billing cycle. The instance configurations and types in monthly bills are subject to the point in time when you query bills. For more information, see the corresponding bill details.
     *   * *   You can query data generated after June 2020 for Cloud Communications services. You can query data generated after November 2020 for Alibaba Cloud Domains.
     *   *
     * @param DescribeInstanceBillRequest $request DescribeInstanceBillRequest
     *
     * @return DescribeInstanceBillResponse DescribeInstanceBillResponse
     */
    public function describeInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceBillWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceDeductAmortizedCostByAmortizationPeriodRequest $request
     * @param RuntimeOptions                                                 $runtime
     *
     * @return DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeInstanceDeductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $body['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDeductAmortizedCostByAmortizationPeriod',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDeductAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePricingModuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePricingModule',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePricingModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
     *   *
     * @param DescribeProductAmortizedCostByAmortizationPeriodRequest $request DescribeProductAmortizedCostByAmortizationPeriodRequest
     * @param RuntimeOptions                                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProductAmortizedCostByAmortizationPeriodResponse DescribeProductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeProductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->consumePeriodFilter)) {
            $body['ConsumePeriodFilter'] = $request->consumePeriodFilter;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProductAmortizedCostByAmortizationPeriod',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductAmortizedCostByAmortizationPeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can view and export the allocated costs of the current month after 10:00 on the fourth day of the next month. The allocated costs of a single allocation month may involve orders or bills in different billing cycles. If a historical allocated amount is incorrect, the historical allocated costs need to be adjusted. As a result, the allocated costs displayed for a single allocation month may be different at different time points.
     *   *
     * @param DescribeProductAmortizedCostByAmortizationPeriodRequest $request DescribeProductAmortizedCostByAmortizationPeriodRequest
     *
     * @return DescribeProductAmortizedCostByAmortizationPeriodResponse DescribeProductAmortizedCostByAmortizationPeriodResponse
     */
    public function describeProductAmortizedCostByAmortizationPeriod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProductAmortizedCostByAmortizationPeriodWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProductAmortizedCostByConsumePeriodRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeProductAmortizedCostByConsumePeriodResponse
     */
    public function describeProductAmortizedCostByConsumePeriodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amortizationPeriodFilter)) {
            $body['AmortizationPeriodFilter'] = $request->amortizationPeriodFilter;
        }
        if (!Utils::isUnset($request->billOwnerIdList)) {
            $body['BillOwnerIdList'] = $request->billOwnerIdList;
        }
        if (!Utils::isUnset($request->billUserIdList)) {
            $body['BillUserIdList'] = $request->billUserIdList;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $body['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->costUnitCode)) {
            $body['CostUnitCode'] = $request->costUnitCode;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productDetail)) {
            $body['ProductDetail'] = $request->productDetail;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $body['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProductAmortizedCostByConsumePeriod',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProductAmortizedCostByConsumePeriodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 1\\. The queried coverage details are the same as those displayed in the table on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     *   * 2\\. You can call this operation to query the coverage details of RIs or SCUs.
     *   * 3\\. You can call this operation to query coverage details at an hourly, daily, or monthly granularity.
     *   *
     * @param DescribeResourceCoverageDetailRequest $request DescribeResourceCoverageDetailRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceCoverageDetailResponse DescribeResourceCoverageDetailResponse
     */
    public function describeResourceCoverageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceCoverageDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceCoverageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1\\. The queried coverage details are the same as those displayed in the table on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     *   * 2\\. You can call this operation to query the coverage details of RIs or SCUs.
     *   * 3\\. You can call this operation to query coverage details at an hourly, daily, or monthly granularity.
     *   *
     * @param DescribeResourceCoverageDetailRequest $request DescribeResourceCoverageDetailRequest
     *
     * @return DescribeResourceCoverageDetailResponse DescribeResourceCoverageDetailResponse
     */
    public function describeResourceCoverageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceCoverageDetailWithOptions($request, $runtime);
    }

    /**
     * The queried total coverage data is the same as the aggregated data displayed on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     *   * You can call this operation to query the total coverage data of RIs or SCUs.
     *   *
     * @param DescribeResourceCoverageTotalRequest $request DescribeResourceCoverageTotalRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceCoverageTotalResponse DescribeResourceCoverageTotalResponse
     */
    public function describeResourceCoverageTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceCoverageTotal',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceCoverageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The queried total coverage data is the same as the aggregated data displayed on the Coverage tab of the Manage Reserved Instances page in the Billing Management console.
     *   * You can call this operation to query the total coverage data of RIs or SCUs.
     *   *
     * @param DescribeResourceCoverageTotalRequest $request DescribeResourceCoverageTotalRequest
     *
     * @return DescribeResourceCoverageTotalResponse DescribeResourceCoverageTotalResponse
     */
    public function describeResourceCoverageTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceCoverageTotalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePackageProductRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourcePackageProduct',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourcePackageProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeResourceUsageDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeResourceUsageDetailResponse
     */
    public function describeResourceUsageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceUsageDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceUsageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeResourceUsageTotalRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeResourceUsageTotalResponse
     */
    public function describeResourceUsageTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceUsageTotal',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceUsageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSavingsPlansCoverageDetailRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSavingsPlansCoverageDetailResponse
     */
    public function describeSavingsPlansCoverageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSavingsPlansCoverageDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSavingsPlansCoverageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSavingsPlansCoverageTotalRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSavingsPlansCoverageTotalResponse
     */
    public function describeSavingsPlansCoverageTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSavingsPlansCoverageTotal',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSavingsPlansCoverageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSavingsPlansUsageDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSavingsPlansUsageDetailResponse
     */
    public function describeSavingsPlansUsageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSavingsPlansUsageDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSavingsPlansUsageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSavingsPlansUsageTotalRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSavingsPlansUsageTotalResponse
     */
    public function describeSavingsPlansUsageTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->endPeriod)) {
            $query['EndPeriod'] = $request->endPeriod;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        if (!Utils::isUnset($request->startPeriod)) {
            $query['StartPeriod'] = $request->startPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSavingsPlansUsageTotal',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSavingsPlansUsageTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   The data that you query by calling this operation is the same as the data that is queried by billing cycles in the Split Bill module of Cost Allocation.
     *   * *   You can query split bills that were generated within the last 12 months by calling this operation.
     *   * *   You can query split bills only after you enable the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in the User Center console.
     *   *
     * @param DescribeSplitItemBillRequest $request DescribeSplitItemBillRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSplitItemBillResponse DescribeSplitItemBillResponse
     */
    public function describeSplitItemBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->billingDate)) {
            $query['BillingDate'] = $request->billingDate;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->instanceID)) {
            $query['InstanceID'] = $request->instanceID;
        }
        if (!Utils::isUnset($request->isHideZeroCharge)) {
            $query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->splitItemID)) {
            $query['SplitItemID'] = $request->splitItemID;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        if (!Utils::isUnset($request->tagFilter)) {
            $query['TagFilter'] = $request->tagFilter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSplitItemBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSplitItemBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The data that you query by calling this operation is the same as the data that is queried by billing cycles in the Split Bill module of Cost Allocation.
     *   * *   You can query split bills that were generated within the last 12 months by calling this operation.
     *   * *   You can query split bills only after you enable the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in the User Center console.
     *   *
     * @param DescribeSplitItemBillRequest $request DescribeSplitItemBillRequest
     *
     * @return DescribeSplitItemBillResponse DescribeSplitItemBillResponse
     */
    public function describeSplitItemBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSplitItemBillWithOptions($request, $runtime);
    }

    /**
     * @param EnableBillGenerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGenerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableBillGeneration',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableBillGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableBillGenerationRequest $request
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBillGenerationWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAccountRelationResponse
     */
    public function getAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountRelation',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCustomerAccountInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomerAccountInfo',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomerAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * The system queries the IDs of customers of a VNO based on the AccessKey pair used in the request.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomerListResponse GetCustomerListResponse
     */
    public function getCustomerListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCustomerList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The system queries the IDs of customers of a VNO based on the AccessKey pair used in the request.
     *   *
     * @return GetCustomerListResponse GetCustomerListResponse
     */
    public function getCustomerList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerListWithOptions($runtime);
    }

    /**
     * @param GetOrderDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOrderDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### Usage notes
     *   * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](~~95984~~).
     *   * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](~~96469~~).
     *   * 3.  Call the GetPayAsYouGoPrice operation to obtain the pay-as-you-go price of the service based on the returned configuration parameters.
     *   *
     * @param GetPayAsYouGoPriceRequest $request GetPayAsYouGoPriceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPayAsYouGoPriceResponse GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->moduleList)) {
            $query['ModuleList'] = $request->moduleList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPayAsYouGoPrice',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPayAsYouGoPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Usage notes
     *   * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](~~95984~~).
     *   * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](~~96469~~).
     *   * 3.  Call the GetPayAsYouGoPrice operation to obtain the pay-as-you-go price of the service based on the returned configuration parameters.
     *   *
     * @param GetPayAsYouGoPriceRequest $request GetPayAsYouGoPriceRequest
     *
     * @return GetPayAsYouGoPriceResponse GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPayAsYouGoPriceWithOptions($request, $runtime);
    }

    /**
     * @param GetResourcePackagePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->effectiveDate)) {
            $query['EffectiveDate'] = $request->effectiveDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->packageType)) {
            $query['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePackagePrice',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourcePackagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](~~95984~~).
     *   * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](~~96469~~).
     *   * 3.  Call the GetSubscriptionPrice operation to obtain the pricing of the service based on the returned configuration parameters.
     *   *
     * @param GetSubscriptionPriceRequest $request GetSubscriptionPriceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSubscriptionPriceResponse GetSubscriptionPriceResponse
     */
    public function getSubscriptionPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->moduleList)) {
            $query['ModuleList'] = $request->moduleList;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->servicePeriodQuantity)) {
            $query['ServicePeriodQuantity'] = $request->servicePeriodQuantity;
        }
        if (!Utils::isUnset($request->servicePeriodUnit)) {
            $query['ServicePeriodUnit'] = $request->servicePeriodUnit;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubscriptionPrice',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1.  Call the QueryProductList operation to obtain the code of the service. For more information, see [QueryProductList](~~95984~~).
     *   * 2.  Call the DescribePricingModule operation to obtain the configuration parameters of the service. For more information, see [DescribePricingModule](~~96469~~).
     *   * 3.  Call the GetSubscriptionPrice operation to obtain the pricing of the service based on the returned configuration parameters.
     *   *
     * @param GetSubscriptionPriceRequest $request GetSubscriptionPriceRequest
     *
     * @return GetSubscriptionPriceResponse GetSubscriptionPriceResponse
     */
    public function getSubscriptionPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionPriceWithOptions($request, $runtime);
    }

    /**
     * 1.  **Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.**
     *   * 2.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     *   * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules).
     *   *
     * @param InquiryPriceRefundInstanceRequest $request InquiryPriceRefundInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return InquiryPriceRefundInstanceResponse InquiryPriceRefundInstanceResponse
     */
    public function inquiryPriceRefundInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InquiryPriceRefundInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InquiryPriceRefundInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1.  **Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.**
     *   * 2.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     *   * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules).
     *   *
     * @param InquiryPriceRefundInstanceRequest $request InquiryPriceRefundInstanceRequest
     *
     * @return InquiryPriceRefundInstanceResponse InquiryPriceRefundInstanceResponse
     */
    public function inquiryPriceRefundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inquiryPriceRefundInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountRelationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountRelationResponse
     */
    public function modifyAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childNick)) {
            $query['ChildNick'] = $request->childNick;
        }
        if (!Utils::isUnset($request->childUserId)) {
            $query['ChildUserId'] = $request->childUserId;
        }
        if (!Utils::isUnset($request->parentUserId)) {
            $query['ParentUserId'] = $request->parentUserId;
        }
        if (!Utils::isUnset($request->permissionCodes)) {
            $query['PermissionCodes'] = $request->permissionCodes;
        }
        if (!Utils::isUnset($request->relationId)) {
            $query['RelationId'] = $request->relationId;
        }
        if (!Utils::isUnset($request->relationOperation)) {
            $query['RelationOperation'] = $request->relationOperation;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->roleCodes)) {
            $query['RoleCodes'] = $request->roleCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountRelation',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->unitEntityList)) {
            $query['UnitEntityList'] = $request->unitEntityList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCostUnit',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $query['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameter)) {
            $query['Parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalanceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryAccountBalance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccountBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalance()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBalanceWithOptions($runtime);
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   Account bills are summarized based on instance bills. In most cases, the account bills do not include the data generated on the last day of the specified period.
     *   * *   You can query the data generated in June 2020 or later for Cloud Communications services. However, the query results do not include the data of Alibaba Cloud Domains.
     *   *
     * @param QueryAccountBillRequest $request QueryAccountBillRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccountBillResponse QueryAccountBillResponse
     */
    public function queryAccountBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->billingDate)) {
            $query['BillingDate'] = $request->billingDate;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->isGroupByProduct)) {
            $query['IsGroupByProduct'] = $request->isGroupByProduct;
        }
        if (!Utils::isUnset($request->ownerID)) {
            $query['OwnerID'] = $request->ownerID;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccountBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccountBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   Account bills are summarized based on instance bills. In most cases, the account bills do not include the data generated on the last day of the specified period.
     *   * *   You can query the data generated in June 2020 or later for Cloud Communications services. However, the query results do not include the data of Alibaba Cloud Domains.
     *   *
     * @param QueryAccountBillRequest $request QueryAccountBillRequest
     *
     * @return QueryAccountBillResponse QueryAccountBillResponse
     */
    public function queryAccountBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBillWithOptions($request, $runtime);
    }

    /**
     * @param QueryAccountTransactionDetailsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAccountTransactionDetailsResponse
     */
    public function queryAccountTransactionDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->recordID)) {
            $query['RecordID'] = $request->recordID;
        }
        if (!Utils::isUnset($request->transactionChannel)) {
            $query['TransactionChannel'] = $request->transactionChannel;
        }
        if (!Utils::isUnset($request->transactionChannelSN)) {
            $query['TransactionChannelSN'] = $request->transactionChannelSN;
        }
        if (!Utils::isUnset($request->transactionNumber)) {
            $query['TransactionNumber'] = $request->transactionNumber;
        }
        if (!Utils::isUnset($request->transactionType)) {
            $query['TransactionType'] = $request->transactionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccountTransactionDetails',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccountTransactionDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryAccountTransactionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recordID)) {
            $query['RecordID'] = $request->recordID;
        }
        if (!Utils::isUnset($request->transactionChannel)) {
            $query['TransactionChannel'] = $request->transactionChannel;
        }
        if (!Utils::isUnset($request->transactionChannelSN)) {
            $query['TransactionChannelSN'] = $request->transactionChannelSN;
        }
        if (!Utils::isUnset($request->transactionFlow)) {
            $query['TransactionFlow'] = $request->transactionFlow;
        }
        if (!Utils::isUnset($request->transactionNumber)) {
            $query['TransactionNumber'] = $request->transactionNumber;
        }
        if (!Utils::isUnset($request->transactionType)) {
            $query['TransactionType'] = $request->transactionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccountTransactions',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccountTransactionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryAvailableInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->endTimeEnd)) {
            $query['EndTimeEnd'] = $request->endTimeEnd;
        }
        if (!Utils::isUnset($request->endTimeStart)) {
            $query['EndTimeStart'] = $request->endTimeStart;
        }
        if (!Utils::isUnset($request->instanceIDs)) {
            $query['InstanceIDs'] = $request->instanceIDs;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->renewStatus)) {
            $query['RenewStatus'] = $request->renewStatus;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAvailableInstances',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAvailableInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryBillRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryBillResponse
     */
    public function queryBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->isDisplayLocalCurrency)) {
            $query['IsDisplayLocalCurrency'] = $request->isDisplayLocalCurrency;
        }
        if (!Utils::isUnset($request->isHideZeroCharge)) {
            $query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryBillOverviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBillOverview',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBillOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscriptionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryBillToOSSSubscription',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBillToOSSSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscription()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillToOSSSubscriptionWithOptions($runtime);
    }

    /**
     * @param QueryCashCouponsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCouponsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveOrNot)) {
            $query['EffectiveOrNot'] = $request->effectiveOrNot;
        }
        if (!Utils::isUnset($request->expiryTimeEnd)) {
            $query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }
        if (!Utils::isUnset($request->expiryTimeStart)) {
            $query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCashCoupons',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCashCouponsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to query the information about a service based on the service code.
     *   *
     * @param QueryCommodityListRequest $request QueryCommodityListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCommodityListResponse QueryCommodityListResponse
     */
    public function queryCommodityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCommodityList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCommodityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information about a service based on the service code.
     *   *
     * @param QueryCommodityListRequest $request QueryCommodityListRequest
     *
     * @return QueryCommodityListResponse QueryCommodityListResponse
     */
    public function queryCommodityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommodityListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCostUnitRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerUid)) {
            $query['OwnerUid'] = $request->ownerUid;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentUnitId)) {
            $query['ParentUnitId'] = $request->parentUnitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCostUnit',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCostUnitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryCostUnitResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerUid)) {
            $query['OwnerUid'] = $request->ownerUid;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->unitId)) {
            $query['UnitId'] = $request->unitId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCostUnitResource',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCostUnitResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryCustomerAddressListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCustomerAddressList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCustomerAddressListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Limits:
     *   * *   Only the usage records within the past year can be queried.
     *   *
     * @param QueryDPUtilizationDetailRequest $request QueryDPUtilizationDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDPUtilizationDetailResponse QueryDPUtilizationDetailResponse
     */
    public function queryDPUtilizationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->deductedInstanceId)) {
            $query['DeductedInstanceId'] = $request->deductedInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->includeShare)) {
            $query['IncludeShare'] = $request->includeShare;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->lastToken)) {
            $query['LastToken'] = $request->lastToken;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDPUtilizationDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDPUtilizationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Limits:
     *   * *   Only the usage records within the past year can be queried.
     *   *
     * @param QueryDPUtilizationDetailRequest $request QueryDPUtilizationDetailRequest
     *
     * @return QueryDPUtilizationDetailResponse QueryDPUtilizationDetailResponse
     */
    public function queryDPUtilizationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDPUtilizationDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryEvaluateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billCycle)) {
            $query['BillCycle'] = $request->billCycle;
        }
        if (!Utils::isUnset($request->bizTypeList)) {
            $query['BizTypeList'] = $request->bizTypeList;
        }
        if (!Utils::isUnset($request->endAmount)) {
            $query['EndAmount'] = $request->endAmount;
        }
        if (!Utils::isUnset($request->endBizTime)) {
            $query['EndBizTime'] = $request->endBizTime;
        }
        if (!Utils::isUnset($request->endSearchTime)) {
            $query['EndSearchTime'] = $request->endSearchTime;
        }
        if (!Utils::isUnset($request->outBizId)) {
            $query['OutBizId'] = $request->outBizId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->startAmount)) {
            $query['StartAmount'] = $request->startAmount;
        }
        if (!Utils::isUnset($request->startBizTime)) {
            $query['StartBizTime'] = $request->startBizTime;
        }
        if (!Utils::isUnset($request->startSearchTime)) {
            $query['StartSearchTime'] = $request->startSearchTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEvaluateList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEvaluateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryFinancialAccountInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryFinancialAccountInfoResponse
     */
    public function queryFinancialAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFinancialAccountInfo',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFinancialAccountInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ##
     *   * *   This API operation has been upgraded to DescribeInstanceBill. We recommend that you call the [DescribeInstanceBill](~~209402~~) operation to query the bills of instances or billable items in a billing cycle. You can call the QueryInstanceBill operation to query a maximum of 50,000 data rows in a bill.
     *   * *   Instance bills are generated after bills are split. In most cases, the instance bills do not include data generated on the last day of the specified period.
     *   * *   The instance information changes within a billing cycle. The instance configurations and specifications and the time when the instance was used in the billing cycle are all recorded. For more information, see the corresponding bill details.
     *   * *   You can query the data generated in June 2020 or later for Cloud Communications services, and the data generated in November 2020 or later for Alibaba Cloud Domains.
     *   *
     * @param QueryInstanceBillRequest $request QueryInstanceBillRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryInstanceBillResponse QueryInstanceBillResponse
     */
    public function queryInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->billingDate)) {
            $query['BillingDate'] = $request->billingDate;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->isBillingItem)) {
            $query['IsBillingItem'] = $request->isBillingItem;
        }
        if (!Utils::isUnset($request->isHideZeroCharge)) {
            $query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ##
     *   * *   This API operation has been upgraded to DescribeInstanceBill. We recommend that you call the [DescribeInstanceBill](~~209402~~) operation to query the bills of instances or billable items in a billing cycle. You can call the QueryInstanceBill operation to query a maximum of 50,000 data rows in a bill.
     *   * *   Instance bills are generated after bills are split. In most cases, the instance bills do not include data generated on the last day of the specified period.
     *   * *   The instance information changes within a billing cycle. The instance configurations and specifications and the time when the instance was used in the billing cycle are all recorded. For more information, see the corresponding bill details.
     *   * *   You can query the data generated in June 2020 or later for Cloud Communications services, and the data generated in November 2020 or later for Alibaba Cloud Domains.
     *   *
     * @param QueryInstanceBillRequest $request QueryInstanceBillRequest
     *
     * @return QueryInstanceBillResponse QueryInstanceBillResponse
     */
    public function queryInstanceBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceBillWithOptions($request, $runtime);
    }

    /**
     * @param QueryInstanceByTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInstanceByTagResponse
     */
    public function queryInstanceByTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceByTag',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceByTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryInstanceGaapCostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceGaapCost',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceGaapCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryInvoicingCustomerListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInvoicingCustomerList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInvoicingCustomerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryOrdersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOrdersResponse
     */
    public function queryOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paymentStatus)) {
            $query['PaymentStatus'] = $request->paymentStatus;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrders',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPermissionListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryPermissionListResponse
     */
    public function queryPermissionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relationId)) {
            $query['RelationId'] = $request->relationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPermissionList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPermissionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPrepaidCardsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveOrNot)) {
            $query['EffectiveOrNot'] = $request->effectiveOrNot;
        }
        if (!Utils::isUnset($request->expiryTimeEnd)) {
            $query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }
        if (!Utils::isUnset($request->expiryTimeStart)) {
            $query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPrepaidCards',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPrepaidCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to query the billable items of a service. A billable item is the minimum unit used to calculate costs.
     *   *
     * @param QueryPriceEntityListRequest $request QueryPriceEntityListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPriceEntityListResponse QueryPriceEntityListResponse
     */
    public function queryPriceEntityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPriceEntityList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPriceEntityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the billable items of a service. A billable item is the minimum unit used to calculate costs.
     *   *
     * @param QueryPriceEntityListRequest $request QueryPriceEntityListRequest
     *
     * @return QueryPriceEntityListResponse QueryPriceEntityListResponse
     */
    public function queryPriceEntityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPriceEntityListWithOptions($request, $runtime);
    }

    /**
     * @param QueryProductListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryTotalCount)) {
            $query['QueryTotalCount'] = $request->queryTotalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProductList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProductListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryRIUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deductedInstanceId)) {
            $query['DeductedInstanceId'] = $request->deductedInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->RICommodityCode)) {
            $query['RICommodityCode'] = $request->RICommodityCode;
        }
        if (!Utils::isUnset($request->RIInstanceId)) {
            $query['RIInstanceId'] = $request->RIInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRIUtilizationDetail',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRIUtilizationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryRedeemRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRedeem',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRedeemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryRelationListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryRelationListResponse
     */
    public function queryRelationListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRelationList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRelationListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryResellerAvailableQuotaRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemCodes)) {
            $query['ItemCodes'] = $request->itemCodes;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryResellerAvailableQuota',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryResellerAvailableQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryResellerUserAlarmThresholdResponse
     */
    public function queryResellerUserAlarmThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmType)) {
            $query['AlarmType'] = $request->alarmType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryResellerUserAlarmThreshold',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryResellerUserAlarmThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryResourcePackageInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expiryTimeEnd)) {
            $query['ExpiryTimeEnd'] = $request->expiryTimeEnd;
        }
        if (!Utils::isUnset($request->expiryTimeStart)) {
            $query['ExpiryTimeStart'] = $request->expiryTimeStart;
        }
        if (!Utils::isUnset($request->includePartner)) {
            $query['IncludePartner'] = $request->includePartner;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryResourcePackageInstances',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryResourcePackageInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QuerySavingsPlansDeductLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySavingsPlansDeductLogResponse
     */
    public function querySavingsPlansDeductLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySavingsPlansDeductLog',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySavingsPlansDeductLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QuerySavingsPlansDiscountRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySavingsPlansDiscountResponse
     */
    public function querySavingsPlansDiscountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySavingsPlansDiscount',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySavingsPlansDiscountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QuerySavingsPlansInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySavingsPlansInstanceResponse
     */
    public function querySavingsPlansInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySavingsPlansInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySavingsPlansInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QuerySettleBillRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySettleBillResponse
     */
    public function querySettleBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->isDisplayLocalCurrency)) {
            $query['IsDisplayLocalCurrency'] = $request->isDisplayLocalCurrency;
        }
        if (!Utils::isUnset($request->isHideZeroCharge)) {
            $query['IsHideZeroCharge'] = $request->isHideZeroCharge;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->recordID)) {
            $query['RecordID'] = $request->recordID;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySettleBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySettleBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QuerySkuPriceListRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySkuPriceListResponse
     */
    public function querySkuPriceListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QuerySkuPriceListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->priceFactorConditionMap)) {
            $request->priceFactorConditionMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->priceFactorConditionMap, 'PriceFactorConditionMap', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySkuPriceList',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySkuPriceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   This API operation has been upgraded to DescribeSplitItemBill. We recommend that you call the [DescribeSplitItemBill](~~208169~~) operation to query split bills. You can call the QuerySplitItemBill operation to query a maximum of 50,000 data rows in a bill.
     *   * *   The data queried by calling the QuerySplitItemBill operation is consistent with the data that is displayed for the specified billing cycle on the Split Bill page in User Center.
     *   * *   You can call this operation to query split bills generated within the last 12 months.
     *   * *   This operation returns split bills only after you activate the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in User Center.
     *   *
     * @param QuerySplitItemBillRequest $request QuerySplitItemBillRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySplitItemBillResponse QuerySplitItemBillResponse
     */
    public function querySplitItemBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billOwnerId)) {
            $query['BillOwnerId'] = $request->billOwnerId;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySplitItemBill',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySplitItemBillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   This API operation has been upgraded to DescribeSplitItemBill. We recommend that you call the [DescribeSplitItemBill](~~208169~~) operation to query split bills. You can call the QuerySplitItemBill operation to query a maximum of 50,000 data rows in a bill.
     *   * *   The data queried by calling the QuerySplitItemBill operation is consistent with the data that is displayed for the specified billing cycle on the Split Bill page in User Center.
     *   * *   You can call this operation to query split bills generated within the last 12 months.
     *   * *   This operation returns split bills only after you activate the [Split Bill](https://usercenter2.aliyun.com/finance/split-bill) service in User Center.
     *   *
     * @param QuerySplitItemBillRequest $request QuerySplitItemBillRequest
     *
     * @return QuerySplitItemBillResponse QuerySplitItemBillResponse
     */
    public function querySplitItemBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySplitItemBillWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the usage data of an Alibaba Cloud service. Take note of the following items:
     *   * *   The service code that you specify for querying the usage data of a specific Alibaba Cloud service must be valid. You can query the usage data by hour or by day.
     *   * *   The time that you specify must follow the ISO8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *   *     *   Latency exists in data pushes. Therefore, if you set the DataType parameter to Hour, the integrity of usage data recorded in the last 24 hours can be ensured. If you set the DataType parameter to Day, the integrity of usage data recorded in the last two days can be ensured.
     *   *     *   You can query the usage data that is recorded in the last quarter.
     *   *
     * @param QueryUserOmsDataRequest $request QueryUserOmsDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryUserOmsDataResponse QueryUserOmsDataResponse
     */
    public function queryUserOmsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->table)) {
            $query['Table'] = $request->table;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserOmsData',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserOmsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the usage data of an Alibaba Cloud service. Take note of the following items:
     *   * *   The service code that you specify for querying the usage data of a specific Alibaba Cloud service must be valid. You can query the usage data by hour or by day.
     *   * *   The time that you specify must follow the ISO8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *   *     *   Latency exists in data pushes. Therefore, if you set the DataType parameter to Hour, the integrity of usage data recorded in the last 24 hours can be ensured. If you set the DataType parameter to Day, the integrity of usage data recorded in the last two days can be ensured.
     *   *     *   You can query the usage data that is recorded in the last quarter.
     *   *
     * @param QueryUserOmsDataRequest $request QueryUserOmsDataRequest
     *
     * @return QueryUserOmsDataResponse QueryUserOmsDataResponse
     */
    public function queryUserOmsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserOmsDataWithOptions($request, $runtime);
    }

    /**
     * 1.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     *   * 2.  Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.
     *   * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules).
     *   *
     * @param RefundInstanceRequest $request RefundInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RefundInstanceResponse RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->immediatelyRelease)) {
            $query['ImmediatelyRelease'] = $request->immediatelyRelease;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1.  Refunds are applicable only for the actual paid amount. Vouchers used for the purchase are non-refundable.
     *   * 2.  Check the information about unsubscription and confirm the unsubscription terms and refundable amount. The resource that is unsubscribed cannot be restored.
     *   * 3.  For more information, see [Rules for unsubscribing from resources](https://www.alibabacloud.com/help/zh/user-center/user-guide/refund-rules).
     *   *
     * @param RefundInstanceRequest $request RefundInstanceRequest
     *
     * @return RefundInstanceResponse RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * This operation is provided for only VNOs to release instances. If a non-specific VNO calls this operation, the request is blocked.
     *   *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->renewStatus)) {
            $query['RenewStatus'] = $request->renewStatus;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is provided for only VNOs to release instances. If a non-specific VNO calls this operation, the request is blocked.
     *   *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RelieveAccountRelationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RelieveAccountRelationResponse
     */
    public function relieveAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->childUserId)) {
            $query['ChildUserId'] = $request->childUserId;
        }
        if (!Utils::isUnset($request->parentUserId)) {
            $query['ParentUserId'] = $request->parentUserId;
        }
        if (!Utils::isUnset($request->relationId)) {
            $query['RelationId'] = $request->relationId;
        }
        if (!Utils::isUnset($request->relationType)) {
            $query['RelationType'] = $request->relationType;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RelieveAccountRelation',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RelieveAccountRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenewChangeInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RenewChangeInstanceResponse
     */
    public function renewChangeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameter)) {
            $query['Parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->renewPeriod)) {
            $query['RenewPeriod'] = $request->renewPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewChangeInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewChangeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->renewPeriod)) {
            $query['RenewPeriod'] = $request->renewPeriod;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RenewResourcePackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->effectiveDate)) {
            $query['EffectiveDate'] = $request->effectiveDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewResourcePackage',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetAllExpirationDayRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetAllExpirationDayResponse
     */
    public function setAllExpirationDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->unifyExpireDay)) {
            $query['UnifyExpireDay'] = $request->unifyExpireDay;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAllExpirationDay',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAllExpirationDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetRenewalRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetRenewalResponse
     */
    public function setRenewalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIDs)) {
            $query['InstanceIDs'] = $request->instanceIDs;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->renewalPeriod)) {
            $query['RenewalPeriod'] = $request->renewalPeriod;
        }
        if (!Utils::isUnset($request->renewalPeriodUnit)) {
            $query['RenewalPeriodUnit'] = $request->renewalPeriodUnit;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        if (!Utils::isUnset($request->subscriptionType)) {
            $query['SubscriptionType'] = $request->subscriptionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetRenewal',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRenewalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmThresholds)) {
            $query['AlarmThresholds'] = $request->alarmThresholds;
        }
        if (!Utils::isUnset($request->alarmType)) {
            $query['AlarmType'] = $request->alarmType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetResellerUserAlarmThreshold',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetResellerUserAlarmThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetResellerUserQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->currency)) {
            $query['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->outBizId)) {
            $query['OutBizId'] = $request->outBizId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetResellerUserQuota',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetResellerUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetResellerUserStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->stopMode)) {
            $query['StopMode'] = $request->stopMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetResellerUserStatus',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetResellerUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation, take note of the following items:
     *   * *   You can subscribe to only one type of bill at a time.
     *   * *   The bills generated on the previous day are pushed on a daily basis the next day after you subscribe to the bills. The full-data bills for the previous month are pushed on the fourth day of each month. The monthly bills in the PDF format for the previous month are pushed on the fourth day of each month.
     *   * *   The daily bills may be delayed. The delayed bills are pushed the next day after they are generated. The delayed bills may include the bills that should have been pushed on the previous day. We recommend that you query the full-data bills for the previous month at the beginning of each month.
     *   * *   The bill subscriber must have the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     *   * *   The SubscribeBillToOSS operation has the same functionality as the Save Expense Details to OSS Bucket feature in User Center.
     *   * *   To subscribe to the bills stored in an OSS bucket, make sure that the directory name specified for the OSS bucket conforms to the following naming rules:
     *   * 1.  1.  The directory name can contain only UTF-8 characters and cannot contain emoticons.
     *   * 2.  2.  Forward slashes (/) are used to separate paths and can be used to create subdirectories with ease. The directory name cannot start with a forward slash (/), a backslash (\\\\), or consecutive forward slashes (/).
     *   * 3.  3.  The name of a subdirectory cannot be set to two consecutive periods (..).
     *   * 4.  4.  The directory name must be 1 to 254 characters in length.
     *   * *   File names:
     *   *     *   **BillingItemDetailForBillingPeriod** (Detailed bills of billable items)
     *   *         *   File name format for a daily push: `UID_BillingItemDetail_YYYYMMDD`. Example: `169**_BillingItemDetail_20190310`.
     *   *         *   File name format for a full-data push at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`. Example: `169**_BillingItemDetail_201903`.
     *   *     *   **InstanceDetailForBillingPeriod** (Detailed bills of instances)
     *   *         *   File name format for a daily push: `UID_InstanceDetail_YYYYMMDD`. Example: `169**_InstanceDetail_20190310`.
     *   *         *   File name format for a full-data push at the beginning of the next month: `UID_InstanceDetail_YYYYMM`. Example: `169**_InstanceDetail_201903`.
     *   *     *   **InstanceDetailMonthly** (Instance-based bills summarized by billing cycle)
     *   *         *   File name format for a daily push: `UID_InstanceDetailMonthly_YYYYMM`. Example: `169**_InstanceDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **BillingItemDetailMonthly** (Billable item-based bills summarized by billing cycle)
     *   *         *   File name format for a daily push: `UID_BillingItemDetailMonthly_YYYYMM`. Example: `169**_BillingItemDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **SplitItemDetailDaily** (Split bills summarized by day)
     *   *         *   File name format for a daily push: `UID_SplitItemDetailDaily_YYYYMM`. Example: `169**_SplitItemDetailDaily_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **MonthBill** (Monthly bill in the PDF format)
     *   *         *   File name format for a monthly push: `UID_MonthBill_YYYYMM`. Example: `169**_MonthBill_201903`. The bill for the previous month is pushed on the fourth day of each month.
     *   * *   The bills of the MonthBill type are PDF files, whereas the bills of other types are CSV files. If the number of data rows in a bill exceeds a threshold, the bill is automatically split into multiple CSV files. Then, the multiple CSV files are automatically merged and compressed into a ZIP file that has the same name format as the original file.
     *   *
     * @param SubscribeBillToOSSRequest $request SubscribeBillToOSSRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubscribeBillToOSSResponse SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginBillingCycle)) {
            $query['BeginBillingCycle'] = $request->beginBillingCycle;
        }
        if (!Utils::isUnset($request->bucketOwnerId)) {
            $query['BucketOwnerId'] = $request->bucketOwnerId;
        }
        if (!Utils::isUnset($request->bucketPath)) {
            $query['BucketPath'] = $request->bucketPath;
        }
        if (!Utils::isUnset($request->multAccountRelSubscribe)) {
            $query['MultAccountRelSubscribe'] = $request->multAccountRelSubscribe;
        }
        if (!Utils::isUnset($request->rowLimitPerFile)) {
            $query['RowLimitPerFile'] = $request->rowLimitPerFile;
        }
        if (!Utils::isUnset($request->subscribeBucket)) {
            $query['SubscribeBucket'] = $request->subscribeBucket;
        }
        if (!Utils::isUnset($request->subscribeType)) {
            $query['SubscribeType'] = $request->subscribeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubscribeBillToOSS',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubscribeBillToOSSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   You can subscribe to only one type of bill at a time.
     *   * *   The bills generated on the previous day are pushed on a daily basis the next day after you subscribe to the bills. The full-data bills for the previous month are pushed on the fourth day of each month. The monthly bills in the PDF format for the previous month are pushed on the fourth day of each month.
     *   * *   The daily bills may be delayed. The delayed bills are pushed the next day after they are generated. The delayed bills may include the bills that should have been pushed on the previous day. We recommend that you query the full-data bills for the previous month at the beginning of each month.
     *   * *   The bill subscriber must have the [AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D) permission.
     *   * *   The SubscribeBillToOSS operation has the same functionality as the Save Expense Details to OSS Bucket feature in User Center.
     *   * *   To subscribe to the bills stored in an OSS bucket, make sure that the directory name specified for the OSS bucket conforms to the following naming rules:
     *   * 1.  1.  The directory name can contain only UTF-8 characters and cannot contain emoticons.
     *   * 2.  2.  Forward slashes (/) are used to separate paths and can be used to create subdirectories with ease. The directory name cannot start with a forward slash (/), a backslash (\\\\), or consecutive forward slashes (/).
     *   * 3.  3.  The name of a subdirectory cannot be set to two consecutive periods (..).
     *   * 4.  4.  The directory name must be 1 to 254 characters in length.
     *   * *   File names:
     *   *     *   **BillingItemDetailForBillingPeriod** (Detailed bills of billable items)
     *   *         *   File name format for a daily push: `UID_BillingItemDetail_YYYYMMDD`. Example: `169**_BillingItemDetail_20190310`.
     *   *         *   File name format for a full-data push at the beginning of the next month: `UID_BillingItemDetail_YYYYMM`. Example: `169**_BillingItemDetail_201903`.
     *   *     *   **InstanceDetailForBillingPeriod** (Detailed bills of instances)
     *   *         *   File name format for a daily push: `UID_InstanceDetail_YYYYMMDD`. Example: `169**_InstanceDetail_20190310`.
     *   *         *   File name format for a full-data push at the beginning of the next month: `UID_InstanceDetail_YYYYMM`. Example: `169**_InstanceDetail_201903`.
     *   *     *   **InstanceDetailMonthly** (Instance-based bills summarized by billing cycle)
     *   *         *   File name format for a daily push: `UID_InstanceDetailMonthly_YYYYMM`. Example: `169**_InstanceDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **BillingItemDetailMonthly** (Billable item-based bills summarized by billing cycle)
     *   *         *   File name format for a daily push: `UID_BillingItemDetailMonthly_YYYYMM`. Example: `169**_BillingItemDetailMonthly_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **SplitItemDetailDaily** (Split bills summarized by day)
     *   *         *   File name format for a daily push: `UID_SplitItemDetailDaily_YYYYMM`. Example: `169**_SplitItemDetailDaily_201903`. A bill of this type contains the full data generated from the beginning of the month to the current day, and is updated every day until the fourth day of the next month.
     *   *     *   **MonthBill** (Monthly bill in the PDF format)
     *   *         *   File name format for a monthly push: `UID_MonthBill_YYYYMM`. Example: `169**_MonthBill_201903`. The bill for the previous month is pushed on the fourth day of each month.
     *   * *   The bills of the MonthBill type are PDF files, whereas the bills of other types are CSV files. If the number of data rows in a bill exceeds a threshold, the bill is automatically split into multiple CSV files. Then, the multiple CSV files are automatically merged and compressed into a ZIP file that has the same name format as the original file.
     *   *
     * @param SubscribeBillToOSSRequest $request SubscribeBillToOSSRequest
     *
     * @return SubscribeBillToOSSResponse SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeBillToOSSWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UnsubscribeBillToOSSRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->multAccountRelSubscribe)) {
            $query['MultAccountRelSubscribe'] = $request->multAccountRelSubscribe;
        }
        if (!Utils::isUnset($request->subscribeType)) {
            $query['SubscribeType'] = $request->subscribeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnsubscribeBillToOSS',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnsubscribeBillToOSSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpgradeResourcePackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->effectiveDate)) {
            $query['EffectiveDate'] = $request->effectiveDate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeResourcePackage',
            'version'     => '2017-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
