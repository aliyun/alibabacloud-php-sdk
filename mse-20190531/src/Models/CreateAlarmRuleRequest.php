<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateAlarmRuleRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $aggregates;

    /**
     * @var string
     */
    public $alarmAliasName;

    /**
     * @var string
     */
    public $alarmItem;

    /**
     * @var mixed[]
     */
    public $alertWay;

    /**
     * @var mixed[]
     */
    public $contactGroupIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $NValue;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'aggregates'      => 'Aggregates',
        'alarmAliasName'  => 'AlarmAliasName',
        'alarmItem'       => 'AlarmItem',
        'alertWay'        => 'AlertWay',
        'contactGroupIds' => 'ContactGroupIds',
        'instanceId'      => 'InstanceId',
        'NValue'          => 'NValue',
        'operator'        => 'Operator',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->aggregates) {
            $res['Aggregates'] = $this->aggregates;
        }
        if (null !== $this->alarmAliasName) {
            $res['AlarmAliasName'] = $this->alarmAliasName;
        }
        if (null !== $this->alarmItem) {
            $res['AlarmItem'] = $this->alarmItem;
        }
        if (null !== $this->alertWay) {
            $res['AlertWay'] = $this->alertWay;
        }
        if (null !== $this->contactGroupIds) {
            $res['ContactGroupIds'] = $this->contactGroupIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->NValue) {
            $res['NValue'] = $this->NValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlarmRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Aggregates'])) {
            $model->aggregates = $map['Aggregates'];
        }
        if (isset($map['AlarmAliasName'])) {
            $model->alarmAliasName = $map['AlarmAliasName'];
        }
        if (isset($map['AlarmItem'])) {
            $model->alarmItem = $map['AlarmItem'];
        }
        if (isset($map['AlertWay'])) {
            $model->alertWay = $map['AlertWay'];
        }
        if (isset($map['ContactGroupIds'])) {
            $model->contactGroupIds = $map['ContactGroupIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NValue'])) {
            $model->NValue = $map['NValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
