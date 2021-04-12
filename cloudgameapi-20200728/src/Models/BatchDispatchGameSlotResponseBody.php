<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\BatchDispatchGameSlotResponseBody\queueResultList;
use AlibabaCloud\Tea\Model;

class BatchDispatchGameSlotResponseBody extends Model
{
    /**
     * @var queueResultList[]
     */
    public $queueResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueResultList' => 'QueueResultList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueResultList) {
            $res['QueueResultList'] = [];
            if (null !== $this->queueResultList && \is_array($this->queueResultList)) {
                $n = 0;
                foreach ($this->queueResultList as $item) {
                    $res['QueueResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDispatchGameSlotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueResultList'])) {
            if (!empty($map['QueueResultList'])) {
                $model->queueResultList = [];
                $n                      = 0;
                foreach ($map['QueueResultList'] as $item) {
                    $model->queueResultList[$n++] = null !== $item ? queueResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
