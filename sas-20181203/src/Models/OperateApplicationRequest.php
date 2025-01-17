<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\OperateApplicationRequest\containerWebDefenseApplicationDTOS;

class OperateApplicationRequest extends Model
{
    /**
     * @var containerWebDefenseApplicationDTOS[]
     */
    public $containerWebDefenseApplicationDTOS;
    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'containerWebDefenseApplicationDTOS' => 'ContainerWebDefenseApplicationDTOS',
        'ruleId'                             => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->containerWebDefenseApplicationDTOS)) {
            Model::validateArray($this->containerWebDefenseApplicationDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerWebDefenseApplicationDTOS) {
            if (\is_array($this->containerWebDefenseApplicationDTOS)) {
                $res['ContainerWebDefenseApplicationDTOS'] = [];
                $n1                                        = 0;
                foreach ($this->containerWebDefenseApplicationDTOS as $item1) {
                    $res['ContainerWebDefenseApplicationDTOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['ContainerWebDefenseApplicationDTOS'])) {
            if (!empty($map['ContainerWebDefenseApplicationDTOS'])) {
                $model->containerWebDefenseApplicationDTOS = [];
                $n1                                        = 0;
                foreach ($map['ContainerWebDefenseApplicationDTOS'] as $item1) {
                    $model->containerWebDefenseApplicationDTOS[$n1++] = containerWebDefenseApplicationDTOS::fromMap($item1);
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
