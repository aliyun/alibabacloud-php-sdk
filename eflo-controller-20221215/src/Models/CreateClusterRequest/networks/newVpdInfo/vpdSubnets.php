<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo;

use AlibabaCloud\Dara\Model;

class vpdSubnets extends Model
{
    /**
     * @var string
     */
    public $subnetCidr;
    /**
     * @var string
     */
    public $subnetType;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'subnetCidr' => 'SubnetCidr',
        'subnetType' => 'SubnetType',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subnetCidr) {
            $res['SubnetCidr'] = $this->subnetCidr;
        }

        if (null !== $this->subnetType) {
            $res['SubnetType'] = $this->subnetType;
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
        if (isset($map['SubnetCidr'])) {
            $model->subnetCidr = $map['SubnetCidr'];
        }

        if (isset($map['SubnetType'])) {
            $model->subnetType = $map['SubnetType'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
