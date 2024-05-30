<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\DeleteFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\DeleteFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Videoenhan extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videoenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbstractEcommerceVideoRequest $request AbstractEcommerceVideoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AbstractEcommerceVideoResponse AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        if (!Utils::isUnset($request->width)) {
            $body['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AbstractEcommerceVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbstractEcommerceVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbstractEcommerceVideoRequest $request AbstractEcommerceVideoRequest
     *
     * @return AbstractEcommerceVideoResponse AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractEcommerceVideoWithOptions($request, $runtime);
    }

    /**
     * @param AbstractEcommerceVideoAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $abstractEcommerceVideoReq = new AbstractEcommerceVideoRequest([]);
        OpenApiUtilClient::convert($request, $abstractEcommerceVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $abstractEcommerceVideoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->abstractEcommerceVideoWithOptions($abstractEcommerceVideoReq, $runtime);
    }

    /**
     * @param AbstractFilmVideoRequest $request AbstractFilmVideoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AbstractFilmVideoResponse AbstractFilmVideoResponse
     */
    public function abstractFilmVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->length)) {
            $body['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AbstractFilmVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AbstractFilmVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AbstractFilmVideoRequest $request AbstractFilmVideoRequest
     *
     * @return AbstractFilmVideoResponse AbstractFilmVideoResponse
     */
    public function abstractFilmVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractFilmVideoWithOptions($request, $runtime);
    }

    /**
     * @param AbstractFilmVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $abstractFilmVideoReq = new AbstractFilmVideoRequest([]);
        OpenApiUtilClient::convert($request, $abstractFilmVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $abstractFilmVideoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->abstractFilmVideoWithOptions($abstractFilmVideoReq, $runtime);
    }

    /**
     * @summary 视频人脸融合模板增加
     *  *
     * @param AddFaceVideoTemplateRequest $request AddFaceVideoTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFaceVideoTemplateResponse AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->videoScene)) {
            $body['VideoScene'] = $request->videoScene;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFaceVideoTemplate',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频人脸融合模板增加
     *  *
     * @param AddFaceVideoTemplateRequest $request AddFaceVideoTemplateRequest
     *
     * @return AddFaceVideoTemplateResponse AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceVideoTemplateAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplateAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addFaceVideoTemplateReq = new AddFaceVideoTemplateRequest([]);
        OpenApiUtilClient::convert($request, $addFaceVideoTemplateReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $addFaceVideoTemplateReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addFaceVideoTemplateWithOptions($addFaceVideoTemplateReq, $runtime);
    }

    /**
     * @param AdjustVideoColorRequest $request AdjustVideoColorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AdjustVideoColorResponse AdjustVideoColorResponse
     */
    public function adjustVideoColorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->videoBitrate)) {
            $body['VideoBitrate'] = $request->videoBitrate;
        }
        if (!Utils::isUnset($request->videoCodec)) {
            $body['VideoCodec'] = $request->videoCodec;
        }
        if (!Utils::isUnset($request->videoFormat)) {
            $body['VideoFormat'] = $request->videoFormat;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AdjustVideoColor',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AdjustVideoColorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AdjustVideoColorRequest $request AdjustVideoColorRequest
     *
     * @return AdjustVideoColorResponse AdjustVideoColorResponse
     */
    public function adjustVideoColor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustVideoColorWithOptions($request, $runtime);
    }

    /**
     * @param AdjustVideoColorAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $adjustVideoColorReq = new AdjustVideoColorRequest([]);
        OpenApiUtilClient::convert($request, $adjustVideoColorReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $adjustVideoColorReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->adjustVideoColorWithOptions($adjustVideoColorReq, $runtime);
    }

    /**
     * @param ChangeVideoSizeRequest $request ChangeVideoSizeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeVideoSizeResponse ChangeVideoSizeResponse
     */
    public function changeVideoSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->b)) {
            $body['B'] = $request->b;
        }
        if (!Utils::isUnset($request->cropType)) {
            $body['CropType'] = $request->cropType;
        }
        if (!Utils::isUnset($request->fillType)) {
            $body['FillType'] = $request->fillType;
        }
        if (!Utils::isUnset($request->g)) {
            $body['G'] = $request->g;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->r)) {
            $body['R'] = $request->r;
        }
        if (!Utils::isUnset($request->tightness)) {
            $body['Tightness'] = $request->tightness;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        if (!Utils::isUnset($request->width)) {
            $body['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeVideoSize',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeVideoSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeVideoSizeRequest $request ChangeVideoSizeRequest
     *
     * @return ChangeVideoSizeResponse ChangeVideoSizeResponse
     */
    public function changeVideoSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVideoSizeWithOptions($request, $runtime);
    }

    /**
     * @param ChangeVideoSizeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSizeAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $changeVideoSizeReq = new ChangeVideoSizeRequest([]);
        OpenApiUtilClient::convert($request, $changeVideoSizeReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $changeVideoSizeReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->changeVideoSizeWithOptions($changeVideoSizeReq, $runtime);
    }

    /**
     * @param ConvertHdrVideoRequest $request ConvertHdrVideoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConvertHdrVideoResponse ConvertHdrVideoResponse
     */
    public function convertHdrVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bitrate)) {
            $body['Bitrate'] = $request->bitrate;
        }
        if (!Utils::isUnset($request->HDRFormat)) {
            $body['HDRFormat'] = $request->HDRFormat;
        }
        if (!Utils::isUnset($request->maxIlluminance)) {
            $body['MaxIlluminance'] = $request->maxIlluminance;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConvertHdrVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertHdrVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConvertHdrVideoRequest $request ConvertHdrVideoRequest
     *
     * @return ConvertHdrVideoResponse ConvertHdrVideoResponse
     */
    public function convertHdrVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertHdrVideoWithOptions($request, $runtime);
    }

    /**
     * @param ConvertHdrVideoAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $convertHdrVideoReq = new ConvertHdrVideoRequest([]);
        OpenApiUtilClient::convert($request, $convertHdrVideoReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $convertHdrVideoReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->convertHdrVideoWithOptions($convertHdrVideoReq, $runtime);
    }

    /**
     * @summary 视频人脸融合模板删除
     *  *
     * @param DeleteFaceVideoTemplateRequest $request DeleteFaceVideoTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFaceVideoTemplateResponse DeleteFaceVideoTemplateResponse
     */
    public function deleteFaceVideoTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceVideoTemplate',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频人脸融合模板删除
     *  *
     * @param DeleteFaceVideoTemplateRequest $request DeleteFaceVideoTemplateRequest
     *
     * @return DeleteFaceVideoTemplateResponse DeleteFaceVideoTemplateResponse
     */
    public function deleteFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 视频人像增强
     *  *
     * @param EnhancePortraitVideoRequest $request EnhancePortraitVideoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return EnhancePortraitVideoResponse EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnhancePortraitVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnhancePortraitVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频人像增强
     *  *
     * @param EnhancePortraitVideoRequest $request EnhancePortraitVideoRequest
     *
     * @return EnhancePortraitVideoResponse EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhancePortraitVideoWithOptions($request, $runtime);
    }

    /**
     * @param EnhancePortraitVideoAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $enhancePortraitVideoReq = new EnhancePortraitVideoRequest([]);
        OpenApiUtilClient::convert($request, $enhancePortraitVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $enhancePortraitVideoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->enhancePortraitVideoWithOptions($enhancePortraitVideoReq, $runtime);
    }

    /**
     * @param EnhanceVideoQualityRequest $request EnhanceVideoQualityRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EnhanceVideoQualityResponse EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bitrate)) {
            $body['Bitrate'] = $request->bitrate;
        }
        if (!Utils::isUnset($request->frameRate)) {
            $body['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->HDRFormat)) {
            $body['HDRFormat'] = $request->HDRFormat;
        }
        if (!Utils::isUnset($request->maxIlluminance)) {
            $body['MaxIlluminance'] = $request->maxIlluminance;
        }
        if (!Utils::isUnset($request->outPutHeight)) {
            $body['OutPutHeight'] = $request->outPutHeight;
        }
        if (!Utils::isUnset($request->outPutWidth)) {
            $body['OutPutWidth'] = $request->outPutWidth;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnhanceVideoQuality',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnhanceVideoQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnhanceVideoQualityRequest $request EnhanceVideoQualityRequest
     *
     * @return EnhanceVideoQualityResponse EnhanceVideoQualityResponse
     */
    public function enhanceVideoQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceVideoQualityWithOptions($request, $runtime);
    }

    /**
     * @param EnhanceVideoQualityAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $enhanceVideoQualityReq = new EnhanceVideoQualityRequest([]);
        OpenApiUtilClient::convert($request, $enhanceVideoQualityReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $enhanceVideoQualityReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->enhanceVideoQualityWithOptions($enhanceVideoQualityReq, $runtime);
    }

    /**
     * @param EraseVideoLogoRequest $request EraseVideoLogoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EraseVideoLogoResponse EraseVideoLogoResponse
     */
    public function eraseVideoLogoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->boxes)) {
            $body['Boxes'] = $request->boxes;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EraseVideoLogo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EraseVideoLogoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EraseVideoLogoRequest $request EraseVideoLogoRequest
     *
     * @return EraseVideoLogoResponse EraseVideoLogoResponse
     */
    public function eraseVideoLogo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoLogoWithOptions($request, $runtime);
    }

    /**
     * @param EraseVideoLogoAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $eraseVideoLogoReq = new EraseVideoLogoRequest([]);
        OpenApiUtilClient::convert($request, $eraseVideoLogoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $eraseVideoLogoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->eraseVideoLogoWithOptions($eraseVideoLogoReq, $runtime);
    }

    /**
     * @param EraseVideoSubtitlesRequest $request EraseVideoSubtitlesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EraseVideoSubtitlesResponse EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->BH)) {
            $body['BH'] = $request->BH;
        }
        if (!Utils::isUnset($request->BW)) {
            $body['BW'] = $request->BW;
        }
        if (!Utils::isUnset($request->BX)) {
            $body['BX'] = $request->BX;
        }
        if (!Utils::isUnset($request->BY)) {
            $body['BY'] = $request->BY;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EraseVideoSubtitles',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EraseVideoSubtitlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EraseVideoSubtitlesRequest $request EraseVideoSubtitlesRequest
     *
     * @return EraseVideoSubtitlesResponse EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoSubtitlesWithOptions($request, $runtime);
    }

    /**
     * @param EraseVideoSubtitlesAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $eraseVideoSubtitlesReq = new EraseVideoSubtitlesRequest([]);
        OpenApiUtilClient::convert($request, $eraseVideoSubtitlesReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $eraseVideoSubtitlesReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->eraseVideoSubtitlesWithOptions($eraseVideoSubtitlesReq, $runtime);
    }

    /**
     * @summary 视频人像卡通化
     *  *
     * @param GenerateHumanAnimeStyleVideoRequest $request GenerateHumanAnimeStyleVideoRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateHumanAnimeStyleVideoResponse GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cartoonStyle)) {
            $body['CartoonStyle'] = $request->cartoonStyle;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateHumanAnimeStyleVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateHumanAnimeStyleVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频人像卡通化
     *  *
     * @param GenerateHumanAnimeStyleVideoRequest $request GenerateHumanAnimeStyleVideoRequest
     *
     * @return GenerateHumanAnimeStyleVideoResponse GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanAnimeStyleVideoWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanAnimeStyleVideoAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $generateHumanAnimeStyleVideoReq = new GenerateHumanAnimeStyleVideoRequest([]);
        OpenApiUtilClient::convert($request, $generateHumanAnimeStyleVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $generateHumanAnimeStyleVideoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->generateHumanAnimeStyleVideoWithOptions($generateHumanAnimeStyleVideoReq, $runtime);
    }

    /**
     * @param GenerateVideoRequest $request GenerateVideoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateVideoResponse GenerateVideoResponse
     */
    public function generateVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->durationAdaption)) {
            $body['DurationAdaption'] = $request->durationAdaption;
        }
        if (!Utils::isUnset($request->fileList)) {
            $body['FileList'] = $request->fileList;
        }
        if (!Utils::isUnset($request->height)) {
            $body['Height'] = $request->height;
        }
        if (!Utils::isUnset($request->mute)) {
            $body['Mute'] = $request->mute;
        }
        if (!Utils::isUnset($request->puzzleEffect)) {
            $body['PuzzleEffect'] = $request->puzzleEffect;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->smartEffect)) {
            $body['SmartEffect'] = $request->smartEffect;
        }
        if (!Utils::isUnset($request->style)) {
            $body['Style'] = $request->style;
        }
        if (!Utils::isUnset($request->transitionStyle)) {
            $body['TransitionStyle'] = $request->transitionStyle;
        }
        if (!Utils::isUnset($request->width)) {
            $body['Width'] = $request->width;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateVideoRequest $request GenerateVideoRequest
     *
     * @return GenerateVideoResponse GenerateVideoResponse
     */
    public function generateVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoWithOptions($request, $runtime);
    }

    /**
     * @param GenerateVideoAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateVideoResponse
     */
    public function generateVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $generateVideoReq = new GenerateVideoRequest([]);
        OpenApiUtilClient::convert($request, $generateVideoReq);
        if (!Utils::isUnset($request->fileList)) {
            $i0 = 0;
            foreach ($request->fileList as $item0) {
                if (!Utils::isUnset($item0->fileUrlObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->fileUrlObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp          = @$generateVideoReq->fileList[$i0];
                    $tmp->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i0           = $i0 + 1;
                }
            }
        }

        return $this->generateVideoWithOptions($generateVideoReq, $runtime);
    }

    /**
     * @param GetAsyncJobResultRequest $request GetAsyncJobResultRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncJobResultResponse GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncJobResult',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAsyncJobResultRequest $request GetAsyncJobResultRequest
     *
     * @return GetAsyncJobResultResponse GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
    }

    /**
     * @param InterpolateVideoFrameRequest $request InterpolateVideoFrameRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return InterpolateVideoFrameResponse InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bitrate)) {
            $body['Bitrate'] = $request->bitrate;
        }
        if (!Utils::isUnset($request->frameRate)) {
            $body['FrameRate'] = $request->frameRate;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InterpolateVideoFrame',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InterpolateVideoFrameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InterpolateVideoFrameRequest $request InterpolateVideoFrameRequest
     *
     * @return InterpolateVideoFrameResponse InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->interpolateVideoFrameWithOptions($request, $runtime);
    }

    /**
     * @param InterpolateVideoFrameAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $interpolateVideoFrameReq = new InterpolateVideoFrameRequest([]);
        OpenApiUtilClient::convert($request, $interpolateVideoFrameReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $interpolateVideoFrameReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->interpolateVideoFrameWithOptions($interpolateVideoFrameReq, $runtime);
    }

    /**
     * @param MergeVideoFaceRequest $request MergeVideoFaceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return MergeVideoFaceResponse MergeVideoFaceResponse
     */
    public function mergeVideoFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addWatermark)) {
            $body['AddWatermark'] = $request->addWatermark;
        }
        if (!Utils::isUnset($request->enhance)) {
            $body['Enhance'] = $request->enhance;
        }
        if (!Utils::isUnset($request->referenceURL)) {
            $body['ReferenceURL'] = $request->referenceURL;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $body['WatermarkType'] = $request->watermarkType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MergeVideoFace',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MergeVideoFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MergeVideoFaceRequest $request MergeVideoFaceRequest
     *
     * @return MergeVideoFaceResponse MergeVideoFaceResponse
     */
    public function mergeVideoFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeVideoFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeVideoFaceAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $mergeVideoFaceReq = new MergeVideoFaceRequest([]);
        OpenApiUtilClient::convert($request, $mergeVideoFaceReq);
        if (!Utils::isUnset($request->referenceURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->referenceURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $mergeVideoFaceReq->referenceURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $mergeVideoFaceReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->mergeVideoFaceWithOptions($mergeVideoFaceReq, $runtime);
    }

    /**
     * @summary 视频模板融合换脸
     *  *
     * @param MergeVideoModelFaceRequest $request MergeVideoModelFaceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return MergeVideoModelFaceResponse MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addWatermark)) {
            $body['AddWatermark'] = $request->addWatermark;
        }
        if (!Utils::isUnset($request->enhance)) {
            $body['Enhance'] = $request->enhance;
        }
        if (!Utils::isUnset($request->faceImageURL)) {
            $body['FaceImageURL'] = $request->faceImageURL;
        }
        if (!Utils::isUnset($request->mergeInfos)) {
            $body['MergeInfos'] = $request->mergeInfos;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $body['WatermarkType'] = $request->watermarkType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MergeVideoModelFace',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MergeVideoModelFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频模板融合换脸
     *  *
     * @param MergeVideoModelFaceRequest $request MergeVideoModelFaceRequest
     *
     * @return MergeVideoModelFaceResponse MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeVideoModelFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeVideoModelFaceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFaceAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $mergeVideoModelFaceReq = new MergeVideoModelFaceRequest([]);
        OpenApiUtilClient::convert($request, $mergeVideoModelFaceReq);
        if (!Utils::isUnset($request->faceImageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->faceImageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $mergeVideoModelFaceReq->faceImageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->mergeVideoModelFaceWithOptions($mergeVideoModelFaceReq, $runtime);
    }

    /**
     * @summary 视频人脸融合模板查询
     *  *
     * @param QueryFaceVideoTemplateRequest $request QueryFaceVideoTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryFaceVideoTemplateResponse QueryFaceVideoTemplateResponse
     */
    public function queryFaceVideoTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceVideoTemplate',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频人脸融合模板查询
     *  *
     * @param QueryFaceVideoTemplateRequest $request QueryFaceVideoTemplateRequest
     *
     * @return QueryFaceVideoTemplateResponse QueryFaceVideoTemplateResponse
     */
    public function queryFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 视频降噪
     *  *
     * @param ReduceVideoNoiseRequest $request ReduceVideoNoiseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ReduceVideoNoiseResponse ReduceVideoNoiseResponse
     */
    public function reduceVideoNoiseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReduceVideoNoise',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReduceVideoNoiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 视频降噪
     *  *
     * @param ReduceVideoNoiseRequest $request ReduceVideoNoiseRequest
     *
     * @return ReduceVideoNoiseResponse ReduceVideoNoiseResponse
     */
    public function reduceVideoNoise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reduceVideoNoiseWithOptions($request, $runtime);
    }

    /**
     * @param ReduceVideoNoiseAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReduceVideoNoiseResponse
     */
    public function reduceVideoNoiseAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $reduceVideoNoiseReq = new ReduceVideoNoiseRequest([]);
        OpenApiUtilClient::convert($request, $reduceVideoNoiseReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $reduceVideoNoiseReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->reduceVideoNoiseWithOptions($reduceVideoNoiseReq, $runtime);
    }

    /**
     * @param SuperResolveVideoRequest $request SuperResolveVideoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SuperResolveVideoResponse SuperResolveVideoResponse
     */
    public function superResolveVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bitRate)) {
            $body['BitRate'] = $request->bitRate;
        }
        if (!Utils::isUnset($request->videoUrl)) {
            $body['VideoUrl'] = $request->videoUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuperResolveVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuperResolveVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuperResolveVideoRequest $request SuperResolveVideoRequest
     *
     * @return SuperResolveVideoResponse SuperResolveVideoResponse
     */
    public function superResolveVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->superResolveVideoWithOptions($request, $runtime);
    }

    /**
     * @param SuperResolveVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $superResolveVideoReq = new SuperResolveVideoRequest([]);
        OpenApiUtilClient::convert($request, $superResolveVideoReq);
        if (!Utils::isUnset($request->videoUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $superResolveVideoReq->videoUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->superResolveVideoWithOptions($superResolveVideoReq, $runtime);
    }

    /**
     * @param ToneSdrVideoRequest $request ToneSdrVideoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ToneSdrVideoResponse ToneSdrVideoResponse
     */
    public function toneSdrVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bitrate)) {
            $body['Bitrate'] = $request->bitrate;
        }
        if (!Utils::isUnset($request->recolorModel)) {
            $body['RecolorModel'] = $request->recolorModel;
        }
        if (!Utils::isUnset($request->videoURL)) {
            $body['VideoURL'] = $request->videoURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ToneSdrVideo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ToneSdrVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ToneSdrVideoRequest $request ToneSdrVideoRequest
     *
     * @return ToneSdrVideoResponse ToneSdrVideoResponse
     */
    public function toneSdrVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->toneSdrVideoWithOptions($request, $runtime);
    }

    /**
     * @param ToneSdrVideoAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideoAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $toneSdrVideoReq = new ToneSdrVideoRequest([]);
        OpenApiUtilClient::convert($request, $toneSdrVideoReq);
        if (!Utils::isUnset($request->videoURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->videoURLObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $toneSdrVideoReq->videoURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->toneSdrVideoWithOptions($toneSdrVideoReq, $runtime);
    }
}
