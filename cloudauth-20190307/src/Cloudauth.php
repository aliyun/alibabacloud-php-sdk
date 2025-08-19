<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\AIGCFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\AIGCFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\BankMetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\BankMetaVerifyResponse;
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
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialProductVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2AdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\CredentialVerifyV2ShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeepfakeDetectRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeepfakeDetectResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceGuardRiskResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribePageFaceVerifyDataRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribePageFaceVerifyDataResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSmartStatisticsPageListRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeSmartStatisticsPageListResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySDKResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DetectFaceAttributesResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaPeriodVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaPeriodVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Id2MetaVerifyWithOCRResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitCardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitCardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InitFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InsertWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\InsertWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile2MetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile2MetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaDetailVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleStandardVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleStandardVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Mobile3MetaSimpleVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineStatusRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineStatusResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileOnlineTimeResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyDeviceInfoResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\PageQueryWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\RemoveWhiteListSettingShrinkRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Vehicle5ItemQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\Vehicle5ItemQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleInsureQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleInsureQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyV2Request;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleMetaVerifyV2Response;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleQueryRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleQueryResponse;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialRequest;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
     * @param string  $bucketName
     * @param mixed[] $form
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form)
    {
        $_request = new Request();
        $boundary = FormUtil::getBoundary();
        $_request->protocol = 'HTTPS';
        $_request->method = 'POST';
        $_request->pathname = '/';
        $_request->headers = [
            'host' => '' . @$form['host'],
            'date' => Utils::getDateUTCString(),
            'user-agent' => Utils::getUserAgent(''),
        ];
        @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
        $_request->body = FormUtil::toFileForm($form, $boundary);
        $_response = Dara::send($_request);

        $respMap = null;
        $bodyStr = StreamUtil::readAsString($_response->body);
        if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
            $respMap = XML::parseXml($bodyStr, null);
            $err = @$respMap['Error'];

            throw new ClientException([
                'code' => '' . @$err['Code'],
                'message' => '' . @$err['Message'],
                'data' => [
                    'httpCode' => $_response->statusCode,
                    'requestId' => '' . @$err['RequestId'],
                    'hostId' => '' . @$err['HostId'],
                ],
            ]);
        }

        $respMap = XML::parseXml($bodyStr, null);

        return Dara::merge([
        ], $respMap);
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
     * Add AIGC Face Detection Capability.
     *
     * @param Request - AIGCFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AIGCFaceVerifyResponse
     *
     * @param AIGCFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AIGCFaceVerifyResponse
     */
    public function aIGCFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceContrastPictureUrl) {
            @$query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$query['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $body = [];
        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AIGCFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AIGCFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add AIGC Face Detection Capability.
     *
     * @param Request - AIGCFaceVerifyRequest
     *
     * @returns AIGCFaceVerifyResponse
     *
     * @param AIGCFaceVerifyRequest $request
     *
     * @return AIGCFaceVerifyResponse
     */
    public function aIGCFaceVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aIGCFaceVerifyWithOptions($request, $runtime);
    }

    /**
     * Bank Card Element Verification Interface.
     *
     * @remarks
     * Bank card verification, including: two elements (name + bank card number), three elements (name + ID number + bank card number), and four elements (name + ID number + mobile phone number + bank card number) consistency verification.
     * - Service address:
     *   - Beijing region: cloudauth.cn-beijing.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-beijing.aliyuncs.com (IPv6).
     *   - Shanghai region: cloudauth.cn-shanghai.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-shanghai.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - BankMetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BankMetaVerifyResponse
     *
     * @param BankMetaVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BankMetaVerifyResponse
     */
    public function bankMetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bankCard) {
            @$query['BankCard'] = $request->bankCard;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->identityType) {
            @$query['IdentityType'] = $request->identityType;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->verifyMode) {
            @$query['VerifyMode'] = $request->verifyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BankMetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BankMetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Bank Card Element Verification Interface.
     *
     * @remarks
     * Bank card verification, including: two elements (name + bank card number), three elements (name + ID number + bank card number), and four elements (name + ID number + mobile phone number + bank card number) consistency verification.
     * - Service address:
     *   - Beijing region: cloudauth.cn-beijing.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-beijing.aliyuncs.com (IPv6).
     *   - Shanghai region: cloudauth.cn-shanghai.aliyuncs.com (IPv4) or cloudauth-dualstack.cn-shanghai.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - BankMetaVerifyRequest
     *
     * @returns BankMetaVerifyResponse
     *
     * @param BankMetaVerifyRequest $request
     *
     * @return BankMetaVerifyResponse
     */
    public function bankMetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bankMetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Financial-grade Pure Server-Side API for Face Comparison.
     *
     * @remarks
     * - API Name: CompareFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - API Description: An interface to achieve real-person authentication through server-side integration.
     * #### Photo Format Requirements
     * When performing face comparison, please upload 2 facial photos that meet all the following conditions:
     * - Recent photo/recent database photo, with a complete, clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overly dark, overly bright, or halo effects on the face, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended to scale the shorter side to 720 pixels, with a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - CompareFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFaceVerifyResponse
     *
     * @param CompareFaceVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompareFaceVerifyResponse
     */
    public function compareFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->sourceCertifyId) {
            @$body['SourceCertifyId'] = $request->sourceCertifyId;
        }

        if (null !== $request->sourceFaceContrastPicture) {
            @$body['SourceFaceContrastPicture'] = $request->sourceFaceContrastPicture;
        }

        if (null !== $request->sourceFaceContrastPictureUrl) {
            @$body['SourceFaceContrastPictureUrl'] = $request->sourceFaceContrastPictureUrl;
        }

        if (null !== $request->sourceOssBucketName) {
            @$body['SourceOssBucketName'] = $request->sourceOssBucketName;
        }

        if (null !== $request->sourceOssObjectName) {
            @$body['SourceOssObjectName'] = $request->sourceOssObjectName;
        }

        if (null !== $request->targetCertifyId) {
            @$body['TargetCertifyId'] = $request->targetCertifyId;
        }

        if (null !== $request->targetFaceContrastPicture) {
            @$body['TargetFaceContrastPicture'] = $request->targetFaceContrastPicture;
        }

        if (null !== $request->targetFaceContrastPictureUrl) {
            @$body['TargetFaceContrastPictureUrl'] = $request->targetFaceContrastPictureUrl;
        }

        if (null !== $request->targetOssBucketName) {
            @$body['TargetOssBucketName'] = $request->targetOssBucketName;
        }

        if (null !== $request->targetOssObjectName) {
            @$body['TargetOssObjectName'] = $request->targetOssObjectName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Financial-grade Pure Server-Side API for Face Comparison.
     *
     * @remarks
     * - API Name: CompareFaceVerify.
     * - Service Address: cloudauth.aliyuncs.com.
     * - Request Method: HTTPS POST and GET.
     * - API Description: An interface to achieve real-person authentication through server-side integration.
     * #### Photo Format Requirements
     * When performing face comparison, please upload 2 facial photos that meet all the following conditions:
     * - Recent photo/recent database photo, with a complete, clear, unobstructed face, natural expression, and facing the camera directly.
     * - Clear photo with normal exposure, no overly dark, overly bright, or halo effects on the face, and no significant angle deviation.
     * - Resolution not exceeding 1920*1080, at least 640*480, recommended to scale the shorter side to 720 pixels, with a compression ratio greater than 0.9.
     * - Photo size: <1MB.
     * - Supports 90, 180, and 270-degree photos; in cases of multiple faces, the largest face will be selected.
     *
     * @param Request - CompareFaceVerifyRequest
     *
     * @returns CompareFaceVerifyResponse
     *
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
     * Invoke CompareFaces for face comparison.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Compares two face images and outputs the similarity score of the faces in the two images as the result.
     * - At least one of the specified comparison images should be a face photo (FacePic).
     * - If an image contains multiple faces, the algorithm will automatically select the largest face in the image.
     * - If one of the two comparison images does not detect a face, the system will return an error message stating \\"No face detected\\".
     * When uploading images, you need to provide the HTTP address or base64 encoding of the image.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded in base64, formatted as `base64://<base64 string of the image>`.
     * Image Restrictions
     * - Does not support relative or absolute paths for local images.
     * - Please keep the size of a single image within 2MB to avoid timeout during retrieval by the algorithm.
     * - The body of a single request has a size limit of 8MB; please calculate the total size of all images and other information in the request to ensure it does not exceed this limit.
     * - When using base64 to transmit images, the request method must be changed to POST; the header description such as `data:image/png;base64,` should be removed from the base64 string of the image.
     *
     * @param Request - CompareFacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareFacesResponse
     *
     * @param CompareFacesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CompareFacesResponse
     */
    public function compareFacesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceImageType) {
            @$body['SourceImageType'] = $request->sourceImageType;
        }

        if (null !== $request->sourceImageValue) {
            @$body['SourceImageValue'] = $request->sourceImageValue;
        }

        if (null !== $request->targetImageType) {
            @$body['TargetImageType'] = $request->targetImageType;
        }

        if (null !== $request->targetImageValue) {
            @$body['TargetImageValue'] = $request->targetImageValue;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareFaces',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareFacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke CompareFaces for face comparison.
     *
     * @remarks
     * Request Method: Only supports sending requests via HTTPS POST.
     * Interface Description: Compares two face images and outputs the similarity score of the faces in the two images as the result.
     * - At least one of the specified comparison images should be a face photo (FacePic).
     * - If an image contains multiple faces, the algorithm will automatically select the largest face in the image.
     * - If one of the two comparison images does not detect a face, the system will return an error message stating \\"No face detected\\".
     * When uploading images, you need to provide the HTTP address or base64 encoding of the image.
     * - HTTP Address: A publicly accessible HTTP address. For example, `http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`.
     * - Base64 Encoding: An image encoded in base64, formatted as `base64://<base64 string of the image>`.
     * Image Restrictions
     * - Does not support relative or absolute paths for local images.
     * - Please keep the size of a single image within 2MB to avoid timeout during retrieval by the algorithm.
     * - The body of a single request has a size limit of 8MB; please calculate the total size of all images and other information in the request to ensure it does not exceed this limit.
     * - When using base64 to transmit images, the request method must be changed to POST; the header description such as `data:image/png;base64,` should be removed from the base64 string of the image.
     *
     * @param Request - CompareFacesRequest
     *
     * @returns CompareFacesResponse
     *
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
     * @param Request - ContrastFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContrastFaceVerifyResponse
     *
     * @param ContrastFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ContrastFaceVerifyResponse
     */
    public function contrastFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        $body = [];
        if (null !== $request->certName) {
            @$body['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$body['CertNo'] = $request->certNo;
        }

        if (null !== $request->certType) {
            @$body['CertType'] = $request->certType;
        }

        if (null !== $request->certifyId) {
            @$body['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->deviceToken) {
            @$body['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->encryptType) {
            @$body['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->faceContrastFile) {
            @$body['FaceContrastFile'] = $request->faceContrastFile;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->ossBucketName) {
            @$body['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$body['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ContrastFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContrastFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ContrastFaceVerifyRequest
     *
     * @returns ContrastFaceVerifyResponse
     *
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'Cloudauth',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $contrastFaceVerifyReq = new ContrastFaceVerifyRequest([]);
        Utils::convert($request, $contrastFaceVerifyReq);
        if (null !== $request->faceContrastFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->faceContrastFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $contrastFaceVerifyReq->faceContrastFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->contrastFaceVerifyWithOptions($contrastFaceVerifyReq, $runtime);
    }

    /**
     * @param Request - CreateAuthKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthKeyResponse
     *
     * @param CreateAuthKeyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAuthKeyResponse
     */
    public function createAuthKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authYears) {
            @$query['AuthYears'] = $request->authYears;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->test) {
            @$query['Test'] = $request->test;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAuthKey',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuthKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - CreateAuthKeyRequest
     *
     * @returns CreateAuthKeyResponse
     *
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
     * @param Request - CreateVerifySettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVerifySettingResponse
     *
     * @param CreateVerifySettingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVerifySettingResponse
     */
    public function createVerifySettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizName) {
            @$query['BizName'] = $request->bizName;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->guideStep) {
            @$query['GuideStep'] = $request->guideStep;
        }

        if (null !== $request->privacyStep) {
            @$query['PrivacyStep'] = $request->privacyStep;
        }

        if (null !== $request->resultStep) {
            @$query['ResultStep'] = $request->resultStep;
        }

        if (null !== $request->solution) {
            @$query['Solution'] = $request->solution;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVerifySetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVerifySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - CreateVerifySettingRequest
     *
     * @returns CreateVerifySettingResponse
     *
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
     * Product Credential Verification.
     *
     * @remarks
     * Upload e-commerce product images to perform tampering, quality (clarity), and similar image detection, returning risk labels and scores.
     *
     * @param Request - CredentialProductVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialProductVerifyV2Response
     *
     * @param CredentialProductVerifyV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->imageFile) {
            @$body['ImageFile'] = $request->imageFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialProductVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialProductVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Product Credential Verification.
     *
     * @remarks
     * Upload e-commerce product images to perform tampering, quality (clarity), and similar image detection, returning risk labels and scores.
     *
     * @param Request - CredentialProductVerifyV2Request
     *
     * @returns CredentialProductVerifyV2Response
     *
     * @param CredentialProductVerifyV2Request $request
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialProductVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @param CredentialProductVerifyV2AdvanceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CredentialProductVerifyV2Response
     */
    public function credentialProductVerifyV2Advance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'Cloudauth',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $credentialProductVerifyV2Req = new CredentialProductVerifyV2Request([]);
        Utils::convert($request, $credentialProductVerifyV2Req);
        if (null !== $request->imageFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $credentialProductVerifyV2Req->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialProductVerifyV2WithOptions($credentialProductVerifyV2Req, $runtime);
    }

    /**
     * 凭证核验.
     *
     * @param tmpReq - CredentialVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyResponse
     *
     * @param CredentialVerifyRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CredentialVerifyResponse
     */
    public function credentialVerifyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CredentialVerifyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->merchantDetail) {
            $request->merchantDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->merchantDetail, 'MerchantDetail', 'json');
        }

        $query = [];
        if (null !== $request->certNum) {
            @$query['CertNum'] = $request->certNum;
        }

        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->isCheck) {
            @$query['IsCheck'] = $request->isCheck;
        }

        if (null !== $request->isOCR) {
            @$query['IsOCR'] = $request->isOCR;
        }

        if (null !== $request->merchantDetailShrink) {
            @$query['MerchantDetail'] = $request->merchantDetailShrink;
        }

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptModel) {
            @$query['PromptModel'] = $request->promptModel;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $body = [];
        if (null !== $request->imageContext) {
            @$body['ImageContext'] = $request->imageContext;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 凭证核验.
     *
     * @param Request - CredentialVerifyRequest
     *
     * @returns CredentialVerifyResponse
     *
     * @param CredentialVerifyRequest $request
     *
     * @return CredentialVerifyResponse
     */
    public function credentialVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyWithOptions($request, $runtime);
    }

    /**
     * Credential Verification.
     *
     * @remarks
     * Input credential image information, perform image tampering and forgery detection, and image semantic understanding. Return the risk detection results.
     *
     * @param tmpReq - CredentialVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyV2Response
     *
     * @param CredentialVerifyV2Request $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CredentialVerifyV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->merchantDetail) {
            $request->merchantDetailShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->merchantDetail, 'MerchantDetail', 'json');
        }

        $query = [];
        if (null !== $request->certNum) {
            @$query['CertNum'] = $request->certNum;
        }

        if (null !== $request->credName) {
            @$query['CredName'] = $request->credName;
        }

        if (null !== $request->credType) {
            @$query['CredType'] = $request->credType;
        }

        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->isCheck) {
            @$query['IsCheck'] = $request->isCheck;
        }

        if (null !== $request->isOcr) {
            @$query['IsOcr'] = $request->isOcr;
        }

        if (null !== $request->merchantDetailShrink) {
            @$query['MerchantDetail'] = $request->merchantDetailShrink;
        }

        if (null !== $request->merchantId) {
            @$query['MerchantId'] = $request->merchantId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->promptModel) {
            @$query['PromptModel'] = $request->promptModel;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $body = [];
        if (null !== $request->imageContext) {
            @$body['ImageContext'] = $request->imageContext;
        }

        if (null !== $request->imageFile) {
            @$body['ImageFile'] = $request->imageFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CredentialVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Credential Verification.
     *
     * @remarks
     * Input credential image information, perform image tampering and forgery detection, and image semantic understanding. Return the risk detection results.
     *
     * @param Request - CredentialVerifyV2Request
     *
     * @returns CredentialVerifyV2Response
     *
     * @param CredentialVerifyV2Request $request
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyV2WithOptions($request, $runtime);
    }

    /**
     * @param CredentialVerifyV2AdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CredentialVerifyV2Response
     */
    public function credentialVerifyV2Advance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'Cloudauth',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $credentialVerifyV2Req = new CredentialVerifyV2Request([]);
        Utils::convert($request, $credentialVerifyV2Req);
        if (null !== $request->imageFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $credentialVerifyV2Req->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialVerifyV2WithOptions($credentialVerifyV2Req, $runtime);
    }

    /**
     * Face Credential Verification Service.
     *
     * @remarks
     * > The Face Deepfake Detection API is currently in the free public beta stage, which will end on August 30, 2024, at 23:59:59. During the public beta, the QPS (Queries Per Second) cannot exceed 3 times/second.
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - DeepfakeDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeDetectResponse
     *
     * @param DeepfakeDetectRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeepfakeDetectResponse
     */
    public function deepfakeDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceInputType) {
            @$query['FaceInputType'] = $request->faceInputType;
        }

        if (null !== $request->faceUrl) {
            @$query['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        $body = [];
        if (null !== $request->faceBase64) {
            @$body['FaceBase64'] = $request->faceBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeepfakeDetect',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Face Credential Verification Service.
     *
     * @remarks
     * > The Face Deepfake Detection API is currently in the free public beta stage, which will end on August 30, 2024, at 23:59:59. During the public beta, the QPS (Queries Per Second) cannot exceed 3 times/second.
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - DeepfakeDetectRequest
     *
     * @returns DeepfakeDetectResponse
     *
     * @param DeepfakeDetectRequest $request
     *
     * @return DeepfakeDetectResponse
     */
    public function deepfakeDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectWithOptions($request, $runtime);
    }

    /**
     * Financial Level Sensitive Data Deletion Interface.
     *
     * @remarks
     * Deletes all personal information fields in the request, including name, ID number, phone number, IP, images, videos, and device information, etc.
     *
     * @param Request - DeleteFaceVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceVerifyResultResponse
     *
     * @param DeleteFaceVerifyResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteFaceVerifyResultResponse
     */
    public function deleteFaceVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->deleteAfterQuery) {
            @$query['DeleteAfterQuery'] = $request->deleteAfterQuery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceVerifyResult',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Financial Level Sensitive Data Deletion Interface.
     *
     * @remarks
     * Deletes all personal information fields in the request, including name, ID number, phone number, IP, images, videos, and device information, etc.
     *
     * @param Request - DeleteFaceVerifyResultRequest
     *
     * @returns DeleteFaceVerifyResultResponse
     *
     * @param DeleteFaceVerifyResultRequest $request
     *
     * @return DeleteFaceVerifyResultResponse
     */
    public function deleteFaceVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceVerifyResultWithOptions($request, $runtime);
    }

    /**
     * 图片要素核验获取认证结果.
     *
     * @param Request - DescribeCardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCardVerifyResponse
     *
     * @param DescribeCardVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCardVerifyResponse
     */
    public function describeCardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片要素核验获取认证结果.
     *
     * @param Request - DescribeCardVerifyRequest
     *
     * @returns DescribeCardVerifyResponse
     *
     * @param DescribeCardVerifyRequest $request
     *
     * @return DescribeCardVerifyResponse
     */
    public function describeCardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCardVerifyWithOptions($request, $runtime);
    }

    /**
     * @param Request - DescribeDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceInfoResponse
     *
     * @param DescribeDeviceInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceInfoResponse
     */
    public function describeDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->expiredEndDay) {
            @$query['ExpiredEndDay'] = $request->expiredEndDay;
        }

        if (null !== $request->expiredStartDay) {
            @$query['ExpiredStartDay'] = $request->expiredStartDay;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceInfo',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeDeviceInfoRequest
     *
     * @returns DescribeDeviceInfoResponse
     *
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
     * 金融级人脸保镖服务
     *
     * @param Request - DescribeFaceGuardRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaceGuardRiskResponse
     *
     * @param DescribeFaceGuardRiskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFaceGuardRiskResponse
     */
    public function describeFaceGuardRiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deviceToken) {
            @$query['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaceGuardRisk',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaceGuardRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 金融级人脸保镖服务
     *
     * @param Request - DescribeFaceGuardRiskRequest
     *
     * @returns DescribeFaceGuardRiskResponse
     *
     * @param DescribeFaceGuardRiskRequest $request
     *
     * @return DescribeFaceGuardRiskResponse
     */
    public function describeFaceGuardRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFaceGuardRiskWithOptions($request, $runtime);
    }

    /**
     * @param Request - DescribeFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFaceVerifyResponse
     *
     * @param DescribeFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFaceVerifyResponse
     */
    public function describeFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->pictureReturnType) {
            @$query['PictureReturnType'] = $request->pictureReturnType;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeFaceVerifyRequest
     *
     * @returns DescribeFaceVerifyResponse
     *
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
     * @param Request - DescribeOssUploadTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssUploadTokenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeOssUploadToken',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DescribeOssUploadTokenResponse
     *
     * @return DescribeOssUploadTokenResponse
     */
    public function describeOssUploadToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssUploadTokenWithOptions($runtime);
    }

    /**
     * Open API新增金融级数据统计API.
     *
     * @param Request - DescribePageFaceVerifyDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePageFaceVerifyDataResponse
     *
     * @param DescribePageFaceVerifyDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePageFaceVerifyDataResponse
     */
    public function describePageFaceVerifyDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePageFaceVerifyData',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePageFaceVerifyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Open API新增金融级数据统计API.
     *
     * @param Request - DescribePageFaceVerifyDataRequest
     *
     * @returns DescribePageFaceVerifyDataResponse
     *
     * @param DescribePageFaceVerifyDataRequest $request
     *
     * @return DescribePageFaceVerifyDataResponse
     */
    public function describePageFaceVerifyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePageFaceVerifyDataWithOptions($request, $runtime);
    }

    /**
     * @param Request - DescribeSmartStatisticsPageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSmartStatisticsPageListResponse
     *
     * @param DescribeSmartStatisticsPageListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSmartStatisticsPageListResponse
     */
    public function describeSmartStatisticsPageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSmartStatisticsPageList',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSmartStatisticsPageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeSmartStatisticsPageListRequest
     *
     * @returns DescribeSmartStatisticsPageListResponse
     *
     * @param DescribeSmartStatisticsPageListRequest $request
     *
     * @return DescribeSmartStatisticsPageListResponse
     */
    public function describeSmartStatisticsPageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartStatisticsPageListWithOptions($request, $runtime);
    }

    /**
     * @param Request - DescribeVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyResultResponse
     *
     * @param DescribeVerifyResultRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVerifyResultResponse
     */
    public function describeVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyResult',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeVerifyResultRequest
     *
     * @returns DescribeVerifyResultResponse
     *
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
     * @param Request - DescribeVerifySDKRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifySDKResponse
     *
     * @param DescribeVerifySDKRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVerifySDKResponse
     */
    public function describeVerifySDKWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifySDK',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifySDKResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeVerifySDKRequest
     *
     * @returns DescribeVerifySDKResponse
     *
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
     * @param Request - DescribeVerifyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyTokenResponse
     *
     * @param DescribeVerifyTokenRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVerifyTokenResponse
     */
    public function describeVerifyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackSeed) {
            @$query['CallbackSeed'] = $request->callbackSeed;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->faceRetainedImageUrl) {
            @$query['FaceRetainedImageUrl'] = $request->faceRetainedImageUrl;
        }

        if (null !== $request->failedRedirectUrl) {
            @$query['FailedRedirectUrl'] = $request->failedRedirectUrl;
        }

        if (null !== $request->idCardBackImageUrl) {
            @$query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }

        if (null !== $request->idCardFrontImageUrl) {
            @$query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }

        if (null !== $request->idCardNumber) {
            @$query['IdCardNumber'] = $request->idCardNumber;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->passedRedirectUrl) {
            @$query['PassedRedirectUrl'] = $request->passedRedirectUrl;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userIp) {
            @$query['UserIp'] = $request->userIp;
        }

        if (null !== $request->userPhoneNumber) {
            @$query['UserPhoneNumber'] = $request->userPhoneNumber;
        }

        if (null !== $request->userRegistTime) {
            @$query['UserRegistTime'] = $request->userRegistTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyToken',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DescribeVerifyTokenRequest
     *
     * @returns DescribeVerifyTokenResponse
     *
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
     * @param Request - DetectFaceAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectFaceAttributesResponse
     *
     * @param DetectFaceAttributesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectFaceAttributesResponse
     */
    public function detectFaceAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->materialValue) {
            @$body['MaterialValue'] = $request->materialValue;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectFaceAttributes',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectFaceAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectFaceAttributesRequest
     *
     * @returns DetectFaceAttributesResponse
     *
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
     * Two-Factor Validity Verification API.
     *
     * @param Request - Id2MetaPeriodVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaPeriodVerifyResponse
     *
     * @param Id2MetaPeriodVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return Id2MetaPeriodVerifyResponse
     */
    public function id2MetaPeriodVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        if (null !== $request->validityEndDate) {
            @$body['ValidityEndDate'] = $request->validityEndDate;
        }

        if (null !== $request->validityStartDate) {
            @$body['ValidityStartDate'] = $request->validityStartDate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaPeriodVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaPeriodVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Two-Factor Validity Verification API.
     *
     * @param Request - Id2MetaPeriodVerifyRequest
     *
     * @returns Id2MetaPeriodVerifyResponse
     *
     * @param Id2MetaPeriodVerifyRequest $request
     *
     * @return Id2MetaPeriodVerifyResponse
     */
    public function id2MetaPeriodVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaPeriodVerifyWithOptions($request, $runtime);
    }

    /**
     * Identity Two-Factor Standard.
     *
     * @param Request - Id2MetaStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaStandardVerifyResponse
     *
     * @param Id2MetaStandardVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return Id2MetaStandardVerifyResponse
     */
    public function id2MetaStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Two-Factor Standard.
     *
     * @param Request - Id2MetaStandardVerifyRequest
     *
     * @returns Id2MetaStandardVerifyResponse
     *
     * @param Id2MetaStandardVerifyRequest $request
     *
     * @return Id2MetaStandardVerifyResponse
     */
    public function id2MetaStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Identity Two-Factor Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Id2MetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyResponse
     *
     * @param Id2MetaVerifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return Id2MetaVerifyResponse
     */
    public function id2MetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identity Two-Factor Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Id2MetaVerifyRequest
     *
     * @returns Id2MetaVerifyResponse
     *
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
     * ID Two-Factor Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card, and get the verification result of the two factors from an authoritative data source.
     *
     * @param Request - Id2MetaVerifyWithOCRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyWithOCRResponse
     *
     * @param Id2MetaVerifyWithOCRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCRWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certFile) {
            @$body['CertFile'] = $request->certFile;
        }

        if (null !== $request->certNationalFile) {
            @$body['CertNationalFile'] = $request->certNationalFile;
        }

        if (null !== $request->certNationalUrl) {
            @$body['CertNationalUrl'] = $request->certNationalUrl;
        }

        if (null !== $request->certUrl) {
            @$body['CertUrl'] = $request->certUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerifyWithOCR',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyWithOCRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ID Two-Factor Image Verification.
     *
     * @remarks
     * Upload both sides of the ID card, and get the verification result of the two factors from an authoritative data source.
     *
     * @param Request - Id2MetaVerifyWithOCRRequest
     *
     * @returns Id2MetaVerifyWithOCRResponse
     *
     * @param Id2MetaVerifyWithOCRRequest $request
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyWithOCRWithOptions($request, $runtime);
    }

    /**
     * @param Id2MetaVerifyWithOCRAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return Id2MetaVerifyWithOCRResponse
     */
    public function id2MetaVerifyWithOCRAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'Cloudauth',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $id2MetaVerifyWithOCRReq = new Id2MetaVerifyWithOCRRequest([]);
        Utils::convert($request, $id2MetaVerifyWithOCRReq);
        if (null !== $request->certFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $id2MetaVerifyWithOCRReq->certFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->certNationalFileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->certNationalFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $id2MetaVerifyWithOCRReq->certNationalFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->id2MetaVerifyWithOCRWithOptions($id2MetaVerifyWithOCRReq, $runtime);
    }

    /**
     * Initiate an authentication request for image verification.
     *
     * @remarks
     * Before each authentication, use this interface to obtain the CertifyId, which is used to link various interfaces in the authentication request.
     *
     * @param Request - InitCardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitCardVerifyResponse
     *
     * @param InitCardVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitCardVerifyResponse
     */
    public function initCardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->cardPageNumber) {
            @$query['CardPageNumber'] = $request->cardPageNumber;
        }

        if (null !== $request->cardType) {
            @$query['CardType'] = $request->cardType;
        }

        if (null !== $request->docScanMode) {
            @$query['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->pictureSave) {
            @$query['PictureSave'] = $request->pictureSave;
        }

        if (null !== $request->verifyMeta) {
            @$query['VerifyMeta'] = $request->verifyMeta;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitCardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitCardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate an authentication request for image verification.
     *
     * @remarks
     * Before each authentication, use this interface to obtain the CertifyId, which is used to link various interfaces in the authentication request.
     *
     * @param Request - InitCardVerifyRequest
     *
     * @returns InitCardVerifyResponse
     *
     * @param InitCardVerifyRequest $request
     *
     * @return InitCardVerifyResponse
     */
    public function initCardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initCardVerifyWithOptions($request, $runtime);
    }

    /**
     * @param Request - InitFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitFaceVerifyResponse
     *
     * @param InitFaceVerifyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitFaceVerifyResponse
     */
    public function initFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appQualityCheck) {
            @$query['AppQualityCheck'] = $request->appQualityCheck;
        }

        if (null !== $request->birthday) {
            @$query['Birthday'] = $request->birthday;
        }

        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->cameraSelection) {
            @$query['CameraSelection'] = $request->cameraSelection;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->certifyUrlStyle) {
            @$query['CertifyUrlStyle'] = $request->certifyUrlStyle;
        }

        if (null !== $request->certifyUrlType) {
            @$query['CertifyUrlType'] = $request->certifyUrlType;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$query['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->faceGuardOutput) {
            @$query['FaceGuardOutput'] = $request->faceGuardOutput;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->ossBucketName) {
            @$query['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$query['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$query['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->procedurePriority) {
            @$query['ProcedurePriority'] = $request->procedurePriority;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->rarelyCharacters) {
            @$query['RarelyCharacters'] = $request->rarelyCharacters;
        }

        if (null !== $request->readImg) {
            @$query['ReadImg'] = $request->readImg;
        }

        if (null !== $request->returnUrl) {
            @$query['ReturnUrl'] = $request->returnUrl;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->suitableType) {
            @$query['SuitableType'] = $request->suitableType;
        }

        if (null !== $request->uiCustomUrl) {
            @$query['UiCustomUrl'] = $request->uiCustomUrl;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->validityDate) {
            @$query['ValidityDate'] = $request->validityDate;
        }

        if (null !== $request->videoEvidence) {
            @$query['VideoEvidence'] = $request->videoEvidence;
        }

        if (null !== $request->voluntaryCustomizedContent) {
            @$query['VoluntaryCustomizedContent'] = $request->voluntaryCustomizedContent;
        }

        $body = [];
        if (null !== $request->authId) {
            @$body['AuthId'] = $request->authId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - InitFaceVerifyRequest
     *
     * @returns InitFaceVerifyResponse
     *
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
     * Add Real Person Whitelist.
     *
     * @param Request - InsertWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertWhiteListSettingResponse
     *
     * @param InsertWhiteListSettingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InsertWhiteListSettingResponse
     */
    public function insertWhiteListSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->validDay) {
            @$query['ValidDay'] = $request->validDay;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Real Person Whitelist.
     *
     * @param Request - InsertWhiteListSettingRequest
     *
     * @returns InsertWhiteListSettingResponse
     *
     * @param InsertWhiteListSettingRequest $request
     *
     * @return InsertWhiteListSettingResponse
     */
    public function insertWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * @param Request - LivenessFaceVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LivenessFaceVerifyResponse
     *
     * @param LivenessFaceVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LivenessFaceVerifyResponse
     */
    public function livenessFaceVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        $body = [];
        if (null !== $request->certifyId) {
            @$body['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->deviceToken) {
            @$body['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->faceContrastPicture) {
            @$body['FaceContrastPicture'] = $request->faceContrastPicture;
        }

        if (null !== $request->faceContrastPictureUrl) {
            @$body['FaceContrastPictureUrl'] = $request->faceContrastPictureUrl;
        }

        if (null !== $request->ip) {
            @$body['Ip'] = $request->ip;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->ossBucketName) {
            @$body['OssBucketName'] = $request->ossBucketName;
        }

        if (null !== $request->ossObjectName) {
            @$body['OssObjectName'] = $request->ossObjectName;
        }

        if (null !== $request->outerOrderNo) {
            @$body['OuterOrderNo'] = $request->outerOrderNo;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneId) {
            @$body['SceneId'] = $request->sceneId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LivenessFaceVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LivenessFaceVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - LivenessFaceVerifyRequest
     *
     * @returns LivenessFaceVerifyResponse
     *
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
     * Mobile Two-Factor Verification.
     *
     * @remarks
     * Input the phone number and name, verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile2MetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile2MetaVerifyResponse
     *
     * @param Mobile2MetaVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Mobile2MetaVerifyResponse
     */
    public function mobile2MetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile2MetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile2MetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mobile Two-Factor Verification.
     *
     * @remarks
     * Input the phone number and name, verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile2MetaVerifyRequest
     *
     * @returns Mobile2MetaVerifyResponse
     *
     * @param Mobile2MetaVerifyRequest $request
     *
     * @return Mobile2MetaVerifyResponse
     */
    public function mobile2MetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile2MetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Detailed Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources. If they do not match, the reason for the mismatch is returned.
     *
     * @param Request - Mobile3MetaDetailStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaDetailStandardVerifyResponse
     *
     * @param Mobile3MetaDetailStandardVerifyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return Mobile3MetaDetailStandardVerifyResponse
     */
    public function mobile3MetaDetailStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaDetailStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaDetailStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detailed Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources. If they do not match, the reason for the mismatch is returned.
     *
     * @param Request - Mobile3MetaDetailStandardVerifyRequest
     *
     * @returns Mobile3MetaDetailStandardVerifyResponse
     *
     * @param Mobile3MetaDetailStandardVerifyRequest $request
     *
     * @return Mobile3MetaDetailStandardVerifyResponse
     */
    public function mobile3MetaDetailStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaDetailStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Detailed Mobile Three-Element Verification Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaDetailVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaDetailVerifyResponse
     *
     * @param Mobile3MetaDetailVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaDetailVerifyResponse
     */
    public function mobile3MetaDetailVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaDetailVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaDetailVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detailed Mobile Three-Element Verification Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaDetailVerifyRequest
     *
     * @returns Mobile3MetaDetailVerifyResponse
     *
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
     * Simplified Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile3MetaSimpleStandardVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaSimpleStandardVerifyResponse
     *
     * @param Mobile3MetaSimpleStandardVerifyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return Mobile3MetaSimpleStandardVerifyResponse
     */
    public function mobile3MetaSimpleStandardVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaSimpleStandardVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaSimpleStandardVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Simplified Three-Element Verification for Phone Number_Standard Version.
     *
     * @remarks
     * Input the phone number, name, and ID number to verify their authenticity and consistency through authoritative data sources.
     *
     * @param Request - Mobile3MetaSimpleStandardVerifyRequest
     *
     * @returns Mobile3MetaSimpleStandardVerifyResponse
     *
     * @param Mobile3MetaSimpleStandardVerifyRequest $request
     *
     * @return Mobile3MetaSimpleStandardVerifyResponse
     */
    public function mobile3MetaSimpleStandardVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaSimpleStandardVerifyWithOptions($request, $runtime);
    }

    /**
     * Mobile Three Elements Simplified Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaSimpleVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaSimpleVerifyResponse
     *
     * @param Mobile3MetaSimpleVerifyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Mobile3MetaSimpleVerifyResponse
     */
    public function mobile3MetaSimpleVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifyNum) {
            @$body['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$body['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaSimpleVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaSimpleVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mobile Three Elements Simplified Interface.
     *
     * @remarks
     * - Service address: cloudauth.aliyuncs.com (IPv4) or cloudauth-dualstack.aliyuncs.com (IPv6).
     * - Request method: POST and GET.
     * - Transfer protocol: HTTPS.
     *
     * @param Request - Mobile3MetaSimpleVerifyRequest
     *
     * @returns Mobile3MetaSimpleVerifyResponse
     *
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
     * Number Detection.
     *
     * @param Request - MobileDetectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileDetectResponse
     *
     * @param MobileDetectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MobileDetectResponse
     */
    public function mobileDetectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobiles) {
            @$body['Mobiles'] = $request->mobiles;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileDetect',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileDetectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Number Detection.
     *
     * @param Request - MobileDetectRequest
     *
     * @returns MobileDetectResponse
     *
     * @param MobileDetectRequest $request
     *
     * @return MobileDetectResponse
     */
    public function mobileDetect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileDetectWithOptions($request, $runtime);
    }

    /**
     * Query the online status of a mobile number.
     *
     * @param Request - MobileOnlineStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileOnlineStatusResponse
     *
     * @param MobileOnlineStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MobileOnlineStatusResponse
     */
    public function mobileOnlineStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileOnlineStatus',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileOnlineStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the online status of a mobile number.
     *
     * @param Request - MobileOnlineStatusRequest
     *
     * @returns MobileOnlineStatusResponse
     *
     * @param MobileOnlineStatusRequest $request
     *
     * @return MobileOnlineStatusResponse
     */
    public function mobileOnlineStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileOnlineStatusWithOptions($request, $runtime);
    }

    /**
     * Query the online duration of a mobile number.
     *
     * @param Request - MobileOnlineTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MobileOnlineTimeResponse
     *
     * @param MobileOnlineTimeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return MobileOnlineTimeResponse
     */
    public function mobileOnlineTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$body['ParamType'] = $request->paramType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MobileOnlineTime',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MobileOnlineTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the online duration of a mobile number.
     *
     * @param Request - MobileOnlineTimeRequest
     *
     * @returns MobileOnlineTimeResponse
     *
     * @param MobileOnlineTimeRequest $request
     *
     * @return MobileOnlineTimeResponse
     */
    public function mobileOnlineTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileOnlineTimeWithOptions($request, $runtime);
    }

    /**
     * Call ModifyDeviceInfo to update device-related information, such as extending the device authorization validity period, updating the business party\\"s custom business identifier, and device ID. Suitable for scenarios like renewing the device validity period.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - ModifyDeviceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceInfoResponse
     *
     * @param ModifyDeviceInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDeviceInfoResponse
     */
    public function modifyDeviceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->expiredDay) {
            @$query['ExpiredDay'] = $request->expiredDay;
        }

        if (null !== $request->userDeviceId) {
            @$query['UserDeviceId'] = $request->userDeviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDeviceInfo',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call ModifyDeviceInfo to update device-related information, such as extending the device authorization validity period, updating the business party\\"s custom business identifier, and device ID. Suitable for scenarios like renewing the device validity period.
     *
     * @remarks
     * Request Method: Supports sending requests using HTTPS POST and GET methods.
     *
     * @param Request - ModifyDeviceInfoRequest
     *
     * @returns ModifyDeviceInfoResponse
     *
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
     * Paging Query for Real Person Whitelist Configuration.
     *
     * @param Request - PageQueryWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageQueryWhiteListSettingResponse
     *
     * @param PageQueryWhiteListSettingRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PageQueryWhiteListSettingResponse
     */
    public function pageQueryWhiteListSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certNo) {
            @$query['CertNo'] = $request->certNo;
        }

        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->validEndDate) {
            @$query['ValidEndDate'] = $request->validEndDate;
        }

        if (null !== $request->validStartDate) {
            @$query['ValidStartDate'] = $request->validStartDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageQueryWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageQueryWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paging Query for Real Person Whitelist Configuration.
     *
     * @param Request - PageQueryWhiteListSettingRequest
     *
     * @returns PageQueryWhiteListSettingResponse
     *
     * @param PageQueryWhiteListSettingRequest $request
     *
     * @return PageQueryWhiteListSettingResponse
     */
    public function pageQueryWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * Delete Real Person Whitelist.
     *
     * @param tmpReq - RemoveWhiteListSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveWhiteListSettingResponse
     *
     * @param RemoveWhiteListSettingRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveWhiteListSettingResponse
     */
    public function removeWhiteListSettingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveWhiteListSettingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }

        $query = [];
        if (null !== $request->idsShrink) {
            @$query['Ids'] = $request->idsShrink;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveWhiteListSetting',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveWhiteListSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Real Person Whitelist.
     *
     * @param Request - RemoveWhiteListSettingRequest
     *
     * @returns RemoveWhiteListSettingResponse
     *
     * @param RemoveWhiteListSettingRequest $request
     *
     * @return RemoveWhiteListSettingResponse
     */
    public function removeWhiteListSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeWhiteListSettingWithOptions($request, $runtime);
    }

    /**
     * Five-Item Vehicle Information Recognition.
     *
     * @remarks
     * Query basic vehicle information through the license plate number and vehicle type.
     *
     * @param Request - Vehicle5ItemQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Vehicle5ItemQueryResponse
     *
     * @param Vehicle5ItemQueryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Vehicle5ItemQueryResponse
     */
    public function vehicle5ItemQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Vehicle5ItemQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Vehicle5ItemQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Five-Item Vehicle Information Recognition.
     *
     * @remarks
     * Query basic vehicle information through the license plate number and vehicle type.
     *
     * @param Request - Vehicle5ItemQueryRequest
     *
     * @returns Vehicle5ItemQueryResponse
     *
     * @param Vehicle5ItemQueryRequest $request
     *
     * @return Vehicle5ItemQueryResponse
     */
    public function vehicle5ItemQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicle5ItemQueryWithOptions($request, $runtime);
    }

    /**
     * Vehicle Insurance Date Inquiry.
     *
     * @remarks
     * Query the vehicle insurance date through the license plate number, vehicle type, and vehicle identification number (VIN).
     *
     * @param Request - VehicleInsureQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleInsureQueryResponse
     *
     * @param VehicleInsureQueryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return VehicleInsureQueryResponse
     */
    public function vehicleInsureQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->vin) {
            @$query['Vin'] = $request->vin;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleInsureQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleInsureQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Insurance Date Inquiry.
     *
     * @remarks
     * Query the vehicle insurance date through the license plate number, vehicle type, and vehicle identification number (VIN).
     *
     * @param Request - VehicleInsureQueryRequest
     *
     * @returns VehicleInsureQueryResponse
     *
     * @param VehicleInsureQueryRequest $request
     *
     * @return VehicleInsureQueryResponse
     */
    public function vehicleInsureQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleInsureQueryWithOptions($request, $runtime);
    }

    /**
     * Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, vehicle license plate, and vehicle type.
     *
     * @param Request - VehicleMetaVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleMetaVerifyResponse
     *
     * @param VehicleMetaVerifyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VehicleMetaVerifyResponse
     */
    public function vehicleMetaVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->verifyMetaType) {
            @$query['VerifyMetaType'] = $request->verifyMetaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleMetaVerify',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleMetaVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, vehicle license plate, and vehicle type.
     *
     * @param Request - VehicleMetaVerifyRequest
     *
     * @returns VehicleMetaVerifyResponse
     *
     * @param VehicleMetaVerifyRequest $request
     *
     * @return VehicleMetaVerifyResponse
     */
    public function vehicleMetaVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleMetaVerifyWithOptions($request, $runtime);
    }

    /**
     * Enhanced Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, license plate number, and vehicle type, and supports returning detailed vehicle information.
     *
     * @param Request - VehicleMetaVerifyV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleMetaVerifyV2Response
     *
     * @param VehicleMetaVerifyV2Request $request
     * @param RuntimeOptions             $runtime
     *
     * @return VehicleMetaVerifyV2Response
     */
    public function vehicleMetaVerifyV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        if (null !== $request->verifyMetaType) {
            @$query['VerifyMetaType'] = $request->verifyMetaType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleMetaVerifyV2',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleMetaVerifyV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enhanced Vehicle Element Verification.
     *
     * @remarks
     * Verifies the consistency of name, ID number, license plate number, and vehicle type, and supports returning detailed vehicle information.
     *
     * @param Request - VehicleMetaVerifyV2Request
     *
     * @returns VehicleMetaVerifyV2Response
     *
     * @param VehicleMetaVerifyV2Request $request
     *
     * @return VehicleMetaVerifyV2Response
     */
    public function vehicleMetaVerifyV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleMetaVerifyV2WithOptions($request, $runtime);
    }

    /**
     * Vehicle Information Recognition.
     *
     * @remarks
     * Query detailed vehicle information through the license plate number and vehicle type.
     *
     * @param Request - VehicleQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VehicleQueryResponse
     *
     * @param VehicleQueryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VehicleQueryResponse
     */
    public function vehicleQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->vehicleNum) {
            @$query['VehicleNum'] = $request->vehicleNum;
        }

        if (null !== $request->vehicleType) {
            @$query['VehicleType'] = $request->vehicleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VehicleQuery',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VehicleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Vehicle Information Recognition.
     *
     * @remarks
     * Query detailed vehicle information through the license plate number and vehicle type.
     *
     * @param Request - VehicleQueryRequest
     *
     * @returns VehicleQueryResponse
     *
     * @param VehicleQueryRequest $request
     *
     * @return VehicleQueryResponse
     */
    public function vehicleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vehicleQueryWithOptions($request, $runtime);
    }

    /**
     * @param Request - VerifyMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyMaterialResponse
     *
     * @param VerifyMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VerifyMaterialResponse
     */
    public function verifyMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->faceImageUrl) {
            @$query['FaceImageUrl'] = $request->faceImageUrl;
        }

        if (null !== $request->idCardBackImageUrl) {
            @$query['IdCardBackImageUrl'] = $request->idCardBackImageUrl;
        }

        if (null !== $request->idCardFrontImageUrl) {
            @$query['IdCardFrontImageUrl'] = $request->idCardFrontImageUrl;
        }

        if (null !== $request->idCardNumber) {
            @$query['IdCardNumber'] = $request->idCardNumber;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyMaterial',
            'version' => '2019-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - VerifyMaterialRequest
     *
     * @returns VerifyMaterialResponse
     *
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
