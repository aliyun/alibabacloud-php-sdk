<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseShrinkRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostClassRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostClassResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostGroupAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostGroupAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostPasswordRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostPasswordResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ReplaceDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ReplaceDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\RestartDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\RestartDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cddc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cddc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDedicatedHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->hostClass)) {
            $query['HostClass'] = $request->hostClass;
        }
        if (!Utils::isUnset($request->hostStorage)) {
            $query['HostStorage'] = $request->hostStorage;
        }
        if (!Utils::isUnset($request->hostStorageType)) {
            $query['HostStorageType'] = $request->hostStorageType;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
        }
        if (!Utils::isUnset($request->osPassword)) {
            $query['OsPassword'] = $request->osPassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHost',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostRequest $request
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->bastionInstanceId)) {
            $query['BastionInstanceId'] = $request->bastionInstanceId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'CreateDedicatedHostAccount',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationPolicy)) {
            $query['AllocationPolicy'] = $request->allocationPolicy;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cpuAllocationRatio)) {
            $query['CpuAllocationRatio'] = $request->cpuAllocationRatio;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupDesc)) {
            $query['DedicatedHostGroupDesc'] = $request->dedicatedHostGroupDesc;
        }
        if (!Utils::isUnset($request->diskAllocationRatio)) {
            $query['DiskAllocationRatio'] = $request->diskAllocationRatio;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->hostReplacePolicy)) {
            $query['HostReplacePolicy'] = $request->hostReplacePolicy;
        }
        if (!Utils::isUnset($request->memAllocationRatio)) {
            $query['MemAllocationRatio'] = $request->memAllocationRatio;
        }
        if (!Utils::isUnset($request->openPermission)) {
            $query['OpenPermission'] = $request->openPermission;
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
        if (!Utils::isUnset($request->VPCId)) {
            $query['VPCId'] = $request->VPCId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedHostGroup',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateMyBaseRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMyBaseResponse
     */
    public function createMyBaseWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMyBaseShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ECSClassList)) {
            $request->ECSClassListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ECSClassList, 'ECSClassList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupDescription)) {
            $query['DedicatedHostGroupDescription'] = $request->dedicatedHostGroupDescription;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->ECSClassListShrink)) {
            $query['ECSClassList'] = $request->ECSClassListShrink;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->osPassword)) {
            $query['OsPassword'] = $request->osPassword;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
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
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMyBase',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMyBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMyBaseRequest $request
     *
     * @return CreateMyBaseResponse
     */
    public function createMyBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMyBaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'DeleteDedicatedHostAccount',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
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
            'action'      => 'DeleteDedicatedHostGroup',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'DescribeDedicatedHostAttribute',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostDisksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDedicatedHostDisksResponse
     */
    public function describeDedicatedHostDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'DescribeDedicatedHostDisks',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostDisksRequest $request
     *
     * @return DescribeDedicatedHostDisksResponse
     */
    public function describeDedicatedHostDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostDisksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
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
            'action'      => 'DescribeDedicatedHostGroups',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationStatus)) {
            $query['AllocationStatus'] = $request->allocationStatus;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->hostStatus)) {
            $query['HostStatus'] = $request->hostStatus;
        }
        if (!Utils::isUnset($request->hostType)) {
            $query['HostType'] = $request->hostType;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumbers)) {
            $query['PageNumbers'] = $request->pageNumbers;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedHosts',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostEcsLevelInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHostEcsLevelInfoResponse
     */
    public function describeHostEcsLevelInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->dbType)) {
            $query['DbType'] = $request->dbType;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
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
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHostEcsLevelInfo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostEcsLevelInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHostEcsLevelInfoRequest $request
     *
     * @return DescribeHostEcsLevelInfoResponse
     */
    public function describeHostEcsLevelInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostEcsLevelInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeHostSecurityGroupAttributeResponse
     */
    public function describeHostSecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'DescribeHostSecurityGroupAttribute',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostSecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHostSecurityGroupAttributeRequest $request
     *
     * @return DescribeHostSecurityGroupAttributeResponse
     */
    public function describeHostSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostWebShellRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHostWebShellResponse
     */
    public function describeHostWebShellWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHostWebShell',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHostWebShellResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHostWebShellRequest $request
     *
     * @return DescribeHostWebShellResponse
     */
    public function describeHostWebShell($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostWebShellWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMyBaseHostOverViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMyBaseHostOverViewResponse
     */
    public function describeMyBaseHostOverViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
            'action'      => 'DescribeMyBaseHostOverView',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMyBaseHostOverViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMyBaseHostOverViewRequest $request
     *
     * @return DescribeMyBaseHostOverViewResponse
     */
    public function describeMyBaseHostOverView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBaseHostOverViewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMyBaseInstanceOverViewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMyBaseInstanceOverViewResponse
     */
    public function describeMyBaseInstanceOverViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
            'action'      => 'DescribeMyBaseInstanceOverView',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMyBaseInstanceOverViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMyBaseInstanceOverViewRequest $request
     *
     * @return DescribeMyBaseInstanceOverViewResponse
     */
    public function describeMyBaseInstanceOverView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBaseInstanceOverViewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2020-03-20',
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
     * @param ModifyDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'ModifyDedicatedHostAccount',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAccountRequest $request
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationStatus)) {
            $query['AllocationStatus'] = $request->allocationStatus;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
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
            'action'      => 'ModifyDedicatedHostAttribute',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostClassRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDedicatedHostClassResponse
     */
    public function modifyDedicatedHostClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
        if (!Utils::isUnset($request->switchTime)) {
            $query['SwitchTime'] = $request->switchTime;
        }
        if (!Utils::isUnset($request->switchTimeMode)) {
            $query['SwitchTimeMode'] = $request->switchTimeMode;
        }
        if (!Utils::isUnset($request->targetClassCode)) {
            $query['TargetClassCode'] = $request->targetClassCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedHostClass',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostClassRequest $request
     *
     * @return ModifyDedicatedHostClassResponse
     */
    public function modifyDedicatedHostClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostClassWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationPolicy)) {
            $query['AllocationPolicy'] = $request->allocationPolicy;
        }
        if (!Utils::isUnset($request->cpuAllocationRatio)) {
            $query['CpuAllocationRatio'] = $request->cpuAllocationRatio;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupDesc)) {
            $query['DedicatedHostGroupDesc'] = $request->dedicatedHostGroupDesc;
        }
        if (!Utils::isUnset($request->dedicatedHostGroupId)) {
            $query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }
        if (!Utils::isUnset($request->diskAllocationRatio)) {
            $query['DiskAllocationRatio'] = $request->diskAllocationRatio;
        }
        if (!Utils::isUnset($request->hostReplacePolicy)) {
            $query['HostReplacePolicy'] = $request->hostReplacePolicy;
        }
        if (!Utils::isUnset($request->memAllocationRatio)) {
            $query['MemAllocationRatio'] = $request->memAllocationRatio;
        }
        if (!Utils::isUnset($request->openPermission)) {
            $query['OpenPermission'] = $request->openPermission;
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
            'action'      => 'ModifyDedicatedHostGroupAttribute',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostPasswordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDedicatedHostPasswordResponse
     */
    public function modifyDedicatedHostPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->newPassword)) {
            $query['NewPassword'] = $request->newPassword;
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
            'action'      => 'ModifyDedicatedHostPassword',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedHostPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostPasswordRequest $request
     *
     * @return ModifyDedicatedHostPasswordResponse
     */
    public function modifyDedicatedHostPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostPasswordWithOptions($request, $runtime);
    }

    /**
     * @param QueryHostBaseInfoByInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryHostBaseInfoByInstanceResponse
     */
    public function queryHostBaseInfoByInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
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
            'action'      => 'QueryHostBaseInfoByInstance',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHostBaseInfoByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHostBaseInfoByInstanceRequest $request
     *
     * @return QueryHostBaseInfoByInstanceResponse
     */
    public function queryHostBaseInfoByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHostBaseInfoByInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryHostInstanceConsoleInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryHostInstanceConsoleInfoResponse
     */
    public function queryHostInstanceConsoleInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action'      => 'QueryHostInstanceConsoleInfo',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHostInstanceConsoleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHostInstanceConsoleInfoRequest $request
     *
     * @return QueryHostInstanceConsoleInfoResponse
     */
    public function queryHostInstanceConsoleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHostInstanceConsoleInfoWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->failoverMode)) {
            $query['FailoverMode'] = $request->failoverMode;
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
            'action'      => 'ReplaceDedicatedHost',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplaceDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplaceDedicatedHostRequest $request
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param RestartDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->failoverMode)) {
            $query['FailoverMode'] = $request->failoverMode;
        }
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
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
            'action'      => 'RestartDedicatedHost',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDedicatedHostRequest $request
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2020-03-20',
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
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
            'version'     => '2020-03-20',
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
     * @param ListRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return ListResponse
     */
    public function listWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->keys)) {
            $query['Keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
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
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'list',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRequest $request
     *
     * @return ListResponse
     */
    public function list_($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWithOptions($request, $runtime);
    }

    /**
     * @param TagRequest     $request
     * @param RuntimeOptions $runtime
     *
     * @return TagResponse
     */
    public function tagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->keys)) {
            $query['Keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
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
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'tag',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagRequest $request
     *
     * @return TagResponse
     */
    public function tag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagWithOptions($request, $runtime);
    }

    /**
     * @param UntagRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return UntagResponse
     */
    public function untagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->keys)) {
            $query['Keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->release)) {
            $query['Release'] = $request->release;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
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
        if (!Utils::isUnset($request->values)) {
            $query['Values'] = $request->values;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'untag',
            'version'     => '2020-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagRequest $request
     *
     * @return UntagResponse
     */
    public function untag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagWithOptions($request, $runtime);
    }
}
