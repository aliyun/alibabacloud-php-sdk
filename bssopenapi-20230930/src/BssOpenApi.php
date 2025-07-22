<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AddCouponDeductTagShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\AllocateCostCenterResourceShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponItemListShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponShrinkRequest;
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
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterShrinkRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountLowAvailableAmountAlarmResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleShrinkRequest;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加优惠券抵扣标签
     *  *
     * @param AddCouponDeductTagRequest $tmpReq  AddCouponDeductTagRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCouponDeductTagResponse AddCouponDeductTagResponse
     */
    public function addCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddCouponDeductTagShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->couponId)) {
            $query['CouponId'] = $request->couponId;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 添加优惠券抵扣标签
     *  *
     * @param AddCouponDeductTagRequest $request AddCouponDeductTagRequest
     *
     * @return AddCouponDeductTagResponse AddCouponDeductTagResponse
     */
    public function addCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * @summary 财务单元实例重分配
     *  *
     * @param AllocateCostCenterResourceRequest $tmpReq  AllocateCostCenterResourceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocateCostCenterResourceResponse AllocateCostCenterResourceResponse
     */
    public function allocateCostCenterResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AllocateCostCenterResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceInstanceList)) {
            $request->resourceInstanceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceInstanceList, 'ResourceInstanceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->fromCostCenterId)) {
            $body['FromCostCenterId'] = $request->fromCostCenterId;
        }
        if (!Utils::isUnset($request->fromOwnerAccountId)) {
            $body['FromOwnerAccountId'] = $request->fromOwnerAccountId;
        }
        if (!Utils::isUnset($request->resourceInstanceListShrink)) {
            $body['ResourceInstanceList'] = $request->resourceInstanceListShrink;
        }
        if (!Utils::isUnset($request->toCostCenterId)) {
            $body['ToCostCenterId'] = $request->toCostCenterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 财务单元实例重分配
     *  *
     * @param AllocateCostCenterResourceRequest $request AllocateCostCenterResourceRequest
     *
     * @return AllocateCostCenterResourceResponse AllocateCostCenterResourceResponse
     */
    public function allocateCostCenterResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateCostCenterResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 取消资金账户低额预警
     *  *
     * @param CancelFundAccountLowAvailableAmountAlarmRequest $request CancelFundAccountLowAvailableAmountAlarmRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelFundAccountLowAvailableAmountAlarmResponse CancelFundAccountLowAvailableAmountAlarmResponse
     */
    public function cancelFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 取消资金账户低额预警
     *  *
     * @param CancelFundAccountLowAvailableAmountAlarmRequest $request CancelFundAccountLowAvailableAmountAlarmRequest
     *
     * @return CancelFundAccountLowAvailableAmountAlarmResponse CancelFundAccountLowAvailableAmountAlarmResponse
     */
    public function cancelFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary 创建财务单元
     *  *
     * @param CreateCostCenterRequest $tmpReq  CreateCostCenterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCostCenterResponse CreateCostCenterResponse
     */
    public function createCostCenterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCostCenterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->costCenterEntityList)) {
            $request->costCenterEntityListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->costCenterEntityList, 'CostCenterEntityList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->costCenterEntityListShrink)) {
            $query['CostCenterEntityList'] = $request->costCenterEntityListShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建财务单元
     *  *
     * @param CreateCostCenterRequest $request CreateCostCenterRequest
     *
     * @return CreateCostCenterResponse CreateCostCenterResponse
     */
    public function createCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostCenterWithOptions($request, $runtime);
    }

    /**
     * @summary 新建财务单元规则
     *  *
     * @param CreateCostCenterRuleRequest $tmpReq  CreateCostCenterRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCostCenterRuleResponse CreateCostCenterRuleResponse
     */
    public function createCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCostCenterRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterExpression)) {
            $request->filterExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterExpressionShrink)) {
            $query['FilterExpression'] = $request->filterExpressionShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $body['CostCenterId'] = $request->costCenterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 新建财务单元规则
     *  *
     * @param CreateCostCenterRuleRequest $request CreateCostCenterRuleRequest
     *
     * @return CreateCostCenterRuleResponse CreateCostCenterRuleResponse
     */
    public function createCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建资金账户付款关系
     *  *
     * @param CreateFundAccountPayRelationRequest $tmpReq  CreateFundAccountPayRelationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFundAccountPayRelationResponse CreateFundAccountPayRelationResponse
     */
    public function createFundAccountPayRelationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFundAccountPayRelationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建资金账户付款关系
     *  *
     * @param CreateFundAccountPayRelationRequest $request CreateFundAccountPayRelationRequest
     *
     * @return CreateFundAccountPayRelationResponse CreateFundAccountPayRelationResponse
     */
    public function createFundAccountPayRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFundAccountPayRelationWithOptions($request, $runtime);
    }

    /**
     * @summary 创建资金账户划拨/回收
     *  *
     * @param CreateFundAccountTransferRequest $request CreateFundAccountTransferRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFundAccountTransferResponse CreateFundAccountTransferResponse
     */
    public function createFundAccountTransferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->amount)) {
            $body['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->financeType)) {
            $body['FinanceType'] = $request->financeType;
        }
        if (!Utils::isUnset($request->fromFundAccountId)) {
            $body['FromFundAccountId'] = $request->fromFundAccountId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->toFundAccountId)) {
            $body['ToFundAccountId'] = $request->toFundAccountId;
        }
        if (!Utils::isUnset($request->transferType)) {
            $body['TransferType'] = $request->transferType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建资金账户划拨/回收
     *  *
     * @param CreateFundAccountTransferRequest $request CreateFundAccountTransferRequest
     *
     * @return CreateFundAccountTransferResponse CreateFundAccountTransferResponse
     */
    public function createFundAccountTransfer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFundAccountTransferWithOptions($request, $runtime);
    }

    /**
     * @summary 申请发票
     *  *
     * @param CreateInvoiceRequest $tmpReq  CreateInvoiceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInvoiceResponse CreateInvoiceResponse
     */
    public function createInvoiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateInvoiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->invoiceCandidateIds)) {
            $request->invoiceCandidateIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->invoiceCandidateIds, 'InvoiceCandidateIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->recipientEmails)) {
            $request->recipientEmailsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recipientEmails, 'RecipientEmails', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->invoiceCandidateIdsShrink)) {
            $query['InvoiceCandidateIds'] = $request->invoiceCandidateIdsShrink;
        }
        if (!Utils::isUnset($request->invoiceMode)) {
            $query['InvoiceMode'] = $request->invoiceMode;
        }
        if (!Utils::isUnset($request->invoiceRemark)) {
            $query['InvoiceRemark'] = $request->invoiceRemark;
        }
        if (!Utils::isUnset($request->invoiceTitleId)) {
            $query['InvoiceTitleId'] = $request->invoiceTitleId;
        }
        if (!Utils::isUnset($request->invoiceType)) {
            $query['InvoiceType'] = $request->invoiceType;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->recipientEmailsShrink)) {
            $query['RecipientEmails'] = $request->recipientEmailsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 申请发票
     *  *
     * @param CreateInvoiceRequest $request CreateInvoiceRequest
     *
     * @return CreateInvoiceResponse CreateInvoiceResponse
     */
    public function createInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建账单订阅
     *  *
     * @param CreateReportDefinitionRequest $request CreateReportDefinitionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReportDefinitionResponse CreateReportDefinitionResponse
     */
    public function createReportDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginBillingCycle)) {
            $query['BeginBillingCycle'] = $request->beginBillingCycle;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossBucketOwnerAccountId)) {
            $query['OssBucketOwnerAccountId'] = $request->ossBucketOwnerAccountId;
        }
        if (!Utils::isUnset($request->ossBucketPath)) {
            $query['OssBucketPath'] = $request->ossBucketPath;
        }
        if (!Utils::isUnset($request->reportType)) {
            $query['ReportType'] = $request->reportType;
        }
        $body = [];
        if (!Utils::isUnset($request->mcProject)) {
            $body['McProject'] = $request->mcProject;
        }
        if (!Utils::isUnset($request->mcTableName)) {
            $body['McTableName'] = $request->mcTableName;
        }
        if (!Utils::isUnset($request->reportSourceType)) {
            $body['ReportSourceType'] = $request->reportSourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建账单订阅
     *  *
     * @param CreateReportDefinitionRequest $request CreateReportDefinitionRequest
     *
     * @return CreateReportDefinitionResponse CreateReportDefinitionResponse
     */
    public function createReportDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReportDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除财务单元
     *  *
     * @param DeleteCostCenterRequest $request DeleteCostCenterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCostCenterResponse DeleteCostCenterResponse
     */
    public function deleteCostCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $query['CostCenterId'] = $request->costCenterId;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->ownerAccountId)) {
            $query['OwnerAccountId'] = $request->ownerAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除财务单元
     *  *
     * @param DeleteCostCenterRequest $request DeleteCostCenterRequest
     *
     * @return DeleteCostCenterResponse DeleteCostCenterResponse
     */
    public function deleteCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostCenterWithOptions($request, $runtime);
    }

    /**
     * @summary 删除财务单元规则
     *  *
     * @param DeleteCostCenterRuleRequest $tmpReq  DeleteCostCenterRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCostCenterRuleResponse DeleteCostCenterRuleResponse
     */
    public function deleteCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCostCenterRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterExpression)) {
            $request->filterExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterExpressionShrink)) {
            $query['FilterExpression'] = $request->filterExpressionShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $body['CostCenterId'] = $request->costCenterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除财务单元规则
     *  *
     * @param DeleteCostCenterRuleRequest $request DeleteCostCenterRuleRequest
     *
     * @return DeleteCostCenterRuleResponse DeleteCostCenterRuleResponse
     */
    public function deleteCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除优惠券的抵扣标签
     *  *
     * @param DeleteCouponDeductTagRequest $tmpReq  DeleteCouponDeductTagRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCouponDeductTagResponse DeleteCouponDeductTagResponse
     */
    public function deleteCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteCouponDeductTagShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagKeys)) {
            $request->tagKeysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagKeys, 'TagKeys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->couponId)) {
            $query['CouponId'] = $request->couponId;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->tagKeysShrink)) {
            $query['TagKeys'] = $request->tagKeysShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除优惠券的抵扣标签
     *  *
     * @param DeleteCouponDeductTagRequest $request DeleteCouponDeductTagRequest
     *
     * @return DeleteCouponDeductTagResponse DeleteCouponDeductTagResponse
     */
    public function deleteCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * @summary 取消账单订阅
     *  *
     * @param DeleteReportDefinitionRequest $request DeleteReportDefinitionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteReportDefinitionResponse DeleteReportDefinitionResponse
     */
    public function deleteReportDefinitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->reportTaskId)) {
            $query['ReportTaskId'] = $request->reportTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 取消账单订阅
     *  *
     * @param DeleteReportDefinitionRequest $request DeleteReportDefinitionRequest
     *
     * @return DeleteReportDefinitionResponse DeleteReportDefinitionResponse
     */
    public function deleteReportDefinition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReportDefinitionWithOptions($request, $runtime);
    }

    /**
     * @summary 查询优惠券列表
     *  *
     * @param DescribeCouponRequest $tmpReq  DescribeCouponRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCouponResponse DescribeCouponResponse
     */
    public function describeCouponWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCouponShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCoupon',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCouponResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询优惠券列表
     *  *
     * @param DescribeCouponRequest $request DescribeCouponRequest
     *
     * @return DescribeCouponResponse DescribeCouponResponse
     */
    public function describeCoupon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponWithOptions($request, $runtime);
    }

    /**
     * @summary 查询优惠券可用商品列表
     *  *
     * @param DescribeCouponItemListRequest $tmpReq  DescribeCouponItemListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCouponItemListResponse DescribeCouponItemListResponse
     */
    public function describeCouponItemListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCouponItemListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCouponItemList',
            'version' => '2023-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCouponItemListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询优惠券可用商品列表
     *  *
     * @param DescribeCouponItemListRequest $request DescribeCouponItemListRequest
     *
     * @return DescribeCouponItemListResponse DescribeCouponItemListResponse
     */
    public function describeCouponItemList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCouponItemListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取客户使用SPN的概述信息
     *  *
     * @param DescribeUserSpnSummaryInfoRequest $tmpReq  DescribeUserSpnSummaryInfoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserSpnSummaryInfoResponse DescribeUserSpnSummaryInfoResponse
     */
    public function describeUserSpnSummaryInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeUserSpnSummaryInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取客户使用SPN的概述信息
     *  *
     * @param DescribeUserSpnSummaryInfoRequest $request DescribeUserSpnSummaryInfoRequest
     *
     * @return DescribeUserSpnSummaryInfoResponse DescribeUserSpnSummaryInfoResponse
     */
    public function describeUserSpnSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserSpnSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户可用金
     *  *
     * @param GetFundAccountAvailableAmountRequest $request GetFundAccountAvailableAmountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountAvailableAmountResponse GetFundAccountAvailableAmountResponse
     */
    public function getFundAccountAvailableAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户可用金
     *  *
     * @param GetFundAccountAvailableAmountRequest $request GetFundAccountAvailableAmountRequest
     *
     * @return GetFundAccountAvailableAmountResponse GetFundAccountAvailableAmountResponse
     */
    public function getFundAccountAvailableAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountAvailableAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户可分配信控额度
     *  *
     * @param GetFundAccountCanAllocateCreditAmountRequest $request GetFundAccountCanAllocateCreditAmountRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountCanAllocateCreditAmountResponse GetFundAccountCanAllocateCreditAmountResponse
     */
    public function getFundAccountCanAllocateCreditAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户可分配信控额度
     *  *
     * @param GetFundAccountCanAllocateCreditAmountRequest $request GetFundAccountCanAllocateCreditAmountRequest
     *
     * @return GetFundAccountCanAllocateCreditAmountResponse GetFundAccountCanAllocateCreditAmountResponse
     */
    public function getFundAccountCanAllocateCreditAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanAllocateCreditAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户可回收金额
     *  *
     * @param GetFundAccountCanRecycleAmountRequest $request GetFundAccountCanRecycleAmountRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountCanRecycleAmountResponse GetFundAccountCanRecycleAmountResponse
     */
    public function getFundAccountCanRecycleAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->recycleFromFundAccountId)) {
            $body['RecycleFromFundAccountId'] = $request->recycleFromFundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户可回收金额
     *  *
     * @param GetFundAccountCanRecycleAmountRequest $request GetFundAccountCanRecycleAmountRequest
     *
     * @return GetFundAccountCanRecycleAmountResponse GetFundAccountCanRecycleAmountResponse
     */
    public function getFundAccountCanRecycleAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanRecycleAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户的可转出金额
     *  *
     * @param GetFundAccountCanTransferAmountRequest $request GetFundAccountCanTransferAmountRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountCanTransferAmountResponse GetFundAccountCanTransferAmountResponse
     */
    public function getFundAccountCanTransferAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户的可转出金额
     *  *
     * @param GetFundAccountCanTransferAmountRequest $request GetFundAccountCanTransferAmountRequest
     *
     * @return GetFundAccountCanTransferAmountResponse GetFundAccountCanTransferAmountResponse
     */
    public function getFundAccountCanTransferAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanTransferAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户可提现金额
     *  *
     * @param GetFundAccountCanWithdrawAmountRequest $request GetFundAccountCanWithdrawAmountRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountCanWithdrawAmountResponse GetFundAccountCanWithdrawAmountResponse
     */
    public function getFundAccountCanWithdrawAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户可提现金额
     *  *
     * @param GetFundAccountCanWithdrawAmountRequest $request GetFundAccountCanWithdrawAmountRequest
     *
     * @return GetFundAccountCanWithdrawAmountResponse GetFundAccountCanWithdrawAmountResponse
     */
    public function getFundAccountCanWithdrawAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountCanWithdrawAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户低额预警
     *  *
     * @param GetFundAccountLowAvailableAmountAlarmRequest $request GetFundAccountLowAvailableAmountAlarmRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountLowAvailableAmountAlarmResponse GetFundAccountLowAvailableAmountAlarmResponse
     */
    public function getFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户低额预警
     *  *
     * @param GetFundAccountLowAvailableAmountAlarmRequest $request GetFundAccountLowAvailableAmountAlarmRequest
     *
     * @return GetFundAccountLowAvailableAmountAlarmResponse GetFundAccountLowAvailableAmountAlarmResponse
     */
    public function getFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户收支明细
     *  *
     * @param GetFundAccountTransactionDetailsRequest $tmpReq  GetFundAccountTransactionDetailsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFundAccountTransactionDetailsResponse GetFundAccountTransactionDetailsResponse
     */
    public function getFundAccountTransactionDetailsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetFundAccountTransactionDetailsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->transactionChannelList)) {
            $request->transactionChannelListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transactionChannelList, 'TransactionChannelList', 'json');
        }
        if (!Utils::isUnset($tmpReq->transactionTypeList)) {
            $request->transactionTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transactionTypeList, 'TransactionTypeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->billNumber)) {
            $body['BillNumber'] = $request->billNumber;
        }
        if (!Utils::isUnset($request->channelTransactionNumber)) {
            $body['ChannelTransactionNumber'] = $request->channelTransactionNumber;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->transactionChannelListShrink)) {
            $body['TransactionChannelList'] = $request->transactionChannelListShrink;
        }
        if (!Utils::isUnset($request->transactionDirection)) {
            $body['TransactionDirection'] = $request->transactionDirection;
        }
        if (!Utils::isUnset($request->transactionNumber)) {
            $body['TransactionNumber'] = $request->transactionNumber;
        }
        if (!Utils::isUnset($request->transactionType)) {
            $body['TransactionType'] = $request->transactionType;
        }
        if (!Utils::isUnset($request->transactionTypeListShrink)) {
            $body['TransactionTypeList'] = $request->transactionTypeListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户收支明细
     *  *
     * @param GetFundAccountTransactionDetailsRequest $request GetFundAccountTransactionDetailsRequest
     *
     * @return GetFundAccountTransactionDetailsResponse GetFundAccountTransactionDetailsResponse
     */
    public function getFundAccountTransactionDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFundAccountTransactionDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary 订单详情查询
     *  *
     * @param GetOrderDetailRequest $request GetOrderDetailRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderDetailResponse GetOrderDetailResponse
     */
    public function getOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
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
     * @summary 订单详情查询
     *  *
     * @param GetOrderDetailRequest $request GetOrderDetailRequest
     *
     * @return GetOrderDetailResponse GetOrderDetailResponse
     */
    public function getOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 订单列表查询
     *  *
     * @param GetOrdersRequest $request GetOrdersRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrdersResponse GetOrdersResponse
     */
    public function getOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
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
     * @summary 订单列表查询
     *  *
     * @param GetOrdersRequest $request GetOrdersRequest
     *
     * @return GetOrdersResponse GetOrdersResponse
     */
    public function getOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary 获取节省计划及可抵扣商品信息
     *  *
     * @param GetSavingPlanDeductableCommodityRequest $tmpReq  GetSavingPlanDeductableCommodityRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSavingPlanDeductableCommodityResponse GetSavingPlanDeductableCommodityResponse
     */
    public function getSavingPlanDeductableCommodityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSavingPlanDeductableCommodityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取节省计划及可抵扣商品信息
     *  *
     * @param GetSavingPlanDeductableCommodityRequest $request GetSavingPlanDeductableCommodityRequest
     *
     * @return GetSavingPlanDeductableCommodityResponse GetSavingPlanDeductableCommodityResponse
     */
    public function getSavingPlanDeductableCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanDeductableCommodityWithOptions($request, $runtime);
    }

    /**
     * @summary 获取节省计划实例共享账号信息
     *  *
     * @param GetSavingPlanShareAccountsRequest $tmpReq  GetSavingPlanShareAccountsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSavingPlanShareAccountsResponse GetSavingPlanShareAccountsResponse
     */
    public function getSavingPlanShareAccountsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSavingPlanShareAccountsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spnInstanceCode)) {
            $query['SpnInstanceCode'] = $request->spnInstanceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取节省计划实例共享账号信息
     *  *
     * @param GetSavingPlanShareAccountsRequest $request GetSavingPlanShareAccountsRequest
     *
     * @return GetSavingPlanShareAccountsResponse GetSavingPlanShareAccountsResponse
     */
    public function getSavingPlanShareAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanShareAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取节省计划实例客户自定义规则
     *  *
     * @param GetSavingPlanUserDeductRuleRequest $tmpReq  GetSavingPlanUserDeductRuleRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSavingPlanUserDeductRuleResponse GetSavingPlanUserDeductRuleResponse
     */
    public function getSavingPlanUserDeductRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSavingPlanUserDeductRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->spnInstanceCode)) {
            $query['SpnInstanceCode'] = $request->spnInstanceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取节省计划实例客户自定义规则
     *  *
     * @param GetSavingPlanUserDeductRuleRequest $request GetSavingPlanUserDeductRuleRequest
     *
     * @return GetSavingPlanUserDeductRuleResponse GetSavingPlanUserDeductRuleResponse
     */
    public function getSavingPlanUserDeductRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavingPlanUserDeductRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询优惠券设置的抵扣标签
     *  *
     * @param ListCouponDeductTagRequest $tmpReq  ListCouponDeductTagRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCouponDeductTagResponse ListCouponDeductTagResponse
     */
    public function listCouponDeductTagWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCouponDeductTagShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->couponId)) {
            $query['CouponId'] = $request->couponId;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询优惠券设置的抵扣标签
     *  *
     * @param ListCouponDeductTagRequest $request ListCouponDeductTagRequest
     *
     * @return ListCouponDeductTagResponse ListCouponDeductTagResponse
     */
    public function listCouponDeductTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCouponDeductTagWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户列表
     *  *
     * @param ListFundAccountRequest $request ListFundAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFundAccountResponse ListFundAccountResponse
     */
    public function listFundAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->queryOnlyInUse)) {
            $body['QueryOnlyInUse'] = $request->queryOnlyInUse;
        }
        if (!Utils::isUnset($request->queryOnlyManage)) {
            $body['QueryOnlyManage'] = $request->queryOnlyManage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户列表
     *  *
     * @param ListFundAccountRequest $request ListFundAccountRequest
     *
     * @return ListFundAccountResponse ListFundAccountResponse
     */
    public function listFundAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFundAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资金账户的付款关系
     *  *
     * @param ListFundAccountPayRelationRequest $request ListFundAccountPayRelationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFundAccountPayRelationResponse ListFundAccountPayRelationResponse
     */
    public function listFundAccountPayRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询资金账户的付款关系
     *  *
     * @param ListFundAccountPayRelationRequest $request ListFundAccountPayRelationRequest
     *
     * @return ListFundAccountPayRelationResponse ListFundAccountPayRelationResponse
     */
    public function listFundAccountPayRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFundAccountPayRelationWithOptions($request, $runtime);
    }

    /**
     * @summary 对客OpenAPI开票对象查询
     *  *
     * @param ListInvoiceCandidateRequest $tmpReq  ListInvoiceCandidateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInvoiceCandidateResponse ListInvoiceCandidateResponse
     */
    public function listInvoiceCandidateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInvoiceCandidateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->billingCycles)) {
            $request->billingCyclesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->billingCycles, 'BillingCycles', 'json');
        }
        if (!Utils::isUnset($tmpReq->businessIds)) {
            $request->businessIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->businessIds, 'BusinessIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->invoiceIssuers)) {
            $request->invoiceIssuersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->invoiceIssuers, 'InvoiceIssuers', 'json');
        }
        if (!Utils::isUnset($tmpReq->status)) {
            $request->statusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->status, 'Status', 'json');
        }
        if (!Utils::isUnset($tmpReq->types)) {
            $request->typesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->types, 'Types', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->billingCyclesShrink)) {
            $query['BillingCycles'] = $request->billingCyclesShrink;
        }
        if (!Utils::isUnset($request->businessIdsShrink)) {
            $query['BusinessIds'] = $request->businessIdsShrink;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->invoiceIssuersShrink)) {
            $query['InvoiceIssuers'] = $request->invoiceIssuersShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusShrink)) {
            $query['Status'] = $request->statusShrink;
        }
        if (!Utils::isUnset($request->typesShrink)) {
            $query['Types'] = $request->typesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 对客OpenAPI开票对象查询
     *  *
     * @param ListInvoiceCandidateRequest $request ListInvoiceCandidateRequest
     *
     * @return ListInvoiceCandidateResponse ListInvoiceCandidateResponse
     */
    public function listInvoiceCandidate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvoiceCandidateWithOptions($request, $runtime);
    }

    /**
     * @summary 发票抬头查询服务
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInvoiceTitleResponse ListInvoiceTitleResponse
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
     * @summary 发票抬头查询服务
     *  *
     * @return ListInvoiceTitleResponse ListInvoiceTitleResponse
     */
    public function listInvoiceTitle()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvoiceTitleWithOptions($runtime);
    }

    /**
     * @summary 查看已订阅的报告列表
     *  *
     * @param ListReportDefinitionsRequest $request ListReportDefinitionsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListReportDefinitionsResponse ListReportDefinitionsResponse
     */
    public function listReportDefinitionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查看已订阅的报告列表
     *  *
     * @param ListReportDefinitionsRequest $request ListReportDefinitionsRequest
     *
     * @return ListReportDefinitionsResponse ListReportDefinitionsResponse
     */
    public function listReportDefinitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportDefinitionsWithOptions($request, $runtime);
    }

    /**
     * @summary 修改财务单元
     *  *
     * @param ModifyCostCenterRequest $tmpReq  ModifyCostCenterRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCostCenterResponse ModifyCostCenterResponse
     */
    public function modifyCostCenterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyCostCenterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->costCenterEntityList)) {
            $request->costCenterEntityListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->costCenterEntityList, 'CostCenterEntityList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->costCenterEntityListShrink)) {
            $query['CostCenterEntityList'] = $request->costCenterEntityListShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 修改财务单元
     *  *
     * @param ModifyCostCenterRequest $request ModifyCostCenterRequest
     *
     * @return ModifyCostCenterResponse ModifyCostCenterResponse
     */
    public function modifyCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostCenterWithOptions($request, $runtime);
    }

    /**
     * @summary 修改财务单元规则
     *  *
     * @param ModifyCostCenterRuleRequest $tmpReq  ModifyCostCenterRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCostCenterRuleResponse ModifyCostCenterRuleResponse
     */
    public function modifyCostCenterRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyCostCenterRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterExpression)) {
            $request->filterExpressionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterExpression, 'FilterExpression', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterExpressionShrink)) {
            $query['FilterExpression'] = $request->filterExpressionShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $body['CostCenterId'] = $request->costCenterId;
        }
        if (!Utils::isUnset($request->ownerAccountId)) {
            $body['OwnerAccountId'] = $request->ownerAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 修改财务单元规则
     *  *
     * @param ModifyCostCenterRuleRequest $request ModifyCostCenterRuleRequest
     *
     * @return ModifyCostCenterRuleResponse ModifyCostCenterRuleResponse
     */
    public function modifyCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询财务单元
     *  *
     * @param QueryCostCenterRequest $tmpReq  QueryCostCenterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCostCenterResponse QueryCostCenterResponse
     */
    public function queryCostCenterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCostCenterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->ownerAccountId)) {
            $query['OwnerAccountId'] = $request->ownerAccountId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentCostCenterId)) {
            $query['ParentCostCenterId'] = $request->parentCostCenterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询财务单元
     *  *
     * @param QueryCostCenterRequest $request QueryCostCenterRequest
     *
     * @return QueryCostCenterResponse QueryCostCenterResponse
     */
    public function queryCostCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterWithOptions($request, $runtime);
    }

    /**
     * @summary 查询财务单元下资源信息
     *  *
     * @param QueryCostCenterResourceRequest $request QueryCostCenterResourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCostCenterResourceResponse QueryCostCenterResourceResponse
     */
    public function queryCostCenterResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIds)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $body['CostCenterId'] = $request->costCenterId;
        }
        if (!Utils::isUnset($request->ownerAccountId)) {
            $body['OwnerAccountId'] = $request->ownerAccountId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询财务单元下资源信息
     *  *
     * @param QueryCostCenterResourceRequest $request QueryCostCenterResourceRequest
     *
     * @return QueryCostCenterResourceResponse QueryCostCenterResourceResponse
     */
    public function queryCostCenterResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询财务单元规则
     *  *
     * @param QueryCostCenterRuleRequest $request QueryCostCenterRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCostCenterRuleResponse QueryCostCenterRuleResponse
     */
    public function queryCostCenterRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIds)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIds;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->costCenterId)) {
            $body['CostCenterId'] = $request->costCenterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询财务单元规则
     *  *
     * @param QueryCostCenterRuleRequest $request QueryCostCenterRuleRequest
     *
     * @return QueryCostCenterRuleResponse QueryCostCenterRuleResponse
     */
    public function queryCostCenterRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostCenterRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 设置资金账户的信控限额
     *  *
     * @param SetFundAccountCreditAmountRequest $request SetFundAccountCreditAmountRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFundAccountCreditAmountResponse SetFundAccountCreditAmountResponse
     */
    public function setFundAccountCreditAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creditAmount)) {
            $body['CreditAmount'] = $request->creditAmount;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 设置资金账户的信控限额
     *  *
     * @param SetFundAccountCreditAmountRequest $request SetFundAccountCreditAmountRequest
     *
     * @return SetFundAccountCreditAmountResponse SetFundAccountCreditAmountResponse
     */
    public function setFundAccountCreditAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFundAccountCreditAmountWithOptions($request, $runtime);
    }

    /**
     * @summary 设置资金账户低额预警
     *  *
     * @param SetFundAccountLowAvailableAmountAlarmRequest $request SetFundAccountLowAvailableAmountAlarmRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFundAccountLowAvailableAmountAlarmResponse SetFundAccountLowAvailableAmountAlarmResponse
     */
    public function setFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fundAccountId)) {
            $body['FundAccountId'] = $request->fundAccountId;
        }
        if (!Utils::isUnset($request->thresholdAmount)) {
            $body['ThresholdAmount'] = $request->thresholdAmount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 设置资金账户低额预警
     *  *
     * @param SetFundAccountLowAvailableAmountAlarmRequest $request SetFundAccountLowAvailableAmountAlarmRequest
     *
     * @return SetFundAccountLowAvailableAmountAlarmResponse SetFundAccountLowAvailableAmountAlarmResponse
     */
    public function setFundAccountLowAvailableAmountAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFundAccountLowAvailableAmountAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary 设置节省计划用户级抵扣规则
     *  *
     * @param SetSavingPlanUserDeductRuleRequest $tmpReq  SetSavingPlanUserDeductRuleRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSavingPlanUserDeductRuleResponse SetSavingPlanUserDeductRuleResponse
     */
    public function setSavingPlanUserDeductRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetSavingPlanUserDeductRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ecIdAccountIds)) {
            $request->ecIdAccountIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ecIdAccountIds, 'EcIdAccountIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->userDeductRules)) {
            $request->userDeductRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userDeductRules, 'UserDeductRules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ecIdAccountIdsShrink)) {
            $query['EcIdAccountIds'] = $request->ecIdAccountIdsShrink;
        }
        if (!Utils::isUnset($request->nbid)) {
            $query['Nbid'] = $request->nbid;
        }
        $body = [];
        if (!Utils::isUnset($request->spnInstanceCode)) {
            $body['SpnInstanceCode'] = $request->spnInstanceCode;
        }
        if (!Utils::isUnset($request->userDeductRulesShrink)) {
            $body['UserDeductRules'] = $request->userDeductRulesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 设置节省计划用户级抵扣规则
     *  *
     * @param SetSavingPlanUserDeductRuleRequest $request SetSavingPlanUserDeductRuleRequest
     *
     * @return SetSavingPlanUserDeductRuleResponse SetSavingPlanUserDeductRuleResponse
     */
    public function setSavingPlanUserDeductRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSavingPlanUserDeductRuleWithOptions($request, $runtime);
    }
}
