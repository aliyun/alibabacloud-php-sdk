<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsRequest\user;
use AlibabaCloud\Tea\Model;

class ModifyUserGroupsRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var user[]
     */
    public $user;
    protected $_name = [
        'async'     => 'Async',
        'clusterId' => 'ClusterId',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
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
     * @return ModifyUserGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
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
