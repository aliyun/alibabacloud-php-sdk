<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationResponseBody\utilizations\utilization;
use AlibabaCloud\Tea\Model;

class utilizations extends Model
{
    /**
     * @var utilization[]
     */
    public $utilization;
    protected $_name = [
        'utilization' => 'Utilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->utilization) {
            $res['Utilization'] = [];
            if (null !== $this->utilization && \is_array($this->utilization)) {
                $n = 0;
                foreach ($this->utilization as $item) {
                    $res['Utilization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return utilizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Utilization'])) {
            if (!empty($map['Utilization'])) {
                $model->utilization = [];
                $n                  = 0;
                foreach ($map['Utilization'] as $item) {
                    $model->utilization[$n++] = null !== $item ? utilization::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
