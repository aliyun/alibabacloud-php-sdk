<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;

class alertContacts extends Model
{
    /**
     * @var int
     */
    public $armsContactId;
    /**
     * @var float
     */
    public $contactId;
    /**
     * @var string
     */
    public $contactName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var bool
     */
    public $isEmailVerify;
    /**
     * @var bool
     */
    public $isVerify;
    /**
     * @var string
     */
    public $phone;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
