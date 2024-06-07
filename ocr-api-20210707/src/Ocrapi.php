<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 全文识别高精版
     *  *
     * @param RecognizeAdvancedRequest $request RecognizeAdvancedRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeAdvancedResponse RecognizeAdvancedResponse
     */
    public function recognizeAdvancedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->noStamp)) {
            $query['NoStamp'] = $request->noStamp;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->paragraph)) {
            $query['Paragraph'] = $request->paragraph;
        }
        if (!Utils::isUnset($request->row)) {
            $query['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAdvanced',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAdvancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 全文识别高精版
     *  *
     * @param RecognizeAdvancedRequest $request RecognizeAdvancedRequest
     *
     * @return RecognizeAdvancedResponse RecognizeAdvancedResponse
     */
    public function recognizeAdvanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAdvancedWithOptions($request, $runtime);
    }

    /**
     * @summary 航空行程单
     *  *
     * @param RecognizeAirItineraryRequest $request RecognizeAirItineraryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeAirItineraryResponse RecognizeAirItineraryResponse
     */
    public function recognizeAirItineraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAirItinerary',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAirItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 航空行程单
     *  *
     * @param RecognizeAirItineraryRequest $request RecognizeAirItineraryRequest
     *
     * @return RecognizeAirItineraryResponse RecognizeAirItineraryResponse
     */
    public function recognizeAirItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAirItineraryWithOptions($request, $runtime);
    }

    /**
     * @summary 统一Api
     *  *
     * @param RecognizeAllTextRequest $tmpReq  RecognizeAllTextRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeAllTextResponse RecognizeAllTextResponse
     */
    public function recognizeAllTextWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecognizeAllTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->advancedConfig)) {
            $request->advancedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->advancedConfig, 'AdvancedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->idCardConfig)) {
            $request->idCardConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->idCardConfig, 'IdCardConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->internationalBusinessLicenseConfig)) {
            $request->internationalBusinessLicenseConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->internationalBusinessLicenseConfig, 'InternationalBusinessLicenseConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->internationalIdCardConfig)) {
            $request->internationalIdCardConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->internationalIdCardConfig, 'InternationalIdCardConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->multiLanConfig)) {
            $request->multiLanConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->multiLanConfig, 'MultiLanConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->tableConfig)) {
            $request->tableConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tableConfig, 'TableConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->advancedConfigShrink)) {
            $query['AdvancedConfig'] = $request->advancedConfigShrink;
        }
        if (!Utils::isUnset($request->idCardConfigShrink)) {
            $query['IdCardConfig'] = $request->idCardConfigShrink;
        }
        if (!Utils::isUnset($request->internationalBusinessLicenseConfigShrink)) {
            $query['InternationalBusinessLicenseConfig'] = $request->internationalBusinessLicenseConfigShrink;
        }
        if (!Utils::isUnset($request->internationalIdCardConfigShrink)) {
            $query['InternationalIdCardConfig'] = $request->internationalIdCardConfigShrink;
        }
        if (!Utils::isUnset($request->multiLanConfigShrink)) {
            $query['MultiLanConfig'] = $request->multiLanConfigShrink;
        }
        if (!Utils::isUnset($request->outputBarCode)) {
            $query['OutputBarCode'] = $request->outputBarCode;
        }
        if (!Utils::isUnset($request->outputCoordinate)) {
            $query['OutputCoordinate'] = $request->outputCoordinate;
        }
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputKVExcel)) {
            $query['OutputKVExcel'] = $request->outputKVExcel;
        }
        if (!Utils::isUnset($request->outputOricoord)) {
            $query['OutputOricoord'] = $request->outputOricoord;
        }
        if (!Utils::isUnset($request->outputQrcode)) {
            $query['OutputQrcode'] = $request->outputQrcode;
        }
        if (!Utils::isUnset($request->outputStamp)) {
            $query['OutputStamp'] = $request->outputStamp;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->tableConfigShrink)) {
            $query['TableConfig'] = $request->tableConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeAllText',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeAllTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 统一Api
     *  *
     * @param RecognizeAllTextRequest $request RecognizeAllTextRequest
     *
     * @return RecognizeAllTextResponse RecognizeAllTextResponse
     */
    public function recognizeAllText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeAllTextWithOptions($request, $runtime);
    }

    /**
     * @summary 银承汇票识别
     *  *
     * @param RecognizeBankAcceptanceRequest $request RecognizeBankAcceptanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBankAcceptanceResponse RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankAcceptance',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankAcceptanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 银承汇票识别
     *  *
     * @param RecognizeBankAcceptanceRequest $request RecognizeBankAcceptanceRequest
     *
     * @return RecognizeBankAcceptanceResponse RecognizeBankAcceptanceResponse
     */
    public function recognizeBankAcceptance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAcceptanceWithOptions($request, $runtime);
    }

    /**
     * @summary 银行开户许可证识别
     *  *
     * @param RecognizeBankAccountLicenseRequest $request RecognizeBankAccountLicenseRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBankAccountLicenseResponse RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankAccountLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankAccountLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 银行开户许可证识别
     *  *
     * @param RecognizeBankAccountLicenseRequest $request RecognizeBankAccountLicenseRequest
     *
     * @return RecognizeBankAccountLicenseResponse RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankAccountLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 银行卡识别
     *  *
     * @param RecognizeBankCardRequest $request RecognizeBankCardRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBankCardResponse RecognizeBankCardResponse
     */
    public function recognizeBankCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBankCard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 银行卡识别
     *  *
     * @param RecognizeBankCardRequest $request RecognizeBankCardRequest
     *
     * @return RecognizeBankCardResponse RecognizeBankCardResponse
     */
    public function recognizeBankCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankCardWithOptions($request, $runtime);
    }

    /**
     * @summary 电商图片文字识别
     *  *
     * @param RecognizeBasicRequest $request RecognizeBasicRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBasicResponse RecognizeBasicResponse
     */
    public function recognizeBasicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBasic',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 电商图片文字识别
     *  *
     * @param RecognizeBasicRequest $request RecognizeBasicRequest
     *
     * @return RecognizeBasicResponse RecognizeBasicResponse
     */
    public function recognizeBasic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBasicWithOptions($request, $runtime);
    }

    /**
     * @summary 出生证明
     *  *
     * @param RecognizeBirthCertificationRequest $request RecognizeBirthCertificationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBirthCertificationResponse RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBirthCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBirthCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 出生证明
     *  *
     * @param RecognizeBirthCertificationRequest $request RecognizeBirthCertificationRequest
     *
     * @return RecognizeBirthCertificationResponse RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBirthCertificationWithOptions($request, $runtime);
    }

    /**
     * @summary 客运车船票识别
     *  *
     * @param RecognizeBusShipTicketRequest $request RecognizeBusShipTicketRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBusShipTicketResponse RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBusShipTicket',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBusShipTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 客运车船票识别
     *  *
     * @param RecognizeBusShipTicketRequest $request RecognizeBusShipTicketRequest
     *
     * @return RecognizeBusShipTicketResponse RecognizeBusShipTicketResponse
     */
    public function recognizeBusShipTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusShipTicketWithOptions($request, $runtime);
    }

    /**
     * @summary 营业执照识别
     *  *
     * @param RecognizeBusinessLicenseRequest $request RecognizeBusinessLicenseRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeBusinessLicenseResponse RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 营业执照识别
     *  *
     * @param RecognizeBusinessLicenseRequest $request RecognizeBusinessLicenseRequest
     *
     * @return RecognizeBusinessLicenseResponse RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 机动车销售发票
     *  *
     * @param RecognizeCarInvoiceRequest $request RecognizeCarInvoiceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCarInvoiceResponse RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机动车销售发票
     *  *
     * @param RecognizeCarInvoiceRequest $request RecognizeCarInvoiceRequest
     *
     * @return RecognizeCarInvoiceResponse RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 车牌识别
     *  *
     * @param RecognizeCarNumberRequest $request RecognizeCarNumberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCarNumberResponse RecognizeCarNumberResponse
     */
    public function recognizeCarNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarNumber',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 车牌识别
     *  *
     * @param RecognizeCarNumberRequest $request RecognizeCarNumberRequest
     *
     * @return RecognizeCarNumberResponse RecognizeCarNumberResponse
     */
    public function recognizeCarNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarNumberWithOptions($request, $runtime);
    }

    /**
     * @summary 车辆vin码识别
     *  *
     * @param RecognizeCarVinCodeRequest $request RecognizeCarVinCodeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCarVinCodeResponse RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCarVinCode',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarVinCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 车辆vin码识别
     *  *
     * @param RecognizeCarVinCodeRequest $request RecognizeCarVinCodeRequest
     *
     * @return RecognizeCarVinCodeResponse RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCarVinCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 中国护照识别
     *  *
     * @param RecognizeChinesePassportRequest $request RecognizeChinesePassportRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeChinesePassportResponse RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeChinesePassport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeChinesePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 中国护照识别
     *  *
     * @param RecognizeChinesePassportRequest $request RecognizeChinesePassportRequest
     *
     * @return RecognizeChinesePassportResponse RecognizeChinesePassportResponse
     */
    public function recognizeChinesePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeChinesePassportWithOptions($request, $runtime);
    }

    /**
     * @summary 通用机打发票识别
     *  *
     * @param RecognizeCommonPrintedInvoiceRequest $request RecognizeCommonPrintedInvoiceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCommonPrintedInvoiceResponse RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCommonPrintedInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCommonPrintedInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用机打发票识别
     *  *
     * @param RecognizeCommonPrintedInvoiceRequest $request RecognizeCommonPrintedInvoiceRequest
     *
     * @return RecognizeCommonPrintedInvoiceResponse RecognizeCommonPrintedInvoiceResponse
     */
    public function recognizeCommonPrintedInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCommonPrintedInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 化妆品生产许可证识别
     *  *
     * @param RecognizeCosmeticProduceLicenseRequest $request RecognizeCosmeticProduceLicenseRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCosmeticProduceLicenseResponse RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCosmeticProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCosmeticProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 化妆品生产许可证识别
     *  *
     * @param RecognizeCosmeticProduceLicenseRequest $request RecognizeCosmeticProduceLicenseRequest
     *
     * @return RecognizeCosmeticProduceLicenseResponse RecognizeCosmeticProduceLicenseResponse
     */
    public function recognizeCosmeticProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCosmeticProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 核算检测报告识别
     *  *
     * @param RecognizeCovidTestReportRequest $request RecognizeCovidTestReportRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCovidTestReportResponse RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->multipleResult)) {
            $query['MultipleResult'] = $request->multipleResult;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCovidTestReport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCovidTestReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 核算检测报告识别
     *  *
     * @param RecognizeCovidTestReportRequest $request RecognizeCovidTestReportRequest
     *
     * @return RecognizeCovidTestReportResponse RecognizeCovidTestReportResponse
     */
    public function recognizeCovidTestReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCovidTestReportWithOptions($request, $runtime);
    }

    /**
     * @summary 第二类医疗器械经营备案凭证
     *  *
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request RecognizeCtwoMedicalDeviceManageLicenseRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeCtwoMedicalDeviceManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeCtwoMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 第二类医疗器械经营备案凭证
     *  *
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request RecognizeCtwoMedicalDeviceManageLicenseRequest
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 文档结构化识别
     *  *
     * @param RecognizeDocumentStructureRequest $request RecognizeDocumentStructureRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeDocumentStructureResponse RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->noStamp)) {
            $query['NoStamp'] = $request->noStamp;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->paragraph)) {
            $query['Paragraph'] = $request->paragraph;
        }
        if (!Utils::isUnset($request->row)) {
            $query['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->useNewStyleOutput)) {
            $query['UseNewStyleOutput'] = $request->useNewStyleOutput;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeDocumentStructure',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeDocumentStructureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文档结构化识别
     *  *
     * @param RecognizeDocumentStructureRequest $request RecognizeDocumentStructureRequest
     *
     * @return RecognizeDocumentStructureResponse RecognizeDocumentStructureResponse
     */
    public function recognizeDocumentStructure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDocumentStructureWithOptions($request, $runtime);
    }

    /**
     * @summary 驾驶证识别
     *  *
     * @param RecognizeDrivingLicenseRequest $request RecognizeDrivingLicenseRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeDrivingLicenseResponse RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeDrivingLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeDrivingLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 驾驶证识别
     *  *
     * @param RecognizeDrivingLicenseRequest $request RecognizeDrivingLicenseRequest
     *
     * @return RecognizeDrivingLicenseResponse RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDrivingLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 印刷体数学公式识别
     *  *
     * @param RecognizeEduFormulaRequest $request RecognizeEduFormulaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduFormulaResponse RecognizeEduFormulaResponse
     */
    public function recognizeEduFormulaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduFormula',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduFormulaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 印刷体数学公式识别
     *  *
     * @param RecognizeEduFormulaRequest $request RecognizeEduFormulaRequest
     *
     * @return RecognizeEduFormulaResponse RecognizeEduFormulaResponse
     */
    public function recognizeEduFormula($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduFormulaWithOptions($request, $runtime);
    }

    /**
     * @summary 口算判题
     *  *
     * @param RecognizeEduOralCalculationRequest $request RecognizeEduOralCalculationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduOralCalculationResponse RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduOralCalculation',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduOralCalculationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 口算判题
     *  *
     * @param RecognizeEduOralCalculationRequest $request RecognizeEduOralCalculationRequest
     *
     * @return RecognizeEduOralCalculationResponse RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduOralCalculationWithOptions($request, $runtime);
    }

    /**
     * @summary 试卷切题识别
     *  *
     * @param RecognizeEduPaperCutRequest $request RecognizeEduPaperCutRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduPaperCutResponse RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cutType)) {
            $query['CutType'] = $request->cutType;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperCut',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperCutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 试卷切题识别
     *  *
     * @param RecognizeEduPaperCutRequest $request RecognizeEduPaperCutRequest
     *
     * @return RecognizeEduPaperCutResponse RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCut($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperCutWithOptions($request, $runtime);
    }

    /**
     * @summary 整页试卷识别
     *  *
     * @param RecognizeEduPaperOcrRequest $request RecognizeEduPaperOcrRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduPaperOcrResponse RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->outputOricoord)) {
            $query['OutputOricoord'] = $request->outputOricoord;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 整页试卷识别
     *  *
     * @param RecognizeEduPaperOcrRequest $request RecognizeEduPaperOcrRequest
     *
     * @return RecognizeEduPaperOcrResponse RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperOcrWithOptions($request, $runtime);
    }

    /**
     * @summary 精细版结构化切题
     *  *
     * @param RecognizeEduPaperStructedRequest $request RecognizeEduPaperStructedRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduPaperStructedResponse RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduPaperStructed',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperStructedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 精细版结构化切题
     *  *
     * @param RecognizeEduPaperStructedRequest $request RecognizeEduPaperStructedRequest
     *
     * @return RecognizeEduPaperStructedResponse RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructed($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduPaperStructedWithOptions($request, $runtime);
    }

    /**
     * @summary 题目识别
     *  *
     * @param RecognizeEduQuestionOcrRequest $request RecognizeEduQuestionOcrRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEduQuestionOcrResponse RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEduQuestionOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduQuestionOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 题目识别
     *  *
     * @param RecognizeEduQuestionOcrRequest $request RecognizeEduQuestionOcrRequest
     *
     * @return RecognizeEduQuestionOcrResponse RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEduQuestionOcrWithOptions($request, $runtime);
    }

    /**
     * @summary 英语专项识别
     *  *
     * @param RecognizeEnglishRequest $request RecognizeEnglishRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEnglishResponse RecognizeEnglishResponse
     */
    public function recognizeEnglishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEnglish',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEnglishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 英语专项识别
     *  *
     * @param RecognizeEnglishRequest $request RecognizeEnglishRequest
     *
     * @return RecognizeEnglishResponse RecognizeEnglishResponse
     */
    public function recognizeEnglish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEnglishWithOptions($request, $runtime);
    }

    /**
     * @summary 不动产权证
     *  *
     * @param RecognizeEstateCertificationRequest $request RecognizeEstateCertificationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeEstateCertificationResponse RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeEstateCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeEstateCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 不动产权证
     *  *
     * @param RecognizeEstateCertificationRequest $request RecognizeEstateCertificationRequest
     *
     * @return RecognizeEstateCertificationResponse RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeEstateCertificationWithOptions($request, $runtime);
    }

    /**
     * @summary 来往港澳台通行证识别
     *  *
     * @param RecognizeExitEntryPermitToHKRequest $request RecognizeExitEntryPermitToHKRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeExitEntryPermitToHKResponse RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeExitEntryPermitToHK',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeExitEntryPermitToHKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 来往港澳台通行证识别
     *  *
     * @param RecognizeExitEntryPermitToHKRequest $request RecognizeExitEntryPermitToHKRequest
     *
     * @return RecognizeExitEntryPermitToHKResponse RecognizeExitEntryPermitToHKResponse
     */
    public function recognizeExitEntryPermitToHK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToHKWithOptions($request, $runtime);
    }

    /**
     * @summary 来往大陆(内地)通行证识别
     *  *
     * @param RecognizeExitEntryPermitToMainlandRequest $request RecognizeExitEntryPermitToMainlandRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeExitEntryPermitToMainlandResponse RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainlandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeExitEntryPermitToMainland',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeExitEntryPermitToMainlandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 来往大陆(内地)通行证识别
     *  *
     * @param RecognizeExitEntryPermitToMainlandRequest $request RecognizeExitEntryPermitToMainlandRequest
     *
     * @return RecognizeExitEntryPermitToMainlandResponse RecognizeExitEntryPermitToMainlandResponse
     */
    public function recognizeExitEntryPermitToMainland($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExitEntryPermitToMainlandWithOptions($request, $runtime);
    }

    /**
     * @summary 食品经营许可证
     *  *
     * @param RecognizeFoodManageLicenseRequest $request RecognizeFoodManageLicenseRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeFoodManageLicenseResponse RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeFoodManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 食品经营许可证
     *  *
     * @param RecognizeFoodManageLicenseRequest $request RecognizeFoodManageLicenseRequest
     *
     * @return RecognizeFoodManageLicenseResponse RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 食品生产许可证
     *  *
     * @param RecognizeFoodProduceLicenseRequest $request RecognizeFoodProduceLicenseRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeFoodProduceLicenseResponse RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeFoodProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 食品生产许可证
     *  *
     * @param RecognizeFoodProduceLicenseRequest $request RecognizeFoodProduceLicenseRequest
     *
     * @return RecognizeFoodProduceLicenseResponse RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 通用文字识别
     *  *
     * @param RecognizeGeneralRequest $request RecognizeGeneralRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeGeneralResponse RecognizeGeneralResponse
     */
    public function recognizeGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeGeneral',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用文字识别
     *  *
     * @param RecognizeGeneralRequest $request RecognizeGeneralRequest
     *
     * @return RecognizeGeneralResponse RecognizeGeneralResponse
     */
    public function recognizeGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeGeneralWithOptions($request, $runtime);
    }

    /**
     * @summary 香港身份证识别
     *  *
     * @param RecognizeHKIdcardRequest $request RecognizeHKIdcardRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeHKIdcardResponse RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHKIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHKIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 香港身份证识别
     *  *
     * @param RecognizeHKIdcardRequest $request RecognizeHKIdcardRequest
     *
     * @return RecognizeHKIdcardResponse RecognizeHKIdcardResponse
     */
    public function recognizeHKIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHKIdcardWithOptions($request, $runtime);
    }

    /**
     * @summary 通用手写体识别
     *  *
     * @param RecognizeHandwritingRequest $request RecognizeHandwritingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeHandwritingResponse RecognizeHandwritingResponse
     */
    public function recognizeHandwritingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->paragraph)) {
            $query['Paragraph'] = $request->paragraph;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHandwriting',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHandwritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用手写体识别
     *  *
     * @param RecognizeHandwritingRequest $request RecognizeHandwritingRequest
     *
     * @return RecognizeHandwritingResponse RecognizeHandwritingResponse
     */
    public function recognizeHandwriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHandwritingWithOptions($request, $runtime);
    }

    /**
     * @summary 防疫健康码识别
     *  *
     * @param RecognizeHealthCodeRequest $request RecognizeHealthCodeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeHealthCodeResponse RecognizeHealthCodeResponse
     */
    public function recognizeHealthCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHealthCode',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHealthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 防疫健康码识别
     *  *
     * @param RecognizeHealthCodeRequest $request RecognizeHealthCodeRequest
     *
     * @return RecognizeHealthCodeResponse RecognizeHealthCodeResponse
     */
    public function recognizeHealthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHealthCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 酒店流水识别
     *  *
     * @param RecognizeHotelConsumeRequest $request RecognizeHotelConsumeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeHotelConsumeResponse RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHotelConsume',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHotelConsumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 酒店流水识别
     *  *
     * @param RecognizeHotelConsumeRequest $request RecognizeHotelConsumeRequest
     *
     * @return RecognizeHotelConsumeResponse RecognizeHotelConsumeResponse
     */
    public function recognizeHotelConsume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHotelConsumeWithOptions($request, $runtime);
    }

    /**
     * @summary 户口本识别
     *  *
     * @param RecognizeHouseholdRequest $request RecognizeHouseholdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeHouseholdResponse RecognizeHouseholdResponse
     */
    public function recognizeHouseholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isResidentPage)) {
            $query['IsResidentPage'] = $request->isResidentPage;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeHousehold',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHouseholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 户口本识别
     *  *
     * @param RecognizeHouseholdRequest $request RecognizeHouseholdRequest
     *
     * @return RecognizeHouseholdResponse RecognizeHouseholdResponse
     */
    public function recognizeHousehold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHouseholdWithOptions($request, $runtime);
    }

    /**
     * @summary 身份证识别
     *  *
     * @param RecognizeIdcardRequest $request RecognizeIdcardRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeIdcardResponse RecognizeIdcardResponse
     */
    public function recognizeIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFigure)) {
            $query['OutputFigure'] = $request->outputFigure;
        }
        if (!Utils::isUnset($request->outputQualityInfo)) {
            $query['OutputQualityInfo'] = $request->outputQualityInfo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 身份证识别
     *  *
     * @param RecognizeIdcardRequest $request RecognizeIdcardRequest
     *
     * @return RecognizeIdcardResponse RecognizeIdcardResponse
     */
    public function recognizeIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeIdcardWithOptions($request, $runtime);
    }

    /**
     * @summary 国际营业执照识别
     *  *
     * @param RecognizeInternationalBusinessLicenseRequest $request RecognizeInternationalBusinessLicenseRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeInternationalBusinessLicenseResponse RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInternationalBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInternationalBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际营业执照识别
     *  *
     * @param RecognizeInternationalBusinessLicenseRequest $request RecognizeInternationalBusinessLicenseRequest
     *
     * @return RecognizeInternationalBusinessLicenseResponse RecognizeInternationalBusinessLicenseResponse
     */
    public function recognizeInternationalBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 国际身份证识别
     *  *
     * @param RecognizeInternationalIdcardRequest $request RecognizeInternationalIdcardRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeInternationalIdcardResponse RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInternationalIdcard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInternationalIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际身份证识别
     *  *
     * @param RecognizeInternationalIdcardRequest $request RecognizeInternationalIdcardRequest
     *
     * @return RecognizeInternationalIdcardResponse RecognizeInternationalIdcardResponse
     */
    public function recognizeInternationalIdcard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInternationalIdcardWithOptions($request, $runtime);
    }

    /**
     * @summary 增值税发票识别
     *  *
     * @param RecognizeInvoiceRequest $request RecognizeInvoiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeInvoiceResponse RecognizeInvoiceResponse
     */
    public function recognizeInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增值税发票识别
     *  *
     * @param RecognizeInvoiceRequest $request RecognizeInvoiceRequest
     *
     * @return RecognizeInvoiceResponse RecognizeInvoiceResponse
     */
    public function recognizeInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 日语识别
     *  *
     * @param RecognizeJanpaneseRequest $request RecognizeJanpaneseRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeJanpaneseResponse RecognizeJanpaneseResponse
     */
    public function recognizeJanpaneseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeJanpanese',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeJanpaneseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 日语识别
     *  *
     * @param RecognizeJanpaneseRequest $request RecognizeJanpaneseRequest
     *
     * @return RecognizeJanpaneseResponse RecognizeJanpaneseResponse
     */
    public function recognizeJanpanese($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeJanpaneseWithOptions($request, $runtime);
    }

    /**
     * @summary 韩语识别
     *  *
     * @param RecognizeKoreanRequest $request RecognizeKoreanRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeKoreanResponse RecognizeKoreanResponse
     */
    public function recognizeKoreanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeKorean',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeKoreanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 韩语识别
     *  *
     * @param RecognizeKoreanRequest $request RecognizeKoreanRequest
     *
     * @return RecognizeKoreanResponse RecognizeKoreanResponse
     */
    public function recognizeKorean($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeKoreanWithOptions($request, $runtime);
    }

    /**
     * @summary 拉丁语识别
     *  *
     * @param RecognizeLatinRequest $request RecognizeLatinRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeLatinResponse RecognizeLatinResponse
     */
    public function recognizeLatinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeLatin',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeLatinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拉丁语识别
     *  *
     * @param RecognizeLatinRequest $request RecognizeLatinRequest
     *
     * @return RecognizeLatinResponse RecognizeLatinResponse
     */
    public function recognizeLatin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLatinWithOptions($request, $runtime);
    }

    /**
     * @summary 医疗器械经营许可证
     *  *
     * @param RecognizeMedicalDeviceManageLicenseRequest $request RecognizeMedicalDeviceManageLicenseRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMedicalDeviceManageLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 医疗器械经营许可证
     *  *
     * @param RecognizeMedicalDeviceManageLicenseRequest $request RecognizeMedicalDeviceManageLicenseRequest
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 医疗器械生产许可证
     *  *
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request RecognizeMedicalDeviceProduceLicenseRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMedicalDeviceProduceLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 医疗器械生产许可证
     *  *
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request RecognizeMedicalDeviceProduceLicenseRequest
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 混贴发票识别
     *  *
     * @param RecognizeMixedInvoicesRequest $request RecognizeMixedInvoicesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeMixedInvoicesResponse RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mergePdfPages)) {
            $query['MergePdfPages'] = $request->mergePdfPages;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMixedInvoices',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMixedInvoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 混贴发票识别
     *  *
     * @param RecognizeMixedInvoicesRequest $request RecognizeMixedInvoicesRequest
     *
     * @return RecognizeMixedInvoicesResponse RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMixedInvoicesWithOptions($request, $runtime);
    }

    /**
     * @summary 通用多语言识别
     *  *
     * @param RecognizeMultiLanguageRequest $tmpReq  RecognizeMultiLanguageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeMultiLanguageResponse RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecognizeMultiLanguageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->languages)) {
            $request->languagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->languages, 'Languages', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->languagesShrink)) {
            $query['Languages'] = $request->languagesShrink;
        }
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->needSortPage)) {
            $query['NeedSortPage'] = $request->needSortPage;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $tmpReq->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMultiLanguage',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeMultiLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通用多语言识别
     *  *
     * @param RecognizeMultiLanguageRequest $request RecognizeMultiLanguageRequest
     *
     * @return RecognizeMultiLanguageResponse RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeMultiLanguageWithOptions($request, $runtime);
    }

    /**
     * @summary 非税收入票据识别
     *  *
     * @param RecognizeNonTaxInvoiceRequest $request RecognizeNonTaxInvoiceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeNonTaxInvoiceResponse RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeNonTaxInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeNonTaxInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 非税收入票据识别
     *  *
     * @param RecognizeNonTaxInvoiceRequest $request RecognizeNonTaxInvoiceRequest
     *
     * @return RecognizeNonTaxInvoiceResponse RecognizeNonTaxInvoiceResponse
     */
    public function recognizeNonTaxInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeNonTaxInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 护照识别
     *  *
     * @param RecognizePassportRequest $request RecognizePassportRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizePassportResponse RecognizePassportResponse
     */
    public function recognizePassportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePassport',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 护照识别
     *  *
     * @param RecognizePassportRequest $request RecognizePassportRequest
     *
     * @return RecognizePassportResponse RecognizePassportResponse
     */
    public function recognizePassport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePassportWithOptions($request, $runtime);
    }

    /**
     * @summary 支付详情页识别
     *  *
     * @param RecognizePaymentRecordRequest $request RecognizePaymentRecordRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizePaymentRecordResponse RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePaymentRecord',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePaymentRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 支付详情页识别
     *  *
     * @param RecognizePaymentRecordRequest $request RecognizePaymentRecordRequest
     *
     * @return RecognizePaymentRecordResponse RecognizePaymentRecordResponse
     */
    public function recognizePaymentRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePaymentRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 电商订单页识别
     *  *
     * @param RecognizePurchaseRecordRequest $request RecognizePurchaseRecordRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizePurchaseRecordResponse RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputMultiOrders)) {
            $query['OutputMultiOrders'] = $request->outputMultiOrders;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizePurchaseRecord',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePurchaseRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 电商订单页识别
     *  *
     * @param RecognizePurchaseRecordRequest $request RecognizePurchaseRecordRequest
     *
     * @return RecognizePurchaseRecordResponse RecognizePurchaseRecordResponse
     */
    public function recognizePurchaseRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePurchaseRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 定额发票
     *  *
     * @param RecognizeQuotaInvoiceRequest $request RecognizeQuotaInvoiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeQuotaInvoiceResponse RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeQuotaInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeQuotaInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 定额发票
     *  *
     * @param RecognizeQuotaInvoiceRequest $request RecognizeQuotaInvoiceRequest
     *
     * @return RecognizeQuotaInvoiceResponse RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeQuotaInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 网约车行程单识别
     *  *
     * @param RecognizeRideHailingItineraryRequest $request RecognizeRideHailingItineraryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeRideHailingItineraryResponse RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItineraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRideHailingItinerary',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRideHailingItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 网约车行程单识别
     *  *
     * @param RecognizeRideHailingItineraryRequest $request RecognizeRideHailingItineraryRequest
     *
     * @return RecognizeRideHailingItineraryResponse RecognizeRideHailingItineraryResponse
     */
    public function recognizeRideHailingItinerary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRideHailingItineraryWithOptions($request, $runtime);
    }

    /**
     * @summary 增值税发票卷票
     *  *
     * @param RecognizeRollTicketRequest $request RecognizeRollTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeRollTicketResponse RecognizeRollTicketResponse
     */
    public function recognizeRollTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRollTicket',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRollTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增值税发票卷票
     *  *
     * @param RecognizeRollTicketRequest $request RecognizeRollTicketRequest
     *
     * @return RecognizeRollTicketResponse RecognizeRollTicketResponse
     */
    public function recognizeRollTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRollTicketWithOptions($request, $runtime);
    }

    /**
     * @summary 俄语识别
     *  *
     * @param RecognizeRussianRequest $request RecognizeRussianRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeRussianResponse RecognizeRussianResponse
     */
    public function recognizeRussianWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeRussian',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeRussianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 俄语识别
     *  *
     * @param RecognizeRussianRequest $request RecognizeRussianRequest
     *
     * @return RecognizeRussianResponse RecognizeRussianResponse
     */
    public function recognizeRussian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeRussianWithOptions($request, $runtime);
    }

    /**
     * @summary 购物小票识别
     *  *
     * @param RecognizeShoppingReceiptRequest $request RecognizeShoppingReceiptRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeShoppingReceiptResponse RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceiptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeShoppingReceipt',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeShoppingReceiptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 购物小票识别
     *  *
     * @param RecognizeShoppingReceiptRequest $request RecognizeShoppingReceiptRequest
     *
     * @return RecognizeShoppingReceiptResponse RecognizeShoppingReceiptResponse
     */
    public function recognizeShoppingReceipt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeShoppingReceiptWithOptions($request, $runtime);
    }

    /**
     * @summary 社会保障卡识别
     *  *
     * @param RecognizeSocialSecurityCardRequest $request RecognizeSocialSecurityCardRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeSocialSecurityCardResponse RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeSocialSecurityCard',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeSocialSecurityCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社会保障卡识别
     *  *
     * @param RecognizeSocialSecurityCardRequest $request RecognizeSocialSecurityCardRequest
     *
     * @return RecognizeSocialSecurityCardResponse RecognizeSocialSecurityCardResponse
     */
    public function recognizeSocialSecurityCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardWithOptions($request, $runtime);
    }

    /**
     * @summary 社保卡识别
     *  *
     * @param RecognizeSocialSecurityCardVersionIIRequest $request RecognizeSocialSecurityCardVersionIIRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeSocialSecurityCardVersionII',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeSocialSecurityCardVersionIIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 社保卡识别
     *  *
     * @param RecognizeSocialSecurityCardVersionIIRequest $request RecognizeSocialSecurityCardVersionIIRequest
     *
     * @return RecognizeSocialSecurityCardVersionIIResponse RecognizeSocialSecurityCardVersionIIResponse
     */
    public function recognizeSocialSecurityCardVersionII($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSocialSecurityCardVersionIIWithOptions($request, $runtime);
    }

    /**
     * @summary 表格识别
     *  *
     * @param RecognizeTableOcrRequest $request RecognizeTableOcrRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTableOcrResponse RecognizeTableOcrResponse
     */
    public function recognizeTableOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isHandWriting)) {
            $query['IsHandWriting'] = $request->isHandWriting;
        }
        if (!Utils::isUnset($request->lineLess)) {
            $query['LineLess'] = $request->lineLess;
        }
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->skipDetection)) {
            $query['SkipDetection'] = $request->skipDetection;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTableOcr',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTableOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 表格识别
     *  *
     * @param RecognizeTableOcrRequest $request RecognizeTableOcrRequest
     *
     * @return RecognizeTableOcrResponse RecognizeTableOcrResponse
     */
    public function recognizeTableOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTableOcrWithOptions($request, $runtime);
    }

    /**
     * @summary 税收完税证明识别
     *  *
     * @param RecognizeTaxClearanceCertificateRequest $request RecognizeTaxClearanceCertificateRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTaxClearanceCertificateResponse RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTaxClearanceCertificate',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTaxClearanceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 税收完税证明识别
     *  *
     * @param RecognizeTaxClearanceCertificateRequest $request RecognizeTaxClearanceCertificateRequest
     *
     * @return RecognizeTaxClearanceCertificateResponse RecognizeTaxClearanceCertificateResponse
     */
    public function recognizeTaxClearanceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxClearanceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 出租车发票
     *  *
     * @param RecognizeTaxiInvoiceRequest $request RecognizeTaxiInvoiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTaxiInvoiceResponse RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTaxiInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTaxiInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 出租车发票
     *  *
     * @param RecognizeTaxiInvoiceRequest $request RecognizeTaxiInvoiceRequest
     *
     * @return RecognizeTaxiInvoiceResponse RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxiInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 泰语识别
     *  *
     * @param RecognizeThaiRequest $request RecognizeThaiRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeThaiResponse RecognizeThaiResponse
     */
    public function recognizeThaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needRotate)) {
            $query['NeedRotate'] = $request->needRotate;
        }
        if (!Utils::isUnset($request->outputCharInfo)) {
            $query['OutputCharInfo'] = $request->outputCharInfo;
        }
        if (!Utils::isUnset($request->outputTable)) {
            $query['OutputTable'] = $request->outputTable;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeThai',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeThaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 泰语识别
     *  *
     * @param RecognizeThaiRequest $request RecognizeThaiRequest
     *
     * @return RecognizeThaiResponse RecognizeThaiResponse
     */
    public function recognizeThai($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeThaiWithOptions($request, $runtime);
    }

    /**
     * @summary 过路过桥费发票识别
     *  *
     * @param RecognizeTollInvoiceRequest $request RecognizeTollInvoiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTollInvoiceResponse RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTollInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTollInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 过路过桥费发票识别
     *  *
     * @param RecognizeTollInvoiceRequest $request RecognizeTollInvoiceRequest
     *
     * @return RecognizeTollInvoiceResponse RecognizeTollInvoiceResponse
     */
    public function recognizeTollInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTollInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 商标注册证
     *  *
     * @param RecognizeTradeMarkCertificationRequest $request RecognizeTradeMarkCertificationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTradeMarkCertificationResponse RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTradeMarkCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTradeMarkCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 商标注册证
     *  *
     * @param RecognizeTradeMarkCertificationRequest $request RecognizeTradeMarkCertificationRequest
     *
     * @return RecognizeTradeMarkCertificationResponse RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTradeMarkCertificationWithOptions($request, $runtime);
    }

    /**
     * @summary 火车票
     *  *
     * @param RecognizeTrainInvoiceRequest $request RecognizeTrainInvoiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeTrainInvoiceResponse RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeTrainInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeTrainInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 火车票
     *  *
     * @param RecognizeTrainInvoiceRequest $request RecognizeTrainInvoiceRequest
     *
     * @return RecognizeTrainInvoiceResponse RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTrainInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 二手车统一销售发票识别
     *  *
     * @param RecognizeUsedCarInvoiceRequest $request RecognizeUsedCarInvoiceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeUsedCarInvoiceResponse RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeUsedCarInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeUsedCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 二手车统一销售发票识别
     *  *
     * @param RecognizeUsedCarInvoiceRequest $request RecognizeUsedCarInvoiceRequest
     *
     * @return RecognizeUsedCarInvoiceResponse RecognizeUsedCarInvoiceResponse
     */
    public function recognizeUsedCarInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeUsedCarInvoiceWithOptions($request, $runtime);
    }

    /**
     * @summary 车辆合格证识别
     *  *
     * @param RecognizeVehicleCertificationRequest $request RecognizeVehicleCertificationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeVehicleCertificationResponse RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleCertification',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 车辆合格证识别
     *  *
     * @param RecognizeVehicleCertificationRequest $request RecognizeVehicleCertificationRequest
     *
     * @return RecognizeVehicleCertificationResponse RecognizeVehicleCertificationResponse
     */
    public function recognizeVehicleCertification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleCertificationWithOptions($request, $runtime);
    }

    /**
     * @summary 行驶证识别
     *  *
     * @param RecognizeVehicleLicenseRequest $request RecognizeVehicleLicenseRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeVehicleLicenseResponse RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 行驶证识别
     *  *
     * @param RecognizeVehicleLicenseRequest $request RecognizeVehicleLicenseRequest
     *
     * @return RecognizeVehicleLicenseResponse RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 机动车注册登记证识别
     *  *
     * @param RecognizeVehicleRegistrationRequest $request RecognizeVehicleRegistrationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeVehicleRegistrationResponse RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeVehicleRegistration',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 机动车注册登记证识别
     *  *
     * @param RecognizeVehicleRegistrationRequest $request RecognizeVehicleRegistrationRequest
     *
     * @return RecognizeVehicleRegistrationResponse RecognizeVehicleRegistrationResponse
     */
    public function recognizeVehicleRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleRegistrationWithOptions($request, $runtime);
    }

    /**
     * @summary 电子面单识别
     *  *
     * @param RecognizeWaybillRequest $request RecognizeWaybillRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RecognizeWaybillResponse RecognizeWaybillResponse
     */
    public function recognizeWaybillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => $request->body,
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeWaybill',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 电子面单识别
     *  *
     * @param RecognizeWaybillRequest $request RecognizeWaybillRequest
     *
     * @return RecognizeWaybillResponse RecognizeWaybillResponse
     */
    public function recognizeWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeWaybillWithOptions($request, $runtime);
    }

    /**
     * @summary 营业执照核验
     *  *
     * @param VerifyBusinessLicenseRequest $request VerifyBusinessLicenseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyBusinessLicenseResponse VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        if (!Utils::isUnset($request->creditCode)) {
            $query['CreditCode'] = $request->creditCode;
        }
        if (!Utils::isUnset($request->legalPerson)) {
            $query['LegalPerson'] = $request->legalPerson;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyBusinessLicense',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 营业执照核验
     *  *
     * @param VerifyBusinessLicenseRequest $request VerifyBusinessLicenseRequest
     *
     * @return VerifyBusinessLicenseResponse VerifyBusinessLicenseResponse
     */
    public function verifyBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 增值税发票核验
     *  *
     * @param VerifyVATInvoiceRequest $request VerifyVATInvoiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyVATInvoiceResponse VerifyVATInvoiceResponse
     */
    public function verifyVATInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->invoiceCode)) {
            $query['InvoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceDate)) {
            $query['InvoiceDate'] = $request->invoiceDate;
        }
        if (!Utils::isUnset($request->invoiceKind)) {
            $query['InvoiceKind'] = $request->invoiceKind;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            $query['InvoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->invoiceSum)) {
            $query['InvoiceSum'] = $request->invoiceSum;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyVATInvoice',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyVATInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 增值税发票核验
     *  *
     * @param VerifyVATInvoiceRequest $request VerifyVATInvoiceRequest
     *
     * @return VerifyVATInvoiceResponse VerifyVATInvoiceResponse
     */
    public function verifyVATInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVATInvoiceWithOptions($request, $runtime);
    }
}
