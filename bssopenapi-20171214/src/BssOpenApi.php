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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeInstanceBillResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRelationListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RelieveAccountRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RelieveAccountRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SaveUserCreditRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SaveUserCreditResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetAllExpirationDayRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetAllExpirationDayResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetCreditLabelActionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetCreditLabelActionResponse;
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
use Darabonba\OpenApi\OpenApiClient;

class BssOpenApi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'business.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
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
            'cn-hangzhou'                 => 'business.aliyuncs.com',
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
            'cn-north-2-gov-1'            => 'business.aliyuncs.com',
            'cn-qingdao'                  => 'business.aliyuncs.com',
            'cn-qingdao-nebula'           => 'business.aliyuncs.com',
            'cn-shanghai'                 => 'business.aliyuncs.com',
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
            'cn-yushanfang'               => 'business.aliyuncs.com',
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
     * @param AddAccountRelationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddAccountRelationResponse
     */
    public function addAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddAccountRelationResponse::fromMap($this->doRPCRequest('AddAccountRelation', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AllocateCostUnitResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateCostUnitResourceResponse::fromMap($this->doRPCRequest('AllocateCostUnitResource', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyInvoiceResponse::fromMap($this->doRPCRequest('ApplyInvoice', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOrderResponse::fromMap($this->doRPCRequest('CancelOrder', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeResellerConsumeAmountResponse::fromMap($this->doRPCRequest('ChangeResellerConsumeAmount', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfirmRelationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfirmRelationResponse
     */
    public function confirmRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmRelationResponse::fromMap($this->doRPCRequest('ConfirmRelation', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ConvertChargeTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertChargeTypeResponse::fromMap($this->doRPCRequest('ConvertChargeType', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAgAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAgAccountResponse::fromMap($this->doRPCRequest('CreateAgAccount', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCostUnitResponse::fromMap($this->doRPCRequest('CreateCostUnit', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResellerUserQuotaResponse::fromMap($this->doRPCRequest('CreateResellerUserQuota', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResourcePackageResponse::fromMap($this->doRPCRequest('CreateResourcePackage', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCostUnitResponse::fromMap($this->doRPCRequest('DeleteCostUnit', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceBillRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceBillResponse
     */
    public function describeInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceBillResponse::fromMap($this->doRPCRequest('DescribeInstanceBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeResourceCoverageDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourceCoverageDetailResponse
     */
    public function describeResourceCoverageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceCoverageDetailResponse::fromMap($this->doRPCRequest('DescribeResourceCoverageDetail', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeResourceCoverageTotalRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeResourceCoverageTotalResponse
     */
    public function describeResourceCoverageTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceCoverageTotalResponse::fromMap($this->doRPCRequest('DescribeResourceCoverageTotal', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeResourcePackageProductRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourcePackageProductResponse::fromMap($this->doRPCRequest('DescribeResourcePackageProduct', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceUsageDetailResponse::fromMap($this->doRPCRequest('DescribeResourceUsageDetail', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceUsageTotalResponse::fromMap($this->doRPCRequest('DescribeResourceUsageTotal', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSplitItemBillRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSplitItemBillResponse
     */
    public function describeSplitItemBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSplitItemBillResponse::fromMap($this->doRPCRequest('DescribeSplitItemBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param EnableBillGenerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGenerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableBillGenerationResponse::fromMap($this->doRPCRequest('EnableBillGeneration', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetCustomerAccountInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCustomerAccountInfoResponse::fromMap($this->doRPCRequest('GetCustomerAccountInfo', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetCustomerListResponse::fromMap($this->doRPCRequest('GetCustomerList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetCustomerListResponse
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOrderDetailResponse::fromMap($this->doRPCRequest('GetOrderDetail', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetPayAsYouGoPriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPayAsYouGoPriceResponse::fromMap($this->doRPCRequest('GetPayAsYouGoPrice', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetResourcePackagePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetResourcePackagePriceResponse::fromMap($this->doRPCRequest('GetResourcePackagePrice', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetSubscriptionPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSubscriptionPriceResponse
     */
    public function getSubscriptionPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSubscriptionPriceResponse::fromMap($this->doRPCRequest('GetSubscriptionPrice', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyAccountRelationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountRelationResponse
     */
    public function modifyAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountRelationResponse::fromMap($this->doRPCRequest('ModifyAccountRelation', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCostUnitResponse::fromMap($this->doRPCRequest('ModifyCostUnit', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceResponse::fromMap($this->doRPCRequest('ModifyInstance', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([]);

        return QueryAccountBalanceResponse::fromMap($this->doRPCRequest('QueryAccountBalance', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryAccountBillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAccountBillResponse
     */
    public function queryAccountBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAccountBillResponse::fromMap($this->doRPCRequest('QueryAccountBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryAccountTransactionDetailsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAccountTransactionDetailsResponse
     */
    public function queryAccountTransactionDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAccountTransactionDetailsResponse::fromMap($this->doRPCRequest('QueryAccountTransactionDetails', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAccountTransactionsResponse::fromMap($this->doRPCRequest('QueryAccountTransactions', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAvailableInstancesResponse::fromMap($this->doRPCRequest('QueryAvailableInstances', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBillResponse::fromMap($this->doRPCRequest('QueryBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryBillOverviewResponse::fromMap($this->doRPCRequest('QueryBillOverview', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([]);

        return QueryBillToOSSSubscriptionResponse::fromMap($this->doRPCRequest('QueryBillToOSSSubscription', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCashCouponsResponse::fromMap($this->doRPCRequest('QueryCashCoupons', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryCostUnitRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCostUnitResponse::fromMap($this->doRPCRequest('QueryCostUnit', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCostUnitResourceResponse::fromMap($this->doRPCRequest('QueryCostUnitResource', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCustomerAddressListResponse::fromMap($this->doRPCRequest('QueryCustomerAddressList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryDPUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDPUtilizationDetailResponse
     */
    public function queryDPUtilizationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDPUtilizationDetailResponse::fromMap($this->doRPCRequest('QueryDPUtilizationDetail', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryEvaluateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEvaluateListResponse::fromMap($this->doRPCRequest('QueryEvaluateList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFinancialAccountInfoResponse::fromMap($this->doRPCRequest('QueryFinancialAccountInfo', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryInstanceBillRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryInstanceBillResponse::fromMap($this->doRPCRequest('QueryInstanceBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryInstanceByTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInstanceByTagResponse
     */
    public function queryInstanceByTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryInstanceByTagResponse::fromMap($this->doRPCRequest('QueryInstanceByTag', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryInstanceGaapCostResponse::fromMap($this->doRPCRequest('QueryInstanceGaapCost', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryInvoicingCustomerListResponse::fromMap($this->doRPCRequest('QueryInvoicingCustomerList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryMonthlyBillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMonthlyBillResponse
     */
    public function queryMonthlyBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMonthlyBillResponse::fromMap($this->doRPCRequest('QueryMonthlyBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMonthlyBillRequest $request
     *
     * @return QueryMonthlyBillResponse
     */
    public function queryMonthlyBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonthlyInstanceConsumptionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryMonthlyInstanceConsumptionResponse
     */
    public function queryMonthlyInstanceConsumptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMonthlyInstanceConsumptionResponse::fromMap($this->doRPCRequest('QueryMonthlyInstanceConsumption', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMonthlyInstanceConsumptionRequest $request
     *
     * @return QueryMonthlyInstanceConsumptionResponse
     */
    public function queryMonthlyInstanceConsumption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyInstanceConsumptionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOrdersResponse::fromMap($this->doRPCRequest('QueryOrders', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPermissionListResponse::fromMap($this->doRPCRequest('QueryPermissionList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPrepaidCardsResponse::fromMap($this->doRPCRequest('QueryPrepaidCards', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryProductListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryProductListResponse::fromMap($this->doRPCRequest('QueryProductList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return QueryRedeemResponse::fromMap($this->doRPCRequest('QueryRedeem', '2017-12-14', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRelationListResponse::fromMap($this->doRPCRequest('QueryRelationList', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryResellerAvailableQuotaResponse::fromMap($this->doRPCRequest('QueryResellerAvailableQuota', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryRIUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRIUtilizationDetailResponse::fromMap($this->doRPCRequest('QueryRIUtilizationDetail', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySavingsPlansDeductLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySavingsPlansDeductLogResponse
     */
    public function querySavingsPlansDeductLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySavingsPlansDeductLogResponse::fromMap($this->doRPCRequest('QuerySavingsPlansDeductLog', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySavingsPlansInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySavingsPlansInstanceResponse
     */
    public function querySavingsPlansInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySavingsPlansInstanceResponse::fromMap($this->doRPCRequest('QuerySavingsPlansInstance', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySettleBillResponse::fromMap($this->doRPCRequest('QuerySettleBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySettlementBillRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySettlementBillResponse
     */
    public function querySettlementBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySettlementBillResponse::fromMap($this->doRPCRequest('QuerySettlementBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySettlementBillRequest $request
     *
     * @return QuerySettlementBillResponse
     */
    public function querySettlementBill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySettlementBillWithOptions($request, $runtime);
    }

    /**
     * @param QuerySplitItemBillRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySplitItemBillResponse::fromMap($this->doRPCRequest('QuerySplitItemBill', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryUserOmsDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUserOmsDataResponse::fromMap($this->doRPCRequest('QueryUserOmsData', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RelieveAccountRelationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RelieveAccountRelationResponse
     */
    public function relieveAccountRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RelieveAccountRelationResponse::fromMap($this->doRPCRequest('RelieveAccountRelation', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewResourcePackageResponse::fromMap($this->doRPCRequest('RenewResourcePackage', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveUserCreditRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveUserCreditResponse
     */
    public function saveUserCreditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveUserCreditResponse::fromMap($this->doRPCRequest('SaveUserCredit', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveUserCreditRequest $request
     *
     * @return SaveUserCreditResponse
     */
    public function saveUserCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveUserCreditWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetAllExpirationDayResponse::fromMap($this->doRPCRequest('SetAllExpirationDay', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetCreditLabelActionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetCreditLabelActionResponse
     */
    public function setCreditLabelActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetCreditLabelActionResponse::fromMap($this->doRPCRequest('SetCreditLabelAction', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetCreditLabelActionRequest $request
     *
     * @return SetCreditLabelActionResponse
     */
    public function setCreditLabelAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCreditLabelActionWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetRenewalResponse::fromMap($this->doRPCRequest('SetRenewal', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetResellerUserAlarmThresholdResponse::fromMap($this->doRPCRequest('SetResellerUserAlarmThreshold', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetResellerUserQuotaResponse::fromMap($this->doRPCRequest('SetResellerUserQuota', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetResellerUserStatusResponse::fromMap($this->doRPCRequest('SetResellerUserStatus', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubscribeBillToOSSRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubscribeBillToOSSResponse::fromMap($this->doRPCRequest('SubscribeBillToOSS', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnsubscribeBillToOSSResponse::fromMap($this->doRPCRequest('UnsubscribeBillToOSS', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeResourcePackageResponse::fromMap($this->doRPCRequest('UpgradeResourcePackage', '2017-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
