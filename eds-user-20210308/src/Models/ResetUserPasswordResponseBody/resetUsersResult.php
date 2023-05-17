<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody\resetUsersResult\failedUsers;
use AlibabaCloud\Tea\Model;

class resetUsersResult extends Model
{
    /**
     * @var failedUsers[]
     */
    public $failedUsers;

    /**
     * @var string[]
     */
    public $resetUsers;
    protected $_name = [
        'failedUsers' => 'FailedUsers',
        'resetUsers'  => 'ResetUsers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedUsers) {
            $res['FailedUsers'] = [];
            if (null !== $this->failedUsers && \is_array($this->failedUsers)) {
                $n = 0;
                foreach ($this->failedUsers as $item) {
                    $res['FailedUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resetUsers) {
            $res['ResetUsers'] = $this->resetUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resetUsersResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedUsers'])) {
            if (!empty($map['FailedUsers'])) {
                $model->failedUsers = [];
                $n                  = 0;
                foreach ($map['FailedUsers'] as $item) {
                    $model->failedUsers[$n++] = null !== $item ? failedUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResetUsers'])) {
            if (!empty($map['ResetUsers'])) {
                $model->resetUsers = $map['ResetUsers'];
            }
        }

        return $model;
    }
}
