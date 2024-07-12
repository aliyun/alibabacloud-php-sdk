<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AuditPublicTemplateRegistrationRequest $request AuditPublicTemplateRegistrationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return AuditPublicTemplateRegistrationResponse AuditPublicTemplateRegistrationResponse
     */
    public function auditPublicTemplateRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditAction)) {
            $query['AuditAction'] = $request->auditAction;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->registrationId)) {
            $query['RegistrationId'] = $request->registrationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AuditPublicTemplateRegistrationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuditPublicTemplateRegistrationRequest $request AuditPublicTemplateRegistrationRequest
     *
     * @return AuditPublicTemplateRegistrationResponse AuditPublicTemplateRegistrationResponse
     */
    public function auditPublicTemplateRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->auditPublicTemplateRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param CreateActionRequest $request CreateActionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateActionResponse CreateActionResponse
     */
    public function createActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateActionRequest $request CreateActionRequest
     *
     * @return CreateActionResponse CreateActionResponse
     */
    public function createAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createActionWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个公共参数。
     *  *
     * @param CreatePublicParameterRequest $request CreatePublicParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePublicParameterResponse CreatePublicParameterResponse
     */
    public function createPublicParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->constraints)) {
            $query['Constraints'] = $request->constraints;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameterType)) {
            $query['ParameterType'] = $request->parameterType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreatePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个公共参数。
     *  *
     * @param CreatePublicParameterRequest $request CreatePublicParameterRequest
     *
     * @return CreatePublicParameterResponse CreatePublicParameterResponse
     */
    public function createPublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublicPatchBaselineRequest $request CreatePublicPatchBaselineRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePublicPatchBaselineResponse CreatePublicPatchBaselineResponse
     */
    public function createPublicPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operationSystem)) {
            $query['OperationSystem'] = $request->operationSystem;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreatePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublicPatchBaselineRequest $request CreatePublicPatchBaselineRequest
     *
     * @return CreatePublicPatchBaselineResponse CreatePublicPatchBaselineResponse
     */
    public function createPublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param CreatePublicTemplateRequest $request CreatePublicTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePublicTemplateResponse CreatePublicTemplateResponse
     */
    public function createPublicTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->isExample)) {
            $query['IsExample'] = $request->isExample;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->publisher)) {
            $query['Publisher'] = $request->publisher;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreatePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePublicTemplateRequest $request CreatePublicTemplateRequest
     *
     * @return CreatePublicTemplateResponse CreatePublicTemplateResponse
     */
    public function createPublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFailureMsgRequest $request DeleteFailureMsgRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFailureMsgResponse DeleteFailureMsgResponse
     */
    public function deleteFailureMsgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->requestFingerprint)) {
            $query['RequestFingerprint'] = $request->requestFingerprint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteFailureMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFailureMsgRequest $request DeleteFailureMsgRequest
     *
     * @return DeleteFailureMsgResponse DeleteFailureMsgResponse
     */
    public function deleteFailureMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFailureMsgWithOptions($request, $runtime);
    }

    /**
     * @summary 删除公共参数。
     *  *
     * @param DeletePublicParameterRequest $request DeletePublicParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePublicParameterResponse DeletePublicParameterResponse
     */
    public function deletePublicParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeletePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除公共参数。
     *  *
     * @param DeletePublicParameterRequest $request DeletePublicParameterRequest
     *
     * @return DeletePublicParameterResponse DeletePublicParameterResponse
     */
    public function deletePublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param DeletePublicPatchBaselineRequest $request DeletePublicPatchBaselineRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePublicPatchBaselineResponse DeletePublicPatchBaselineResponse
     */
    public function deletePublicPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeletePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePublicPatchBaselineRequest $request DeletePublicPatchBaselineRequest
     *
     * @return DeletePublicPatchBaselineResponse DeletePublicPatchBaselineResponse
     */
    public function deletePublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param DeletePublicTemplateRequest $request DeletePublicTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePublicTemplateResponse DeletePublicTemplateResponse
     */
    public function deletePublicTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeletePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePublicTemplateRequest $request DeletePublicTemplateRequest
     *
     * @return DeletePublicTemplateResponse DeletePublicTemplateResponse
     */
    public function deletePublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DoCheckResourceRequest $request DoCheckResourceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DoCheckResourceResponse DoCheckResourceResponse
     */
    public function doCheckResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bid)) {
            $query['bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->country)) {
            $query['country'] = $request->country;
        }
        if (!Utils::isUnset($request->gmtWakeup)) {
            $query['gmtWakeup'] = $request->gmtWakeup;
        }
        if (!Utils::isUnset($request->hid)) {
            $query['hid'] = $request->hid;
        }
        if (!Utils::isUnset($request->interrupt)) {
            $query['interrupt'] = $request->interrupt;
        }
        if (!Utils::isUnset($request->invoker)) {
            $query['invoker'] = $request->invoker;
        }
        if (!Utils::isUnset($request->level)) {
            $query['level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $query['message'] = $request->message;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->prompt)) {
            $query['prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->success)) {
            $query['success'] = $request->success;
        }
        if (!Utils::isUnset($request->taskExtraData)) {
            $query['taskExtraData'] = $request->taskExtraData;
        }
        if (!Utils::isUnset($request->taskIdentifier)) {
            $query['taskIdentifier'] = $request->taskIdentifier;
        }
        if (!Utils::isUnset($request->url)) {
            $query['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DoCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DoCheckResourceRequest $request DoCheckResourceRequest
     *
     * @return DoCheckResourceResponse DoCheckResourceResponse
     */
    public function doCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doCheckResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取action的详细信息
     *  *
     * @param GetActionRequest $request GetActionRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetActionResponse GetActionResponse
     */
    public function getActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取action的详细信息
     *  *
     * @param GetActionRequest $request GetActionRequest
     *
     * @return GetActionResponse GetActionResponse
     */
    public function getAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getActionWithOptions($request, $runtime);
    }

    /**
     * @param GetFlowControlRequest $request GetFlowControlRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFlowControlResponse GetFlowControlResponse
     */
    public function getFlowControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->api)) {
            $query['Api'] = $request->api;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetFlowControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFlowControlRequest $request GetFlowControlRequest
     *
     * @return GetFlowControlResponse GetFlowControlResponse
     */
    public function getFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowControlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取一个公共参数，包括参数值。
     *  *
     * @param GetPublicParameterRequest $request GetPublicParameterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicParameterResponse GetPublicParameterResponse
     */
    public function getPublicParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parameterVersion)) {
            $query['ParameterVersion'] = $request->parameterVersion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个公共参数，包括参数值。
     *  *
     * @param GetPublicParameterRequest $request GetPublicParameterRequest
     *
     * @return GetPublicParameterResponse GetPublicParameterResponse
     */
    public function getPublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicPatchBaselineRequest $request GetPublicPatchBaselineRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicPatchBaselineResponse GetPublicPatchBaselineResponse
     */
    public function getPublicPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPublicPatchBaselineRequest $request GetPublicPatchBaselineRequest
     *
     * @return GetPublicPatchBaselineResponse GetPublicPatchBaselineResponse
     */
    public function getPublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicTemplateRequest $request GetPublicTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicTemplateResponse GetPublicTemplateResponse
     */
    public function getPublicTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetPublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPublicTemplateRequest $request GetPublicTemplateRequest
     *
     * @return GetPublicTemplateResponse GetPublicTemplateResponse
     */
    public function getPublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetQuotaRequest $request GetQuotaRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quotaName)) {
            $query['QuotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQuotaRequest $request GetQuotaRequest
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuotaWithOptions($request, $runtime);
    }

    /**
     * @param GetUserExecutionTemplateRequest $request GetUserExecutionTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserExecutionTemplateResponse GetUserExecutionTemplateResponse
     */
    public function getUserExecutionTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetUserExecutionTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserExecutionTemplateRequest $request GetUserExecutionTemplateRequest
     *
     * @return GetUserExecutionTemplateResponse GetUserExecutionTemplateResponse
     */
    public function getUserExecutionTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserExecutionTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetUserTemplateRequest $request GetUserTemplateRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserTemplateResponse GetUserTemplateResponse
     */
    public function getUserTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $query['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetUserTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserTemplateRequest $request GetUserTemplateRequest
     *
     * @return GetUserTemplateResponse GetUserTemplateResponse
     */
    public function getUserTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListActionsRequest $request ListActionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListActionsResponse ListActionsResponse
     */
    public function listActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->OOSActionName)) {
            $query['OOSActionName'] = $request->OOSActionName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListActionsRequest $request ListActionsRequest
     *
     * @return ListActionsResponse ListActionsResponse
     */
    public function listActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listActionsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDefaultQuotaResponse ListDefaultQuotaResponse
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

        return ListDefaultQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListDefaultQuotaResponse ListDefaultQuotaResponse
     */
    public function listDefaultQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDefaultQuotaWithOptions($runtime);
    }

    /**
     * @param ListFailureMsgsRequest $request ListFailureMsgsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFailureMsgsResponse ListFailureMsgsResponse
     */
    public function listFailureMsgsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->requestFingerprint)) {
            $query['RequestFingerprint'] = $request->requestFingerprint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListFailureMsgsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFailureMsgsRequest $request ListFailureMsgsRequest
     *
     * @return ListFailureMsgsResponse ListFailureMsgsResponse
     */
    public function listFailureMsgs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFailureMsgsWithOptions($request, $runtime);
    }

    /**
     * @param ListOOSLogsRequest $request ListOOSLogsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOOSLogsResponse ListOOSLogsResponse
     */
    public function listOOSLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->requestFingerprint)) {
            $query['RequestFingerprint'] = $request->requestFingerprint;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListOOSLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOOSLogsRequest $request ListOOSLogsRequest
     *
     * @return ListOOSLogsResponse ListOOSLogsResponse
     */
    public function listOOSLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOOSLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询公共参数。支持多种查询
     *  *
     * @param ListPublicParametersRequest $request ListPublicParametersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicParametersResponse ListPublicParametersResponse
     */
    public function listPublicParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parameterType)) {
            $query['ParameterType'] = $request->parameterType;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->recursive)) {
            $query['Recursive'] = $request->recursive;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPublicParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询公共参数。支持多种查询
     *  *
     * @param ListPublicParametersRequest $request ListPublicParametersRequest
     *
     * @return ListPublicParametersResponse ListPublicParametersResponse
     */
    public function listPublicParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicParametersWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicPatchBaselinesRequest $request ListPublicPatchBaselinesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicPatchBaselinesResponse ListPublicPatchBaselinesResponse
     */
    public function listPublicPatchBaselinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->operationSystem)) {
            $query['OperationSystem'] = $request->operationSystem;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPublicPatchBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicPatchBaselinesRequest $request ListPublicPatchBaselinesRequest
     *
     * @return ListPublicPatchBaselinesResponse ListPublicPatchBaselinesResponse
     */
    public function listPublicPatchBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicPatchBaselinesWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicTemplateRegistrationsRequest $request ListPublicTemplateRegistrationsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicTemplateRegistrationsResponse ListPublicTemplateRegistrationsResponse
     */
    public function listPublicTemplateRegistrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->registrationId)) {
            $query['RegistrationId'] = $request->registrationId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPublicTemplateRegistrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicTemplateRegistrationsRequest $request ListPublicTemplateRegistrationsRequest
     *
     * @return ListPublicTemplateRegistrationsResponse ListPublicTemplateRegistrationsResponse
     */
    public function listPublicTemplateRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicTemplateRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicTemplatesRequest $request ListPublicTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicTemplatesResponse ListPublicTemplatesResponse
     */
    public function listPublicTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createdBy)) {
            $query['CreatedBy'] = $request->createdBy;
        }
        if (!Utils::isUnset($request->createdDateAfter)) {
            $query['CreatedDateAfter'] = $request->createdDateAfter;
        }
        if (!Utils::isUnset($request->createdDateBefore)) {
            $query['CreatedDateBefore'] = $request->createdDateBefore;
        }
        if (!Utils::isUnset($request->isExample)) {
            $query['IsExample'] = $request->isExample;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->templateFormat)) {
            $query['TemplateFormat'] = $request->templateFormat;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListPublicTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicTemplatesRequest $request ListPublicTemplatesRequest
     *
     * @return ListPublicTemplatesResponse ListPublicTemplatesResponse
     */
    public function listPublicTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserExecutionLogsRequest $request ListUserExecutionLogsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserExecutionLogsResponse ListUserExecutionLogsResponse
     */
    public function listUserExecutionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->logType)) {
            $query['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskExecutionId)) {
            $query['TaskExecutionId'] = $request->taskExecutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserExecutionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserExecutionLogsRequest $request ListUserExecutionLogsRequest
     *
     * @return ListUserExecutionLogsResponse ListUserExecutionLogsResponse
     */
    public function listUserExecutionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserExecutionLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserExecutionsRequest $request ListUserExecutionsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserExecutionsResponse ListUserExecutionsResponse
     */
    public function listUserExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->endDateAfter)) {
            $query['EndDateAfter'] = $request->endDateAfter;
        }
        if (!Utils::isUnset($request->endDateBefore)) {
            $query['EndDateBefore'] = $request->endDateBefore;
        }
        if (!Utils::isUnset($request->executedBy)) {
            $query['ExecutedBy'] = $request->executedBy;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->includeChildExecution)) {
            $query['IncludeChildExecution'] = $request->includeChildExecution;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentExecutionId)) {
            $query['ParentExecutionId'] = $request->parentExecutionId;
        }
        if (!Utils::isUnset($request->ramRole)) {
            $query['RamRole'] = $request->ramRole;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startDateAfter)) {
            $query['StartDateAfter'] = $request->startDateAfter;
        }
        if (!Utils::isUnset($request->startDateBefore)) {
            $query['StartDateBefore'] = $request->startDateBefore;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserExecutionsRequest $request ListUserExecutionsRequest
     *
     * @return ListUserExecutionsResponse ListUserExecutionsResponse
     */
    public function listUserExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserInstancePatchStatesRequest $request ListUserInstancePatchStatesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserInstancePatchStatesResponse ListUserInstancePatchStatesResponse
     */
    public function listUserInstancePatchStatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserInstancePatchStatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserInstancePatchStatesRequest $request ListUserInstancePatchStatesRequest
     *
     * @return ListUserInstancePatchStatesResponse ListUserInstancePatchStatesResponse
     */
    public function listUserInstancePatchStates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInstancePatchStatesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserInstancePatchesRequest $request ListUserInstancePatchesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserInstancePatchesResponse ListUserInstancePatchesResponse
     */
    public function listUserInstancePatchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserInstancePatchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserInstancePatchesRequest $request ListUserInstancePatchesRequest
     *
     * @return ListUserInstancePatchesResponse ListUserInstancePatchesResponse
     */
    public function listUserInstancePatches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInstancePatchesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserInventoryEntriesRequest $request ListUserInventoryEntriesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserInventoryEntriesResponse ListUserInventoryEntriesResponse
     */
    public function listUserInventoryEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->typeName)) {
            $query['TypeName'] = $request->typeName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserInventoryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserInventoryEntriesRequest $request ListUserInventoryEntriesRequest
     *
     * @return ListUserInventoryEntriesResponse ListUserInventoryEntriesResponse
     */
    public function listUserInventoryEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserInventoryEntriesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserTaskExecutionsRequest $request ListUserTaskExecutionsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserTaskExecutionsResponse ListUserTaskExecutionsResponse
     */
    public function listUserTaskExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->endDateAfter)) {
            $query['EndDateAfter'] = $request->endDateAfter;
        }
        if (!Utils::isUnset($request->endDateBefore)) {
            $query['EndDateBefore'] = $request->endDateBefore;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->includeChildTaskExecution)) {
            $query['IncludeChildTaskExecution'] = $request->includeChildTaskExecution;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentTaskExecutionId)) {
            $query['ParentTaskExecutionId'] = $request->parentTaskExecutionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startDateAfter)) {
            $query['StartDateAfter'] = $request->startDateAfter;
        }
        if (!Utils::isUnset($request->startDateBefore)) {
            $query['StartDateBefore'] = $request->startDateBefore;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskAction)) {
            $query['TaskAction'] = $request->taskAction;
        }
        if (!Utils::isUnset($request->taskExecutionId)) {
            $query['TaskExecutionId'] = $request->taskExecutionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserTaskExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserTaskExecutionsRequest $request ListUserTaskExecutionsRequest
     *
     * @return ListUserTaskExecutionsResponse ListUserTaskExecutionsResponse
     */
    public function listUserTaskExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTaskExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param ListUserTemplatesRequest $request ListUserTemplatesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserTemplatesResponse ListUserTemplatesResponse
     */
    public function listUserTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->createdBy)) {
            $query['CreatedBy'] = $request->createdBy;
        }
        if (!Utils::isUnset($request->createdDateAfter)) {
            $query['CreatedDateAfter'] = $request->createdDateAfter;
        }
        if (!Utils::isUnset($request->createdDateBefore)) {
            $query['CreatedDateBefore'] = $request->createdDateBefore;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->shareType)) {
            $query['ShareType'] = $request->shareType;
        }
        if (!Utils::isUnset($request->sortField)) {
            $query['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->templateFormat)) {
            $query['TemplateFormat'] = $request->templateFormat;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListUserTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserTemplatesRequest $request ListUserTemplatesRequest
     *
     * @return ListUserTemplatesResponse ListUserTemplatesResponse
     */
    public function listUserTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ResetTimerTriggerExecutionRequest $request ResetTimerTriggerExecutionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetTimerTriggerExecutionResponse ResetTimerTriggerExecutionResponse
     */
    public function resetTimerTriggerExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ResetTimerTriggerExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetTimerTriggerExecutionRequest $request ResetTimerTriggerExecutionRequest
     *
     * @return ResetTimerTriggerExecutionResponse ResetTimerTriggerExecutionResponse
     */
    public function resetTimerTriggerExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetTimerTriggerExecutionWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserExecutionRequest $request ResetUserExecutionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetUserExecutionResponse ResetUserExecutionResponse
     */
    public function resetUserExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ResetUserExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetUserExecutionRequest $request ResetUserExecutionRequest
     *
     * @return ResetUserExecutionResponse ResetUserExecutionResponse
     */
    public function resetUserExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserExecutionWithOptions($request, $runtime);
    }

    /**
     * @param SetFlowControlRequest $request SetFlowControlRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetFlowControlResponse SetFlowControlResponse
     */
    public function setFlowControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->api)) {
            $query['Api'] = $request->api;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetFlowControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetFlowControlRequest $request SetFlowControlRequest
     *
     * @return SetFlowControlResponse SetFlowControlResponse
     */
    public function setFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFlowControlWithOptions($request, $runtime);
    }

    /**
     * @param SetQuotaRequest $request SetQuotaRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetQuotaResponse SetQuotaResponse
     */
    public function setQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quotaName)) {
            $query['QuotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return SetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetQuotaRequest $request SetQuotaRequest
     *
     * @return SetQuotaResponse SetQuotaResponse
     */
    public function setQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQuotaWithOptions($request, $runtime);
    }

    /**
     * @param TerminateUserExecutionRequest $request TerminateUserExecutionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateUserExecutionResponse TerminateUserExecutionResponse
     */
    public function terminateUserExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->executionId)) {
            $query['ExecutionId'] = $request->executionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return TerminateUserExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateUserExecutionRequest $request TerminateUserExecutionRequest
     *
     * @return TerminateUserExecutionResponse TerminateUserExecutionResponse
     */
    public function terminateUserExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateUserExecutionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateActionRequest $request UpdateActionRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateActionResponse UpdateActionResponse
     */
    public function updateActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateActionRequest $request UpdateActionRequest
     *
     * @return UpdateActionResponse UpdateActionResponse
     */
    public function updateAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateActionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新一个已存在的公共参数。
     *  *
     * @param UpdatePublicParameterRequest $request UpdatePublicParameterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicParameterResponse UpdatePublicParameterResponse
     */
    public function updatePublicParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePublicParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新一个已存在的公共参数。
     *  *
     * @param UpdatePublicParameterRequest $request UpdatePublicParameterRequest
     *
     * @return UpdatePublicParameterResponse UpdatePublicParameterResponse
     */
    public function updatePublicParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicParameterWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePublicPatchBaselineRequest $request UpdatePublicPatchBaselineRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicPatchBaselineResponse UpdatePublicPatchBaselineResponse
     */
    public function updatePublicPatchBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->approvalRules)) {
            $query['ApprovalRules'] = $request->approvalRules;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePublicPatchBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePublicPatchBaselineRequest $request UpdatePublicPatchBaselineRequest
     *
     * @return UpdatePublicPatchBaselineResponse UpdatePublicPatchBaselineResponse
     */
    public function updatePublicPatchBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicPatchBaselineWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePublicTemplateRequest $request UpdatePublicTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePublicTemplateResponse UpdatePublicTemplateResponse
     */
    public function updatePublicTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->popularity)) {
            $query['Popularity'] = $request->popularity;
        }
        if (!Utils::isUnset($request->publisher)) {
            $query['Publisher'] = $request->publisher;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdatePublicTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePublicTemplateRequest $request UpdatePublicTemplateRequest
     *
     * @return UpdatePublicTemplateResponse UpdatePublicTemplateResponse
     */
    public function updatePublicTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePublicTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ValidatePublicTemplateContentRequest $request ValidatePublicTemplateContentRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidatePublicTemplateContentResponse ValidatePublicTemplateContentResponse
     */
    public function validatePublicTemplateContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ValidatePublicTemplateContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidatePublicTemplateContentRequest $request ValidatePublicTemplateContentRequest
     *
     * @return ValidatePublicTemplateContentResponse ValidatePublicTemplateContentResponse
     */
    public function validatePublicTemplateContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validatePublicTemplateContentWithOptions($request, $runtime);
    }
}
