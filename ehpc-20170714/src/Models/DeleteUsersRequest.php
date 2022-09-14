<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models;

use AlibabaCloud\SDK\EHPC\V20170714\Models\DeleteUsersRequest\user;
use AlibabaCloud\Tea\Model;

class DeleteUsersRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var user[]
     */
    public $user;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->user) {
            $res['User'] = [];
            if (null !== $this->user && \is_array($this->user)) {
                $n = 0;
                foreach ($this->user as $item) {
                    $res['User'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['User'])) {
            if (!empty($map['User'])) {
                $model->user = [];
                $n           = 0;
                foreach ($map['User'] as $item) {
                    $model->user[$n++] = null !== $item ? user::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
