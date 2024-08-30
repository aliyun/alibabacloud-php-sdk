<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetFoTaskStatusRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetFoTaskStatusResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetPotentialFailZonesRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetPotentialFailZonesResponse;
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
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BPStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'BPStudio';
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Switches a disaster recovery application back to the primary zone.
     *  *
     * @description You can call this operation to switch a disaster recovery application back to the primary zone.
     *  *
     * @param AppFailBackRequest $request AppFailBackRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AppFailBackResponse AppFailBackResponse
     */
    public function appFailBackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppFailBack',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AppFailBackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AppFailBackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Switches a disaster recovery application back to the primary zone.
     *  *
     * @description You can call this operation to switch a disaster recovery application back to the primary zone.
     *  *
     * @param AppFailBackRequest $request AppFailBackRequest
     *
     * @return AppFailBackResponse AppFailBackResponse
     */
    public function appFailBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appFailBackWithOptions($request, $runtime);
    }

    /**
     * @summary Switches a disaster recovery application to another supported zone.
     *  *
     * @description You can call this operation to switch a disaster recovery application to another supported zone.
     *  *
     * @param AppFailOverRequest $request AppFailOverRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AppFailOverResponse AppFailOverResponse
     */
    public function appFailOverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->failZone)) {
            $body['FailZone'] = $request->failZone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppFailOver',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AppFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AppFailOverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Switches a disaster recovery application to another supported zone.
     *  *
     * @description You can call this operation to switch a disaster recovery application to another supported zone.
     *  *
     * @param AppFailOverRequest $request AppFailOverRequest
     *
     * @return AppFailOverResponse AppFailOverResponse
     */
    public function appFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->appFailOverWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group to which an application or template belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which an application or template belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an application based on an official template or private template in Cloud Architect Design Tool (CADT). Before you call this operation, make sure that you understand the billing methods and prices of Alibaba Cloud services to be used in the application.
     *  *
     * @param CreateApplicationRequest $tmpReq  CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateApplicationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configuration)) {
            $request->configurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }
        if (!Utils::isUnset($tmpReq->instances)) {
            $request->instancesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }
        if (!Utils::isUnset($tmpReq->variables)) {
            $request->variablesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->areaId)) {
            $body['AreaId'] = $request->areaId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configurationShrink)) {
            $body['Configuration'] = $request->configurationShrink;
        }
        if (!Utils::isUnset($request->instancesShrink)) {
            $body['Instances'] = $request->instancesShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->variablesShrink)) {
            $body['Variables'] = $request->variablesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an application based on an official template or private template in Cloud Architect Design Tool (CADT). Before you call this operation, make sure that you understand the billing methods and prices of Alibaba Cloud services to be used in the application.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an application.
     *  *
     * @description Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an application.
     *  *
     * @description Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys an application after the payment.
     *  *
     * @param DeployApplicationRequest $request DeployApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeployApplicationResponse DeployApplicationResponse
     */
    public function deployApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeployApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeployApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deploys an application after the payment.
     *  *
     * @param DeployApplicationRequest $request DeployApplicationRequest
     *
     * @return DeployApplicationResponse DeployApplicationResponse
     */
    public function deployApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronous execution of product operation functions.
     *  *
     * @param ExecuteOperationASyncRequest $tmpReq  ExecuteOperationASyncRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteOperationASyncResponse ExecuteOperationASyncResponse
     */
    public function executeOperationASyncWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteOperationASyncShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attributes)) {
            $request->attributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->attributesShrink)) {
            $body['Attributes'] = $request->attributesShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteOperationASync',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExecuteOperationASyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteOperationASyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Asynchronous execution of product operation functions.
     *  *
     * @param ExecuteOperationASyncRequest $request ExecuteOperationASyncRequest
     *
     * @return ExecuteOperationASyncResponse ExecuteOperationASyncResponse
     */
    public function executeOperationASync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeOperationASyncWithOptions($request, $runtime);
    }

    /**
     * @summary 维护应用下资源API（同步操作）
     *  *
     * @param ExecuteOperationSyncRequest $tmpReq  ExecuteOperationSyncRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteOperationSyncResponse ExecuteOperationSyncResponse
     */
    public function executeOperationSyncWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteOperationSyncShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attributes)) {
            $request->attributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attributes, 'Attributes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->attributesShrink)) {
            $body['Attributes'] = $request->attributesShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->operation)) {
            $body['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteOperationSync',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExecuteOperationSyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteOperationSyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 维护应用下资源API（同步操作）
     *  *
     * @param ExecuteOperationSyncRequest $request ExecuteOperationSyncRequest
     *
     * @return ExecuteOperationSyncResponse ExecuteOperationSyncResponse
     */
    public function executeOperationSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeOperationSyncWithOptions($request, $runtime);
    }

    /**
     * @summary The URL of the application topology image.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary The URL of the application topology image.
     *  *
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary 获取需要重新配置的变量列表
     *  *
     * @param GetApplicationVariables4FailRequest $request GetApplicationVariables4FailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationVariables4FailResponse GetApplicationVariables4FailResponse
     */
    public function getApplicationVariables4FailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplicationVariables4Fail',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetApplicationVariables4FailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationVariables4FailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取需要重新配置的变量列表
     *  *
     * @param GetApplicationVariables4FailRequest $request GetApplicationVariables4FailRequest
     *
     * @return GetApplicationVariables4FailResponse GetApplicationVariables4FailResponse
     */
    public function getApplicationVariables4Fail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationVariables4FailWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously queries the result of an operation that is performed on a service instance.
     *  *
     * @param GetExecuteOperationResultRequest $request GetExecuteOperationResultRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExecuteOperationResultResponse GetExecuteOperationResultResponse
     */
    public function getExecuteOperationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operationId)) {
            $body['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetExecuteOperationResult',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetExecuteOperationResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExecuteOperationResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously queries the result of an operation that is performed on a service instance.
     *  *
     * @param GetExecuteOperationResultRequest $request GetExecuteOperationResultRequest
     *
     * @return GetExecuteOperationResultResponse GetExecuteOperationResultResponse
     */
    public function getExecuteOperationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecuteOperationResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a disaster recovery switchover task by task ID.
     *  *
     * @description You can call this operation to query the status of a disaster recovery switchover task by task ID.
     *  *
     * @param GetFoTaskStatusRequest $request GetFoTaskStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFoTaskStatusResponse GetFoTaskStatusResponse
     */
    public function getFoTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFoTaskStatus',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetFoTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFoTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a disaster recovery switchover task by task ID.
     *  *
     * @description You can call this operation to query the status of a disaster recovery switchover task by task ID.
     *  *
     * @param GetFoTaskStatusRequest $request GetFoTaskStatusRequest
     *
     * @return GetFoTaskStatusResponse GetFoTaskStatusResponse
     */
    public function getFoTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFoTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the zones where the specified disaster recovery service can be switched.
     *  *
     * @description You can call this operation to query the zones where the specified disaster recovery service can be switched.
     *  *
     * @param GetPotentialFailZonesRequest $request GetPotentialFailZonesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPotentialFailZonesResponse GetPotentialFailZonesResponse
     */
    public function getPotentialFailZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isPlanId)) {
            $body['IsPlanId'] = $request->isPlanId;
        }
        if (!Utils::isUnset($request->objectId)) {
            $body['ObjectId'] = $request->objectId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPotentialFailZones',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPotentialFailZonesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPotentialFailZonesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the zones where the specified disaster recovery service can be switched.
     *  *
     * @description You can call this operation to query the zones where the specified disaster recovery service can be switched.
     *  *
     * @param GetPotentialFailZonesRequest $request GetPotentialFailZonesRequest
     *
     * @return GetPotentialFailZonesResponse GetPotentialFailZonesResponse
     */
    public function getPotentialFailZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPotentialFailZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Get template images and information about architecture diagrams.
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get template images and information about architecture diagrams.
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead
     *  *
     * @summary Obtains a temporary token that is used to read the architecture diagram. The validity period of the token is 30 minutes.
     *  *
     * @description >Danger:  This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.
     *  *
     * Deprecated
     *
     * @param GetTokenRequest $request GetTokenRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead
     *  *
     * @summary Obtains a temporary token that is used to read the architecture diagram. The validity period of the token is 30 minutes.
     *  *
     * @description >Danger:  This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.
     *  *
     * Deprecated
     *
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Prepares for application switchover and initiates a switchover task.
     *  *
     * @description You can call this operation to prepare for application switchover and initiate a switchover task.
     *  *
     * @param InitAppFailOverRequest $request InitAppFailOverRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InitAppFailOverResponse InitAppFailOverResponse
     */
    public function initAppFailOverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitAppFailOver',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InitAppFailOverResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitAppFailOverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Prepares for application switchover and initiates a switchover task.
     *  *
     * @description You can call this operation to prepare for application switchover and initiate a switchover task.
     *  *
     * @param InitAppFailOverRequest $request InitAppFailOverRequest
     *
     * @return InitAppFailOverResponse InitAppFailOverResponse
     */
    public function initAppFailOver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initAppFailOverWithOptions($request, $runtime);
    }

    /**
     * @summary This API provides a list of all applications under the current user. The optional keyword parameter defines the keywords contained in the application name.
     *  *
     * @param ListApplicationRequest $request ListApplicationRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationResponse ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderType)) {
            $body['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary This API provides a list of all applications under the current user. The optional keyword parameter defines the keywords contained in the application name.
     *  *
     * @param ListApplicationRequest $request ListApplicationRequest
     *
     * @return ListApplicationResponse ListApplicationResponse
     */
    public function listApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries disaster recovery plans.
     *  *
     * @description You can call this operation to query all disaster recovery plans.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFoCreatedAppsResponse ListFoCreatedAppsResponse
     */
    public function listFoCreatedAppsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListFoCreatedApps',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListFoCreatedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFoCreatedAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries disaster recovery plans.
     *  *
     * @description You can call this operation to query all disaster recovery plans.
     *  *
     * @return ListFoCreatedAppsResponse ListFoCreatedAppsResponse
     */
    public function listFoCreatedApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoCreatedAppsWithOptions($runtime);
    }

    /**
     * @summary Queries the tags of one or more applications or templates.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->resourceId)) {
            $bodyFlat['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $bodyFlat['Tag'] = $request->tag;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags of one or more applications or templates.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries templates, including information such as the template name, architecture image URL, and URL of the serialized architecture image file.
     *  *
     * @param ListTemplateRequest $request ListTemplateRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplateResponse ListTemplateResponse
     */
    public function listTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderType)) {
            $body['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tagList)) {
            $body['TagList'] = $request->tagList;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTemplate',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries templates, including information such as the template name, architecture image URL, and URL of the serialized architecture image file.
     *  *
     * @param ListTemplateRequest $request ListTemplateRequest
     *
     * @return ListTemplateResponse ListTemplateResponse
     */
    public function listTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 重新配置应用
     *  *
     * @param ReConfigApplicationRequest $request ReConfigApplicationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ReConfigApplicationResponse ReConfigApplicationResponse
     */
    public function reConfigApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['Variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReConfigApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReConfigApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReConfigApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 重新配置应用
     *  *
     * @param ReConfigApplicationRequest $request ReConfigApplicationRequest
     *
     * @return ReConfigApplicationResponse ReConfigApplicationResponse
     */
    public function reConfigApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reConfigApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the resources of an application.
     *  *
     * @param ReleaseApplicationRequest $request ReleaseApplicationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseApplicationResponse ReleaseApplicationResponse
     */
    public function releaseApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Releases the resources of an application.
     *  *
     * @param ReleaseApplicationRequest $request ReleaseApplicationRequest
     *
     * @return ReleaseApplicationResponse ReleaseApplicationResponse
     */
    public function releaseApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies the resources of an application. ValidateApplication is an asynchronous operation. You can call the GetApplication operation to query the verification result.
     *  *
     * @param ValidateApplicationRequest $request ValidateApplicationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateApplicationResponse ValidateApplicationResponse
     */
    public function validateApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValidateApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ValidateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValidateApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Verifies the resources of an application. ValidateApplication is an asynchronous operation. You can call the GetApplication operation to query the verification result.
     *  *
     * @param ValidateApplicationRequest $request ValidateApplicationRequest
     *
     * @return ValidateApplicationResponse ValidateApplicationResponse
     */
    public function validateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the prices of resources of an application. You can call the GetApplication operation to obtain the query results.
     *  *
     * @param ValuateApplicationRequest $request ValuateApplicationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ValuateApplicationResponse ValuateApplicationResponse
     */
    public function valuateApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->applicationId)) {
            $body['ApplicationId'] = $request->applicationId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValuateApplication',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ValuateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValuateApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the prices of resources of an application. You can call the GetApplication operation to obtain the query results.
     *  *
     * @param ValuateApplicationRequest $request ValuateApplicationRequest
     *
     * @return ValuateApplicationResponse ValuateApplicationResponse
     */
    public function valuateApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->valuateApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the price of a template.
     *  *
     * @param ValuateTemplateRequest $tmpReq  ValuateTemplateRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ValuateTemplateResponse ValuateTemplateResponse
     */
    public function valuateTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ValuateTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instances)) {
            $request->instancesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }
        if (!Utils::isUnset($tmpReq->variables)) {
            $request->variablesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->areaId)) {
            $body['AreaId'] = $request->areaId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instancesShrink)) {
            $body['Instances'] = $request->instancesShrink;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->variablesShrink)) {
            $body['Variables'] = $request->variablesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ValuateTemplate',
            'version'     => '2021-09-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ValuateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValuateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the price of a template.
     *  *
     * @param ValuateTemplateRequest $request ValuateTemplateRequest
     *
     * @return ValuateTemplateResponse ValuateTemplateResponse
     */
    public function valuateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->valuateTemplateWithOptions($request, $runtime);
    }
}
