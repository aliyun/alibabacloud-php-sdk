<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateOutboundCallRestrictionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\DeleteOutboundCallRestrictionShrinkRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetInstanceResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListInstancesResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsResponse;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OutboundBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'outboundbot.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('outboundbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an instance.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->serviceMode) {
            @$body['ServiceMode'] = $request->serviceMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @param tmpReq - CreateOutboundCallRestrictionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOutboundCallRestrictionResponse
     *
     * @param CreateOutboundCallRestrictionRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateOutboundCallRestrictionResponse
     */
    public function createOutboundCallRestrictionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOutboundCallRestrictionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundCallRestriction) {
            $request->outboundCallRestrictionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundCallRestriction, 'OutboundCallRestriction', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundCallRestrictionShrink) {
            @$body['OutboundCallRestriction'] = $request->outboundCallRestrictionShrink;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOutboundCallRestriction',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOutboundCallRestrictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @param request - CreateOutboundCallRestrictionRequest
     *
     * @returns CreateOutboundCallRestrictionResponse
     *
     * @param CreateOutboundCallRestrictionRequest $request
     *
     * @return CreateOutboundCallRestrictionResponse
     */
    public function createOutboundCallRestriction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundCallRestrictionWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes blacklists and whitelists.
     *
     * @param tmpReq - DeleteOutboundCallRestrictionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOutboundCallRestrictionResponse
     *
     * @param DeleteOutboundCallRestrictionRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteOutboundCallRestrictionResponse
     */
    public function deleteOutboundCallRestrictionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteOutboundCallRestrictionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->restrictionIdList) {
            $request->restrictionIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->restrictionIdList, 'RestrictionIdList', 'json');
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->restrictionIdListShrink) {
            @$body['RestrictionIdList'] = $request->restrictionIdListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteOutboundCallRestriction',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOutboundCallRestrictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes blacklists and whitelists.
     *
     * @param request - DeleteOutboundCallRestrictionRequest
     *
     * @returns DeleteOutboundCallRestrictionResponse
     *
     * @param DeleteOutboundCallRestrictionRequest $request
     *
     * @return DeleteOutboundCallRestrictionResponse
     */
    public function deleteOutboundCallRestriction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundCallRestrictionWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Retrieves instance details.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves instance details.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Retrieves the blacklists and whitelists of an outbound robot.
     *
     * @param request - ListOutboundCallRestrictionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundCallRestrictionsResponse
     *
     * @param ListOutboundCallRestrictionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOutboundCallRestrictionsResponse
     */
    public function listOutboundCallRestrictionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policy) {
            @$body['Policy'] = $request->policy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOutboundCallRestrictions',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundCallRestrictionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the blacklists and whitelists of an outbound robot.
     *
     * @param request - ListOutboundCallRestrictionsRequest
     *
     * @returns ListOutboundCallRestrictionsResponse
     *
     * @param ListOutboundCallRestrictionsRequest $request
     *
     * @return ListOutboundCallRestrictionsResponse
     */
    public function listOutboundCallRestrictions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundCallRestrictionsWithOptions($request, $runtime);
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->concurrency) {
            @$body['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2025-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an instance.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }
}
