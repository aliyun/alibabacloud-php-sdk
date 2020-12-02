<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessSharpnessResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ColorizeImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ColorizeImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ColorizeImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\EnhanceImageColorResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ErasePersonAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ErasePersonRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ErasePersonResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GenerateDynamicImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GenerateDynamicImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GenerateDynamicImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindCharacterWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImitatePhotoStyleResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\IntelligentCompositionResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageSubtitlesResponse;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkAdvanceRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkRequest;
use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RemoveImageWatermarkResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageenhan extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ColorizeImageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ColorizeImageResponse
     */
    public function colorizeImage($request, $runtime)
    {
        Utils::validateModel($request);

        return ColorizeImageResponse::fromMap($this->doRequest('ColorizeImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ColorizeImageRequest $request
     *
     * @return ColorizeImageResponse
     */
    public function colorizeImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->colorizeImage($request, $runtime);
    }

    /**
     * @param ColorizeImageAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ColorizeImageResponse
     */
    public function colorizeImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $colorizeImageReq = new ColorizeImageRequest([]);
        RpcUtils::convert($request, $colorizeImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $colorizeImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->colorizeImage($colorizeImageReq, $runtime);
    }

    /**
     * @param ErasePersonRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ErasePersonResponse
     */
    public function erasePerson($request, $runtime)
    {
        Utils::validateModel($request);

        return ErasePersonResponse::fromMap($this->doRequest('ErasePerson', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ErasePersonRequest $request
     *
     * @return ErasePersonResponse
     */
    public function erasePersonSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->erasePerson($request, $runtime);
    }

    /**
     * @param ErasePersonAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ErasePersonResponse
     */
    public function erasePersonAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $erasePersonReq = new ErasePersonRequest([]);
        RpcUtils::convert($request, $erasePersonReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $erasePersonReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->erasePerson($erasePersonReq, $runtime);
    }

    /**
     * @param GenerateDynamicImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateDynamicImageResponse
     */
    public function generateDynamicImage($request, $runtime)
    {
        Utils::validateModel($request);

        return GenerateDynamicImageResponse::fromMap($this->doRequest('GenerateDynamicImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GenerateDynamicImageRequest $request
     *
     * @return GenerateDynamicImageResponse
     */
    public function generateDynamicImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDynamicImage($request, $runtime);
    }

    /**
     * @param GenerateDynamicImageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GenerateDynamicImageResponse
     */
    public function generateDynamicImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $generateDynamicImageReq = new GenerateDynamicImageRequest([]);
        RpcUtils::convert($request, $generateDynamicImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
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
        $generateDynamicImageReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->generateDynamicImage($generateDynamicImageReq, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResult($request, $runtime);
    }

    /**
     * @param ImitatePhotoStyleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImitatePhotoStyleResponse
     */
    public function imitatePhotoStyle($request, $runtime)
    {
        Utils::validateModel($request);

        return ImitatePhotoStyleResponse::fromMap($this->doRequest('ImitatePhotoStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImitatePhotoStyleRequest $request
     *
     * @return ImitatePhotoStyleResponse
     */
    public function imitatePhotoStyleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imitatePhotoStyle($request, $runtime);
    }

    /**
     * @param ImitatePhotoStyleAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImitatePhotoStyleResponse
     */
    public function imitatePhotoStyleAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $imitatePhotoStyleReq = new ImitatePhotoStyleRequest([]);
        RpcUtils::convert($request, $imitatePhotoStyleReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $imitatePhotoStyleReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imitatePhotoStyle($imitatePhotoStyleReq, $runtime);
    }

    /**
     * @param EnhanceImageColorRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnhanceImageColorResponse
     */
    public function enhanceImageColor($request, $runtime)
    {
        Utils::validateModel($request);

        return EnhanceImageColorResponse::fromMap($this->doRequest('EnhanceImageColor', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EnhanceImageColorRequest $request
     *
     * @return EnhanceImageColorResponse
     */
    public function enhanceImageColorSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceImageColor($request, $runtime);
    }

    /**
     * @param EnhanceImageColorAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnhanceImageColorResponse
     */
    public function enhanceImageColorAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $enhanceImageColorReq = new EnhanceImageColorRequest([]);
        RpcUtils::convert($request, $enhanceImageColorReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $enhanceImageColorReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->enhanceImageColor($enhanceImageColorReq, $runtime);
    }

    /**
     * @param RecolorHDImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecolorHDImageResponse
     */
    public function recolorHDImage($request, $runtime)
    {
        Utils::validateModel($request);

        return RecolorHDImageResponse::fromMap($this->doRequest('RecolorHDImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecolorHDImageRequest $request
     *
     * @return RecolorHDImageResponse
     */
    public function recolorHDImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recolorHDImage($request, $runtime);
    }

    /**
     * @param RecolorHDImageAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecolorHDImageResponse
     */
    public function recolorHDImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $recolorHDImageReq = new RecolorHDImageRequest([]);
        RpcUtils::convert($request, $recolorHDImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
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
        $recolorHDImageReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recolorHDImage($recolorHDImageReq, $runtime);
    }

    /**
     * @param AssessCompositionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AssessCompositionResponse
     */
    public function assessComposition($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessCompositionResponse::fromMap($this->doRequest('AssessComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AssessCompositionRequest $request
     *
     * @return AssessCompositionResponse
     */
    public function assessCompositionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessComposition($request, $runtime);
    }

    /**
     * @param AssessCompositionAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssessCompositionResponse
     */
    public function assessCompositionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $assessCompositionReq = new AssessCompositionRequest([]);
        RpcUtils::convert($request, $assessCompositionReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $assessCompositionReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessComposition($assessCompositionReq, $runtime);
    }

    /**
     * @param AssessSharpnessRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpness($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessSharpnessResponse::fromMap($this->doRequest('AssessSharpness', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AssessSharpnessRequest $request
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpnessSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessSharpness($request, $runtime);
    }

    /**
     * @param AssessSharpnessAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssessSharpnessResponse
     */
    public function assessSharpnessAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $assessSharpnessReq = new AssessSharpnessRequest([]);
        RpcUtils::convert($request, $assessSharpnessReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $assessSharpnessReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessSharpness($assessSharpnessReq, $runtime);
    }

    /**
     * @param AssessExposureRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssessExposureResponse
     */
    public function assessExposure($request, $runtime)
    {
        Utils::validateModel($request);

        return AssessExposureResponse::fromMap($this->doRequest('AssessExposure', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AssessExposureRequest $request
     *
     * @return AssessExposureResponse
     */
    public function assessExposureSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assessExposure($request, $runtime);
    }

    /**
     * @param AssessExposureAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AssessExposureResponse
     */
    public function assessExposureAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $assessExposureReq = new AssessExposureRequest([]);
        RpcUtils::convert($request, $assessExposureReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $assessExposureReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->assessExposure($assessExposureReq, $runtime);
    }

    /**
     * @param ImageBlindCharacterWatermarkRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindCharacterWatermarkResponse::fromMap($this->doRequest('ImageBlindCharacterWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImageBlindCharacterWatermarkRequest $request
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermarkSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageBlindCharacterWatermark($request, $runtime);
    }

    /**
     * @param ImageBlindCharacterWatermarkAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ImageBlindCharacterWatermarkResponse
     */
    public function imageBlindCharacterWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $imageBlindCharacterWatermarkReq = new ImageBlindCharacterWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindCharacterWatermarkReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
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
        $imageBlindCharacterWatermarkReq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindCharacterWatermark($imageBlindCharacterWatermarkReq, $runtime);
    }

    /**
     * @param RemoveImageSubtitlesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitles($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageSubtitlesResponse::fromMap($this->doRequest('RemoveImageSubtitles', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveImageSubtitlesRequest $request
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitlesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeImageSubtitles($request, $runtime);
    }

    /**
     * @param RemoveImageSubtitlesAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveImageSubtitlesResponse
     */
    public function removeImageSubtitlesAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $removeImageSubtitlesReq = new RemoveImageSubtitlesRequest([]);
        RpcUtils::convert($request, $removeImageSubtitlesReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $removeImageSubtitlesReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageSubtitles($removeImageSubtitlesReq, $runtime);
    }

    /**
     * @param RemoveImageWatermarkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveImageWatermarkResponse::fromMap($this->doRequest('RemoveImageWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveImageWatermarkRequest $request
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermarkSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeImageWatermark($request, $runtime);
    }

    /**
     * @param RemoveImageWatermarkAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveImageWatermarkResponse
     */
    public function removeImageWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $removeImageWatermarkReq = new RemoveImageWatermarkRequest([]);
        RpcUtils::convert($request, $removeImageWatermarkReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $removeImageWatermarkReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->removeImageWatermark($removeImageWatermarkReq, $runtime);
    }

    /**
     * @param ImageBlindPicWatermarkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermark($request, $runtime)
    {
        Utils::validateModel($request);

        return ImageBlindPicWatermarkResponse::fromMap($this->doRequest('ImageBlindPicWatermark', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ImageBlindPicWatermarkRequest $request
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermarkSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageBlindPicWatermark($request, $runtime);
    }

    /**
     * @param ImageBlindPicWatermarkAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ImageBlindPicWatermarkResponse
     */
    public function imageBlindPicWatermarkAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $imageBlindPicWatermarkReq = new ImageBlindPicWatermarkRequest([]);
        RpcUtils::convert($request, $imageBlindPicWatermarkReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->originImageURLObject,
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
        $imageBlindPicWatermarkReq->originImageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->imageBlindPicWatermark($imageBlindPicWatermarkReq, $runtime);
    }

    /**
     * @param IntelligentCompositionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentComposition($request, $runtime)
    {
        Utils::validateModel($request);

        return IntelligentCompositionResponse::fromMap($this->doRequest('IntelligentComposition', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param IntelligentCompositionRequest $request
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentCompositionSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->intelligentComposition($request, $runtime);
    }

    /**
     * @param IntelligentCompositionAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return IntelligentCompositionResponse
     */
    public function intelligentCompositionAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $intelligentCompositionReq = new IntelligentCompositionRequest([]);
        RpcUtils::convert($request, $intelligentCompositionReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $intelligentCompositionReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->intelligentComposition($intelligentCompositionReq, $runtime);
    }

    /**
     * @param ChangeImageSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSize($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangeImageSizeResponse::fromMap($this->doRequest('ChangeImageSize', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ChangeImageSizeRequest $request
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeImageSize($request, $runtime);
    }

    /**
     * @param ChangeImageSizeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeImageSizeResponse
     */
    public function changeImageSizeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $changeImageSizeReq = new ChangeImageSizeRequest([]);
        RpcUtils::convert($request, $changeImageSizeReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
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
        $changeImageSizeReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->changeImageSize($changeImageSizeReq, $runtime);
    }

    /**
     * @param ExtendImageStyleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyle($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtendImageStyleResponse::fromMap($this->doRequest('ExtendImageStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExtendImageStyleRequest $request
     *
     * @return ExtendImageStyleResponse
     */
    public function extendImageStyleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extendImageStyle($request, $runtime);
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImage($request, $runtime)
    {
        Utils::validateModel($request);

        return MakeSuperResolutionImageResponse::fromMap($this->doRequest('MakeSuperResolutionImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param MakeSuperResolutionImageRequest $request
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeSuperResolutionImage($request, $runtime);
    }

    /**
     * @param MakeSuperResolutionImageAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return MakeSuperResolutionImageResponse
     */
    public function makeSuperResolutionImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imageenhan',
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
        RpcUtils::convert($runtime, $ossRuntime);
        $makeSuperResolutionImageReq = new MakeSuperResolutionImageRequest([]);
        RpcUtils::convert($request, $makeSuperResolutionImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
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
        $makeSuperResolutionImageReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->makeSuperResolutionImage($makeSuperResolutionImageReq, $runtime);
    }

    /**
     * @param RecolorImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecolorImageResponse
     */
    public function recolorImage($request, $runtime)
    {
        Utils::validateModel($request);

        return RecolorImageResponse::fromMap($this->doRequest('RecolorImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecolorImageRequest $request
     *
     * @return RecolorImageResponse
     */
    public function recolorImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recolorImage($request, $runtime);
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
}
