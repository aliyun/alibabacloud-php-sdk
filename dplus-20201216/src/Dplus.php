<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePredictCategoryAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePredictCategoryRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePredictCategoryResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePropRecAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePropRecRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AePropRecResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AlivisionImgdupAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AlivisionImgdupRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\AlivisionImgdupResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskShrinkRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateRemoveWorkTaskAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateRemoveWorkTaskRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateRemoveWorkTaskResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\FaceshifterTAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\FaceshifterTRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\FaceshifterTResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\KuajingSegAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\KuajingSegRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\KuajingSegResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\SeleteCommodityByBToBRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\SeleteCommodityByBToBResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\SeleteCommodityRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\SeleteCommodityResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPredictCategoryAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPredictCategoryRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPredictCategoryResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPropRecAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPropRecRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TbPropRecResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TransferUrlByBtoBRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\TransferUrlByBtoBResponse;
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

class Dplus extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dplus', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AePredictCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AePredictCategoryResponse
     */
    public function aePredictCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AePredictCategory',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AePredictCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AePredictCategoryRequest $request
     *
     * @return AePredictCategoryResponse
     */
    public function aePredictCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aePredictCategoryWithOptions($request, $runtime);
    }

    /**
     * @param AePredictCategoryAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AePredictCategoryResponse
     */
    public function aePredictCategoryAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $aePredictCategoryReq = new AePredictCategoryRequest([]);
        OpenApiUtilClient::convert($request, $aePredictCategoryReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $aePredictCategoryReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->aePredictCategoryWithOptions($aePredictCategoryReq, $runtime);
    }

    /**
     * @param AePropRecRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AePropRecResponse
     */
    public function aePropRecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AePropRec',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AePropRecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AePropRecRequest $request
     *
     * @return AePropRecResponse
     */
    public function aePropRec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aePropRecWithOptions($request, $runtime);
    }

    /**
     * @param AePropRecAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AePropRecResponse
     */
    public function aePropRecAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $aePropRecReq = new AePropRecRequest([]);
        OpenApiUtilClient::convert($request, $aePropRecReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $aePropRecReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->aePropRecWithOptions($aePropRecReq, $runtime);
    }

    /**
     * @param AlivisionImgdupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AlivisionImgdupResponse
     */
    public function alivisionImgdupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageHeight)) {
            $body['ImageHeight'] = $request->imageHeight;
        }
        if (!Utils::isUnset($request->imageWidth)) {
            $body['ImageWidth'] = $request->imageWidth;
        }
        if (!Utils::isUnset($request->outputImageNum)) {
            $body['OutputImageNum'] = $request->outputImageNum;
        }
        if (!Utils::isUnset($request->picNum)) {
            $body['PicNum'] = $request->picNum;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AlivisionImgdup',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AlivisionImgdupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AlivisionImgdupRequest $request
     *
     * @return AlivisionImgdupResponse
     */
    public function alivisionImgdup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alivisionImgdupWithOptions($request, $runtime);
    }

    /**
     * @param AlivisionImgdupAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AlivisionImgdupResponse
     */
    public function alivisionImgdupAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $alivisionImgdupReq = new AlivisionImgdupRequest([]);
        OpenApiUtilClient::convert($request, $alivisionImgdupReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $alivisionImgdupReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->alivisionImgdupWithOptions($alivisionImgdupReq, $runtime);
    }

    /**
     * @param CreateImageAmazonTaskRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateImageAmazonTaskResponse
     */
    public function createImageAmazonTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateImageAmazonTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imgUrlList)) {
            $request->imgUrlListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imgUrlList, 'ImgUrlList', 'json');
        }
        if (!Utils::isUnset($tmpReq->textList)) {
            $request->textListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->textList, 'TextList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->gif)) {
            $query['Gif'] = $request->gif;
        }
        if (!Utils::isUnset($request->imgUrlListShrink)) {
            $query['ImgUrlList'] = $request->imgUrlListShrink;
        }
        if (!Utils::isUnset($request->templateMode)) {
            $query['TemplateMode'] = $request->templateMode;
        }
        if (!Utils::isUnset($request->textListShrink)) {
            $query['TextList'] = $request->textListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImageAmazonTask',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageAmazonTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageAmazonTaskRequest $request
     *
     * @return CreateImageAmazonTaskResponse
     */
    public function createImageAmazonTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageAmazonTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemoveWorkTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateRemoveWorkTaskResponse
     */
    public function createRemoveWorkTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemIdentity)) {
            $query['ItemIdentity'] = $request->itemIdentity;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $query['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRemoveWorkTask',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRemoveWorkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRemoveWorkTaskRequest $request
     *
     * @return CreateRemoveWorkTaskResponse
     */
    public function createRemoveWorkTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemoveWorkTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemoveWorkTaskAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateRemoveWorkTaskResponse
     */
    public function createRemoveWorkTaskAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $createRemoveWorkTaskReq = new CreateRemoveWorkTaskRequest([]);
        OpenApiUtilClient::convert($request, $createRemoveWorkTaskReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $createRemoveWorkTaskReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->createRemoveWorkTaskWithOptions($createRemoveWorkTaskReq, $runtime);
    }

    /**
     * @param FaceshifterTRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return FaceshifterTResponse
     */
    public function faceshifterTWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->age)) {
            $body['Age'] = $request->age;
        }
        if (!Utils::isUnset($request->gender)) {
            $body['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->race)) {
            $body['Race'] = $request->race;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceshifterT',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceshifterTResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceshifterTRequest $request
     *
     * @return FaceshifterTResponse
     */
    public function faceshifterT($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->faceshifterTWithOptions($request, $runtime);
    }

    /**
     * @param FaceshifterTAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return FaceshifterTResponse
     */
    public function faceshifterTAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $faceshifterTReq = new FaceshifterTRequest([]);
        OpenApiUtilClient::convert($request, $faceshifterTReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $faceshifterTReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->faceshifterTWithOptions($faceshifterTReq, $runtime);
    }

    /**
     * @param GetTaskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskResult',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param KuajingSegRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return KuajingSegResponse
     */
    public function kuajingSegWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->returnPicFormat)) {
            $body['ReturnPicFormat'] = $request->returnPicFormat;
        }
        if (!Utils::isUnset($request->returnPicType)) {
            $body['ReturnPicType'] = $request->returnPicType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'KuajingSeg',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KuajingSegResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KuajingSegRequest $request
     *
     * @return KuajingSegResponse
     */
    public function kuajingSeg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kuajingSegWithOptions($request, $runtime);
    }

    /**
     * @param KuajingSegAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return KuajingSegResponse
     */
    public function kuajingSegAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $kuajingSegReq = new KuajingSegRequest([]);
        OpenApiUtilClient::convert($request, $kuajingSegReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $kuajingSegReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->kuajingSegWithOptions($kuajingSegReq, $runtime);
    }

    /**
     * @param RemoveWordsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveWordsResponse
     */
    public function removeWordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->picUrl)) {
            $query['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveWords',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveWordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveWordsRequest $request
     *
     * @return RemoveWordsResponse
     */
    public function removeWords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeWordsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveWordsAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveWordsResponse
     */
    public function removeWordsAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $removeWordsReq = new RemoveWordsRequest([]);
        OpenApiUtilClient::convert($request, $removeWordsReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $removeWordsReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->removeWordsWithOptions($removeWordsReq, $runtime);
    }

    /**
     * @param ReplaceBackgroundRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReplaceBackgroundResponse
     */
    public function replaceBackgroundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backgroundId)) {
            $query['BackgroundId'] = $request->backgroundId;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picBackgroundUrl)) {
            $query['PicBackgroundUrl'] = $request->picBackgroundUrl;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $query['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplaceBackground',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceBackgroundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceBackgroundRequest $request
     *
     * @return ReplaceBackgroundResponse
     */
    public function replaceBackground($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceBackgroundWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceBackgroundAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReplaceBackgroundResponse
     */
    public function replaceBackgroundAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $replaceBackgroundReq = new ReplaceBackgroundRequest([]);
        OpenApiUtilClient::convert($request, $replaceBackgroundReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $replaceBackgroundReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->replaceBackgroundWithOptions($replaceBackgroundReq, $runtime);
    }

    /**
     * @param SeleteCommodityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SeleteCommodityResponse
     */
    public function seleteCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SeleteCommodity',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SeleteCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SeleteCommodityRequest $request
     *
     * @return SeleteCommodityResponse
     */
    public function seleteCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->seleteCommodityWithOptions($request, $runtime);
    }

    /**
     * @param SeleteCommodityByBToBRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SeleteCommodityByBToBResponse
     */
    public function seleteCommodityByBToBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SeleteCommodityByBToB',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SeleteCommodityByBToBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SeleteCommodityByBToBRequest $request
     *
     * @return SeleteCommodityByBToBResponse
     */
    public function seleteCommodityByBToB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->seleteCommodityByBToBWithOptions($request, $runtime);
    }

    /**
     * @param TbPredictCategoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TbPredictCategoryResponse
     */
    public function tbPredictCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TbPredictCategory',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TbPredictCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TbPredictCategoryRequest $request
     *
     * @return TbPredictCategoryResponse
     */
    public function tbPredictCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tbPredictCategoryWithOptions($request, $runtime);
    }

    /**
     * @param TbPredictCategoryAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TbPredictCategoryResponse
     */
    public function tbPredictCategoryAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $tbPredictCategoryReq = new TbPredictCategoryRequest([]);
        OpenApiUtilClient::convert($request, $tbPredictCategoryReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $tbPredictCategoryReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->tbPredictCategoryWithOptions($tbPredictCategoryReq, $runtime);
    }

    /**
     * @param TbPropRecRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TbPropRecResponse
     */
    public function tbPropRecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->picUrl)) {
            $body['PicUrl'] = $request->picUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TbPropRec',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TbPropRecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TbPropRecRequest $request
     *
     * @return TbPropRecResponse
     */
    public function tbPropRec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tbPropRecWithOptions($request, $runtime);
    }

    /**
     * @param TbPropRecAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TbPropRecResponse
     */
    public function tbPropRecAdvance($request, $runtime)
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
            'product'  => 'dplus',
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
        $tbPropRecReq = new TbPropRecRequest([]);
        OpenApiUtilClient::convert($request, $tbPropRecReq);
        if (!Utils::isUnset($request->picUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->picUrlObject,
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
            $tbPropRecReq->picUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->tbPropRecWithOptions($tbPropRecReq, $runtime);
    }

    /**
     * @param TransferUrlByBtoBRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TransferUrlByBtoBResponse
     */
    public function transferUrlByBtoBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offerId)) {
            $query['OfferId'] = $request->offerId;
        }
        if (!Utils::isUnset($request->pid)) {
            $query['Pid'] = $request->pid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferUrlByBtoB',
            'version'     => '2020-12-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferUrlByBtoBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferUrlByBtoBRequest $request
     *
     * @return TransferUrlByBtoBResponse
     */
    public function transferUrlByBtoB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferUrlByBtoBWithOptions($request, $runtime);
    }
}
