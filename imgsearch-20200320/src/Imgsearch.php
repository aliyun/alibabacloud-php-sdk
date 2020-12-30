<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\AddImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\AddImageResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\CreateImageDbRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\CreateImageDbResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\DeleteImageDbRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\DeleteImageDbResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImageDbsResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImagesRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImagesResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageAdvanceRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponse;
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

class Imgsearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imgsearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddImageResponse::fromMap($this->doRPCRequest('AddImage', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @param AddImageAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddImageResponse
     */
    public function addImageAdvance($request, $runtime)
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
            'product'  => 'imgsearch',
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
        $addImageReq = new AddImageRequest([]);
        OpenApiUtilClient::convert($request, $addImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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
        $addImageReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addImageWithOptions($addImageReq, $runtime);
    }

    /**
     * @param CreateImageDbRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateImageDbResponse
     */
    public function createImageDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageDbResponse::fromMap($this->doRPCRequest('CreateImageDb', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateImageDbRequest $request
     *
     * @return CreateImageDbResponse
     */
    public function createImageDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageDbWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageDbRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteImageDbResponse
     */
    public function deleteImageDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageDbResponse::fromMap($this->doRPCRequest('DeleteImageDb', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageDbRequest $request
     *
     * @return DeleteImageDbResponse
     */
    public function deleteImageDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageDbWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListImageDbsResponse
     */
    public function listImageDbsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListImageDbsResponse::fromMap($this->doRPCRequest('ListImageDbs', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListImageDbsResponse
     */
    public function listImageDbs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageDbsWithOptions($runtime);
    }

    /**
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListImagesResponse::fromMap($this->doRPCRequest('ListImages', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @param SearchImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchImageResponse::fromMap($this->doRPCRequest('SearchImage', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageWithOptions($request, $runtime);
    }

    /**
     * @param SearchImageAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageAdvance($request, $runtime)
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
            'product'  => 'imgsearch',
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
        $searchImageReq = new SearchImageRequest([]);
        OpenApiUtilClient::convert($request, $searchImageReq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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
        $searchImageReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->searchImageWithOptions($searchImageReq, $runtime);
    }
}
