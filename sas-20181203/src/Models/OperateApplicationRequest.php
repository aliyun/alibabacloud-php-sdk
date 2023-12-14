<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\OperateApplicationRequest\containerWebDefenseApplicationDTOS;
use AlibabaCloud\Tea\Model;

class OperateApplicationRequest extends Model
{
    /**
     * @description The container application that is protected from being tampered with.
     *
     * @var containerWebDefenseApplicationDTOS[]
     */
    public $containerWebDefenseApplicationDTOS;

    /**
     * @description The ID of the rule.
     *
     * @example 300566
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'containerWebDefenseApplicationDTOS' => 'ContainerWebDefenseApplicationDTOS',
        'ruleId'                             => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerWebDefenseApplicationDTOS) {
            $res['ContainerWebDefenseApplicationDTOS'] = [];
            if (null !== $this->containerWebDefenseApplicationDTOS && \is_array($this->containerWebDefenseApplicationDTOS)) {
                $n = 0;
                foreach ($this->containerWebDefenseApplicationDTOS as $item) {
                    $res['ContainerWebDefenseApplicationDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerWebDefenseApplicationDTOS'])) {
            if (!empty($map['ContainerWebDefenseApplicationDTOS'])) {
                $model->containerWebDefenseApplicationDTOS = [];
                $n                                         = 0;
                foreach ($map['ContainerWebDefenseApplicationDTOS'] as $item) {
                    $model->containerWebDefenseApplicationDTOS[$n++] = null !== $item ? containerWebDefenseApplicationDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
