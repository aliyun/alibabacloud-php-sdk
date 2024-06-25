<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetVpcIpamServiceStatusRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\GetVpcIpamServiceStatusResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolAllocationsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolCidrsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponse;
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
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolRequest;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamPoolResponse;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\UpdateIpamRequest;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return AddIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 创建IPAM实例。
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建IPAM实例。
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sourceIpamPoolId)) {
            $query['SourceIpamPoolId'] = $request->sourceIpamPoolId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return CreateIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return CreateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DeleteIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DeleteIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteIpamPoolAllocationRequest $request DeleteIpamPoolAllocationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIpamPoolAllocationResponse DeleteIpamPoolAllocationResponse
     */
    public function deleteIpamPoolAllocationWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ipamPoolAllocationId)) {
            $query['IpamPoolAllocationId'] = $request->ipamPoolAllocationId;
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

        return DeleteIpamPoolAllocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DeleteIpamPoolCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return DeleteIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 查询IPAM功能的开通状态。
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

        return GetVpcIpamServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询IPAM功能的开通状态。
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

        return ListIpamPoolAllocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return ListIpamPoolCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListIpamPoolsRequest $request ListIpamPoolsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIpamPoolsResponse ListIpamPoolsResponse
     */
    public function listIpamPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipamPoolIds)) {
            $query['IpamPoolIds'] = $request->ipamPoolIds;
        }
        if (!Utils::isUnset($request->ipamPoolName)) {
            $query['IpamPoolName'] = $request->ipamPoolName;
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

        return ListIpamPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListIpamResourceCidrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return ListIpamScopesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @summary 查询ipam
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

        return ListIpamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询ipam
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
     * @summary 查询资源标签列表
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询资源标签列表
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
     * @summary 开通IPAM功能。
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

        return OpenVpcIpamServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开通IPAM功能。
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
     * @summary 为资源实例绑定资源标签
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为资源实例绑定资源标签
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
     * @summary 为资源解绑资源标签
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为资源解绑资源标签
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
     * @summary 更新ipam
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

        return UpdateIpamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新ipam
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

        return UpdateIpamPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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

        return UpdateIpamScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
