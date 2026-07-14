<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CommercializeFetchRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CommercializeFetchResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogAnalysisTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDocsSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateFinReportSummaryTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateFinReportSummaryTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateImageDetectionTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePdfTranslateTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePdfTranslateTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateQualityCheckTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateVideoCreationTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DashscopeAsyncTaskFinishEventHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DashscopeAsyncTaskFinishEventRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DashscopeAsyncTaskFinishEventResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\DeleteLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EndToEndRealTimeDialogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EndToEndRealTimeDialogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EvictTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\EvictTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GenDocQaResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetAppConfigResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogDetailRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogDetailResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogLogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentUrlResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetHistoryListByBizTypeResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetParseResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetReportResponseRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetReportResponseResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetReportTaskStatusRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetReportTaskStatusResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\InvokePluginResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryApiKeysHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryApiKeysRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryApiKeysResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryRedemptionRecordsHeaders;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryRedemptionRecordsRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\QueryRedemptionRecordsResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealtimeDialogAssistResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RealTimeDialogResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RebuildTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RebuildTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\ReIndexResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RetryReportTaskRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RetryReportTaskResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunDialogAnalysisRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunDialogAnalysisResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentChunkRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentChunkResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryResponse;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentAdvanceRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentRequest;
use AlibabaCloud\SDK\DianJin\V20240628\Models\UploadDocumentResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\undefined;
use Darabonba\OpenApi\Utils;

