<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @var queueInfo[]
     */
    public $queueInfo;
    protected $_name = [
        'queueInfo' => 'QueueInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueInfo) {
            $res['QueueInfo'] = [];
            if (null !== $this->queueInfo && \is_array($this->queueInfo)) {
                $n = 0;
                foreach ($this->queueInfo as $item) {
                    $res['QueueInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueInfo'])) {
            if (!empty($map['QueueInfo'])) {
                $model->queueInfo = [];
                $n                = 0;
                foreach ($map['QueueInfo'] as $item) {
                    $model->queueInfo[$n++] = null !== $item ? queueInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
