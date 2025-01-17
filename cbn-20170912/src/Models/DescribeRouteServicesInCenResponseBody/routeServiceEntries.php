<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry;

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
        if (\is_array($this->routeServiceEntry)) {
            Model::validateArray($this->routeServiceEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeServiceEntry) {
            if (\is_array($this->routeServiceEntry)) {
                $res['RouteServiceEntry'] = [];
                $n1                       = 0;
                foreach ($this->routeServiceEntry as $item1) {
                    $res['RouteServiceEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouteServiceEntry'])) {
            if (!empty($map['RouteServiceEntry'])) {
                $model->routeServiceEntry = [];
                $n1                       = 0;
                foreach ($map['RouteServiceEntry'] as $item1) {
                    $model->routeServiceEntry[$n1++] = routeServiceEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
