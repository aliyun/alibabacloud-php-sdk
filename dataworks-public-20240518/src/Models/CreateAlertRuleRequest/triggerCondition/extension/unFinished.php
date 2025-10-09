<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Dara\Model;

class unFinished extends Model
{
    /**
     * @var string
     */
    public $unFinishedTime;
    protected $_name = [
        'unFinishedTime' => 'UnFinishedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->unFinishedTime) {
            $res['UnFinishedTime'] = $this->unFinishedTime;
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
        if (isset($map['UnFinishedTime'])) {
            $model->unFinishedTime = $map['UnFinishedTime'];
        }

        return $model;
    }
}
