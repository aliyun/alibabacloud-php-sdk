<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateAsyncPredictRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateAsyncPredictResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateDatasetRecordRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateDatasetRecordResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateModelResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateModelShrinkRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\DeleteModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\DeployModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\DeployModelResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetAsyncPredictRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetAsyncPredictResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetModelRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetModelResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetPredictResultRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\GetPredictResultResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\ListDatasetRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\ListDatasetResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\ListModelsRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\ListModelsResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunPreTrainServiceResponse;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunSmartCallServiceRequest;
use AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunSmartCallServiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAsyncPredictResponse::fromMap($this->doRPCRequest('CreateAsyncPredict', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDatasetResponse::fromMap($this->doRPCRequest('CreateDataset', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @param CreateDatasetRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDatasetRecordResponse
     */
    public function createDatasetRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDatasetRecordResponse::fromMap($this->doRPCRequest('CreateDatasetRecord', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDatasetRecordRequest $request
     *
     * @return CreateDatasetRecordResponse
     */
    public function createDatasetRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateModelRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateModelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->datasetIdList)) {
            $request->datasetIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->datasetIdList, 'DatasetIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->testDatasetIdList)) {
            $request->testDatasetIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->testDatasetIdList, 'TestDatasetIdList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateModelResponse::fromMap($this->doRPCRequest('CreateModel', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteModelResponse::fromMap($this->doRPCRequest('DeleteModel', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @param DeployModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeployModelResponse
     */
    public function deployModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployModelResponse::fromMap($this->doRPCRequest('DeployModel', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployModelRequest $request
     *
     * @return DeployModelResponse
     */
    public function deployModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployModelWithOptions($request, $runtime);
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
            'query' => $query,
        ]);

        return GetAsyncPredictResponse::fromMap($this->doRPCRequest('GetAsyncPredict', '2019-11-11', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param GetModelRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetModelResponse
     */
    public function getModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetModelResponse::fromMap($this->doRPCRequest('GetModel', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetModelRequest $request
     *
     * @return GetModelResponse
     */
    public function getModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPredictResultResponse::fromMap($this->doRPCRequest('GetPredictResult', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListDatasetRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListDatasetResponse
     */
    public function listDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDatasetResponse::fromMap($this->doRPCRequest('ListDataset', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDatasetRequest $request
     *
     * @return ListDatasetResponse
     */
    public function listDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetWithOptions($request, $runtime);
    }

    /**
     * @param ListModelsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListModelsResponse::fromMap($this->doRPCRequest('ListModels', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsWithOptions($request, $runtime);
    }

    /**
     * @param RunContactReviewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunContactReviewResponse
     */
    public function runContactReviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunContactReviewResponse::fromMap($this->doRPCRequest('RunContactReview', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RunContactReviewRequest $request
     *
     * @return RunContactReviewResponse
     */
    public function runContactReview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runContactReviewWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunPreTrainServiceResponse::fromMap($this->doRPCRequest('RunPreTrainService', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RunSmartCallServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RunSmartCallServiceResponse
     */
    public function runSmartCallServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunSmartCallServiceResponse::fromMap($this->doRPCRequest('RunSmartCallService', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RunSmartCallServiceRequest $request
     *
     * @return RunSmartCallServiceResponse
     */
    public function runSmartCallService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSmartCallServiceWithOptions($request, $runtime);
    }
}
