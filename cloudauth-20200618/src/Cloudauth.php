<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618;

use AlibabaCloud\Endpoint\Endpoint;
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
     * @param ContrastSmartVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ContrastSmartVerifyResponse
     */
    public function contrastSmartVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return ContrastSmartVerifyResponse::fromMap($this->doRequest('ContrastSmartVerify', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ContrastSmartVerifyRequest $request
     *
     * @return ContrastSmartVerifyResponse
     */
    public function contrastSmartVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->contrastSmartVerify($request, $runtime);
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
        $contrastSmartVerifyReq = new ContrastSmartVerifyRequest([]);
        RpcUtils::convert($request, $contrastSmartVerifyReq);
        if (!Utils::isUnset($request->facePicFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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

        return $this->contrastSmartVerify($contrastSmartVerifyReq, $runtime);
    }

    /**
     * @param DescribeSmartVerifyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSmartVerifyResponse
     */
    public function describeSmartVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSmartVerifyResponse::fromMap($this->doRequest('DescribeSmartVerify', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSmartVerifyRequest $request
     *
     * @return DescribeSmartVerifyResponse
     */
    public function describeSmartVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmartVerify($request, $runtime);
    }

    /**
     * @param DescribeSmsDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSmsDetailResponse
     */
    public function describeSmsDetail($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSmsDetailResponse::fromMap($this->doRequest('DescribeSmsDetail', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSmsDetailRequest $request
     *
     * @return DescribeSmsDetailResponse
     */
    public function describeSmsDetailSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSmsDetail($request, $runtime);
    }

    /**
     * @param ElementSmartVerifyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return ElementSmartVerifyResponse::fromMap($this->doRequest('ElementSmartVerify', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ElementSmartVerifyRequest $request
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->elementSmartVerify($request, $runtime);
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
        $elementSmartVerifyReq = new ElementSmartVerifyRequest([]);
        RpcUtils::convert($request, $elementSmartVerifyReq);
        if (!Utils::isUnset($request->certFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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

        return $this->elementSmartVerify($elementSmartVerifyReq, $runtime);
    }

    /**
     * @param InitSmartVerifyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitSmartVerifyResponse
     */
    public function initSmartVerify($request, $runtime)
    {
        Utils::validateModel($request);

        return InitSmartVerifyResponse::fromMap($this->doRequest('InitSmartVerify', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param InitSmartVerifyRequest $request
     *
     * @return InitSmartVerifyResponse
     */
    public function initSmartVerifySimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initSmartVerify($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSms($request, $runtime)
    {
        Utils::validateModel($request);

        return SendSmsResponse::fromMap($this->doRequest('SendSms', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSmsSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSms($request, $runtime);
    }

    /**
     * @param VerifyBankElementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyBankElementResponse
     */
    public function verifyBankElement($request, $runtime)
    {
        Utils::validateModel($request);

        return VerifyBankElementResponse::fromMap($this->doRequest('VerifyBankElement', 'HTTPS', 'POST', '2020-06-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param VerifyBankElementRequest $request
     *
     * @return VerifyBankElementResponse
     */
    public function verifyBankElementSimply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyBankElement($request, $runtime);
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
        $verifyBankElementReq = new VerifyBankElementRequest([]);
        RpcUtils::convert($request, $verifyBankElementReq);
        if (!Utils::isUnset($request->bankCardFileObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
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

        return $this->verifyBankElement($verifyBankElementReq, $runtime);
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
