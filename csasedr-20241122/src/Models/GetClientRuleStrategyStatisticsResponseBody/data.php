<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models\GetClientRuleStrategyStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $customRuleCount;

    /**
     * @var int
     */
    public $systemRuleCount;
    protected $_name = [
        'customRuleCount' => 'CustomRuleCount',
        'systemRuleCount' => 'SystemRuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRuleCount) {
            $res['CustomRuleCount'] = $this->customRuleCount;
        }

        if (null !== $this->systemRuleCount) {
            $res['SystemRuleCount'] = $this->systemRuleCount;
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
        if (isset($map['CustomRuleCount'])) {
            $model->customRuleCount = $map['CustomRuleCount'];
        }

        if (isset($map['SystemRuleCount'])) {
            $model->systemRuleCount = $map['SystemRuleCount'];
        }

        return $model;
    }
}
