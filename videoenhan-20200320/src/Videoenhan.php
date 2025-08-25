<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractEcommerceVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AbstractFilmVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AdjustVideoColorResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ChangeVideoSizeResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ConvertHdrVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\DeleteFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\DeleteFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhancePortraitVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EnhanceVideoQualityResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoSubtitlesResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateHumanAnimeStyleVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\InterpolateVideoFrameResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoFaceResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ReduceVideoNoiseResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\SuperResolveVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\ToneSdrVideoResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Videoenhan extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videoenhan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string  $bucketName
     * @param mixed[] $form
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form)
    {
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
        $_response = Dara::send($_request);

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
     * @param Request - AbstractEcommerceVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbstractEcommerceVideoResponse
     *
     * @param AbstractEcommerceVideoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->height) {
            @$body['Height'] = $request->height;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        if (null !== $request->width) {
            @$body['Width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AbstractEcommerceVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbstractEcommerceVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - AbstractEcommerceVideoRequest
     *
     * @returns AbstractEcommerceVideoResponse
     *
     * @param AbstractEcommerceVideoRequest $request
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractEcommerceVideoWithOptions($request, $runtime);
    }

    /**
     * @param AbstractEcommerceVideoAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $abstractEcommerceVideoReq = new AbstractEcommerceVideoRequest([]);
        Utils::convert($request, $abstractEcommerceVideoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $abstractEcommerceVideoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->abstractEcommerceVideoWithOptions($abstractEcommerceVideoReq, $runtime);
    }

    /**
     * @param Request - AbstractFilmVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AbstractFilmVideoResponse
     *
     * @param AbstractFilmVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AbstractFilmVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AbstractFilmVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - AbstractFilmVideoRequest
     *
     * @returns AbstractFilmVideoResponse
     *
     * @param AbstractFilmVideoRequest $request
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abstractFilmVideoWithOptions($request, $runtime);
    }

    /**
     * @param AbstractFilmVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $abstractFilmVideoReq = new AbstractFilmVideoRequest([]);
        Utils::convert($request, $abstractFilmVideoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $abstractFilmVideoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->abstractFilmVideoWithOptions($abstractFilmVideoReq, $runtime);
    }

    /**
     * 视频人脸融合模板增加.
     *
     * @param Request - AddFaceVideoTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFaceVideoTemplateResponse
     *
     * @param AddFaceVideoTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoScene) {
            @$body['VideoScene'] = $request->videoScene;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFaceVideoTemplate',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频人脸融合模板增加.
     *
     * @param Request - AddFaceVideoTemplateRequest
     *
     * @returns AddFaceVideoTemplateResponse
     *
     * @param AddFaceVideoTemplateRequest $request
     *
     * @return AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceVideoTemplateAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddFaceVideoTemplateResponse
     */
    public function addFaceVideoTemplateAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $addFaceVideoTemplateReq = new AddFaceVideoTemplateRequest([]);
        Utils::convert($request, $addFaceVideoTemplateReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $addFaceVideoTemplateReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->addFaceVideoTemplateWithOptions($addFaceVideoTemplateReq, $runtime);
    }

    /**
     * @param Request - AdjustVideoColorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AdjustVideoColorResponse
     *
     * @param AdjustVideoColorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->videoBitrate) {
            @$body['VideoBitrate'] = $request->videoBitrate;
        }

        if (null !== $request->videoCodec) {
            @$body['VideoCodec'] = $request->videoCodec;
        }

        if (null !== $request->videoFormat) {
            @$body['VideoFormat'] = $request->videoFormat;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AdjustVideoColor',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AdjustVideoColorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - AdjustVideoColorRequest
     *
     * @returns AdjustVideoColorResponse
     *
     * @param AdjustVideoColorRequest $request
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->adjustVideoColorWithOptions($request, $runtime);
    }

    /**
     * @param AdjustVideoColorAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $adjustVideoColorReq = new AdjustVideoColorRequest([]);
        Utils::convert($request, $adjustVideoColorReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $adjustVideoColorReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->adjustVideoColorWithOptions($adjustVideoColorReq, $runtime);
    }

    /**
     * @param Request - ChangeVideoSizeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeVideoSizeResponse
     *
     * @param ChangeVideoSizeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSizeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->b) {
            @$body['B'] = $request->b;
        }

        if (null !== $request->cropType) {
            @$body['CropType'] = $request->cropType;
        }

        if (null !== $request->fillType) {
            @$body['FillType'] = $request->fillType;
        }

        if (null !== $request->g) {
            @$body['G'] = $request->g;
        }

        if (null !== $request->height) {
            @$body['Height'] = $request->height;
        }

        if (null !== $request->r) {
            @$body['R'] = $request->r;
        }

        if (null !== $request->tightness) {
            @$body['Tightness'] = $request->tightness;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        if (null !== $request->width) {
            @$body['Width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeVideoSize',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeVideoSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ChangeVideoSizeRequest
     *
     * @returns ChangeVideoSizeResponse
     *
     * @param ChangeVideoSizeRequest $request
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeVideoSizeWithOptions($request, $runtime);
    }

    /**
     * @param ChangeVideoSizeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeVideoSizeResponse
     */
    public function changeVideoSizeAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $changeVideoSizeReq = new ChangeVideoSizeRequest([]);
        Utils::convert($request, $changeVideoSizeReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $changeVideoSizeReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->changeVideoSizeWithOptions($changeVideoSizeReq, $runtime);
    }

    /**
     * @param Request - ConvertHdrVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertHdrVideoResponse
     *
     * @param ConvertHdrVideoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bitrate) {
            @$body['Bitrate'] = $request->bitrate;
        }

        if (null !== $request->HDRFormat) {
            @$body['HDRFormat'] = $request->HDRFormat;
        }

        if (null !== $request->maxIlluminance) {
            @$body['MaxIlluminance'] = $request->maxIlluminance;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConvertHdrVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertHdrVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ConvertHdrVideoRequest
     *
     * @returns ConvertHdrVideoResponse
     *
     * @param ConvertHdrVideoRequest $request
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertHdrVideoWithOptions($request, $runtime);
    }

    /**
     * @param ConvertHdrVideoAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConvertHdrVideoResponse
     */
    public function convertHdrVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $convertHdrVideoReq = new ConvertHdrVideoRequest([]);
        Utils::convert($request, $convertHdrVideoReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $convertHdrVideoReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->convertHdrVideoWithOptions($convertHdrVideoReq, $runtime);
    }

    /**
     * 视频人脸融合模板删除.
     *
     * @param Request - DeleteFaceVideoTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaceVideoTemplateResponse
     *
     * @param DeleteFaceVideoTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteFaceVideoTemplateResponse
     */
    public function deleteFaceVideoTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFaceVideoTemplate',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频人脸融合模板删除.
     *
     * @param Request - DeleteFaceVideoTemplateRequest
     *
     * @returns DeleteFaceVideoTemplateResponse
     *
     * @param DeleteFaceVideoTemplateRequest $request
     *
     * @return DeleteFaceVideoTemplateResponse
     */
    public function deleteFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * 视频人像增强.
     *
     * @param Request - EnhancePortraitVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnhancePortraitVideoResponse
     *
     * @param EnhancePortraitVideoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnhancePortraitVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnhancePortraitVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频人像增强.
     *
     * @param Request - EnhancePortraitVideoRequest
     *
     * @returns EnhancePortraitVideoResponse
     *
     * @param EnhancePortraitVideoRequest $request
     *
     * @return EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhancePortraitVideoWithOptions($request, $runtime);
    }

    /**
     * @param EnhancePortraitVideoAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EnhancePortraitVideoResponse
     */
    public function enhancePortraitVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $enhancePortraitVideoReq = new EnhancePortraitVideoRequest([]);
        Utils::convert($request, $enhancePortraitVideoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $enhancePortraitVideoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->enhancePortraitVideoWithOptions($enhancePortraitVideoReq, $runtime);
    }

    /**
     * @param Request - EnhanceVideoQualityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnhanceVideoQualityResponse
     *
     * @param EnhanceVideoQualityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bitrate) {
            @$body['Bitrate'] = $request->bitrate;
        }

        if (null !== $request->frameRate) {
            @$body['FrameRate'] = $request->frameRate;
        }

        if (null !== $request->HDRFormat) {
            @$body['HDRFormat'] = $request->HDRFormat;
        }

        if (null !== $request->maxIlluminance) {
            @$body['MaxIlluminance'] = $request->maxIlluminance;
        }

        if (null !== $request->outPutHeight) {
            @$body['OutPutHeight'] = $request->outPutHeight;
        }

        if (null !== $request->outPutWidth) {
            @$body['OutPutWidth'] = $request->outPutWidth;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnhanceVideoQuality',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnhanceVideoQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - EnhanceVideoQualityRequest
     *
     * @returns EnhanceVideoQualityResponse
     *
     * @param EnhanceVideoQualityRequest $request
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enhanceVideoQualityWithOptions($request, $runtime);
    }

    /**
     * @param EnhanceVideoQualityAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnhanceVideoQualityResponse
     */
    public function enhanceVideoQualityAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $enhanceVideoQualityReq = new EnhanceVideoQualityRequest([]);
        Utils::convert($request, $enhanceVideoQualityReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $enhanceVideoQualityReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->enhanceVideoQualityWithOptions($enhanceVideoQualityReq, $runtime);
    }

    /**
     * @param Request - EraseVideoLogoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EraseVideoLogoResponse
     *
     * @param EraseVideoLogoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->boxes) {
            @$body['Boxes'] = $request->boxes;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EraseVideoLogo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EraseVideoLogoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - EraseVideoLogoRequest
     *
     * @returns EraseVideoLogoResponse
     *
     * @param EraseVideoLogoRequest $request
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoLogoWithOptions($request, $runtime);
    }

    /**
     * @param EraseVideoLogoAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $eraseVideoLogoReq = new EraseVideoLogoRequest([]);
        Utils::convert($request, $eraseVideoLogoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $eraseVideoLogoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->eraseVideoLogoWithOptions($eraseVideoLogoReq, $runtime);
    }

    /**
     * @param Request - EraseVideoSubtitlesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EraseVideoSubtitlesResponse
     *
     * @param EraseVideoSubtitlesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->BH) {
            @$body['BH'] = $request->BH;
        }

        if (null !== $request->BW) {
            @$body['BW'] = $request->BW;
        }

        if (null !== $request->BX) {
            @$body['BX'] = $request->BX;
        }

        if (null !== $request->BY) {
            @$body['BY'] = $request->BY;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EraseVideoSubtitles',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EraseVideoSubtitlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - EraseVideoSubtitlesRequest
     *
     * @returns EraseVideoSubtitlesResponse
     *
     * @param EraseVideoSubtitlesRequest $request
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eraseVideoSubtitlesWithOptions($request, $runtime);
    }

    /**
     * @param EraseVideoSubtitlesAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $eraseVideoSubtitlesReq = new EraseVideoSubtitlesRequest([]);
        Utils::convert($request, $eraseVideoSubtitlesReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $eraseVideoSubtitlesReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->eraseVideoSubtitlesWithOptions($eraseVideoSubtitlesReq, $runtime);
    }

    /**
     * 视频人像卡通化.
     *
     * @param Request - GenerateHumanAnimeStyleVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateHumanAnimeStyleVideoResponse
     *
     * @param GenerateHumanAnimeStyleVideoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cartoonStyle) {
            @$body['CartoonStyle'] = $request->cartoonStyle;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateHumanAnimeStyleVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateHumanAnimeStyleVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频人像卡通化.
     *
     * @param Request - GenerateHumanAnimeStyleVideoRequest
     *
     * @returns GenerateHumanAnimeStyleVideoResponse
     *
     * @param GenerateHumanAnimeStyleVideoRequest $request
     *
     * @return GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateHumanAnimeStyleVideoWithOptions($request, $runtime);
    }

    /**
     * @param GenerateHumanAnimeStyleVideoAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GenerateHumanAnimeStyleVideoResponse
     */
    public function generateHumanAnimeStyleVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $generateHumanAnimeStyleVideoReq = new GenerateHumanAnimeStyleVideoRequest([]);
        Utils::convert($request, $generateHumanAnimeStyleVideoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $generateHumanAnimeStyleVideoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->generateHumanAnimeStyleVideoWithOptions($generateHumanAnimeStyleVideoReq, $runtime);
    }

    /**
     * @param Request - GenerateVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateVideoResponse
     *
     * @param GenerateVideoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GenerateVideoResponse
     */
    public function generateVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->durationAdaption) {
            @$body['DurationAdaption'] = $request->durationAdaption;
        }

        if (null !== $request->fileList) {
            @$body['FileList'] = $request->fileList;
        }

        if (null !== $request->height) {
            @$body['Height'] = $request->height;
        }

        if (null !== $request->mute) {
            @$body['Mute'] = $request->mute;
        }

        if (null !== $request->puzzleEffect) {
            @$body['PuzzleEffect'] = $request->puzzleEffect;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->smartEffect) {
            @$body['SmartEffect'] = $request->smartEffect;
        }

        if (null !== $request->style) {
            @$body['Style'] = $request->style;
        }

        if (null !== $request->transitionStyle) {
            @$body['TransitionStyle'] = $request->transitionStyle;
        }

        if (null !== $request->width) {
            @$body['Width'] = $request->width;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GenerateVideoRequest
     *
     * @returns GenerateVideoResponse
     *
     * @param GenerateVideoRequest $request
     *
     * @return GenerateVideoResponse
     */
    public function generateVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoWithOptions($request, $runtime);
    }

    /**
     * @param GenerateVideoAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateVideoResponse
     */
    public function generateVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $generateVideoReq = new GenerateVideoRequest([]);
        Utils::convert($request, $generateVideoReq);
        if (null !== $request->fileList) {
            $i0 = 0;

            foreach ($request->fileList as $item0) {
                if (null !== $item0->fileUrlObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->fileUrlObject,
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
                    $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
                    $tmpObj = @$generateVideoReq->fileList[$i0];
                    $tmpObj->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->generateVideoWithOptions($generateVideoReq, $runtime);
    }

    /**
     * @param Request - GetAsyncJobResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncJobResultResponse
     *
     * @param GetAsyncJobResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAsyncJobResult',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GetAsyncJobResultRequest
     *
     * @returns GetAsyncJobResultResponse
     *
     * @param GetAsyncJobResultRequest $request
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncJobResultWithOptions($request, $runtime);
    }

    /**
     * @param Request - InterpolateVideoFrameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InterpolateVideoFrameResponse
     *
     * @param InterpolateVideoFrameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bitrate) {
            @$body['Bitrate'] = $request->bitrate;
        }

        if (null !== $request->frameRate) {
            @$body['FrameRate'] = $request->frameRate;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InterpolateVideoFrame',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InterpolateVideoFrameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - InterpolateVideoFrameRequest
     *
     * @returns InterpolateVideoFrameResponse
     *
     * @param InterpolateVideoFrameRequest $request
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrame($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->interpolateVideoFrameWithOptions($request, $runtime);
    }

    /**
     * @param InterpolateVideoFrameAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return InterpolateVideoFrameResponse
     */
    public function interpolateVideoFrameAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $interpolateVideoFrameReq = new InterpolateVideoFrameRequest([]);
        Utils::convert($request, $interpolateVideoFrameReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $interpolateVideoFrameReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->interpolateVideoFrameWithOptions($interpolateVideoFrameReq, $runtime);
    }

    /**
     * @param Request - MergeVideoFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MergeVideoFaceResponse
     *
     * @param MergeVideoFaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addWatermark) {
            @$body['AddWatermark'] = $request->addWatermark;
        }

        if (null !== $request->enhance) {
            @$body['Enhance'] = $request->enhance;
        }

        if (null !== $request->referenceURL) {
            @$body['ReferenceURL'] = $request->referenceURL;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        if (null !== $request->watermarkType) {
            @$body['WatermarkType'] = $request->watermarkType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MergeVideoFace',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MergeVideoFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - MergeVideoFaceRequest
     *
     * @returns MergeVideoFaceResponse
     *
     * @param MergeVideoFaceRequest $request
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeVideoFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeVideoFaceAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return MergeVideoFaceResponse
     */
    public function mergeVideoFaceAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $mergeVideoFaceReq = new MergeVideoFaceRequest([]);
        Utils::convert($request, $mergeVideoFaceReq);
        if (null !== $request->referenceURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->referenceURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $mergeVideoFaceReq->referenceURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $mergeVideoFaceReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->mergeVideoFaceWithOptions($mergeVideoFaceReq, $runtime);
    }

    /**
     * 视频模板融合换脸.
     *
     * @param Request - MergeVideoModelFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MergeVideoModelFaceResponse
     *
     * @param MergeVideoModelFaceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addWatermark) {
            @$body['AddWatermark'] = $request->addWatermark;
        }

        if (null !== $request->enhance) {
            @$body['Enhance'] = $request->enhance;
        }

        if (null !== $request->faceImageURL) {
            @$body['FaceImageURL'] = $request->faceImageURL;
        }

        if (null !== $request->mergeInfos) {
            @$body['MergeInfos'] = $request->mergeInfos;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->watermarkType) {
            @$body['WatermarkType'] = $request->watermarkType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MergeVideoModelFace',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MergeVideoModelFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频模板融合换脸.
     *
     * @param Request - MergeVideoModelFaceRequest
     *
     * @returns MergeVideoModelFaceResponse
     *
     * @param MergeVideoModelFaceRequest $request
     *
     * @return MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mergeVideoModelFaceWithOptions($request, $runtime);
    }

    /**
     * @param MergeVideoModelFaceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return MergeVideoModelFaceResponse
     */
    public function mergeVideoModelFaceAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $mergeVideoModelFaceReq = new MergeVideoModelFaceRequest([]);
        Utils::convert($request, $mergeVideoModelFaceReq);
        if (null !== $request->faceImageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->faceImageURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $mergeVideoModelFaceReq->faceImageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->mergeVideoModelFaceWithOptions($mergeVideoModelFaceReq, $runtime);
    }

    /**
     * 视频人脸融合模板查询.
     *
     * @param Request - QueryFaceVideoTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFaceVideoTemplateResponse
     *
     * @param QueryFaceVideoTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryFaceVideoTemplateResponse
     */
    public function queryFaceVideoTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFaceVideoTemplate',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFaceVideoTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频人脸融合模板查询.
     *
     * @param Request - QueryFaceVideoTemplateRequest
     *
     * @returns QueryFaceVideoTemplateResponse
     *
     * @param QueryFaceVideoTemplateRequest $request
     *
     * @return QueryFaceVideoTemplateResponse
     */
    public function queryFaceVideoTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceVideoTemplateWithOptions($request, $runtime);
    }

    /**
     * 视频降噪.
     *
     * @param Request - ReduceVideoNoiseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReduceVideoNoiseResponse
     *
     * @param ReduceVideoNoiseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReduceVideoNoiseResponse
     */
    public function reduceVideoNoiseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReduceVideoNoise',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReduceVideoNoiseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频降噪.
     *
     * @param Request - ReduceVideoNoiseRequest
     *
     * @returns ReduceVideoNoiseResponse
     *
     * @param ReduceVideoNoiseRequest $request
     *
     * @return ReduceVideoNoiseResponse
     */
    public function reduceVideoNoise($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reduceVideoNoiseWithOptions($request, $runtime);
    }

    /**
     * @param ReduceVideoNoiseAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReduceVideoNoiseResponse
     */
    public function reduceVideoNoiseAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $reduceVideoNoiseReq = new ReduceVideoNoiseRequest([]);
        Utils::convert($request, $reduceVideoNoiseReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $reduceVideoNoiseReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->reduceVideoNoiseWithOptions($reduceVideoNoiseReq, $runtime);
    }

    /**
     * @param Request - SuperResolveVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuperResolveVideoResponse
     *
     * @param SuperResolveVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bitRate) {
            @$body['BitRate'] = $request->bitRate;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuperResolveVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuperResolveVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SuperResolveVideoRequest
     *
     * @returns SuperResolveVideoResponse
     *
     * @param SuperResolveVideoRequest $request
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->superResolveVideoWithOptions($request, $runtime);
    }

    /**
     * @param SuperResolveVideoAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $superResolveVideoReq = new SuperResolveVideoRequest([]);
        Utils::convert($request, $superResolveVideoReq);
        if (null !== $request->videoUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $superResolveVideoReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->superResolveVideoWithOptions($superResolveVideoReq, $runtime);
    }

    /**
     * @param Request - ToneSdrVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ToneSdrVideoResponse
     *
     * @param ToneSdrVideoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bitrate) {
            @$body['Bitrate'] = $request->bitrate;
        }

        if (null !== $request->recolorModel) {
            @$body['RecolorModel'] = $request->recolorModel;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ToneSdrVideo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ToneSdrVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ToneSdrVideoRequest
     *
     * @returns ToneSdrVideoResponse
     *
     * @param ToneSdrVideoRequest $request
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->toneSdrVideoWithOptions($request, $runtime);
    }

    /**
     * @param ToneSdrVideoAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ToneSdrVideoResponse
     */
    public function toneSdrVideoAdvance($request, $runtime)
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
            'Product' => 'videoenhan',
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
        $toneSdrVideoReq = new ToneSdrVideoRequest([]);
        Utils::convert($request, $toneSdrVideoReq);
        if (null !== $request->videoURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->videoURLObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $toneSdrVideoReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->toneSdrVideoWithOptions($toneSdrVideoReq, $runtime);
    }
}
