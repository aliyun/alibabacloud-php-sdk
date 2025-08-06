<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry;

class routeEntrys extends Model
{
    /**
     * @var routeEntry[]
     */
    public $routeEntry;
    protected $_name = [
        'routeEntry' => 'RouteEntry',
    ];

    public function validate()
    {
        if (\is_array($this->routeEntry)) {
            Model::validateArray($this->routeEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeEntry) {
            if (\is_array($this->routeEntry)) {
                $res['RouteEntry'] = [];
                $n1 = 0;
                foreach ($this->routeEntry as $item1) {
                    $res['RouteEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouteEntry'])) {
            if (!empty($map['RouteEntry'])) {
                $model->routeEntry = [];
                $n1 = 0;
                foreach ($map['RouteEntry'] as $item1) {
                    $model->routeEntry[$n1] = routeEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
