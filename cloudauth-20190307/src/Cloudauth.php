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
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CreateVerifySettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse;
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
        $query = [];
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        $body = [];
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
        if (!Utils::isUnset($request->encryptType)) {
            $body['EncryptType'] = $request->encryptType;
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
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->faceContrastFileObject,
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
            $contrastFaceVerifyReq->faceContrastFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
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
        $query = [];
        if (!Utils::isUnset($request->authYears)) {
            $query['AuthYears'] = $request->authYears;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->test)) {
            $query['Test'] = $request->test;
        }
        if (!Utils::isUnset($request->userDeviceId)) {
            $query['UserDeviceId'] = $request->userDeviceId;
        }
        $req = new OpenApiRequest([
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
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizName)) {
            $query['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->guideStep)) {
            $query['GuideStep'] = $request->guideStep;
        }
        if (!Utils::isUnset($request->privacyStep)) {
            $query['PrivacyStep'] = $request->privacyStep;
        }
        if (!Utils::isUnset($request->resultStep)) {
            $query['ResultStep'] = $request->resultStep;
        }
        if (!Utils::isUnset($request->solution)) {
            $query['Solution'] = $request->solution;
        }
        $req = new OpenApiRequest([
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
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->expiredEndDay)) {
            $query['ExpiredEndDay'] = $request->expiredEndDay;
        }
        if (!Utils::isUnset($request->expiredStartDay)) {
            $query['ExpiredStartDay'] = $request->expiredStartDay;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userDeviceId)) {
            $query['UserDeviceId'] = $request->userDeviceId;
        }
        $req = new OpenApiRequest([
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
     * @param DescribeFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certifyId)) {
            $query['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->pictureReturnType)) {
            $query['PictureReturnType'] = $request->pictureReturnType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
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
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        $req = new OpenApiRequest([
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
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
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
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->callbackSeed)) {
            $query['CallbackSeed'] = $request->callbackSeed;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->faceRetainedImageUrl)) {
            $query['FaceRetainedImageUrl'] = $request->faceRetainedImageUrl;
        }
        if (!Utils::isUnset($request->failedRedirectUrl)) {
            $query['FailedRedirectUrl'] = $request->failedRedirectUrl;
        }
        if (!Utils::isUnset($request->idCardBackImageUrl)) {
            $query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }
        if (!Utils::isUnset($request->idCardFrontImageUrl)) {
            $query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->passedRedirectUrl)) {
            $query['PassedRedirectUrl'] = $request->passedRedirectUrl;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userIp)) {
            $query['UserIp'] = $request->userIp;
        }
        if (!Utils::isUnset($request->userPhoneNumber)) {
            $query['UserPhoneNumber'] = $request->userPhoneNumber;
        }
        if (!Utils::isUnset($request->userRegistTime)) {
            $query['UserRegistTime'] = $request->userRegistTime;
        }
        $req = new OpenApiRequest([
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
     * @param Id2MetaVerifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return Id2MetaVerifyResponse
     */
    public function id2MetaVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifyNum)) {
            $query['IdentifyNum'] = $request->identifyNum;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Id2MetaVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Id2MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Id2MetaVerifyRequest $request
     *
     * @return Id2MetaVerifyResponse
     */
    public function id2MetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->birthday)) {
            $query['Birthday'] = $request->birthday;
        }
        if (!Utils::isUnset($request->callbackToken)) {
            $query['CallbackToken'] = $request->callbackToken;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certNo)) {
            $query['CertNo'] = $request->certNo;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->certifyId)) {
            $query['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->certifyUrlStyle)) {
            $query['CertifyUrlStyle'] = $request->certifyUrlStyle;
        }
        if (!Utils::isUnset($request->certifyUrlType)) {
            $query['CertifyUrlType'] = $request->certifyUrlType;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->faceContrastPictureUrl)) {
            $query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->metaInfo)) {
            $query['MetaInfo'] = $request->metaInfo;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ossBucketName)) {
            $query['OssBucketName'] = $request->ossBucketName;
        }
        if (!Utils::isUnset($request->ossObjectName)) {
            $query['OssObjectName'] = $request->ossObjectName;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $query['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->procedurePriority)) {
            $query['ProcedurePriority'] = $request->procedurePriority;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->readImg)) {
            $query['ReadImg'] = $request->readImg;
        }
        if (!Utils::isUnset($request->returnUrl)) {
            $query['ReturnUrl'] = $request->returnUrl;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->suitableType)) {
            $query['SuitableType'] = $request->suitableType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->validityDate)) {
            $query['ValidityDate'] = $request->validityDate;
        }
        if (!Utils::isUnset($request->voluntaryCustomizedContent)) {
            $query['VoluntaryCustomizedContent'] = $request->voluntaryCustomizedContent;
        }
        $body = [];
        if (!Utils::isUnset($request->authId)) {
            $body['AuthId'] = $request->authId;
        }
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
        $query = [];
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        $body = [];
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
     * @param Mobile3MetaDetailVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaDetailVerifyResponse
     */
    public function mobile3MetaDetailVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifyNum)) {
            $query['IdentifyNum'] = $request->identifyNum;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Mobile3MetaDetailVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Mobile3MetaDetailVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Mobile3MetaDetailVerifyRequest $request
     *
     * @return Mobile3MetaDetailVerifyResponse
     */
    public function mobile3MetaDetailVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaDetailVerifyWithOptions($request, $runtime);
    }

    /**
     * @param Mobile3MetaSimpleVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaSimpleVerifyResponse
     */
    public function mobile3MetaSimpleVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifyNum)) {
            $query['IdentifyNum'] = $request->identifyNum;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Mobile3MetaSimpleVerify',
            'version'     => '2019-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return Mobile3MetaSimpleVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Mobile3MetaSimpleVerifyRequest $request
     *
     * @return Mobile3MetaSimpleVerifyResponse
     */
    public function mobile3MetaSimpleVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaSimpleVerifyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->expiredDay)) {
            $query['ExpiredDay'] = $request->expiredDay;
        }
        if (!Utils::isUnset($request->userDeviceId)) {
            $query['UserDeviceId'] = $request->userDeviceId;
        }
        $req = new OpenApiRequest([
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
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->faceImageUrl)) {
            $query['FaceImageUrl'] = $request->faceImageUrl;
        }
        if (!Utils::isUnset($request->idCardBackImageUrl)) {
            $query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }
        if (!Utils::isUnset($request->idCardFrontImageUrl)) {
            $query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }
        if (!Utils::isUnset($request->idCardNumber)) {
            $query['IdCardNumber'] = $request->idCardNumber;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
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
