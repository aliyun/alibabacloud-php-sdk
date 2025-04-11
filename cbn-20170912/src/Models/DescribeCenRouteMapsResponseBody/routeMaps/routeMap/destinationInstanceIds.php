<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class destinationInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $destinationInstanceId;
    protected $_name = [
        'destinationInstanceId' => 'DestinationInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->destinationInstanceId)) {
            Model::validateArray($this->destinationInstanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationInstanceId) {
            if (\is_array($this->destinationInstanceId)) {
                $res['DestinationInstanceId'] = [];
                $n1 = 0;
                foreach ($this->destinationInstanceId as $item1) {
                    $res['DestinationInstanceId'][$n1++] = $item1;
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
        if (isset($map['DestinationInstanceId'])) {
            if (!empty($map['DestinationInstanceId'])) {
                $model->destinationInstanceId = [];
                $n1 = 0;
                foreach ($map['DestinationInstanceId'] as $item1) {
                    $model->destinationInstanceId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
