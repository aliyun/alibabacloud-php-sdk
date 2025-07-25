<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Provisions a CIDR block to an IP Address Manager (IPAM) pool.
     *  *
     * @description *   Before you provision a CIDR block, make sure that an IPAM pool is created. You can call the **CreateIpamPool** operation to create an IPAM pool.
     * *   If no CIDR block is provisioned to a parent pool, you cannot provision CIDR blocks to its subpools.
     * *   If a CIDR block is provisioned to a parent pool, you can provision CIDR blocks to its subpools and the CIDR blocks must be subsets of the CIDR block provisioned to the parent pool.
     * *   If a CIDR block is provisioned to a parent pool and allocations are created, CIDR blocks provisioned to its subpools cannot overlap with existing allocated CIDR blocks.
     * *   You can provision CIDR blocks to a pool only in the region where the IPAM is hosted.
     * *   CIDR blocks provisioned to an IPAM pool cannot overlap with the CIDR blocks provisioned to other pools in the same scope.
     * *   You can provision at most 50 CIDR blocks to each pool.
     *  *
     * @param AddIpamPoolCidrRequest $request AddIpamPoolCidrRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddIpamPoolCidrResponse AddIpamPoolCidrResponse
     */
    public function addIpamPoolCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->netmaskLength)) {
            $query['NetmaskLength'] = $request->netmaskLength;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Provisions a CIDR block to an IP Address Manager (IPAM) pool.
     *  *
     * @description *   Before you provision a CIDR block, make sure that an IPAM pool is created. You can call the **CreateIpamPool** operation to create an IPAM pool.
     * *   If no CIDR block is provisioned to a parent pool, you cannot provision CIDR blocks to its subpools.
     * *   If a CIDR block is provisioned to a parent pool, you can provision CIDR blocks to its subpools and the CIDR blocks must be subsets of the CIDR block provisioned to the parent pool.
     * *   If a CIDR block is provisioned to a parent pool and allocations are created, CIDR blocks provisioned to its subpools cannot overlap with existing allocated CIDR blocks.
     * *   You can provision CIDR blocks to a pool only in the region where the IPAM is hosted.
     * *   CIDR blocks provisioned to an IPAM pool cannot overlap with the CIDR blocks provisioned to other pools in the same scope.
     * *   You can provision at most 50 CIDR blocks to each pool.
     *  *
     * @param AddIpamPoolCidrRequest $request AddIpamPoolCidrRequest
     *
     * @return AddIpamPoolCidrResponse AddIpamPoolCidrResponse
     */
    public function addIpamPoolCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpamPoolCidrWithOptions($request, $runtime);
    }

    /**
     * @summary Associates resource discovery with an IPAM instance.
     *  *
     * @description *   The specified resource discovery instance can only be associated with one IPAM instance and associations cannot be duplicated.
     *  *
     * @param AssociateIpamResourceDiscoveryRequest $request AssociateIpamResourceDiscoveryRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateIpamResourceDiscoveryResponse AssociateIpamResourceDiscoveryResponse
     */
    public function associateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Associates resource discovery with an IPAM instance.
     *  *
     * @description *   The specified resource discovery instance can only be associated with one IPAM instance and associations cannot be duplicated.
     *  *
     * @param AssociateIpamResourceDiscoveryRequest $request AssociateIpamResourceDiscoveryRequest
     *
     * @return AssociateIpamResourceDiscoveryResponse AssociateIpamResourceDiscoveryResponse
     */
    public function associateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the resource group of an IPAM resource.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Changes the resource group of an IPAM resource.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an IP Address Manager (IPAM).
     *  *
     * @description - You can create only one IPAM with each Alibaba Cloud account in each region.
     * - Only IPv4 IP addresses can be allocated.
     * - When you create an IPAM instance:
     *     - If there is no custom resource discovery in the region, the system creates a default resource discovery associated with the IPAM instance.
     *     - If there is a custom resource discovery in the region, the system converts it to a default resource discovery and associates it with the IPAM instance.
     *  *
     * @param CreateIpamRequest $request CreateIpamRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpamResponse CreateIpamResponse
     */
    public function createIpamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamDescription)) {
            $query['IpamDescription'] = $request->ipamDescription;
        }
        if (!Utils::isUnset($request->ipamName)) {
            $query['IpamName'] = $request->ipamName;
        }
        if (!Utils::isUnset($request->operatingRegionList)) {
            $query['OperatingRegionList'] = $request->operatingRegionList;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an IP Address Manager (IPAM).
     *  *
     * @description - You can create only one IPAM with each Alibaba Cloud account in each region.
     * - Only IPv4 IP addresses can be allocated.
     * - When you create an IPAM instance:
     *     - If there is no custom resource discovery in the region, the system creates a default resource discovery associated with the IPAM instance.
     *     - If there is a custom resource discovery in the region, the system converts it to a default resource discovery and associates it with the IPAM instance.
     *  *
     * @param CreateIpamRequest $request CreateIpamRequest
     *
     * @return CreateIpamResponse CreateIpamResponse
     */
    public function createIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an IP Address Manager (IPAM) pool.
     *  *
     * @param CreateIpamPoolRequest $request CreateIpamPoolRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpamPoolResponse CreateIpamPoolResponse
     */
    public function createIpamPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationDefaultCidrMask)) {
            $query['AllocationDefaultCidrMask'] = $request->allocationDefaultCidrMask;
        }
        if (!Utils::isUnset($request->allocationMaxCidrMask)) {
            $query['AllocationMaxCidrMask'] = $request->allocationMaxCidrMask;
        }
        if (!Utils::isUnset($request->allocationMinCidrMask)) {
            $query['AllocationMinCidrMask'] = $request->allocationMinCidrMask;
        }
        if (!Utils::isUnset($request->autoImport)) {
            $query['AutoImport'] = $request->autoImport;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->ipamPoolDescription)) {
            $query['IpamPoolDescription'] = $request->ipamPoolDescription;
        }
        if (!Utils::isUnset($request->ipamPoolName)) {
            $query['IpamPoolName'] = $request->ipamPoolName;
        }
        if (!Utils::isUnset($request->ipamScopeId)) {
            $query['IpamScopeId'] = $request->ipamScopeId;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolRegionId)) {
            $query['PoolRegionId'] = $request->poolRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIpamPoolId)) {
            $query['SourceIpamPoolId'] = $request->sourceIpamPoolId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates an IP Address Manager (IPAM) pool.
     *  *
     * @param CreateIpamPoolRequest $request CreateIpamPoolRequest
     *
     * @return CreateIpamPoolResponse CreateIpamPoolResponse
     */
    public function createIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Reserves a custom CIDR block from an IP Address Manager (IPAM) pool.
     *  *
     * @description *   Before you reserve a custom CIDR block, make sure that an IPAM pool is created and CIDR blocks are added to the pool. You can call **CreateIpamPool** to create an IPAM pool and call **AddIpamPoolCidr** to add CIDR blocks to the pool.
     * *   When you specify Cidr or CidrMask to reserve a custom CIDR block, the mask must fall within the range specified by the IPAM pool.
     * *   If the IPAM pool has the region attribute, you must reserve a custom CIDR block in the region to which the IPAM pool belongs.
     * *   The custom CIDR block that you want to reserve cannot overlap with existing CIDR blocks created from the IPAM pool.
     *  *
     * @param CreateIpamPoolAllocationRequest $request CreateIpamPoolAllocationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpamPoolAllocationResponse CreateIpamPoolAllocationResponse
     */
    public function createIpamPoolAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->cidrMask)) {
            $query['CidrMask'] = $request->cidrMask;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationDescription)) {
            $query['IpamPoolAllocationDescription'] = $request->ipamPoolAllocationDescription;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationName)) {
            $query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Reserves a custom CIDR block from an IP Address Manager (IPAM) pool.
     *  *
     * @description *   Before you reserve a custom CIDR block, make sure that an IPAM pool is created and CIDR blocks are added to the pool. You can call **CreateIpamPool** to create an IPAM pool and call **AddIpamPoolCidr** to add CIDR blocks to the pool.
     * *   When you specify Cidr or CidrMask to reserve a custom CIDR block, the mask must fall within the range specified by the IPAM pool.
     * *   If the IPAM pool has the region attribute, you must reserve a custom CIDR block in the region to which the IPAM pool belongs.
     * *   The custom CIDR block that you want to reserve cannot overlap with existing CIDR blocks created from the IPAM pool.
     *  *
     * @param CreateIpamPoolAllocationRequest $request CreateIpamPoolAllocationRequest
     *
     * @return CreateIpamPoolAllocationResponse CreateIpamPoolAllocationResponse
     */
    public function createIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom resource discovery instance.
     *  *
     * @description *   Each Alibaba Cloud account can create only one resource discovery instance in each region.
     * *   You can create only custom resource discovery instances.
     *  *
     * @param CreateIpamResourceDiscoveryRequest $request CreateIpamResourceDiscoveryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpamResourceDiscoveryResponse CreateIpamResourceDiscoveryResponse
     */
    public function createIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryDescription)) {
            $query['IpamResourceDiscoveryDescription'] = $request->ipamResourceDiscoveryDescription;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryName)) {
            $query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }
        if (!Utils::isUnset($request->operatingRegionList)) {
            $query['OperatingRegionList'] = $request->operatingRegionList;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a custom resource discovery instance.
     *  *
     * @description *   Each Alibaba Cloud account can create only one resource discovery instance in each region.
     * *   You can create only custom resource discovery instances.
     *  *
     * @param CreateIpamResourceDiscoveryRequest $request CreateIpamResourceDiscoveryRequest
     *
     * @return CreateIpamResourceDiscoveryResponse CreateIpamResourceDiscoveryResponse
     */
    public function createIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a public scope and private scope to respectively manage public and private IP addresses.
     *  *
     * @param CreateIpamScopeRequest $request CreateIpamScopeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIpamScopeResponse CreateIpamScopeResponse
     */
    public function createIpamScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamScopeDescription)) {
            $query['IpamScopeDescription'] = $request->ipamScopeDescription;
        }
        if (!Utils::isUnset($request->ipamScopeName)) {
            $query['IpamScopeName'] = $request->ipamScopeName;
        }
        if (!Utils::isUnset($request->ipamScopeType)) {
            $query['IpamScopeType'] = $request->ipamScopeType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Creates a public scope and private scope to respectively manage public and private IP addresses.
     *  *
     * @param CreateIpamScopeRequest $request CreateIpamScopeRequest
     *
     * @return CreateIpamScopeResponse CreateIpamScopeResponse
     */
    public function createIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpamScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an IP Address Manager (IPAM).
     *  *
     * @description ## [](#)Prerequisites
     * *   Before you delete an IPAM, make sure that all IPAM pools of the IPAM are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     * *   Before you delete an IPAM, make sure that all IPAM scopes of the IPAM are deleted. You can call **DeleteIpamScope** to delete IPAM scopes.
     *  *
     * @param DeleteIpamRequest $request DeleteIpamRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamResponse DeleteIpamResponse
     */
    public function deleteIpamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes an IP Address Manager (IPAM).
     *  *
     * @description ## [](#)Prerequisites
     * *   Before you delete an IPAM, make sure that all IPAM pools of the IPAM are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     * *   Before you delete an IPAM, make sure that all IPAM scopes of the IPAM are deleted. You can call **DeleteIpamScope** to delete IPAM scopes.
     *  *
     * @param DeleteIpamRequest $request DeleteIpamRequest
     *
     * @return DeleteIpamResponse DeleteIpamResponse
     */
    public function deleteIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an IP Address Manager (IPAM) scope.
     *  *
     * @description ### [](#)Usage notes
     * *   Before you delete a parent pool, make sure that all subpools of the parent pool are deleted.
     * *   If an effective region is specified for a parent pool and IP addresses are allocated from the parent pool, you cannot delete the parent pool.
     * *   If an effective region is specified for a subpool and IP addresses are allocated from the subpool, you cannot delete the subpool.
     *  *
     * @param DeleteIpamPoolRequest $request DeleteIpamPoolRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamPoolResponse DeleteIpamPoolResponse
     */
    public function deleteIpamPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes an IP Address Manager (IPAM) scope.
     *  *
     * @description ### [](#)Usage notes
     * *   Before you delete a parent pool, make sure that all subpools of the parent pool are deleted.
     * *   If an effective region is specified for a parent pool and IP addresses are allocated from the parent pool, you cannot delete the parent pool.
     * *   If an effective region is specified for a subpool and IP addresses are allocated from the subpool, you cannot delete the subpool.
     *  *
     * @param DeleteIpamPoolRequest $request DeleteIpamPoolRequest
     *
     * @return DeleteIpamPoolResponse DeleteIpamPoolResponse
     */
    public function deleteIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom reserved CIDR block from an IP Address Manager (IPAM) pool.
     *  *
     * @param DeleteIpamPoolAllocationRequest $request DeleteIpamPoolAllocationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamPoolAllocationResponse DeleteIpamPoolAllocationResponse
     */
    public function deleteIpamPoolAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationId)) {
            $query['IpamPoolAllocationId'] = $request->ipamPoolAllocationId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes a custom reserved CIDR block from an IP Address Manager (IPAM) pool.
     *  *
     * @param DeleteIpamPoolAllocationRequest $request DeleteIpamPoolAllocationRequest
     *
     * @return DeleteIpamPoolAllocationResponse DeleteIpamPoolAllocationResponse
     */
    public function deleteIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a CIDR block provisioned to an IP Address Manager (IPAM) pool.
     *  *
     * @description *   If CIDR blocks are provisioned to a parent pool and its subpools, you must first delete the CIDR blocks provisioned to the subpools before you delete the ones provisioned to the parent pool.
     * *   If CIDR blocks are provisioned only to the parent pool, directly delete them.
     * *   If CIDR blocks are allocated from provisioned ones, you must first delete the allocated CIDR blocks before you delete the provisioned ones.
     * *   You can delete CIDR blocks provisioned to an IPAM pool only in the region where the IPAM is hosted.
     *  *
     * @param DeleteIpamPoolCidrRequest $request DeleteIpamPoolCidrRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamPoolCidrResponse DeleteIpamPoolCidrResponse
     */
    public function deleteIpamPoolCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes a CIDR block provisioned to an IP Address Manager (IPAM) pool.
     *  *
     * @description *   If CIDR blocks are provisioned to a parent pool and its subpools, you must first delete the CIDR blocks provisioned to the subpools before you delete the ones provisioned to the parent pool.
     * *   If CIDR blocks are provisioned only to the parent pool, directly delete them.
     * *   If CIDR blocks are allocated from provisioned ones, you must first delete the allocated CIDR blocks before you delete the provisioned ones.
     * *   You can delete CIDR blocks provisioned to an IPAM pool only in the region where the IPAM is hosted.
     *  *
     * @param DeleteIpamPoolCidrRequest $request DeleteIpamPoolCidrRequest
     *
     * @return DeleteIpamPoolCidrResponse DeleteIpamPoolCidrResponse
     */
    public function deleteIpamPoolCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamPoolCidrWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom resource discovery instance.
     *  *
     * @description *   If a resource discovery instance is shared, it cannot be deleted.
     *  *
     * @param DeleteIpamResourceDiscoveryRequest $request DeleteIpamResourceDiscoveryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamResourceDiscoveryResponse DeleteIpamResourceDiscoveryResponse
     */
    public function deleteIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes a custom resource discovery instance.
     *  *
     * @description *   If a resource discovery instance is shared, it cannot be deleted.
     *  *
     * @param DeleteIpamResourceDiscoveryRequest $request DeleteIpamResourceDiscoveryRequest
     *
     * @return DeleteIpamResourceDiscoveryResponse DeleteIpamResourceDiscoveryResponse
     */
    public function deleteIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an IP Address Manager (IPAM) scope.
     *  *
     * @description ### [](#)Usage notes
     * *   You cannot delete the private scope and public scope created by the system.
     * *   Before you delete an IPAM scope, make sure that all pools within the scope are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     *  *
     * @param DeleteIpamScopeRequest $request DeleteIpamScopeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamScopeResponse DeleteIpamScopeResponse
     */
    public function deleteIpamScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamScopeId)) {
            $query['IpamScopeId'] = $request->ipamScopeId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Deletes an IP Address Manager (IPAM) scope.
     *  *
     * @description ### [](#)Usage notes
     * *   You cannot delete the private scope and public scope created by the system.
     * *   Before you delete an IPAM scope, make sure that all pools within the scope are deleted. You can call **DeleteIpamPool** to delete IPAM pools.
     *  *
     * @param DeleteIpamScopeRequest $request DeleteIpamScopeRequest
     *
     * @return DeleteIpamScopeResponse DeleteIpamScopeResponse
     */
    public function deleteIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpamScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates resource discovery and IPAM instances.
     *  *
     * @param DissociateIpamResourceDiscoveryRequest $request DissociateIpamResourceDiscoveryRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateIpamResourceDiscoveryResponse DissociateIpamResourceDiscoveryResponse
     */
    public function dissociateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Disassociates resource discovery and IPAM instances.
     *  *
     * @param DissociateIpamResourceDiscoveryRequest $request DissociateIpamResourceDiscoveryRequest
     *
     * @return DissociateIpamResourceDiscoveryResponse DissociateIpamResourceDiscoveryResponse
     */
    public function dissociateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param GetIpamPoolAllocationRequest $request GetIpamPoolAllocationRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIpamPoolAllocationResponse GetIpamPoolAllocationResponse
     */
    public function getIpamPoolAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param GetIpamPoolAllocationRequest $request GetIpamPoolAllocationRequest
     *
     * @return GetIpamPoolAllocationResponse GetIpamPoolAllocationResponse
     */
    public function getIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * @summary Gets the available CIDR blocks of the IPAM pool.
     *  *
     * @param GetIpamPoolNextAvailableCidrRequest $request GetIpamPoolNextAvailableCidrRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIpamPoolNextAvailableCidrResponse GetIpamPoolNextAvailableCidrResponse
     */
    public function getIpamPoolNextAvailableCidrWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Gets the available CIDR blocks of the IPAM pool.
     *  *
     * @param GetIpamPoolNextAvailableCidrRequest $request GetIpamPoolNextAvailableCidrRequest
     *
     * @return GetIpamPoolNextAvailableCidrResponse GetIpamPoolNextAvailableCidrResponse
     */
    public function getIpamPoolNextAvailableCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIpamPoolNextAvailableCidrWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether IP Address Manager (IPAM) is activated.
     *  *
     * @param GetVpcIpamServiceStatusRequest $request GetVpcIpamServiceStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVpcIpamServiceStatusResponse GetVpcIpamServiceStatusResponse
     */
    public function getVpcIpamServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries whether IP Address Manager (IPAM) is activated.
     *  *
     * @param GetVpcIpamServiceStatusRequest $request GetVpcIpamServiceStatusRequest
     *
     * @return GetVpcIpamServiceStatusResponse GetVpcIpamServiceStatusResponse
     */
    public function getVpcIpamServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVpcIpamServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries discovered resources.
     *  *
     * @param ListIpamDiscoveredResourceRequest $request ListIpamDiscoveredResourceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamDiscoveredResourceResponse ListIpamDiscoveredResourceResponse
     */
    public function listIpamDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries discovered resources.
     *  *
     * @param ListIpamDiscoveredResourceRequest $request ListIpamDiscoveredResourceRequest
     *
     * @return ListIpamDiscoveredResourceResponse ListIpamDiscoveredResourceResponse
     */
    public function listIpamDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamPoolAllocationsRequest $request ListIpamPoolAllocationsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamPoolAllocationsResponse ListIpamPoolAllocationsResponse
     */
    public function listIpamPoolAllocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationIds)) {
            $query['IpamPoolAllocationIds'] = $request->ipamPoolAllocationIds;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationName)) {
            $query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamPoolAllocationsRequest $request ListIpamPoolAllocationsRequest
     *
     * @return ListIpamPoolAllocationsResponse ListIpamPoolAllocationsResponse
     */
    public function listIpamPoolAllocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolAllocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries CIDR blocks provisioned to an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamPoolCidrsRequest $request ListIpamPoolCidrsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamPoolCidrsResponse ListIpamPoolCidrsResponse
     */
    public function listIpamPoolCidrsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidr)) {
            $query['Cidr'] = $request->cidr;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries CIDR blocks provisioned to an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamPoolCidrsRequest $request ListIpamPoolCidrsRequest
     *
     * @return ListIpamPoolCidrsResponse ListIpamPoolCidrsResponse
     */
    public function listIpamPoolCidrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolCidrsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP Address Manager (IPAM) pools.
     *  *
     * @param ListIpamPoolsRequest $request ListIpamPoolsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamPoolsResponse ListIpamPoolsResponse
     */
    public function listIpamPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->ipamPoolIds)) {
            $query['IpamPoolIds'] = $request->ipamPoolIds;
        }
        if (!Utils::isUnset($request->ipamPoolName)) {
            $query['IpamPoolName'] = $request->ipamPoolName;
        }
        if (!Utils::isUnset($request->ipamScopeId)) {
            $query['IpamScopeId'] = $request->ipamScopeId;
        }
        if (!Utils::isUnset($request->ipv6Isp)) {
            $query['Ipv6Isp'] = $request->ipv6Isp;
        }
        if (!Utils::isUnset($request->isShared)) {
            $query['IsShared'] = $request->isShared;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->poolRegionId)) {
            $query['PoolRegionId'] = $request->poolRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIpamPoolId)) {
            $query['SourceIpamPoolId'] = $request->sourceIpamPoolId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries IP Address Manager (IPAM) pools.
     *  *
     * @param ListIpamPoolsRequest $request ListIpamPoolsRequest
     *
     * @return ListIpamPoolsResponse ListIpamPoolsResponse
     */
    public function listIpamPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamPoolsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries resources in an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamResourceCidrsRequest $request ListIpamResourceCidrsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamResourceCidrsResponse ListIpamResourceCidrsResponse
     */
    public function listIpamResourceCidrsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->ipamScopeId)) {
            $query['IpamScopeId'] = $request->ipamScopeId;
        }
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries resources in an IP Address Manager (IPAM) pool.
     *  *
     * @param ListIpamResourceCidrsRequest $request ListIpamResourceCidrsRequest
     *
     * @return ListIpamResourceCidrsResponse ListIpamResourceCidrsResponse
     */
    public function listIpamResourceCidrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceCidrsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IPAM resource discovery instances.
     *  *
     * @param ListIpamResourceDiscoveriesRequest $request ListIpamResourceDiscoveriesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamResourceDiscoveriesResponse ListIpamResourceDiscoveriesResponse
     */
    public function listIpamResourceDiscoveriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamResourceDiscoveryIds)) {
            $query['IpamResourceDiscoveryIds'] = $request->ipamResourceDiscoveryIds;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryName)) {
            $query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }
        if (!Utils::isUnset($request->isShared)) {
            $query['IsShared'] = $request->isShared;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries IPAM resource discovery instances.
     *  *
     * @param ListIpamResourceDiscoveriesRequest $request ListIpamResourceDiscoveriesRequest
     *
     * @return ListIpamResourceDiscoveriesResponse ListIpamResourceDiscoveriesResponse
     */
    public function listIpamResourceDiscoveries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceDiscoveriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the association between resource discovery and IPAM.
     *  *
     * @param ListIpamResourceDiscoveryAssociationsRequest $request ListIpamResourceDiscoveryAssociationsRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamResourceDiscoveryAssociationsResponse ListIpamResourceDiscoveryAssociationsResponse
     */
    public function listIpamResourceDiscoveryAssociationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries the association between resource discovery and IPAM.
     *  *
     * @param ListIpamResourceDiscoveryAssociationsRequest $request ListIpamResourceDiscoveryAssociationsRequest
     *
     * @return ListIpamResourceDiscoveryAssociationsResponse ListIpamResourceDiscoveryAssociationsResponse
     */
    public function listIpamResourceDiscoveryAssociations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamResourceDiscoveryAssociationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP Address Manager (IPAM) scopes.
     *  *
     * @param ListIpamScopesRequest $request ListIpamScopesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamScopesResponse ListIpamScopesResponse
     */
    public function listIpamScopesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamScopeIds)) {
            $query['IpamScopeIds'] = $request->ipamScopeIds;
        }
        if (!Utils::isUnset($request->ipamScopeName)) {
            $query['IpamScopeName'] = $request->ipamScopeName;
        }
        if (!Utils::isUnset($request->ipamScopeType)) {
            $query['IpamScopeType'] = $request->ipamScopeType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries IP Address Manager (IPAM) scopes.
     *  *
     * @param ListIpamScopesRequest $request ListIpamScopesRequest
     *
     * @return ListIpamScopesResponse ListIpamScopesResponse
     */
    public function listIpamScopes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamScopesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries IP Address Managers (IPAMs).
     *  *
     * @param ListIpamsRequest $request ListIpamsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamsResponse ListIpamsResponse
     */
    public function listIpamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamIds)) {
            $query['IpamIds'] = $request->ipamIds;
        }
        if (!Utils::isUnset($request->ipamName)) {
            $query['IpamName'] = $request->ipamName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Queries IP Address Managers (IPAMs).
     *  *
     * @param ListIpamsRequest $request ListIpamsRequest
     *
     * @return ListIpamsResponse ListIpamsResponse
     */
    public function listIpams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpamsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of resource tags.
     *  *
     * @description ### [](#)Usage notes
     * *   You must specify **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *  *
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
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
     * @summary Queries a list of resource tags.
     *  *
     * @description ### [](#)Usage notes
     * *   You must specify **ResourceId.N** or **Tag.N** that consists of **Tag.N.Key** and **Tag.N.Value** in the request to specify the object that you want to query.
     * *   **Tag.N** is a resource tag that consists of a key-value pair. If you specify only **Tag.N.Key**, all tag values that are associated with the specified key are returned. If you specify only **Tag.N.Value**, an error message is returned.
     * *   If you specify **Tag.N** and **ResourceId.N** to filter tags, **ResourceId.N** must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *  *
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
     * @summary Activates IP Address Manager (IPAM).
     *  *
     * @param OpenVpcIpamServiceRequest $request OpenVpcIpamServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenVpcIpamServiceResponse OpenVpcIpamServiceResponse
     */
    public function openVpcIpamServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Activates IP Address Manager (IPAM).
     *  *
     * @param OpenVpcIpamServiceRequest $request OpenVpcIpamServiceRequest
     *
     * @return OpenVpcIpamServiceResponse OpenVpcIpamServiceResponse
     */
    public function openVpcIpamService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVpcIpamServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a tag to a resource.
     *  *
     * @description ### [](#)Usage notes
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following items:
     * *   Each tag key that is added to an instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   You can add at most 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
     * @summary Adds a tag to a resource.
     *  *
     * @description ### [](#)Usage notes
     * Tags are used to classify instances. Each tag consists of a key-value pair. Before you use tags, take note of the following items:
     * *   Each tag key that is added to an instance must be unique.
     * *   You cannot create tags without adding them to instances. All tags must be added to instances.
     * *   You can add at most 20 tags to each instance. Before you add a tag to an instance, the system automatically checks the number of existing tags. An error message is returned if the maximum number of tags is reached.
     *  *
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
     * @summary Removes a tag from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
     * @summary Removes a tag from a resource.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates an IP Address Manager (IPAM).
     *  *
     * @param UpdateIpamRequest $request UpdateIpamRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpamResponse UpdateIpamResponse
     */
    public function updateIpamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addOperatingRegion)) {
            $query['AddOperatingRegion'] = $request->addOperatingRegion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamDescription)) {
            $query['IpamDescription'] = $request->ipamDescription;
        }
        if (!Utils::isUnset($request->ipamId)) {
            $query['IpamId'] = $request->ipamId;
        }
        if (!Utils::isUnset($request->ipamName)) {
            $query['IpamName'] = $request->ipamName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removeOperatingRegion)) {
            $query['RemoveOperatingRegion'] = $request->removeOperatingRegion;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Updates an IP Address Manager (IPAM).
     *  *
     * @param UpdateIpamRequest $request UpdateIpamRequest
     *
     * @return UpdateIpamResponse UpdateIpamResponse
     */
    public function updateIpam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about an IP Address Manager (IPAM) pool.
     *  *
     * @param UpdateIpamPoolRequest $request UpdateIpamPoolRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpamPoolResponse UpdateIpamPoolResponse
     */
    public function updateIpamPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationDefaultCidrMask)) {
            $query['AllocationDefaultCidrMask'] = $request->allocationDefaultCidrMask;
        }
        if (!Utils::isUnset($request->allocationMaxCidrMask)) {
            $query['AllocationMaxCidrMask'] = $request->allocationMaxCidrMask;
        }
        if (!Utils::isUnset($request->allocationMinCidrMask)) {
            $query['AllocationMinCidrMask'] = $request->allocationMinCidrMask;
        }
        if (!Utils::isUnset($request->autoImport)) {
            $query['AutoImport'] = $request->autoImport;
        }
        if (!Utils::isUnset($request->clearAllocationDefaultCidrMask)) {
            $query['ClearAllocationDefaultCidrMask'] = $request->clearAllocationDefaultCidrMask;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolDescription)) {
            $query['IpamPoolDescription'] = $request->ipamPoolDescription;
        }
        if (!Utils::isUnset($request->ipamPoolId)) {
            $query['IpamPoolId'] = $request->ipamPoolId;
        }
        if (!Utils::isUnset($request->ipamPoolName)) {
            $query['IpamPoolName'] = $request->ipamPoolName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the basic information about an IP Address Manager (IPAM) pool.
     *  *
     * @param UpdateIpamPoolRequest $request UpdateIpamPoolRequest
     *
     * @return UpdateIpamPoolResponse UpdateIpamPoolResponse
     */
    public function updateIpamPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param UpdateIpamPoolAllocationRequest $request UpdateIpamPoolAllocationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpamPoolAllocationResponse UpdateIpamPoolAllocationResponse
     */
    public function updateIpamPoolAllocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationDescription)) {
            $query['IpamPoolAllocationDescription'] = $request->ipamPoolAllocationDescription;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationId)) {
            $query['IpamPoolAllocationId'] = $request->ipamPoolAllocationId;
        }
        if (!Utils::isUnset($request->ipamPoolAllocationName)) {
            $query['IpamPoolAllocationName'] = $request->ipamPoolAllocationName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies CIDR block allocations of an IP Address Manager (IPAM) pool.
     *  *
     * @param UpdateIpamPoolAllocationRequest $request UpdateIpamPoolAllocationRequest
     *
     * @return UpdateIpamPoolAllocationResponse UpdateIpamPoolAllocationResponse
     */
    public function updateIpamPoolAllocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamPoolAllocationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a resource discovery instance.
     *  *
     * @description *   You can add or remove effective regions only for custom resource discovery instances.
     * *   When removing effective regions from a resource discovery instance, the hosted region cannot be included.
     *  *
     * @param UpdateIpamResourceDiscoveryRequest $request UpdateIpamResourceDiscoveryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpamResourceDiscoveryResponse UpdateIpamResourceDiscoveryResponse
     */
    public function updateIpamResourceDiscoveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addOperatingRegion)) {
            $query['AddOperatingRegion'] = $request->addOperatingRegion;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryDescription)) {
            $query['IpamResourceDiscoveryDescription'] = $request->ipamResourceDiscoveryDescription;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryId)) {
            $query['IpamResourceDiscoveryId'] = $request->ipamResourceDiscoveryId;
        }
        if (!Utils::isUnset($request->ipamResourceDiscoveryName)) {
            $query['IpamResourceDiscoveryName'] = $request->ipamResourceDiscoveryName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removeOperatingRegion)) {
            $query['RemoveOperatingRegion'] = $request->removeOperatingRegion;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies a resource discovery instance.
     *  *
     * @description *   You can add or remove effective regions only for custom resource discovery instances.
     * *   When removing effective regions from a resource discovery instance, the hosted region cannot be included.
     *  *
     * @param UpdateIpamResourceDiscoveryRequest $request UpdateIpamResourceDiscoveryRequest
     *
     * @return UpdateIpamResourceDiscoveryResponse UpdateIpamResourceDiscoveryResponse
     */
    public function updateIpamResourceDiscovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamResourceDiscoveryWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about an IP Address Manager (IPAM) scope.
     *  *
     * @param UpdateIpamScopeRequest $request UpdateIpamScopeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIpamScopeResponse UpdateIpamScopeResponse
     */
    public function updateIpamScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ipamScopeDescription)) {
            $query['IpamScopeDescription'] = $request->ipamScopeDescription;
        }
        if (!Utils::isUnset($request->ipamScopeId)) {
            $query['IpamScopeId'] = $request->ipamScopeId;
        }
        if (!Utils::isUnset($request->ipamScopeName)) {
            $query['IpamScopeName'] = $request->ipamScopeName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary Modifies the basic information about an IP Address Manager (IPAM) scope.
     *  *
     * @param UpdateIpamScopeRequest $request UpdateIpamScopeRequest
     *
     * @return UpdateIpamScopeResponse UpdateIpamScopeResponse
     */
    public function updateIpamScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpamScopeWithOptions($request, $runtime);
    }
}
