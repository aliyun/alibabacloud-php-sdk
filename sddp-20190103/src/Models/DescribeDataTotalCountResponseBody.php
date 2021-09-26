<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponseBody\dataCount;
use AlibabaCloud\Tea\Model;

class DescribeDataTotalCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataCount
     */
    public $dataCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'dataCount' => 'DataCount',
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
        if (null !== $this->dataCount) {
            $res['DataCount'] = null !== $this->dataCount ? $this->dataCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataTotalCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataCount'])) {
            $model->dataCount = dataCount::fromMap($map['DataCount']);
        }

        return $model;
    }
}
