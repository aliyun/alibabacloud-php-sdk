<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceRequest\body\networkConfiguration;

use AlibabaCloud\Dara\Model;

class vpc extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'enabled' => 'enabled',
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
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
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
