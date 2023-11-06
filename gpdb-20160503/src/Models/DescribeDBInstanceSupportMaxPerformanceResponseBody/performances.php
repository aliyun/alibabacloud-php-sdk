<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSupportMaxPerformanceResponseBody\performances\performance;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performance) {
            $res['Performance'] = [];
            if (null !== $this->performance && \is_array($this->performance)) {
                $n = 0;
                foreach ($this->performance as $item) {
                    $res['Performance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Performance'])) {
            if (!empty($map['Performance'])) {
                $model->performance = [];
                $n                  = 0;
                foreach ($map['Performance'] as $item) {
                    $model->performance[$n++] = null !== $item ? performance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
