<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponseBody\data;

use AlibabaCloud\Dara\Model;

class stacks extends Model
{
    /**
     * @var string
     */
    public $thread;

    /**
     * @var string[]
     */
    public $tracks;
    protected $_name = [
        'thread' => 'thread',
        'tracks' => 'tracks',
    ];

    public function validate()
    {
        if (\is_array($this->tracks)) {
            Model::validateArray($this->tracks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->thread) {
            $res['thread'] = $this->thread;
        }

        if (null !== $this->tracks) {
            if (\is_array($this->tracks)) {
                $res['tracks'] = [];
                $n1 = 0;
                foreach ($this->tracks as $item1) {
                    $res['tracks'][$n1++] = $item1;
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
        if (isset($map['thread'])) {
            $model->thread = $map['thread'];
        }

        if (isset($map['tracks'])) {
            if (!empty($map['tracks'])) {
                $model->tracks = [];
                $n1 = 0;
                foreach ($map['tracks'] as $item1) {
                    $model->tracks[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
