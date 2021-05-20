<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponse;
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

        return AddImageResponse::fromMap($this->doRPCRequest('AddImage', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $addImageReq = new AddImageRequest([]);
        OpenApiUtilClient::convert($request, $addImageReq);
        if (!Utils::isUnset($request->picContentObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
            $addImageReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->addImageWithOptions($addImageReq, $runtime);
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

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SearchImageByNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchImageByNameResponse::fromMap($this->doRPCRequest('SearchImageByName', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SearchImageByPicRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchImageByPicResponse::fromMap($this->doRPCRequest('SearchImageByPic', '2020-12-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $searchImageByPicReq = new SearchImageByPicRequest([]);
        OpenApiUtilClient::convert($request, $searchImageByPicReq);
        if (!Utils::isUnset($request->picContentObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
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
            $searchImageByPicReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->searchImageByPicWithOptions($searchImageByPicReq, $runtime);
    }
}
