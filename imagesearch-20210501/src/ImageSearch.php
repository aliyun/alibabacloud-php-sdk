<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\GetProductInfoByIdsRequest;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\GetProductInfoByIdsResponse;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponse;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlRequest;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponse;
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
use Darabonba\OpenApi\Models\Params;
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
     * @param GetProductInfoByIdsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetProductInfoByIdsResponse
     */
    public function getProductInfoByIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetProductInfoByIds',
            'version'     => '2021-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductInfoByIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProductInfoByIdsRequest $request
     *
     * @return GetProductInfoByIdsResponse
     */
    public function getProductInfoByIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductInfoByIdsWithOptions($request, $runtime);
    }

    /**
     * @param SearchByPicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchByPicResponse
     */
    public function searchByPicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['UserType'] = $request->userType;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchByPic',
            'version'     => '2021-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchByPicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchByPicRequest $request
     *
     * @return SearchByPicResponse
     */
    public function searchByPic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchByPicWithOptions($request, $runtime);
    }

    /**
     * @param SearchByPicAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SearchByPicResponse
     */
    public function searchByPicAdvance($request, $runtime)
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
        $searchByPicReq = new SearchByPicRequest([]);
        OpenApiUtilClient::convert($request, $searchByPicReq);
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
            $searchByPicReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->searchByPicWithOptions($searchByPicReq, $runtime);
    }

    /**
     * @param SearchByUrlRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchByUrlResponse
     */
    public function searchByUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['UserType'] = $request->userType;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchByUrl',
            'version'     => '2021-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchByUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchByUrlRequest $request
     *
     * @return SearchByUrlResponse
     */
    public function searchByUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchByUrlWithOptions($request, $runtime);
    }
}
