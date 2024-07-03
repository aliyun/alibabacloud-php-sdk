<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMTInterveneWordRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMTInterveneWordResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\GetPredictDocRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\GetPredictDocResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelByDocRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelByDocResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Nlpautoml extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nlp-automl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddMTInterveneWordRequest $request AddMTInterveneWordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMTInterveneWordResponse AddMTInterveneWordResponse
     */
    public function addMTInterveneWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->packageId)) {
            $query['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $query['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetText)) {
            $query['TargetText'] = $request->targetText;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMTInterveneWord',
            'version'     => '2019-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMTInterveneWordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMTInterveneWordRequest $request AddMTInterveneWordRequest
     *
     * @return AddMTInterveneWordResponse AddMTInterveneWordResponse
     */
    public function addMTInterveneWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMTInterveneWordWithOptions($request, $runtime);
    }

    /**
     * @param GetPredictDocRequest $request GetPredictDocRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPredictDocResponse GetPredictDocResponse
     */
    public function getPredictDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->docId)) {
            $query['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPredictDoc',
            'version'     => '2019-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPredictDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPredictDocRequest $request GetPredictDocRequest
     *
     * @return GetPredictDocResponse GetPredictDocResponse
     */
    public function getPredictDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPredictDocWithOptions($request, $runtime);
    }

    /**
     * @param PredictMTModelByDocRequest $request PredictMTModelByDocRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PredictMTModelByDocResponse PredictMTModelByDocResponse
     */
    public function predictMTModelByDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->needXLIFF)) {
            $query['NeedXLIFF'] = $request->needXLIFF;
        }
        $body = [];
        if (!Utils::isUnset($request->fileContent)) {
            $body['FileContent'] = $request->fileContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PredictMTModelByDoc',
            'version'     => '2019-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictMTModelByDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredictMTModelByDocRequest $request PredictMTModelByDocRequest
     *
     * @return PredictMTModelByDocResponse PredictMTModelByDocResponse
     */
    public function predictMTModelByDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictMTModelByDocWithOptions($request, $runtime);
    }
}
