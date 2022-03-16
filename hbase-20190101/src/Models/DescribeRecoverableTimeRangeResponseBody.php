<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoverableTimeRangeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $timeBegin;

    /**
     * @var string
     */
    public $timeEnd;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeBegin' => 'TimeBegin',
        'timeEnd'   => 'TimeEnd',
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
        if (null !== $this->timeBegin) {
            $res['TimeBegin'] = $this->timeBegin;
        }
        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecoverableTimeRangeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeBegin'])) {
            $model->timeBegin = $map['TimeBegin'];
        }
        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }

        return $model;
    }
}
