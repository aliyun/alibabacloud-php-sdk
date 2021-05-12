<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ClassifyPOIRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ClassifyPOIResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CompleteAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CompleteAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CorrectAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CorrectAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractExpressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractExpressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractNameRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractNameResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractPhoneRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractPhoneResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressBlockMappingRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressBlockMappingResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressDivisionCodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressDivisionCodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressEvaluateRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressEvaluateResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressGeocodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressGeocodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSearchRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSearchResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetInputSearchRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetInputSearchResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\PredictPOIRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\PredictPOIResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\TransferCoordRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\TransferCoordResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Addresspurification extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('address-purification', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetAddressDivisionCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAddressDivisionCodeResponse
     */
    public function getAddressDivisionCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressDivisionCodeResponse::fromMap($this->doRPCRequest('GetAddressDivisionCode', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressDivisionCodeRequest $request
     *
     * @return GetAddressDivisionCodeResponse
     */
    public function getAddressDivisionCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressDivisionCodeWithOptions($request, $runtime);
    }

    /**
     * @param StructureAddressRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StructureAddressResponse
     */
    public function structureAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StructureAddressResponse::fromMap($this->doRPCRequest('StructureAddress', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StructureAddressRequest $request
     *
     * @return StructureAddressResponse
     */
    public function structureAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->structureAddressWithOptions($request, $runtime);
    }

    /**
     * @param ExtractExpressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExtractExpressResponse
     */
    public function extractExpressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExtractExpressResponse::fromMap($this->doRPCRequest('ExtractExpress', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExtractExpressRequest $request
     *
     * @return ExtractExpressResponse
     */
    public function extractExpress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractExpressWithOptions($request, $runtime);
    }

    /**
     * @param ExtractNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExtractNameResponse
     */
    public function extractNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExtractNameResponse::fromMap($this->doRPCRequest('ExtractName', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExtractNameRequest $request
     *
     * @return ExtractNameResponse
     */
    public function extractName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractNameWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressBlockMappingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAddressBlockMappingResponse
     */
    public function getAddressBlockMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressBlockMappingResponse::fromMap($this->doRPCRequest('GetAddressBlockMapping', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressBlockMappingRequest $request
     *
     * @return GetAddressBlockMappingResponse
     */
    public function getAddressBlockMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressBlockMappingWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressSearchRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAddressSearchResponse
     */
    public function getAddressSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressSearchResponse::fromMap($this->doRPCRequest('GetAddressSearch', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressSearchRequest $request
     *
     * @return GetAddressSearchResponse
     */
    public function getAddressSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressSearchWithOptions($request, $runtime);
    }

    /**
     * @param PredictPOIRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PredictPOIResponse
     */
    public function predictPOIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PredictPOIResponse::fromMap($this->doRPCRequest('PredictPOI', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PredictPOIRequest $request
     *
     * @return PredictPOIResponse
     */
    public function predictPOI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictPOIWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyPOIRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClassifyPOIResponse
     */
    public function classifyPOIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClassifyPOIResponse::fromMap($this->doRPCRequest('ClassifyPOI', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClassifyPOIRequest $request
     *
     * @return ClassifyPOIResponse
     */
    public function classifyPOI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyPOIWithOptions($request, $runtime);
    }

    /**
     * @param CorrectAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CorrectAddressResponse
     */
    public function correctAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CorrectAddressResponse::fromMap($this->doRPCRequest('CorrectAddress', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CorrectAddressRequest $request
     *
     * @return CorrectAddressResponse
     */
    public function correctAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->correctAddressWithOptions($request, $runtime);
    }

    /**
     * @param GetZipcodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetZipcodeResponse
     */
    public function getZipcodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetZipcodeResponse::fromMap($this->doRPCRequest('GetZipcode', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetZipcodeRequest $request
     *
     * @return GetZipcodeResponse
     */
    public function getZipcode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getZipcodeWithOptions($request, $runtime);
    }

    /**
     * @param CompleteAddressRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CompleteAddressResponse
     */
    public function completeAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteAddressResponse::fromMap($this->doRPCRequest('CompleteAddress', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CompleteAddressRequest $request
     *
     * @return CompleteAddressResponse
     */
    public function completeAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeAddressWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressSimilarityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAddressSimilarityResponse
     */
    public function getAddressSimilarityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressSimilarityResponse::fromMap($this->doRPCRequest('GetAddressSimilarity', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressSimilarityRequest $request
     *
     * @return GetAddressSimilarityResponse
     */
    public function getAddressSimilarity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressSimilarityWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressGeocodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAddressGeocodeResponse
     */
    public function getAddressGeocodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressGeocodeResponse::fromMap($this->doRPCRequest('GetAddressGeocode', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressGeocodeRequest $request
     *
     * @return GetAddressGeocodeResponse
     */
    public function getAddressGeocode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressGeocodeWithOptions($request, $runtime);
    }

    /**
     * @param TransferCoordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TransferCoordResponse
     */
    public function transferCoordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferCoordResponse::fromMap($this->doRPCRequest('TransferCoord', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferCoordRequest $request
     *
     * @return TransferCoordResponse
     */
    public function transferCoord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCoordWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param ExtractPhoneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExtractPhoneResponse
     */
    public function extractPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExtractPhoneResponse::fromMap($this->doRPCRequest('ExtractPhone', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExtractPhoneRequest $request
     *
     * @return ExtractPhoneResponse
     */
    public function extractPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractPhoneWithOptions($request, $runtime);
    }

    /**
     * @param GetInputSearchRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetInputSearchResponse
     */
    public function getInputSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInputSearchResponse::fromMap($this->doRPCRequest('GetInputSearch', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInputSearchRequest $request
     *
     * @return GetInputSearchResponse
     */
    public function getInputSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInputSearchWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressEvaluateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAddressEvaluateResponse
     */
    public function getAddressEvaluateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAddressEvaluateResponse::fromMap($this->doRPCRequest('GetAddressEvaluate', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAddressEvaluateRequest $request
     *
     * @return GetAddressEvaluateResponse
     */
    public function getAddressEvaluate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressEvaluateWithOptions($request, $runtime);
    }

    /**
     * @param ExtractAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExtractAddressResponse
     */
    public function extractAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExtractAddressResponse::fromMap($this->doRPCRequest('ExtractAddress', '2019-11-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExtractAddressRequest $request
     *
     * @return ExtractAddressResponse
     */
    public function extractAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractAddressWithOptions($request, $runtime);
    }
}
