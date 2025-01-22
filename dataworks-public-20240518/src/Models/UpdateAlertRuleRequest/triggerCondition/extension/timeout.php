<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Dara\Model;

class timeout extends Model
{
    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
