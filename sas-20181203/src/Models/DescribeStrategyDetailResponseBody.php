<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy;
use AlibabaCloud\Tea\Model;

class DescribeStrategyDetailResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C5B28F65-9245-5DC1-B3CF-5F2756A756A8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the baseline check policy.
     *
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'requestId' => 'RequestId',
        'strategy'  => 'Strategy',
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
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStrategyDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }

        return $model;
    }
}
