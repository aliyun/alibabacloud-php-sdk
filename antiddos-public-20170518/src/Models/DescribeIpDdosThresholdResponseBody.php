<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdResponseBody\threshold;
use AlibabaCloud\Tea\Model;

class DescribeIpDdosThresholdResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var threshold
     */
    public $threshold;
    protected $_name = [
        'requestId' => 'RequestId',
        'threshold' => 'Threshold',
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
        if (null !== $this->threshold) {
            $res['Threshold'] = null !== $this->threshold ? $this->threshold->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpDdosThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = threshold::fromMap($map['Threshold']);
        }

        return $model;
    }
}
