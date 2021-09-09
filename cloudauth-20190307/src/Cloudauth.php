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
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeRPSDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeRPSDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSdkUrlRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSdkUrlResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUploadInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUploadInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUserStatusRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUserStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySettingRequest;
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
     * @param DescribeWhitelistSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSetting($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeWhitelistSettingResponse::fromMap($this->doRequest('DescribeWhitelistSetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeWhitelistSettingRequest $request
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelistSetting($request, $runtime);
    }

    /**
     * @param DeleteWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSetting($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteWhitelistSettingResponse::fromMap($this->doRequest('DeleteWhitelistSetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteWhitelistSettingRequest $request
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhitelistSetting($request, $runtime);
    }

    /**
     * @param CreateWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSetting($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateWhitelistSettingResponse::fromMap($this->doRequest('CreateWhitelistSetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateWhitelistSettingRequest $request
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhitelistSetting($request, $runtime);
    }

    /**
     * @param DescribeWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWhitelistResponse
     */
    public function describeWhitelist($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeWhitelistResponse::fromMap($this->doRequest('DescribeWhitelist', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeWhitelistRequest $request
     *
     * @return DescribeWhitelistResponse
     */
    public function describeWhitelistSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhitelist($request, $runtime);
    }

    /**
     * @param DeleteWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWhitelistResponse
     */
    public function deleteWhitelist($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteWhitelistResponse::fromMap($this->doRequest('DeleteWhitelist', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteWhitelistRequest $request
     *
     * @return DeleteWhitelistResponse
     */
    public function deleteWhitelistSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhitelist($request, $runtime);
    }

    /**
     * @param CreateWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWhitelistResponse
     */
    public function createWhitelist($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateWhitelistResponse::fromMap($this->doRequest('CreateWhitelist', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateWhitelistRequest $request
     *
     * @return CreateWhitelistResponse
     */
    public function createWhitelistSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWhitelist($request, $runtime);
    }

    /**
     * @param DescribeFaceConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceConfigResponse
     */
    public function describeFaceConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFaceConfigResponse::fromMap($this->doRequest('DescribeFaceConfig', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeFaceConfigRequest $request
     *
     * @return DescribeFaceConfigResponse
     */
    public function describeFaceConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceConfig($request, $runtime);
    }

    /**
     * @param UpdateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceConfigResponse
     */
    public function updateFaceConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFaceConfigResponse::fromMap($this->doRequest('UpdateFaceConfig', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateFaceConfigRequest $request
     *
     * @return UpdateFaceConfigResponse
     */
    public function updateFaceConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceConfig($request, $runtime);
    }

    /**
     * @param CreateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFaceConfigResponse
     */
    public function createFaceConfig($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFaceConfigResponse::fromMap($this->doRequest('CreateFaceConfig', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateFaceConfigRequest $request
     *
     * @return CreateFaceConfigResponse
     */
    public function createFaceConfigSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFaceConfig($request, $runtime);
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
     * @param DescribeSdkUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrl($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSdkUrlResponse::fromMap($this->doRequest('DescribeSdkUrl', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSdkUrlRequest $request
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrlSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSdkUrl($request, $runtime);
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResult($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUpdatePackageResultResponse::fromMap($this->doRequest('DescribeUpdatePackageResult', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeUpdatePackageResultRequest $request
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResultSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUpdatePackageResult($request, $runtime);
    }

    /**
     * @param UpdateAppPackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackage($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAppPackageResponse::fromMap($this->doRequest('UpdateAppPackage', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateAppPackageRequest $request
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppPackage($request, $runtime);
    }

    /**
     * @param DescribeAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAppInfoResponse::fromMap($this->doRequest('DescribeAppInfo', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeAppInfoRequest $request
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppInfo($request, $runtime);
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
     * @param InitDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitDeviceResponse
     */
    public function initDevice($request, $runtime)
    {
        Utils::validateModel($request);

        return InitDeviceResponse::fromMap($this->doRequest('InitDevice', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InitDeviceRequest $request
     *
     * @return InitDeviceResponse
     */
    public function initDeviceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initDevice($request, $runtime);
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
     * @param VerifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyDeviceResponse
     */
    public function verifyDevice($request, $runtime)
    {
        Utils::validateModel($request);

        return VerifyDeviceResponse::fromMap($this->doRequest('VerifyDevice', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param VerifyDeviceRequest $request
     *
     * @return VerifyDeviceResponse
     */
    public function verifyDeviceSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDevice($request, $runtime);
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
     * @param CreateVerifySDKRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateVerifySDKResponse
     */
    public function createVerifySDK($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateVerifySDKResponse::fromMap($this->doRequest('CreateVerifySDK', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateVerifySDKRequest $request
     *
     * @return CreateVerifySDKResponse
     */
    public function createVerifySDKSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVerifySDK($request, $runtime);
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
     * @param DescribeFaceUsageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFaceUsageResponse
     */
    public function describeFaceUsage($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFaceUsageResponse::fromMap($this->doRequest('DescribeFaceUsage', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeFaceUsageRequest $request
     *
     * @return DescribeFaceUsageResponse
     */
    public function describeFaceUsageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceUsage($request, $runtime);
    }

    /**
     * @param DescribeVerifyRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyRecordsResponse
     */
    public function describeVerifyRecords($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifyRecordsResponse::fromMap($this->doRequest('DescribeVerifyRecords', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifyRecordsRequest $request
     *
     * @return DescribeVerifyRecordsResponse
     */
    public function describeVerifyRecordsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyRecords($request, $runtime);
    }

    /**
     * @param UpdateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVerifySettingResponse
     */
    public function updateVerifySetting($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateVerifySettingResponse::fromMap($this->doRequest('UpdateVerifySetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateVerifySettingRequest $request
     *
     * @return UpdateVerifySettingResponse
     */
    public function updateVerifySettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVerifySetting($request, $runtime);
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
     * @param DescribeVerifySettingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifySettingResponse
     */
    public function describeVerifySetting($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifySettingResponse::fromMap($this->doRequest('DescribeVerifySetting', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifySettingRequest $request
     *
     * @return DescribeVerifySettingResponse
     */
    public function describeVerifySettingSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifySetting($request, $runtime);
    }

    /**
     * @param DescribeVerifyUsageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyUsageResponse
     */
    public function describeVerifyUsage($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVerifyUsageResponse::fromMap($this->doRequest('DescribeVerifyUsage', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVerifyUsageRequest $request
     *
     * @return DescribeVerifyUsageResponse
     */
    public function describeVerifyUsageSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyUsage($request, $runtime);
    }

    /**
     * @param DescribeUserStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatus($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserStatusResponse::fromMap($this->doRequest('DescribeUserStatus', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeUserStatusRequest $request
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserStatus($request, $runtime);
    }

    /**
     * @param DescribeUploadInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfo($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUploadInfoResponse::fromMap($this->doRequest('DescribeUploadInfo', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeUploadInfoRequest $request
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfoSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadInfo($request, $runtime);
    }

    /**
     * @param DescribeRPSDKRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRPSDKResponse
     */
    public function describeRPSDK($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRPSDKResponse::fromMap($this->doRequest('DescribeRPSDK', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRPSDKRequest $request
     *
     * @return DescribeRPSDKResponse
     */
    public function describeRPSDKSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRPSDK($request, $runtime);
    }

    /**
     * @param CreateRPSDKRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRPSDKResponse
     */
    public function createRPSDK($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRPSDKResponse::fromMap($this->doRequest('CreateRPSDK', 'HTTPS', 'POST', '2019-03-07', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRPSDKRequest $request
     *
     * @return CreateRPSDKResponse
     */
    public function createRPSDKSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRPSDK($request, $runtime);
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
