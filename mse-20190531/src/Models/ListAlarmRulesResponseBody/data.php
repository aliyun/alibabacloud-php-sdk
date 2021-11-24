<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $alarmRuleDetail;

    /**
     * @var string
     */
    public $alarmRuleId;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'alarmName'       => 'AlarmName',
        'alarmRuleDetail' => 'AlarmRuleDetail',
        'alarmRuleId'     => 'AlarmRuleId',
        'alarmStatus'     => 'AlarmStatus',
        'createTime'      => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->alarmRuleDetail) {
            $res['AlarmRuleDetail'] = $this->alarmRuleDetail;
        }
        if (null !== $this->alarmRuleId) {
            $res['AlarmRuleId'] = $this->alarmRuleId;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['AlarmRuleDetail'])) {
            $model->alarmRuleDetail = $map['AlarmRuleDetail'];
        }
        if (isset($map['AlarmRuleId'])) {
            $model->alarmRuleId = $map['AlarmRuleId'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
