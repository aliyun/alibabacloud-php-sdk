<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * *   For a cross-account VPC peering connection, the connection is activated only after the accepter VPC accepts the connection request.
     *   * *   **AcceptVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the operation in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of the task.
     *   *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being activated.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is activated.
     *   * *   You cannot repeatedly call the **AcceptVpcPeerConnection** operation within a specific period of time.
     *   *
     * @param AcceptVpcPeerConnectionRequest $request AcceptVpcPeerConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptVpcPeerConnectionResponse AcceptVpcPeerConnectionResponse
     */
    public function acceptVpcPeerConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return AcceptVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   For a cross-account VPC peering connection, the connection is activated only after the accepter VPC accepts the connection request.
     *   * *   **AcceptVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a **request ID** and runs the operation in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of the task.
     *   *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being activated.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is activated.
     *   * *   You cannot repeatedly call the **AcceptVpcPeerConnection** operation within a specific period of time.
     *   *
     * @param AcceptVpcPeerConnectionRequest $request AcceptVpcPeerConnectionRequest
     *
     * @return AcceptVpcPeerConnectionResponse AcceptVpcPeerConnectionResponse
     */
    public function acceptVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Before you create a VPC peering connection, make sure that the following requirements are met:
     *   * *   Cloud Data Transfer (CDT) is activated to manage the billing of intra-border data transfers. To activate CDT, call the [OpenCdtService](~~337842~~) operation.
     *   * *   **CreateVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and an **instance ID** and runs the task in the background. You can call the [GetVpcPeerConnectionAttribute](~~426095~~) operation to query the status of the task.
     *   *     *   If a VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *   *     *   If a VPC peering connection is in the **Accepting** state, the VPC peering connection is created across accounts and the accepter is accepting the VPC peering connection.
     *   * *   You cannot repeatedly call the **CreateVpcPeerConnection** operation within a specific period of time.
     *   *
     * @param CreateVpcPeerConnectionRequest $request CreateVpcPeerConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVpcPeerConnectionResponse CreateVpcPeerConnectionResponse
     */
    public function createVpcPeerConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acceptingAliUid)) {
            $body['AcceptingAliUid'] = $request->acceptingAliUid;
        }
        if (!Utils::isUnset($request->acceptingRegionId)) {
            $body['AcceptingRegionId'] = $request->acceptingRegionId;
        }
        if (!Utils::isUnset($request->acceptingVpcId)) {
            $body['AcceptingVpcId'] = $request->acceptingVpcId;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return CreateVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you create a VPC peering connection, make sure that the following requirements are met:
     *   * *   Cloud Data Transfer (CDT) is activated to manage the billing of intra-border data transfers. To activate CDT, call the [OpenCdtService](~~337842~~) operation.
     *   * *   **CreateVpcPeerConnection** is an asynchronous operation. After a request is sent, the system returns a request ID and an **instance ID** and runs the task in the background. You can call the [GetVpcPeerConnectionAttribute](~~426095~~) operation to query the status of the task.
     *   *     *   If a VPC peering connection is in the **Creating** state, the VPC peering connection is being created.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is created.
     *   *     *   If a VPC peering connection is in the **Accepting** state, the VPC peering connection is created across accounts and the accepter is accepting the VPC peering connection.
     *   * *   You cannot repeatedly call the **CreateVpcPeerConnection** operation within a specific period of time.
     *   *
     * @param CreateVpcPeerConnectionRequest $request CreateVpcPeerConnectionRequest
     *
     * @return CreateVpcPeerConnectionResponse CreateVpcPeerConnectionResponse
     */
    public function createVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * *   You can delete VPC peering connections. After you delete a VPC peering connection, your service is affected. Proceed with caution.
     *   *     *   If you forcefully delete a VPC peering connection, the system deletes the routes that point to the VPC peering connection from the VPC route table.
     *   *     *   If you do not forcefully delete a VPC peering connection, the system does not delete these routes. You must manually delete them.
     *   * *   The **DeleteVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of a VPC peering connection.
     *   *     *   If a VPC peering connection is in the **Deleting** state, it is being deleted.
     *   *     *   If a VPC peering connection is in the **Deleted** state, it is deleted.
     *   * *   You cannot repeatedly call the **DeleteVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param DeleteVpcPeerConnectionRequest $request DeleteVpcPeerConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVpcPeerConnectionResponse DeleteVpcPeerConnectionResponse
     */
    public function deleteVpcPeerConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->force)) {
            $body['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return DeleteVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can delete VPC peering connections. After you delete a VPC peering connection, your service is affected. Proceed with caution.
     *   *     *   If you forcefully delete a VPC peering connection, the system deletes the routes that point to the VPC peering connection from the VPC route table.
     *   *     *   If you do not forcefully delete a VPC peering connection, the system does not delete these routes. You must manually delete them.
     *   * *   The **DeleteVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of a VPC peering connection.
     *   *     *   If a VPC peering connection is in the **Deleting** state, it is being deleted.
     *   *     *   If a VPC peering connection is in the **Deleted** state, it is deleted.
     *   * *   You cannot repeatedly call the **DeleteVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param DeleteVpcPeerConnectionRequest $request DeleteVpcPeerConnectionRequest
     *
     * @return DeleteVpcPeerConnectionResponse DeleteVpcPeerConnectionResponse
     */
    public function deleteVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetVpcPeerConnectionAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetVpcPeerConnectionAttributeResponse
     */
    public function getVpcPeerConnectionAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return GetVpcPeerConnectionAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     *   * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you set only **Tag.N.Value**, an error message is returned.
     *   * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     *   * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Set **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object to be queried.
     *   * *   **Tag.N** is a resource tag that consists of a key-value pair. If you set only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you set only **Tag.N.Value**, an error message is returned.
     *   * *   If you set **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     *   * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *   *
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
     * @param ListVpcPeerConnectionsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListVpcPeerConnectionsResponse
     */
    public function listVpcPeerConnectionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListVpcPeerConnectionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->vpcId)) {
            $request->vpcIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vpcId, 'VpcId', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcIdShrink)) {
            $body['VpcId'] = $request->vpcIdShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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

        return ListVpcPeerConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   The **ModifyVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of a VPC peering connection.
     *   *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being modified.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is modified.
     *   * *   You cannot repeatedly call the **ModifyVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param ModifyVpcPeerConnectionRequest $request ModifyVpcPeerConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVpcPeerConnectionResponse ModifyVpcPeerConnectionResponse
     */
    public function modifyVpcPeerConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $body['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return ModifyVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The **ModifyVpcPeerConnection** operation is asynchronous. After you send a request, the system returns **RequestId**, but the operation is still being performed in the background. You can call the [GetVpcPeerConnectionAttribute](~~426100~~) operation to query the status of a VPC peering connection.
     *   *     *   If a VPC peering connection is in the **Updating** state, the VPC peering connection is being modified.
     *   *     *   If a VPC peering connection is in the **Activated** state, the VPC peering connection is modified.
     *   * *   You cannot repeatedly call the **ModifyVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param ModifyVpcPeerConnectionRequest $request ModifyVpcPeerConnectionRequest
     *
     * @return ModifyVpcPeerConnectionResponse ModifyVpcPeerConnectionResponse
     */
    public function modifyVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   An acceptor VPC can reject a connection request from the requester VPC of a cross-account VPC peering connection. After the connection request is rejected, the VPC peering connection enters the **Rejected** state.
     *   * *   You cannot repeatedly call the **RejectVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param RejectVpcPeerConnectionRequest $request RejectVpcPeerConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RejectVpcPeerConnectionResponse RejectVpcPeerConnectionResponse
     */
    public function rejectVpcPeerConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $body['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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

        return RejectVpcPeerConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   An acceptor VPC can reject a connection request from the requester VPC of a cross-account VPC peering connection. After the connection request is rejected, the VPC peering connection enters the **Rejected** state.
     *   * *   You cannot repeatedly call the **RejectVpcPeerConnection** operation for the same VPC peering connection within the specified period of time.
     *   *
     * @param RejectVpcPeerConnectionRequest $request RejectVpcPeerConnectionRequest
     *
     * @return RejectVpcPeerConnectionResponse RejectVpcPeerConnectionResponse
     */
    public function rejectVpcPeerConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rejectVpcPeerConnectionWithOptions($request, $runtime);
    }

    /**
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following limits:
     *   * *   The keys of tags that are added to the same instance must be unique.
     *   * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     *   * *   Tag information is not shared across regions.
     *   *     For example, you cannot view the tags that are created in the China (Hangzhou) region from the China (Shanghai) region.
     *   * *   For the same account and region, tags added to different VPC peering connections are shared.
     *   *     For example, if a tag is added to a VPC peering connection, the tag can also be added to other VPC peering connections within the same account and region. You can modify the key and the value of a tag or remove a tag from an instance. After you delete an instance, all tags that are added to the instance are deleted.
     *   * *   You can add up to 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following limits:
     *   * *   The keys of tags that are added to the same instance must be unique.
     *   * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     *   * *   Tag information is not shared across regions.
     *   *     For example, you cannot view the tags that are created in the China (Hangzhou) region from the China (Shanghai) region.
     *   * *   For the same account and region, tags added to different VPC peering connections are shared.
     *   *     For example, if a tag is added to a VPC peering connection, the tag can also be added to other VPC peering connections within the same account and region. You can modify the key and the value of a tag or remove a tag from an instance. After you delete an instance, all tags that are added to the instance are deleted.
     *   * *   You can add up to 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
