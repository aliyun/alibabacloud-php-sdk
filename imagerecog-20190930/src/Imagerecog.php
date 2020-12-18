<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectFruitsAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectFruitsRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectFruitsResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\EvaluateCertificateQualityAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\EvaluateCertificateQualityRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\EvaluateCertificateQualityResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageResponse;
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

class Imagerecog extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagerecog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param EvaluateCertificateQualityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EvaluateCertificateQualityResponse
     */
    public function evaluateCertificateQuality($request, $runtime)
    {
        Utils::validateModel($request);

        return EvaluateCertificateQualityResponse::fromMap($this->doRequest('EvaluateCertificateQuality', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param EvaluateCertificateQualityRequest $request
     *
     * @return EvaluateCertificateQualityResponse
     */
    public function evaluateCertificateQualitySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateCertificateQuality($request, $runtime);
    }

    /**
     * @param EvaluateCertificateQualityAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return EvaluateCertificateQualityResponse
     */
    public function evaluateCertificateQualityAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $evaluateCertificateQualityReq = new EvaluateCertificateQualityRequest([]);
        RpcUtils::convert($request, $evaluateCertificateQualityReq);
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
        $evaluateCertificateQualityReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->evaluateCertificateQuality($evaluateCertificateQualityReq, $runtime);
    }

    /**
     * @param DetectFruitsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetectFruitsResponse
     */
    public function detectFruits($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectFruitsResponse::fromMap($this->doRequest('DetectFruits', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectFruitsRequest $request
     *
     * @return DetectFruitsResponse
     */
    public function detectFruitsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFruits($request, $runtime);
    }

    /**
     * @param DetectFruitsAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectFruitsResponse
     */
    public function detectFruitsAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $detectFruitsReq = new DetectFruitsRequest([]);
        RpcUtils::convert($request, $detectFruitsReq);
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
        $detectFruitsReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectFruits($detectFruitsReq, $runtime);
    }

    /**
     * @param ClassifyingRubbishRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbish($request, $runtime)
    {
        Utils::validateModel($request);

        return ClassifyingRubbishResponse::fromMap($this->doRequest('ClassifyingRubbish', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClassifyingRubbishRequest $request
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbishSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyingRubbish($request, $runtime);
    }

    /**
     * @param ClassifyingRubbishAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbishAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $classifyingRubbishReq = new ClassifyingRubbishRequest([]);
        RpcUtils::convert($request, $classifyingRubbishReq);
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
        $classifyingRubbishReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->classifyingRubbish($classifyingRubbishReq, $runtime);
    }

    /**
     * @param RecognizeVehicleTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleType($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeVehicleTypeResponse::fromMap($this->doRequest('RecognizeVehicleType', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeVehicleTypeRequest $request
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleTypeSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleType($request, $runtime);
    }

    /**
     * @param RecognizeVehicleTypeAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleTypeAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $recognizeVehicleTypeReq = new RecognizeVehicleTypeRequest([]);
        RpcUtils::convert($request, $recognizeVehicleTypeReq);
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
        $recognizeVehicleTypeReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVehicleType($recognizeVehicleTypeReq, $runtime);
    }

    /**
     * @param RecognizeLogoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeLogoResponse
     */
    public function recognizeLogo($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeLogoResponse::fromMap($this->doRequest('RecognizeLogo', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeLogoRequest $request
     *
     * @return RecognizeLogoResponse
     */
    public function recognizeLogoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLogo($request, $runtime);
    }

    /**
     * @param TaggingImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TaggingImageResponse
     */
    public function taggingImage($request, $runtime)
    {
        Utils::validateModel($request);

        return TaggingImageResponse::fromMap($this->doRequest('TaggingImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TaggingImageRequest $request
     *
     * @return TaggingImageResponse
     */
    public function taggingImageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taggingImage($request, $runtime);
    }

    /**
     * @param TaggingImageAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TaggingImageResponse
     */
    public function taggingImageAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $taggingImageReq = new TaggingImageRequest([]);
        RpcUtils::convert($request, $taggingImageReq);
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
        $taggingImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->taggingImage($taggingImageReq, $runtime);
    }

    /**
     * @param RecognizeSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeScene($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeSceneResponse::fromMap($this->doRequest('RecognizeScene', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeSceneRequest $request
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeSceneSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeScene($request, $runtime);
    }

    /**
     * @param RecognizeSceneAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeSceneAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $recognizeSceneReq = new RecognizeSceneRequest([]);
        RpcUtils::convert($request, $recognizeSceneReq);
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
        $recognizeSceneReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeScene($recognizeSceneReq, $runtime);
    }

    /**
     * @param RecognizeImageColorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColor($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageColorResponse::fromMap($this->doRequest('RecognizeImageColor', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeImageColorRequest $request
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageColor($request, $runtime);
    }

    /**
     * @param RecognizeImageColorAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $recognizeImageColorReq = new RecognizeImageColorRequest([]);
        RpcUtils::convert($request, $recognizeImageColorReq);
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
        $recognizeImageColorReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeImageColor($recognizeImageColorReq, $runtime);
    }

    /**
     * @param DetectImageElementsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElements($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectImageElementsResponse::fromMap($this->doRequest('DetectImageElements', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectImageElementsRequest $request
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectImageElements($request, $runtime);
    }

    /**
     * @param DetectImageElementsAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $detectImageElementsReq = new DetectImageElementsRequest([]);
        RpcUtils::convert($request, $detectImageElementsReq);
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
        $detectImageElementsReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectImageElements($detectImageElementsReq, $runtime);
    }

    /**
     * @param RecognizeImageStyleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyle($request, $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageStyleResponse::fromMap($this->doRequest('RecognizeImageStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecognizeImageStyleRequest $request
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeImageStyle($request, $runtime);
    }

    /**
     * @param RecognizeImageStyleAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleAdvance($request, $runtime)
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
            'product'  => 'imagerecog',
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
        $recognizeImageStyleReq = new RecognizeImageStyleRequest([]);
        RpcUtils::convert($request, $recognizeImageStyleReq);
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
        $recognizeImageStyleReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeImageStyle($recognizeImageStyleReq, $runtime);
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
