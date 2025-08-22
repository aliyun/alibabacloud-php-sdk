<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

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
    public $corpUserId;

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
    public $isEmailVerify;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $reissueSendNotice;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'contactId' => 'ContactId',
        'contactName' => 'ContactName',
        'corpUserId' => 'CorpUserId',
        'dingRobotUrl' => 'DingRobotUrl',
        'email' => 'Email',
        'isEmailVerify' => 'IsEmailVerify',
        'phone' => 'Phone',
        'reissueSendNotice' => 'ReissueSendNotice',
        'resourceGroupId' => 'ResourceGroupId',
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

        if (null !== $this->corpUserId) {
            $res['CorpUserId'] = $this->corpUserId;
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

        if (isset($map['CorpUserId'])) {
            $model->corpUserId = $map['CorpUserId'];
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
