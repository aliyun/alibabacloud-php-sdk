<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CancelFundAccountLowAvailableAmountAlarmResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountTransferRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateFundAccountTransferResponse;
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
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountPayRelationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountPayRelationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetFundAccountCreditAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleShrinkRequest;
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 取消资金账户低额预警.
     *
     * @param request - CancelFundAccountLowAvailableAmountAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CancelFundAccountLowAvailableAmountAlarm',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelFundAccountLowAvailableAmountAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelFundAccountLowAvailableAmountAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消资金账户低额预警.
     *
     * @param request - CancelFundAccountLowAvailableAmountAlarmRequest
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
     * 创建资金账户划拨/回收.
     *
     * @param request - CreateFundAccountTransferRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateFundAccountTransfer',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFundAccountTransferResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFundAccountTransferResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建资金账户划拨/回收.
     *
     * @param request - CreateFundAccountTransferRequest
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
     * 查询资金账户可用金.
     *
     * @param request - GetFundAccountAvailableAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountAvailableAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountAvailableAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountAvailableAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户可用金.
     *
     * @param request - GetFundAccountAvailableAmountRequest
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
     * 查询资金账户可分配信控额度.
     *
     * @param request - GetFundAccountCanAllocateCreditAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountCanAllocateCreditAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountCanAllocateCreditAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountCanAllocateCreditAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户可分配信控额度.
     *
     * @param request - GetFundAccountCanAllocateCreditAmountRequest
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
     * 查询资金账户可回收金额.
     *
     * @param request - GetFundAccountCanRecycleAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountCanRecycleAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountCanRecycleAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountCanRecycleAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户可回收金额.
     *
     * @param request - GetFundAccountCanRecycleAmountRequest
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
     * 查询资金账户的可转出金额.
     *
     * @param request - GetFundAccountCanTransferAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountCanTransferAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountCanTransferAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountCanTransferAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户的可转出金额.
     *
     * @param request - GetFundAccountCanTransferAmountRequest
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
     * 查询资金账户可提现金额.
     *
     * @param request - GetFundAccountCanWithdrawAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountCanWithdrawAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountCanWithdrawAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountCanWithdrawAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户可提现金额.
     *
     * @param request - GetFundAccountCanWithdrawAmountRequest
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
     * 查询资金账户低额预警.
     *
     * @param request - GetFundAccountLowAvailableAmountAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetFundAccountLowAvailableAmountAlarm',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountLowAvailableAmountAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountLowAvailableAmountAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户低额预警.
     *
     * @param request - GetFundAccountLowAvailableAmountAlarmRequest
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
     * 查询资金账户收支明细.
     *
     * @param tmpReq - GetFundAccountTransactionDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFundAccountTransactionDetails',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFundAccountTransactionDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFundAccountTransactionDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户收支明细.
     *
     * @param request - GetFundAccountTransactionDetailsRequest
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
     * 查询资金账户列表.
     *
     * @param request - ListFundAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFundAccount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFundAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFundAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户列表.
     *
     * @param request - ListFundAccountRequest
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
     * 查询资金账户的付款关系.
     *
     * @param request - ListFundAccountPayRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFundAccountPayRelation',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFundAccountPayRelationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFundAccountPayRelationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询资金账户的付款关系.
     *
     * @param request - ListFundAccountPayRelationRequest
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
     * 设置资金账户的信控限额.
     *
     * @param request - SetFundAccountCreditAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'SetFundAccountCreditAmount',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetFundAccountCreditAmountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetFundAccountCreditAmountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置资金账户的信控限额.
     *
     * @param request - SetFundAccountCreditAmountRequest
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
     * 设置节省计划用户级抵扣规则.
     *
     * @param tmpReq - SetSavingPlanUserDeductRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetSavingPlanUserDeductRule',
            'version'     => '2023-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetSavingPlanUserDeductRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetSavingPlanUserDeductRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置节省计划用户级抵扣规则.
     *
     * @param request - SetSavingPlanUserDeductRuleRequest
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
}
