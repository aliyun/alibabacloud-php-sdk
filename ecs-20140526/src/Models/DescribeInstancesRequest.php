<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesRequest\filter;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @description The value of attribute N. Valid values of N: 1 to 20.
     *
     * @example META_OPTIONS
     *
     * @var string[]
     */
    public $additionalAttributes;

    /**
     * @description >  This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example false
     *
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Default value: false. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include whether your AccessKey pair is valid, whether RAM users are granted required permissions, and whether the required parameters are specified. If the check fails, the corresponding error is returned. If the check succeeds, the DryRunOperation error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, a 2XX HTTP status code is returned and the request is made.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The elastic IP addresses (EIPs) of instances. This parameter is valid when InstanceNetworkType is set to vpc. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ["42.1.1.**", "42.1.2.**", … "42.1.10.**"]
     *
     * @var string
     */
    public $eipAddresses;

    /**
     * @description The ID of the High Performance Computing (HPC) cluster to which the instance belongs.
     *
     * @example hpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description Specifies whether the access channel is enabled for instance metadata. Valid values:
     *
     *   enabled
     *   disabled
     *
     * >  For more information about instance metadata, see [Overview of ECS instance metadata](~~49122~~).
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description >  This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example 0
     *
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @description Specifies whether the security hardening mode (IMDSv2) is forcefully used to access instance metadata. Valid values:
     *
     *   optional: The security hardening mode (IMDSv2) is not forcefully used.
     *   required: The security hardening mode (IMDSv2) is forcefully used. After you set this parameter to required, you cannot access instance metadata in normal mode.
     *
     * >  For more information about modes of accessing instance metadata, see [Access mode of instance metadata](~~150575~~).
     * @example optional
     *
     * @var string
     */
    public $httpTokens;

    /**
     * @description The ID of the image.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The internal IP addresses of instances located in the classic network. This parameter is valid when InstanceNetworkType is set to classic. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ["10.1.1.1", "10.1.2.1", … "10.1.10.1"]
     *
     * @var string
     */
    public $innerIpAddresses;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The IDs of instances. The value can be a JSON array that consists of up to 100 instance IDs. Separate the IDs with commas (,).
     *
     * @example ["i-bp67acfmxazb4p****", "i-bp67acfmxazb4p****", … "i-bp67acfmxazb4p****"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The name of the instance. Fuzzy search with the asterisk (\*) wildcard characters is supported.
     *
     * @example Test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   classic: classic network
     *   vpc: VPC
     *
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family of the instance.
     *
     * @example ecs.g5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * >  When the **pay-by-traffic** billing method for network usage is used, the maximum inbound and outbound bandwidth values are used as upper limits of bandwidths instead of guaranteed performance specifications. In scenarios where demand outstrips resource supplies, these maximum bandwidth values may not be reached. If you want guaranteed bandwidths for your instances, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description Specifies whether the instance is I/O optimized.
     *
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description IPv6 address N of the elastic network interface (ENI). You can specify multiple IPv6 addresses. Valid values of N: 1 to 100.
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The name of the SSH key pair bound to the instance.
     *
     * @example KeyPairNameTest
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The reason why the instance is locked. Valid values:
     *
     *   financial: The instance is locked due to overdue payments.
     *   security: The instance is locked due to security reasons.
     *   recycling: The preemptible instance is locked and pending release.
     *   dedicatedhostfinancial: The instance is locked due to overdue payments for the dedicated host.
     *   refunded: The instance is locked because a refund is made for the instance.
     *
     * @example security
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maximum number of entries to return on each page. Maximum value: 100.
     *
     * Default value:
     *
     *   If this parameter is not specified or is set to a value smaller than 10, the default value is 10.
     *   If this parameter is set to a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description >  This parameter is currently in invitational preview and unavailable for general users.
     *
     * @example false
     *
     * @var bool
     */
    public $needSaleCycle;

    /**
     * @description The query token. Set the value to the `NextToken` value returned in the last call to the DescribeInstances operation.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The private IP addresses of instances located in VPCs. This parameter is valid when InstanceNetworkType is set to vpc. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ["172.16.1.1", "172.16.2.1", … "172.16.10.1"]
     *
     * @var string
     */
    public $privateIpAddresses;

    /**
     * @description The public IP addresses of instances. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ["42.1.1.**", "42.1.2.**", … "42.1.10.**"]
     *
     * @var string
     */
    public $publicIpAddresses;

    /**
     * @description The Remote Direct Memory Access (RDMA) IP address of the HPC instance.
     *
     * @example 10.10.10.102
     *
     * @var string
     */
    public $rdmaIpAddresses;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * >  Resources in the default resource group are displayed in the response regardless of how this parameter is set.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the security group to which the instance belongs.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The state of the instance. Valid values:
     *
     *   Pending: The instance is being created.
     *   Running: The instance is running.
     *   Starting: The instance is being started.
     *   Stopping: The instance is being stopped.
     *   Stopped: The instance is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch to which the instance is connected.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the instance belongs.
     *
     * @example v-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'filter'                  => 'Filter',
        'additionalAttributes'    => 'AdditionalAttributes',
        'deviceAvailable'         => 'DeviceAvailable',
        'dryRun'                  => 'DryRun',
        'eipAddresses'            => 'EipAddresses',
        'hpcClusterId'            => 'HpcClusterId',
        'httpEndpoint'            => 'HttpEndpoint',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
        'httpTokens'              => 'HttpTokens',
        'imageId'                 => 'ImageId',
        'innerIpAddresses'        => 'InnerIpAddresses',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceIds'             => 'InstanceIds',
        'instanceName'            => 'InstanceName',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'instanceType'            => 'InstanceType',
        'instanceTypeFamily'      => 'InstanceTypeFamily',
        'internetChargeType'      => 'InternetChargeType',
        'ioOptimized'             => 'IoOptimized',
        'ipv6Address'             => 'Ipv6Address',
        'keyPairName'             => 'KeyPairName',
        'lockReason'              => 'LockReason',
        'maxResults'              => 'MaxResults',
        'needSaleCycle'           => 'NeedSaleCycle',
        'nextToken'               => 'NextToken',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'privateIpAddresses'      => 'PrivateIpAddresses',
        'publicIpAddresses'       => 'PublicIpAddresses',
        'rdmaIpAddresses'         => 'RdmaIpAddresses',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'securityGroupId'         => 'SecurityGroupId',
        'status'                  => 'Status',
        'tag'                     => 'Tag',
        'vSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->additionalAttributes) {
            $res['AdditionalAttributes'] = $this->additionalAttributes;
        }
        if (null !== $this->deviceAvailable) {
            $res['DeviceAvailable'] = $this->deviceAvailable;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = $this->eipAddresses;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddresses) {
            $res['InnerIpAddresses'] = $this->innerIpAddresses;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->needSaleCycle) {
            $res['NeedSaleCycle'] = $this->needSaleCycle;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privateIpAddresses) {
            $res['PrivateIpAddresses'] = $this->privateIpAddresses;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = $this->publicIpAddresses;
        }
        if (null !== $this->rdmaIpAddresses) {
            $res['RdmaIpAddresses'] = $this->rdmaIpAddresses;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AdditionalAttributes'])) {
            if (!empty($map['AdditionalAttributes'])) {
                $model->additionalAttributes = $map['AdditionalAttributes'];
            }
        }
        if (isset($map['DeviceAvailable'])) {
            $model->deviceAvailable = $map['DeviceAvailable'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EipAddresses'])) {
            $model->eipAddresses = $map['EipAddresses'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddresses'])) {
            $model->innerIpAddresses = $map['InnerIpAddresses'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NeedSaleCycle'])) {
            $model->needSaleCycle = $map['NeedSaleCycle'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateIpAddresses'])) {
            $model->privateIpAddresses = $map['PrivateIpAddresses'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = $map['PublicIpAddresses'];
        }
        if (isset($map['RdmaIpAddresses'])) {
            $model->rdmaIpAddresses = $map['RdmaIpAddresses'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
