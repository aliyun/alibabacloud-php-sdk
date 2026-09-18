<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateTransitUploadPolicyRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateTransitUploadPolicyResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\DeleteSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetSkillResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetTransitMetaRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\GetTransitMetaResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListAgentsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListSkillsRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\ListSkillsResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateSkillRequest;
use AlibabaCloud\SDK\Ada\V20260701\Models\UpdateSkillResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ada extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
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
     * Creates an Agent.
     *
     * @remarks
     * - `Name` is the unique identifier of the Agent within the current tenant. It can contain only letters, digits, underscores, and hyphens, and must be 1 to 128 characters in length. The name cannot be modified after creation.
     * - Each Agent can be associated with only one knowledge base.
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
     * Creates an Agent.
     *
     * @remarks
     * - `Name` is the unique identifier of the Agent within the current tenant. It can contain only letters, digits, underscores, and hyphens, and must be 1 to 128 characters in length. The name cannot be modified after creation.
     * - Each Agent can be associated with only one knowledge base.
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
     * Creates a Skill.
     *
     * @remarks
     * - Creation rules:
     *   - `Name` must be unique within the current tenant and cannot share a name with an official Skill.
     *   - `Description` and `Metadata` are required. `Metadata` must contain exactly one valid content source. Different sources cannot be mixed.
     *   - After the Skill is created, you can modify it by calling `UpdateSkill`.
     * - Content sources:
     *   - `skillMd`: Directly provide the Markdown body without a YAML header. Specify the name and description by using `Name` and `Description`.
     *   - `transitId`: Upload and confirm a ZIP file through Transit. Call the operations in the following order:
     *     1. Call `CreateTransitUploadPolicy` with `FileShowName` to obtain `TransitId`, `FilePath`, and `PolicyInfo`.
     *     2. Upload the ZIP file to object storage by using `PolicyInfo` and `FilePath`.
     *     3. Call `ConfirmTransitUpload` with `TransitId`. Proceed with creation only when the response returns `Confirmed=true`.
     *     4. Call `CreateSkill` and pass the confirmed `TransitId` in `Metadata.transitId`.
     *   - `bundleUrl`: Provide a public HTTPS direct link to a ZIP file. The platform downloads the file and saves it as an Artifact. The original URL is not persisted or returned in responses.
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
     * Creates a Skill.
     *
     * @remarks
     * - Creation rules:
     *   - `Name` must be unique within the current tenant and cannot share a name with an official Skill.
     *   - `Description` and `Metadata` are required. `Metadata` must contain exactly one valid content source. Different sources cannot be mixed.
     *   - After the Skill is created, you can modify it by calling `UpdateSkill`.
     * - Content sources:
     *   - `skillMd`: Directly provide the Markdown body without a YAML header. Specify the name and description by using `Name` and `Description`.
     *   - `transitId`: Upload and confirm a ZIP file through Transit. Call the operations in the following order:
     *     1. Call `CreateTransitUploadPolicy` with `FileShowName` to obtain `TransitId`, `FilePath`, and `PolicyInfo`.
     *     2. Upload the ZIP file to object storage by using `PolicyInfo` and `FilePath`.
     *     3. Call `ConfirmTransitUpload` with `TransitId`. Proceed with creation only when the response returns `Confirmed=true`.
     *     4. Call `CreateSkill` and pass the confirmed `TransitId` in `Metadata.transitId`.
     *   - `bundleUrl`: Provide a public HTTPS direct link to a ZIP file. The platform downloads the file and saves it as an Artifact. The original URL is not persisted or returned in responses.
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
     * Generates a credential for direct file upload. The caller can use the returned upload policy to upload a file directly to object storage.
     *
     * @remarks
     * - `Network` can be set to `public` or `internal` to generate a public or same-region internal upload address. Default value: `public`.
     * - The maximum size of a single file is 50 MiB.
     * - `PolicyInfo` contains short-term upload authorization information intended only for the current file upload. Do not log it, persist it long-term, or forward it to other users.
     * - `ExpireMs` controls the validity period of the upload policy and the Transit record, in milliseconds. It is not an absolute timestamp. The default and maximum value is `604800000` (7 days), and the minimum value is `1000` (1 second). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - Call `GetTransitMeta` and read `ExpireAt` to obtain the expiration time of the Transit record. Confirming the upload or querying the record does not extend the validity period.
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
     * Generates a credential for direct file upload. The caller can use the returned upload policy to upload a file directly to object storage.
     *
     * @remarks
     * - `Network` can be set to `public` or `internal` to generate a public or same-region internal upload address. Default value: `public`.
     * - The maximum size of a single file is 50 MiB.
     * - `PolicyInfo` contains short-term upload authorization information intended only for the current file upload. Do not log it, persist it long-term, or forward it to other users.
     * - `ExpireMs` controls the validity period of the upload policy and the Transit record, in milliseconds. It is not an absolute timestamp. The default and maximum value is `604800000` (7 days), and the minimum value is `1000` (1 second). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds takes effect as 1 second.
     * - Call `GetTransitMeta` and read `ExpireAt` to obtain the expiration time of the Transit record. Confirming the upload or querying the record does not extend the validity period.
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
     * Deletes a specified Agent.
     *
     * @remarks
     * - Creators can delete Agents that they created.
     * - After deletion, the Agent can no longer be queried, updated, or run.
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
     * Deletes a specified Agent.
     *
     * @remarks
     * - Creators can delete Agents that they created.
     * - After deletion, the Agent can no longer be queried, updated, or run.
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
     * Soft-deletes a Skill that the current caller has permission to modify.
     *
     * @remarks
     * - Deletion permissions:
     *   - You can only delete custom Skills that the current caller has permission to modify.
     *   - The caller must be the Skill creator or the tenant root account that has permission to manage the tenant-level Skill. Official Skills cannot be deleted.
     * - Deletion results:
     *   - Deletion uses soft delete. After successful deletion, `GetSkill` and `ListSkills` no longer return the Skill, and you can create a new Skill with the same name.
     *   - Recovery is not supported. You cannot delete a Skill that has already been deleted or does not exist.
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
     * Soft-deletes a Skill that the current caller has permission to modify.
     *
     * @remarks
     * - Deletion permissions:
     *   - You can only delete custom Skills that the current caller has permission to modify.
     *   - The caller must be the Skill creator or the tenant root account that has permission to manage the tenant-level Skill. Official Skills cannot be deleted.
     * - Deletion results:
     *   - Deletion uses soft delete. After successful deletion, `GetSkill` and `ListSkills` no longer return the Skill, and you can create a new Skill with the same name.
     *   - Recovery is not supported. You cannot delete a Skill that has already been deleted or does not exist.
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
     * Queries an agent visible to the current identity by name.
     *
     * @remarks
     * - You can retrieve agents that you created, agents visible within the current tenant, and official agents provided by the platform.
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
     * Queries an agent visible to the current identity by name.
     *
     * @remarks
     * - You can retrieve agents that you created, agents visible within the current tenant, and official agents provided by the platform.
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
     * Queries a Skill by name that is visible to the current caller.
     *
     * @remarks
     * - Query target:
     *   - Queries by `Name`. Querying by `SkillId` is not supported.
     *   - Returns the Skill with the matching name that is visible to the current caller under the current tenant first. If no visible record exists, queries the official Skill with the same name.
     *   - If `SkillVersion` is omitted, the current Skill is returned. This parameter is omitted by default.
     * - Download URL:
     *   - `Network` supports `public` and `internal`. If omitted, no download URL is generated.
     *   - If the Skill has an accessible Artifact, a temporary `DownloadUrl` and the corresponding `DownloadUrlNetwork` are returned.
     *   - If the Artifact does not exist, is inaccessible, or the URL generation fails, the Skill query still succeeds, but download URL-related fields may not be returned.
     *   - The original `bundleUrl` used during creation is not stored and is not returned by this operation.
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
     * Queries a Skill by name that is visible to the current caller.
     *
     * @remarks
     * - Query target:
     *   - Queries by `Name`. Querying by `SkillId` is not supported.
     *   - Returns the Skill with the matching name that is visible to the current caller under the current tenant first. If no visible record exists, queries the official Skill with the same name.
     *   - If `SkillVersion` is omitted, the current Skill is returned. This parameter is omitted by default.
     * - Download URL:
     *   - `Network` supports `public` and `internal`. If omitted, no download URL is generated.
     *   - If the Skill has an accessible Artifact, a temporary `DownloadUrl` and the corresponding `DownloadUrlNetwork` are returned.
     *   - If the Artifact does not exist, is inaccessible, or the URL generation fails, the Skill query still succeeds, but download URL-related fields may not be returned.
     *   - The original `bundleUrl` used during creation is not stored and is not returned by this operation.
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
     * Queries the metadata of a Transit file, including the upload status, file size, and expiration time, and optionally generates a temporary download URL.
     *
     * @remarks
     * - Specify at least one of `TransitId` and `FilePath`. If both are specified, `TransitId` takes precedence.
     * - Use the `TransitId` returned by `CreateTransitUploadPolicy` to query the file. `TransitId` is a temporary capability identifier used during the file upload process. Do not share it with unauthorized users.
     * - `FilePath` is an opaque object path returned by `CreateTransitUploadPolicy`. Use it as-is. Do not parse, modify, or construct it manually.
     * - When you query by `FilePath`, an error is returned if the record does not exist or is not accessible to the caller.
     * - `ExpireMs` specifies the validity period of the download URL in milliseconds. Default value: `900000` (15 minutes). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds is rounded down to 1 second.
     * - `ExpireAt` is the expiration time of the Transit record, not the expiration time of the download URL. Querying, generating a download URL, and confirming the upload do not extend the record validity period.
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
     * Queries the metadata of a Transit file, including the upload status, file size, and expiration time, and optionally generates a temporary download URL.
     *
     * @remarks
     * - Specify at least one of `TransitId` and `FilePath`. If both are specified, `TransitId` takes precedence.
     * - Use the `TransitId` returned by `CreateTransitUploadPolicy` to query the file. `TransitId` is a temporary capability identifier used during the file upload process. Do not share it with unauthorized users.
     * - `FilePath` is an opaque object path returned by `CreateTransitUploadPolicy`. Use it as-is. Do not parse, modify, or construct it manually.
     * - When you query by `FilePath`, an error is returned if the record does not exist or is not accessible to the caller.
     * - `ExpireMs` specifies the validity period of the download URL in milliseconds. Default value: `900000` (15 minutes). The validity period is rounded down to the nearest whole second. For example, 1500 milliseconds is rounded down to 1 second.
     * - `ExpireAt` is the expiration time of the Transit record, not the expiration time of the download URL. Querying, generating a download URL, and confirming the upload do not extend the record validity period.
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
     * Queries agents visible to the current identity by paging.
     *
     * @remarks
     * - By default, returns official platform agents and tenant agents visible to the current identity.
     * - Set `Scope=SYSTEM` to query only official agents, or `Scope=CUSTOM` to query only custom agents.
     * - Both cursor-based pagination and page number-based pagination are supported. When using cursor-based pagination, pass the `NextToken` value from the previous response to the next request, and keep the caller identity, filter conditions, and `MaxResults` unchanged.
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
     * Queries agents visible to the current identity by paging.
     *
     * @remarks
     * - By default, returns official platform agents and tenant agents visible to the current identity.
     * - Set `Scope=SYSTEM` to query only official agents, or `Scope=CUSTOM` to query only custom agents.
     * - Both cursor-based pagination and page number-based pagination are supported. When using cursor-based pagination, pass the `NextToken` value from the previous response to the next request, and keep the caller identity, filter conditions, and `MaxResults` unchanged.
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
     * Queries Skills visible to the current caller by paging.
     *
     * @remarks
     * - Query and filtering:
     *     - Set `Scope=SYSTEM` to query only official Skills, or `Scope=CUSTOM` to query only custom Skills. If omitted, both official and custom Skills are queried.
     *     - Custom Skills with `user` visibility are visible only to the creator. Skills with `tenant` visibility are visible to the current tenant.
     *     - Filtering by `CreatorId`, `Q`, and `Visibility` is supported. `Q` performs a fuzzy match on the Skill name or description.
     *     - Results are sorted by update time in descending order by default.
     * - Pagination:
     *     - For cursor-based pagination, use `MaxResults` and `NextToken`. Do not pass `NextToken` for the first query. For subsequent pages, use the token returned in the previous response. When using `NextToken` for subsequent pages, `CreatorId`, `Q`, `Visibility`, `Scope`, and `MaxResults` must remain the same as the previous page. If you change the query conditions, start over from the first page.
     *     - For page-number-based pagination, use `PageNumber` and `PageSize`. If `MaxResults` is explicitly specified, cursor-based pagination takes precedence. If `NextToken` is specified, `PageNumber` is ignored.
     * - Response content:
     *     - This operation returns only Skill summaries and does not generate Bundle download URLs. To obtain download URLs, call `GetSkill` and specify `Network`.
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
     * Queries Skills visible to the current caller by paging.
     *
     * @remarks
     * - Query and filtering:
     *     - Set `Scope=SYSTEM` to query only official Skills, or `Scope=CUSTOM` to query only custom Skills. If omitted, both official and custom Skills are queried.
     *     - Custom Skills with `user` visibility are visible only to the creator. Skills with `tenant` visibility are visible to the current tenant.
     *     - Filtering by `CreatorId`, `Q`, and `Visibility` is supported. `Q` performs a fuzzy match on the Skill name or description.
     *     - Results are sorted by update time in descending order by default.
     * - Pagination:
     *     - For cursor-based pagination, use `MaxResults` and `NextToken`. Do not pass `NextToken` for the first query. For subsequent pages, use the token returned in the previous response. When using `NextToken` for subsequent pages, `CreatorId`, `Q`, `Visibility`, `Scope`, and `MaxResults` must remain the same as the previous page. If you change the query conditions, start over from the first page.
     *     - For page-number-based pagination, use `PageNumber` and `PageSize`. If `MaxResults` is explicitly specified, cursor-based pagination takes precedence. If `NextToken` is specified, `PageNumber` is ignored.
     * - Response content:
     *     - This operation returns only Skill summaries and does not generate Bundle download URLs. To obtain download URLs, call `GetSkill` and specify `Network`.
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
     * Updates the configuration of an Agent.
     *
     * @remarks
     * - `Name` is used only to locate the Agent and cannot be modified after creation.
     * - Each Agent can be bindded to only one knowledge base.
     * - `Tools` is updated according to the rules below. If `Skills` or `KnowledgeBases` is not specified, the existing value is retained. A non-empty array replaces the entire value. An empty array removes the corresponding binddings. Other optional fields retain their existing values if not specified.
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
     * Updates the configuration of an Agent.
     *
     * @remarks
     * - `Name` is used only to locate the Agent and cannot be modified after creation.
     * - Each Agent can be bindded to only one knowledge base.
     * - `Tools` is updated according to the rules below. If `Skills` or `KnowledgeBases` is not specified, the existing value is retained. A non-empty array replaces the entire value. An empty array removes the corresponding binddings. Other optional fields retain their existing values if not specified.
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
     * Updates a Skill.
     *
     * @remarks
     * - Update rules:
     *   - `Name` is used only to locate the Skill and cannot be modified.
     *   - The caller must be the Skill creator or the tenant root account that has permissions to manage the tenant-level Skill.
     * - Replacement rules:
     *   - `Description` and `Visibility` retain their original values when omitted. Passing `null` is treated the same as omitting the field and cannot be used to clear the original value.
     *   - `Metadata` is replaced as a whole, not merged incrementally. Omitting `Metadata` preserves the original content. When provided, any old fields not included in the new object are deleted.
     *   - When modifying only `Description` or `Visibility`, do not pass `Metadata` or an empty object `{}`. An empty object replaces the entire original Metadata with an empty value.
     * - Content source:
     *   - When replacing the body or bundle, specify exactly one of `skillMd`, `transitId`, or `bundleUrl`.
     *   - For field formats, the Transit upload confirmation process, and `bundleUrl` restrictions of the three sources, refer to CreateSkill. Pass the selected source in `UpdateSkill.Metadata`.
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
     * Updates a Skill.
     *
     * @remarks
     * - Update rules:
     *   - `Name` is used only to locate the Skill and cannot be modified.
     *   - The caller must be the Skill creator or the tenant root account that has permissions to manage the tenant-level Skill.
     * - Replacement rules:
     *   - `Description` and `Visibility` retain their original values when omitted. Passing `null` is treated the same as omitting the field and cannot be used to clear the original value.
     *   - `Metadata` is replaced as a whole, not merged incrementally. Omitting `Metadata` preserves the original content. When provided, any old fields not included in the new object are deleted.
     *   - When modifying only `Description` or `Visibility`, do not pass `Metadata` or an empty object `{}`. An empty object replaces the entire original Metadata with an empty value.
     * - Content source:
     *   - When replacing the body or bundle, specify exactly one of `skillMd`, `transitId`, or `bundleUrl`.
     *   - For field formats, the Transit upload confirmation process, and `bundleUrl` restrictions of the three sources, refer to CreateSkill. Pass the selected source in `UpdateSkill.Metadata`.
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
