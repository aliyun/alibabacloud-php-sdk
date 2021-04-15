<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $alarmRuleId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $alarmRuleDetail;

    /**
     * @var string
     */
    public $alarmName;
    protected $_name = [
        'alarmStatus'     => 'AlarmStatus',
        'alarmRuleId'     => 'AlarmRuleId',
        'createTime'      => 'CreateTime',
        'alarmRuleDetail' => 'AlarmRuleDetail',
        'alarmName'       => 'AlarmName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->alarmRuleId) {
            $res['AlarmRuleId'] = $this->alarmRuleId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->alarmRuleDetail) {
            $res['AlarmRuleDetail'] = $this->alarmRuleDetail;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
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
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AlarmRuleId'])) {
            $model->alarmRuleId = $map['AlarmRuleId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AlarmRuleDetail'])) {
            $model->alarmRuleDetail = $map['AlarmRuleDetail'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }

        return $model;
    }
}
