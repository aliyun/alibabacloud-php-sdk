<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateContactResponseBody;

use AlibabaCloud\Dara\Model;

class alertContact extends Model
{
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
    public $dingRobotUrl;
    /**
     * @var string
     */
    public $email;
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
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
