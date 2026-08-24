<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\AttachKVCacheStoreResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\CreateKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\CreateKVCacheStoreResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DeleteKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DeleteKVCacheStoreResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DetachKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\DetachKVCacheStoreResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\GetKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\GetKVCacheStoreResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAttachInfoRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAttachInfoResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoresRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoresResponse;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\UpdateKVCacheStoreRequest;
use AlibabaCloud\SDK\Kvcachestore\V20260617\Models\UpdateKVCacheStoreResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Kvcachestore extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'kvcachestore.cn-beijing.aliyuncs.com',
            'cn-shanghai' => 'kvcachestore.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'kvcachestore.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('kvcachestore', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Mounts KVCacheInstance resources to the virtualization side in batches.
     *
     * @remarks
     * This is an asynchronous operation. A return status of Attaching indicates that the request has been accepted. Call ListKVCacheStoreAttachInfo to query mount records. A record status of Attached indicates that the mount is complete.
     * * The KVCacheStore must be in the Available or InUse state before it can be mounted.
     *
     * @param request - AttachKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachKVCacheStoreResponse
     *
     * @param AttachKVCacheStoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachKVCacheStoreResponse
     */
    public function attachKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arns) {
            @$query['Arns'] = $request->arns;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mounts KVCacheInstance resources to the virtualization side in batches.
     *
     * @remarks
     * This is an asynchronous operation. A return status of Attaching indicates that the request has been accepted. Call ListKVCacheStoreAttachInfo to query mount records. A record status of Attached indicates that the mount is complete.
     * * The KVCacheStore must be in the Available or InUse state before it can be mounted.
     *
     * @param request - AttachKVCacheStoreRequest
     *
     * @returns AttachKVCacheStoreResponse
     *
     * @param AttachKVCacheStoreRequest $request
     *
     * @return AttachKVCacheStoreResponse
     */
    public function attachKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKVCacheStoreWithOptions($request, $runtime);
    }

    /**
     * Creates a KVCacheInstance instance.
     *
     * @remarks
     * This is an asynchronous operation. After the request is successful, the KVCacheStore enters the Creating state. You can call GetKVCacheStore or ListKVCacheStores to query the KVCacheStore status. The KVCacheStore becomes available when its status changes to Available.
     * * To ensure idempotence in case of network exceptions, use ClientToken. If you call the operation with the same ClientToken and the same request parameters, the same KVCacheStore ID and order ID are returned. If the request parameters change, an IdempotentParameterMismatch error is returned.
     * * Creating a KVCacheStore generates an order. The response includes OrderId, which you can view in the Expenses and Costs console. For more information, refer to View and manage orders.
     *
     * @param request - CreateKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKVCacheStoreResponse
     *
     * @param CreateKVCacheStoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateKVCacheStoreResponse
     */
    public function createKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->hpnZone) {
            @$query['HpnZone'] = $request->hpnZone;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a KVCacheInstance instance.
     *
     * @remarks
     * This is an asynchronous operation. After the request is successful, the KVCacheStore enters the Creating state. You can call GetKVCacheStore or ListKVCacheStores to query the KVCacheStore status. The KVCacheStore becomes available when its status changes to Available.
     * * To ensure idempotence in case of network exceptions, use ClientToken. If you call the operation with the same ClientToken and the same request parameters, the same KVCacheStore ID and order ID are returned. If the request parameters change, an IdempotentParameterMismatch error is returned.
     * * Creating a KVCacheStore generates an order. The response includes OrderId, which you can view in the Expenses and Costs console. For more information, refer to View and manage orders.
     *
     * @param request - CreateKVCacheStoreRequest
     *
     * @returns CreateKVCacheStoreResponse
     *
     * @param CreateKVCacheStoreRequest $request
     *
     * @return CreateKVCacheStoreResponse
     */
    public function createKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKVCacheStoreWithOptions($request, $runtime);
    }

    /**
     * Deletes a KVCacheInstance instance.
     *
     * @remarks
     * The delete operation is irreversible. Data in the KVCacheStore will be erased and cannot be recovered. Proceed with caution.
     * * Billing stops after the deletion begins.
     * * The KVCacheStore to be deleted cannot be in the Creating state.
     * * The KVCacheStore to be deleted cannot have mount records in the Attaching or Attached state.
     *
     * @param request - DeleteKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKVCacheStoreResponse
     *
     * @param DeleteKVCacheStoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteKVCacheStoreResponse
     */
    public function deleteKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kvcsId) {
            @$query['KvcsId'] = $request->kvcsId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a KVCacheInstance instance.
     *
     * @remarks
     * The delete operation is irreversible. Data in the KVCacheStore will be erased and cannot be recovered. Proceed with caution.
     * * Billing stops after the deletion begins.
     * * The KVCacheStore to be deleted cannot be in the Creating state.
     * * The KVCacheStore to be deleted cannot have mount records in the Attaching or Attached state.
     *
     * @param request - DeleteKVCacheStoreRequest
     *
     * @returns DeleteKVCacheStoreResponse
     *
     * @param DeleteKVCacheStoreRequest $request
     *
     * @return DeleteKVCacheStoreResponse
     */
    public function deleteKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKVCacheStoreWithOptions($request, $runtime);
    }

    /**
     * Queries the list of regions where KVCacheStore is activated.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of regions where KVCacheStore is activated.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of available zones for KVCacheStore in a specified region.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of available zones for KVCacheStore in a specified region.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * Unmounts KVCacheInstance resources from the virtualization side in batches.
     *
     * @remarks
     * This is an asynchronous operation. A return status of Detaching indicates that the request has been accepted. Call ListKVCacheStoreAttachInfo to query mount records. When no record corresponding to the specified KvcsId and VscId is found, the unmount operation is complete.
     *
     * @param request - DetachKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachKVCacheStoreResponse
     *
     * @param DetachKVCacheStoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetachKVCacheStoreResponse
     */
    public function detachKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unmounts KVCacheInstance resources from the virtualization side in batches.
     *
     * @remarks
     * This is an asynchronous operation. A return status of Detaching indicates that the request has been accepted. Call ListKVCacheStoreAttachInfo to query mount records. When no record corresponding to the specified KvcsId and VscId is found, the unmount operation is complete.
     *
     * @param request - DetachKVCacheStoreRequest
     *
     * @returns DetachKVCacheStoreResponse
     *
     * @param DetachKVCacheStoreRequest $request
     *
     * @return DetachKVCacheStoreResponse
     */
    public function detachKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKVCacheStoreWithOptions($request, $runtime);
    }

    /**
     * 查询 KvCacheStore 实例详情.
     *
     * @param request - GetKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKVCacheStoreResponse
     *
     * @param GetKVCacheStoreRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetKVCacheStoreResponse
     */
    public function getKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kvcsId) {
            @$query['KvcsId'] = $request->kvcsId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 KvCacheStore 实例详情.
     *
     * @param request - GetKVCacheStoreRequest
     *
     * @returns GetKVCacheStoreResponse
     *
     * @param GetKVCacheStoreRequest $request
     *
     * @return GetKVCacheStoreResponse
     */
    public function getKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKVCacheStoreWithOptions($request, $runtime);
    }

    /**
     * Queries the mount information of KVCacheInstance resources in batches.
     *
     * @param request - ListKVCacheStoreAttachInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKVCacheStoreAttachInfoResponse
     *
     * @param ListKVCacheStoreAttachInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListKVCacheStoreAttachInfoResponse
     */
    public function listKVCacheStoreAttachInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kvcsIds) {
            @$query['KvcsIds'] = $request->kvcsIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKVCacheStoreAttachInfo',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKVCacheStoreAttachInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the mount information of KVCacheInstance resources in batches.
     *
     * @param request - ListKVCacheStoreAttachInfoRequest
     *
     * @returns ListKVCacheStoreAttachInfoResponse
     *
     * @param ListKVCacheStoreAttachInfoRequest $request
     *
     * @return ListKVCacheStoreAttachInfoResponse
     */
    public function listKVCacheStoreAttachInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKVCacheStoreAttachInfoWithOptions($request, $runtime);
    }

    /**
     * 查询指定 KVCacheStore 实例可用的 HpnZone 列表.
     *
     * @param request - ListKVCacheStoreAvailableHpnZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKVCacheStoreAvailableHpnZonesResponse
     *
     * @param ListKVCacheStoreAvailableHpnZonesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListKVCacheStoreAvailableHpnZonesResponse
     */
    public function listKVCacheStoreAvailableHpnZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kvcsIds) {
            @$query['KvcsIds'] = $request->kvcsIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKVCacheStoreAvailableHpnZones',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKVCacheStoreAvailableHpnZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询指定 KVCacheStore 实例可用的 HpnZone 列表.
     *
     * @param request - ListKVCacheStoreAvailableHpnZonesRequest
     *
     * @returns ListKVCacheStoreAvailableHpnZonesResponse
     *
     * @param ListKVCacheStoreAvailableHpnZonesRequest $request
     *
     * @return ListKVCacheStoreAvailableHpnZonesResponse
     */
    public function listKVCacheStoreAvailableHpnZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKVCacheStoreAvailableHpnZonesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of KVCacheInstance instances.
     *
     * @remarks
     * Two pagination methods are supported: page number-based pagination (PageNumber + PageSize) and cursor-based pagination (NextToken + MaxResults). If both are specified, page number-based pagination takes precedence.
     *
     * @param request - ListKVCacheStoresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKVCacheStoresResponse
     *
     * @param ListKVCacheStoresRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListKVCacheStoresResponse
     */
    public function listKVCacheStoresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->kvcsIds) {
            @$query['KvcsIds'] = $request->kvcsIds;
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

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKVCacheStores',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListKVCacheStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of KVCacheInstance instances.
     *
     * @remarks
     * Two pagination methods are supported: page number-based pagination (PageNumber + PageSize) and cursor-based pagination (NextToken + MaxResults). If both are specified, page number-based pagination takes precedence.
     *
     * @param request - ListKVCacheStoresRequest
     *
     * @returns ListKVCacheStoresResponse
     *
     * @param ListKVCacheStoresRequest $request
     *
     * @return ListKVCacheStoresResponse
     */
    public function listKVCacheStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKVCacheStoresWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a KVCacheStore.
     *
     * @remarks
     * Supports modifying Name, Description, and Capacity. The cluster number (HpnZone) cannot be modified after creation.
     * * Modifying Capacity triggers a specification change order, and the operation returns an OrderId. Modifying only Name or Description does not generate an order.
     *
     * @param request - UpdateKVCacheStoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKVCacheStoreResponse
     *
     * @param UpdateKVCacheStoreRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateKVCacheStoreResponse
     */
    public function updateKVCacheStoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->kvcsId) {
            @$query['KvcsId'] = $request->kvcsId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateKVCacheStore',
            'version' => '2026-06-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateKVCacheStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a KVCacheStore.
     *
     * @remarks
     * Supports modifying Name, Description, and Capacity. The cluster number (HpnZone) cannot be modified after creation.
     * * Modifying Capacity triggers a specification change order, and the operation returns an OrderId. Modifying only Name or Description does not generate an order.
     *
     * @param request - UpdateKVCacheStoreRequest
     *
     * @returns UpdateKVCacheStoreResponse
     *
     * @param UpdateKVCacheStoreRequest $request
     *
     * @return UpdateKVCacheStoreResponse
     */
    public function updateKVCacheStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKVCacheStoreWithOptions($request, $runtime);
    }
}
