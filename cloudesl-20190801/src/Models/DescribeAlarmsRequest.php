<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmsRequest extends Model
{
    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var string
     */
    public $alarmStatus;

    /**
     * @var string
     */
    public $alarmType;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $fromAlarmTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $toAlarmTime;
    protected $_name = [
        'alarmId'       => 'AlarmId',
        'alarmStatus'   => 'AlarmStatus',
        'alarmType'     => 'AlarmType',
        'errorType'     => 'ErrorType',
        'fromAlarmTime' => 'FromAlarmTime',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'storeId'       => 'StoreId',
        'toAlarmTime'   => 'ToAlarmTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->alarmStatus) {
            $res['AlarmStatus'] = $this->alarmStatus;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->fromAlarmTime) {
            $res['FromAlarmTime'] = $this->fromAlarmTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->toAlarmTime) {
            $res['ToAlarmTime'] = $this->toAlarmTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatus = $map['AlarmStatus'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['FromAlarmTime'])) {
            $model->fromAlarmTime = $map['FromAlarmTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['ToAlarmTime'])) {
            $model->toAlarmTime = $map['ToAlarmTime'];
        }

        return $model;
    }
}
