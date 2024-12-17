<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponseBody extends Model
{
    /**
     * @example { “timestamp”: 1490164200000, “Maximum”: 100, “userId”: “1234567898765432”, “Minimum”: 4.55, “instanceId”: “i-bp18abl200xk9599ck7c”, “Average”: 93.84 }
     *
     * @var string
     */
    public $datapoints;

    /**
     * @example 212db86sca4384811e0b5e8707ec2****
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
     * @example F3F44BE3-5419-4B61-9BAC-E66E295A****
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
     * @return DescribeTairKVCacheCustomInstanceHistoryMonitorValuesResponseBody
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
