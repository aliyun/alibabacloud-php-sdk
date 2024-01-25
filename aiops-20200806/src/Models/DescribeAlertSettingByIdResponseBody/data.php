<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmLevel;

    /**
     * @var int
     */
    public $alertBusinessSettingId;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $dataCreateTime;

    /**
     * @var string
     */
    public $dataCreateUser;

    /**
     * @var string
     */
    public $dataModifyTime;

    /**
     * @var string
     */
    public $dataModifyUser;

    /**
     * @var bool
     */
    public $sendDingtalkNotice;

    /**
     * @var bool
     */
    public $sendEmailNotice;

    /**
     * @var bool
     */
    public $sendSmsNotice;

    /**
     * @var int
     */
    public $settingStatus;

    /**
     * @var int
     */
    public $stopDuration;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'alarmLevel'             => 'AlarmLevel',
        'alertBusinessSettingId' => 'AlertBusinessSettingId',
        'alertName'              => 'AlertName',
        'dataCreateTime'         => 'DataCreateTime',
        'dataCreateUser'         => 'DataCreateUser',
        'dataModifyTime'         => 'DataModifyTime',
        'dataModifyUser'         => 'DataModifyUser',
        'sendDingtalkNotice'     => 'SendDingtalkNotice',
        'sendEmailNotice'        => 'SendEmailNotice',
        'sendSmsNotice'          => 'SendSmsNotice',
        'settingStatus'          => 'SettingStatus',
        'stopDuration'           => 'StopDuration',
        'uid'                    => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }
        if (null !== $this->alertBusinessSettingId) {
            $res['AlertBusinessSettingId'] = $this->alertBusinessSettingId;
        }
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->dataCreateTime) {
            $res['DataCreateTime'] = $this->dataCreateTime;
        }
        if (null !== $this->dataCreateUser) {
            $res['DataCreateUser'] = $this->dataCreateUser;
        }
        if (null !== $this->dataModifyTime) {
            $res['DataModifyTime'] = $this->dataModifyTime;
        }
        if (null !== $this->dataModifyUser) {
            $res['DataModifyUser'] = $this->dataModifyUser;
        }
        if (null !== $this->sendDingtalkNotice) {
            $res['SendDingtalkNotice'] = $this->sendDingtalkNotice;
        }
        if (null !== $this->sendEmailNotice) {
            $res['SendEmailNotice'] = $this->sendEmailNotice;
        }
        if (null !== $this->sendSmsNotice) {
            $res['SendSmsNotice'] = $this->sendSmsNotice;
        }
        if (null !== $this->settingStatus) {
            $res['SettingStatus'] = $this->settingStatus;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }
        if (isset($map['AlertBusinessSettingId'])) {
            $model->alertBusinessSettingId = $map['AlertBusinessSettingId'];
        }
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['DataCreateTime'])) {
            $model->dataCreateTime = $map['DataCreateTime'];
        }
        if (isset($map['DataCreateUser'])) {
            $model->dataCreateUser = $map['DataCreateUser'];
        }
        if (isset($map['DataModifyTime'])) {
            $model->dataModifyTime = $map['DataModifyTime'];
        }
        if (isset($map['DataModifyUser'])) {
            $model->dataModifyUser = $map['DataModifyUser'];
        }
        if (isset($map['SendDingtalkNotice'])) {
            $model->sendDingtalkNotice = $map['SendDingtalkNotice'];
        }
        if (isset($map['SendEmailNotice'])) {
            $model->sendEmailNotice = $map['SendEmailNotice'];
        }
        if (isset($map['SendSmsNotice'])) {
            $model->sendSmsNotice = $map['SendSmsNotice'];
        }
        if (isset($map['SettingStatus'])) {
            $model->settingStatus = $map['SettingStatus'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
