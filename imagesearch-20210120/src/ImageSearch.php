<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\CommodityTitleAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\CommodityTitleRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\CommodityTitleResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\GeneralRecognitionAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\GeneralRecognitionRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\GeneralRecognitionResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageAmazonRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageAmazonResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageCategoryRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageCategoryResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageDuplicationRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageDuplicationResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponse;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageSegmentationAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageSegmentationRequest;
use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageSegmentationResponse;
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
     * @param CommodityTitleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CommodityTitleResponse
     */
    public function commodityTitleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CommodityTitle',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommodityTitleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommodityTitleRequest $request
     *
     * @return CommodityTitleResponse
     */
    public function commodityTitle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commodityTitleWithOptions($request, $runtime);
    }

    /**
     * @param CommodityTitleAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CommodityTitleResponse
     */
    public function commodityTitleAdvance($request, $runtime)
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
        $commodityTitleReq = new CommodityTitleRequest([]);
        OpenApiUtilClient::convert($request, $commodityTitleReq);
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
            $commodityTitleReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->commodityTitleWithOptions($commodityTitleReq, $runtime);
    }

    /**
     * @param GeneralRecognitionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GeneralRecognitionResponse
     */
    public function generalRecognitionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GeneralRecognition',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GeneralRecognitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GeneralRecognitionRequest $request
     *
     * @return GeneralRecognitionResponse
     */
    public function generalRecognition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generalRecognitionWithOptions($request, $runtime);
    }

    /**
     * @param GeneralRecognitionAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GeneralRecognitionResponse
     */
    public function generalRecognitionAdvance($request, $runtime)
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
        $generalRecognitionReq = new GeneralRecognitionRequest([]);
        OpenApiUtilClient::convert($request, $generalRecognitionReq);
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
            $generalRecognitionReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->generalRecognitionWithOptions($generalRecognitionReq, $runtime);
    }

    /**
     * @param ImageAmazonRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImageAmazonResponse
     */
    public function imageAmazonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImageAmazon',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageAmazonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageAmazonRequest $request
     *
     * @return ImageAmazonResponse
     */
    public function imageAmazon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageAmazonWithOptions($request, $runtime);
    }

    /**
     * @param ImageCategoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImageCategoryResponse
     */
    public function imageCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImageCategory',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageCategoryRequest $request
     *
     * @return ImageCategoryResponse
     */
    public function imageCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ImageDuplicationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ImageDuplicationResponse
     */
    public function imageDuplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImageDuplication',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageDuplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageDuplicationRequest $request
     *
     * @return ImageDuplicationResponse
     */
    public function imageDuplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageDuplicationWithOptions($request, $runtime);
    }

    /**
     * @param ImagePropertyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImagePropertyResponse
     */
    public function imagePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImageProperty',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImagePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImagePropertyRequest $request
     *
     * @return ImagePropertyResponse
     */
    public function imageProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imagePropertyWithOptions($request, $runtime);
    }

    /**
     * @param ImageSegmentationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImageSegmentationResponse
     */
    public function imageSegmentationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ImageSegmentation',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageSegmentationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageSegmentationRequest $request
     *
     * @return ImageSegmentationResponse
     */
    public function imageSegmentation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageSegmentationWithOptions($request, $runtime);
    }

    /**
     * @param ImageSegmentationAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImageSegmentationResponse
     */
    public function imageSegmentationAdvance($request, $runtime)
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
        $imageSegmentationReq = new ImageSegmentationRequest([]);
        OpenApiUtilClient::convert($request, $imageSegmentationReq);
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
            $imageSegmentationReq->picContent = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->imageSegmentationWithOptions($imageSegmentationReq, $runtime);
    }
}
