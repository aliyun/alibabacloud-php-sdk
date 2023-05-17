<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody\unlockUsersResult\failedUsers;
use AlibabaCloud\Tea\Model;

class unlockUsersResult extends Model
{
    /**
     * @var failedUsers[]
     */
    public $failedUsers;

    /**
     * @var string[]
     */
    public $unlockedUsers;
    protected $_name = [
        'failedUsers'   => 'FailedUsers',
        'unlockedUsers' => 'UnlockedUsers',
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
        if (null !== $this->unlockedUsers) {
            $res['UnlockedUsers'] = $this->unlockedUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unlockUsersResult
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
        if (isset($map['UnlockedUsers'])) {
            if (!empty($map['UnlockedUsers'])) {
                $model->unlockedUsers = $map['UnlockedUsers'];
            }
        }

        return $model;
    }
}
