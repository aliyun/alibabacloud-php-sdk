<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Oosops\V20190601\Models\AuditPublicTemplateRegistrationRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\AuditPublicTemplateRegistrationResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreateActionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreateActionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicParameterRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicParameterResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicPatchBaselineRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicPatchBaselineResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\CreatePublicTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeleteFailureMsgRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeleteFailureMsgResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicParameterRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicParameterResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicPatchBaselineRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicPatchBaselineResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DeletePublicTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DoCheckResourceRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\DoCheckResourceResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetActionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetActionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetFlowControlRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetFlowControlResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicParameterRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicParameterResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicPatchBaselineRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicPatchBaselineResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetPublicTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetQuotaRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetQuotaResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetUserExecutionTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetUserExecutionTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetUserTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\GetUserTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListActionsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListActionsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListDefaultQuotaResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListFailureMsgsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListFailureMsgsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListOOSLogsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListOOSLogsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicParametersRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicParametersResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicPatchBaselinesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicPatchBaselinesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplateRegistrationsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplateRegistrationsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplatesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListPublicTemplatesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionLogsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionLogsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInstancePatchesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInstancePatchesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInstancePatchStatesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInstancePatchStatesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInventoryEntriesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserInventoryEntriesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTaskExecutionsRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTaskExecutionsResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTemplatesRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTemplatesResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ResetTimerTriggerExecutionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ResetTimerTriggerExecutionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ResetUserExecutionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ResetUserExecutionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\SetFlowControlRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\SetFlowControlResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\SetQuotaRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\SetQuotaResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\TerminateUserExecutionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\TerminateUserExecutionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdateActionRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdateActionResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicParameterRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicParameterResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicPatchBaselineRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicPatchBaselineResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicTemplateRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicTemplateResponse;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ValidatePublicTemplateContentRequest;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ValidatePublicTemplateContentResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Oosops extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oosops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AuditPublicTemplateRegistrationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AuditPublicTemplateRegistrationResponse
     *
     * @param AuditPublicTemplateRegistrationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AuditPublicTemplateRegistrationResponse
     */
    public function auditPublicTemplateRegistrationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditAction) {
            @$query['AuditAction'] = $request->auditAction;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->registrationId) {
            @$query['RegistrationId'] = $request->registrationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuditPublicTemplateRegistration',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AuditPublicTemplateRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AuditPublicTemplateRegistrationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AuditPublicTemplateRegistrationRequest
     * @returns AuditPublicTemplateRegistrationResponse
     *
     * @param AuditPublicTemplateRegistrationRequest $request
     *
     * @return AuditPublicTemplateRegistrationResponse
     */
    public function auditPublicTemplateRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->auditPublicTemplateRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateActionResponse
     *
     * @param CreateActionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateActionResponse
     */
    public function createActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAction',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateActionRequest
     * @returns CreateActionResponse
     *
     * @param CreateActionRequest $request
     *
     * @return CreateActionResponse
     */
    public function createAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createActionWithOptions($request, $runtime);
    }

    /**
     * 创建一个公共参数。
     *
     * @param request - CreatePublicParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePublicParameterResponse
     *
     * @param CreatePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePublicParameterResponse
     */
    public function createPublicParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->constraints) {
            @$query['Constraints'] = $request->constraints;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parameterType) {
            @$query['ParameterType'] = $request->parameterType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublicParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePublicParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个公共参数。
     *
     * @param request - CreatePublicParameterRequest
     * @returns CreatePublicParameterResponse
     *
     * @param CreatePublicParameterRequest $request
     *
     * @return CreatePublicParameterResponse
     */
    public function createPublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePublicPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePublicPatchBaselineResponse
     *
     * @param CreatePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePublicPatchBaselineResponse
     */
    public function createPublicPatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->approvalRules) {
            @$query['ApprovalRules'] = $request->approvalRules;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->operationSystem) {
            @$query['OperationSystem'] = $request->operationSystem;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublicPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePublicPatchBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreatePublicPatchBaselineRequest
     * @returns CreatePublicPatchBaselineResponse
     *
     * @param CreatePublicPatchBaselineRequest $request
     *
     * @return CreatePublicPatchBaselineResponse
     */
    public function createPublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePublicTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePublicTemplateResponse
     *
     * @param CreatePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePublicTemplateResponse
     */
    public function createPublicTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->isExample) {
            @$query['IsExample'] = $request->isExample;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->publisher) {
            @$query['Publisher'] = $request->publisher;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePublicTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePublicTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreatePublicTemplateRequest
     * @returns CreatePublicTemplateResponse
     *
     * @param CreatePublicTemplateRequest $request
     *
     * @return CreatePublicTemplateResponse
     */
    public function createPublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteFailureMsgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFailureMsgResponse
     *
     * @param DeleteFailureMsgRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFailureMsgResponse
     */
    public function deleteFailureMsgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->requestFingerprint) {
            @$query['RequestFingerprint'] = $request->requestFingerprint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFailureMsg',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFailureMsgResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFailureMsgResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteFailureMsgRequest
     * @returns DeleteFailureMsgResponse
     *
     * @param DeleteFailureMsgRequest $request
     *
     * @return DeleteFailureMsgResponse
     */
    public function deleteFailureMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFailureMsgWithOptions($request, $runtime);
    }

    /**
     * 删除公共参数。
     *
     * @param request - DeletePublicParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePublicParameterResponse
     *
     * @param DeletePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePublicParameterResponse
     */
    public function deletePublicParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePublicParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePublicParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除公共参数。
     *
     * @param request - DeletePublicParameterRequest
     * @returns DeletePublicParameterResponse
     *
     * @param DeletePublicParameterRequest $request
     *
     * @return DeletePublicParameterResponse
     */
    public function deletePublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePublicPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePublicPatchBaselineResponse
     *
     * @param DeletePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePublicPatchBaselineResponse
     */
    public function deletePublicPatchBaselineWithOptions($request, $runtime)
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
            'action'      => 'DeletePublicPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePublicPatchBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeletePublicPatchBaselineRequest
     * @returns DeletePublicPatchBaselineResponse
     *
     * @param DeletePublicPatchBaselineRequest $request
     *
     * @return DeletePublicPatchBaselineResponse
     */
    public function deletePublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePublicTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePublicTemplateResponse
     *
     * @param DeletePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePublicTemplateResponse
     */
    public function deletePublicTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePublicTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePublicTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeletePublicTemplateRequest
     * @returns DeletePublicTemplateResponse
     *
     * @param DeletePublicTemplateRequest $request
     *
     * @return DeletePublicTemplateResponse
     */
    public function deletePublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DoCheckResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DoCheckResourceResponse
     *
     * @param DoCheckResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DoCheckResourceResponse
     */
    public function doCheckResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bid) {
            @$query['bid'] = $request->bid;
        }

        if (null !== $request->country) {
            @$query['country'] = $request->country;
        }

        if (null !== $request->gmtWakeup) {
            @$query['gmtWakeup'] = $request->gmtWakeup;
        }

        if (null !== $request->hid) {
            @$query['hid'] = $request->hid;
        }

        if (null !== $request->interrupt) {
            @$query['interrupt'] = $request->interrupt;
        }

        if (null !== $request->invoker) {
            @$query['invoker'] = $request->invoker;
        }

        if (null !== $request->level) {
            @$query['level'] = $request->level;
        }

        if (null !== $request->message) {
            @$query['message'] = $request->message;
        }

        if (null !== $request->pk) {
            @$query['pk'] = $request->pk;
        }

        if (null !== $request->prompt) {
            @$query['prompt'] = $request->prompt;
        }

        if (null !== $request->success) {
            @$query['success'] = $request->success;
        }

        if (null !== $request->taskExtraData) {
            @$query['taskExtraData'] = $request->taskExtraData;
        }

        if (null !== $request->taskIdentifier) {
            @$query['taskIdentifier'] = $request->taskIdentifier;
        }

        if (null !== $request->url) {
            @$query['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DoCheckResource',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DoCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DoCheckResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DoCheckResourceRequest
     * @returns DoCheckResourceResponse
     *
     * @param DoCheckResourceRequest $request
     *
     * @return DoCheckResourceResponse
     */
    public function doCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doCheckResourceWithOptions($request, $runtime);
    }

    /**
     * 获取action的详细信息.
     *
     * @param request - GetActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetActionResponse
     *
     * @param GetActionRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetActionResponse
     */
    public function getActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAction',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取action的详细信息.
     *
     * @param request - GetActionRequest
     * @returns GetActionResponse
     *
     * @param GetActionRequest $request
     *
     * @return GetActionResponse
     */
    public function getAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActionWithOptions($request, $runtime);
    }

    /**
     * @param request - GetFlowControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetFlowControlResponse
     *
     * @param GetFlowControlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFlowControlResponse
     */
    public function getFlowControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFlowControl',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFlowControlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFlowControlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetFlowControlRequest
     * @returns GetFlowControlResponse
     *
     * @param GetFlowControlRequest $request
     *
     * @return GetFlowControlResponse
     */
    public function getFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowControlWithOptions($request, $runtime);
    }

    /**
     * 获取一个公共参数，包括参数值。
     *
     * @param request - GetPublicParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPublicParameterResponse
     *
     * @param GetPublicParameterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPublicParameterResponse
     */
    public function getPublicParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parameterVersion) {
            @$query['ParameterVersion'] = $request->parameterVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一个公共参数，包括参数值。
     *
     * @param request - GetPublicParameterRequest
     * @returns GetPublicParameterResponse
     *
     * @param GetPublicParameterRequest $request
     *
     * @return GetPublicParameterResponse
     */
    public function getPublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param request - GetPublicPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPublicPatchBaselineResponse
     *
     * @param GetPublicPatchBaselineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPublicPatchBaselineResponse
     */
    public function getPublicPatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicPatchBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetPublicPatchBaselineRequest
     * @returns GetPublicPatchBaselineResponse
     *
     * @param GetPublicPatchBaselineRequest $request
     *
     * @return GetPublicPatchBaselineResponse
     */
    public function getPublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param request - GetPublicTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPublicTemplateResponse
     *
     * @param GetPublicTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPublicTemplateResponse
     */
    public function getPublicTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetPublicTemplateRequest
     * @returns GetPublicTemplateResponse
     *
     * @param GetPublicTemplateRequest $request
     *
     * @return GetPublicTemplateResponse
     */
    public function getPublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetQuotaResponse
     *
     * @param GetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->quotaName) {
            @$query['QuotaName'] = $request->quotaName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQuota',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetQuotaRequest
     * @returns GetQuotaResponse
     *
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserExecutionTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetUserExecutionTemplateResponse
     *
     * @param GetUserExecutionTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserExecutionTemplateResponse
     */
    public function getUserExecutionTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserExecutionTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserExecutionTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserExecutionTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetUserExecutionTemplateRequest
     * @returns GetUserExecutionTemplateResponse
     *
     * @param GetUserExecutionTemplateRequest $request
     *
     * @return GetUserExecutionTemplateResponse
     */
    public function getUserExecutionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserExecutionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetUserTemplateResponse
     *
     * @param GetUserTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUserTemplateResponse
     */
    public function getUserTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateVersion) {
            @$query['TemplateVersion'] = $request->templateVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetUserTemplateRequest
     * @returns GetUserTemplateResponse
     *
     * @param GetUserTemplateRequest $request
     *
     * @return GetUserTemplateResponse
     */
    public function getUserTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ListActionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListActionsResponse
     *
     * @param ListActionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListActionsResponse
     */
    public function listActionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->OOSActionName) {
            @$query['OOSActionName'] = $request->OOSActionName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListActions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListActionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListActionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListActionsRequest
     * @returns ListActionsResponse
     *
     * @param ListActionsRequest $request
     *
     * @return ListActionsResponse
     */
    public function listActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListDefaultQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDefaultQuotaResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListDefaultQuotaResponse
     */
    public function listDefaultQuotaWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListDefaultQuota',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDefaultQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDefaultQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @returns ListDefaultQuotaResponse
     *
     * @return ListDefaultQuotaResponse
     */
    public function listDefaultQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDefaultQuotaWithOptions($runtime);
    }

    /**
     * @param request - ListFailureMsgsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListFailureMsgsResponse
     *
     * @param ListFailureMsgsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFailureMsgsResponse
     */
    public function listFailureMsgsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->requestFingerprint) {
            @$query['RequestFingerprint'] = $request->requestFingerprint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFailureMsgs',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFailureMsgsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFailureMsgsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListFailureMsgsRequest
     * @returns ListFailureMsgsResponse
     *
     * @param ListFailureMsgsRequest $request
     *
     * @return ListFailureMsgsResponse
     */
    public function listFailureMsgs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFailureMsgsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListOOSLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListOOSLogsResponse
     *
     * @param ListOOSLogsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListOOSLogsResponse
     */
    public function listOOSLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->requestFingerprint) {
            @$query['RequestFingerprint'] = $request->requestFingerprint;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOOSLogs',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOOSLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOOSLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListOOSLogsRequest
     * @returns ListOOSLogsResponse
     *
     * @param ListOOSLogsRequest $request
     *
     * @return ListOOSLogsResponse
     */
    public function listOOSLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOOSLogsWithOptions($request, $runtime);
    }

    /**
     * 查询公共参数。支持多种查询.
     *
     * @param request - ListPublicParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPublicParametersResponse
     *
     * @param ListPublicParametersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPublicParametersResponse
     */
    public function listPublicParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createdDateAfter) {
            @$query['CreatedDateAfter'] = $request->createdDateAfter;
        }

        if (null !== $request->createdDateBefore) {
            @$query['CreatedDateBefore'] = $request->createdDateBefore;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parameterType) {
            @$query['ParameterType'] = $request->parameterType;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->recursive) {
            @$query['Recursive'] = $request->recursive;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicParameters',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPublicParametersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicParametersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询公共参数。支持多种查询.
     *
     * @param request - ListPublicParametersRequest
     * @returns ListPublicParametersResponse
     *
     * @param ListPublicParametersRequest $request
     *
     * @return ListPublicParametersResponse
     */
    public function listPublicParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicParametersWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPublicPatchBaselinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPublicPatchBaselinesResponse
     *
     * @param ListPublicPatchBaselinesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPublicPatchBaselinesResponse
     */
    public function listPublicPatchBaselinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->operationSystem) {
            @$query['OperationSystem'] = $request->operationSystem;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicPatchBaselines',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPublicPatchBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicPatchBaselinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListPublicPatchBaselinesRequest
     * @returns ListPublicPatchBaselinesResponse
     *
     * @param ListPublicPatchBaselinesRequest $request
     *
     * @return ListPublicPatchBaselinesResponse
     */
    public function listPublicPatchBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicPatchBaselinesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPublicTemplateRegistrationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPublicTemplateRegistrationsResponse
     *
     * @param ListPublicTemplateRegistrationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListPublicTemplateRegistrationsResponse
     */
    public function listPublicTemplateRegistrationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->registrationId) {
            @$query['RegistrationId'] = $request->registrationId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicTemplateRegistrations',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPublicTemplateRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicTemplateRegistrationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListPublicTemplateRegistrationsRequest
     * @returns ListPublicTemplateRegistrationsResponse
     *
     * @param ListPublicTemplateRegistrationsRequest $request
     *
     * @return ListPublicTemplateRegistrationsResponse
     */
    public function listPublicTemplateRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicTemplateRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListPublicTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPublicTemplatesResponse
     *
     * @param ListPublicTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPublicTemplatesResponse
     */
    public function listPublicTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createdBy) {
            @$query['CreatedBy'] = $request->createdBy;
        }

        if (null !== $request->createdDateAfter) {
            @$query['CreatedDateAfter'] = $request->createdDateAfter;
        }

        if (null !== $request->createdDateBefore) {
            @$query['CreatedDateBefore'] = $request->createdDateBefore;
        }

        if (null !== $request->isExample) {
            @$query['IsExample'] = $request->isExample;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->templateFormat) {
            @$query['TemplateFormat'] = $request->templateFormat;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicTemplates',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPublicTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListPublicTemplatesRequest
     * @returns ListPublicTemplatesResponse
     *
     * @param ListPublicTemplatesRequest $request
     *
     * @return ListPublicTemplatesResponse
     */
    public function listPublicTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserExecutionLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserExecutionLogsResponse
     *
     * @param ListUserExecutionLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserExecutionLogsResponse
     */
    public function listUserExecutionLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->logType) {
            @$query['LogType'] = $request->logType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskExecutionId) {
            @$query['TaskExecutionId'] = $request->taskExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserExecutionLogs',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserExecutionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserExecutionLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserExecutionLogsRequest
     * @returns ListUserExecutionLogsResponse
     *
     * @param ListUserExecutionLogsRequest $request
     *
     * @return ListUserExecutionLogsResponse
     */
    public function listUserExecutionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserExecutionLogsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserExecutionsResponse
     *
     * @param ListUserExecutionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserExecutionsResponse
     */
    public function listUserExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->endDateAfter) {
            @$query['EndDateAfter'] = $request->endDateAfter;
        }

        if (null !== $request->endDateBefore) {
            @$query['EndDateBefore'] = $request->endDateBefore;
        }

        if (null !== $request->executedBy) {
            @$query['ExecutedBy'] = $request->executedBy;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->includeChildExecution) {
            @$query['IncludeChildExecution'] = $request->includeChildExecution;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentExecutionId) {
            @$query['ParentExecutionId'] = $request->parentExecutionId;
        }

        if (null !== $request->ramRole) {
            @$query['RamRole'] = $request->ramRole;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startDateAfter) {
            @$query['StartDateAfter'] = $request->startDateAfter;
        }

        if (null !== $request->startDateBefore) {
            @$query['StartDateBefore'] = $request->startDateBefore;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserExecutions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserExecutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserExecutionsRequest
     * @returns ListUserExecutionsResponse
     *
     * @param ListUserExecutionsRequest $request
     *
     * @return ListUserExecutionsResponse
     */
    public function listUserExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserInstancePatchStatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserInstancePatchStatesResponse
     *
     * @param ListUserInstancePatchStatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserInstancePatchStatesResponse
     */
    public function listUserInstancePatchStatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserInstancePatchStates',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserInstancePatchStatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserInstancePatchStatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserInstancePatchStatesRequest
     * @returns ListUserInstancePatchStatesResponse
     *
     * @param ListUserInstancePatchStatesRequest $request
     *
     * @return ListUserInstancePatchStatesResponse
     */
    public function listUserInstancePatchStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInstancePatchStatesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserInstancePatchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserInstancePatchesResponse
     *
     * @param ListUserInstancePatchesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserInstancePatchesResponse
     */
    public function listUserInstancePatchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserInstancePatches',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserInstancePatchesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserInstancePatchesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserInstancePatchesRequest
     * @returns ListUserInstancePatchesResponse
     *
     * @param ListUserInstancePatchesRequest $request
     *
     * @return ListUserInstancePatchesResponse
     */
    public function listUserInstancePatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInstancePatchesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserInventoryEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserInventoryEntriesResponse
     *
     * @param ListUserInventoryEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListUserInventoryEntriesResponse
     */
    public function listUserInventoryEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->typeName) {
            @$query['TypeName'] = $request->typeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserInventoryEntries',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserInventoryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserInventoryEntriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserInventoryEntriesRequest
     * @returns ListUserInventoryEntriesResponse
     *
     * @param ListUserInventoryEntriesRequest $request
     *
     * @return ListUserInventoryEntriesResponse
     */
    public function listUserInventoryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInventoryEntriesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserTaskExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserTaskExecutionsResponse
     *
     * @param ListUserTaskExecutionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserTaskExecutionsResponse
     */
    public function listUserTaskExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->endDateAfter) {
            @$query['EndDateAfter'] = $request->endDateAfter;
        }

        if (null !== $request->endDateBefore) {
            @$query['EndDateBefore'] = $request->endDateBefore;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->includeChildTaskExecution) {
            @$query['IncludeChildTaskExecution'] = $request->includeChildTaskExecution;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentTaskExecutionId) {
            @$query['ParentTaskExecutionId'] = $request->parentTaskExecutionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->startDateAfter) {
            @$query['StartDateAfter'] = $request->startDateAfter;
        }

        if (null !== $request->startDateBefore) {
            @$query['StartDateBefore'] = $request->startDateBefore;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskAction) {
            @$query['TaskAction'] = $request->taskAction;
        }

        if (null !== $request->taskExecutionId) {
            @$query['TaskExecutionId'] = $request->taskExecutionId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserTaskExecutions',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserTaskExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserTaskExecutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserTaskExecutionsRequest
     * @returns ListUserTaskExecutionsResponse
     *
     * @param ListUserTaskExecutionsRequest $request
     *
     * @return ListUserTaskExecutionsResponse
     */
    public function listUserTaskExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTaskExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUserTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUserTemplatesResponse
     *
     * @param ListUserTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserTemplatesResponse
     */
    public function listUserTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->createdBy) {
            @$query['CreatedBy'] = $request->createdBy;
        }

        if (null !== $request->createdDateAfter) {
            @$query['CreatedDateAfter'] = $request->createdDateAfter;
        }

        if (null !== $request->createdDateBefore) {
            @$query['CreatedDateBefore'] = $request->createdDateBefore;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->shareType) {
            @$query['ShareType'] = $request->shareType;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->templateFormat) {
            @$query['TemplateFormat'] = $request->templateFormat;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserTemplates',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUserTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUserTemplatesRequest
     * @returns ListUserTemplatesResponse
     *
     * @param ListUserTemplatesRequest $request
     *
     * @return ListUserTemplatesResponse
     */
    public function listUserTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - ResetTimerTriggerExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResetTimerTriggerExecutionResponse
     *
     * @param ResetTimerTriggerExecutionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetTimerTriggerExecutionResponse
     */
    public function resetTimerTriggerExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetTimerTriggerExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetTimerTriggerExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetTimerTriggerExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ResetTimerTriggerExecutionRequest
     * @returns ResetTimerTriggerExecutionResponse
     *
     * @param ResetTimerTriggerExecutionRequest $request
     *
     * @return ResetTimerTriggerExecutionResponse
     */
    public function resetTimerTriggerExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetTimerTriggerExecutionWithOptions($request, $runtime);
    }

    /**
     * @param request - ResetUserExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResetUserExecutionResponse
     *
     * @param ResetUserExecutionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ResetUserExecutionResponse
     */
    public function resetUserExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetUserExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetUserExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetUserExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ResetUserExecutionRequest
     * @returns ResetUserExecutionResponse
     *
     * @param ResetUserExecutionRequest $request
     *
     * @return ResetUserExecutionResponse
     */
    public function resetUserExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserExecutionWithOptions($request, $runtime);
    }

    /**
     * @param request - SetFlowControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetFlowControlResponse
     *
     * @param SetFlowControlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetFlowControlResponse
     */
    public function setFlowControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetFlowControl',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetFlowControlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetFlowControlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SetFlowControlRequest
     * @returns SetFlowControlResponse
     *
     * @param SetFlowControlRequest $request
     *
     * @return SetFlowControlResponse
     */
    public function setFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFlowControlWithOptions($request, $runtime);
    }

    /**
     * @param request - SetQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetQuotaResponse
     *
     * @param SetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SetQuotaResponse
     */
    public function setQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->quotaName) {
            @$query['QuotaName'] = $request->quotaName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetQuota',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SetQuotaRequest
     * @returns SetQuotaResponse
     *
     * @param SetQuotaRequest $request
     *
     * @return SetQuotaResponse
     */
    public function setQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQuotaWithOptions($request, $runtime);
    }

    /**
     * @param request - TerminateUserExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TerminateUserExecutionResponse
     *
     * @param TerminateUserExecutionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TerminateUserExecutionResponse
     */
    public function terminateUserExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->executionId) {
            @$query['ExecutionId'] = $request->executionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateUserExecution',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TerminateUserExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TerminateUserExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - TerminateUserExecutionRequest
     * @returns TerminateUserExecutionResponse
     *
     * @param TerminateUserExecutionRequest $request
     *
     * @return TerminateUserExecutionResponse
     */
    public function terminateUserExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateUserExecutionWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateActionResponse
     *
     * @param UpdateActionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateActionResponse
     */
    public function updateActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAction',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateActionRequest
     * @returns UpdateActionResponse
     *
     * @param UpdateActionRequest $request
     *
     * @return UpdateActionResponse
     */
    public function updateAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateActionWithOptions($request, $runtime);
    }

    /**
     * 更新一个已存在的公共参数。
     *
     * @param request - UpdatePublicParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePublicParameterResponse
     *
     * @param UpdatePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePublicParameterResponse
     */
    public function updatePublicParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicParameter',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePublicParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新一个已存在的公共参数。
     *
     * @param request - UpdatePublicParameterRequest
     * @returns UpdatePublicParameterResponse
     *
     * @param UpdatePublicParameterRequest $request
     *
     * @return UpdatePublicParameterResponse
     */
    public function updatePublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdatePublicPatchBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePublicPatchBaselineResponse
     *
     * @param UpdatePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePublicPatchBaselineResponse
     */
    public function updatePublicPatchBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->approvalRules) {
            @$query['ApprovalRules'] = $request->approvalRules;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicPatchBaseline',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePublicPatchBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdatePublicPatchBaselineRequest
     * @returns UpdatePublicPatchBaselineResponse
     *
     * @param UpdatePublicPatchBaselineRequest $request
     *
     * @return UpdatePublicPatchBaselineResponse
     */
    public function updatePublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdatePublicTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePublicTemplateResponse
     *
     * @param UpdatePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePublicTemplateResponse
     */
    public function updatePublicTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->popularity) {
            @$query['Popularity'] = $request->popularity;
        }

        if (null !== $request->publisher) {
            @$query['Publisher'] = $request->publisher;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePublicTemplate',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePublicTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdatePublicTemplateRequest
     * @returns UpdatePublicTemplateResponse
     *
     * @param UpdatePublicTemplateRequest $request
     *
     * @return UpdatePublicTemplateResponse
     */
    public function updatePublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ValidatePublicTemplateContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ValidatePublicTemplateContentResponse
     *
     * @param ValidatePublicTemplateContentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ValidatePublicTemplateContentResponse
     */
    public function validatePublicTemplateContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidatePublicTemplateContent',
            'version'     => '2019-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ValidatePublicTemplateContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValidatePublicTemplateContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ValidatePublicTemplateContentRequest
     * @returns ValidatePublicTemplateContentResponse
     *
     * @param ValidatePublicTemplateContentRequest $request
     *
     * @return ValidatePublicTemplateContentResponse
     */
    public function validatePublicTemplateContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validatePublicTemplateContentWithOptions($request, $runtime);
    }
}
