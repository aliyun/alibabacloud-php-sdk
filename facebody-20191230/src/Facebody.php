<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddBodyTraceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddBodyTraceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddBodyTraceShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\AddFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BlurFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CompareFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CountCrowdAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CountCrowdRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CountCrowdResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateBodyDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateBodyDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateBodyPersonRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateBodyPersonResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\CreateFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteBodyDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteBodyDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteBodyPersonRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteBodyPersonResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DeleteFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectChefCapAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectChefCapRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectChefCapResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectIPCPedestrianResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectVideoLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\EnhanceFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttrAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttributeResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttrRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractPedestrianFeatureAttrResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceBeautyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceFilterResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceMakeupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\FaceTidyupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanAnimeStyleResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenerateHumanSketchStyleResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenRealPersonVerificationTokenRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GenRealPersonVerificationTokenResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetBodyPersonResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\GetRealPersonVerificationResultResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\LiquifyFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyDbsRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyDbsResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceDbsResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\ListFaceEntitiesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\QueryFaceImageTemplateResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeExpressionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeHandGestureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeHandGestureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeHandGestureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchBodyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchBodyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchBodyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\RetouchSkinResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceShrinkRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SwapFacialFeaturesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\SwapFacialFeaturesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\UpdateFaceEntityResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Models\VerifyFaceMaskResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Facebody extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('facebody', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddBodyTraceRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return AddBodyTraceResponse
     */
    public function addBodyTraceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddBodyTraceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->images)) {
            $request->imagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->images, 'Images', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddBodyTrace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBodyTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBodyTraceRequest $request
     *
     * @return AddBodyTraceResponse
     */
    public function addBodyTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBodyTraceWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFaceRequest $request
     *
     * @return AddFaceResponse
     */
    public function addFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceAdvanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddFaceResponse
     */
    public function addFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $addFaceReq = new AddFaceRequest([]);
        OpenApiUtilClient::convert($request, $addFaceReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageUrlObject,
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
            $addFaceReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->addFaceWithOptions($addFaceReq, $runtime);
    }

    /**
     * @param AddFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddFaceEntityResponse
     */
    public function addFaceEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddFaceEntity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFaceEntityRequest $request
     *
     * @return AddFaceEntityResponse
     */
    public function addFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceEntityWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceImageTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddFaceImageTemplate',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFaceImageTemplateRequest $request
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceImageTemplateAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddFaceImageTemplateResponse
     */
    public function addFaceImageTemplateAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $addFaceImageTemplateReq = new AddFaceImageTemplateRequest([]);
        OpenApiUtilClient::convert($request, $addFaceImageTemplateReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $addFaceImageTemplateReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->addFaceImageTemplateWithOptions($addFaceImageTemplateReq, $runtime);
    }

    /**
     * @param BatchAddFacesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return BatchAddFacesResponse
     */
    public function batchAddFacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchAddFacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->faces)) {
            $request->facesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faces, 'Faces', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchAddFaces',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddFacesRequest $request
     *
     * @return BatchAddFacesResponse
     */
    public function batchAddFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddFacesWithOptions($request, $runtime);
    }

    /**
     * @param BeautifyBodyRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return BeautifyBodyResponse
     */
    public function beautifyBodyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BeautifyBodyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ageRange)) {
            $request->ageRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->ageRange), 'AgeRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->bodyBoxes)) {
            $request->bodyBoxesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bodyBoxes, 'BodyBoxes', 'json');
        }
        if (!Utils::isUnset($tmpReq->faceList)) {
            $request->faceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->faceList, 'FaceList', 'json');
        }
        if (!Utils::isUnset($tmpReq->poseList)) {
            $request->poseListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->poseList, 'PoseList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BeautifyBody',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeautifyBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BeautifyBodyRequest $request
     *
     * @return BeautifyBodyResponse
     */
    public function beautifyBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beautifyBodyWithOptions($request, $runtime);
    }

    /**
     * @param BeautifyBodyAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BeautifyBodyResponse
     */
    public function beautifyBodyAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $beautifyBodyReq = new BeautifyBodyRequest([]);
        OpenApiUtilClient::convert($request, $beautifyBodyReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $beautifyBodyReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->beautifyBodyWithOptions($beautifyBodyReq, $runtime);
    }

    /**
     * @param BlurFaceRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return BlurFaceResponse
     */
    public function blurFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BlurFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BlurFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BlurFaceRequest $request
     *
     * @return BlurFaceResponse
     */
    public function blurFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blurFaceWithOptions($request, $runtime);
    }

    /**
     * @param BlurFaceAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BlurFaceResponse
     */
    public function blurFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $blurFaceReq = new BlurFaceRequest([]);
        OpenApiUtilClient::convert($request, $blurFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $blurFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->blurFaceWithOptions($blurFaceReq, $runtime);
    }

    /**
     * @param BodyPostureRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BodyPosture',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BodyPostureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BodyPostureRequest $request
     *
     * @return BodyPostureResponse
     */
    public function bodyPosture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bodyPostureWithOptions($request, $runtime);
    }

    /**
     * @param BodyPostureAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $bodyPostureReq = new BodyPostureRequest([]);
        OpenApiUtilClient::convert($request, $bodyPostureReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $bodyPostureReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->bodyPostureWithOptions($bodyPostureReq, $runtime);
    }

    /**
     * @param CompareFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CompareFaceResponse
     */
    public function compareFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CompareFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompareFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompareFaceRequest $request
     *
     * @return CompareFaceResponse
     */
    public function compareFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceWithOptions($request, $runtime);
    }

    /**
     * @param CountCrowdRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CountCrowdResponse
     */
    public function countCrowdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CountCrowd',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CountCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CountCrowdRequest $request
     *
     * @return CountCrowdResponse
     */
    public function countCrowd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countCrowdWithOptions($request, $runtime);
    }

    /**
     * @param CountCrowdAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CountCrowdResponse
     */
    public function countCrowdAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $countCrowdReq = new CountCrowdRequest([]);
        OpenApiUtilClient::convert($request, $countCrowdReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $countCrowdReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->countCrowdWithOptions($countCrowdReq, $runtime);
    }

    /**
     * @param CreateBodyDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBodyDbResponse
     */
    public function createBodyDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBodyDb',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBodyDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBodyDbRequest $request
     *
     * @return CreateBodyDbResponse
     */
    public function createBodyDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBodyDbWithOptions($request, $runtime);
    }

    /**
     * @param CreateBodyPersonRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBodyPersonResponse
     */
    public function createBodyPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBodyPerson',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBodyPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBodyPersonRequest $request
     *
     * @return CreateBodyPersonResponse
     */
    public function createBodyPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBodyPersonWithOptions($request, $runtime);
    }

    /**
     * @param CreateFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFaceDb',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFaceDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFaceDbRequest $request
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceDbWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBodyDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBodyDbResponse
     */
    public function deleteBodyDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBodyDb',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBodyDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBodyDbRequest $request
     *
     * @return DeleteBodyDbResponse
     */
    public function deleteBodyDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBodyDbWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBodyPersonRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBodyPersonResponse
     */
    public function deleteBodyPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteBodyPerson',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBodyPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBodyPersonRequest $request
     *
     * @return DeleteBodyPersonResponse
     */
    public function deleteBodyPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBodyPersonWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFaceResponse
     */
    public function deleteFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFaceRequest $request
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceDb',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFaceDbRequest $request
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceDbWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFaceEntityResponse
     */
    public function deleteFaceEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceEntity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFaceEntityRequest $request
     *
     * @return DeleteFaceEntityResponse
     */
    public function deleteFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceEntityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceImageTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteFaceImageTemplateResponse
     */
    public function deleteFaceImageTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceImageTemplate',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFaceImageTemplateRequest $request
     *
     * @return DeleteFaceImageTemplateResponse
     */
    public function deleteFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DetectBodyCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectBodyCount',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectBodyCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectBodyCountRequest $request
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectBodyCountWithOptions($request, $runtime);
    }

    /**
     * @param DetectBodyCountAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectBodyCountReq = new DetectBodyCountRequest([]);
        OpenApiUtilClient::convert($request, $detectBodyCountReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectBodyCountReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectBodyCountWithOptions($detectBodyCountReq, $runtime);
    }

    /**
     * @param DetectCelebrityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectCelebrity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectCelebrityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectCelebrityRequest $request
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectCelebrityWithOptions($request, $runtime);
    }

    /**
     * @param DetectCelebrityAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectCelebrityResponse
     */
    public function detectCelebrityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectCelebrityReq = new DetectCelebrityRequest([]);
        OpenApiUtilClient::convert($request, $detectCelebrityReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectCelebrityReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectCelebrityWithOptions($detectCelebrityReq, $runtime);
    }

    /**
     * @param DetectChefCapRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetectChefCapResponse
     */
    public function detectChefCapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectChefCap',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectChefCapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectChefCapRequest $request
     *
     * @return DetectChefCapResponse
     */
    public function detectChefCap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectChefCapWithOptions($request, $runtime);
    }

    /**
     * @param DetectChefCapAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectChefCapResponse
     */
    public function detectChefCapAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectChefCapReq = new DetectChefCapRequest([]);
        OpenApiUtilClient::convert($request, $detectChefCapReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectChefCapReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectChefCapWithOptions($detectChefCapReq, $runtime);
    }

    /**
     * @param DetectFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectFaceRequest $request
     *
     * @return DetectFaceResponse
     */
    public function detectFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectFaceResponse
     */
    public function detectFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectFaceReq = new DetectFaceRequest([]);
        OpenApiUtilClient::convert($request, $detectFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectFaceWithOptions($detectFaceReq, $runtime);
    }

    /**
     * @param DetectIPCPedestrianRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectIPCPedestrianResponse
     */
    public function detectIPCPedestrianWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectIPCPedestrian',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectIPCPedestrianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectIPCPedestrianRequest $request
     *
     * @return DetectIPCPedestrianResponse
     */
    public function detectIPCPedestrian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectIPCPedestrianWithOptions($request, $runtime);
    }

    /**
     * @param DetectIPCPedestrianAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetectIPCPedestrianResponse
     */
    public function detectIPCPedestrianAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectIPCPedestrianReq = new DetectIPCPedestrianRequest([]);
        OpenApiUtilClient::convert($request, $detectIPCPedestrianReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectIPCPedestrianReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectIPCPedestrianWithOptions($detectIPCPedestrianReq, $runtime);
    }

    /**
     * @param DetectLivingFaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectLivingFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectLivingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectLivingFaceRequest $request
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLivingFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectMaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetectMaskResponse
     */
    public function detectMaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectMask',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectMaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectMaskRequest $request
     *
     * @return DetectMaskResponse
     */
    public function detectMask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMaskWithOptions($request, $runtime);
    }

    /**
     * @param DetectMaskAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectMaskResponse
     */
    public function detectMaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectMaskReq = new DetectMaskRequest([]);
        OpenApiUtilClient::convert($request, $detectMaskReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectMaskReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectMaskWithOptions($detectMaskReq, $runtime);
    }

    /**
     * @param DetectPedestrianRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectPedestrian',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectPedestrianResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectPedestrianRequest $request
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrian($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectPedestrianWithOptions($request, $runtime);
    }

    /**
     * @param DetectPedestrianAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectPedestrianReq = new DetectPedestrianRequest([]);
        OpenApiUtilClient::convert($request, $detectPedestrianReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectPedestrianReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectPedestrianWithOptions($detectPedestrianReq, $runtime);
    }

    /**
     * @param DetectPedestrianIntrusionRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DetectPedestrianIntrusionResponse
     */
    public function detectPedestrianIntrusionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetectPedestrianIntrusionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->detectRegion)) {
            $request->detectRegionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detectRegion, 'DetectRegion', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectPedestrianIntrusion',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectPedestrianIntrusionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectPedestrianIntrusionRequest $request
     *
     * @return DetectPedestrianIntrusionResponse
     */
    public function detectPedestrianIntrusion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectPedestrianIntrusionWithOptions($request, $runtime);
    }

    /**
     * @param DetectPedestrianIntrusionAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DetectPedestrianIntrusionResponse
     */
    public function detectPedestrianIntrusionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectPedestrianIntrusionReq = new DetectPedestrianIntrusionRequest([]);
        OpenApiUtilClient::convert($request, $detectPedestrianIntrusionReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $detectPedestrianIntrusionReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectPedestrianIntrusionWithOptions($detectPedestrianIntrusionReq, $runtime);
    }

    /**
     * @param DetectVideoLivingFaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetectVideoLivingFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectVideoLivingFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectVideoLivingFaceRequest $request
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoLivingFaceWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoLivingFaceAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectVideoLivingFaceResponse
     */
    public function detectVideoLivingFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $detectVideoLivingFaceReq = new DetectVideoLivingFaceRequest([]);
        OpenApiUtilClient::convert($request, $detectVideoLivingFaceReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
            $detectVideoLivingFaceReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectVideoLivingFaceWithOptions($detectVideoLivingFaceReq, $runtime);
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
        $params = new Params([
            'action'      => 'EnhanceFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnhanceFaceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param EnhanceFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $enhanceFaceReq = new EnhanceFaceRequest([]);
        OpenApiUtilClient::convert($request, $enhanceFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $enhanceFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->enhanceFaceWithOptions($enhanceFaceReq, $runtime);
    }

    /**
     * @param ExtractFingerPrintRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExtractFingerPrint',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractFingerPrintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExtractFingerPrintRequest $request
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractFingerPrintWithOptions($request, $runtime);
    }

    /**
     * @param ExtractFingerPrintAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExtractFingerPrintResponse
     */
    public function extractFingerPrintAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $extractFingerPrintReq = new ExtractFingerPrintRequest([]);
        OpenApiUtilClient::convert($request, $extractFingerPrintReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $extractFingerPrintReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->extractFingerPrintWithOptions($extractFingerPrintReq, $runtime);
    }

    /**
     * @param ExtractPedestrianFeatureAttrRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ExtractPedestrianFeatureAttrResponse
     */
    public function extractPedestrianFeatureAttrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExtractPedestrianFeatureAttr',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractPedestrianFeatureAttrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExtractPedestrianFeatureAttrRequest $request
     *
     * @return ExtractPedestrianFeatureAttrResponse
     */
    public function extractPedestrianFeatureAttr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractPedestrianFeatureAttrWithOptions($request, $runtime);
    }

    /**
     * @param ExtractPedestrianFeatureAttrAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ExtractPedestrianFeatureAttrResponse
     */
    public function extractPedestrianFeatureAttrAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $extractPedestrianFeatureAttrReq = new ExtractPedestrianFeatureAttrRequest([]);
        OpenApiUtilClient::convert($request, $extractPedestrianFeatureAttrReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $extractPedestrianFeatureAttrReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->extractPedestrianFeatureAttrWithOptions($extractPedestrianFeatureAttrReq, $runtime);
    }

    /**
     * @param ExtractPedestrianFeatureAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ExtractPedestrianFeatureAttributeResponse
     */
    public function extractPedestrianFeatureAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ExtractPedestrianFeatureAttribute',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractPedestrianFeatureAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExtractPedestrianFeatureAttributeRequest $request
     *
     * @return ExtractPedestrianFeatureAttributeResponse
     */
    public function extractPedestrianFeatureAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractPedestrianFeatureAttributeWithOptions($request, $runtime);
    }

    /**
     * @param FaceBeautyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FaceBeauty',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceBeautyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceBeautyRequest $request
     *
     * @return FaceBeautyResponse
     */
    public function faceBeauty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceBeautyWithOptions($request, $runtime);
    }

    /**
     * @param FaceBeautyAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $faceBeautyReq = new FaceBeautyRequest([]);
        OpenApiUtilClient::convert($request, $faceBeautyReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $faceBeautyReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->faceBeautyWithOptions($faceBeautyReq, $runtime);
    }

    /**
     * @param FaceFilterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceFilterResponse
     */
    public function faceFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FaceFilter',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceFilterRequest $request
     *
     * @return FaceFilterResponse
     */
    public function faceFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceFilterWithOptions($request, $runtime);
    }

    /**
     * @param FaceFilterAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceFilterResponse
     */
    public function faceFilterAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $faceFilterReq = new FaceFilterRequest([]);
        OpenApiUtilClient::convert($request, $faceFilterReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $faceFilterReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->faceFilterWithOptions($faceFilterReq, $runtime);
    }

    /**
     * @param FaceMakeupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FaceMakeup',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceMakeupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceMakeupRequest $request
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceMakeupWithOptions($request, $runtime);
    }

    /**
     * @param FaceMakeupAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeupAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $faceMakeupReq = new FaceMakeupRequest([]);
        OpenApiUtilClient::convert($request, $faceMakeupReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $faceMakeupReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->faceMakeupWithOptions($faceMakeupReq, $runtime);
    }

    /**
     * @param FaceTidyupRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'FaceTidyup',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceTidyupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceTidyupRequest $request
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceTidyupWithOptions($request, $runtime);
    }

    /**
     * @param FaceTidyupAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyupAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $faceTidyupReq = new FaceTidyupRequest([]);
        OpenApiUtilClient::convert($request, $faceTidyupReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $faceTidyupReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->faceTidyupWithOptions($faceTidyupReq, $runtime);
    }

    /**
     * @param GenRealPersonVerificationTokenRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GenRealPersonVerificationTokenResponse
     */
    public function genRealPersonVerificationTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GenRealPersonVerificationToken',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenRealPersonVerificationTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenRealPersonVerificationTokenRequest $request
     *
     * @return GenRealPersonVerificationTokenResponse
     */
    public function genRealPersonVerificationToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->genRealPersonVerificationTokenWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanAnimeStyleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AlgoType'] = $request->algoType;
        $query['ImageURL'] = $request->imageURL;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GenerateHumanAnimeStyle',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateHumanAnimeStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateHumanAnimeStyleRequest $request
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanAnimeStyleWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanAnimeStyleAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GenerateHumanAnimeStyleResponse
     */
    public function generateHumanAnimeStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $generateHumanAnimeStyleReq = new GenerateHumanAnimeStyleRequest([]);
        OpenApiUtilClient::convert($request, $generateHumanAnimeStyleReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $generateHumanAnimeStyleReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->generateHumanAnimeStyleWithOptions($generateHumanAnimeStyleReq, $runtime);
    }

    /**
     * @param GenerateHumanSketchStyleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GenerateHumanSketchStyle',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateHumanSketchStyleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateHumanSketchStyleRequest $request
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanSketchStyleWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanSketchStyleAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GenerateHumanSketchStyleResponse
     */
    public function generateHumanSketchStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $generateHumanSketchStyleReq = new GenerateHumanSketchStyleRequest([]);
        OpenApiUtilClient::convert($request, $generateHumanSketchStyleReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $generateHumanSketchStyleReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->generateHumanSketchStyleWithOptions($generateHumanSketchStyleReq, $runtime);
    }

    /**
     * @param GetBodyPersonRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBodyPersonResponse
     */
    public function getBodyPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBodyPerson',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBodyPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBodyPersonRequest $request
     *
     * @return GetBodyPersonResponse
     */
    public function getBodyPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBodyPersonWithOptions($request, $runtime);
    }

    /**
     * @param GetFaceEntityRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetFaceEntityResponse
     */
    public function getFaceEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetFaceEntity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFaceEntityRequest $request
     *
     * @return GetFaceEntityResponse
     */
    public function getFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFaceEntityWithOptions($request, $runtime);
    }

    /**
     * @param GetRealPersonVerificationResultRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetRealPersonVerificationResultResponse
     */
    public function getRealPersonVerificationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRealPersonVerificationResult',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealPersonVerificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRealPersonVerificationResultRequest $request
     *
     * @return GetRealPersonVerificationResultResponse
     */
    public function getRealPersonVerificationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealPersonVerificationResultWithOptions($request, $runtime);
    }

    /**
     * @param HandPostureRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return HandPostureResponse
     */
    public function handPostureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'HandPosture',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandPostureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HandPostureRequest $request
     *
     * @return HandPostureResponse
     */
    public function handPosture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handPostureWithOptions($request, $runtime);
    }

    /**
     * @param HandPostureAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return HandPostureResponse
     */
    public function handPostureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $handPostureReq = new HandPostureRequest([]);
        OpenApiUtilClient::convert($request, $handPostureReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $handPostureReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->handPostureWithOptions($handPostureReq, $runtime);
    }

    /**
     * @param LiquifyFaceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'LiquifyFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LiquifyFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LiquifyFaceRequest $request
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->liquifyFaceWithOptions($request, $runtime);
    }

    /**
     * @param LiquifyFaceAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LiquifyFaceResponse
     */
    public function liquifyFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $liquifyFaceReq = new LiquifyFaceRequest([]);
        OpenApiUtilClient::convert($request, $liquifyFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $liquifyFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->liquifyFaceWithOptions($liquifyFaceReq, $runtime);
    }

    /**
     * @param ListBodyDbsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBodyDbsResponse
     */
    public function listBodyDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBodyDbs',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBodyDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBodyDbsRequest $request
     *
     * @return ListBodyDbsResponse
     */
    public function listBodyDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBodyDbsWithOptions($request, $runtime);
    }

    /**
     * @param ListBodyPersonRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListBodyPersonResponse
     */
    public function listBodyPersonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBodyPerson',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBodyPersonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBodyPersonRequest $request
     *
     * @return ListBodyPersonResponse
     */
    public function listBodyPerson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBodyPersonWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListFaceDbsResponse
     */
    public function listFaceDbsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListFaceDbs',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFaceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListFaceDbsResponse
     */
    public function listFaceDbs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceDbsWithOptions($runtime);
    }

    /**
     * @param ListFaceEntitiesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFaceEntitiesResponse
     */
    public function listFaceEntitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFaceEntities',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFaceEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFaceEntitiesRequest $request
     *
     * @return ListFaceEntitiesResponse
     */
    public function listFaceEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFaceEntitiesWithOptions($request, $runtime);
    }

    /**
     * @param MergeImageFaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MergeImageFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MergeImageFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MergeImageFaceRequest $request
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeImageFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeImageFaceAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MergeImageFaceResponse
     */
    public function mergeImageFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $mergeImageFaceReq = new MergeImageFaceRequest([]);
        OpenApiUtilClient::convert($request, $mergeImageFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $mergeImageFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->mergeImageFaceWithOptions($mergeImageFaceReq, $runtime);
    }

    /**
     * @param MonitorExaminationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExaminationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'MonitorExamination',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MonitorExaminationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MonitorExaminationRequest $request
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExamination($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->monitorExaminationWithOptions($request, $runtime);
    }

    /**
     * @param MonitorExaminationAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return MonitorExaminationResponse
     */
    public function monitorExaminationAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $monitorExaminationReq = new MonitorExaminationRequest([]);
        OpenApiUtilClient::convert($request, $monitorExaminationReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $monitorExaminationReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->monitorExaminationWithOptions($monitorExaminationReq, $runtime);
    }

    /**
     * @param PedestrianDetectAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PedestrianDetectAttribute',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PedestrianDetectAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PedestrianDetectAttributeRequest $request
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pedestrianDetectAttributeWithOptions($request, $runtime);
    }

    /**
     * @param PedestrianDetectAttributeAdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PedestrianDetectAttributeResponse
     */
    public function pedestrianDetectAttributeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $pedestrianDetectAttributeReq = new PedestrianDetectAttributeRequest([]);
        OpenApiUtilClient::convert($request, $pedestrianDetectAttributeReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $pedestrianDetectAttributeReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->pedestrianDetectAttributeWithOptions($pedestrianDetectAttributeReq, $runtime);
    }

    /**
     * @param QueryFaceImageTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFaceImageTemplateResponse
     */
    public function queryFaceImageTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceImageTemplate',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryFaceImageTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFaceImageTemplateRequest $request
     *
     * @return QueryFaceImageTemplateResponse
     */
    public function queryFaceImageTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceImageTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeActionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeActionResponse
     */
    public function recognizeActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecognizeAction',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeActionRequest $request
     *
     * @return RecognizeActionResponse
     */
    public function recognizeAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeActionWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeExpressionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecognizeExpression',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeExpressionRequest $request
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeExpressionWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeExpressionAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $recognizeExpressionReq = new RecognizeExpressionRequest([]);
        OpenApiUtilClient::convert($request, $recognizeExpressionReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeExpressionReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeExpressionWithOptions($recognizeExpressionReq, $runtime);
    }

    /**
     * @param RecognizeFaceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecognizeFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeFaceRequest $request
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFaceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFaceAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $recognizeFaceReq = new RecognizeFaceRequest([]);
        OpenApiUtilClient::convert($request, $recognizeFaceReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeFaceReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeFaceWithOptions($recognizeFaceReq, $runtime);
    }

    /**
     * @param RecognizeHandGestureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeHandGestureResponse
     */
    public function recognizeHandGestureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecognizeHandGesture',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeHandGestureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeHandGestureRequest $request
     *
     * @return RecognizeHandGestureResponse
     */
    public function recognizeHandGesture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeHandGestureWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeHandGestureAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeHandGestureResponse
     */
    public function recognizeHandGestureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $recognizeHandGestureReq = new RecognizeHandGestureRequest([]);
        OpenApiUtilClient::convert($request, $recognizeHandGestureReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeHandGestureReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeHandGestureWithOptions($recognizeHandGestureReq, $runtime);
    }

    /**
     * @param RecognizePublicFaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecognizePublicFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizePublicFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizePublicFaceRequest $request
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePublicFaceWithOptions($request, $runtime);
    }

    /**
     * @param RetouchBodyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RetouchBodyResponse
     */
    public function retouchBodyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RetouchBody',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetouchBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetouchBodyRequest $request
     *
     * @return RetouchBodyResponse
     */
    public function retouchBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retouchBodyWithOptions($request, $runtime);
    }

    /**
     * @param RetouchBodyAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RetouchBodyResponse
     */
    public function retouchBodyAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $retouchBodyReq = new RetouchBodyRequest([]);
        OpenApiUtilClient::convert($request, $retouchBodyReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $retouchBodyReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->retouchBodyWithOptions($retouchBodyReq, $runtime);
    }

    /**
     * @param RetouchSkinRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkinWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RetouchSkin',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetouchSkinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetouchSkinRequest $request
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retouchSkinWithOptions($request, $runtime);
    }

    /**
     * @param RetouchSkinAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RetouchSkinResponse
     */
    public function retouchSkinAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $retouchSkinReq = new RetouchSkinRequest([]);
        OpenApiUtilClient::convert($request, $retouchSkinReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageURLObject,
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
            $retouchSkinReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->retouchSkinWithOptions($retouchSkinReq, $runtime);
    }

    /**
     * @param SearchBodyTraceRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return SearchBodyTraceResponse
     */
    public function searchBodyTraceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchBodyTraceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->images)) {
            $request->imagesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->images, 'Images', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchBodyTrace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchBodyTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchBodyTraceRequest $request
     *
     * @return SearchBodyTraceResponse
     */
    public function searchBodyTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchBodyTraceWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchFace',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchFaceRequest $request
     *
     * @return SearchFaceResponse
     */
    public function searchFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchFaceWithOptions($request, $runtime);
    }

    /**
     * @param SearchFaceAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchFaceResponse
     */
    public function searchFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'facebody',
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
        $searchFaceReq = new SearchFaceRequest([]);
        OpenApiUtilClient::convert($request, $searchFaceReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageUrlObject,
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
            $searchFaceReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->searchFaceWithOptions($searchFaceReq, $runtime);
    }

    /**
     * @param SwapFacialFeaturesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SwapFacialFeaturesResponse
     */
    public function swapFacialFeaturesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SwapFacialFeatures',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwapFacialFeaturesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwapFacialFeaturesRequest $request
     *
     * @return SwapFacialFeaturesResponse
     */
    public function swapFacialFeatures($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->swapFacialFeaturesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFaceEntityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceEntityResponse
     */
    public function updateFaceEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaceEntity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaceEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFaceEntityRequest $request
     *
     * @return UpdateFaceEntityResponse
     */
    public function updateFaceEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceEntityWithOptions($request, $runtime);
    }

    /**
     * @param VerifyFaceMaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyFaceMaskResponse
     */
    public function verifyFaceMaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'VerifyFaceMask',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyFaceMaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyFaceMaskRequest $request
     *
     * @return VerifyFaceMaskResponse
     */
    public function verifyFaceMask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyFaceMaskWithOptions($request, $runtime);
    }
}
