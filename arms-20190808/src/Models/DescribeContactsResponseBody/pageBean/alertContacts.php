<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class alertContacts extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     * @example 100147
     *
     * @var int
     */
    public $armsContactId;

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
     * @example John Doe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The email address of the alert contact.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the email address was verified.
     *
     * @example true
     *
     * @var bool
     */
    public $isEmailVerify;

    /**
     * @description Indicates whether the mobile number was verified. Valid values:
     *
     *   `false`: no
     *   `true`: yes
     *
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
    protected $_name = [
        'armsContactId'     => 'ArmsContactId',
        'contactId'         => 'ContactId',
        'contactName'       => 'ContactName',
        'email'             => 'Email',
        'isEmailVerify'     => 'IsEmailVerify',
        'isVerify'          => 'IsVerify',
        'phone'             => 'Phone',
        'reissueSendNotice' => 'ReissueSendNotice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsContactId) {
            $res['ArmsContactId'] = $this->armsContactId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->isEmailVerify) {
            $res['IsEmailVerify'] = $this->isEmailVerify;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertContacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArmsContactId'])) {
            $model->armsContactId = $map['ArmsContactId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IsEmailVerify'])) {
            $model->isEmailVerify = $map['IsEmailVerify'];
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

        return $model;
    }
}
