<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Dara\Model;

class instanceErrorCount extends Model
{
    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'count' => 'Count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
