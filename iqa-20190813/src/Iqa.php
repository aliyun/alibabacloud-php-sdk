<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Iqa\V20190813\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DeployServiceRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DeployServiceResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DescribeProjectRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\DescribeProjectResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\GetPredictResultRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\GetPredictResultResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\ModifiyProjectRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\ModifiyProjectResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\UploadDictionaryRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\UploadDictionaryResponse;
use AlibabaCloud\SDK\Iqa\V20190813\Models\UploadDocumentRequest;
use AlibabaCloud\SDK\Iqa\V20190813\Models\UploadDocumentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Iqa extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iqa', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeployServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeployServiceResponse
     */
    public function deployServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployServiceResponse::fromMap($this->doRPCRequest('DeployService', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployServiceRequest $request
     *
     * @return DeployServiceResponse
     */
    public function deployService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
     */
    public function describeProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProjectResponse::fromMap($this->doRPCRequest('DescribeProject', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProjectRequest $request
     *
     * @return DescribeProjectResponse
     */
    public function describeProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectWithOptions($request, $runtime);
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

        return GetPredictResultResponse::fromMap($this->doRPCRequest('GetPredictResult', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectsResponse::fromMap($this->doRPCRequest('ListProjects', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * @param ModifiyProjectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifiyProjectResponse
     */
    public function modifiyProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifiyProjectResponse::fromMap($this->doRPCRequest('ModifiyProject', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifiyProjectRequest $request
     *
     * @return ModifiyProjectResponse
     */
    public function modifiyProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifiyProjectWithOptions($request, $runtime);
    }

    /**
     * @param UploadDictionaryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadDictionaryResponse
     */
    public function uploadDictionaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadDictionaryResponse::fromMap($this->doRPCRequest('UploadDictionary', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadDictionaryRequest $request
     *
     * @return UploadDictionaryResponse
     */
    public function uploadDictionary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDictionaryWithOptions($request, $runtime);
    }

    /**
     * @param UploadDocumentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadDocumentResponse::fromMap($this->doRPCRequest('UploadDocument', '2019-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadDocumentRequest $request
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDocumentWithOptions($request, $runtime);
    }
}
