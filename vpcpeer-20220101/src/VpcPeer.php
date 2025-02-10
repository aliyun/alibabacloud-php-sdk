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
     * 接收VPC对等连接.
     *
     * @remarks
     *   For a cross-account VPC peering connection, the connection is activated only after the accepter VPC accepts the connection request.
     * *   **AcceptVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the operation in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of the task.
     *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being activated.
     *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is activated.
     * *   You cannot repeatedly call the **AcceptVpcPeerConnection** operation within a specific period of time.
     *
     * @param request - AcceptVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AcceptVpcPeerConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AcceptVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AcceptVpcPeerConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 接收VPC对等连接.
     *
     * @remarks
     *   For a cross-account VPC peering connection, the connection is activated only after the accepter VPC accepts the connection request.
     * *   **AcceptVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the operation in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of the task.
     *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being activated.
     *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is activated.
     * *   You cannot repeatedly call the **AcceptVpcPeerConnection** operation within a specific period of time.
     *
     * @param request - AcceptVpcPeerConnectionRequest
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
     * Creates a VPC peering connection.
     *
     * @remarks
     * Before you create a VPC peering connection, take note of the following items:
     * *   **CreateVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns an **instance ID** and runs the task in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426095.html) to query the status of the task.
     *     *   If the VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *     *   If the VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *     *   If the VPC peering connection is in the **Accepting** state, it is a cross-account connection. The connection needs to be accepted on the accepter side.
     * *   You cannot repeatedly call **CreateVpcPeerConnection** within the specified period of time.
     * When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for you.
     *
     * @param request - CreateVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVpcPeerConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVpcPeerConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a VPC peering connection.
     *
     * @remarks
     * Before you create a VPC peering connection, take note of the following items:
     * *   **CreateVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns an **instance ID** and runs the task in the background. You can call [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426095.html) to query the status of the task.
     *     *   If the VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *     *   If the VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *     *   If the VPC peering connection is in the **Accepting** state, it is a cross-account connection. The connection needs to be accepted on the accepter side.
     * *   You cannot repeatedly call **CreateVpcPeerConnection** within the specified period of time.
     * When you create a VPC peering connection, the system automatically activates Cloud Data Transfer (CDT) for you.
     *
     * @param request - CreateVpcPeerConnectionRequest
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
     * 删除VPC对等连接.
     *
     * @remarks
     *   You can delete VPC peering connections. After you delete a VPC peering connection, your service is affected. Proceed with caution.
     *     *   If you forcefully delete a VPC peering connection, the system deletes the routes that point to the VPC peering connection from the VPC route table.
     *     *   If you do not forcefully delete a VPC peering connection, the system does not delete these routes. You must manually delete them.
     * *   The **DeleteVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of a VPC peering connection.
     *     *   If a VPC peering connection is in the **Deleting** state, it is being deleted.
     *     *   If a VPC peering connection is in the **Deleted** state, it is deleted.
     * *   You cannot repeatedly call the **DeleteVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - DeleteVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteVpcPeerConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVpcPeerConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除VPC对等连接.
     *
     * @remarks
     *   You can delete VPC peering connections. After you delete a VPC peering connection, your service is affected. Proceed with caution.
     *     *   If you forcefully delete a VPC peering connection, the system deletes the routes that point to the VPC peering connection from the VPC route table.
     *     *   If you do not forcefully delete a VPC peering connection, the system does not delete these routes. You must manually delete them.
     * *   The **DeleteVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of a VPC peering connection.
     *     *   If a VPC peering connection is in the **Deleting** state, it is being deleted.
     *     *   If a VPC peering connection is in the **Deleted** state, it is deleted.
     * *   You cannot repeatedly call the **DeleteVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - DeleteVpcPeerConnectionRequest
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
     * Queries the details of a virtual private cloud (VPC) peering connection.
     *
     * @param request - GetVpcPeerConnectionAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetVpcPeerConnectionAttribute',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVpcPeerConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVpcPeerConnectionAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a virtual private cloud (VPC) peering connection.
     *
     * @param request - GetVpcPeerConnectionAttributeRequest
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
     * Queries tags that are added to Virtual Private Cloud (VPC) peering connections.
     *
     * @remarks
     *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListTagResources',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries tags that are added to Virtual Private Cloud (VPC) peering connections.
     *
     * @remarks
     *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you set only **Tag.N.Value**, an error message is returned.
     * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *
     * @param request - ListTagResourcesRequest
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
     * Queries virtual private cloud (VPC) peering connections.
     *
     * @param tmpReq - ListVpcPeerConnectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListVpcPeerConnections',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVpcPeerConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVpcPeerConnectionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries virtual private cloud (VPC) peering connections.
     *
     * @param request - ListVpcPeerConnectionsRequest
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
     * Modifies the description or name of a virtual private cloud (VPC) peering connection.
     *
     * @remarks
     *   The **ModifyVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of a VPC peering connection.
     *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being modified.
     *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is modified.
     * *   You cannot repeatedly call the **ModifyVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - ModifyVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyVpcPeerConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyVpcPeerConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description or name of a virtual private cloud (VPC) peering connection.
     *
     * @remarks
     *   The **ModifyVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](https://help.aliyun.com/document_detail/426100.html) operation to query the status of a VPC peering connection.
     *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being modified.
     *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is modified.
     * *   You cannot repeatedly call the **ModifyVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - ModifyVpcPeerConnectionRequest
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
     * Moves a Virtual Private Cloud (VPC) peering connection from one resource group to another.
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'MoveResourceGroup',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MoveResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Moves a Virtual Private Cloud (VPC) peering connection from one resource group to another.
     *
     * @param request - MoveResourceGroupRequest
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
     * 拒绝VPC对等连接.
     *
     * @remarks
     *   An acceptor VPC can reject a connection request from the requester VPC of a cross-account VPC peering connection. After the connection request is rejected, the VPC peering connection enters the **Rejected** state.
     * *   You cannot repeatedly call the **RejectVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - RejectVpcPeerConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'RejectVpcPeerConnection',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RejectVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RejectVpcPeerConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 拒绝VPC对等连接.
     *
     * @remarks
     *   An acceptor VPC can reject a connection request from the requester VPC of a cross-account VPC peering connection. After the connection request is rejected, the VPC peering connection enters the **Rejected** state.
     * *   You cannot repeatedly call the **RejectVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *
     * @param request - RejectVpcPeerConnectionRequest
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
     * Creates tags and adds them to a virtual private cloud (VPC) peering connection.
     *
     * @remarks
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following limits:
     * *   The keys of tags that are added to the same instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   Tag information is not shared across regions.
     *     For example, you cannot view the tags that are created in the China (Hangzhou) region from the China (Shanghai) region.
     * *   For the same account and region, tags added to different VPC peering connections are shared.
     *     For example, if a tag is added to a VPC peering connection, the tag can also be added to other VPC peering connections within the same account and region. You can modify the key and the value of a tag or remove a tag from an instance. After you delete an instance, all tags that are added to the instance are deleted.
     * *   You can add up to 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'TagResources',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates tags and adds them to a virtual private cloud (VPC) peering connection.
     *
     * @remarks
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following limits:
     * *   The keys of tags that are added to the same instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   Tag information is not shared across regions.
     *     For example, you cannot view the tags that are created in the China (Hangzhou) region from the China (Shanghai) region.
     * *   For the same account and region, tags added to different VPC peering connections are shared.
     *     For example, if a tag is added to a VPC peering connection, the tag can also be added to other VPC peering connections within the same account and region. You can modify the key and the value of a tag or remove a tag from an instance. After you delete an instance, all tags that are added to the instance are deleted.
     * *   You can add up to 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *
     * @param request - TagResourcesRequest
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
     * Removes tags from specified Virtual Private Cloud (VPC) peering connections.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UnTagResources',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from specified Virtual Private Cloud (VPC) peering connections.
     *
     * @param request - UnTagResourcesRequest
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
