<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vSwitchIds)) {
                $res['vSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['vSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['vSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
