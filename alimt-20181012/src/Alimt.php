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
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateReportRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateReportResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\GetUserResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\OpenAlimtServiceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\OpenAlimtServiceResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateAdvanceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateECommerceRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateECommerceResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralResponse;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateRequest;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateResponse;
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
use Darabonba\OpenApi\OpenApiClient;

class Alimt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDocTranslateTaskResponse::fromMap($this->doRPCRequest('CreateDocTranslateTask', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
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
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->fileUrlObject,
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
            $createDocTranslateTaskReq->fileUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageTranslateTaskResponse::fromMap($this->doRPCRequest('CreateImageTranslateTask', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBatchTranslateResponse::fromMap($this->doRPCRequest('GetBatchTranslate', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDetectLanguageResponse::fromMap($this->doRPCRequest('GetDetectLanguage', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return GetDocTranslateTaskResponse::fromMap($this->doRPCRequest('GetDocTranslateTask', '2018-10-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageDiagnoseResponse::fromMap($this->doRPCRequest('GetImageDiagnose', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageTranslateResponse::fromMap($this->doRPCRequest('GetImageTranslate', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageTranslateTaskResponse::fromMap($this->doRPCRequest('GetImageTranslateTask', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTitleDiagnoseResponse::fromMap($this->doRPCRequest('GetTitleDiagnose', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTitleGenerateResponse::fromMap($this->doRPCRequest('GetTitleGenerate', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTitleIntelligenceResponse::fromMap($this->doRPCRequest('GetTitleIntelligence', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetTranslateReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTranslateReportResponse
     */
    public function getTranslateReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTranslateReportResponse::fromMap($this->doRPCRequest('GetTranslateReport', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetUserResponse::fromMap($this->doRPCRequest('GetUser', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetUserResponse
     */
    public function getUser()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenAlimtServiceResponse::fromMap($this->doRPCRequest('OpenAlimtService', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TranslateResponse::fromMap($this->doRPCRequest('Translate', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TranslateCertificateResponse::fromMap($this->doRPCRequest('TranslateCertificate', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::isUnset($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
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
            $ossConfig->accessKeyId = $authResponse->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->objectKey,
                'content'     => $request->imageUrlObject,
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
            $translateCertificateReq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';
        }

        return $this->translateCertificateWithOptions($translateCertificateReq, $runtime);
    }

    /**
     * @param TranslateECommerceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TranslateECommerceResponse
     */
    public function translateECommerceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TranslateECommerceResponse::fromMap($this->doRPCRequest('TranslateECommerce', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TranslateGeneralRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TranslateGeneralResponse
     */
    public function translateGeneralWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TranslateGeneralResponse::fromMap($this->doRPCRequest('TranslateGeneral', '2018-10-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
