<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamMembersRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamMembersResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamPoolCidrRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamPoolCidrResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AssociateIpamResourceDiscoveryRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AssociateIpamResourceDiscoveryResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolAllocationResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamResourceDiscoveryRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamResourceDiscoveryResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamScopeRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamScopeResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolAllocationResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolCidrRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolCidrResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamPoolResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamResourceDiscoveryRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamResourceDiscoveryResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamScopeRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamScopeResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DissociateIpamResourceDiscoveryRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DissociateIpamResourceDiscoveryResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolAllocationResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolNextAvailableCidrRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolNextAvailableCidrResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetVpcIpamServiceStatusRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetVpcIpamServiceStatusResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamDiscoveredResourceResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamMembersRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamMembersResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveryAssociationsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamScopesResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\OpenVpcIpamServiceRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\OpenVpcIpamServiceResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\RemoveIpamMembersRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\RemoveIpamMembersResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\TagResourcesRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\TagResourcesResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolAllocationResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamResourceDiscoveryRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamResourceDiscoveryResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamScopeRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamScopeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class VpcIpam extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vpcipam', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加ipam可信服务纳管成员.
     *
     * @param request - AddIpamMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpamMembersResponse
     *
     * @param AddIpamMembersRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddIpamMembersResponse
     */
    public function addIpamMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddIpamMembers',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpamMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加ipam可信服务纳管成员.
     *
     * @param request - AddIpamMembersRequest
     *
     * @returns AddIpamMembersResponse
     *
     * @param AddIpamMembersRequest $request
     *
     * @return AddIpamMembersResponse
     */
    public function addIpamMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpamMembersWithOptions($request, $runtime);
    }

    /**
     * Provisions a CIDR block to an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   Before you provision a CIDR block, make sure that an IPAM pool is created. You can call the **CreateIpamPool** operation to create an IPAM pool.
     * *   If no CIDR block is provisioned to a parent pool, you cannot provision CIDR blocks to its subpools.
     * *   If a CIDR block is provisioned to a parent pool, you can provision CIDR blocks to its subpools and the CIDR blocks must be subsets of the CIDR block provisioned to the parent pool.
     * *   If a CIDR block is provisioned to a parent pool and allocations are created, CIDR blocks provisioned to its subpools cannot overlap with existing allocated CIDR blocks.
     * *   You can provision CIDR blocks to a pool only in the region where the IPAM is hosted.
     * *   CIDR blocks provisioned to an IPAM pool cannot overlap with the CIDR blocks provisioned to other pools in the same scope.
     * *   A maximum of 1 CIDR block can be provisioned to a public IPv6 top-level pool, while up to 50 CIDR blocks can be provisioned to other types of address pools.
     *
     * @param request - AddIpamPoolCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddIpamPoolCidrResponse
     *
     * @param AddIpamPoolCidrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddIpamPoolCidrResponse
     */
    public function addIpamPoolCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->netmaskLength) {
            @$query['NetmaskLength'] = $request->netmaskLength;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddIpamPoolCidr',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provisions a CIDR block to an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   Before you provision a CIDR block, make sure that an IPAM pool is created. You can call the **CreateIpamPool** operation to create an IPAM pool.
     * *   If no CIDR block is provisioned to a parent pool, you cannot provision CIDR blocks to its subpools.
     * *   If a CIDR block is provisioned to a parent pool, you can provision CIDR blocks to its subpools and the CIDR blocks must be subsets of the CIDR block provisioned to the parent pool.
     * *   If a CIDR block is provisioned to a parent pool and allocations are created, CIDR blocks provisioned to its subpools cannot overlap with existing allocated CIDR blocks.
     * *   You can provision CIDR blocks to a pool only in the region where the IPAM is hosted.
     * *   CIDR blocks provisioned to an IPAM pool cannot overlap with the CIDR blocks provisioned to other pools in the same scope.
     * *   A maximum of 1 CIDR block can be provisioned to a public IPv6 top-level pool, while up to 50 CIDR blocks can be provisioned to other types of address pools.
     *
     * @param request - AddIpamPoolCidrRequest
     *
     * @returns AddIpamPoolCidrResponse
     *
     * @param AddIpamPoolCidrRequest $request
     *
     * @return AddIpamPoolCidrResponse
     */
    public function addIpamPoolCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpamPoolCidrWithOptions($request, $runtime);
    }

    /**
     * Associates resource discovery with an IPAM instance.
     *
     * @remarks
     *   The specified resource discovery instance can only be associated with one IPAM instance and associations cannot be duplicated.
     *
     * @param request - AssociateIpamResourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateIpamResourceDiscoveryResponse
     *
     * @param AssociateIpamResourceDiscoveryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return AssociateIpamResourceDiscoveryResponse
     */
    public function associateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateIpamResourceDiscovery',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateIpamResourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates resource discovery with an IPAM instance.
     *
     * @remarks
     *   The specified resource discovery instance can only be associated with one IPAM instance and associations cannot be duplicated.
     *
     * @param request - AssociateIpamResourceDiscoveryRequest
     *
     * @returns AssociateIpamResourceDiscoveryResponse
     *
     * @param AssociateIpamResourceDiscoveryRequest $request
     *
     * @return AssociateIpamResourceDiscoveryResponse
     */
    public function associateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group of an IPAM resource.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group of an IPAM resource.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
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
     * Creates an IP Address Manager (IPAM).
     *
     * @remarks
     * - You can create only one IPAM with each Alibaba Cloud account in each region.
     * - Only IPv4 IP addresses can be allocated.
     * - When you create an IPAM instance:
     *     - If there is no custom resource discovery in the region, the system creates a default resource discovery associated with the IPAM instance.
     *     - If there is a custom resource discovery in the region, the system converts it to a default resource discovery and associates it with the IPAM instance.
     *
     * @param request - CreateIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpamResponse
     *
     * @param CreateIpamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateIpamResponse
     */
    public function createIpamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamDescription) {
            @$query['IpamDescription'] = $request->ipamDescription;
        }

        if (null !== $request->ipamName) {
            @$query['IpamName'] = $request->ipamName;
        }

        if (null !== $request->operatingRegionList) {
            @$query['OperatingRegionList'] = $request->operatingRegionList;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpam',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IP Address Manager (IPAM).
     *
     * @remarks
     * - You can create only one IPAM with each Alibaba Cloud account in each region.
     * - Only IPv4 IP addresses can be allocated.
     * - When you create an IPAM instance:
     *     - If there is no custom resource discovery in the region, the system creates a default resource discovery associated with the IPAM instance.
     *     - If there is a custom resource discovery in the region, the system converts it to a default resource discovery and associates it with the IPAM instance.
     *
     * @param request - CreateIpamRequest
     *
     * @returns CreateIpamResponse
     *
     * @param CreateIpamRequest $request
     *
     * @return CreateIpamResponse
     */
    public function createIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamWithOptions($request, $runtime);
    }

    /**
     * Creates an IP Address Manager (IPAM) pool.
     *
     * @remarks
     * The number of public IPv6 IPAM top pool for a specific ISP that a user is allowed to create per region is limited to 1.
     *
     * @param request - CreateIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpamPoolResponse
     *
     * @param CreateIpamPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateIpamPoolResponse
     */
    public function createIpamPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationDefaultCidrMask) {
            @$query['AllocationDefaultCidrMask'] = $request->allocationDefaultCidrMask;
        }

        if (null !== $request->allocationMaxCidrMask) {
            @$query['AllocationMaxCidrMask'] = $request->allocationMaxCidrMask;
        }

        if (null !== $request->allocationMinCidrMask) {
            @$query['AllocationMinCidrMask'] = $request->allocationMinCidrMask;
        }

        if (null !== $request->autoImport) {
            @$query['AutoImport'] = $request->autoImport;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->ipamPoolDescription) {
            @$query['IpamPoolDescription'] = $request->ipamPoolDescription;
        }

        if (null !== $request->ipamPoolName) {
            @$query['IpamPoolName'] = $request->ipamPoolName;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
        }

        if (null !== $request->ipv6Isp) {
            @$query['Ipv6Isp'] = $request->ipv6Isp;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolRegionId) {
            @$query['PoolRegionId'] = $request->poolRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceIpamPoolId) {
            @$query['SourceIpamPoolId'] = $request->sourceIpamPoolId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpamPool',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IP Address Manager (IPAM) pool.
     *
     * @remarks
     * The number of public IPv6 IPAM top pool for a specific ISP that a user is allowed to create per region is limited to 1.
     *
     * @param request - CreateIpamPoolRequest
     *
     * @returns CreateIpamPoolResponse
     *
     * @param CreateIpamPoolRequest $request
     *
     * @return CreateIpamPoolResponse
     */
    public function createIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamPoolWithOptions($request, $runtime);
    }

    /**
     * Reserves a custom CIDR block from an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   Before you reserve a custom CIDR block, make sure that an IPAM pool is created and CIDR blocks are added to the pool. You can call **CreateIpamPool** to create an IPAM pool and call **AddIpamPoolCidr** to add CIDR blocks to the pool.
     * *   When you specify Cidr or CidrMask to reserve a custom CIDR block, the mask must fall within the range specified by the IPAM pool.
     * *   If the IPAM pool has the region attribute, you must reserve a custom CIDR block in the region to which the IPAM pool belongs.
     * *   The custom CIDR block that you want to reserve cannot overlap with existing CIDR blocks created from the IPAM pool.
     *
     * @param request - CreateIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpamPoolAllocationResponse
     *
     * @param CreateIpamPoolAllocationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIpamPoolAllocationResponse
     */
    public function createIpamPoolAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->cidrMask) {
            @$query['CidrMask'] = $request->cidrMask;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolAllocationDescription) {
            @$query['IpamPoolAllocationDescription'] = $request->ipamPoolAllocationDescription;
        }

        if (null !== $request->ipamPoolAllocationName) {
            @$query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpamPoolAllocation',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reserves a custom CIDR block from an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   Before you reserve a custom CIDR block, make sure that an IPAM pool is created and CIDR blocks are added to the pool. You can call **CreateIpamPool** to create an IPAM pool and call **AddIpamPoolCidr** to add CIDR blocks to the pool.
     * *   When you specify Cidr or CidrMask to reserve a custom CIDR block, the mask must fall within the range specified by the IPAM pool.
     * *   If the IPAM pool has the region attribute, you must reserve a custom CIDR block in the region to which the IPAM pool belongs.
     * *   The custom CIDR block that you want to reserve cannot overlap with existing CIDR blocks created from the IPAM pool.
     *
     * @param request - CreateIpamPoolAllocationRequest
     *
     * @returns CreateIpamPoolAllocationResponse
     *
     * @param CreateIpamPoolAllocationRequest $request
     *
     * @return CreateIpamPoolAllocationResponse
     */
    public function createIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * Creates a custom resource discovery instance.
     *
     * @remarks
     *   Each Alibaba Cloud account can create only one resource discovery instance in each region.
     * *   You can create only custom resource discovery instances.
     *
     * @param request - CreateIpamResourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpamResourceDiscoveryResponse
     *
     * @param CreateIpamResourceDiscoveryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateIpamResourceDiscoveryResponse
     */
    public function createIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamResourceDiscoveryDescription) {
            @$query['IpamResourceDiscoveryDescription'] = $request->ipamResourceDiscoveryDescription;
        }

        if (null !== $request->ipamResourceDiscoveryName) {
            @$query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }

        if (null !== $request->operatingRegionList) {
            @$query['OperatingRegionList'] = $request->operatingRegionList;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpamResourceDiscovery',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpamResourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom resource discovery instance.
     *
     * @remarks
     *   Each Alibaba Cloud account can create only one resource discovery instance in each region.
     * *   You can create only custom resource discovery instances.
     *
     * @param request - CreateIpamResourceDiscoveryRequest
     *
     * @returns CreateIpamResourceDiscoveryResponse
     *
     * @param CreateIpamResourceDiscoveryRequest $request
     *
     * @return CreateIpamResourceDiscoveryResponse
     */
    public function createIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Creates a public scope and private scope to respectively manage public and private IP addresses.
     *
     * @param request - CreateIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIpamScopeResponse
     *
     * @param CreateIpamScopeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateIpamScopeResponse
     */
    public function createIpamScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamScopeDescription) {
            @$query['IpamScopeDescription'] = $request->ipamScopeDescription;
        }

        if (null !== $request->ipamScopeName) {
            @$query['IpamScopeName'] = $request->ipamScopeName;
        }

        if (null !== $request->ipamScopeType) {
            @$query['IpamScopeType'] = $request->ipamScopeType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateIpamScope',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a public scope and private scope to respectively manage public and private IP addresses.
     *
     * @param request - CreateIpamScopeRequest
     *
     * @returns CreateIpamScopeResponse
     *
     * @param CreateIpamScopeRequest $request
     *
     * @return CreateIpamScopeResponse
     */
    public function createIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamScopeWithOptions($request, $runtime);
    }

    /**
     * Deletes an IP Address Manager (IPAM).
     *
     * @remarks
     * ## [](#)Prerequisites
     * *   Before you delete an IPAM, make sure that all IPAM pools of the IPAM are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     * *   Before you delete an IPAM, make sure that all IPAM scopes of the IPAM are deleted. You can call **DeleteIpamScope** to delete IPAM scopes.
     *
     * @param request - DeleteIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamResponse
     *
     * @param DeleteIpamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteIpamResponse
     */
    public function deleteIpamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpam',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an IP Address Manager (IPAM).
     *
     * @remarks
     * ## [](#)Prerequisites
     * *   Before you delete an IPAM, make sure that all IPAM pools of the IPAM are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     * *   Before you delete an IPAM, make sure that all IPAM scopes of the IPAM are deleted. You can call **DeleteIpamScope** to delete IPAM scopes.
     *
     * @param request - DeleteIpamRequest
     *
     * @returns DeleteIpamResponse
     *
     * @param DeleteIpamRequest $request
     *
     * @return DeleteIpamResponse
     */
    public function deleteIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamWithOptions($request, $runtime);
    }

    /**
     * Deletes an IP Address Manager (IPAM) scope.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Before you delete a parent pool, make sure that all subpools of the parent pool are deleted.
     * *   If an effective region is specified for a parent pool and IP addresses are allocated from the parent pool, you cannot delete the parent pool.
     * *   If an effective region is specified for a subpool and IP addresses are allocated from the subpool, you cannot delete the subpool.
     *
     * @param request - DeleteIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamPoolResponse
     *
     * @param DeleteIpamPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteIpamPoolResponse
     */
    public function deleteIpamPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpamPool',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an IP Address Manager (IPAM) scope.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   Before you delete a parent pool, make sure that all subpools of the parent pool are deleted.
     * *   If an effective region is specified for a parent pool and IP addresses are allocated from the parent pool, you cannot delete the parent pool.
     * *   If an effective region is specified for a subpool and IP addresses are allocated from the subpool, you cannot delete the subpool.
     *
     * @param request - DeleteIpamPoolRequest
     *
     * @returns DeleteIpamPoolResponse
     *
     * @param DeleteIpamPoolRequest $request
     *
     * @return DeleteIpamPoolResponse
     */
    public function deleteIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom reserved CIDR block from an IP Address Manager (IPAM) pool.
     *
     * @param request - DeleteIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamPoolAllocationResponse
     *
     * @param DeleteIpamPoolAllocationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteIpamPoolAllocationResponse
     */
    public function deleteIpamPoolAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolAllocationId) {
            @$query['IpamPoolAllocationId'] = $request->ipamPoolAllocationId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpamPoolAllocation',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom reserved CIDR block from an IP Address Manager (IPAM) pool.
     *
     * @param request - DeleteIpamPoolAllocationRequest
     *
     * @returns DeleteIpamPoolAllocationResponse
     *
     * @param DeleteIpamPoolAllocationRequest $request
     *
     * @return DeleteIpamPoolAllocationResponse
     */
    public function deleteIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * Deletes a CIDR block provisioned to an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   If CIDR blocks are provisioned to a parent pool and its subpools, you must first delete the CIDR blocks provisioned to the subpools before you delete the ones provisioned to the parent pool.
     * *   If CIDR blocks are provisioned only to the parent pool, directly delete them.
     * *   If CIDR blocks are allocated from provisioned ones, you must first delete the allocated CIDR blocks before you delete the provisioned ones.
     * *   You can delete CIDR blocks provisioned to an IPAM pool only in the region where the IPAM is hosted.
     *
     * @param request - DeleteIpamPoolCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamPoolCidrResponse
     *
     * @param DeleteIpamPoolCidrRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteIpamPoolCidrResponse
     */
    public function deleteIpamPoolCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpamPoolCidr',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a CIDR block provisioned to an IP Address Manager (IPAM) pool.
     *
     * @remarks
     *   If CIDR blocks are provisioned to a parent pool and its subpools, you must first delete the CIDR blocks provisioned to the subpools before you delete the ones provisioned to the parent pool.
     * *   If CIDR blocks are provisioned only to the parent pool, directly delete them.
     * *   If CIDR blocks are allocated from provisioned ones, you must first delete the allocated CIDR blocks before you delete the provisioned ones.
     * *   You can delete CIDR blocks provisioned to an IPAM pool only in the region where the IPAM is hosted.
     *
     * @param request - DeleteIpamPoolCidrRequest
     *
     * @returns DeleteIpamPoolCidrResponse
     *
     * @param DeleteIpamPoolCidrRequest $request
     *
     * @return DeleteIpamPoolCidrResponse
     */
    public function deleteIpamPoolCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolCidrWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom resource discovery instance.
     *
     * @remarks
     *   If a resource discovery instance is shared, it cannot be deleted.
     *
     * @param request - DeleteIpamResourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamResourceDiscoveryResponse
     *
     * @param DeleteIpamResourceDiscoveryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteIpamResourceDiscoveryResponse
     */
    public function deleteIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpamResourceDiscovery',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamResourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom resource discovery instance.
     *
     * @remarks
     *   If a resource discovery instance is shared, it cannot be deleted.
     *
     * @param request - DeleteIpamResourceDiscoveryRequest
     *
     * @returns DeleteIpamResourceDiscoveryResponse
     *
     * @param DeleteIpamResourceDiscoveryRequest $request
     *
     * @return DeleteIpamResourceDiscoveryResponse
     */
    public function deleteIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Deletes an IP Address Manager (IPAM) scope.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   You cannot delete the private scope and public scope created by the system.
     * *   Before you delete an IPAM scope, make sure that all pools within the scope are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     *
     * @param request - DeleteIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIpamScopeResponse
     *
     * @param DeleteIpamScopeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteIpamScopeResponse
     */
    public function deleteIpamScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteIpamScope',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an IP Address Manager (IPAM) scope.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   You cannot delete the private scope and public scope created by the system.
     * *   Before you delete an IPAM scope, make sure that all pools within the scope are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     *
     * @param request - DeleteIpamScopeRequest
     *
     * @returns DeleteIpamScopeResponse
     *
     * @param DeleteIpamScopeRequest $request
     *
     * @return DeleteIpamScopeResponse
     */
    public function deleteIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamScopeWithOptions($request, $runtime);
    }

    /**
     * Disassociates resource discovery and IPAM instances.
     *
     * @param request - DissociateIpamResourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateIpamResourceDiscoveryResponse
     *
     * @param DissociateIpamResourceDiscoveryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DissociateIpamResourceDiscoveryResponse
     */
    public function dissociateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DissociateIpamResourceDiscovery',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateIpamResourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates resource discovery and IPAM instances.
     *
     * @param request - DissociateIpamResourceDiscoveryRequest
     *
     * @returns DissociateIpamResourceDiscoveryResponse
     *
     * @param DissociateIpamResourceDiscoveryRequest $request
     *
     * @return DissociateIpamResourceDiscoveryResponse
     */
    public function dissociateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - GetIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIpamPoolAllocationResponse
     *
     * @param GetIpamPoolAllocationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetIpamPoolAllocationResponse
     */
    public function getIpamPoolAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIpamPoolAllocation',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - GetIpamPoolAllocationRequest
     *
     * @returns GetIpamPoolAllocationResponse
     *
     * @param GetIpamPoolAllocationRequest $request
     *
     * @return GetIpamPoolAllocationResponse
     */
    public function getIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * Gets the available CIDR blocks of the IPAM pool.
     *
     * @param request - GetIpamPoolNextAvailableCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIpamPoolNextAvailableCidrResponse
     *
     * @param GetIpamPoolNextAvailableCidrRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetIpamPoolNextAvailableCidrResponse
     */
    public function getIpamPoolNextAvailableCidrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIpamPoolNextAvailableCidr',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIpamPoolNextAvailableCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the available CIDR blocks of the IPAM pool.
     *
     * @param request - GetIpamPoolNextAvailableCidrRequest
     *
     * @returns GetIpamPoolNextAvailableCidrResponse
     *
     * @param GetIpamPoolNextAvailableCidrRequest $request
     *
     * @return GetIpamPoolNextAvailableCidrResponse
     */
    public function getIpamPoolNextAvailableCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpamPoolNextAvailableCidrWithOptions($request, $runtime);
    }

    /**
     * Queries whether IP Address Manager (IPAM) is activated.
     *
     * @param request - GetVpcIpamServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVpcIpamServiceStatusResponse
     *
     * @param GetVpcIpamServiceStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetVpcIpamServiceStatusResponse
     */
    public function getVpcIpamServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVpcIpamServiceStatus',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVpcIpamServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether IP Address Manager (IPAM) is activated.
     *
     * @param request - GetVpcIpamServiceStatusRequest
     *
     * @returns GetVpcIpamServiceStatusResponse
     *
     * @param GetVpcIpamServiceStatusRequest $request
     *
     * @return GetVpcIpamServiceStatusResponse
     */
    public function getVpcIpamServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcIpamServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries discovered resources.
     *
     * @param request - ListIpamDiscoveredResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamDiscoveredResourceResponse
     *
     * @param ListIpamDiscoveredResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListIpamDiscoveredResourceResponse
     */
    public function listIpamDiscoveredResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
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

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamDiscoveredResource',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries discovered resources.
     *
     * @param request - ListIpamDiscoveredResourceRequest
     *
     * @returns ListIpamDiscoveredResourceResponse
     *
     * @param ListIpamDiscoveredResourceRequest $request
     *
     * @return ListIpamDiscoveredResourceResponse
     */
    public function listIpamDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * 查询ipam可信服务纳管成员.
     *
     * @param request - ListIpamMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamMembersResponse
     *
     * @param ListIpamMembersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListIpamMembersResponse
     */
    public function listIpamMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->memberIds) {
            @$query['MemberIds'] = $request->memberIds;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamMembers',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询ipam可信服务纳管成员.
     *
     * @param request - ListIpamMembersRequest
     *
     * @returns ListIpamMembersResponse
     *
     * @param ListIpamMembersRequest $request
     *
     * @return ListIpamMembersResponse
     */
    public function listIpamMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamMembersWithOptions($request, $runtime);
    }

    /**
     * Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamPoolAllocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamPoolAllocationsResponse
     *
     * @param ListIpamPoolAllocationsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIpamPoolAllocationsResponse
     */
    public function listIpamPoolAllocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->ipamPoolAllocationIds) {
            @$query['IpamPoolAllocationIds'] = $request->ipamPoolAllocationIds;
        }

        if (null !== $request->ipamPoolAllocationName) {
            @$query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamPoolAllocations',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamPoolAllocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamPoolAllocationsRequest
     *
     * @returns ListIpamPoolAllocationsResponse
     *
     * @param ListIpamPoolAllocationsRequest $request
     *
     * @return ListIpamPoolAllocationsResponse
     */
    public function listIpamPoolAllocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolAllocationsWithOptions($request, $runtime);
    }

    /**
     * Queries CIDR blocks provisioned to an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamPoolCidrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamPoolCidrsResponse
     *
     * @param ListIpamPoolCidrsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListIpamPoolCidrsResponse
     */
    public function listIpamPoolCidrsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamPoolCidrs',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamPoolCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries CIDR blocks provisioned to an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamPoolCidrsRequest
     *
     * @returns ListIpamPoolCidrsResponse
     *
     * @param ListIpamPoolCidrsRequest $request
     *
     * @return ListIpamPoolCidrsResponse
     */
    public function listIpamPoolCidrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolCidrsWithOptions($request, $runtime);
    }

    /**
     * Queries IP Address Manager (IPAM) pools.
     *
     * @param request - ListIpamPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamPoolsResponse
     *
     * @param ListIpamPoolsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListIpamPoolsResponse
     */
    public function listIpamPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->ipamPoolIds) {
            @$query['IpamPoolIds'] = $request->ipamPoolIds;
        }

        if (null !== $request->ipamPoolName) {
            @$query['IpamPoolName'] = $request->ipamPoolName;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
        }

        if (null !== $request->ipv6Isp) {
            @$query['Ipv6Isp'] = $request->ipv6Isp;
        }

        if (null !== $request->isShared) {
            @$query['IsShared'] = $request->isShared;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->poolRegionId) {
            @$query['PoolRegionId'] = $request->poolRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceIpamPoolId) {
            @$query['SourceIpamPoolId'] = $request->sourceIpamPoolId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamPools',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries IP Address Manager (IPAM) pools.
     *
     * @param request - ListIpamPoolsRequest
     *
     * @returns ListIpamPoolsResponse
     *
     * @param ListIpamPoolsRequest $request
     *
     * @return ListIpamPoolsResponse
     */
    public function listIpamPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolsWithOptions($request, $runtime);
    }

    /**
     * Queries resources in an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamResourceCidrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamResourceCidrsResponse
     *
     * @param ListIpamResourceCidrsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListIpamResourceCidrsResponse
     */
    public function listIpamResourceCidrsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
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

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamResourceCidrs',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamResourceCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resources in an IP Address Manager (IPAM) pool.
     *
     * @param request - ListIpamResourceCidrsRequest
     *
     * @returns ListIpamResourceCidrsResponse
     *
     * @param ListIpamResourceCidrsRequest $request
     *
     * @return ListIpamResourceCidrsResponse
     */
    public function listIpamResourceCidrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceCidrsWithOptions($request, $runtime);
    }

    /**
     * Queries IPAM resource discovery instances.
     *
     * @param request - ListIpamResourceDiscoveriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamResourceDiscoveriesResponse
     *
     * @param ListIpamResourceDiscoveriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIpamResourceDiscoveriesResponse
     */
    public function listIpamResourceDiscoveriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamResourceDiscoveryIds) {
            @$query['IpamResourceDiscoveryIds'] = $request->ipamResourceDiscoveryIds;
        }

        if (null !== $request->ipamResourceDiscoveryName) {
            @$query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }

        if (null !== $request->isShared) {
            @$query['IsShared'] = $request->isShared;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamResourceDiscoveries',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamResourceDiscoveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries IPAM resource discovery instances.
     *
     * @param request - ListIpamResourceDiscoveriesRequest
     *
     * @returns ListIpamResourceDiscoveriesResponse
     *
     * @param ListIpamResourceDiscoveriesRequest $request
     *
     * @return ListIpamResourceDiscoveriesResponse
     */
    public function listIpamResourceDiscoveries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceDiscoveriesWithOptions($request, $runtime);
    }

    /**
     * Queries the association between resource discovery and IPAM.
     *
     * @param request - ListIpamResourceDiscoveryAssociationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamResourceDiscoveryAssociationsResponse
     *
     * @param ListIpamResourceDiscoveryAssociationsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListIpamResourceDiscoveryAssociationsResponse
     */
    public function listIpamResourceDiscoveryAssociationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamResourceDiscoveryAssociations',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamResourceDiscoveryAssociationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the association between resource discovery and IPAM.
     *
     * @param request - ListIpamResourceDiscoveryAssociationsRequest
     *
     * @returns ListIpamResourceDiscoveryAssociationsResponse
     *
     * @param ListIpamResourceDiscoveryAssociationsRequest $request
     *
     * @return ListIpamResourceDiscoveryAssociationsResponse
     */
    public function listIpamResourceDiscoveryAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceDiscoveryAssociationsWithOptions($request, $runtime);
    }

    /**
     * Queries IP Address Manager (IPAM) scopes.
     *
     * @param request - ListIpamScopesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamScopesResponse
     *
     * @param ListIpamScopesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListIpamScopesResponse
     */
    public function listIpamScopesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamScopeIds) {
            @$query['IpamScopeIds'] = $request->ipamScopeIds;
        }

        if (null !== $request->ipamScopeName) {
            @$query['IpamScopeName'] = $request->ipamScopeName;
        }

        if (null !== $request->ipamScopeType) {
            @$query['IpamScopeType'] = $request->ipamScopeType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpamScopes',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamScopesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries IP Address Manager (IPAM) scopes.
     *
     * @param request - ListIpamScopesRequest
     *
     * @returns ListIpamScopesResponse
     *
     * @param ListIpamScopesRequest $request
     *
     * @return ListIpamScopesResponse
     */
    public function listIpamScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamScopesWithOptions($request, $runtime);
    }

    /**
     * Queries IP Address Managers (IPAMs).
     *
     * @param request - ListIpamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIpamsResponse
     *
     * @param ListIpamsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListIpamsResponse
     */
    public function listIpamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipamIds) {
            @$query['IpamIds'] = $request->ipamIds;
        }

        if (null !== $request->ipamName) {
            @$query['IpamName'] = $request->ipamName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIpams',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIpamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries IP Address Managers (IPAMs).
     *
     * @param request - ListIpamsRequest
     *
     * @returns ListIpamsResponse
     *
     * @param ListIpamsRequest $request
     *
     * @return ListIpamsResponse
     */
    public function listIpams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of resource tags.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   You must specify **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2023-02-28',
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
     * Queries a list of resource tags.
     *
     * @remarks
     * ### [](#)Usage notes
     * *   You must specify **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * Activates IP Address Manager (IPAM).
     *
     * @param request - OpenVpcIpamServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenVpcIpamServiceResponse
     *
     * @param OpenVpcIpamServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OpenVpcIpamServiceResponse
     */
    public function openVpcIpamServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenVpcIpamService',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenVpcIpamServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates IP Address Manager (IPAM).
     *
     * @param request - OpenVpcIpamServiceRequest
     *
     * @returns OpenVpcIpamServiceResponse
     *
     * @param OpenVpcIpamServiceRequest $request
     *
     * @return OpenVpcIpamServiceResponse
     */
    public function openVpcIpamService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVpcIpamServiceWithOptions($request, $runtime);
    }

    /**
     * 移除ipam可信服务纳管成员.
     *
     * @param request - RemoveIpamMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveIpamMembersResponse
     *
     * @param RemoveIpamMembersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveIpamMembersResponse
     */
    public function removeIpamMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->members) {
            @$query['Members'] = $request->members;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveIpamMembers',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveIpamMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除ipam可信服务纳管成员.
     *
     * @param request - RemoveIpamMembersRequest
     *
     * @returns RemoveIpamMembersResponse
     *
     * @param RemoveIpamMembersRequest $request
     *
     * @return RemoveIpamMembersResponse
     */
    public function removeIpamMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpamMembersWithOptions($request, $runtime);
    }

    /**
     * Adds a tag to a resource.
     *
     * @remarks
     * ### [](#)Usage notes
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following items:
     * *   Each tag key that is added to an instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   You can add at most 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
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
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version' => '2023-02-28',
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
     * Adds a tag to a resource.
     *
     * @remarks
     * ### [](#)Usage notes
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following items:
     * *   Each tag key that is added to an instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   You can add at most 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
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
     * Removes a tag from a resource.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'action' => 'UntagResources',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a tag from a resource.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Updates an IP Address Manager (IPAM).
     *
     * @param request - UpdateIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpamResponse
     *
     * @param UpdateIpamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateIpamResponse
     */
    public function updateIpamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addOperatingRegion) {
            @$query['AddOperatingRegion'] = $request->addOperatingRegion;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamDescription) {
            @$query['IpamDescription'] = $request->ipamDescription;
        }

        if (null !== $request->ipamId) {
            @$query['IpamId'] = $request->ipamId;
        }

        if (null !== $request->ipamName) {
            @$query['IpamName'] = $request->ipamName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->removeOperatingRegion) {
            @$query['RemoveOperatingRegion'] = $request->removeOperatingRegion;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpam',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an IP Address Manager (IPAM).
     *
     * @param request - UpdateIpamRequest
     *
     * @returns UpdateIpamResponse
     *
     * @param UpdateIpamRequest $request
     *
     * @return UpdateIpamResponse
     */
    public function updateIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information about an IP Address Manager (IPAM) pool.
     *
     * @param request - UpdateIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpamPoolResponse
     *
     * @param UpdateIpamPoolRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateIpamPoolResponse
     */
    public function updateIpamPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationDefaultCidrMask) {
            @$query['AllocationDefaultCidrMask'] = $request->allocationDefaultCidrMask;
        }

        if (null !== $request->allocationMaxCidrMask) {
            @$query['AllocationMaxCidrMask'] = $request->allocationMaxCidrMask;
        }

        if (null !== $request->allocationMinCidrMask) {
            @$query['AllocationMinCidrMask'] = $request->allocationMinCidrMask;
        }

        if (null !== $request->autoImport) {
            @$query['AutoImport'] = $request->autoImport;
        }

        if (null !== $request->clearAllocationDefaultCidrMask) {
            @$query['ClearAllocationDefaultCidrMask'] = $request->clearAllocationDefaultCidrMask;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolDescription) {
            @$query['IpamPoolDescription'] = $request->ipamPoolDescription;
        }

        if (null !== $request->ipamPoolId) {
            @$query['IpamPoolId'] = $request->ipamPoolId;
        }

        if (null !== $request->ipamPoolName) {
            @$query['IpamPoolName'] = $request->ipamPoolName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpamPool',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information about an IP Address Manager (IPAM) pool.
     *
     * @param request - UpdateIpamPoolRequest
     *
     * @returns UpdateIpamPoolResponse
     *
     * @param UpdateIpamPoolRequest $request
     *
     * @return UpdateIpamPoolResponse
     */
    public function updateIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamPoolWithOptions($request, $runtime);
    }

    /**
     * Modifies CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - UpdateIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpamPoolAllocationResponse
     *
     * @param UpdateIpamPoolAllocationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateIpamPoolAllocationResponse
     */
    public function updateIpamPoolAllocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamPoolAllocationDescription) {
            @$query['IpamPoolAllocationDescription'] = $request->ipamPoolAllocationDescription;
        }

        if (null !== $request->ipamPoolAllocationId) {
            @$query['IpamPoolAllocationId'] = $request->ipamPoolAllocationId;
        }

        if (null !== $request->ipamPoolAllocationName) {
            @$query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpamPoolAllocation',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies CIDR block allocations of an IP Address Manager (IPAM) pool.
     *
     * @param request - UpdateIpamPoolAllocationRequest
     *
     * @returns UpdateIpamPoolAllocationResponse
     *
     * @param UpdateIpamPoolAllocationRequest $request
     *
     * @return UpdateIpamPoolAllocationResponse
     */
    public function updateIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * Modifies a resource discovery instance.
     *
     * @remarks
     *   You can add or remove effective regions only for custom resource discovery instances.
     * *   When removing effective regions from a resource discovery instance, the hosted region cannot be included.
     *
     * @param request - UpdateIpamResourceDiscoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpamResourceDiscoveryResponse
     *
     * @param UpdateIpamResourceDiscoveryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateIpamResourceDiscoveryResponse
     */
    public function updateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addOperatingRegion) {
            @$query['AddOperatingRegion'] = $request->addOperatingRegion;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamResourceDiscoveryDescription) {
            @$query['IpamResourceDiscoveryDescription'] = $request->ipamResourceDiscoveryDescription;
        }

        if (null !== $request->ipamResourceDiscoveryId) {
            @$query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }

        if (null !== $request->ipamResourceDiscoveryName) {
            @$query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->removeOperatingRegion) {
            @$query['RemoveOperatingRegion'] = $request->removeOperatingRegion;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpamResourceDiscovery',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpamResourceDiscoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a resource discovery instance.
     *
     * @remarks
     *   You can add or remove effective regions only for custom resource discovery instances.
     * *   When removing effective regions from a resource discovery instance, the hosted region cannot be included.
     *
     * @param request - UpdateIpamResourceDiscoveryRequest
     *
     * @returns UpdateIpamResourceDiscoveryResponse
     *
     * @param UpdateIpamResourceDiscoveryRequest $request
     *
     * @return UpdateIpamResourceDiscoveryResponse
     */
    public function updateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information about an IP Address Manager (IPAM) scope.
     *
     * @param request - UpdateIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpamScopeResponse
     *
     * @param UpdateIpamScopeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateIpamScopeResponse
     */
    public function updateIpamScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->ipamScopeDescription) {
            @$query['IpamScopeDescription'] = $request->ipamScopeDescription;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
        }

        if (null !== $request->ipamScopeName) {
            @$query['IpamScopeName'] = $request->ipamScopeName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpamScope',
            'version' => '2023-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information about an IP Address Manager (IPAM) scope.
     *
     * @param request - UpdateIpamScopeRequest
     *
     * @returns UpdateIpamScopeResponse
     *
     * @param UpdateIpamScopeRequest $request
     *
     * @return UpdateIpamScopeResponse
     */
    public function updateIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamScopeWithOptions($request, $runtime);
    }
}
