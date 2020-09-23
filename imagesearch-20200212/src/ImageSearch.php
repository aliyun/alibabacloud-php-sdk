<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\Models\SearchImageByPicResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ImageSearch extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param SearchImageByNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByName($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchImageByNameResponse::fromMap($this->doRequest('SearchImageByName', 'HTTPS', 'POST', '2020-02-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param SearchImageByPicRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPic($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchImageByPicResponse::fromMap($this->doRequest('SearchImageByPic', 'HTTPS', 'POST', '2020-02-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param SearchImageByPicAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicAdvance($request, $runtime)
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
            'product'  => 'ImageSearch',
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
        $searchImageByPicreq = new SearchImageByPicRequest([]);
        RpcUtils::convert($request, $searchImageByPicreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->picContentObject,
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
        $searchImageByPicreq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->searchImageByPic($searchImageByPicreq, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageResponse::fromMap($this->doRequest('DeleteImage', 'HTTPS', 'POST', '2020-02-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param AddImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImage($request, $runtime)
    {
        Utils::validateModel($request);

        return AddImageResponse::fromMap($this->doRequest('AddImage', 'HTTPS', 'POST', '2020-02-12', 'AK', null, $request, $runtime));
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
            'product'  => 'ImageSearch',
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
        $addImagereq = new AddImageRequest([]);
        RpcUtils::convert($request, $addImagereq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
        $fileObj                = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->picContentObject,
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
        $addImagereq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addImage($addImagereq, $runtime);
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
