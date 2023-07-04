<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys\entrySummarys;
use AlibabaCloud\Tea\Model;

class routeEntrySummarys extends Model
{
    /**
     * @description The information about the routes of different types in one route table.
     *
     * @var entrySummarys[]
     */
    public $entrySummarys;

    /**
     * @description The ID of the route table.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'entrySummarys' => 'EntrySummarys',
        'routeTableId'  => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entrySummarys) {
            $res['EntrySummarys'] = [];
            if (null !== $this->entrySummarys && \is_array($this->entrySummarys)) {
                $n = 0;
                foreach ($this->entrySummarys as $item) {
                    $res['EntrySummarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntrySummarys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntrySummarys'])) {
            if (!empty($map['EntrySummarys'])) {
                $model->entrySummarys = [];
                $n                    = 0;
                foreach ($map['EntrySummarys'] as $item) {
                    $model->entrySummarys[$n++] = null !== $item ? entrySummarys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
