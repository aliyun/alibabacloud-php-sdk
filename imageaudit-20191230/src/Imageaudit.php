<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageAdvanceRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponse;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imageaudit extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ScanImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ScanImageResponse
     */
    public function scanImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->task)) {
            $body['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScanImage',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanImageRequest $request
     *
     * @return ScanImageResponse
     */
    public function scanImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanImageWithOptions($request, $runtime);
    }

    /**
     * @param ScanImageAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ScanImageResponse
     */
    public function scanImageAdvance($request, $runtime)
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
            'product'  => 'imageaudit',
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
        $scanImageReq = new ScanImageRequest([]);
        OpenApiUtilClient::convert($request, $scanImageReq);
        if (!Utils::isUnset($request->task)) {
            $i = 0;
            foreach ($request->task as $item0) {
                if (!Utils::isUnset($item0->imageURLObject)) {
                    $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
                    $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
                    $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
                    $ossClient              = new OSS($ossConfig);
                    $fileObj                = new FileField([
                        'filename'    => $authResponse->body->objectKey,
                        'content'     => $item0->imageURLObject,
                        'contentType' => '',
                    ]);
                    $ossHeader = new header([
                        'accessKeyId'         => $authResponse->body->accessKeyId,
                        'policy'              => $authResponse->body->encodedPolicy,
                        'signature'           => $authResponse->body->signature,
                        'key'                 => $authResponse->body->objectKey,
                        'file'                => $fileObj,
                        'successActionStatus' => '201',
                    ]);
                    $uploadRequest = new PostObjectRequest([
                        'bucketName' => $authResponse->body->bucket,
                        'header'     => $ossHeader,
                    ]);
                    $ossClient->postObject($uploadRequest, $ossRuntime);
                    $tmp           = @$scanImageReq->task[${$i}];
                    $tmp->imageURL = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
                    $i             = $i + 1;
                }
            }
        }
        $scanImageResp = $this->scanImageWithOptions($scanImageReq, $runtime);

        return $scanImageResp;
    }

    /**
     * @param ScanTextRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScanTextResponse
     */
    public function scanTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->tasks)) {
            $body['Tasks'] = $request->tasks;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScanText',
            'version'     => '2019-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanTextRequest $request
     *
     * @return ScanTextResponse
     */
    public function scanText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanTextWithOptions($request, $runtime);
    }
}
