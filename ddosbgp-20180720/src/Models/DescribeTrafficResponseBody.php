<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeTrafficResponseBody\flowList;
use AlibabaCloud\Tea\Model;

class DescribeTrafficResponseBody extends Model
{
    /**
     * @description The ID of the traffic statistics.
     *
     * @var flowList[]
     */
    public $flowList;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 6A507DC8-F657-4C13-84E2-D1D1B9400753
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowList'  => 'FlowList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowList) {
            $res['FlowList'] = [];
            if (null !== $this->flowList && \is_array($this->flowList)) {
                $n = 0;
                foreach ($this->flowList as $item) {
                    $res['FlowList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n               = 0;
                foreach ($map['FlowList'] as $item) {
                    $model->flowList[$n++] = null !== $item ? flowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
