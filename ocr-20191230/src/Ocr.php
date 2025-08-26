<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Ocr\V20191230\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBankCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQuotaInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTrainTicketResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVideoCharacterResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVINCodeResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ocr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ocr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param Request - RecognizeBankCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBankCardResponse
     *
     * @param RecognizeBankCardRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardWithOptions($request, $runtime)
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
            'action' => 'RecognizeBankCard',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBankCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeBankCardRequest
     *
     * @returns RecognizeBankCardResponse
     *
     * @param RecognizeBankCardRequest $request
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBankCardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBankCardAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeBankCardReq = new RecognizeBankCardRequest([]);
        Utils::convert($request, $recognizeBankCardReq);
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
            $recognizeBankCardReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeBankCardWithOptions($recognizeBankCardReq, $runtime);
    }

    /**
     * @param Request - RecognizeBusinessLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeBusinessLicenseResponse
     *
     * @param RecognizeBusinessLicenseRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseWithOptions($request, $runtime)
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
            'action' => 'RecognizeBusinessLicense',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeBusinessLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeBusinessLicenseRequest
     *
     * @returns RecognizeBusinessLicenseResponse
     *
     * @param RecognizeBusinessLicenseRequest $request
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeBusinessLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeBusinessLicenseAdvanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeBusinessLicenseReq = new RecognizeBusinessLicenseRequest([]);
        Utils::convert($request, $recognizeBusinessLicenseReq);
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
            $recognizeBusinessLicenseReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeBusinessLicenseWithOptions($recognizeBusinessLicenseReq, $runtime);
    }

    /**
     * @param Request - RecognizeCharacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeCharacterResponse
     *
     * @param RecognizeCharacterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->minHeight) {
            @$body['MinHeight'] = $request->minHeight;
        }

        if (null !== $request->outputProbability) {
            @$body['OutputProbability'] = $request->outputProbability;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeCharacter',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeCharacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeCharacterRequest
     *
     * @returns RecognizeCharacterResponse
     *
     * @param RecognizeCharacterRequest $request
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeCharacterWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeCharacterAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacterAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeCharacterReq = new RecognizeCharacterRequest([]);
        Utils::convert($request, $recognizeCharacterReq);
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
            $recognizeCharacterReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeCharacterWithOptions($recognizeCharacterReq, $runtime);
    }

    /**
     * @param Request - RecognizeDriverLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeDriverLicenseResponse
     *
     * @param RecognizeDriverLicenseRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->side) {
            @$body['Side'] = $request->side;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeDriverLicense',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeDriverLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeDriverLicenseRequest
     *
     * @returns RecognizeDriverLicenseResponse
     *
     * @param RecognizeDriverLicenseRequest $request
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDriverLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeDriverLicenseAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicenseAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeDriverLicenseReq = new RecognizeDriverLicenseRequest([]);
        Utils::convert($request, $recognizeDriverLicenseReq);
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
            $recognizeDriverLicenseReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeDriverLicenseWithOptions($recognizeDriverLicenseReq, $runtime);
    }

    /**
     * @param Request - RecognizeDrivingLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeDrivingLicenseResponse
     *
     * @param RecognizeDrivingLicenseRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->side) {
            @$body['Side'] = $request->side;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeDrivingLicense',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeDrivingLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeDrivingLicenseRequest
     *
     * @returns RecognizeDrivingLicenseResponse
     *
     * @param RecognizeDrivingLicenseRequest $request
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeDrivingLicenseWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeDrivingLicenseAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeDrivingLicenseReq = new RecognizeDrivingLicenseRequest([]);
        Utils::convert($request, $recognizeDrivingLicenseReq);
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
            $recognizeDrivingLicenseReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeDrivingLicenseWithOptions($recognizeDrivingLicenseReq, $runtime);
    }

    /**
     * @param Request - RecognizeIdentityCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeIdentityCardResponse
     *
     * @param RecognizeIdentityCardRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCardWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->side) {
            @$body['Side'] = $request->side;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeIdentityCard',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeIdentityCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeIdentityCardRequest
     *
     * @returns RecognizeIdentityCardResponse
     *
     * @param RecognizeIdentityCardRequest $request
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeIdentityCardWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeIdentityCardAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCardAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeIdentityCardReq = new RecognizeIdentityCardRequest([]);
        Utils::convert($request, $recognizeIdentityCardReq);
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
            $recognizeIdentityCardReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeIdentityCardWithOptions($recognizeIdentityCardReq, $runtime);
    }

    /**
     * @param Request - RecognizeLicensePlateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeLicensePlateResponse
     *
     * @param RecognizeLicensePlateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlateWithOptions($request, $runtime)
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
            'action' => 'RecognizeLicensePlate',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeLicensePlateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeLicensePlateRequest
     *
     * @returns RecognizeLicensePlateResponse
     *
     * @param RecognizeLicensePlateRequest $request
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeLicensePlateWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeLicensePlateAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlateAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeLicensePlateReq = new RecognizeLicensePlateRequest([]);
        Utils::convert($request, $recognizeLicensePlateReq);
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
            $recognizeLicensePlateReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeLicensePlateWithOptions($recognizeLicensePlateReq, $runtime);
    }

    /**
     * PDF识别.
     *
     * @param Request - RecognizePdfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizePdfResponse
     *
     * @param RecognizePdfRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecognizePdfResponse
     */
    public function recognizePdfWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileURL) {
            @$body['FileURL'] = $request->fileURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizePdf',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizePdfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PDF识别.
     *
     * @param Request - RecognizePdfRequest
     *
     * @returns RecognizePdfResponse
     *
     * @param RecognizePdfRequest $request
     *
     * @return RecognizePdfResponse
     */
    public function recognizePdf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizePdfWithOptions($request, $runtime);
    }

    /**
     * @param RecognizePdfAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizePdfResponse
     */
    public function recognizePdfAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizePdfReq = new RecognizePdfRequest([]);
        Utils::convert($request, $recognizePdfReq);
        if (null !== $request->fileURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileURLObject,
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
            $recognizePdfReq->fileURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizePdfWithOptions($recognizePdfReq, $runtime);
    }

    /**
     * @param Request - RecognizeQrCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeQrCodeResponse
     *
     * @param RecognizeQrCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RecognizeQrCodeResponse
     */
    public function recognizeQrCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tasks) {
            @$body['Tasks'] = $request->tasks;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeQrCode',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeQrCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeQrCodeRequest
     *
     * @returns RecognizeQrCodeResponse
     *
     * @param RecognizeQrCodeRequest $request
     *
     * @return RecognizeQrCodeResponse
     */
    public function recognizeQrCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeQrCodeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeQrCodeAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeQrCodeResponse
     */
    public function recognizeQrCodeAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeQrCodeReq = new RecognizeQrCodeRequest([]);
        Utils::convert($request, $recognizeQrCodeReq);
        if (null !== $request->tasks) {
            $i0 = 0;

            foreach ($request->tasks as $item0) {
                if (null !== $item0->imageURLObject) {
                    $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
                    $tmpBody = @$authResponse['body'];
                    $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
                    $authResponseBody = Utils::stringifyMapValue($tmpBody);
                    $fileObj = new FileField([
                        'filename' => @$authResponseBody['ObjectKey'],
                        'content' => $item0->imageURLObject,
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
                    $tmpObj = @$recognizeQrCodeReq->tasks[$i0];
                    $tmpObj->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
                    ++$i0;
                }
            }
        }

        return $this->recognizeQrCodeWithOptions($recognizeQrCodeReq, $runtime);
    }

    /**
     * 定额发票识别.
     *
     * @param Request - RecognizeQuotaInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeQuotaInvoiceResponse
     *
     * @param RecognizeQuotaInvoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceWithOptions($request, $runtime)
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
            'action' => 'RecognizeQuotaInvoice',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeQuotaInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 定额发票识别.
     *
     * @param Request - RecognizeQuotaInvoiceRequest
     *
     * @returns RecognizeQuotaInvoiceResponse
     *
     * @param RecognizeQuotaInvoiceRequest $request
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeQuotaInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeQuotaInvoiceAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RecognizeQuotaInvoiceResponse
     */
    public function recognizeQuotaInvoiceAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeQuotaInvoiceReq = new RecognizeQuotaInvoiceRequest([]);
        Utils::convert($request, $recognizeQuotaInvoiceReq);
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
            $recognizeQuotaInvoiceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeQuotaInvoiceWithOptions($recognizeQuotaInvoiceReq, $runtime);
    }

    /**
     * @param Request - RecognizeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTableResponse
     *
     * @param RecognizeTableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assureDirection) {
            @$body['AssureDirection'] = $request->assureDirection;
        }

        if (null !== $request->hasLine) {
            @$body['HasLine'] = $request->hasLine;
        }

        if (null !== $request->imageURL) {
            @$body['ImageURL'] = $request->imageURL;
        }

        if (null !== $request->outputFormat) {
            @$body['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->skipDetection) {
            @$body['SkipDetection'] = $request->skipDetection;
        }

        if (null !== $request->useFinanceModel) {
            @$body['UseFinanceModel'] = $request->useFinanceModel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeTable',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeTableRequest
     *
     * @returns RecognizeTableResponse
     *
     * @param RecognizeTableRequest $request
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTableWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTableAdvanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTableAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeTableReq = new RecognizeTableRequest([]);
        Utils::convert($request, $recognizeTableReq);
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
            $recognizeTableReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeTableWithOptions($recognizeTableReq, $runtime);
    }

    /**
     * @param Request - RecognizeTaxiInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTaxiInvoiceResponse
     *
     * @param RecognizeTaxiInvoiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceWithOptions($request, $runtime)
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
            'action' => 'RecognizeTaxiInvoice',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTaxiInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeTaxiInvoiceRequest
     *
     * @returns RecognizeTaxiInvoiceResponse
     *
     * @param RecognizeTaxiInvoiceRequest $request
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTaxiInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTaxiInvoiceAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeTaxiInvoiceReq = new RecognizeTaxiInvoiceRequest([]);
        Utils::convert($request, $recognizeTaxiInvoiceReq);
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
            $recognizeTaxiInvoiceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeTaxiInvoiceWithOptions($recognizeTaxiInvoiceReq, $runtime);
    }

    /**
     * 增值税发票卷票.
     *
     * @param Request - RecognizeTicketInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTicketInvoiceResponse
     *
     * @param RecognizeTicketInvoiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RecognizeTicketInvoiceResponse
     */
    public function recognizeTicketInvoiceWithOptions($request, $runtime)
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
            'action' => 'RecognizeTicketInvoice',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTicketInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增值税发票卷票.
     *
     * @param Request - RecognizeTicketInvoiceRequest
     *
     * @returns RecognizeTicketInvoiceResponse
     *
     * @param RecognizeTicketInvoiceRequest $request
     *
     * @return RecognizeTicketInvoiceResponse
     */
    public function recognizeTicketInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTicketInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTicketInvoiceAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RecognizeTicketInvoiceResponse
     */
    public function recognizeTicketInvoiceAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeTicketInvoiceReq = new RecognizeTicketInvoiceRequest([]);
        Utils::convert($request, $recognizeTicketInvoiceReq);
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
            $recognizeTicketInvoiceReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeTicketInvoiceWithOptions($recognizeTicketInvoiceReq, $runtime);
    }

    /**
     * @param Request - RecognizeTrainTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeTrainTicketResponse
     *
     * @param RecognizeTrainTicketRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicketWithOptions($request, $runtime)
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
            'action' => 'RecognizeTrainTicket',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeTrainTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeTrainTicketRequest
     *
     * @returns RecognizeTrainTicketResponse
     *
     * @param RecognizeTrainTicketRequest $request
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeTrainTicketWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeTrainTicketAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicketAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeTrainTicketReq = new RecognizeTrainTicketRequest([]);
        Utils::convert($request, $recognizeTrainTicketReq);
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
            $recognizeTrainTicketReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeTrainTicketWithOptions($recognizeTrainTicketReq, $runtime);
    }

    /**
     * @param Request - RecognizeVATInvoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVATInvoiceResponse
     *
     * @param RecognizeVATInvoiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileType) {
            @$body['FileType'] = $request->fileType;
        }

        if (null !== $request->fileURL) {
            @$body['FileURL'] = $request->fileURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeVATInvoice',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVATInvoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeVATInvoiceRequest
     *
     * @returns RecognizeVATInvoiceResponse
     *
     * @param RecognizeVATInvoiceRequest $request
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVATInvoiceWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVATInvoiceAdvanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoiceAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeVATInvoiceReq = new RecognizeVATInvoiceRequest([]);
        Utils::convert($request, $recognizeVATInvoiceReq);
        if (null !== $request->fileURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileURLObject,
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
            $recognizeVATInvoiceReq->fileURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeVATInvoiceWithOptions($recognizeVATInvoiceReq, $runtime);
    }

    /**
     * @param Request - RecognizeVINCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVINCodeResponse
     *
     * @param RecognizeVINCodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCodeWithOptions($request, $runtime)
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
            'action' => 'RecognizeVINCode',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVINCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - RecognizeVINCodeRequest
     *
     * @returns RecognizeVINCodeResponse
     *
     * @param RecognizeVINCodeRequest $request
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVINCodeWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVINCodeAdvanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCodeAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeVINCodeReq = new RecognizeVINCodeRequest([]);
        Utils::convert($request, $recognizeVINCodeReq);
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
            $recognizeVINCodeReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeVINCodeWithOptions($recognizeVINCodeReq, $runtime);
    }

    /**
     * 通用视频文字识别.
     *
     * @param Request - RecognizeVideoCharacterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVideoCharacterResponse
     *
     * @param RecognizeVideoCharacterRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecognizeVideoCharacterResponse
     */
    public function recognizeVideoCharacterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->videoURL) {
            @$body['VideoURL'] = $request->videoURL;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeVideoCharacter',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVideoCharacterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用视频文字识别.
     *
     * @param Request - RecognizeVideoCharacterRequest
     *
     * @returns RecognizeVideoCharacterResponse
     *
     * @param RecognizeVideoCharacterRequest $request
     *
     * @return RecognizeVideoCharacterResponse
     */
    public function recognizeVideoCharacter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVideoCharacterWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVideoCharacterAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RecognizeVideoCharacterResponse
     */
    public function recognizeVideoCharacterAdvance($request, $runtime)
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
            'Product' => 'ocr',
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
        $recognizeVideoCharacterReq = new RecognizeVideoCharacterRequest([]);
        Utils::convert($request, $recognizeVideoCharacterReq);
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
            $recognizeVideoCharacterReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeVideoCharacterWithOptions($recognizeVideoCharacterReq, $runtime);
    }
}
