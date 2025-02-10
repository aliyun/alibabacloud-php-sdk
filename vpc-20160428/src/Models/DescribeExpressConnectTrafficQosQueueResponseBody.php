<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosQueueResponseBody\queueList;

class DescribeExpressConnectTrafficQosQueueResponseBody extends Model
{
    /**
     * @var queueList[]
     */
    public $queueList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueList' => 'QueueList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->queueList)) {
            Model::validateArray($this->queueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueList) {
            if (\is_array($this->queueList)) {
                $res['QueueList'] = [];
                $n1               = 0;
                foreach ($this->queueList as $item1) {
                    $res['QueueList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n1               = 0;
                foreach ($map['QueueList'] as $item1) {
                    $model->queueList[$n1++] = queueList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
