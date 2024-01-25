<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutAlertSettingRequest extends Model
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
    public $alertSilenceConfig;

    /**
     * @var string
     */
    public $businessGroupIdsJson;

    /**
     * @var string
     */
    public $contactGroupIdsJson;

    /**
     * @var string
     */
    public $contactIdsJson;

    /**
     * @var int
     */
    public $customerUid;

    /**
     * @var string
     */
    public $operaUid;

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
    public $stopDuration;
    protected $_name = [
        'alarmLevel'           => 'AlarmLevel',
        'alertName'            => 'AlertName',
        'alertSettingId'       => 'AlertSettingId',
        'alertSilenceConfig'   => 'AlertSilenceConfig',
        'businessGroupIdsJson' => 'BusinessGroupIdsJson',
        'contactGroupIdsJson'  => 'ContactGroupIdsJson',
        'contactIdsJson'       => 'ContactIdsJson',
        'customerUid'          => 'CustomerUid',
        'operaUid'             => 'OperaUid',
        'sendDingtalkNotice'   => 'SendDingtalkNotice',
        'sendEmailNotice'      => 'SendEmailNotice',
        'sendSmsNotice'        => 'SendSmsNotice',
        'stopDuration'         => 'StopDuration',
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
        if (null !== $this->alertSilenceConfig) {
            $res['AlertSilenceConfig'] = $this->alertSilenceConfig;
        }
        if (null !== $this->businessGroupIdsJson) {
            $res['BusinessGroupIdsJson'] = $this->businessGroupIdsJson;
        }
        if (null !== $this->contactGroupIdsJson) {
            $res['ContactGroupIdsJson'] = $this->contactGroupIdsJson;
        }
        if (null !== $this->contactIdsJson) {
            $res['ContactIdsJson'] = $this->contactIdsJson;
        }
        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
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
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAlertSettingRequest
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
        if (isset($map['AlertSilenceConfig'])) {
            $model->alertSilenceConfig = $map['AlertSilenceConfig'];
        }
        if (isset($map['BusinessGroupIdsJson'])) {
            $model->businessGroupIdsJson = $map['BusinessGroupIdsJson'];
        }
        if (isset($map['ContactGroupIdsJson'])) {
            $model->contactGroupIdsJson = $map['ContactGroupIdsJson'];
        }
        if (isset($map['ContactIdsJson'])) {
            $model->contactIdsJson = $map['ContactIdsJson'];
        }
        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
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
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        return $model;
    }
}
