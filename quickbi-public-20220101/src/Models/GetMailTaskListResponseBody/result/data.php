<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetMailTaskListResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizOwnerName;

    /**
     * @var string
     */
    public $bizOwnerUserId;

    /**
     * @var string
     */
    public $mailId;

    /**
     * @var bool
     */
    public $paused;

    /**
     * @var string
     */
    public $subscribeName;
    protected $_name = [
        'bizOwnerName' => 'BizOwnerName',
        'bizOwnerUserId' => 'BizOwnerUserId',
        'mailId' => 'MailId',
        'paused' => 'Paused',
        'subscribeName' => 'SubscribeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizOwnerName) {
            $res['BizOwnerName'] = $this->bizOwnerName;
        }

        if (null !== $this->bizOwnerUserId) {
            $res['BizOwnerUserId'] = $this->bizOwnerUserId;
        }

        if (null !== $this->mailId) {
            $res['MailId'] = $this->mailId;
        }

        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }

        if (null !== $this->subscribeName) {
            $res['SubscribeName'] = $this->subscribeName;
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
        if (isset($map['BizOwnerName'])) {
            $model->bizOwnerName = $map['BizOwnerName'];
        }

        if (isset($map['BizOwnerUserId'])) {
            $model->bizOwnerUserId = $map['BizOwnerUserId'];
        }

        if (isset($map['MailId'])) {
            $model->mailId = $map['MailId'];
        }

        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        if (isset($map['SubscribeName'])) {
            $model->subscribeName = $map['SubscribeName'];
        }

        return $model;
    }
}
