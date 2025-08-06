<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponseBody\routeTables\routeTable\routeEntrys\routeEntry\nextHops\nextHop;

class nextHops extends Model
{
    /**
     * @var nextHop[]
     */
    public $nextHop;
    protected $_name = [
        'nextHop' => 'NextHop',
    ];

    public function validate()
    {
        if (\is_array($this->nextHop)) {
            Model::validateArray($this->nextHop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextHop) {
            if (\is_array($this->nextHop)) {
                $res['NextHop'] = [];
                $n1 = 0;
                foreach ($this->nextHop as $item1) {
                    $res['NextHop'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextHop'])) {
            if (!empty($map['NextHop'])) {
                $model->nextHop = [];
                $n1 = 0;
                foreach ($map['NextHop'] as $item1) {
                    $model->nextHop[$n1] = nextHop::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
