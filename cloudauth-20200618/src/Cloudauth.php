<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ContrastSmartVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ContrastSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ContrastSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmsDetailRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmsDetailResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\InitSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\InitSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\SendSmsRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\SendSmsResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\VerifyBankElementAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\VerifyBankElementRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\VerifyBankElementResponse;
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
     * @param ContrastSmartVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ContrastSmartVerifyResponse
     */
    public function contrastSmartVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
        if (!Utils::isUnset($request->facePicFile)) {
            $body['FacePicFile'] = $request->facePicFile;
        }
        if (!Utils::isUnset($request->facePicString)) {
            $body['FacePicString'] = $request->facePicString;
        }
        if (!Utils::isUnset($request->facePicUrl)) {
            $body['FacePicUrl'] = $request->facePicUrl;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ContrastSmartVerify',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContrastSmartVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContrastSmartVerifyRequest $request
     *
     * @return ContrastSmartVerifyResponse
     */
    public function contrastSmartVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contrastSmartVerifyWithOptions($request, $runtime);
    }

    /**
     * @param ContrastSmartVerifyAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ContrastSmartVerifyResponse
     */
    public function contrastSmartVerifyAdvance($request, $runtime)
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
        $contrastSmartVerifyReq = new ContrastSmartVerifyRequest([]);
        OpenApiUtilClient::convert($request, $contrastSmartVerifyReq);
        if (!Utils::isUnset($request->facePicFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->facePicFileObject,
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
            $contrastSmartVerifyReq->facePicFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->contrastSmartVerifyWithOptions($contrastSmartVerifyReq, $runtime);
    }

    /**
     * @param DescribeSmartVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSmartVerifyResponse
     */
    public function describeSmartVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certifyId)) {
            $body['CertifyId'] = $request->certifyId;
        }
        if (!Utils::isUnset($request->pictureReturnType)) {
            $body['PictureReturnType'] = $request->pictureReturnType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmartVerify',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmartVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmartVerifyRequest $request
     *
     * @return DescribeSmartVerifyResponse
     */
    public function describeSmartVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartVerifyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSmsDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSmsDetailResponse
     */
    public function describeSmsDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $body['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sendDate)) {
            $body['SendDate'] = $request->sendDate;
        }
        if (!Utils::isUnset($request->sendStatus)) {
            $body['SendStatus'] = $request->sendStatus;
        }
        if (!Utils::isUnset($request->signName)) {
            $body['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSmsDetail',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSmsDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSmsDetailRequest $request
     *
     * @return DescribeSmsDetailResponse
     */
    public function describeSmsDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsDetailWithOptions($request, $runtime);
    }

    /**
     * @param ElementSmartVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certFile)) {
            $body['CertFile'] = $request->certFile;
        }
        if (!Utils::isUnset($request->certName)) {
            $body['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certNationalEmblemUrl)) {
            $body['CertNationalEmblemUrl'] = $request->certNationalEmblemUrl;
        }
        if (!Utils::isUnset($request->certNo)) {
            $body['CertNo'] = $request->certNo;
        }
        if (!Utils::isUnset($request->certType)) {
            $body['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->certUrl)) {
            $body['CertUrl'] = $request->certUrl;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ElementSmartVerify',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ElementSmartVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ElementSmartVerifyRequest $request
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->elementSmartVerifyWithOptions($request, $runtime);
    }

    /**
     * @param ElementSmartVerifyAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerifyAdvance($request, $runtime)
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
        $elementSmartVerifyReq = new ElementSmartVerifyRequest([]);
        OpenApiUtilClient::convert($request, $elementSmartVerifyReq);
        if (!Utils::isUnset($request->certFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->certFileObject,
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
            $elementSmartVerifyReq->certFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->elementSmartVerifyWithOptions($elementSmartVerifyReq, $runtime);
    }

    /**
     * @param InitSmartVerifyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitSmartVerifyResponse
     */
    public function initSmartVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackToken)) {
            $body['CallbackToken'] = $request->callbackToken;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
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
        if (!Utils::isUnset($request->facePictureBase64)) {
            $body['FacePictureBase64'] = $request->facePictureBase64;
        }
        if (!Utils::isUnset($request->facePictureUrl)) {
            $body['FacePictureUrl'] = $request->facePictureUrl;
        }
        if (!Utils::isUnset($request->idName)) {
            $body['IdName'] = $request->idName;
        }
        if (!Utils::isUnset($request->idNo)) {
            $body['IdNo'] = $request->idNo;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->metaInfo)) {
            $body['MetaInfo'] = $request->metaInfo;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ocr)) {
            $body['Ocr'] = $request->ocr;
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
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitSmartVerify',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitSmartVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitSmartVerifyRequest $request
     *
     * @return InitSmartVerifyResponse
     */
    public function initSmartVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initSmartVerifyWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->signName)) {
            $body['SignName'] = $request->signName;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateParam)) {
            $body['TemplateParam'] = $request->templateParam;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * @param VerifyBankElementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyBankElementResponse
     */
    public function verifyBankElementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bankCardFile)) {
            $body['BankCardFile'] = $request->bankCardFile;
        }
        if (!Utils::isUnset($request->bankCardNo)) {
            $body['BankCardNo'] = $request->bankCardNo;
        }
        if (!Utils::isUnset($request->bankCardUrl)) {
            $body['BankCardUrl'] = $request->bankCardUrl;
        }
        if (!Utils::isUnset($request->idName)) {
            $body['IdName'] = $request->idName;
        }
        if (!Utils::isUnset($request->idNo)) {
            $body['IdNo'] = $request->idNo;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->outerOrderNo)) {
            $body['OuterOrderNo'] = $request->outerOrderNo;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyBankElement',
            'version'     => '2020-06-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyBankElementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyBankElementRequest $request
     *
     * @return VerifyBankElementResponse
     */
    public function verifyBankElement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBankElementWithOptions($request, $runtime);
    }

    /**
     * @param VerifyBankElementAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return VerifyBankElementResponse
     */
    public function verifyBankElementAdvance($request, $runtime)
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
        $verifyBankElementReq = new VerifyBankElementRequest([]);
        OpenApiUtilClient::convert($request, $verifyBankElementReq);
        if (!Utils::isUnset($request->bankCardFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->bankCardFileObject,
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
            $verifyBankElementReq->bankCardFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->verifyBankElementWithOptions($verifyBankElementReq, $runtime);
    }
}
