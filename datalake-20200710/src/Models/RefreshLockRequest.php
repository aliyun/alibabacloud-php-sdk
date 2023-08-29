<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class RefreshLockRequest extends Model
{
    /**
     * @description LockId
     *
     * @example 12324
     *
     * @var int
     */
    public $lockId;
    protected $_name = [
        'lockId' => 'LockId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockId) {
            $res['LockId'] = $this->lockId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockId'])) {
            $model->lockId = $map['LockId'];
        }

        return $model;
    }
}
