<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid\labelMatchExpressionGroups\labelMatchExpressions;

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
        if (\is_array($this->labelMatchExpressions)) {
            Model::validateArray($this->labelMatchExpressions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelMatchExpressions) {
            if (\is_array($this->labelMatchExpressions)) {
                $res['LabelMatchExpressions'] = [];
                $n1                           = 0;
                foreach ($this->labelMatchExpressions as $item1) {
                    $res['LabelMatchExpressions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LabelMatchExpressions'])) {
            if (!empty($map['LabelMatchExpressions'])) {
                $model->labelMatchExpressions = [];
                $n1                           = 0;
                foreach ($map['LabelMatchExpressions'] as $item1) {
                    $model->labelMatchExpressions[$n1++] = labelMatchExpressions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
