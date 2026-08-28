<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622;

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
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\CancelTranslationTaskRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\CancelTranslationTaskResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetOriginalFileUrlRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetOriginalFileUrlResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslatedFileUrlRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslatedFileUrlResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslationTaskRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\GetTranslationTaskResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\ListTranslationTasksRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\ListTranslationTasksResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskResponse;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskShrinkRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\UploadTranslationFileAdvanceRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\UploadTranslationFileRequest;
use AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\UploadTranslationFileResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RealTranslationAgent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'public' => 'realtranslationagent.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('realtranslationagent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels a translation task that is currently running.
     *
     * @remarks
     * *Billing description**
     * After the task is successfully canceled, the Credits frozen for this translation task will be fully refunded to your account.
     * **Before you begin**
     * - This operation only supports canceling translation tasks that are in the processing state. Tasks that are completed or failed cannot be canceled.
     *
     * @param Request - CancelTranslationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTranslationTaskResponse
     *
     * @param CancelTranslationTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelTranslationTaskResponse
     */
    public function cancelTranslationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelTranslationTask',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelTranslationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a translation task that is currently running.
     *
     * @remarks
     * *Billing description**
     * After the task is successfully canceled, the Credits frozen for this translation task will be fully refunded to your account.
     * **Before you begin**
     * - This operation only supports canceling translation tasks that are in the processing state. Tasks that are completed or failed cannot be canceled.
     *
     * @param Request - CancelTranslationTaskRequest
     *
     * @returns CancelTranslationTaskResponse
     *
     * @param CancelTranslationTaskRequest $request
     *
     * @return CancelTranslationTaskResponse
     */
    public function cancelTranslationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTranslationTaskWithOptions($request, $runtime);
    }

    /**
     * Retrieves the download URL of the original file for a translation task.
     *
     * @param Request - GetOriginalFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginalFileUrlResponse
     *
     * @param GetOriginalFileUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOriginalFileUrlResponse
     */
    public function getOriginalFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOriginalFileUrl',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOriginalFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the download URL of the original file for a translation task.
     *
     * @param Request - GetOriginalFileUrlRequest
     *
     * @returns GetOriginalFileUrlResponse
     *
     * @param GetOriginalFileUrlRequest $request
     *
     * @return GetOriginalFileUrlResponse
     */
    public function getOriginalFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginalFileUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves the download URL of the translated file for a translation task.
     *
     * @param Request - GetTranslatedFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranslatedFileUrlResponse
     *
     * @param GetTranslatedFileUrlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTranslatedFileUrlResponse
     */
    public function getTranslatedFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTranslatedFileUrl',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranslatedFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the download URL of the translated file for a translation task.
     *
     * @param Request - GetTranslatedFileUrlRequest
     *
     * @returns GetTranslatedFileUrlResponse
     *
     * @param GetTranslatedFileUrlRequest $request
     *
     * @return GetTranslatedFileUrlResponse
     */
    public function getTranslatedFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslatedFileUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of a translation task.
     *
     * @param Request - GetTranslationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTranslationTaskResponse
     *
     * @param GetTranslationTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTranslationTaskResponse
     */
    public function getTranslationTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTranslationTask',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTranslationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a translation task.
     *
     * @param Request - GetTranslationTaskRequest
     *
     * @returns GetTranslationTaskResponse
     *
     * @param GetTranslationTaskRequest $request
     *
     * @return GetTranslationTaskResponse
     */
    public function getTranslationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranslationTaskWithOptions($request, $runtime);
    }

    /**
     * Queries translation tasks by paging.
     *
     * @param Request - ListTranslationTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTranslationTasksResponse
     *
     * @param ListTranslationTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTranslationTasksResponse
     */
    public function listTranslationTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->originalFileName) {
            @$query['OriginalFileName'] = $request->originalFileName;
        }

        if (null !== $request->sourceLanguage) {
            @$query['SourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->targetLanguage) {
            @$query['TargetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTranslationTasks',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTranslationTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries translation tasks by paging.
     *
     * @param Request - ListTranslationTasksRequest
     *
     * @returns ListTranslationTasksResponse
     *
     * @param ListTranslationTasksRequest $request
     *
     * @return ListTranslationTasksResponse
     */
    public function listTranslationTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranslationTasksWithOptions($request, $runtime);
    }

    /**
     * Submits a translation task. You can submit a new translation task by passing in a TaskId, or resubmit a historical task for translation by passing in a BaseTaskId. After successful submission, the translation task ID and current task status are returned. You can use the task ID to call subsequent operations to query translation progress and results.
     *
     * @remarks
     * *Billing description**
     * This operation involves Credits consumption. Before submitting a translation task, ensure that your account has sufficient Credits balance. After calling `UploadTranslationFile`, you can check the `CreditsAvailable` field in the response to confirm whether your current balance meets the requirements of this translation task. For detailed billing information, refer to the `CreditBreakdown` field.
     * **Task submission description**
     * - To submit a new translation task, pass in the `TaskId` returned by the `UploadTranslationFile` operation.
     * - To resubmit a historical task for translation, pass in the task ID of a previously submitted translation task, which is the `BaseTaskId`.
     * - You must pass in either `TaskId` or `BaseTaskId`. You cannot pass in both at the same time.
     * **Precautions**
     * - The `Style` parameter takes effect only when the translation file is a PPT file. Passing in this parameter for files in other formats has no effect.
     * - For new tasks, you can obtain the list of available fonts from the `Fonts` field in the response of `UploadTranslationFile`. For retranslation of historical tasks, you can obtain the list of available fonts by calling the `GetTranslationTask` operation.
     *
     * @param tmpReq - SubmitTranslationTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTranslationTaskResponse
     *
     * @param SubmitTranslationTaskRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitTranslationTaskResponse
     */
    public function submitTranslationTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTranslationTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        if (null !== $tmpReq->customTerms) {
            $request->customTermsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customTerms, 'CustomTerms', 'json');
        }

        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        if (null !== $request->customTermsShrink) {
            @$query['CustomTerms'] = $request->customTermsShrink;
        }

        $body = [];
        if (null !== $request->baseTaskId) {
            @$body['BaseTaskId'] = $request->baseTaskId;
        }

        if (null !== $request->configShrink) {
            @$body['Config'] = $request->configShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitTranslationTask',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTranslationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a translation task. You can submit a new translation task by passing in a TaskId, or resubmit a historical task for translation by passing in a BaseTaskId. After successful submission, the translation task ID and current task status are returned. You can use the task ID to call subsequent operations to query translation progress and results.
     *
     * @remarks
     * *Billing description**
     * This operation involves Credits consumption. Before submitting a translation task, ensure that your account has sufficient Credits balance. After calling `UploadTranslationFile`, you can check the `CreditsAvailable` field in the response to confirm whether your current balance meets the requirements of this translation task. For detailed billing information, refer to the `CreditBreakdown` field.
     * **Task submission description**
     * - To submit a new translation task, pass in the `TaskId` returned by the `UploadTranslationFile` operation.
     * - To resubmit a historical task for translation, pass in the task ID of a previously submitted translation task, which is the `BaseTaskId`.
     * - You must pass in either `TaskId` or `BaseTaskId`. You cannot pass in both at the same time.
     * **Precautions**
     * - The `Style` parameter takes effect only when the translation file is a PPT file. Passing in this parameter for files in other formats has no effect.
     * - For new tasks, you can obtain the list of available fonts from the `Fonts` field in the response of `UploadTranslationFile`. For retranslation of historical tasks, you can obtain the list of available fonts by calling the `GetTranslationTask` operation.
     *
     * @param Request - SubmitTranslationTaskRequest
     *
     * @returns SubmitTranslationTaskResponse
     *
     * @param SubmitTranslationTaskRequest $request
     *
     * @return SubmitTranslationTaskResponse
     */
    public function submitTranslationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranslationTaskWithOptions($request, $runtime);
    }

    /**
     * Uploads a document, parses document-related information, and generates a translation task. After a successful upload, the task ID and document parsing results are returned, including word count, page count, estimated Credits consumption, estimated translation time, detected language type, and font list. The system also performs sensitive information detection on the uploaded document, and you can decide whether to proceed with submitting the translation task based on the detection results.
     *
     * @remarks
     * > - This operation only involves document upload and information estimation. **No fees are incurred.** Credits consumption starts only after you **officially submit the translation** task.
     * **Language detection**
     * The system automatically detects the language type of the uploaded document. Currently, Chinese is supported.
     * **Sensitive information detection**
     * The system performs sensitive information detection on the uploaded document. If sensitive information is detected, the `SensitiveDetected` field in the response is set to `true`, and the `SensitiveTags` field returns the list of matched keywords.
     * >  - You can decide whether to proceed with submitting the translation task based on your actual needs.
     * >  - If the translation quality setting is set to ultimate mode when you submit the task, the system automatically switches the **portions containing sensitive information** to auto mode.
     * **Notes**
     * - Make sure the uploaded document format is supported by the system. Otherwise, parsing may fail.
     * - The `EstimatedCostCredits` value in the response is the estimated Credits consumption. The actual consumption is based on the settlement after the translation task is officially submitted.
     * - The `EstimatedTime` value in the response is the estimated translation duration in milliseconds. The actual translation duration may vary depending on document complexity.
     * - The `Fonts` field in the response contains the languages that support font modification and the corresponding font lists. You can select an appropriate font based on the target language.
     *
     * @param Request - UploadTranslationFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadTranslationFileResponse
     *
     * @param UploadTranslationFileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadTranslationFileResponse
     */
    public function uploadTranslationFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->APIKey) {
            @$query['APIKey'] = $request->APIKey;
        }

        if (null !== $request->file) {
            @$query['File'] = $request->file;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadTranslationFile',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadTranslationFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a document, parses document-related information, and generates a translation task. After a successful upload, the task ID and document parsing results are returned, including word count, page count, estimated Credits consumption, estimated translation time, detected language type, and font list. The system also performs sensitive information detection on the uploaded document, and you can decide whether to proceed with submitting the translation task based on the detection results.
     *
     * @remarks
     * > - This operation only involves document upload and information estimation. **No fees are incurred.** Credits consumption starts only after you **officially submit the translation** task.
     * **Language detection**
     * The system automatically detects the language type of the uploaded document. Currently, Chinese is supported.
     * **Sensitive information detection**
     * The system performs sensitive information detection on the uploaded document. If sensitive information is detected, the `SensitiveDetected` field in the response is set to `true`, and the `SensitiveTags` field returns the list of matched keywords.
     * >  - You can decide whether to proceed with submitting the translation task based on your actual needs.
     * >  - If the translation quality setting is set to ultimate mode when you submit the task, the system automatically switches the **portions containing sensitive information** to auto mode.
     * **Notes**
     * - Make sure the uploaded document format is supported by the system. Otherwise, parsing may fail.
     * - The `EstimatedCostCredits` value in the response is the estimated Credits consumption. The actual consumption is based on the settlement after the translation task is officially submitted.
     * - The `EstimatedTime` value in the response is the estimated translation duration in milliseconds. The actual translation duration may vary depending on document complexity.
     * - The `Fonts` field in the response contains the languages that support font modification and the corresponding font lists. You can select an appropriate font based on the target language.
     *
     * @param Request - UploadTranslationFileRequest
     *
     * @returns UploadTranslationFileResponse
     *
     * @param UploadTranslationFileRequest $request
     *
     * @return UploadTranslationFileResponse
     */
    public function uploadTranslationFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadTranslationFileWithOptions($request, $runtime);
    }

    /**
     * @param UploadTranslationFileAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UploadTranslationFileResponse
     */
    public function uploadTranslationFileAdvance($request, $runtime)
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
            'Product' => 'RealTranslationAgent',
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
        $uploadTranslationFileReq = new UploadTranslationFileRequest([]);
        Utils::convert($request, $uploadTranslationFileReq);
        if (null !== $request->fileObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileObject,
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
            $uploadTranslationFileReq->file = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadTranslationFileWithOptions($uploadTranslationFileReq, $runtime);
    }
}
