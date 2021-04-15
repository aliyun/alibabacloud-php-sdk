<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateAlarmRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $alarmAliasName;

    /**
     * @var string
     */
    public $alertWayShrink;

    /**
     * @var string
     */
    public $contactGroupIdsShrink;

    /**
     * @var string
     */
    public $alarmItem;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $aggregates;

    /**
     * @var int
     */
    public $NValue;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'alarmAliasName'        => 'AlarmAliasName',
        'alertWayShrink'        => 'AlertWay',
        'contactGroupIdsShrink' => 'ContactGroupIds',
        'alarmItem'             => 'AlarmItem',
        'operator'              => 'Operator',
        'aggregates'            => 'Aggregates',
        'NValue'                => 'NValue',
        'value'                 => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->alarmAliasName) {
            $res['AlarmAliasName'] = $this->alarmAliasName;
        }
        if (null !== $this->alertWayShrink) {
            $res['AlertWay'] = $this->alertWayShrink;
        }
        if (null !== $this->contactGroupIdsShrink) {
            $res['ContactGroupIds'] = $this->contactGroupIdsShrink;
        }
        if (null !== $this->alarmItem) {
            $res['AlarmItem'] = $this->alarmItem;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->aggregates) {
            $res['Aggregates'] = $this->aggregates;
        }
        if (null !== $this->NValue) {
            $res['NValue'] = $this->NValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlarmRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AlarmAliasName'])) {
            $model->alarmAliasName = $map['AlarmAliasName'];
        }
        if (isset($map['AlertWay'])) {
            $model->alertWayShrink = $map['AlertWay'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIdsShrink = $map['ContactGroupIds'];
        }
        if (isset($map['AlarmItem'])) {
            $model->alarmItem = $map['AlarmItem'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Aggregates'])) {
            $model->aggregates = $map['Aggregates'];
        }
        if (isset($map['NValue'])) {
            $model->NValue = $map['NValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
