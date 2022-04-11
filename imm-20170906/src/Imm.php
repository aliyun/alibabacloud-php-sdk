<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CompareImageFacesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\ConvertOfficeFormatRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\ConvertOfficeFormatResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGrabFrameTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGrabFrameTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGroupFacesJobRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateGroupFacesJobResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMergeFaceGroupsJobRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateMergeFaceGroupsJobResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateOfficeConversionTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateOfficeConversionTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateSetResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoCompressTaskRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\CreateVideoCompressTaskResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DecodeBlindWatermarkRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DecodeBlindWatermarkResponse;
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
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageBodiesResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageFacesRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\DetectImageFacesResponse;
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
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficePreviewTokenRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshOfficePreviewTokenResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshWebofficeTokenRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\RefreshWebofficeTokenResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateFaceGroupRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateFaceGroupResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateImageShrinkRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateSetRequest;
use AlibabaCloud\SDK\Imm\V20170906\Models\UpdateSetResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->faceIdA)) {
            $query['FaceIdA'] = $request->faceIdA;
        }
        if (!Utils::isUnset($request->faceIdB)) {
            $query['FaceIdB'] = $request->faceIdB;
        }
        if (!Utils::isUnset($request->imageUriA)) {
            $query['ImageUriA'] = $request->imageUriA;
        }
        if (!Utils::isUnset($request->imageUriB)) {
            $query['ImageUriB'] = $request->imageUriB;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompareImageFaces',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompareImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->endPage)) {
            $query['EndPage'] = $request->endPage;
        }
        if (!Utils::isUnset($request->fitToPagesTall)) {
            $query['FitToPagesTall'] = $request->fitToPagesTall;
        }
        if (!Utils::isUnset($request->fitToPagesWide)) {
            $query['FitToPagesWide'] = $request->fitToPagesWide;
        }
        if (!Utils::isUnset($request->hidecomments)) {
            $query['Hidecomments'] = $request->hidecomments;
        }
        if (!Utils::isUnset($request->maxSheetCol)) {
            $query['MaxSheetCol'] = $request->maxSheetCol;
        }
        if (!Utils::isUnset($request->maxSheetCount)) {
            $query['MaxSheetCount'] = $request->maxSheetCount;
        }
        if (!Utils::isUnset($request->maxSheetRow)) {
            $query['MaxSheetRow'] = $request->maxSheetRow;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->pdfVector)) {
            $query['PdfVector'] = $request->pdfVector;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->sheetOnePage)) {
            $query['SheetOnePage'] = $request->sheetOnePage;
        }
        if (!Utils::isUnset($request->srcType)) {
            $query['SrcType'] = $request->srcType;
        }
        if (!Utils::isUnset($request->srcUri)) {
            $query['SrcUri'] = $request->srcUri;
        }
        if (!Utils::isUnset($request->startPage)) {
            $query['StartPage'] = $request->startPage;
        }
        if (!Utils::isUnset($request->tgtFilePages)) {
            $query['TgtFilePages'] = $request->tgtFilePages;
        }
        if (!Utils::isUnset($request->tgtFilePrefix)) {
            $query['TgtFilePrefix'] = $request->tgtFilePrefix;
        }
        if (!Utils::isUnset($request->tgtFileSuffix)) {
            $query['TgtFileSuffix'] = $request->tgtFileSuffix;
        }
        if (!Utils::isUnset($request->tgtType)) {
            $query['TgtType'] = $request->tgtType;
        }
        if (!Utils::isUnset($request->tgtUri)) {
            $query['TgtUri'] = $request->tgtUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConvertOfficeFormat',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertOfficeFormatResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->customMessage)) {
            $query['CustomMessage'] = $request->customMessage;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->targetList)) {
            $query['TargetList'] = $request->targetList;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGrabFrameTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGrabFrameTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupFacesJob',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupFacesJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateMergeFaceGroupsJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMergeFaceGroupsJobResponse
     */
    public function createMergeFaceGroupsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customMessage)) {
            $query['CustomMessage'] = $request->customMessage;
        }
        if (!Utils::isUnset($request->groupIdFrom)) {
            $query['GroupIdFrom'] = $request->groupIdFrom;
        }
        if (!Utils::isUnset($request->groupIdTo)) {
            $query['GroupIdTo'] = $request->groupIdTo;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMergeFaceGroupsJob',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMergeFaceGroupsJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->displayDpi)) {
            $query['DisplayDpi'] = $request->displayDpi;
        }
        if (!Utils::isUnset($request->endPage)) {
            $query['EndPage'] = $request->endPage;
        }
        if (!Utils::isUnset($request->fitToPagesTall)) {
            $query['FitToPagesTall'] = $request->fitToPagesTall;
        }
        if (!Utils::isUnset($request->fitToPagesWide)) {
            $query['FitToPagesWide'] = $request->fitToPagesWide;
        }
        if (!Utils::isUnset($request->hidecomments)) {
            $query['Hidecomments'] = $request->hidecomments;
        }
        if (!Utils::isUnset($request->idempotentToken)) {
            $query['IdempotentToken'] = $request->idempotentToken;
        }
        if (!Utils::isUnset($request->maxSheetCol)) {
            $query['MaxSheetCol'] = $request->maxSheetCol;
        }
        if (!Utils::isUnset($request->maxSheetCount)) {
            $query['MaxSheetCount'] = $request->maxSheetCount;
        }
        if (!Utils::isUnset($request->maxSheetRow)) {
            $query['MaxSheetRow'] = $request->maxSheetRow;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->pdfVector)) {
            $query['PdfVector'] = $request->pdfVector;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->sheetOnePage)) {
            $query['SheetOnePage'] = $request->sheetOnePage;
        }
        if (!Utils::isUnset($request->srcType)) {
            $query['SrcType'] = $request->srcType;
        }
        if (!Utils::isUnset($request->srcUri)) {
            $query['SrcUri'] = $request->srcUri;
        }
        if (!Utils::isUnset($request->startPage)) {
            $query['StartPage'] = $request->startPage;
        }
        if (!Utils::isUnset($request->tgtFilePages)) {
            $query['TgtFilePages'] = $request->tgtFilePages;
        }
        if (!Utils::isUnset($request->tgtFilePrefix)) {
            $query['TgtFilePrefix'] = $request->tgtFilePrefix;
        }
        if (!Utils::isUnset($request->tgtFileSuffix)) {
            $query['TgtFileSuffix'] = $request->tgtFileSuffix;
        }
        if (!Utils::isUnset($request->tgtType)) {
            $query['TgtType'] = $request->tgtType;
        }
        if (!Utils::isUnset($request->tgtUri)) {
            $query['TgtUri'] = $request->tgtUri;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOfficeConversionTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->setName)) {
            $query['SetName'] = $request->setName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSet',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSetResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateVideoCompressTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVideoCompressTaskResponse
     */
    public function createVideoCompressTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customMessage)) {
            $query['CustomMessage'] = $request->customMessage;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->targetList)) {
            $query['TargetList'] = $request->targetList;
        }
        if (!Utils::isUnset($request->targetSegment)) {
            $query['TargetSegment'] = $request->targetSegment;
        }
        if (!Utils::isUnset($request->targetSubtitle)) {
            $query['TargetSubtitle'] = $request->targetSubtitle;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoCompressTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoCompressTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DecodeBlindWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DecodeBlindWatermarkResponse
     */
    public function decodeBlindWatermarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageQuality)) {
            $query['ImageQuality'] = $request->imageQuality;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->originalImageUri)) {
            $query['OriginalImageUri'] = $request->originalImageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->targetUri)) {
            $query['TargetUri'] = $request->targetUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecodeBlindWatermark',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DecodeBlindWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteOfficeConversionTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteOfficeConversionTaskResponse
     */
    public function deleteOfficeConversionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOfficeConversionTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSet',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSetResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideo',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVideoTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetectImageBodiesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectImageBodiesResponse
     */
    public function detectImageBodiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageBodies',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageBodiesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageFaces',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageFacesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetectImageQRCodesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetectImageQRCodesResponse
     */
    public function detectImageQRCodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageQRCodes',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageQRCodesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectImageTags',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectImageTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->srcUris)) {
            $query['SrcUris'] = $request->srcUris;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectQRCodes',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectQRCodesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->imageQuality)) {
            $query['ImageQuality'] = $request->imageQuality;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->targetImageType)) {
            $query['TargetImageType'] = $request->targetImageType;
        }
        if (!Utils::isUnset($request->targetUri)) {
            $query['TargetUri'] = $request->targetUri;
        }
        if (!Utils::isUnset($request->watermarkUri)) {
            $query['WatermarkUri'] = $request->watermarkUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EncodeBlindWatermark',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EncodeBlindWatermarkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->addressLineContentsMatch)) {
            $query['AddressLineContentsMatch'] = $request->addressLineContentsMatch;
        }
        if (!Utils::isUnset($request->ageRange)) {
            $query['AgeRange'] = $request->ageRange;
        }
        if (!Utils::isUnset($request->createTimeRange)) {
            $query['CreateTimeRange'] = $request->createTimeRange;
        }
        if (!Utils::isUnset($request->emotion)) {
            $query['Emotion'] = $request->emotion;
        }
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->facesModifyTimeRange)) {
            $query['FacesModifyTimeRange'] = $request->facesModifyTimeRange;
        }
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->imageSizeRange)) {
            $query['ImageSizeRange'] = $request->imageSizeRange;
        }
        if (!Utils::isUnset($request->imageTimeRange)) {
            $query['ImageTimeRange'] = $request->imageTimeRange;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->locationBoundary)) {
            $query['LocationBoundary'] = $request->locationBoundary;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->modifyTimeRange)) {
            $query['ModifyTimeRange'] = $request->modifyTimeRange;
        }
        if (!Utils::isUnset($request->OCRContentsMatch)) {
            $query['OCRContentsMatch'] = $request->OCRContentsMatch;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksAPrefix)) {
            $query['RemarksAPrefix'] = $request->remarksAPrefix;
        }
        if (!Utils::isUnset($request->remarksArrayAIn)) {
            $query['RemarksArrayAIn'] = $request->remarksArrayAIn;
        }
        if (!Utils::isUnset($request->remarksArrayBIn)) {
            $query['RemarksArrayBIn'] = $request->remarksArrayBIn;
        }
        if (!Utils::isUnset($request->remarksBPrefix)) {
            $query['RemarksBPrefix'] = $request->remarksBPrefix;
        }
        if (!Utils::isUnset($request->remarksCPrefix)) {
            $query['RemarksCPrefix'] = $request->remarksCPrefix;
        }
        if (!Utils::isUnset($request->remarksDPrefix)) {
            $query['RemarksDPrefix'] = $request->remarksDPrefix;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceUriPrefix)) {
            $query['SourceUriPrefix'] = $request->sourceUriPrefix;
        }
        if (!Utils::isUnset($request->tagNames)) {
            $query['TagNames'] = $request->tagNames;
        }
        if (!Utils::isUnset($request->tagsModifyTimeRange)) {
            $query['TagsModifyTimeRange'] = $request->tagsModifyTimeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindImages',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindImagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->faceId)) {
            $query['FaceId'] = $request->faceId;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->minSimilarity)) {
            $query['MinSimilarity'] = $request->minSimilarity;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->responseFormat)) {
            $query['ResponseFormat'] = $request->responseFormat;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindSimilarFaces',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindSimilarFacesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aspectRatios)) {
            $query['AspectRatios'] = $request->aspectRatios;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageCroppingSuggestions',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageCroppingSuggestionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImageQuality',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageQualityResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mediaUri)) {
            $query['MediaUri'] = $request->mediaUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaMeta',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaMetaResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOfficeConversionTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetOfficePreviewURLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOfficePreviewURLResponse
     */
    public function getOfficePreviewURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->srcType)) {
            $query['SrcType'] = $request->srcType;
        }
        if (!Utils::isUnset($request->srcUri)) {
            $query['SrcUri'] = $request->srcUri;
        }
        if (!Utils::isUnset($request->watermarkFillStyle)) {
            $query['WatermarkFillStyle'] = $request->watermarkFillStyle;
        }
        if (!Utils::isUnset($request->watermarkFont)) {
            $query['WatermarkFont'] = $request->watermarkFont;
        }
        if (!Utils::isUnset($request->watermarkHorizontal)) {
            $query['WatermarkHorizontal'] = $request->watermarkHorizontal;
        }
        if (!Utils::isUnset($request->watermarkRotate)) {
            $query['WatermarkRotate'] = $request->watermarkRotate;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $query['WatermarkType'] = $request->watermarkType;
        }
        if (!Utils::isUnset($request->watermarkValue)) {
            $query['WatermarkValue'] = $request->watermarkValue;
        }
        if (!Utils::isUnset($request->watermarkVertical)) {
            $query['WatermarkVertical'] = $request->watermarkVertical;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOfficePreviewURL',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOfficePreviewURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSet',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSetResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideo',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVideoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->file)) {
            $query['File'] = $request->file;
        }
        if (!Utils::isUnset($request->fileID)) {
            $query['FileID'] = $request->fileID;
        }
        if (!Utils::isUnset($request->hidecmb)) {
            $query['Hidecmb'] = $request->hidecmb;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->permission)) {
            $query['Permission'] = $request->permission;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->srcType)) {
            $query['SrcType'] = $request->srcType;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        if (!Utils::isUnset($request->watermark)) {
            $query['Watermark'] = $request->watermark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWebofficeURL',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebofficeURLResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksA)) {
            $query['RemarksA'] = $request->remarksA;
        }
        if (!Utils::isUnset($request->remarksArrayA)) {
            $query['RemarksArrayA'] = $request->remarksArrayA;
        }
        if (!Utils::isUnset($request->remarksArrayB)) {
            $query['RemarksArrayB'] = $request->remarksArrayB;
        }
        if (!Utils::isUnset($request->remarksB)) {
            $query['RemarksB'] = $request->remarksB;
        }
        if (!Utils::isUnset($request->remarksC)) {
            $query['RemarksC'] = $request->remarksC;
        }
        if (!Utils::isUnset($request->remarksD)) {
            $query['RemarksD'] = $request->remarksD;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->sourcePosition)) {
            $query['SourcePosition'] = $request->sourcePosition;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceUri)) {
            $query['SourceUri'] = $request->sourceUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IndexImage',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IndexImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->notifyEndpoint)) {
            $query['NotifyEndpoint'] = $request->notifyEndpoint;
        }
        if (!Utils::isUnset($request->notifyTopicName)) {
            $query['NotifyTopicName'] = $request->notifyTopicName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksA)) {
            $query['RemarksA'] = $request->remarksA;
        }
        if (!Utils::isUnset($request->remarksB)) {
            $query['RemarksB'] = $request->remarksB;
        }
        if (!Utils::isUnset($request->remarksC)) {
            $query['RemarksC'] = $request->remarksC;
        }
        if (!Utils::isUnset($request->remarksD)) {
            $query['RemarksD'] = $request->remarksD;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->tgtUri)) {
            $query['TgtUri'] = $request->tgtUri;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IndexVideo',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IndexVideoResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksAQuery)) {
            $query['RemarksAQuery'] = $request->remarksAQuery;
        }
        if (!Utils::isUnset($request->remarksArrayAQuery)) {
            $query['RemarksArrayAQuery'] = $request->remarksArrayAQuery;
        }
        if (!Utils::isUnset($request->remarksArrayBQuery)) {
            $query['RemarksArrayBQuery'] = $request->remarksArrayBQuery;
        }
        if (!Utils::isUnset($request->remarksBQuery)) {
            $query['RemarksBQuery'] = $request->remarksBQuery;
        }
        if (!Utils::isUnset($request->remarksCQuery)) {
            $query['RemarksCQuery'] = $request->remarksCQuery;
        }
        if (!Utils::isUnset($request->remarksDQuery)) {
            $query['RemarksDQuery'] = $request->remarksDQuery;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFaceGroups',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFaceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['MaxKeys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOfficeConversionTask',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOfficeConversionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['MaxKeys'] = $request->maxKeys;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSetTagsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSetTagsResponse
     */
    public function listSetTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSetTags',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSetTagsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListSetsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListSetsResponse
     */
    public function listSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSets',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSetsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListVideoAudiosRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListVideoAudiosResponse
     */
    public function listVideoAudiosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVideoAudios',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVideoAudiosResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->videoUri)) {
            $query['VideoUri'] = $request->videoUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVideoFrames',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVideoFramesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListVideoTasksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListVideoTasksResponse
     */
    public function listVideoTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['MaxKeys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVideoTasks',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVideoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListVideosRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListVideosResponse
     */
    public function listVideosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVideos',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVideosResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param OpenImmServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenImmServiceResponse
     */
    public function openImmServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenImmService',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenImmServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->serviceRole)) {
            $query['ServiceRole'] = $request->serviceRole;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutProject',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RefreshOfficePreviewTokenRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RefreshOfficePreviewTokenResponse
     */
    public function refreshOfficePreviewTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $query['RefreshToken'] = $request->refreshToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshOfficePreviewToken',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshOfficePreviewTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->refreshToken)) {
            $query['RefreshToken'] = $request->refreshToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshWebofficeToken',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshWebofficeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->groupCoverFaceId)) {
            $query['GroupCoverFaceId'] = $request->groupCoverFaceId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksA)) {
            $query['RemarksA'] = $request->remarksA;
        }
        if (!Utils::isUnset($request->remarksArrayA)) {
            $query['RemarksArrayA'] = $request->remarksArrayA;
        }
        if (!Utils::isUnset($request->remarksArrayB)) {
            $query['RemarksArrayB'] = $request->remarksArrayB;
        }
        if (!Utils::isUnset($request->remarksB)) {
            $query['RemarksB'] = $request->remarksB;
        }
        if (!Utils::isUnset($request->remarksC)) {
            $query['RemarksC'] = $request->remarksC;
        }
        if (!Utils::isUnset($request->remarksD)) {
            $query['RemarksD'] = $request->remarksD;
        }
        if (!Utils::isUnset($request->resetItems)) {
            $query['ResetItems'] = $request->resetItems;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaceGroup',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateImageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faces)) {
            $request->facesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faces, 'Faces', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->externalId)) {
            $query['ExternalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->facesShrink)) {
            $query['Faces'] = $request->facesShrink;
        }
        if (!Utils::isUnset($request->imageUri)) {
            $query['ImageUri'] = $request->imageUri;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->remarksA)) {
            $query['RemarksA'] = $request->remarksA;
        }
        if (!Utils::isUnset($request->remarksArrayA)) {
            $query['RemarksArrayA'] = $request->remarksArrayA;
        }
        if (!Utils::isUnset($request->remarksArrayB)) {
            $query['RemarksArrayB'] = $request->remarksArrayB;
        }
        if (!Utils::isUnset($request->remarksB)) {
            $query['RemarksB'] = $request->remarksB;
        }
        if (!Utils::isUnset($request->remarksC)) {
            $query['RemarksC'] = $request->remarksC;
        }
        if (!Utils::isUnset($request->remarksD)) {
            $query['RemarksD'] = $request->remarksD;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->sourcePosition)) {
            $query['SourcePosition'] = $request->sourcePosition;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->sourceUri)) {
            $query['SourceUri'] = $request->sourceUri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->newCU)) {
            $query['NewCU'] = $request->newCU;
        }
        if (!Utils::isUnset($request->newServiceRole)) {
            $query['NewServiceRole'] = $request->newServiceRole;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->setId)) {
            $query['SetId'] = $request->setId;
        }
        if (!Utils::isUnset($request->setName)) {
            $query['SetName'] = $request->setName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSet',
            'version'     => '2017-09-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSetResponse::fromMap($this->callApi($params, $req, $runtime));
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
