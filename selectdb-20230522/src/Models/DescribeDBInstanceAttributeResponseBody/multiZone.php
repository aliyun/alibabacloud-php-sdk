<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class multiZone extends Model
{
    /**
     * @var int
     */
    public $availableIpCount;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableIpCount' => 'AvailableIpCount',
        'cidr' => 'Cidr',
        'vSwitchIds' => 'VSwitchIds',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIpCount) {
            $res['AvailableIpCount'] = $this->availableIpCount;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableIpCount'])) {
            $model->availableIpCount = $map['AvailableIpCount'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
