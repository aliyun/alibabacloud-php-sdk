<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizedStrategyTargetsResponseBody\startegyTargets;
use AlibabaCloud\Tea\Model;

class DescribeCustomizedStrategyTargetsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1EE7B150-D67E-53FD-A52D-3E8E669A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the servers to which custom policies are applied.
     *
     * @var startegyTargets[]
     */
    public $startegyTargets;
    protected $_name = [
        'requestId'       => 'RequestId',
        'startegyTargets' => 'StartegyTargets',
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
        if (null !== $this->startegyTargets) {
            $res['StartegyTargets'] = [];
            if (null !== $this->startegyTargets && \is_array($this->startegyTargets)) {
                $n = 0;
                foreach ($this->startegyTargets as $item) {
                    $res['StartegyTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizedStrategyTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartegyTargets'])) {
            if (!empty($map['StartegyTargets'])) {
                $model->startegyTargets = [];
                $n                      = 0;
                foreach ($map['StartegyTargets'] as $item) {
                    $model->startegyTargets[$n++] = null !== $item ? startegyTargets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
