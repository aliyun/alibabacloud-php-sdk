<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class DeleteSubnetRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId' => 'RegionId',
        'subnetId' => 'SubnetId',
        'vpdId' => 'VpdId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
