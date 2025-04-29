<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class UpdateEmployeeLeaveStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $isLeave;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'isLeave' => 'is_leave',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isLeave) {
            $res['is_leave'] = $this->isLeave;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['is_leave'])) {
            $model->isLeave = $map['is_leave'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
