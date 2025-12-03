<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

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
        'timeEnd' => 'TimeEnd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