class DianJin extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'dianjin.cn-beijing.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dianjin', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
                $tmp = '' . @$form['host'];
                $host = '' . $bucketName . '.' . $tmp . '';
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => $host,
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_runtime['stream'] = true;
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
     * 申请取数.
     *
     * @param Request - CommercializeFetchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommercializeFetchResponse
     *
     * @param string                    $workspaceId
     * @param string                    $cjfCode
     * @param string                    $zjfCode
     * @param CommercializeFetchRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CommercializeFetchResponse
     */
    public function commercializeFetchWithOptions($workspaceId, $cjfCode, $zjfCode, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelId) {
            @$body['channelId'] = $request->channelId;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->encryptType) {
            @$body['encryptType'] = $request->encryptType;
        }

        if (null !== $request->env) {
            @$body['env'] = $request->env;
        }

        if (null !== $request->productId) {
            @$body['productId'] = $request->productId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->secretKey) {
            @$body['secretKey'] = $request->secretKey;
        }

        if (null !== $request->sign) {
            @$body['sign'] = $request->sign;
        }

        if (null !== $request->signType) {
            @$body['signType'] = $request->signType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommercializeFetch',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/spi/path/' . Url::percentEncode($cjfCode) . '/api/support/' . Url::percentEncode($zjfCode) . '/firefly/commercializeFetch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CommercializeFetchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请取数.
     *
     * @param Request - CommercializeFetchRequest
     *
     * @returns CommercializeFetchResponse
     *
     * @param string                    $workspaceId
     * @param string                    $cjfCode
     * @param string                    $zjfCode
     * @param CommercializeFetchRequest $request
     *
     * @return CommercializeFetchResponse
     */
    public function commercializeFetch($workspaceId, $cjfCode, $zjfCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commercializeFetchWithOptions($workspaceId, $cjfCode, $zjfCode, $request, $headers, $runtime);
    }

    /**
     * Create a task to summarize documents by year.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain your [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateAnnualDocSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnnualDocSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateAnnualDocSummaryTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAnnualDocSummaryTaskResponse
     */
    public function createAnnualDocSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->anaYears) {
            @$body['anaYears'] = $request->anaYears;
        }

        if (null !== $request->docInfos) {
            @$body['docInfos'] = $request->docInfos;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAnnualDocSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/doc/annual',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAnnualDocSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a task to summarize documents by year.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain your [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateAnnualDocSummaryTaskRequest
     *
     * @returns CreateAnnualDocSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateAnnualDocSummaryTaskRequest $request
     *
     * @return CreateAnnualDocSummaryTaskResponse
     */
    public function createAnnualDocSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAnnualDocSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates an outbound call session.
     *
     * @param Request - CreateDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDialogResponse
     *
     * @param string              $workspaceId
     * @param CreateDialogRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDialogResponse
     */
    public function createDialogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['channel'] = $request->channel;
        }

        if (null !== $request->enableLibrary) {
            @$body['enableLibrary'] = $request->enableLibrary;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->playCode) {
            @$body['playCode'] = $request->playCode;
        }

        if (null !== $request->qaLibraryList) {
            @$body['qaLibraryList'] = $request->qaLibraryList;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->selfDirected) {
            @$body['selfDirected'] = $request->selfDirected;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDialog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an outbound call session.
     *
     * @param Request - CreateDialogRequest
     *
     * @returns CreateDialogResponse
     *
     * @param string              $workspaceId
     * @param CreateDialogRequest $request
     *
     * @return CreateDialogResponse
     */
    public function createDialog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDialogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a session analysis task. After the task is created, use the session ID with GetDialogAnalysisResult to retrieve the results.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for DianJin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and DianJin.
     * Obtain a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateDialogAnalysisTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDialogAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateDialogAnalysisTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDialogAnalysisTaskResponse
     */
    public function createDialogAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysisNodes) {
            @$body['analysisNodes'] = $request->analysisNodes;
        }

        if (null !== $request->conversationList) {
            @$body['conversationList'] = $request->conversationList;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->playCode) {
            @$body['playCode'] = $request->playCode;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDialogAnalysisTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/analysis/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDialogAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a session analysis task. After the task is created, use the session ID with GetDialogAnalysisResult to retrieve the results.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for DianJin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and DianJin.
     * Obtain a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateDialogAnalysisTaskRequest
     *
     * @returns CreateDialogAnalysisTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateDialogAnalysisTaskRequest $request
     *
     * @return CreateDialogAnalysisTaskResponse
     */
    public function createDialogAnalysisTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDialogAnalysisTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a multi-document summary task.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * You have obtained a [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateDocsSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocsSummaryTaskResponse
     *
     * @param string                       $workspaceId
     * @param CreateDocsSummaryTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDocsSummaryTaskResponse
     */
    public function createDocsSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docInfos) {
            @$body['docInfos'] = $request->docInfos;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDocsSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/docs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDocsSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a multi-document summary task.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * You have obtained a [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateDocsSummaryTaskRequest
     *
     * @returns CreateDocsSummaryTaskResponse
     *
     * @param string                       $workspaceId
     * @param CreateDocsSummaryTaskRequest $request
     *
     * @return CreateDocsSummaryTaskResponse
     */
    public function createDocsSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDocsSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a financial report summary.
     *
     * @remarks
     * Before using this API, review the pricing and billing methods for Alibaba Cloud Gold products.
     * **Prerequisites**
     * - Enable Alibaba Cloud Model Studio and Alibaba Cloud Gold services.
     * - Obtain the workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateFinReportSummaryTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFinReportSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateFinReportSummaryTaskRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateFinReportSummaryTaskResponse
     */
    public function createFinReportSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->enableTable) {
            @$body['enableTable'] = $request->enableTable;
        }

        if (null !== $request->endPage) {
            @$body['endPage'] = $request->endPage;
        }

        if (null !== $request->instruction) {
            @$body['instruction'] = $request->instruction;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->startPage) {
            @$body['startPage'] = $request->startPage;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFinReportSummaryTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFinReportSummaryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a financial report summary.
     *
     * @remarks
     * Before using this API, review the pricing and billing methods for Alibaba Cloud Gold products.
     * **Prerequisites**
     * - Enable Alibaba Cloud Model Studio and Alibaba Cloud Gold services.
     * - Obtain the workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateFinReportSummaryTaskRequest
     *
     * @returns CreateFinReportSummaryTaskResponse
     *
     * @param string                            $workspaceId
     * @param CreateFinReportSummaryTaskRequest $request
     *
     * @return CreateFinReportSummaryTaskResponse
     */
    public function createFinReportSummaryTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFinReportSummaryTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建图片检测任务
     *
     * @param Request - CreateImageDetectionTaskRequest
     * @param headers - CreateImageDetectionTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageDetectionTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateImageDetectionTaskRequest $request
     * @param CreateImageDetectionTaskHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateImageDetectionTaskResponse
     */
    public function createImageDetectionTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileInfo) {
            @$body['fileInfo'] = $request->fileInfo;
        }

        if (null !== $request->fileUrl) {
            @$body['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateImageDetectionTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/imageDetect/task/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateImageDetectionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建图片检测任务
     *
     * @param Request - CreateImageDetectionTaskRequest
     *
     * @returns CreateImageDetectionTaskResponse
     *
     * @param string                          $workspaceId
     * @param CreateImageDetectionTaskRequest $request
     *
     * @return CreateImageDetectionTaskResponse
     */
    public function createImageDetectionTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateImageDetectionTaskHeaders([]);

        return $this->createImageDetectionTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a document library. A document library isolates document and index data. If your use case requires frequent natural language search by category, create multiple libraries to isolate different data types. You can customize vector and text indexes by format.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID: Retrieve the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibraryResponse
     *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLibraryResponse
     */
    public function createLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->indexSetting) {
            @$body['indexSetting'] = $request->indexSetting;
        }

        if (null !== $request->libraryName) {
            @$body['libraryName'] = $request->libraryName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a document library. A document library isolates document and index data. If your use case requires frequent natural language search by category, create multiple libraries to isolate different data types. You can customize vector and text indexes by format.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID: Retrieve the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateLibraryRequest
     *
     * @returns CreateLibraryResponse
     *
     * @param string               $workspaceId
     * @param CreateLibraryRequest $request
     *
     * @return CreateLibraryResponse
     */
    public function createLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Create a PDF document translation task. Submit the task to start asynchronous translation.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID. To obtain your [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreatePdfTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdfTranslateTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreatePdfTranslateTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePdfTranslateTaskResponse
     */
    public function createPdfTranslateTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->knowledge) {
            @$body['knowledge'] = $request->knowledge;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->translateTo) {
            @$body['translateTo'] = $request->translateTo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePdfTranslateTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/pdfTranslate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdfTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a PDF document translation task. Submit the task to start asynchronous translation.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing for Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID. To obtain your [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreatePdfTranslateTaskRequest
     *
     * @returns CreatePdfTranslateTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreatePdfTranslateTaskRequest $request
     *
     * @return CreatePdfTranslateTaskResponse
     */
    public function createPdfTranslateTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdfTranslateTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates document chunks based on your business scenarios.
     *
     * @remarks
     * Before using this API, review the billing methods and pricing for Tongyi Dianjin.
     * **Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain a workspace ID. For more information, see [Get a workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreatePredefinedDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePredefinedDocumentResponse
     *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunks) {
            @$body['chunks'] = $request->chunks;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePredefinedDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/createPredefinedDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePredefinedDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates document chunks based on your business scenarios.
     *
     * @remarks
     * Before using this API, review the billing methods and pricing for Tongyi Dianjin.
     * **Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain a workspace ID. For more information, see [Get a workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreatePredefinedDocumentRequest
     *
     * @returns CreatePredefinedDocumentResponse
     *
     * @param string                          $workspaceId
     * @param CreatePredefinedDocumentRequest $request
     *
     * @return CreatePredefinedDocumentResponse
     */
    public function createPredefinedDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPredefinedDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Creates a quality check task.
     *
     * @remarks
     * Before using this API, review the pricing and billing methods for the Tongyi Dianjin product.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * Obtain the workspaceId: Retrieve the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateQualityCheckTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQualityCheckTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreateQualityCheckTaskRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateQualityCheckTaskResponse
     */
    public function createQualityCheckTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conversationList) {
            @$body['conversationList'] = $request->conversationList;
        }

        if (null !== $request->gmtService) {
            @$body['gmtService'] = $request->gmtService;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->qualityGroup) {
            @$body['qualityGroup'] = $request->qualityGroup;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->sceneCode) {
            @$body['sceneCode'] = $request->sceneCode;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQualityCheckTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/qualitycheck/task/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateQualityCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a quality check task.
     *
     * @remarks
     * Before using this API, review the pricing and billing methods for the Tongyi Dianjin product.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * Obtain the workspaceId: Retrieve the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - CreateQualityCheckTaskRequest
     *
     * @returns CreateQualityCheckTaskResponse
     *
     * @param string                        $workspaceId
     * @param CreateQualityCheckTaskRequest $request
     *
     * @return CreateQualityCheckTaskResponse
     */
    public function createQualityCheckTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQualityCheckTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建视频生成任务
     *
     * @param Request - CreateVideoCreationTaskRequest
     * @param headers - CreateVideoCreationTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoCreationTaskResponse
     *
     * @param string                         $workspaceId
     * @param CreateVideoCreationTaskRequest $request
     * @param CreateVideoCreationTaskHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVideoCreationTaskResponse
     */
    public function createVideoCreationTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->creationInstruction) {
            @$body['creationInstruction'] = $request->creationInstruction;
        }

        if (null !== $request->fileInfo) {
            @$body['fileInfo'] = $request->fileInfo;
        }

        if (null !== $request->imageDetectionTaskId) {
            @$body['imageDetectionTaskId'] = $request->imageDetectionTaskId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVideoCreationTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/videoCreation/task/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVideoCreationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建视频生成任务
     *
     * @param Request - CreateVideoCreationTaskRequest
     *
     * @returns CreateVideoCreationTaskResponse
     *
     * @param string                         $workspaceId
     * @param CreateVideoCreationTaskRequest $request
     *
     * @return CreateVideoCreationTaskResponse
     */
    public function createVideoCreationTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVideoCreationTaskHeaders([]);

        return $this->createVideoCreationTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * A callback event that indicates the completion of a Dashscope asynchronous task.
     *
     * @param Request - DashscopeAsyncTaskFinishEventRequest
     * @param headers - DashscopeAsyncTaskFinishEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DashscopeAsyncTaskFinishEventResponse
     *
     * @param string                               $workspaceId
     * @param DashscopeAsyncTaskFinishEventRequest $request
     * @param DashscopeAsyncTaskFinishEventHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DashscopeAsyncTaskFinishEventResponse
     */
    public function dashscopeAsyncTaskFinishEventWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DashscopeAsyncTaskFinishEvent',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/event/dashscopeAsyncTaskFinish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DashscopeAsyncTaskFinishEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A callback event that indicates the completion of a Dashscope asynchronous task.
     *
     * @param Request - DashscopeAsyncTaskFinishEventRequest
     *
     * @returns DashscopeAsyncTaskFinishEventResponse
     *
     * @param string                               $workspaceId
     * @param DashscopeAsyncTaskFinishEventRequest $request
     *
     * @return DashscopeAsyncTaskFinishEventResponse
     */
    public function dashscopeAsyncTaskFinishEvent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DashscopeAsyncTaskFinishEventHeaders([]);

        return $this->dashscopeAsyncTaskFinishEventWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a document. After deletion, you cannot view the original document or recall it.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain your workspace ID: retrieve your [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - DeleteDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocumentResponse
     *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docIds) {
            @$body['docIds'] = $request->docIds;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a document. After deletion, you cannot view the original document or recall it.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain your workspace ID: retrieve your [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - DeleteDocumentRequest
     *
     * @returns DeleteDocumentResponse
     *
     * @param string                $workspaceId
     * @param DeleteDocumentRequest $request
     *
     * @return DeleteDocumentResponse
     */
    public function deleteDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Delete a document library. ⚠️ This operation deletes the library and all its associated documents.
     *
     * @remarks
     * *Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain your workspaceId. For more information, refer to the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - DeleteLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLibraryResponse
     *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a document library. ⚠️ This operation deletes the library and all its associated documents.
     *
     * @remarks
     * *Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain your workspaceId. For more information, refer to the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - DeleteLibraryRequest
     *
     * @returns DeleteLibraryResponse
     *
     * @param string               $workspaceId
     * @param DeleteLibraryRequest $request
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * This API uses the WebSocket protocol to perform real-time conversational transcription, intent recognition, and speech synthesis. It supports various audio formats for both input and output to ensure real-time performance and high compatibility.
     *
     * @param Request - EndToEndRealTimeDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndToEndRealTimeDialogResponse
     *
     * @param string                        $workspaceId
     * @param EndToEndRealTimeDialogRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return EndToEndRealTimeDialogResponse
     */
    public function endToEndRealTimeDialogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asrModelId) {
            @$query['asrModelId'] = $request->asrModelId;
        }

        if (null !== $request->inputFormat) {
            @$query['inputFormat'] = $request->inputFormat;
        }

        if (null !== $request->outputFormat) {
            @$query['outputFormat'] = $request->outputFormat;
        }

        if (null !== $request->pitchRate) {
            @$query['pitchRate'] = $request->pitchRate;
        }

        if (null !== $request->sampleRate) {
            @$query['sampleRate'] = $request->sampleRate;
        }

        if (null !== $request->speechRate) {
            @$query['speechRate'] = $request->speechRate;
        }

        if (null !== $request->ttsModelId) {
            @$query['ttsModelId'] = $request->ttsModelId;
        }

        if (null !== $request->voiceCode) {
            @$query['voiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EndToEndRealTimeDialog',
            'version' => '2024-06-28',
            'protocol' => 'wss',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/ws/realtime/dialog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
            'websocketSubProtocol' => 'awap',
        ]);
        $res = new EndToEndRealTimeDialogResponse([]);
        $tmp = $this->callApi($params, $req, $runtime);
        if (null !== @$tmp['webSocketClient']) {
            $res->webSocketClient = undefined::createWebSocketClient(@$tmp['webSocketClient']);
        }

        return $res;
    }

    /**
     * This API uses the WebSocket protocol to perform real-time conversational transcription, intent recognition, and speech synthesis. It supports various audio formats for both input and output to ensure real-time performance and high compatibility.
     *
     * @param Request - EndToEndRealTimeDialogRequest
     *
     * @returns EndToEndRealTimeDialogResponse
     *
     * @param string                        $workspaceId
     * @param EndToEndRealTimeDialogRequest $request
     *
     * @return EndToEndRealTimeDialogResponse
     */
    public function endToEndRealTimeDialog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->endToEndRealTimeDialogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Terminate the job.
     *
     * @param Request - EvictTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EvictTaskResponse
     *
     * @param string           $workspaceId
     * @param EvictTaskRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return EvictTaskResponse
     */
    public function evictTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EvictTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/evict',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EvictTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminate the job.
     *
     * @param Request - EvictTaskRequest
     *
     * @returns EvictTaskResponse
     *
     * @param string           $workspaceId
     * @param EvictTaskRequest $request
     *
     * @return EvictTaskResponse
     */
    public function evictTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->evictTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 兑换权益.
     *
     * @param Request - ExchangeEntitlementRequest
     * @param headers - ExchangeEntitlementHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExchangeEntitlementResponse
     *
     * @param string                     $workspaceId
     * @param string                     $tenantId
     * @param ExchangeEntitlementRequest $request
     * @param ExchangeEntitlementHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExchangeEntitlementResponse
     */
    public function exchangeEntitlementWithOptions($workspaceId, $tenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->externalUserId) {
            @$body['externalUserId'] = $request->externalUserId;
        }

        if (null !== $request->keyHash) {
            @$body['keyHash'] = $request->keyHash;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->templateId) {
            @$body['templateId'] = $request->templateId;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExchangeEntitlement',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/v1/tenants/' . Url::percentEncode($tenantId) . '/redeem',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExchangeEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 兑换权益.
     *
     * @param Request - ExchangeEntitlementRequest
     *
     * @returns ExchangeEntitlementResponse
     *
     * @param string                     $workspaceId
     * @param string                     $tenantId
     * @param ExchangeEntitlementRequest $request
     *
     * @return ExchangeEntitlementResponse
     */
    public function exchangeEntitlement($workspaceId, $tenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExchangeEntitlementHeaders([]);

        return $this->exchangeEntitlementWithOptions($workspaceId, $tenantId, $request, $headers, $runtime);
    }

    /**
     * Parses question and answer (Q&A) pairs from a document. You can use the UpdateQaLibrary API to update the Q&A pairs.
     *
     * @remarks
     * Before you use this API, make sure you understand the billing methods and pricing of the Tongyi Dianjin product.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and the Tongyi Dianjin service.
     * Obtain a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GenDocQaResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenDocQaResultResponse
     *
     * @param string                $workspaceId
     * @param GenDocQaResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenDocQaResultResponse
     */
    public function genDocQaResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenDocQaResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/qa/parse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenDocQaResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Parses question and answer (Q&A) pairs from a document. You can use the UpdateQaLibrary API to update the Q&A pairs.
     *
     * @remarks
     * Before you use this API, make sure you understand the billing methods and pricing of the Tongyi Dianjin product.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and the Tongyi Dianjin service.
     * Obtain a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GenDocQaResultRequest
     *
     * @returns GenDocQaResultResponse
     *
     * @param string                $workspaceId
     * @param GenDocQaResultRequest $request
     *
     * @return GenDocQaResultResponse
     */
    public function genDocQaResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genDocQaResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve app configuration.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Gold services.
     * - You can obtain the workspace ID. For details, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%E3%80%9DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetAppConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppConfigResponse
     *
     * @param string              $workspaceId
     * @param GetAppConfigRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfigWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAppConfig',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/app/config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve app configuration.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Gold services.
     * - You can obtain the workspace ID. For details, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%E3%80%9DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetAppConfigRequest
     *
     * @returns GetAppConfigResponse
     *
     * @param string              $workspaceId
     * @param GetAppConfigRequest $request
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfig($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppConfigWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the Q&A results generated by the SubmitChatQuestion API.
     *
     * @param Request - GetChatQuestionRespRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatQuestionRespResponse
     *
     * @param string                     $workspaceId
     * @param GetChatQuestionRespRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetChatQuestionRespResponse
     */
    public function getChatQuestionRespWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->batchId) {
            @$body['batchId'] = $request->batchId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetChatQuestionResp',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/chat/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatQuestionRespResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the Q&A results generated by the SubmitChatQuestion API.
     *
     * @param Request - GetChatQuestionRespRequest
     *
     * @returns GetChatQuestionRespResponse
     *
     * @param string                     $workspaceId
     * @param GetChatQuestionRespRequest $request
     *
     * @return GetChatQuestionRespResponse
     */
    public function getChatQuestionResp($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatQuestionRespWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve session analysis results. You can retrieve results in batches by specifying a list of session IDs or a time range.
     *
     * @param Request - GetDialogAnalysisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDialogAnalysisResultResponse
     *
     * @param string                         $workspaceId
     * @param GetDialogAnalysisResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDialogAnalysisResultResponse
     */
    public function getDialogAnalysisResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->asc) {
            @$body['asc'] = $request->asc;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->sessionIds) {
            @$body['sessionIds'] = $request->sessionIds;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->useUrl) {
            @$body['useUrl'] = $request->useUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDialogAnalysisResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDialogAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve session analysis results. You can retrieve results in batches by specifying a list of session IDs or a time range.
     *
     * @param Request - GetDialogAnalysisResultRequest
     *
     * @returns GetDialogAnalysisResultResponse
     *
     * @param string                         $workspaceId
     * @param GetDialogAnalysisResultRequest $request
     *
     * @return GetDialogAnalysisResultResponse
     */
    public function getDialogAnalysisResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDialogAnalysisResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve session details.
     *
     * @param Request - GetDialogDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDialogDetailResponse
     *
     * @param string                 $workspaceId
     * @param GetDialogDetailRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDialogDetailResponse
     */
    public function getDialogDetailWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDialogDetail',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDialogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve session details.
     *
     * @param Request - GetDialogDetailRequest
     *
     * @returns GetDialogDetailResponse
     *
     * @param string                 $workspaceId
     * @param GetDialogDetailRequest $request
     *
     * @return GetDialogDetailResponse
     */
    public function getDialogDetail($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDialogDetailWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves records of real-time conversations and the results of intent analysis.
     *
     * @remarks
     * ## Request description
     * This API retrieves conversation records between customers and service agents, along with intent analysis results generated by the model.
     *
     * @param Request - GetDialogLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDialogLogResponse
     *
     * @param string              $workspaceId
     * @param GetDialogLogRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDialogLogResponse
     */
    public function getDialogLogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDialogLog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/dialog/log',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDialogLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves records of real-time conversations and the results of intent analysis.
     *
     * @remarks
     * ## Request description
     * This API retrieves conversation records between customers and service agents, along with intent analysis results generated by the model.
     *
     * @param Request - GetDialogLogRequest
     *
     * @returns GetDialogLogResponse
     *
     * @param string              $workspaceId
     * @param GetDialogLogRequest $request
     *
     * @return GetDialogLogResponse
     */
    public function getDialogLog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDialogLogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve a list of document chunks. You can filter them by query conditions.
     *
     * @remarks
     * *Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Gold Service.
     * - Obtain the workspaceId and the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%B3).
     *
     * @param Request - GetDocumentChunkListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentChunkListResponse
     *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetDocumentChunkListResponse
     */
    public function getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunkIdList) {
            @$body['chunkIdList'] = $request->chunkIdList;
        }

        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$body['orderBy'] = $request->orderBy;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->searchQuery) {
            @$body['searchQuery'] = $request->searchQuery;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocumentChunkList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/getDocumentChunk',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentChunkListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve a list of document chunks. You can filter them by query conditions.
     *
     * @remarks
     * *Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Gold Service.
     * - Obtain the workspaceId and the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%B3).
     *
     * @param Request - GetDocumentChunkListRequest
     *
     * @returns GetDocumentChunkListResponse
     *
     * @param string                      $workspaceId
     * @param GetDocumentChunkListRequest $request
     *
     * @return GetDocumentChunkListResponse
     */
    public function getDocumentChunkList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentChunkListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of documents from a document library. This operation supports paged queries and filtering by document status.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and the Tongyi Gold Point service.
     * - You have obtained a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetDocumentListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentListResponse
     *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetDocumentListResponse
     */
    public function getDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocumentList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/listDocument',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of documents from a document library. This operation supports paged queries and filtering by document status.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and the Tongyi Gold Point service.
     * - You have obtained a workspace ID. For more information, see [Get a workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetDocumentListRequest
     *
     * @returns GetDocumentListResponse
     *
     * @param string                 $workspaceId
     * @param GetDocumentListRequest $request
     *
     * @return GetDocumentListResponse
     */
    public function getDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve a download URL for a document. The URL expires after 1 hour.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetDocumentUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocumentUrlResponse
     *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetDocumentUrlResponse
     */
    public function getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDocumentUrl',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDocumentUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve a download URL for a document. The URL expires after 1 hour.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetDocumentUrlRequest
     *
     * @returns GetDocumentUrlResponse
     *
     * @param string                $workspaceId
     * @param GetDocumentUrlRequest $request
     *
     * @return GetDocumentUrlResponse
     */
    public function getDocumentUrl($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocumentUrlWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * This operation retrieves a list of documents. You can filter documents by metadata or use paging.
     *
     * @remarks
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * To obtain the workspace ID, see [the document about obtaining the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetFilterDocumentListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFilterDocumentListResponse
     *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetFilterDocumentListResponse
     */
    public function getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->and) {
            @$body['and'] = $request->and;
        }

        if (null !== $request->docIdList) {
            @$body['docIdList'] = $request->docIdList;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->or) {
            @$body['or'] = $request->or;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFilterDocumentList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/filterDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFilterDocumentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation retrieves a list of documents. You can filter documents by metadata or use paging.
     *
     * @remarks
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * To obtain the workspace ID, see [the document about obtaining the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetFilterDocumentListRequest
     *
     * @returns GetFilterDocumentListResponse
     *
     * @param string                       $workspaceId
     * @param GetFilterDocumentListRequest $request
     *
     * @return GetFilterDocumentListResponse
     */
    public function getFilterDocumentList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFilterDocumentListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve conversation history records by business type.
     *
     * @param Request - GetHistoryListByBizTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoryListByBizTypeResponse
     *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['bizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['bizType'] = $request->bizType;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHistoryListByBizType',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/history/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHistoryListByBizTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve conversation history records by business type.
     *
     * @param Request - GetHistoryListByBizTypeRequest
     *
     * @returns GetHistoryListByBizTypeResponse
     *
     * @param string                         $workspaceId
     * @param GetHistoryListByBizTypeRequest $request
     *
     * @return GetHistoryListByBizTypeResponse
     */
    public function getHistoryListByBizType($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistoryListByBizTypeWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取检测结果.
     *
     * @param Request - GetImageDetectionTaskResultRequest
     * @param headers - GetImageDetectionTaskResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageDetectionTaskResultResponse
     *
     * @param string                             $workspaceId
     * @param GetImageDetectionTaskResultRequest $request
     * @param GetImageDetectionTaskResultHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetImageDetectionTaskResultResponse
     */
    public function getImageDetectionTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageDetectionTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/imageDetect/task/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetImageDetectionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取检测结果.
     *
     * @param Request - GetImageDetectionTaskResultRequest
     *
     * @returns GetImageDetectionTaskResultResponse
     *
     * @param string                             $workspaceId
     * @param GetImageDetectionTaskResultRequest $request
     *
     * @return GetImageDetectionTaskResultResponse
     */
    public function getImageDetectionTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetImageDetectionTaskResultHeaders([]);

        return $this->getImageDetectionTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the detailed configuration of a document library, including its name, description, and index settings.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain a [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryResponse
     *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetLibraryResponse
     */
    public function getLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libraryId) {
            @$query['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the detailed configuration of a document library, including its name, description, and index settings.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain a [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetLibraryRequest
     *
     * @returns GetLibraryResponse
     *
     * @param string            $workspaceId
     * @param GetLibraryRequest $request
     *
     * @return GetLibraryResponse
     */
    public function getLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve the document library list. The list includes document names, descriptions, and unique identifiers.
     *
     * @remarks
     * Prerequisites
     * - You must activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain the workspaceId. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetLibraryListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryListResponse
     *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLibraryListResponse
     */
    public function getLibraryListWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLibraryList',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the document library list. The list includes document names, descriptions, and unique identifiers.
     *
     * @remarks
     * Prerequisites
     * - You must activate Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain the workspaceId. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetLibraryListRequest
     *
     * @returns GetLibraryListResponse
     *
     * @param string                $workspaceId
     * @param GetLibraryListRequest $request
     *
     * @return GetLibraryListResponse
     */
    public function getLibraryList($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryListWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve document parsing results. You can query the document\\"s parsing status and obtain the parsing results.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Gold services.
     * - Obtain the workspace ID. For more information, see [the workspace identity document](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetParseResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParseResultResponse
     *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetParseResultResponse
     */
    public function getParseResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->useUrlResult) {
            @$body['useUrlResult'] = $request->useUrlResult;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetParseResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/getParseResult',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetParseResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve document parsing results. You can query the document\\"s parsing status and obtain the parsing results.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Gold services.
     * - Obtain the workspace ID. For more information, see [the workspace identity document](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - GetParseResultRequest
     *
     * @returns GetParseResultResponse
     *
     * @param string                $workspaceId
     * @param GetParseResultRequest $request
     *
     * @return GetParseResultResponse
     */
    public function getParseResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParseResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieve quality check results.
     *
     * @param Request - GetQualityCheckTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityCheckTaskResultResponse
     *
     * @param string                           $workspaceId
     * @param GetQualityCheckTaskResultRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetQualityCheckTaskResultResponse
     */
    public function getQualityCheckTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityCheckTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/qualitycheck/task/query',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQualityCheckTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve quality check results.
     *
     * @param Request - GetQualityCheckTaskResultRequest
     *
     * @returns GetQualityCheckTaskResultResponse
     *
     * @param string                           $workspaceId
     * @param GetQualityCheckTaskResultRequest $request
     *
     * @return GetQualityCheckTaskResultResponse
     */
    public function getQualityCheckTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQualityCheckTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取报告结果.
     *
     * @param Request - GetReportResponseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportResponseResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sceneCode
     * @param string                   $fundProduct
     * @param string                   $outRequestNo
     * @param GetReportResponseRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetReportResponseResponse
     */
    public function getReportResponseWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetReportResponse',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/firefly/v1/' . Url::percentEncode($sceneCode) . '/' . Url::percentEncode($fundProduct) . '/tasks/' . Url::percentEncode($outRequestNo) . '/report',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReportResponseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取报告结果.
     *
     * @param Request - GetReportResponseRequest
     *
     * @returns GetReportResponseResponse
     *
     * @param string                   $workspaceId
     * @param string                   $sceneCode
     * @param string                   $fundProduct
     * @param string                   $outRequestNo
     * @param GetReportResponseRequest $request
     *
     * @return GetReportResponseResponse
     */
    public function getReportResponse($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReportResponseWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime);
    }

    /**
     * 获取任务状态
     *
     * @param Request - GetReportTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportTaskStatusResponse
     *
     * @param string                     $workspaceId
     * @param string                     $sceneCode
     * @param string                     $fundProduct
     * @param string                     $outRequestNo
     * @param GetReportTaskStatusRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetReportTaskStatusResponse
     */
    public function getReportTaskStatusWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetReportTaskStatus',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/firefly/v1/' . Url::percentEncode($sceneCode) . '/' . Url::percentEncode($fundProduct) . '/tasks/' . Url::percentEncode($outRequestNo) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务状态
     *
     * @param Request - GetReportTaskStatusRequest
     *
     * @returns GetReportTaskStatusResponse
     *
     * @param string                     $workspaceId
     * @param string                     $sceneCode
     * @param string                     $fundProduct
     * @param string                     $outRequestNo
     * @param GetReportTaskStatusRequest $request
     *
     * @return GetReportTaskStatusResponse
     */
    public function getReportTaskStatus($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReportTaskStatusWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime);
    }

    /**
     * Retrieves the result of a financial report summary task.
     *
     * @param Request - GetSummaryTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSummaryTaskResultResponse
     *
     * @param string                      $workspaceId
     * @param GetSummaryTaskResultRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSummaryTaskResultResponse
     */
    public function getSummaryTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSummaryTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/summary/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSummaryTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the result of a financial report summary task.
     *
     * @param Request - GetSummaryTaskResultRequest
     *
     * @returns GetSummaryTaskResultResponse
     *
     * @param string                      $workspaceId
     * @param GetSummaryTaskResultRequest $request
     *
     * @return GetSummaryTaskResultResponse
     */
    public function getSummaryTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSummaryTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the result of an asynchronous task.
     *
     * @param Request - GetTaskResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResultResponse
     *
     * @param string               $workspaceId
     * @param GetTaskResultRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the result of an asynchronous task.
     *
     * @param Request - GetTaskResultRequest
     *
     * @returns GetTaskResultResponse
     *
     * @param string               $workspaceId
     * @param GetTaskResultRequest $request
     *
     * @return GetTaskResultResponse
     */
    public function getTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Gets the status of a task.
     *
     * @param Request - GetTaskStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskStatusResponse
     *
     * @param string               $workspaceId
     * @param GetTaskStatusRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskStatus',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the status of a task.
     *
     * @param Request - GetTaskStatusRequest
     *
     * @returns GetTaskStatusResponse
     *
     * @param string               $workspaceId
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskStatusWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 查询用量明细.
     *
     * @param Request - GetUsageRequest
     * @param headers - GetUsageHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUsageResponse
     *
     * @param string          $workspaceId
     * @param string          $tenantId
     * @param GetUsageRequest $request
     * @param GetUsageHeaders $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetUsageResponse
     */
    public function getUsageWithOptions($workspaceId, $tenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalUserId) {
            @$query['externalUserId'] = $request->externalUserId;
        }

        if (null !== $request->redemptionOrderNo) {
            @$query['redemptionOrderNo'] = $request->redemptionOrderNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUsage',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/v1/tenants/' . Url::percentEncode($tenantId) . '/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用量明细.
     *
     * @param Request - GetUsageRequest
     *
     * @returns GetUsageResponse
     *
     * @param string          $workspaceId
     * @param string          $tenantId
     * @param GetUsageRequest $request
     *
     * @return GetUsageResponse
     */
    public function getUsage($workspaceId, $tenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUsageHeaders([]);

        return $this->getUsageWithOptions($workspaceId, $tenantId, $request, $headers, $runtime);
    }

    /**
     * 获取视频生成任务结果.
     *
     * @param Request - GetVideoCreationTaskResultRequest
     * @param headers - GetVideoCreationTaskResultHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoCreationTaskResultResponse
     *
     * @param string                            $workspaceId
     * @param GetVideoCreationTaskResultRequest $request
     * @param GetVideoCreationTaskResultHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetVideoCreationTaskResultResponse
     */
    public function getVideoCreationTaskResultWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVideoCreationTaskResult',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/videoCreation/task/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVideoCreationTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取视频生成任务结果.
     *
     * @param Request - GetVideoCreationTaskResultRequest
     *
     * @returns GetVideoCreationTaskResultResponse
     *
     * @param string                            $workspaceId
     * @param GetVideoCreationTaskResultRequest $request
     *
     * @return GetVideoCreationTaskResultResponse
     */
    public function getVideoCreationTaskResult($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetVideoCreationTaskResultHeaders([]);

        return $this->getVideoCreationTaskResultWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Call a plugin and retrieve its response.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - InvokePluginRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokePluginResponse
     *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return InvokePluginResponse
     */
    public function invokePluginWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        if (null !== $request->pluginId) {
            @$body['pluginId'] = $request->pluginId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokePlugin',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/plugin/invoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return InvokePluginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call a plugin and retrieve its response.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin services.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - InvokePluginRequest
     *
     * @returns InvokePluginResponse
     *
     * @param string              $workspaceId
     * @param InvokePluginRequest $request
     *
     * @return InvokePluginResponse
     */
    public function invokePlugin($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->invokePluginWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Preview documents. Retrieve document download links, types, and titles. Use this operation to preview documents.
     *
     * @remarks
     * *Prerequisites**
     * - You must activate Alibaba Cloud Model Studio and Tongyi Gold services.
     * - Obtain the workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - PreviewDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewDocumentResponse
     *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PreviewDocumentResponse
     */
    public function previewDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreviewDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/preview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PreviewDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Preview documents. Retrieve document download links, types, and titles. Use this operation to preview documents.
     *
     * @remarks
     * *Prerequisites**
     * - You must activate Alibaba Cloud Model Studio and Tongyi Gold services.
     * - Obtain the workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - PreviewDocumentRequest
     *
     * @returns PreviewDocumentResponse
     *
     * @param string                 $workspaceId
     * @param PreviewDocumentRequest $request
     *
     * @return PreviewDocumentResponse
     */
    public function previewDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 查询兑换记录.
     *
     * @param Request - QueryApiKeysRequest
     * @param headers - QueryApiKeysHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApiKeysResponse
     *
     * @param string              $workspaceId
     * @param string              $tenantId
     * @param QueryApiKeysRequest $request
     * @param QueryApiKeysHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryApiKeysResponse
     */
    public function queryApiKeysWithOptions($workspaceId, $tenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalUserId) {
            @$query['externalUserId'] = $request->externalUserId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryApiKeys',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/v1/tenants/' . Url::percentEncode($tenantId) . '/apikeys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryApiKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询兑换记录.
     *
     * @param Request - QueryApiKeysRequest
     *
     * @returns QueryApiKeysResponse
     *
     * @param string              $workspaceId
     * @param string              $tenantId
     * @param QueryApiKeysRequest $request
     *
     * @return QueryApiKeysResponse
     */
    public function queryApiKeys($workspaceId, $tenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryApiKeysHeaders([]);

        return $this->queryApiKeysWithOptions($workspaceId, $tenantId, $request, $headers, $runtime);
    }

    /**
     * 查询兑换记录.
     *
     * @param Request - QueryRedemptionRecordsRequest
     * @param headers - QueryRedemptionRecordsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRedemptionRecordsResponse
     *
     * @param string                        $workspaceId
     * @param string                        $tenantId
     * @param QueryRedemptionRecordsRequest $request
     * @param QueryRedemptionRecordsHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryRedemptionRecordsResponse
     */
    public function queryRedemptionRecordsWithOptions($workspaceId, $tenantId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalUserId) {
            @$query['externalUserId'] = $request->externalUserId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->redemptionOrderNo) {
            @$query['redemptionOrderNo'] = $request->redemptionOrderNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xLoadTest) {
            @$realHeaders['X-Load-Test'] = json_encode($headers->xLoadTest, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRedemptionRecords',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/v1/tenants/' . Url::percentEncode($tenantId) . '/redemption-records',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryRedemptionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询兑换记录.
     *
     * @param Request - QueryRedemptionRecordsRequest
     *
     * @returns QueryRedemptionRecordsResponse
     *
     * @param string                        $workspaceId
     * @param string                        $tenantId
     * @param QueryRedemptionRecordsRequest $request
     *
     * @return QueryRedemptionRecordsResponse
     */
    public function queryRedemptionRecords($workspaceId, $tenantId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryRedemptionRecordsHeaders([]);

        return $this->queryRedemptionRecordsWithOptions($workspaceId, $tenantId, $request, $headers, $runtime);
    }

    /**
     * Reindexing reprocesses the specified document by parsing it, splitting it into chunks, and building a new index.
     *
     * @remarks
     * Before you use this operation, review the billing method and pricing for Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID: Retrieve the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - ReIndexRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReIndexResponse
     *
     * @param string         $workspaceId
     * @param ReIndexRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReIndexResponse
     */
    public function reIndexWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->documentId) {
            @$query['documentId'] = $request->documentId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReIndex',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/reIndex',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reindexing reprocesses the specified document by parsing it, splitting it into chunks, and building a new index.
     *
     * @remarks
     * Before you use this operation, review the billing method and pricing for Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID: Retrieve the [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - ReIndexRequest
     *
     * @returns ReIndexResponse
     *
     * @param string         $workspaceId
     * @param ReIndexRequest $request
     *
     * @return ReIndexResponse
     */
    public function reIndex($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reIndexWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Starts a real-time session. After you create a session by calling the CreateDialog API, use this API to conduct the real-time interaction.
     *
     * @remarks
     * Before using this API, make sure you understand the billing methods and pricing of the Tongyi Gold service.
     * Prerequisites
     * Alibaba Cloud Model Studio and the Tongyi Gold service are activated.
     * Obtain a workspaceId. For more information, see [Get an app ID and workspace](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RealTimeDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RealTimeDialogResponse
     *
     * @param string                $workspaceId
     * @param RealTimeDialogRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RealTimeDialogResponse
     */
    public function realTimeDialogWithSSE($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversationModel) {
            @$body['conversationModel'] = $request->conversationModel;
        }

        if (null !== $request->dialogMemoryTurns) {
            @$body['dialogMemoryTurns'] = $request->dialogMemoryTurns;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->opType) {
            @$body['opType'] = $request->opType;
        }

        if (null !== $request->recommend) {
            @$body['recommend'] = $request->recommend;
        }

        if (null !== $request->scriptContentPlayed) {
            @$body['scriptContentPlayed'] = $request->scriptContentPlayed;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->userVad) {
            @$body['userVad'] = $request->userVad;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RealTimeDialog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/realtime/dialog/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RealTimeDialogResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Starts a real-time session. After you create a session by calling the CreateDialog API, use this API to conduct the real-time interaction.
     *
     * @remarks
     * Before using this API, make sure you understand the billing methods and pricing of the Tongyi Gold service.
     * Prerequisites
     * Alibaba Cloud Model Studio and the Tongyi Gold service are activated.
     * Obtain a workspaceId. For more information, see [Get an app ID and workspace](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RealTimeDialogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RealTimeDialogResponse
     *
     * @param string                $workspaceId
     * @param RealTimeDialogRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RealTimeDialogResponse
     */
    public function realTimeDialogWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversationModel) {
            @$body['conversationModel'] = $request->conversationModel;
        }

        if (null !== $request->dialogMemoryTurns) {
            @$body['dialogMemoryTurns'] = $request->dialogMemoryTurns;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->opType) {
            @$body['opType'] = $request->opType;
        }

        if (null !== $request->recommend) {
            @$body['recommend'] = $request->recommend;
        }

        if (null !== $request->scriptContentPlayed) {
            @$body['scriptContentPlayed'] = $request->scriptContentPlayed;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->userVad) {
            @$body['userVad'] = $request->userVad;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RealTimeDialog',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/realtime/dialog/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RealTimeDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a real-time session. After you create a session by calling the CreateDialog API, use this API to conduct the real-time interaction.
     *
     * @remarks
     * Before using this API, make sure you understand the billing methods and pricing of the Tongyi Gold service.
     * Prerequisites
     * Alibaba Cloud Model Studio and the Tongyi Gold service are activated.
     * Obtain a workspaceId. For more information, see [Get an app ID and workspace](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RealTimeDialogRequest
     *
     * @returns RealTimeDialogResponse
     *
     * @param string                $workspaceId
     * @param RealTimeDialogRequest $request
     *
     * @return RealTimeDialogResponse
     */
    public function realTimeDialog($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->realTimeDialogWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Provides real-time dialog assistance after a session is created using CreateDialog. Note: This operation returns multiple intents, tags, and SOP flows. Unlike real-time sessions, it does not support streaming responses.
     *
     * @remarks
     * Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/model-studio/tongyi-dianjin-overview?spm=a2c4g.11186623.help-menu-2400256.d_1_6_6_0.15e77499sSMTGb) of Alibaba Cloud Model Studio DianJin.
     * Prerequisites
     * Activate the Alibaba Cloud Model Studio and Model Studio DianJin services.
     * Obtain the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8) to use as your workspaceId.
     *
     * @param Request - RealtimeDialogAssistRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RealtimeDialogAssistResponse
     *
     * @param string                      $workspaceId
     * @param RealtimeDialogAssistRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RealtimeDialogAssistResponse
     */
    public function realtimeDialogAssistWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversationModel) {
            @$body['conversationModel'] = $request->conversationModel;
        }

        if (null !== $request->dialogMemoryTurns) {
            @$body['dialogMemoryTurns'] = $request->dialogMemoryTurns;
        }

        if (null !== $request->hangUpDialog) {
            @$body['hangUpDialog'] = $request->hangUpDialog;
        }

        if (null !== $request->metaData) {
            @$body['metaData'] = $request->metaData;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->scriptContentPlayed) {
            @$body['scriptContentPlayed'] = $request->scriptContentPlayed;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->userVad) {
            @$body['userVad'] = $request->userVad;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RealtimeDialogAssist',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/realtime/dialog/assist',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RealtimeDialogAssistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides real-time dialog assistance after a session is created using CreateDialog. Note: This operation returns multiple intents, tags, and SOP flows. Unlike real-time sessions, it does not support streaming responses.
     *
     * @remarks
     * Before you use this API, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/model-studio/tongyi-dianjin-overview?spm=a2c4g.11186623.help-menu-2400256.d_1_6_6_0.15e77499sSMTGb) of Alibaba Cloud Model Studio DianJin.
     * Prerequisites
     * Activate the Alibaba Cloud Model Studio and Model Studio DianJin services.
     * Obtain the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8) to use as your workspaceId.
     *
     * @param Request - RealtimeDialogAssistRequest
     *
     * @returns RealtimeDialogAssistResponse
     *
     * @param string                      $workspaceId
     * @param RealtimeDialogAssistRequest $request
     *
     * @return RealtimeDialogAssistResponse
     */
    public function realtimeDialogAssist($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->realtimeDialogAssistWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Rebuilds an existing task. You cannot rebuild tasks that are queued or currently executing.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for the Dianjin service.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and the Dianjin service.
     * You have obtained a workspace ID. For more information, see [Get an app ID and workspace](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RebuildTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebuildTaskResponse
     *
     * @param string             $workspaceId
     * @param RebuildTaskRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RebuildTaskResponse
     */
    public function rebuildTaskWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskIds) {
            @$body['taskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RebuildTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/task/rebuild',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RebuildTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebuilds an existing task. You cannot rebuild tasks that are queued or currently executing.
     *
     * @remarks
     * Before you use this API, review the billing methods and pricing for the Dianjin service.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and the Dianjin service.
     * You have obtained a workspace ID. For more information, see [Get an app ID and workspace](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RebuildTaskRequest
     *
     * @returns RebuildTaskResponse
     *
     * @param string             $workspaceId
     * @param RebuildTaskRequest $request
     *
     * @return RebuildTaskResponse
     */
    public function rebuildTask($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebuildTaskWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * You can retrieve document chunks from a document library using text. You can specify the number of chunks to retrieve, filter them by metadata conditions, and choose whether to complete the document chunks.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio service and the Tongyi Dianjin service.
     * - Obtain the workspace ID. Obtain the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%93%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RecallDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecallDocumentResponse
     *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RecallDocumentResponse
     */
    public function recallDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->filters) {
            @$body['filters'] = $request->filters;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->rearrangement) {
            @$body['rearrangement'] = $request->rearrangement;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecallDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/recallDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RecallDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can retrieve document chunks from a document library using text. You can specify the number of chunks to retrieve, filter them by metadata conditions, and choose whether to complete the document chunks.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio service and the Tongyi Dianjin service.
     * - Obtain the workspace ID. Obtain the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%93%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RecallDocumentRequest
     *
     * @returns RecallDocumentResponse
     *
     * @param string                $workspaceId
     * @param RecallDocumentRequest $request
     *
     * @return RecallDocumentResponse
     */
    public function recallDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recallDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Detects intents. This operation supports global and hierarchical intent detection, attitude detection, and enterprise detection.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing of Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RecognizeIntentionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeIntentionResponse
     *
     * @param string                    $workspaceId
     * @param RecognizeIntentionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RecognizeIntentionResponse
     */
    public function recognizeIntentionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysis) {
            @$body['analysis'] = $request->analysis;
        }

        if (null !== $request->bizType) {
            @$body['bizType'] = $request->bizType;
        }

        if (null !== $request->conversation) {
            @$body['conversation'] = $request->conversation;
        }

        if (null !== $request->globalIntentionList) {
            @$body['globalIntentionList'] = $request->globalIntentionList;
        }

        if (null !== $request->hierarchicalIntentionList) {
            @$body['hierarchicalIntentionList'] = $request->hierarchicalIntentionList;
        }

        if (null !== $request->intentionDomainCode) {
            @$body['intentionDomainCode'] = $request->intentionDomainCode;
        }

        if (null !== $request->intentionList) {
            @$body['intentionList'] = $request->intentionList;
        }

        if (null !== $request->opType) {
            @$body['opType'] = $request->opType;
        }

        if (null !== $request->recommend) {
            @$body['recommend'] = $request->recommend;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecognizeIntention',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/recog/intent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RecognizeIntentionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects intents. This operation supports global and hierarchical intent detection, attitude detection, and enterprise detection.
     *
     * @remarks
     * Before you use this operation, review the billing methods and pricing of Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a [workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RecognizeIntentionRequest
     *
     * @returns RecognizeIntentionResponse
     *
     * @param string                    $workspaceId
     * @param RecognizeIntentionRequest $request
     *
     * @return RecognizeIntentionResponse
     */
    public function recognizeIntention($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recognizeIntentionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * 重试任务
     *
     * @param Request - RetryReportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryReportTaskResponse
     *
     * @param string                 $workspaceId
     * @param string                 $sceneCode
     * @param string                 $fundProduct
     * @param string                 $outRequestNo
     * @param RetryReportTaskRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RetryReportTaskResponse
     */
    public function retryReportTaskWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RetryReportTask',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/firefly/v1/' . Url::percentEncode($sceneCode) . '/' . Url::percentEncode($fundProduct) . '/tasks/' . Url::percentEncode($outRequestNo) . '/retry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetryReportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重试任务
     *
     * @param Request - RetryReportTaskRequest
     *
     * @returns RetryReportTaskResponse
     *
     * @param string                 $workspaceId
     * @param string                 $sceneCode
     * @param string                 $fundProduct
     * @param string                 $outRequestNo
     * @param RetryReportTaskRequest $request
     *
     * @return RetryReportTaskResponse
     */
    public function retryReportTask($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryReportTaskWithOptions($workspaceId, $sceneCode, $fundProduct, $outRequestNo, $request, $headers, $runtime);
    }

    /**
     * Run an agent. This API supports both streaming and non-streaming responses.
     *
     * @remarks
     * Before you use this API, review the billing model and pricing for Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain a workspace ID: [Obtain your workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunAgentResponse
     *
     * @param string          $workspaceId
     * @param RunAgentRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RunAgentResponse
     */
    public function runAgentWithSSE($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->botId) {
            @$body['botId'] = $request->botId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->useDraft) {
            @$body['useDraft'] = $request->useDraft;
        }

        if (null !== $request->userContent) {
            @$body['userContent'] = $request->userContent;
        }

        if (null !== $request->userInputs) {
            @$body['userInputs'] = $request->userInputs;
        }

        if (null !== $request->versionId) {
            @$body['versionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunAgent',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/bot/thread/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RunAgentResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Run an agent. This API supports both streaming and non-streaming responses.
     *
     * @remarks
     * Before you use this API, review the billing model and pricing for Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain a workspace ID: [Obtain your workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunAgentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunAgentResponse
     *
     * @param string          $workspaceId
     * @param RunAgentRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RunAgentResponse
     */
    public function runAgentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->botId) {
            @$body['botId'] = $request->botId;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->useDraft) {
            @$body['useDraft'] = $request->useDraft;
        }

        if (null !== $request->userContent) {
            @$body['userContent'] = $request->userContent;
        }

        if (null !== $request->userInputs) {
            @$body['userInputs'] = $request->userInputs;
        }

        if (null !== $request->versionId) {
            @$body['versionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunAgent',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/bot/thread/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Run an agent. This API supports both streaming and non-streaming responses.
     *
     * @remarks
     * Before you use this API, review the billing model and pricing for Tongyi Dianjin.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain a workspace ID: [Obtain your workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunAgentRequest
     *
     * @returns RunAgentResponse
     *
     * @param string          $workspaceId
     * @param RunAgentRequest $request
     *
     * @return RunAgentResponse
     */
    public function runAgent($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runAgentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Generates chat responses. You can select a model for the conversation and choose streaming or non-streaming output.
     *
     * @remarks
     * Before you use this API, review the billing method and pricing for Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain your workspace ID: retrieve your [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunChatResultGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunChatResultGenerationResponse
     *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RunChatResultGenerationResponse
     */
    public function runChatResultGenerationWithSSE($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inferenceParameters) {
            @$body['inferenceParameters'] = $request->inferenceParameters;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunChatResultGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RunChatResultGenerationResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Generates chat responses. You can select a model for the conversation and choose streaming or non-streaming output.
     *
     * @remarks
     * Before you use this API, review the billing method and pricing for Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain your workspace ID: retrieve your [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunChatResultGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunChatResultGenerationResponse
     *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RunChatResultGenerationResponse
     */
    public function runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inferenceParameters) {
            @$body['inferenceParameters'] = $request->inferenceParameters;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->modelId) {
            @$body['modelId'] = $request->modelId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunChatResultGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunChatResultGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates chat responses. You can select a model for the conversation and choose streaming or non-streaming output.
     *
     * @remarks
     * Before you use this API, review the billing method and pricing for Alibaba Cloud Tongyi Dianjin.
     * **Prerequisites**
     * - Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain your workspace ID: retrieve your [workspace identifier](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunChatResultGenerationRequest
     *
     * @returns RunChatResultGenerationResponse
     *
     * @param string                         $workspaceId
     * @param RunChatResultGenerationRequest $request
     *
     * @return RunChatResultGenerationResponse
     */
    public function runChatResultGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runChatResultGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves session analysis results through a streaming API.
     *
     * @remarks
     * Before you use this API, make sure that you understand the billing methods and pricing for Tongyi Gold.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Gold.
     * You must have a workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunDialogAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDialogAnalysisResponse
     *
     * @param string                   $workspaceId
     * @param RunDialogAnalysisRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunDialogAnalysisResponse
     */
    public function runDialogAnalysisWithSSE($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDialogAnalysis',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/stream/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RunDialogAnalysisResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Retrieves session analysis results through a streaming API.
     *
     * @remarks
     * Before you use this API, make sure that you understand the billing methods and pricing for Tongyi Gold.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Gold.
     * You must have a workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunDialogAnalysisRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDialogAnalysisResponse
     *
     * @param string                   $workspaceId
     * @param RunDialogAnalysisRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RunDialogAnalysisResponse
     */
    public function runDialogAnalysisWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDialogAnalysis',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/dialog/stream/analysis',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunDialogAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves session analysis results through a streaming API.
     *
     * @remarks
     * Before you use this API, make sure that you understand the billing methods and pricing for Tongyi Gold.
     * Prerequisites
     * You have activated Alibaba Cloud Model Studio and Tongyi Gold.
     * You must have a workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - RunDialogAnalysisRequest
     *
     * @returns RunDialogAnalysisResponse
     *
     * @param string                   $workspaceId
     * @param RunDialogAnalysisRequest $request
     *
     * @return RunDialogAnalysisResponse
     */
    public function runDialogAnalysis($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runDialogAnalysisWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Generates a chat response from a document library. You can ask questions in natural language, and the system retrieves relevant information to provide a summarized answer.
     *
     * @param Request - RunLibraryChatGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunLibraryChatGenerationResponse
     *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGenerationWithSSE($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docIdList) {
            @$body['docIdList'] = $request->docIdList;
        }

        if (null !== $request->enableFollowUp) {
            @$body['enableFollowUp'] = $request->enableFollowUp;
        }

        if (null !== $request->enableMultiQuery) {
            @$body['enableMultiQuery'] = $request->enableMultiQuery;
        }

        if (null !== $request->enableOpenQa) {
            @$body['enableOpenQa'] = $request->enableOpenQa;
        }

        if (null !== $request->followUpLlm) {
            @$body['followUpLlm'] = $request->followUpLlm;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->llmType) {
            @$body['llmType'] = $request->llmType;
        }

        if (null !== $request->multiQueryLlm) {
            @$body['multiQueryLlm'] = $request->multiQueryLlm;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryCriteria) {
            @$body['queryCriteria'] = $request->queryCriteria;
        }

        if (null !== $request->rerankType) {
            @$body['rerankType'] = $request->rerankType;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->subQueryList) {
            @$body['subQueryList'] = $request->subQueryList;
        }

        if (null !== $request->textSearchParameter) {
            @$body['textSearchParameter'] = $request->textSearchParameter;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->vectorSearchParameter) {
            @$body['vectorSearchParameter'] = $request->vectorSearchParameter;
        }

        if (null !== $request->withDocumentReference) {
            @$body['withDocumentReference'] = $request->withDocumentReference;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunLibraryChatGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/library/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield RunLibraryChatGenerationResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Generates a chat response from a document library. You can ask questions in natural language, and the system retrieves relevant information to provide a summarized answer.
     *
     * @param Request - RunLibraryChatGenerationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunLibraryChatGenerationResponse
     *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docIdList) {
            @$body['docIdList'] = $request->docIdList;
        }

        if (null !== $request->enableFollowUp) {
            @$body['enableFollowUp'] = $request->enableFollowUp;
        }

        if (null !== $request->enableMultiQuery) {
            @$body['enableMultiQuery'] = $request->enableMultiQuery;
        }

        if (null !== $request->enableOpenQa) {
            @$body['enableOpenQa'] = $request->enableOpenQa;
        }

        if (null !== $request->followUpLlm) {
            @$body['followUpLlm'] = $request->followUpLlm;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->llmType) {
            @$body['llmType'] = $request->llmType;
        }

        if (null !== $request->multiQueryLlm) {
            @$body['multiQueryLlm'] = $request->multiQueryLlm;
        }

        if (null !== $request->query) {
            @$body['query'] = $request->query;
        }

        if (null !== $request->queryCriteria) {
            @$body['queryCriteria'] = $request->queryCriteria;
        }

        if (null !== $request->rerankType) {
            @$body['rerankType'] = $request->rerankType;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->subQueryList) {
            @$body['subQueryList'] = $request->subQueryList;
        }

        if (null !== $request->textSearchParameter) {
            @$body['textSearchParameter'] = $request->textSearchParameter;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->vectorSearchParameter) {
            @$body['vectorSearchParameter'] = $request->vectorSearchParameter;
        }

        if (null !== $request->withDocumentReference) {
            @$body['withDocumentReference'] = $request->withDocumentReference;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunLibraryChatGeneration',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/run/library/chat/generation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunLibraryChatGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a chat response from a document library. You can ask questions in natural language, and the system retrieves relevant information to provide a summarized answer.
     *
     * @param Request - RunLibraryChatGenerationRequest
     *
     * @returns RunLibraryChatGenerationResponse
     *
     * @param string                          $workspaceId
     * @param RunLibraryChatGenerationRequest $request
     *
     * @return RunLibraryChatGenerationResponse
     */
    public function runLibraryChatGeneration($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runLibraryChatGenerationWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Submit a list of questions and retrieve results by calling the `GetChatQuestionResp` API.
     *
     * @remarks
     * Review the pricing and billing details for the Tongyi Dianjin product before you use this API.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain the \\`workspaceId\\`: Retrieve the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - SubmitChatQuestionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitChatQuestionResponse
     *
     * @param string                    $workspaceId
     * @param SubmitChatQuestionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitChatQuestionResponse
     */
    public function submitChatQuestionWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->gmtService) {
            @$body['gmtService'] = $request->gmtService;
        }

        if (null !== $request->liveScriptContent) {
            @$body['liveScriptContent'] = $request->liveScriptContent;
        }

        if (null !== $request->openSmallTalk) {
            @$body['openSmallTalk'] = $request->openSmallTalk;
        }

        if (null !== $request->questionList) {
            @$body['questionList'] = $request->questionList;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitChatQuestion',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/chat/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubmitChatQuestionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submit a list of questions and retrieve results by calling the `GetChatQuestionResp` API.
     *
     * @remarks
     * Review the pricing and billing details for the Tongyi Dianjin product before you use this API.
     * Prerequisites
     * Activate Alibaba Cloud Model Studio and Tongyi Dianjin.
     * Obtain the \\`workspaceId\\`: Retrieve the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - SubmitChatQuestionRequest
     *
     * @returns SubmitChatQuestionResponse
     *
     * @param string                    $workspaceId
     * @param SubmitChatQuestionRequest $request
     *
     * @return SubmitChatQuestionResponse
     */
    public function submitChatQuestion($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitChatQuestionWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates the title, metadata, and other information of a document.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio service and the Tongyi Gold service.
     * - Obtain your workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDocumentResponse
     *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateDocumentResponse
     */
    public function updateDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['docId'] = $request->docId;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->meta) {
            @$body['meta'] = $request->meta;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/updateDocument',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the title, metadata, and other information of a document.
     *
     * @remarks
     * *Prerequisites**
     * - Activate the Alibaba Cloud Model Studio service and the Tongyi Gold service.
     * - Obtain your workspace ID. For more information, see [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateDocumentRequest
     *
     * @returns UpdateDocumentResponse
     *
     * @param string                $workspaceId
     * @param UpdateDocumentRequest $request
     *
     * @return UpdateDocumentResponse
     */
    public function updateDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Update the text content of a document chunk in a document.
     *
     * @remarks
     * Before using this API, ensure you understand the billing methods and pricing of the Tongyi Gold product.
     * Prerequisites
     * You must activate Alibaba Cloud Model Studio and Tongyi Gold services.
     * Obtain the workspaceId. For more information, see the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateDocumentChunkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDocumentChunkResponse
     *
     * @param string                     $workspaceId
     * @param UpdateDocumentChunkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDocumentChunkResponse
     */
    public function updateDocumentChunkWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->chunks) {
            @$body['chunks'] = $request->chunks;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDocumentChunk',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/updateDocumentChunk',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDocumentChunkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the text content of a document chunk in a document.
     *
     * @remarks
     * Before using this API, ensure you understand the billing methods and pricing of the Tongyi Gold product.
     * Prerequisites
     * You must activate Alibaba Cloud Model Studio and Tongyi Gold services.
     * Obtain the workspaceId. For more information, see the [workspace identity](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateDocumentChunkRequest
     *
     * @returns UpdateDocumentChunkResponse
     *
     * @param string                     $workspaceId
     * @param UpdateDocumentChunkRequest $request
     *
     * @return UpdateDocumentChunkResponse
     */
    public function updateDocumentChunk($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDocumentChunkWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates a document library. You can update the library name, description, and index configuration.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLibraryResponse
     *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->indexSetting) {
            @$body['indexSetting'] = $request->indexSetting;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->libraryName) {
            @$body['libraryName'] = $request->libraryName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a document library. You can update the library name, description, and index configuration.
     *
     * @remarks
     * *Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - Obtain the workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UpdateLibraryRequest
     *
     * @returns UpdateLibraryResponse
     *
     * @param string               $workspaceId
     * @param UpdateLibraryRequest $request
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Updates a Q&A library. After the update, use the GenDocQaResult API to parse the Q&A pairs.
     *
     * @param Request - UpdateQaLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQaLibraryResponse
     *
     * @param string                 $workspaceId
     * @param UpdateQaLibraryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateQaLibraryResponse
     */
    public function updateQaLibraryWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parseQaResults) {
            @$body['parseQaResults'] = $request->parseQaResults;
        }

        if (null !== $request->qaLibraryId) {
            @$body['qaLibraryId'] = $request->qaLibraryId;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQaLibrary',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/virtualHuman/qa/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateQaLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Q&A library. After the update, use the GenDocQaResult API to parse the Q&A pairs.
     *
     * @param Request - UpdateQaLibraryRequest
     *
     * @returns UpdateQaLibraryResponse
     *
     * @param string                 $workspaceId
     * @param UpdateQaLibraryRequest $request
     *
     * @return UpdateQaLibraryResponse
     */
    public function updateQaLibrary($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQaLibraryWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * Upload a document to a document library. The system parses the document, splits it into chunks, and builds an index.
     *
     * @remarks
     * Before you use this operation, review the Tongyi Dianjin pricing details.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UploadDocumentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDocumentResponse
     *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$body['fileUrl'] = $request->fileUrl;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDocument',
            'version' => '2024-06-28',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($workspaceId) . '/api/library/document/upload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UploadDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upload a document to a document library. The system parses the document, splits it into chunks, and builds an index.
     *
     * @remarks
     * Before you use this operation, review the Tongyi Dianjin pricing details.
     * **Prerequisites**
     * - You have activated Alibaba Cloud Model Studio and Tongyi Dianjin.
     * - You have obtained a workspace ID. For more information, see [Get the workspace ID](https://help.aliyun.com/zh/model-studio/developer-reference/get-app-id-and-workspace?spm=openapi-amp.newDocPublishment.0.0.2eb8281foUVd15#2612f896detsz:~:text=%E6%9F%A5%E7%9C%8BAPI%2DKEY%E3%80%82-,%E8%8E%B7%E5%8F%96APP%2DID%E5%92%8CWORKSPACE,-%E8%BF%9B%E5%85%A5%E6%88%91%E7%9A%84%E5%BA%94%E7%94%A8).
     *
     * @param Request - UploadDocumentRequest
     *
     * @returns UploadDocumentResponse
     *
     * @param string                $workspaceId
     * @param UploadDocumentRequest $request
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocument($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadDocumentWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $workspaceId
     * @param UploadDocumentAdvanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UploadDocumentResponse
     */
    public function uploadDocumentAdvance($workspaceId, $request, $headers, $runtime)
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
            'Product' => 'DianJin',
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
        $uploadDocumentReq = new UploadDocumentRequest([]);
        Utils::convert($request, $uploadDocumentReq);
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
                'host' => Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType),
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadDocumentReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadDocumentWithOptions($workspaceId, $uploadDocumentReq, $headers, $runtime);
    }
}
