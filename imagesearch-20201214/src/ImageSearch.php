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
        $this->_endpointRule = '';
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
     * Adds an image to an Image Search instance.
     *
     * @remarks
     * You can call this operation to add an image to an Image Search instance.
     * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     * ## QPS limits
     * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
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
     * Adds an image to an Image Search instance.
     *
     * @remarks
     * You can call this operation to add an image to an Image Search instance.
     * > If you want to obtain more information about the service and technical support, click [Online Consulting](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2) or join the DingTalk group (ID 35035130).
     * ## QPS limits
     * By default, the concurrency limit for adding an image to instances whose image capacity specifications are 0.1 million images is 1. This means that the system can process up to one request of adding an image every second. By default, the concurrency limit for adding an image to instances of other image capacity specifications is 5. This means that the system can process up to five requests of adding an image every second.
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
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
     * 对比图片相似值
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
     * 对比图片相似值
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
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
     * This topic describes the syntax of the DeleteImage operation and provides examples of this operation. You can call this operation to delete images from an Image Search instance.
     *
     * @remarks
     * This operation deletes images from an Image Search instance.
     * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
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
     * This topic describes the syntax of the DeleteImage operation and provides examples of this operation. You can call this operation to delete images from an Image Search instance.
     *
     * @remarks
     * This operation deletes images from an Image Search instance.
     * >  A success response is returned even if the specified image does not exist on the instance. Therefore, you cannot determine whether the image exists on the instance based on the response.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
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
     * This topic describes the syntax of the Detail operation and provides examples of this operation. You can call this operation to query instance details.
     *
     * @remarks
     * This operation queries instance details.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
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
     * This topic describes the syntax of the Detail operation and provides examples of this operation. You can call this operation to query instance details.
     *
     * @remarks
     * This operation queries instance details.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process only 1 request every second.
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
     * This topic describes the syntax of the DumpMeta operation and provides examples of this operation. You can call this operation to create a task for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation creates a task for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the DumpMeta operation and provides examples of this operation. You can call this operation to create a task for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation creates a task for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the DumpMetaList operation and provides examples of this operation. You can call this operation to query tasks that are used for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the DumpMetaList operation and provides examples of this operation. You can call this operation to query tasks that are used for exporting metadata from an Image Search instance.
     *
     * @remarks
     * This operation queries tasks that are used for exporting metadata from an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the IncreaseInstance operation and provides examples of this operation. You can call this operation to create a batch task on an Image Search instance.
     *
     * @remarks
     * This operation creates a batch task on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the IncreaseInstance operation and provides examples of this operation. You can call this operation to create a batch task on an Image Search instance.
     *
     * @remarks
     * This operation creates a batch task on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the IncreaseList operation and provides examples of this operation. You can call this operation to query batch tasks on an Image Search instance.
     *
     * @remarks
     * This operation queries batch tasks on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the IncreaseList operation and provides examples of this operation. You can call this operation to query batch tasks on an Image Search instance.
     *
     * @remarks
     * This operation queries batch tasks on an Image Search instance.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 1. In this case, the system can process at most 1 request every second.
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
     * This topic describes the syntax of the SearchByName operation and provides examples of this operation. You can call this operation to search for images by image name on an Image Search instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
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
     * This topic describes the syntax of the SearchByName operation and provides examples of this operation. You can call this operation to search for images by image name on an Image Search instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
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
     * This topic describes the syntax of the SearchByPic operation and provides examples of this operation. You can call this operation to search for images by image on an Image Search Instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     * ## SDK release notes
     * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
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
     * This topic describes the syntax of the SearchByPic operation and provides examples of this operation. You can call this operation to search for images by image on an Image Search Instance.
     *
     * @remarks
     * This operation searches for images by image name on an Image Search instance.
     * ## QPS limits
     * The maximum number of queries per second is displayed in the Image Search console. The upper limit is specified when you purchase the instance. You can set the upper limit to 5 QPS or 10 QPS.
     * ## SDK release notes
     * The Image Search SDK has been upgraded to version 3.1.1, which supports multi-subject recognition and similarity scores. For more information, see [Image Search SDK for Java](/help/en/image-search/latest/version-v3-java-sdk).
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
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
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
     * SearchImageByText.
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
     * SearchImageByText.
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
     * This topic describes the syntax of the UpdateImage operation and provides examples of this operation. You can call this operation to update image information on an Image Search instance.
     *
     * @remarks
     * This operation updates image information on an Image Search instance.
     * > *   Limits are imposed on the instance creation time.
     * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
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
     * This topic describes the syntax of the UpdateImage operation and provides examples of this operation. You can call this operation to update image information on an Image Search instance.
     *
     * @remarks
     * This operation updates image information on an Image Search instance.
     * > *   Limits are imposed on the instance creation time.
     * >*   This operation is supported by instances that are created in the Singapore (Singapore) region after December 2021. This operation is not supported in other regions.
     * ## QPS limits
     * By default, the maximum number of queries supported by this operation is 20. In this case, the system can process at most 20 requests every second.
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
