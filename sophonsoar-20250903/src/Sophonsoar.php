<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\CreateComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\CreateComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\CreatePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\CreatePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\DeleteComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\DeleteComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\DeletePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\DeletePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ExecuteComponentRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ExecuteComponentResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\GetPlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\GetPlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentAssetsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentAssetsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListPlaybooksRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListPlaybooksResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListPlaybooksShrinkRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\UpdateComponentAssetRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\UpdateComponentAssetResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\UpdatePlaybookRequest;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\UpdatePlaybookResponse;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\UpdatePlaybookShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sophonsoar extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sophonsoar', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Create Component Asset.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., Threat Analysis and Response Log Ingress Traffic) before using this interface.
     *
     * @param request - CreateComponentAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComponentAssetResponse
     *
     * @param CreateComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateComponentAssetResponse
     */
    public function createComponentAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentAssetName) {
            @$body['ComponentAssetName'] = $request->componentAssetName;
        }

        $bodyFlat = [];
        if (null !== $request->componentAssetValues) {
            @$bodyFlat['ComponentAssetValues'] = $request->componentAssetValues;
        }

        if (null !== $request->componentName) {
            @$body['ComponentName'] = $request->componentName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComponentAsset',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Component Asset.
     *
     * @remarks
     * Please ensure that you fully understand the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., Threat Analysis and Response Log Ingress Traffic) before using this interface.
     *
     * @param request - CreateComponentAssetRequest
     *
     * @returns CreateComponentAssetResponse
     *
     * @param CreateComponentAssetRequest $request
     *
     * @return CreateComponentAssetResponse
     */
    public function createComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createComponentAssetWithOptions($request, $runtime);
    }

    /**
     * Create Playbook.
     *
     * @param request - CreatePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePlaybookResponse
     *
     * @param CreatePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePlaybookResponse
     */
    public function createPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookDescription) {
            @$body['PlaybookDescription'] = $request->playbookDescription;
        }

        $bodyFlat = [];
        if (null !== $request->playbookInputConfigs) {
            @$bodyFlat['PlaybookInputConfigs'] = $request->playbookInputConfigs;
        }

        if (null !== $request->playbookName) {
            @$body['PlaybookName'] = $request->playbookName;
        }

        if (null !== $request->playbookOutputConfigs) {
            @$bodyFlat['PlaybookOutputConfigs'] = $request->playbookOutputConfigs;
        }

        if (null !== $request->playbookParamType) {
            @$body['PlaybookParamType'] = $request->playbookParamType;
        }

        if (null !== $request->playbookTaskFlow) {
            @$body['PlaybookTaskFlow'] = $request->playbookTaskFlow;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->srcPlaybookUuid) {
            @$body['SrcPlaybookUuid'] = $request->srcPlaybookUuid;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePlaybook',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Playbook.
     *
     * @param request - CreatePlaybookRequest
     *
     * @returns CreatePlaybookResponse
     *
     * @param CreatePlaybookRequest $request
     *
     * @return CreatePlaybookResponse
     */
    public function createPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPlaybookWithOptions($request, $runtime);
    }

    /**
     * Delete Component Asset.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., Threat Analysis and Response Log Access Traffic).
     *
     * @param request - DeleteComponentAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComponentAssetResponse
     *
     * @param DeleteComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteComponentAssetResponse
     */
    public function deleteComponentAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentAssetUuid) {
            @$body['ComponentAssetUuid'] = $request->componentAssetUuid;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteComponentAsset',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Component Asset.
     *
     * @remarks
     * Please ensure that before using this interface, you have fully understood the billing method and [pricing](https://www.aliyun.com/price/product#/sas/detail/sas) of the response orchestration product (i.e., Threat Analysis and Response Log Access Traffic).
     *
     * @param request - DeleteComponentAssetRequest
     *
     * @returns DeleteComponentAssetResponse
     *
     * @param DeleteComponentAssetRequest $request
     *
     * @return DeleteComponentAssetResponse
     */
    public function deleteComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComponentAssetWithOptions($request, $runtime);
    }

    /**
     * Delete Playbook.
     *
     * @param request - DeletePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePlaybookResponse
     *
     * @param DeletePlaybookRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlaybookResponse
     */
    public function deletePlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePlaybook',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Playbook.
     *
     * @param request - DeletePlaybookRequest
     *
     * @returns DeletePlaybookResponse
     *
     * @param DeletePlaybookRequest $request
     *
     * @return DeletePlaybookResponse
     */
    public function deletePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlaybookWithOptions($request, $runtime);
    }

    /**
     * 执行组件动作.
     *
     * @param request - ExecuteComponentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteComponentResponse
     *
     * @param ExecuteComponentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteComponentResponse
     */
    public function executeComponentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentActionName) {
            @$body['ComponentActionName'] = $request->componentActionName;
        }

        if (null !== $request->componentAssetUuid) {
            @$body['ComponentAssetUuid'] = $request->componentAssetUuid;
        }

        if (null !== $request->componentInput) {
            @$body['ComponentInput'] = $request->componentInput;
        }

        if (null !== $request->componentName) {
            @$body['ComponentName'] = $request->componentName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playBookNodeName) {
            @$body['PlayBookNodeName'] = $request->playBookNodeName;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteComponent',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行组件动作.
     *
     * @param request - ExecuteComponentRequest
     *
     * @returns ExecuteComponentResponse
     *
     * @param ExecuteComponentRequest $request
     *
     * @return ExecuteComponentResponse
     */
    public function executeComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeComponentWithOptions($request, $runtime);
    }

    /**
     * Get playbook details.
     *
     * @param request - GetPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPlaybookResponse
     *
     * @param GetPlaybookRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPlaybookResponse
     */
    public function getPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->playbookVersion) {
            @$body['PlaybookVersion'] = $request->playbookVersion;
        }

        if (null !== $request->playbookVersionType) {
            @$body['PlaybookVersionType'] = $request->playbookVersionType;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPlaybook',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get playbook details.
     *
     * @param request - GetPlaybookRequest
     *
     * @returns GetPlaybookResponse
     *
     * @param GetPlaybookRequest $request
     *
     * @return GetPlaybookResponse
     */
    public function getPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlaybookWithOptions($request, $runtime);
    }

    /**
     * Get the list of assets configured for a component.
     *
     * @param request - ListComponentAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentAssetsResponse
     *
     * @param ListComponentAssetsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListComponentAssetsResponse
     */
    public function listComponentAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentAssetUuid) {
            @$body['ComponentAssetUuid'] = $request->componentAssetUuid;
        }

        if (null !== $request->componentName) {
            @$body['ComponentName'] = $request->componentName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListComponentAssets',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListComponentAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the list of assets configured for a component.
     *
     * @param request - ListComponentAssetsRequest
     *
     * @returns ListComponentAssetsResponse
     *
     * @param ListComponentAssetsRequest $request
     *
     * @return ListComponentAssetsResponse
     */
    public function listComponentAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentAssetsWithOptions($request, $runtime);
    }

    /**
     * Get Component List.
     *
     * @param request - ListComponentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentName) {
            @$body['ComponentName'] = $request->componentName;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListComponents',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Component List.
     *
     * @param request - ListComponentsRequest
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentsWithOptions($request, $runtime);
    }

    /**
     * Get Playbook List.
     *
     * @param tmpReq - ListPlaybooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPlaybooksResponse
     *
     * @param ListPlaybooksRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListPlaybooksResponse
     */
    public function listPlaybooksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPlaybooksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->playbookParamTypes) {
            $request->playbookParamTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->playbookParamTypes, 'PlaybookParamTypes', 'simple');
        }

        if (null !== $tmpReq->playbookUuids) {
            $request->playbookUuidsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->playbookUuids, 'PlaybookUuids', 'simple');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playbookExecutionEndTime) {
            @$body['PlaybookExecutionEndTime'] = $request->playbookExecutionEndTime;
        }

        if (null !== $request->playbookExecutionStartTime) {
            @$body['PlaybookExecutionStartTime'] = $request->playbookExecutionStartTime;
        }

        if (null !== $request->playbookName) {
            @$body['PlaybookName'] = $request->playbookName;
        }

        if (null !== $request->playbookParamTypesShrink) {
            @$body['PlaybookParamTypes'] = $request->playbookParamTypesShrink;
        }

        if (null !== $request->playbookStatus) {
            @$body['PlaybookStatus'] = $request->playbookStatus;
        }

        if (null !== $request->playbookType) {
            @$body['PlaybookType'] = $request->playbookType;
        }

        if (null !== $request->playbookUuidsShrink) {
            @$body['PlaybookUuids'] = $request->playbookUuidsShrink;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPlaybooks',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPlaybooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Playbook List.
     *
     * @param request - ListPlaybooksRequest
     *
     * @returns ListPlaybooksResponse
     *
     * @param ListPlaybooksRequest $request
     *
     * @return ListPlaybooksResponse
     */
    public function listPlaybooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlaybooksWithOptions($request, $runtime);
    }

    /**
     * Update Component Asset.
     *
     * @param request - UpdateComponentAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComponentAssetResponse
     *
     * @param UpdateComponentAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateComponentAssetResponse
     */
    public function updateComponentAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->componentAssetName) {
            @$body['ComponentAssetName'] = $request->componentAssetName;
        }

        if (null !== $request->componentAssetUuid) {
            @$body['ComponentAssetUuid'] = $request->componentAssetUuid;
        }

        $bodyFlat = [];
        if (null !== $request->componentAssetValues) {
            @$bodyFlat['ComponentAssetValues'] = $request->componentAssetValues;
        }

        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateComponentAsset',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateComponentAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Component Asset.
     *
     * @param request - UpdateComponentAssetRequest
     *
     * @returns UpdateComponentAssetResponse
     *
     * @param UpdateComponentAssetRequest $request
     *
     * @return UpdateComponentAssetResponse
     */
    public function updateComponentAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateComponentAssetWithOptions($request, $runtime);
    }

    /**
     * Update Playbook.
     *
     * @param tmpReq - UpdatePlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePlaybookResponse
     *
     * @param UpdatePlaybookRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePlaybookResponse
     */
    public function updatePlaybookWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePlaybookShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->playbookInputConfigs) {
            $request->playbookInputConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->playbookInputConfigs, 'PlaybookInputConfigs', 'json');
        }

        if (null !== $tmpReq->playbookOutputConfigs) {
            $request->playbookOutputConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->playbookOutputConfigs, 'PlaybookOutputConfigs', 'json');
        }

        $body = [];
        if (null !== $request->lang) {
            @$body['Lang'] = $request->lang;
        }

        if (null !== $request->playbookDescription) {
            @$body['PlaybookDescription'] = $request->playbookDescription;
        }

        if (null !== $request->playbookInputConfigsShrink) {
            @$body['PlaybookInputConfigs'] = $request->playbookInputConfigsShrink;
        }

        if (null !== $request->playbookName) {
            @$body['PlaybookName'] = $request->playbookName;
        }

        if (null !== $request->playbookOutputConfigsShrink) {
            @$body['PlaybookOutputConfigs'] = $request->playbookOutputConfigsShrink;
        }

        if (null !== $request->playbookParamType) {
            @$body['PlaybookParamType'] = $request->playbookParamType;
        }

        if (null !== $request->playbookTaskFlow) {
            @$body['PlaybookTaskFlow'] = $request->playbookTaskFlow;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePlaybook',
            'version' => '2025-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Playbook.
     *
     * @param request - UpdatePlaybookRequest
     *
     * @returns UpdatePlaybookResponse
     *
     * @param UpdatePlaybookRequest $request
     *
     * @return UpdatePlaybookResponse
     */
    public function updatePlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePlaybookWithOptions($request, $runtime);
    }
}
