<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileAdvanceRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationShrinkRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationShrinkRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationShrinkRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextShrinkRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponse;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryShrinkRequest;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
     * 上传合同文件.
     *
     * @param Request - CreateTextFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTextFileResponse
     *
     * @param string                $WorkspaceId
     * @param CreateTextFileRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTextFileResponse
     */
    public function createTextFileWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->createTime) {
            @$body['CreateTime'] = $request->createTime;
        }

        if (null !== $request->textFileName) {
            @$body['TextFileName'] = $request->textFileName;
        }

        if (null !== $request->textFileUrl) {
            @$body['TextFileUrl'] = $request->textFileUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTextFile',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($WorkspaceId) . '/data/textFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTextFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传合同文件.
     *
     * @param Request - CreateTextFileRequest
     *
     * @returns CreateTextFileResponse
     *
     * @param string                $WorkspaceId
     * @param CreateTextFileRequest $request
     *
     * @return CreateTextFileResponse
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
            'Product' => 'FaRui',
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
        $createTextFileReq = new CreateTextFileRequest([]);
        Utils::convert($request, $createTextFileReq);
        if (null !== $request->textFileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->textFileUrlObject,
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
            $createTextFileReq->textFileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->createTextFileWithOptions($WorkspaceId, $createTextFileReq, $headers, $runtime);
    }

    /**
     * 生成合同审查结果.
     *
     * @param tmpReq - RunContractResultGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunContractResultGenerationResponse
     *
     * @param string                             $workspaceId
     * @param RunContractResultGenerationRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return RunContractResultGenerationResponse
     */
    public function runContractResultGenerationWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunContractResultGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assistant) {
            $request->assistantShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assistant, 'assistant', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->assistantShrink) {
            @$body['assistant'] = $request->assistantShrink;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunContractResultGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/farui/contract/result/genarate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunContractResultGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成合同审查结果.
     *
     * @param Request - RunContractResultGenerationRequest
     *
     * @returns RunContractResultGenerationResponse
     *
     * @param string                             $workspaceId
     * @param RunContractResultGenerationRequest $request
     *
     * @return RunContractResultGenerationResponse
     */
    public function runContractResultGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runContractResultGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 生成合同审查规则.
     *
     * @param tmpReq - RunContractRuleGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunContractRuleGenerationResponse
     *
     * @param string                           $workspaceId
     * @param RunContractRuleGenerationRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RunContractRuleGenerationResponse
     */
    public function runContractRuleGenerationWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunContractRuleGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assistant) {
            $request->assistantShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assistant, 'assistant', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->assistantShrink) {
            @$body['assistant'] = $request->assistantShrink;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunContractRuleGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/farui/contract/rule/genarate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunContractRuleGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成合同审查规则.
     *
     * @param Request - RunContractRuleGenerationRequest
     *
     * @returns RunContractRuleGenerationResponse
     *
     * @param string                           $workspaceId
     * @param RunContractRuleGenerationRequest $request
     *
     * @return RunContractRuleGenerationResponse
     */
    public function runContractRuleGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runContractRuleGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 法律咨询.
     *
     * @param tmpReq - RunLegalAdviceConsultationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunLegalAdviceConsultationResponse
     *
     * @param string                            $workspaceId
     * @param RunLegalAdviceConsultationRequest $tmpReq
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return RunLegalAdviceConsultationResponse
     */
    public function runLegalAdviceConsultationWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunLegalAdviceConsultationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assistant) {
            $request->assistantShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assistant, 'assistant', 'json');
        }

        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'extra', 'json');
        }

        if (null !== $tmpReq->thread) {
            $request->threadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thread, 'thread', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->assistantShrink) {
            @$body['assistant'] = $request->assistantShrink;
        }

        if (null !== $request->extraShrink) {
            @$body['extra'] = $request->extraShrink;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->threadShrink) {
            @$body['thread'] = $request->threadShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunLegalAdviceConsultation',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/farui/legalAdvice/consult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunLegalAdviceConsultationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 法律咨询.
     *
     * @param Request - RunLegalAdviceConsultationRequest
     *
     * @returns RunLegalAdviceConsultationResponse
     *
     * @param string                            $workspaceId
     * @param RunLegalAdviceConsultationRequest $request
     *
     * @return RunLegalAdviceConsultationResponse
     */
    public function runLegalAdviceConsultation($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runLegalAdviceConsultationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 案例检索.
     *
     * @param tmpReq - RunSearchCaseFullTextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSearchCaseFullTextResponse
     *
     * @param string                       $workspaceId
     * @param RunSearchCaseFullTextRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RunSearchCaseFullTextResponse
     */
    public function runSearchCaseFullTextWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunSearchCaseFullTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterCondition) {
            $request->filterConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'filterCondition', 'json');
        }

        if (null !== $tmpReq->pageParam) {
            $request->pageParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pageParam, 'pageParam', 'json');
        }

        if (null !== $tmpReq->queryKeywords) {
            $request->queryKeywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryKeywords, 'queryKeywords', 'json');
        }

        if (null !== $tmpReq->sortKeyAndDirection) {
            $request->sortKeyAndDirectionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sortKeyAndDirection, 'sortKeyAndDirection', 'json');
        }

        if (null !== $tmpReq->thread) {
            $request->threadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thread, 'thread', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->filterConditionShrink) {
            @$body['filterCondition'] = $request->filterConditionShrink;
        }

        if (null !== $request->pageParamShrink) {
            @$body['pageParam'] = $request->pageParamShrink;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryKeywordsShrink) {
            @$body['queryKeywords'] = $request->queryKeywordsShrink;
        }

        if (null !== $request->referLevel) {
            @$body['referLevel'] = $request->referLevel;
        }

        if (null !== $request->sortKeyAndDirectionShrink) {
            @$body['sortKeyAndDirection'] = $request->sortKeyAndDirectionShrink;
        }

        if (null !== $request->threadShrink) {
            @$body['thread'] = $request->threadShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSearchCaseFullText',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/farui/search/case/fulltext',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSearchCaseFullTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 案例检索.
     *
     * @param Request - RunSearchCaseFullTextRequest
     *
     * @returns RunSearchCaseFullTextResponse
     *
     * @param string                       $workspaceId
     * @param RunSearchCaseFullTextRequest $request
     *
     * @return RunSearchCaseFullTextResponse
     */
    public function runSearchCaseFullText($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runSearchCaseFullTextWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 法规搜索.
     *
     * @param tmpReq - RunSearchLawQueryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSearchLawQueryResponse
     *
     * @param string                   $workspaceId
     * @param RunSearchLawQueryRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunSearchLawQueryResponse
     */
    public function runSearchLawQueryWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RunSearchLawQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filterCondition) {
            $request->filterConditionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'filterCondition', 'json');
        }

        if (null !== $tmpReq->pageParam) {
            $request->pageParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pageParam, 'pageParam', 'json');
        }

        if (null !== $tmpReq->queryKeywords) {
            $request->queryKeywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryKeywords, 'queryKeywords', 'json');
        }

        if (null !== $tmpReq->thread) {
            $request->threadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thread, 'thread', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->filterConditionShrink) {
            @$body['filterCondition'] = $request->filterConditionShrink;
        }

        if (null !== $request->pageParamShrink) {
            @$body['pageParam'] = $request->pageParamShrink;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryKeywordsShrink) {
            @$body['queryKeywords'] = $request->queryKeywordsShrink;
        }

        if (null !== $request->threadShrink) {
            @$body['thread'] = $request->threadShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSearchLawQuery',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/farui/search/law/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSearchLawQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 法规搜索.
     *
     * @param Request - RunSearchLawQueryRequest
     *
     * @returns RunSearchLawQueryResponse
     *
     * @param string                   $workspaceId
     * @param RunSearchLawQueryRequest $request
     *
     * @return RunSearchLawQueryResponse
     */
    public function runSearchLawQuery($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runSearchLawQueryWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
