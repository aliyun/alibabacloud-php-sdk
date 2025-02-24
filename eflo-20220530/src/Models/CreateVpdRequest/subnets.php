<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest;

use AlibabaCloud\Dara\Model;

class subnets extends Model
{
    /**
     * @var string
     */
    public $cidr;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $subnetName;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr'       => 'Cidr',
        'regionId'   => 'RegionId',
        'subnetName' => 'SubnetName',
        'type'       => 'Type',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
