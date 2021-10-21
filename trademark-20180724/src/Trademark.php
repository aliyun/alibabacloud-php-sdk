<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AcceptPartnerNotificationRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\AcceptPartnerNotificationResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ApplyNotaryPostRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ApplyNotaryPostResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\BindMaterialRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\BindMaterialResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CancelTradeOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CancelTradeOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkIconRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkIconResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkOrderRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CheckTrademarkOrderResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineLoaRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\CombineLoaResponse;
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
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertTradeIntentionUserRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\InsertTradeIntentionUserResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersResponse;
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
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOssResourcesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOssResourcesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryQrCodeUploadStatusRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryQrCodeUploadStatusResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySupplementDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySupplementDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTaskListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTaskListResponse;
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
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorResultsResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkMonitorRulesResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceShrinkRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceDetailResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListRequest;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponse;
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
     * @param QueryTradeProduceListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryTradeProduceListResponse
     */
    public function queryTradeProduceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeProduceListResponse::fromMap($this->doRPCRequest('QueryTradeProduceList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTrademarkMonitorResultsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryTrademarkMonitorResultsResponse
     */
    public function queryTrademarkMonitorResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTrademarkMonitorResultsResponse::fromMap($this->doRPCRequest('QueryTrademarkMonitorResults', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CancelTradeOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CancelTradeOrderResponse
     */
    public function cancelTradeOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelTradeOrderResponse::fromMap($this->doRPCRequest('CancelTradeOrder', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteTmMonitorRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteTmMonitorRuleResponse
     */
    public function deleteTmMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTmMonitorRuleResponse::fromMap($this->doRPCRequest('DeleteTmMonitorRule', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UploadNotaryDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadNotaryDataResponse
     */
    public function uploadNotaryDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadNotaryDataResponse::fromMap($this->doRPCRequest('UploadNotaryData', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CopyApplicantRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyApplicantResponse
     */
    public function copyApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyApplicantResponse::fromMap($this->doRPCRequest('CopyApplicant', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PartnerUpdateTrademarkNameRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PartnerUpdateTrademarkNameResponse
     */
    public function partnerUpdateTrademarkNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PartnerUpdateTrademarkNameResponse::fromMap($this->doRPCRequest('PartnerUpdateTrademarkName', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryIntentionDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryIntentionDetailResponse
     */
    public function queryIntentionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIntentionDetailResponse::fromMap($this->doRPCRequest('QueryIntentionDetail', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryIntentionPriceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIntentionPriceResponse
     */
    public function queryIntentionPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIntentionPriceResponse::fromMap($this->doRPCRequest('QueryIntentionPrice', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryOfficialFileCustomListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOfficialFileCustomListResponse
     */
    public function queryOfficialFileCustomListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOfficialFileCustomListResponse::fromMap($this->doRPCRequest('QueryOfficialFileCustomList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckTrademarkIconRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CheckTrademarkIconResponse
     */
    public function checkTrademarkIconWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckTrademarkIconResponse::fromMap($this->doRPCRequest('CheckTrademarkIcon', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QuerySupplementDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySupplementDetailResponse
     */
    public function querySupplementDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySupplementDetailResponse::fromMap($this->doRPCRequest('QuerySupplementDetail', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UploadTrademarkOnSaleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadTrademarkOnSaleResponse
     */
    public function uploadTrademarkOnSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadTrademarkOnSaleResponse::fromMap($this->doRPCRequest('UploadTrademarkOnSale', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ApplyNotaryPostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplyNotaryPostResponse
     */
    public function applyNotaryPostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyNotaryPostResponse::fromMap($this->doRPCRequest('ApplyNotaryPost', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeMarkApplicationsByIntentionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return QueryTradeMarkApplicationsByIntentionResponse
     */
    public function queryTradeMarkApplicationsByIntentionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeMarkApplicationsByIntentionResponse::fromMap($this->doRPCRequest('QueryTradeMarkApplicationsByIntention', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveExtensionAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SaveExtensionAttributeResponse
     */
    public function saveExtensionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveExtensionAttributeResponse::fromMap($this->doRPCRequest('SaveExtensionAttribute', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AcceptPartnerNotificationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AcceptPartnerNotificationResponse
     */
    public function acceptPartnerNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AcceptPartnerNotificationResponse::fromMap($this->doRPCRequest('AcceptPartnerNotification', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSupplementResponse::fromMap($this->doRPCRequest('SubmitSupplement', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ForceUploadTrademarkOnsaleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ForceUploadTrademarkOnsaleResponse
     */
    public function forceUploadTrademarkOnsaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ForceUploadTrademarkOnsaleResponse::fromMap($this->doRPCRequest('ForceUploadTrademarkOnsale', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BindMaterialRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindMaterialResponse
     */
    public function bindMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindMaterialResponse::fromMap($this->doRPCRequest('BindMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultPrincipalResponse
     */
    public function getDefaultPrincipalWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetDefaultPrincipalResponse::fromMap($this->doRPCRequest('GetDefaultPrincipal', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryCommunicationLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCommunicationLogsResponse
     */
    public function queryCommunicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCommunicationLogsResponse::fromMap($this->doRPCRequest('QueryCommunicationLogs', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GenerateQrCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateQrCodeResponse
     */
    public function generateQrCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateQrCodeResponse::fromMap($this->doRPCRequest('GenerateQrCode', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfirmDissentOriginalRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfirmDissentOriginalResponse
     */
    public function confirmDissentOriginalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmDissentOriginalResponse::fromMap($this->doRPCRequest('ConfirmDissentOriginal', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertImageToGrayResponse::fromMap($this->doRPCRequest('ConvertImageToGray', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryIntentionListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryIntentionListResponse
     */
    public function queryIntentionListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIntentionListResponse::fromMap($this->doRPCRequest('QueryIntentionList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetAuthorizationLetterVersionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAuthorizationLetterVersionResponse
     */
    public function getAuthorizationLetterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAuthorizationLetterVersionResponse::fromMap($this->doRPCRequest('GetAuthorizationLetterVersion', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTrademarkPriceResponse::fromMap($this->doRPCRequest('QueryTrademarkPrice', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertTmMonitorRuleResponse::fromMap($this->doRPCRequest('InsertTmMonitorRule', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTrademarkMonitorRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTrademarkMonitorRulesResponse
     */
    public function queryTrademarkMonitorRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTrademarkMonitorRulesResponse::fromMap($this->doRPCRequest('QueryTrademarkMonitorRules', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DenySupplementRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DenySupplementResponse
     */
    public function denySupplementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DenySupplementResponse::fromMap($this->doRPCRequest('DenySupplement', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryMaterialRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMaterialResponse
     */
    public function queryMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMaterialResponse::fromMap($this->doRPCRequest('QueryMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateTrademarkOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTrademarkOrderResponse
     */
    public function createTrademarkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTrademarkOrderResponse::fromMap($this->doRPCRequest('CreateTrademarkOrder', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryMaterialListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMaterialListResponse
     */
    public function queryMaterialListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMaterialListResponse::fromMap($this->doRPCRequest('QueryMaterialList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckTrademarkOrderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckTrademarkOrderResponse
     */
    public function checkTrademarkOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckTrademarkOrderResponse::fromMap($this->doRPCRequest('CheckTrademarkOrder', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeMarkApplicationsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTradeMarkApplicationsResponse
     */
    public function queryTradeMarkApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeMarkApplicationsResponse::fromMap($this->doRPCRequest('QueryTradeMarkApplications', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateApplicantContacterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicantContacterResponse
     */
    public function updateApplicantContacterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateApplicantContacterResponse::fromMap($this->doRPCRequest('UpdateApplicantContacter', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SaveTaskResponse
     */
    public function saveTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskResponse::fromMap($this->doRPCRequest('SaveTask', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitTrademarkApplicationComplaintResponse::fromMap($this->doRPCRequest('SubmitTrademarkApplicationComplaint', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param WriteIntentionCommunicationLogRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return WriteIntentionCommunicationLogResponse
     */
    public function writeIntentionCommunicationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WriteIntentionCommunicationLogResponse::fromMap($this->doRPCRequest('WriteIntentionCommunicationLog', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param SaveTaskForOfficialFileCustomRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SaveTaskForOfficialFileCustomResponse
     */
    public function saveTaskForOfficialFileCustomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTaskForOfficialFileCustomResponse::fromMap($this->doRPCRequest('SaveTaskForOfficialFileCustom', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescirbeCombineTrademarkRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescirbeCombineTrademarkResponse
     */
    public function descirbeCombineTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescirbeCombineTrademarkResponse::fromMap($this->doRPCRequest('DescirbeCombineTrademark', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetNotaryOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNotaryOrderResponse
     */
    public function getNotaryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNotaryOrderResponse::fromMap($this->doRPCRequest('GetNotaryOrder', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfirmAdditionalMaterialRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConfirmAdditionalMaterialResponse
     */
    public function confirmAdditionalMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmAdditionalMaterialResponse::fromMap($this->doRPCRequest('ConfirmAdditionalMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InsertRenewInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InsertRenewInfoResponse
     */
    public function insertRenewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertRenewInfoResponse::fromMap($this->doRPCRequest('InsertRenewInfo', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryCredentialsInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCredentialsInfoResponse
     */
    public function queryCredentialsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCredentialsInfoResponse::fromMap($this->doRPCRequest('QueryCredentialsInfo', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SearchTmOnsalesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchTmOnsalesResponse
     */
    public function searchTmOnsalesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchTmOnsalesResponse::fromMap($this->doRPCRequest('SearchTmOnsales', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GenerateUploadFilePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUploadFilePolicyResponse
     */
    public function generateUploadFilePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateUploadFilePolicyResponse::fromMap($this->doRPCRequest('GenerateUploadFilePolicy', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMaterialResponse
     */
    public function deleteMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMaterialResponse::fromMap($this->doRPCRequest('DeleteMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param WriteCommunicationLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return WriteCommunicationLogResponse
     */
    public function writeCommunicationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WriteCommunicationLogResponse::fromMap($this->doRPCRequest('WriteCommunicationLog', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InsertTradeIntentionUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InsertTradeIntentionUserResponse
     */
    public function insertTradeIntentionUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertTradeIntentionUserResponse::fromMap($this->doRPCRequest('InsertTradeIntentionUser', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertTradeIntentionUserRequest $request
     *
     * @return InsertTradeIntentionUserResponse
     */
    public function insertTradeIntentionUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertTradeIntentionUserWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryExtensionAttributeResponse::fromMap($this->doRPCRequest('QueryExtensionAttribute', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateTrademarkOnsaleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateTrademarkOnsaleResponse
     */
    public function updateTrademarkOnsaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrademarkOnsaleResponse::fromMap($this->doRPCRequest('UpdateTrademarkOnsale', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeProduceDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTradeProduceDetailResponse
     */
    public function queryTradeProduceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeProduceDetailResponse::fromMap($this->doRPCRequest('QueryTradeProduceDetail', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryQrCodeUploadStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryQrCodeUploadStatusResponse
     */
    public function queryQrCodeUploadStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryQrCodeUploadStatusResponse::fromMap($this->doRPCRequest('QueryQrCodeUploadStatus', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RejectApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RejectApplicantResponse
     */
    public function rejectApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RejectApplicantResponse::fromMap($this->doRPCRequest('RejectApplicant', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeIntentionUserListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTradeIntentionUserListResponse
     */
    public function queryTradeIntentionUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeIntentionUserListResponse::fromMap($this->doRPCRequest('QueryTradeIntentionUserList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StoreMaterialTemporarilyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StoreMaterialTemporarilyResponse
     */
    public function storeMaterialTemporarilyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StoreMaterialTemporarilyResponse::fromMap($this->doRPCRequest('StoreMaterialTemporarily', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefuseAdditionalMaterialRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RefuseAdditionalMaterialResponse
     */
    public function refuseAdditionalMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefuseAdditionalMaterialResponse::fromMap($this->doRPCRequest('RefuseAdditionalMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListNotaryInfosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListNotaryInfosResponse
     */
    public function listNotaryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNotaryInfosResponse::fromMap($this->doRPCRequest('ListNotaryInfos', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetDefaultPrincipalNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDefaultPrincipalNameResponse
     */
    public function getDefaultPrincipalNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDefaultPrincipalNameResponse::fromMap($this->doRPCRequest('GetDefaultPrincipalName', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeMarkApplicationDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryTradeMarkApplicationDetailResponse
     */
    public function queryTradeMarkApplicationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeMarkApplicationDetailResponse::fromMap($this->doRPCRequest('QueryTradeMarkApplicationDetail', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SaveClassificationConditionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SaveClassificationConditionsResponse
     */
    public function saveClassificationConditionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveClassificationConditionsResponse::fromMap($this->doRPCRequest('SaveClassificationConditions', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param FillLogisticsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FillLogisticsResponse
     */
    public function fillLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FillLogisticsResponse::fromMap($this->doRPCRequest('FillLogistics', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateMaterialResponse
     */
    public function updateMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMaterialResponse::fromMap($this->doRPCRequest('UpdateMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTradeMarkApplicationLogsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryTradeMarkApplicationLogsResponse
     */
    public function queryTradeMarkApplicationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTradeMarkApplicationLogsResponse::fromMap($this->doRPCRequest('QueryTradeMarkApplicationLogs', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefundProduceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RefundProduceResponse
     */
    public function refundProduceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundProduceResponse::fromMap($this->doRPCRequest('RefundProduce', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SyncTrademarkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SyncTrademarkResponse
     */
    public function syncTrademarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncTrademarkResponse::fromMap($this->doRPCRequest('SyncTrademark', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CombineLoaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CombineLoaResponse
     */
    public function combineLoaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CombineLoaResponse::fromMap($this->doRPCRequest('CombineLoa', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FilterUnavailableCodesResponse::fromMap($this->doRPCRequest('FilterUnavailableCodes', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InsertMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InsertMaterialResponse
     */
    public function insertMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertMaterialResponse::fromMap($this->doRPCRequest('InsertMaterial', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveTradeMarkReviewMaterialDetailResponse::fromMap($this->doRPCRequest('SaveTradeMarkReviewMaterialDetail', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryMonitorKeywordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMonitorKeywordsResponse
     */
    public function queryMonitorKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMonitorKeywordsResponse::fromMap($this->doRPCRequest('QueryMonitorKeywords', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTaskListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskListResponse
     */
    public function queryTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskListResponse::fromMap($this->doRPCRequest('QueryTaskList', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateTrademarkNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTrademarkNameResponse
     */
    public function updateTrademarkNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTrademarkNameResponse::fromMap($this->doRPCRequest('UpdateTrademarkName', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckLoaFillRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CheckLoaFillResponse
     */
    public function checkLoaFillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckLoaFillResponse::fromMap($this->doRPCRequest('CheckLoaFill', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ConfirmApplicantRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfirmApplicantResponse
     */
    public function confirmApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfirmApplicantResponse::fromMap($this->doRPCRequest('ConfirmApplicant', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateIntentionOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateIntentionOrderResponse
     */
    public function createIntentionOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIntentionOrderResponse::fromMap($this->doRPCRequest('CreateIntentionOrder', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryOssResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOssResourcesResponse
     */
    public function queryOssResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOssResourcesResponse::fromMap($this->doRPCRequest('QueryOssResources', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefuseApplicantRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RefuseApplicantResponse
     */
    public function refuseApplicantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefuseApplicantResponse::fromMap($this->doRPCRequest('RefuseApplicant', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateIntentionOrderGeneratingPayRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateIntentionOrderGeneratingPayResponse
     */
    public function createIntentionOrderGeneratingPayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateIntentionOrderGeneratingPayResponse::fromMap($this->doRPCRequest('CreateIntentionOrderGeneratingPay', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListNotaryOrdersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNotaryOrdersResponse
     */
    public function listNotaryOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNotaryOrdersResponse::fromMap($this->doRPCRequest('ListNotaryOrders', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetSupportPrincipalNameResponse
     */
    public function getSupportPrincipalNameWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetSupportPrincipalNameResponse::fromMap($this->doRPCRequest('GetSupportPrincipalName', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartNotaryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartNotaryResponse
     */
    public function startNotaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartNotaryResponse::fromMap($this->doRPCRequest('StartNotary', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSendMaterialNumRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSendMaterialNumResponse
     */
    public function updateSendMaterialNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSendMaterialNumResponse::fromMap($this->doRPCRequest('UpdateSendMaterialNum', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteTrademarkApplicationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteTrademarkApplicationResponse
     */
    public function deleteTrademarkApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTrademarkApplicationResponse::fromMap($this->doRPCRequest('DeleteTrademarkApplication', '2018-07-24', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
