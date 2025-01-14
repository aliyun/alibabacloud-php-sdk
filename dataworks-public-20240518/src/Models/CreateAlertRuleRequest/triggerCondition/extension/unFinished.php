<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class unFinished extends Model
{
    /**
     * @description The latest completion time of the instance. The period is in the hh:mm format. Valid values of hh: [0,47]. Valid values of mm: [0,59].
     *
     * @example 30:00
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
