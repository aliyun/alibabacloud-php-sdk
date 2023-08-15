<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoverableTimeRangeResponseBody extends Model
{
    /**
     * @example A1A51D18-96DC-465C-9F1B-47180CA22524
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2020-10-26T18:02:03Z
     *
     * @var string
     */
    public $timeBegin;

    /**
     * @example 2020-11-05T01:20:31Z
     *
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
