<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest\body\customImage;

use AlibabaCloud\Dara\Model;

class pullNetwork extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'securityGroupId',
        'type' => 'type',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
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
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
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
