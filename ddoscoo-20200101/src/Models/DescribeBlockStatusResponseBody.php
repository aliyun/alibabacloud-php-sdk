<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeBlockStatusResponseBody\statusList;
use AlibabaCloud\Tea\Model;

class DescribeBlockStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statusList[]
     */
    public $statusList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = [];
            if (null !== $this->statusList && \is_array($this->statusList)) {
                $n = 0;
                foreach ($this->statusList as $item) {
                    $res['StatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBlockStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n                 = 0;
                foreach ($map['StatusList'] as $item) {
                    $model->statusList[$n++] = null !== $item ? statusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
