<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody\removeUsersResult\failedUsers;

class removeUsersResult extends Model
{
    /**
     * @var failedUsers[]
     */
    public $failedUsers;

    /**
     * @var string[]
     */
    public $removedUsers;
    protected $_name = [
        'failedUsers' => 'FailedUsers',
        'removedUsers' => 'RemovedUsers',
    ];

    public function validate()
    {
        if (\is_array($this->failedUsers)) {
            Model::validateArray($this->failedUsers);
        }
        if (\is_array($this->removedUsers)) {
            Model::validateArray($this->removedUsers);
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
                    $res['FailedUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->removedUsers) {
            if (\is_array($this->removedUsers)) {
                $res['RemovedUsers'] = [];
                $n1 = 0;
                foreach ($this->removedUsers as $item1) {
                    $res['RemovedUsers'][$n1] = $item1;
                    ++$n1;
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
                    $model->failedUsers[$n1] = failedUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RemovedUsers'])) {
            if (!empty($map['RemovedUsers'])) {
                $model->removedUsers = [];
                $n1 = 0;
                foreach ($map['RemovedUsers'] as $item1) {
                    $model->removedUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
