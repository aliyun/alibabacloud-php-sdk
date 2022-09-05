<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean\alertIMRobots;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var alertIMRobots[]
     */
    public $alertIMRobots;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'alertIMRobots' => 'AlertIMRobots',
        'page'          => 'Page',
        'size'          => 'Size',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertIMRobots) {
            $res['AlertIMRobots'] = [];
            if (null !== $this->alertIMRobots && \is_array($this->alertIMRobots)) {
                $n = 0;
                foreach ($this->alertIMRobots as $item) {
                    $res['AlertIMRobots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertIMRobots'])) {
            if (!empty($map['AlertIMRobots'])) {
                $model->alertIMRobots = [];
                $n                    = 0;
                foreach ($map['AlertIMRobots'] as $item) {
                    $model->alertIMRobots[$n++] = null !== $item ? alertIMRobots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
