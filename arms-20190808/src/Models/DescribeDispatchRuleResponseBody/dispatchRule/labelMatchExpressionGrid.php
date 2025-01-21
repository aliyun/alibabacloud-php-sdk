<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid\labelMatchExpressionGroups;

class labelMatchExpressionGrid extends Model
{
    /**
     * @var labelMatchExpressionGroups[]
     */
    public $labelMatchExpressionGroups;
    protected $_name = [
        'labelMatchExpressionGroups' => 'LabelMatchExpressionGroups',
    ];

    public function validate()
    {
        if (\is_array($this->labelMatchExpressionGroups)) {
            Model::validateArray($this->labelMatchExpressionGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelMatchExpressionGroups) {
            if (\is_array($this->labelMatchExpressionGroups)) {
                $res['LabelMatchExpressionGroups'] = [];
                $n1                                = 0;
                foreach ($this->labelMatchExpressionGroups as $item1) {
                    $res['LabelMatchExpressionGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LabelMatchExpressionGroups'])) {
            if (!empty($map['LabelMatchExpressionGroups'])) {
                $model->labelMatchExpressionGroups = [];
                $n1                                = 0;
                foreach ($map['LabelMatchExpressionGroups'] as $item1) {
                    $model->labelMatchExpressionGroups[$n1++] = labelMatchExpressionGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
