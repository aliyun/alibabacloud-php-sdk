<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody\performances\performance;

class performances extends Model
{
    /**
     * @var performance[]
     */
    public $performance;
    protected $_name = [
        'performance' => 'Performance',
    ];

    public function validate()
    {
        if (\is_array($this->performance)) {
            Model::validateArray($this->performance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performance) {
            if (\is_array($this->performance)) {
                $res['Performance'] = [];
                $n1 = 0;
                foreach ($this->performance as $item1) {
                    $res['Performance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Performance'])) {
            if (!empty($map['Performance'])) {
                $model->performance = [];
                $n1 = 0;
                foreach ($map['Performance'] as $item1) {
                    $model->performance[$n1] = performance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
