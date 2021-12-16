<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFacesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAuthKeyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateAuthKeyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateFaceConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateFaceConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateRPSDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateRPSDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceUsageRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceUsageResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeRPSDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeRPSDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSdkUrlRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSdkUrlResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUploadInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUploadInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUserStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeWhitelistSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitDeviceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitDeviceResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateAppPackageRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateAppPackageResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateFaceConfigRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateFaceConfigResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateVerifySettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\UpdateVerifySettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyDeviceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyDeviceResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse;
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

class Cloudauth extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CompareFaceVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->sourceCertifyId)) {
            $body['SourceCertifyId'] = $request->sourceCertifyId;
        }
        if (!Utils::isUnset($request->sourceFaceContrastPicture)) {
            $body['SourceFaceContrastPicture'] = $request->sourceFaceContrastPicture;
        }
        if (!Utils::isUnset($request->sourceFaceContrastPictureUrl)) {
            $body['SourceFaceContrastPictureUrl'] = $request->sourceFaceContrastPictureUrl;
        }
        if (!Utils::isUnset($request->sourceOssBucketName)) {
            $body['SourceOssBucketName'] = $request->sourceOssBucketName;
        }
        if (!Utils::isUnset($request->sourceOssObjectName)) {
            $body['SourceOssObjectName'] = $request->sourceOssObjectName;
        }
        if (!Utils::isUnset($request->targetCertifyId)) {
            $body['TargetCertifyId'] = $request->targetCertifyId;
        }
        if (!Utils::isUnset($request->targetFaceContrastPicture)) {
            $body['TargetFaceContrastPicture'] = $request->targetFaceContrastPicture;
        }
        if (!Utils::isUnset($request->targetFaceContrastPictureUrl)) {
            $body['TargetFaceContrastPictureUrl'] = $request->targetFaceContrastPictureUrl;
        }
        if (!Utils::isUnset($request->targetOssBucketName)) {
            $body['TargetOssBucketName'] = $request->targetOssBucketName;
        }
        if (!Utils::isUnset($request->targetOssObjectName)) {
            $body['TargetOssObjectName'] = $request->targetOssObjectName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CompareFaceVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompareFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompareFaceVerifyRequest $request
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param CompareFacesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CompareFacesResponse
     */
    public function compareFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sourceImageType)) {
            $body['SourceImageType'] = $request->sourceImageType;
        }
        if (!Utils::isUnset($request->sourceImageValue)) {
            $body['SourceImageValue'] = $request->sourceImageValue;
        }
        if (!Utils::isUnset($request->targetImageType)) {
            $body['TargetImageType'] = $request->targetImageType;
        }
        if (!Utils::isUnset($request->targetImageValue)) {
            $body['TargetImageValue'] = $request->targetImageValue;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CompareFaces',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompareFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompareFacesRequest $request
     *
     * @return CompareFacesResponse
     */
    public function compareFaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFacesWithOptions($request, $runtime);
    }

    /**
     * @param ContrastFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query          = [];
        $query['Model'] = $request->model;
        $body           = [];
        if (!Utils::isUnset($request->certName)) {
            $body['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certNo)) {
            $body['CertNo'] = $request->certNo;
        }
        if (!Utils::isUnset($request->certType)) {
            $body['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->certifyId)) {
            $body['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->deviceToken)) {
            $body['DeviceToken'] = $request->deviceToken;
        }
        if (!Utils::isUnset($request->faceContrastFile)) {
            $body['FaceContrastFile'] = $request->faceContrastFile;
        }
        if (!Utils::isUnset($request->faceContrastPicture)) {
            $body['FaceContrastPicture'] = $request->faceContrastPicture;
        }
        if (!Utils::isUnset($request->faceContrastPictureUrl)) {
            $body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $body['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossObjectName)) {
            $body['OssObjectName'] = $request->ossObjectName;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContrastFaceVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContrastFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContrastFaceVerifyRequest $request
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contrastFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param ContrastFaceVerifyAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyAdvance($request, $runtime)
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
            'product'  => 'Cloudauth',
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
        $contrastFaceVerifyReq = new ContrastFaceVerifyRequest([]);
        OpenApiUtilClient::convert($request, $contrastFaceVerifyReq);
        if (!Utils::isUnset($request->faceContrastFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->faceContrastFileObject,
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
            $contrastFaceVerifyReq->faceContrastFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->contrastFaceVerifyWithOptions($contrastFaceVerifyReq, $runtime);
    }

    /**
     * @param CreateAuthKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['AuthYears']    = $request->authYears;
        $query['BizType']      = $request->bizType;
        $query['Test']         = $request->test;
        $query['UserDeviceId'] = $request->userDeviceId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthKey',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuthKeyRequest $request
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthKeyWithOptions($request, $runtime);
    }

    /**
     * @param CreateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFaceConfigResponse
     */
    public function createFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['BizName']  = $request->bizName;
        $query['BizType']  = $request->bizType;
        $query['Lang']     = $request->lang;
        $query['SourceIp'] = $request->sourceIp;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFaceConfig',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFaceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFaceConfigRequest $request
     *
     * @return CreateFaceConfigResponse
     */
    public function createFaceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateRPSDKRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRPSDKResponse
     */
    public function createRPSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AppUrl']   = $request->appUrl;
        $query['Lang']     = $request->lang;
        $query['Platform'] = $request->platform;
        $query['SourceIp'] = $request->sourceIp;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRPSDK',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRPSDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRPSDKRequest $request
     *
     * @return CreateRPSDKResponse
     */
    public function createRPSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRPSDKWithOptions($request, $runtime);
    }

    /**
     * @param CreateVerifySDKRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateVerifySDKResponse
     */
    public function createVerifySDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AppUrl']   = $request->appUrl;
        $query['Platform'] = $request->platform;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVerifySDK',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVerifySDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVerifySDKRequest $request
     *
     * @return CreateVerifySDKResponse
     */
    public function createVerifySDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySDKWithOptions($request, $runtime);
    }

    /**
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BizName']     = $request->bizName;
        $query['BizType']     = $request->bizType;
        $query['GuideStep']   = $request->guideStep;
        $query['PrivacyStep'] = $request->privacyStep;
        $query['ResultStep']  = $request->resultStep;
        $query['Solution']    = $request->solution;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVerifySetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVerifySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVerifySettingRequest $request
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySettingWithOptions($request, $runtime);
    }

    /**
     * @param CreateWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWhitelistResponse
     */
    public function createWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['BizId']     = $request->bizId;
        $query['BizType']   = $request->bizType;
        $query['IdCardNum'] = $request->idCardNum;
        $query['Lang']      = $request->lang;
        $query['SourceIp']  = $request->sourceIp;
        $query['ValidDay']  = $request->validDay;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWhitelist',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWhitelistRequest $request
     *
     * @return CreateWhitelistResponse
     */
    public function createWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param CreateWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['CertNo']      = $request->certNo;
        $query['CertifyId']   = $request->certifyId;
        $query['Lang']        = $request->lang;
        $query['SceneId']     = $request->sceneId;
        $query['ServiceCode'] = $request->serviceCode;
        $query['SourceIp']    = $request->sourceIp;
        $query['ValidDay']    = $request->validDay;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWhitelistSetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWhitelistSettingRequest $request
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWhitelistResponse
     */
    public function deleteWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Ids']      = $request->ids;
        $query['Lang']     = $request->lang;
        $query['SourceIp'] = $request->sourceIp;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWhitelist',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWhitelistRequest $request
     *
     * @return DeleteWhitelistResponse
     */
    public function deleteWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Ids']         = $request->ids;
        $query['Lang']        = $request->lang;
        $query['ServiceCode'] = $request->serviceCode;
        $query['SourceIp']    = $request->sourceIp;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWhitelistSetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWhitelistSettingRequest $request
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['CurrentPage'] = $request->currentPage;
        $query['PageSize']    = $request->pageSize;
        $query['Platform']    = $request->platform;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppInfo',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppInfoRequest $request
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BizType']         = $request->bizType;
        $query['CurrentPage']     = $request->currentPage;
        $query['DeviceId']        = $request->deviceId;
        $query['ExpiredEndDay']   = $request->expiredEndDay;
        $query['ExpiredStartDay'] = $request->expiredStartDay;
        $query['PageSize']        = $request->pageSize;
        $query['UserDeviceId']    = $request->userDeviceId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceInfo',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFaceConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceConfigResponse
     */
    public function describeFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Lang']     = $request->lang;
        $query['SourceIp'] = $request->sourceIp;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaceConfig',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFaceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaceConfigRequest $request
     *
     * @return DescribeFaceConfigResponse
     */
    public function describeFaceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFaceUsageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFaceUsageResponse
     */
    public function describeFaceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['EndDate']   = $request->endDate;
        $query['StartDate'] = $request->startDate;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaceUsage',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFaceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaceUsageRequest $request
     *
     * @return DescribeFaceUsageResponse
     */
    public function describeFaceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['CertifyId']         = $request->certifyId;
        $query['PictureReturnType'] = $request->pictureReturnType;
        $query['SceneId']           = $request->sceneId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFaceVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFaceVerifyRequest $request
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadTokenWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeOssUploadToken',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssUploadTokenWithOptions($runtime);
    }

    /**
     * @param DescribeRPSDKRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRPSDKResponse
     */
    public function describeRPSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Lang']     = $request->lang;
        $query['SourceIp'] = $request->sourceIp;
        $query['TaskId']   = $request->taskId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRPSDK',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRPSDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRPSDKRequest $request
     *
     * @return DescribeRPSDKResponse
     */
    public function describeRPSDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRPSDKWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSdkUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query          = [];
        $query['Debug'] = $request->debug;
        $query['Id']    = $request->id;
        $req            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSdkUrl',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSdkUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSdkUrlRequest $request
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSdkUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUpdatePackageResult',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUpdatePackageResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdatePackageResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUploadInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query        = [];
        $query['Biz'] = $request->biz;
        $req          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUploadInfo',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUploadInfoRequest $request
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeUserStatus',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserStatusWithOptions($runtime);
    }

    /**
     * @param DescribeVerifyRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyRecordsResponse
     */
    public function describeVerifyRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BizId']       = $request->bizId;
        $query['BizType']     = $request->bizType;
        $query['CurrentPage'] = $request->currentPage;
        $query['EndDate']     = $request->endDate;
        $query['IdCardNum']   = $request->idCardNum;
        $query['PageSize']    = $request->pageSize;
        $query['QueryId']     = $request->queryId;
        $query['StartDate']   = $request->startDate;
        $query['StatusList']  = $request->statusList;
        $query['TotalCount']  = $request->totalCount;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyRecords',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifyRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifyRecordsRequest $request
     *
     * @return DescribeVerifyRecordsResponse
     */
    public function describeVerifyRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['BizId']   = $request->bizId;
        $query['BizType'] = $request->bizType;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyResult',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifyResultRequest $request
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVerifySDKRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifySDK',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifySDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifySDKRequest $request
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDK($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySDKWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVerifySettingResponse
     */
    public function describeVerifySettingWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeVerifySetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeVerifySettingResponse
     */
    public function describeVerifySetting()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySettingWithOptions($runtime);
    }

    /**
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['BizId']                = $request->bizId;
        $query['BizType']              = $request->bizType;
        $query['CallbackSeed']         = $request->callbackSeed;
        $query['CallbackUrl']          = $request->callbackUrl;
        $query['FaceRetainedImageUrl'] = $request->faceRetainedImageUrl;
        $query['FailedRedirectUrl']    = $request->failedRedirectUrl;
        $query['IdCardBackImageUrl']   = $request->idCardBackImageUrl;
        $query['IdCardFrontImageUrl']  = $request->idCardFrontImageUrl;
        $query['IdCardNumber']         = $request->idCardNumber;
        $query['Name']                 = $request->name;
        $query['PassedRedirectUrl']    = $request->passedRedirectUrl;
        $query['UserId']               = $request->userId;
        $query['UserIp']               = $request->userIp;
        $query['UserPhoneNumber']      = $request->userPhoneNumber;
        $query['UserRegistTime']       = $request->userRegistTime;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyToken',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifyTokenRequest $request
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyTokenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVerifyUsageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyUsageResponse
     */
    public function describeVerifyUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['BizType']   = $request->bizType;
        $query['EndDate']   = $request->endDate;
        $query['StartDate'] = $request->startDate;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyUsage',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifyUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifyUsageRequest $request
     *
     * @return DescribeVerifyUsageResponse
     */
    public function describeVerifyUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWhitelistResponse
     */
    public function describeWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['BizId']          = $request->bizId;
        $query['BizType']        = $request->bizType;
        $query['CurrentPage']    = $request->currentPage;
        $query['IdCardNum']      = $request->idCardNum;
        $query['Lang']           = $request->lang;
        $query['PageSize']       = $request->pageSize;
        $query['SourceIp']       = $request->sourceIp;
        $query['Valid']          = $request->valid;
        $query['ValidEndDate']   = $request->validEndDate;
        $query['ValidStartDate'] = $request->validStartDate;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhitelist',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWhitelistRequest $request
     *
     * @return DescribeWhitelistResponse
     */
    public function describeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWhitelistSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CertNo']         = $request->certNo;
        $query['CertifyId']      = $request->certifyId;
        $query['CurrentPage']    = $request->currentPage;
        $query['Lang']           = $request->lang;
        $query['PageSize']       = $request->pageSize;
        $query['SceneId']        = $request->sceneId;
        $query['ServiceCode']    = $request->serviceCode;
        $query['SourceIp']       = $request->sourceIp;
        $query['Status']         = $request->status;
        $query['ValidEndDate']   = $request->validEndDate;
        $query['ValidStartDate'] = $request->validStartDate;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhitelistSetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhitelistSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWhitelistSettingRequest $request
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistSettingWithOptions($request, $runtime);
    }

    /**
     * @param DetectFaceAttributesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->materialValue)) {
            $body['MaterialValue'] = $request->materialValue;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DetectFaceAttributes',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectFaceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetectFaceAttributesRequest $request
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceAttributesWithOptions($request, $runtime);
    }

    /**
     * @param InitDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitDeviceResponse
     */
    public function initDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['AppVersion']       = $request->appVersion;
        $query['BizData']          = $request->bizData;
        $query['CertifyId']        = $request->certifyId;
        $query['CertifyPrincipal'] = $request->certifyPrincipal;
        $query['Channel']          = $request->channel;
        $query['DeviceToken']      = $request->deviceToken;
        $query['Merchant']         = $request->merchant;
        $query['MetaInfo']         = $request->metaInfo;
        $query['OuterOrderNo']     = $request->outerOrderNo;
        $query['ProduceNode']      = $request->produceNode;
        $query['ProductName']      = $request->productName;
        $body                      = [];
        if (!Utils::isUnset($request->uaToken)) {
            $body['UaToken'] = $request->uaToken;
        }
        if (!Utils::isUnset($request->webUmidToken)) {
            $body['WebUmidToken'] = $request->webUmidToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitDevice',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitDeviceRequest $request
     *
     * @return InitDeviceResponse
     */
    public function initDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initDeviceWithOptions($request, $runtime);
    }

    /**
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['CallbackToken']          = $request->callbackToken;
        $query['CallbackUrl']            = $request->callbackUrl;
        $query['CertName']               = $request->certName;
        $query['CertNo']                 = $request->certNo;
        $query['CertType']               = $request->certType;
        $query['CertifyId']              = $request->certifyId;
        $query['CertifyUrlType']         = $request->certifyUrlType;
        $query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        $query['Ip']                     = $request->ip;
        $query['MetaInfo']               = $request->metaInfo;
        $query['Mobile']                 = $request->mobile;
        $query['OssBucketName']          = $request->ossBucketName;
        $query['OssObjectName']          = $request->ossObjectName;
        $query['OuterOrderNo']           = $request->outerOrderNo;
        $query['ProductCode']            = $request->productCode;
        $query['ReturnUrl']              = $request->returnUrl;
        $query['SceneId']                = $request->sceneId;
        $query['UserId']                 = $request->userId;
        $body                            = [];
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->faceContrastPicture)) {
            $body['FaceContrastPicture'] = $request->faceContrastPicture;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitFaceVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitFaceVerifyRequest $request
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param LivenessFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query          = [];
        $query['Model'] = $request->model;
        $body           = [];
        if (!Utils::isUnset($request->certifyId)) {
            $body['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->crop)) {
            $body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->deviceToken)) {
            $body['DeviceToken'] = $request->deviceToken;
        }
        if (!Utils::isUnset($request->faceContrastPicture)) {
            $body['FaceContrastPicture'] = $request->faceContrastPicture;
        }
        if (!Utils::isUnset($request->faceContrastPictureUrl)) {
            $body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $body['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossObjectName)) {
            $body['OssObjectName'] = $request->ossObjectName;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LivenessFaceVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LivenessFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LivenessFaceVerifyRequest $request
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->livenessFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['BizType']      = $request->bizType;
        $query['DeviceId']     = $request->deviceId;
        $query['Duration']     = $request->duration;
        $query['ExpiredDay']   = $request->expiredDay;
        $query['UserDeviceId'] = $request->userDeviceId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDeviceInfo',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDeviceInfoRequest $request
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppPackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Debug']      = $request->debug;
        $query['Id']         = $request->id;
        $query['PackageUrl'] = $request->packageUrl;
        $query['Platform']   = $request->platform;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppPackage',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppPackageRequest $request
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppPackageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceConfigResponse
     */
    public function updateFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['BizName']  = $request->bizName;
        $query['BizType']  = $request->bizType;
        $query['Lang']     = $request->lang;
        $query['SourceIp'] = $request->sourceIp;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaceConfig',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFaceConfigRequest $request
     *
     * @return UpdateFaceConfigResponse
     */
    public function updateFaceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVerifySettingResponse
     */
    public function updateVerifySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['BizName']     = $request->bizName;
        $query['BizType']     = $request->bizType;
        $query['GuideStep']   = $request->guideStep;
        $query['PrivacyStep'] = $request->privacyStep;
        $query['ResultStep']  = $request->resultStep;
        $query['Solution']    = $request->solution;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVerifySetting',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVerifySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVerifySettingRequest $request
     *
     * @return UpdateVerifySettingResponse
     */
    public function updateVerifySetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVerifySettingWithOptions($request, $runtime);
    }

    /**
     * @param VerifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyDeviceResponse
     */
    public function verifyDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AppVersion']  = $request->appVersion;
        $query['CertifyData'] = $request->certifyData;
        $query['CertifyId']   = $request->certifyId;
        $body                 = [];
        if (!Utils::isUnset($request->deviceToken)) {
            $body['DeviceToken'] = $request->deviceToken;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyDevice',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyDeviceRequest $request
     *
     * @return VerifyDeviceResponse
     */
    public function verifyDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDeviceWithOptions($request, $runtime);
    }

    /**
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['BizId']               = $request->bizId;
        $query['BizType']             = $request->bizType;
        $query['FaceImageUrl']        = $request->faceImageUrl;
        $query['IdCardBackImageUrl']  = $request->idCardBackImageUrl;
        $query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        $query['IdCardNumber']        = $request->idCardNumber;
        $query['Name']                = $request->name;
        $query['UserId']              = $request->userId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyMaterial',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyMaterialRequest $request
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMaterialWithOptions($request, $runtime);
    }
}
