<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\alarms\alarm;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\alarms\alarm\dimensions\dimension;
use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @var dimension[]
     */
    public $dimension;
    protected $_name = [
        'dimension' => 'Dimension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['Dimension'] = [];
            if (null !== $this->dimension && \is_array($this->dimension)) {
                $n = 0;
                foreach ($this->dimension as $item) {
                    $res['Dimension'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = [];
                $n                = 0;
                foreach ($map['Dimension'] as $item) {
                    $model->dimension[$n++] = null !== $item ? dimension::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
