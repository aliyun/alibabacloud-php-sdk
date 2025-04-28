<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckVerifyLogResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlAdvanceRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CredentialVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeepfakeDetectIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrMaxResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DocOcrResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceGuardRiskResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FraudResultCallBackRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FraudResultCallBackResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaPeriodVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeShrinkRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudauthintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

    // Deprecated
    /**
     * 证件OCR识别纯服务端接口.
     *
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *
     * @param request - CardOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CardOcrResponse
     *
     * @param CardOcrRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return CardOcrResponse
     */
    public function cardOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->spoof) {
            @$query['Spoof'] = $request->spoof;
        }

        $body = [];
        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CardOcr',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CardOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * 证件OCR识别纯服务端接口.
     *
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *
     * @param request - CardOcrRequest
     *
     * @returns CardOcrResponse
     *
     * @param CardOcrRequest $request
     *
     * @return CardOcrResponse
     */
    public function cardOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cardOcrWithOptions($request, $runtime);
    }

    /**
     * 结果查询.
     *
     * @param request - CheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckResultResponse
     *
     * @param CheckResultRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckResultResponse
     */
    public function checkResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extraImageControlList) {
            @$query['ExtraImageControlList'] = $request->extraImageControlList;
        }

        if (null !== $request->isReturnImage) {
            @$query['IsReturnImage'] = $request->isReturnImage;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->returnFiveCategorySpoofResult) {
            @$query['ReturnFiveCategorySpoofResult'] = $request->returnFiveCategorySpoofResult;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckResult',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 结果查询.
     *
     * @param request - CheckResultRequest
     *
     * @returns CheckResultResponse
     *
     * @param CheckResultRequest $request
     *
     * @return CheckResultResponse
     */
    public function checkResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResultWithOptions($request, $runtime);
    }

    /**
     * 认证日志查询接口.
     *
     * @param request - CheckVerifyLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckVerifyLogResponse
     *
     * @param CheckVerifyLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckVerifyLogResponse
     */
    public function checkVerifyLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->transactionId) {
            @$body['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckVerifyLog',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckVerifyLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 认证日志查询接口.
     *
     * @param request - CheckVerifyLogRequest
     *
     * @returns CheckVerifyLogResponse
     *
     * @param CheckVerifyLogRequest $request
     *
     * @return CheckVerifyLogResponse
     */
    public function checkVerifyLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVerifyLogWithOptions($request, $runtime);
    }

    /**
     * 凭证核验.
     *
     * @param request - CredentialVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CredentialVerifyIntlResponse
     *
     * @param CredentialVerifyIntlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntlWithOptions($request, $runtime)
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
            'action' => 'CredentialVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CredentialVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 凭证核验.
     *
     * @param request - CredentialVerifyIntlRequest
     *
     * @returns CredentialVerifyIntlResponse
     *
     * @param CredentialVerifyIntlRequest $request
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->credentialVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @param CredentialVerifyIntlAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntlAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint) {
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
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'Cloudauth-intl',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        Utils::convert($runtime, $ossRuntime);
        $credentialVerifyIntlReq = new CredentialVerifyIntlRequest([]);
        Utils::convert($request, $credentialVerifyIntlReq);
        if (null !== $request->imageFileObject) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = Utils::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->imageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $credentialVerifyIntlReq->imageFile = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->credentialVerifyIntlWithOptions($credentialVerifyIntlReq, $runtime);
    }

    /**
     * 人脸凭证核验.
     *
     * @param request - DeepfakeDetectIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeepfakeDetectIntlResponse
     *
     * @param DeepfakeDetectIntlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faceInputType) {
            @$query['FaceInputType'] = $request->faceInputType;
        }

        if (null !== $request->faceUrl) {
            @$query['FaceUrl'] = $request->faceUrl;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
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
            'action' => 'DeepfakeDetectIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeepfakeDetectIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸凭证核验.
     *
     * @param request - DeepfakeDetectIntlRequest
     *
     * @returns DeepfakeDetectIntlResponse
     *
     * @param DeepfakeDetectIntlRequest $request
     *
     * @return DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectIntlWithOptions($request, $runtime);
    }

    /**
     * 删除用户认证记录结果.
     *
     * @param request - DeleteVerifyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVerifyResultResponse
     *
     * @param DeleteVerifyResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteVerifyResultResponse
     */
    public function deleteVerifyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteAfterQuery) {
            @$query['DeleteAfterQuery'] = $request->deleteAfterQuery;
        }

        if (null !== $request->deleteType) {
            @$query['DeleteType'] = $request->deleteType;
        }

        if (null !== $request->transactionId) {
            @$query['TransactionId'] = $request->transactionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVerifyResult',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVerifyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户认证记录结果.
     *
     * @param request - DeleteVerifyResultRequest
     *
     * @returns DeleteVerifyResultResponse
     *
     * @param DeleteVerifyResultRequest $request
     *
     * @return DeleteVerifyResultResponse
     */
    public function deleteVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifyResultWithOptions($request, $runtime);
    }

    /**
     * 卡证ocr纯服务端.
     *
     * @param request - DocOcrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrResponse
     *
     * @param DocOcrRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DocOcrResponse
     */
    public function docOcrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cardSide) {
            @$query['CardSide'] = $request->cardSide;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->spoof) {
            @$query['Spoof'] = $request->spoof;
        }

        $body = [];
        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcr',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 卡证ocr纯服务端.
     *
     * @param request - DocOcrRequest
     *
     * @returns DocOcrResponse
     *
     * @param DocOcrRequest $request
     *
     * @return DocOcrResponse
     */
    public function docOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrWithOptions($request, $runtime);
    }

    /**
     * 全球证件ocr识别接口.
     *
     * @param request - DocOcrMaxRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocOcrMaxResponse
     *
     * @param DocOcrMaxRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DocOcrMaxResponse
     */
    public function docOcrMaxWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$body['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$body['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->ocrModel) {
            @$body['OcrModel'] = $request->ocrModel;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->spoof) {
            @$body['Spoof'] = $request->spoof;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocOcrMax',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocOcrMaxResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 全球证件ocr识别接口.
     *
     * @param request - DocOcrMaxRequest
     *
     * @returns DocOcrMaxResponse
     *
     * @param DocOcrMaxRequest $request
     *
     * @return DocOcrMaxResponse
     */
    public function docOcrMax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrMaxWithOptions($request, $runtime);
    }

    /**
     * ekyc纯服务端接口.
     *
     * @param request - EkycVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EkycVerifyResponse
     *
     * @param EkycVerifyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EkycVerifyResponse
     */
    public function ekycVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->docName) {
            @$query['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$query['DocNo'] = $request->docNo;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->idOcrPictureUrl) {
            @$query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        if (null !== $request->idOcrPictureBase64) {
            @$body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EkycVerify',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EkycVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ekyc纯服务端接口.
     *
     * @param request - EkycVerifyRequest
     *
     * @returns EkycVerifyResponse
     *
     * @param EkycVerifyRequest $request
     *
     * @return EkycVerifyResponse
     */
    public function ekycVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ekycVerifyWithOptions($request, $runtime);
    }

    /**
     * 人脸比对.
     *
     * @param request - FaceCompareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceCompareResponse
     *
     * @param FaceCompareRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return FaceCompareResponse
     */
    public function faceCompareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->sourceFacePictureUrl) {
            @$query['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }

        if (null !== $request->targetFacePictureUrl) {
            @$query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }

        $body = [];
        if (null !== $request->sourceFacePicture) {
            @$body['SourceFacePicture'] = $request->sourceFacePicture;
        }

        if (null !== $request->targetFacePicture) {
            @$body['TargetFacePicture'] = $request->targetFacePicture;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceCompare',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 人脸比对.
     *
     * @param request - FaceCompareRequest
     *
     * @returns FaceCompareResponse
     *
     * @param FaceCompareRequest $request
     *
     * @return FaceCompareResponse
     */
    public function faceCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCompareWithOptions($request, $runtime);
    }

    /**
     * 国际人脸保镖纯服务端接口.
     *
     * @param request - FaceGuardRiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceGuardRiskResponse
     *
     * @param FaceGuardRiskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FaceGuardRiskResponse
     */
    public function faceGuardRiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->deviceToken) {
            @$query['DeviceToken'] = $request->deviceToken;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FaceGuardRisk',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceGuardRiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 国际人脸保镖纯服务端接口.
     *
     * @param request - FaceGuardRiskRequest
     *
     * @returns FaceGuardRiskResponse
     *
     * @param FaceGuardRiskRequest $request
     *
     * @return FaceGuardRiskResponse
     */
    public function faceGuardRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceGuardRiskWithOptions($request, $runtime);
    }

    /**
     * 静默活体API 纯服务端.
     *
     * @param request - FaceLivenessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FaceLivenessResponse
     *
     * @param FaceLivenessRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return FaceLivenessResponse
     */
    public function faceLivenessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->faceQuality) {
            @$query['FaceQuality'] = $request->faceQuality;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->occlusion) {
            @$query['Occlusion'] = $request->occlusion;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FaceLiveness',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FaceLivenessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 静默活体API 纯服务端.
     *
     * @param request - FaceLivenessRequest
     *
     * @returns FaceLivenessResponse
     *
     * @param FaceLivenessRequest $request
     *
     * @return FaceLivenessResponse
     */
    public function faceLiveness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceLivenessWithOptions($request, $runtime);
    }

    /**
     * 防伪回调接口.
     *
     * @param request - FraudResultCallBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FraudResultCallBackResponse
     *
     * @param FraudResultCallBackRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FraudResultCallBackResponse
     */
    public function fraudResultCallBackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certifyId) {
            @$query['CertifyId'] = $request->certifyId;
        }

        if (null !== $request->extParams) {
            @$query['ExtParams'] = $request->extParams;
        }

        if (null !== $request->resultCode) {
            @$query['ResultCode'] = $request->resultCode;
        }

        if (null !== $request->verifyDeployEnv) {
            @$query['VerifyDeployEnv'] = $request->verifyDeployEnv;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FraudResultCallBack',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FraudResultCallBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 防伪回调接口.
     *
     * @param request - FraudResultCallBackRequest
     *
     * @returns FraudResultCallBackResponse
     *
     * @param FraudResultCallBackRequest $request
     *
     * @return FraudResultCallBackResponse
     */
    public function fraudResultCallBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fraudResultCallBackWithOptions($request, $runtime);
    }

    /**
     * 身份二要素有效期核验.
     *
     * @param request - Id2MetaPeriodVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaPeriodVerifyIntlResponse
     *
     * @param Id2MetaPeriodVerifyIntlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docName) {
            @$body['DocName'] = $request->docName;
        }

        if (null !== $request->docNo) {
            @$body['DocNo'] = $request->docNo;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->merchantBizId) {
            @$body['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$body['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->sceneCode) {
            @$body['SceneCode'] = $request->sceneCode;
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
            'action' => 'Id2MetaPeriodVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaPeriodVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 身份二要素有效期核验.
     *
     * @param request - Id2MetaPeriodVerifyIntlRequest
     *
     * @returns Id2MetaPeriodVerifyIntlResponse
     *
     * @param Id2MetaPeriodVerifyIntlRequest $request
     *
     * @return Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaPeriodVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * 身份二要素国际版接口.
     *
     * @param request - Id2MetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Id2MetaVerifyIntlResponse
     *
     * @param Id2MetaVerifyIntlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Id2MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Id2MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 身份二要素国际版接口.
     *
     * @param request - Id2MetaVerifyIntlRequest
     *
     * @returns Id2MetaVerifyIntlResponse
     *
     * @param Id2MetaVerifyIntlRequest $request
     *
     * @return Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * 认证初始化.
     *
     * @param tmpReq - InitializeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeResponse
     *
     * @param InitializeRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return InitializeResponse
     */
    public function initializeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InitializeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docPageConfig) {
            $request->docPageConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docPageConfig, 'DocPageConfig', 'json');
        }

        $query = [];
        if (null !== $request->appQualityCheck) {
            @$query['AppQualityCheck'] = $request->appQualityCheck;
        }

        if (null !== $request->authorize) {
            @$query['Authorize'] = $request->authorize;
        }

        if (null !== $request->callbackToken) {
            @$query['CallbackToken'] = $request->callbackToken;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->crop) {
            @$query['Crop'] = $request->crop;
        }

        if (null !== $request->dateOfBirth) {
            @$query['DateOfBirth'] = $request->dateOfBirth;
        }

        if (null !== $request->dateOfExpiry) {
            @$query['DateOfExpiry'] = $request->dateOfExpiry;
        }

        if (null !== $request->docPageConfigShrink) {
            @$query['DocPageConfig'] = $request->docPageConfigShrink;
        }

        if (null !== $request->docScanMode) {
            @$query['DocScanMode'] = $request->docScanMode;
        }

        if (null !== $request->docType) {
            @$query['DocType'] = $request->docType;
        }

        if (null !== $request->docVideo) {
            @$query['DocVideo'] = $request->docVideo;
        }

        if (null !== $request->documentNumber) {
            @$query['DocumentNumber'] = $request->documentNumber;
        }

        if (null !== $request->experienceCode) {
            @$query['ExperienceCode'] = $request->experienceCode;
        }

        if (null !== $request->facePictureUrl) {
            @$query['FacePictureUrl'] = $request->facePictureUrl;
        }

        if (null !== $request->idFaceQuality) {
            @$query['IdFaceQuality'] = $request->idFaceQuality;
        }

        if (null !== $request->idSpoof) {
            @$query['IdSpoof'] = $request->idSpoof;
        }

        if (null !== $request->idThreshold) {
            @$query['IdThreshold'] = $request->idThreshold;
        }

        if (null !== $request->languageConfig) {
            @$query['LanguageConfig'] = $request->languageConfig;
        }

        if (null !== $request->MRTDInput) {
            @$query['MRTDInput'] = $request->MRTDInput;
        }

        if (null !== $request->merchantBizId) {
            @$query['MerchantBizId'] = $request->merchantBizId;
        }

        if (null !== $request->merchantUserId) {
            @$query['MerchantUserId'] = $request->merchantUserId;
        }

        if (null !== $request->metaInfo) {
            @$query['MetaInfo'] = $request->metaInfo;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->ocr) {
            @$query['Ocr'] = $request->ocr;
        }

        if (null !== $request->procedurePriority) {
            @$query['ProcedurePriority'] = $request->procedurePriority;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productFlow) {
            @$query['ProductFlow'] = $request->productFlow;
        }

        if (null !== $request->returnUrl) {
            @$query['ReturnUrl'] = $request->returnUrl;
        }

        if (null !== $request->sceneCode) {
            @$query['SceneCode'] = $request->sceneCode;
        }

        if (null !== $request->securityLevel) {
            @$query['SecurityLevel'] = $request->securityLevel;
        }

        if (null !== $request->showAlbumIcon) {
            @$query['ShowAlbumIcon'] = $request->showAlbumIcon;
        }

        if (null !== $request->showGuidePage) {
            @$query['ShowGuidePage'] = $request->showGuidePage;
        }

        if (null !== $request->showOcrResult) {
            @$query['ShowOcrResult'] = $request->showOcrResult;
        }

        if (null !== $request->styleConfig) {
            @$query['StyleConfig'] = $request->styleConfig;
        }

        if (null !== $request->useNFC) {
            @$query['UseNFC'] = $request->useNFC;
        }

        $body = [];
        if (null !== $request->facePictureBase64) {
            @$body['FacePictureBase64'] = $request->facePictureBase64;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Initialize',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 认证初始化.
     *
     * @param request - InitializeRequest
     *
     * @returns InitializeResponse
     *
     * @param InitializeRequest $request
     *
     * @return InitializeResponse
     */
    public function initialize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeWithOptions($request, $runtime);
    }

    /**
     * 手机号三要素国际版接口.
     *
     * @param request - Mobile3MetaVerifyIntlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns Mobile3MetaVerifyIntlResponse
     *
     * @param Mobile3MetaVerifyIntlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifyNum) {
            @$query['IdentifyNum'] = $request->identifyNum;
        }

        if (null !== $request->mobile) {
            @$query['Mobile'] = $request->mobile;
        }

        if (null !== $request->paramType) {
            @$query['ParamType'] = $request->paramType;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Mobile3MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile3MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 手机号三要素国际版接口.
     *
     * @param request - Mobile3MetaVerifyIntlRequest
     *
     * @returns Mobile3MetaVerifyIntlResponse
     *
     * @param Mobile3MetaVerifyIntlRequest $request
     *
     * @return Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaVerifyIntlWithOptions($request, $runtime);
    }
}
