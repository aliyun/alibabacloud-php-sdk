<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AcceptPartnerNotificationRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AcceptPartnerNotificationResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ApplyNotaryPostRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ApplyNotaryPostResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AskAdjudicationFileRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AskAdjudicationFileResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\BindMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\BindMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CancelTradeOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CancelTradeOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckFlsmFillRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckFlsmFillResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckIfCollectedRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckIfCollectedResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkIconRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkIconResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineLoaRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineLoaResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineWTSRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineWTSResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ComplementIntentionUserIdRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ComplementIntentionUserIdResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmAdditionalMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmAdditionalMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmDissentOriginalRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConfirmDissentOriginalResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConvertImageToGrayRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ConvertImageToGrayResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CopyApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CopyApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateIntentionOrderGeneratingPayRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateIntentionOrderGeneratingPayResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateIntentionOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateIntentionOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateTrademarkOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CreateTrademarkOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteTmMonitorRuleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteTmMonitorRuleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteTrademarkApplicationRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DeleteTrademarkApplicationResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DenySupplementRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DenySupplementResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\FillLogisticsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\FillLogisticsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\FilterUnavailableCodesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\FilterUnavailableCodesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\FilterUnavailableCodesShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ForceUploadTrademarkOnsaleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ForceUploadTrademarkOnsaleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GenerateQrCodeRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GenerateQrCodeResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GenerateUploadFilePolicyRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GenerateUploadFilePolicyResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetAuthorizationLetterVersionRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetAuthorizationLetterVersionResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetDefaultPrincipalNameRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetDefaultPrincipalNameResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetDefaultPrincipalResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetNotaryOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetNotaryOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\GetSupportPrincipalNameResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertRenewInfoRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertRenewInfoResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertTmMonitorRuleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertTmMonitorRuleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertTmMonitorRuleShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListTrademarkSbjKeyRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListTrademarkSbjKeyResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ModifySubmitTransferMaterailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ModifySubmitTransferMaterailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ModifySubmitTransferMaterailShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\OperateProduceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\OperateProduceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\PartnerUpdateTrademarkNameRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\PartnerUpdateTrademarkNameResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCommunicationLogsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCommunicationLogsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryExtensionAttributeRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryExtensionAttributeResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionOwnerRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionOwnerResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionPriceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionPriceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMonitorKeywordsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMonitorKeywordsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOfficialFileCustomListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOfficialFileCustomListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOrderLogisticsListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOrderLogisticsListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOssResourcesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOssResourcesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryProduceListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryQrCodeUploadStatusRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryQrCodeUploadStatusResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySupplementDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySupplementDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTaskListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTaskListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmCollectionPageListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmCollectionPageListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeIntentionUserListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeIntentionUserListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationLogsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationLogsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsByIntentionResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberEspRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberEspResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkDetailByApplyNumberResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkOnSaleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkOnSaleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkUploadAuditResultRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkUploadAuditResultResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RecordBankBalanceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RecordBankBalanceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefundProduceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefundProduceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefuseAdditionalMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefuseAdditionalMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefuseApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RefuseApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RejectApplicantRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\RejectApplicantResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveClassificationConditionsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveClassificationConditionsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveExtensionAttributeRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveExtensionAttributeResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTaskForOfficialFileCustomRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTaskForOfficialFileCustomResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTaskRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTaskResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTradeMarkReviewMaterialDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTradeMarkReviewMaterialDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SaveTradeMarkReviewMaterialDetailShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbjOperateNewRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbjOperateNewResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbjOperateRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbjOperateResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceExecuteRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceExecuteResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceExecuteShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceHasRunningTaskBatchQueryRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceHasRunningTaskBatchQueryResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceHasRunningTaskBatchQueryShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SbrainServiceSchemeMatchShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SearchTmOnsalesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SearchTmOnsalesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\StartNotaryRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\StartNotaryResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\StoreMaterialTemporarilyRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\StoreMaterialTemporarilyResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitSupplementRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitSupplementResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitSupplementShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitTrademarkApplicationComplaintRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitTrademarkApplicationComplaintResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SubmitTrademarkApplicationComplaintShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SyncTrademarkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\SyncTrademarkResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateApplicantContacterRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateApplicantContacterResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateProduceLoaIdRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateProduceLoaIdResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateProduceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateProduceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateSendMaterialNumRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateSendMaterialNumResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateTrademarkNameRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateTrademarkNameResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateTrademarkOnsaleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UpdateTrademarkOnsaleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UploadNotaryDataRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UploadNotaryDataResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UploadTrademarkOnSaleRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\UploadTrademarkOnSaleResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\WriteCommunicationLogRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\WriteCommunicationLogResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\WriteIntentionCommunicationLogRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\WriteIntentionCommunicationLogResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Trademark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('trademark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AcceptPartnerNotificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AcceptPartnerNotificationResponse
     */
    public function acceptPartnerNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->material)) {
            $query['Material'] = $request->material;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptPartnerNotification',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptPartnerNotificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptPartnerNotificationRequest $request
     *
     * @return AcceptPartnerNotificationResponse
     */
    public function acceptPartnerNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptPartnerNotificationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyNotaryPostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyNotaryPostResponse
     */
    public function applyNotaryPostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notaryOrderId)) {
            $query['NotaryOrderId'] = $request->notaryOrderId;
        }
        if (!Utils::isUnset($request->receiverAddress)) {
            $query['ReceiverAddress'] = $request->receiverAddress;
        }
        if (!Utils::isUnset($request->receiverName)) {
            $query['ReceiverName'] = $request->receiverName;
        }
        if (!Utils::isUnset($request->receiverPhone)) {
            $query['ReceiverPhone'] = $request->receiverPhone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyNotaryPost',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyNotaryPostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyNotaryPostRequest $request
     *
     * @return ApplyNotaryPostResponse
     */
    public function applyNotaryPost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyNotaryPostWithOptions($request, $runtime);
    }

    /**
     * @param AskAdjudicationFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AskAdjudicationFileResponse
     */
    public function askAdjudicationFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AskAdjudicationFile',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AskAdjudicationFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AskAdjudicationFileRequest $request
     *
     * @return AskAdjudicationFileResponse
     */
    public function askAdjudicationFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->askAdjudicationFileWithOptions($request, $runtime);
    }

    /**
     * @param BindMaterialRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindMaterialResponse
     */
    public function bindMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->legalNoticeKey)) {
            $query['LegalNoticeKey'] = $request->legalNoticeKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindMaterialRequest $request
     *
     * @return BindMaterialResponse
     */
    public function bindMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindMaterialWithOptions($request, $runtime);
    }

    /**
     * @param CancelTradeOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelTradeOrderResponse
     */
    public function cancelTradeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelTradeOrder',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelTradeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelTradeOrderRequest $request
     *
     * @return CancelTradeOrderResponse
     */
    public function cancelTradeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTradeOrderWithOptions($request, $runtime);
    }

    /**
     * @param CheckFlsmFillRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckFlsmFillResponse
     */
    public function checkFlsmFillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->wtrName)) {
            $query['WtrName'] = $request->wtrName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckFlsmFill',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFlsmFillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckFlsmFillRequest $request
     *
     * @return CheckFlsmFillResponse
     */
    public function checkFlsmFill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFlsmFillWithOptions($request, $runtime);
    }

    /**
     * @param CheckIfCollectedRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckIfCollectedResponse
     */
    public function checkIfCollectedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemIdList)) {
            $query['ItemIdList'] = $request->itemIdList;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckIfCollected',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckIfCollectedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckIfCollectedRequest $request
     *
     * @return CheckIfCollectedResponse
     */
    public function checkIfCollected($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkIfCollectedWithOptions($request, $runtime);
    }

    /**
     * @param CheckLoaFillRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckLoaFillResponse
     */
    public function checkLoaFillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->wtrName)) {
            $query['WtrName'] = $request->wtrName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckLoaFill',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckLoaFillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckLoaFillRequest $request
     *
     * @return CheckLoaFillResponse
     */
    public function checkLoaFill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkLoaFillWithOptions($request, $runtime);
    }

    /**
     * @param CheckTrademarkIconRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckTrademarkIconResponse
     */
    public function checkTrademarkIconWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventSceneType)) {
            $query['EventSceneType'] = $request->eventSceneType;
        }
        if (!Utils::isUnset($request->trademarkIconOssKey)) {
            $query['TrademarkIconOssKey'] = $request->trademarkIconOssKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckTrademarkIcon',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckTrademarkIconResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckTrademarkIconRequest $request
     *
     * @return CheckTrademarkIconResponse
     */
    public function checkTrademarkIcon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTrademarkIconWithOptions($request, $runtime);
    }

    /**
     * @param CheckTrademarkOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckTrademarkOrderResponse
     */
    public function checkTrademarkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementId)) {
            $query['AgreementId'] = $request->agreementId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->isBlackIcon)) {
            $query['IsBlackIcon'] = $request->isBlackIcon;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->logoGoodsId)) {
            $query['LogoGoodsId'] = $request->logoGoodsId;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->orderData)) {
            $query['OrderData'] = $request->orderData;
        }
        if (!Utils::isUnset($request->partnerCode)) {
            $query['PartnerCode'] = $request->partnerCode;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->realUserName)) {
            $query['RealUserName'] = $request->realUserName;
        }
        if (!Utils::isUnset($request->registerName)) {
            $query['RegisterName'] = $request->registerName;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->renewInfoId)) {
            $query['RenewInfoId'] = $request->renewInfoId;
        }
        if (!Utils::isUnset($request->rootCode)) {
            $query['RootCode'] = $request->rootCode;
        }
        if (!Utils::isUnset($request->tmComment)) {
            $query['TmComment'] = $request->tmComment;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNameType)) {
            $query['TmNameType'] = $request->tmNameType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckTrademarkOrder',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckTrademarkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckTrademarkOrderRequest $request
     *
     * @return CheckTrademarkOrderResponse
     */
    public function checkTrademarkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTrademarkOrderWithOptions($request, $runtime);
    }

    /**
     * @param CombineLoaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CombineLoaResponse
     */
    public function combineLoaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicantType)) {
            $query['ApplicantType'] = $request->applicantType;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactPhone)) {
            $query['ContactPhone'] = $request->contactPhone;
        }
        if (!Utils::isUnset($request->contactPostcode)) {
            $query['ContactPostcode'] = $request->contactPostcode;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->nationality)) {
            $query['Nationality'] = $request->nationality;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->tmProduceType)) {
            $query['TmProduceType'] = $request->tmProduceType;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CombineLoa',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CombineLoaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CombineLoaRequest $request
     *
     * @return CombineLoaResponse
     */
    public function combineLoa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->combineLoaWithOptions($request, $runtime);
    }

    /**
     * @param CombineWTSRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CombineWTSResponse
     */
    public function combineWTSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->contact)) {
            $query['Contact'] = $request->contact;
        }
        if (!Utils::isUnset($request->contactAddressPost)) {
            $query['ContactAddressPost'] = $request->contactAddressPost;
        }
        if (!Utils::isUnset($request->contactMobile)) {
            $query['ContactMobile'] = $request->contactMobile;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->nationality)) {
            $query['Nationality'] = $request->nationality;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->tmNum)) {
            $query['TmNum'] = $request->tmNum;
        }
        if (!Utils::isUnset($request->tmProduceType)) {
            $query['TmProduceType'] = $request->tmProduceType;
        }
        if (!Utils::isUnset($request->trademarkName)) {
            $query['TrademarkName'] = $request->trademarkName;
        }
        if (!Utils::isUnset($request->wtsType)) {
            $query['WtsType'] = $request->wtsType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CombineWTS',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CombineWTSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CombineWTSRequest $request
     *
     * @return CombineWTSResponse
     */
    public function combineWTS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->combineWTSWithOptions($request, $runtime);
    }

    /**
     * @param ComplementIntentionUserIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ComplementIntentionUserIdResponse
     */
    public function complementIntentionUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->callerParentId)) {
            $query['CallerParentId'] = $request->callerParentId;
        }
        if (!Utils::isUnset($request->callerType)) {
            $query['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->complementUserId)) {
            $body['ComplementUserId'] = $request->complementUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ComplementIntentionUserId',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ComplementIntentionUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ComplementIntentionUserIdRequest $request
     *
     * @return ComplementIntentionUserIdResponse
     */
    public function complementIntentionUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->complementIntentionUserIdWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmAdditionalMaterialRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfirmAdditionalMaterialResponse
     */
    public function confirmAdditionalMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmAdditionalMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmAdditionalMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmAdditionalMaterialRequest $request
     *
     * @return ConfirmAdditionalMaterialResponse
     */
    public function confirmAdditionalMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmAdditionalMaterialWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmApplicantRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfirmApplicantResponse
     */
    public function confirmApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmApplicant',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmApplicantRequest $request
     *
     * @return ConfirmApplicantResponse
     */
    public function confirmApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmApplicantWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmDissentOriginalRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfirmDissentOriginalResponse
     */
    public function confirmDissentOriginalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDissentOriginal',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmDissentOriginalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmDissentOriginalRequest $request
     *
     * @return ConfirmDissentOriginalResponse
     */
    public function confirmDissentOriginal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDissentOriginalWithOptions($request, $runtime);
    }

    /**
     * @param ConvertImageToGrayRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConvertImageToGrayResponse
     */
    public function convertImageToGrayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertImageToGray',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertImageToGrayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertImageToGrayRequest $request
     *
     * @return ConvertImageToGrayResponse
     */
    public function convertImageToGray($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertImageToGrayWithOptions($request, $runtime);
    }

    /**
     * @param CopyApplicantRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyApplicantResponse
     */
    public function copyApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyApplicant',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyApplicantRequest $request
     *
     * @return CopyApplicantResponse
     */
    public function copyApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyApplicantWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntentionOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIntentionOrderResponse
     */
    public function createIntentionOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntentionOrder',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntentionOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntentionOrderRequest $request
     *
     * @return CreateIntentionOrderResponse
     */
    public function createIntentionOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentionOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateIntentionOrderGeneratingPayRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateIntentionOrderGeneratingPayResponse
     */
    public function createIntentionOrderGeneratingPayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->paymentCallback)) {
            $query['PaymentCallback'] = $request->paymentCallback;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIntentionOrderGeneratingPay',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIntentionOrderGeneratingPayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntentionOrderGeneratingPayRequest $request
     *
     * @return CreateIntentionOrderGeneratingPayResponse
     */
    public function createIntentionOrderGeneratingPay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntentionOrderGeneratingPayWithOptions($request, $runtime);
    }

    /**
     * @param CreateTrademarkOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTrademarkOrderResponse
     */
    public function createTrademarkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementId)) {
            $query['AgreementId'] = $request->agreementId;
        }
        if (!Utils::isUnset($request->bigDipperSource)) {
            $query['BigDipperSource'] = $request->bigDipperSource;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->isBlackIcon)) {
            $query['IsBlackIcon'] = $request->isBlackIcon;
        }
        if (!Utils::isUnset($request->legalNoticeKey)) {
            $query['LegalNoticeKey'] = $request->legalNoticeKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->orderData)) {
            $query['OrderData'] = $request->orderData;
        }
        if (!Utils::isUnset($request->partnerCode)) {
            $query['PartnerCode'] = $request->partnerCode;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->realUserName)) {
            $query['RealUserName'] = $request->realUserName;
        }
        if (!Utils::isUnset($request->registerName)) {
            $query['RegisterName'] = $request->registerName;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->renewInfoId)) {
            $query['RenewInfoId'] = $request->renewInfoId;
        }
        if (!Utils::isUnset($request->rootCode)) {
            $query['RootCode'] = $request->rootCode;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tmComment)) {
            $query['TmComment'] = $request->tmComment;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNameType)) {
            $query['TmNameType'] = $request->tmNameType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->ua)) {
            $query['Ua'] = $request->ua;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTrademarkOrder',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTrademarkOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTrademarkOrderRequest $request
     *
     * @return CreateTrademarkOrderResponse
     */
    public function createTrademarkOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrademarkOrderWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMaterialResponse
     */
    public function deleteMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMaterialRequest $request
     *
     * @return DeleteMaterialResponse
     */
    public function deleteMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTmMonitorRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteTmMonitorRuleResponse
     */
    public function deleteTmMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTmMonitorRule',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTmMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTmMonitorRuleRequest $request
     *
     * @return DeleteTmMonitorRuleResponse
     */
    public function deleteTmMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTmMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTrademarkApplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteTrademarkApplicationResponse
     */
    public function deleteTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTrademarkApplication',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTrademarkApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTrademarkApplicationRequest $request
     *
     * @return DeleteTrademarkApplicationResponse
     */
    public function deleteTrademarkApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrademarkApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DenySupplementRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DenySupplementResponse
     */
    public function denySupplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DenySupplement',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DenySupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DenySupplementRequest $request
     *
     * @return DenySupplementResponse
     */
    public function denySupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->denySupplementWithOptions($request, $runtime);
    }

    /**
     * @param DescirbeCombineTrademarkRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescirbeCombineTrademarkResponse
     */
    public function descirbeCombineTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accurateMatch)) {
            $query['AccurateMatch'] = $request->accurateMatch;
        }
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerName)) {
            $query['OwnerName'] = $request->ownerName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->products)) {
            $query['Products'] = $request->products;
        }
        if (!Utils::isUnset($request->registrationNumber)) {
            $query['RegistrationNumber'] = $request->registrationNumber;
        }
        if (!Utils::isUnset($request->similarGroups)) {
            $query['SimilarGroups'] = $request->similarGroups;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescirbeCombineTrademark',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescirbeCombineTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescirbeCombineTrademarkRequest $request
     *
     * @return DescirbeCombineTrademarkResponse
     */
    public function descirbeCombineTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->descirbeCombineTrademarkWithOptions($request, $runtime);
    }

    /**
     * @param FillLogisticsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FillLogisticsResponse
     */
    public function fillLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->logistics)) {
            $query['Logistics'] = $request->logistics;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FillLogistics',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FillLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FillLogisticsRequest $request
     *
     * @return FillLogisticsResponse
     */
    public function fillLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fillLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param FilterUnavailableCodesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return FilterUnavailableCodesResponse
     */
    public function filterUnavailableCodesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FilterUnavailableCodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->codes)) {
            $request->codesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->codes, 'Codes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->codesShrink)) {
            $query['Codes'] = $request->codesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FilterUnavailableCodes',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FilterUnavailableCodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FilterUnavailableCodesRequest $request
     *
     * @return FilterUnavailableCodesResponse
     */
    public function filterUnavailableCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->filterUnavailableCodesWithOptions($request, $runtime);
    }

    /**
     * @param ForceUploadTrademarkOnsaleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ForceUploadTrademarkOnsaleResponse
     */
    public function forceUploadTrademarkOnsaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->classificationCode)) {
            $query['ClassificationCode'] = $request->classificationCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->originalPrice)) {
            $query['OriginalPrice'] = $request->originalPrice;
        }
        if (!Utils::isUnset($request->ownerEnName)) {
            $query['OwnerEnName'] = $request->ownerEnName;
        }
        if (!Utils::isUnset($request->ownerName)) {
            $query['OwnerName'] = $request->ownerName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regAnnDate)) {
            $query['RegAnnDate'] = $request->regAnnDate;
        }
        if (!Utils::isUnset($request->secondaryClassification)) {
            $query['SecondaryClassification'] = $request->secondaryClassification;
        }
        if (!Utils::isUnset($request->thirdClassification)) {
            $query['ThirdClassification'] = $request->thirdClassification;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForceUploadTrademarkOnsale',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForceUploadTrademarkOnsaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForceUploadTrademarkOnsaleRequest $request
     *
     * @return ForceUploadTrademarkOnsaleResponse
     */
    public function forceUploadTrademarkOnsale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forceUploadTrademarkOnsaleWithOptions($request, $runtime);
    }

    /**
     * @param GenerateQrCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateQrCodeResponse
     */
    public function generateQrCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fieldKey)) {
            $query['FieldKey'] = $request->fieldKey;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateQrCode',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateQrCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateQrCodeRequest $request
     *
     * @return GenerateQrCodeResponse
     */
    public function generateQrCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateQrCodeWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadFilePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateUploadFilePolicy',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateUploadFilePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateUploadFilePolicyRequest $request
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadFilePolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetAuthorizationLetterVersionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAuthorizationLetterVersionResponse
     */
    public function getAuthorizationLetterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuthorizationLetterVersion',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthorizationLetterVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuthorizationLetterVersionRequest $request
     *
     * @return GetAuthorizationLetterVersionResponse
     */
    public function getAuthorizationLetterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthorizationLetterVersionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultPrincipalResponse
     */
    public function getDefaultPrincipalWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetDefaultPrincipal',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultPrincipalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetDefaultPrincipalResponse
     */
    public function getDefaultPrincipal()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultPrincipalWithOptions($runtime);
    }

    /**
     * @param GetDefaultPrincipalNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDefaultPrincipalNameResponse
     */
    public function getDefaultPrincipalNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultPrincipalName',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultPrincipalNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDefaultPrincipalNameRequest $request
     *
     * @return GetDefaultPrincipalNameResponse
     */
    public function getDefaultPrincipalName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultPrincipalNameWithOptions($request, $runtime);
    }

    /**
     * @param GetNotaryOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNotaryOrderResponse
     */
    public function getNotaryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notaryOrderId)) {
            $query['NotaryOrderId'] = $request->notaryOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNotaryOrder',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNotaryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNotaryOrderRequest $request
     *
     * @return GetNotaryOrderResponse
     */
    public function getNotaryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNotaryOrderWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetSupportPrincipalNameResponse
     */
    public function getSupportPrincipalNameWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSupportPrincipalName',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSupportPrincipalNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetSupportPrincipalNameResponse
     */
    public function getSupportPrincipalName()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupportPrincipalNameWithOptions($runtime);
    }

    /**
     * @param InsertMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InsertMaterialResponse
     */
    public function insertMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->town)) {
            $query['Town'] = $request->town;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertMaterialRequest $request
     *
     * @return InsertMaterialResponse
     */
    public function insertMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertMaterialWithOptions($request, $runtime);
    }

    /**
     * @param InsertRenewInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InsertRenewInfoResponse
     */
    public function insertRenewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->engAddress)) {
            $query['EngAddress'] = $request->engAddress;
        }
        if (!Utils::isUnset($request->engName)) {
            $query['EngName'] = $request->engName;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->registerTime)) {
            $query['RegisterTime'] = $request->registerTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertRenewInfo',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertRenewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertRenewInfoRequest $request
     *
     * @return InsertRenewInfoResponse
     */
    public function insertRenewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertRenewInfoWithOptions($request, $runtime);
    }

    /**
     * @param InsertTmMonitorRuleRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return InsertTmMonitorRuleResponse
     */
    public function insertTmMonitorRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertTmMonitorRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->classification)) {
            $request->classificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->classification, 'Classification', 'json');
        }
        if (!Utils::isUnset($tmpReq->notifyStatus)) {
            $request->notifyStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyStatus, 'NotifyStatus', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->classificationShrink)) {
            $query['Classification'] = $request->classificationShrink;
        }
        if (!Utils::isUnset($request->endApplyDate)) {
            $query['EndApplyDate'] = $request->endApplyDate;
        }
        if (!Utils::isUnset($request->notifyStatusShrink)) {
            $query['NotifyStatus'] = $request->notifyStatusShrink;
        }
        if (!Utils::isUnset($request->ruleKeyword)) {
            $query['RuleKeyword'] = $request->ruleKeyword;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleSource)) {
            $query['RuleSource'] = $request->ruleSource;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startApplyDate)) {
            $query['StartApplyDate'] = $request->startApplyDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertTmMonitorRule',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertTmMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertTmMonitorRuleRequest $request
     *
     * @return InsertTmMonitorRuleResponse
     */
    public function insertTmMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertTmMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListNotaryInfosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListNotaryInfosResponse
     */
    public function listNotaryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->notaryType)) {
            $query['NotaryType'] = $request->notaryType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNotaryInfos',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotaryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNotaryInfosRequest $request
     *
     * @return ListNotaryInfosResponse
     */
    public function listNotaryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotaryInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListNotaryOrdersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNotaryOrdersResponse
     */
    public function listNotaryOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunOrderId)) {
            $query['AliyunOrderId'] = $request->aliyunOrderId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->endOrderDate)) {
            $query['EndOrderDate'] = $request->endOrderDate;
        }
        if (!Utils::isUnset($request->notaryStatus)) {
            $query['NotaryStatus'] = $request->notaryStatus;
        }
        if (!Utils::isUnset($request->notaryType)) {
            $query['NotaryType'] = $request->notaryType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortByType)) {
            $query['SortByType'] = $request->sortByType;
        }
        if (!Utils::isUnset($request->sortKeyType)) {
            $query['SortKeyType'] = $request->sortKeyType;
        }
        if (!Utils::isUnset($request->startOrderDate)) {
            $query['StartOrderDate'] = $request->startOrderDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNotaryOrders',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNotaryOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNotaryOrdersRequest $request
     *
     * @return ListNotaryOrdersResponse
     */
    public function listNotaryOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotaryOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListTrademarkSbjKeyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTrademarkSbjKeyResponse
     */
    public function listTrademarkSbjKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrademarkSbjKey',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTrademarkSbjKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrademarkSbjKeyRequest $request
     *
     * @return ListTrademarkSbjKeyResponse
     */
    public function listTrademarkSbjKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTrademarkSbjKeyWithOptions($request, $runtime);
    }

    /**
     * @param ModifySubmitTransferMaterailRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySubmitTransferMaterailResponse
     */
    public function modifySubmitTransferMaterailWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifySubmitTransferMaterailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->other)) {
            $request->otherShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->other, 'Other', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->assigneeProxy)) {
            $query['AssigneeProxy'] = $request->assigneeProxy;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->buyerBusinessLicenseTranslation)) {
            $query['BuyerBusinessLicenseTranslation'] = $request->buyerBusinessLicenseTranslation;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->sellerBusinessLicenseTranslation)) {
            $query['SellerBusinessLicenseTranslation'] = $request->sellerBusinessLicenseTranslation;
        }
        if (!Utils::isUnset($request->tradeMaterialFullUpdate)) {
            $query['TradeMaterialFullUpdate'] = $request->tradeMaterialFullUpdate;
        }
        $body = [];
        if (!Utils::isUnset($request->addr)) {
            $body['Addr'] = $request->addr;
        }
        if (!Utils::isUnset($request->buyerBusinessLicense)) {
            $body['BuyerBusinessLicense'] = $request->buyerBusinessLicense;
        }
        if (!Utils::isUnset($request->buyerIdCard)) {
            $body['BuyerIdCard'] = $request->buyerIdCard;
        }
        if (!Utils::isUnset($request->cardNo)) {
            $body['CardNo'] = $request->cardNo;
        }
        if (!Utils::isUnset($request->cardType)) {
            $body['CardType'] = $request->cardType;
        }
        if (!Utils::isUnset($request->complete)) {
            $body['Complete'] = $request->complete;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $body['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactMobile)) {
            $body['ContactMobile'] = $request->contactMobile;
        }
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notarization)) {
            $body['Notarization'] = $request->notarization;
        }
        if (!Utils::isUnset($request->otherShrink)) {
            $body['Other'] = $request->otherShrink;
        }
        if (!Utils::isUnset($request->registrationCert)) {
            $body['RegistrationCert'] = $request->registrationCert;
        }
        if (!Utils::isUnset($request->sellerApply)) {
            $body['SellerApply'] = $request->sellerApply;
        }
        if (!Utils::isUnset($request->sellerBusinessLicense)) {
            $body['SellerBusinessLicense'] = $request->sellerBusinessLicense;
        }
        if (!Utils::isUnset($request->sellerIdCard)) {
            $body['SellerIdCard'] = $request->sellerIdCard;
        }
        if (!Utils::isUnset($request->sellerProxy)) {
            $body['SellerProxy'] = $request->sellerProxy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySubmitTransferMaterail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubmitTransferMaterailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySubmitTransferMaterailRequest $request
     *
     * @return ModifySubmitTransferMaterailResponse
     */
    public function modifySubmitTransferMaterail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubmitTransferMaterailWithOptions($request, $runtime);
    }

    /**
     * @param OperateProduceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OperateProduceResponse
     */
    public function operateProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extMap)) {
            $query['ExtMap'] = $request->extMap;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateProduce',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateProduceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateProduceRequest $request
     *
     * @return OperateProduceResponse
     */
    public function operateProduce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateProduceWithOptions($request, $runtime);
    }

    /**
     * @param PartnerUpdateTrademarkNameRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PartnerUpdateTrademarkNameResponse
     */
    public function partnerUpdateTrademarkNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->callerParentId)) {
            $query['CallerParentId'] = $request->callerParentId;
        }
        if (!Utils::isUnset($request->callerType)) {
            $query['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->eventSceneType)) {
            $body['EventSceneType'] = $request->eventSceneType;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $body['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->tmComment)) {
            $body['TmComment'] = $request->tmComment;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $body['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $body['TmName'] = $request->tmName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PartnerUpdateTrademarkName',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PartnerUpdateTrademarkNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PartnerUpdateTrademarkNameRequest $request
     *
     * @return PartnerUpdateTrademarkNameResponse
     */
    public function partnerUpdateTrademarkName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->partnerUpdateTrademarkNameWithOptions($request, $runtime);
    }

    /**
     * @param QueryCommunicationLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCommunicationLogsResponse
     */
    public function queryCommunicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCommunicationLogs',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCommunicationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCommunicationLogsRequest $request
     *
     * @return QueryCommunicationLogsResponse
     */
    public function queryCommunicationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommunicationLogsWithOptions($request, $runtime);
    }

    /**
     * @param QueryCredentialsInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCredentialsInfoResponse
     */
    public function queryCredentialsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        $body = [];
        if (!Utils::isUnset($request->materialType)) {
            $body['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $body['OssKey'] = $request->ossKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCredentialsInfo',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCredentialsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCredentialsInfoRequest $request
     *
     * @return QueryCredentialsInfoResponse
     */
    public function queryCredentialsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCredentialsInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryExtensionAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryExtensionAttributeResponse
     */
    public function queryExtensionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeKey)) {
            $query['AttributeKey'] = $request->attributeKey;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryExtensionAttribute',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryExtensionAttributeRequest $request
     *
     * @return QueryExtensionAttributeResponse
     */
    public function queryExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param QueryIntentionDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryIntentionDetailResponse
     */
    public function queryIntentionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIntentionDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntentionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIntentionDetailRequest $request
     *
     * @return QueryIntentionDetailResponse
     */
    public function queryIntentionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntentionDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryIntentionListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryIntentionListResponse
     */
    public function queryIntentionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortFiled)) {
            $query['SortFiled'] = $request->sortFiled;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIntentionList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntentionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIntentionListRequest $request
     *
     * @return QueryIntentionListResponse
     */
    public function queryIntentionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntentionListWithOptions($request, $runtime);
    }

    /**
     * @param QueryIntentionOwnerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIntentionOwnerResponse
     */
    public function queryIntentionOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIntentionOwner',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntentionOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIntentionOwnerRequest $request
     *
     * @return QueryIntentionOwnerResponse
     */
    public function queryIntentionOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntentionOwnerWithOptions($request, $runtime);
    }

    /**
     * @param QueryIntentionPriceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIntentionPriceResponse
     */
    public function queryIntentionPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIntentionPrice',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIntentionPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIntentionPriceRequest $request
     *
     * @return QueryIntentionPriceResponse
     */
    public function queryIntentionPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIntentionPriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryMaterialRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMaterialResponse
     */
    public function queryMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->queryUnconfirmedInfo)) {
            $query['QueryUnconfirmedInfo'] = $request->queryUnconfirmedInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMaterialRequest $request
     *
     * @return QueryMaterialResponse
     */
    public function queryMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialWithOptions($request, $runtime);
    }

    /**
     * @param QueryMaterialListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMaterialListResponse
     */
    public function queryMaterialListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->materialVersion)) {
            $query['MaterialVersion'] = $request->materialVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->systemVersion)) {
            $query['SystemVersion'] = $request->systemVersion;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMaterialList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMaterialListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMaterialListRequest $request
     *
     * @return QueryMaterialListResponse
     */
    public function queryMaterialList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMaterialListWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonitorKeywordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMonitorKeywordsResponse
     */
    public function queryMonitorKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keywords)) {
            $query['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonitorKeywords',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonitorKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMonitorKeywordsRequest $request
     *
     * @return QueryMonitorKeywordsResponse
     */
    public function queryMonitorKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonitorKeywordsWithOptions($request, $runtime);
    }

    /**
     * @param QueryOfficialFileCustomListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOfficialFileCustomListResponse
     */
    public function queryOfficialFileCustomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOfficialFileCustomList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOfficialFileCustomListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOfficialFileCustomListRequest $request
     *
     * @return QueryOfficialFileCustomListResponse
     */
    public function queryOfficialFileCustomList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOfficialFileCustomListWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderLogisticsListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryOrderLogisticsListResponse
     */
    public function queryOrderLogisticsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->produceOrderId)) {
            $body['ProduceOrderId'] = $request->produceOrderId;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $body['RegisterNumber'] = $request->registerNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderLogisticsList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderLogisticsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderLogisticsListRequest $request
     *
     * @return QueryOrderLogisticsListResponse
     */
    public function queryOrderLogisticsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderLogisticsListWithOptions($request, $runtime);
    }

    /**
     * @param QueryOssResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOssResourcesResponse
     */
    public function queryOssResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOssResources',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOssResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOssResourcesRequest $request
     *
     * @return QueryOssResourcesResponse
     */
    public function queryOssResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOssResourcesWithOptions($request, $runtime);
    }

    /**
     * @param QueryProduceDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryProduceDetailResponse
     */
    public function queryProduceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyNo)) {
            $query['ApplyNo'] = $request->applyNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProduceDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProduceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryProduceDetailRequest $request
     *
     * @return QueryProduceDetailResponse
     */
    public function queryProduceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProduceDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryProduceListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProduceListResponse
     */
    public function queryProduceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->createTimeLeft)) {
            $query['CreateTimeLeft'] = $request->createTimeLeft;
        }
        if (!Utils::isUnset($request->createTimeRight)) {
            $query['CreateTimeRight'] = $request->createTimeRight;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryProduceList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryProduceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryProduceListRequest $request
     *
     * @return QueryProduceListResponse
     */
    public function queryProduceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProduceListWithOptions($request, $runtime);
    }

    /**
     * @param QueryQrCodeUploadStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryQrCodeUploadStatusResponse
     */
    public function queryQrCodeUploadStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fieldKey)) {
            $query['FieldKey'] = $request->fieldKey;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryQrCodeUploadStatus',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryQrCodeUploadStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryQrCodeUploadStatusRequest $request
     *
     * @return QueryQrCodeUploadStatusResponse
     */
    public function queryQrCodeUploadStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryQrCodeUploadStatusWithOptions($request, $runtime);
    }

    /**
     * @param QuerySbjRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySbjRuleResponse
     */
    public function querySbjRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySbjRule',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySbjRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySbjRuleRequest $request
     *
     * @return QuerySbjRuleResponse
     */
    public function querySbjRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySbjRuleWithOptions($request, $runtime);
    }

    /**
     * @param QuerySupplementDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySupplementDetailResponse
     */
    public function querySupplementDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySupplementDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySupplementDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySupplementDetailRequest $request
     *
     * @return QuerySupplementDetailResponse
     */
    public function querySupplementDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySupplementDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTaskListRequest $request
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTmCollectionPageListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryTmCollectionPageListResponse
     */
    public function queryTmCollectionPageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTmCollectionPageList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTmCollectionPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTmCollectionPageListRequest $request
     *
     * @return QueryTmCollectionPageListResponse
     */
    public function queryTmCollectionPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTmCollectionPageListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTmSbjProduceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTmSbjProduceResponse
     */
    public function queryTmSbjProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->highPriorityBizTypeStr)) {
            $query['HighPriorityBizTypeStr'] = $request->highPriorityBizTypeStr;
        }
        if (!Utils::isUnset($request->highPriorityMaterialNameStr)) {
            $query['HighPriorityMaterialNameStr'] = $request->highPriorityMaterialNameStr;
        }
        if (!Utils::isUnset($request->highPriorityOrderIdStr)) {
            $query['HighPriorityOrderIdStr'] = $request->highPriorityOrderIdStr;
        }
        if (!Utils::isUnset($request->highPriorityUserIdStr)) {
            $query['HighPriorityUserIdStr'] = $request->highPriorityUserIdStr;
        }
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->producerType)) {
            $query['ProducerType'] = $request->producerType;
        }
        if (!Utils::isUnset($request->queryOrderPageSize)) {
            $query['QueryOrderPageSize'] = $request->queryOrderPageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTmSbjProduce',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTmSbjProduceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTmSbjProduceRequest $request
     *
     * @return QueryTmSbjProduceResponse
     */
    public function queryTmSbjProduce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTmSbjProduceWithOptions($request, $runtime);
    }

    /**
     * @param QueryTmSbjProduceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTmSbjProduceDetailResponse
     */
    public function queryTmSbjProduceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTmSbjProduceDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTmSbjProduceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTmSbjProduceDetailRequest $request
     *
     * @return QueryTmSbjProduceDetailResponse
     */
    public function queryTmSbjProduceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTmSbjProduceDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeIntentionUserListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTradeIntentionUserListResponse
     */
    public function queryTradeIntentionUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->begin)) {
            $query['Begin'] = $request->begin;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeIntentionUserList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeIntentionUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeIntentionUserListRequest $request
     *
     * @return QueryTradeIntentionUserListResponse
     */
    public function queryTradeIntentionUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeIntentionUserListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeMarkApplicationDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryTradeMarkApplicationDetailResponse
     */
    public function queryTradeMarkApplicationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeMarkApplicationDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeMarkApplicationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeMarkApplicationDetailRequest $request
     *
     * @return QueryTradeMarkApplicationDetailResponse
     */
    public function queryTradeMarkApplicationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeMarkApplicationDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeMarkApplicationLogsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryTradeMarkApplicationLogsResponse
     */
    public function queryTradeMarkApplicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeMarkApplicationLogs',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeMarkApplicationLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeMarkApplicationLogsRequest $request
     *
     * @return QueryTradeMarkApplicationLogsResponse
     */
    public function queryTradeMarkApplicationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeMarkApplicationLogsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeMarkApplicationsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTradeMarkApplicationsResponse
     */
    public function queryTradeMarkApplicationsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryTradeMarkApplicationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->classificationCode)) {
            $query['ClassificationCode'] = $request->classificationCode;
        }
        if (!Utils::isUnset($request->hidden)) {
            $query['Hidden'] = $request->hidden;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->logisticsNo)) {
            $query['LogisticsNo'] = $request->logisticsNo;
        }
        if (!Utils::isUnset($request->materialName)) {
            $query['MaterialName'] = $request->materialName;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sortFiled)) {
            $query['SortFiled'] = $request->sortFiled;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $query['StatusList'] = $request->statusListShrink;
        }
        if (!Utils::isUnset($request->supplementStatus)) {
            $query['SupplementStatus'] = $request->supplementStatus;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeMarkApplications',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeMarkApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeMarkApplicationsRequest $request
     *
     * @return QueryTradeMarkApplicationsResponse
     */
    public function queryTradeMarkApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeMarkApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeMarkApplicationsByIntentionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return QueryTradeMarkApplicationsByIntentionResponse
     */
    public function queryTradeMarkApplicationsByIntentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->intentionBizId)) {
            $query['IntentionBizId'] = $request->intentionBizId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tmProduceStatus)) {
            $query['TmProduceStatus'] = $request->tmProduceStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeMarkApplicationsByIntention',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeMarkApplicationsByIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeMarkApplicationsByIntentionRequest $request
     *
     * @return QueryTradeMarkApplicationsByIntentionResponse
     */
    public function queryTradeMarkApplicationsByIntention($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeMarkApplicationsByIntentionWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeProduceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTradeProduceDetailResponse
     */
    public function queryTradeProduceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeProduceDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeProduceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeProduceDetailRequest $request
     *
     * @return QueryTradeProduceDetailResponse
     */
    public function queryTradeProduceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeProduceDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTradeProduceListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryTradeProduceListResponse
     */
    public function queryTradeProduceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->buyerStatus)) {
            $query['BuyerStatus'] = $request->buyerStatus;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->preOrderId)) {
            $query['PreOrderId'] = $request->preOrderId;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->sortFiled)) {
            $query['SortFiled'] = $request->sortFiled;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTradeProduceList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTradeProduceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTradeProduceListRequest $request
     *
     * @return QueryTradeProduceListResponse
     */
    public function queryTradeProduceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTradeProduceListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkDetailByApplyNumberRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryTrademarkDetailByApplyNumberResponse
     */
    public function queryTrademarkDetailByApplyNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyNumber)) {
            $query['ApplyNumber'] = $request->applyNumber;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkDetailByApplyNumber',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkDetailByApplyNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkDetailByApplyNumberRequest $request
     *
     * @return QueryTrademarkDetailByApplyNumberResponse
     */
    public function queryTrademarkDetailByApplyNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkDetailByApplyNumberWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkDetailByApplyNumberEspRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryTrademarkDetailByApplyNumberEspResponse
     */
    public function queryTrademarkDetailByApplyNumberEspWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyNumber)) {
            $query['ApplyNumber'] = $request->applyNumber;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkDetailByApplyNumberEsp',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkDetailByApplyNumberEspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkDetailByApplyNumberEspRequest $request
     *
     * @return QueryTrademarkDetailByApplyNumberEspResponse
     */
    public function queryTrademarkDetailByApplyNumberEsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkDetailByApplyNumberEspWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkModelDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryTrademarkModelDetailResponse
     */
    public function queryTrademarkModelDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->reviewSupplementMaterial)) {
            $query['ReviewSupplementMaterial'] = $request->reviewSupplementMaterial;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkModelDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkModelDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkModelDetailRequest $request
     *
     * @return QueryTrademarkModelDetailResponse
     */
    public function queryTrademarkModelDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkModelDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkModelEspDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryTrademarkModelEspDetailResponse
     */
    public function queryTrademarkModelEspDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkModelEspDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkModelEspDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkModelEspDetailRequest $request
     *
     * @return QueryTrademarkModelEspDetailResponse
     */
    public function queryTrademarkModelEspDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkModelEspDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkModelEspListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTrademarkModelEspListResponse
     */
    public function queryTrademarkModelEspListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->orderIdsStr)) {
            $query['OrderIdsStr'] = $request->orderIdsStr;
        }
        if (!Utils::isUnset($request->orderInstanceId)) {
            $query['OrderInstanceId'] = $request->orderInstanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->submitStatus)) {
            $query['SubmitStatus'] = $request->submitStatus;
        }
        if (!Utils::isUnset($request->submitTime)) {
            $query['SubmitTime'] = $request->submitTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkModelEspList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkModelEspListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkModelEspListRequest $request
     *
     * @return QueryTrademarkModelEspListResponse
     */
    public function queryTrademarkModelEspList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkModelEspListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkModelListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTrademarkModelListResponse
     */
    public function queryTrademarkModelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->orderIdsStr)) {
            $query['OrderIdsStr'] = $request->orderIdsStr;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->produceTypesStr)) {
            $query['ProduceTypesStr'] = $request->produceTypesStr;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->submitStart)) {
            $query['SubmitStart'] = $request->submitStart;
        }
        if (!Utils::isUnset($request->submitStatus)) {
            $query['SubmitStatus'] = $request->submitStatus;
        }
        if (!Utils::isUnset($request->submitTime)) {
            $query['SubmitTime'] = $request->submitTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkModelList',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkModelListRequest $request
     *
     * @return QueryTrademarkModelListResponse
     */
    public function queryTrademarkModelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkModelListWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkMonitorResultsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryTrademarkMonitorResultsResponse
     */
    public function queryTrademarkMonitorResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->applyYear)) {
            $query['ApplyYear'] = $request->applyYear;
        }
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->procedureStatus)) {
            $query['ProcedureStatus'] = $request->procedureStatus;
        }
        if (!Utils::isUnset($request->registrationNumber)) {
            $query['RegistrationNumber'] = $request->registrationNumber;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkMonitorResults',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkMonitorResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkMonitorResultsRequest $request
     *
     * @return QueryTrademarkMonitorResultsResponse
     */
    public function queryTrademarkMonitorResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkMonitorResultsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkMonitorRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTrademarkMonitorRulesResponse
     */
    public function queryTrademarkMonitorRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->notifyUpdate)) {
            $query['NotifyUpdate'] = $request->notifyUpdate;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkMonitorRules',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkMonitorRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkMonitorRulesRequest $request
     *
     * @return QueryTrademarkMonitorRulesResponse
     */
    public function queryTrademarkMonitorRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkMonitorRulesWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkOnSaleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTrademarkOnSaleResponse
     */
    public function queryTrademarkOnSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->registerCode)) {
            $query['RegisterCode'] = $request->registerCode;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->tmType)) {
            $query['TmType'] = $request->tmType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkOnSale',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkOnSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkOnSaleRequest $request
     *
     * @return QueryTrademarkOnSaleResponse
     */
    public function queryTrademarkOnSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkOnSaleWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkPriceRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTrademarkPriceResponse
     */
    public function queryTrademarkPriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryTrademarkPriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderData)) {
            $request->orderDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderData, 'OrderData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->orderDataShrink)) {
            $query['OrderData'] = $request->orderDataShrink;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkPrice',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkPriceRequest $request
     *
     * @return QueryTrademarkPriceResponse
     */
    public function queryTrademarkPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkPriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryTrademarkUploadAuditResultRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryTrademarkUploadAuditResultResponse
     */
    public function queryTrademarkUploadAuditResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->registerCode)) {
            $query['RegisterCode'] = $request->registerCode;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->tmType)) {
            $query['TmType'] = $request->tmType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTrademarkUploadAuditResult',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTrademarkUploadAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTrademarkUploadAuditResultRequest $request
     *
     * @return QueryTrademarkUploadAuditResultResponse
     */
    public function queryTrademarkUploadAuditResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrademarkUploadAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param RecordBankBalanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecordBankBalanceResponse
     */
    public function recordBankBalanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionDate)) {
            $query['ActionDate'] = $request->actionDate;
        }
        if (!Utils::isUnset($request->balance)) {
            $query['Balance'] = $request->balance;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecordBankBalance',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordBankBalanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordBankBalanceRequest $request
     *
     * @return RecordBankBalanceResponse
     */
    public function recordBankBalance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordBankBalanceWithOptions($request, $runtime);
    }

    /**
     * @param RefundProduceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RefundProduceResponse
     */
    public function refundProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->refundType)) {
            $query['RefundType'] = $request->refundType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefundProduce',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefundProduceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefundProduceRequest $request
     *
     * @return RefundProduceResponse
     */
    public function refundProduce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundProduceWithOptions($request, $runtime);
    }

    /**
     * @param RefuseAdditionalMaterialRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RefuseAdditionalMaterialResponse
     */
    public function refuseAdditionalMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefuseAdditionalMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefuseAdditionalMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefuseAdditionalMaterialRequest $request
     *
     * @return RefuseAdditionalMaterialResponse
     */
    public function refuseAdditionalMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseAdditionalMaterialWithOptions($request, $runtime);
    }

    /**
     * @param RefuseApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RefuseApplicantResponse
     */
    public function refuseApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefuseApplicant',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefuseApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefuseApplicantRequest $request
     *
     * @return RefuseApplicantResponse
     */
    public function refuseApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseApplicantWithOptions($request, $runtime);
    }

    /**
     * @param RejectApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RejectApplicantResponse
     */
    public function rejectApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RejectApplicant',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RejectApplicantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RejectApplicantRequest $request
     *
     * @return RejectApplicantResponse
     */
    public function rejectApplicant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectApplicantWithOptions($request, $runtime);
    }

    /**
     * @param SaveClassificationConditionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveClassificationConditionsResponse
     */
    public function saveClassificationConditionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->condition)) {
            $query['Condition'] = $request->condition;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveClassificationConditions',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveClassificationConditionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveClassificationConditionsRequest $request
     *
     * @return SaveClassificationConditionsResponse
     */
    public function saveClassificationConditions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveClassificationConditionsWithOptions($request, $runtime);
    }

    /**
     * @param SaveExtensionAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveExtensionAttributeResponse
     */
    public function saveExtensionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attributeKey)) {
            $query['AttributeKey'] = $request->attributeKey;
        }
        if (!Utils::isUnset($request->attributeValue)) {
            $query['AttributeValue'] = $request->attributeValue;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveExtensionAttribute',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveExtensionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveExtensionAttributeRequest $request
     *
     * @return SaveExtensionAttributeResponse
     */
    public function saveExtensionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveExtensionAttributeWithOptions($request, $runtime);
    }

    /**
     * @param SaveTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SaveTaskResponse
     */
    public function saveTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->request)) {
            $query['Request'] = $request->request;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTask',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTaskRequest $request
     *
     * @return SaveTaskResponse
     */
    public function saveTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskWithOptions($request, $runtime);
    }

    /**
     * @param SaveTaskForOfficialFileCustomRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SaveTaskForOfficialFileCustomResponse
     */
    public function saveTaskForOfficialFileCustomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endAcceptTime)) {
            $query['EndAcceptTime'] = $request->endAcceptTime;
        }
        if (!Utils::isUnset($request->startAcceptTime)) {
            $query['StartAcceptTime'] = $request->startAcceptTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveTaskForOfficialFileCustom',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTaskForOfficialFileCustomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTaskForOfficialFileCustomRequest $request
     *
     * @return SaveTaskForOfficialFileCustomResponse
     */
    public function saveTaskForOfficialFileCustom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTaskForOfficialFileCustomWithOptions($request, $runtime);
    }

    /**
     * @param SaveTradeMarkReviewMaterialDetailRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return SaveTradeMarkReviewMaterialDetailResponse
     */
    public function saveTradeMarkReviewMaterialDetailWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveTradeMarkReviewMaterialDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->additionalOssKeyList)) {
            $request->additionalOssKeyListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->additionalOssKeyList, 'AdditionalOssKeyList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->additionalOssKeyListShrink)) {
            $body['AdditionalOssKeyList'] = $request->additionalOssKeyListShrink;
        }
        if (!Utils::isUnset($request->address)) {
            $body['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->applicationOssKey)) {
            $body['ApplicationOssKey'] = $request->applicationOssKey;
        }
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $body['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $body['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->changeName)) {
            $body['ChangeName'] = $request->changeName;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $body['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $body['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $body['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->country)) {
            $body['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->engAddress)) {
            $body['EngAddress'] = $request->engAddress;
        }
        if (!Utils::isUnset($request->engName)) {
            $body['EngName'] = $request->engName;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $body['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $body['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $body['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $body['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->reviewMaterialAdditionalJson)) {
            $body['ReviewMaterialAdditionalJson'] = $request->reviewMaterialAdditionalJson;
        }
        if (!Utils::isUnset($request->separate)) {
            $body['Separate'] = $request->separate;
        }
        if (!Utils::isUnset($request->submitOnline)) {
            $body['SubmitOnline'] = $request->submitOnline;
        }
        if (!Utils::isUnset($request->submitType)) {
            $body['SubmitType'] = $request->submitType;
        }
        if (!Utils::isUnset($request->supplementFlag)) {
            $body['SupplementFlag'] = $request->supplementFlag;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveTradeMarkReviewMaterialDetail',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveTradeMarkReviewMaterialDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveTradeMarkReviewMaterialDetailRequest $request
     *
     * @return SaveTradeMarkReviewMaterialDetailResponse
     */
    public function saveTradeMarkReviewMaterialDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveTradeMarkReviewMaterialDetailWithOptions($request, $runtime);
    }

    /**
     * @param SbjOperateRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SbjOperateResponse
     */
    public function sbjOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->applyNo)) {
            $query['ApplyNo'] = $request->applyNo;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->fileDate)) {
            $query['FileDate'] = $request->fileDate;
        }
        if (!Utils::isUnset($request->fileOssKey)) {
            $query['FileOssKey'] = $request->fileOssKey;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->orderNo)) {
            $query['OrderNo'] = $request->orderNo;
        }
        if (!Utils::isUnset($request->receiptOssKey)) {
            $query['ReceiptOssKey'] = $request->receiptOssKey;
        }
        if (!Utils::isUnset($request->submittedSuccess)) {
            $query['SubmittedSuccess'] = $request->submittedSuccess;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SbjOperate',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SbjOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SbjOperateRequest $request
     *
     * @return SbjOperateResponse
     */
    public function sbjOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sbjOperateWithOptions($request, $runtime);
    }

    /**
     * @param SbjOperateNewRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SbjOperateNewResponse
     */
    public function sbjOperateNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addSubmitCount)) {
            $query['AddSubmitCount'] = $request->addSubmitCount;
        }
        if (!Utils::isUnset($request->allowResubmit)) {
            $query['AllowResubmit'] = $request->allowResubmit;
        }
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->applyNo)) {
            $query['ApplyNo'] = $request->applyNo;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->changeStatus)) {
            $query['ChangeStatus'] = $request->changeStatus;
        }
        if (!Utils::isUnset($request->errorMsgScreenshot)) {
            $query['ErrorMsgScreenshot'] = $request->errorMsgScreenshot;
        }
        if (!Utils::isUnset($request->fileDate)) {
            $query['FileDate'] = $request->fileDate;
        }
        if (!Utils::isUnset($request->fileOssKey)) {
            $query['FileOssKey'] = $request->fileOssKey;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->orderNo)) {
            $query['OrderNo'] = $request->orderNo;
        }
        if (!Utils::isUnset($request->receiptOssKey)) {
            $query['ReceiptOssKey'] = $request->receiptOssKey;
        }
        if (!Utils::isUnset($request->submittedSuccess)) {
            $query['SubmittedSuccess'] = $request->submittedSuccess;
        }
        if (!Utils::isUnset($request->successType)) {
            $query['SuccessType'] = $request->successType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SbjOperateNew',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SbjOperateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SbjOperateNewRequest $request
     *
     * @return SbjOperateNewResponse
     */
    public function sbjOperateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sbjOperateNewWithOptions($request, $runtime);
    }

    /**
     * @param SbrainServiceExecuteRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SbrainServiceExecuteResponse
     */
    public function sbrainServiceExecuteWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SbrainServiceExecuteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executeParams)) {
            $request->executeParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executeParams, 'ExecuteParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->executeParamsShrink)) {
            $query['ExecuteParams'] = $request->executeParamsShrink;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->referenceNo)) {
            $query['ReferenceNo'] = $request->referenceNo;
        }
        if (!Utils::isUnset($request->referenceType)) {
            $query['ReferenceType'] = $request->referenceType;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->schemeId)) {
            $query['SchemeId'] = $request->schemeId;
        }
        if (!Utils::isUnset($request->servicePlace)) {
            $query['ServicePlace'] = $request->servicePlace;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SbrainServiceExecute',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SbrainServiceExecuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SbrainServiceExecuteRequest $request
     *
     * @return SbrainServiceExecuteResponse
     */
    public function sbrainServiceExecute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sbrainServiceExecuteWithOptions($request, $runtime);
    }

    /**
     * @param SbrainServiceHasRunningTaskBatchQueryRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return SbrainServiceHasRunningTaskBatchQueryResponse
     */
    public function sbrainServiceHasRunningTaskBatchQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SbrainServiceHasRunningTaskBatchQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceNos)) {
            $request->referenceNosShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceNos, 'ReferenceNos', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->referenceNosShrink)) {
            $query['ReferenceNos'] = $request->referenceNosShrink;
        }
        if (!Utils::isUnset($request->referenceType)) {
            $query['ReferenceType'] = $request->referenceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SbrainServiceHasRunningTaskBatchQuery',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SbrainServiceHasRunningTaskBatchQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SbrainServiceHasRunningTaskBatchQueryRequest $request
     *
     * @return SbrainServiceHasRunningTaskBatchQueryResponse
     */
    public function sbrainServiceHasRunningTaskBatchQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sbrainServiceHasRunningTaskBatchQueryWithOptions($request, $runtime);
    }

    /**
     * @param SbrainServiceSchemeMatchRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return SbrainServiceSchemeMatchResponse
     */
    public function sbrainServiceSchemeMatchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SbrainServiceSchemeMatchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->matchParams)) {
            $request->matchParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->matchParams, 'MatchParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->matchParamsShrink)) {
            $query['MatchParams'] = $request->matchParamsShrink;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->referenceNo)) {
            $query['ReferenceNo'] = $request->referenceNo;
        }
        if (!Utils::isUnset($request->referenceType)) {
            $query['ReferenceType'] = $request->referenceType;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SbrainServiceSchemeMatch',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SbrainServiceSchemeMatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SbrainServiceSchemeMatchRequest $request
     *
     * @return SbrainServiceSchemeMatchResponse
     */
    public function sbrainServiceSchemeMatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sbrainServiceSchemeMatchWithOptions($request, $runtime);
    }

    /**
     * @param SearchTmOnsalesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchTmOnsalesResponse
     */
    public function searchTmOnsalesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classification)) {
            $query['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->orderPriceLeft)) {
            $query['OrderPriceLeft'] = $request->orderPriceLeft;
        }
        if (!Utils::isUnset($request->orderPriceRight)) {
            $query['OrderPriceRight'] = $request->orderPriceRight;
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
        if (!Utils::isUnset($request->queryAll)) {
            $query['QueryAll'] = $request->queryAll;
        }
        if (!Utils::isUnset($request->regLeft)) {
            $query['RegLeft'] = $request->regLeft;
        }
        if (!Utils::isUnset($request->regRight)) {
            $query['RegRight'] = $request->regRight;
        }
        if (!Utils::isUnset($request->registerNumber)) {
            $query['RegisterNumber'] = $request->registerNumber;
        }
        if (!Utils::isUnset($request->sortName)) {
            $query['SortName'] = $request->sortName;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->topSearch)) {
            $query['TopSearch'] = $request->topSearch;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchTmOnsales',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchTmOnsalesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchTmOnsalesRequest $request
     *
     * @return SearchTmOnsalesResponse
     */
    public function searchTmOnsales($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchTmOnsalesWithOptions($request, $runtime);
    }

    /**
     * @param StartNotaryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartNotaryResponse
     */
    public function startNotaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notaryOrderId)) {
            $query['NotaryOrderId'] = $request->notaryOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartNotary',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartNotaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartNotaryRequest $request
     *
     * @return StartNotaryResponse
     */
    public function startNotary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startNotaryWithOptions($request, $runtime);
    }

    /**
     * @param StoreMaterialTemporarilyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StoreMaterialTemporarilyResponse
     */
    public function storeMaterialTemporarilyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->principalName)) {
            $query['PrincipalName'] = $request->principalName;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->town)) {
            $query['Town'] = $request->town;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StoreMaterialTemporarily',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StoreMaterialTemporarilyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StoreMaterialTemporarilyRequest $request
     *
     * @return StoreMaterialTemporarilyResponse
     */
    public function storeMaterialTemporarily($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->storeMaterialTemporarilyWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSupplementRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitSupplementResponse
     */
    public function submitSupplementWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSupplementShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->uploadOssKeyList)) {
            $request->uploadOssKeyListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->uploadOssKeyList, 'UploadOssKeyList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->uploadOssKeyListShrink)) {
            $query['UploadOssKeyList'] = $request->uploadOssKeyListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSupplement',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSupplementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSupplementRequest $request
     *
     * @return SubmitSupplementResponse
     */
    public function submitSupplement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSupplementWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTrademarkApplicationComplaintRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return SubmitTrademarkApplicationComplaintResponse
     */
    public function submitTrademarkApplicationComplaintWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTrademarkApplicationComplaintShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->files)) {
            $request->filesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->files, 'Files', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->filesShrink)) {
            $query['Files'] = $request->filesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTrademarkApplicationComplaint',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTrademarkApplicationComplaintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTrademarkApplicationComplaintRequest $request
     *
     * @return SubmitTrademarkApplicationComplaintResponse
     */
    public function submitTrademarkApplicationComplaint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTrademarkApplicationComplaintWithOptions($request, $runtime);
    }

    /**
     * @param SyncTrademarkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SyncTrademarkResponse
     */
    public function syncTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->classificationCode)) {
            $query['ClassificationCode'] = $request->classificationCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->originalPrice)) {
            $query['OriginalPrice'] = $request->originalPrice;
        }
        if (!Utils::isUnset($request->ownerEnName)) {
            $query['OwnerEnName'] = $request->ownerEnName;
        }
        if (!Utils::isUnset($request->ownerName)) {
            $query['OwnerName'] = $request->ownerName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regAnnDate)) {
            $query['RegAnnDate'] = $request->regAnnDate;
        }
        if (!Utils::isUnset($request->secondaryClassification)) {
            $query['SecondaryClassification'] = $request->secondaryClassification;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdClassification)) {
            $query['ThirdClassification'] = $request->thirdClassification;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncTrademark',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncTrademarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncTrademarkRequest $request
     *
     * @return SyncTrademarkResponse
     */
    public function syncTrademark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncTrademarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApplicantContacterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicantContacterResponse
     */
    public function updateApplicantContacterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicantId)) {
            $query['ApplicantId'] = $request->applicantId;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipCode)) {
            $query['ContactZipCode'] = $request->contactZipCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicantContacter',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicantContacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicantContacterRequest $request
     *
     * @return UpdateApplicantContacterResponse
     */
    public function updateApplicantContacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicantContacterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateMaterialResponse
     */
    public function updateMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->businessLicenceOssKey)) {
            $query['BusinessLicenceOssKey'] = $request->businessLicenceOssKey;
        }
        if (!Utils::isUnset($request->cardNumber)) {
            $query['CardNumber'] = $request->cardNumber;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->contactAddress)) {
            $query['ContactAddress'] = $request->contactAddress;
        }
        if (!Utils::isUnset($request->contactCity)) {
            $query['ContactCity'] = $request->contactCity;
        }
        if (!Utils::isUnset($request->contactCounty)) {
            $query['ContactCounty'] = $request->contactCounty;
        }
        if (!Utils::isUnset($request->contactDistrict)) {
            $query['ContactDistrict'] = $request->contactDistrict;
        }
        if (!Utils::isUnset($request->contactEmail)) {
            $query['ContactEmail'] = $request->contactEmail;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->contactNumber)) {
            $query['ContactNumber'] = $request->contactNumber;
        }
        if (!Utils::isUnset($request->contactProvince)) {
            $query['ContactProvince'] = $request->contactProvince;
        }
        if (!Utils::isUnset($request->contactZipcode)) {
            $query['ContactZipcode'] = $request->contactZipcode;
        }
        if (!Utils::isUnset($request->EAddress)) {
            $query['EAddress'] = $request->EAddress;
        }
        if (!Utils::isUnset($request->EName)) {
            $query['EName'] = $request->EName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->idCardName)) {
            $query['IdCardName'] = $request->idCardName;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->idCardOssKey)) {
            $query['IdCardOssKey'] = $request->idCardOssKey;
        }
        if (!Utils::isUnset($request->legalNoticeOssKey)) {
            $query['LegalNoticeOssKey'] = $request->legalNoticeOssKey;
        }
        if (!Utils::isUnset($request->loaId)) {
            $query['LoaId'] = $request->loaId;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $query['LoaOssKey'] = $request->loaOssKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passportOssKey)) {
            $query['PassportOssKey'] = $request->passportOssKey;
        }
        if (!Utils::isUnset($request->personalType)) {
            $query['PersonalType'] = $request->personalType;
        }
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->town)) {
            $query['Town'] = $request->town;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMaterial',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMaterialRequest $request
     *
     * @return UpdateMaterialResponse
     */
    public function updateMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMaterialWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProduceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProduceResponse
     */
    public function updateProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extMap)) {
            $query['ExtMap'] = $request->extMap;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProduce',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProduceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProduceRequest $request
     *
     * @return UpdateProduceResponse
     */
    public function updateProduce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProduceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProduceLoaIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateProduceLoaIdResponse
     */
    public function updateProduceLoaIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->loaOssKey)) {
            $body['LoaOssKey'] = $request->loaOssKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProduceLoaId',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProduceLoaIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProduceLoaIdRequest $request
     *
     * @return UpdateProduceLoaIdResponse
     */
    public function updateProduceLoaId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProduceLoaIdWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSendMaterialNumRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSendMaterialNumResponse
     */
    public function updateSendMaterialNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSendMaterialNum',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSendMaterialNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSendMaterialNumRequest $request
     *
     * @return UpdateSendMaterialNumResponse
     */
    public function updateSendMaterialNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSendMaterialNumWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrademarkNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTrademarkNameResponse
     */
    public function updateTrademarkNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->tmComment)) {
            $body['TmComment'] = $request->tmComment;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $body['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $body['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrademarkName',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrademarkNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrademarkNameRequest $request
     *
     * @return UpdateTrademarkNameResponse
     */
    public function updateTrademarkName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrademarkNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTrademarkOnsaleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateTrademarkOnsaleResponse
     */
    public function updateTrademarkOnsaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->classificationCode)) {
            $query['ClassificationCode'] = $request->classificationCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->originalPrice)) {
            $query['OriginalPrice'] = $request->originalPrice;
        }
        if (!Utils::isUnset($request->ownerEnName)) {
            $query['OwnerEnName'] = $request->ownerEnName;
        }
        if (!Utils::isUnset($request->ownerName)) {
            $query['OwnerName'] = $request->ownerName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regAnnDate)) {
            $query['RegAnnDate'] = $request->regAnnDate;
        }
        if (!Utils::isUnset($request->secondaryClassification)) {
            $query['SecondaryClassification'] = $request->secondaryClassification;
        }
        if (!Utils::isUnset($request->thirdClassification)) {
            $query['ThirdClassification'] = $request->thirdClassification;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->tmType)) {
            $query['TmType'] = $request->tmType;
        }
        if (!Utils::isUnset($request->tradeTmDetailJson)) {
            $query['TradeTmDetailJson'] = $request->tradeTmDetailJson;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrademarkOnsale',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTrademarkOnsaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTrademarkOnsaleRequest $request
     *
     * @return UpdateTrademarkOnsaleResponse
     */
    public function updateTrademarkOnsale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTrademarkOnsaleWithOptions($request, $runtime);
    }

    /**
     * @param UploadNotaryDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadNotaryDataResponse
     */
    public function uploadNotaryDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->notaryType)) {
            $query['NotaryType'] = $request->notaryType;
        }
        if (!Utils::isUnset($request->uploadContext)) {
            $query['UploadContext'] = $request->uploadContext;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadNotaryData',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadNotaryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadNotaryDataRequest $request
     *
     * @return UploadNotaryDataResponse
     */
    public function uploadNotaryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadNotaryDataWithOptions($request, $runtime);
    }

    /**
     * @param UploadTrademarkOnSaleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadTrademarkOnSaleResponse
     */
    public function uploadTrademarkOnSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->classificationCode)) {
            $query['ClassificationCode'] = $request->classificationCode;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->originalPrice)) {
            $query['OriginalPrice'] = $request->originalPrice;
        }
        if (!Utils::isUnset($request->ownerEnName)) {
            $query['OwnerEnName'] = $request->ownerEnName;
        }
        if (!Utils::isUnset($request->ownerName)) {
            $query['OwnerName'] = $request->ownerName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regAnnDate)) {
            $query['RegAnnDate'] = $request->regAnnDate;
        }
        if (!Utils::isUnset($request->secondaryClassification)) {
            $query['SecondaryClassification'] = $request->secondaryClassification;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->thirdClassification)) {
            $query['ThirdClassification'] = $request->thirdClassification;
        }
        if (!Utils::isUnset($request->tmIcon)) {
            $query['TmIcon'] = $request->tmIcon;
        }
        if (!Utils::isUnset($request->tmName)) {
            $query['TmName'] = $request->tmName;
        }
        if (!Utils::isUnset($request->tmNumber)) {
            $query['TmNumber'] = $request->tmNumber;
        }
        if (!Utils::isUnset($request->tmType)) {
            $query['TmType'] = $request->tmType;
        }
        if (!Utils::isUnset($request->tradeTmDetailJson)) {
            $query['TradeTmDetailJson'] = $request->tradeTmDetailJson;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadTrademarkOnSale',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadTrademarkOnSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadTrademarkOnSaleRequest $request
     *
     * @return UploadTrademarkOnSaleResponse
     */
    public function uploadTrademarkOnSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadTrademarkOnSaleWithOptions($request, $runtime);
    }

    /**
     * @param WriteCommunicationLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return WriteCommunicationLogResponse
     */
    public function writeCommunicationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WriteCommunicationLog',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WriteCommunicationLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WriteCommunicationLogRequest $request
     *
     * @return WriteCommunicationLogResponse
     */
    public function writeCommunicationLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->writeCommunicationLogWithOptions($request, $runtime);
    }

    /**
     * @param WriteIntentionCommunicationLogRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return WriteIntentionCommunicationLogResponse
     */
    public function writeIntentionCommunicationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->reject)) {
            $query['Reject'] = $request->reject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WriteIntentionCommunicationLog',
            'version'     => '2018-07-24',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WriteIntentionCommunicationLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WriteIntentionCommunicationLogRequest $request
     *
     * @return WriteIntentionCommunicationLogResponse
     */
    public function writeIntentionCommunicationLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->writeIntentionCommunicationLogWithOptions($request, $runtime);
    }
}
