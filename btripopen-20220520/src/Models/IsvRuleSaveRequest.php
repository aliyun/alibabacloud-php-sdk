<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IsvRuleSaveRequest extends Model
{
    /**
     * @var string
     */
    public $bookType;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bookType' => 'book_type',
        'status'   => 'status',
        'userId'   => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvRuleSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_type'])) {
            $model->bookType = $map['book_type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
