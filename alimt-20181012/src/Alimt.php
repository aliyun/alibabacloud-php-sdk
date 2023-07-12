<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskAdvanceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateDocTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateImageTranslateTaskRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\CreateImageTranslateTaskResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetBatchTranslateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetDetectLanguageResponse;
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
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageBatchRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageBatchResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateImageResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
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
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'cn-hangzhou'                 => 'mt.cn-hangzhou.aliyuncs.com',
            'ap-northeast-1'              => 'mt.aliyuncs.com',
            'ap-northeast-2-pop'          => 'mt.aliyuncs.com',
            'ap-south-1'                  => 'mt.aliyuncs.com',
            'ap-southeast-1'              => 'mt.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'mt.aliyuncs.com',
            'ap-southeast-3'              => 'mt.aliyuncs.com',
            'ap-southeast-5'              => 'mt.aliyuncs.com',
            'cn-beijing'                  => 'mt.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mt.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mt.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mt.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mt.aliyuncs.com',
            'cn-chengdu'                  => 'mt.aliyuncs.com',
            'cn-edge-1'                   => 'mt.aliyuncs.com',
            'cn-fujian'                   => 'mt.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mt.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mt.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mt.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mt.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mt.aliyuncs.com',
            'cn-hongkong'                 => 'mt.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mt.aliyuncs.com',
            'cn-huhehaote'                => 'mt.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mt.aliyuncs.com',
            'cn-qingdao'                  => 'mt.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mt.aliyuncs.com',
            'cn-shanghai'                 => 'mt.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mt.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mt.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mt.aliyuncs.com',
            'cn-shanghai-inner'           => 'mt.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mt.aliyuncs.com',
            'cn-shenzhen'                 => 'mt.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mt.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mt.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mt.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mt.aliyuncs.com',
            'cn-wuhan'                    => 'mt.aliyuncs.com',
            'cn-yushanfang'               => 'mt.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mt.aliyuncs.com',
            'cn-zhangjiakou'              => 'mt.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mt.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mt.aliyuncs.com',
            'eu-central-1'                => 'mt.aliyuncs.com',
            'eu-west-1'                   => 'mt.aliyuncs.com',
            'eu-west-1-oxs'               => 'mt.aliyuncs.com',
            'me-east-1'                   => 'mt.aliyuncs.com',
            'rus-west-1-pop'              => 'mt.aliyuncs.com',
            'us-east-1'                   => 'mt.aliyuncs.com',
            'us-west-1'                   => 'mt.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alimt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDocTranslateTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDocTranslateTaskResponse
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
            'action'      => 'CreateDocTranslateTask',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'alimt',
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
        $createDocTranslateTaskReq = new CreateDocTranslateTaskRequest([]);
        OpenApiUtilClient::convert($request, $createDocTranslateTaskReq);
        if (!Utils::isUnset($request->fileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $createDocTranslateTaskReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->createDocTranslateTaskWithOptions($createDocTranslateTaskReq, $runtime);
    }

    /**
     * @param CreateImageTranslateTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateImageTranslateTaskResponse
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
            'action'      => 'CreateImageTranslateTask',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetBatchTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBatchTranslateResponse
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
            'action'      => 'GetBatchTranslate',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBatchTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetDetectLanguageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDetectLanguageResponse
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
            'action'      => 'GetDetectLanguage',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDetectLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetDocTranslateTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDocTranslateTaskResponse
     */
    public function getDocTranslateTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDocTranslateTask',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetImageDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetImageDiagnoseResponse
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
            'action'      => 'GetImageDiagnose',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetImageTranslateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetImageTranslateResponse
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
            'action'      => 'GetImageTranslate',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetImageTranslateTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetImageTranslateTaskResponse
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
            'action'      => 'GetImageTranslateTask',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTitleDiagnoseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTitleDiagnoseResponse
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
            'action'      => 'GetTitleDiagnose',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTitleDiagnoseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTitleGenerateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetTitleGenerateResponse
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
            'action'      => 'GetTitleGenerate',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTitleGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTitleIntelligenceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTitleIntelligenceResponse
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
            'action'      => 'GetTitleIntelligence',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTitleIntelligenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTranslateImageBatchResultRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTranslateImageBatchResultResponse
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
            'action'      => 'GetTranslateImageBatchResult',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranslateImageBatchResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTranslateReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTranslateReportResponse
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
            'action'      => 'GetTranslateReport',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranslateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param OpenAlimtServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpenAlimtServiceResponse
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
            'action'      => 'OpenAlimtService',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenAlimtServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TranslateRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return TranslateResponse
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Translate',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TranslateCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TranslateCertificateResponse
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
            'action'      => 'TranslateCertificate',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'product'  => 'alimt',
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
        $translateCertificateReq = new TranslateCertificateRequest([]);
        OpenApiUtilClient::convert($request, $translateCertificateReq);
        if (!Utils::isUnset($request->imageUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->imageUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $translateCertificateReq->imageUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->translateCertificateWithOptions($translateCertificateReq, $runtime);
    }

    /**
     * @deprecated : TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead.
     *   *
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TranslateECommerce',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateECommerceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : TranslateECommerce is deprecated, please use alimt::2018-10-12::Translate instead.
     *   *
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
     * @param TranslateGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TranslateGeneralResponse
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TranslateGeneral',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateGeneralResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TranslateImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TranslateImageResponse
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
            'action'      => 'TranslateImage',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TranslateImageBatchRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TranslateImageBatchResponse
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
            'action'      => 'TranslateImageBatch',
            'version'     => '2018-10-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TranslateImageBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TranslateImageBatchRequest $request
     *
     * @return TranslateImageBatchResponse
     */
    public function translateImageBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->translateImageBatchWithOptions($request, $runtime);
    }
}
