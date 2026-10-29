<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\AcceptVpcPeerConnectionRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\AcceptVpcPeerConnectionResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\CreateVpcPeerConnectionRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\CreateVpcPeerConnectionResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\DeleteVpcPeerConnectionRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\DeleteVpcPeerConnectionResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\GetVpcPeerConnectionAttributeRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\GetVpcPeerConnectionAttributeResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsShrinkRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ModifyVpcPeerConnectionRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\ModifyVpcPeerConnectionResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\RejectVpcPeerConnectionRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\RejectVpcPeerConnectionResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\VpcPeer\V20220101\Models\UnTagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class VpcPeer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vpcpeer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Accepts a VPC peering connection request.
     *
     * @remarks
     * - For a cross-account VPC peering connection, the VPC peering connection instance is activated only after the acceptor accepts the connection request.
     * - The **AcceptVpcPeerConnection** operation is asynchronous. After you call this operation, the system returns a **RequestId**, but the VPC peering connection instance is not immediately activated. The activation task is still running in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) to query the status of the VPC peering connection instance.
     *     - If the VPC peering connection instance is in the **Updating** state, the instance is being activated.
     *     - If the VPC peering connection instance is in the **Activated** state, the instance is activated.
     * - You cannot call the **AcceptVpcPeerConnection** operation to concurrently accept requests for the same VPC peering connection instance.
     *
     * @param request - AcceptVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptVpcPeerConnectionResponse
     *
     * @param AcceptVpcPeerConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AcceptVpcPeerConnectionResponse
     */
    public function acceptVpcPeerConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AcceptVpcPeerConnection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Accepts a VPC peering connection request.
     *
     * @remarks
     * - For a cross-account VPC peering connection, the VPC peering connection instance is activated only after the acceptor accepts the connection request.
     * - The **AcceptVpcPeerConnection** operation is asynchronous. After you call this operation, the system returns a **RequestId**, but the VPC peering connection instance is not immediately activated. The activation task is still running in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) to query the status of the VPC peering connection instance.
     *     - If the VPC peering connection instance is in the **Updating** state, the instance is being activated.
     *     - If the VPC peering connection instance is in the **Activated** state, the instance is activated.
     * - You cannot call the **AcceptVpcPeerConnection** operation to concurrently accept requests for the same VPC peering connection instance.
     *
     * @param request - AcceptVpcPeerConnectionRequest
     *
     * @returns AcceptVpcPeerConnectionResponse
     *
     * @param AcceptVpcPeerConnectionRequest $request
     *
     * @return AcceptVpcPeerConnectionResponse
     */
    public function acceptVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Invokes the CreateVpcPeerConnection operation to create a VPC peering connection.
     *
     * @remarks
     * Before you create a VPC peering connection, take note of the following items:
     * - **CreateVpcPeerConnection** is an asynchronous operation. After you call this operation, the system returns an **InstanceId**, but the VPC peering connection is not created yet and the creation task is still running in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426095.html) to query the status of the VPC peering connection.
     *     - If the VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *     - If the VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *     - If the VPC peering connection is in the **Accepting** state, the VPC peering connection is created across accounts and must be accepted by the acceptor.
     * - You cannot call the **CreateVpcPeerConnection** operation to concurrently create VPC peering connections in the same VPC.
     * <props="china">When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for non-cross-border data transfer and cross-border data transfer.
     * <props="intl">When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for non-cross-border data transfer.
     *
     * @param request - CreateVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVpcPeerConnectionResponse
     *
     * @param CreateVpcPeerConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVpcPeerConnectionResponse
     */
    public function createVpcPeerConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->linkType) {
            @$query['LinkType'] = $request->linkType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->acceptingAliUid) {
            @$body['AcceptingAliUid'] = $request->acceptingAliUid;
        }

        if (null !== $request->acceptingRegionId) {
            @$body['AcceptingRegionId'] = $request->acceptingRegionId;
        }

        if (null !== $request->acceptingVpcId) {
            @$body['AcceptingVpcId'] = $request->acceptingVpcId;
        }

        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableJumboFrame) {
            @$body['EnableJumboFrame'] = $request->enableJumboFrame;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVpcPeerConnection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the CreateVpcPeerConnection operation to create a VPC peering connection.
     *
     * @remarks
     * Before you create a VPC peering connection, take note of the following items:
     * - **CreateVpcPeerConnection** is an asynchronous operation. After you call this operation, the system returns an **InstanceId**, but the VPC peering connection is not created yet and the creation task is still running in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426095.html) to query the status of the VPC peering connection.
     *     - If the VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *     - If the VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *     - If the VPC peering connection is in the **Accepting** state, the VPC peering connection is created across accounts and must be accepted by the acceptor.
     * - You cannot call the **CreateVpcPeerConnection** operation to concurrently create VPC peering connections in the same VPC.
     * <props="china">When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for non-cross-border data transfer and cross-border data transfer.
     * <props="intl">When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for non-cross-border data transfer.
     *
     * @param request - CreateVpcPeerConnectionRequest
     *
     * @returns CreateVpcPeerConnectionResponse
     *
     * @param CreateVpcPeerConnectionRequest $request
     *
     * @return CreateVpcPeerConnectionResponse
     */
    public function createVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Deletes a VPC peering connection instance.
     *
     * @remarks
     * - You can delete a VPC peering connection instance. After the instance is deleted, your services will be interrupted. Perform this operation only when it does not affect your services.
     *     - If you choose to force delete the instance, the system deletes the route entry that points to the VPC peering connection instance from the VPC routing table.
     *     - If you do not choose to force delete the instance, the system does not delete the route entry that points to the VPC peering connection instance from the VPC routing table. You must manually delete the route entry.
     * - The **DeleteVpcPeerConnection** operation is asynchronous. After you call the operation, the system returns a **RequestId**, but the VPC peering connection instance is not immediately deleted. The deletion task is still running in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/2523294.html) operation to query the status of the VPC peering connection instance.
     *     - If the VPC peering connection instance is in the **Deleting** state, the instance is being deleted.
     *     - If the VPC peering connection instance is in the **Deleted** state, the instance is deleted.
     * - You cannot call the **DeleteVpcPeerConnection** operation to concurrently delete the same VPC peering connection instance.
     *
     * @param request - DeleteVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVpcPeerConnectionResponse
     *
     * @param DeleteVpcPeerConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteVpcPeerConnectionResponse
     */
    public function deleteVpcPeerConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVpcPeerConnection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a VPC peering connection instance.
     *
     * @remarks
     * - You can delete a VPC peering connection instance. After the instance is deleted, your services will be interrupted. Perform this operation only when it does not affect your services.
     *     - If you choose to force delete the instance, the system deletes the route entry that points to the VPC peering connection instance from the VPC routing table.
     *     - If you do not choose to force delete the instance, the system does not delete the route entry that points to the VPC peering connection instance from the VPC routing table. You must manually delete the route entry.
     * - The **DeleteVpcPeerConnection** operation is asynchronous. After you call the operation, the system returns a **RequestId**, but the VPC peering connection instance is not immediately deleted. The deletion task is still running in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/2523294.html) operation to query the status of the VPC peering connection instance.
     *     - If the VPC peering connection instance is in the **Deleting** state, the instance is being deleted.
     *     - If the VPC peering connection instance is in the **Deleted** state, the instance is deleted.
     * - You cannot call the **DeleteVpcPeerConnection** operation to concurrently delete the same VPC peering connection instance.
     *
     * @param request - DeleteVpcPeerConnectionRequest
     *
     * @returns DeleteVpcPeerConnectionResponse
     *
     * @param DeleteVpcPeerConnectionRequest $request
     *
     * @return DeleteVpcPeerConnectionResponse
     */
    public function deleteVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified VPC peering connection.
     *
     * @param request - GetVpcPeerConnectionAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpcPeerConnectionAttributeResponse
     *
     * @param GetVpcPeerConnectionAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetVpcPeerConnectionAttributeResponse
     */
    public function getVpcPeerConnectionAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetVpcPeerConnectionAttribute',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVpcPeerConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified VPC peering connection.
     *
     * @param request - GetVpcPeerConnectionAttributeRequest
     *
     * @returns GetVpcPeerConnectionAttributeResponse
     *
     * @param GetVpcPeerConnectionAttributeRequest $request
     *
     * @return GetVpcPeerConnectionAttributeResponse
     */
    public function getVpcPeerConnectionAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcPeerConnectionAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the tags bound to VPC peering connections.
     *
     * @remarks
     * - Specify at least one of the **ResourceId.N** and **Tag.N** (**Tag.N.Key** and **Tag.N.Value**) parameters in the request to determine the resources to query.
     * - **Tag.N** is the tag of the resource and consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values associated with the tag key are returned. If you specify only **Tag.N.Value**, an error is reported.
     * - If you specify both **Tag.N** and **ResourceId.N** to filter tags, the **ResourceId.N** parameter must match all the specified tag key-value pairs.
     * - If you specify multiple tag key-value pairs, the returned resources contain all the specified key-value pairs.
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
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2022-01-01',
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
     * Queries the tags bound to VPC peering connections.
     *
     * @remarks
     * - Specify at least one of the **ResourceId.N** and **Tag.N** (**Tag.N.Key** and **Tag.N.Value**) parameters in the request to determine the resources to query.
     * - **Tag.N** is the tag of the resource and consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values associated with the tag key are returned. If you specify only **Tag.N.Value**, an error is reported.
     * - If you specify both **Tag.N** and **ResourceId.N** to filter tags, the **ResourceId.N** parameter must match all the specified tag key-value pairs.
     * - If you specify multiple tag key-value pairs, the returned resources contain all the specified key-value pairs.
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
     * Queries the details of VPC peering connections.
     *
     * @param tmpReq - ListVpcPeerConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVpcPeerConnectionsResponse
     *
     * @param ListVpcPeerConnectionsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListVpcPeerConnectionsResponse
     */
    public function listVpcPeerConnectionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListVpcPeerConnectionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vpcId) {
            $request->vpcIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vpcId, 'VpcId', 'simple');
        }

        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->vpcIdShrink) {
            @$body['VpcId'] = $request->vpcIdShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListVpcPeerConnections',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVpcPeerConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of VPC peering connections.
     *
     * @param request - ListVpcPeerConnectionsRequest
     *
     * @returns ListVpcPeerConnectionsResponse
     *
     * @param ListVpcPeerConnectionsRequest $request
     *
     * @return ListVpcPeerConnectionsResponse
     */
    public function listVpcPeerConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVpcPeerConnectionsWithOptions($request, $runtime);
    }

    /**
     * Modifies the name or description of a VPC peering connection.
     *
     * @remarks
     * - **ModifyVpcPeerConnection** is an asynchronous operation. The system returns a **RequestId**, but the VPC peering connection is not immediately modified. The modification task continues in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) to query the status of the VPC peering connection.
     *     - If the VPC peering connection is in the **Updating** state, it is being modified.
     *     - If the VPC peering connection is in the **Activated** state, the modification is complete.
     * - **ModifyVpcPeerConnection** does not support concurrent modifications to the name and description of the same VPC peering connection.
     *
     * @param request - ModifyVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVpcPeerConnectionResponse
     *
     * @param ModifyVpcPeerConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyVpcPeerConnectionResponse
     */
    public function modifyVpcPeerConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->linkType) {
            @$query['LinkType'] = $request->linkType;
        }

        $body = [];
        if (null !== $request->bandwidth) {
            @$body['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->enableJumboFrame) {
            @$body['EnableJumboFrame'] = $request->enableJumboFrame;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyVpcPeerConnection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name or description of a VPC peering connection.
     *
     * @remarks
     * - **ModifyVpcPeerConnection** is an asynchronous operation. The system returns a **RequestId**, but the VPC peering connection is not immediately modified. The modification task continues in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) to query the status of the VPC peering connection.
     *     - If the VPC peering connection is in the **Updating** state, it is being modified.
     *     - If the VPC peering connection is in the **Activated** state, the modification is complete.
     * - **ModifyVpcPeerConnection** does not support concurrent modifications to the name and description of the same VPC peering connection.
     *
     * @param request - ModifyVpcPeerConnectionRequest
     *
     * @returns ModifyVpcPeerConnectionResponse
     *
     * @param ModifyVpcPeerConnectionRequest $request
     *
     * @return ModifyVpcPeerConnectionResponse
     */
    public function modifyVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Modifies the resource group of a VPC peering connection.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the resource group of a VPC peering connection.
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Rejects a request for a VPC peering connection.
     *
     * @remarks
     * - For a cross-account VPC peering connection instance, the acceptor can reject the connection request. A VPC peering connection instance whose connection request is rejected enters the **Rejected** state.
     * - **RejectVpcPeerConnection** does not support concurrent requests to reject the same peering connection instance.
     *
     * @param request - RejectVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RejectVpcPeerConnectionResponse
     *
     * @param RejectVpcPeerConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RejectVpcPeerConnectionResponse
     */
    public function rejectVpcPeerConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RejectVpcPeerConnection',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RejectVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rejects a request for a VPC peering connection.
     *
     * @remarks
     * - For a cross-account VPC peering connection instance, the acceptor can reject the connection request. A VPC peering connection instance whose connection request is rejected enters the **Rejected** state.
     * - **RejectVpcPeerConnection** does not support concurrent requests to reject the same peering connection instance.
     *
     * @param request - RejectVpcPeerConnectionRequest
     *
     * @returns RejectVpcPeerConnectionResponse
     *
     * @param RejectVpcPeerConnectionRequest $request
     *
     * @return RejectVpcPeerConnectionResponse
     */
    public function rejectVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Creates and attaches tags to one or more specified VPC peering connections.
     *
     * @remarks
     * Tags are labels that you assign to instances. Instance tag consists of a key-value pair. Take note of the following limits on tags:
     * - The key of instance tag on an instance must be unique.
     * - Tags must be attached to instances. Unattached tags are not supported.
     * - Tag information is not shared across regions.
     *     For example, tags created in the China (Hangzhou) region are not visible in the China (Shanghai) region.
     * - Within the same account and region, tag information is shared across different VPC peering connections.
     *        For example, if a tag is attached to a VPC peering connection within the same account and region, you can directly select and attach this tag to other VPC peering connections on the Edit Tags page without manually entering the key-value pair. You can modify the key and value of a tag, or delete the tag from an instance at any time. If an instance is deleted, all tags attached to the instance are also deleted.
     * - You can attach up to 20 tags to a single instance. Before attaching tags, Alibaba Cloud verifies the number of existing tags on the resource. If the limit is exceeded, an error message is returned.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and attaches tags to one or more specified VPC peering connections.
     *
     * @remarks
     * Tags are labels that you assign to instances. Instance tag consists of a key-value pair. Take note of the following limits on tags:
     * - The key of instance tag on an instance must be unique.
     * - Tags must be attached to instances. Unattached tags are not supported.
     * - Tag information is not shared across regions.
     *     For example, tags created in the China (Hangzhou) region are not visible in the China (Shanghai) region.
     * - Within the same account and region, tag information is shared across different VPC peering connections.
     *        For example, if a tag is attached to a VPC peering connection within the same account and region, you can directly select and attach this tag to other VPC peering connections on the Edit Tags page without manually entering the key-value pair. You can modify the key and value of a tag, or delete the tag from an instance at any time. If an instance is deleted, all tags attached to the instance are also deleted.
     * - You can attach up to 20 tags to a single instance. Before attaching tags, Alibaba Cloud verifies the number of existing tags on the resource. If the limit is exceeded, an error message is returned.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Removes tags from specified VPC peering connections.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from specified VPC peering connections.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }
}
