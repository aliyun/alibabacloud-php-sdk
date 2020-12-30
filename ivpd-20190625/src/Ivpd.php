<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessCompositionRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessCompositionResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessExposureRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessExposureResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessSharpnessRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessSharpnessResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ChangeImageSizeRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ChangeImageSizeResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectImageElementsRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectImageElementsResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectMainBodyRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\DetectMainBodyResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EnhanceFaceRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EnhanceFaceResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\EraseLogoInVideoResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ExtendImageStyleRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ExtendImageStyleResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetAsyncResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetRenderResultRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetRenderResultResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\GetUserBucketConfigResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoAdvanceRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\IntelligentCompositionRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\IntelligentCompositionResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListUserBucketsRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListUserBucketsResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\MakeSuperResolutionImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\MakeSuperResolutionImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ParseFaceRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\ParseFaceResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\PreviewModelForPackageDesignRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\PreviewModelForPackageDesignResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageStyleRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageStyleResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecolorImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecolorImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RenderImageForPackageDesignRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\RenderImageForPackageDesignResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentAnimalRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentAnimalResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentBodyRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentBodyResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentClothRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentClothResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentCommodityRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentCommodityResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentHairRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentHairResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentHeadRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentHeadResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentImageRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentImageResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentSkyRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentSkyResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentVehicleRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\SegmentVehicleResponse;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\UpdateUserBucketConfigRequest;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\UpdateUserBucketConfigResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ivpd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ivpd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AssessCompositionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssessCompositionResponse
     */
    public function assessCompositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssessCompositionResponse::fromMap($this->doRPCRequest('AssessComposition', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssessCompositionRequest $request
     *
     * @return AssessCompositionResponse
     */
    public function assessComposition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessCompositionWithOptions($request, $runtime);
    }

    /**
     * @param AssessExposureRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssessExposureResponse
     */
    public function assessExposureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssessExposureResponse::fromMap($this->doRPCRequest('AssessExposure', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssessExposureRequest $request
     *
     * @return AssessExposureResponse
     */
    public function assessExposure($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessExposureWithOptions($request, $runtime);
    }

    /**
     * @param AssessSharpnessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpnessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssessSharpnessResponse::fromMap($this->doRPCRequest('AssessSharpness', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssessSharpnessRequest $request
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessSharpnessWithOptions($request, $runtime);
    }

    /**
     * @param ChangeImageSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeImageSizeResponse::fromMap($this->doRPCRequest('ChangeImageSize', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeImageSizeRequest $request
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeImageSizeWithOptions($request, $runtime);
    }

    /**
     * @param CreateSegmentBodyJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSegmentBodyJobResponse
     */
    public function createSegmentBodyJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSegmentBodyJobResponse::fromMap($this->doRPCRequest('CreateSegmentBodyJob', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSegmentBodyJobRequest $request
     *
     * @return CreateSegmentBodyJobResponse
     */
    public function createSegmentBodyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSegmentBodyJobWithOptions($request, $runtime);
    }

    /**
     * @param DetectImageElementsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectImageElementsResponse::fromMap($this->doRPCRequest('DetectImageElements', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectImageElementsRequest $request
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElements($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageElementsWithOptions($request, $runtime);
    }

    /**
     * @param DetectMainBodyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectMainBodyResponse::fromMap($this->doRPCRequest('DetectMainBody', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectMainBodyRequest $request
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMainBodyWithOptions($request, $runtime);
    }

    /**
     * @param EnhanceFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnhanceFaceResponse::fromMap($this->doRPCRequest('EnhanceFace', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnhanceFaceRequest $request
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceFaceWithOptions($request, $runtime);
    }

    /**
     * @param EraseLogoInVideoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return EraseLogoInVideoResponse
     */
    public function eraseLogoInVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EraseLogoInVideoResponse::fromMap($this->doRPCRequest('EraseLogoInVideo', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EraseLogoInVideoRequest $request
     *
     * @return EraseLogoInVideoResponse
     */
    public function eraseLogoInVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseLogoInVideoWithOptions($request, $runtime);
    }

    /**
     * @param ExtendImageStyleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExtendImageStyleResponse::fromMap($this->doRPCRequest('ExtendImageStyle', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExtendImageStyleRequest $request
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extendImageStyleWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAsyncJobResultResponse::fromMap($this->doRPCRequest('GetAsyncJobResult', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
    }

    /**
     * @param GetAsyncResultRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAsyncResultResponse::fromMap($this->doRPCRequest('GetAsyncResult', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAsyncResultRequest $request
     *
     * @return GetAsyncResultResponse
     */
    public function getAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncResultWithOptions($request, $runtime);
    }

    /**
     * @param GetJobResultRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobResultResponse
     */
    public function getJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobResultResponse::fromMap($this->doRPCRequest('GetJobResult', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobResultRequest $request
     *
     * @return GetJobResultResponse
     */
    public function getJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobResultWithOptions($request, $runtime);
    }

    /**
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobStatusResponse::fromMap($this->doRPCRequest('GetJobStatus', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetJobStatusRequest $request
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetRenderResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRenderResultResponse
     */
    public function getRenderResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRenderResultResponse::fromMap($this->doRPCRequest('GetRenderResult', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRenderResultRequest $request
     *
     * @return GetRenderResultResponse
     */
    public function getRenderResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRenderResultWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetUserBucketConfigResponse::fromMap($this->doRPCRequest('GetUserBucketConfig', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetUserBucketConfigResponse
     */
    public function getUserBucketConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBucketConfigWithOptions($runtime);
    }

    /**
     * @param HighlightGameVideoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HighlightGameVideoResponse::fromMap($this->doRPCRequest('HighlightGameVideo', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HighlightGameVideoRequest $request
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->highlightGameVideoWithOptions($request, $runtime);
    }

    /**
     * @param HighlightGameVideoAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return HighlightGameVideoResponse
     */
    public function highlightGameVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ivpd',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = null;
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $highlightGameVideoReq = new HighlightGameVideoRequest([]);
        OpenApiUtilClient::convert($request, $highlightGameVideoReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $highlightGameVideoReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->highlightGameVideoWithOptions($highlightGameVideoReq, $runtime);
    }

    /**
     * @param IntelligentCompositionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentCompositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IntelligentCompositionResponse::fromMap($this->doRPCRequest('IntelligentComposition', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param IntelligentCompositionRequest $request
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentComposition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->intelligentCompositionWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPackageDesignModelTypesResponse
     */
    public function listPackageDesignModelTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListPackageDesignModelTypesResponse::fromMap($this->doRPCRequest('ListPackageDesignModelTypes', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListPackageDesignModelTypesResponse
     */
    public function listPackageDesignModelTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageDesignModelTypesWithOptions($runtime);
    }

    /**
     * @param ListUserBucketsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUserBucketsResponse
     */
    public function listUserBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserBucketsResponse::fromMap($this->doRPCRequest('ListUserBuckets', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserBucketsRequest $request
     *
     * @return ListUserBucketsResponse
     */
    public function listUserBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserBucketsWithOptions($request, $runtime);
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MakeSuperResolutionImageResponse::fromMap($this->doRPCRequest('MakeSuperResolutionImage', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeSuperResolutionImageWithOptions($request, $runtime);
    }

    /**
     * @param ParseFaceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ParseFaceResponse
     */
    public function parseFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ParseFaceResponse::fromMap($this->doRPCRequest('ParseFace', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ParseFaceRequest $request
     *
     * @return ParseFaceResponse
     */
    public function parseFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->parseFaceWithOptions($request, $runtime);
    }

    /**
     * @param PreviewModelForPackageDesignRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PreviewModelForPackageDesignResponse
     */
    public function previewModelForPackageDesignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PreviewModelForPackageDesignResponse::fromMap($this->doRPCRequest('PreviewModelForPackageDesign', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PreviewModelForPackageDesignRequest $request
     *
     * @return PreviewModelForPackageDesignResponse
     */
    public function previewModelForPackageDesign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewModelForPackageDesignWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageColorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeImageColorResponse::fromMap($this->doRPCRequest('RecognizeImageColor', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeImageColorRequest $request
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageColorWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeImageStyleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeImageStyleResponse::fromMap($this->doRPCRequest('RecognizeImageStyle', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeImageStyleRequest $request
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageStyleWithOptions($request, $runtime);
    }

    /**
     * @param RecolorImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecolorImageResponse
     */
    public function recolorImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecolorImageResponse::fromMap($this->doRPCRequest('RecolorImage', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecolorImageRequest $request
     *
     * @return RecolorImageResponse
     */
    public function recolorImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recolorImageWithOptions($request, $runtime);
    }

    /**
     * @param RenderImageForPackageDesignRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RenderImageForPackageDesignResponse
     */
    public function renderImageForPackageDesignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenderImageForPackageDesignResponse::fromMap($this->doRPCRequest('RenderImageForPackageDesign', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenderImageForPackageDesignRequest $request
     *
     * @return RenderImageForPackageDesignResponse
     */
    public function renderImageForPackageDesign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renderImageForPackageDesignWithOptions($request, $runtime);
    }

    /**
     * @param SegmentAnimalRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SegmentAnimalResponse
     */
    public function segmentAnimalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentAnimalResponse::fromMap($this->doRPCRequest('SegmentAnimal', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentAnimalRequest $request
     *
     * @return SegmentAnimalResponse
     */
    public function segmentAnimal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentAnimalWithOptions($request, $runtime);
    }

    /**
     * @param SegmentBodyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentBodyResponse
     */
    public function segmentBodyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentBodyResponse::fromMap($this->doRPCRequest('SegmentBody', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentBodyRequest $request
     *
     * @return SegmentBodyResponse
     */
    public function segmentBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentBodyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentClothRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SegmentClothResponse
     */
    public function segmentClothWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentClothResponse::fromMap($this->doRPCRequest('SegmentCloth', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentClothRequest $request
     *
     * @return SegmentClothResponse
     */
    public function segmentCloth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentClothWithOptions($request, $runtime);
    }

    /**
     * @param SegmentCommodityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentCommodityResponse::fromMap($this->doRPCRequest('SegmentCommodity', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentCommodityRequest $request
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentCommodityWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHairRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentHairResponse
     */
    public function segmentHairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentHairResponse::fromMap($this->doRPCRequest('SegmentHair', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentHairRequest $request
     *
     * @return SegmentHairResponse
     */
    public function segmentHair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHairWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHeadRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentHeadResponse
     */
    public function segmentHeadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentHeadResponse::fromMap($this->doRPCRequest('SegmentHead', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentHeadRequest $request
     *
     * @return SegmentHeadResponse
     */
    public function segmentHead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHeadWithOptions($request, $runtime);
    }

    /**
     * @param SegmentImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SegmentImageResponse
     */
    public function segmentImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentImageResponse::fromMap($this->doRPCRequest('SegmentImage', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentImageRequest $request
     *
     * @return SegmentImageResponse
     */
    public function segmentImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentImageWithOptions($request, $runtime);
    }

    /**
     * @param SegmentSkyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SegmentSkyResponse
     */
    public function segmentSkyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentSkyResponse::fromMap($this->doRPCRequest('SegmentSky', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentSkyRequest $request
     *
     * @return SegmentSkyResponse
     */
    public function segmentSky($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentSkyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentVehicleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SegmentVehicleResponse
     */
    public function segmentVehicleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SegmentVehicleResponse::fromMap($this->doRPCRequest('SegmentVehicle', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SegmentVehicleRequest $request
     *
     * @return SegmentVehicleResponse
     */
    public function segmentVehicle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentVehicleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserBucketConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserBucketConfigResponse
     */
    public function updateUserBucketConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserBucketConfigResponse::fromMap($this->doRPCRequest('UpdateUserBucketConfig', '2019-06-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserBucketConfigRequest $request
     *
     * @return UpdateUserBucketConfigResponse
     */
    public function updateUserBucketConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserBucketConfigWithOptions($request, $runtime);
    }
}
