<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param DetectVideoShotRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectVideoShotResponse::fromMap($this->doRPCRequest('DetectVideoShot', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'product'  => 'videorecog',
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
        $detectVideoShotReq = new DetectVideoShotRequest([]);
        OpenApiUtilClient::convert($request, $detectVideoShotReq);
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
        $detectVideoShotReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectVideoShotWithOptions($detectVideoShotReq, $runtime);
    }

    /**
     * @param GenerateVideoCoverRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateVideoCoverResponse::fromMap($this->doRPCRequest('GenerateVideoCover', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'product'  => 'videorecog',
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
        $generateVideoCoverReq = new GenerateVideoCoverRequest([]);
        OpenApiUtilClient::convert($request, $generateVideoCoverReq);
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
        $generateVideoCoverReq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->generateVideoCoverWithOptions($generateVideoCoverReq, $runtime);
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

        return GetAsyncJobResultResponse::fromMap($this->doRPCRequest('GetAsyncJobResult', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
