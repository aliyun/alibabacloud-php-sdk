<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CancelFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CancelFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateDocumentTagRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateDocumentTagResponse;
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
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteDocRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteDocResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteDocumentTagRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteDocumentTagResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeDocRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeDocResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeDocumentImportJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeDocumentImportJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeFineTuneJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeFineTuneJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeServiceRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetFileStoreUploadPolicyRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetFileStoreUploadPolicyResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetPromptRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetPromptResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\GetText2ImageJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportUserDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ImportUserDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListDocsRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListDocsResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListDocsShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListDocumentTagsRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListDocumentTagsResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListFineTuneJobsResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListServicesRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\ListServicesResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\QueryUserDocumentRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\QueryUserDocumentResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SubmitDocumentImportJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SubmitDocumentImportJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SubmitText2ImageJobRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\SubmitText2ImageJobResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\UpdateDocAttributeRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\UpdateDocAttributeResponse;
use AlibabaCloud\SDK\Bailian\V20230601\Models\UpdateDocAttributeShrinkRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\UpdateDocumentTagRequest;
use AlibabaCloud\SDK\Bailian\V20230601\Models\UpdateDocumentTagResponse;
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
     * @param CreateDocumentTagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDocumentTagResponse
     */
    public function createDocumentTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDocumentTag',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDocumentTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDocumentTagRequest $request
     *
     * @return CreateDocumentTagResponse
     */
    public function createDocumentTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocumentTagWithOptions($request, $runtime);
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
     * @param DeleteDocRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteDocResponse
     */
    public function deleteDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->docId)) {
            $query['DocId'] = $request->docId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDoc',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocRequest $request
     *
     * @return DeleteDocResponse
     */
    public function deleteDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDocumentTagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDocumentTagResponse
     */
    public function deleteDocumentTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDocumentTag',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDocumentTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDocumentTagRequest $request
     *
     * @return DeleteDocumentTagResponse
     */
    public function deleteDocumentTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocumentTagWithOptions($request, $runtime);
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
     * @param DescribeDocRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeDocResponse
     */
    public function describeDocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->docId)) {
            $query['DocId'] = $request->docId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDoc',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDocRequest $request
     *
     * @return DescribeDocResponse
     */
    public function describeDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDocumentImportJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDocumentImportJobResponse
     */
    public function describeDocumentImportJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDocumentImportJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDocumentImportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDocumentImportJobRequest $request
     *
     * @return DescribeDocumentImportJobResponse
     */
    public function describeDocumentImportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocumentImportJobWithOptions($request, $runtime);
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
     * @param GetFileStoreUploadPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetFileStoreUploadPolicyResponse
     */
    public function getFileStoreUploadPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileStoreId)) {
            $query['FileStoreId'] = $request->fileStoreId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileStoreUploadPolicy',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileStoreUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFileStoreUploadPolicyRequest $request
     *
     * @return GetFileStoreUploadPolicyResponse
     */
    public function getFileStoreUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileStoreUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetPromptRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPromptResponse
     */
    public function getPromptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->promptId)) {
            $query['PromptId'] = $request->promptId;
        }
        if (!Utils::isUnset($request->vars)) {
            $query['Vars'] = $request->vars;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrompt',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPromptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPromptRequest $request
     *
     * @return GetPromptResponse
     */
    public function getPrompt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPromptWithOptions($request, $runtime);
    }

    /**
     * @param GetText2ImageJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetText2ImageJobResponse
     */
    public function getText2ImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetText2ImageJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetText2ImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetText2ImageJobRequest $request
     *
     * @return GetText2ImageJobResponse
     */
    public function getText2ImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getText2ImageJobWithOptions($request, $runtime);
    }

    /**
     * @param ImportUserDocumentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ImportUserDocumentResponse
     */
    public function importUserDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileStoreId)) {
            $query['FileStoreId'] = $request->fileStoreId;
        }
        if (!Utils::isUnset($request->ossPath)) {
            $query['OssPath'] = $request->ossPath;
        }
        if (!Utils::isUnset($request->storeId)) {
            $query['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportUserDocument',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportUserDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportUserDocumentRequest $request
     *
     * @return ImportUserDocumentResponse
     */
    public function importUserDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importUserDocumentWithOptions($request, $runtime);
    }

    /**
     * @param ListDocsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListDocsResponse
     */
    public function listDocsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDocsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tagIds)) {
            $request->tagIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagIds, 'TagIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->storeId)) {
            $query['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->tagIdsShrink)) {
            $query['TagIds'] = $request->tagIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDocs',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDocsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocsRequest $request
     *
     * @return ListDocsResponse
     */
    public function listDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocsWithOptions($request, $runtime);
    }

    /**
     * @param ListDocumentTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDocumentTagsResponse
     */
    public function listDocumentTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDocumentTags',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDocumentTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDocumentTagsRequest $request
     *
     * @return ListDocumentTagsResponse
     */
    public function listDocumentTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocumentTagsWithOptions($request, $runtime);
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
     * @param QueryUserDocumentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryUserDocumentResponse
     */
    public function queryUserDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryUserDocument',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryUserDocumentRequest $request
     *
     * @return QueryUserDocumentResponse
     */
    public function queryUserDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserDocumentWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDocumentImportJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitDocumentImportJobResponse
     */
    public function submitDocumentImportJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->docs)) {
            $query['Docs'] = $request->docs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDocumentImportJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDocumentImportJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDocumentImportJobRequest $request
     *
     * @return SubmitDocumentImportJobResponse
     */
    public function submitDocumentImportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocumentImportJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitText2ImageJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitText2ImageJobResponse
     */
    public function submitText2ImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->n)) {
            $query['N'] = $request->n;
        }
        if (!Utils::isUnset($request->negativePrompt)) {
            $query['NegativePrompt'] = $request->negativePrompt;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->seed)) {
            $query['Seed'] = $request->seed;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->style)) {
            $query['Style'] = $request->style;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitText2ImageJob',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitText2ImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitText2ImageJobRequest $request
     *
     * @return SubmitText2ImageJobResponse
     */
    public function submitText2ImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitText2ImageJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDocAttributeRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDocAttributeResponse
     */
    public function updateDocAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDocAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tagIds)) {
            $request->tagIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagIds, 'TagIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->delAllTags)) {
            $query['DelAllTags'] = $request->delAllTags;
        }
        if (!Utils::isUnset($request->docId)) {
            $query['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tagIdsShrink)) {
            $query['TagIds'] = $request->tagIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDocAttribute',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDocAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDocAttributeRequest $request
     *
     * @return UpdateDocAttributeResponse
     */
    public function updateDocAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDocAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDocumentTagRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDocumentTagResponse
     */
    public function updateDocumentTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tagId)) {
            $query['TagId'] = $request->tagId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDocumentTag',
            'version'     => '2023-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDocumentTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDocumentTagRequest $request
     *
     * @return UpdateDocumentTagResponse
     */
    public function updateDocumentTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDocumentTagWithOptions($request, $runtime);
    }
}
