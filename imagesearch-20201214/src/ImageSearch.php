<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CheckImageExistsRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CheckImageExistsResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\CompareSimilarByImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DetailResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseInstanceResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\IncreaseListResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByFilterRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByFilterResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByTextRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByTextResponse;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\UpdateImageResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class ImageSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'eu-central-1' => 'imagesearch.eu-central-1.aliyuncs.com',
            'cn-shenzhen' => 'imagesearch.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'imagesearch.cn-shanghai.aliyuncs.com',
            'cn-hongkong' => 'imagesearch.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'imagesearch.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'imagesearch.cn-beijing.aliyuncs.com',
            'ap-southeast-2' => 'imagesearch.ap-southeast-2.aliyuncs.com',
            'ap-southeast-1' => 'imagesearch.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'imagesearch.ap-south-1.aliyuncs.com',
            'ap-northeast-1' => 'imagesearch.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

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
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * Describes the syntax and provides examples of the AddImage operation, which adds image information to an Image Search instance.
     *
     * @remarks
     * ## Description
     * This operation adds image information to an Image Search instance.
     * ## QPS limit
     * An instance with a maximum image capacity of 100,000 has a default concurrency of 1, which means that a maximum of 1 image addition request can be processed per second.
     * Instances with other image capacities have a default concurrency of 5, which means that a maximum of 5 image addition requests can be processed per second.
     *
     * @param Request - AddImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->customContent) {
            @$body['CustomContent'] = $request->customContent;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->intAttr) {
            @$body['IntAttr'] = $request->intAttr;
        }

        if (null !== $request->intAttr2) {
            @$body['IntAttr2'] = $request->intAttr2;
        }

        if (null !== $request->intAttr3) {
            @$body['IntAttr3'] = $request->intAttr3;
        }

        if (null !== $request->intAttr4) {
            @$body['IntAttr4'] = $request->intAttr4;
        }

        if (null !== $request->picContent) {
            @$body['PicContent'] = $request->picContent;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->strAttr) {
            @$body['StrAttr'] = $request->strAttr;
        }

        if (null !== $request->strAttr2) {
            @$body['StrAttr2'] = $request->strAttr2;
        }

        if (null !== $request->strAttr3) {
            @$body['StrAttr3'] = $request->strAttr3;
        }

        if (null !== $request->strAttr4) {
            @$body['StrAttr4'] = $request->strAttr4;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddImage',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describes the syntax and provides examples of the AddImage operation, which adds image information to an Image Search instance.
     *
     * @remarks
     * ## Description
     * This operation adds image information to an Image Search instance.
     * ## QPS limit
     * An instance with a maximum image capacity of 100,000 has a default concurrency of 1, which means that a maximum of 1 image addition request can be processed per second.
     * Instances with other image capacities have a default concurrency of 5, which means that a maximum of 5 image addition requests can be processed per second.
     *
     * @param Request - AddImageRequest
     *
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @param AddImageAdvanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddImageResponse
     */
    public function addImageAdvance($request, $runtime)
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
            'Product' => 'ImageSearch',
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
        $addImageReq = new AddImageRequest([]);
        Utils::convert($request, $addImageReq);
        if (null !== $request->picContentObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->picContentObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $addImageReq->picContent = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->addImageWithOptions($addImageReq, $runtime);
    }

    /**
     * CheckImageExists.
     *
     * @remarks
     * ## How-To
     * This API is used to query image information in an Image Search instance based on an image.
     * ## QPS Limit
     * The default maximum queries per second (QPS) for query operations can be viewed in the console. It corresponds to the Visit Frequency (QPS) you selected when purchasing the instance. Supported QPS values are 1, 5, and 10.
     * ### SDK Version Guide
     * Upgrade the Image SDK to version V3.1.1 to use the "subject identification" and "similarity score" features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - CheckImageExistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckImageExistsResponse
     *
     * @param CheckImageExistsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CheckImageExistsResponse
     */
    public function checkImageExistsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckImageExists',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckImageExistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CheckImageExists.
     *
     * @remarks
     * ## How-To
     * This API is used to query image information in an Image Search instance based on an image.
     * ## QPS Limit
     * The default maximum queries per second (QPS) for query operations can be viewed in the console. It corresponds to the Visit Frequency (QPS) you selected when purchasing the instance. Supported QPS values are 1, 5, and 10.
     * ### SDK Version Guide
     * Upgrade the Image SDK to version V3.1.1 to use the "subject identification" and "similarity score" features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - CheckImageExistsRequest
     *
     * @returns CheckImageExistsResponse
     *
     * @param CheckImageExistsRequest $request
     *
     * @return CheckImageExistsResponse
     */
    public function checkImageExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkImageExistsWithOptions($request, $runtime);
    }

    /**
     * Compares two images and returns a similarity score.
     *
     * @param Request - CompareSimilarByImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompareSimilarByImageResponse
     *
     * @param CompareSimilarByImageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->primaryPicContent) {
            @$body['PrimaryPicContent'] = $request->primaryPicContent;
        }

        if (null !== $request->secondaryPicContent) {
            @$body['SecondaryPicContent'] = $request->secondaryPicContent;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompareSimilarByImage',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompareSimilarByImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compares two images and returns a similarity score.
     *
     * @param Request - CompareSimilarByImageRequest
     *
     * @returns CompareSimilarByImageResponse
     *
     * @param CompareSimilarByImageRequest $request
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->compareSimilarByImageWithOptions($request, $runtime);
    }

    /**
     * @param CompareSimilarByImageAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CompareSimilarByImageResponse
     */
    public function compareSimilarByImageAdvance($request, $runtime)
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
            'Product' => 'ImageSearch',
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
        $compareSimilarByImageReq = new CompareSimilarByImageRequest([]);
        Utils::convert($request, $compareSimilarByImageReq);
        if (null !== $request->primaryPicContentObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->primaryPicContentObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareSimilarByImageReq->primaryPicContent = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->secondaryPicContentObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->secondaryPicContentObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $compareSimilarByImageReq->secondaryPicContent = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->compareSimilarByImageWithOptions($compareSimilarByImageReq, $runtime);
    }

    /**
     * This topic describes the syntax and examples of the DeleteImage operation, which is used to delete image information from an Image Search instance.
     *
     * @remarks
     * ## Operation description
     * This operation is used to delete image information from an Image Search instance.
     * >- If the specified image does not exist in the Image Search instance, this operation still returns a success response. Do not use the response to determine whether the image exists.
     * ## QPS limit
     * The default concurrency for delete operations is 20, which means a maximum of 20 delete requests can be processed per second.
     *
     * @param Request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->isDeleteByFilter) {
            @$body['IsDeleteByFilter'] = $request->isDeleteByFilter;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteImage',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of the DeleteImage operation, which is used to delete image information from an Image Search instance.
     *
     * @remarks
     * ## Operation description
     * This operation is used to delete image information from an Image Search instance.
     * >- If the specified image does not exist in the Image Search instance, this operation still returns a success response. Do not use the response to determine whether the image exists.
     * ## QPS limit
     * The default concurrency for delete operations is 20, which means a maximum of 20 delete requests can be processed per second.
     *
     * @param Request - DeleteImageRequest
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax and examples of the Detail operation, which queries information about an Image Search instance by name.
     *
     * @remarks
     * ## Operation description
     * This operation queries instance information from an Image Search instance.
     * > For more product details or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - DetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetailResponse
     *
     * @param DetailRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return DetailResponse
     */
    public function detailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Detail',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of the Detail operation, which queries information about an Image Search instance by name.
     *
     * @remarks
     * ## Operation description
     * This operation queries instance information from an Image Search instance.
     * > For more product details or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - DetailRequest
     *
     * @returns DetailResponse
     *
     * @param DetailRequest $request
     *
     * @return DetailResponse
     */
    public function detail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax and examples of the DumpMeta operation, which creates a metadata export task for Image Search by name.
     *
     * @remarks
     * ## Operation description
     * This operation submits a metadata export task to an Image Search instance.
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for submit operations is 1, which means a maximum of 1 request is processed per second.
     * > You cannot submit a new metadata export task while the previous metadata export task is still in progress.
     *
     * @param Request - DumpMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DumpMetaResponse
     *
     * @param DumpMetaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DumpMetaResponse
     */
    public function dumpMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DumpMeta',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DumpMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of the DumpMeta operation, which creates a metadata export task for Image Search by name.
     *
     * @remarks
     * ## Operation description
     * This operation submits a metadata export task to an Image Search instance.
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for submit operations is 1, which means a maximum of 1 request is processed per second.
     * > You cannot submit a new metadata export task while the previous metadata export task is still in progress.
     *
     * @param Request - DumpMetaRequest
     *
     * @returns DumpMetaResponse
     *
     * @param DumpMetaRequest $request
     *
     * @return DumpMetaResponse
     */
    public function dumpMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaWithOptions($request, $runtime);
    }

    /**
     * Describes the syntax and provides examples of the DumpMetaList operation, which queries the list of metadata export tasks in an Image Search instance.
     *
     * @remarks
     * ## Operation description
     * This operation queries metadata export tasks in an Image Search instance.
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - DumpMetaListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DumpMetaListResponse
     *
     * @param DumpMetaListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DumpMetaListResponse
     */
    public function dumpMetaListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DumpMetaList',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DumpMetaListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describes the syntax and provides examples of the DumpMetaList operation, which queries the list of metadata export tasks in an Image Search instance.
     *
     * @remarks
     * ## Operation description
     * This operation queries metadata export tasks in an Image Search instance.
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - DumpMetaListRequest
     *
     * @returns DumpMetaListResponse
     *
     * @param DumpMetaListRequest $request
     *
     * @return DumpMetaListResponse
     */
    public function dumpMetaList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaListWithOptions($request, $runtime);
    }

    /**
     * Describes the syntax and provides examples of the IncreaseInstance operation, which is used to create a batch task for an Image Search instance by name.
     *
     * @remarks
     * ## Operation description
     * This operation is used to submit a batch task to an Image Search instance.
     * > <props="china">For more information about the product or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us by using DingTalk group 35035130.
     * ## QPS limit
     * Only one batch task can run at a time.
     * > You cannot submit a new batch task until the previous batch task is complete.
     *
     * @param Request - IncreaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IncreaseInstanceResponse
     *
     * @param IncreaseInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return IncreaseInstanceResponse
     */
    public function increaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->callbackAddress) {
            @$query['CallbackAddress'] = $request->callbackAddress;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IncreaseInstance',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IncreaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Describes the syntax and provides examples of the IncreaseInstance operation, which is used to create a batch task for an Image Search instance by name.
     *
     * @remarks
     * ## Operation description
     * This operation is used to submit a batch task to an Image Search instance.
     * > <props="china">For more information about the product or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us by using DingTalk group 35035130.
     * ## QPS limit
     * Only one batch task can run at a time.
     * > You cannot submit a new batch task until the previous batch task is complete.
     *
     * @param Request - IncreaseInstanceRequest
     *
     * @returns IncreaseInstanceResponse
     *
     * @param IncreaseInstanceRequest $request
     *
     * @return IncreaseInstanceResponse
     */
    public function increaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the list of batch tasks in an Image Search instance by calling the IncreaseList operation. This topic describes the syntax and provides examples.
     *
     * @remarks
     * ## Operation description
     * This operation is used to query batch tasks in an Image Search instance.
     * > For more product details or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - IncreaseListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IncreaseListResponse
     *
     * @param IncreaseListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IncreaseListResponse
     */
    public function increaseListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IncreaseList',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IncreaseListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of batch tasks in an Image Search instance by calling the IncreaseList operation. This topic describes the syntax and provides examples.
     *
     * @remarks
     * ## Operation description
     * This operation is used to query batch tasks in an Image Search instance.
     * > For more product details or technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for query operations is 1, which means a maximum of 1 request is processed per second.
     *
     * @param Request - IncreaseListRequest
     *
     * @returns IncreaseListResponse
     *
     * @param IncreaseListRequest $request
     *
     * @return IncreaseListResponse
     */
    public function increaseList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseListWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax and examples of SearchImageByFilter, which is used to query image information in an Image Search instance based on filter conditions.
     *
     * @param Request - SearchImageByFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageByFilterResponse
     *
     * @param SearchImageByFilterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchImageByFilterResponse
     */
    public function searchImageByFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchImageByFilter',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageByFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of SearchImageByFilter, which is used to query image information in an Image Search instance based on filter conditions.
     *
     * @param Request - SearchImageByFilterRequest
     *
     * @returns SearchImageByFilterResponse
     *
     * @param SearchImageByFilterRequest $request
     *
     * @return SearchImageByFilterResponse
     */
    public function searchImageByFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByFilterWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax and examples of the SearchByName operation, which is used to query image information in an Image Search instance by name.
     *
     * @remarks
     * ### Operation description
     * This operation queries image information in an Image Search instance by name (ProductId and PicName).
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ### QPS limit
     * The default maximum query rate can be viewed in the console. It is the QPS value you selected at the time of purchase. Currently supported values are 1 QPS, 5 QPS, and 10 QPS.
     *
     * @param Request - SearchImageByNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageByNameResponse
     *
     * @param SearchImageByNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scoreThreshold) {
            @$query['ScoreThreshold'] = $request->scoreThreshold;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->distinctProductId) {
            @$body['DistinctProductId'] = $request->distinctProductId;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchImageByName',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of the SearchByName operation, which is used to query image information in an Image Search instance by name.
     *
     * @remarks
     * ### Operation description
     * This operation queries image information in an Image Search instance by name (ProductId and PicName).
     * > For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ### QPS limit
     * The default maximum query rate can be viewed in the console. It is the QPS value you selected at the time of purchase. Currently supported values are 1 QPS, 5 QPS, and 10 QPS.
     *
     * @param Request - SearchImageByNameRequest
     *
     * @returns SearchImageByNameResponse
     *
     * @param SearchImageByNameRequest $request
     *
     * @return SearchImageByNameResponse
     */
    public function searchImageByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByNameWithOptions($request, $runtime);
    }

    /**
     * This topic describes the syntax and examples of SearchByPic, which is used to search for image information in an Image Search instance by image.
     *
     * @remarks
     * ## Operation description
     * This operation is used to search for image information in an Image Search instance by image.
     * > <props="china">For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * You can view the default maximum access frequency for query operations in the console. The frequency is the QPS value that you selected when you made the purchase. The supported values are 1 QPS, 5 QPS, and 10 QPS.
     * ### SDK version description
     * Upgrade the Image Search SDK to V3.1.1 to use the multi-subject identification and similarity score features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - SearchImageByPicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageByPicResponse
     *
     * @param SearchImageByPicRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scoreThreshold) {
            @$query['ScoreThreshold'] = $request->scoreThreshold;
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->crop) {
            @$body['Crop'] = $request->crop;
        }

        if (null !== $request->distinctProductId) {
            @$body['DistinctProductId'] = $request->distinctProductId;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->picContent) {
            @$body['PicContent'] = $request->picContent;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchImageByPic',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageByPicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of SearchByPic, which is used to search for image information in an Image Search instance by image.
     *
     * @remarks
     * ## Operation description
     * This operation is used to search for image information in an Image Search instance by image.
     * > <props="china">For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through DingTalk group (35035130).
     * ## QPS limit
     * You can view the default maximum access frequency for query operations in the console. The frequency is the QPS value that you selected when you made the purchase. The supported values are 1 QPS, 5 QPS, and 10 QPS.
     * ### SDK version description
     * Upgrade the Image Search SDK to V3.1.1 to use the multi-subject identification and similarity score features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - SearchImageByPicRequest
     *
     * @returns SearchImageByPicResponse
     *
     * @param SearchImageByPicRequest $request
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByPicWithOptions($request, $runtime);
    }

    /**
     * @param SearchImageByPicAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchImageByPicResponse
     */
    public function searchImageByPicAdvance($request, $runtime)
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
            'Product' => 'ImageSearch',
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
        $searchImageByPicReq = new SearchImageByPicRequest([]);
        Utils::convert($request, $searchImageByPicReq);
        if (null !== $request->picContentObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->picContentObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $searchImageByPicReq->picContent = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->searchImageByPicWithOptions($searchImageByPicReq, $runtime);
    }

    /**
     * This topic describes the syntax and examples of SearchImageByText, which is used to search for image information in an Image Search instance based on text.
     *
     * @remarks
     * ## Operation description
     * This operation is used to search for image information in an Image Search instance based on text. This operation is available only for instances whose service type is product multimodal search.
     * > <props="china">For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through the DingTalk group (35035130).
     * ## QPS limit
     * You can view the default maximum access frequency for query operations in the console. The frequency is the QPS value you selected at the time of purchase. Currently supported values are 1 QPS, 5 QPS, and 10 QPS.
     * ### SDK version description
     * Upgrade the Image Search SDK to V3.1.1 to use the multi-subject identification and similarity score features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - SearchImageByTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchImageByTextResponse
     *
     * @param SearchImageByTextRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchImageByTextResponse
     */
    public function searchImageByTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scoreThreshold) {
            @$query['ScoreThreshold'] = $request->scoreThreshold;
        }

        $body = [];
        if (null !== $request->distinctProductId) {
            @$body['DistinctProductId'] = $request->distinctProductId;
        }

        if (null !== $request->filter) {
            @$body['Filter'] = $request->filter;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->num) {
            @$body['Num'] = $request->num;
        }

        if (null !== $request->start) {
            @$body['Start'] = $request->start;
        }

        if (null !== $request->text) {
            @$body['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchImageByText',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchImageByTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the syntax and examples of SearchImageByText, which is used to search for image information in an Image Search instance based on text.
     *
     * @remarks
     * ## Operation description
     * This operation is used to search for image information in an Image Search instance based on text. This operation is available only for instances whose service type is product multimodal search.
     * > <props="china">For more product details and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through the DingTalk group (35035130).
     * ## QPS limit
     * You can view the default maximum access frequency for query operations in the console. The frequency is the QPS value you selected at the time of purchase. Currently supported values are 1 QPS, 5 QPS, and 10 QPS.
     * ### SDK version description
     * Upgrade the Image Search SDK to V3.1.1 to use the multi-subject identification and similarity score features. For more information, see [Java SDK](https://help.aliyun.com/document_detail/179188.html).
     *
     * @param Request - SearchImageByTextRequest
     *
     * @returns SearchImageByTextResponse
     *
     * @param SearchImageByTextRequest $request
     *
     * @return SearchImageByTextResponse
     */
    public function searchImageByText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageByTextWithOptions($request, $runtime);
    }

    /**
     * Updates the image information in an Image Search instance.
     *
     * @remarks
     * ## Usage notes
     * This operation updates the image information in an Image Search instance based on the product ID and image name.
     * > - The instance must meet the creation date requirements.
     * <props="china">
     * - Instances created after June 2021 in the Shanghai and Hangzhou regions are supported. Instances in other regions can be used normally.
     * <props="intl">
     * - Instances created after December 2021 in the Singapore region are supported. Instances in other regions are currently unavailable.
     * - For more information about the product and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through the DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for update operations is 20, which means that a maximum of 20 requests can be processed per second.
     *
     * @param Request - UpdateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->intAttr3) {
            @$query['IntAttr3'] = $request->intAttr3;
        }

        if (null !== $request->intAttr4) {
            @$query['IntAttr4'] = $request->intAttr4;
        }

        if (null !== $request->strAttr3) {
            @$query['StrAttr3'] = $request->strAttr3;
        }

        if (null !== $request->strAttr4) {
            @$query['StrAttr4'] = $request->strAttr4;
        }

        $body = [];
        if (null !== $request->customContent) {
            @$body['CustomContent'] = $request->customContent;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->intAttr) {
            @$body['IntAttr'] = $request->intAttr;
        }

        if (null !== $request->intAttr2) {
            @$body['IntAttr2'] = $request->intAttr2;
        }

        if (null !== $request->picName) {
            @$body['PicName'] = $request->picName;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->strAttr) {
            @$body['StrAttr'] = $request->strAttr;
        }

        if (null !== $request->strAttr2) {
            @$body['StrAttr2'] = $request->strAttr2;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImage',
            'version' => '2020-12-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the image information in an Image Search instance.
     *
     * @remarks
     * ## Usage notes
     * This operation updates the image information in an Image Search instance based on the product ID and image name.
     * > - The instance must meet the creation date requirements.
     * <props="china">
     * - Instances created after June 2021 in the Shanghai and Hangzhou regions are supported. Instances in other regions can be used normally.
     * <props="intl">
     * - Instances created after December 2021 in the Singapore region are supported. Instances in other regions are currently unavailable.
     * - For more information about the product and technical support, click [Online Consultation](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or contact us through the DingTalk group (35035130).
     * ## QPS limit
     * The default concurrency for update operations is 20, which means that a maximum of 20 requests can be processed per second.
     *
     * @param Request - UpdateImageRequest
     *
     * @returns UpdateImageResponse
     *
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }
}
