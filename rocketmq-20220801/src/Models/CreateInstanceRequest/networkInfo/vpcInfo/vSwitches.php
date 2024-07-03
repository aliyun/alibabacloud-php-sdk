<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo\vpcInfo;

use AlibabaCloud\Tea\Model;

class vSwitches extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'vSwitchId' => 'vSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        return $model;
    }
}
