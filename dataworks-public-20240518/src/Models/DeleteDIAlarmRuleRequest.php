<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDIAlarmRuleRequest extends Model
{
    /**
     * @description The ID of the alert rule.
     *
     * @example 2
     *
     * @var int
     */
    public $DIAlarmRuleId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 1
     *
     * @var int
     */
    public $DIJobId;
    protected $_name = [
        'DIAlarmRuleId' => 'DIAlarmRuleId',
        'DIJobId'       => 'DIJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIAlarmRuleId) {
            $res['DIAlarmRuleId'] = $this->DIAlarmRuleId;
        }
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDIAlarmRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIAlarmRuleId'])) {
            $model->DIAlarmRuleId = $map['DIAlarmRuleId'];
        }
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        return $model;
    }
}
