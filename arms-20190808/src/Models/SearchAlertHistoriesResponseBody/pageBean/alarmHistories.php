<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @var string
     */
    public $alarmContent;

    /**
     * @var int
     */
    public $alarmResponseCode;

    /**
     * @var string
     */
    public $alarmSources;

    /**
     * @var int
     */
    public $alarmTime;

    /**
     * @var int
     */
    public $alarmType;

    /**
     * @var string
     */
    public $emails;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $phones;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alarmContent'      => 'AlarmContent',
        'alarmResponseCode' => 'AlarmResponseCode',
        'alarmSources'      => 'AlarmSources',
        'alarmTime'         => 'AlarmTime',
        'alarmType'         => 'AlarmType',
        'emails'            => 'Emails',
        'id'                => 'Id',
        'phones'            => 'Phones',
        'strategyId'        => 'StrategyId',
        'target'            => 'Target',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }
        if (null !== $this->alarmResponseCode) {
            $res['AlarmResponseCode'] = $this->alarmResponseCode;
        }
        if (null !== $this->alarmSources) {
            $res['AlarmSources'] = $this->alarmSources;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->alarmType) {
            $res['AlarmType'] = $this->alarmType;
        }
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->phones) {
            $res['Phones'] = $this->phones;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }
        if (isset($map['AlarmResponseCode'])) {
            $model->alarmResponseCode = $map['AlarmResponseCode'];
        }
        if (isset($map['AlarmSources'])) {
            $model->alarmSources = $map['AlarmSources'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['AlarmType'])) {
            $model->alarmType = $map['AlarmType'];
        }
        if (isset($map['Emails'])) {
            $model->emails = $map['Emails'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Phones'])) {
            $model->phones = $map['Phones'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
