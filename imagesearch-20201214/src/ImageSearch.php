<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ImageSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds an image to an Image Search instance.
     *
     * @remarks
     * You can call this operation to add an image to an Image Search instance.
     * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     * ## QPS limits
     * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
     *
     * @param request - AddImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->customContent) {
            @$body['CustomContent'] = $request->customContent;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->intAttr) {
            @$body['IntAttr'] = $request->intAttr;
        }

        if (null !== $request->intAttr2) {
            @$body['IntAttr2'] = $request->intAttr2;
        }

        if (null !== $request->intAttr3) {
            @$body['IntAttr3'] = $request->intAttr3;
        }

        if (null !== $request->intAttr4) {
            @$body['IntAttr4'] = $request->intAttr4;
        }

        if (null !== $request->picContent) {
            @$body['PicContent'] = $request->picContent;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->strAttr) {
            @$body['StrAttr'] = $request->strAttr;
        }

        if (null !== $request->strAttr2) {
            @$body['StrAttr2'] = $request->strAttr2;
        }

        if (null !== $request->strAttr3) {
            @$body['StrAttr3'] = $request->strAttr3;
        }

        if (null !== $request->strAttr4) {
            @$body['StrAttr4'] = $request->strAttr4;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds an image to an Image Search instance.
     *
     * @remarks
     * You can call this operation to add an image to an Image Search instance.
     * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     * ## QPS limits
     * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
     *
     * @param request - AddImageRequest
     * @returns AddImageResponse
     *
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
            'product'  => 'ImageSearch',
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
        Utils::convert($runtime, $ossRuntime);
        $addImageReq = new AddImageRequest([]);
        Utils::convert($request, $addImageReq);
        if (null !== $request->picContentObject) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->picContentObject,
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
            $addImageReq->picContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->addImageWithOptions($addImageReq, $runtime);
    }

    /**
     * 对比图片相似值
     *
     * @param request - CompareSimilarByImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CompareSimilarByImageResponse
     *
     * @param CompareSimilarByImageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->primaryPicContent) {
            @$body['PrimaryPicContent'] = $request->primaryPicContent;
        }

        if (null !== $request->secondaryPicContent) {
            @$body['SecondaryPicContent'] = $request->secondaryPicContent;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CompareSimilarByImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CompareSimilarByImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CompareSimilarByImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 对比图片相似值
     *
     * @param request - CompareSimilarByImageRequest
     * @returns CompareSimilarByImageResponse
     *
     * @param CompareSimilarByImageRequest $request
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareSimilarByImageWithOptions($request, $runtime);
    }

    /**
     * @param CompareSimilarByImageAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImageAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
            'product'  => 'ImageSearch',
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
        Utils::convert($runtime, $ossRuntime);
        $compareSimilarByImageReq = new CompareSimilarByImageRequest([]);
        Utils::convert($request, $compareSimilarByImageReq);
        if (null !== $request->primaryPicContentObject) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->primaryPicContentObject,
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
            $compareSimilarByImageReq->primaryPicContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        if (null !== $request->secondaryPicContentObject) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->secondaryPicContentObject,
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
            $compareSimilarByImageReq->secondaryPicContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->compareSimilarByImageWithOptions($compareSimilarByImageReq, $runtime);
    }

    /**
     * This topic describes the syntax of the DeleteImage operation and provides examples of this operation. You can call this operation to delete images from an Image Search instance.
     *
     * @remarks
     * This operation deletes images from an Image Search instance.
     * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *
     * @param request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isDeleteByFilter) {
            @$body['IsDeleteByFilter'] = $request->isDeleteByFilter;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the DeleteImage operation and provides examples of this operation. You can call this operation to delete images from an Image Search instance.
     *
     * @remarks
     * This operation deletes images from an Image Search instance.
     * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *
     * @param request - DeleteImageRequest
     * @returns DeleteImageResponse
     *
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
     * This topic describes the syntax of the Detail operation and provides examples of this operation. You can call this operation to query instance details.
     *
     * @remarks
     * This operation queries instance details.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
     *
     * @param request - DetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DetailResponse
     *
     * @param DetailRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DetailResponse
     */
    public function detailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'Detail',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the Detail operation and provides examples of this operation. You can call this operation to query instance details.
     *
     * @remarks
     * This operation queries instance details.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
     *
     * @param request - DetailRequest
     * @returns DetailResponse
     *
     * @param DetailRequest $request
     *
     * @return DetailResponse
     */
    public function detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the DumpMeta operation and provides examples of this operation. You can call this operation to create a task for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation creates a task for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - DumpMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DumpMetaResponse
     *
     * @param DumpMetaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DumpMetaResponse
     */
    public function dumpMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DumpMeta',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DumpMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the DumpMeta operation and provides examples of this operation. You can call this operation to create a task for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation creates a task for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - DumpMetaRequest
     * @returns DumpMetaResponse
     *
     * @param DumpMetaRequest $request
     *
     * @return DumpMetaResponse
     */
    public function dumpMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the DumpMetaList operation and provides examples of this operation. You can call this operation to query tasks that are used for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - DumpMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DumpMetaListResponse
     *
     * @param DumpMetaListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DumpMetaListResponse
     */
    public function dumpMetaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DumpMetaList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DumpMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DumpMetaListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the DumpMetaList operation and provides examples of this operation. You can call this operation to query tasks that are used for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - DumpMetaListRequest
     * @returns DumpMetaListResponse
     *
     * @param DumpMetaListRequest $request
     *
     * @return DumpMetaListResponse
     */
    public function dumpMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaListWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the IncreaseInstance operation and provides examples of this operation. You can call this operation to create a batch task on an Image Search instance.
     *
     * @remarks
     * This operation creates a batch task on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - IncreaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns IncreaseInstanceResponse
     *
     * @param IncreaseInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return IncreaseInstanceResponse
     */
    public function increaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->callbackAddress) {
            @$query['CallbackAddress'] = $request->callbackAddress;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'IncreaseInstance',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return IncreaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return IncreaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the IncreaseInstance operation and provides examples of this operation. You can call this operation to create a batch task on an Image Search instance.
     *
     * @remarks
     * This operation creates a batch task on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - IncreaseInstanceRequest
     * @returns IncreaseInstanceResponse
     *
     * @param IncreaseInstanceRequest $request
     *
     * @return IncreaseInstanceResponse
     */
    public function increaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseInstanceWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the IncreaseList operation and provides examples of this operation. You can call this operation to query batch tasks on an Image Search instance.
     *
     * @remarks
     * This operation queries batch tasks on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - IncreaseListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns IncreaseListResponse
     *
     * @param IncreaseListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IncreaseListResponse
     */
    public function increaseListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'IncreaseList',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return IncreaseListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return IncreaseListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the IncreaseList operation and provides examples of this operation. You can call this operation to query batch tasks on an Image Search instance.
     *
     * @remarks
     * This operation queries batch tasks on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
     *
     * @param request - IncreaseListRequest
     * @returns IncreaseListResponse
     *
     * @param IncreaseListRequest $request
     *
     * @return IncreaseListResponse
     */
    public function increaseList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseListWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the SearchByName operation and provides examples of this operation. You can call this operation to search for images by image name on an Image Search instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *
     * @param request - SearchImageByNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchImageByNameResponse
     *
     * @param SearchImageByNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->distinctProductId) {
            @$body['DistinctProductId'] = $request->distinctProductId;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByName',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchImageByNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchImageByNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the SearchByName operation and provides examples of this operation. You can call this operation to search for images by image name on an Image Search instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     *
     * @param request - SearchImageByNameRequest
     * @returns SearchImageByNameResponse
     *
     * @param SearchImageByNameRequest $request
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByNameWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax of the SearchByPic operation and provides examples of this operation. You can call this operation to search for images by image on an Image Search Instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     * ## SDK release notes
     * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
     *
     * @param request - SearchImageByPicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchImageByPicResponse
     *
     * @param SearchImageByPicRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->distinctProductId) {
            @$body['DistinctProductId'] = $request->distinctProductId;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->picContent) {
            @$body['PicContent'] = $request->picContent;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchImageByPic',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchImageByPicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchImageByPicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the SearchByPic operation and provides examples of this operation. You can call this operation to search for images by image on an Image Search Instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     * ## SDK release notes
     * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
     *
     * @param request - SearchImageByPicRequest
     * @returns SearchImageByPicResponse
     *
     * @param SearchImageByPicRequest $request
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByPicWithOptions($request, $runtime);
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
            'product'  => 'ImageSearch',
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
        Utils::convert($runtime, $ossRuntime);
        $searchImageByPicReq = new SearchImageByPicRequest([]);
        Utils::convert($request, $searchImageByPicReq);
        if (null !== $request->picContentObject) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->picContentObject,
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
            $searchImageByPicReq->picContent = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->searchImageByPicWithOptions($searchImageByPicReq, $runtime);
    }

    /**
     * This topic describes the syntax of the UpdateImage operation and provides examples of this operation. You can call this operation to update image information on an Image Search instance.
     *
     * @remarks
     * This operation updates image information on an Image Search instance.
     * > *   Limits are imposed on the instance creation time.
     * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *
     * @param request - UpdateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->intAttr3) {
            @$query['IntAttr3'] = $request->intAttr3;
        }

        if (null !== $request->intAttr4) {
            @$query['IntAttr4'] = $request->intAttr4;
        }

        if (null !== $request->strAttr3) {
            @$query['StrAttr3'] = $request->strAttr3;
        }

        if (null !== $request->strAttr4) {
            @$query['StrAttr4'] = $request->strAttr4;
        }

        $body = [];
        if (null !== $request->customContent) {
            @$body['CustomContent'] = $request->customContent;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->intAttr) {
            @$body['IntAttr'] = $request->intAttr;
        }

        if (null !== $request->intAttr2) {
            @$body['IntAttr2'] = $request->intAttr2;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->strAttr) {
            @$body['StrAttr'] = $request->strAttr;
        }

        if (null !== $request->strAttr2) {
            @$body['StrAttr2'] = $request->strAttr2;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateImage',
            'version'     => '2020-12-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax of the UpdateImage operation and provides examples of this operation. You can call this operation to update image information on an Image Search instance.
     *
     * @remarks
     * This operation updates image information on an Image Search instance.
     * > *   Limits are imposed on the instance creation time.
     * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
     *
     * @param request - UpdateImageRequest
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }
}
