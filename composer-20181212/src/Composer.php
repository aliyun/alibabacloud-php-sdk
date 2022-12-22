<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Composer\V20181212\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\DisableFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\DisableFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\EnableFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\EnableFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetVersionRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\GetVersionResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\GroupInvokeFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\GroupInvokeFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\InvokeFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\InvokeFlowResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListVersionsRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\ListVersionsResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Composer\V20181212\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\Composer\V20181212\Models\UpdateFlowResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Composer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('composer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CloneFlowRequest $request CloneFlowRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CloneFlowResponse CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloneFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   *
     * Deprecated
     *
     * @param CloneFlowRequest $request CloneFlowRequest
     *
     * @return CloneFlowResponse CloneFlowResponse
     */
    public function cloneFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowWithOptions($request, $runtime);
    }

    /**
     * After you create a workflow, the system automatically creates a version for the workflow. You can call the GetVersion operation to obtain the version information.
     *   *
     * @param CreateFlowRequest $request CreateFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->flowDescription)) {
            $body['FlowDescription'] = $request->flowDescription;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->flowSource)) {
            $body['FlowSource'] = $request->flowSource;
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
            'action'      => 'CreateFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create a workflow, the system automatically creates a version for the workflow. You can call the GetVersion operation to obtain the version information.
     *   *
     * @param CreateFlowRequest $request CreateFlowRequest
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * If you delete a workflow, all the versions and execution records of the workflow are automatically deleted.
     *   *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you delete a workflow, all the versions and execution records of the workflow are automatically deleted.
     *   *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @param DisableFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableFlowResponse
     */
    public function disableFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableFlowRequest $request
     *
     * @return DisableFlowResponse
     */
    public function disableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFlowWithOptions($request, $runtime);
    }

    /**
     * @param EnableFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableFlowResponse
     */
    public function enableFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableFlowRequest $request
     *
     * @return EnableFlowResponse
     */
    public function enableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFlowWithOptions($request, $runtime);
    }

    /**
     * @param GetFlowRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowResponse
     */
    public function getFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFlowRequest $request
     *
     * @return GetFlowResponse
     */
    public function getFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2018-12-12',
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
     * @param GetVersionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetVersionResponse
     */
    public function getVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $body['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetVersion',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVersionRequest $request
     *
     * @return GetVersionResponse
     */
    public function getVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVersionWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to trigger a workflow to be executed more than 100 times per second. If the desired execution frequency does not exceed 100 times per second, we recommend that you call the InvokeFlow operation.
     *   * *   However, you may need to call the GroupInvokeFlow operation multiple times. For example, assume that you want a workflow to be executed 1,000 times per second and the 1,000 times of execution are divided into ten groups. You need to call the operation ten times for the ten groups and specify a group key for each group.
     *   * *   Each call corresponds to a group execution. Logic Composer automatically determines when a group execution starts. You must set the Data parameter to a JSON array of strings to specify the information required by the execution. Each string provides the information required by one time of execution. The string must use the format of the Data parameter in the InvokeFlow operation.
     *   *
     * @param GroupInvokeFlowRequest $request GroupInvokeFlowRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GroupInvokeFlowResponse GroupInvokeFlowResponse
     */
    public function groupInvokeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->groupKey)) {
            $body['GroupKey'] = $request->groupKey;
        }
        if (!Utils::isUnset($request->totalCount)) {
            $body['TotalCount'] = $request->totalCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GroupInvokeFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GroupInvokeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to trigger a workflow to be executed more than 100 times per second. If the desired execution frequency does not exceed 100 times per second, we recommend that you call the InvokeFlow operation.
     *   * *   However, you may need to call the GroupInvokeFlow operation multiple times. For example, assume that you want a workflow to be executed 1,000 times per second and the 1,000 times of execution are divided into ten groups. You need to call the operation ten times for the ten groups and specify a group key for each group.
     *   * *   Each call corresponds to a group execution. Logic Composer automatically determines when a group execution starts. You must set the Data parameter to a JSON array of strings to specify the information required by the execution. Each string provides the information required by one time of execution. The string must use the format of the Data parameter in the InvokeFlow operation.
     *   *
     * @param GroupInvokeFlowRequest $request GroupInvokeFlowRequest
     *
     * @return GroupInvokeFlowResponse GroupInvokeFlowResponse
     */
    public function groupInvokeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->groupInvokeFlowWithOptions($request, $runtime);
    }

    /**
     * @param InvokeFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InvokeFlowResponse
     */
    public function invokeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->data)) {
            $body['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InvokeFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvokeFlowRequest $request
     *
     * @return InvokeFlowResponse
     */
    public function invokeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->filter)) {
            $body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFlows',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowsWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2018-12-12',
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
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lang)) {
            $body['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListVersionsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVersions',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListVersionsRequest $request
     *
     * @return ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $body['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->definition)) {
            $body['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->flowDescription)) {
            $body['FlowDescription'] = $request->flowDescription;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFlowRequest $request
     *
     * @return UpdateFlowResponse
     */
    public function updateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowWithOptions($request, $runtime);
    }
}
