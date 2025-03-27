<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpDdosThresholdResponseBody\threshold;

class DescribeIpDdosThresholdResponseBody extends Model
{
    /**
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
        if (null !== $this->threshold) {
            $this->threshold->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = null !== $this->threshold ? $this->threshold->toArray($noStream) : $this->threshold;
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

        if (isset($map['Threshold'])) {
            $model->threshold = threshold::fromMap($map['Threshold']);
        }

        return $model;
    }
}
