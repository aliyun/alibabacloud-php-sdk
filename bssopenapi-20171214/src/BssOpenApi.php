<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceRequest;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class BssOpenApi extends Rpc
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
     * @param QueryAccountTransactionDetailsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAccountTransactionDetailsResponse
     */
    public function queryAccountTransactionDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountTransactionDetailsResponse::fromMap($this->doRequest('QueryAccountTransactionDetails', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QuerySettleBillRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySettleBillResponse
     */
    public function querySettleBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySettleBillResponse::fromMap($this->doRequest('QuerySettleBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QuerySplitItemBillRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySplitItemBillResponse::fromMap($this->doRequest('QuerySplitItemBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryRIUtilizationDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryRIUtilizationDetailResponse::fromMap($this->doRequest('QueryRIUtilizationDetail', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryBillToOSSSubscriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryBillToOSSSubscriptionResponse::fromMap($this->doRequest('QueryBillToOSSSubscription', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @param QueryBillToOSSSubscriptionRequest $request
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillToOSSSubscriptionWithOptions($request, $runtime);
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

        return QueryAccountBillResponse::fromMap($this->doRequest('QueryAccountBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param CreateCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCostUnitResponse::fromMap($this->doRequest('CreateCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param ModifyCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCostUnitResponse::fromMap($this->doRequest('ModifyCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryCostUnitRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryCostUnitResponse::fromMap($this->doRequest('QueryCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param DeleteCostUnitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCostUnitResponse::fromMap($this->doRequest('DeleteCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param AllocateCostUnitResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateCostUnitResourceResponse::fromMap($this->doRequest('AllocateCostUnitResource', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryCostUnitResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryCostUnitResourceResponse::fromMap($this->doRequest('QueryCostUnitResource', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param RenewResourcePackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewResourcePackageResponse::fromMap($this->doRequest('RenewResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param UpgradeResourcePackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeResourcePackageResponse::fromMap($this->doRequest('UpgradeResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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

    /**
     * @param CreateAgAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAgAccountResponse::fromMap($this->doRequest('CreateAgAccount', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param GetCustomerAccountInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetCustomerAccountInfoResponse::fromMap($this->doRequest('GetCustomerAccountInfo', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param GetCustomerListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetCustomerListResponse::fromMap($this->doRequest('GetCustomerList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @param GetCustomerListRequest $request
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerListWithOptions($request, $runtime);
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

        return ChangeResellerConsumeAmountResponse::fromMap($this->doRequest('ChangeResellerConsumeAmount', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param SetResellerUserStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserStatusResponse::fromMap($this->doRequest('SetResellerUserStatus', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param CreateResellerUserQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateResellerUserQuotaResponse::fromMap($this->doRequest('CreateResellerUserQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param SetResellerUserQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserQuotaResponse::fromMap($this->doRequest('SetResellerUserQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryResellerAvailableQuotaRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryResellerAvailableQuotaResponse::fromMap($this->doRequest('QueryResellerAvailableQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param SetResellerUserAlarmThresholdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThresholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserAlarmThresholdResponse::fromMap($this->doRequest('SetResellerUserAlarmThreshold', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryAccountTransactionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountTransactionsResponse::fromMap($this->doRequest('QueryAccountTransactions', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param UnsubscribeBillToOSSRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnsubscribeBillToOSSResponse::fromMap($this->doRequest('UnsubscribeBillToOSS', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param SubscribeBillToOSSRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SubscribeBillToOSSResponse::fromMap($this->doRequest('SubscribeBillToOSS', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryUserOmsDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryUserOmsDataResponse::fromMap($this->doRequest('QueryUserOmsData', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CancelOrderResponse::fromMap($this->doRequest('CancelOrder', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param ApplyInvoiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ApplyInvoiceResponse::fromMap($this->doRequest('ApplyInvoice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryCustomerAddressListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryCustomerAddressListResponse::fromMap($this->doRequest('QueryCustomerAddressList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryEvaluateListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEvaluateListResponse::fromMap($this->doRequest('QueryEvaluateList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryInvoicingCustomerListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryInvoicingCustomerListResponse::fromMap($this->doRequest('QueryInvoicingCustomerList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryBillOverviewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryBillOverviewResponse::fromMap($this->doRequest('QueryBillOverview', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryBillRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryBillResponse
     */
    public function queryBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryBillResponse::fromMap($this->doRequest('QueryBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryInstanceBillRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryInstanceBillResponse::fromMap($this->doRequest('QueryInstanceBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param EnableBillGenerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGenerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return EnableBillGenerationResponse::fromMap($this->doRequest('EnableBillGeneration', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryRedeemRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryRedeemResponse::fromMap($this->doRequest('QueryRedeem', 'HTTPS', 'GET', '2017-12-14', 'AK', $request, null, $runtime));
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
     * @param ConvertChargeTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConvertChargeTypeResponse::fromMap($this->doRequest('ConvertChargeType', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceResponse::fromMap($this->doRequest('ModifyInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param DescribePricingModuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePricingModuleResponse::fromMap($this->doRequest('DescribePricingModule', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryProductListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryProductListResponse::fromMap($this->doRequest('QueryProductList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryInstanceGaapCostRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryInstanceGaapCostResponse::fromMap($this->doRequest('QueryInstanceGaapCost', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewInstanceResponse::fromMap($this->doRequest('RenewInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param GetOrderDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetOrderDetailResponse::fromMap($this->doRequest('GetOrderDetail', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryOrdersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryOrdersResponse
     */
    public function queryOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryOrdersResponse::fromMap($this->doRequest('QueryOrders', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryMonthlyInstanceConsumptionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryMonthlyInstanceConsumptionResponse
     */
    public function queryMonthlyInstanceConsumptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryMonthlyInstanceConsumptionResponse::fromMap($this->doRequest('QueryMonthlyInstanceConsumption', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QuerySettlementBillRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySettlementBillResponse
     */
    public function querySettlementBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QuerySettlementBillResponse::fromMap($this->doRequest('QuerySettlementBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryMonthlyBillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMonthlyBillResponse
     */
    public function queryMonthlyBillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryMonthlyBillResponse::fromMap($this->doRequest('QueryMonthlyBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param SetRenewalRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetRenewalResponse
     */
    public function setRenewalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetRenewalResponse::fromMap($this->doRequest('SetRenewal', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryAvailableInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryAvailableInstancesResponse::fromMap($this->doRequest('QueryAvailableInstances', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param CreateResourcePackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateResourcePackageResponse::fromMap($this->doRequest('CreateResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryResourcePackageInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryResourcePackageInstancesResponse::fromMap($this->doRequest('QueryResourcePackageInstances', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param GetResourcePackagePriceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourcePackagePriceResponse::fromMap($this->doRequest('GetResourcePackagePrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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

        return GetSubscriptionPriceResponse::fromMap($this->doRequest('GetSubscriptionPrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param GetPayAsYouGoPriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPayAsYouGoPriceResponse::fromMap($this->doRequest('GetPayAsYouGoPrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryPrepaidCardsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryPrepaidCardsResponse::fromMap($this->doRequest('QueryPrepaidCards', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryCashCouponsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCouponsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryCashCouponsResponse::fromMap($this->doRequest('QueryCashCoupons', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
     * @param QueryAccountBalanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountBalanceResponse::fromMap($this->doRequest('QueryAccountBalance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @param QueryAccountBalanceRequest $request
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBalanceWithOptions($request, $runtime);
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

        return DescribeResourcePackageProductResponse::fromMap($this->doRequest('DescribeResourcePackageProduct', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
