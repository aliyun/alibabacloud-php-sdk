<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class unFinished extends Model
{
    /**
     * @example 12:00
     *
     * @var string
     */
    public $unFinishedTime;
    protected $_name = [
        'unFinishedTime' => 'UnFinishedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unFinishedTime) {
            $res['UnFinishedTime'] = $this->unFinishedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unFinished
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UnFinishedTime'])) {
            $model->unFinishedTime = $map['UnFinishedTime'];
        }

        return $model;
    }
}
