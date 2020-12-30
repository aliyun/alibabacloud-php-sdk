<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\queueList\queue;
use AlibabaCloud\Tea\Model;

class queueList extends Model
{
    /**
     * @var queue[]
     */
    public $queue;
    protected $_name = [
        'queue' => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = [];
            if (null !== $this->queue && \is_array($this->queue)) {
                $n = 0;
                foreach ($this->queue as $item) {
                    $res['Queue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Queue'])) {
            if (!empty($map['Queue'])) {
                $model->queue = [];
                $n            = 0;
                foreach ($map['Queue'] as $item) {
                    $model->queue[$n++] = null !== $item ? queue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
