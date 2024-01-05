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
     * @param AuditPublicTemplateRegistrationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AuditPublicTemplateRegistrationResponse
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
     * @param CreateActionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateActionResponse
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
     * @param CreatePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePublicParameterResponse
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
     * @param CreatePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreatePublicPatchBaselineResponse
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
     * @param CreatePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePublicTemplateResponse
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
     * @param DeleteFailureMsgRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFailureMsgResponse
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
     * @param DeletePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePublicParameterResponse
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
     * @param DeletePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeletePublicPatchBaselineResponse
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
     * @param DeletePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePublicTemplateResponse
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
     * @param DoCheckResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DoCheckResourceResponse
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
     * @param GetActionRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetActionResponse
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
     * @param GetFlowControlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetFlowControlResponse
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
     * @param GetPublicParameterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPublicParameterResponse
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
     * @param GetPublicPatchBaselineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPublicPatchBaselineResponse
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
     * @param GetPublicTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPublicTemplateResponse
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
     * @param GetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
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
     * @param GetUserExecutionTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetUserExecutionTemplateResponse
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
     * @param GetUserTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetUserTemplateResponse
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
     * @param ListActionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListActionsResponse
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

        return ListDefaultQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListDefaultQuotaResponse
     */
    public function listDefaultQuota()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDefaultQuotaWithOptions($runtime);
    }

    /**
     * @param ListFailureMsgsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFailureMsgsResponse
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
     * @param ListOOSLogsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListOOSLogsResponse
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
     * @param ListPublicParametersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPublicParametersResponse
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
     * @param ListPublicPatchBaselinesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPublicPatchBaselinesResponse
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
     * @param ListPublicTemplateRegistrationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListPublicTemplateRegistrationsResponse
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
     * @param ListPublicTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListPublicTemplatesResponse
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
     * @param ListUserExecutionLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserExecutionLogsResponse
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
     * @param ListUserExecutionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUserExecutionsResponse
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
     * @param ListUserInstancePatchStatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserInstancePatchStatesResponse
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
     * @param ListUserInstancePatchesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserInstancePatchesResponse
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
     * @param ListUserInventoryEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListUserInventoryEntriesResponse
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
     * @param ListUserTaskExecutionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserTaskExecutionsResponse
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
     * @param ListUserTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserTemplatesResponse
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
     * @param ResetTimerTriggerExecutionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetTimerTriggerExecutionResponse
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
     * @param ResetUserExecutionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ResetUserExecutionResponse
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
     * @param SetFlowControlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetFlowControlResponse
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
     * @param SetQuotaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SetQuotaResponse
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
     * @param TerminateUserExecutionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TerminateUserExecutionResponse
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
     * @param UpdateActionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateActionResponse
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
     * @param UpdatePublicParameterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePublicParameterResponse
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
     * @param UpdatePublicPatchBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePublicPatchBaselineResponse
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
     * @param UpdatePublicTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePublicTemplateResponse
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
     * @param ValidatePublicTemplateContentRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ValidatePublicTemplateContentResponse
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
