<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid;

use AlibabaCloud\SDK\ARMS\V20210519\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid\labelMatchExpressionGroups\labelMatchExpressions;
use AlibabaCloud\Tea\Model;

class labelMatchExpressionGroups extends Model
{
    /**
     * @var labelMatchExpressions[]
     */
    public $labelMatchExpressions;
    protected $_name = [
        'labelMatchExpressions' => 'LabelMatchExpressions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelMatchExpressions) {
            $res['LabelMatchExpressions'] = [];
            if (null !== $this->labelMatchExpressions && \is_array($this->labelMatchExpressions)) {
                $n = 0;
                foreach ($this->labelMatchExpressions as $item) {
                    $res['LabelMatchExpressions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelMatchExpressionGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelMatchExpressions'])) {
            if (!empty($map['LabelMatchExpressions'])) {
                $model->labelMatchExpressions = [];
                $n                            = 0;
                foreach ($map['LabelMatchExpressions'] as $item) {
                    $model->labelMatchExpressions[$n++] = null !== $item ? labelMatchExpressions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
