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
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\CreateVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\DeleteVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetDataChannelCredentialRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetDataChannelCredentialResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\ListVariableResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\PublishApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateApplicationVersionShrinkRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateCloneVoiceRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateCloneVoiceResponse;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVariableRequest;
use AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\UpdateVariableResponse;
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

        if (null !== $request->audioCodec) {
            @$query['AudioCodec'] = $request->audioCodec;
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
     * 创建克隆音.
     *
     * @param request - CreateCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloneVoiceResponse
     *
     * @param CreateCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCloneVoiceResponse
     */
    public function createCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCloneVoice',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建克隆音.
     *
     * @param request - CreateCloneVoiceRequest
     *
     * @returns CreateCloneVoiceResponse
     *
     * @param CreateCloneVoiceRequest $request
     *
     * @return CreateCloneVoiceResponse
     */
    public function createCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * 创建变量.
     *
     * @param request - CreateVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVariableResponse
     *
     * @param CreateVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateVariableResponse
     */
    public function createVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVariable',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建变量.
     *
     * @param request - CreateVariableRequest
     *
     * @returns CreateVariableResponse
     *
     * @param CreateVariableRequest $request
     *
     * @return CreateVariableResponse
     */
    public function createVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVariableWithOptions($request, $runtime);
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
     * 删除场景.
     *
     * @param request - DeleteCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloneVoiceResponse
     *
     * @param DeleteCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCloneVoiceResponse
     */
    public function deleteCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCloneVoice',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除场景.
     *
     * @param request - DeleteCloneVoiceRequest
     *
     * @returns DeleteCloneVoiceResponse
     *
     * @param DeleteCloneVoiceRequest $request
     *
     * @return DeleteCloneVoiceResponse
     */
    public function deleteCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * 删除变量.
     *
     * @param request - DeleteVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVariableResponse
     *
     * @param DeleteVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVariable',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除变量.
     *
     * @param request - DeleteVariableRequest
     *
     * @returns DeleteVariableResponse
     *
     * @param DeleteVariableRequest $request
     *
     * @return DeleteVariableResponse
     */
    public function deleteVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVariableWithOptions($request, $runtime);
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
     * 获取数据通道凭证
     *
     * @param request - GetDataChannelCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataChannelCredentialResponse
     *
     * @param GetDataChannelCredentialRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataChannelCredentialResponse
     */
    public function getDataChannelCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessUnitId) {
            @$query['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDataChannelCredential',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataChannelCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据通道凭证
     *
     * @param request - GetDataChannelCredentialRequest
     *
     * @returns GetDataChannelCredentialResponse
     *
     * @param GetDataChannelCredentialRequest $request
     *
     * @return GetDataChannelCredentialResponse
     */
    public function getDataChannelCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataChannelCredentialWithOptions($request, $runtime);
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
     * 获取实例详情.
     *
     * @param request - ListCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloneVoiceResponse
     *
     * @param ListCloneVoiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCloneVoiceResponse
     */
    public function listCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCloneVoice',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例详情.
     *
     * @param request - ListCloneVoiceRequest
     *
     * @returns ListCloneVoiceResponse
     *
     * @param ListCloneVoiceRequest $request
     *
     * @return ListCloneVoiceResponse
     */
    public function listCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * 获取变量列表.
     *
     * @param request - ListVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVariableResponse
     *
     * @param ListVariableRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVariableResponse
     */
    public function listVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchPattern) {
            @$body['SearchPattern'] = $request->searchPattern;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVariable',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取变量列表.
     *
     * @param request - ListVariableRequest
     *
     * @returns ListVariableResponse
     *
     * @param ListVariableRequest $request
     *
     * @return ListVariableResponse
     */
    public function listVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVariableWithOptions($request, $runtime);
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

    /**
     * 更新实例.
     *
     * @param request - UpdateCloneVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloneVoiceResponse
     *
     * @param UpdateCloneVoiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCloneVoiceResponse
     */
    public function updateCloneVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->cloneVoiceId) {
            @$body['CloneVoiceId'] = $request->cloneVoiceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCloneVoice',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloneVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateCloneVoiceRequest
     *
     * @returns UpdateCloneVoiceResponse
     *
     * @param UpdateCloneVoiceRequest $request
     *
     * @return UpdateCloneVoiceResponse
     */
    public function updateCloneVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloneVoiceWithOptions($request, $runtime);
    }

    /**
     * 更新变量.
     *
     * @param request - UpdateVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVariableResponse
     *
     * @param UpdateVariableRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateVariableResponse
     */
    public function updateVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessUnitId) {
            @$body['BusinessUnitId'] = $request->businessUnitId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->variableId) {
            @$body['VariableId'] = $request->variableId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVariable',
            'version' => '2025-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新变量.
     *
     * @param request - UpdateVariableRequest
     *
     * @returns UpdateVariableResponse
     *
     * @param UpdateVariableRequest $request
     *
     * @return UpdateVariableResponse
     */
    public function updateVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVariableWithOptions($request, $runtime);
    }
}
