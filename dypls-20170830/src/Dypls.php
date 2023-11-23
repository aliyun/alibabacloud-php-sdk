<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyArInvoiceWithSourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyBlackInfoExportRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyBlackInfoExportResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyCallRecordExportRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyCallRecordExportResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyGroupNumberExportRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyGroupNumberExportResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyRingToneRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ApplyRingToneResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BatchOccupySecretResRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BatchOccupySecretResResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BatchOccupySecretResShrinkRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BindResourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BindResourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BlackOperateRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\BlackOperateResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateCertifyInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateCertifyInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateContactsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateContactsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateGroupDetailRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateGroupDetailResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateGroupInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateGroupInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateLogicalDeleteRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateLogicalDeleteResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateMessageCallbackRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateMessageCallbackResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateMessageQueueRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateMessageQueueResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreatePhysicalDeleteRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreatePhysicalDeleteResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreatePoolInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreatePoolInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateProductRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateProductResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateRingToneRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateRingToneResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateSubsTrialRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateSubsTrialResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateTransferRecordRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\CreateTransferRecordResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteCertifyInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteCertifyInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteContactsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteContactsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteGroupDetailRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteGroupDetailResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteMessageCallbackRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteMessageCallbackResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteRingToneRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DeleteRingToneResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DownloadCompleteRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\DownloadCompleteResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ExportResRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ExportResResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetEinvoicePdfDataRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetEinvoicePdfDataResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetSecretAsrInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetSecretAsrInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetUserResourceTagStatusRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\GetUserResourceTagStatusResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ListAsrLanguageModelsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ListAsrLanguageModelsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\LockResourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\LockResourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\OccupySecretResRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\OccupySecretResResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\OrderSucceededCallbackRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\OrderSucceededCallbackResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\PoolConfigRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\PoolConfigResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\PurchaseResourcesRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\PurchaseResourcesResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBindingDetailsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBindingDetailsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBlackListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBlackListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageInitDataRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageInitDataResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageResCountRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageResCountResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageResInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyPageResInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyResInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryBuyResInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCallRecordingListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCallRecordingListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCertifyInfoListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCertifyInfoListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCertifyOverviewInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCertifyOverviewInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryContactsListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryContactsListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCustInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryCustInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryDownloadUrlRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryDownloadUrlResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryEffectiveInvoiceListByBillNosRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryEffectiveInvoiceListByBillNosResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryExportResUrlRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryExportResUrlResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryGroupDetailListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryGroupDetailListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryGroupInfoListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryGroupInfoListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryInvoiceInfoByRequestNoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMessageCallbackInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMessageCallbackInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMessageQueueListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMessageQueueListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMonthlyBillInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMonthlyBillInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMonthlyStatisticsInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryMonthlyStatisticsInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryNoBuyTasksRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryNoBuyTasksResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryNoDistributeRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryNoDistributeResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryOpenStatusRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryOpenStatusResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageDetailRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageDetailResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageStatisticsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPackageStatisticsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolCityListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolCityListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolInfoListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolInfoListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolMonthlyBillInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolMonthlyBillInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolStatisticsInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolStatisticsInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolSummaryInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPoolSummaryInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPurchasedInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPurchasedInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPurchasedResListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryPurchasedResListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryQRCodeInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryQRCodeInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRecordingUrlRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRecordingUrlResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryResSummaryInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryResSummaryInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRingTonesRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRingTonesResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRingToneUrlRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryRingToneUrlResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QuerySimplePoolInfoListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QuerySimplePoolInfoListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryStatisticsInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryStatisticsInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTagOpenStatusRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTagOpenStatusResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferDetailsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferDetailsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferRecordRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferRecordResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferRecordsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryTransferRecordsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserDeleteStatusRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserDeleteStatusResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserResPoolInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryUserResPoolInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryVirtualOperationShowRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryVirtualOperationShowResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWarningListRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWarningListResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderStatisticsInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderStatisticsInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ReleaseResourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ReleaseResourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\TestTtsRingToneRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\TestTtsRingToneResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UnbindResourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UnbindResourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UnlockResourceRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UnlockResourceResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateContactsRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateContactsResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateGroupDetailRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateGroupDetailResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateGroupInfoRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateGroupInfoResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdatePoolNameRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdatePoolNameResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateResRemarkRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\UpdateResRemarkResponse;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ValidateOrderRequest;
use AlibabaCloud\SDK\Dypls\V20170830\Models\ValidateOrderResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dypls extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dypls', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyArInvoiceWithSourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyArInvoiceWithSourceResponse
     */
    public function applyArInvoiceWithSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body     = [];
        $bodyFlat = [];
        if (!Utils::isUnset($request->address)) {
            $bodyFlat['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->amount)) {
            $body['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->applier)) {
            $body['Applier'] = $request->applier;
        }
        if (!Utils::isUnset($request->applyDate)) {
            $body['ApplyDate'] = $request->applyDate;
        }
        if (!Utils::isUnset($request->currencyCode)) {
            $body['CurrencyCode'] = $request->currencyCode;
        }
        if (!Utils::isUnset($request->customer)) {
            $bodyFlat['Customer'] = $request->customer;
        }
        if (!Utils::isUnset($request->encryptProps)) {
            $bodyFlat['EncryptProps'] = $request->encryptProps;
        }
        if (!Utils::isUnset($request->excludingTaxAmount)) {
            $body['ExcludingTaxAmount'] = $request->excludingTaxAmount;
        }
        if (!Utils::isUnset($request->inputType)) {
            $body['InputType'] = $request->inputType;
        }
        if (!Utils::isUnset($request->invoiceType)) {
            $body['InvoiceType'] = $request->invoiceType;
        }
        if (!Utils::isUnset($request->isMerged)) {
            $body['IsMerged'] = $request->isMerged;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->materialType)) {
            $body['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->ouCode)) {
            $body['OuCode'] = $request->ouCode;
        }
        if (!Utils::isUnset($request->purchaserBankInfo)) {
            $body['PurchaserBankInfo'] = $request->purchaserBankInfo;
        }
        if (!Utils::isUnset($request->purchaserContactInfo)) {
            $body['PurchaserContactInfo'] = $request->purchaserContactInfo;
        }
        if (!Utils::isUnset($request->purchaserName)) {
            $body['PurchaserName'] = $request->purchaserName;
        }
        if (!Utils::isUnset($request->purchaserTaxNo)) {
            $body['PurchaserTaxNo'] = $request->purchaserTaxNo;
        }
        if (!Utils::isUnset($request->requestNo)) {
            $body['RequestNo'] = $request->requestNo;
        }
        if (!Utils::isUnset($request->sign)) {
            $body['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->sourceList)) {
            $body['SourceList'] = $request->sourceList;
        }
        if (!Utils::isUnset($request->taxAmount)) {
            $body['TaxAmount'] = $request->taxAmount;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyArInvoiceWithSource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyArInvoiceWithSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyArInvoiceWithSourceRequest $request
     *
     * @return ApplyArInvoiceWithSourceResponse
     */
    public function applyArInvoiceWithSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyArInvoiceWithSourceWithOptions($request, $runtime);
    }

    /**
     * @param ApplyBlackInfoExportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ApplyBlackInfoExportResponse
     */
    public function applyBlackInfoExportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyBlackInfoExport',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyBlackInfoExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyBlackInfoExportRequest $request
     *
     * @return ApplyBlackInfoExportResponse
     */
    public function applyBlackInfoExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyBlackInfoExportWithOptions($request, $runtime);
    }

    /**
     * @param ApplyCallRecordExportRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ApplyCallRecordExportResponse
     */
    public function applyCallRecordExportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->callDate)) {
            $query['CallDate'] = $request->callDate;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyCallRecordExport',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCallRecordExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyCallRecordExportRequest $request
     *
     * @return ApplyCallRecordExportResponse
     */
    public function applyCallRecordExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCallRecordExportWithOptions($request, $runtime);
    }

    /**
     * @param ApplyGroupNumberExportRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ApplyGroupNumberExportResponse
     */
    public function applyGroupNumberExportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyGroupNumberExport',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyGroupNumberExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyGroupNumberExportRequest $request
     *
     * @return ApplyGroupNumberExportResponse
     */
    public function applyGroupNumberExport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyGroupNumberExportWithOptions($request, $runtime);
    }

    /**
     * @param ApplyRingToneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ApplyRingToneResponse
     */
    public function applyRingToneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playType)) {
            $query['PlayType'] = $request->playType;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyRingTone',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyRingToneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyRingToneRequest $request
     *
     * @return ApplyRingToneResponse
     */
    public function applyRingTone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyRingToneWithOptions($request, $runtime);
    }

    /**
     * @param BatchOccupySecretResRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return BatchOccupySecretResResponse
     */
    public function batchOccupySecretResWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchOccupySecretResShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->batchOccupyList)) {
            $request->batchOccupyListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->batchOccupyList, 'BatchOccupyList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->batchOccupyListShrink)) {
            $query['BatchOccupyList'] = $request->batchOccupyListShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchOccupySecretRes',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchOccupySecretResResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchOccupySecretResRequest $request
     *
     * @return BatchOccupySecretResResponse
     */
    public function batchOccupySecretRes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchOccupySecretResWithOptions($request, $runtime);
    }

    /**
     * @param BindResourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindResourceResponse
     */
    public function bindResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asrModelId)) {
            $query['AsrModelId'] = $request->asrModelId;
        }
        if (!Utils::isUnset($request->asrStatus)) {
            $query['AsrStatus'] = $request->asrStatus;
        }
        if (!Utils::isUnset($request->axnExtensionB)) {
            $query['AxnExtensionB'] = $request->axnExtensionB;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->expTime)) {
            $query['ExpTime'] = $request->expTime;
        }
        if (!Utils::isUnset($request->isRecord)) {
            $query['IsRecord'] = $request->isRecord;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindResource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindResourceRequest $request
     *
     * @return BindResourceResponse
     */
    public function bindResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindResourceWithOptions($request, $runtime);
    }

    /**
     * @param BlackOperateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BlackOperateResponse
     */
    public function blackOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->blackMap)) {
            $query['BlackMap'] = $request->blackMap;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BlackOperate',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BlackOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BlackOperateRequest $request
     *
     * @return BlackOperateResponse
     */
    public function blackOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blackOperateWithOptions($request, $runtime);
    }

    /**
     * @param CreateCertifyInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCertifyInfoResponse
     */
    public function createCertifyInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNo)) {
            $query['PhoneNo'] = $request->phoneNo;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCertifyInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCertifyInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCertifyInfoRequest $request
     *
     * @return CreateCertifyInfoResponse
     */
    public function createCertifyInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertifyInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateContactsResponse
     */
    public function createContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateContacts',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateContactsRequest $request
     *
     * @return CreateContactsResponse
     */
    public function createContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContactsWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateGroupDetailResponse
     */
    public function createGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupDetail',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupDetailRequest $request
     *
     * @return CreateGroupDetailResponse
     */
    public function createGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateGroupInfoResponse
     */
    public function createGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupInfoRequest $request
     *
     * @return CreateGroupInfoResponse
     */
    public function createGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateLogicalDeleteRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLogicalDeleteResponse
     */
    public function createLogicalDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLogicalDelete',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLogicalDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLogicalDeleteRequest $request
     *
     * @return CreateLogicalDeleteResponse
     */
    public function createLogicalDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogicalDeleteWithOptions($request, $runtime);
    }

    /**
     * @param CreateMessageCallbackRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMessageCallbackResponse
     */
    public function createMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMessageCallback',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMessageCallbackRequest $request
     *
     * @return CreateMessageCallbackResponse
     */
    public function createMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param CreateMessageQueueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMessageQueueResponse
     */
    public function createMessageQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billIds)) {
            $query['BillIds'] = $request->billIds;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->queueTitle)) {
            $query['QueueTitle'] = $request->queueTitle;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMessageQueue',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMessageQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMessageQueueRequest $request
     *
     * @return CreateMessageQueueResponse
     */
    public function createMessageQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageQueueWithOptions($request, $runtime);
    }

    /**
     * @param CreatePhysicalDeleteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePhysicalDeleteResponse
     */
    public function createPhysicalDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePhysicalDelete',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhysicalDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePhysicalDeleteRequest $request
     *
     * @return CreatePhysicalDeleteResponse
     */
    public function createPhysicalDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhysicalDeleteWithOptions($request, $runtime);
    }

    /**
     * @param CreatePoolInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePoolInfoResponse
     */
    public function createPoolInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePoolInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePoolInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePoolInfoRequest $request
     *
     * @return CreatePoolInfoResponse
     */
    public function createPoolInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPoolInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->prodId)) {
            $query['ProdId'] = $request->prodId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProduct',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * @param CreateRingToneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateRingToneResponse
     */
    public function createRingToneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $query['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playType)) {
            $query['PlayType'] = $request->playType;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ringName)) {
            $query['RingName'] = $request->ringName;
        }
        if (!Utils::isUnset($request->tts)) {
            $query['Tts'] = $request->tts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRingTone',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRingToneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRingToneRequest $request
     *
     * @return CreateRingToneResponse
     */
    public function createRingTone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRingToneWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubsTrialRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSubsTrialResponse
     */
    public function createSubsTrialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneA)) {
            $query['PhoneA'] = $request->phoneA;
        }
        if (!Utils::isUnset($request->phoneB)) {
            $query['PhoneB'] = $request->phoneB;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSubsTrial',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubsTrialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubsTrialRequest $request
     *
     * @return CreateSubsTrialResponse
     */
    public function createSubsTrial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubsTrialWithOptions($request, $runtime);
    }

    /**
     * @param CreateTransferRecordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTransferRecordResponse
     */
    public function createTransferRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->originBillId)) {
            $query['OriginBillId'] = $request->originBillId;
        }
        if (!Utils::isUnset($request->originName)) {
            $query['OriginName'] = $request->originName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->targetBillId)) {
            $query['TargetBillId'] = $request->targetBillId;
        }
        if (!Utils::isUnset($request->targetName)) {
            $query['TargetName'] = $request->targetName;
        }
        if (!Utils::isUnset($request->total)) {
            $query['Total'] = $request->total;
        }
        if (!Utils::isUnset($request->transferType)) {
            $query['TransferType'] = $request->transferType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTransferRecord',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTransferRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTransferRecordRequest $request
     *
     * @return CreateTransferRecordResponse
     */
    public function createTransferRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransferRecordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCertifyInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCertifyInfoResponse
     */
    public function deleteCertifyInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certifyId)) {
            $query['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCertifyInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCertifyInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCertifyInfoRequest $request
     *
     * @return DeleteCertifyInfoResponse
     */
    public function deleteCertifyInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertifyInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteContactsResponse
     */
    public function deleteContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContacts',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactsRequest $request
     *
     * @return DeleteContactsResponse
     */
    public function deleteContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteGroupDetailResponse
     */
    public function deleteGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->idList)) {
            $query['IdList'] = $request->idList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupDetail',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupDetailRequest $request
     *
     * @return DeleteGroupDetailResponse
     */
    public function deleteGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMessageCallback',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRingToneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteRingToneResponse
     */
    public function deleteRingToneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRingTone',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRingToneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRingToneRequest $request
     *
     * @return DeleteRingToneResponse
     */
    public function deleteRingTone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRingToneWithOptions($request, $runtime);
    }

    /**
     * @param DownloadCompleteRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DownloadCompleteResponse
     */
    public function downloadCompleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadComplete',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadCompleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadCompleteRequest $request
     *
     * @return DownloadCompleteResponse
     */
    public function downloadComplete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadCompleteWithOptions($request, $runtime);
    }

    /**
     * @param ExportResRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ExportResResponse
     */
    public function exportResWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resBindStatus)) {
            $query['ResBindStatus'] = $request->resBindStatus;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportRes',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportResResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportResRequest $request
     *
     * @return ExportResResponse
     */
    public function exportRes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportResWithOptions($request, $runtime);
    }

    /**
     * @param GetEinvoicePdfDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEinvoicePdfDataResponse
     */
    public function getEinvoicePdfDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->customer)) {
            $bodyFlat['Customer'] = $request->customer;
        }
        if (!Utils::isUnset($request->encryptProps)) {
            $bodyFlat['EncryptProps'] = $request->encryptProps;
        }
        if (!Utils::isUnset($request->invoiceCode)) {
            $body['InvoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            $body['InvoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->sign)) {
            $body['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEinvoicePdfData',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEinvoicePdfDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEinvoicePdfDataRequest $request
     *
     * @return GetEinvoicePdfDataResponse
     */
    public function getEinvoicePdfData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEinvoicePdfDataWithOptions($request, $runtime);
    }

    /**
     * @param GetSecretAsrInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSecretAsrInfoResponse
     */
    public function getSecretAsrInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->callTime)) {
            $query['CallTime'] = $request->callTime;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSecretAsrInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSecretAsrInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSecretAsrInfoRequest $request
     *
     * @return GetSecretAsrInfoResponse
     */
    public function getSecretAsrInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecretAsrInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserResourceTagStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserResourceTagStatusResponse
     */
    public function getUserResourceTagStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserResourceTagStatus',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResourceTagStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserResourceTagStatusRequest $request
     *
     * @return GetUserResourceTagStatusResponse
     */
    public function getUserResourceTagStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserResourceTagStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListAsrLanguageModelsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAsrLanguageModelsResponse
     */
    public function listAsrLanguageModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAsrLanguageModels',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAsrLanguageModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAsrLanguageModelsRequest $request
     *
     * @return ListAsrLanguageModelsResponse
     */
    public function listAsrLanguageModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsrLanguageModelsWithOptions($request, $runtime);
    }

    /**
     * @param LockResourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return LockResourceResponse
     */
    public function lockResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockResource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockResourceRequest $request
     *
     * @return LockResourceResponse
     */
    public function lockResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockResourceWithOptions($request, $runtime);
    }

    /**
     * @param OccupySecretResRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OccupySecretResResponse
     */
    public function occupySecretResWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->isDisplayPool)) {
            $query['IsDisplayPool'] = $request->isDisplayPool;
        }
        if (!Utils::isUnset($request->noLike)) {
            $query['NoLike'] = $request->noLike;
        }
        if (!Utils::isUnset($request->orderDetailId)) {
            $query['OrderDetailId'] = $request->orderDetailId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->partnerKey)) {
            $query['PartnerKey'] = $request->partnerKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNoType)) {
            $query['SecretNoType'] = $request->secretNoType;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $query['TotalCount'] = $request->totalCount;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['secretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OccupySecretRes',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OccupySecretResResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OccupySecretResRequest $request
     *
     * @return OccupySecretResResponse
     */
    public function occupySecretRes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->occupySecretResWithOptions($request, $runtime);
    }

    /**
     * @param OrderSucceededCallbackRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OrderSucceededCallbackResponse
     */
    public function orderSucceededCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderSucceededCallback',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderSucceededCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderSucceededCallbackRequest $request
     *
     * @return OrderSucceededCallbackResponse
     */
    public function orderSucceededCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderSucceededCallbackWithOptions($request, $runtime);
    }

    /**
     * @param PoolConfigRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PoolConfigResponse
     */
    public function poolConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $query['CallbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->frozenDay)) {
            $query['FrozenDay'] = $request->frozenDay;
        }
        if (!Utils::isUnset($request->needAllCallRecords)) {
            $query['NeedAllCallRecords'] = $request->needAllCallRecords;
        }
        if (!Utils::isUnset($request->openSmsWhite)) {
            $query['OpenSmsWhite'] = $request->openSmsWhite;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolWarningLimit)) {
            $query['PoolWarningLimit'] = $request->poolWarningLimit;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->selectXMode)) {
            $query['SelectXMode'] = $request->selectXMode;
        }
        if (!Utils::isUnset($request->smartSmsWhitelist)) {
            $query['SmartSmsWhitelist'] = $request->smartSmsWhitelist;
        }
        if (!Utils::isUnset($request->smsChannel)) {
            $query['SmsChannel'] = $request->smsChannel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PoolConfig',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PoolConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PoolConfigRequest $request
     *
     * @return PoolConfigResponse
     */
    public function poolConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->poolConfigWithOptions($request, $runtime);
    }

    /**
     * @param PurchaseResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PurchaseResourcesResponse
     */
    public function purchaseResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->buyNumber)) {
            $query['BuyNumber'] = $request->buyNumber;
        }
        if (!Utils::isUnset($request->isDisplayPool)) {
            $query['IsDisplayPool'] = $request->isDisplayPool;
        }
        if (!Utils::isUnset($request->noLike)) {
            $query['NoLike'] = $request->noLike;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionName)) {
            $query['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        if (!Utils::isUnset($request->usageScenarios)) {
            $query['UsageScenarios'] = $request->usageScenarios;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PurchaseResources',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurchaseResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PurchaseResourcesRequest $request
     *
     * @return PurchaseResourcesResponse
     */
    public function purchaseResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseResourcesWithOptions($request, $runtime);
    }

    /**
     * @param QueryBindingDetailsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryBindingDetailsResponse
     */
    public function queryBindingDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        if (!Utils::isUnset($request->subId)) {
            $query['SubId'] = $request->subId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBindingDetails',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBindingDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBindingDetailsRequest $request
     *
     * @return QueryBindingDetailsResponse
     */
    public function queryBindingDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBindingDetailsWithOptions($request, $runtime);
    }

    /**
     * @param QueryBlackListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryBlackListResponse
     */
    public function queryBlackListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->blackPrefix)) {
            $query['BlackPrefix'] = $request->blackPrefix;
        }
        if (!Utils::isUnset($request->blackType)) {
            $query['BlackType'] = $request->blackType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBlackList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBlackListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBlackListRequest $request
     *
     * @return QueryBlackListResponse
     */
    public function queryBlackList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlackListWithOptions($request, $runtime);
    }

    /**
     * @param QueryBuyPageInitDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryBuyPageInitDataResponse
     */
    public function queryBuyPageInitDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBuyPageInitData',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBuyPageInitDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBuyPageInitDataRequest $request
     *
     * @return QueryBuyPageInitDataResponse
     */
    public function queryBuyPageInitData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuyPageInitDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryBuyPageResCountRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryBuyPageResCountResponse
     */
    public function queryBuyPageResCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->like)) {
            $query['Like'] = $request->like;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBuyPageResCount',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBuyPageResCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBuyPageResCountRequest $request
     *
     * @return QueryBuyPageResCountResponse
     */
    public function queryBuyPageResCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuyPageResCountWithOptions($request, $runtime);
    }

    /**
     * @param QueryBuyPageResInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryBuyPageResInfoResponse
     */
    public function queryBuyPageResInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->like)) {
            $query['Like'] = $request->like;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBuyPageResInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBuyPageResInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBuyPageResInfoRequest $request
     *
     * @return QueryBuyPageResInfoResponse
     */
    public function queryBuyPageResInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuyPageResInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryBuyResInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryBuyResInfoResponse
     */
    public function queryBuyResInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->like)) {
            $query['Like'] = $request->like;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBuyResInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBuyResInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBuyResInfoRequest $request
     *
     * @return QueryBuyResInfoResponse
     */
    public function queryBuyResInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuyResInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryCallRecordingListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCallRecordingListResponse
     */
    public function queryCallRecordingListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->callDate)) {
            $query['CallDate'] = $request->callDate;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNoA)) {
            $query['PhoneNoA'] = $request->phoneNoA;
        }
        if (!Utils::isUnset($request->phoneNoB)) {
            $query['PhoneNoB'] = $request->phoneNoB;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCallRecordingList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCallRecordingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCallRecordingListRequest $request
     *
     * @return QueryCallRecordingListResponse
     */
    public function queryCallRecordingList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallRecordingListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCertifyInfoListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCertifyInfoListResponse
     */
    public function queryCertifyInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certifyStatus)) {
            $query['CertifyStatus'] = $request->certifyStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNo)) {
            $query['PhoneNo'] = $request->phoneNo;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCertifyInfoList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCertifyInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCertifyInfoListRequest $request
     *
     * @return QueryCertifyInfoListResponse
     */
    public function queryCertifyInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCertifyInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCertifyOverviewInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCertifyOverviewInfoResponse
     */
    public function queryCertifyOverviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCertifyOverviewInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCertifyOverviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCertifyOverviewInfoRequest $request
     *
     * @return QueryCertifyOverviewInfoResponse
     */
    public function queryCertifyOverviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCertifyOverviewInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryContactsListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryContactsListResponse
     */
    public function queryContactsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryContactsList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryContactsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryContactsListRequest $request
     *
     * @return QueryContactsListResponse
     */
    public function queryContactsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactsListWithOptions($request, $runtime);
    }

    /**
     * @param QueryCustInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCustInfoResponse
     */
    public function queryCustInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCustInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCustInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCustInfoRequest $request
     *
     * @return QueryCustInfoResponse
     */
    public function queryCustInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryDownloadUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDownloadUrlResponse
     */
    public function queryDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDownloadUrl',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDownloadUrlRequest $request
     *
     * @return QueryDownloadUrlResponse
     */
    public function queryDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryEffectiveInvoiceListByBillNosRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryEffectiveInvoiceListByBillNosResponse
     */
    public function queryEffectiveInvoiceListByBillNosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->billNo)) {
            $body['BillNo'] = $request->billNo;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->encryptProps)) {
            $bodyFlat['EncryptProps'] = $request->encryptProps;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->majorBillNo)) {
            $body['MajorBillNo'] = $request->majorBillNo;
        }
        if (!Utils::isUnset($request->ouCode)) {
            $body['OuCode'] = $request->ouCode;
        }
        if (!Utils::isUnset($request->relatedSystem)) {
            $body['RelatedSystem'] = $request->relatedSystem;
        }
        if (!Utils::isUnset($request->sign)) {
            $body['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryEffectiveInvoiceListByBillNos',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEffectiveInvoiceListByBillNosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEffectiveInvoiceListByBillNosRequest $request
     *
     * @return QueryEffectiveInvoiceListByBillNosResponse
     */
    public function queryEffectiveInvoiceListByBillNos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEffectiveInvoiceListByBillNosWithOptions($request, $runtime);
    }

    /**
     * @param QueryExportResUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryExportResUrlResponse
     */
    public function queryExportResUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryExportResUrl',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryExportResUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryExportResUrlRequest $request
     *
     * @return QueryExportResUrlResponse
     */
    public function queryExportResUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExportResUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryGroupDetailListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryGroupDetailListResponse
     */
    public function queryGroupDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGroupDetailList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGroupDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGroupDetailListRequest $request
     *
     * @return QueryGroupDetailListResponse
     */
    public function queryGroupDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGroupDetailListWithOptions($request, $runtime);
    }

    /**
     * @param QueryGroupInfoListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryGroupInfoListResponse
     */
    public function queryGroupInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->queryKey)) {
            $query['QueryKey'] = $request->queryKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGroupInfoList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGroupInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGroupInfoListRequest $request
     *
     * @return QueryGroupInfoListResponse
     */
    public function queryGroupInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGroupInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryInvoiceInfoByRequestNoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryInvoiceInfoByRequestNoResponse
     */
    public function queryInvoiceInfoByRequestNoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->encryptProps)) {
            $bodyFlat['EncryptProps'] = $request->encryptProps;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->relatedSystem)) {
            $body['RelatedSystem'] = $request->relatedSystem;
        }
        if (!Utils::isUnset($request->requestNo)) {
            $body['RequestNo'] = $request->requestNo;
        }
        if (!Utils::isUnset($request->sign)) {
            $body['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryInvoiceInfoByRequestNo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryInvoiceInfoByRequestNoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryInvoiceInfoByRequestNoRequest $request
     *
     * @return QueryInvoiceInfoByRequestNoResponse
     */
    public function queryInvoiceInfoByRequestNo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInvoiceInfoByRequestNoWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessageCallbackInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryMessageCallbackInfoResponse
     */
    public function queryMessageCallbackInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessageCallbackInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessageCallbackInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMessageCallbackInfoRequest $request
     *
     * @return QueryMessageCallbackInfoResponse
     */
    public function queryMessageCallbackInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageCallbackInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryMessageQueueListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMessageQueueListResponse
     */
    public function queryMessageQueueListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMessageQueueList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMessageQueueListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMessageQueueListRequest $request
     *
     * @return QueryMessageQueueListResponse
     */
    public function queryMessageQueueList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageQueueListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonthlyBillInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMonthlyBillInfoResponse
     */
    public function queryMonthlyBillInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billCycle)) {
            $query['BillCycle'] = $request->billCycle;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemName)) {
            $query['ItemName'] = $request->itemName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subjectItemId)) {
            $query['SubjectItemId'] = $request->subjectItemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonthlyBillInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonthlyBillInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMonthlyBillInfoRequest $request
     *
     * @return QueryMonthlyBillInfoResponse
     */
    public function queryMonthlyBillInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonthlyStatisticsInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryMonthlyStatisticsInfoResponse
     */
    public function queryMonthlyStatisticsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonthlyStatisticsInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonthlyStatisticsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMonthlyStatisticsInfoRequest $request
     *
     * @return QueryMonthlyStatisticsInfoResponse
     */
    public function queryMonthlyStatisticsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyStatisticsInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryNoBuyTasksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryNoBuyTasksResponse
     */
    public function queryNoBuyTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNoBuyTasks',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNoBuyTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryNoBuyTasksRequest $request
     *
     * @return QueryNoBuyTasksResponse
     */
    public function queryNoBuyTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNoBuyTasksWithOptions($request, $runtime);
    }

    /**
     * @param QueryNoDistributeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryNoDistributeResponse
     */
    public function queryNoDistributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNoDistribute',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNoDistributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryNoDistributeRequest $request
     *
     * @return QueryNoDistributeResponse
     */
    public function queryNoDistribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNoDistributeWithOptions($request, $runtime);
    }

    /**
     * @param QueryOpenStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryOpenStatusResponse
     */
    public function queryOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->busOffer)) {
            $query['BusOffer'] = $request->busOffer;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->prodId)) {
            $query['ProdId'] = $request->prodId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOpenStatus',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOpenStatusRequest $request
     *
     * @return QueryOpenStatusResponse
     */
    public function queryOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryPackageDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPackageDetailResponse
     */
    public function queryPackageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPackageDetail',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPackageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPackageDetailRequest $request
     *
     * @return QueryPackageDetailResponse
     */
    public function queryPackageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPackageDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryPackageListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPackageListResponse
     */
    public function queryPackageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billCycle)) {
            $query['BillCycle'] = $request->billCycle;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPackageList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPackageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPackageListRequest $request
     *
     * @return QueryPackageListResponse
     */
    public function queryPackageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPackageListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPackageStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPackageStatisticsResponse
     */
    public function queryPackageStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPackageStatistics',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPackageStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPackageStatisticsRequest $request
     *
     * @return QueryPackageStatisticsResponse
     */
    public function queryPackageStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPackageStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param QueryPoolCityListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPoolCityListResponse
     */
    public function queryPoolCityListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPoolCityList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPoolCityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPoolCityListRequest $request
     *
     * @return QueryPoolCityListResponse
     */
    public function queryPoolCityList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPoolCityListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPoolInfoListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPoolInfoListResponse
     */
    public function queryPoolInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isFuzzyQuery)) {
            $query['IsFuzzyQuery'] = $request->isFuzzyQuery;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->searchParam)) {
            $query['SearchParam'] = $request->searchParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPoolInfoList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPoolInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPoolInfoListRequest $request
     *
     * @return QueryPoolInfoListResponse
     */
    public function queryPoolInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPoolInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryPoolMonthlyBillInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryPoolMonthlyBillInfoResponse
     */
    public function queryPoolMonthlyBillInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billCycle)) {
            $query['BillCycle'] = $request->billCycle;
        }
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPoolMonthlyBillInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPoolMonthlyBillInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPoolMonthlyBillInfoRequest $request
     *
     * @return QueryPoolMonthlyBillInfoResponse
     */
    public function queryPoolMonthlyBillInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPoolMonthlyBillInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryPoolStatisticsInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryPoolStatisticsInfoResponse
     */
    public function queryPoolStatisticsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPoolStatisticsInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPoolStatisticsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPoolStatisticsInfoRequest $request
     *
     * @return QueryPoolStatisticsInfoResponse
     */
    public function queryPoolStatisticsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPoolStatisticsInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryPoolSummaryInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryPoolSummaryInfoResponse
     */
    public function queryPoolSummaryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPoolSummaryInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPoolSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPoolSummaryInfoRequest $request
     *
     * @return QueryPoolSummaryInfoResponse
     */
    public function queryPoolSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPoolSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryPurchasedInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryPurchasedInfoResponse
     */
    public function queryPurchasedInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPurchasedInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPurchasedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPurchasedInfoRequest $request
     *
     * @return QueryPurchasedInfoResponse
     */
    public function queryPurchasedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPurchasedInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryPurchasedResListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPurchasedResListResponse
     */
    public function queryPurchasedResListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->isDisplayPool)) {
            $query['IsDisplayPool'] = $request->isDisplayPool;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resBindStatus)) {
            $query['ResBindStatus'] = $request->resBindStatus;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPurchasedResList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPurchasedResListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPurchasedResListRequest $request
     *
     * @return QueryPurchasedResListResponse
     */
    public function queryPurchasedResList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPurchasedResListWithOptions($request, $runtime);
    }

    /**
     * @param QueryQRCodeInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryQRCodeInfoResponse
     */
    public function queryQRCodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNumber)) {
            $query['SecretNumber'] = $request->secretNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryQRCodeInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryQRCodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryQRCodeInfoRequest $request
     *
     * @return QueryQRCodeInfoResponse
     */
    public function queryQRCodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryQRCodeInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordingUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryRecordingUrlResponse
     */
    public function queryRecordingUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->callDate)) {
            $query['CallDate'] = $request->callDate;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordingUrl',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordingUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRecordingUrlRequest $request
     *
     * @return QueryRecordingUrlResponse
     */
    public function queryRecordingUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordingUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryResSummaryInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryResSummaryInfoResponse
     */
    public function queryResSummaryInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryResSummaryInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryResSummaryInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryResSummaryInfoRequest $request
     *
     * @return QueryResSummaryInfoResponse
     */
    public function queryResSummaryInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResSummaryInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryRingToneUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRingToneUrlResponse
     */
    public function queryRingToneUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $query['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRingToneUrl',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRingToneUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRingToneUrlRequest $request
     *
     * @return QueryRingToneUrlResponse
     */
    public function queryRingToneUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRingToneUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryRingTonesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryRingTonesResponse
     */
    public function queryRingTonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playType)) {
            $query['PlayType'] = $request->playType;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRingTones',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRingTonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRingTonesRequest $request
     *
     * @return QueryRingTonesResponse
     */
    public function queryRingTones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRingTonesWithOptions($request, $runtime);
    }

    /**
     * @param QuerySimplePoolInfoListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySimplePoolInfoListResponse
     */
    public function querySimplePoolInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySimplePoolInfoList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySimplePoolInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySimplePoolInfoListRequest $request
     *
     * @return QuerySimplePoolInfoListResponse
     */
    public function querySimplePoolInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySimplePoolInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryStatisticsInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryStatisticsInfoResponse
     */
    public function queryStatisticsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStatisticsInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStatisticsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryStatisticsInfoRequest $request
     *
     * @return QueryStatisticsInfoResponse
     */
    public function queryStatisticsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStatisticsInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryTagOpenStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryTagOpenStatusResponse
     */
    public function queryTagOpenStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeKey)) {
            $query['AttributeKey'] = $request->attributeKey;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->subAttributeKey)) {
            $query['SubAttributeKey'] = $request->subAttributeKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTagOpenStatus',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTagOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTagOpenStatusRequest $request
     *
     * @return QueryTagOpenStatusResponse
     */
    public function queryTagOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferDetailsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTransferDetailsResponse
     */
    public function queryTransferDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferDetails',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTransferDetailsRequest $request
     *
     * @return QueryTransferDetailsResponse
     */
    public function queryTransferDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferDetailsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTransferRecordResponse
     */
    public function queryTransferRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferRecord',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTransferRecordRequest $request
     *
     * @return QueryTransferRecordResponse
     */
    public function queryTransferRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryTransferRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTransferRecordsResponse
     */
    public function queryTransferRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTransferRecords',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTransferRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTransferRecordsRequest $request
     *
     * @return QueryTransferRecordsResponse
     */
    public function queryTransferRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTransferRecordsWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserDeleteStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUserDeleteStatusResponse
     */
    public function queryUserDeleteStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['GmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['Hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['Interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['Invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->success)) {
            $query['Success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['TaskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['TaskIdentifier'] = $request->taskIdentifier;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserDeleteStatus',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserDeleteStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserDeleteStatusRequest $request
     *
     * @return QueryUserDeleteStatusResponse
     */
    public function queryUserDeleteStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserDeleteStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryUserInfoResponse
     */
    public function queryUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserInfoRequest $request
     *
     * @return QueryUserInfoResponse
     */
    public function queryUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserResPoolInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryUserResPoolInfoResponse
     */
    public function queryUserResPoolInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserResPoolInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserResPoolInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserResPoolInfoRequest $request
     *
     * @return QueryUserResPoolInfoResponse
     */
    public function queryUserResPoolInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserResPoolInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryVirtualOperationShowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryVirtualOperationShowResponse
     */
    public function queryVirtualOperationShowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVirtualOperationShow',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVirtualOperationShowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryVirtualOperationShowRequest $request
     *
     * @return QueryVirtualOperationShowResponse
     */
    public function queryVirtualOperationShow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVirtualOperationShowWithOptions($request, $runtime);
    }

    /**
     * @param QueryWarningListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryWarningListResponse
     */
    public function queryWarningListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWarningList',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWarningListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWarningListRequest $request
     *
     * @return QueryWarningListResponse
     */
    public function queryWarningList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWarningListWithOptions($request, $runtime);
    }

    /**
     * @param QueryWaybillOrderInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryWaybillOrderInfoResponse
     */
    public function queryWaybillOrderInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outerOrderCode)) {
            $query['OuterOrderCode'] = $request->outerOrderCode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWaybillOrderInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWaybillOrderInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWaybillOrderInfoRequest $request
     *
     * @return QueryWaybillOrderInfoResponse
     */
    public function queryWaybillOrderInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWaybillOrderInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryWaybillOrderStatisticsInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryWaybillOrderStatisticsInfoResponse
     */
    public function queryWaybillOrderStatisticsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWaybillOrderStatisticsInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWaybillOrderStatisticsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryWaybillOrderStatisticsInfoRequest $request
     *
     * @return QueryWaybillOrderStatisticsInfoResponse
     */
    public function queryWaybillOrderStatisticsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWaybillOrderStatisticsInfoWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseResourceResponse
     */
    public function releaseResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->isDisplayPool)) {
            $query['IsDisplayPool'] = $request->isDisplayPool;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseResource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseResourceRequest $request
     *
     * @return ReleaseResourceResponse
     */
    public function releaseResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseResourceWithOptions($request, $runtime);
    }

    /**
     * @param TestTtsRingToneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TestTtsRingToneResponse
     */
    public function testTtsRingToneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tts)) {
            $query['Tts'] = $request->tts;
        }
        if (!Utils::isUnset($request->voiceSpeed)) {
            $query['VoiceSpeed'] = $request->voiceSpeed;
        }
        if (!Utils::isUnset($request->voiceStyle)) {
            $query['VoiceStyle'] = $request->voiceStyle;
        }
        if (!Utils::isUnset($request->voiceType)) {
            $query['VoiceType'] = $request->voiceType;
        }
        if (!Utils::isUnset($request->voiceVolume)) {
            $query['VoiceVolume'] = $request->voiceVolume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TestTtsRingTone',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestTtsRingToneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestTtsRingToneRequest $request
     *
     * @return TestTtsRingToneResponse
     */
    public function testTtsRingTone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testTtsRingToneWithOptions($request, $runtime);
    }

    /**
     * @param UnbindResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnbindResourceResponse
     */
    public function unbindResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->bindIds)) {
            $query['BindIds'] = $request->bindIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindResource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindResourceRequest $request
     *
     * @return UnbindResourceResponse
     */
    public function unbindResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindResourceWithOptions($request, $runtime);
    }

    /**
     * @param UnlockResourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnlockResourceResponse
     */
    public function unlockResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockResource',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockResourceRequest $request
     *
     * @return UnlockResourceResponse
     */
    public function unlockResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockResourceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateContactsResponse
     */
    public function updateContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateContacts',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateContactsRequest $request
     *
     * @return UpdateContactsResponse
     */
    public function updateContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContactsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGroupDetailResponse
     */
    public function updateGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupDetail',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupDetailRequest $request
     *
     * @return UpdateGroupDetailResponse
     */
    public function updateGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateGroupInfoResponse
     */
    public function updateGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolKey)) {
            $query['PoolKey'] = $request->poolKey;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupInfo',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupInfoRequest $request
     *
     * @return UpdateGroupInfoResponse
     */
    public function updateGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePoolNameRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePoolNameResponse
     */
    public function updatePoolNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePoolName',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePoolNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePoolNameRequest $request
     *
     * @return UpdatePoolNameResponse
     */
    public function updatePoolName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePoolNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResRemarkRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateResRemarkResponse
     */
    public function updateResRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billId)) {
            $query['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resType)) {
            $query['ResType'] = $request->resType;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->secretNo)) {
            $query['SecretNo'] = $request->secretNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResRemark',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResRemarkRequest $request
     *
     * @return UpdateResRemarkResponse
     */
    public function updateResRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResRemarkWithOptions($request, $runtime);
    }

    /**
     * @param ValidateOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ValidateOrderResponse
     */
    public function validateOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateOrder',
            'version'     => '2017-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateOrderRequest $request
     *
     * @return ValidateOrderResponse
     */
    public function validateOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateOrderWithOptions($request, $runtime);
    }
}
