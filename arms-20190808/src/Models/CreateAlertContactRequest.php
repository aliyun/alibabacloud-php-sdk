<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateAlertContactRequest extends Model
{
    /**
     * @description The name of the alert contact.
     *
     * @example JohnDoe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The webhook URL of the DingTalk chatbot. For more information about how to obtain the URL, see [Configure a DingTalk chatbot to send alert notifications](https://www.alibabacloud.com/help/zh/doc-detail/106247.htm). You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * >  Enter `alert` in the custom keyword field of DingTalk chatbot security settings.
     * @example https://oapi.dingtalk.com/robot/send?access_token=91f2f6****
     *
     * @var string
     */
    public $dingRobotWebhookUrl;

    /**
     * @description The email address of the alert contact. You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile number of the alert contact. You must specify at least one of the following parameters: PhoneNum, Email, and DingRobotWebhookUrl.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description The ID of the region. Set the value to `cn-hangzhou`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. You can obtain the resource group ID in the **Resource Management** console.
     *
     * @example rg-aek2eq4peca****
     *
     * @var string
     */
    public $resourceGroupId;

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
        'contactName'         => 'ContactName',
        'dingRobotWebhookUrl' => 'DingRobotWebhookUrl',
        'email'               => 'Email',
        'phoneNum'            => 'PhoneNum',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'systemNoc'           => 'SystemNoc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }

        return $model;
    }
}
