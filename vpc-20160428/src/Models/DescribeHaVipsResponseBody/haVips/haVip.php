<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedEipAddresses;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedInstances;
use AlibabaCloud\Tea\Model;

class haVip extends Model
{
    /**
     * @var associatedEipAddresses
     */
    public $associatedEipAddresses;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var associatedInstances
     */
    public $associatedInstances;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $haVipId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
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
        'status'                 => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
