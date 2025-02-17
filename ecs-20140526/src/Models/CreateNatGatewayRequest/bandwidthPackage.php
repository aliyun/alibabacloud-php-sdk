<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest;

use AlibabaCloud\Dara\Model;

class bandwidthPackage extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var int
     */
    public $ipCount;
    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'ipCount'   => 'IpCount',
        'zone'      => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
