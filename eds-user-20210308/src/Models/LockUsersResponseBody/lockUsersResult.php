<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody\lockUsersResult\failedUsers;

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
        if (\is_array($this->failedUsers)) {
            Model::validateArray($this->failedUsers);
        }
        if (\is_array($this->lockedUsers)) {
            Model::validateArray($this->lockedUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedUsers) {
            if (\is_array($this->failedUsers)) {
                $res['FailedUsers'] = [];
                $n1 = 0;
                foreach ($this->failedUsers as $item1) {
                    $res['FailedUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->lockedUsers) {
            if (\is_array($this->lockedUsers)) {
                $res['LockedUsers'] = [];
                $n1 = 0;
                foreach ($this->lockedUsers as $item1) {
                    $res['LockedUsers'][$n1++] = $item1;
                }
            }
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
        if (isset($map['FailedUsers'])) {
            if (!empty($map['FailedUsers'])) {
                $model->failedUsers = [];
                $n1 = 0;
                foreach ($map['FailedUsers'] as $item1) {
                    $model->failedUsers[$n1++] = failedUsers::fromMap($item1);
                }
            }
        }

        if (isset($map['LockedUsers'])) {
            if (!empty($map['LockedUsers'])) {
                $model->lockedUsers = [];
                $n1 = 0;
                foreach ($map['LockedUsers'] as $item1) {
                    $model->lockedUsers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
