<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid\labelMatchExpressionGroups;
use AlibabaCloud\Tea\Model;

class labelMatchExpressionGrid extends Model
{
    /**
     * @description The collection of dispatch rules.
     *
     * @var labelMatchExpressionGroups[]
     */
    public $labelMatchExpressionGroups;
    protected $_name = [
        'labelMatchExpressionGroups' => 'LabelMatchExpressionGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelMatchExpressionGroups) {
            $res['LabelMatchExpressionGroups'] = [];
            if (null !== $this->labelMatchExpressionGroups && \is_array($this->labelMatchExpressionGroups)) {
                $n = 0;
                foreach ($this->labelMatchExpressionGroups as $item) {
                    $res['LabelMatchExpressionGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelMatchExpressionGrid
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelMatchExpressionGroups'])) {
            if (!empty($map['LabelMatchExpressionGroups'])) {
                $model->labelMatchExpressionGroups = [];
                $n                                 = 0;
                foreach ($map['LabelMatchExpressionGroups'] as $item) {
                    $model->labelMatchExpressionGroups[$n++] = null !== $item ? labelMatchExpressionGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
