<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponseBody\routeConflicts\routeConflict;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeConflict) {
            $res['RouteConflict'] = [];
            if (null !== $this->routeConflict && \is_array($this->routeConflict)) {
                $n = 0;
                foreach ($this->routeConflict as $item) {
                    $res['RouteConflict'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeConflicts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteConflict'])) {
            if (!empty($map['RouteConflict'])) {
                $model->routeConflict = [];
                $n                    = 0;
                foreach ($map['RouteConflict'] as $item) {
                    $model->routeConflict[$n++] = null !== $item ? routeConflict::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
