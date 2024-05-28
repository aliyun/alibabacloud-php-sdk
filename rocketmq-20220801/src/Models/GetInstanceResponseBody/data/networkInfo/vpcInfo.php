<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\vpcInfo\vSwitches;
use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @description The security group ID.
     *
     * @example sg-hp35r2hc3a3sv8q2sb16
     *
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description The ID of the vSwitch with which the instance is associated.
     *
     * @example vsw-uf6gwtbn6etadpvz7****
     *
     * @deprecated
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @description The ID of the VPC with which the instance is associated.
     *
     * @example vpc-uf6of9452b2pba82c****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupIds' => 'securityGroupIds',
        'vSwitchId'        => 'vSwitchId',
        'vSwitches'        => 'vSwitches',
        'vpcId'            => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupIds) {
            $res['securityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitches) {
            $res['vSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['vSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['securityGroupIds'])) {
            $model->securityGroupIds = $map['securityGroupIds'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vSwitches'])) {
            if (!empty($map['vSwitches'])) {
                $model->vSwitches = [];
                $n                = 0;
                foreach ($map['vSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
