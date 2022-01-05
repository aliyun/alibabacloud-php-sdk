<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTableDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $avgSize;

    /**
     * @var items
     */
    public $items;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avgSize'   => 'AvgSize',
        'items'     => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgSize) {
            $res['AvgSize'] = $this->avgSize;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTableDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgSize'])) {
            $model->avgSize = $map['AvgSize'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
