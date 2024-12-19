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
     * @description Additional instance attributes.
     *
     * @example META_OPTIONS
     *
     * @var string[]
     */
    public $additionalAttributes;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   true: performs only a dry run. The system checks the request for potential issues, including invalid AccessKey pairs, unauthorized RAM users, and missing parameter values. If the request fails the dry run, an error message is returned. If the request passes the dry run, the DryRunOperation error code is returned.
     *   false: performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * Default value: false.
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
     * @description The ID of the high-performance computing (HPC) cluster to which the instance belongs.
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
     * >  For information about instance metadata, see [Access instance metadata](https://help.aliyun.com/document_detail/49122.html).
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
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
     * >  For information about modes of accessing instance metadata, see [Access instance metadata](https://help.aliyun.com/document_detail/150575.html).
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
     * @description The ID of the instance. The value can be a JSON array that consists of up to 100 instance IDs. Separate the IDs with commas (,).
     *
     * @example ["i-bp67acfmxazb4p****", "i-bp67acfmxazb4p****", … "i-bp67acfmxazb4p****"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The name of the instance. Fuzzy search with asterisk (\\*) wildcard characters is supported.
     *
     * @example Test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   classic
     *   vpc
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
     *   PayByBandwidth
     *   PayByTraffic
     *
     * >  When the **pay-by-traffic** billing method is used for network usage, the maximum inbound and outbound bandwidths are used as the upper limits of bandwidths instead of guaranteed performance specifications. In scenarios in which demands exceed resource supplies, the maximum bandwidths may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description Specifies whether the instance is an I/O optimized instance. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description The IPv6 addresses assigned to elastic network interfaces (ENIs).
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
     * @description The maximum number of entries per page. Valid values: 1 to 100.
     *
     * Default value:
     *
     *   If you do not specify this parameter or if you set this parameter to a value that is smaller than 10, the default value is 10.
     *   If you set this parameter to a value that is greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description >  This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $needSaleCycle;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
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
     * @description >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The private IP addresses of instances located in a VPC. This parameter is valid when InstanceNetworkType is set to vpc. The value can be a JSON array that consists of up to 100 IP addresses. Separate the IP addresses with commas (,).
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
     * @description The remote direct memory access (RDMA) IP addresses of the instance in the HPC cluster.
     *
     * @example 10.10.10.102
     *
     * @var string
     */
    public $rdmaIpAddresses;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
     * @description The status of the instance. Valid values:
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
     * @description The tags of the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
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
