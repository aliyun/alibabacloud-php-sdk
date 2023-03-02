<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeCapacityInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 800000000000
     *
     * @var int
     */
    public $capacityQuota;

    /**
     * @example 10000000
     *
     * @var int
     */
    public $countQuota;

    /**
     * @example 70000000
     *
     * @var int
     */
    public $memberUsedCapacity;

    /**
     * @example 26666
     *
     * @var int
     */
    public $memberUsedCount;

    /**
     * @example 870000000
     *
     * @var int
     */
    public $usedCapacity;

    /**
     * @example 30000
     *
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'capacityQuota'      => 'CapacityQuota',
        'countQuota'         => 'CountQuota',
        'memberUsedCapacity' => 'MemberUsedCapacity',
        'memberUsedCount'    => 'MemberUsedCount',
        'usedCapacity'       => 'UsedCapacity',
        'usedCount'          => 'UsedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityQuota) {
            $res['CapacityQuota'] = $this->capacityQuota;
        }
        if (null !== $this->countQuota) {
            $res['CountQuota'] = $this->countQuota;
        }
        if (null !== $this->memberUsedCapacity) {
            $res['MemberUsedCapacity'] = $this->memberUsedCapacity;
        }
        if (null !== $this->memberUsedCount) {
            $res['MemberUsedCount'] = $this->memberUsedCount;
        }
        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityQuota'])) {
            $model->capacityQuota = $map['CapacityQuota'];
        }
        if (isset($map['CountQuota'])) {
            $model->countQuota = $map['CountQuota'];
        }
        if (isset($map['MemberUsedCapacity'])) {
            $model->memberUsedCapacity = $map['MemberUsedCapacity'];
        }
        if (isset($map['MemberUsedCount'])) {
            $model->memberUsedCount = $map['MemberUsedCount'];
        }
        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
