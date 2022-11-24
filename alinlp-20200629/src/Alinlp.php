<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\ADClockRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\ADClockResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\ADMMURequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\ADMMUResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetBrandChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetBrandChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetCateChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetCateChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetCheckDuplicationChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetCheckDuplicationChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDiagnosisChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDiagnosisChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChGeneralCTBRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChGeneralCTBResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChGeneralStanfordRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetDpChGeneralStanfordResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetEcChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetEcChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetEcEnGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetEcEnGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetItemPubChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetItemPubChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetKeywordChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetKeywordChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetKeywordEnEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetKeywordEnEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetMedicineChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetMedicineChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerCustomizedChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerCustomizedChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerCustomizedSeaEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetNerCustomizedSeaEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetOperationChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetOperationChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPosChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPosChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPosChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPosChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPriceChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetPriceChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSaChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSaChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSaSeaEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSaSeaEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSimilarityChMedicalRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSimilarityChMedicalResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSummaryChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetSummaryChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTcChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTcChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTcChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTcChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTsChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetTsChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChCommentRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChCommentResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChEntertainmentRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChEntertainmentResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChSearchRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWeChSearchResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomCommentRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomCommentResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomContentRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomContentResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomTitleRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEcomTitleResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEntertainmentRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChEntertainmentResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChO2ORequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedChO2OResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedSeaEcomRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedSeaEcomResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedSeaGeneralRequest;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\GetWsCustomizedSeaGeneralResponse;
use AlibabaCloud\SDK\Alinlp\V20200629\Models\OpenAlinlpServiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Alinlp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alinlp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ADClockRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ADClockResponse
     */
    public function aDClockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ADClock',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ADClockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ADClockRequest $request
     *
     * @return ADClockResponse
     */
    public function aDClock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aDClockWithOptions($request, $runtime);
    }

    /**
     * @param ADMMURequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return ADMMUResponse
     */
    public function aDMMUWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ADMMU',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ADMMUResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ADMMURequest $request
     *
     * @return ADMMUResponse
     */
    public function aDMMU($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aDMMUWithOptions($request, $runtime);
    }

    /**
     * @param GetBrandChEcomRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBrandChEcomResponse
     */
    public function getBrandChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetBrandChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBrandChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBrandChEcomRequest $request
     *
     * @return GetBrandChEcomResponse
     */
    public function getBrandChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrandChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetCateChEcomRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCateChEcomResponse
     */
    public function getCateChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCateChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCateChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCateChEcomRequest $request
     *
     * @return GetCateChEcomResponse
     */
    public function getCateChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCateChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetCheckDuplicationChMedicalRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetCheckDuplicationChMedicalResponse
     */
    public function getCheckDuplicationChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->originQ)) {
            $body['OriginQ'] = $request->originQ;
        }
        if (!Utils::isUnset($request->originT)) {
            $body['OriginT'] = $request->originT;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCheckDuplicationChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCheckDuplicationChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCheckDuplicationChMedicalRequest $request
     *
     * @return GetCheckDuplicationChMedicalResponse
     */
    public function getCheckDuplicationChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCheckDuplicationChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetDiagnosisChMedicalRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDiagnosisChMedicalResponse
     */
    public function getDiagnosisChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnosisChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiagnosisChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiagnosisChMedicalRequest $request
     *
     * @return GetDiagnosisChMedicalResponse
     */
    public function getDiagnosisChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnosisChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetDpChEcomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetDpChEcomResponse
     */
    public function getDpChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDpChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDpChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDpChEcomRequest $request
     *
     * @return GetDpChEcomResponse
     */
    public function getDpChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDpChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetDpChGeneralCTBRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDpChGeneralCTBResponse
     */
    public function getDpChGeneralCTBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDpChGeneralCTB',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDpChGeneralCTBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDpChGeneralCTBRequest $request
     *
     * @return GetDpChGeneralCTBResponse
     */
    public function getDpChGeneralCTB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDpChGeneralCTBWithOptions($request, $runtime);
    }

    /**
     * @param GetDpChGeneralStanfordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDpChGeneralStanfordResponse
     */
    public function getDpChGeneralStanfordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDpChGeneralStanford',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDpChGeneralStanfordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDpChGeneralStanfordRequest $request
     *
     * @return GetDpChGeneralStanfordResponse
     */
    public function getDpChGeneralStanford($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDpChGeneralStanfordWithOptions($request, $runtime);
    }

    /**
     * @param GetEcChGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEcChGeneralResponse
     */
    public function getEcChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEcChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEcChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEcChGeneralRequest $request
     *
     * @return GetEcChGeneralResponse
     */
    public function getEcChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEcChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetEcEnGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetEcEnGeneralResponse
     */
    public function getEcEnGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEcEnGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEcEnGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEcEnGeneralRequest $request
     *
     * @return GetEcEnGeneralResponse
     */
    public function getEcEnGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEcEnGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetItemPubChEcomRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetItemPubChEcomResponse
     */
    public function getItemPubChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetItemPubChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetItemPubChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetItemPubChEcomRequest $request
     *
     * @return GetItemPubChEcomResponse
     */
    public function getItemPubChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getItemPubChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetKeywordChEcomRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetKeywordChEcomResponse
     */
    public function getKeywordChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $body['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetKeywordChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKeywordChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetKeywordChEcomRequest $request
     *
     * @return GetKeywordChEcomResponse
     */
    public function getKeywordChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetKeywordEnEcomRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetKeywordEnEcomResponse
     */
    public function getKeywordEnEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetKeywordEnEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKeywordEnEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetKeywordEnEcomRequest $request
     *
     * @return GetKeywordEnEcomResponse
     */
    public function getKeywordEnEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordEnEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetMedicineChMedicalRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMedicineChMedicalResponse
     */
    public function getMedicineChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->factory)) {
            $body['Factory'] = $request->factory;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->specification)) {
            $body['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->unit)) {
            $body['Unit'] = $request->unit;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMedicineChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMedicineChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMedicineChMedicalRequest $request
     *
     * @return GetMedicineChMedicalResponse
     */
    public function getMedicineChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMedicineChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetNerChEcomRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNerChEcomResponse
     */
    public function getNerChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lexerId)) {
            $body['LexerId'] = $request->lexerId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNerChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNerChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNerChEcomRequest $request
     *
     * @return GetNerChEcomResponse
     */
    public function getNerChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNerChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetNerChMedicalRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetNerChMedicalResponse
     */
    public function getNerChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNerChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNerChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNerChMedicalRequest $request
     *
     * @return GetNerChMedicalResponse
     */
    public function getNerChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNerChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetNerCustomizedChEcomRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetNerCustomizedChEcomResponse
     */
    public function getNerCustomizedChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lexerId)) {
            $body['LexerId'] = $request->lexerId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNerCustomizedChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNerCustomizedChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNerCustomizedChEcomRequest $request
     *
     * @return GetNerCustomizedChEcomResponse
     */
    public function getNerCustomizedChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNerCustomizedChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetNerCustomizedSeaEcomRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetNerCustomizedSeaEcomResponse
     */
    public function getNerCustomizedSeaEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNerCustomizedSeaEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNerCustomizedSeaEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNerCustomizedSeaEcomRequest $request
     *
     * @return GetNerCustomizedSeaEcomResponse
     */
    public function getNerCustomizedSeaEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNerCustomizedSeaEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetOperationChMedicalRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOperationChMedicalResponse
     */
    public function getOperationChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOperationChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOperationChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOperationChMedicalRequest $request
     *
     * @return GetOperationChMedicalResponse
     */
    public function getOperationChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetPosChEcomRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPosChEcomResponse
     */
    public function getPosChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPosChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPosChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPosChEcomRequest $request
     *
     * @return GetPosChEcomResponse
     */
    public function getPosChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPosChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetPosChGeneralRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetPosChGeneralResponse
     */
    public function getPosChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPosChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPosChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPosChGeneralRequest $request
     *
     * @return GetPosChGeneralResponse
     */
    public function getPosChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPosChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetPriceChEcomRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetPriceChEcomResponse
     */
    public function getPriceChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPriceChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPriceChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPriceChEcomRequest $request
     *
     * @return GetPriceChEcomResponse
     */
    public function getPriceChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPriceChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetSaChGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSaChGeneralResponse
     */
    public function getSaChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSaChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSaChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSaChGeneralRequest $request
     *
     * @return GetSaChGeneralResponse
     */
    public function getSaChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSaChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetSaSeaEcomRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSaSeaEcomResponse
     */
    public function getSaSeaEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSaSeaEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSaSeaEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSaSeaEcomRequest $request
     *
     * @return GetSaSeaEcomResponse
     */
    public function getSaSeaEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSaSeaEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetSimilarityChMedicalRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSimilarityChMedicalResponse
     */
    public function getSimilarityChMedicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->originQ)) {
            $body['OriginQ'] = $request->originQ;
        }
        if (!Utils::isUnset($request->originT)) {
            $body['OriginT'] = $request->originT;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSimilarityChMedical',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSimilarityChMedicalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSimilarityChMedicalRequest $request
     *
     * @return GetSimilarityChMedicalResponse
     */
    public function getSimilarityChMedical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSimilarityChMedicalWithOptions($request, $runtime);
    }

    /**
     * @param GetSummaryChEcomRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSummaryChEcomResponse
     */
    public function getSummaryChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSummaryChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSummaryChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSummaryChEcomRequest $request
     *
     * @return GetSummaryChEcomResponse
     */
    public function getSummaryChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSummaryChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetTcChEcomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTcChEcomResponse
     */
    public function getTcChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTcChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTcChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTcChEcomRequest $request
     *
     * @return GetTcChEcomResponse
     */
    public function getTcChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTcChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetTcChGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTcChGeneralResponse
     */
    public function getTcChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTcChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTcChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTcChGeneralRequest $request
     *
     * @return GetTcChGeneralResponse
     */
    public function getTcChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTcChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetTsChEcomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTsChEcomResponse
     */
    public function getTsChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->originQ)) {
            $body['OriginQ'] = $request->originQ;
        }
        if (!Utils::isUnset($request->originT)) {
            $body['OriginT'] = $request->originT;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTsChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTsChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTsChEcomRequest $request
     *
     * @return GetTsChEcomResponse
     */
    public function getTsChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTsChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetWeChCommentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetWeChCommentResponse
     */
    public function getWeChCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWeChComment',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeChCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeChCommentRequest $request
     *
     * @return GetWeChCommentResponse
     */
    public function getWeChComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWeChCommentWithOptions($request, $runtime);
    }

    /**
     * @param GetWeChEcomRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWeChEcomResponse
     */
    public function getWeChEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWeChEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeChEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeChEcomRequest $request
     *
     * @return GetWeChEcomResponse
     */
    public function getWeChEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWeChEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetWeChEntertainmentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetWeChEntertainmentResponse
     */
    public function getWeChEntertainmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWeChEntertainment',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeChEntertainmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeChEntertainmentRequest $request
     *
     * @return GetWeChEntertainmentResponse
     */
    public function getWeChEntertainment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWeChEntertainmentWithOptions($request, $runtime);
    }

    /**
     * @param GetWeChGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetWeChGeneralResponse
     */
    public function getWeChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWeChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeChGeneralRequest $request
     *
     * @return GetWeChGeneralResponse
     */
    public function getWeChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWeChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetWeChSearchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetWeChSearchResponse
     */
    public function getWeChSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWeChSearch',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWeChSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWeChSearchRequest $request
     *
     * @return GetWeChSearchResponse
     */
    public function getWeChSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWeChSearchWithOptions($request, $runtime);
    }

    /**
     * @param GetWsChGeneralRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetWsChGeneralResponse
     */
    public function getWsChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsChGeneralRequest $request
     *
     * @return GetWsChGeneralResponse
     */
    public function getWsChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChEcomCommentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetWsCustomizedChEcomCommentResponse
     */
    public function getWsCustomizedChEcomCommentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChEcomComment',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChEcomCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChEcomCommentRequest $request
     *
     * @return GetWsCustomizedChEcomCommentResponse
     */
    public function getWsCustomizedChEcomComment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChEcomCommentWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChEcomContentRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetWsCustomizedChEcomContentResponse
     */
    public function getWsCustomizedChEcomContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChEcomContent',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChEcomContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChEcomContentRequest $request
     *
     * @return GetWsCustomizedChEcomContentResponse
     */
    public function getWsCustomizedChEcomContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChEcomContentWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChEcomTitleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetWsCustomizedChEcomTitleResponse
     */
    public function getWsCustomizedChEcomTitleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChEcomTitle',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChEcomTitleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChEcomTitleRequest $request
     *
     * @return GetWsCustomizedChEcomTitleResponse
     */
    public function getWsCustomizedChEcomTitle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChEcomTitleWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChEntertainmentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetWsCustomizedChEntertainmentResponse
     */
    public function getWsCustomizedChEntertainmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChEntertainment',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChEntertainmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChEntertainmentRequest $request
     *
     * @return GetWsCustomizedChEntertainmentResponse
     */
    public function getWsCustomizedChEntertainment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChEntertainmentWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChGeneralRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetWsCustomizedChGeneralResponse
     */
    public function getWsCustomizedChGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChGeneralRequest $request
     *
     * @return GetWsCustomizedChGeneralResponse
     */
    public function getWsCustomizedChGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChGeneralWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedChO2ORequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetWsCustomizedChO2OResponse
     */
    public function getWsCustomizedChO2OWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outType)) {
            $body['OutType'] = $request->outType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->tokenizerId)) {
            $body['TokenizerId'] = $request->tokenizerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedChO2O',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedChO2OResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedChO2ORequest $request
     *
     * @return GetWsCustomizedChO2OResponse
     */
    public function getWsCustomizedChO2O($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedChO2OWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedSeaEcomRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetWsCustomizedSeaEcomResponse
     */
    public function getWsCustomizedSeaEcomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedSeaEcom',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedSeaEcomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedSeaEcomRequest $request
     *
     * @return GetWsCustomizedSeaEcomResponse
     */
    public function getWsCustomizedSeaEcom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedSeaEcomWithOptions($request, $runtime);
    }

    /**
     * @param GetWsCustomizedSeaGeneralRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetWsCustomizedSeaGeneralResponse
     */
    public function getWsCustomizedSeaGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWsCustomizedSeaGeneral',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWsCustomizedSeaGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWsCustomizedSeaGeneralRequest $request
     *
     * @return GetWsCustomizedSeaGeneralResponse
     */
    public function getWsCustomizedSeaGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWsCustomizedSeaGeneralWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenAlinlpServiceResponse
     */
    public function openAlinlpServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenAlinlpService',
            'version'     => '2020-06-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenAlinlpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenAlinlpServiceResponse
     */
    public function openAlinlpService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAlinlpServiceWithOptions($runtime);
    }
}
