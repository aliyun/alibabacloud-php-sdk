<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\vpcInfo\vSwitches;

class vpcInfo extends Model
{
    /**
     * @var string
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupIds' => 'securityGroupIds',
        'vSwitchId' => 'vSwitchId',
        'vSwitches' => 'vSwitches',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroupIds) {
            $res['securityGroupIds'] = $this->securityGroupIds;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['vSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['vSwitches'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['securityGroupIds'])) {
            $model->securityGroupIds = $map['securityGroupIds'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['vSwitches'])) {
            if (!empty($map['vSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['vSwitches'] as $item1) {
                    $model->vSwitches[$n1++] = vSwitches::fromMap($item1);
                }
            }
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
