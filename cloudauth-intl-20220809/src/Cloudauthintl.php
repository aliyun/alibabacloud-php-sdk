<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\AddressVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\BankMetaVerifyIntlResponse;
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
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\KeepaliveIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile2MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile2MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlResponse;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\FileForm\FileForm;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\Tea\XML\XML;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
     * @param string  $bucketName
     * @param mixed[] $data
     *
     * @return array
     *
     * @throws TeaError
     */
    public function _postOSSObject($bucketName, $data)
    {
        $_request = new Request();
        $form = Utils::assertAsMap($data);
        $boundary = FileForm::getBoundary();
        $host = Utils::assertAsString(@$form['host']);
        $_request->protocol = 'HTTPS';
        $_request->method = 'POST';
        $_request->pathname = '/';
        $_request->headers = [
            'host' => $host,
            'date' => Utils::getDateUTCString(),
            'user-agent' => Utils::getUserAgent(''),
        ];
        $_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
        $_request->body = FileForm::toFileForm($form, $boundary);
        $_lastRequest = $_request;
        $_response = Tea::send($_request);
        $respMap = null;
        $bodyStr = Utils::readAsString($_response->body);
        if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
            $respMap = XML::parseXml($bodyStr, null);
            $err = Utils::assertAsMap(@$respMap['Error']);

            throw new TeaError([
                'code' => @$err['Code'],
                'message' => @$err['Message'],
                'data' => [
                    'httpCode' => $_response->statusCode,
                    'requestId' => @$err['RequestId'],
                    'hostId' => @$err['HostId'],
                ],
            ]);
        }
        $respMap = XML::parseXml($bodyStr, null);

        return Tea::merge($respMap);
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
     * @summary 地址核验
     *  *
     * @param AddressVerifyIntlRequest $request AddressVerifyIntlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddressVerifyIntlResponse AddressVerifyIntlResponse
     */
    public function addressVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addressType)) {
            $query['AddressType'] = $request->addressType;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $query['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultCountry)) {
            $query['DefaultCountry'] = $request->defaultCountry;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $query['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $query['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['Latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['Longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AddressVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddressVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 地址核验
     *  *
     * @param AddressVerifyIntlRequest $request AddressVerifyIntlRequest
     *
     * @return AddressVerifyIntlResponse AddressVerifyIntlResponse
     */
    public function addressVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addressVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @summary Bank Card Verification
     *  *
     * @description Verification of bank card elements, including: two-element verification (name + bank card number), three-element verification (name + ID number + bank card number), and four-element verification (name + ID number + phone number + bank card number) for consistency.
     *  *
     * @param BankMetaVerifyIntlRequest $request BankMetaVerifyIntlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BankMetaVerifyIntlResponse BankMetaVerifyIntlResponse
     */
    public function bankMetaVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bankCard)) {
            $query['BankCard'] = $request->bankCard;
        }
        if (!Utils::isUnset($request->identifyNum)) {
            $query['IdentifyNum'] = $request->identifyNum;
        }
        if (!Utils::isUnset($request->identityType)) {
            $query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->mobile)) {
            $query['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->verifyMode)) {
            $query['VerifyMode'] = $request->verifyMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'BankMetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BankMetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Bank Card Verification
     *  *
     * @description Verification of bank card elements, including: two-element verification (name + bank card number), three-element verification (name + ID number + bank card number), and four-element verification (name + ID number + phone number + bank card number) for consistency.
     *  *
     * @param BankMetaVerifyIntlRequest $request BankMetaVerifyIntlRequest
     *
     * @return BankMetaVerifyIntlResponse BankMetaVerifyIntlResponse
     */
    public function bankMetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bankMetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *  *
     * @summary 证件OCR识别纯服务端接口
     *  *
     * Deprecated
     *
     * @param CardOcrRequest $request CardOcrRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CardOcrResponse CardOcrResponse
     */
    public function cardOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->docType)) {
            $query['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->idFaceQuality)) {
            $query['IdFaceQuality'] = $request->idFaceQuality;
        }
        if (!Utils::isUnset($request->idOcrPictureUrl)) {
            $query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->ocr)) {
            $query['Ocr'] = $request->ocr;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->spoof)) {
            $query['Spoof'] = $request->spoof;
        }
        $body = [];
        if (!Utils::isUnset($request->idOcrPictureBase64)) {
            $body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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

    /**
     * @deprecated openAPI CardOcr is deprecated, please use Cloudauth-intl::2022-08-09::DocOcr instead
     *  *
     * @summary 证件OCR识别纯服务端接口
     *  *
     * Deprecated
     *
     * @param CardOcrRequest $request CardOcrRequest
     *
     * @return CardOcrResponse CardOcrResponse
     */
    public function cardOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cardOcrWithOptions($request, $runtime);
    }

    /**
     * @summary 结果查询
     *  *
     * @param CheckResultRequest $request CheckResultRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckResultResponse CheckResultResponse
     */
    public function checkResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extraImageControlList)) {
            $query['ExtraImageControlList'] = $request->extraImageControlList;
        }
        if (!Utils::isUnset($request->isReturnImage)) {
            $query['IsReturnImage'] = $request->isReturnImage;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->returnFiveCategorySpoofResult)) {
            $query['ReturnFiveCategorySpoofResult'] = $request->returnFiveCategorySpoofResult;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $query['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 结果查询
     *  *
     * @param CheckResultRequest $request CheckResultRequest
     *
     * @return CheckResultResponse CheckResultResponse
     */
    public function checkResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResultWithOptions($request, $runtime);
    }

    /**
     * @summary 认证日志查询接口
     *  *
     * @param CheckVerifyLogRequest $request CheckVerifyLogRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckVerifyLogResponse CheckVerifyLogResponse
     */
    public function checkVerifyLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->merchantBizId)) {
            $body['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 认证日志查询接口
     *  *
     * @param CheckVerifyLogRequest $request CheckVerifyLogRequest
     *
     * @return CheckVerifyLogResponse CheckVerifyLogResponse
     */
    public function checkVerifyLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkVerifyLogWithOptions($request, $runtime);
    }

    /**
     * @summary 凭证核验
     *  *
     * @param CredentialVerifyIntlRequest $request CredentialVerifyIntlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CredentialVerifyIntlResponse CredentialVerifyIntlResponse
     */
    public function credentialVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credName)) {
            $query['CredName'] = $request->credName;
        }
        if (!Utils::isUnset($request->credType)) {
            $query['CredType'] = $request->credType;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $body = [];
        if (!Utils::isUnset($request->imageFile)) {
            $body['ImageFile'] = $request->imageFile;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 凭证核验
     *  *
     * @param CredentialVerifyIntlRequest $request CredentialVerifyIntlRequest
     *
     * @return CredentialVerifyIntlResponse CredentialVerifyIntlResponse
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
     *
     * @throws TeaError
     */
    public function credentialVerifyIntlAdvance($request, $runtime)
    {
        // Step 0: init client
        $credentialModel = null;
        if (Utils::isUnset($this->_credential)) {
            throw new TeaError([
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
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
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
            'Product' => 'Cloudauth-intl',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($authRequest),
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
        $credentialVerifyIntlReq = new CredentialVerifyIntlRequest([]);
        OpenApiUtilClient::convert($request, $credentialVerifyIntlReq);
        if (!Utils::isUnset($request->imageFileObject)) {
            $tmpResp0 = $authClient->callApi($authParams, $authReq, $runtime);
            $authResponse = Utils::assertAsMap($tmpResp0);
            $tmpBody = Utils::assertAsMap(@$authResponse['body']);
            $useAccelerate = Utils::assertAsBoolean(@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageFileObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . OpenApiUtilClient::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $credentialVerifyIntlReq->imageFile = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->credentialVerifyIntlWithOptions($credentialVerifyIntlReq, $runtime);
    }

    /**
     * @summary 人脸凭证核验
     *  *
     * @param DeepfakeDetectIntlRequest $request DeepfakeDetectIntlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeepfakeDetectIntlResponse DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->faceInputType)) {
            $query['FaceInputType'] = $request->faceInputType;
        }
        if (!Utils::isUnset($request->faceUrl)) {
            $query['FaceUrl'] = $request->faceUrl;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        $body = [];
        if (!Utils::isUnset($request->faceBase64)) {
            $body['FaceBase64'] = $request->faceBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 人脸凭证核验
     *  *
     * @param DeepfakeDetectIntlRequest $request DeepfakeDetectIntlRequest
     *
     * @return DeepfakeDetectIntlResponse DeepfakeDetectIntlResponse
     */
    public function deepfakeDetectIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deepfakeDetectIntlWithOptions($request, $runtime);
    }

    /**
     * @summary 删除用户认证记录结果
     *  *
     * @param DeleteVerifyResultRequest $request DeleteVerifyResultRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVerifyResultResponse DeleteVerifyResultResponse
     */
    public function deleteVerifyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteAfterQuery)) {
            $query['DeleteAfterQuery'] = $request->deleteAfterQuery;
        }
        if (!Utils::isUnset($request->deleteType)) {
            $query['DeleteType'] = $request->deleteType;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $query['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除用户认证记录结果
     *  *
     * @param DeleteVerifyResultRequest $request DeleteVerifyResultRequest
     *
     * @return DeleteVerifyResultResponse DeleteVerifyResultResponse
     */
    public function deleteVerifyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVerifyResultWithOptions($request, $runtime);
    }

    /**
     * @summary 卡证ocr纯服务端
     *  *
     * @param DocOcrRequest  $request DocOcrRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DocOcrResponse DocOcrResponse
     */
    public function docOcrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cardSide)) {
            $query['CardSide'] = $request->cardSide;
        }
        if (!Utils::isUnset($request->docType)) {
            $query['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->idFaceQuality)) {
            $query['IdFaceQuality'] = $request->idFaceQuality;
        }
        if (!Utils::isUnset($request->idOcrPictureUrl)) {
            $query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }
        if (!Utils::isUnset($request->idThreshold)) {
            $query['IdThreshold'] = $request->idThreshold;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->ocr)) {
            $query['Ocr'] = $request->ocr;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->spoof)) {
            $query['Spoof'] = $request->spoof;
        }
        $body = [];
        if (!Utils::isUnset($request->idOcrPictureBase64)) {
            $body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 卡证ocr纯服务端
     *  *
     * @param DocOcrRequest $request DocOcrRequest
     *
     * @return DocOcrResponse DocOcrResponse
     */
    public function docOcr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrWithOptions($request, $runtime);
    }

    /**
     * @summary 全球证件ocr识别接口
     *  *
     * @param DocOcrMaxRequest $request DocOcrMaxRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DocOcrMaxResponse DocOcrMaxResponse
     */
    public function docOcrMaxWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docPage)) {
            $body['DocPage'] = $request->docPage;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->idOcrPictureBase64)) {
            $body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }
        if (!Utils::isUnset($request->idOcrPictureUrl)) {
            $body['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }
        if (!Utils::isUnset($request->idSpoof)) {
            $body['IdSpoof'] = $request->idSpoof;
        }
        if (!Utils::isUnset($request->idThreshold)) {
            $body['IdThreshold'] = $request->idThreshold;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $body['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $body['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->ocrModel)) {
            $body['OcrModel'] = $request->ocrModel;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $body['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->spoof)) {
            $body['Spoof'] = $request->spoof;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 全球证件ocr识别接口
     *  *
     * @param DocOcrMaxRequest $request DocOcrMaxRequest
     *
     * @return DocOcrMaxResponse DocOcrMaxResponse
     */
    public function docOcrMax($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->docOcrMaxWithOptions($request, $runtime);
    }

    /**
     * @summary ekyc纯服务端接口
     *  *
     * @param EkycVerifyRequest $request EkycVerifyRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return EkycVerifyResponse EkycVerifyResponse
     */
    public function ekycVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorize)) {
            $query['Authorize'] = $request->authorize;
        }
        if (!Utils::isUnset($request->crop)) {
            $query['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->docName)) {
            $query['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->docNo)) {
            $query['DocNo'] = $request->docNo;
        }
        if (!Utils::isUnset($request->docType)) {
            $query['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->facePictureUrl)) {
            $query['FacePictureUrl'] = $request->facePictureUrl;
        }
        if (!Utils::isUnset($request->idOcrPictureUrl)) {
            $query['IdOcrPictureUrl'] = $request->idOcrPictureUrl;
        }
        if (!Utils::isUnset($request->idThreshold)) {
            $query['IdThreshold'] = $request->idThreshold;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $body = [];
        if (!Utils::isUnset($request->facePictureBase64)) {
            $body['FacePictureBase64'] = $request->facePictureBase64;
        }
        if (!Utils::isUnset($request->idOcrPictureBase64)) {
            $body['IdOcrPictureBase64'] = $request->idOcrPictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary ekyc纯服务端接口
     *  *
     * @param EkycVerifyRequest $request EkycVerifyRequest
     *
     * @return EkycVerifyResponse EkycVerifyResponse
     */
    public function ekycVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ekycVerifyWithOptions($request, $runtime);
    }

    /**
     * @summary 人脸比对
     *  *
     * @param FaceCompareRequest $request FaceCompareRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return FaceCompareResponse FaceCompareResponse
     */
    public function faceCompareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->sourceFacePictureUrl)) {
            $query['SourceFacePictureUrl'] = $request->sourceFacePictureUrl;
        }
        if (!Utils::isUnset($request->targetFacePictureUrl)) {
            $query['TargetFacePictureUrl'] = $request->targetFacePictureUrl;
        }
        $body = [];
        if (!Utils::isUnset($request->sourceFacePicture)) {
            $body['SourceFacePicture'] = $request->sourceFacePicture;
        }
        if (!Utils::isUnset($request->targetFacePicture)) {
            $body['TargetFacePicture'] = $request->targetFacePicture;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 人脸比对
     *  *
     * @param FaceCompareRequest $request FaceCompareRequest
     *
     * @return FaceCompareResponse FaceCompareResponse
     */
    public function faceCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceCompareWithOptions($request, $runtime);
    }

    /**
     * @summary 国际人脸保镖纯服务端接口
     *  *
     * @param FaceGuardRiskRequest $request FaceGuardRiskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return FaceGuardRiskResponse FaceGuardRiskResponse
     */
    public function faceGuardRiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->deviceToken)) {
            $query['DeviceToken'] = $request->deviceToken;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 国际人脸保镖纯服务端接口
     *  *
     * @param FaceGuardRiskRequest $request FaceGuardRiskRequest
     *
     * @return FaceGuardRiskResponse FaceGuardRiskResponse
     */
    public function faceGuardRisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceGuardRiskWithOptions($request, $runtime);
    }

    /**
     * @summary 静默活体API 纯服务端
     *  *
     * @param FaceLivenessRequest $request FaceLivenessRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return FaceLivenessResponse FaceLivenessResponse
     */
    public function faceLivenessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->crop)) {
            $query['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->facePictureUrl)) {
            $query['FacePictureUrl'] = $request->facePictureUrl;
        }
        if (!Utils::isUnset($request->faceQuality)) {
            $query['FaceQuality'] = $request->faceQuality;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->occlusion)) {
            $query['Occlusion'] = $request->occlusion;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        $body = [];
        if (!Utils::isUnset($request->facePictureBase64)) {
            $body['FacePictureBase64'] = $request->facePictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 静默活体API 纯服务端
     *  *
     * @param FaceLivenessRequest $request FaceLivenessRequest
     *
     * @return FaceLivenessResponse FaceLivenessResponse
     */
    public function faceLiveness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceLivenessWithOptions($request, $runtime);
    }

    /**
     * @summary 防伪回调接口
     *  *
     * @param FraudResultCallBackRequest $request FraudResultCallBackRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return FraudResultCallBackResponse FraudResultCallBackResponse
     */
    public function fraudResultCallBackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certifyId)) {
            $query['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->extParams)) {
            $query['ExtParams'] = $request->extParams;
        }
        if (!Utils::isUnset($request->resultCode)) {
            $query['ResultCode'] = $request->resultCode;
        }
        if (!Utils::isUnset($request->verifyDeployEnv)) {
            $query['VerifyDeployEnv'] = $request->verifyDeployEnv;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 防伪回调接口
     *  *
     * @param FraudResultCallBackRequest $request FraudResultCallBackRequest
     *
     * @return FraudResultCallBackResponse FraudResultCallBackResponse
     */
    public function fraudResultCallBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fraudResultCallBackWithOptions($request, $runtime);
    }

    /**
     * @summary 身份二要素有效期核验
     *  *
     * @param Id2MetaPeriodVerifyIntlRequest $request Id2MetaPeriodVerifyIntlRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return Id2MetaPeriodVerifyIntlResponse Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->docNo)) {
            $body['DocNo'] = $request->docNo;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $body['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $body['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $body['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->validityEndDate)) {
            $body['ValidityEndDate'] = $request->validityEndDate;
        }
        if (!Utils::isUnset($request->validityStartDate)) {
            $body['ValidityStartDate'] = $request->validityStartDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 身份二要素有效期核验
     *  *
     * @param Id2MetaPeriodVerifyIntlRequest $request Id2MetaPeriodVerifyIntlRequest
     *
     * @return Id2MetaPeriodVerifyIntlResponse Id2MetaPeriodVerifyIntlResponse
     */
    public function id2MetaPeriodVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaPeriodVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @summary 身份二要素国际版接口
     *  *
     * @param Id2MetaVerifyIntlRequest $request Id2MetaVerifyIntlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return Id2MetaVerifyIntlResponse Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifyNum)) {
            $query['IdentifyNum'] = $request->identifyNum;
        }
        if (!Utils::isUnset($request->paramType)) {
            $query['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 身份二要素国际版接口
     *  *
     * @param Id2MetaVerifyIntlRequest $request Id2MetaVerifyIntlRequest
     *
     * @return Id2MetaVerifyIntlResponse Id2MetaVerifyIntlResponse
     */
    public function id2MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->id2MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @summary 认证初始化
     *  *
     * @param InitializeRequest $tmpReq  InitializeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeResponse InitializeResponse
     */
    public function initializeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InitializeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docPageConfig)) {
            $request->docPageConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docPageConfig, 'DocPageConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appQualityCheck)) {
            $query['AppQualityCheck'] = $request->appQualityCheck;
        }
        if (!Utils::isUnset($request->authorize)) {
            $query['Authorize'] = $request->authorize;
        }
        if (!Utils::isUnset($request->callbackToken)) {
            $query['CallbackToken'] = $request->callbackToken;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->chameleonFrameEnable)) {
            $query['ChameleonFrameEnable'] = $request->chameleonFrameEnable;
        }
        if (!Utils::isUnset($request->crop)) {
            $query['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->dateOfBirth)) {
            $query['DateOfBirth'] = $request->dateOfBirth;
        }
        if (!Utils::isUnset($request->dateOfExpiry)) {
            $query['DateOfExpiry'] = $request->dateOfExpiry;
        }
        if (!Utils::isUnset($request->docName)) {
            $query['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->docNo)) {
            $query['DocNo'] = $request->docNo;
        }
        if (!Utils::isUnset($request->docPageConfigShrink)) {
            $query['DocPageConfig'] = $request->docPageConfigShrink;
        }
        if (!Utils::isUnset($request->docScanMode)) {
            $query['DocScanMode'] = $request->docScanMode;
        }
        if (!Utils::isUnset($request->docType)) {
            $query['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->docVideo)) {
            $query['DocVideo'] = $request->docVideo;
        }
        if (!Utils::isUnset($request->documentNumber)) {
            $query['DocumentNumber'] = $request->documentNumber;
        }
        if (!Utils::isUnset($request->experienceCode)) {
            $query['ExperienceCode'] = $request->experienceCode;
        }
        if (!Utils::isUnset($request->facePictureUrl)) {
            $query['FacePictureUrl'] = $request->facePictureUrl;
        }
        if (!Utils::isUnset($request->idFaceQuality)) {
            $query['IdFaceQuality'] = $request->idFaceQuality;
        }
        if (!Utils::isUnset($request->idSpoof)) {
            $query['IdSpoof'] = $request->idSpoof;
        }
        if (!Utils::isUnset($request->idThreshold)) {
            $query['IdThreshold'] = $request->idThreshold;
        }
        if (!Utils::isUnset($request->languageConfig)) {
            $query['LanguageConfig'] = $request->languageConfig;
        }
        if (!Utils::isUnset($request->MRTDInput)) {
            $query['MRTDInput'] = $request->MRTDInput;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->metaInfo)) {
            $query['MetaInfo'] = $request->metaInfo;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->ocr)) {
            $query['Ocr'] = $request->ocr;
        }
        if (!Utils::isUnset($request->pages)) {
            $query['Pages'] = $request->pages;
        }
        if (!Utils::isUnset($request->procedurePriority)) {
            $query['ProcedurePriority'] = $request->procedurePriority;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productFlow)) {
            $query['ProductFlow'] = $request->productFlow;
        }
        if (!Utils::isUnset($request->returnUrl)) {
            $query['ReturnUrl'] = $request->returnUrl;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->securityLevel)) {
            $query['SecurityLevel'] = $request->securityLevel;
        }
        if (!Utils::isUnset($request->showAlbumIcon)) {
            $query['ShowAlbumIcon'] = $request->showAlbumIcon;
        }
        if (!Utils::isUnset($request->showGuidePage)) {
            $query['ShowGuidePage'] = $request->showGuidePage;
        }
        if (!Utils::isUnset($request->showOcrResult)) {
            $query['ShowOcrResult'] = $request->showOcrResult;
        }
        if (!Utils::isUnset($request->styleConfig)) {
            $query['StyleConfig'] = $request->styleConfig;
        }
        if (!Utils::isUnset($request->useNFC)) {
            $query['UseNFC'] = $request->useNFC;
        }
        $body = [];
        if (!Utils::isUnset($request->facePictureBase64)) {
            $body['FacePictureBase64'] = $request->facePictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 认证初始化
     *  *
     * @param InitializeRequest $request InitializeRequest
     *
     * @return InitializeResponse InitializeResponse
     */
    public function initialize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeWithOptions($request, $runtime);
    }

    /**
     * @summary 客户端连接保持
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return KeepaliveIntlResponse KeepaliveIntlResponse
     */
    public function keepaliveIntlWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'KeepaliveIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KeepaliveIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 客户端连接保持
     *  *
     * @return KeepaliveIntlResponse KeepaliveIntlResponse
     */
    public function keepaliveIntl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->keepaliveIntlWithOptions($runtime);
    }

    /**
     * @summary 手机号二要素核验API
     *  *
     * @param Mobile2MetaVerifyIntlRequest $request Mobile2MetaVerifyIntlRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return Mobile2MetaVerifyIntlResponse Mobile2MetaVerifyIntlResponse
     */
    public function mobile2MetaVerifyIntlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->paramType)) {
            $body['ParamType'] = $request->paramType;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Mobile2MetaVerifyIntl',
            'version' => '2022-08-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return Mobile2MetaVerifyIntlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 手机号二要素核验API
     *  *
     * @param Mobile2MetaVerifyIntlRequest $request Mobile2MetaVerifyIntlRequest
     *
     * @return Mobile2MetaVerifyIntlResponse Mobile2MetaVerifyIntlResponse
     */
    public function mobile2MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile2MetaVerifyIntlWithOptions($request, $runtime);
    }

    /**
     * @summary 手机号三要素国际版接口
     *  *
     * @param Mobile3MetaVerifyIntlRequest $request Mobile3MetaVerifyIntlRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return Mobile3MetaVerifyIntlResponse Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntlWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 手机号三要素国际版接口
     *  *
     * @param Mobile3MetaVerifyIntlRequest $request Mobile3MetaVerifyIntlRequest
     *
     * @return Mobile3MetaVerifyIntlResponse Mobile3MetaVerifyIntlResponse
     */
    public function mobile3MetaVerifyIntl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobile3MetaVerifyIntlWithOptions($request, $runtime);
    }
}
