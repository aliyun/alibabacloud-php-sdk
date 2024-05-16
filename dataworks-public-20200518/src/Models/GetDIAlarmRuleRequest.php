<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetDIAlarmRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 34994
     *
     * @var int
     */
    public $DIAlarmRuleId;
    protected $_name = [
        'DIAlarmRuleId' => 'DIAlarmRuleId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIAlarmRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIAlarmRuleId'])) {
            $model->DIAlarmRuleId = $map['DIAlarmRuleId'];
        }

        return $model;
    }
}
