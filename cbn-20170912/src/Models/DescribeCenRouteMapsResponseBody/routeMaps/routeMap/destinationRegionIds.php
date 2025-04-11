<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class destinationRegionIds extends Model
{
    /**
     * @var string[]
     */
    public $destinationRegionId;
    protected $_name = [
        'destinationRegionId' => 'DestinationRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationRegionId)) {
            Model::validateArray($this->destinationRegionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationRegionId) {
            if (\is_array($this->destinationRegionId)) {
                $res['DestinationRegionId'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionId as $item1) {
                    $res['DestinationRegionId'][$n1++] = $item1;
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
        if (isset($map['DestinationRegionId'])) {
            if (!empty($map['DestinationRegionId'])) {
                $model->destinationRegionId = [];
                $n1 = 0;
                foreach ($map['DestinationRegionId'] as $item1) {
                    $model->destinationRegionId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
