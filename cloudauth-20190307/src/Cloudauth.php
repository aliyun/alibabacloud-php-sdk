<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Cloudauth extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param CompareFaceVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return CompareFaceVerifyResponse::fromMap($this->doRequest('CompareFaceVerify', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CompareFaceVerifyRequest $request
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaceVerify($request, $runtime);
    }

    /**
     * @param CompareFacesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CompareFacesResponse
     */
    public function compareFaces($request, $runtime)
    {
        Utils::validateModel($request);

        return CompareFacesResponse::fromMap($this->doRequest('CompareFaces', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CompareFacesRequest $request
     *
     * @return CompareFacesResponse
     */
    public function compareFacesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareFaces($request, $runtime);
    }

    /**
     * @param ContrastFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return ContrastFaceVerifyResponse::fromMap($this->doRequest('ContrastFaceVerify', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ContrastFaceVerifyRequest $request
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contrastFaceVerify($request, $runtime);
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
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
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
        RpcUtils::convert($runtime, $ossRuntime);
        $contrastFaceVerifyReq = new ContrastFaceVerifyRequest([]);
        RpcUtils::convert($request, $contrastFaceVerifyReq);
        if (!Utils::isUnset($request->faceContrastFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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

        return $this->contrastFaceVerify($contrastFaceVerifyReq, $runtime);
    }

    /**
     * @param CreateAuthKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKey($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAuthKeyResponse::fromMap($this->doRequest('CreateAuthKey', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateAuthKeyRequest $request
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKeySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthKey($request, $runtime);
    }

    /**
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySetting($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVerifySettingResponse::fromMap($this->doRequest('CreateVerifySetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateVerifySettingRequest $request
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySetting($request, $runtime);
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDeviceInfoResponse::fromMap($this->doRequest('DescribeDeviceInfo', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDeviceInfoRequest $request
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceInfo($request, $runtime);
    }

    /**
     * @param DescribeFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFaceVerifyResponse::fromMap($this->doRequest('DescribeFaceVerify', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeFaceVerifyRequest $request
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceVerify($request, $runtime);
    }

    /**
     * @param DescribeOssUploadTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadToken($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOssUploadTokenResponse::fromMap($this->doRequest('DescribeOssUploadToken', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOssUploadTokenRequest $request
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadTokenSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssUploadToken($request, $runtime);
    }

    /**
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResult($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifyResultResponse::fromMap($this->doRequest('DescribeVerifyResult', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifyResultRequest $request
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyResult($request, $runtime);
    }

    /**
     * @param DescribeVerifySDKRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDK($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifySDKResponse::fromMap($this->doRequest('DescribeVerifySDK', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifySDKRequest $request
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDKSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySDK($request, $runtime);
    }

    /**
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyToken($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifyTokenResponse::fromMap($this->doRequest('DescribeVerifyToken', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifyTokenRequest $request
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyToken($request, $runtime);
    }

    /**
     * @param DetectFaceAttributesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributes($request, $runtime)
    {
        Utils::validateModel($request);

        return DetectFaceAttributesResponse::fromMap($this->doRequest('DetectFaceAttributes', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetectFaceAttributesRequest $request
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributesSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectFaceAttributes($request, $runtime);
    }

    /**
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return InitFaceVerifyResponse::fromMap($this->doRequest('InitFaceVerify', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InitFaceVerifyRequest $request
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initFaceVerify($request, $runtime);
    }

    /**
     * @param LivenessFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return LivenessFaceVerifyResponse::fromMap($this->doRequest('LivenessFaceVerify', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param LivenessFaceVerifyRequest $request
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->livenessFaceVerify($request, $runtime);
    }

    /**
     * @param ModifyDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDeviceInfoResponse::fromMap($this->doRequest('ModifyDeviceInfo', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDeviceInfoRequest $request
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceInfo($request, $runtime);
    }

    /**
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterial($request, $runtime)
    {
        Utils::validateModel($request);

        return VerifyMaterialResponse::fromMap($this->doRequest('VerifyMaterial', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param VerifyMaterialRequest $request
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyMaterial($request, $runtime);
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
}
