<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;

use AlibabaCloud\Tea\Model;

class unFinished extends Model
{
    /**
     * @description The timeout period of the instance that is still running at a specified point in time. The time is in the hh:mm format. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
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
