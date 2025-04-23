<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;

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
        if (\is_array($this->queueInfo)) {
            Model::validateArray($this->queueInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueInfo) {
            if (\is_array($this->queueInfo)) {
                $res['QueueInfo'] = [];
                $n1 = 0;
                foreach ($this->queueInfo as $item1) {
                    $res['QueueInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QueueInfo'])) {
            if (!empty($map['QueueInfo'])) {
                $model->queueInfo = [];
                $n1 = 0;
                foreach ($map['QueueInfo'] as $item1) {
                    $model->queueInfo[$n1++] = queueInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
