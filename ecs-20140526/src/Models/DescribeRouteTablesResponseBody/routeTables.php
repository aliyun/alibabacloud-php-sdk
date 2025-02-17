<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable;

class routeTables extends Model
{
    /**
     * @var routeTable[]
     */
    public $routeTable;
    protected $_name = [
        'routeTable' => 'RouteTable',
    ];

    public function validate()
    {
        if (\is_array($this->routeTable)) {
            Model::validateArray($this->routeTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeTable) {
            if (\is_array($this->routeTable)) {
                $res['RouteTable'] = [];
                $n1                = 0;
                foreach ($this->routeTable as $item1) {
                    $res['RouteTable'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouteTable'])) {
            if (!empty($map['RouteTable'])) {
                $model->routeTable = [];
                $n1                = 0;
                foreach ($map['RouteTable'] as $item1) {
                    $model->routeTable[$n1++] = routeTable::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
