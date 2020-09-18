<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Composer extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('composer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        return ListTemplatesResponse::fromMap($this->doRequest('ListTemplates', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTemplateResponse::fromMap($this->doRequest('GetTemplate', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param GroupInvokeFlowRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GroupInvokeFlowResponse
     */
    public function groupInvokeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GroupInvokeFlowResponse::fromMap($this->doRequest('GroupInvokeFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param GroupInvokeFlowRequest $request
     *
     * @return GroupInvokeFlowResponse
     */
    public function groupInvokeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->groupInvokeFlowWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param GetVersionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetVersionResponse
     */
    public function getVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetVersionResponse::fromMap($this->doRequest('GetVersion', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param ListVersionsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListVersionsResponse::fromMap($this->doRequest('ListVersions', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateFlowResponse::fromMap($this->doRequest('UpdateFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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

    /**
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CloneFlowResponse::fromMap($this->doRequest('CloneFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param CloneFlowRequest $request
     *
     * @return CloneFlowResponse
     */
    public function cloneFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowWithOptions($request, $runtime);
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

        return GetFlowResponse::fromMap($this->doRequest('GetFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListFlowsResponse::fromMap($this->doRequest('ListFlows', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteFlowResponse::fromMap($this->doRequest('DeleteFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
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

        return DisableFlowResponse::fromMap($this->doRequest('DisableFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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

        return EnableFlowResponse::fromMap($this->doRequest('EnableFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateFlowResponse::fromMap($this->doRequest('CreateFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
    }

    /**
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
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

        return InvokeFlowResponse::fromMap($this->doRequest('InvokeFlow', 'HTTPS', 'POST', '2018-12-12', 'AK', null, $request, $runtime));
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
