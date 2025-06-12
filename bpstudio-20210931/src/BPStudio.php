<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\AppFailBackRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\AppFailBackResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\AppFailOverRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\AppFailOverResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\DeployApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\DeployApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationASyncRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationASyncResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationASyncShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationSyncRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationSyncResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ExecuteOperationSyncShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariables4FailRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariables4FailResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetFoTaskStatusRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetFoTaskStatusResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetPotentialFailZonesRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetPotentialFailZonesResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResource4ModifyRecordRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResource4ModifyRecordResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTokenRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTokenResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\InitAppFailOverRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\InitAppFailOverResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListFoCreatedAppsResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTemplateRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTemplateResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstancePrice4ModifyRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstancePrice4ModifyResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstancePrice4ModifyShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyShrinkRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ReConfigApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ReConfigApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ReleaseApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ReleaseApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValidateApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValidateApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ValuateTemplateShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BPStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bpstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Switches a disaster recovery application back to the primary zone.
     *
     * @remarks
     * You can call this operation to switch a disaster recovery application back to the primary zone.
     *
     * @param request - AppFailBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppFailBackResponse
     *
     * @param AppFailBackRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AppFailBackResponse
     */
    public function appFailBackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AppFailBack',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AppFailBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches a disaster recovery application back to the primary zone.
     *
     * @remarks
     * You can call this operation to switch a disaster recovery application back to the primary zone.
     *
     * @param request - AppFailBackRequest
     *
     * @returns AppFailBackResponse
     *
     * @param AppFailBackRequest $request
     *
     * @return AppFailBackResponse
     */
    public function appFailBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appFailBackWithOptions($request, $runtime);
    }

    /**
     * Switches a disaster recovery application to another supported zone.
     *
     * @remarks
     * You can call this operation to switch a disaster recovery application to another supported zone.
     *
     * @param request - AppFailOverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppFailOverResponse
     *
     * @param AppFailOverRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AppFailOverResponse
     */
    public function appFailOverWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->failZone) {
            @$body['FailZone'] = $request->failZone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AppFailOver',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AppFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches a disaster recovery application to another supported zone.
     *
     * @remarks
     * You can call this operation to switch a disaster recovery application to another supported zone.
     *
     * @param request - AppFailOverRequest
     *
     * @returns AppFailOverResponse
     *
     * @param AppFailOverRequest $request
     *
     * @return AppFailOverResponse
     */
    public function appFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appFailOverWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which an application or template belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which an application or template belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an application based on an official template or private template in Cloud Architect Design Tool (CADT). Before you call this operation, make sure that you understand the billing methods and prices of Alibaba Cloud services to be used in the application.
     *
     * @param tmpReq - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        if (null !== $tmpReq->instances) {
            $request->instancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }

        if (null !== $tmpReq->variables) {
            $request->variablesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }

        $body = [];
        if (null !== $request->areaId) {
            @$body['AreaId'] = $request->areaId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        if (null !== $request->instancesShrink) {
            @$body['Instances'] = $request->instancesShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->variablesShrink) {
            @$body['Variables'] = $request->variablesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2021-09-31',
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
     * Creates an application based on an official template or private template in Cloud Architect Design Tool (CADT). Before you call this operation, make sure that you understand the billing methods and prices of Alibaba Cloud services to be used in the application.
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
     * Deletes an application.
     *
     * @remarks
     * Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
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
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2021-09-31',
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
     * Deletes an application.
     *
     * @remarks
     * Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
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
     * Deploys an application after the payment.
     *
     * @param request - DeployApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployApplicationResponse
     *
     * @param DeployApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApplicationResponse
     */
    public function deployApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeployApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys an application after the payment.
     *
     * @param request - DeployApplicationRequest
     *
     * @returns DeployApplicationResponse
     *
     * @param DeployApplicationRequest $request
     *
     * @return DeployApplicationResponse
     */
    public function deployApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApplicationWithOptions($request, $runtime);
    }

    /**
     * Asynchronous execution of product operation functions.
     *
     * @param tmpReq - ExecuteOperationASyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteOperationASyncResponse
     *
     * @param ExecuteOperationASyncRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteOperationASyncResponse
     */
    public function executeOperationASyncWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExecuteOperationASyncShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }

        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->attributesShrink) {
            @$body['Attributes'] = $request->attributesShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->operation) {
            @$body['Operation'] = $request->operation;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceType) {
            @$body['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteOperationASync',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteOperationASyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronous execution of product operation functions.
     *
     * @param request - ExecuteOperationASyncRequest
     *
     * @returns ExecuteOperationASyncResponse
     *
     * @param ExecuteOperationASyncRequest $request
     *
     * @return ExecuteOperationASyncResponse
     */
    public function executeOperationASync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeOperationASyncWithOptions($request, $runtime);
    }

    /**
     * 维护应用下资源API（同步操作）.
     *
     * @param tmpReq - ExecuteOperationSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteOperationSyncResponse
     *
     * @param ExecuteOperationSyncRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteOperationSyncResponse
     */
    public function executeOperationSyncWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExecuteOperationSyncShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributes) {
            $request->attributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }

        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->attributesShrink) {
            @$body['Attributes'] = $request->attributesShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->operation) {
            @$body['Operation'] = $request->operation;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->serviceType) {
            @$body['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteOperationSync',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteOperationSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 维护应用下资源API（同步操作）.
     *
     * @param request - ExecuteOperationSyncRequest
     *
     * @returns ExecuteOperationSyncResponse
     *
     * @param ExecuteOperationSyncRequest $request
     *
     * @return ExecuteOperationSyncResponse
     */
    public function executeOperationSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeOperationSyncWithOptions($request, $runtime);
    }

    /**
     * The URL of the application topology image.
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
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2021-09-31',
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
     * The URL of the application topology image.
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
     * 获取应用输入参数.
     *
     * @param request - GetApplicationVariablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationVariablesResponse
     *
     * @param GetApplicationVariablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetApplicationVariablesResponse
     */
    public function getApplicationVariablesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetApplicationVariables',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationVariablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用输入参数.
     *
     * @param request - GetApplicationVariablesRequest
     *
     * @returns GetApplicationVariablesResponse
     *
     * @param GetApplicationVariablesRequest $request
     *
     * @return GetApplicationVariablesResponse
     */
    public function getApplicationVariables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationVariablesWithOptions($request, $runtime);
    }

    /**
     * 获取需要重新配置的变量列表.
     *
     * @param request - GetApplicationVariables4FailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationVariables4FailResponse
     *
     * @param GetApplicationVariables4FailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetApplicationVariables4FailResponse
     */
    public function getApplicationVariables4FailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplicationVariables4Fail',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApplicationVariables4FailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取需要重新配置的变量列表.
     *
     * @param request - GetApplicationVariables4FailRequest
     *
     * @returns GetApplicationVariables4FailResponse
     *
     * @param GetApplicationVariables4FailRequest $request
     *
     * @return GetApplicationVariables4FailResponse
     */
    public function getApplicationVariables4Fail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationVariables4FailWithOptions($request, $runtime);
    }

    /**
     * Asynchronously queries the result of an operation that is performed on a service instance.
     *
     * @param request - GetExecuteOperationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecuteOperationResultResponse
     *
     * @param GetExecuteOperationResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetExecuteOperationResultResponse
     */
    public function getExecuteOperationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->operationId) {
            @$body['OperationId'] = $request->operationId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetExecuteOperationResult',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExecuteOperationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Asynchronously queries the result of an operation that is performed on a service instance.
     *
     * @param request - GetExecuteOperationResultRequest
     *
     * @returns GetExecuteOperationResultResponse
     *
     * @param GetExecuteOperationResultRequest $request
     *
     * @return GetExecuteOperationResultResponse
     */
    public function getExecuteOperationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecuteOperationResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a disaster recovery switchover task by task ID.
     *
     * @remarks
     * You can call this operation to query the status of a disaster recovery switchover task by task ID.
     *
     * @param request - GetFoTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFoTaskStatusResponse
     *
     * @param GetFoTaskStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetFoTaskStatusResponse
     */
    public function getFoTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFoTaskStatus',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFoTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a disaster recovery switchover task by task ID.
     *
     * @remarks
     * You can call this operation to query the status of a disaster recovery switchover task by task ID.
     *
     * @param request - GetFoTaskStatusRequest
     *
     * @returns GetFoTaskStatusResponse
     *
     * @param GetFoTaskStatusRequest $request
     *
     * @return GetFoTaskStatusResponse
     */
    public function getFoTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFoTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the zones where the specified disaster recovery service can be switched.
     *
     * @remarks
     * You can call this operation to query the zones where the specified disaster recovery service can be switched.
     *
     * @param request - GetPotentialFailZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPotentialFailZonesResponse
     *
     * @param GetPotentialFailZonesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPotentialFailZonesResponse
     */
    public function getPotentialFailZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isPlanId) {
            @$body['IsPlanId'] = $request->isPlanId;
        }

        if (null !== $request->objectId) {
            @$body['ObjectId'] = $request->objectId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPotentialFailZones',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPotentialFailZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones where the specified disaster recovery service can be switched.
     *
     * @remarks
     * You can call this operation to query the zones where the specified disaster recovery service can be switched.
     *
     * @param request - GetPotentialFailZonesRequest
     *
     * @returns GetPotentialFailZonesResponse
     *
     * @param GetPotentialFailZonesRequest $request
     *
     * @return GetPotentialFailZonesResponse
     */
    public function getPotentialFailZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPotentialFailZonesWithOptions($request, $runtime);
    }

    /**
     * 获取询价应用变配记录.
     *
     * @param request - GetResource4ModifyRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResource4ModifyRecordResponse
     *
     * @param GetResource4ModifyRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetResource4ModifyRecordResponse
     */
    public function getResource4ModifyRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetResource4ModifyRecord',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResource4ModifyRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取询价应用变配记录.
     *
     * @param request - GetResource4ModifyRecordRequest
     *
     * @returns GetResource4ModifyRecordResponse
     *
     * @param GetResource4ModifyRecordRequest $request
     *
     * @return GetResource4ModifyRecordResponse
     */
    public function getResource4ModifyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResource4ModifyRecordWithOptions($request, $runtime);
    }

    /**
     * 获取询价结果.
     *
     * @param request - GetResult4QueryInstancePrice4ModifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResult4QueryInstancePrice4ModifyResponse
     *
     * @param GetResult4QueryInstancePrice4ModifyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetResult4QueryInstancePrice4ModifyResponse
     */
    public function getResult4QueryInstancePrice4ModifyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetResult4QueryInstancePrice4Modify',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResult4QueryInstancePrice4ModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取询价结果.
     *
     * @param request - GetResult4QueryInstancePrice4ModifyRequest
     *
     * @returns GetResult4QueryInstancePrice4ModifyResponse
     *
     * @param GetResult4QueryInstancePrice4ModifyRequest $request
     *
     * @return GetResult4QueryInstancePrice4ModifyResponse
     */
    public function getResult4QueryInstancePrice4Modify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResult4QueryInstancePrice4ModifyWithOptions($request, $runtime);
    }

    /**
     * Gets template images and information about architecture diagrams.
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets template images and information about architecture diagrams.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * Obtains a temporary token that is used to read the architecture diagram. The validity period of the token is 30 minutes.
     *
     * @remarks
     * >Danger:  This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.
     *
     * @deprecated openAPI GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead
     *
     * @param request - GetTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Obtains a temporary token that is used to read the architecture diagram. The validity period of the token is 30 minutes.
     *
     * @remarks
     * >Danger:  This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.
     *
     * @deprecated openAPI GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * Prepares for application switchover and initiates a switchover task.
     *
     * @remarks
     * You can call this operation to prepare for application switchover and initiate a switchover task.
     *
     * @param request - InitAppFailOverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitAppFailOverResponse
     *
     * @param InitAppFailOverRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InitAppFailOverResponse
     */
    public function initAppFailOverWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitAppFailOver',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitAppFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prepares for application switchover and initiates a switchover task.
     *
     * @remarks
     * You can call this operation to prepare for application switchover and initiate a switchover task.
     *
     * @param request - InitAppFailOverRequest
     *
     * @returns InitAppFailOverResponse
     *
     * @param InitAppFailOverRequest $request
     *
     * @return InitAppFailOverResponse
     */
    public function initAppFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initAppFailOverWithOptions($request, $runtime);
    }

    /**
     * This API provides a list of all applications under the current user. The optional keyword parameter defines the keywords contained in the application name.
     *
     * @param request - ListApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationResponse
     *
     * @param ListApplicationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderType) {
            @$body['OrderType'] = $request->orderType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->showHide) {
            @$body['ShowHide'] = $request->showHide;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API provides a list of all applications under the current user. The optional keyword parameter defines the keywords contained in the application name.
     *
     * @param request - ListApplicationRequest
     *
     * @returns ListApplicationResponse
     *
     * @param ListApplicationRequest $request
     *
     * @return ListApplicationResponse
     */
    public function listApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all disaster recovery plans of the current account.
     *
     * @remarks
     * Queries the information about all disaster recovery plans of the current account.
     *
     * @param request - ListFoCreatedAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFoCreatedAppsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListFoCreatedAppsResponse
     */
    public function listFoCreatedAppsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListFoCreatedApps',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFoCreatedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all disaster recovery plans of the current account.
     *
     * @remarks
     * Queries the information about all disaster recovery plans of the current account.
     *
     * @returns ListFoCreatedAppsResponse
     *
     * @return ListFoCreatedAppsResponse
     */
    public function listFoCreatedApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoCreatedAppsWithOptions($runtime);
    }

    /**
     * Queries the tags of one or more applications or templates.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $bodyFlat = [];
        if (null !== $request->resourceId) {
            @$bodyFlat['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$bodyFlat['Tag'] = $request->tag;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of one or more applications or templates.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries templates, including information such as the template name, architecture image URL, and URL of the serialized architecture image file.
     *
     * @param request - ListTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateResponse
     *
     * @param ListTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTemplateResponse
     */
    public function listTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderType) {
            @$body['OrderType'] = $request->orderType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagList) {
            @$body['TagList'] = $request->tagList;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTemplate',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries templates, including information such as the template name, architecture image URL, and URL of the serialized architecture image file.
     *
     * @param request - ListTemplateRequest
     *
     * @returns ListTemplateResponse
     *
     * @param ListTemplateRequest $request
     *
     * @return ListTemplateResponse
     */
    public function listTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateWithOptions($request, $runtime);
    }

    /**
     * 提交应用变配.
     *
     * @param tmpReq - ModifyApplicationSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyApplicationSpecResponse
     *
     * @param ModifyApplicationSpecRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyApplicationSpecResponse
     */
    public function modifyApplicationSpecWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyApplicationSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceSpec) {
            $request->instanceSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceSpec, 'InstanceSpec', 'json');
        }

        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceSpecShrink) {
            @$body['InstanceSpec'] = $request->instanceSpecShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyApplicationSpec',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyApplicationSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交应用变配.
     *
     * @param request - ModifyApplicationSpecRequest
     *
     * @returns ModifyApplicationSpecResponse
     *
     * @param ModifyApplicationSpecRequest $request
     *
     * @return ModifyApplicationSpecResponse
     */
    public function modifyApplicationSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApplicationSpecWithOptions($request, $runtime);
    }

    /**
     * 查询变配价格
     *
     * @param tmpReq - QueryInstancePrice4ModifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstancePrice4ModifyResponse
     *
     * @param QueryInstancePrice4ModifyRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryInstancePrice4ModifyResponse
     */
    public function queryInstancePrice4ModifyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryInstancePrice4ModifyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryInstancePrice4Modify',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstancePrice4ModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询变配价格
     *
     * @param request - QueryInstancePrice4ModifyRequest
     *
     * @returns QueryInstancePrice4ModifyResponse
     *
     * @param QueryInstancePrice4ModifyRequest $request
     *
     * @return QueryInstancePrice4ModifyResponse
     */
    public function queryInstancePrice4Modify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstancePrice4ModifyWithOptions($request, $runtime);
    }

    /**
     * 查询变配规格列表.
     *
     * @param tmpReq - QueryInstanceSpec4ModifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceSpec4ModifyResponse
     *
     * @param QueryInstanceSpec4ModifyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryInstanceSpec4ModifyResponse
     */
    public function queryInstanceSpec4ModifyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryInstanceSpec4ModifyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->methodName) {
            @$body['MethodName'] = $request->methodName;
        }

        if (null !== $request->parametersShrink) {
            @$body['Parameters'] = $request->parametersShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryInstanceSpec4Modify',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInstanceSpec4ModifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询变配规格列表.
     *
     * @param request - QueryInstanceSpec4ModifyRequest
     *
     * @returns QueryInstanceSpec4ModifyResponse
     *
     * @param QueryInstanceSpec4ModifyRequest $request
     *
     * @return QueryInstanceSpec4ModifyResponse
     */
    public function queryInstanceSpec4Modify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceSpec4ModifyWithOptions($request, $runtime);
    }

    /**
     * 重新配置应用.
     *
     * @param request - ReConfigApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReConfigApplicationResponse
     *
     * @param ReConfigApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReConfigApplicationResponse
     */
    public function reConfigApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->variables) {
            @$body['Variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReConfigApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReConfigApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新配置应用.
     *
     * @param request - ReConfigApplicationRequest
     *
     * @returns ReConfigApplicationResponse
     *
     * @param ReConfigApplicationRequest $request
     *
     * @return ReConfigApplicationResponse
     */
    public function reConfigApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reConfigApplicationWithOptions($request, $runtime);
    }

    /**
     * Releases the resources of an application.
     *
     * @param request - ReleaseApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseApplicationResponse
     *
     * @param ReleaseApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReleaseApplicationResponse
     */
    public function releaseApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases the resources of an application.
     *
     * @param request - ReleaseApplicationRequest
     *
     * @returns ReleaseApplicationResponse
     *
     * @param ReleaseApplicationRequest $request
     *
     * @return ReleaseApplicationResponse
     */
    public function releaseApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseApplicationWithOptions($request, $runtime);
    }

    /**
     * Verifies the resources of an application. ValidateApplication is an asynchronous operation. You can call the GetApplication operation to query the verification result.
     *
     * @param request - ValidateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateApplicationResponse
     *
     * @param ValidateApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateApplicationResponse
     */
    public function validateApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the resources of an application. ValidateApplication is an asynchronous operation. You can call the GetApplication operation to query the verification result.
     *
     * @param request - ValidateApplicationRequest
     *
     * @returns ValidateApplicationResponse
     *
     * @param ValidateApplicationRequest $request
     *
     * @return ValidateApplicationResponse
     */
    public function validateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the prices of resources of an application. You can call the GetApplication operation to obtain the query results.
     *
     * @param request - ValuateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValuateApplicationResponse
     *
     * @param ValuateApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ValuateApplicationResponse
     */
    public function valuateApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->applicationId) {
            @$body['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValuateApplication',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValuateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the prices of resources of an application. You can call the GetApplication operation to obtain the query results.
     *
     * @param request - ValuateApplicationRequest
     *
     * @returns ValuateApplicationResponse
     *
     * @param ValuateApplicationRequest $request
     *
     * @return ValuateApplicationResponse
     */
    public function valuateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->valuateApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the price of a template.
     *
     * @param tmpReq - ValuateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValuateTemplateResponse
     *
     * @param ValuateTemplateRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ValuateTemplateResponse
     */
    public function valuateTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ValuateTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instances) {
            $request->instancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }

        if (null !== $tmpReq->variables) {
            $request->variablesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }

        $body = [];
        if (null !== $request->areaId) {
            @$body['AreaId'] = $request->areaId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instancesShrink) {
            @$body['Instances'] = $request->instancesShrink;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->variablesShrink) {
            @$body['Variables'] = $request->variablesShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValuateTemplate',
            'version' => '2021-09-31',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValuateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price of a template.
     *
     * @param request - ValuateTemplateRequest
     *
     * @returns ValuateTemplateResponse
     *
     * @param ValuateTemplateRequest $request
     *
     * @return ValuateTemplateResponse
     */
    public function valuateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->valuateTemplateWithOptions($request, $runtime);
    }
}
