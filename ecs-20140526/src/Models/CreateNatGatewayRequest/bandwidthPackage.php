<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest;

use AlibabaCloud\Tea\Model;

class bandwidthPackage extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var int
     */
    public $ipCount;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'zone'      => 'Zone',
        'ipCount'   => 'IpCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }

        return $model;
    }
}
