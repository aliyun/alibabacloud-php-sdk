<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody\data;

use AlibabaCloud\Tea\Model;

class stacks extends Model
{
    /**
     * @description Thread id.
     *
     * @example 123
     *
     * @var string
     */
    public $thread;

    /**
     * @description Stack Information.
     *
     * @var string[]
     */
    public $tracks;
    protected $_name = [
        'thread' => 'thread',
        'tracks' => 'tracks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thread) {
            $res['thread'] = $this->thread;
        }
        if (null !== $this->tracks) {
            $res['tracks'] = $this->tracks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['thread'])) {
            $model->thread = $map['thread'];
        }
        if (isset($map['tracks'])) {
            if (!empty($map['tracks'])) {
                $model->tracks = $map['tracks'];
            }
        }

        return $model;
    }
}
