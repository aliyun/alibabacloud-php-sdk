<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetBillDetailFileListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetBillDetailFileListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCustomerOrderListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCustomerOrderListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCustomerOrderListShrinkRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetRenewalRateListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetRenewalRateListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerOrderListRequest;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerOrderListResponse;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerOrderListShrinkRequest;
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 查询账单导出文件.
     *
     * @param request - GetBillDetailFileListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetBillDetailFileListResponse
     *
     * @param GetBillDetailFileListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetBillDetailFileListResponse
     */
    public function getBillDetailFileListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billMonth) {
            @$query['BillMonth'] = $request->billMonth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBillDetailFileList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBillDetailFileListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBillDetailFileListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询账单导出文件.
     *
     * @param request - GetBillDetailFileListRequest
     * @returns GetBillDetailFileListResponse
     *
     * @param GetBillDetailFileListRequest $request
     *
     * @return GetBillDetailFileListResponse
     */
    public function getBillDetailFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBillDetailFileListWithOptions($request, $runtime);
    }

    /**
     * 查询伙伴佣金明细.
     *
     * @param request - GetCommissionDetailFileListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCommissionDetailFileListResponse
     *
     * @param GetCommissionDetailFileListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCommissionDetailFileListResponse
     */
    public function getCommissionDetailFileListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billMonth) {
            @$query['BillMonth'] = $request->billMonth;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommissionDetailFileList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCommissionDetailFileListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCommissionDetailFileListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询伙伴佣金明细.
     *
     * @param request - GetCommissionDetailFileListRequest
     * @returns GetCommissionDetailFileListResponse
     *
     * @param GetCommissionDetailFileListRequest $request
     *
     * @return GetCommissionDetailFileListResponse
     */
    public function getCommissionDetailFileList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommissionDetailFileListWithOptions($request, $runtime);
    }

    /**
     * 查询伙伴拓客订单.
     *
     * @param tmpReq - GetCustomerOrderListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCustomerOrderListResponse
     *
     * @param GetCustomerOrderListRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetCustomerOrderListResponse
     */
    public function getCustomerOrderListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetCustomerOrderListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderTypeList) {
            $request->orderTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderTypeList, 'OrderTypeList', 'json');
        }

        $query = [];
        if (null !== $request->customerAccount) {
            @$query['CustomerAccount'] = $request->customerAccount;
        }

        if (null !== $request->customerUid) {
            @$query['CustomerUid'] = $request->customerUid;
        }

        if (null !== $request->orderCreateAfter) {
            @$query['OrderCreateAfter'] = $request->orderCreateAfter;
        }

        if (null !== $request->orderCreateBefore) {
            @$query['OrderCreateBefore'] = $request->orderCreateBefore;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->orderPayAfter) {
            @$query['OrderPayAfter'] = $request->orderPayAfter;
        }

        if (null !== $request->orderPayBefore) {
            @$query['OrderPayBefore'] = $request->orderPayBefore;
        }

        if (null !== $request->orderStatus) {
            @$query['OrderStatus'] = $request->orderStatus;
        }

        if (null !== $request->orderTypeListShrink) {
            @$query['OrderTypeList'] = $request->orderTypeListShrink;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->payAmountAfter) {
            @$query['PayAmountAfter'] = $request->payAmountAfter;
        }

        if (null !== $request->payAmountBefore) {
            @$query['PayAmountBefore'] = $request->payAmountBefore;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->ramAccountForCustomerManager) {
            @$query['RamAccountForCustomerManager'] = $request->ramAccountForCustomerManager;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomerOrderList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomerOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomerOrderListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询伙伴拓客订单.
     *
     * @param request - GetCustomerOrderListRequest
     * @returns GetCustomerOrderListResponse
     *
     * @param GetCustomerOrderListRequest $request
     *
     * @return GetCustomerOrderListResponse
     */
    public function getCustomerOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerOrderListWithOptions($request, $runtime);
    }

    /**
     * 查询伙伴续费率.
     *
     * @param request - GetRenewalRateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRenewalRateListResponse
     *
     * @param GetRenewalRateListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRenewalRateListResponse
     */
    public function getRenewalRateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fiscalYearAndQuarter) {
            @$query['FiscalYearAndQuarter'] = $request->fiscalYearAndQuarter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRenewalRateList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRenewalRateListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRenewalRateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询伙伴续费率.
     *
     * @param request - GetRenewalRateListRequest
     * @returns GetRenewalRateListResponse
     *
     * @param GetRenewalRateListRequest $request
     *
     * @return GetRenewalRateListResponse
     */
    public function getRenewalRateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRenewalRateListWithOptions($request, $runtime);
    }

    /**
     * 查询二级分销商列表.
     *
     * @param request - GetSubPartnerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSubPartnerListResponse
     *
     * @param GetSubPartnerListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSubPartnerListResponse
     */
    public function getSubPartnerListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->subPartnerCompanyName) {
            @$query['SubPartnerCompanyName'] = $request->subPartnerCompanyName;
        }

        if (null !== $request->subPartnerPid) {
            @$query['SubPartnerPid'] = $request->subPartnerPid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubPartnerList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSubPartnerListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSubPartnerListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询二级分销商列表.
     *
     * @param request - GetSubPartnerListRequest
     * @returns GetSubPartnerListResponse
     *
     * @param GetSubPartnerListRequest $request
     *
     * @return GetSubPartnerListResponse
     */
    public function getSubPartnerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubPartnerListWithOptions($request, $runtime);
    }

    /**
     * 查询拓渠订单.
     *
     * @param tmpReq - GetSubPartnerOrderListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSubPartnerOrderListResponse
     *
     * @param GetSubPartnerOrderListRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetSubPartnerOrderListResponse
     */
    public function getSubPartnerOrderListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSubPartnerOrderListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderTypeList) {
            $request->orderTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderTypeList, 'OrderTypeList', 'json');
        }

        $query = [];
        if (null !== $request->orderCreateAfter) {
            @$query['OrderCreateAfter'] = $request->orderCreateAfter;
        }

        if (null !== $request->orderCreateBefore) {
            @$query['OrderCreateBefore'] = $request->orderCreateBefore;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->orderPayAfter) {
            @$query['OrderPayAfter'] = $request->orderPayAfter;
        }

        if (null !== $request->orderPayBefore) {
            @$query['OrderPayBefore'] = $request->orderPayBefore;
        }

        if (null !== $request->orderStatus) {
            @$query['OrderStatus'] = $request->orderStatus;
        }

        if (null !== $request->orderTypeListShrink) {
            @$query['OrderTypeList'] = $request->orderTypeListShrink;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->payAmountAfter) {
            @$query['PayAmountAfter'] = $request->payAmountAfter;
        }

        if (null !== $request->payAmountBefore) {
            @$query['PayAmountBefore'] = $request->payAmountBefore;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->subPartnerName) {
            @$query['SubPartnerName'] = $request->subPartnerName;
        }

        if (null !== $request->subPartnerUid) {
            @$query['SubPartnerUid'] = $request->subPartnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubPartnerOrderList',
            'version'     => '2025-02-27',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSubPartnerOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSubPartnerOrderListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询拓渠订单.
     *
     * @param request - GetSubPartnerOrderListRequest
     * @returns GetSubPartnerOrderListResponse
     *
     * @param GetSubPartnerOrderListRequest $request
     *
     * @return GetSubPartnerOrderListResponse
     */
    public function getSubPartnerOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubPartnerOrderListWithOptions($request, $runtime);
    }
}
