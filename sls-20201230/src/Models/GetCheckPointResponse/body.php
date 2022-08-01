<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var int
     */
    public $shard;

    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $consumer;
    protected $_name = [
        'shard'      => 'shard',
        'checkpoint' => 'checkpoint',
        'updateTime' => 'updateTime',
        'consumer'   => 'consumer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shard) {
            $res['shard'] = $this->shard;
        }
        if (null !== $this->checkpoint) {
            $res['checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->consumer) {
            $res['consumer'] = $this->consumer;
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
        if (isset($map['shard'])) {
            $model->shard = $map['shard'];
        }
        if (isset($map['checkpoint'])) {
            $model->checkpoint = $map['checkpoint'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['consumer'])) {
            $model->consumer = $map['consumer'];
        }

        return $model;
    }
}
