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
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\CreateImageAmazonTaskShrinkRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\RemoveWordsResponse;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundAdvanceRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundRequest;
use AlibabaCloud\SDK\Dplus\V20201216\Models\ReplaceBackgroundResponse;
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
        $query = [];
        $body  = [];
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
        $query = [];
        $body  = [];
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
        $query                 = [];
        $query['Gif']          = $request->gif;
        $query['ImgUrlList']   = $request->imgUrlListShrink;
        $query['TemplateMode'] = $request->templateMode;
        $query['TextList']     = $request->textListShrink;
        $req                   = new OpenApiRequest([
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
     * @param GetTaskResultRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
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
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
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
     * @param RemoveWordsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveWordsResponse
     */
    public function removeWordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['PicUrl'] = $request->picUrl;
        $req             = new OpenApiRequest([
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
        $query                     = [];
        $query['BackgroundId']     = $request->backgroundId;
        $query['Num']              = $request->num;
        $query['PicBackgroundUrl'] = $request->picBackgroundUrl;
        $query['PicUrl']           = $request->picUrl;
        $req                       = new OpenApiRequest([
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
}
