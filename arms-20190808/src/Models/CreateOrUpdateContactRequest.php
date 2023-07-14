<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateContactRequest extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     *   If you do not specify this parameter, a new alert contact is created.
     *   If you specify this parameter, the specified alert contact is modified.
     *
     * @example 123
     *
     * @var int
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
     * @example https://oapi.dingtalk.com/robot/send?access_token=69d4e0******
     *
     * @var string
     */
    public $dingRobotUrl;

    /**
     * @description The email address of the alert contact.
     *
     * > You must specify at least one of the **Phone** and **Email** parameters. Each mobile number or email address can be used for only one alert contact.
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Specifies whether the email address is verified.
     *
     * @example true
     *
     * @var bool
     */
    public $isEmailVerify;

    /**
     * @description The mobile number of the alert contact.
     *
     * > You must specify at least one of the **Phone** and **Email** parameters. Each mobile number or email address can be used for only one alert contact.
     * @example 1381111****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The operation that you want to perform if phone calls fail to be answered. Valid values:
     *
     *   0: No operation is performed.
     *   1: A phone call is made again.
     *   2: A text message is sent.
     *   3 (default value): The global default value is used.
     *
     * @example 3
     *
     * @var int
     */
    public $reissueSendNotice;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'contactId'         => 'ContactId',
        'contactName'       => 'ContactName',
        'dingRobotUrl'      => 'DingRobotUrl',
        'email'             => 'Email',
        'isEmailVerify'     => 'IsEmailVerify',
        'phone'             => 'Phone',
        'reissueSendNotice' => 'ReissueSendNotice',
        'resourceGroupId'   => 'ResourceGroupId',
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
        if (null !== $this->isEmailVerify) {
            $res['IsEmailVerify'] = $this->isEmailVerify;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->reissueSendNotice) {
            $res['ReissueSendNotice'] = $this->reissueSendNotice;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateContactRequest
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
        if (isset($map['IsEmailVerify'])) {
            $model->isEmailVerify = $map['IsEmailVerify'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ReissueSendNotice'])) {
            $model->reissueSendNotice = $map['ReissueSendNotice'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
