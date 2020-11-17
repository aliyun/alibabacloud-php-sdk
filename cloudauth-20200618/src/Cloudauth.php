<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyAdvanceRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\ElementSmartVerifyResponse;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\InitSmartVerifyRequest;
use AlibabaCloud\SDK\Cloudauth\V20200618\Models\InitSmartVerifyResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
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
     * @param ElementSmartVerifyAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ElementSmartVerifyResponse
     */
    public function elementSmartVerifyAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
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
        $elementSmartVerifyreq = new ElementSmartVerifyRequest([]);
        RpcUtils::convert($request, $elementSmartVerifyreq);
        $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
        $ossConfig->accessKeyId = $authResponse->accessKeyId;
        $ossConfig->endpoint    = RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
        $ossClient              = new \AlibabaCloud\SDK\OSS\OSS($ossConfig);
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
        $elementSmartVerifyreq->certFile = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->elementSmartVerify($elementSmartVerifyreq, $runtime);
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
