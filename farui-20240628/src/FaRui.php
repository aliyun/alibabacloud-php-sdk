<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileAdvanceRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationShrinkRequest;
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

class FaRui extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('farui', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 上传合同文件
     *  *
     * @param string                $WorkspaceId
     * @param CreateTextFileRequest $request     CreateTextFileRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateTextFileResponse CreateTextFileResponse
     */
    public function createTextFileWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTime)) {
            $body['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->textFileName)) {
            $body['TextFileName'] = $request->textFileName;
        }
        if (!Utils::isUnset($request->textFileUrl)) {
            $body['TextFileUrl'] = $request->textFileUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTextFile',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($WorkspaceId) . '/data/textFile',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTextFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传合同文件
     *  *
     * @param string                $WorkspaceId
     * @param CreateTextFileRequest $request     CreateTextFileRequest
     *
     * @return CreateTextFileResponse CreateTextFileResponse
     */
    public function createTextFile($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTextFileWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $WorkspaceId
     * @param CreateTextFileAdvanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateTextFileResponse
     */
    public function createTextFileAdvance($WorkspaceId, $request, $headers, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
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
            'product'  => 'FaRui',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $createTextFileReq = new CreateTextFileRequest([]);
        OpenApiUtilClient::convert($request, $createTextFileReq);
        if (!Utils::isUnset($request->textFileUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->textFileUrlObject,
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
            $createTextFileReq->textFileUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->createTextFileWithOptions($WorkspaceId, $createTextFileReq, $headers, $runtime);
    }

    /**
     * @summary 法律咨询
     *  *
     * @param string                            $workspaceId
     * @param RunLegalAdviceConsultationRequest $tmpReq      RunLegalAdviceConsultationRequest
     * @param string[]                          $headers     map
     * @param RuntimeOptions                    $runtime     runtime options for this request RuntimeOptions
     *
     * @return RunLegalAdviceConsultationResponse RunLegalAdviceConsultationResponse
     */
    public function runLegalAdviceConsultationWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunLegalAdviceConsultationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->assistant)) {
            $request->assistantShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->assistant, 'assistant', 'json');
        }
        if (!Utils::isUnset($tmpReq->thread)) {
            $request->threadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thread, 'thread', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->assistantShrink)) {
            $body['assistant'] = $request->assistantShrink;
        }
        if (!Utils::isUnset($request->stream)) {
            $body['stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->threadShrink)) {
            $body['thread'] = $request->threadShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunLegalAdviceConsultation',
            'version'     => '2024-06-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/farui/legalAdvice/consult',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunLegalAdviceConsultationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 法律咨询
     *  *
     * @param string                            $workspaceId
     * @param RunLegalAdviceConsultationRequest $request     RunLegalAdviceConsultationRequest
     *
     * @return RunLegalAdviceConsultationResponse RunLegalAdviceConsultationResponse
     */
    public function runLegalAdviceConsultation($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runLegalAdviceConsultationWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
