<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody\unlockUsersResult\failedUsers;

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
        'failedUsers' => 'FailedUsers',
        'unlockedUsers' => 'UnlockedUsers',
    ];

    public function validate()
    {
        if (\is_array($this->failedUsers)) {
            Model::validateArray($this->failedUsers);
        }
        if (\is_array($this->unlockedUsers)) {
            Model::validateArray($this->unlockedUsers);
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

        if (null !== $this->unlockedUsers) {
            if (\is_array($this->unlockedUsers)) {
                $res['UnlockedUsers'] = [];
                $n1 = 0;
                foreach ($this->unlockedUsers as $item1) {
                    $res['UnlockedUsers'][$n1++] = $item1;
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

        if (isset($map['UnlockedUsers'])) {
            if (!empty($map['UnlockedUsers'])) {
                $model->unlockedUsers = [];
                $n1 = 0;
                foreach ($map['UnlockedUsers'] as $item1) {
                    $model->unlockedUsers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
