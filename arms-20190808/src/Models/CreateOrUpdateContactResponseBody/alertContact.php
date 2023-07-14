<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactResponseBody;

use AlibabaCloud\Tea\Model;

class alertContact extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     * @example 123
     *
     * @var float
     */
    public $contactId;

    /**
     * @description The name of the alert contact.
     *
     * @example JohnDoe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The webhook URL of the DingTalk chatbot.
     *
     * @example https://test1.com
     *
     * @var string
     */
    public $dingRobotUrl;

    /**
     * @description The email address of the alert contact.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the mobile number was verified. Valid values:
     *
     *   `false` (default value): No
     *   `true`: Yes
     *
     * You can call the **SendTTSVerifyLink** operation to verify the mobile number of an alert contact. Only verified mobile numbers can be specified in a notification policy to receive phone calls.
     * @example false
     *
     * @var bool
     */
    public $isVerify;

    /**
     * @description The mobile number of the alert contact.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The operation that you want to perform if phone calls fail to be answered. Valid values: 0: No operation is performed. 1: A phone call is made again. 2: A text message is sent. 3 (default value): The global default value is used.
     *
     * @example 3
     *
     * @var int
     */
    public $reissueSendNotice;

    /**
     * @description Indicates whether the email address was verified.
     *
     * @example true
     *
     * @var bool
     */
    public $isEmailVerify;
    protected $_name = [
        'contactId'         => 'ContactId',
        'contactName'       => 'ContactName',
        'dingRobotUrl'      => 'DingRobotUrl',
        'email'             => 'Email',
        'isVerify'          => 'IsVerify',
        'phone'             => 'Phone',
        'reissueSendNotice' => 'ReissueSendNotice',
        'isEmailVerify'     => 'isEmailVerify',
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
        if (null !== $this->dingRobotUrl) {
            $res['DingRobotUrl'] = $this->dingRobotUrl;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->isVerify) {
            $res['IsVerify'] = $this->isVerify;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->reissueSendNotice) {
            $res['ReissueSendNotice'] = $this->reissueSendNotice;
        }
        if (null !== $this->isEmailVerify) {
            $res['isEmailVerify'] = $this->isEmailVerify;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertContact
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
        if (isset($map['DingRobotUrl'])) {
            $model->dingRobotUrl = $map['DingRobotUrl'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IsVerify'])) {
            $model->isVerify = $map['IsVerify'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ReissueSendNotice'])) {
            $model->reissueSendNotice = $map['ReissueSendNotice'];
        }
        if (isset($map['isEmailVerify'])) {
            $model->isEmailVerify = $map['isEmailVerify'];
        }

        return $model;
    }
}
