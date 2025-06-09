<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AddPrinsInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AddPrinsInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AddPrinsInstanceShrinkRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostShrinkRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseShrinkRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreatePrinsBackupPlanRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreatePrinsBackupPlanResponse;
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
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsBackupPlanRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsBackupPlanResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsEcsInstancesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsEcsInstancesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\GetPrinsEventListRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\GetPrinsEventListResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\GetPrinsMetricsListRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\GetPrinsMetricsListResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsInstancesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsInstancesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsInstancesShrinkRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsParamsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsParamsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsSQLErrorLogRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsSQLErrorLogResponse;
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
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\UntagResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 纳管实例.
     *
     * @param tmpReq - AddPrinsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPrinsInstanceResponse
     *
     * @param AddPrinsInstanceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddPrinsInstanceResponse
     */
    public function addPrinsInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddPrinsInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->disk) {
            $request->diskShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->disk, 'Disk', 'json');
        }

        $query = [];
        if (null !== $request->alias) {
            @$query['Alias'] = $request->alias;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->diskShrink) {
            @$query['Disk'] = $request->diskShrink;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPrinsInstance',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddPrinsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 纳管实例.
     *
     * @param request - AddPrinsInstanceRequest
     *
     * @returns AddPrinsInstanceResponse
     *
     * @param AddPrinsInstanceRequest $request
     *
     * @return AddPrinsInstanceResponse
     */
    public function addPrinsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addPrinsInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates hosts in a dedicated cluster.
     *
     * @param tmpReq - CreateDedicatedHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDedicatedHostResponse
     *
     * @param CreateDedicatedHostRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHostWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDedicatedHostShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clusterServices) {
            $request->clusterServicesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clusterServices, 'ClusterServices', 'simple');
        }

        if (null !== $tmpReq->myBaseEcsClass) {
            $request->myBaseEcsClassShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->myBaseEcsClass, 'MyBaseEcsClass', 'json');
        }

        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterAlias) {
            @$query['ClusterAlias'] = $request->clusterAlias;
        }

        if (null !== $request->clusterServicesShrink) {
            @$query['ClusterServices'] = $request->clusterServicesShrink;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->hostClass) {
            @$query['HostClass'] = $request->hostClass;
        }

        if (null !== $request->hostStorage) {
            @$query['HostStorage'] = $request->hostStorage;
        }

        if (null !== $request->hostStorageType) {
            @$query['HostStorageType'] = $request->hostStorageType;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
        }

        if (null !== $request->myBaseEcsClassShrink) {
            @$query['MyBaseEcsClass'] = $request->myBaseEcsClassShrink;
        }

        if (null !== $request->osPassword) {
            @$query['OsPassword'] = $request->osPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcID) {
            @$query['VpcID'] = $request->vpcID;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDedicatedHost',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates hosts in a dedicated cluster.
     *
     * @param request - CreateDedicatedHostRequest
     *
     * @returns CreateDedicatedHostResponse
     *
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
     * Creates an account for a host.
     *
     * @remarks
     * Each host can have only one account. Before you create an account for a host, make sure that the existing account of the host is deleted. For more information, see [Create an account for a host](https://help.aliyun.com/document_detail/211413.html).
     *
     * @param request - CreateDedicatedHostAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDedicatedHostAccountResponse
     *
     * @param CreateDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->bastionInstanceId) {
            @$query['BastionInstanceId'] = $request->bastionInstanceId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'CreateDedicatedHostAccount',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account for a host.
     *
     * @remarks
     * Each host can have only one account. Before you create an account for a host, make sure that the existing account of the host is deleted. For more information, see [Create an account for a host](https://help.aliyun.com/document_detail/211413.html).
     *
     * @param request - CreateDedicatedHostAccountRequest
     *
     * @returns CreateDedicatedHostAccountResponse
     *
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
     * Creates a dedicated cluster.
     *
     * @param request - CreateDedicatedHostGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDedicatedHostGroupResponse
     *
     * @param CreateDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationPolicy) {
            @$query['AllocationPolicy'] = $request->allocationPolicy;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cpuAllocationRatio) {
            @$query['CpuAllocationRatio'] = $request->cpuAllocationRatio;
        }

        if (null !== $request->dedicatedHostGroupDesc) {
            @$query['DedicatedHostGroupDesc'] = $request->dedicatedHostGroupDesc;
        }

        if (null !== $request->diskAllocationRatio) {
            @$query['DiskAllocationRatio'] = $request->diskAllocationRatio;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->hostReplacePolicy) {
            @$query['HostReplacePolicy'] = $request->hostReplacePolicy;
        }

        if (null !== $request->memAllocationRatio) {
            @$query['MemAllocationRatio'] = $request->memAllocationRatio;
        }

        if (null !== $request->openPermission) {
            @$query['OpenPermission'] = $request->openPermission;
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

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDedicatedHostGroup',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dedicated cluster.
     *
     * @param request - CreateDedicatedHostGroupRequest
     *
     * @returns CreateDedicatedHostGroupResponse
     *
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
     * 创建专属集群（包含主机信息，附加服务信息）.
     *
     * @param tmpReq - CreateMyBaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMyBaseResponse
     *
     * @param CreateMyBaseRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMyBaseResponse
     */
    public function createMyBaseWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMyBaseShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ECSClassList) {
            $request->ECSClassListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ECSClassList, 'ECSClassList', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedHostGroupDescription) {
            @$query['DedicatedHostGroupDescription'] = $request->dedicatedHostGroupDescription;
        }

        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->ECSClassListShrink) {
            @$query['ECSClassList'] = $request->ECSClassListShrink;
        }

        if (null !== $request->ecsDeploymentSetId) {
            @$query['EcsDeploymentSetId'] = $request->ecsDeploymentSetId;
        }

        if (null !== $request->ecsHostName) {
            @$query['EcsHostName'] = $request->ecsHostName;
        }

        if (null !== $request->ecsInstanceName) {
            @$query['EcsInstanceName'] = $request->ecsInstanceName;
        }

        if (null !== $request->ecsUniqueSuffix) {
            @$query['EcsUniqueSuffix'] = $request->ecsUniqueSuffix;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->osPassword) {
            @$query['OsPassword'] = $request->osPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->passwordInherit) {
            @$query['PasswordInherit'] = $request->passwordInherit;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
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

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->userDataInBase64) {
            @$query['UserDataInBase64'] = $request->userDataInBase64;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMyBase',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMyBaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建专属集群（包含主机信息，附加服务信息）.
     *
     * @param request - CreateMyBaseRequest
     *
     * @returns CreateMyBaseResponse
     *
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
     * 创建备份计划.
     *
     * @param request - CreatePrinsBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrinsBackupPlanResponse
     *
     * @param CreatePrinsBackupPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePrinsBackupPlanResponse
     */
    public function createPrinsBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupPeriod) {
            @$query['BackupPeriod'] = $request->backupPeriod;
        }

        if (null !== $request->backupPlanName) {
            @$query['BackupPlanName'] = $request->backupPlanName;
        }

        if (null !== $request->backupStartTime) {
            @$query['BackupStartTime'] = $request->backupStartTime;
        }

        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePrinsBackupPlan',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrinsBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建备份计划.
     *
     * @param request - CreatePrinsBackupPlanRequest
     *
     * @returns CreatePrinsBackupPlanResponse
     *
     * @param CreatePrinsBackupPlanRequest $request
     *
     * @return CreatePrinsBackupPlanResponse
     */
    public function createPrinsBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrinsBackupPlanWithOptions($request, $runtime);
    }

    /**
     * Deletes a host account.
     *
     * @param request - DeleteDedicatedHostAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDedicatedHostAccountResponse
     *
     * @param DeleteDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'DeleteDedicatedHostAccount',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a host account.
     *
     * @param request - DeleteDedicatedHostAccountRequest
     *
     * @returns DeleteDedicatedHostAccountResponse
     *
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
     * Deletes a dedicated cluster.
     *
     * @remarks
     * You can call this operation to delete a dedicated cluster only after all the instances and hosts in the dedicated cluster are deleted.
     *
     * @param request - DeleteDedicatedHostGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDedicatedHostGroupResponse
     *
     * @param DeleteDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
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
            'action' => 'DeleteDedicatedHostGroup',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDedicatedHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a dedicated cluster.
     *
     * @remarks
     * You can call this operation to delete a dedicated cluster only after all the instances and hosts in the dedicated cluster are deleted.
     *
     * @param request - DeleteDedicatedHostGroupRequest
     *
     * @returns DeleteDedicatedHostGroupResponse
     *
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
     * Queries the parameter settings of a host in a dedicated cluster.
     *
     * @param request - DescribeDedicatedHostAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedHostAttributeResponse
     *
     * @param DescribeDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'DescribeDedicatedHostAttribute',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameter settings of a host in a dedicated cluster.
     *
     * @param request - DescribeDedicatedHostAttributeRequest
     *
     * @returns DescribeDedicatedHostAttributeResponse
     *
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
     * Queries the information about disks on a host.
     *
     * @param request - DescribeDedicatedHostDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedHostDisksResponse
     *
     * @param DescribeDedicatedHostDisksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDedicatedHostDisksResponse
     */
    public function describeDedicatedHostDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'DescribeDedicatedHostDisks',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedHostDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about disks on a host.
     *
     * @param request - DescribeDedicatedHostDisksRequest
     *
     * @returns DescribeDedicatedHostDisksResponse
     *
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
     * Queries the information about hosts in dedicated clusters.
     *
     * @param request - DescribeDedicatedHostGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedHostGroupsResponse
     *
     * @param DescribeDedicatedHostGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
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
            'action' => 'DescribeDedicatedHostGroups',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about hosts in dedicated clusters.
     *
     * @param request - DescribeDedicatedHostGroupsRequest
     *
     * @returns DescribeDedicatedHostGroupsResponse
     *
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
     * Queries the information about hosts in a dedicated cluster.
     *
     * @remarks
     * After hosts are created in a dedicated cluster, you can query the information about the hosts such as performance metrics, total number of CPU cores, total memory size, and total storage.
     *
     * @param request - DescribeDedicatedHostsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedHostsResponse
     *
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationStatus) {
            @$query['AllocationStatus'] = $request->allocationStatus;
        }

        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->hostStatus) {
            @$query['HostStatus'] = $request->hostStatus;
        }

        if (null !== $request->hostType) {
            @$query['HostType'] = $request->hostType;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumbers) {
            @$query['PageNumbers'] = $request->pageNumbers;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDedicatedHosts',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about hosts in a dedicated cluster.
     *
     * @remarks
     * After hosts are created in a dedicated cluster, you can query the information about the hosts such as performance metrics, total number of CPU cores, total memory size, and total storage.
     *
     * @param request - DescribeDedicatedHostsRequest
     *
     * @returns DescribeDedicatedHostsResponse
     *
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
     * Queries the information about host specifications.
     *
     * @remarks
     * After a host is created, you can call this operation to query the information about the host specifications, such as the CPU resources, memory resources, CPU model, host category, and storage type.
     *
     * @param request - DescribeHostEcsLevelInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHostEcsLevelInfoResponse
     *
     * @param DescribeHostEcsLevelInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHostEcsLevelInfoResponse
     */
    public function describeHostEcsLevelInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbType) {
            @$query['DbType'] = $request->dbType;
        }

        if (null !== $request->imageCategory) {
            @$query['ImageCategory'] = $request->imageCategory;
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

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHostEcsLevelInfo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHostEcsLevelInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about host specifications.
     *
     * @remarks
     * After a host is created, you can call this operation to query the information about the host specifications, such as the CPU resources, memory resources, CPU model, host category, and storage type.
     *
     * @param request - DescribeHostEcsLevelInfoRequest
     *
     * @returns DescribeHostEcsLevelInfoResponse
     *
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
     * Queries the URL of a webshell that is used to access a host.
     *
     * @remarks
     * You can use a webshell to access a host in an ApsaraDB MyBase for MySQL or ApsaraDB MyBase for PostgreSQL dedicated cluster. For more information, see [Use a webshell to access a host](https://help.aliyun.com/document_detail/205456.html).
     *
     * @param request - DescribeHostWebShellRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHostWebShellResponse
     *
     * @param DescribeHostWebShellRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHostWebShellResponse
     */
    public function describeHostWebShellWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHostWebShell',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHostWebShellResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the URL of a webshell that is used to access a host.
     *
     * @remarks
     * You can use a webshell to access a host in an ApsaraDB MyBase for MySQL or ApsaraDB MyBase for PostgreSQL dedicated cluster. For more information, see [Use a webshell to access a host](https://help.aliyun.com/document_detail/205456.html).
     *
     * @param request - DescribeHostWebShellRequest
     *
     * @returns DescribeHostWebShellResponse
     *
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
     * 查询备份计划详情.
     *
     * @param request - DescribePrinsBackupPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrinsBackupPlanResponse
     *
     * @param DescribePrinsBackupPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePrinsBackupPlanResponse
     */
    public function describePrinsBackupPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrinsBackupPlan',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrinsBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询备份计划详情.
     *
     * @param request - DescribePrinsBackupPlanRequest
     *
     * @returns DescribePrinsBackupPlanResponse
     *
     * @param DescribePrinsBackupPlanRequest $request
     *
     * @return DescribePrinsBackupPlanResponse
     */
    public function describePrinsBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrinsBackupPlanWithOptions($request, $runtime);
    }

    /**
     * 查询ecs实例信息列表.
     *
     * @param request - DescribePrinsEcsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrinsEcsInstancesResponse
     *
     * @param DescribePrinsEcsInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePrinsEcsInstancesResponse
     */
    public function describePrinsEcsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ecsInstanceId) {
            @$query['EcsInstanceId'] = $request->ecsInstanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
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

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrinsEcsInstances',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrinsEcsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询ecs实例信息列表.
     *
     * @param request - DescribePrinsEcsInstancesRequest
     *
     * @returns DescribePrinsEcsInstancesResponse
     *
     * @param DescribePrinsEcsInstancesRequest $request
     *
     * @return DescribePrinsEcsInstancesResponse
     */
    public function describePrinsEcsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrinsEcsInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取纳管实例详情.
     *
     * @param request - DescribePrinsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrinsInstanceResponse
     *
     * @param DescribePrinsInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePrinsInstanceResponse
     */
    public function describePrinsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->discover) {
            @$query['Discover'] = $request->discover;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrinsInstance',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrinsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取纳管实例详情.
     *
     * @param request - DescribePrinsInstanceRequest
     *
     * @returns DescribePrinsInstanceResponse
     *
     * @param DescribePrinsInstanceRequest $request
     *
     * @return DescribePrinsInstanceResponse
     */
    public function describePrinsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrinsInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the most recent region list.
     *
     * @remarks
     * For more information about region IDs, see [Region IDs](https://help.aliyun.com/document_detail/198326.html).
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
        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-03-20',
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
     * Queries the most recent region list.
     *
     * @remarks
     * For more information about region IDs, see [Region IDs](https://help.aliyun.com/document_detail/198326.html).
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
     * 获取事件列表.
     *
     * @param request - GetPrinsEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrinsEventListResponse
     *
     * @param GetPrinsEventListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetPrinsEventListResponse
     */
    public function getPrinsEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrinsEventList',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPrinsEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取事件列表.
     *
     * @param request - GetPrinsEventListRequest
     *
     * @returns GetPrinsEventListResponse
     *
     * @param GetPrinsEventListRequest $request
     *
     * @return GetPrinsEventListResponse
     */
    public function getPrinsEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrinsEventListWithOptions($request, $runtime);
    }

    /**
     * 获取纳管实例性能指标数据.
     *
     * @param request - GetPrinsMetricsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPrinsMetricsListResponse
     *
     * @param GetPrinsMetricsListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPrinsMetricsListResponse
     */
    public function getPrinsMetricsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->metrics) {
            @$query['Metrics'] = $request->metrics;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrinsMetricsList',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPrinsMetricsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取纳管实例性能指标数据.
     *
     * @param request - GetPrinsMetricsListRequest
     *
     * @returns GetPrinsMetricsListResponse
     *
     * @param GetPrinsMetricsListRequest $request
     *
     * @return GetPrinsMetricsListResponse
     */
    public function getPrinsMetricsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPrinsMetricsListWithOptions($request, $runtime);
    }

    /**
     * 列举纳管实例列表.
     *
     * @param tmpReq - ListPrinsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrinsInstancesResponse
     *
     * @param ListPrinsInstancesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListPrinsInstancesResponse
     */
    public function listPrinsInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPrinsInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->engineVersion) {
            @$query['EngineVersion'] = $request->engineVersion;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrinsInstances',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrinsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举纳管实例列表.
     *
     * @param request - ListPrinsInstancesRequest
     *
     * @returns ListPrinsInstancesResponse
     *
     * @param ListPrinsInstancesRequest $request
     *
     * @return ListPrinsInstancesResponse
     */
    public function listPrinsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrinsInstancesWithOptions($request, $runtime);
    }

    /**
     * 查询数据库纳管实例参数列表.
     *
     * @param request - ListPrinsParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrinsParamsResponse
     *
     * @param ListPrinsParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPrinsParamsResponse
     */
    public function listPrinsParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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
            'action' => 'ListPrinsParams',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrinsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据库纳管实例参数列表.
     *
     * @param request - ListPrinsParamsRequest
     *
     * @returns ListPrinsParamsResponse
     *
     * @param ListPrinsParamsRequest $request
     *
     * @return ListPrinsParamsResponse
     */
    public function listPrinsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrinsParamsWithOptions($request, $runtime);
    }

    /**
     * 查询数据库错误日志.
     *
     * @param request - ListPrinsSQLErrorLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrinsSQLErrorLogResponse
     *
     * @param ListPrinsSQLErrorLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPrinsSQLErrorLogResponse
     */
    public function listPrinsSQLErrorLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->logPath) {
            @$query['LogPath'] = $request->logPath;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startLinenum) {
            @$query['StartLinenum'] = $request->startLinenum;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrinsSQLErrorLog',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrinsSQLErrorLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据库错误日志.
     *
     * @param request - ListPrinsSQLErrorLogRequest
     *
     * @returns ListPrinsSQLErrorLogResponse
     *
     * @param ListPrinsSQLErrorLogRequest $request
     *
     * @return ListPrinsSQLErrorLogResponse
     */
    public function listPrinsSQLErrorLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrinsSQLErrorLogWithOptions($request, $runtime);
    }

    /**
     * Queries the information about tags that are added to hosts.
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
            'version' => '2020-03-20',
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
     * Queries the information about tags that are added to hosts.
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
     * Changes the account name and password of a host.
     *
     * @param request - ModifyDedicatedHostAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedHostAccountResponse
     *
     * @param ModifyDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'ModifyDedicatedHostAccount',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedHostAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the account name and password of a host.
     *
     * @param request - ModifyDedicatedHostAccountRequest
     *
     * @returns ModifyDedicatedHostAccountResponse
     *
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
     * Specifies whether instances can be deployed on a host in a dedicated cluster.
     *
     * @param request - ModifyDedicatedHostAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedHostAttributeResponse
     *
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationStatus) {
            @$query['AllocationStatus'] = $request->allocationStatus;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
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
            'action' => 'ModifyDedicatedHostAttribute',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies whether instances can be deployed on a host in a dedicated cluster.
     *
     * @param request - ModifyDedicatedHostAttributeRequest
     *
     * @returns ModifyDedicatedHostAttributeResponse
     *
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
     * Upgrades host specifications.
     *
     * @remarks
     * After a host is created in a dedicated cluster, you can modify the specifications of the host based on your business requirements. The host specifications include the CPU and memory resources. For more information, see [Upgrade host specifications](https://help.aliyun.com/document_detail/262822.html).
     * >  When you upgrade the specifications of a host, the host restarts. The database instances that are running on the host also restart. For information about the impacts of a host restart, see [Restart a host](https://help.aliyun.com/document_detail/141772.html).
     *
     * @param request - ModifyDedicatedHostClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedHostClassResponse
     *
     * @param ModifyDedicatedHostClassRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDedicatedHostClassResponse
     */
    public function modifyDedicatedHostClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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

        if (null !== $request->switchTime) {
            @$query['SwitchTime'] = $request->switchTime;
        }

        if (null !== $request->switchTimeMode) {
            @$query['SwitchTimeMode'] = $request->switchTimeMode;
        }

        if (null !== $request->targetClassCode) {
            @$query['TargetClassCode'] = $request->targetClassCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDedicatedHostClass',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedHostClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades host specifications.
     *
     * @remarks
     * After a host is created in a dedicated cluster, you can modify the specifications of the host based on your business requirements. The host specifications include the CPU and memory resources. For more information, see [Upgrade host specifications](https://help.aliyun.com/document_detail/262822.html).
     * >  When you upgrade the specifications of a host, the host restarts. The database instances that are running on the host also restart. For information about the impacts of a host restart, see [Restart a host](https://help.aliyun.com/document_detail/141772.html).
     *
     * @param request - ModifyDedicatedHostClassRequest
     *
     * @returns ModifyDedicatedHostClassResponse
     *
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
     * Modifies configurations such as the CPU overcommit ratio, memory usage, storage overcommit ratio, and resource allocation policy for a dedicated cluster.
     *
     * @remarks
     * For more information, see [Manage dedicated clusters](https://help.aliyun.com/document_detail/182328.html).
     *
     * @param request - ModifyDedicatedHostGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedHostGroupAttributeResponse
     *
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationPolicy) {
            @$query['AllocationPolicy'] = $request->allocationPolicy;
        }

        if (null !== $request->cpuAllocationRatio) {
            @$query['CpuAllocationRatio'] = $request->cpuAllocationRatio;
        }

        if (null !== $request->dedicatedHostGroupDesc) {
            @$query['DedicatedHostGroupDesc'] = $request->dedicatedHostGroupDesc;
        }

        if (null !== $request->dedicatedHostGroupId) {
            @$query['DedicatedHostGroupId'] = $request->dedicatedHostGroupId;
        }

        if (null !== $request->diskAllocationRatio) {
            @$query['DiskAllocationRatio'] = $request->diskAllocationRatio;
        }

        if (null !== $request->hostReplacePolicy) {
            @$query['HostReplacePolicy'] = $request->hostReplacePolicy;
        }

        if (null !== $request->memAllocationRatio) {
            @$query['MemAllocationRatio'] = $request->memAllocationRatio;
        }

        if (null !== $request->openPermission) {
            @$query['OpenPermission'] = $request->openPermission;
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
            'action' => 'ModifyDedicatedHostGroupAttribute',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies configurations such as the CPU overcommit ratio, memory usage, storage overcommit ratio, and resource allocation policy for a dedicated cluster.
     *
     * @remarks
     * For more information, see [Manage dedicated clusters](https://help.aliyun.com/document_detail/182328.html).
     *
     * @param request - ModifyDedicatedHostGroupAttributeRequest
     *
     * @returns ModifyDedicatedHostGroupAttributeResponse
     *
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
     * Changes the root account password of a host.
     *
     * @remarks
     * This operation is supported only for ApsaraDB MyBase for Redis Enhanced Edition (Tair) dedicated clusters.
     *
     * @param request - ModifyDedicatedHostPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedHostPasswordResponse
     *
     * @param ModifyDedicatedHostPasswordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDedicatedHostPasswordResponse
     */
    public function modifyDedicatedHostPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->newPassword) {
            @$query['NewPassword'] = $request->newPassword;
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
            'action' => 'ModifyDedicatedHostPassword',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedHostPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the root account password of a host.
     *
     * @remarks
     * This operation is supported only for ApsaraDB MyBase for Redis Enhanced Edition (Tair) dedicated clusters.
     *
     * @param request - ModifyDedicatedHostPasswordRequest
     *
     * @returns ModifyDedicatedHostPasswordResponse
     *
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
     * Queries the basic information about the host on which an instance is deployed.
     *
     * @param request - QueryHostBaseInfoByInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHostBaseInfoByInstanceResponse
     *
     * @param QueryHostBaseInfoByInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryHostBaseInfoByInstanceResponse
     */
    public function queryHostBaseInfoByInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
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
            'action' => 'QueryHostBaseInfoByInstance',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHostBaseInfoByInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about the host on which an instance is deployed.
     *
     * @param request - QueryHostBaseInfoByInstanceRequest
     *
     * @returns QueryHostBaseInfoByInstanceResponse
     *
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
     * Queries the information about instances that are deployed on a host.
     *
     * @param request - QueryHostInstanceConsoleInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHostInstanceConsoleInfoResponse
     *
     * @param QueryHostInstanceConsoleInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryHostInstanceConsoleInfoResponse
     */
    public function queryHostInstanceConsoleInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
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
            'action' => 'QueryHostInstanceConsoleInfo',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHostInstanceConsoleInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about instances that are deployed on a host.
     *
     * @param request - QueryHostInstanceConsoleInfoRequest
     *
     * @returns QueryHostInstanceConsoleInfoResponse
     *
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
     * Replaces a host in a dedicated cluster.
     *
     * @remarks
     * If you specify the manual host replacement policy when you create an ApsaraDB MyBase for MySQL dedicated cluster, you can call this operation to replace a **faulty** host in the dedicated cluster.
     * >  You can call the [DescribeDedicatedHostAttribute](https://help.aliyun.com/document_detail/213010.html) operation to query the value of the **HostStatus** parameter.
     *
     * @param request - ReplaceDedicatedHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceDedicatedHostResponse
     *
     * @param ReplaceDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->failoverMode) {
            @$query['FailoverMode'] = $request->failoverMode;
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
            'action' => 'ReplaceDedicatedHost',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces a host in a dedicated cluster.
     *
     * @remarks
     * If you specify the manual host replacement policy when you create an ApsaraDB MyBase for MySQL dedicated cluster, you can call this operation to replace a **faulty** host in the dedicated cluster.
     * >  You can call the [DescribeDedicatedHostAttribute](https://help.aliyun.com/document_detail/213010.html) operation to query the value of the **HostStatus** parameter.
     *
     * @param request - ReplaceDedicatedHostRequest
     *
     * @returns ReplaceDedicatedHostResponse
     *
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
     * Restarts a host in a dedicated cluster.
     *
     * @param request - RestartDedicatedHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDedicatedHostResponse
     *
     * @param RestartDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->failoverMode) {
            @$query['FailoverMode'] = $request->failoverMode;
        }

        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
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
            'action' => 'RestartDedicatedHost',
            'version' => '2020-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDedicatedHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a host in a dedicated cluster.
     *
     * @param request - RestartDedicatedHostRequest
     *
     * @returns RestartDedicatedHostResponse
     *
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
     * Adds tags to hosts.
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
            'version' => '2020-03-20',
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
     * Adds tags to hosts.
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
     * Removes tags from hosts.
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
            'version' => '2020-03-20',
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
     * Removes tags from hosts.
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
}
