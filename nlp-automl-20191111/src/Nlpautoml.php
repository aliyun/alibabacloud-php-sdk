<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateAsyncPredictRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateAsyncPredictResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\FindUserReport4AlinlpRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\FindUserReport4AlinlpResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetAsyncPredictRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetAsyncPredictResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetPredictResultRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetPredictResultResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceNewRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceNewResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceResponse;
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
     * @param CreateAsyncPredictRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAsyncPredictResponse
     */
    public function createAsyncPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->detailTag)) {
            $body['DetailTag'] = $request->detailTag;
        }
        if (!Utils::isUnset($request->fetchContent)) {
            $body['FetchContent'] = $request->fetchContent;
        }
        if (!Utils::isUnset($request->fileContent)) {
            $body['FileContent'] = $request->fileContent;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $body['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $body['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->topK)) {
            $body['TopK'] = $request->topK;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAsyncPredict',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAsyncPredictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAsyncPredictRequest $request
     *
     * @return CreateAsyncPredictResponse
     */
    public function createAsyncPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncPredictWithOptions($request, $runtime);
    }

    /**
     * @param FindUserReport4AlinlpRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FindUserReport4AlinlpResponse
     */
    public function findUserReport4AlinlpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginTime)) {
            $body['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->customerUserParentId)) {
            $body['CustomerUserParentId'] = $request->customerUserParentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['ModelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FindUserReport4Alinlp',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindUserReport4AlinlpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FindUserReport4AlinlpRequest $request
     *
     * @return FindUserReport4AlinlpResponse
     */
    public function findUserReport4Alinlp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUserReport4AlinlpWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncPredictRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAsyncPredictResponse
     */
    public function getAsyncPredictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncPredict',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncPredictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsyncPredictRequest $request
     *
     * @return GetAsyncPredictResponse
     */
    public function getAsyncPredict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncPredictWithOptions($request, $runtime);
    }

    /**
     * @param GetPredictResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetPredictResultResponse
     */
    public function getPredictResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->detailTag)) {
            $body['DetailTag'] = $request->detailTag;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->modelVersion)) {
            $body['ModelVersion'] = $request->modelVersion;
        }
        if (!Utils::isUnset($request->topK)) {
            $body['TopK'] = $request->topK;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPredictResult',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPredictResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPredictResultRequest $request
     *
     * @return GetPredictResultResponse
     */
    public function getPredictResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPredictResultWithOptions($request, $runtime);
    }

    /**
     * @param RunPreTrainServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunPreTrainServiceResponse
     */
    public function runPreTrainServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->predictContent)) {
            $body['PredictContent'] = $request->predictContent;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $body['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunPreTrainService',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunPreTrainServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunPreTrainServiceRequest $request
     *
     * @return RunPreTrainServiceResponse
     */
    public function runPreTrainService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runPreTrainServiceWithOptions($request, $runtime);
    }

    /**
     * @param RunPreTrainServiceNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RunPreTrainServiceNewResponse
     */
    public function runPreTrainServiceNewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->predictContent)) {
            $body['PredictContent'] = $request->predictContent;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $body['ServiceVersion'] = $request->serviceVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunPreTrainServiceNew',
            'version'     => '2019-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunPreTrainServiceNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunPreTrainServiceNewRequest $request
     *
     * @return RunPreTrainServiceNewResponse
     */
    public function runPreTrainServiceNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runPreTrainServiceNewWithOptions($request, $runtime);
    }
}
