<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320;

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
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\DetectVideoShotResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\RecognizeVideoCastCrewListShrinkRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponse;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentAdvanceRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentRequest;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Videorecog extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('videorecog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param Request - DetectVideoShotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetectVideoShotResponse
     *
     * @param DetectVideoShotRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotWithOptions($request, $runtime)
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
            'action' => 'DetectVideoShot',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetectVideoShotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - DetectVideoShotRequest
     *
     * @returns DetectVideoShotResponse
     *
     * @param DetectVideoShotRequest $request
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectVideoShotWithOptions($request, $runtime);
    }

    /**
     * @param DetectVideoShotAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetectVideoShotResponse
     */
    public function detectVideoShotAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $detectVideoShotReq = new DetectVideoShotRequest([]);
        Utils::convert($request, $detectVideoShotReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $detectVideoShotReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->detectVideoShotWithOptions($detectVideoShotReq, $runtime);
    }

    /**
     * 视频质量评估.
     *
     * @param Request - EvaluateVideoQualityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvaluateVideoQualityResponse
     *
     * @param EvaluateVideoQualityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQualityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EvaluateVideoQuality',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EvaluateVideoQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频质量评估.
     *
     * @param Request - EvaluateVideoQualityRequest
     *
     * @returns EvaluateVideoQualityResponse
     *
     * @param EvaluateVideoQualityRequest $request
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->evaluateVideoQualityWithOptions($request, $runtime);
    }

    /**
     * @param EvaluateVideoQualityAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return EvaluateVideoQualityResponse
     */
    public function evaluateVideoQualityAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $evaluateVideoQualityReq = new EvaluateVideoQualityRequest([]);
        Utils::convert($request, $evaluateVideoQualityReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $evaluateVideoQualityReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->evaluateVideoQualityWithOptions($evaluateVideoQualityReq, $runtime);
    }

    /**
     * @param Request - GenerateVideoCoverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateVideoCoverResponse
     *
     * @param GenerateVideoCoverRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isGif) {
            @$body['IsGif'] = $request->isGif;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateVideoCover',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateVideoCoverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GenerateVideoCoverRequest
     *
     * @returns GenerateVideoCoverResponse
     *
     * @param GenerateVideoCoverRequest $request
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCover($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateVideoCoverWithOptions($request, $runtime);
    }

    /**
     * @param GenerateVideoCoverAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateVideoCoverResponse
     */
    public function generateVideoCoverAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $generateVideoCoverReq = new GenerateVideoCoverRequest([]);
        Utils::convert($request, $generateVideoCoverReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $generateVideoCoverReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->generateVideoCoverWithOptions($generateVideoCoverReq, $runtime);
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
     * 视频OCR.
     *
     * @param tmpReq - RecognizeVideoCastCrewListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeVideoCastCrewListResponse
     *
     * @param RecognizeVideoCastCrewListRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeVideoCastCrewListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeVideoCastCrewList',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeVideoCastCrewListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频OCR.
     *
     * @param Request - RecognizeVideoCastCrewListRequest
     *
     * @returns RecognizeVideoCastCrewListResponse
     *
     * @param RecognizeVideoCastCrewListRequest $request
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeVideoCastCrewListWithOptions($request, $runtime);
    }

    /**
     * @param RecognizeVideoCastCrewListAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RecognizeVideoCastCrewListResponse
     */
    public function recognizeVideoCastCrewListAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $recognizeVideoCastCrewListReq = new RecognizeVideoCastCrewListRequest([]);
        Utils::convert($request, $recognizeVideoCastCrewListReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $recognizeVideoCastCrewListReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->recognizeVideoCastCrewListWithOptions($recognizeVideoCastCrewListReq, $runtime);
    }

    /**
     * 视频拆条
     *
     * @param Request - SplitVideoPartsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SplitVideoPartsResponse
     *
     * @param SplitVideoPartsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoPartsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxTime) {
            @$body['MaxTime'] = $request->maxTime;
        }

        if (null !== $request->minTime) {
            @$body['MinTime'] = $request->minTime;
        }

        if (null !== $request->template) {
            @$body['Template'] = $request->template;
        }

        if (null !== $request->videoUrl) {
            @$body['VideoUrl'] = $request->videoUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SplitVideoParts',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SplitVideoPartsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频拆条
     *
     * @param Request - SplitVideoPartsRequest
     *
     * @returns SplitVideoPartsResponse
     *
     * @param SplitVideoPartsRequest $request
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoParts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->splitVideoPartsWithOptions($request, $runtime);
    }

    /**
     * @param SplitVideoPartsAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SplitVideoPartsResponse
     */
    public function splitVideoPartsAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $splitVideoPartsReq = new SplitVideoPartsRequest([]);
        Utils::convert($request, $splitVideoPartsReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $splitVideoPartsReq->videoUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->splitVideoPartsWithOptions($splitVideoPartsReq, $runtime);
    }

    /**
     * 视频内容理解.
     *
     * @param Request - UnderstandVideoContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnderstandVideoContentResponse
     *
     * @param UnderstandVideoContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContentWithOptions($request, $runtime)
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
            'action' => 'UnderstandVideoContent',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnderstandVideoContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频内容理解.
     *
     * @param Request - UnderstandVideoContentRequest
     *
     * @returns UnderstandVideoContentResponse
     *
     * @param UnderstandVideoContentRequest $request
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->understandVideoContentWithOptions($request, $runtime);
    }

    /**
     * @param UnderstandVideoContentAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UnderstandVideoContentResponse
     */
    public function understandVideoContentAdvance($request, $runtime)
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
            'Product' => 'videorecog',
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
        $understandVideoContentReq = new UnderstandVideoContentRequest([]);
        Utils::convert($request, $understandVideoContentReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $understandVideoContentReq->videoURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->understandVideoContentWithOptions($understandVideoContentReq, $runtime);
    }
}
