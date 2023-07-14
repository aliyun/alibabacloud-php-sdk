<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertHistoriesResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class alarmHistories extends Model
{
    /**
     * @description The content of the alert notification.
     *
     * @example "Alert name: Alert1\nAlert time: 2020-07-24 12:14:00\nAlert content: A total of four alerts are triggered: \*\*\*\*"
     *
     * @var string
     */
    public $alarmContent;

    /**
     * @description The response code returned after the alert notification was sent.
     *
     * @example 200
     *
     * @var int
     */
    public $alarmResponseCode;

    /**
     * @description The webhook URL, such as the webhook URL of a DingTalk chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=91f2f65002fefe0ab9b71e6590c5ca504348cad742ff01e9c8ab204439ca****
     *
     * @var string
     */
    public $alarmSources;

    /**
     * @description The time when the alert notification was sent.
     *
     * @example 1595564179000
     *
     * @var int
     */
    public $alarmTime;

    /**
     * @description The type of the alert rule. Default value: 4. Valid values:
     *
     *   `1`: a custom alert rule that is used to monitor drill-down data sets
     *   `3`: a custom alert rule that is used to monitor tiled data sets
     *   `4`: an alert rule that is used to monitor web pages, including the default alert rule for browser monitoring
     *   `5`: an alert rule that is used to monitor applications, including the default alert rule for application monitoring
     *   `6`: the default alert rule for browser monitoring
     *   `7`: the default alert rule for application monitoring
     *   `8`: a Tracing Analysis alert rule
     *   `101`: a Prometheus alert rule
     *
     * @example 4
     *
     * @var int
     */
    public $alarmType;

    /**
     * @description The email address of the alert contact.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $emails;

    /**
     * @description The ID of the alert notification.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The mobile phone number of the alert contact.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phones;

    /**
     * @description The internal fields.
     *
     * @example ""
     *
     * @var string
     */
    public $strategyId;

    /**
     * @description The internal fields.
     *
     * @example ""
     *
     * @var string
     */
    public $target;

    /**
     * @description The ID of the user.
     *
     * @example 113197164949****
     *
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
