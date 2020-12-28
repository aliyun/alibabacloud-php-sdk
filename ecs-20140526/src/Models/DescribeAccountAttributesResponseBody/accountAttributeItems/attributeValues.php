<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems;

use AlibabaCloud\Tea\Model;

class attributeValues extends Model
{
    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceChargeType;
    protected $_name = [
        'diskCategory'       => 'DiskCategory',
        'value'              => 'Value',
        'expiredTime'        => 'ExpiredTime',
        'zoneId'             => 'ZoneId',
        'instanceType'       => 'InstanceType',
        'count'              => 'Count',
        'instanceChargeType' => 'InstanceChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        return $model;
    }
}
