<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyTargetResponseBody\strategyTargets;

class DescribeStrategyTargetResponseBody extends Model
{
    /**
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
        if (\is_array($this->strategyTargets)) {
            Model::validateArray($this->strategyTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->strategyTargets) {
            if (\is_array($this->strategyTargets)) {
                $res['StrategyTargets'] = [];
                $n1                     = 0;
                foreach ($this->strategyTargets as $item1) {
                    $res['StrategyTargets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['StrategyTargets'])) {
            if (!empty($map['StrategyTargets'])) {
                $model->strategyTargets = [];
                $n1                     = 0;
                foreach ($map['StrategyTargets'] as $item1) {
                    $model->strategyTargets[$n1++] = strategyTargets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
