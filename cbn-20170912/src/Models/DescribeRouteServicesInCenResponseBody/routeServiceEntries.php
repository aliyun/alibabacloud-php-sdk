<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry;
use AlibabaCloud\Tea\Model;

class routeServiceEntries extends Model
{
    /**
     * @var routeServiceEntry[]
     */
    public $routeServiceEntry;
    protected $_name = [
        'routeServiceEntry' => 'RouteServiceEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeServiceEntry) {
            $res['RouteServiceEntry'] = [];
            if (null !== $this->routeServiceEntry && \is_array($this->routeServiceEntry)) {
                $n = 0;
                foreach ($this->routeServiceEntry as $item) {
                    $res['RouteServiceEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeServiceEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteServiceEntry'])) {
            if (!empty($map['RouteServiceEntry'])) {
                $model->routeServiceEntry = [];
                $n                        = 0;
                foreach ($map['RouteServiceEntry'] as $item) {
                    $model->routeServiceEntry[$n++] = null !== $item ? routeServiceEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
