<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAdvancedResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAirItineraryResponse;
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
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarNumberResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCarVinCodeResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeCtwoMedicalDeviceManageLicenseResponse;
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
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodManageLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeFoodProduceLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeGeneralResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHandwritingResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeHouseholdResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeIdcardResponse;
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
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizePassportResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeQuotaInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRollTicketResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeRussianResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTableOcrResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeThaiResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTradeMarkCertificationResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeTrainInvoiceResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeVehicleLicenseResponse;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillRequest;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeWaybillResponse;
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
     * @param RecognizeAdvancedRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeAdvancedResponse
     */
    public function recognizeAdvancedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['NeedSortPage']   = $request->needSortPage;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeAdvancedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeAirItineraryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeAirItineraryResponse
     */
    public function recognizeAirItineraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeAirItineraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeBankAccountLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBankAccountLicenseResponse
     */
    public function recognizeBankAccountLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankAccountLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeBankCardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeBankCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeBasicRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeBasicResponse
     */
    public function recognizeBasicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeBirthCertificationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeBirthCertificationResponse
     */
    public function recognizeBirthCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeBirthCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeBusinessLicenseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeCarInvoiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarInvoiceResponse
     */
    public function recognizeCarInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeCarNumberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeCarNumberResponse
     */
    public function recognizeCarNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeCarVinCodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeCarVinCodeResponse
     */
    public function recognizeCarVinCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeCarVinCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeCtwoMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return RecognizeCtwoMedicalDeviceManageLicenseResponse
     */
    public function recognizeCtwoMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeCtwoMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeDrivingLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeDrivingLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduFormulaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeEduFormulaResponse
     */
    public function recognizeEduFormulaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduFormulaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduOralCalculationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeEduOralCalculationResponse
     */
    public function recognizeEduOralCalculationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduOralCalculationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduPaperCutRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperCutResponse
     */
    public function recognizeEduPaperCutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['CutType']   = $request->cutType;
        $query['ImageType'] = $request->imageType;
        $query['Subject']   = $request->subject;
        $query['Url']       = $request->url;
        $req                = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperCutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduPaperOcrRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeEduPaperOcrResponse
     */
    public function recognizeEduPaperOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['ImageType']      = $request->imageType;
        $query['OutputOricoord'] = $request->outputOricoord;
        $query['Subject']        = $request->subject;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduPaperStructedRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeEduPaperStructedResponse
     */
    public function recognizeEduPaperStructedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['NeedRotate'] = $request->needRotate;
        $query['Url']        = $request->url;
        $req                 = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduPaperStructedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEduQuestionOcrRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeEduQuestionOcrResponse
     */
    public function recognizeEduQuestionOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['NeedRotate'] = $request->needRotate;
        $query['Url']        = $request->url;
        $req                 = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEduQuestionOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEnglishRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeEnglishResponse
     */
    public function recognizeEnglishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['NeedRotate']  = $request->needRotate;
        $query['OutputTable'] = $request->outputTable;
        $query['Url']         = $request->url;
        $req                  = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEnglishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeEstateCertificationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeEstateCertificationResponse
     */
    public function recognizeEstateCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeEstateCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeFoodManageLicenseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeFoodManageLicenseResponse
     */
    public function recognizeFoodManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeFoodProduceLicenseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeFoodProduceLicenseResponse
     */
    public function recognizeFoodProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeFoodProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeGeneralResponse
     */
    public function recognizeGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeHandwritingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeHandwritingResponse
     */
    public function recognizeHandwritingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['NeedSortPage']   = $request->needSortPage;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeHandwritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeHouseholdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeHouseholdResponse
     */
    public function recognizeHouseholdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeHouseholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeIdcardRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeIdcardResponse
     */
    public function recognizeIdcardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeIdcardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeInvoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeInvoiceResponse
     */
    public function recognizeInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeJanpaneseRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeJanpaneseResponse
     */
    public function recognizeJanpaneseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeJanpaneseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeKoreanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeKoreanResponse
     */
    public function recognizeKoreanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeKoreanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeLatinRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeLatinResponse
     */
    public function recognizeLatinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeLatinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeMedicalDeviceManageLicenseRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return RecognizeMedicalDeviceManageLicenseResponse
     */
    public function recognizeMedicalDeviceManageLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceManageLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeMedicalDeviceProduceLicenseRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return RecognizeMedicalDeviceProduceLicenseResponse
     */
    public function recognizeMedicalDeviceProduceLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeMedicalDeviceProduceLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeMixedInvoicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMixedInvoicesResponse
     */
    public function recognizeMixedInvoicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeMixedInvoicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeMultiLanguageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeMultiLanguageResponse
     */
    public function recognizeMultiLanguageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecognizeMultiLanguageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->languages)) {
            $request->languagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->languages, 'Languages', 'simple');
        }
        $query                   = [];
        $query['Languages']      = $request->languagesShrink;
        $query['NeedRotate']     = $request->needRotate;
        $query['NeedSortPage']   = $request->needSortPage;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
            'stream' => $request->body,
        ]);
        $params = new Params([
            'action'      => 'RecognizeMultiLanguage',
            'version'     => '2021-07-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeMultiLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizePassportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizePassportResponse
     */
    public function recognizePassportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizePassportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeQuotaInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeQuotaInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeRollTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeRollTicketResponse
     */
    public function recognizeRollTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeRollTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeRussianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeRussianResponse
     */
    public function recognizeRussianWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeRussianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeTableOcrRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeTableOcrResponse
     */
    public function recognizeTableOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeTableOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeTaxiInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeTaxiInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeThaiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeThaiResponse
     */
    public function recognizeThaiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['NeedRotate']     = $request->needRotate;
        $query['OutputCharInfo'] = $request->outputCharInfo;
        $query['OutputTable']    = $request->outputTable;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeThaiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeTradeMarkCertificationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeTradeMarkCertificationResponse
     */
    public function recognizeTradeMarkCertificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeTradeMarkCertificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeTrainInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTrainInvoiceResponse
     */
    public function recognizeTrainInvoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeTrainInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeVehicleLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVehicleLicenseResponse
     */
    public function recognizeVehicleLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeVehicleLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecognizeWaybillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Url'] = $request->url;
        $req          = new OpenApiRequest([
            'query'  => OpenApiUtilClient::query($query),
            'body'   => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecognizeWaybillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeWaybillRequest $request
     *
     * @return RecognizeWaybillResponse
     */
    public function recognizeWaybill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeWaybillWithOptions($request, $runtime);
    }
}
