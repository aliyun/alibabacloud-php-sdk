<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220729;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\GetSingleDocumentExtractResultRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\GetSingleDocumentExtractResultResponse;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitAirWaybillExtractJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitAirWaybillExtractJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitAirWaybillExtractJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitBillOfLadingExtractJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitBillOfLadingExtractJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitBillOfLadingExtractJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitExportDeclarationSheetExtractJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitExportDeclarationSheetExtractJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitExportDeclarationSheetExtractJobResponse;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitInvoiceExtractJobAdvanceRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitInvoiceExtractJobRequest;
use AlibabaCloud\SDK\Docmindapi\V20220729\Models\SubmitInvoiceExtractJobResponse;
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

class Docmindapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'docmind-api.aliyuncs.com',
            'ap-northeast-2-pop'          => 'docmind-api.aliyuncs.com',
            'ap-south-1'                  => 'docmind-api.aliyuncs.com',
            'ap-southeast-1'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-2'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-3'              => 'docmind-api.aliyuncs.com',
            'ap-southeast-5'              => 'docmind-api.aliyuncs.com',
            'cn-beijing'                  => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-1'        => 'docmind-api.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'docmind-api.aliyuncs.com',
            'cn-beijing-gov-1'            => 'docmind-api.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'docmind-api.aliyuncs.com',
            'cn-chengdu'                  => 'docmind-api.aliyuncs.com',
            'cn-edge-1'                   => 'docmind-api.aliyuncs.com',
            'cn-fujian'                   => 'docmind-api.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-finance'         => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'docmind-api.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'docmind-api.aliyuncs.com',
            'cn-hongkong'                 => 'docmind-api.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'docmind-api.aliyuncs.com',
            'cn-huhehaote'                => 'docmind-api.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'docmind-api.aliyuncs.com',
            'cn-north-2-gov-1'            => 'docmind-api.aliyuncs.com',
            'cn-qingdao'                  => 'docmind-api.aliyuncs.com',
            'cn-qingdao-nebula'           => 'docmind-api.aliyuncs.com',
            'cn-shanghai'                 => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'docmind-api.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'docmind-api.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'docmind-api.aliyuncs.com',
            'cn-shanghai-inner'           => 'docmind-api.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'docmind-api.aliyuncs.com',
            'cn-shenzhen'                 => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-inner'           => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'docmind-api.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'docmind-api.aliyuncs.com',
            'cn-wuhan'                    => 'docmind-api.aliyuncs.com',
            'cn-wulanchabu'               => 'docmind-api.aliyuncs.com',
            'cn-yushanfang'               => 'docmind-api.aliyuncs.com',
            'cn-zhangbei'                 => 'docmind-api.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou'              => 'docmind-api.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'docmind-api.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'docmind-api.aliyuncs.com',
            'eu-central-1'                => 'docmind-api.aliyuncs.com',
            'eu-west-1'                   => 'docmind-api.aliyuncs.com',
            'eu-west-1-oxs'               => 'docmind-api.aliyuncs.com',
            'me-east-1'                   => 'docmind-api.aliyuncs.com',
            'rus-west-1-pop'              => 'docmind-api.aliyuncs.com',
            'us-east-1'                   => 'docmind-api.aliyuncs.com',
            'us-west-1'                   => 'docmind-api.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('docmind-api', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetSingleDocumentExtractResultRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetSingleDocumentExtractResultResponse
     */
    public function getSingleDocumentExtractResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSingleDocumentExtractResult',
            'version'     => '2022-07-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSingleDocumentExtractResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSingleDocumentExtractResultRequest $request
     *
     * @return GetSingleDocumentExtractResultResponse
     */
    public function getSingleDocumentExtractResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSingleDocumentExtractResultWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAirWaybillExtractJobRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitAirWaybillExtractJobResponse
     */
    public function submitAirWaybillExtractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAirWaybillExtractJob',
            'version'     => '2022-07-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAirWaybillExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAirWaybillExtractJobRequest $request
     *
     * @return SubmitAirWaybillExtractJobResponse
     */
    public function submitAirWaybillExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAirWaybillExtractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAirWaybillExtractJobAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return SubmitAirWaybillExtractJobResponse
     */
    public function submitAirWaybillExtractJobAdvance($request, $runtime)
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
            'product'  => 'docmind-api',
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
        $submitAirWaybillExtractJobReq = new SubmitAirWaybillExtractJobRequest([]);
        OpenApiUtilClient::convert($request, $submitAirWaybillExtractJobReq);
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
            $submitAirWaybillExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitAirWaybillExtractJobWithOptions($submitAirWaybillExtractJobReq, $runtime);
    }

    /**
     * @param SubmitBillOfLadingExtractJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitBillOfLadingExtractJobResponse
     */
    public function submitBillOfLadingExtractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitBillOfLadingExtractJob',
            'version'     => '2022-07-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitBillOfLadingExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitBillOfLadingExtractJobRequest $request
     *
     * @return SubmitBillOfLadingExtractJobResponse
     */
    public function submitBillOfLadingExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBillOfLadingExtractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBillOfLadingExtractJobAdvanceRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SubmitBillOfLadingExtractJobResponse
     */
    public function submitBillOfLadingExtractJobAdvance($request, $runtime)
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
            'product'  => 'docmind-api',
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
        $submitBillOfLadingExtractJobReq = new SubmitBillOfLadingExtractJobRequest([]);
        OpenApiUtilClient::convert($request, $submitBillOfLadingExtractJobReq);
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
            $submitBillOfLadingExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitBillOfLadingExtractJobWithOptions($submitBillOfLadingExtractJobReq, $runtime);
    }

    /**
     * @param SubmitExportDeclarationSheetExtractJobRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SubmitExportDeclarationSheetExtractJobResponse
     */
    public function submitExportDeclarationSheetExtractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitExportDeclarationSheetExtractJob',
            'version'     => '2022-07-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitExportDeclarationSheetExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitExportDeclarationSheetExtractJobRequest $request
     *
     * @return SubmitExportDeclarationSheetExtractJobResponse
     */
    public function submitExportDeclarationSheetExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitExportDeclarationSheetExtractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitExportDeclarationSheetExtractJobAdvanceRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return SubmitExportDeclarationSheetExtractJobResponse
     */
    public function submitExportDeclarationSheetExtractJobAdvance($request, $runtime)
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
            'product'  => 'docmind-api',
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
        $submitExportDeclarationSheetExtractJobReq = new SubmitExportDeclarationSheetExtractJobRequest([]);
        OpenApiUtilClient::convert($request, $submitExportDeclarationSheetExtractJobReq);
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
            $submitExportDeclarationSheetExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitExportDeclarationSheetExtractJobWithOptions($submitExportDeclarationSheetExtractJobReq, $runtime);
    }

    /**
     * @param SubmitInvoiceExtractJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitInvoiceExtractJobResponse
     */
    public function submitInvoiceExtractJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileNameExtension)) {
            $query['FileNameExtension'] = $request->fileNameExtension;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $query['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitInvoiceExtractJob',
            'version'     => '2022-07-29',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInvoiceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitInvoiceExtractJobRequest $request
     *
     * @return SubmitInvoiceExtractJobResponse
     */
    public function submitInvoiceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInvoiceExtractJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInvoiceExtractJobAdvanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitInvoiceExtractJobResponse
     */
    public function submitInvoiceExtractJobAdvance($request, $runtime)
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
            'product'  => 'docmind-api',
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
        $submitInvoiceExtractJobReq = new SubmitInvoiceExtractJobRequest([]);
        OpenApiUtilClient::convert($request, $submitInvoiceExtractJobReq);
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
            $submitInvoiceExtractJobReq->fileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->submitInvoiceExtractJobWithOptions($submitInvoiceExtractJobReq, $runtime);
    }
}
