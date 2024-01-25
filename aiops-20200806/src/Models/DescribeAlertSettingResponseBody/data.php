<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertSettingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmLevel;

    /**
     * @var string
     */
    public $alertName;

    /**
     * @var int
     */
    public $alertSettingId;

    /**
     * @var string
     */
    public $businessGroupIds;

    /**
     * @var string
     */
    public $businessGroupNames;

    /**
     * @var string
     */
    public $contactIds;

    /**
     * @var string
     */
    public $contactNames;

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
    public $totalBusinessResourceNumber;
    protected $_name = [
        'alarmLevel'                  => 'AlarmLevel',
        'alertName'                   => 'AlertName',
        'alertSettingId'              => 'AlertSettingId',
        'businessGroupIds'            => 'BusinessGroupIds',
        'businessGroupNames'          => 'BusinessGroupNames',
        'contactIds'                  => 'ContactIds',
        'contactNames'                => 'ContactNames',
        'sendDingtalkNotice'          => 'SendDingtalkNotice',
        'sendEmailNotice'             => 'SendEmailNotice',
        'sendSmsNotice'               => 'SendSmsNotice',
        'settingStatus'               => 'SettingStatus',
        'stopDuration'                => 'StopDuration',
        'totalBusinessResourceNumber' => 'TotalBusinessResourceNumber',
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
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->alertSettingId) {
            $res['AlertSettingId'] = $this->alertSettingId;
        }
        if (null !== $this->businessGroupIds) {
            $res['BusinessGroupIds'] = $this->businessGroupIds;
        }
        if (null !== $this->businessGroupNames) {
            $res['BusinessGroupNames'] = $this->businessGroupNames;
        }
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->contactNames) {
            $res['ContactNames'] = $this->contactNames;
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
        if (null !== $this->totalBusinessResourceNumber) {
            $res['TotalBusinessResourceNumber'] = $this->totalBusinessResourceNumber;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }
        if (isset($map['BusinessGroupIds'])) {
            $model->businessGroupIds = $map['BusinessGroupIds'];
        }
        if (isset($map['BusinessGroupNames'])) {
            $model->businessGroupNames = $map['BusinessGroupNames'];
        }
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }
        if (isset($map['ContactNames'])) {
            $model->contactNames = $map['ContactNames'];
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
        if (isset($map['TotalBusinessResourceNumber'])) {
            $model->totalBusinessResourceNumber = $map['TotalBusinessResourceNumber'];
        }

        return $model;
    }
}
