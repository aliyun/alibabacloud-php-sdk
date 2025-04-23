<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody\resetUsersResult\failedUsers;

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
        'resetUsers' => 'ResetUsers',
    ];

    public function validate()
    {
        if (\is_array($this->failedUsers)) {
            Model::validateArray($this->failedUsers);
        }
        if (\is_array($this->resetUsers)) {
            Model::validateArray($this->resetUsers);
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

        if (null !== $this->resetUsers) {
            if (\is_array($this->resetUsers)) {
                $res['ResetUsers'] = [];
                $n1 = 0;
                foreach ($this->resetUsers as $item1) {
                    $res['ResetUsers'][$n1++] = $item1;
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

        if (isset($map['ResetUsers'])) {
            if (!empty($map['ResetUsers'])) {
                $model->resetUsers = [];
                $n1 = 0;
                foreach ($map['ResetUsers'] as $item1) {
                    $model->resetUsers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
