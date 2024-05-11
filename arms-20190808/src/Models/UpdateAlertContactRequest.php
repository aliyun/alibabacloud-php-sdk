<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertContactRequest extends Model
{
    /**
     * @description The ID of the alert contact to be updated. You can call the SearchAlertContact operation to query the contact ID. For more information, see [SearchAlertContact](https://help.aliyun.com/document_detail/130703.html).
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $contactId;

    /**
     * @description The new name of the alert contact.
     *
     * @example John Doe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The new webhook URL of the DingTalk chatbot. For more information, see [Configure a DingTalk chatbot to send alert notifications](https://help.aliyun.com/document_detail/106247.html). You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * >  If you do not specify this parameter, the original parameter value is deleted. If you specify this parameter, the original parameter value is updated.
     * @example https://oapi.dingtalk.com/robot/send?access_token=91f2f6****
     *
     * @var string
     */
    public $dingRobotWebhookUrl;

    /**
     * @description The new email address of the alert contact. You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * >  If you do not specify this parameter, the original parameter value is deleted. If you specify this parameter, the original parameter value is updated.
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The new mobile phone number of the alert contact. You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * >  If you do not specify this parameter, the original parameter value is deleted. If you specify this parameter, the original parameter value is updated.
     * @example 1381111****
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description The ID of the region. Set the value to `cn-hangzhou`.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether the alert contact receives system notifications. Valid values:
     *
     *   `true`: The alert contact receives system notifications.
     *   `false`: The alert contact does not receive system notifications.
     *
     * @example true
     *
     * @var bool
     */
    public $systemNoc;
    protected $_name = [
        'contactId'           => 'ContactId',
        'contactName'         => 'ContactName',
        'dingRobotWebhookUrl' => 'DingRobotWebhookUrl',
        'email'               => 'Email',
        'phoneNum'            => 'PhoneNum',
        'regionId'            => 'RegionId',
        'systemNoc'           => 'SystemNoc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->dingRobotWebhookUrl) {
            $res['DingRobotWebhookUrl'] = $this->dingRobotWebhookUrl;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['DingRobotWebhookUrl'])) {
            $model->dingRobotWebhookUrl = $map['DingRobotWebhookUrl'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }

        return $model;
    }
}
