<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictClassifierModelRequest;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictClassifierModelResponse;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictModelRequest;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictModelResponse;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictTemplateModelRequest;
use AlibabaCloud\SDK\DocumentAutoml\V20221229\Models\PredictTemplateModelResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DocumentAutoml extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('documentautoml', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param PredictClassifierModelRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PredictClassifierModelResponse
     */
    public function predictClassifierModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPrediction)) {
            $query['AutoPrediction'] = $request->autoPrediction;
        }
        if (!Utils::isUnset($request->classifierId)) {
            $query['ClassifierId'] = $request->classifierId;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PredictClassifierModel',
            'version'     => '2022-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictClassifierModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredictClassifierModelRequest $request
     *
     * @return PredictClassifierModelResponse
     */
    public function predictClassifierModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictClassifierModelWithOptions($request, $runtime);
    }

    /**
     * @param PredictModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PredictModelResponse
     */
    public function predictModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->binaryToText)) {
            $query['BinaryToText'] = $request->binaryToText;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $query['ModelVersion'] = $request->modelVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PredictModel',
            'version'     => '2022-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredictModelRequest $request
     *
     * @return PredictModelResponse
     */
    public function predictModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictModelWithOptions($request, $runtime);
    }

    /**
     * @param PredictTemplateModelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PredictTemplateModelResponse
     */
    public function predictTemplateModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PredictTemplateModel',
            'version'     => '2022-12-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PredictTemplateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredictTemplateModelRequest $request
     *
     * @return PredictTemplateModelResponse
     */
    public function predictTemplateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictTemplateModelWithOptions($request, $runtime);
    }
}
