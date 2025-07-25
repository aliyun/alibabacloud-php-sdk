<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class VPCConfig extends Model
{
    /**
     * @var bool
     */
    public $anytunnelViaENI;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'anytunnelViaENI' => 'anytunnelViaENI',
        'role' => 'role',
        'securityGroupId' => 'securityGroupId',
        'vSwitchIds' => 'vSwitchIds',
        'vpcId' => 'vpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->anytunnelViaENI) {
            $res['anytunnelViaENI'] = $this->anytunnelViaENI;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['vSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VPCConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['anytunnelViaENI'])) {
            $model->anytunnelViaENI = $map['anytunnelViaENI'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }
        if (isset($map['vSwitchIds'])) {
            if (!empty($map['vSwitchIds'])) {
                $model->vSwitchIds = $map['vSwitchIds'];
            }
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
