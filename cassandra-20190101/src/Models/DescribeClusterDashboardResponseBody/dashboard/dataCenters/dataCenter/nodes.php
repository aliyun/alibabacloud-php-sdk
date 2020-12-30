<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter\nodes\node;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var node[]
     */
    public $node;
    protected $_name = [
        'node' => 'Node',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->node) {
            $res['Node'] = [];
            if (null !== $this->node && \is_array($this->node)) {
                $n = 0;
                foreach ($this->node as $item) {
                    $res['Node'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n           = 0;
                foreach ($map['Node'] as $item) {
                    $model->node[$n++] = null !== $item ? node::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
