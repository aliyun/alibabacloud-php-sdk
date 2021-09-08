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
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyMaterialResponse::fromMap($this->doRPCRequest('VerifyMaterial', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param DescribeWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeWhitelistResponse
     */
    public function describeWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWhitelistResponse::fromMap($this->doRPCRequest('DescribeWhitelist', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateAppPackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppPackageResponse
     */
    public function updateAppPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAppPackageResponse::fromMap($this->doRPCRequest('UpdateAppPackage', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifyTokenResponse::fromMap($this->doRPCRequest('DescribeVerifyToken', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRPSDKRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRPSDKResponse
     */
    public function describeRPSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRPSDKResponse::fromMap($this->doRPCRequest('DescribeRPSDK', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFaceUsageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFaceUsageResponse
     */
    public function describeFaceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFaceUsageResponse::fromMap($this->doRPCRequest('DescribeFaceUsage', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVerifyUsageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyUsageResponse
     */
    public function describeVerifyUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifyUsageResponse::fromMap($this->doRPCRequest('DescribeVerifyUsage', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUpdatePackageResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUpdatePackageResultResponse
     */
    public function describeUpdatePackageResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUpdatePackageResultResponse::fromMap($this->doRPCRequest('DescribeUpdatePackageResult', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWhitelistResponse
     */
    public function createWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWhitelistResponse::fromMap($this->doRPCRequest('CreateWhitelist', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteWhitelistRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWhitelistResponse
     */
    public function deleteWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWhitelistResponse::fromMap($this->doRPCRequest('DeleteWhitelist', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAuthKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAuthKeyResponse::fromMap($this->doRPCRequest('CreateAuthKey', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUploadInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUploadInfoResponse
     */
    public function describeUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUploadInfoResponse::fromMap($this->doRPCRequest('DescribeUploadInfo', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @return DescribeVerifySettingResponse
     */
    public function describeVerifySettingWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeVerifySettingResponse::fromMap($this->doRPCRequest('DescribeVerifySetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVerifyRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyRecordsResponse
     */
    public function describeVerifyRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifyRecordsResponse::fromMap($this->doRPCRequest('DescribeVerifyRecords', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeWhitelistSettingRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWhitelistSettingResponse
     */
    public function describeWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWhitelistSettingResponse::fromMap($this->doRPCRequest('DescribeWhitelistSetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateRPSDKRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateRPSDKResponse
     */
    public function createRPSDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRPSDKResponse::fromMap($this->doRPCRequest('CreateRPSDK', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateFaceConfigResponse
     */
    public function updateFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFaceConfigResponse::fromMap($this->doRPCRequest('UpdateFaceConfig', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFaceConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceConfigResponse
     */
    public function describeFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFaceConfigResponse::fromMap($this->doRPCRequest('DescribeFaceConfig', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param LivenessFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LivenessFaceVerifyResponse::fromMap($this->doRPCRequest('LivenessFaceVerify', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAppInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAppInfoResponse
     */
    public function describeAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppInfoResponse::fromMap($this->doRPCRequest('DescribeAppInfo', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceInfoResponse::fromMap($this->doRPCRequest('ModifyDeviceInfo', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ContrastFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ContrastFaceVerifyResponse::fromMap($this->doRPCRequest('ContrastFaceVerify', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VerifyDeviceResponse
     */
    public function verifyDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyDeviceResponse::fromMap($this->doRPCRequest('VerifyDevice', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CompareFaceVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompareFaceVerifyResponse::fromMap($this->doRPCRequest('CompareFaceVerify', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVerifySDKRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifySDKResponse::fromMap($this->doRPCRequest('DescribeVerifySDK', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->doRPCRequest('DescribeDeviceInfo', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFaceVerifyResponse::fromMap($this->doRPCRequest('DescribeFaceVerify', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([]);

        return DescribeOssUploadTokenResponse::fromMap($this->doRPCRequest('DescribeOssUploadToken', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetectFaceAttributesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectFaceAttributesResponse::fromMap($this->doRPCRequest('DetectFaceAttributes', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSdkUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeSdkUrlResponse
     */
    public function describeSdkUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSdkUrlResponse::fromMap($this->doRPCRequest('DescribeSdkUrl', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWhitelistSettingResponse
     */
    public function deleteWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWhitelistSettingResponse::fromMap($this->doRPCRequest('DeleteWhitelistSetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVerifySettingResponse
     */
    public function updateVerifySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVerifySettingResponse::fromMap($this->doRPCRequest('UpdateVerifySetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVerifyResultResponse::fromMap($this->doRPCRequest('DescribeVerifyResult', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CompareFacesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CompareFacesResponse
     */
    public function compareFacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompareFacesResponse::fromMap($this->doRPCRequest('CompareFaces', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateFaceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFaceConfigResponse
     */
    public function createFaceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFaceConfigResponse::fromMap($this->doRPCRequest('CreateFaceConfig', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVerifySDKRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateVerifySDKResponse
     */
    public function createVerifySDKWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVerifySDKResponse::fromMap($this->doRPCRequest('CreateVerifySDK', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InitDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitDeviceResponse
     */
    public function initDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitDeviceResponse::fromMap($this->doRPCRequest('InitDevice', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateWhitelistSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWhitelistSettingResponse
     */
    public function createWhitelistSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWhitelistSettingResponse::fromMap($this->doRPCRequest('CreateWhitelistSetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeUserStatusResponse::fromMap($this->doRPCRequest('DescribeUserStatus', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVerifySettingResponse::fromMap($this->doRPCRequest('CreateVerifySetting', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InitFaceVerifyResponse::fromMap($this->doRPCRequest('InitFaceVerify', '2019-03-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
