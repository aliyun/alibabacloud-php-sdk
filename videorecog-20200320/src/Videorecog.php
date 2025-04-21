<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListShrinkRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Videorecog extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videorecog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - DetectVideoShotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVideoShotResponse
     *
     * @param DetectVideoShotRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectVideoShot',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVideoShotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DetectVideoShotRequest
     *
     * @returns DetectVideoShotResponse
     *
     * @param DetectVideoShotRequest $request
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoShotWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoShotAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $detectVideoShotReq = new DetectVideoShotRequest([]);
        Utils::convert($request, $detectVideoShotReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $detectVideoShotReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->detectVideoShotWithOptions($detectVideoShotReq, $runtime);
    }

    /**
     * 视频质量评估.
     *
     * @param request - EvaluateVideoQualityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateVideoQualityResponse
     *
     * @param EvaluateVideoQualityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQualityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluateVideoQuality',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateVideoQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频质量评估.
     *
     * @param request - EvaluateVideoQualityRequest
     *
     * @returns EvaluateVideoQualityResponse
     *
     * @param EvaluateVideoQualityRequest $request
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateVideoQualityWithOptions($request, $runtime);
    }

    /**
     * @param EvaluateVideoQualityAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQualityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $evaluateVideoQualityReq = new EvaluateVideoQualityRequest([]);
        Utils::convert($request, $evaluateVideoQualityReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $evaluateVideoQualityReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->evaluateVideoQualityWithOptions($evaluateVideoQualityReq, $runtime);
    }

    /**
     * @param request - GenerateVideoCoverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateVideoCoverResponse
     *
     * @param GenerateVideoCoverRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isGif) {
            @$body['IsGif'] = $request->isGif;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateVideoCover',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateVideoCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GenerateVideoCoverRequest
     *
     * @returns GenerateVideoCoverResponse
     *
     * @param GenerateVideoCoverRequest $request
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoCoverWithOptions($request, $runtime);
    }

    /**
     * @param GenerateVideoCoverAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $generateVideoCoverReq = new GenerateVideoCoverRequest([]);
        Utils::convert($request, $generateVideoCoverReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $generateVideoCoverReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->generateVideoCoverWithOptions($generateVideoCoverReq, $runtime);
    }

    /**
     * @param request - GetAsyncJobResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncJobResultResponse
     *
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAsyncJobResult',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAsyncJobResultRequest
     *
     * @returns GetAsyncJobResultResponse
     *
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
     * 视频OCR.
     *
     * @param tmpReq - RecognizeVideoCastCrewListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVideoCastCrewListResponse
     *
     * @param RecognizeVideoCastCrewListRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeVideoCastCrewListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeVideoCastCrewList',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVideoCastCrewListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频OCR.
     *
     * @param request - RecognizeVideoCastCrewListRequest
     *
     * @returns RecognizeVideoCastCrewListResponse
     *
     * @param RecognizeVideoCastCrewListRequest $request
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVideoCastCrewListWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVideoCastCrewListAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewListAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $recognizeVideoCastCrewListReq = new RecognizeVideoCastCrewListRequest([]);
        Utils::convert($request, $recognizeVideoCastCrewListReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $recognizeVideoCastCrewListReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->recognizeVideoCastCrewListWithOptions($recognizeVideoCastCrewListReq, $runtime);
    }

    /**
     * 视频拆条
     *
     * @param request - SplitVideoPartsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SplitVideoPartsResponse
     *
     * @param SplitVideoPartsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoPartsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxTime) {
            @$body['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->minTime) {
            @$body['MinTime'] = $request->minTime;
        }

        if (null !== $request->template) {
            @$body['Template'] = $request->template;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SplitVideoParts',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SplitVideoPartsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频拆条
     *
     * @param request - SplitVideoPartsRequest
     *
     * @returns SplitVideoPartsResponse
     *
     * @param SplitVideoPartsRequest $request
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoParts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->splitVideoPartsWithOptions($request, $runtime);
    }

    /**
     * @param SplitVideoPartsAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoPartsAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $splitVideoPartsReq = new SplitVideoPartsRequest([]);
        Utils::convert($request, $splitVideoPartsReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $splitVideoPartsReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->splitVideoPartsWithOptions($splitVideoPartsReq, $runtime);
    }

    /**
     * 视频内容理解.
     *
     * @param request - UnderstandVideoContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnderstandVideoContentResponse
     *
     * @param UnderstandVideoContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnderstandVideoContent',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnderstandVideoContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频内容理解.
     *
     * @param request - UnderstandVideoContentRequest
     *
     * @returns UnderstandVideoContentResponse
     *
     * @param UnderstandVideoContentRequest $request
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->understandVideoContentWithOptions($request, $runtime);
    }

    /**
     * @param UnderstandVideoContentAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContentAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'videorecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $understandVideoContentReq = new UnderstandVideoContentRequest([]);
        Utils::convert($request, $understandVideoContentReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $understandVideoContentReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->understandVideoContentWithOptions($understandVideoContentReq, $runtime);
    }
}
