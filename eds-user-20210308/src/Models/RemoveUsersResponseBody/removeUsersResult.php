<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody\removeUsersResult\failedUsers;
use AlibabaCloud\Tea\Model;

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
        'failedUsers'  => 'FailedUsers',
        'removedUsers' => 'RemovedUsers',
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
        if (null !== $this->removedUsers) {
            $res['RemovedUsers'] = $this->removedUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeUsersResult
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
        if (isset($map['RemovedUsers'])) {
            if (!empty($map['RemovedUsers'])) {
                $model->removedUsers = $map['RemovedUsers'];
            }
        }

        return $model;
    }
}
