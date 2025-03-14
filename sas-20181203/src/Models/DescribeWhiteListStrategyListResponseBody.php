<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListStrategyListResponseBody\strategies;
use AlibabaCloud\Tea\Model;

class DescribeWhiteListStrategyListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 571B2642-BF51-5BDD-906B-D2340DB9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the policies.
     *
     * @var strategies[]
     */
    public $strategies;
    protected $_name = [
        'requestId' => 'RequestId',
        'strategies' => 'Strategies',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = [];
            if (null !== $this->strategies && \is_array($this->strategies)) {
                $n = 0;
                foreach ($this->strategies as $item) {
                    $res['Strategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListStrategyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Strategies'])) {
            if (!empty($map['Strategies'])) {
                $model->strategies = [];
                $n = 0;
                foreach ($map['Strategies'] as $item) {
                    $model->strategies[$n++] = null !== $item ? strategies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
