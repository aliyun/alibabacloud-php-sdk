<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeRouteDistributionStrategiesResponseBody\strategies\strategy;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @var strategy[]
     */
    public $strategy;
    protected $_name = [
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategy) {
            $res['Strategy'] = [];
            if (null !== $this->strategy && \is_array($this->strategy)) {
                $n = 0;
                foreach ($this->strategy as $item) {
                    $res['Strategy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Strategy'])) {
            if (!empty($map['Strategy'])) {
                $model->strategy = [];
                $n               = 0;
                foreach ($map['Strategy'] as $item) {
                    $model->strategy[$n++] = null !== $item ? strategy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
