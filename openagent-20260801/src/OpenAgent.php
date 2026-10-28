<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CancelRunHeaders;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CancelRunRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CancelRunResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CreateSessionHeaders;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CreateSessionRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\CreateSessionResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\DeleteSessionHeaders;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\DeleteSessionRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\DeleteSessionResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetReadonlyModeRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetReadonlyModeResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetSessionRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetSessionResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListSessionsRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListSessionsResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageHeaders;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\SendMessageResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateReadonlyModeRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateReadonlyModeResponse;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateSessionHeaders;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateSessionRequest;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\UpdateSessionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OpenAgent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openagent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Cancels a run.
     *
     * @remarks
     * Cancels a specified run and returns the run status after the cancellation.
     *
     * @param request - CancelRunRequest
     * @param headers - CancelRunHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRunResponse
     *
     * @param string           $sessionId
     * @param string           $runId
     * @param CancelRunRequest $request
     * @param CancelRunHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CancelRunResponse
     */
    public function cancelRunWithOptions($sessionId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelRun',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '/runs/' . Url::percentEncode($runId) . '/cancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a run.
     *
     * @remarks
     * Cancels a specified run and returns the run status after the cancellation.
     *
     * @param request - CancelRunRequest
     *
     * @returns CancelRunResponse
     *
     * @param string           $sessionId
     * @param string           $runId
     * @param CancelRunRequest $request
     *
     * @return CancelRunResponse
     */
    public function cancelRun($sessionId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelRunHeaders([]);

        return $this->cancelRunWithOptions($sessionId, $runId, $request, $headers, $runtime);
    }

    /**
     * Creates a session.
     *
     * @remarks
     * Creates a session and returns the session information. Use the returned sessionId for subsequent operations such as sending messages, querying records, and updating the session.
     *
     * @param request - CreateSessionRequest
     * @param headers - CreateSessionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     * @param CreateSessionHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSessionResponse
     */
    public function createSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSession',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a session.
     *
     * @remarks
     * Creates a session and returns the session information. Use the returned sessionId for subsequent operations such as sending messages, querying records, and updating the session.
     *
     * @param request - CreateSessionRequest
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     *
     * @return CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSessionHeaders([]);

        return $this->createSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a session.
     *
     * @remarks
     * Deletes a specified session. Returns 404 Session.NotFound if the session does not exist or has been deleted.
     *
     * @param request - DeleteSessionRequest
     * @param headers - DeleteSessionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSessionResponse
     *
     * @param string               $sessionId
     * @param DeleteSessionRequest $request
     * @param DeleteSessionHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSessionResponse
     */
    public function deleteSessionWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'DeleteSession',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a session.
     *
     * @remarks
     * Deletes a specified session. Returns 404 Session.NotFound if the session does not exist or has been deleted.
     *
     * @param request - DeleteSessionRequest
     *
     * @returns DeleteSessionResponse
     *
     * @param string               $sessionId
     * @param DeleteSessionRequest $request
     *
     * @return DeleteSessionResponse
     */
    public function deleteSession($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSessionHeaders([]);

        return $this->deleteSessionWithOptions($sessionId, $request, $headers, $runtime);
    }

    /**
     * Queries the read-only mode.
     *
     * @remarks
     * Queries the read-only mode switch for the current account. The read-only mode is enabled by default if it is not configured.
     *
     * @param request - GetReadonlyModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReadonlyModeResponse
     *
     * @param GetReadonlyModeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetReadonlyModeResponse
     */
    public function getReadonlyModeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetReadonlyMode',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/user/configs/readonly',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReadonlyModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the read-only mode.
     *
     * @remarks
     * Queries the read-only mode switch for the current account. The read-only mode is enabled by default if it is not configured.
     *
     * @param request - GetReadonlyModeRequest
     *
     * @returns GetReadonlyModeResponse
     *
     * @param GetReadonlyModeRequest $request
     *
     * @return GetReadonlyModeResponse
     */
    public function getReadonlyMode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReadonlyModeWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a run.
     *
     * @remarks
     * Queries the status and interrupt information of a specified run.
     *
     * @param request - GetRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRunResponse
     *
     * @param string         $sessionId
     * @param string         $runId
     * @param GetRunRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRunResponse
     */
    public function getRunWithOptions($sessionId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRun',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '/runs/' . Url::percentEncode($runId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a run.
     *
     * @remarks
     * Queries the status and interrupt information of a specified run.
     *
     * @param request - GetRunRequest
     *
     * @returns GetRunResponse
     *
     * @param string        $sessionId
     * @param string        $runId
     * @param GetRunRequest $request
     *
     * @return GetRunResponse
     */
    public function getRun($sessionId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunWithOptions($sessionId, $runId, $request, $headers, $runtime);
    }

    /**
     * Queries a session.
     *
     * @remarks
     * Queries the title, status, pinning information, and the ID and status of the most recent run of a specified session.
     *
     * @param request - GetSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionResponse
     *
     * @param string            $sessionId
     * @param GetSessionRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetSessionResponse
     */
    public function getSessionWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSession',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a session.
     *
     * @remarks
     * Queries the title, status, pinning information, and the ID and status of the most recent run of a specified session.
     *
     * @param request - GetSessionRequest
     *
     * @returns GetSessionResponse
     *
     * @param string            $sessionId
     * @param GetSessionRequest $request
     *
     * @return GetSessionResponse
     */
    public function getSession($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSessionWithOptions($sessionId, $request, $headers, $runtime);
    }

    /**
     * Lists messages.
     *
     * @remarks
     * Performs a paging query on the message timeline of a specified session. Use the returned nextToken to retrieve the next page.
     *
     * @param request - ListMessagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessagesResponse
     *
     * @param string              $sessionId
     * @param ListMessagesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMessagesResponse
     */
    public function listMessagesWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->runId) {
            @$query['runId'] = $request->runId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMessages',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists messages.
     *
     * @remarks
     * Performs a paging query on the message timeline of a specified session. Use the returned nextToken to retrieve the next page.
     *
     * @param request - ListMessagesRequest
     *
     * @returns ListMessagesResponse
     *
     * @param string              $sessionId
     * @param ListMessagesRequest $request
     *
     * @return ListMessagesResponse
     */
    public function listMessages($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessagesWithOptions($sessionId, $request, $headers, $runtime);
    }

    /**
     * Lists sessions.
     *
     * @remarks
     * Uses paging to query the list of sessions accessible to the current identity used to invoke. Use the returned nextToken to retrieve the next page.
     *
     * @param request - ListSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSessionsResponse
     *
     * @param ListSessionsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSessionsResponse
     */
    public function listSessionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSessions',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists sessions.
     *
     * @remarks
     * Uses paging to query the list of sessions accessible to the current identity used to invoke. Use the returned nextToken to retrieve the next page.
     *
     * @param request - ListSessionsRequest
     *
     * @returns ListSessionsResponse
     *
     * @param ListSessionsRequest $request
     *
     * @return ListSessionsResponse
     */
    public function listSessions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSessionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Sends a message.
     *
     * @remarks
     * Sends a message to a specified session, submits interrupt handling results, or reconnects to a specified run. Returns the run progress and results through a Server-Sent Events (SSE) event stream.
     *
     * @param request - SendMessageRequest
     * @param headers - SendMessageHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageResponse
     *
     * @param string             $sessionId
     * @param SendMessageRequest $request
     * @param SendMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithSSE($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->resume) {
            @$body['resume'] = $request->resume;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendMessage',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield SendMessageResponse::fromMap([
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
     * Sends a message.
     *
     * @remarks
     * Sends a message to a specified session, submits interrupt handling results, or reconnects to a specified run. Returns the run progress and results through a Server-Sent Events (SSE) event stream.
     *
     * @param request - SendMessageRequest
     * @param headers - SendMessageHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageResponse
     *
     * @param string             $sessionId
     * @param SendMessageRequest $request
     * @param SendMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->resume) {
            @$body['resume'] = $request->resume;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendMessage',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message.
     *
     * @remarks
     * Sends a message to a specified session, submits interrupt handling results, or reconnects to a specified run. Returns the run progress and results through a Server-Sent Events (SSE) event stream.
     *
     * @param request - SendMessageRequest
     *
     * @returns SendMessageResponse
     *
     * @param string             $sessionId
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendMessageHeaders([]);

        return $this->sendMessageWithOptions($sessionId, $request, $headers, $runtime);
    }

    /**
     * Updates the read-only mode.
     *
     * @remarks
     * Enables or disables the read-only mode for the current account.
     *
     * @param request - UpdateReadonlyModeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateReadonlyModeResponse
     *
     * @param UpdateReadonlyModeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateReadonlyModeResponse
     */
    public function updateReadonlyModeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->value) {
            @$body['value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateReadonlyMode',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/user/configs/readonly',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateReadonlyModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the read-only mode.
     *
     * @remarks
     * Enables or disables the read-only mode for the current account.
     *
     * @param request - UpdateReadonlyModeRequest
     *
     * @returns UpdateReadonlyModeResponse
     *
     * @param UpdateReadonlyModeRequest $request
     *
     * @return UpdateReadonlyModeResponse
     */
    public function updateReadonlyMode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateReadonlyModeWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the title or pinned status of a session.
     *
     * @remarks
     * Updates the title or pinned status of a specified session. Specify at least one of the title and pinned fields. Unspecified fields remain unchanged.
     *
     * @param request - UpdateSessionRequest
     * @param headers - UpdateSessionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSessionResponse
     *
     * @param string               $sessionId
     * @param UpdateSessionRequest $request
     * @param UpdateSessionHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSessionResponse
     */
    public function updateSessionWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pinned) {
            @$body['pinned'] = $request->pinned;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xOpenAgentIdempotencyKey) {
            @$realHeaders['X-OpenAgent-Idempotency-Key'] = '' . $headers->xOpenAgentIdempotencyKey;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSession',
            'version' => '2026-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/v1/agent/sessions/' . Url::percentEncode($sessionId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the title or pinned status of a session.
     *
     * @remarks
     * Updates the title or pinned status of a specified session. Specify at least one of the title and pinned fields. Unspecified fields remain unchanged.
     *
     * @param request - UpdateSessionRequest
     *
     * @returns UpdateSessionResponse
     *
     * @param string               $sessionId
     * @param UpdateSessionRequest $request
     *
     * @return UpdateSessionResponse
     */
    public function updateSession($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateSessionHeaders([]);

        return $this->updateSessionWithOptions($sessionId, $request, $headers, $runtime);
    }
}
