<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class RegistryNetworkConfig extends Model
{
    /**
     * @example sg-xxxxxxxxxxxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-xxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-xxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'securityGroupId',
        'vSwitchId'       => 'vSwitchId',
        'vpcId'           => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }
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
     * @return RegistryNetworkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
