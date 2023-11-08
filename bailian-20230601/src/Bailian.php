<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CancelFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CancelFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateFineTuneJobShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTokenRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTokenResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteEnterpriseDataRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteEnterpriseDataResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeServiceRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataByDataIdRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataByDataIdResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataChunkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataChunkResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataPageImageRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataPageImageResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataParseResultRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetEnterpriseDataParseResultResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetImportTaskResultRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetImportTaskResultResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportEnterpriseDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportEnterpriseDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportEnterpriseDocumentShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListServicesRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListServicesResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\QueryEnterpriseDataListRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\QueryEnterpriseDataListResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\QueryEnterpriseDataListShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SearchEnterpriseDataRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SearchEnterpriseDataResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SearchEnterpriseDataShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Bailian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelFineTuneJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelFineTuneJobResponse
     */
    public function cancelFineTuneJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelFineTuneJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelFineTuneJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelFineTuneJobRequest $request
     *
     * @return CancelFineTuneJobResponse
     */
    public function cancelFineTuneJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFineTuneJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateFineTuneJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFineTuneJobResponse
     */
    public function createFineTuneJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFineTuneJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hyperParameters)) {
            $request->hyperParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hyperParameters, 'HyperParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->trainingFiles)) {
            $request->trainingFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->trainingFiles, 'TrainingFiles', 'json');
        }
        if (!Utils::isUnset($tmpReq->validationFiles)) {
            $request->validationFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->validationFiles, 'ValidationFiles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->baseModel)) {
            $body['BaseModel'] = $request->baseModel;
        }
        if (!Utils::isUnset($request->hyperParametersShrink)) {
            $body['HyperParameters'] = $request->hyperParametersShrink;
        }
        if (!Utils::isUnset($request->modelName)) {
            $body['ModelName'] = $request->modelName;
        }
        if (!Utils::isUnset($request->trainingFilesShrink)) {
            $body['TrainingFiles'] = $request->trainingFilesShrink;
        }
        if (!Utils::isUnset($request->trainingType)) {
            $body['TrainingType'] = $request->trainingType;
        }
        if (!Utils::isUnset($request->validationFilesShrink)) {
            $body['ValidationFiles'] = $request->validationFilesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFineTuneJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFineTuneJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFineTuneJobRequest $request
     *
     * @return CreateFineTuneJobResponse
     */
    public function createFineTuneJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFineTuneJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateTextEmbeddingsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTextEmbeddingsResponse
     */
    public function createTextEmbeddingsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTextEmbeddingsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->textType)) {
            $query['TextType'] = $request->textType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTextEmbeddings',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTextEmbeddingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTextEmbeddingsRequest $request
     *
     * @return CreateTextEmbeddingsResponse
     */
    public function createTextEmbeddings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTextEmbeddingsWithOptions($request, $runtime);
    }

    /**
     * @param CreateTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateToken',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTokenRequest $request
     *
     * @return CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEnterpriseDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEnterpriseDataResponse
     */
    public function deleteEnterpriseDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnterpriseData',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnterpriseDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEnterpriseDataRequest $request
     *
     * @return DeleteEnterpriseDataResponse
     */
    public function deleteEnterpriseData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseDataWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFineTuneJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFineTuneJobResponse
     */
    public function deleteFineTuneJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFineTuneJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFineTuneJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFineTuneJobRequest $request
     *
     * @return DeleteFineTuneJobResponse
     */
    public function deleteFineTuneJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFineTuneJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->modelServiceId)) {
            $body['ModelServiceId'] = $request->modelServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFineTuneJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFineTuneJobResponse
     */
    public function describeFineTuneJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFineTuneJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFineTuneJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFineTuneJobRequest $request
     *
     * @return DescribeFineTuneJobResponse
     */
    public function describeFineTuneJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFineTuneJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->modelServiceId)) {
            $body['ModelServiceId'] = $request->modelServiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeService',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceRequest $request
     *
     * @return DescribeServiceResponse
     */
    public function describeService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDataByDataIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetEnterpriseDataByDataIdResponse
     */
    public function getEnterpriseDataByDataIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDataByDataId',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDataByDataIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnterpriseDataByDataIdRequest $request
     *
     * @return GetEnterpriseDataByDataIdResponse
     */
    public function getEnterpriseDataByDataId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDataByDataIdWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDataChunkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetEnterpriseDataChunkResponse
     */
    public function getEnterpriseDataChunkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDataChunk',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDataChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnterpriseDataChunkRequest $request
     *
     * @return GetEnterpriseDataChunkResponse
     */
    public function getEnterpriseDataChunk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDataChunkWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDataPageImageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEnterpriseDataPageImageResponse
     */
    public function getEnterpriseDataPageImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDataPageImage',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDataPageImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnterpriseDataPageImageRequest $request
     *
     * @return GetEnterpriseDataPageImageResponse
     */
    public function getEnterpriseDataPageImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDataPageImageWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDataParseResultRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetEnterpriseDataParseResultResponse
     */
    public function getEnterpriseDataParseResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDataParseResult',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDataParseResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnterpriseDataParseResultRequest $request
     *
     * @return GetEnterpriseDataParseResultResponse
     */
    public function getEnterpriseDataParseResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDataParseResultWithOptions($request, $runtime);
    }

    /**
     * @param GetImportTaskResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetImportTaskResultResponse
     */
    public function getImportTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImportTaskResult',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImportTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetImportTaskResultRequest $request
     *
     * @return GetImportTaskResultResponse
     */
    public function getImportTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImportTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param ImportEnterpriseDocumentRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportEnterpriseDocumentResponse
     */
    public function importEnterpriseDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportEnterpriseDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documentList)) {
            $request->documentListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentList, 'DocumentList', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->documentListShrink)) {
            $query['DocumentList'] = $request->documentListShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->storeId)) {
            $query['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportEnterpriseDocument',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportEnterpriseDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportEnterpriseDocumentRequest $request
     *
     * @return ImportEnterpriseDocumentResponse
     */
    public function importEnterpriseDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importEnterpriseDocumentWithOptions($request, $runtime);
    }

    /**
     * @param ListFineTuneJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFineTuneJobsResponse
     */
    public function listFineTuneJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFineTuneJobs',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFineTuneJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFineTuneJobsRequest $request
     *
     * @return ListFineTuneJobsResponse
     */
    public function listFineTuneJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFineTuneJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentKey)) {
            $body['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @param QueryEnterpriseDataListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryEnterpriseDataListResponse
     */
    public function queryEnterpriseDataListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryEnterpriseDataListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataName)) {
            $query['DataName'] = $request->dataName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->storeType)) {
            $query['StoreType'] = $request->storeType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEnterpriseDataList',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEnterpriseDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEnterpriseDataListRequest $request
     *
     * @return QueryEnterpriseDataListResponse
     */
    public function queryEnterpriseDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEnterpriseDataListWithOptions($request, $runtime);
    }

    /**
     * @param SearchEnterpriseDataRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEnterpriseDataResponse
     */
    public function searchEnterpriseDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchEnterpriseDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataIdList)) {
            $request->dataIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataIdList, 'DataIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->tagIdList)) {
            $request->tagIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagIdList, 'TagIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataIdListShrink)) {
            $query['DataIdList'] = $request->dataIdListShrink;
        }
        if (!Utils::isUnset($request->enableRank)) {
            $query['EnableRank'] = $request->enableRank;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->storeId)) {
            $query['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->tagIdListShrink)) {
            $query['TagIdList'] = $request->tagIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEnterpriseData',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchEnterpriseDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchEnterpriseDataRequest $request
     *
     * @return SearchEnterpriseDataResponse
     */
    public function searchEnterpriseData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEnterpriseDataWithOptions($request, $runtime);
    }
}
