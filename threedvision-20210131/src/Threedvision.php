<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularImageDepthAdvanceRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularImageDepthRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularImageDepthResponse;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoImageDepthRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoImageDepthResponse;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoVideoDepthAdvanceRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoVideoDepthRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoVideoDepthResponse;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructBodyBySingleImageAdvanceRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructBodyBySingleImageRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructBodyBySingleImageResponse;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructThreeDMultiViewAdvanceRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructThreeDMultiViewRequest;
use AlibabaCloud\SDK\Threedvision\V20210131\Models\ReconstructThreeDMultiViewResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Threedvision extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('threedvision', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ReconstructBodyBySingleImageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ReconstructBodyBySingleImageResponse
     */
    public function reconstructBodyBySingleImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReconstructBodyBySingleImageResponse::fromMap($this->doRPCRequest('ReconstructBodyBySingleImage', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReconstructBodyBySingleImageRequest $request
     *
     * @return ReconstructBodyBySingleImageResponse
     */
    public function reconstructBodyBySingleImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reconstructBodyBySingleImageWithOptions($request, $runtime);
    }

    /**
     * @param ReconstructBodyBySingleImageAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ReconstructBodyBySingleImageResponse
     */
    public function reconstructBodyBySingleImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'threedvision',
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
        $reconstructBodyBySingleImageReq = new ReconstructBodyBySingleImageRequest([]);
        OpenApiUtilClient::convert($request, $reconstructBodyBySingleImageReq);
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
        $reconstructBodyBySingleImageReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->reconstructBodyBySingleImageWithOptions($reconstructBodyBySingleImageReq, $runtime);
    }

    /**
     * @param ReconstructThreeDMultiViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReconstructThreeDMultiViewResponse
     */
    public function reconstructThreeDMultiViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReconstructThreeDMultiViewResponse::fromMap($this->doRPCRequest('ReconstructThreeDMultiView', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReconstructThreeDMultiViewRequest $request
     *
     * @return ReconstructThreeDMultiViewResponse
     */
    public function reconstructThreeDMultiView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reconstructThreeDMultiViewWithOptions($request, $runtime);
    }

    /**
     * @param ReconstructThreeDMultiViewAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ReconstructThreeDMultiViewResponse
     */
    public function reconstructThreeDMultiViewAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'threedvision',
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
        $reconstructThreeDMultiViewReq = new ReconstructThreeDMultiViewRequest([]);
        OpenApiUtilClient::convert($request, $reconstructThreeDMultiViewReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->zipFileUrlObject,
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
        $reconstructThreeDMultiViewReq->zipFileUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->reconstructThreeDMultiViewWithOptions($reconstructThreeDMultiViewReq, $runtime);
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

        return GetAsyncJobResultResponse::fromMap($this->doRPCRequest('GetAsyncJobResult', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EstimateMonocularImageDepthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EstimateMonocularImageDepthResponse
     */
    public function estimateMonocularImageDepthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EstimateMonocularImageDepthResponse::fromMap($this->doRPCRequest('EstimateMonocularImageDepth', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EstimateMonocularImageDepthRequest $request
     *
     * @return EstimateMonocularImageDepthResponse
     */
    public function estimateMonocularImageDepth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->estimateMonocularImageDepthWithOptions($request, $runtime);
    }

    /**
     * @param EstimateMonocularImageDepthAdvanceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return EstimateMonocularImageDepthResponse
     */
    public function estimateMonocularImageDepthAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'threedvision',
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
        $estimateMonocularImageDepthReq = new EstimateMonocularImageDepthRequest([]);
        OpenApiUtilClient::convert($request, $estimateMonocularImageDepthReq);
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
        $estimateMonocularImageDepthReq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->estimateMonocularImageDepthWithOptions($estimateMonocularImageDepthReq, $runtime);
    }

    /**
     * @param EstimateStereoImageDepthRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EstimateStereoImageDepthResponse
     */
    public function estimateStereoImageDepthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EstimateStereoImageDepthResponse::fromMap($this->doRPCRequest('EstimateStereoImageDepth', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EstimateStereoImageDepthRequest $request
     *
     * @return EstimateStereoImageDepthResponse
     */
    public function estimateStereoImageDepth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->estimateStereoImageDepthWithOptions($request, $runtime);
    }

    /**
     * @param EstimateStereoVideoDepthRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EstimateStereoVideoDepthResponse
     */
    public function estimateStereoVideoDepthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EstimateStereoVideoDepthResponse::fromMap($this->doRPCRequest('EstimateStereoVideoDepth', '2021-01-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EstimateStereoVideoDepthRequest $request
     *
     * @return EstimateStereoVideoDepthResponse
     */
    public function estimateStereoVideoDepth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->estimateStereoVideoDepthWithOptions($request, $runtime);
    }

    /**
     * @param EstimateStereoVideoDepthAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return EstimateStereoVideoDepthResponse
     */
    public function estimateStereoVideoDepthAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'threedvision',
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
        $estimateStereoVideoDepthReq = new EstimateStereoVideoDepthRequest([]);
        OpenApiUtilClient::convert($request, $estimateStereoVideoDepthReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoURLObject,
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
        $estimateStereoVideoDepthReq->videoURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->estimateStereoVideoDepthWithOptions($estimateStereoVideoDepthReq, $runtime);
    }
}
