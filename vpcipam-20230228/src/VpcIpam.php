<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamPoolCidrRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\AddIpamPoolCidrResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolAllocationResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamPoolResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\CreateIpamRequest;
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
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamScopeRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\DeleteIpamScopeResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolAllocationRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetIpamPoolAllocationResponse;
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
     * @param request - AddIpamPoolCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIpamPoolCidr',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddIpamPoolCidrResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - AddIpamPoolCidrRequest
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
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ChangeResourceGroup',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ChangeResourceGroupRequest
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
     * 创建IPAM实例。
     *
     * @param request - CreateIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateIpam',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIpamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建IPAM实例。
     *
     * @param request - CreateIpamRequest
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
     * @param request - CreateIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateIpamPool',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIpamPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateIpamPoolRequest
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
     * @param request - CreateIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateIpamPoolAllocation',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIpamPoolAllocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateIpamPoolAllocationRequest
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
     * @param request - CreateIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CreateIpamScope',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateIpamScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - CreateIpamScopeRequest
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
     * @param request - DeleteIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteIpam',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIpamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIpamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteIpamRequest
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
     * @param request - DeleteIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteIpamPool',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIpamPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteIpamPoolRequest
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
     * @param request - DeleteIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteIpamPoolAllocation',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIpamPoolAllocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteIpamPoolAllocationRequest
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
     * @param request - DeleteIpamPoolCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteIpamPoolCidr',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIpamPoolCidrResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteIpamPoolCidrRequest
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
     * @param request - DeleteIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DeleteIpamScope',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteIpamScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteIpamScopeRequest
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
     * 查询指定IPAM地址池CIDR分配的信息.
     *
     * @param request - GetIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIpamPoolAllocation',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIpamPoolAllocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询指定IPAM地址池CIDR分配的信息.
     *
     * @param request - GetIpamPoolAllocationRequest
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
     * 查询IPAM功能的开通状态。
     *
     * @param request - GetVpcIpamServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'GetVpcIpamServiceStatus',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVpcIpamServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVpcIpamServiceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询IPAM功能的开通状态。
     *
     * @param request - GetVpcIpamServiceStatusRequest
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
     * @param request - ListIpamDiscoveredResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamDiscoveredResource',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamDiscoveredResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamDiscoveredResourceRequest
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
     * @param request - ListIpamPoolAllocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamPoolAllocations',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamPoolAllocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamPoolAllocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamPoolAllocationsRequest
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
     * @param request - ListIpamPoolCidrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamPoolCidrs',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamPoolCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamPoolCidrsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamPoolCidrsRequest
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
     * @param request - ListIpamPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null !== $request->ipamPoolIds) {
            @$query['IpamPoolIds'] = $request->ipamPoolIds;
        }

        if (null !== $request->ipamPoolName) {
            @$query['IpamPoolName'] = $request->ipamPoolName;
        }

        if (null !== $request->ipamScopeId) {
            @$query['IpamScopeId'] = $request->ipamScopeId;
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
            'action'      => 'ListIpamPools',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamPoolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamPoolsRequest
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
     * @param request - ListIpamResourceCidrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamResourceCidrs',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamResourceCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamResourceCidrsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamResourceCidrsRequest
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
     * 查询ipam资源发现实例.
     *
     * @param request - ListIpamResourceDiscoveriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamResourceDiscoveries',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamResourceDiscoveriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamResourceDiscoveriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询ipam资源发现实例.
     *
     * @param request - ListIpamResourceDiscoveriesRequest
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
     * @param request - ListIpamScopesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpamScopes',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamScopesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamScopesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListIpamScopesRequest
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
     * 查询ipam.
     *
     * @param request - ListIpamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'ListIpams',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListIpamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIpamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询ipam.
     *
     * @param request - ListIpamsRequest
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
     * 查询资源标签列表.
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
            'action'      => 'ListTagResources',
            'version'     => '2023-02-28',
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
     * 查询资源标签列表.
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
     * 开通IPAM功能。
     *
     * @param request - OpenVpcIpamServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'OpenVpcIpamService',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return OpenVpcIpamServiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return OpenVpcIpamServiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开通IPAM功能。
     *
     * @param request - OpenVpcIpamServiceRequest
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
     * 为资源实例绑定资源标签.
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
            'action'      => 'TagResources',
            'version'     => '2023-02-28',
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
     * 为资源实例绑定资源标签.
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
     * 为资源解绑资源标签.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UntagResources',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 为资源解绑资源标签.
     *
     * @param request - UntagResourcesRequest
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
     * 更新ipam.
     *
     * @param request - UpdateIpamRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateIpam',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIpamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新ipam.
     *
     * @param request - UpdateIpamRequest
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
     * @param request - UpdateIpamPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateIpamPool',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIpamPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateIpamPoolRequest
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
     * 更新IPAM地址池分配信息.
     *
     * @param request - UpdateIpamPoolAllocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateIpamPoolAllocation',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIpamPoolAllocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新IPAM地址池分配信息.
     *
     * @param request - UpdateIpamPoolAllocationRequest
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
     * @param request - UpdateIpamScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'UpdateIpamScope',
            'version'     => '2023-02-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIpamScopeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateIpamScopeRequest
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
