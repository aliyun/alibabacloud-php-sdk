<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean\alertIMRobots;

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
        'page' => 'Page',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->alertIMRobots)) {
            Model::validateArray($this->alertIMRobots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertIMRobots) {
            if (\is_array($this->alertIMRobots)) {
                $res['AlertIMRobots'] = [];
                $n1 = 0;
                foreach ($this->alertIMRobots as $item1) {
                    $res['AlertIMRobots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertIMRobots'])) {
            if (!empty($map['AlertIMRobots'])) {
                $model->alertIMRobots = [];
                $n1 = 0;
                foreach ($map['AlertIMRobots'] as $item1) {
                    $model->alertIMRobots[$n1] = alertIMRobots::fromMap($item1);
                    ++$n1;
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
