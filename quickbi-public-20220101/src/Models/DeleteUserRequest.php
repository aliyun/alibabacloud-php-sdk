<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DeleteUserRequest extends Model
{
    /**
     * @var string
     */
    public $transferUserId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'transferUserId' => 'TransferUserId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transferUserId) {
            $res['TransferUserId'] = $this->transferUserId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['TransferUserId'])) {
            $model->transferUserId = $map['TransferUserId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
