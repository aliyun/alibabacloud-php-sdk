<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012;

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
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateAsyncTranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateAsyncTranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskAdvanceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateImageTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateImageTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetAsyncTranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetAsyncTranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateByVPCRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateByVPCResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageVpcRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageVpcResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDocTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDocTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageDiagnoseRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageDiagnoseResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetImageTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleDiagnoseRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleDiagnoseResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleGenerateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleGenerateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleIntelligenceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTitleIntelligenceResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateImageBatchResultRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateImageBatchResultResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateReportRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateReportResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\OpenAlimtServiceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\OpenAlimtServiceResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateAdvanceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateECommerceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateECommerceResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralVpcRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralVpcResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageBatchRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageBatchResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateSearchRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateSearchResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Alimt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'mt.cn-hangzhou.aliyuncs.com',
            'ap-northeast-1' => 'mt.aliyuncs.com',
            'ap-northeast-2-pop' => 'mt.aliyuncs.com',
            'ap-south-1' => 'mt.aliyuncs.com',
            'ap-southeast-1' => 'mt.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'mt.aliyuncs.com',
            'ap-southeast-3' => 'mt.aliyuncs.com',
            'ap-southeast-5' => 'mt.aliyuncs.com',
            'cn-beijing' => 'mt.aliyuncs.com',
            'cn-beijing-finance-1' => 'mt.aliyuncs.com',
            'cn-beijing-finance-pop' => 'mt.aliyuncs.com',
            'cn-beijing-gov-1' => 'mt.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'mt.aliyuncs.com',
            'cn-chengdu' => 'mt.aliyuncs.com',
            'cn-edge-1' => 'mt.aliyuncs.com',
            'cn-fujian' => 'mt.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'mt.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'mt.aliyuncs.com',
            'cn-hangzhou-finance' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mt.aliyuncs.com',
            'cn-hangzhou-test-306' => 'mt.aliyuncs.com',
            'cn-hongkong' => 'mt.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'mt.aliyuncs.com',
            'cn-huhehaote' => 'mt.aliyuncs.com',
            'cn-north-2-gov-1' => 'mt.aliyuncs.com',
            'cn-qingdao' => 'mt.aliyuncs.com',
            'cn-qingdao-nebula' => 'mt.aliyuncs.com',
            'cn-shanghai' => 'mt.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'mt.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'mt.aliyuncs.com',
            'cn-shanghai-finance-1' => 'mt.aliyuncs.com',
            'cn-shanghai-inner' => 'mt.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mt.aliyuncs.com',
            'cn-shenzhen' => 'mt.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'mt.aliyuncs.com',
            'cn-shenzhen-inner' => 'mt.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'mt.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'mt.aliyuncs.com',
            'cn-wuhan' => 'mt.aliyuncs.com',
            'cn-yushanfang' => 'mt.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'mt.aliyuncs.com',
            'cn-zhangjiakou' => 'mt.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'mt.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'mt.aliyuncs.com',
            'eu-central-1' => 'mt.aliyuncs.com',
            'eu-west-1' => 'mt.aliyuncs.com',
            'eu-west-1-oxs' => 'mt.aliyuncs.com',
            'me-east-1' => 'mt.aliyuncs.com',
            'rus-west-1-pop' => 'mt.aliyuncs.com',
            'us-east-1' => 'mt.aliyuncs.com',
            'us-west-1' => 'mt.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alimt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 大文本异步翻译，支持5000-50000字翻译.
     *
     * @param Request - CreateAsyncTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAsyncTranslateResponse
     *
     * @param CreateAsyncTranslateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAsyncTranslateResponse
     */
    public function createAsyncTranslateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAsyncTranslate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAsyncTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 大文本异步翻译，支持5000-50000字翻译.
     *
     * @param Request - CreateAsyncTranslateRequest
     *
     * @returns CreateAsyncTranslateResponse
     *
     * @param CreateAsyncTranslateRequest $request
     *
     * @return CreateAsyncTranslateResponse
     */
    public function createAsyncTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTranslateWithOptions($request, $runtime);
    }

    /**
     * @param Request - CreateDocTranslateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocTranslateTaskResponse
     *
     * @param CreateDocTranslateTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDocTranslateTaskResponse
     */
    public function createDocTranslateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->callbackUrl) {
            @$body['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDocTranslateTask',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - CreateDocTranslateTaskRequest
     *
     * @returns CreateDocTranslateTaskResponse
     *
     * @param CreateDocTranslateTaskRequest $request
     *
     * @return CreateDocTranslateTaskResponse
     */
    public function createDocTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDocTranslateTaskAdvanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDocTranslateTaskResponse
     */
    public function createDocTranslateTaskAdvance($request, $runtime)
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
            'Product' => 'alimt',
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
        $createDocTranslateTaskReq = new CreateDocTranslateTaskRequest([]);
        Utils::convert($request, $createDocTranslateTaskReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
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
            $createDocTranslateTaskReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->createDocTranslateTaskWithOptions($createDocTranslateTaskReq, $runtime);
    }

    /**
     * 创建图片翻译任务
     *
     * @param Request - CreateImageTranslateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageTranslateTaskResponse
     *
     * @param CreateImageTranslateTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateImageTranslateTaskResponse
     */
    public function createImageTranslateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->urlList) {
            @$body['UrlList'] = $request->urlList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageTranslateTask',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建图片翻译任务
     *
     * @param Request - CreateImageTranslateTaskRequest
     *
     * @returns CreateImageTranslateTaskResponse
     *
     * @param CreateImageTranslateTaskRequest $request
     *
     * @return CreateImageTranslateTaskResponse
     */
    public function createImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * 大文本异步翻译，支持5000-50000字翻译.
     *
     * @param Request - GetAsyncTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncTranslateResponse
     *
     * @param GetAsyncTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAsyncTranslateResponse
     */
    public function getAsyncTranslateWithOptions($request, $runtime)
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
            'action' => 'GetAsyncTranslate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 大文本异步翻译，支持5000-50000字翻译.
     *
     * @param Request - GetAsyncTranslateRequest
     *
     * @returns GetAsyncTranslateResponse
     *
     * @param GetAsyncTranslateRequest $request
     *
     * @return GetAsyncTranslateResponse
     */
    public function getAsyncTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncTranslateWithOptions($request, $runtime);
    }

    /**
     * 批量文本翻译.
     *
     * @param Request - GetBatchTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchTranslateResponse
     *
     * @param GetBatchTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBatchTranslateResponse
     */
    public function getBatchTranslateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetBatchTranslate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBatchTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量文本翻译.
     *
     * @param Request - GetBatchTranslateRequest
     *
     * @returns GetBatchTranslateResponse
     *
     * @param GetBatchTranslateRequest $request
     *
     * @return GetBatchTranslateResponse
     */
    public function getBatchTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTranslateWithOptions($request, $runtime);
    }

    /**
     * GetBatchTranslateByVPC.
     *
     * @param Request - GetBatchTranslateByVPCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBatchTranslateByVPCResponse
     *
     * @param GetBatchTranslateByVPCRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetBatchTranslateByVPCResponse
     */
    public function getBatchTranslateByVPCWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetBatchTranslateByVPC',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBatchTranslateByVPCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetBatchTranslateByVPC.
     *
     * @param Request - GetBatchTranslateByVPCRequest
     *
     * @returns GetBatchTranslateByVPCResponse
     *
     * @param GetBatchTranslateByVPCRequest $request
     *
     * @return GetBatchTranslateByVPCResponse
     */
    public function getBatchTranslateByVPC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTranslateByVPCWithOptions($request, $runtime);
    }

    /**
     * 语种识别.
     *
     * @param Request - GetDetectLanguageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetectLanguageResponse
     *
     * @param GetDetectLanguageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDetectLanguageResponse
     */
    public function getDetectLanguageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDetectLanguage',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDetectLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 语种识别.
     *
     * @param Request - GetDetectLanguageRequest
     *
     * @returns GetDetectLanguageResponse
     *
     * @param GetDetectLanguageRequest $request
     *
     * @return GetDetectLanguageResponse
     */
    public function getDetectLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectLanguageWithOptions($request, $runtime);
    }

    /**
     * 语种识别.
     *
     * @param Request - GetDetectLanguageVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDetectLanguageVpcResponse
     *
     * @param GetDetectLanguageVpcRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDetectLanguageVpcResponse
     */
    public function getDetectLanguageVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDetectLanguageVpc',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDetectLanguageVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 语种识别.
     *
     * @param Request - GetDetectLanguageVpcRequest
     *
     * @returns GetDetectLanguageVpcResponse
     *
     * @param GetDetectLanguageVpcRequest $request
     *
     * @return GetDetectLanguageVpcResponse
     */
    public function getDetectLanguageVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectLanguageVpcWithOptions($request, $runtime);
    }

    /**
     * 获取文档翻译任务
     *
     * @param Request - GetDocTranslateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocTranslateTaskResponse
     *
     * @param GetDocTranslateTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDocTranslateTaskResponse
     */
    public function getDocTranslateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocTranslateTask',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文档翻译任务
     *
     * @param Request - GetDocTranslateTaskRequest
     *
     * @returns GetDocTranslateTaskResponse
     *
     * @param GetDocTranslateTaskRequest $request
     *
     * @return GetDocTranslateTaskResponse
     */
    public function getDocTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * @param Request - GetImageDiagnoseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageDiagnoseResponse
     *
     * @param GetImageDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetImageDiagnoseResponse
     */
    public function getImageDiagnoseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageDiagnose',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - GetImageDiagnoseRequest
     *
     * @returns GetImageDiagnoseResponse
     *
     * @param GetImageDiagnoseRequest $request
     *
     * @return GetImageDiagnoseResponse
     */
    public function getImageDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageDiagnoseWithOptions($request, $runtime);
    }

    /**
     * 获取图片翻译结果.
     *
     * @param Request - GetImageTranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageTranslateResponse
     *
     * @param GetImageTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetImageTranslateResponse
     */
    public function getImageTranslateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageTranslate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取图片翻译结果.
     *
     * @param Request - GetImageTranslateRequest
     *
     * @returns GetImageTranslateResponse
     *
     * @param GetImageTranslateRequest $request
     *
     * @return GetImageTranslateResponse
     */
    public function getImageTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTranslateWithOptions($request, $runtime);
    }

    /**
     * 获取图片翻译任务
     *
     * @param Request - GetImageTranslateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageTranslateTaskResponse
     *
     * @param GetImageTranslateTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetImageTranslateTaskResponse
     */
    public function getImageTranslateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageTranslateTask',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取图片翻译任务
     *
     * @param Request - GetImageTranslateTaskRequest
     *
     * @returns GetImageTranslateTaskResponse
     *
     * @param GetImageTranslateTaskRequest $request
     *
     * @return GetImageTranslateTaskResponse
     */
    public function getImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * GetTitleDiagnose.
     *
     * @param Request - GetTitleDiagnoseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTitleDiagnoseResponse
     *
     * @param GetTitleDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTitleDiagnoseResponse
     */
    public function getTitleDiagnoseWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTitleDiagnose',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTitleDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTitleDiagnose.
     *
     * @param Request - GetTitleDiagnoseRequest
     *
     * @returns GetTitleDiagnoseResponse
     *
     * @param GetTitleDiagnoseRequest $request
     *
     * @return GetTitleDiagnoseResponse
     */
    public function getTitleDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleDiagnoseWithOptions($request, $runtime);
    }

    /**
     * GetTitleGenerate.
     *
     * @param Request - GetTitleGenerateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTitleGenerateResponse
     *
     * @param GetTitleGenerateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTitleGenerateResponse
     */
    public function getTitleGenerateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['Attributes'] = $request->attributes;
        }

        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->hotWords) {
            @$body['HotWords'] = $request->hotWords;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTitleGenerate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTitleGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTitleGenerate.
     *
     * @param Request - GetTitleGenerateRequest
     *
     * @returns GetTitleGenerateResponse
     *
     * @param GetTitleGenerateRequest $request
     *
     * @return GetTitleGenerateResponse
     */
    public function getTitleGenerate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleGenerateWithOptions($request, $runtime);
    }

    /**
     * GetTitleIntelligence.
     *
     * @param Request - GetTitleIntelligenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTitleIntelligenceResponse
     *
     * @param GetTitleIntelligenceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTitleIntelligenceResponse
     */
    public function getTitleIntelligenceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->catLevelThreeId) {
            @$body['CatLevelThreeId'] = $request->catLevelThreeId;
        }

        if (null !== $request->catLevelTwoId) {
            @$body['CatLevelTwoId'] = $request->catLevelTwoId;
        }

        if (null !== $request->extra) {
            @$body['Extra'] = $request->extra;
        }

        if (null !== $request->keywords) {
            @$body['Keywords'] = $request->keywords;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTitleIntelligence',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTitleIntelligenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTitleIntelligence.
     *
     * @param Request - GetTitleIntelligenceRequest
     *
     * @returns GetTitleIntelligenceResponse
     *
     * @param GetTitleIntelligenceRequest $request
     *
     * @return GetTitleIntelligenceResponse
     */
    public function getTitleIntelligence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleIntelligenceWithOptions($request, $runtime);
    }

    /**
     * 获取图片批量翻译结果.
     *
     * @param Request - GetTranslateImageBatchResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranslateImageBatchResultResponse
     *
     * @param GetTranslateImageBatchResultRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTranslateImageBatchResultResponse
     */
    public function getTranslateImageBatchResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTranslateImageBatchResult',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranslateImageBatchResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取图片批量翻译结果.
     *
     * @param Request - GetTranslateImageBatchResultRequest
     *
     * @returns GetTranslateImageBatchResultResponse
     *
     * @param GetTranslateImageBatchResultRequest $request
     *
     * @return GetTranslateImageBatchResultResponse
     */
    public function getTranslateImageBatchResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslateImageBatchResultWithOptions($request, $runtime);
    }

    /**
     * GetTranslateReport.
     *
     * @param Request - GetTranslateReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranslateReportResponse
     *
     * @param GetTranslateReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTranslateReportResponse
     */
    public function getTranslateReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTranslateReport',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranslateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetTranslateReport.
     *
     * @param Request - GetTranslateReportRequest
     *
     * @returns GetTranslateReportResponse
     *
     * @param GetTranslateReportRequest $request
     *
     * @return GetTranslateReportResponse
     */
    public function getTranslateReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslateReportWithOptions($request, $runtime);
    }

    /**
     * 开通服务
     *
     * @param Request - OpenAlimtServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenAlimtServiceResponse
     *
     * @param OpenAlimtServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpenAlimtServiceResponse
     */
    public function openAlimtServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenAlimtService',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenAlimtServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通服务
     *
     * @param Request - OpenAlimtServiceRequest
     *
     * @returns OpenAlimtServiceResponse
     *
     * @param OpenAlimtServiceRequest $request
     *
     * @return OpenAlimtServiceResponse
     */
    public function openAlimtService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAlimtServiceWithOptions($request, $runtime);
    }

    /**
     * 专业文本翻译.
     *
     * @param Request - TranslateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateResponse
     *
     * @param TranslateRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TranslateResponse
     */
    public function translateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        $body = [];
        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Translate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 专业文本翻译.
     *
     * @param Request - TranslateRequest
     *
     * @returns TranslateResponse
     *
     * @param TranslateRequest $request
     *
     * @return TranslateResponse
     */
    public function translate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateWithOptions($request, $runtime);
    }

    /**
     * TranslateCertificate.
     *
     * @param Request - TranslateCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateCertificateResponse
     *
     * @param TranslateCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TranslateCertificateResponse
     */
    public function translateCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certificateType) {
            @$body['CertificateType'] = $request->certificateType;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->resultType) {
            @$body['ResultType'] = $request->resultType;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateCertificate',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * TranslateCertificate.
     *
     * @param Request - TranslateCertificateRequest
     *
     * @returns TranslateCertificateResponse
     *
     * @param TranslateCertificateRequest $request
     *
     * @return TranslateCertificateResponse
     */
    public function translateCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateCertificateWithOptions($request, $runtime);
    }

    /**
     * @param TranslateCertificateAdvanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TranslateCertificateResponse
     */
    public function translateCertificateAdvance($request, $runtime)
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
            'Product' => 'alimt',
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
        $translateCertificateReq = new TranslateCertificateRequest([]);
        Utils::convert($request, $translateCertificateReq);
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $translateCertificateReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->translateCertificateWithOptions($translateCertificateReq, $runtime);
    }

    /**
     * TranslateECommerce.
     *
     * @deprecated openAPI TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead
     *
     * @param Request - TranslateECommerceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateECommerceResponse
     *
     * @param TranslateECommerceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TranslateECommerceResponse
     */
    public function translateECommerceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        $body = [];
        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateECommerce',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateECommerceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * TranslateECommerce.
     *
     * @deprecated openAPI TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead
     *
     * @param Request - TranslateECommerceRequest
     *
     * @returns TranslateECommerceResponse
     *
     * @param TranslateECommerceRequest $request
     *
     * @return TranslateECommerceResponse
     */
    public function translateECommerce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateECommerceWithOptions($request, $runtime);
    }

    /**
     * 文本通用翻译.
     *
     * @param Request - TranslateGeneralRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateGeneralResponse
     *
     * @param TranslateGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TranslateGeneralResponse
     */
    public function translateGeneralWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        $body = [];
        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateGeneral',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文本通用翻译.
     *
     * @param Request - TranslateGeneralRequest
     *
     * @returns TranslateGeneralResponse
     *
     * @param TranslateGeneralRequest $request
     *
     * @return TranslateGeneralResponse
     */
    public function translateGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateGeneralWithOptions($request, $runtime);
    }

    /**
     * TranslateGeneralVpc.
     *
     * @param Request - TranslateGeneralVpcRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateGeneralVpcResponse
     *
     * @param TranslateGeneralVpcRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TranslateGeneralVpcResponse
     */
    public function translateGeneralVpcWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->context) {
            @$query['Context'] = $request->context;
        }

        $body = [];
        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateGeneralVpc',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateGeneralVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * TranslateGeneralVpc.
     *
     * @param Request - TranslateGeneralVpcRequest
     *
     * @returns TranslateGeneralVpcResponse
     *
     * @param TranslateGeneralVpcRequest $request
     *
     * @return TranslateGeneralVpcResponse
     */
    public function translateGeneralVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateGeneralVpcWithOptions($request, $runtime);
    }

    /**
     * 公有云图片翻译产品API.
     *
     * @param Request - TranslateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateImageResponse
     *
     * @param TranslateImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TranslateImageResponse
     */
    public function translateImageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ext) {
            @$body['Ext'] = $request->ext;
        }

        if (null !== $request->field) {
            @$body['Field'] = $request->field;
        }

        if (null !== $request->imageBase64) {
            @$body['ImageBase64'] = $request->imageBase64;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateImage',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 公有云图片翻译产品API.
     *
     * @param Request - TranslateImageRequest
     *
     * @returns TranslateImageResponse
     *
     * @param TranslateImageRequest $request
     *
     * @return TranslateImageResponse
     */
    public function translateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateImageWithOptions($request, $runtime);
    }

    /**
     * 批量图片翻译接口.
     *
     * @param Request - TranslateImageBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateImageBatchResponse
     *
     * @param TranslateImageBatchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TranslateImageBatchResponse
     */
    public function translateImageBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customTaskId) {
            @$body['CustomTaskId'] = $request->customTaskId;
        }

        if (null !== $request->ext) {
            @$body['Ext'] = $request->ext;
        }

        if (null !== $request->field) {
            @$body['Field'] = $request->field;
        }

        if (null !== $request->imageUrls) {
            @$body['ImageUrls'] = $request->imageUrls;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateImageBatch',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateImageBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量图片翻译接口.
     *
     * @param Request - TranslateImageBatchRequest
     *
     * @returns TranslateImageBatchResponse
     *
     * @param TranslateImageBatchRequest $request
     *
     * @return TranslateImageBatchResponse
     */
    public function translateImageBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateImageBatchWithOptions($request, $runtime);
    }

    /**
     * 搜索翻译.
     *
     * @param Request - TranslateSearchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TranslateSearchResponse
     *
     * @param TranslateSearchRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TranslateSearchResponse
     */
    public function translateSearchWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->sourceText) {
            @$body['SourceText'] = $request->sourceText;
        }

        if (null !== $request->targetLanguage) {
            @$body['TargetLanguage'] = $request->targetLanguage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TranslateSearch',
            'version' => '2018-10-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TranslateSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索翻译.
     *
     * @param Request - TranslateSearchRequest
     *
     * @returns TranslateSearchResponse
     *
     * @param TranslateSearchRequest $request
     *
     * @return TranslateSearchResponse
     */
    public function translateSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateSearchWithOptions($request, $runtime);
    }
}
