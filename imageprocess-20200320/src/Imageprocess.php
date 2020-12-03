<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\CalcCACSResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectCovid19CadResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseAdvanceRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSkinDiseaseResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQAResponse;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TranslateMedRequest;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TranslateMedResponse;
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

class Imageprocess extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageprocess', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DetectSkinDiseaseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDisease($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectSkinDiseaseResponse::fromMap($this->doRequest('DetectSkinDisease', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectSkinDiseaseRequest $request
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDiseaseSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectSkinDisease($request, $runtime);
    }

    /**
     * @param DetectSkinDiseaseAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectSkinDiseaseResponse
     */
    public function detectSkinDiseaseAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectSkinDiseaseReq = new DetectSkinDiseaseRequest([]);
        RpcUtils::convert($request, $detectSkinDiseaseReq);
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
        $detectSkinDiseaseReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectSkinDisease($detectSkinDiseaseReq, $runtime);
    }

    /**
     * @param RunMedQARequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return RunMedQAResponse
     */
    public function runMedQA($request, $runtime)
    {
        Utils::validateModel($request);

        return RunMedQAResponse::fromMap($this->doRequest('RunMedQA', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunMedQARequest $request
     *
     * @return RunMedQAResponse
     */
    public function runMedQASimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runMedQA($request, $runtime);
    }

    /**
     * @param DetectKneeKeypointXRayRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRay($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectKneeKeypointXRayResponse::fromMap($this->doRequest('DetectKneeKeypointXRay', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectKneeKeypointXRayRequest $request
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRaySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKneeKeypointXRay($request, $runtime);
    }

    /**
     * @param DetectKneeKeypointXRayAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DetectKneeKeypointXRayResponse
     */
    public function detectKneeKeypointXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectKneeKeypointXRayReq = new DetectKneeKeypointXRayRequest([]);
        RpcUtils::convert($request, $detectKneeKeypointXRayReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $detectKneeKeypointXRayReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectKneeKeypointXRay($detectKneeKeypointXRayReq, $runtime);
    }

    /**
     * @param ClassifyFNFRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNF($request, $runtime)
    {
        Utils::validateModel($request);

        return ClassifyFNFResponse::fromMap($this->doRequest('ClassifyFNF', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClassifyFNFRequest $request
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNFSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyFNF($request, $runtime);
    }

    /**
     * @param ClassifyFNFAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClassifyFNFResponse
     */
    public function classifyFNFAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $classifyFNFReq = new ClassifyFNFRequest([]);
        RpcUtils::convert($request, $classifyFNFReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $classifyFNFReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->classifyFNF($classifyFNFReq, $runtime);
    }

    /**
     * @param RunCTRegistrationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistration($request, $runtime)
    {
        Utils::validateModel($request);

        return RunCTRegistrationResponse::fromMap($this->doRequest('RunCTRegistration', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunCTRegistrationRequest $request
     *
     * @return RunCTRegistrationResponse
     */
    public function runCTRegistrationSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCTRegistration($request, $runtime);
    }

    /**
     * @param DetectHipKeypointXRayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRay($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectHipKeypointXRayResponse::fromMap($this->doRequest('DetectHipKeypointXRay', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectHipKeypointXRayRequest $request
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRaySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectHipKeypointXRay($request, $runtime);
    }

    /**
     * @param DetectHipKeypointXRayAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DetectHipKeypointXRayResponse
     */
    public function detectHipKeypointXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectHipKeypointXRayReq = new DetectHipKeypointXRayRequest([]);
        RpcUtils::convert($request, $detectHipKeypointXRayReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $detectHipKeypointXRayReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectHipKeypointXRay($detectHipKeypointXRayReq, $runtime);
    }

    /**
     * @param CalcCACSRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CalcCACSResponse
     */
    public function calcCACS($request, $runtime)
    {
        Utils::validateModel($request);

        return CalcCACSResponse::fromMap($this->doRequest('CalcCACS', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CalcCACSRequest $request
     *
     * @return CalcCACSResponse
     */
    public function calcCACSSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calcCACS($request, $runtime);
    }

    /**
     * @param DetectKneeXRayRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRay($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectKneeXRayResponse::fromMap($this->doRequest('DetectKneeXRay', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectKneeXRayRequest $request
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRaySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKneeXRay($request, $runtime);
    }

    /**
     * @param DetectKneeXRayAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectKneeXRayResponse
     */
    public function detectKneeXRayAdvance($request, $runtime)
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
            'product'  => 'imageprocess',
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
        $detectKneeXRayReq = new DetectKneeXRayRequest([]);
        RpcUtils::convert($request, $detectKneeXRayReq);
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
        $detectKneeXRayReq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectKneeXRay($detectKneeXRayReq, $runtime);
    }

    /**
     * @param DetectSpineMRIRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectSpineMRIResponse
     */
    public function detectSpineMRI($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectSpineMRIResponse::fromMap($this->doRequest('DetectSpineMRI', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectSpineMRIRequest $request
     *
     * @return DetectSpineMRIResponse
     */
    public function detectSpineMRISimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectSpineMRI($request, $runtime);
    }

    /**
     * @param TranslateMedRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TranslateMedResponse
     */
    public function translateMed($request, $runtime)
    {
        Utils::validateModel($request);

        return TranslateMedResponse::fromMap($this->doRequest('TranslateMed', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TranslateMedRequest $request
     *
     * @return TranslateMedResponse
     */
    public function translateMedSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateMed($request, $runtime);
    }

    /**
     * @param DetectLungNoduleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNodule($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectLungNoduleResponse::fromMap($this->doRequest('DetectLungNodule', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectLungNoduleRequest $request
     *
     * @return DetectLungNoduleResponse
     */
    public function detectLungNoduleSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectLungNodule($request, $runtime);
    }

    /**
     * @param DetectCovid19CadRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19Cad($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectCovid19CadResponse::fromMap($this->doRequest('DetectCovid19Cad', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectCovid19CadRequest $request
     *
     * @return DetectCovid19CadResponse
     */
    public function detectCovid19CadSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectCovid19Cad($request, $runtime);
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

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2020-03-20', 'AK', null, Tea::merge($request), $runtime));
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
