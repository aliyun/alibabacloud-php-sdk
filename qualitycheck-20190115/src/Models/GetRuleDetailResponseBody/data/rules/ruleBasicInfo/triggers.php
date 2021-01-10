<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Trigger'])) {
            if (!empty($map['Trigger'])) {
                $model->trigger = $map['Trigger'];
            }
        }

        return $model;
    }
}
