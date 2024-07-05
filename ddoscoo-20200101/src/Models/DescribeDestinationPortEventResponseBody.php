<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponseBody\portList;
use AlibabaCloud\Tea\Model;

class DescribeDestinationPortEventResponseBody extends Model
{
    /**
     * @var portList[]
     */
    public $portList;

    /**
     * @example 9E7F6B2C-03F2-462F-9076-B782CF0DD502
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portList'  => 'PortList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portList) {
            $res['PortList'] = [];
            if (null !== $this->portList && \is_array($this->portList)) {
                $n = 0;
                foreach ($this->portList as $item) {
                    $res['PortList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDestinationPortEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortList'])) {
            if (!empty($map['PortList'])) {
                $model->portList = [];
                $n               = 0;
                foreach ($map['PortList'] as $item) {
                    $model->portList[$n++] = null !== $item ? portList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
