<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ConvertOfficeFormatRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ConvertOfficeFormatResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGrabFrameTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGrabFrameTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGroupFacesJobRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGroupFacesJobResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateImageProcessTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateImageProcessTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMediaComplexTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMediaComplexTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMergeFaceGroupsJobRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMergeFaceGroupsJobResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateSetResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateStreamAnalyseTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateStreamAnalyseTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoAbstractTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoAbstractTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoAnalyseTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoAnalyseTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoCompressTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoCompressTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoProduceTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoProduceTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DecodeBlindWatermarkRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DecodeBlindWatermarkResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteImageJobRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteImageJobResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteSetResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteVideoRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteVideoResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteVideoTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DeleteVideoTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageFacesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageLogosRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageLogosResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageQRCodesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageQRCodesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageTagsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageTagsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectQRCodesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\EncodeBlindWatermarkRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\EncodeBlindWatermarkResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\FindSimilarFacesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetContentKeyRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetContentKeyResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetDRMLicenseRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetDRMLicenseResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageCroppingSuggestionsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageQualityRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageQualityResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetImageResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficeEditURLRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficeEditURLResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficePreviewURLRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetOfficePreviewURLResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetProjectRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetProjectResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetSetResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetVideoRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetVideoResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetVideoTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetVideoTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetWebofficeURLRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\GetWebofficeURLResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\IndexImageRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\IndexImageResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\IndexVideoRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\IndexVideoResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListProjectAPIsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListProjectAPIsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListSetsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListSetsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListSetTagsRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListSetTagsResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoAudiosResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoTasksRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoTasksResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\OpenImmServiceRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\OpenImmServiceResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\PutProjectRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\PutProjectResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficeEditTokenRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficeEditTokenResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficePreviewTokenRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficePreviewTokenResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateFaceGroupRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateFaceGroupResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateSetResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Imm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing-gov-1' => 'imm-vpc.cn-beijing-gov-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CompareImageFacesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareImageFacesResponse
     */
    public function compareImageFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompareImageFacesResponse::fromMap($this->doRPCRequest('CompareImageFaces', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CompareImageFacesRequest $request
     *
     * @return CompareImageFacesResponse
     */
    public function compareImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareImageFacesWithOptions($request, $runtime);
    }

    /**
     * @param ConvertOfficeFormatRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ConvertOfficeFormatResponse
     */
    public function convertOfficeFormatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConvertOfficeFormatResponse::fromMap($this->doRPCRequest('ConvertOfficeFormat', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConvertOfficeFormatRequest $request
     *
     * @return ConvertOfficeFormatResponse
     */
    public function convertOfficeFormat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertOfficeFormatWithOptions($request, $runtime);
    }

    /**
     * @param CreateGrabFrameTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateGrabFrameTaskResponse
     */
    public function createGrabFrameTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGrabFrameTaskResponse::fromMap($this->doRPCRequest('CreateGrabFrameTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGrabFrameTaskRequest $request
     *
     * @return CreateGrabFrameTaskResponse
     */
    public function createGrabFrameTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGrabFrameTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupFacesJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateGroupFacesJobResponse
     */
    public function createGroupFacesJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupFacesJobResponse::fromMap($this->doRPCRequest('CreateGroupFacesJob', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupFacesJobRequest $request
     *
     * @return CreateGroupFacesJobResponse
     */
    public function createGroupFacesJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupFacesJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageProcessTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateImageProcessTaskResponse
     */
    public function createImageProcessTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageProcessTaskResponse::fromMap($this->doRPCRequest('CreateImageProcessTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateImageProcessTaskRequest $request
     *
     * @return CreateImageProcessTaskResponse
     */
    public function createImageProcessTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageProcessTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateMediaComplexTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMediaComplexTaskResponse
     */
    public function createMediaComplexTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMediaComplexTaskResponse::fromMap($this->doRPCRequest('CreateMediaComplexTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMediaComplexTaskRequest $request
     *
     * @return CreateMediaComplexTaskResponse
     */
    public function createMediaComplexTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaComplexTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateMergeFaceGroupsJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMergeFaceGroupsJobResponse
     */
    public function createMergeFaceGroupsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMergeFaceGroupsJobResponse::fromMap($this->doRPCRequest('CreateMergeFaceGroupsJob', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMergeFaceGroupsJobRequest $request
     *
     * @return CreateMergeFaceGroupsJobResponse
     */
    public function createMergeFaceGroupsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMergeFaceGroupsJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateOfficeConversionTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOfficeConversionTaskResponse::fromMap($this->doRPCRequest('CreateOfficeConversionTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOfficeConversionTaskRequest $request
     *
     * @return CreateOfficeConversionTaskResponse
     */
    public function createOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOfficeConversionTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateSetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateSetResponse
     */
    public function createSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSetResponse::fromMap($this->doRPCRequest('CreateSet', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSetRequest $request
     *
     * @return CreateSetResponse
     */
    public function createSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSetWithOptions($request, $runtime);
    }

    /**
     * @param CreateStreamAnalyseTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateStreamAnalyseTaskResponse
     */
    public function createStreamAnalyseTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStreamAnalyseTaskResponse::fromMap($this->doRPCRequest('CreateStreamAnalyseTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStreamAnalyseTaskRequest $request
     *
     * @return CreateStreamAnalyseTaskResponse
     */
    public function createStreamAnalyseTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamAnalyseTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoAbstractTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVideoAbstractTaskResponse
     */
    public function createVideoAbstractTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoAbstractTaskResponse::fromMap($this->doRPCRequest('CreateVideoAbstractTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoAbstractTaskRequest $request
     *
     * @return CreateVideoAbstractTaskResponse
     */
    public function createVideoAbstractTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoAbstractTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoAnalyseTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoAnalyseTaskResponse
     */
    public function createVideoAnalyseTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoAnalyseTaskResponse::fromMap($this->doRPCRequest('CreateVideoAnalyseTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoAnalyseTaskRequest $request
     *
     * @return CreateVideoAnalyseTaskResponse
     */
    public function createVideoAnalyseTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoAnalyseTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoCompressTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVideoCompressTaskResponse
     */
    public function createVideoCompressTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoCompressTaskResponse::fromMap($this->doRPCRequest('CreateVideoCompressTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoCompressTaskRequest $request
     *
     * @return CreateVideoCompressTaskResponse
     */
    public function createVideoCompressTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoCompressTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateVideoProduceTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateVideoProduceTaskResponse
     */
    public function createVideoProduceTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVideoProduceTaskResponse::fromMap($this->doRPCRequest('CreateVideoProduceTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateVideoProduceTaskRequest $request
     *
     * @return CreateVideoProduceTaskResponse
     */
    public function createVideoProduceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoProduceTaskWithOptions($request, $runtime);
    }

    /**
     * @param DecodeBlindWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DecodeBlindWatermarkResponse
     */
    public function decodeBlindWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DecodeBlindWatermarkResponse::fromMap($this->doRPCRequest('DecodeBlindWatermark', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DecodeBlindWatermarkRequest $request
     *
     * @return DecodeBlindWatermarkResponse
     */
    public function decodeBlindWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decodeBlindWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteImageJobResponse
     */
    public function deleteImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageJobResponse::fromMap($this->doRPCRequest('DeleteImageJob', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageJobRequest $request
     *
     * @return DeleteImageJobResponse
     */
    public function deleteImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOfficeConversionTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteOfficeConversionTaskResponse
     */
    public function deleteOfficeConversionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOfficeConversionTaskResponse::fromMap($this->doRPCRequest('DeleteOfficeConversionTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOfficeConversionTaskRequest $request
     *
     * @return DeleteOfficeConversionTaskResponse
     */
    public function deleteOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOfficeConversionTaskWithOptions($request, $runtime);
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

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteSetResponse
     */
    public function deleteSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSetResponse::fromMap($this->doRPCRequest('DeleteSet', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSetRequest $request
     *
     * @return DeleteSetResponse
     */
    public function deleteSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVideoResponse::fromMap($this->doRPCRequest('DeleteVideo', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVideoRequest $request
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteVideoTaskResponse
     */
    public function deleteVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVideoTaskResponse::fromMap($this->doRPCRequest('DeleteVideoTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVideoTaskRequest $request
     *
     * @return DeleteVideoTaskResponse
     */
    public function deleteVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($runtime);
    }

    /**
     * @param DetectImageBodiesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageBodiesResponse::fromMap($this->doRPCRequest('DetectImageBodies', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageBodiesRequest $request
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageBodiesWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageFacesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageFacesResponse
     */
    public function detectImageFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageFacesResponse::fromMap($this->doRPCRequest('DetectImageFaces', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageFacesRequest $request
     *
     * @return DetectImageFacesResponse
     */
    public function detectImageFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageFacesWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageLogosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectImageLogosResponse
     */
    public function detectImageLogosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageLogosResponse::fromMap($this->doRPCRequest('DetectImageLogos', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageLogosRequest $request
     *
     * @return DetectImageLogosResponse
     */
    public function detectImageLogos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageLogosWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageQRCodesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetectImageQRCodesResponse
     */
    public function detectImageQRCodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageQRCodesResponse::fromMap($this->doRPCRequest('DetectImageQRCodes', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageQRCodesRequest $request
     *
     * @return DetectImageQRCodesResponse
     */
    public function detectImageQRCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageQRCodesWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageTagsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectImageTagsResponse
     */
    public function detectImageTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageTagsResponse::fromMap($this->doRPCRequest('DetectImageTags', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageTagsRequest $request
     *
     * @return DetectImageTagsResponse
     */
    public function detectImageTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageTagsWithOptions($request, $runtime);
    }

    /**
     * @param DetectQRCodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetectQRCodesResponse
     */
    public function detectQRCodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectQRCodesResponse::fromMap($this->doRPCRequest('DetectQRCodes', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectQRCodesRequest $request
     *
     * @return DetectQRCodesResponse
     */
    public function detectQRCodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectQRCodesWithOptions($request, $runtime);
    }

    /**
     * @param EncodeBlindWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EncodeBlindWatermarkResponse::fromMap($this->doRPCRequest('EncodeBlindWatermark', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EncodeBlindWatermarkRequest $request
     *
     * @return EncodeBlindWatermarkResponse
     */
    public function encodeBlindWatermark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encodeBlindWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param FindImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FindImagesResponse
     */
    public function findImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindImagesResponse::fromMap($this->doRPCRequest('FindImages', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindImagesRequest $request
     *
     * @return FindImagesResponse
     */
    public function findImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findImagesWithOptions($request, $runtime);
    }

    /**
     * @param FindSimilarFacesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return FindSimilarFacesResponse
     */
    public function findSimilarFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FindSimilarFacesResponse::fromMap($this->doRPCRequest('FindSimilarFaces', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FindSimilarFacesRequest $request
     *
     * @return FindSimilarFacesResponse
     */
    public function findSimilarFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findSimilarFacesWithOptions($request, $runtime);
    }

    /**
     * @param GetContentKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetContentKeyResponse
     */
    public function getContentKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetContentKeyResponse::fromMap($this->doRPCRequest('GetContentKey', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetContentKeyRequest $request
     *
     * @return GetContentKeyResponse
     */
    public function getContentKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentKeyWithOptions($request, $runtime);
    }

    /**
     * @param GetDRMLicenseRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetDRMLicenseResponse
     */
    public function getDRMLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDRMLicenseResponse::fromMap($this->doRPCRequest('GetDRMLicense', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDRMLicenseRequest $request
     *
     * @return GetDRMLicenseResponse
     */
    public function getDRMLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDRMLicenseWithOptions($request, $runtime);
    }

    /**
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageResponse::fromMap($this->doRPCRequest('GetImage', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @param GetImageCroppingSuggestionsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetImageCroppingSuggestionsResponse
     */
    public function getImageCroppingSuggestionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageCroppingSuggestionsResponse::fromMap($this->doRPCRequest('GetImageCroppingSuggestions', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImageCroppingSuggestionsRequest $request
     *
     * @return GetImageCroppingSuggestionsResponse
     */
    public function getImageCroppingSuggestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageCroppingSuggestionsWithOptions($request, $runtime);
    }

    /**
     * @param GetImageQualityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetImageQualityResponse
     */
    public function getImageQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageQualityResponse::fromMap($this->doRPCRequest('GetImageQuality', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImageQualityRequest $request
     *
     * @return GetImageQualityResponse
     */
    public function getImageQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageQualityWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaMetaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaMetaResponse
     */
    public function getMediaMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMediaMetaResponse::fromMap($this->doRPCRequest('GetMediaMeta', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMediaMetaRequest $request
     *
     * @return GetMediaMetaResponse
     */
    public function getMediaMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMetaWithOptions($request, $runtime);
    }

    /**
     * @param GetOfficeConversionTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOfficeConversionTaskResponse
     */
    public function getOfficeConversionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOfficeConversionTaskResponse::fromMap($this->doRPCRequest('GetOfficeConversionTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOfficeConversionTaskRequest $request
     *
     * @return GetOfficeConversionTaskResponse
     */
    public function getOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOfficeConversionTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetOfficeEditURLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOfficeEditURLResponse
     */
    public function getOfficeEditURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOfficeEditURLResponse::fromMap($this->doRPCRequest('GetOfficeEditURL', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOfficeEditURLRequest $request
     *
     * @return GetOfficeEditURLResponse
     */
    public function getOfficeEditURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOfficeEditURLWithOptions($request, $runtime);
    }

    /**
     * @param GetOfficePreviewURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOfficePreviewURLResponse
     */
    public function getOfficePreviewURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOfficePreviewURLResponse::fromMap($this->doRPCRequest('GetOfficePreviewURL', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOfficePreviewURLRequest $request
     *
     * @return GetOfficePreviewURLResponse
     */
    public function getOfficePreviewURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOfficePreviewURLWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectResponse::fromMap($this->doRPCRequest('GetProject', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetSetRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetSetResponse
     */
    public function getSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSetResponse::fromMap($this->doRPCRequest('GetSet', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSetRequest $request
     *
     * @return GetSetResponse
     */
    public function getSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSetWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetVideoResponse
     */
    public function getVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoResponse::fromMap($this->doRPCRequest('GetVideo', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoRequest $request
     *
     * @return GetVideoResponse
     */
    public function getVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoTaskResponse
     */
    public function getVideoTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetVideoTaskResponse::fromMap($this->doRPCRequest('GetVideoTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetVideoTaskRequest $request
     *
     * @return GetVideoTaskResponse
     */
    public function getVideoTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetWebofficeURLRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWebofficeURLResponse
     */
    public function getWebofficeURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetWebofficeURLResponse::fromMap($this->doRPCRequest('GetWebofficeURL', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetWebofficeURLRequest $request
     *
     * @return GetWebofficeURLResponse
     */
    public function getWebofficeURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebofficeURLWithOptions($request, $runtime);
    }

    /**
     * @param IndexImageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return IndexImageResponse
     */
    public function indexImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IndexImageResponse::fromMap($this->doRPCRequest('IndexImage', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IndexImageRequest $request
     *
     * @return IndexImageResponse
     */
    public function indexImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->indexImageWithOptions($request, $runtime);
    }

    /**
     * @param IndexVideoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return IndexVideoResponse
     */
    public function indexVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IndexVideoResponse::fromMap($this->doRPCRequest('IndexVideo', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IndexVideoRequest $request
     *
     * @return IndexVideoResponse
     */
    public function indexVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->indexVideoWithOptions($request, $runtime);
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

        return ListFaceGroupsResponse::fromMap($this->doRPCRequest('ListFaceGroups', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListImagesResponse::fromMap($this->doRPCRequest('ListImages', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListOfficeConversionTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListOfficeConversionTaskResponse
     */
    public function listOfficeConversionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOfficeConversionTaskResponse::fromMap($this->doRPCRequest('ListOfficeConversionTask', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOfficeConversionTaskRequest $request
     *
     * @return ListOfficeConversionTaskResponse
     */
    public function listOfficeConversionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfficeConversionTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectAPIsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListProjectAPIsResponse
     */
    public function listProjectAPIsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectAPIsResponse::fromMap($this->doRPCRequest('ListProjectAPIs', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectAPIsRequest $request
     *
     * @return ListProjectAPIsResponse
     */
    public function listProjectAPIs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectAPIsWithOptions($request, $runtime);
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

        return ListProjectsResponse::fromMap($this->doRPCRequest('ListProjects', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListSetsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListSetsResponse
     */
    public function listSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSetsResponse::fromMap($this->doRPCRequest('ListSets', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSetsRequest $request
     *
     * @return ListSetsResponse
     */
    public function listSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSetsWithOptions($request, $runtime);
    }

    /**
     * @param ListSetTagsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSetTagsResponse
     */
    public function listSetTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSetTagsResponse::fromMap($this->doRPCRequest('ListSetTags', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSetTagsRequest $request
     *
     * @return ListSetTagsResponse
     */
    public function listSetTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSetTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListVideoAudiosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListVideoAudiosResponse
     */
    public function listVideoAudiosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVideoAudiosResponse::fromMap($this->doRPCRequest('ListVideoAudios', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVideoAudiosRequest $request
     *
     * @return ListVideoAudiosResponse
     */
    public function listVideoAudios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVideoAudiosWithOptions($request, $runtime);
    }

    /**
     * @param ListVideoFramesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListVideoFramesResponse
     */
    public function listVideoFramesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVideoFramesResponse::fromMap($this->doRPCRequest('ListVideoFrames', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVideoFramesRequest $request
     *
     * @return ListVideoFramesResponse
     */
    public function listVideoFrames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVideoFramesWithOptions($request, $runtime);
    }

    /**
     * @param ListVideosRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListVideosResponse
     */
    public function listVideosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVideosResponse::fromMap($this->doRPCRequest('ListVideos', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVideosRequest $request
     *
     * @return ListVideosResponse
     */
    public function listVideos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVideosWithOptions($request, $runtime);
    }

    /**
     * @param ListVideoTasksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVideoTasksResponse
     */
    public function listVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVideoTasksResponse::fromMap($this->doRPCRequest('ListVideoTasks', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVideoTasksRequest $request
     *
     * @return ListVideoTasksResponse
     */
    public function listVideoTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVideoTasksWithOptions($request, $runtime);
    }

    /**
     * @param OpenImmServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenImmServiceResponse
     */
    public function openImmServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenImmServiceResponse::fromMap($this->doRPCRequest('OpenImmService', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenImmServiceRequest $request
     *
     * @return OpenImmServiceResponse
     */
    public function openImmService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openImmServiceWithOptions($request, $runtime);
    }

    /**
     * @param PutProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PutProjectResponse
     */
    public function putProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutProjectResponse::fromMap($this->doRPCRequest('PutProject', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutProjectRequest $request
     *
     * @return PutProjectResponse
     */
    public function putProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putProjectWithOptions($request, $runtime);
    }

    /**
     * @param RefreshOfficeEditTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshOfficeEditTokenResponse
     */
    public function refreshOfficeEditTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshOfficeEditTokenResponse::fromMap($this->doRPCRequest('RefreshOfficeEditToken', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshOfficeEditTokenRequest $request
     *
     * @return RefreshOfficeEditTokenResponse
     */
    public function refreshOfficeEditToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshOfficeEditTokenWithOptions($request, $runtime);
    }

    /**
     * @param RefreshOfficePreviewTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RefreshOfficePreviewTokenResponse
     */
    public function refreshOfficePreviewTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshOfficePreviewTokenResponse::fromMap($this->doRPCRequest('RefreshOfficePreviewToken', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshOfficePreviewTokenRequest $request
     *
     * @return RefreshOfficePreviewTokenResponse
     */
    public function refreshOfficePreviewToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshOfficePreviewTokenWithOptions($request, $runtime);
    }

    /**
     * @param RefreshWebofficeTokenRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshWebofficeTokenResponse::fromMap($this->doRPCRequest('RefreshWebofficeToken', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefreshWebofficeTokenRequest $request
     *
     * @return RefreshWebofficeTokenResponse
     */
    public function refreshWebofficeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshWebofficeTokenWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFaceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFaceGroupResponse
     */
    public function updateFaceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFaceGroupResponse::fromMap($this->doRPCRequest('UpdateFaceGroup', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFaceGroupRequest $request
     *
     * @return UpdateFaceGroupResponse
     */
    public function updateFaceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateImageResponse::fromMap($this->doRPCRequest('UpdateImage', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateSetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateSetResponse
     */
    public function updateSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSetResponse::fromMap($this->doRPCRequest('UpdateSet', '2017-09-06', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSetRequest $request
     *
     * @return UpdateSetResponse
     */
    public function updateSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSetWithOptions($request, $runtime);
    }
}
