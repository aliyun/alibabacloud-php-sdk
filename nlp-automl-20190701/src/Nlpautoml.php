<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMtIntervenePackageRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMtIntervenePackageResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMTInterveneWordRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\AddMTInterveneWordResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\BindIntervenePackageAndModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\BindIntervenePackageAndModelResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\GetPredictDocRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\GetPredictDocResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\InvokeActionRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\InvokeActionResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelByDocRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelByDocResponse;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20190701\Models\PredictMTModelResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Nlpautoml extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nlp-automl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param PredictMTModelByDocRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PredictMTModelByDocResponse
     */
    public function predictMTModelByDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PredictMTModelByDocResponse::fromMap($this->doRequest('PredictMTModelByDoc', 'HTTPS', 'POST', '2019-07-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PredictMTModelByDocRequest $request
     *
     * @return PredictMTModelByDocResponse
     */
    public function predictMTModelByDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictMTModelByDocWithOptions($request, $runtime);
    }

    /**
     * @param BindIntervenePackageAndModelRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BindIntervenePackageAndModelResponse
     */
    public function bindIntervenePackageAndModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindIntervenePackageAndModelResponse::fromMap($this->doRequest('BindIntervenePackageAndModel', 'HTTPS', 'POST', '2019-07-01', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param BindIntervenePackageAndModelRequest $request
     *
     * @return BindIntervenePackageAndModelResponse
     */
    public function bindIntervenePackageAndModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindIntervenePackageAndModelWithOptions($request, $runtime);
    }

    /**
     * @param AddMtIntervenePackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddMtIntervenePackageResponse
     */
    public function addMtIntervenePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddMtIntervenePackageResponse::fromMap($this->doRequest('AddMtIntervenePackage', 'HTTPS', 'POST', '2019-07-01', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddMtIntervenePackageRequest $request
     *
     * @return AddMtIntervenePackageResponse
     */
    public function addMtIntervenePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMtIntervenePackageWithOptions($request, $runtime);
    }

    /**
     * @param GetPredictDocRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPredictDocResponse
     */
    public function getPredictDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetPredictDocResponse::fromMap($this->doRequest('GetPredictDoc', 'HTTPS', 'POST', '2019-07-01', 'AK,APP,PrivateKey,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetPredictDocRequest $request
     *
     * @return GetPredictDocResponse
     */
    public function getPredictDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPredictDocWithOptions($request, $runtime);
    }

    /**
     * @param AddMTInterveneWordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddMTInterveneWordResponse
     */
    public function addMTInterveneWordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddMTInterveneWordResponse::fromMap($this->doRequest('AddMTInterveneWord', 'HTTPS', 'POST', '2019-07-01', 'AK,APP,PrivateKey', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddMTInterveneWordRequest $request
     *
     * @return AddMTInterveneWordResponse
     */
    public function addMTInterveneWord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMTInterveneWordWithOptions($request, $runtime);
    }

    /**
     * @param PredictMTModelRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PredictMTModelResponse
     */
    public function predictMTModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PredictMTModelResponse::fromMap($this->doRequest('PredictMTModel', 'HTTPS', 'POST', '2019-07-01', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PredictMTModelRequest $request
     *
     * @return PredictMTModelResponse
     */
    public function predictMTModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictMTModelWithOptions($request, $runtime);
    }

    /**
     * @param InvokeActionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return InvokeActionResponse
     */
    public function invokeActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return InvokeActionResponse::fromMap($this->doRequest('InvokeAction', 'HTTPS', 'POST', '2019-07-01', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InvokeActionRequest $request
     *
     * @return InvokeActionResponse
     */
    public function invokeAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeActionWithOptions($request, $runtime);
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
}
