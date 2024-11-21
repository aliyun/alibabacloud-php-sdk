<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CheckResultResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DeleteVerifyResultResponse;
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
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Id2MetaVerifyIntlResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponse;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CardOcr',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'CheckResult',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'DeleteVerifyResult',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DocOcr',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EkycVerify',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceCompare',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'FaceGuardRisk',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceLiveness',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'FraudResultCallBack',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'Id2MetaVerifyIntl',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
     * @param InitializeRequest $request InitializeRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeResponse InitializeResponse
     */
    public function initializeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorize)) {
            $query['Authorize'] = $request->authorize;
        }
        if (!Utils::isUnset($request->callbackToken)) {
            $query['CallbackToken'] = $request->callbackToken;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->crop)) {
            $query['Crop'] = $request->crop;
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
        $body = [];
        if (!Utils::isUnset($request->facePictureBase64)) {
            $body['FacePictureBase64'] = $request->facePictureBase64;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Initialize',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
            'action'      => 'Mobile3MetaVerifyIntl',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
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
