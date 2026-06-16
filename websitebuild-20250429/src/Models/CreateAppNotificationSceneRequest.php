<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateAppNotificationSceneRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channelsJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $emailFieldsJson;

    /**
     * @var string
     */
    public $emailLimitJson;

    /**
     * @var string
     */
    public $emailRecipientIdsJson;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phoneRecipientIdsJson;

    /**
     * @var string
     */
    public $smsFieldsJson;

    /**
     * @var string
     */
    public $smsLimitJson;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $triggerEventsJson;
    protected $_name = [
        'bizId' => 'BizId',
        'channelsJson' => 'ChannelsJson',
        'description' => 'Description',
        'emailFieldsJson' => 'EmailFieldsJson',
        'emailLimitJson' => 'EmailLimitJson',
        'emailRecipientIdsJson' => 'EmailRecipientIdsJson',
        'name' => 'Name',
        'phoneRecipientIdsJson' => 'PhoneRecipientIdsJson',
        'smsFieldsJson' => 'SmsFieldsJson',
        'smsLimitJson' => 'SmsLimitJson',
        'tableName' => 'TableName',
        'triggerEventsJson' => 'TriggerEventsJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->channelsJson) {
            $res['ChannelsJson'] = $this->channelsJson;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->emailFieldsJson) {
            $res['EmailFieldsJson'] = $this->emailFieldsJson;
        }

        if (null !== $this->emailLimitJson) {
            $res['EmailLimitJson'] = $this->emailLimitJson;
        }

        if (null !== $this->emailRecipientIdsJson) {
            $res['EmailRecipientIdsJson'] = $this->emailRecipientIdsJson;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->phoneRecipientIdsJson) {
            $res['PhoneRecipientIdsJson'] = $this->phoneRecipientIdsJson;
        }

        if (null !== $this->smsFieldsJson) {
            $res['SmsFieldsJson'] = $this->smsFieldsJson;
        }

        if (null !== $this->smsLimitJson) {
            $res['SmsLimitJson'] = $this->smsLimitJson;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->triggerEventsJson) {
            $res['TriggerEventsJson'] = $this->triggerEventsJson;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ChannelsJson'])) {
            $model->channelsJson = $map['ChannelsJson'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmailFieldsJson'])) {
            $model->emailFieldsJson = $map['EmailFieldsJson'];
        }

        if (isset($map['EmailLimitJson'])) {
            $model->emailLimitJson = $map['EmailLimitJson'];
        }

        if (isset($map['EmailRecipientIdsJson'])) {
            $model->emailRecipientIdsJson = $map['EmailRecipientIdsJson'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PhoneRecipientIdsJson'])) {
            $model->phoneRecipientIdsJson = $map['PhoneRecipientIdsJson'];
        }

        if (isset($map['SmsFieldsJson'])) {
            $model->smsFieldsJson = $map['SmsFieldsJson'];
        }

        if (isset($map['SmsLimitJson'])) {
            $model->smsLimitJson = $map['SmsLimitJson'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TriggerEventsJson'])) {
            $model->triggerEventsJson = $map['TriggerEventsJson'];
        }

        return $model;
    }
}
