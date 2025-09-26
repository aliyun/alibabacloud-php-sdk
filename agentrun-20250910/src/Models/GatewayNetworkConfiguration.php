<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class GatewayNetworkConfiguration extends Model
{
    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'networkMode' => 'networkMode',
        'vpcId' => 'vpcId',
        'vswitchIds' => 'vswitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkMode) {
            $res['networkMode'] = $this->networkMode;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['vswitchIds'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['networkMode'])) {
            $model->networkMode = $map['networkMode'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vswitchIds'])) {
            if (!empty($map['vswitchIds'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitchIds'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
