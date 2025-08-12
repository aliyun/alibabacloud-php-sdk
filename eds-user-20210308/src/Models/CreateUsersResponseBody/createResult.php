<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult\createdUsers;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult\failedUsers;

class createResult extends Model
{
    /**
     * @var createdUsers[]
     */
    public $createdUsers;

    /**
     * @var failedUsers[]
     */
    public $failedUsers;
    protected $_name = [
        'createdUsers' => 'CreatedUsers',
        'failedUsers' => 'FailedUsers',
    ];

    public function validate()
    {
        if (\is_array($this->createdUsers)) {
            Model::validateArray($this->createdUsers);
        }
        if (\is_array($this->failedUsers)) {
            Model::validateArray($this->failedUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdUsers) {
            if (\is_array($this->createdUsers)) {
                $res['CreatedUsers'] = [];
                $n1 = 0;
                foreach ($this->createdUsers as $item1) {
                    $res['CreatedUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedUsers'])) {
            if (!empty($map['CreatedUsers'])) {
                $model->createdUsers = [];
                $n1 = 0;
                foreach ($map['CreatedUsers'] as $item1) {
                    $model->createdUsers[$n1] = createdUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

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

        return $model;
    }
}
