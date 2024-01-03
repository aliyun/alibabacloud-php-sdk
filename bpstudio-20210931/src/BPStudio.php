<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetExecuteOperationResultResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTokenRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTokenResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListApplicationRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListApplicationResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListFoCreatedAppsResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTemplateRequest;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ListTemplateResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
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

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateApplicationRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
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

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
     *   *
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

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation to delete an application, make sure that the application is in the `Destroyed_Success` state. Otherwise, the application fails to be deleted.`` You can call the [GetApplication](https://www.alibabacloud.com/help/en/bp-studio/latest/api-bpstudio-2021-09-31-getapplication) operation to query the status of an application.
     *   *
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
     * @param DeployApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeployApplicationResponse
     */
    public function deployApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        $body = [];
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

        return DeployApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExecuteOperationASyncRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteOperationASyncResponse
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

        return ExecuteOperationASyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
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

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetExecuteOperationResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetExecuteOperationResultResponse
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

        return GetExecuteOperationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
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

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @deprecated : GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead.
     *   * ><danger> This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.></danger>
     *   *
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

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated : GetToken is deprecated, please use BPStudio::2021-09-31::GetApplication instead.
     *   * ><danger> This API is no longer recommended, and the image related to the Application has included access authorization in the GetApplication property.></danger>
     *   *
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
     * @param ListApplicationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListApplicationResponse
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
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
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

        return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListFoCreatedAppsResponse
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

        return ListFoCreatedAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListFoCreatedAppsResponse
     */
    public function listFoCreatedApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFoCreatedAppsWithOptions($runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTemplateResponse
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

        return ListTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ReleaseApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReleaseApplicationResponse
     */
    public function releaseApplicationWithOptions($request, $runtime)
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

        return ReleaseApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ValidateApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ValidateApplicationResponse
     */
    public function validateApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationId)) {
            $query['ApplicationId'] = $request->applicationId;
        }
        $body = [];
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

        return ValidateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ValuateApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ValuateApplicationResponse
     */
    public function valuateApplicationWithOptions($request, $runtime)
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

        return ValuateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ValuateTemplateRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ValuateTemplateResponse
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

        return ValuateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
