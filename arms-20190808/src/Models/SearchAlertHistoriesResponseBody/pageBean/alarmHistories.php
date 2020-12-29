<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @var int
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var int
     */
    public $alarmResponseCode;

    /**
     * @var string
     */
    public $emails;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $alarmSources;

    /**
     * @var string
     */
    public $alarmContent;

    /**
     * @var string
     */
    public $phones;

    /**
     * @var int
     */
    public $alarmType;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'alarmTime'         => 'AlarmTime',
        'strategyId'        => 'StrategyId',
        'alarmResponseCode' => 'AlarmResponseCode',
        'emails'            => 'Emails',
        'userId'            => 'UserId',
        'alarmSources'      => 'AlarmSources',
        'alarmContent'      => 'AlarmContent',
        'phones'            => 'Phones',
        'alarmType'         => 'AlarmType',
        'target'            => 'Target',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->alarmResponseCode) {
            $res['AlarmResponseCode'] = $this->alarmResponseCode;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->alarmSources) {
            $res['AlarmSources'] = $this->alarmSources;
        }
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }
        if (null !== $this->phones) {
            $res['Phones'] = $this->phones;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['AlarmResponseCode'])) {
            $model->alarmResponseCode = $map['AlarmResponseCode'];
        }
        if (isset($map['Emails'])) {
            $model->emails = $map['Emails'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['AlarmSources'])) {
            $model->alarmSources = $map['AlarmSources'];
        }
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }
        if (isset($map['Phones'])) {
            $model->phones = $map['Phones'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
