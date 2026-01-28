<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\BridgeWebCallRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\BridgeWebCallResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateApplicationVersionShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianVoiceBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianvoicebot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建软电话测试通话.
     *
     * @param request - BridgeWebCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BridgeWebCallResponse
     *
     * @param BridgeWebCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BridgeWebCallResponse
     */
    public function bridgeWebCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->sampleRate) {
            @$query['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sandbox) {
            @$query['Sandbox'] = $request->sandbox;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->timeoutSeconds) {
            @$query['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BridgeWebCall',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BridgeWebCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建软电话测试通话.
     *
     * @param request - BridgeWebCallRequest
     *
     * @returns BridgeWebCallResponse
     *
     * @param BridgeWebCallRequest $request
     *
     * @return BridgeWebCallResponse
     */
    public function bridgeWebCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bridgeWebCallWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param request - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nluAccessType) {
            @$query['NluAccessType'] = $request->nluAccessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * 创景场景版本.
     *
     * @param tmpReq - CreateApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationVersionResponse
     *
     * @param CreateApplicationVersionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateApplicationVersionResponse
     */
    public function createApplicationVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->scriptProfile) {
            $request->scriptProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scriptProfile, 'ScriptProfile', 'json');
        }

        if (null !== $tmpReq->synthesizerConfig) {
            $request->synthesizerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synthesizerConfig, 'SynthesizerConfig', 'json');
        }

        if (null !== $tmpReq->transcriberConfig) {
            $request->transcriberConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcriberConfig, 'TranscriberConfig', 'json');
        }

        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$query['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->scriptProfileShrink) {
            @$query['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->sourceVersionId) {
            @$query['SourceVersionId'] = $request->sourceVersionId;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$query['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$query['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创景场景版本.
     *
     * @param request - CreateApplicationVersionRequest
     *
     * @returns CreateApplicationVersionResponse
     *
     * @param CreateApplicationVersionRequest $request
     *
     * @return CreateApplicationVersionResponse
     */
    public function createApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationVersionWithOptions($request, $runtime);
    }

    /**
     * 删除应用.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * Get应用.
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get应用.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * 查询应用.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$query['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * 发布版本.
     *
     * @param request - PublishApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishApplicationVersionResponse
     *
     * @param PublishApplicationVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublishApplicationVersionResponse
     */
    public function publishApplicationVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布版本.
     *
     * @param request - PublishApplicationVersionRequest
     *
     * @returns PublishApplicationVersionResponse
     *
     * @param PublishApplicationVersionRequest $request
     *
     * @return PublishApplicationVersionResponse
     */
    public function publishApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishApplicationVersionWithOptions($request, $runtime);
    }

    /**
     * 修改应用.
     *
     * @param request - UpdateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplication',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改应用.
     *
     * @param request - UpdateApplicationRequest
     *
     * @returns UpdateApplicationResponse
     *
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationWithOptions($request, $runtime);
    }

    /**
     * 修改场景版本.
     *
     * @param tmpReq - UpdateApplicationVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationVersionResponse
     *
     * @param UpdateApplicationVersionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicationVersionResponse
     */
    public function updateApplicationVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateApplicationVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interactionConfig) {
            $request->interactionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interactionConfig, 'InteractionConfig', 'json');
        }

        if (null !== $tmpReq->scriptProfile) {
            $request->scriptProfileShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scriptProfile, 'ScriptProfile', 'json');
        }

        if (null !== $tmpReq->synthesizerConfig) {
            $request->synthesizerConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->synthesizerConfig, 'SynthesizerConfig', 'json');
        }

        if (null !== $tmpReq->transcriberConfig) {
            $request->transcriberConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcriberConfig, 'TranscriberConfig', 'json');
        }

        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->interactionConfigShrink) {
            @$query['InteractionConfig'] = $request->interactionConfigShrink;
        }

        if (null !== $request->scriptProfileShrink) {
            @$query['ScriptProfile'] = $request->scriptProfileShrink;
        }

        if (null !== $request->synthesizerConfigShrink) {
            @$query['SynthesizerConfig'] = $request->synthesizerConfigShrink;
        }

        if (null !== $request->transcriberConfigShrink) {
            @$query['TranscriberConfig'] = $request->transcriberConfigShrink;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateApplicationVersion',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改场景版本.
     *
     * @param request - UpdateApplicationVersionRequest
     *
     * @returns UpdateApplicationVersionResponse
     *
     * @param UpdateApplicationVersionRequest $request
     *
     * @return UpdateApplicationVersionResponse
     */
    public function updateApplicationVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationVersionWithOptions($request, $runtime);
    }
}
