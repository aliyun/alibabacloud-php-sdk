<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyTargetResponseBody\strategyTargets;
use AlibabaCloud\Tea\Model;

class DescribeStrategyTargetResponseBody extends Model
{
    /**
     * @example 001BAB34-D70A-54B0-B1D7-91B76DCDD8E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var strategyTargets[]
     */
    public $strategyTargets;
    protected $_name = [
        'requestId'       => 'RequestId',
        'strategyTargets' => 'StrategyTargets',
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
        if (null !== $this->strategyTargets) {
            $res['StrategyTargets'] = [];
            if (null !== $this->strategyTargets && \is_array($this->strategyTargets)) {
                $n = 0;
                foreach ($this->strategyTargets as $item) {
                    $res['StrategyTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStrategyTargetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StrategyTargets'])) {
            if (!empty($map['StrategyTargets'])) {
                $model->strategyTargets = [];
                $n                      = 0;
                foreach ($map['StrategyTargets'] as $item) {
                    $model->strategyTargets[$n++] = null !== $item ? strategyTargets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
