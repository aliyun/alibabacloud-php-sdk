<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LockStatus extends Model
{
    /**
     * @var int
     */
    public $lockId;

    /**
     * @var string
     */
    public $lockState;
    protected $_name = [
        'lockId'    => 'LockId',
        'lockState' => 'LockState',
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
        if (null !== $this->lockState) {
            $res['LockState'] = $this->lockState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LockStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LockId'])) {
            $model->lockId = $map['LockId'];
        }
        if (isset($map['LockState'])) {
            $model->lockState = $map['LockState'];
        }

        return $model;
    }
}
