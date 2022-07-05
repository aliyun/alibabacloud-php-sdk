<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class SplitShardRequest extends Model
{
    /**
     * @description 这里固定为 split。
     *
     * @var string
     */
    public $action;

    /**
     * @description 分裂的位置。
     *
     * @var string
     */
    public $key;

    /**
     * @description 要分裂成的 shard 数量，默认为 2。
     *
     * @var int
     */
    public $shardCount;
    protected $_name = [
        'action'     => 'action',
        'key'        => 'key',
        'shardCount' => 'shardCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->shardCount) {
            $res['shardCount'] = $this->shardCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SplitShardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['shardCount'])) {
            $model->shardCount = $map['shardCount'];
        }

        return $model;
    }
}
