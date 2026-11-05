<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ada\V20260701\Models\CancelAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CancelAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CancelAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateTransitUploadPolicyRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateTransitUploadPolicyResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionModelRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionModelResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionModelShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetTransitMetaRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetTransitMetaResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentSessionsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentSessionsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentSessionsShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListModelsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListModelsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListSkillsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListSkillsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\LoadAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\LoadAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\LoadAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\PromptAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\PromptAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\PromptAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ReplyAgentSessionRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ReplyAgentSessionResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ReplyAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\SetAgentSessionModelRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\SetAgentSessionModelResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\SetAgentSessionModelShrinkRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateSkillResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ada extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Ada';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ada', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Stops the execution of a session or cancels a specified turn.
     *
     * @remarks
     * If Params._meta.promptId is provided, only that turn is canceled. If omitted, the current execution of the session is canceled. To avoid affecting other turns, use the actual promptId obtained from the response stream instead of the request Id.
     * A cancellation receipt does not mean the turn has ended, nor does it revoke external operations that have already occurred. After calling this operation, continue reading the original response stream or resume reading through LoadAgentSession to confirm the desired state of the target turn. Disconnecting the stream connection cannot replace a cancellation request.
     *
     * @param tmpReq - CancelAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAgentSessionResponse
     *
     * @param CancelAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CancelAgentSessionResponse
     */
    public function cancelAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CancelAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the execution of a session or cancels a specified turn.
     *
     * @remarks
     * If Params._meta.promptId is provided, only that turn is canceled. If omitted, the current execution of the session is canceled. To avoid affecting other turns, use the actual promptId obtained from the response stream instead of the request Id.
     * A cancellation receipt does not mean the turn has ended, nor does it revoke external operations that have already occurred. After calling this operation, continue reading the original response stream or resume reading through LoadAgentSession to confirm the desired state of the target turn. Disconnecting the stream connection cannot replace a cancellation request.
     *
     * @param request - CancelAgentSessionRequest
     *
     * @returns CancelAgentSessionResponse
     *
     * @param CancelAgentSessionRequest $request
     *
     * @return CancelAgentSessionResponse
     */
    public function cancelAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Creates an agent.
     *
     * @remarks
     * - `Name` is the unique identifier of the agent within the current tenant. It can contain only letters, digits, underscores (_), and hyphens (-), and must be 1 to 128 characters in length. It cannot be modified after creation.
     * - Each agent can be bound to only one knowledge base.
     *
     * @param request - CreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->knowledgeBases) {
            @$body['KnowledgeBases'] = $request->knowledgeBases;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->skills) {
            @$body['Skills'] = $request->skills;
        }

        if (null !== $request->systemPrompt) {
            @$body['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->tools) {
            @$body['Tools'] = $request->tools;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgent',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an agent.
     *
     * @remarks
     * - `Name` is the unique identifier of the agent within the current tenant. It can contain only letters, digits, underscores (_), and hyphens (-), and must be 1 to 128 characters in length. It cannot be modified after creation.
     * - Each agent can be bound to only one knowledge base.
     *
     * @param request - CreateAgentRequest
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     *
     * @return CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * Creates a text session for a specified agent and obtains the session ID required for subsequent calls.
     *
     * @remarks
     * Before calling this operation, obtain the name of an agent accessible to the current identity. After the session is created, save `JsonRpcResponse.result.sessionId` and use it as `Params.sessionId` for subsequent operations such as `PromptAgentSession` and `LoadAgentSession`.
     * You can set the approval mode during creation. If omitted, the default value is `default`. The availability of `yolo` depends on the target agent. If it is not supported, an error is returned. This mode does not change the caller\\"s permissions or replace business Q&A. To retry the same creation request, reuse the same `clientToken` and the same business parameters.
     *
     * @param tmpReq - CreateAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentSessionResponse
     *
     * @param CreateAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgentSessionResponse
     */
    public function createAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a text session for a specified agent and obtains the session ID required for subsequent calls.
     *
     * @remarks
     * Before calling this operation, obtain the name of an agent accessible to the current identity. After the session is created, save `JsonRpcResponse.result.sessionId` and use it as `Params.sessionId` for subsequent operations such as `PromptAgentSession` and `LoadAgentSession`.
     * You can set the approval mode during creation. If omitted, the default value is `default`. The availability of `yolo` depends on the target agent. If it is not supported, an error is returned. This mode does not change the caller\\"s permissions or replace business Q&A. To retry the same creation request, reuse the same `clientToken` and the same business parameters.
     *
     * @param request - CreateAgentSessionRequest
     *
     * @returns CreateAgentSessionResponse
     *
     * @param CreateAgentSessionRequest $request
     *
     * @return CreateAgentSessionResponse
     */
    public function createAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Creates a skill.
     *
     * @remarks
     * - Creation rules:
     *   - Name must be unique within the current tenant and cannot be the same as an official skill.
     *   - Description and Metadata are required. Metadata must and can only contain one valid content source. Different sources cannot be mixed.
     *   - After the skill is created, you can modify it by calling UpdateSkill.
     * - Content sources:
     *   - skillMd: Directly enter the Markdown body. No YAML front matter is required. Use Name and Description for the name and description respectively.
     *   - transitId: Upload and confirm a ZIP file through Transit. The call sequence is as follows:
     *     1. Call CreateTransitUploadPolicy and pass in FileShowName to obtain TransitId, FilePath, and PolicyInfo.
     *     2. Use PolicyInfo and FilePath to upload the ZIP file to Object Storage Service (OSS).
     *     3. Call ConfirmTransitUpload and pass in TransitId. Proceed with creation only if Confirmed=true is returned.
     *     4. Call CreateSkill and pass the confirmed TransitId in Metadata.transitId.
     *   - bundleUrl: Pass in a public HTTPS ZIP direct link. The platform downloads and saves it as an artifact. The original URL is not saved or echoed.
     *
     * @param request - CreateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSkillResponse
     */
    public function createSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkill',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a skill.
     *
     * @remarks
     * - Creation rules:
     *   - Name must be unique within the current tenant and cannot be the same as an official skill.
     *   - Description and Metadata are required. Metadata must and can only contain one valid content source. Different sources cannot be mixed.
     *   - After the skill is created, you can modify it by calling UpdateSkill.
     * - Content sources:
     *   - skillMd: Directly enter the Markdown body. No YAML front matter is required. Use Name and Description for the name and description respectively.
     *   - transitId: Upload and confirm a ZIP file through Transit. The call sequence is as follows:
     *     1. Call CreateTransitUploadPolicy and pass in FileShowName to obtain TransitId, FilePath, and PolicyInfo.
     *     2. Use PolicyInfo and FilePath to upload the ZIP file to Object Storage Service (OSS).
     *     3. Call ConfirmTransitUpload and pass in TransitId. Proceed with creation only if Confirmed=true is returned.
     *     4. Call CreateSkill and pass the confirmed TransitId in Metadata.transitId.
     *   - bundleUrl: Pass in a public HTTPS ZIP direct link. The platform downloads and saves it as an artifact. The original URL is not saved or echoed.
     *
     * @param request - CreateSkillRequest
     *
     * @returns CreateSkillResponse
     *
     * @param CreateSkillRequest $request
     *
     * @return CreateSkillResponse
     */
    public function createSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillWithOptions($request, $runtime);
    }

    /**
     * Generates credentials for direct file upload. Callers can use the returned upload policy to upload files directly to object storage.
     *
     * @remarks
     * - `Network` can be set to `public` or `internal` to generate a public network or same-region internal network upload address, respectively. The default value is `public`.
     * - The maximum size of a single file is 50 MiB.
     * - `PolicyInfo` contains short-term upload authorization information and is only used for the current file upload. Do not log, permanently store, or forward it to other users.
     * - `ExpireMs` specifies the validity period of the current upload policy and Transit record in milliseconds, not an absolute timestamp. Both the default and maximum values are `604800000` (7 days), and the minimum value is `1000` (1 second). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - You can call `GetTransitMeta` to read `ExpireAt` and obtain the expiration time of the Transit record. Confirming the upload and querying do not extend the validity period of the record.
     *
     * @param request - CreateTransitUploadPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransitUploadPolicyResponse
     *
     * @param CreateTransitUploadPolicyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateTransitUploadPolicyResponse
     */
    public function createTransitUploadPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireMs) {
            @$body['ExpireMs'] = $request->expireMs;
        }

        if (null !== $request->fileShowName) {
            @$body['FileShowName'] = $request->fileShowName;
        }

        if (null !== $request->network) {
            @$body['Network'] = $request->network;
        }

        if (null !== $request->pathPrefix) {
            @$body['PathPrefix'] = $request->pathPrefix;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTransitUploadPolicy',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransitUploadPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates credentials for direct file upload. Callers can use the returned upload policy to upload files directly to object storage.
     *
     * @remarks
     * - `Network` can be set to `public` or `internal` to generate a public network or same-region internal network upload address, respectively. The default value is `public`.
     * - The maximum size of a single file is 50 MiB.
     * - `PolicyInfo` contains short-term upload authorization information and is only used for the current file upload. Do not log, permanently store, or forward it to other users.
     * - `ExpireMs` specifies the validity period of the current upload policy and Transit record in milliseconds, not an absolute timestamp. Both the default and maximum values are `604800000` (7 days), and the minimum value is `1000` (1 second). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - You can call `GetTransitMeta` to read `ExpireAt` and obtain the expiration time of the Transit record. Confirming the upload and querying do not extend the validity period of the record.
     *
     * @param request - CreateTransitUploadPolicyRequest
     *
     * @returns CreateTransitUploadPolicyResponse
     *
     * @param CreateTransitUploadPolicyRequest $request
     *
     * @return CreateTransitUploadPolicyResponse
     */
    public function createTransitUploadPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransitUploadPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified agent.
     *
     * @remarks
     * - Creators can delete the agents they created.
     * - After deletion, the agent can no longer be queried, updated, or executed.
     *
     * @param request - DeleteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified agent.
     *
     * @remarks
     * - Creators can delete the agents they created.
     * - After deletion, the agent can no longer be queried, updated, or executed.
     *
     * @param request - DeleteAgentRequest
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * Deletes an idle session that is no longer needed.
     *
     * @remarks
     * A session cannot be directly deleted while it is being executed or waiting for interaction. You must first call `CancelAgentSession` and continue reading the original response stream, or resume reading through `LoadAgentSession`. Delete the session only after confirming that the target turn has ended.
     * A successful deletion indicates that the session deletion operation is complete, but it does not mean that external operations that have already occurred are rolled back. Deleting a session does not delete the associated agent or assistant.
     *
     * @param tmpReq - DeleteAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentSessionResponse
     *
     * @param DeleteAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAgentSessionResponse
     */
    public function deleteAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an idle session that is no longer needed.
     *
     * @remarks
     * A session cannot be directly deleted while it is being executed or waiting for interaction. You must first call `CancelAgentSession` and continue reading the original response stream, or resume reading through `LoadAgentSession`. Delete the session only after confirming that the target turn has ended.
     * A successful deletion indicates that the session deletion operation is complete, but it does not mean that external operations that have already occurred are rolled back. Deleting a session does not delete the associated agent or assistant.
     *
     * @param request - DeleteAgentSessionRequest
     *
     * @returns DeleteAgentSessionResponse
     *
     * @param DeleteAgentSessionRequest $request
     *
     * @return DeleteAgentSessionResponse
     */
    public function deleteAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Soft-deletes a skill that the caller has permission to modify.
     *
     * @remarks
     * - Deletion permissions:
     *   - Only custom skills that the caller has permission to modify can be deleted.
     *   - The caller must be the creator of the skill or the root account of the tenant that has permission to manage the tenant-level skill. Official skills cannot be deleted.
     * - Deletion results:
     *   - Deletion is performed as a soft delete. After a successful deletion, `GetSkill` and `ListSkills` no longer return the skill, and you can create a new skill with the same name.
     *   - Recovery is not supported. You cannot repeatedly delete a skill or delete a non-existent skill.
     *
     * @param request - DeleteSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSkill',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Soft-deletes a skill that the caller has permission to modify.
     *
     * @remarks
     * - Deletion permissions:
     *   - Only custom skills that the caller has permission to modify can be deleted.
     *   - The caller must be the creator of the skill or the root account of the tenant that has permission to manage the tenant-level skill. Official skills cannot be deleted.
     * - Deletion results:
     *   - Deletion is performed as a soft delete. After a successful deletion, `GetSkill` and `ListSkills` no longer return the skill, and you can create a new skill with the same name.
     *   - Recovery is not supported. You cannot repeatedly delete a skill or delete a non-existent skill.
     *
     * @param request - DeleteSkillRequest
     *
     * @returns DeleteSkillResponse
     *
     * @param DeleteSkillRequest $request
     *
     * @return DeleteSkillResponse
     */
    public function deleteSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillWithOptions($request, $runtime);
    }

    /**
     * Queries agents visible to the current identity by name.
     *
     * @remarks
     * - You can retrieve agents created by yourself, agents visible within the current tenant, and official agents provided by the platform.
     *
     * @param request - GetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgent',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries agents visible to the current identity by name.
     *
     * @remarks
     * - You can retrieve agents created by yourself, agents visible within the current tenant, and official agents provided by the platform.
     *
     * @param request - GetAgentRequest
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * Queries session details such as the title, associated agent, and core timestamps based on the session ID.
     *
     * @remarks
     * For `Params.sessionId`, use the session ID returned by `CreateAgentSession` or `ListAgentSessions`. The business result is located in `JsonRpcResponse.result`, which is of type `any`. The fields within the object retain their actual casing.
     * This operation provides a session summary and does not return the complete message history, pending interactions, or the final state of real-time turns. For history and disconnection recovery, use `LoadAgentSession`. For approvals and Q&A, read from the streaming notifications of `PromptAgentSession` or `LoadAgentSession`.
     *
     * @param tmpReq - GetAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSessionResponse
     *
     * @param GetAgentSessionRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GetAgentSessionResponse
     */
    public function getAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$query['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$query['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries session details such as the title, associated agent, and core timestamps based on the session ID.
     *
     * @remarks
     * For `Params.sessionId`, use the session ID returned by `CreateAgentSession` or `ListAgentSessions`. The business result is located in `JsonRpcResponse.result`, which is of type `any`. The fields within the object retain their actual casing.
     * This operation provides a session summary and does not return the complete message history, pending interactions, or the final state of real-time turns. For history and disconnection recovery, use `LoadAgentSession`. For approvals and Q&A, read from the streaming notifications of `PromptAgentSession` or `LoadAgentSession`.
     *
     * @param request - GetAgentSessionRequest
     *
     * @returns GetAgentSessionResponse
     *
     * @param GetAgentSessionRequest $request
     *
     * @return GetAgentSessionResponse
     */
    public function getAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Queries the current model and thinking level configuration used by a session.
     *
     * @remarks
     * - Use the `sessionId` returned by CreateAgentSession to query the configuration. This operation does not send messages or replay session history.
     * - Read the current model from `JsonRpcResponse.result.modelId`. To modify it, call SetAgentSessionModel.
     * - The thinking level is an optional advanced configuration. The supported levels and current values are subject to the actual return values of this operation, which may vary across different agents, models, and sessions.
     *
     * @param tmpReq - GetAgentSessionModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentSessionModelResponse
     *
     * @param GetAgentSessionModelRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetAgentSessionModelResponse
     */
    public function getAgentSessionModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentSessionModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$query['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$query['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentSessionModel',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentSessionModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current model and thinking level configuration used by a session.
     *
     * @remarks
     * - Use the `sessionId` returned by CreateAgentSession to query the configuration. This operation does not send messages or replay session history.
     * - Read the current model from `JsonRpcResponse.result.modelId`. To modify it, call SetAgentSessionModel.
     * - The thinking level is an optional advanced configuration. The supported levels and current values are subject to the actual return values of this operation, which may vary across different agents, models, and sessions.
     *
     * @param request - GetAgentSessionModelRequest
     *
     * @returns GetAgentSessionModelResponse
     *
     * @param GetAgentSessionModelRequest $request
     *
     * @return GetAgentSessionModelResponse
     */
    public function getAgentSessionModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentSessionModelWithOptions($request, $runtime);
    }

    /**
     * Queries the skills visible to the current caller by name.
     *
     * @remarks
     * - Query target:
     *   - Queries by `Name`. Querying by `SkillId` is not supported.
     *   - Prioritizes returning skills with the same name that are visible to the caller under the current tenant. If no visible records are found, queries official skills with the same name.
     *   - If `SkillVersion` is omitted, the current skill is returned. This parameter is omitted by default.
     * - Download URL:
     *   - `Network` supports `public` and `internal`. If omitted, no download URL is generated.
     *   - If the skill has an accessible artifact, a temporary `DownloadUrl` and the corresponding `DownloadUrlNetwork` are returned.
     *   - If the artifact does not exist, access is denied, or URL generation fails, the skill query can still succeed, but the download URL-related fields may not be returned.
     *   - The original `bundleUrl` used during creation is not saved and is not returned by this API.
     *
     * @param request - GetSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetSkillResponse
     */
    public function getSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->skillVersion) {
            @$query['SkillVersion'] = $request->skillVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkill',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the skills visible to the current caller by name.
     *
     * @remarks
     * - Query target:
     *   - Queries by `Name`. Querying by `SkillId` is not supported.
     *   - Prioritizes returning skills with the same name that are visible to the caller under the current tenant. If no visible records are found, queries official skills with the same name.
     *   - If `SkillVersion` is omitted, the current skill is returned. This parameter is omitted by default.
     * - Download URL:
     *   - `Network` supports `public` and `internal`. If omitted, no download URL is generated.
     *   - If the skill has an accessible artifact, a temporary `DownloadUrl` and the corresponding `DownloadUrlNetwork` are returned.
     *   - If the artifact does not exist, access is denied, or URL generation fails, the skill query can still succeed, but the download URL-related fields may not be returned.
     *   - The original `bundleUrl` used during creation is not saved and is not returned by this API.
     *
     * @param request - GetSkillRequest
     *
     * @returns GetSkillResponse
     *
     * @param GetSkillRequest $request
     *
     * @return GetSkillResponse
     */
    public function getSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillWithOptions($request, $runtime);
    }

    /**
     * Queries the metadata of a transit file, such as the upload status, file size, and expiration time, and retrieves a temporary download URL on demand.
     *
     * @remarks
     * - Specify at least one of TransitId and FilePath. If both are provided, TransitId takes precedence.
     * - Use the TransitId returned by CreateTransitUploadPolicy for queries. TransitId is a temporary capability identifier in the file upload process. Do not forward it to irrelevant users.
     * - FilePath is the opaque object path returned by CreateTransitUploadPolicy. Callers must use it as is and must not parse, modify, or concatenate it.
     * - When querying by FilePath, an error is returned if the record does not exist or is inaccessible to the current caller.
     * - ExpireMs specifies the validity period of the download URL in milliseconds. The default value is 900000 (15 minutes). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - ExpireAt indicates the expiration time of the transit record, not the expiration time of the download URL. Querying, generating a download URL, and confirming an upload do not extend the validity period of the record.
     *
     * @param request - GetTransitMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTransitMetaResponse
     *
     * @param GetTransitMetaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTransitMetaResponse
     */
    public function getTransitMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireMs) {
            @$query['ExpireMs'] = $request->expireMs;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->network) {
            @$query['Network'] = $request->network;
        }

        if (null !== $request->transitId) {
            @$query['TransitId'] = $request->transitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTransitMeta',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTransitMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metadata of a transit file, such as the upload status, file size, and expiration time, and retrieves a temporary download URL on demand.
     *
     * @remarks
     * - Specify at least one of TransitId and FilePath. If both are provided, TransitId takes precedence.
     * - Use the TransitId returned by CreateTransitUploadPolicy for queries. TransitId is a temporary capability identifier in the file upload process. Do not forward it to irrelevant users.
     * - FilePath is the opaque object path returned by CreateTransitUploadPolicy. Callers must use it as is and must not parse, modify, or concatenate it.
     * - When querying by FilePath, an error is returned if the record does not exist or is inaccessible to the current caller.
     * - ExpireMs specifies the validity period of the download URL in milliseconds. The default value is 900000 (15 minutes). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - ExpireAt indicates the expiration time of the transit record, not the expiration time of the download URL. Querying, generating a download URL, and confirming an upload do not extend the validity period of the record.
     *
     * @param request - GetTransitMetaRequest
     *
     * @returns GetTransitMetaResponse
     *
     * @param GetTransitMetaRequest $request
     *
     * @return GetTransitMetaResponse
     */
    public function getTransitMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTransitMetaWithOptions($request, $runtime);
    }

    /**
     * Queries session summary by page, allowing the caller to select or resume existing sessions.
     *
     * @remarks
     * You can filter sessions by agent name. Omit Params.NextToken on the first page. For subsequent queries, keep the filter conditions and page size unchanged, and pass the JsonRpcResponse.Result.NextToken returned from the previous page as is to Params.NextToken. Pagination ends when the token is not returned or is empty.
     * The list returns session summaries such as session ID, title, and time, but does not provide the final state of the turn execution. After selecting a session, you can use GetAgentSession to query details or LoadAgentSession to load history.
     * Params in the request, and JsonRpcResponse and Result in the response are explicit objects. The pagination field MaxResults is of type integer<int32>, and NextToken is of type string. SessionList retains the any type. For session summary fields, see the supplementary description.
     *
     * @param tmpReq - ListAgentSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentSessionsResponse
     *
     * @param ListAgentSessionsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListAgentSessionsResponse
     */
    public function listAgentSessionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAgentSessionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAgentSessions',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries session summary by page, allowing the caller to select or resume existing sessions.
     *
     * @remarks
     * You can filter sessions by agent name. Omit Params.NextToken on the first page. For subsequent queries, keep the filter conditions and page size unchanged, and pass the JsonRpcResponse.Result.NextToken returned from the previous page as is to Params.NextToken. Pagination ends when the token is not returned or is empty.
     * The list returns session summaries such as session ID, title, and time, but does not provide the final state of the turn execution. After selecting a session, you can use GetAgentSession to query details or LoadAgentSession to load history.
     * Params in the request, and JsonRpcResponse and Result in the response are explicit objects. The pagination field MaxResults is of type integer<int32>, and NextToken is of type string. SessionList retains the any type. For session summary fields, see the supplementary description.
     *
     * @param request - ListAgentSessionsRequest
     *
     * @returns ListAgentSessionsResponse
     *
     * @param ListAgentSessionsRequest $request
     *
     * @return ListAgentSessionsResponse
     */
    public function listAgentSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentSessionsWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query for agents visible to the current identity.
     *
     * @remarks
     * - By default, the official agents provided by the platform and the tenant agents visible to the current identity are returned.
     * - If `Scope` is set to `SYSTEM`, only official agents are queried. If `Scope` is set to `CUSTOM`, only custom agents are queried.
     * - Both cursor-based pagination and page number-based pagination are supported. When using cursor-based pagination, pass the `NextToken` value returned in the previous response to the next request as is, and keep the calling identity, filter conditions, and `MaxResults` unchanged.
     *
     * @param request - ListAgentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAgentsResponse
     */
    public function listAgentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creatorId) {
            @$query['CreatorId'] = $request->creatorId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->q) {
            @$query['Q'] = $request->q;
        }

        if (null !== $request->requiredRuntime) {
            @$query['RequiredRuntime'] = $request->requiredRuntime;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgents',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query for agents visible to the current identity.
     *
     * @remarks
     * - By default, the official agents provided by the platform and the tenant agents visible to the current identity are returned.
     * - If `Scope` is set to `SYSTEM`, only official agents are queried. If `Scope` is set to `CUSTOM`, only custom agents are queried.
     * - Both cursor-based pagination and page number-based pagination are supported. When using cursor-based pagination, pass the `NextToken` value returned in the previous response to the next request as is, and keep the calling identity, filter conditions, and `MaxResults` unchanged.
     *
     * @param request - ListAgentsRequest
     *
     * @returns ListAgentsResponse
     *
     * @param ListAgentsRequest $request
     *
     * @return ListAgentsResponse
     */
    public function listAgents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentsWithOptions($request, $runtime);
    }

    /**
     * Queries the text models visible to the current caller for selection when setting a session model.
     *
     * @remarks
     * - For text sessions, pass `ModelType=text` and use `MaxResults` and `NextToken` for paging. The model identity is obtained from `Models[].Id` and passed as the `Params.modelId` for SetAgentSessionModel.
     * - The visibility of a model in the model catalog does not guarantee that the target session supports the model. After configuration, refer to the SetAgentSessionModel response or the GetAgentSessionModel query result.
     * - `ThinkingLevels` and `ThinkingLevel` are used for optional thinking level configurations and do not affect the integration flow when you only select a model.
     *
     * @param request - ListModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->modelType) {
            @$query['ModelType'] = $request->modelType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModels',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the text models visible to the current caller for selection when setting a session model.
     *
     * @remarks
     * - For text sessions, pass `ModelType=text` and use `MaxResults` and `NextToken` for paging. The model identity is obtained from `Models[].Id` and passed as the `Params.modelId` for SetAgentSessionModel.
     * - The visibility of a model in the model catalog does not guarantee that the target session supports the model. After configuration, refer to the SetAgentSessionModel response or the GetAgentSessionModel query result.
     * - `ThinkingLevels` and `ThinkingLevel` are used for optional thinking level configurations and do not affect the integration flow when you only select a model.
     *
     * @param request - ListModelsRequest
     *
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsWithOptions($request, $runtime);
    }

    /**
     * Performs a paged query using paging for skills visible to the current invoker.
     *
     * @remarks
     * - Query and filter:
     *     - `Scope=SYSTEM` queries only official skills, and `Scope=CUSTOM` queries only custom skills. If omitted, both are queried.
     *     - Custom skills with `user` visibility are visible only to the creator, while skills with `tenant` visibility are visible to the current tenant.
     *     - You can filter by `CreatorId`, `Q`, and `Visibility`. `Q` performs a fuzzy match on the skill name or description.
     *     - Results are sorted by update time in descending order by default.
     * - Pagination:
     *     - Cursor-based pagination uses `MaxResults` and `NextToken`. Do not pass `NextToken` for the first query. For subsequent pages, use the token from the previous response. When using `NextToken` for subsequent pages, `CreatorId`, `Q`, `Visibility`, `Scope`, and `MaxResults` must remain the same as the previous page. If you modify the query conditions, you must query from the first page again.
     *     - Page number-based pagination uses `PageNumber` and `PageSize`. If `MaxResults` is explicitly passed, cursor-based pagination takes precedence. If `NextToken` is passed, `PageNumber` is ignored.
     * - Response content:
     *     - This operation returns only skill summaries and does not generate bundle download URLs. To obtain a download URL, call `GetSkill` and specify `Network`.
     *
     * @param request - ListSkillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSkillsResponse
     */
    public function listSkillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creatorId) {
            @$query['CreatorId'] = $request->creatorId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->q) {
            @$query['Q'] = $request->q;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->visibility) {
            @$query['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkills',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query using paging for skills visible to the current invoker.
     *
     * @remarks
     * - Query and filter:
     *     - `Scope=SYSTEM` queries only official skills, and `Scope=CUSTOM` queries only custom skills. If omitted, both are queried.
     *     - Custom skills with `user` visibility are visible only to the creator, while skills with `tenant` visibility are visible to the current tenant.
     *     - You can filter by `CreatorId`, `Q`, and `Visibility`. `Q` performs a fuzzy match on the skill name or description.
     *     - Results are sorted by update time in descending order by default.
     * - Pagination:
     *     - Cursor-based pagination uses `MaxResults` and `NextToken`. Do not pass `NextToken` for the first query. For subsequent pages, use the token from the previous response. When using `NextToken` for subsequent pages, `CreatorId`, `Q`, `Visibility`, `Scope`, and `MaxResults` must remain the same as the previous page. If you modify the query conditions, you must query from the first page again.
     *     - Page number-based pagination uses `PageNumber` and `PageSize`. If `MaxResults` is explicitly passed, cursor-based pagination takes precedence. If `NextToken` is passed, `PageNumber` is ignored.
     * - Response content:
     *     - This operation returns only skill summaries and does not generate bundle download URLs. To obtain a download URL, call `GetSkill` and specify `Network`.
     *
     * @param request - ListSkillsRequest
     *
     * @returns ListSkillsResponse
     *
     * @param ListSkillsRequest $request
     *
     * @return ListSkillsResponse
     */
    public function listSkills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillsWithOptions($request, $runtime);
    }

    /**
     * Loads session history, receives subsequent output, or resumes Server-Sent Events (SSE) from a saved read position.
     *
     * @remarks
     * - A normal load requires only the session ID. It returns the configuration, history, and output to be continuously received. The response is SSE, not a standard JSON message list.
     * - When resuming from a disconnection, pass back the actually received cursor, event epoch, and turn ID. History and increments may be returned simultaneously. Existing pages should be rebuilt or deduplicated based on the confirmed cursor. Do not directly append all returned data.
     * - During the load process, you may receive pending approvals or questions again. Use the interaction notification that is still valid for this session to call ReplyAgentSession.
     * - For an idle session, `stopReason=end_turn` may only indicate the end of the current load. It cannot be used to determine the success of a previously interrupted turn. You must associate it with the actual desired state of the target turn. If it cannot be determined, keep the result for verification.
     *
     * @param tmpReq - LoadAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadAgentSessionResponse
     *
     * @param LoadAgentSessionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return LoadAgentSessionResponse
     */
    public function loadAgentSessionWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new LoadAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoadAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield LoadAgentSessionResponse::fromMap([
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
     * Loads session history, receives subsequent output, or resumes Server-Sent Events (SSE) from a saved read position.
     *
     * @remarks
     * - A normal load requires only the session ID. It returns the configuration, history, and output to be continuously received. The response is SSE, not a standard JSON message list.
     * - When resuming from a disconnection, pass back the actually received cursor, event epoch, and turn ID. History and increments may be returned simultaneously. Existing pages should be rebuilt or deduplicated based on the confirmed cursor. Do not directly append all returned data.
     * - During the load process, you may receive pending approvals or questions again. Use the interaction notification that is still valid for this session to call ReplyAgentSession.
     * - For an idle session, `stopReason=end_turn` may only indicate the end of the current load. It cannot be used to determine the success of a previously interrupted turn. You must associate it with the actual desired state of the target turn. If it cannot be determined, keep the result for verification.
     *
     * @param tmpReq - LoadAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoadAgentSessionResponse
     *
     * @param LoadAgentSessionRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return LoadAgentSessionResponse
     */
    public function loadAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new LoadAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LoadAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoadAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Loads session history, receives subsequent output, or resumes Server-Sent Events (SSE) from a saved read position.
     *
     * @remarks
     * - A normal load requires only the session ID. It returns the configuration, history, and output to be continuously received. The response is SSE, not a standard JSON message list.
     * - When resuming from a disconnection, pass back the actually received cursor, event epoch, and turn ID. History and increments may be returned simultaneously. Existing pages should be rebuilt or deduplicated based on the confirmed cursor. Do not directly append all returned data.
     * - During the load process, you may receive pending approvals or questions again. Use the interaction notification that is still valid for this session to call ReplyAgentSession.
     * - For an idle session, `stopReason=end_turn` may only indicate the end of the current load. It cannot be used to determine the success of a previously interrupted turn. You must associate it with the actual desired state of the target turn. If it cannot be determined, keep the result for verification.
     *
     * @param request - LoadAgentSessionRequest
     *
     * @returns LoadAgentSessionResponse
     *
     * @param LoadAgentSessionRequest $request
     *
     * @return LoadAgentSessionResponse
     */
    public function loadAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loadAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Sends text to an existing session and continuously receives agent output through Server-Sent Events (SSE).
     *
     * @remarks
     * - Pass the session ID returned by CreateAgentSession to `Params.sessionId` and place the user text in `Params.prompt`.
     * - When an execution or pending interaction is already in progress, the default call path rejects new prompts. After receiving an approval or Q&A notification, submit the selection or answer through ReplyAgentSession before continuing to read the original stream.
     * - A connection interruption does not cancel the execution. If the result is unknown, call LoadAgentSession to resume reading. Submitting duplicate prompts may generate new messages, and duplicate `Id` values are not deduplicated.
     *
     * @param tmpReq - PromptAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSessionWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PromptAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PromptAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield PromptAgentSessionResponse::fromMap([
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
     * Sends text to an existing session and continuously receives agent output through Server-Sent Events (SSE).
     *
     * @remarks
     * - Pass the session ID returned by CreateAgentSession to `Params.sessionId` and place the user text in `Params.prompt`.
     * - When an execution or pending interaction is already in progress, the default call path rejects new prompts. After receiving an approval or Q&A notification, submit the selection or answer through ReplyAgentSession before continuing to read the original stream.
     * - A connection interruption does not cancel the execution. If the result is unknown, call LoadAgentSession to resume reading. Submitting duplicate prompts may generate new messages, and duplicate `Id` values are not deduplicated.
     *
     * @param tmpReq - PromptAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PromptAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PromptAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PromptAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends text to an existing session and continuously receives agent output through Server-Sent Events (SSE).
     *
     * @remarks
     * - Pass the session ID returned by CreateAgentSession to `Params.sessionId` and place the user text in `Params.prompt`.
     * - When an execution or pending interaction is already in progress, the default call path rejects new prompts. After receiving an approval or Q&A notification, submit the selection or answer through ReplyAgentSession before continuing to read the original stream.
     * - A connection interruption does not cancel the execution. If the result is unknown, call LoadAgentSession to resume reading. Submitting duplicate prompts may generate new messages, and duplicate `Id` values are not deduplicated.
     *
     * @param request - PromptAgentSessionRequest
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $request
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->promptAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Submits the approval choice or question answer for the current pending interaction.
     *
     * @remarks
     * - Read `data.sessionId`, `data.requestId`, and `data.options` from the `permission_request` notification of PromptAgentSession or LoadAgentSession. This operation uses the interaction ID, not the tool invoke ID or the server-side RequestId.
     * - When selecting an action, use the `optionId` actually provided in the notification. For Q&A scenarios, you must also write the question key and answer text into `answers`. Do not pass this field for common tool approvals.
     * - `accepted=true` only indicates that the reply has been accepted. Subsequent output must still be read through Prompt or Load. `false` indicates that the reply was not adopted this time. You should reload the current interaction and must not automatically change it to approve other requests.
     *
     * @param tmpReq - ReplyAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplyAgentSessionResponse
     *
     * @param ReplyAgentSessionRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ReplyAgentSessionResponse
     */
    public function replyAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReplyAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReplyAgentSession',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplyAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits the approval choice or question answer for the current pending interaction.
     *
     * @remarks
     * - Read `data.sessionId`, `data.requestId`, and `data.options` from the `permission_request` notification of PromptAgentSession or LoadAgentSession. This operation uses the interaction ID, not the tool invoke ID or the server-side RequestId.
     * - When selecting an action, use the `optionId` actually provided in the notification. For Q&A scenarios, you must also write the question key and answer text into `answers`. Do not pass this field for common tool approvals.
     * - `accepted=true` only indicates that the reply has been accepted. Subsequent output must still be read through Prompt or Load. `false` indicates that the reply was not adopted this time. You should reload the current interaction and must not automatically change it to approve other requests.
     *
     * @param request - ReplyAgentSessionRequest
     *
     * @returns ReplyAgentSessionResponse
     *
     * @param ReplyAgentSessionRequest $request
     *
     * @return ReplyAgentSessionResponse
     */
    public function replyAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replyAgentSessionWithOptions($request, $runtime);
    }

    /**
     * Sets the model used by a session and optionally configures the thinking level.
     *
     * @remarks
     * - Pass the `sessionId` returned by CreateAgentSession and the `Models[].Id` returned by ListModels as `Params.sessionId` and `Params.modelId`, respectively. The visibility of a model in the model catalog does not guarantee that the target session supports the model. The final validation is performed by the target session.
     * - `modelId` is required. When only modifying the model, you can omit `thinkingLevel`. For details about how to configure the thinking level, see the supplementary description of request parameters.
     * - This operation only modifies the target session and does not modify the global default model of the agent or account. The session may deny configuration modifications during execution, and switching models during runtime is not guaranteed to be supported.
     * - The model and thinking level Settings are applied in steps. If the call fails, the model may have already been changed, and a full rollback is not guaranteed. You should call GetAgentSessionModel to query the current configuration before deciding what to do next. After a successful call, you can read the actual effective values from the returned result.
     *
     * @param tmpReq - SetAgentSessionModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAgentSessionModelResponse
     *
     * @param SetAgentSessionModelRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SetAgentSessionModelResponse
     */
    public function setAgentSessionModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetAgentSessionModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetAgentSessionModel',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAgentSessionModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the model used by a session and optionally configures the thinking level.
     *
     * @remarks
     * - Pass the `sessionId` returned by CreateAgentSession and the `Models[].Id` returned by ListModels as `Params.sessionId` and `Params.modelId`, respectively. The visibility of a model in the model catalog does not guarantee that the target session supports the model. The final validation is performed by the target session.
     * - `modelId` is required. When only modifying the model, you can omit `thinkingLevel`. For details about how to configure the thinking level, see the supplementary description of request parameters.
     * - This operation only modifies the target session and does not modify the global default model of the agent or account. The session may deny configuration modifications during execution, and switching models during runtime is not guaranteed to be supported.
     * - The model and thinking level Settings are applied in steps. If the call fails, the model may have already been changed, and a full rollback is not guaranteed. You should call GetAgentSessionModel to query the current configuration before deciding what to do next. After a successful call, you can read the actual effective values from the returned result.
     *
     * @param request - SetAgentSessionModelRequest
     *
     * @returns SetAgentSessionModelResponse
     *
     * @param SetAgentSessionModelRequest $request
     *
     * @return SetAgentSessionModelResponse
     */
    public function setAgentSessionModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAgentSessionModelWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of an agent.
     *
     * @remarks
     * - `Name` is used only to locate the agent and cannot be modified after creation.
     * - Each agent can be bound to only one knowledge base.
     * - `Tools` is updated according to the rules below. If `Skills` or `KnowledgeBases` is not passed, the original values are retained. If a non-empty array is passed, the entire list is replaced. If an empty array is passed, the corresponding bindings are removed. Other optional fields retain their original values if not passed.
     *
     * @param request - UpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->expectedVersion) {
            @$body['ExpectedVersion'] = $request->expectedVersion;
        }

        if (null !== $request->knowledgeBases) {
            @$body['KnowledgeBases'] = $request->knowledgeBases;
        }

        if (null !== $request->skills) {
            @$body['Skills'] = $request->skills;
        }

        if (null !== $request->systemPrompt) {
            @$body['SystemPrompt'] = $request->systemPrompt;
        }

        if (null !== $request->tools) {
            @$body['Tools'] = $request->tools;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgent',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of an agent.
     *
     * @remarks
     * - `Name` is used only to locate the agent and cannot be modified after creation.
     * - Each agent can be bound to only one knowledge base.
     * - `Tools` is updated according to the rules below. If `Skills` or `KnowledgeBases` is not passed, the original values are retained. If a non-empty array is passed, the entire list is replaced. If an empty array is passed, the corresponding bindings are removed. Other optional fields retain their original values if not passed.
     *
     * @param request - UpdateAgentRequest
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * Updates a skill.
     *
     * @remarks
     * - Update rules:
     *   - Name is only used to locate the skill and cannot be modified.
     *   - The caller must be the creator of the skill, or the root account of the tenant that has the permission to manage the tenant-level skill.
     * - Replacement rules:
     *   - If Description and Visibility are omitted, their original values are retained. Passing `null` is also treated as omission and cannot be used to clear the original values.
     *   - Metadata is replaced as a whole, not merged incrementally. If Metadata is omitted, the original content is retained. If it is passed, old fields not included in the new object are deleted.
     *   - When modifying only Description or Visibility, do not pass Metadata, and do not pass an empty object `{}`. An empty object replaces the original metadata with an empty object as a whole.
     * - Content sources:
     *   - When replacing the body or bundle, you must and can only choose one of skillMd, transitId, or bundleUrl.
     *   - For the field formats of the three sources, the Transit upload confirmation process, and the bundleUrl restrictions, refer to CreateSkill. Finally, pass the selected source in UpdateSkill.Metadata.
     *
     * @param request - UpdateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSkillResponse
     */
    public function updateSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->expectedVersion) {
            @$body['ExpectedVersion'] = $request->expectedVersion;
        }

        if (null !== $request->metadata) {
            @$body['Metadata'] = $request->metadata;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSkill',
            'version' => '2026-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a skill.
     *
     * @remarks
     * - Update rules:
     *   - Name is only used to locate the skill and cannot be modified.
     *   - The caller must be the creator of the skill, or the root account of the tenant that has the permission to manage the tenant-level skill.
     * - Replacement rules:
     *   - If Description and Visibility are omitted, their original values are retained. Passing `null` is also treated as omission and cannot be used to clear the original values.
     *   - Metadata is replaced as a whole, not merged incrementally. If Metadata is omitted, the original content is retained. If it is passed, old fields not included in the new object are deleted.
     *   - When modifying only Description or Visibility, do not pass Metadata, and do not pass an empty object `{}`. An empty object replaces the original metadata with an empty object as a whole.
     * - Content sources:
     *   - When replacing the body or bundle, you must and can only choose one of skillMd, transitId, or bundleUrl.
     *   - For the field formats of the three sources, the Transit upload confirmation process, and the bundleUrl restrictions, refer to CreateSkill. Finally, pass the selected source in UpdateSkill.Metadata.
     *
     * @param request - UpdateSkillRequest
     *
     * @returns UpdateSkillResponse
     *
     * @param UpdateSkillRequest $request
     *
     * @return UpdateSkillResponse
     */
    public function updateSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillWithOptions($request, $runtime);
    }
}
