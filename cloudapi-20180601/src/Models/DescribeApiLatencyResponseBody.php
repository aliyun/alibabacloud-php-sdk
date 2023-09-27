<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiLatencyResponseBody\latencys;
use AlibabaCloud\Tea\Model;

class DescribeApiLatencyResponseBody extends Model
{
    /**
     * @var latencys
     */
    public $latencys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'latencys'  => 'Latencys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latencys) {
            $res['Latencys'] = null !== $this->latencys ? $this->latencys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiLatencyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Latencys'])) {
            $model->latencys = latencys::fromMap($map['Latencys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
