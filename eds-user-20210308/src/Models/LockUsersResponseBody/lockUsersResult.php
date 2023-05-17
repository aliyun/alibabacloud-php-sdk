<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody\lockUsersResult\failedUsers;
use AlibabaCloud\Tea\Model;

class lockUsersResult extends Model
{
    /**
     * @var failedUsers[]
     */
    public $failedUsers;

    /**
     * @var string[]
     */
    public $lockedUsers;
    protected $_name = [
        'failedUsers' => 'FailedUsers',
        'lockedUsers' => 'LockedUsers',
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
        if (null !== $this->lockedUsers) {
            $res['LockedUsers'] = $this->lockedUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lockUsersResult
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
        if (isset($map['LockedUsers'])) {
            if (!empty($map['LockedUsers'])) {
                $model->lockedUsers = $map['LockedUsers'];
            }
        }

        return $model;
    }
}
