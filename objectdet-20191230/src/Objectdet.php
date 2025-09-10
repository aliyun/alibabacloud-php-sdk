<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectIPCObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectKitchenAnimalsResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectMainBodyResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVideoIPCObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearResponse;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearShrinkRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\GetAsyncJobResultResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Objectdet extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('objectdet', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * IPC目标检测.
     *
     * @param Request - DetectIPCObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectIPCObjectResponse
     *
     * @param DetectIPCObjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectIPCObjectResponse
     */
    public function detectIPCObjectWithOptions($request, $runtime)
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
            'action' => 'DetectIPCObject',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectIPCObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * IPC目标检测.
     *
     * @param Request - DetectIPCObjectRequest
     *
     * @returns DetectIPCObjectResponse
     *
     * @param DetectIPCObjectRequest $request
     *
     * @return DetectIPCObjectResponse
     */
    public function detectIPCObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectIPCObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectIPCObjectAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectIPCObjectResponse
     */
    public function detectIPCObjectAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectIPCObjectReq = new DetectIPCObjectRequest([]);
        Utils::convert($request, $detectIPCObjectReq);
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
            $detectIPCObjectReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectIPCObjectWithOptions($detectIPCObjectReq, $runtime);
    }

    /**
     * 猫鼠识别.
     *
     * @param Request - DetectKitchenAnimalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectKitchenAnimalsResponse
     *
     * @param DetectKitchenAnimalsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimalsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURLA) {
            @$body['ImageURLA'] = $request->imageURLA;
        }

        if (null !== $request->imageURLB) {
            @$body['ImageURLB'] = $request->imageURLB;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectKitchenAnimals',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectKitchenAnimalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 猫鼠识别.
     *
     * @param Request - DetectKitchenAnimalsRequest
     *
     * @returns DetectKitchenAnimalsResponse
     *
     * @param DetectKitchenAnimalsRequest $request
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectKitchenAnimalsWithOptions($request, $runtime);
    }

    /**
     * @param DetectKitchenAnimalsAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectKitchenAnimalsResponse
     */
    public function detectKitchenAnimalsAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectKitchenAnimalsReq = new DetectKitchenAnimalsRequest([]);
        Utils::convert($request, $detectKitchenAnimalsReq);
        if (null !== $request->imageURLAObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLAObject,
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
            $detectKitchenAnimalsReq->imageURLA = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        if (null !== $request->imageURLBObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLBObject,
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
            $detectKitchenAnimalsReq->imageURLB = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectKitchenAnimalsWithOptions($detectKitchenAnimalsReq, $runtime);
    }

    /**
     * @param Request - DetectMainBodyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectMainBodyResponse
     *
     * @param DetectMainBodyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyWithOptions($request, $runtime)
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
            'action' => 'DetectMainBody',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectMainBodyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectMainBodyRequest
     *
     * @returns DetectMainBodyResponse
     *
     * @param DetectMainBodyRequest $request
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBody($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectMainBodyWithOptions($request, $runtime);
    }

    /**
     * @param DetectMainBodyAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectMainBodyReq = new DetectMainBodyRequest([]);
        Utils::convert($request, $detectMainBodyReq);
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
            $detectMainBodyReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectMainBodyWithOptions($detectMainBodyReq, $runtime);
    }

    /**
     * @param Request - DetectObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectObjectResponse
     *
     * @param DetectObjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetectObjectResponse
     */
    public function detectObjectWithOptions($request, $runtime)
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
            'action' => 'DetectObject',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectObjectRequest
     *
     * @returns DetectObjectResponse
     *
     * @param DetectObjectRequest $request
     *
     * @return DetectObjectResponse
     */
    public function detectObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectObjectAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectObjectResponse
     */
    public function detectObjectAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectObjectReq = new DetectObjectRequest([]);
        Utils::convert($request, $detectObjectReq);
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
            $detectObjectReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectObjectWithOptions($detectObjectReq, $runtime);
    }

    /**
     * 车辆拥堵检测.
     *
     * @param tmpReq - DetectVehicleICongestionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVehicleICongestionResponse
     *
     * @param DetectVehicleICongestionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DetectVehicleICongestionResponse
     */
    public function detectVehicleICongestionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectVehicleICongestionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->preRegionIntersectFeatures) {
            $request->preRegionIntersectFeaturesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->preRegionIntersectFeatures, 'PreRegionIntersectFeatures', 'json');
        }

        if (null !== $tmpReq->roadRegions) {
            $request->roadRegionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roadRegions, 'RoadRegions', 'json');
        }

        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->preRegionIntersectFeaturesShrink) {
            @$body['PreRegionIntersectFeatures'] = $request->preRegionIntersectFeaturesShrink;
        }

        if (null !== $request->roadRegionsShrink) {
            @$body['RoadRegions'] = $request->roadRegionsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectVehicleICongestion',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVehicleICongestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 车辆拥堵检测.
     *
     * @param Request - DetectVehicleICongestionRequest
     *
     * @returns DetectVehicleICongestionResponse
     *
     * @param DetectVehicleICongestionRequest $request
     *
     * @return DetectVehicleICongestionResponse
     */
    public function detectVehicleICongestion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVehicleICongestionWithOptions($request, $runtime);
    }

    /**
     * @param DetectVehicleICongestionAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DetectVehicleICongestionResponse
     */
    public function detectVehicleICongestionAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectVehicleICongestionReq = new DetectVehicleICongestionRequest([]);
        Utils::convert($request, $detectVehicleICongestionReq);
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
            $detectVehicleICongestionReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectVehicleICongestionWithOptions($detectVehicleICongestionReq, $runtime);
    }

    /**
     * 车辆违停检测.
     *
     * @param tmpReq - DetectVehicleIllegalParkingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVehicleIllegalParkingResponse
     *
     * @param DetectVehicleIllegalParkingRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectVehicleIllegalParkingResponse
     */
    public function detectVehicleIllegalParkingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectVehicleIllegalParkingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roadRegions) {
            $request->roadRegionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roadRegions, 'RoadRegions', 'json');
        }

        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->roadRegionsShrink) {
            @$body['RoadRegions'] = $request->roadRegionsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectVehicleIllegalParking',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVehicleIllegalParkingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 车辆违停检测.
     *
     * @param Request - DetectVehicleIllegalParkingRequest
     *
     * @returns DetectVehicleIllegalParkingResponse
     *
     * @param DetectVehicleIllegalParkingRequest $request
     *
     * @return DetectVehicleIllegalParkingResponse
     */
    public function detectVehicleIllegalParking($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVehicleIllegalParkingWithOptions($request, $runtime);
    }

    /**
     * @param DetectVehicleIllegalParkingAdvanceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DetectVehicleIllegalParkingResponse
     */
    public function detectVehicleIllegalParkingAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectVehicleIllegalParkingReq = new DetectVehicleIllegalParkingRequest([]);
        Utils::convert($request, $detectVehicleIllegalParkingReq);
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
            $detectVehicleIllegalParkingReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectVehicleIllegalParkingWithOptions($detectVehicleIllegalParkingReq, $runtime);
    }

    /**
     * IPC视频文件目标检测.
     *
     * @param Request - DetectVideoIPCObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVideoIPCObjectResponse
     *
     * @param DetectVideoIPCObjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->callbackOnlyHasObject) {
            @$body['CallbackOnlyHasObject'] = $request->callbackOnlyHasObject;
        }

        if (null !== $request->startTimestamp) {
            @$body['StartTimestamp'] = $request->startTimestamp;
        }

        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectVideoIPCObject',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVideoIPCObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * IPC视频文件目标检测.
     *
     * @param Request - DetectVideoIPCObjectRequest
     *
     * @returns DetectVideoIPCObjectResponse
     *
     * @param DetectVideoIPCObjectRequest $request
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoIPCObjectWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoIPCObjectAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectVideoIPCObjectResponse
     */
    public function detectVideoIPCObjectAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectVideoIPCObjectReq = new DetectVideoIPCObjectRequest([]);
        Utils::convert($request, $detectVideoIPCObjectReq);
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
            $detectVideoIPCObjectReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectVideoIPCObjectWithOptions($detectVideoIPCObjectReq, $runtime);
    }

    /**
     * @param Request - DetectWhiteBaseImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectWhiteBaseImageResponse
     *
     * @param DetectWhiteBaseImageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImageWithOptions($request, $runtime)
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
            'action' => 'DetectWhiteBaseImage',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectWhiteBaseImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectWhiteBaseImageRequest
     *
     * @returns DetectWhiteBaseImageResponse
     *
     * @param DetectWhiteBaseImageRequest $request
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectWhiteBaseImageWithOptions($request, $runtime);
    }

    /**
     * @param DetectWhiteBaseImageAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImageAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectWhiteBaseImageReq = new DetectWhiteBaseImageRequest([]);
        Utils::convert($request, $detectWhiteBaseImageReq);
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
            $detectWhiteBaseImageReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectWhiteBaseImageWithOptions($detectWhiteBaseImageReq, $runtime);
    }

    /**
     * 着装检测.
     *
     * @param tmpReq - DetectWorkwearRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectWorkwearResponse
     *
     * @param DetectWorkwearRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwearWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetectWorkwearShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clothes) {
            $request->clothesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clothes, 'Clothes', 'json');
        }

        $body = [];
        if (null !== $request->clothesShrink) {
            @$body['Clothes'] = $request->clothesShrink;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetectWorkwear',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectWorkwearResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 着装检测.
     *
     * @param Request - DetectWorkwearRequest
     *
     * @returns DetectWorkwearResponse
     *
     * @param DetectWorkwearRequest $request
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwear($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectWorkwearWithOptions($request, $runtime);
    }

    /**
     * @param DetectWorkwearAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetectWorkwearResponse
     */
    public function detectWorkwearAdvance($request, $runtime)
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
            'Product' => 'objectdet',
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
        $detectWorkwearReq = new DetectWorkwearRequest([]);
        Utils::convert($request, $detectWorkwearReq);
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
            $detectWorkwearReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectWorkwearWithOptions($detectWorkwearReq, $runtime);
    }

    /**
     * 查询异步任务结果.
     *
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
     * 查询异步任务结果.
     *
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
}
