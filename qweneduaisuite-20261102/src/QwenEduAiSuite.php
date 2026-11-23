<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\ActivateQwenEduApiRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\ActivateQwenEduApiResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduHomeworkCorrectSubmitRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduHomeworkCorrectSubmitResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveShrinkRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetQwenEduApiActivationStatusRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetQwenEduApiActivationStatusResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class QwenEduAiSuite extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'QwenEduAiSuite';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qweneduaisuite', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Activates the learning capability for the current Alibaba Cloud account and supports querying the activation status.
     *
     * @remarks
     * ## Request description
     * - This operation activates the Qwen learning AI suite capability for the current Alibaba Cloud account.
     * - You must call this operation first. You can call business API operations such as problem solving and grading only after `ACTIVE` is returned.
     * ### Precautions
     * - Both Alibaba Cloud accounts and RAM users can call this operation.
     * - When a RAM user calls this operation, ensure that the RAM user has the required RAM permissions. The service is activated for the Alibaba Cloud account to which the RAM user belongs.
     * - This operation is idempotent based on the Alibaba Cloud account ID. Repeated calls do not result in multiple activations.
     *
     * @param request - ActivateQwenEduApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateQwenEduApiResponse
     *
     * @param ActivateQwenEduApiRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ActivateQwenEduApiResponse
     */
    public function activateQwenEduApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ActivateQwenEduApi',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/service/activate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ActivateQwenEduApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the learning capability for the current Alibaba Cloud account and supports querying the activation status.
     *
     * @remarks
     * ## Request description
     * - This operation activates the Qwen learning AI suite capability for the current Alibaba Cloud account.
     * - You must call this operation first. You can call business API operations such as problem solving and grading only after `ACTIVE` is returned.
     * ### Precautions
     * - Both Alibaba Cloud accounts and RAM users can call this operation.
     * - When a RAM user calls this operation, ensure that the RAM user has the required RAM permissions. The service is activated for the Alibaba Cloud account to which the RAM user belongs.
     * - This operation is idempotent based on the Alibaba Cloud account ID. Repeated calls do not result in multiple activations.
     *
     * @param request - ActivateQwenEduApiRequest
     *
     * @returns ActivateQwenEduApiResponse
     *
     * @param ActivateQwenEduApiRequest $request
     *
     * @return ActivateQwenEduApiResponse
     */
    public function activateQwenEduApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateQwenEduApiWithOptions($request, $headers, $runtime);
    }

    /**
     * Submits a single-page homework image and asynchronously retrieves the grading results.
     *
     * @remarks
     * ## Request description
     * - This operation submits a homework image to the server for question segmentation, recognition, and grading.
     * - You can submit the image by using `imageBase64` or `imageUrl`. `imageBase64` takes precedence.
     * - The optional `dewarp` parameter specifies whether to correct the image distortion. Default value: `true`.
     * - Provide `requestId` to facilitate troubleshooting and reconciliation.
     * - Image size limit: The Base64-encoded image size cannot exceed 15 MB.
     * - All requests and responses use the JSON format.
     *
     * @param request - CreateEduHomeworkCorrectSubmitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduHomeworkCorrectSubmitResponse
     *
     * @param CreateEduHomeworkCorrectSubmitRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateEduHomeworkCorrectSubmitResponse
     */
    public function createEduHomeworkCorrectSubmitWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dewarp) {
            @$body['dewarp'] = $request->dewarp;
        }

        if (null !== $request->imageBase64) {
            @$body['imageBase64'] = $request->imageBase64;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduHomeworkCorrectSubmit',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/homework/correct/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEduHomeworkCorrectSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a single-page homework image and asynchronously retrieves the grading results.
     *
     * @remarks
     * ## Request description
     * - This operation submits a homework image to the server for question segmentation, recognition, and grading.
     * - You can submit the image by using `imageBase64` or `imageUrl`. `imageBase64` takes precedence.
     * - The optional `dewarp` parameter specifies whether to correct the image distortion. Default value: `true`.
     * - Provide `requestId` to facilitate troubleshooting and reconciliation.
     * - Image size limit: The Base64-encoded image size cannot exceed 15 MB.
     * - All requests and responses use the JSON format.
     *
     * @param request - CreateEduHomeworkCorrectSubmitRequest
     *
     * @returns CreateEduHomeworkCorrectSubmitResponse
     *
     * @param CreateEduHomeworkCorrectSubmitRequest $request
     *
     * @return CreateEduHomeworkCorrectSubmitResponse
     */
    public function createEduHomeworkCorrectSubmit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEduHomeworkCorrectSubmitWithOptions($request, $headers, $runtime);
    }

    /**
     * Provides question resolution services by using image URLs or Base64 encoding.
     *
     * @remarks
     * ## Request description
     * - This API supports obtaining question resolution results by providing the URL or Base64 encoding of a question image.
     * - Supports processing a single image. The image format must be JPG, JPEG, or PNG.
     * - The image must be clear and complete. Avoid tilted, obscured, or irrelevant content.
     * - Each request can process only one image. Multi-image or plain text requests are not supported.
     * - The recommended image size is up to 1 MB, with a maximum of 10 MB. The image width and height must not exceed 8,000 pixels, and the total pixel count must not exceed 2.6 million.
     * - You must use the HTTPS protocol to call the API and provide image URLs.
     * - The user_id parameter must be an anonymized identifier. Do not pass direct identity information such as names or phone numbers.
     * - The API uses the HTTP POST method combined with Server-Sent Events (SSE) streaming response. The client must read the response event by event, rather than waiting for the connection to close to read the entire response.
     * - A successful response returns the question resolution process through a series of message events and ends with a complete event. If an error occurs, an error event is returned.
     * - For retryable errors such as TOO_MANY_ACTIVE_STREAMS, use an exponential backoff strategy to retry the request.
     * - Set a reasonable timeout period of at least 3 minutes on the client, and ensure that the proxy layer does not cache SSE responses.
     *
     * @param tmpReq - CreateEduProblemSolveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolveWithSSE($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEduProblemSolveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'query', 'json');
        }

        $body = [];
        if (null !== $request->queryShrink) {
            @$body['query'] = $request->queryShrink;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduProblemSolve',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/problem/solve/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield CreateEduProblemSolveResponse::fromMap([
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
     * Provides question resolution services by using image URLs or Base64 encoding.
     *
     * @remarks
     * ## Request description
     * - This API supports obtaining question resolution results by providing the URL or Base64 encoding of a question image.
     * - Supports processing a single image. The image format must be JPG, JPEG, or PNG.
     * - The image must be clear and complete. Avoid tilted, obscured, or irrelevant content.
     * - Each request can process only one image. Multi-image or plain text requests are not supported.
     * - The recommended image size is up to 1 MB, with a maximum of 10 MB. The image width and height must not exceed 8,000 pixels, and the total pixel count must not exceed 2.6 million.
     * - You must use the HTTPS protocol to call the API and provide image URLs.
     * - The user_id parameter must be an anonymized identifier. Do not pass direct identity information such as names or phone numbers.
     * - The API uses the HTTP POST method combined with Server-Sent Events (SSE) streaming response. The client must read the response event by event, rather than waiting for the connection to close to read the entire response.
     * - A successful response returns the question resolution process through a series of message events and ends with a complete event. If an error occurs, an error event is returned.
     * - For retryable errors such as TOO_MANY_ACTIVE_STREAMS, use an exponential backoff strategy to retry the request.
     * - Set a reasonable timeout period of at least 3 minutes on the client, and ensure that the proxy layer does not cache SSE responses.
     *
     * @param tmpReq - CreateEduProblemSolveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEduProblemSolveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'query', 'json');
        }

        $body = [];
        if (null !== $request->queryShrink) {
            @$body['query'] = $request->queryShrink;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduProblemSolve',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/problem/solve/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEduProblemSolveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides question resolution services by using image URLs or Base64 encoding.
     *
     * @remarks
     * ## Request description
     * - This API supports obtaining question resolution results by providing the URL or Base64 encoding of a question image.
     * - Supports processing a single image. The image format must be JPG, JPEG, or PNG.
     * - The image must be clear and complete. Avoid tilted, obscured, or irrelevant content.
     * - Each request can process only one image. Multi-image or plain text requests are not supported.
     * - The recommended image size is up to 1 MB, with a maximum of 10 MB. The image width and height must not exceed 8,000 pixels, and the total pixel count must not exceed 2.6 million.
     * - You must use the HTTPS protocol to call the API and provide image URLs.
     * - The user_id parameter must be an anonymized identifier. Do not pass direct identity information such as names or phone numbers.
     * - The API uses the HTTP POST method combined with Server-Sent Events (SSE) streaming response. The client must read the response event by event, rather than waiting for the connection to close to read the entire response.
     * - A successful response returns the question resolution process through a series of message events and ends with a complete event. If an error occurs, an error event is returned.
     * - For retryable errors such as TOO_MANY_ACTIVE_STREAMS, use an exponential backoff strategy to retry the request.
     * - Set a reasonable timeout period of at least 3 minutes on the client, and ensure that the proxy layer does not cache SSE responses.
     *
     * @param request - CreateEduProblemSolveRequest
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $request
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolve($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEduProblemSolveWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the progress and final results of homework grading based on the task ID.
     *
     * @remarks
     * ## Request description
     * - This operation queries the status and detailed results of single-page homework grading by using the `taskId` returned when the task is submitted.
     * - The caller should poll this operation at an interval of 1 to 2 seconds until the task status changes to `finished` or `failed`.
     * - When the task status is `finished`, the response contains complete grading information, including question recognition, grading conclusions, dewarped images, and rendered images.
     * - If the task fails (the status is `failed`), check the `message` field in the response or the specific fault information in `data`.
     * - All requests and responses are in JSON format.
     *
     * @param request - GetEduHomeworkCorrectionResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEduHomeworkCorrectionResultResponse
     *
     * @param GetEduHomeworkCorrectionResultRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetEduHomeworkCorrectionResultResponse
     */
    public function getEduHomeworkCorrectionResultWithOptions($request, $headers, $runtime)
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
            'action' => 'GetEduHomeworkCorrectionResult',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/homework/correct/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEduHomeworkCorrectionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the progress and final results of homework grading based on the task ID.
     *
     * @remarks
     * ## Request description
     * - This operation queries the status and detailed results of single-page homework grading by using the `taskId` returned when the task is submitted.
     * - The caller should poll this operation at an interval of 1 to 2 seconds until the task status changes to `finished` or `failed`.
     * - When the task status is `finished`, the response contains complete grading information, including question recognition, grading conclusions, dewarped images, and rendered images.
     * - If the task fails (the status is `failed`), check the `message` field in the response or the specific fault information in `data`.
     * - All requests and responses are in JSON format.
     *
     * @param request - GetEduHomeworkCorrectionResultRequest
     *
     * @returns GetEduHomeworkCorrectionResultResponse
     *
     * @param GetEduHomeworkCorrectionResultRequest $request
     *
     * @return GetEduHomeworkCorrectionResultResponse
     */
    public function getEduHomeworkCorrectionResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEduHomeworkCorrectionResultWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries whether the current account has activated Qwen education-related services.
     *
     * @remarks
     * ## Request description
     * This operation queries whether a specified Alibaba Cloud account or RAM user has successfully activated the Qwen learning AI suite. Before calling any business API operations, you must use this operation to confirm that the service status is `ACTIVE`. If the service is not activated, perform the corresponding operations based on the returned status information, such as waiting for a period of time and retrying.
     * ### Precautions
     * - This operation supports calls from Alibaba Cloud accounts and RAM users.
     * - When a RAM user calls this operation, make sure that the RAM user has the required RAM permissions. The service is activated for the Alibaba Cloud account to which the RAM user belongs.
     * - This operation is idempotent based on the Alibaba Cloud account ID. Repeated calls do not result in multiple activations.
     * - If the status is `ACTIVATING`, retry the query after the time interval recommended by the returned `retry_after_seconds` field.
     * - If a failure occurs (`FAILED`), refer to the specific error code, take corresponding measures, and then try again.
     *
     * @param request - GetQwenEduApiActivationStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQwenEduApiActivationStatusResponse
     *
     * @param GetQwenEduApiActivationStatusRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetQwenEduApiActivationStatusResponse
     */
    public function getQwenEduApiActivationStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetQwenEduApiActivationStatus',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/service/activation/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQwenEduApiActivationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether the current account has activated Qwen education-related services.
     *
     * @remarks
     * ## Request description
     * This operation queries whether a specified Alibaba Cloud account or RAM user has successfully activated the Qwen learning AI suite. Before calling any business API operations, you must use this operation to confirm that the service status is `ACTIVE`. If the service is not activated, perform the corresponding operations based on the returned status information, such as waiting for a period of time and retrying.
     * ### Precautions
     * - This operation supports calls from Alibaba Cloud accounts and RAM users.
     * - When a RAM user calls this operation, make sure that the RAM user has the required RAM permissions. The service is activated for the Alibaba Cloud account to which the RAM user belongs.
     * - This operation is idempotent based on the Alibaba Cloud account ID. Repeated calls do not result in multiple activations.
     * - If the status is `ACTIVATING`, retry the query after the time interval recommended by the returned `retry_after_seconds` field.
     * - If a failure occurs (`FAILED`), refer to the specific error code, take corresponding measures, and then try again.
     *
     * @param request - GetQwenEduApiActivationStatusRequest
     *
     * @returns GetQwenEduApiActivationStatusResponse
     *
     * @param GetQwenEduApiActivationStatusRequest $request
     *
     * @return GetQwenEduApiActivationStatusResponse
     */
    public function getQwenEduApiActivationStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQwenEduApiActivationStatusWithOptions($request, $headers, $runtime);
    }
}
