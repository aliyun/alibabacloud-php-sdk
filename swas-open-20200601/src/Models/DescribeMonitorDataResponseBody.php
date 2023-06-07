<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitorDataResponseBody extends Model
{
    /**
     * @example []
     *
     * @var string
     */
    public $datapoints;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nOc1nj4M9UaAZ/I8db***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datapoints' => 'Datapoints',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
