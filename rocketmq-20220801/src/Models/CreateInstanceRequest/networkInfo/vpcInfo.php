<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;

use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @example vsw-uf6gwtbn6etadpv*******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-wz9qt50xhtj9krb******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'vSwitchId' => 'vSwitchId',
        'vpcId'     => 'vpcId',
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
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
