<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ChangeSkyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ChangeSkyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ChangeSkyResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\RefineMaskAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\RefineMaskRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\RefineMaskResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentBodyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentBodyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentBodyResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentClothAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentClothRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentClothResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommodityAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommodityRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommodityResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommonImageAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommonImageRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentCommonImageResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentFoodAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentFoodRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentFoodResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHairAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHairRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHairResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDBodyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDBodyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDBodyResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDCommonImageAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDCommonImageRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDCommonImageResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDSkyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDSkyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHDSkyResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHeadAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHeadRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentHeadResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkinAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkinRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkinResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\SegmentSkyResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Imageseg extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageseg', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param Request - ChangeSkyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeSkyResponse
     *
     * @param ChangeSkyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ChangeSkyResponse
     */
    public function changeSkyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->replaceImageURL) {
            @$query['ReplaceImageURL'] = $request->replaceImageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeSky',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeSkyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ChangeSkyRequest
     *
     * @returns ChangeSkyResponse
     *
     * @param ChangeSkyRequest $request
     *
     * @return ChangeSkyResponse
     */
    public function changeSky($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeSkyWithOptions($request, $runtime);
    }

    /**
     * @param ChangeSkyAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChangeSkyResponse
     */
    public function changeSkyAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $changeSkyReq = new ChangeSkyRequest([]);
        Utils::convert($request, $changeSkyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $changeSkyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->replaceImageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->replaceImageURLObject,
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
            $changeSkyReq->replaceImageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->changeSkyWithOptions($changeSkyReq, $runtime);
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
            'version' => '2019-12-30',
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
     * @param Request - ParseFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ParseFaceResponse
     *
     * @param ParseFaceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ParseFaceResponse
     */
    public function parseFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ParseFace',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ParseFaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ParseFaceRequest
     *
     * @returns ParseFaceResponse
     *
     * @param ParseFaceRequest $request
     *
     * @return ParseFaceResponse
     */
    public function parseFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->parseFaceWithOptions($request, $runtime);
    }

    /**
     * @param ParseFaceAdvanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ParseFaceResponse
     */
    public function parseFaceAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $parseFaceReq = new ParseFaceRequest([]);
        Utils::convert($request, $parseFaceReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $parseFaceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->parseFaceWithOptions($parseFaceReq, $runtime);
    }

    /**
     * @param Request - RefineMaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefineMaskResponse
     *
     * @param RefineMaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RefineMaskResponse
     */
    public function refineMaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->maskImageURL) {
            @$body['MaskImageURL'] = $request->maskImageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefineMask',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefineMaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RefineMaskRequest
     *
     * @returns RefineMaskResponse
     *
     * @param RefineMaskRequest $request
     *
     * @return RefineMaskResponse
     */
    public function refineMask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refineMaskWithOptions($request, $runtime);
    }

    /**
     * @param RefineMaskAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RefineMaskResponse
     */
    public function refineMaskAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $refineMaskReq = new RefineMaskRequest([]);
        Utils::convert($request, $refineMaskReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $refineMaskReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->maskImageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->maskImageURLObject,
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
            $refineMaskReq->maskImageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->refineMaskWithOptions($refineMaskReq, $runtime);
    }

    /**
     * @param Request - SegmentBodyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentBodyResponse
     *
     * @param SegmentBodyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentBodyResponse
     */
    public function segmentBodyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentBody',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentBodyRequest
     *
     * @returns SegmentBodyResponse
     *
     * @param SegmentBodyRequest $request
     *
     * @return SegmentBodyResponse
     */
    public function segmentBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentBodyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentBodyAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentBodyResponse
     */
    public function segmentBodyAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentBodyReq = new SegmentBodyRequest([]);
        Utils::convert($request, $segmentBodyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentBodyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentBodyWithOptions($segmentBodyReq, $runtime);
    }

    /**
     * @param Request - SegmentClothRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentClothResponse
     *
     * @param SegmentClothRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SegmentClothResponse
     */
    public function segmentClothWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clothClass) {
            @$query['ClothClass'] = $request->clothClass;
        }

        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->outMode) {
            @$query['OutMode'] = $request->outMode;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentCloth',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentClothResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentClothRequest
     *
     * @returns SegmentClothResponse
     *
     * @param SegmentClothRequest $request
     *
     * @return SegmentClothResponse
     */
    public function segmentCloth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentClothWithOptions($request, $runtime);
    }

    /**
     * @param SegmentClothAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SegmentClothResponse
     */
    public function segmentClothAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentClothReq = new SegmentClothRequest([]);
        Utils::convert($request, $segmentClothReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentClothReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentClothWithOptions($segmentClothReq, $runtime);
    }

    /**
     * @param Request - SegmentCommodityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentCommodityResponse
     *
     * @param SegmentCommodityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentCommodity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentCommodityRequest
     *
     * @returns SegmentCommodityResponse
     *
     * @param SegmentCommodityRequest $request
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentCommodityWithOptions($request, $runtime);
    }

    /**
     * @param SegmentCommodityAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodityAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentCommodityReq = new SegmentCommodityRequest([]);
        Utils::convert($request, $segmentCommodityReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentCommodityReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentCommodityWithOptions($segmentCommodityReq, $runtime);
    }

    /**
     * @param Request - SegmentCommonImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentCommonImageResponse
     *
     * @param SegmentCommonImageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentCommonImageResponse
     */
    public function segmentCommonImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentCommonImage',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentCommonImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentCommonImageRequest
     *
     * @returns SegmentCommonImageResponse
     *
     * @param SegmentCommonImageRequest $request
     *
     * @return SegmentCommonImageResponse
     */
    public function segmentCommonImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentCommonImageWithOptions($request, $runtime);
    }

    /**
     * @param SegmentCommonImageAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SegmentCommonImageResponse
     */
    public function segmentCommonImageAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentCommonImageReq = new SegmentCommonImageRequest([]);
        Utils::convert($request, $segmentCommonImageReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentCommonImageReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentCommonImageWithOptions($segmentCommonImageReq, $runtime);
    }

    /**
     * @param Request - SegmentFoodRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentFoodResponse
     *
     * @param SegmentFoodRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentFoodResponse
     */
    public function segmentFoodWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentFood',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentFoodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentFoodRequest
     *
     * @returns SegmentFoodResponse
     *
     * @param SegmentFoodRequest $request
     *
     * @return SegmentFoodResponse
     */
    public function segmentFood($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentFoodWithOptions($request, $runtime);
    }

    /**
     * @param SegmentFoodAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentFoodResponse
     */
    public function segmentFoodAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentFoodReq = new SegmentFoodRequest([]);
        Utils::convert($request, $segmentFoodReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentFoodReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentFoodWithOptions($segmentFoodReq, $runtime);
    }

    /**
     * @param Request - SegmentHDBodyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentHDBodyResponse
     *
     * @param SegmentHDBodyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SegmentHDBodyResponse
     */
    public function segmentHDBodyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentHDBody',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentHDBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentHDBodyRequest
     *
     * @returns SegmentHDBodyResponse
     *
     * @param SegmentHDBodyRequest $request
     *
     * @return SegmentHDBodyResponse
     */
    public function segmentHDBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHDBodyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHDBodyAdvanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SegmentHDBodyResponse
     */
    public function segmentHDBodyAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentHDBodyReq = new SegmentHDBodyRequest([]);
        Utils::convert($request, $segmentHDBodyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentHDBodyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentHDBodyWithOptions($segmentHDBodyReq, $runtime);
    }

    /**
     * @param Request - SegmentHDCommonImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentHDCommonImageResponse
     *
     * @param SegmentHDCommonImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SegmentHDCommonImageResponse
     */
    public function segmentHDCommonImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SegmentHDCommonImage',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentHDCommonImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentHDCommonImageRequest
     *
     * @returns SegmentHDCommonImageResponse
     *
     * @param SegmentHDCommonImageRequest $request
     *
     * @return SegmentHDCommonImageResponse
     */
    public function segmentHDCommonImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHDCommonImageWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHDCommonImageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SegmentHDCommonImageResponse
     */
    public function segmentHDCommonImageAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentHDCommonImageReq = new SegmentHDCommonImageRequest([]);
        Utils::convert($request, $segmentHDCommonImageReq);
        if (null !== $request->imageUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageUrlObject,
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
            $segmentHDCommonImageReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentHDCommonImageWithOptions($segmentHDCommonImageReq, $runtime);
    }

    /**
     * @param Request - SegmentHDSkyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentHDSkyResponse
     *
     * @param SegmentHDSkyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SegmentHDSkyResponse
     */
    public function segmentHDSkyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SegmentHDSky',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentHDSkyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentHDSkyRequest
     *
     * @returns SegmentHDSkyResponse
     *
     * @param SegmentHDSkyRequest $request
     *
     * @return SegmentHDSkyResponse
     */
    public function segmentHDSky($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHDSkyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHDSkyAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SegmentHDSkyResponse
     */
    public function segmentHDSkyAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentHDSkyReq = new SegmentHDSkyRequest([]);
        Utils::convert($request, $segmentHDSkyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentHDSkyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentHDSkyWithOptions($segmentHDSkyReq, $runtime);
    }

    /**
     * @param Request - SegmentHairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentHairResponse
     *
     * @param SegmentHairRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentHairResponse
     */
    public function segmentHairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentHair',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentHairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentHairRequest
     *
     * @returns SegmentHairResponse
     *
     * @param SegmentHairRequest $request
     *
     * @return SegmentHairResponse
     */
    public function segmentHair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHairWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHairAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentHairResponse
     */
    public function segmentHairAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentHairReq = new SegmentHairRequest([]);
        Utils::convert($request, $segmentHairReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentHairReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentHairWithOptions($segmentHairReq, $runtime);
    }

    /**
     * @param Request - SegmentHeadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentHeadResponse
     *
     * @param SegmentHeadRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentHeadResponse
     */
    public function segmentHeadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->returnForm) {
            @$query['ReturnForm'] = $request->returnForm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentHead',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentHeadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentHeadRequest
     *
     * @returns SegmentHeadResponse
     *
     * @param SegmentHeadRequest $request
     *
     * @return SegmentHeadResponse
     */
    public function segmentHead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentHeadWithOptions($request, $runtime);
    }

    /**
     * @param SegmentHeadAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentHeadResponse
     */
    public function segmentHeadAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentHeadReq = new SegmentHeadRequest([]);
        Utils::convert($request, $segmentHeadReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentHeadReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentHeadWithOptions($segmentHeadReq, $runtime);
    }

    /**
     * 皮肤分割.
     *
     * @param Request - SegmentSkinRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentSkinResponse
     *
     * @param SegmentSkinRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SegmentSkinResponse
     */
    public function segmentSkinWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->URL) {
            @$body['URL'] = $request->URL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SegmentSkin',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentSkinResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 皮肤分割.
     *
     * @param Request - SegmentSkinRequest
     *
     * @returns SegmentSkinResponse
     *
     * @param SegmentSkinRequest $request
     *
     * @return SegmentSkinResponse
     */
    public function segmentSkin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentSkinWithOptions($request, $runtime);
    }

    /**
     * @param SegmentSkinAdvanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SegmentSkinResponse
     */
    public function segmentSkinAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentSkinReq = new SegmentSkinRequest([]);
        Utils::convert($request, $segmentSkinReq);
        if (null !== $request->URLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->URLObject,
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
            $segmentSkinReq->URL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentSkinWithOptions($segmentSkinReq, $runtime);
    }

    /**
     * @param Request - SegmentSkyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SegmentSkyResponse
     *
     * @param SegmentSkyRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SegmentSkyResponse
     */
    public function segmentSkyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SegmentSky',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SegmentSkyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - SegmentSkyRequest
     *
     * @returns SegmentSkyResponse
     *
     * @param SegmentSkyRequest $request
     *
     * @return SegmentSkyResponse
     */
    public function segmentSky($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->segmentSkyWithOptions($request, $runtime);
    }

    /**
     * @param SegmentSkyAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SegmentSkyResponse
     */
    public function segmentSkyAdvance($request, $runtime)
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
            'Product' => 'imageseg',
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
        $segmentSkyReq = new SegmentSkyRequest([]);
        Utils::convert($request, $segmentSkyReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
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
            $segmentSkyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->segmentSkyWithOptions($segmentSkyReq, $runtime);
    }
}
