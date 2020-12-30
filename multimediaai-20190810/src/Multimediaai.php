<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateCoverTaskRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateCoverTaskResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateFaceGroupRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateFaceGroupResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateFacePersonRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateFacePersonResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateGifTaskRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateGifTaskResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateLabelTaskRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateLabelTaskResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFaceGroupRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFaceGroupResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFaceImageRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFaceImageResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFacePersonRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\DeleteFacePersonResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceGroupsRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceGroupsResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceImagesRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceImagesResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFacePersonsRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFacePersonsResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessFaceAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessFaceAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessImageTagAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessImageTagAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessLandmarkAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessLandmarkAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessLogoAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessLogoAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessNewsAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessNewsAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessNlpAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessNlpAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessOcrAlgorithmRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ProcessOcrAlgorithmResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\RegisterFaceImageRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\RegisterFaceImageResponse;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\Multimediaai\V20190810\Models\UpdateTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Multimediaai extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('multimediaai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCoverTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCoverTaskResponse
     */
    public function createCoverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCoverTaskResponse::fromMap($this->doRPCRequest('CreateCoverTask', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCoverTaskRequest $request
     *
     * @return CreateCoverTaskResponse
     */
    public function createCoverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCoverTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFaceGroupResponse
     */
    public function createFaceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFaceGroupResponse::fromMap($this->doRPCRequest('CreateFaceGroup', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFaceGroupRequest $request
     *
     * @return CreateFaceGroupResponse
     */
    public function createFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateFacePersonRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFacePersonResponse
     */
    public function createFacePersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFacePersonResponse::fromMap($this->doRPCRequest('CreateFacePerson', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFacePersonRequest $request
     *
     * @return CreateFacePersonResponse
     */
    public function createFacePerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFacePersonWithOptions($request, $runtime);
    }

    /**
     * @param CreateGifTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGifTaskResponse
     */
    public function createGifTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGifTaskResponse::fromMap($this->doRPCRequest('CreateGifTask', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGifTaskRequest $request
     *
     * @return CreateGifTaskResponse
     */
    public function createGifTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGifTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateLabelTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateLabelTaskResponse
     */
    public function createLabelTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLabelTaskResponse::fromMap($this->doRPCRequest('CreateLabelTask', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLabelTaskRequest $request
     *
     * @return CreateLabelTaskResponse
     */
    public function createLabelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabelTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTemplateResponse::fromMap($this->doRPCRequest('CreateTemplate', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceGroupResponse::fromMap($this->doRPCRequest('DeleteFaceGroup', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceGroupRequest $request
     *
     * @return DeleteFaceGroupResponse
     */
    public function deleteFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFaceImageResponse
     */
    public function deleteFaceImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceImageResponse::fromMap($this->doRPCRequest('DeleteFaceImage', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceImageRequest $request
     *
     * @return DeleteFaceImageResponse
     */
    public function deleteFaceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFacePersonRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFacePersonResponse
     */
    public function deleteFacePersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFacePersonResponse::fromMap($this->doRPCRequest('DeleteFacePerson', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFacePersonRequest $request
     *
     * @return DeleteFacePersonResponse
     */
    public function deleteFacePerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFacePersonWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskResultResponse::fromMap($this->doRPCRequest('GetTaskResult', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskStatusResponse::fromMap($this->doRPCRequest('GetTaskStatus', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTemplateResponse::fromMap($this->doRPCRequest('GetTemplate', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListFaceGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListFaceGroupsResponse
     */
    public function listFaceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFaceGroupsResponse::fromMap($this->doRPCRequest('ListFaceGroups', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFaceGroupsRequest $request
     *
     * @return ListFaceGroupsResponse
     */
    public function listFaceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListFaceImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListFaceImagesResponse
     */
    public function listFaceImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFaceImagesResponse::fromMap($this->doRPCRequest('ListFaceImages', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFaceImagesRequest $request
     *
     * @return ListFaceImagesResponse
     */
    public function listFaceImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListFacePersonsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFacePersonsResponse
     */
    public function listFacePersonsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFacePersonsResponse::fromMap($this->doRPCRequest('ListFacePersons', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFacePersonsRequest $request
     *
     * @return ListFacePersonsResponse
     */
    public function listFacePersons($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFacePersonsWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTemplatesResponse::fromMap($this->doRPCRequest('ListTemplates', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ProcessFaceAlgorithmRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ProcessFaceAlgorithmResponse
     */
    public function processFaceAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessFaceAlgorithmResponse::fromMap($this->doRPCRequest('ProcessFaceAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessFaceAlgorithmRequest $request
     *
     * @return ProcessFaceAlgorithmResponse
     */
    public function processFaceAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processFaceAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessImageTagAlgorithmRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ProcessImageTagAlgorithmResponse
     */
    public function processImageTagAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessImageTagAlgorithmResponse::fromMap($this->doRPCRequest('ProcessImageTagAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessImageTagAlgorithmRequest $request
     *
     * @return ProcessImageTagAlgorithmResponse
     */
    public function processImageTagAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processImageTagAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessLandmarkAlgorithmRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ProcessLandmarkAlgorithmResponse
     */
    public function processLandmarkAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessLandmarkAlgorithmResponse::fromMap($this->doRPCRequest('ProcessLandmarkAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessLandmarkAlgorithmRequest $request
     *
     * @return ProcessLandmarkAlgorithmResponse
     */
    public function processLandmarkAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processLandmarkAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessLogoAlgorithmRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ProcessLogoAlgorithmResponse
     */
    public function processLogoAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessLogoAlgorithmResponse::fromMap($this->doRPCRequest('ProcessLogoAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessLogoAlgorithmRequest $request
     *
     * @return ProcessLogoAlgorithmResponse
     */
    public function processLogoAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processLogoAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessNewsAlgorithmRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ProcessNewsAlgorithmResponse
     */
    public function processNewsAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessNewsAlgorithmResponse::fromMap($this->doRPCRequest('ProcessNewsAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessNewsAlgorithmRequest $request
     *
     * @return ProcessNewsAlgorithmResponse
     */
    public function processNewsAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processNewsAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessNlpAlgorithmRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ProcessNlpAlgorithmResponse
     */
    public function processNlpAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessNlpAlgorithmResponse::fromMap($this->doRPCRequest('ProcessNlpAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessNlpAlgorithmRequest $request
     *
     * @return ProcessNlpAlgorithmResponse
     */
    public function processNlpAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processNlpAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param ProcessOcrAlgorithmRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ProcessOcrAlgorithmResponse
     */
    public function processOcrAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ProcessOcrAlgorithmResponse::fromMap($this->doRPCRequest('ProcessOcrAlgorithm', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ProcessOcrAlgorithmRequest $request
     *
     * @return ProcessOcrAlgorithmResponse
     */
    public function processOcrAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->processOcrAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param RegisterFaceImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RegisterFaceImageResponse
     */
    public function registerFaceImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterFaceImageResponse::fromMap($this->doRPCRequest('RegisterFaceImage', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterFaceImageRequest $request
     *
     * @return RegisterFaceImageResponse
     */
    public function registerFaceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerFaceImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTemplateResponse::fromMap($this->doRPCRequest('UpdateTemplate', '2019-08-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }
}
