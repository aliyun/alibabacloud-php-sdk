<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedEipAddresses;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedInstances;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips\haVip\tags;
use AlibabaCloud\Tea\Model;

class haVip extends Model
{
    /**
     * @description The list of EIPs associated with the HAVIP.
     *
     * @var associatedEipAddresses
     */
    public $associatedEipAddresses;

    /**
     * @description The type of the instance with which the HAVIP is associated. Valid values:
     *
     *   **EcsInstance**: Elastic Compute Service (ECS) instance
     *   **NetworkInterface**: elastic network interface (ENI)
     *
     * @example EcsInstance
     *
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @description The information about the instance associated with the HAVIP.
     *
     * @var associatedInstances
     */
    public $associatedInstances;

    /**
     * @description The parameter is invalid. No value is returned.
     *
     * @example none
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the HAVIP was created.
     *
     * @example 2021-07-03T14:25:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the HAVIP.
     *
     * @example My HaVip
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the HAVIP.
     *
     * @example havip-bp149uyvut73dpld****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @description The private IP address of the HAVIP.
     *
     * @example 192.168.24.5
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The ID of the active instance that is associated with the HAVIP.
     *
     * @example i-bp145q7glnuzdvz****
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description The name of the HAVIP.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region to which the HAVIP belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the HAVIP belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the HAVIP. Valid values:
     *
     *   **Creating**: The server group is being created.
     *   **Available**: The FULLNAT entry is available.
     *   **Deleting**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch to which the HAVIP belongs.
     *
     * @example vsw-bp1pkt1fba8e824ez****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which the HAVIP belongs.
     *
     * @example vpc-bp1kcm36tevkpms97****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'associatedEipAddresses' => 'AssociatedEipAddresses',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'associatedInstances'    => 'AssociatedInstances',
        'chargeType'             => 'ChargeType',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'haVipId'                => 'HaVipId',
        'ipAddress'              => 'IpAddress',
        'masterInstanceId'       => 'MasterInstanceId',
        'name'                   => 'Name',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedEipAddresses) {
            $res['AssociatedEipAddresses'] = null !== $this->associatedEipAddresses ? $this->associatedEipAddresses->toMap() : null;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->associatedInstances) {
            $res['AssociatedInstances'] = null !== $this->associatedInstances ? $this->associatedInstances->toMap() : null;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haVip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedEipAddresses'])) {
            $model->associatedEipAddresses = associatedEipAddresses::fromMap($map['AssociatedEipAddresses']);
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['AssociatedInstances'])) {
            $model->associatedInstances = associatedInstances::fromMap($map['AssociatedInstances']);
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
