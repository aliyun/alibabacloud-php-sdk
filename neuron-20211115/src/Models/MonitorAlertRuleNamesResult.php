<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MonitorAlertRuleNamesResult extends Model
{
    /**
     * @var string[]
     */
    public $ruleNames;
    protected $_name = [
        'ruleNames' => 'ruleNames',
    ];

    public function validate()
    {
        if (\is_array($this->ruleNames)) {
            Model::validateArray($this->ruleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleNames) {
            if (\is_array($this->ruleNames)) {
                $res['ruleNames'] = [];
                $n1 = 0;
                foreach ($this->ruleNames as $item1) {
                    $res['ruleNames'][$n1] = $item1;
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
        if (isset($map['ruleNames'])) {
            if (!empty($map['ruleNames'])) {
                $model->ruleNames = [];
                $n1 = 0;
                foreach ($map['ruleNames'] as $item1) {
                    $model->ruleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
