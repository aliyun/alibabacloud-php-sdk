<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->sourceRouteTableId)) {
            Model::validateArray($this->sourceRouteTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceRouteTableId) {
            if (\is_array($this->sourceRouteTableId)) {
                $res['SourceRouteTableId'] = [];
                $n1                        = 0;
                foreach ($this->sourceRouteTableId as $item1) {
                    $res['SourceRouteTableId'][$n1++] = $item1;
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
        if (isset($map['SourceRouteTableId'])) {
            if (!empty($map['SourceRouteTableId'])) {
                $model->sourceRouteTableId = [];
                $n1                        = 0;
                foreach ($map['SourceRouteTableId'] as $item1) {
                    $model->sourceRouteTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
