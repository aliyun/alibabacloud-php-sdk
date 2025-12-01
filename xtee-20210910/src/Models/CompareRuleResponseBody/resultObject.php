<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CompareRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareRuleResponseBody\resultObject\newRule;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareRuleResponseBody\resultObject\oldRule;

class resultObject extends Model
{
    /**
     * @var newRule
     */
    public $newRule;

    /**
     * @var oldRule
     */
    public $oldRule;
    protected $_name = [
        'newRule' => 'newRule',
        'oldRule' => 'oldRule',
    ];

    public function validate()
    {
        if (null !== $this->newRule) {
            $this->newRule->validate();
        }
        if (null !== $this->oldRule) {
            $this->oldRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newRule) {
            $res['newRule'] = null !== $this->newRule ? $this->newRule->toArray($noStream) : $this->newRule;
        }

        if (null !== $this->oldRule) {
            $res['oldRule'] = null !== $this->oldRule ? $this->oldRule->toArray($noStream) : $this->oldRule;
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
        if (isset($map['newRule'])) {
            $model->newRule = newRule::fromMap($map['newRule']);
        }

        if (isset($map['oldRule'])) {
            $model->oldRule = oldRule::fromMap($map['oldRule']);
        }

        return $model;
    }
}
