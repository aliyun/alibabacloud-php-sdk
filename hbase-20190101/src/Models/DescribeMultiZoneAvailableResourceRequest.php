<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeMultiZoneAvailableResourceRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneCombination;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'regionId' => 'RegionId',
        'zoneCombination' => 'ZoneCombination',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->zoneCombination) {
            $res['ZoneCombination'] = $this->zoneCombination;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ZoneCombination'])) {
            $model->zoneCombination = $map['ZoneCombination'];
        }

        return $model;
    }
}
