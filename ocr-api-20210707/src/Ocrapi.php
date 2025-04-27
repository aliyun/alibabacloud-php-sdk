<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextShrinkRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAcceptanceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAcceptanceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAccountLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankAccountLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankCardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBankCardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBasicRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBasicResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBirthCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBirthCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusShipTicketRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeBusShipTicketResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeChinesePassportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeChinesePassportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCommonPrintedInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCommonPrintedInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCosmeticProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCosmeticProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCovidTestReportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCovidTestReportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDocumentStructureRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDocumentStructureResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDrivingLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeDrivingLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduFormulaRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduFormulaResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduOralCalculationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduOralCalculationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperCutRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperCutResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperStructedRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduPaperStructedResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduQuestionOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEduQuestionOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEnglishRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEnglishResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEstateCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeEstateCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToHKRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToHKResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToMainlandRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeExitEntryPermitToMainlandResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralStructureShrinkRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHealthCodeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHealthCodeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHKIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHKIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHotelConsumeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHotelConsumeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInternationalIdcardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeJanpaneseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeJanpaneseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeKoreanRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeKoreanResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeLatinRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeLatinResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMedicalDeviceProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMixedInvoicesRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMixedInvoicesResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeMultiLanguageShrinkRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeNonTaxInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeNonTaxInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePaymentRecordRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePaymentRecordResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePurchaseRecordRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePurchaseRecordResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRideHailingItineraryRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRideHailingItineraryResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeShoppingReceiptRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeShoppingReceiptResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardVersionIIRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeSocialSecurityCardVersionIIResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxClearanceCertificateRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxClearanceCertificateResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTollInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTollInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeUsedCarInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeUsedCarInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleRegistrationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleRegistrationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyVATInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\VerifyVATInvoiceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ocrapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ocr-api', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 全文识别高精版.
     *
     * @param request - RecognizeAdvancedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeAdvancedResponse
     *
     * @param RecognizeAdvancedRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeAdvancedResponse
     */
    public function recognizeAdvancedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->needSortPage) {
            @$query['NeedSortPage'] = $request->needSortPage;
        }

        if (null !== $request->noStamp) {
            @$query['NoStamp'] = $request->noStamp;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->paragraph) {
            @$query['Paragraph'] = $request->paragraph;
        }

        if (null !== $request->row) {
            @$query['Row'] = $request->row;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeAdvanced',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeAdvancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 全文识别高精版.
     *
     * @param request - RecognizeAdvancedRequest
     *
     * @returns RecognizeAdvancedResponse
     *
     * @param RecognizeAdvancedRequest $request
     *
     * @return RecognizeAdvancedResponse
     */
    public function recognizeAdvanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAdvancedWithOptions($request, $runtime);
    }

    /**
     * 航空行程单.
     *
     * @param request - RecognizeAirItineraryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeAirItineraryResponse
     *
     * @param RecognizeAirItineraryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeAirItineraryResponse
     */
    public function recognizeAirItineraryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeAirItinerary',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeAirItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 航空行程单.
     *
     * @param request - RecognizeAirItineraryRequest
     *
     * @returns RecognizeAirItineraryResponse
     *
     * @param RecognizeAirItineraryRequest $request
     *
     * @return RecognizeAirItineraryResponse
     */
    public function recognizeAirItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAirItineraryWithOptions($request, $runtime);
    }

    /**
     * 统一Api.
     *
     * @param tmpReq - RecognizeAllTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeAllTextResponse
     *
     * @param RecognizeAllTextRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeAllTextResponse
     */
    public function recognizeAllTextWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeAllTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->advancedConfig) {
            $request->advancedConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advancedConfig, 'AdvancedConfig', 'json');
        }

        if (null !== $tmpReq->idCardConfig) {
            $request->idCardConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->idCardConfig, 'IdCardConfig', 'json');
        }

        if (null !== $tmpReq->internationalBusinessLicenseConfig) {
            $request->internationalBusinessLicenseConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->internationalBusinessLicenseConfig, 'InternationalBusinessLicenseConfig', 'json');
        }

        if (null !== $tmpReq->internationalIdCardConfig) {
            $request->internationalIdCardConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->internationalIdCardConfig, 'InternationalIdCardConfig', 'json');
        }

        if (null !== $tmpReq->multiLanConfig) {
            $request->multiLanConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiLanConfig, 'MultiLanConfig', 'json');
        }

        if (null !== $tmpReq->tableConfig) {
            $request->tableConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tableConfig, 'TableConfig', 'json');
        }

        $query = [];
        if (null !== $request->advancedConfigShrink) {
            @$query['AdvancedConfig'] = $request->advancedConfigShrink;
        }

        if (null !== $request->idCardConfigShrink) {
            @$query['IdCardConfig'] = $request->idCardConfigShrink;
        }

        if (null !== $request->internationalBusinessLicenseConfigShrink) {
            @$query['InternationalBusinessLicenseConfig'] = $request->internationalBusinessLicenseConfigShrink;
        }

        if (null !== $request->internationalIdCardConfigShrink) {
            @$query['InternationalIdCardConfig'] = $request->internationalIdCardConfigShrink;
        }

        if (null !== $request->multiLanConfigShrink) {
            @$query['MultiLanConfig'] = $request->multiLanConfigShrink;
        }

        if (null !== $request->outputBarCode) {
            @$query['OutputBarCode'] = $request->outputBarCode;
        }

        if (null !== $request->outputCoordinate) {
            @$query['OutputCoordinate'] = $request->outputCoordinate;
        }

        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->outputKVExcel) {
            @$query['OutputKVExcel'] = $request->outputKVExcel;
        }

        if (null !== $request->outputOricoord) {
            @$query['OutputOricoord'] = $request->outputOricoord;
        }

        if (null !== $request->outputQrcode) {
            @$query['OutputQrcode'] = $request->outputQrcode;
        }

        if (null !== $request->outputStamp) {
            @$query['OutputStamp'] = $request->outputStamp;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->tableConfigShrink) {
            @$query['TableConfig'] = $request->tableConfigShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeAllText',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeAllTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 统一Api.
     *
     * @param request - RecognizeAllTextRequest
     *
     * @returns RecognizeAllTextResponse
     *
     * @param RecognizeAllTextRequest $request
     *
     * @return RecognizeAllTextResponse
     */
    public function recognizeAllText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAllTextWithOptions($request, $runtime);
    }

    /**
     * 银承汇票识别.
     *
     * @param request - RecognizeBankAcceptanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBankAcceptanceResponse
     *
     * @param RecognizeBankAcceptanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBankAcceptance',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBankAcceptanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 银承汇票识别.
     *
     * @param request - RecognizeBankAcceptanceRequest
     *
     * @returns RecognizeBankAcceptanceResponse
     *
     * @param RecognizeBankAcceptanceRequest $request
     *
     * @return RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAcceptanceWithOptions($request, $runtime);
    }

    /**
     * 银行开户许可证识别.
     *
     * @param request - RecognizeBankAccountLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBankAccountLicenseResponse
     *
     * @param RecognizeBankAccountLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBankAccountLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBankAccountLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 银行开户许可证识别.
     *
     * @param request - RecognizeBankAccountLicenseRequest
     *
     * @returns RecognizeBankAccountLicenseResponse
     *
     * @param RecognizeBankAccountLicenseRequest $request
     *
     * @return RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAccountLicenseWithOptions($request, $runtime);
    }

    /**
     * 银行卡识别.
     *
     * @param request - RecognizeBankCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBankCardResponse
     *
     * @param RecognizeBankCardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBankCard',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBankCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 银行卡识别.
     *
     * @param request - RecognizeBankCardRequest
     *
     * @returns RecognizeBankCardResponse
     *
     * @param RecognizeBankCardRequest $request
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankCardWithOptions($request, $runtime);
    }

    /**
     * 电商图片文字识别.
     *
     * @param request - RecognizeBasicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBasicResponse
     *
     * @param RecognizeBasicRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeBasicResponse
     */
    public function recognizeBasicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBasic',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 电商图片文字识别.
     *
     * @param request - RecognizeBasicRequest
     *
     * @returns RecognizeBasicResponse
     *
     * @param RecognizeBasicRequest $request
     *
     * @return RecognizeBasicResponse
     */
    public function recognizeBasic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBasicWithOptions($request, $runtime);
    }

    /**
     * 出生证明.
     *
     * @param request - RecognizeBirthCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBirthCertificationResponse
     *
     * @param RecognizeBirthCertificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBirthCertification',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBirthCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 出生证明.
     *
     * @param request - RecognizeBirthCertificationRequest
     *
     * @returns RecognizeBirthCertificationResponse
     *
     * @param RecognizeBirthCertificationRequest $request
     *
     * @return RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBirthCertificationWithOptions($request, $runtime);
    }

    /**
     * 客运车船票识别.
     *
     * @param request - RecognizeBusShipTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBusShipTicketResponse
     *
     * @param RecognizeBusShipTicketRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBusShipTicket',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBusShipTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 客运车船票识别.
     *
     * @param request - RecognizeBusShipTicketRequest
     *
     * @returns RecognizeBusShipTicketResponse
     *
     * @param RecognizeBusShipTicketRequest $request
     *
     * @return RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusShipTicketWithOptions($request, $runtime);
    }

    /**
     * 营业执照识别.
     *
     * @param request - RecognizeBusinessLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBusinessLicenseResponse
     *
     * @param RecognizeBusinessLicenseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeBusinessLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 营业执照识别.
     *
     * @param request - RecognizeBusinessLicenseRequest
     *
     * @returns RecognizeBusinessLicenseResponse
     *
     * @param RecognizeBusinessLicenseRequest $request
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * 机动车销售发票.
     *
     * @param request - RecognizeCarInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCarInvoiceResponse
     *
     * @param RecognizeCarInvoiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCarInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机动车销售发票.
     *
     * @param request - RecognizeCarInvoiceRequest
     *
     * @returns RecognizeCarInvoiceResponse
     *
     * @param RecognizeCarInvoiceRequest $request
     *
     * @return RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * 车牌识别.
     *
     * @param request - RecognizeCarNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCarNumberResponse
     *
     * @param RecognizeCarNumberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeCarNumberResponse
     */
    public function recognizeCarNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCarNumber',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCarNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 车牌识别.
     *
     * @param request - RecognizeCarNumberRequest
     *
     * @returns RecognizeCarNumberResponse
     *
     * @param RecognizeCarNumberRequest $request
     *
     * @return RecognizeCarNumberResponse
     */
    public function recognizeCarNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarNumberWithOptions($request, $runtime);
    }

    /**
     * 车辆vin码识别.
     *
     * @param request - RecognizeCarVinCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCarVinCodeResponse
     *
     * @param RecognizeCarVinCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCarVinCode',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCarVinCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 车辆vin码识别.
     *
     * @param request - RecognizeCarVinCodeRequest
     *
     * @returns RecognizeCarVinCodeResponse
     *
     * @param RecognizeCarVinCodeRequest $request
     *
     * @return RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarVinCodeWithOptions($request, $runtime);
    }

    /**
     * 中国护照识别.
     *
     * @param request - RecognizeChinesePassportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeChinesePassportResponse
     *
     * @param RecognizeChinesePassportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeChinesePassport',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeChinesePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 中国护照识别.
     *
     * @param request - RecognizeChinesePassportRequest
     *
     * @returns RecognizeChinesePassportResponse
     *
     * @param RecognizeChinesePassportRequest $request
     *
     * @return RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeChinesePassportWithOptions($request, $runtime);
    }

    /**
     * 通用机打发票识别.
     *
     * @param request - RecognizeCommonPrintedInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCommonPrintedInvoiceResponse
     *
     * @param RecognizeCommonPrintedInvoiceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCommonPrintedInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCommonPrintedInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用机打发票识别.
     *
     * @param request - RecognizeCommonPrintedInvoiceRequest
     *
     * @returns RecognizeCommonPrintedInvoiceResponse
     *
     * @param RecognizeCommonPrintedInvoiceRequest $request
     *
     * @return RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCommonPrintedInvoiceWithOptions($request, $runtime);
    }

    /**
     * 化妆品生产许可证识别.
     *
     * @param request - RecognizeCosmeticProduceLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCosmeticProduceLicenseResponse
     *
     * @param RecognizeCosmeticProduceLicenseRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCosmeticProduceLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCosmeticProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 化妆品生产许可证识别.
     *
     * @param request - RecognizeCosmeticProduceLicenseRequest
     *
     * @returns RecognizeCosmeticProduceLicenseResponse
     *
     * @param RecognizeCosmeticProduceLicenseRequest $request
     *
     * @return RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCosmeticProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * 核算检测报告识别.
     *
     * @param request - RecognizeCovidTestReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCovidTestReportResponse
     *
     * @param RecognizeCovidTestReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->multipleResult) {
            @$query['MultipleResult'] = $request->multipleResult;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCovidTestReport',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCovidTestReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 核算检测报告识别.
     *
     * @param request - RecognizeCovidTestReportRequest
     *
     * @returns RecognizeCovidTestReportResponse
     *
     * @param RecognizeCovidTestReportRequest $request
     *
     * @return RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCovidTestReportWithOptions($request, $runtime);
    }

    /**
     * 第二类医疗器械经营备案凭证
     *
     * @param request - RecognizeCtwoMedicalDeviceManageLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCtwoMedicalDeviceManageLicenseResponse
     *
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeCtwoMedicalDeviceManageLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCtwoMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 第二类医疗器械经营备案凭证
     *
     * @param request - RecognizeCtwoMedicalDeviceManageLicenseRequest
     *
     * @returns RecognizeCtwoMedicalDeviceManageLicenseResponse
     *
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * 文档结构化识别.
     *
     * @param request - RecognizeDocumentStructureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeDocumentStructureResponse
     *
     * @param RecognizeDocumentStructureRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->needSortPage) {
            @$query['NeedSortPage'] = $request->needSortPage;
        }

        if (null !== $request->noStamp) {
            @$query['NoStamp'] = $request->noStamp;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->paragraph) {
            @$query['Paragraph'] = $request->paragraph;
        }

        if (null !== $request->row) {
            @$query['Row'] = $request->row;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->useNewStyleOutput) {
            @$query['UseNewStyleOutput'] = $request->useNewStyleOutput;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeDocumentStructure',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeDocumentStructureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档结构化识别.
     *
     * @param request - RecognizeDocumentStructureRequest
     *
     * @returns RecognizeDocumentStructureResponse
     *
     * @param RecognizeDocumentStructureRequest $request
     *
     * @return RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDocumentStructureWithOptions($request, $runtime);
    }

    /**
     * 驾驶证识别.
     *
     * @param request - RecognizeDrivingLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeDrivingLicenseResponse
     *
     * @param RecognizeDrivingLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeDrivingLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeDrivingLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 驾驶证识别.
     *
     * @param request - RecognizeDrivingLicenseRequest
     *
     * @returns RecognizeDrivingLicenseResponse
     *
     * @param RecognizeDrivingLicenseRequest $request
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDrivingLicenseWithOptions($request, $runtime);
    }

    /**
     * 印刷体数学公式识别.
     *
     * @param request - RecognizeEduFormulaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduFormulaResponse
     *
     * @param RecognizeEduFormulaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeEduFormulaResponse
     */
    public function recognizeEduFormulaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduFormula',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduFormulaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 印刷体数学公式识别.
     *
     * @param request - RecognizeEduFormulaRequest
     *
     * @returns RecognizeEduFormulaResponse
     *
     * @param RecognizeEduFormulaRequest $request
     *
     * @return RecognizeEduFormulaResponse
     */
    public function recognizeEduFormula($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduFormulaWithOptions($request, $runtime);
    }

    /**
     * 口算判题.
     *
     * @param request - RecognizeEduOralCalculationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduOralCalculationResponse
     *
     * @param RecognizeEduOralCalculationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduOralCalculation',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduOralCalculationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 口算判题.
     *
     * @param request - RecognizeEduOralCalculationRequest
     *
     * @returns RecognizeEduOralCalculationResponse
     *
     * @param RecognizeEduOralCalculationRequest $request
     *
     * @return RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduOralCalculationWithOptions($request, $runtime);
    }

    /**
     * 试卷切题识别.
     *
     * @param request - RecognizeEduPaperCutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduPaperCutResponse
     *
     * @param RecognizeEduPaperCutRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cutType) {
            @$query['CutType'] = $request->cutType;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->outputOricoord) {
            @$query['OutputOricoord'] = $request->outputOricoord;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduPaperCut',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduPaperCutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 试卷切题识别.
     *
     * @param request - RecognizeEduPaperCutRequest
     *
     * @returns RecognizeEduPaperCutResponse
     *
     * @param RecognizeEduPaperCutRequest $request
     *
     * @return RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperCutWithOptions($request, $runtime);
    }

    /**
     * 整页试卷识别.
     *
     * @param request - RecognizeEduPaperOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduPaperOcrResponse
     *
     * @param RecognizeEduPaperOcrRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->outputOricoord) {
            @$query['OutputOricoord'] = $request->outputOricoord;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduPaperOcr',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduPaperOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 整页试卷识别.
     *
     * @param request - RecognizeEduPaperOcrRequest
     *
     * @returns RecognizeEduPaperOcrResponse
     *
     * @param RecognizeEduPaperOcrRequest $request
     *
     * @return RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperOcrWithOptions($request, $runtime);
    }

    /**
     * 精细版结构化切题.
     *
     * @param request - RecognizeEduPaperStructedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduPaperStructedResponse
     *
     * @param RecognizeEduPaperStructedRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputOricoord) {
            @$query['OutputOricoord'] = $request->outputOricoord;
        }

        if (null !== $request->subject) {
            @$query['Subject'] = $request->subject;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduPaperStructed',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduPaperStructedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 精细版结构化切题.
     *
     * @param request - RecognizeEduPaperStructedRequest
     *
     * @returns RecognizeEduPaperStructedResponse
     *
     * @param RecognizeEduPaperStructedRequest $request
     *
     * @return RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperStructedWithOptions($request, $runtime);
    }

    /**
     * 题目识别.
     *
     * @param request - RecognizeEduQuestionOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEduQuestionOcrResponse
     *
     * @param RecognizeEduQuestionOcrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEduQuestionOcr',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEduQuestionOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 题目识别.
     *
     * @param request - RecognizeEduQuestionOcrRequest
     *
     * @returns RecognizeEduQuestionOcrResponse
     *
     * @param RecognizeEduQuestionOcrRequest $request
     *
     * @return RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduQuestionOcrWithOptions($request, $runtime);
    }

    /**
     * 英语专项识别.
     *
     * @param request - RecognizeEnglishRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEnglishResponse
     *
     * @param RecognizeEnglishRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeEnglishResponse
     */
    public function recognizeEnglishWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEnglish',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEnglishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 英语专项识别.
     *
     * @param request - RecognizeEnglishRequest
     *
     * @returns RecognizeEnglishResponse
     *
     * @param RecognizeEnglishRequest $request
     *
     * @return RecognizeEnglishResponse
     */
    public function recognizeEnglish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEnglishWithOptions($request, $runtime);
    }

    /**
     * 不动产权证
     *
     * @param request - RecognizeEstateCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeEstateCertificationResponse
     *
     * @param RecognizeEstateCertificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeEstateCertification',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeEstateCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 不动产权证
     *
     * @param request - RecognizeEstateCertificationRequest
     *
     * @returns RecognizeEstateCertificationResponse
     *
     * @param RecognizeEstateCertificationRequest $request
     *
     * @return RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEstateCertificationWithOptions($request, $runtime);
    }

    /**
     * 来往港澳台通行证识别.
     *
     * @param request - RecognizeExitEntryPermitToHKRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeExitEntryPermitToHKResponse
     *
     * @param RecognizeExitEntryPermitToHKRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHKWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeExitEntryPermitToHK',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeExitEntryPermitToHKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 来往港澳台通行证识别.
     *
     * @param request - RecognizeExitEntryPermitToHKRequest
     *
     * @returns RecognizeExitEntryPermitToHKResponse
     *
     * @param RecognizeExitEntryPermitToHKRequest $request
     *
     * @return RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToHKWithOptions($request, $runtime);
    }

    /**
     * 来往大陆(内地)通行证识别.
     *
     * @param request - RecognizeExitEntryPermitToMainlandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeExitEntryPermitToMainlandResponse
     *
     * @param RecognizeExitEntryPermitToMainlandRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainlandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeExitEntryPermitToMainland',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeExitEntryPermitToMainlandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 来往大陆(内地)通行证识别.
     *
     * @param request - RecognizeExitEntryPermitToMainlandRequest
     *
     * @returns RecognizeExitEntryPermitToMainlandResponse
     *
     * @param RecognizeExitEntryPermitToMainlandRequest $request
     *
     * @return RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainland($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToMainlandWithOptions($request, $runtime);
    }

    /**
     * 食品经营许可证
     *
     * @param request - RecognizeFoodManageLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeFoodManageLicenseResponse
     *
     * @param RecognizeFoodManageLicenseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeFoodManageLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeFoodManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 食品经营许可证
     *
     * @param request - RecognizeFoodManageLicenseRequest
     *
     * @returns RecognizeFoodManageLicenseResponse
     *
     * @param RecognizeFoodManageLicenseRequest $request
     *
     * @return RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodManageLicenseWithOptions($request, $runtime);
    }

    /**
     * 食品生产许可证
     *
     * @param request - RecognizeFoodProduceLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeFoodProduceLicenseResponse
     *
     * @param RecognizeFoodProduceLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeFoodProduceLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeFoodProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 食品生产许可证
     *
     * @param request - RecognizeFoodProduceLicenseRequest
     *
     * @returns RecognizeFoodProduceLicenseResponse
     *
     * @param RecognizeFoodProduceLicenseRequest $request
     *
     * @return RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * 通用文字识别.
     *
     * @param request - RecognizeGeneralRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeGeneralResponse
     *
     * @param RecognizeGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeGeneralResponse
     */
    public function recognizeGeneralWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeGeneral',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用文字识别.
     *
     * @param request - RecognizeGeneralRequest
     *
     * @returns RecognizeGeneralResponse
     *
     * @param RecognizeGeneralRequest $request
     *
     * @return RecognizeGeneralResponse
     */
    public function recognizeGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeGeneralWithOptions($request, $runtime);
    }

    /**
     * DocMaster.
     *
     * @param tmpReq - RecognizeGeneralStructureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeGeneralStructureResponse
     *
     * @param RecognizeGeneralStructureRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeGeneralStructureResponse
     */
    public function recognizeGeneralStructureWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeGeneralStructureShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'simple');
        }

        $query = [];
        if (null !== $request->keysShrink) {
            @$query['Keys'] = $request->keysShrink;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeGeneralStructure',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeGeneralStructureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DocMaster.
     *
     * @param request - RecognizeGeneralStructureRequest
     *
     * @returns RecognizeGeneralStructureResponse
     *
     * @param RecognizeGeneralStructureRequest $request
     *
     * @return RecognizeGeneralStructureResponse
     */
    public function recognizeGeneralStructure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeGeneralStructureWithOptions($request, $runtime);
    }

    /**
     * 香港身份证识别.
     *
     * @param request - RecognizeHKIdcardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeHKIdcardResponse
     *
     * @param RecognizeHKIdcardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeHKIdcard',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeHKIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 香港身份证识别.
     *
     * @param request - RecognizeHKIdcardRequest
     *
     * @returns RecognizeHKIdcardResponse
     *
     * @param RecognizeHKIdcardRequest $request
     *
     * @return RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHKIdcardWithOptions($request, $runtime);
    }

    /**
     * 通用手写体识别.
     *
     * @param request - RecognizeHandwritingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeHandwritingResponse
     *
     * @param RecognizeHandwritingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeHandwritingResponse
     */
    public function recognizeHandwritingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->needSortPage) {
            @$query['NeedSortPage'] = $request->needSortPage;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->paragraph) {
            @$query['Paragraph'] = $request->paragraph;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeHandwriting',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeHandwritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用手写体识别.
     *
     * @param request - RecognizeHandwritingRequest
     *
     * @returns RecognizeHandwritingResponse
     *
     * @param RecognizeHandwritingRequest $request
     *
     * @return RecognizeHandwritingResponse
     */
    public function recognizeHandwriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHandwritingWithOptions($request, $runtime);
    }

    /**
     * 防疫健康码识别.
     *
     * @param request - RecognizeHealthCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeHealthCodeResponse
     *
     * @param RecognizeHealthCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeHealthCodeResponse
     */
    public function recognizeHealthCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeHealthCode',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeHealthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 防疫健康码识别.
     *
     * @param request - RecognizeHealthCodeRequest
     *
     * @returns RecognizeHealthCodeResponse
     *
     * @param RecognizeHealthCodeRequest $request
     *
     * @return RecognizeHealthCodeResponse
     */
    public function recognizeHealthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHealthCodeWithOptions($request, $runtime);
    }

    /**
     * 酒店流水识别.
     *
     * @param request - RecognizeHotelConsumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeHotelConsumeResponse
     *
     * @param RecognizeHotelConsumeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeHotelConsume',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeHotelConsumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 酒店流水识别.
     *
     * @param request - RecognizeHotelConsumeRequest
     *
     * @returns RecognizeHotelConsumeResponse
     *
     * @param RecognizeHotelConsumeRequest $request
     *
     * @return RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHotelConsumeWithOptions($request, $runtime);
    }

    /**
     * 户口本识别.
     *
     * @param request - RecognizeHouseholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeHouseholdResponse
     *
     * @param RecognizeHouseholdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeHouseholdResponse
     */
    public function recognizeHouseholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isResidentPage) {
            @$query['IsResidentPage'] = $request->isResidentPage;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeHousehold',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeHouseholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 户口本识别.
     *
     * @param request - RecognizeHouseholdRequest
     *
     * @returns RecognizeHouseholdResponse
     *
     * @param RecognizeHouseholdRequest $request
     *
     * @return RecognizeHouseholdResponse
     */
    public function recognizeHousehold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHouseholdWithOptions($request, $runtime);
    }

    /**
     * 身份证识别.
     *
     * @param request - RecognizeIdcardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeIdcardResponse
     *
     * @param RecognizeIdcardRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeIdcardResponse
     */
    public function recognizeIdcardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->llmRec) {
            @$query['Llm_rec'] = $request->llmRec;
        }

        if (null !== $request->outputFigure) {
            @$query['OutputFigure'] = $request->outputFigure;
        }

        if (null !== $request->outputQualityInfo) {
            @$query['OutputQualityInfo'] = $request->outputQualityInfo;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeIdcard',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 身份证识别.
     *
     * @param request - RecognizeIdcardRequest
     *
     * @returns RecognizeIdcardResponse
     *
     * @param RecognizeIdcardRequest $request
     *
     * @return RecognizeIdcardResponse
     */
    public function recognizeIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeIdcardWithOptions($request, $runtime);
    }

    /**
     * 国际营业执照识别.
     *
     * @param request - RecognizeInternationalBusinessLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeInternationalBusinessLicenseResponse
     *
     * @param RecognizeInternationalBusinessLicenseRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeInternationalBusinessLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeInternationalBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际营业执照识别.
     *
     * @param request - RecognizeInternationalBusinessLicenseRequest
     *
     * @returns RecognizeInternationalBusinessLicenseResponse
     *
     * @param RecognizeInternationalBusinessLicenseRequest $request
     *
     * @return RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * 国际身份证识别.
     *
     * @param request - RecognizeInternationalIdcardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeInternationalIdcardResponse
     *
     * @param RecognizeInternationalIdcardRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeInternationalIdcard',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeInternationalIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际身份证识别.
     *
     * @param request - RecognizeInternationalIdcardRequest
     *
     * @returns RecognizeInternationalIdcardResponse
     *
     * @param RecognizeInternationalIdcardRequest $request
     *
     * @return RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalIdcardWithOptions($request, $runtime);
    }

    /**
     * 增值税发票识别.
     *
     * @param request - RecognizeInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeInvoiceResponse
     *
     * @param RecognizeInvoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeInvoiceResponse
     */
    public function recognizeInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增值税发票识别.
     *
     * @param request - RecognizeInvoiceRequest
     *
     * @returns RecognizeInvoiceResponse
     *
     * @param RecognizeInvoiceRequest $request
     *
     * @return RecognizeInvoiceResponse
     */
    public function recognizeInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInvoiceWithOptions($request, $runtime);
    }

    /**
     * 日语识别.
     *
     * @param request - RecognizeJanpaneseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeJanpaneseResponse
     *
     * @param RecognizeJanpaneseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeJanpaneseResponse
     */
    public function recognizeJanpaneseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeJanpanese',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeJanpaneseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 日语识别.
     *
     * @param request - RecognizeJanpaneseRequest
     *
     * @returns RecognizeJanpaneseResponse
     *
     * @param RecognizeJanpaneseRequest $request
     *
     * @return RecognizeJanpaneseResponse
     */
    public function recognizeJanpanese($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeJanpaneseWithOptions($request, $runtime);
    }

    /**
     * 韩语识别.
     *
     * @param request - RecognizeKoreanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeKoreanResponse
     *
     * @param RecognizeKoreanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeKoreanResponse
     */
    public function recognizeKoreanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeKorean',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeKoreanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 韩语识别.
     *
     * @param request - RecognizeKoreanRequest
     *
     * @returns RecognizeKoreanResponse
     *
     * @param RecognizeKoreanRequest $request
     *
     * @return RecognizeKoreanResponse
     */
    public function recognizeKorean($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeKoreanWithOptions($request, $runtime);
    }

    /**
     * 拉丁语识别.
     *
     * @param request - RecognizeLatinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeLatinResponse
     *
     * @param RecognizeLatinRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeLatinResponse
     */
    public function recognizeLatinWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeLatin',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeLatinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拉丁语识别.
     *
     * @param request - RecognizeLatinRequest
     *
     * @returns RecognizeLatinResponse
     *
     * @param RecognizeLatinRequest $request
     *
     * @return RecognizeLatinResponse
     */
    public function recognizeLatin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLatinWithOptions($request, $runtime);
    }

    /**
     * 医疗器械经营许可证
     *
     * @param request - RecognizeMedicalDeviceManageLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeMedicalDeviceManageLicenseResponse
     *
     * @param RecognizeMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeMedicalDeviceManageLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 医疗器械经营许可证
     *
     * @param request - RecognizeMedicalDeviceManageLicenseRequest
     *
     * @returns RecognizeMedicalDeviceManageLicenseResponse
     *
     * @param RecognizeMedicalDeviceManageLicenseRequest $request
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * 医疗器械生产许可证
     *
     * @param request - RecognizeMedicalDeviceProduceLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeMedicalDeviceProduceLicenseResponse
     *
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeMedicalDeviceProduceLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeMedicalDeviceProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 医疗器械生产许可证
     *
     * @param request - RecognizeMedicalDeviceProduceLicenseRequest
     *
     * @returns RecognizeMedicalDeviceProduceLicenseResponse
     *
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * 混贴发票识别.
     *
     * @param request - RecognizeMixedInvoicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeMixedInvoicesResponse
     *
     * @param RecognizeMixedInvoicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mergePdfPages) {
            @$query['MergePdfPages'] = $request->mergePdfPages;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeMixedInvoices',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeMixedInvoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 混贴发票识别.
     *
     * @param request - RecognizeMixedInvoicesRequest
     *
     * @returns RecognizeMixedInvoicesResponse
     *
     * @param RecognizeMixedInvoicesRequest $request
     *
     * @return RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMixedInvoicesWithOptions($request, $runtime);
    }

    /**
     * 通用多语言识别.
     *
     * @param tmpReq - RecognizeMultiLanguageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeMultiLanguageResponse
     *
     * @param RecognizeMultiLanguageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeMultiLanguageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->languages) {
            $request->languagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->languages, 'Languages', 'simple');
        }

        $query = [];
        if (null !== $request->languagesShrink) {
            @$query['Languages'] = $request->languagesShrink;
        }

        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->needSortPage) {
            @$query['NeedSortPage'] = $request->needSortPage;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeMultiLanguage',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeMultiLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用多语言识别.
     *
     * @param request - RecognizeMultiLanguageRequest
     *
     * @returns RecognizeMultiLanguageResponse
     *
     * @param RecognizeMultiLanguageRequest $request
     *
     * @return RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMultiLanguageWithOptions($request, $runtime);
    }

    /**
     * 非税收入票据识别.
     *
     * @param request - RecognizeNonTaxInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeNonTaxInvoiceResponse
     *
     * @param RecognizeNonTaxInvoiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeNonTaxInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeNonTaxInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 非税收入票据识别.
     *
     * @param request - RecognizeNonTaxInvoiceRequest
     *
     * @returns RecognizeNonTaxInvoiceResponse
     *
     * @param RecognizeNonTaxInvoiceRequest $request
     *
     * @return RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeNonTaxInvoiceWithOptions($request, $runtime);
    }

    /**
     * 护照识别.
     *
     * @param request - RecognizePassportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizePassportResponse
     *
     * @param RecognizePassportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizePassportResponse
     */
    public function recognizePassportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizePassport',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 护照识别.
     *
     * @param request - RecognizePassportRequest
     *
     * @returns RecognizePassportResponse
     *
     * @param RecognizePassportRequest $request
     *
     * @return RecognizePassportResponse
     */
    public function recognizePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePassportWithOptions($request, $runtime);
    }

    /**
     * 支付详情页识别.
     *
     * @param request - RecognizePaymentRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizePaymentRecordResponse
     *
     * @param RecognizePaymentRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizePaymentRecord',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizePaymentRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 支付详情页识别.
     *
     * @param request - RecognizePaymentRecordRequest
     *
     * @returns RecognizePaymentRecordResponse
     *
     * @param RecognizePaymentRecordRequest $request
     *
     * @return RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePaymentRecordWithOptions($request, $runtime);
    }

    /**
     * 电商订单页识别.
     *
     * @param request - RecognizePurchaseRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizePurchaseRecordResponse
     *
     * @param RecognizePurchaseRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputMultiOrders) {
            @$query['OutputMultiOrders'] = $request->outputMultiOrders;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizePurchaseRecord',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizePurchaseRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 电商订单页识别.
     *
     * @param request - RecognizePurchaseRecordRequest
     *
     * @returns RecognizePurchaseRecordResponse
     *
     * @param RecognizePurchaseRecordRequest $request
     *
     * @return RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePurchaseRecordWithOptions($request, $runtime);
    }

    /**
     * 定额发票.
     *
     * @param request - RecognizeQuotaInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeQuotaInvoiceResponse
     *
     * @param RecognizeQuotaInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeQuotaInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeQuotaInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 定额发票.
     *
     * @param request - RecognizeQuotaInvoiceRequest
     *
     * @returns RecognizeQuotaInvoiceResponse
     *
     * @param RecognizeQuotaInvoiceRequest $request
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeQuotaInvoiceWithOptions($request, $runtime);
    }

    /**
     * 网约车行程单识别.
     *
     * @param request - RecognizeRideHailingItineraryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeRideHailingItineraryResponse
     *
     * @param RecognizeRideHailingItineraryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItineraryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeRideHailingItinerary',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeRideHailingItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网约车行程单识别.
     *
     * @param request - RecognizeRideHailingItineraryRequest
     *
     * @returns RecognizeRideHailingItineraryResponse
     *
     * @param RecognizeRideHailingItineraryRequest $request
     *
     * @return RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRideHailingItineraryWithOptions($request, $runtime);
    }

    /**
     * 增值税发票卷票.
     *
     * @param request - RecognizeRollTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeRollTicketResponse
     *
     * @param RecognizeRollTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeRollTicketResponse
     */
    public function recognizeRollTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeRollTicket',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeRollTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增值税发票卷票.
     *
     * @param request - RecognizeRollTicketRequest
     *
     * @returns RecognizeRollTicketResponse
     *
     * @param RecognizeRollTicketRequest $request
     *
     * @return RecognizeRollTicketResponse
     */
    public function recognizeRollTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRollTicketWithOptions($request, $runtime);
    }

    /**
     * 俄语识别.
     *
     * @param request - RecognizeRussianRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeRussianResponse
     *
     * @param RecognizeRussianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeRussianResponse
     */
    public function recognizeRussianWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeRussian',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeRussianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 俄语识别.
     *
     * @param request - RecognizeRussianRequest
     *
     * @returns RecognizeRussianResponse
     *
     * @param RecognizeRussianRequest $request
     *
     * @return RecognizeRussianResponse
     */
    public function recognizeRussian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRussianWithOptions($request, $runtime);
    }

    /**
     * 购物小票识别.
     *
     * @param request - RecognizeShoppingReceiptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeShoppingReceiptResponse
     *
     * @param RecognizeShoppingReceiptRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceiptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeShoppingReceipt',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeShoppingReceiptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 购物小票识别.
     *
     * @param request - RecognizeShoppingReceiptRequest
     *
     * @returns RecognizeShoppingReceiptResponse
     *
     * @param RecognizeShoppingReceiptRequest $request
     *
     * @return RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeShoppingReceiptWithOptions($request, $runtime);
    }

    /**
     * 社会保障卡识别.
     *
     * @param request - RecognizeSocialSecurityCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeSocialSecurityCardResponse
     *
     * @param RecognizeSocialSecurityCardRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCardWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeSocialSecurityCard',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeSocialSecurityCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 社会保障卡识别.
     *
     * @param request - RecognizeSocialSecurityCardRequest
     *
     * @returns RecognizeSocialSecurityCardResponse
     *
     * @param RecognizeSocialSecurityCardRequest $request
     *
     * @return RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardWithOptions($request, $runtime);
    }

    /**
     * 社保卡识别.
     *
     * @param request - RecognizeSocialSecurityCardVersionIIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeSocialSecurityCardVersionIIResponse
     *
     * @param RecognizeSocialSecurityCardVersionIIRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeSocialSecurityCardVersionII',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeSocialSecurityCardVersionIIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 社保卡识别.
     *
     * @param request - RecognizeSocialSecurityCardVersionIIRequest
     *
     * @returns RecognizeSocialSecurityCardVersionIIResponse
     *
     * @param RecognizeSocialSecurityCardVersionIIRequest $request
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionII($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime);
    }

    /**
     * 表格识别.
     *
     * @param request - RecognizeTableOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTableOcrResponse
     *
     * @param RecognizeTableOcrRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeTableOcrResponse
     */
    public function recognizeTableOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isHandWriting) {
            @$query['IsHandWriting'] = $request->isHandWriting;
        }

        if (null !== $request->lineLess) {
            @$query['LineLess'] = $request->lineLess;
        }

        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->skipDetection) {
            @$query['SkipDetection'] = $request->skipDetection;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTableOcr',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTableOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 表格识别.
     *
     * @param request - RecognizeTableOcrRequest
     *
     * @returns RecognizeTableOcrResponse
     *
     * @param RecognizeTableOcrRequest $request
     *
     * @return RecognizeTableOcrResponse
     */
    public function recognizeTableOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTableOcrWithOptions($request, $runtime);
    }

    /**
     * 税收完税证明识别.
     *
     * @param request - RecognizeTaxClearanceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTaxClearanceCertificateResponse
     *
     * @param RecognizeTaxClearanceCertificateRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTaxClearanceCertificate',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTaxClearanceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 税收完税证明识别.
     *
     * @param request - RecognizeTaxClearanceCertificateRequest
     *
     * @returns RecognizeTaxClearanceCertificateResponse
     *
     * @param RecognizeTaxClearanceCertificateRequest $request
     *
     * @return RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxClearanceCertificateWithOptions($request, $runtime);
    }

    /**
     * 出租车发票.
     *
     * @param request - RecognizeTaxiInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTaxiInvoiceResponse
     *
     * @param RecognizeTaxiInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTaxiInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTaxiInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 出租车发票.
     *
     * @param request - RecognizeTaxiInvoiceRequest
     *
     * @returns RecognizeTaxiInvoiceResponse
     *
     * @param RecognizeTaxiInvoiceRequest $request
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxiInvoiceWithOptions($request, $runtime);
    }

    /**
     * 泰语识别.
     *
     * @param request - RecognizeThaiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeThaiResponse
     *
     * @param RecognizeThaiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeThaiResponse
     */
    public function recognizeThaiWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needRotate) {
            @$query['NeedRotate'] = $request->needRotate;
        }

        if (null !== $request->outputCharInfo) {
            @$query['OutputCharInfo'] = $request->outputCharInfo;
        }

        if (null !== $request->outputTable) {
            @$query['OutputTable'] = $request->outputTable;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeThai',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeThaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 泰语识别.
     *
     * @param request - RecognizeThaiRequest
     *
     * @returns RecognizeThaiResponse
     *
     * @param RecognizeThaiRequest $request
     *
     * @return RecognizeThaiResponse
     */
    public function recognizeThai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeThaiWithOptions($request, $runtime);
    }

    /**
     * 过路过桥费发票识别.
     *
     * @param request - RecognizeTollInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTollInvoiceResponse
     *
     * @param RecognizeTollInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTollInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTollInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 过路过桥费发票识别.
     *
     * @param request - RecognizeTollInvoiceRequest
     *
     * @returns RecognizeTollInvoiceResponse
     *
     * @param RecognizeTollInvoiceRequest $request
     *
     * @return RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTollInvoiceWithOptions($request, $runtime);
    }

    /**
     * 商标注册证
     *
     * @param request - RecognizeTradeMarkCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTradeMarkCertificationResponse
     *
     * @param RecognizeTradeMarkCertificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTradeMarkCertification',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTradeMarkCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 商标注册证
     *
     * @param request - RecognizeTradeMarkCertificationRequest
     *
     * @returns RecognizeTradeMarkCertificationResponse
     *
     * @param RecognizeTradeMarkCertificationRequest $request
     *
     * @return RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTradeMarkCertificationWithOptions($request, $runtime);
    }

    /**
     * 火车票.
     *
     * @param request - RecognizeTrainInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTrainInvoiceResponse
     *
     * @param RecognizeTrainInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeTrainInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTrainInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 火车票.
     *
     * @param request - RecognizeTrainInvoiceRequest
     *
     * @returns RecognizeTrainInvoiceResponse
     *
     * @param RecognizeTrainInvoiceRequest $request
     *
     * @return RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTrainInvoiceWithOptions($request, $runtime);
    }

    /**
     * 二手车统一销售发票识别.
     *
     * @param request - RecognizeUsedCarInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeUsedCarInvoiceResponse
     *
     * @param RecognizeUsedCarInvoiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeUsedCarInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeUsedCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 二手车统一销售发票识别.
     *
     * @param request - RecognizeUsedCarInvoiceRequest
     *
     * @returns RecognizeUsedCarInvoiceResponse
     *
     * @param RecognizeUsedCarInvoiceRequest $request
     *
     * @return RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeUsedCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * 车辆合格证识别.
     *
     * @param request - RecognizeVehicleCertificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVehicleCertificationResponse
     *
     * @param RecognizeVehicleCertificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeVehicleCertification',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVehicleCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 车辆合格证识别.
     *
     * @param request - RecognizeVehicleCertificationRequest
     *
     * @returns RecognizeVehicleCertificationResponse
     *
     * @param RecognizeVehicleCertificationRequest $request
     *
     * @return RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleCertificationWithOptions($request, $runtime);
    }

    /**
     * 行驶证识别.
     *
     * @param request - RecognizeVehicleLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVehicleLicenseResponse
     *
     * @param RecognizeVehicleLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeVehicleLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVehicleLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 行驶证识别.
     *
     * @param request - RecognizeVehicleLicenseRequest
     *
     * @returns RecognizeVehicleLicenseResponse
     *
     * @param RecognizeVehicleLicenseRequest $request
     *
     * @return RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleLicenseWithOptions($request, $runtime);
    }

    /**
     * 机动车注册登记证识别.
     *
     * @param request - RecognizeVehicleRegistrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVehicleRegistrationResponse
     *
     * @param RecognizeVehicleRegistrationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeVehicleRegistration',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVehicleRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 机动车注册登记证识别.
     *
     * @param request - RecognizeVehicleRegistrationRequest
     *
     * @returns RecognizeVehicleRegistrationResponse
     *
     * @param RecognizeVehicleRegistrationRequest $request
     *
     * @return RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleRegistrationWithOptions($request, $runtime);
    }

    /**
     * 电子面单识别.
     *
     * @param request - RecognizeWaybillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeWaybillResponse
     *
     * @param RecognizeWaybillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action' => 'RecognizeWaybill',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 电子面单识别.
     *
     * @param request - RecognizeWaybillRequest
     *
     * @returns RecognizeWaybillResponse
     *
     * @param RecognizeWaybillRequest $request
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeWaybillWithOptions($request, $runtime);
    }

    /**
     * 营业执照核验.
     *
     * @param request - VerifyBusinessLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyBusinessLicenseResponse
     *
     * @param VerifyBusinessLicenseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyName) {
            @$query['CompanyName'] = $request->companyName;
        }

        if (null !== $request->creditCode) {
            @$query['CreditCode'] = $request->creditCode;
        }

        if (null !== $request->legalPerson) {
            @$query['LegalPerson'] = $request->legalPerson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyBusinessLicense',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 营业执照核验.
     *
     * @param request - VerifyBusinessLicenseRequest
     *
     * @returns VerifyBusinessLicenseResponse
     *
     * @param VerifyBusinessLicenseRequest $request
     *
     * @return VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * 增值税发票核验.
     *
     * @param request - VerifyVATInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyVATInvoiceResponse
     *
     * @param VerifyVATInvoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return VerifyVATInvoiceResponse
     */
    public function verifyVATInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->invoiceCode) {
            @$query['InvoiceCode'] = $request->invoiceCode;
        }

        if (null !== $request->invoiceDate) {
            @$query['InvoiceDate'] = $request->invoiceDate;
        }

        if (null !== $request->invoiceKind) {
            @$query['InvoiceKind'] = $request->invoiceKind;
        }

        if (null !== $request->invoiceNo) {
            @$query['InvoiceNo'] = $request->invoiceNo;
        }

        if (null !== $request->invoiceSum) {
            @$query['InvoiceSum'] = $request->invoiceSum;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyVATInvoice',
            'version' => '2021-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyVATInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增值税发票核验.
     *
     * @param request - VerifyVATInvoiceRequest
     *
     * @returns VerifyVATInvoiceResponse
     *
     * @param VerifyVATInvoiceRequest $request
     *
     * @return VerifyVATInvoiceResponse
     */
    public function verifyVATInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVATInvoiceWithOptions($request, $runtime);
    }
}
