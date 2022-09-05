<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateContactRequest extends Model
{
    /**
     * @var int
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
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $reissueSendNotice;
    protected $_name = [
        'contactId'         => 'ContactId',
        'contactName'       => 'ContactName',
        'email'             => 'Email',
        'phone'             => 'Phone',
        'reissueSendNotice' => 'ReissueSendNotice',
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
        if (null !== $this->email) {
            $res['Email'] = $this->email;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
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
