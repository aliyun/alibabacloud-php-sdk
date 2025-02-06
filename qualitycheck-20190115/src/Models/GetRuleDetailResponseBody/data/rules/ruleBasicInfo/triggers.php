<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo;

use AlibabaCloud\Dara\Model;

class triggers extends Model
{
    /**
     * @var string[]
     */
    public $trigger;
    protected $_name = [
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (\is_array($this->trigger)) {
            Model::validateArray($this->trigger);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trigger) {
            if (\is_array($this->trigger)) {
                $res['Trigger'] = [];
                $n1             = 0;
                foreach ($this->trigger as $item1) {
                    $res['Trigger'][$n1++] = $item1;
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
        if (isset($map['Trigger'])) {
            if (!empty($map['Trigger'])) {
                $model->trigger = [];
                $n1             = 0;
                foreach ($map['Trigger'] as $item1) {
                    $model->trigger[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
