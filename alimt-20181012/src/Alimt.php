<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\FileForm\FileForm;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\Tea\XML\XML;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Alimt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
     * @param string  $bucketName
     * @param mixed[] $data
     *
     * @return array
     *
     * @throws TeaError
     */
    public function _postOSSObject($bucketName, $data)
    {
        $_request = new Request();
        $form = Utils::assertAsMap($data);
        $boundary = FileForm::getBoundary();
        $host = Utils::assertAsString(@$form['host']);
        $_request->protocol = 'HTTPS';
        $_request->method = 'POST';
        $_request->pathname = '/';
        $_request->headers = [
            'host' => $host,
            'date' => Utils::getDateUTCString(),
            'user-agent' => Utils::getUserAgent(''),
        ];
        $_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
        $_request->body = FileForm::toFileForm($form, $boundary);
        $_lastRequest = $_request;
        $_response = Tea::send($_request);
        $respMap = null;
        $bodyStr = Utils::readAsString($_response->body);
        if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
            $respMap = XML::parseXml($bodyStr, null);
            $err = Utils::assertAsMap(@$respMap['Error']);

            throw new TeaError([
                'code' => @$err['Code'],
                'message' => @$err['Message'],
                'data' => [
                    'httpCode' => $_response->statusCode,
                    'requestId' => @$err['RequestId'],
                    'hostId' => @$err['HostId'],
                ],
            ]);
        }
        $respMap = XML::parseXml($bodyStr, null);

        return Tea::merge($respMap);
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
     * @summary 大文本异步翻译，支持5000-50000字翻译
     *  *
     * @param CreateAsyncTranslateRequest $request CreateAsyncTranslateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAsyncTranslateResponse CreateAsyncTranslateResponse
     */
    public function createAsyncTranslateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 大文本异步翻译，支持5000-50000字翻译
     *  *
     * @param CreateAsyncTranslateRequest $request CreateAsyncTranslateRequest
     *
     * @return CreateAsyncTranslateResponse CreateAsyncTranslateResponse
     */
    public function createAsyncTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAsyncTranslateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDocTranslateTaskRequest $request CreateDocTranslateTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDocTranslateTaskResponse CreateDocTranslateTaskResponse
     */
    public function createDocTranslateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDocTranslateTaskRequest $request CreateDocTranslateTaskRequest
     *
     * @return CreateDocTranslateTaskResponse CreateDocTranslateTaskResponse
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
     *
     * @throws TeaError
     */
    public function createDocTranslateTaskAdvance($request, $runtime)
    {
        // Step 0: init client
        $credentialModel = null;
        if (Utils::isUnset($this->_credential)) {
            throw new TeaError([
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
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
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
            'query' => OpenApiUtilClient::query($authRequest),
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
        OpenApiUtilClient::convert($request, $createDocTranslateTaskReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $tmpResp0 = $authClient->callApi($authParams, $authReq, $runtime);
            $authResponse = Utils::assertAsMap($tmpResp0);
            $tmpBody = Utils::assertAsMap(@$authResponse['body']);
            $useAccelerate = Utils::assertAsBoolean(@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . OpenApiUtilClient::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $createDocTranslateTaskReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->createDocTranslateTaskWithOptions($createDocTranslateTaskReq, $runtime);
    }

    /**
     * @param CreateImageTranslateTaskRequest $request CreateImageTranslateTaskRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageTranslateTaskResponse CreateImageTranslateTaskResponse
     */
    public function createImageTranslateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        if (!Utils::isUnset($request->urlList)) {
            $body['UrlList'] = $request->urlList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateImageTranslateTaskRequest $request CreateImageTranslateTaskRequest
     *
     * @return CreateImageTranslateTaskResponse CreateImageTranslateTaskResponse
     */
    public function createImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 大文本异步翻译，支持5000-50000字翻译
     *  *
     * @param GetAsyncTranslateRequest $request GetAsyncTranslateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncTranslateResponse GetAsyncTranslateResponse
     */
    public function getAsyncTranslateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 大文本异步翻译，支持5000-50000字翻译
     *  *
     * @param GetAsyncTranslateRequest $request GetAsyncTranslateRequest
     *
     * @return GetAsyncTranslateResponse GetAsyncTranslateResponse
     */
    public function getAsyncTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncTranslateWithOptions($request, $runtime);
    }

    /**
     * @param GetBatchTranslateRequest $request GetBatchTranslateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBatchTranslateResponse GetBatchTranslateResponse
     */
    public function getBatchTranslateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param GetBatchTranslateRequest $request GetBatchTranslateRequest
     *
     * @return GetBatchTranslateResponse GetBatchTranslateResponse
     */
    public function getBatchTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTranslateWithOptions($request, $runtime);
    }

    /**
     * @summary GetBatchTranslateByVPC
     *  *
     * @param GetBatchTranslateByVPCRequest $request GetBatchTranslateByVPCRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBatchTranslateByVPCResponse GetBatchTranslateByVPCResponse
     */
    public function getBatchTranslateByVPCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary GetBatchTranslateByVPC
     *  *
     * @param GetBatchTranslateByVPCRequest $request GetBatchTranslateByVPCRequest
     *
     * @return GetBatchTranslateByVPCResponse GetBatchTranslateByVPCResponse
     */
    public function getBatchTranslateByVPC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchTranslateByVPCWithOptions($request, $runtime);
    }

    /**
     * @summary 语种识别
     *  *
     * @param GetDetectLanguageRequest $request GetDetectLanguageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDetectLanguageResponse GetDetectLanguageResponse
     */
    public function getDetectLanguageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 语种识别
     *  *
     * @param GetDetectLanguageRequest $request GetDetectLanguageRequest
     *
     * @return GetDetectLanguageResponse GetDetectLanguageResponse
     */
    public function getDetectLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectLanguageWithOptions($request, $runtime);
    }

    /**
     * @summary 语种识别
     *  *
     * @param GetDetectLanguageVpcRequest $request GetDetectLanguageVpcRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDetectLanguageVpcResponse GetDetectLanguageVpcResponse
     */
    public function getDetectLanguageVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 语种识别
     *  *
     * @param GetDetectLanguageVpcRequest $request GetDetectLanguageVpcRequest
     *
     * @return GetDetectLanguageVpcResponse GetDetectLanguageVpcResponse
     */
    public function getDetectLanguageVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDetectLanguageVpcWithOptions($request, $runtime);
    }

    /**
     * @summary 获取文档翻译任务
     *  *
     * @param GetDocTranslateTaskRequest $request GetDocTranslateTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocTranslateTaskResponse GetDocTranslateTaskResponse
     */
    public function getDocTranslateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取文档翻译任务
     *  *
     * @param GetDocTranslateTaskRequest $request GetDocTranslateTaskRequest
     *
     * @return GetDocTranslateTaskResponse GetDocTranslateTaskResponse
     */
    public function getDocTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetImageDiagnoseRequest $request GetImageDiagnoseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageDiagnoseResponse GetImageDiagnoseResponse
     */
    public function getImageDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param GetImageDiagnoseRequest $request GetImageDiagnoseRequest
     *
     * @return GetImageDiagnoseResponse GetImageDiagnoseResponse
     */
    public function getImageDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @param GetImageTranslateRequest $request GetImageTranslateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageTranslateResponse GetImageTranslateResponse
     */
    public function getImageTranslateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param GetImageTranslateRequest $request GetImageTranslateRequest
     *
     * @return GetImageTranslateResponse GetImageTranslateResponse
     */
    public function getImageTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTranslateWithOptions($request, $runtime);
    }

    /**
     * @param GetImageTranslateTaskRequest $request GetImageTranslateTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageTranslateTaskResponse GetImageTranslateTaskResponse
     */
    public function getImageTranslateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param GetImageTranslateTaskRequest $request GetImageTranslateTaskRequest
     *
     * @return GetImageTranslateTaskResponse GetImageTranslateTaskResponse
     */
    public function getImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTranslateTaskWithOptions($request, $runtime);
    }

    /**
     * @summary GetTitleDiagnose
     *  *
     * @param GetTitleDiagnoseRequest $request GetTitleDiagnoseRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTitleDiagnoseResponse GetTitleDiagnoseResponse
     */
    public function getTitleDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary GetTitleDiagnose
     *  *
     * @param GetTitleDiagnoseRequest $request GetTitleDiagnoseRequest
     *
     * @return GetTitleDiagnoseResponse GetTitleDiagnoseResponse
     */
    public function getTitleDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleDiagnoseWithOptions($request, $runtime);
    }

    /**
     * @summary GetTitleGenerate
     *  *
     * @param GetTitleGenerateRequest $request GetTitleGenerateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTitleGenerateResponse GetTitleGenerateResponse
     */
    public function getTitleGenerateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->attributes)) {
            $body['Attributes'] = $request->attributes;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->hotWords)) {
            $body['HotWords'] = $request->hotWords;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary GetTitleGenerate
     *  *
     * @param GetTitleGenerateRequest $request GetTitleGenerateRequest
     *
     * @return GetTitleGenerateResponse GetTitleGenerateResponse
     */
    public function getTitleGenerate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleGenerateWithOptions($request, $runtime);
    }

    /**
     * @summary GetTitleIntelligence
     *  *
     * @param GetTitleIntelligenceRequest $request GetTitleIntelligenceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTitleIntelligenceResponse GetTitleIntelligenceResponse
     */
    public function getTitleIntelligenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->catLevelThreeId)) {
            $body['CatLevelThreeId'] = $request->catLevelThreeId;
        }
        if (!Utils::isUnset($request->catLevelTwoId)) {
            $body['CatLevelTwoId'] = $request->catLevelTwoId;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary GetTitleIntelligence
     *  *
     * @param GetTitleIntelligenceRequest $request GetTitleIntelligenceRequest
     *
     * @return GetTitleIntelligenceResponse GetTitleIntelligenceResponse
     */
    public function getTitleIntelligence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTitleIntelligenceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取图片批量翻译结果
     *  *
     * @param GetTranslateImageBatchResultRequest $request GetTranslateImageBatchResultRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranslateImageBatchResultResponse GetTranslateImageBatchResultResponse
     */
    public function getTranslateImageBatchResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取图片批量翻译结果
     *  *
     * @param GetTranslateImageBatchResultRequest $request GetTranslateImageBatchResultRequest
     *
     * @return GetTranslateImageBatchResultResponse GetTranslateImageBatchResultResponse
     */
    public function getTranslateImageBatchResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslateImageBatchResultWithOptions($request, $runtime);
    }

    /**
     * @summary GetTranslateReport
     *  *
     * @param GetTranslateReportRequest $request GetTranslateReportRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranslateReportResponse GetTranslateReportResponse
     */
    public function getTranslateReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary GetTranslateReport
     *  *
     * @param GetTranslateReportRequest $request GetTranslateReportRequest
     *
     * @return GetTranslateReportResponse GetTranslateReportResponse
     */
    public function getTranslateReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslateReportWithOptions($request, $runtime);
    }

    /**
     * @summary 开通服务
     *  *
     * @param OpenAlimtServiceRequest $request OpenAlimtServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenAlimtServiceResponse OpenAlimtServiceResponse
     */
    public function openAlimtServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 开通服务
     *  *
     * @param OpenAlimtServiceRequest $request OpenAlimtServiceRequest
     *
     * @return OpenAlimtServiceResponse OpenAlimtServiceResponse
     */
    public function openAlimtService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openAlimtServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 专业文本翻译
     *  *
     * @param TranslateRequest $request TranslateRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateResponse TranslateResponse
     */
    public function translateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        $body = [];
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 专业文本翻译
     *  *
     * @param TranslateRequest $request TranslateRequest
     *
     * @return TranslateResponse TranslateResponse
     */
    public function translate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateWithOptions($request, $runtime);
    }

    /**
     * @summary TranslateCertificate
     *  *
     * @param TranslateCertificateRequest $request TranslateCertificateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateCertificateResponse TranslateCertificateResponse
     */
    public function translateCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certificateType)) {
            $body['CertificateType'] = $request->certificateType;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->resultType)) {
            $body['ResultType'] = $request->resultType;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary TranslateCertificate
     *  *
     * @param TranslateCertificateRequest $request TranslateCertificateRequest
     *
     * @return TranslateCertificateResponse TranslateCertificateResponse
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
     *
     * @throws TeaError
     */
    public function translateCertificateAdvance($request, $runtime)
    {
        // Step 0: init client
        $credentialModel = null;
        if (Utils::isUnset($this->_credential)) {
            throw new TeaError([
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
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
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
            'query' => OpenApiUtilClient::query($authRequest),
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
        OpenApiUtilClient::convert($request, $translateCertificateReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $tmpResp0 = $authClient->callApi($authParams, $authReq, $runtime);
            $authResponse = Utils::assertAsMap($tmpResp0);
            $tmpBody = Utils::assertAsMap(@$authResponse['body']);
            $useAccelerate = Utils::assertAsBoolean(@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . OpenApiUtilClient::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $translateCertificateReq->imageUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->translateCertificateWithOptions($translateCertificateReq, $runtime);
    }

    /**
     * @deprecated openAPI TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead
     *  *
     * @summary TranslateECommerce
     *  *
     * Deprecated
     *
     * @param TranslateECommerceRequest $request TranslateECommerceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateECommerceResponse TranslateECommerceResponse
     */
    public function translateECommerceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        $body = [];
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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

    /**
     * @deprecated openAPI TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead
     *  *
     * @summary TranslateECommerce
     *  *
     * Deprecated
     *
     * @param TranslateECommerceRequest $request TranslateECommerceRequest
     *
     * @return TranslateECommerceResponse TranslateECommerceResponse
     */
    public function translateECommerce($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateECommerceWithOptions($request, $runtime);
    }

    /**
     * @summary 文本通用翻译
     *  *
     * @param TranslateGeneralRequest $request TranslateGeneralRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateGeneralResponse TranslateGeneralResponse
     */
    public function translateGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        $body = [];
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 文本通用翻译
     *  *
     * @param TranslateGeneralRequest $request TranslateGeneralRequest
     *
     * @return TranslateGeneralResponse TranslateGeneralResponse
     */
    public function translateGeneral($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateGeneralWithOptions($request, $runtime);
    }

    /**
     * @summary TranslateGeneralVpc
     *  *
     * @param TranslateGeneralVpcRequest $request TranslateGeneralVpcRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateGeneralVpcResponse TranslateGeneralVpcResponse
     */
    public function translateGeneralVpcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->context)) {
            $query['Context'] = $request->context;
        }
        $body = [];
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary TranslateGeneralVpc
     *  *
     * @param TranslateGeneralVpcRequest $request TranslateGeneralVpcRequest
     *
     * @return TranslateGeneralVpcResponse TranslateGeneralVpcResponse
     */
    public function translateGeneralVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateGeneralVpcWithOptions($request, $runtime);
    }

    /**
     * @summary 公有云图片翻译产品API
     *  *
     * @param TranslateImageRequest $request TranslateImageRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateImageResponse TranslateImageResponse
     */
    public function translateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ext)) {
            $body['Ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->field)) {
            $body['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->imageBase64)) {
            $body['ImageBase64'] = $request->imageBase64;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 公有云图片翻译产品API
     *  *
     * @param TranslateImageRequest $request TranslateImageRequest
     *
     * @return TranslateImageResponse TranslateImageResponse
     */
    public function translateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateImageWithOptions($request, $runtime);
    }

    /**
     * @summary 批量图片翻译接口
     *  *
     * @param TranslateImageBatchRequest $request TranslateImageBatchRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateImageBatchResponse TranslateImageBatchResponse
     */
    public function translateImageBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customTaskId)) {
            $body['CustomTaskId'] = $request->customTaskId;
        }
        if (!Utils::isUnset($request->ext)) {
            $body['Ext'] = $request->ext;
        }
        if (!Utils::isUnset($request->field)) {
            $body['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->imageUrls)) {
            $body['ImageUrls'] = $request->imageUrls;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 批量图片翻译接口
     *  *
     * @param TranslateImageBatchRequest $request TranslateImageBatchRequest
     *
     * @return TranslateImageBatchResponse TranslateImageBatchResponse
     */
    public function translateImageBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateImageBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索翻译
     *  *
     * @param TranslateSearchRequest $request TranslateSearchRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TranslateSearchResponse TranslateSearchResponse
     */
    public function translateSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->formatType)) {
            $body['FormatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sourceLanguage)) {
            $body['SourceLanguage'] = $request->sourceLanguage;
        }
        if (!Utils::isUnset($request->sourceText)) {
            $body['SourceText'] = $request->sourceText;
        }
        if (!Utils::isUnset($request->targetLanguage)) {
            $body['TargetLanguage'] = $request->targetLanguage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 搜索翻译
     *  *
     * @param TranslateSearchRequest $request TranslateSearchRequest
     *
     * @return TranslateSearchResponse TranslateSearchResponse
     */
    public function translateSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateSearchWithOptions($request, $runtime);
    }
}
