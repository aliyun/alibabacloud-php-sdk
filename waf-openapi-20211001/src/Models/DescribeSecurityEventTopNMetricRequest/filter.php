<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricRequest\filter\conditions;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTopNMetricRequest\filter\dateRange;

class filter extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var dateRange
     */
    public $dateRange;
    protected $_name = [
        'conditions' => 'Conditions',
        'dateRange' => 'DateRange',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (null !== $this->dateRange) {
            $this->dateRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dateRange) {
            $res['DateRange'] = null !== $this->dateRange ? $this->dateRange->toArray($noStream) : $this->dateRange;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1++] = conditions::fromMap($item1);
                }
            }
        }

        if (isset($map['DateRange'])) {
            $model->dateRange = dateRange::fromMap($map['DateRange']);
        }

        return $model;
    }
}
