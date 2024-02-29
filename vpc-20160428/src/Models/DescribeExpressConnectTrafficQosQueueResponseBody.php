<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressConnectTrafficQosQueueResponseBody\queueList;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectTrafficQosQueueResponseBody extends Model
{
    /**
     * @var queueList[]
     */
    public $queueList;

    /**
     * @example 606998F0-B94D-48FE-8316-ACA81BB230DA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queueList' => 'QueueList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueList) {
            $res['QueueList'] = [];
            if (null !== $this->queueList && \is_array($this->queueList)) {
                $n = 0;
                foreach ($this->queueList as $item) {
                    $res['QueueList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeExpressConnectTrafficQosQueueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = [];
                $n                = 0;
                foreach ($map['QueueList'] as $item) {
                    $model->queueList[$n++] = null !== $item ? queueList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
