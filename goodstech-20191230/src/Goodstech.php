<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponse;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureAttributeAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureAttributeRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureAttributeResponse;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureSpuAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureSpuRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\RecognizeFurnitureSpuResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Goodstech extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('goodstech', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ClassifyCommodityRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageURL)) {
            $query['ImageURL'] = $request->imageURL;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClassifyCommodity',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClassifyCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClassifyCommodityRequest $request
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyCommodityWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyCommodityAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodityAdvance($request, $runtime)
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
            'product'  => 'goodstech',
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
        $classifyCommodityReq = new ClassifyCommodityRequest([]);
        OpenApiUtilClient::convert($request, $classifyCommodityReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageURLObject,
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
            $classifyCommodityReq->imageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->classifyCommodityWithOptions($classifyCommodityReq, $runtime);
    }

    /**
     * @param RecognizeFurnitureAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeFurnitureAttributeResponse
     */
    public function recognizeFurnitureAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageURL)) {
            $body['ImageURL'] = $request->imageURL;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecognizeFurnitureAttribute',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFurnitureAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeFurnitureAttributeRequest $request
     *
     * @return RecognizeFurnitureAttributeResponse
     */
    public function recognizeFurnitureAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFurnitureAttributeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFurnitureAttributeAdvanceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RecognizeFurnitureAttributeResponse
     */
    public function recognizeFurnitureAttributeAdvance($request, $runtime)
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
            'product'  => 'goodstech',
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
        $recognizeFurnitureAttributeReq = new RecognizeFurnitureAttributeRequest([]);
        OpenApiUtilClient::convert($request, $recognizeFurnitureAttributeReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeFurnitureAttributeReq->imageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->recognizeFurnitureAttributeWithOptions($recognizeFurnitureAttributeReq, $runtime);
    }

    /**
     * @param RecognizeFurnitureSpuRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeFurnitureSpuResponse
     */
    public function recognizeFurnitureSpuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageURL)) {
            $body['ImageURL'] = $request->imageURL;
        }
        if (!Utils::isUnset($request->XLength)) {
            $body['XLength'] = $request->XLength;
        }
        if (!Utils::isUnset($request->YLength)) {
            $body['YLength'] = $request->YLength;
        }
        if (!Utils::isUnset($request->ZLength)) {
            $body['ZLength'] = $request->ZLength;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecognizeFurnitureSpu',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecognizeFurnitureSpuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecognizeFurnitureSpuRequest $request
     *
     * @return RecognizeFurnitureSpuResponse
     */
    public function recognizeFurnitureSpu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeFurnitureSpuWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeFurnitureSpuAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeFurnitureSpuResponse
     */
    public function recognizeFurnitureSpuAdvance($request, $runtime)
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
            'product'  => 'goodstech',
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
        $recognizeFurnitureSpuReq = new RecognizeFurnitureSpuRequest([]);
        OpenApiUtilClient::convert($request, $recognizeFurnitureSpuReq);
        if (!Utils::isUnset($request->imageURLObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageURLObject,
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
            $recognizeFurnitureSpuReq->imageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->recognizeFurnitureSpuWithOptions($recognizeFurnitureSpuReq, $runtime);
    }
}
