<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult\createdUsers;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponseBody\createResult\failedUsers;
use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @description Details of the created convenience users.
     *
     * @var createdUsers[]
     */
    public $createdUsers;

    /**
     * @description Details of the convenience users that failed to be created.
     *
     * @var failedUsers[]
     */
    public $failedUsers;
    protected $_name = [
        'createdUsers' => 'CreatedUsers',
        'failedUsers'  => 'FailedUsers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdUsers) {
            $res['CreatedUsers'] = [];
            if (null !== $this->createdUsers && \is_array($this->createdUsers)) {
                $n = 0;
                foreach ($this->createdUsers as $item) {
                    $res['CreatedUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedUsers) {
            $res['FailedUsers'] = [];
            if (null !== $this->failedUsers && \is_array($this->failedUsers)) {
                $n = 0;
                foreach ($this->failedUsers as $item) {
                    $res['FailedUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedUsers'])) {
            if (!empty($map['CreatedUsers'])) {
                $model->createdUsers = [];
                $n                   = 0;
                foreach ($map['CreatedUsers'] as $item) {
                    $model->createdUsers[$n++] = null !== $item ? createdUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailedUsers'])) {
            if (!empty($map['FailedUsers'])) {
                $model->failedUsers = [];
                $n                  = 0;
                foreach ($map['FailedUsers'] as $item) {
                    $model->failedUsers[$n++] = null !== $item ? failedUsers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
