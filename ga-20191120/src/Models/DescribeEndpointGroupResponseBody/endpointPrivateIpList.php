<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody;

use AlibabaCloud\Dara\Model;

class endpointPrivateIpList extends Model
{
    /**
     * @var string
     */
    public $CIDR;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'CIDR' => 'CIDR',
        'privateIp' => 'PrivateIp',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CIDR) {
            $res['CIDR'] = $this->CIDR;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CIDR'])) {
            $model->CIDR = $map['CIDR'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
