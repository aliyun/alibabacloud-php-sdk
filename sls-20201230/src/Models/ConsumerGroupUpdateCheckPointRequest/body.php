<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ConsumerGroupUpdateCheckPointRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example MTUyNDE1NTM3OTM3MzkwODQ5Ng==
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description Shard ID。
     *
     * @example 0
     *
     * @var int
     */
    public $shard;
    protected $_name = [
        'checkpoint' => 'checkpoint',
        'shard'      => 'shard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkpoint'])) {
            $model->checkpoint = $map['checkpoint'];
        }
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
        }

        return $model;
    }
}
