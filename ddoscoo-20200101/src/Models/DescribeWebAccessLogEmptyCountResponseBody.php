<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebAccessLogEmptyCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $availableCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'availableCount' => 'AvailableCount',
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
        if (null !== $this->availableCount) {
            $res['AvailableCount'] = $this->availableCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebAccessLogEmptyCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableCount'])) {
            $model->availableCount = $map['AvailableCount'];
        }

        return $model;
    }
}
