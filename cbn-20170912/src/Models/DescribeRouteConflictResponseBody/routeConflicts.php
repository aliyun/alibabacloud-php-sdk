<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponseBody\routeConflicts\routeConflict;

class routeConflicts extends Model
{
    /**
     * @var routeConflict[]
     */
    public $routeConflict;
    protected $_name = [
        'routeConflict' => 'RouteConflict',
    ];

    public function validate()
    {
        if (\is_array($this->routeConflict)) {
            Model::validateArray($this->routeConflict);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeConflict) {
            if (\is_array($this->routeConflict)) {
                $res['RouteConflict'] = [];
                $n1                   = 0;
                foreach ($this->routeConflict as $item1) {
                    $res['RouteConflict'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouteConflict'])) {
            if (!empty($map['RouteConflict'])) {
                $model->routeConflict = [];
                $n1                   = 0;
                foreach ($map['RouteConflict'] as $item1) {
                    $model->routeConflict[$n1++] = routeConflict::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
