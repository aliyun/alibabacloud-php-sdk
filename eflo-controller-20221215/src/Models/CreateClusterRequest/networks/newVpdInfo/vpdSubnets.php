<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo;

use AlibabaCloud\Tea\Model;

class vpdSubnets extends Model
{
    /**
     * @description Subnet CIDR
     *
     * @example 10.0.1.8/24
     *
     * @var string
     */
    public $subnetCidr;

    /**
     * @description Subnet type
     *
     * @example 10.0.2.8/24
     *
     * @var string
     */
    public $subnetType;

    /**
     * @description Zone ID
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'subnetCidr' => 'SubnetCidr',
        'subnetType' => 'SubnetType',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return vpdSubnets
     */
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
