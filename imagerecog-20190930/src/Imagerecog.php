<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponse;
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
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingAdImageAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingAdImageRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingAdImageResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Imagerecog extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagerecog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RecognizeVehicleTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeVehicleTypeResponse::fromMap($this->doRPCRequest('RecognizeVehicleType', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeVehicleTypeRequest $request
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVehicleTypeWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $recognizeVehicleTypeReq = new RecognizeVehicleTypeRequest([]);
        OpenApiUtilClient::convert($request, $recognizeVehicleTypeReq);
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
            $recognizeVehicleTypeReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeVehicleTypeWithOptions($recognizeVehicleTypeReq, $runtime);
    }

    /**
     * @param RecognizeFoodRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeFoodResponse
     */
    public function recognizeFoodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeFoodResponse::fromMap($this->doRPCRequest('RecognizeFood', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeFoodRequest $request
     *
     * @return RecognizeFoodResponse
     */
    public function recognizeFood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFoodWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFoodAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeFoodResponse
     */
    public function recognizeFoodAdvance($request, $runtime)
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $recognizeFoodReq = new RecognizeFoodRequest([]);
        OpenApiUtilClient::convert($request, $recognizeFoodReq);
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
            $recognizeFoodReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeFoodWithOptions($recognizeFoodReq, $runtime);
    }

    /**
     * @param RecognizeSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeSceneResponse::fromMap($this->doRPCRequest('RecognizeScene', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeSceneRequest $request
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeSceneWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $recognizeSceneReq = new RecognizeSceneRequest([]);
        OpenApiUtilClient::convert($request, $recognizeSceneReq);
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
            $recognizeSceneReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->recognizeSceneWithOptions($recognizeSceneReq, $runtime);
    }

    /**
     * @param DetectFruitsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetectFruitsResponse
     */
    public function detectFruitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectFruitsResponse::fromMap($this->doRPCRequest('DetectFruits', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectFruitsRequest $request
     *
     * @return DetectFruitsResponse
     */
    public function detectFruits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFruitsWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $detectFruitsReq = new DetectFruitsRequest([]);
        OpenApiUtilClient::convert($request, $detectFruitsReq);
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
            $detectFruitsReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->detectFruitsWithOptions($detectFruitsReq, $runtime);
    }

    /**
     * @param RecognizeLogoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RecognizeLogoResponse
     */
    public function recognizeLogoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecognizeLogoResponse::fromMap($this->doRPCRequest('RecognizeLogo', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RecognizeLogoRequest $request
     *
     * @return RecognizeLogoResponse
     */
    public function recognizeLogo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLogoWithOptions($request, $runtime);
    }

    /**
     * @param TaggingImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TaggingImageResponse
     */
    public function taggingImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TaggingImageResponse::fromMap($this->doRPCRequest('TaggingImage', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TaggingImageRequest $request
     *
     * @return TaggingImageResponse
     */
    public function taggingImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taggingImageWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $taggingImageReq = new TaggingImageRequest([]);
        OpenApiUtilClient::convert($request, $taggingImageReq);
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
            $taggingImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->taggingImageWithOptions($taggingImageReq, $runtime);
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAsyncJobResultResponse::fromMap($this->doRPCRequest('GetAsyncJobResult', '2019-09-30', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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

        return DetectImageElementsResponse::fromMap($this->doRPCRequest('DetectImageElements', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetectImageElementsAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsAdvance($request, $runtime)
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $detectImageElementsReq = new DetectImageElementsRequest([]);
        OpenApiUtilClient::convert($request, $detectImageElementsReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
        }

        return $this->detectImageElementsWithOptions($detectImageElementsReq, $runtime);
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

        return RecognizeImageStyleResponse::fromMap($this->doRPCRequest('RecognizeImageStyle', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RecognizeImageStyleAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleAdvance($request, $runtime)
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $recognizeImageStyleReq = new RecognizeImageStyleRequest([]);
        OpenApiUtilClient::convert($request, $recognizeImageStyleReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
        }

        return $this->recognizeImageStyleWithOptions($recognizeImageStyleReq, $runtime);
    }

    /**
     * @param TaggingAdImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TaggingAdImageResponse
     */
    public function taggingAdImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TaggingAdImageResponse::fromMap($this->doRPCRequest('TaggingAdImage', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TaggingAdImageRequest $request
     *
     * @return TaggingAdImageResponse
     */
    public function taggingAdImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taggingAdImageWithOptions($request, $runtime);
    }

    /**
     * @param TaggingAdImageAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TaggingAdImageResponse
     */
    public function taggingAdImageAdvance($request, $runtime)
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $taggingAdImageReq = new TaggingAdImageRequest([]);
        OpenApiUtilClient::convert($request, $taggingAdImageReq);
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
            $taggingAdImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->taggingAdImageWithOptions($taggingAdImageReq, $runtime);
    }

    /**
     * @param ClassifyingRubbishRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClassifyingRubbishResponse::fromMap($this->doRPCRequest('ClassifyingRubbish', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClassifyingRubbishRequest $request
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyingRubbishWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $classifyingRubbishReq = new ClassifyingRubbishRequest([]);
        OpenApiUtilClient::convert($request, $classifyingRubbishReq);
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
            $classifyingRubbishReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->classifyingRubbishWithOptions($classifyingRubbishReq, $runtime);
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

        return RecognizeImageColorResponse::fromMap($this->doRPCRequest('RecognizeImageColor', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RecognizeImageColorAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorAdvance($request, $runtime)
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $recognizeImageColorReq = new RecognizeImageColorRequest([]);
        OpenApiUtilClient::convert($request, $recognizeImageColorReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
        }

        return $this->recognizeImageColorWithOptions($recognizeImageColorReq, $runtime);
    }

    /**
     * @param EvaluateCertificateQualityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EvaluateCertificateQualityResponse
     */
    public function evaluateCertificateQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EvaluateCertificateQualityResponse::fromMap($this->doRPCRequest('EvaluateCertificateQuality', '2019-09-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EvaluateCertificateQualityRequest $request
     *
     * @return EvaluateCertificateQualityResponse
     */
    public function evaluateCertificateQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateCertificateQualityWithOptions($request, $runtime);
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $evaluateCertificateQualityReq = new EvaluateCertificateQualityRequest([]);
        OpenApiUtilClient::convert($request, $evaluateCertificateQualityReq);
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
            $evaluateCertificateQualityReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->evaluateCertificateQualityWithOptions($evaluateCertificateQualityReq, $runtime);
    }
}
