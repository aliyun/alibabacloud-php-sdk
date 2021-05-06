<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

class sourceRouteTableIds extends Model
{
    /**
     * @var string[]
     */
    public $sourceRouteTableId;
    protected $_name = [
        'sourceRouteTableId' => 'SourceRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceRouteTableId) {
            $res['SourceRouteTableId'] = $this->sourceRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRouteTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceRouteTableId'])) {
            if (!empty($map['SourceRouteTableId'])) {
                $model->sourceRouteTableId = $map['SourceRouteTableId'];
            }
        }

        return $model;
    }
}
