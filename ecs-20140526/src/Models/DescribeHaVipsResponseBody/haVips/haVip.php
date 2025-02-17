<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedEipAddresses;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip\associatedInstances;

class haVip extends Model
{
    /**
     * @var associatedEipAddresses
     */
    public $associatedEipAddresses;
    /**
     * @var associatedInstances
     */
    public $associatedInstances;
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
        'associatedInstances'    => 'AssociatedInstances',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'haVipId'                => 'HaVipId',
        'ipAddress'              => 'IpAddress',
        'masterInstanceId'       => 'MasterInstanceId',
        'regionId'               => 'RegionId',
        'status'                 => 'Status',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->associatedEipAddresses) {
            $this->associatedEipAddresses->validate();
        }
        if (null !== $this->associatedInstances) {
            $this->associatedInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedEipAddresses) {
            $res['AssociatedEipAddresses'] = null !== $this->associatedEipAddresses ? $this->associatedEipAddresses->toArray($noStream) : $this->associatedEipAddresses;
        }

        if (null !== $this->associatedInstances) {
            $res['AssociatedInstances'] = null !== $this->associatedInstances ? $this->associatedInstances->toArray($noStream) : $this->associatedInstances;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedEipAddresses'])) {
            $model->associatedEipAddresses = associatedEipAddresses::fromMap($map['AssociatedEipAddresses']);
        }

        if (isset($map['AssociatedInstances'])) {
            $model->associatedInstances = associatedInstances::fromMap($map['AssociatedInstances']);
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
