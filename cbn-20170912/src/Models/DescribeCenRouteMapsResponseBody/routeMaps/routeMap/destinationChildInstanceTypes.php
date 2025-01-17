<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class destinationChildInstanceTypes extends Model
{
    /**
     * @var string[]
     */
    public $destinationChildInstanceType;
    protected $_name = [
        'destinationChildInstanceType' => 'DestinationChildInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->destinationChildInstanceType)) {
            Model::validateArray($this->destinationChildInstanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationChildInstanceType) {
            if (\is_array($this->destinationChildInstanceType)) {
                $res['DestinationChildInstanceType'] = [];
                $n1                                  = 0;
                foreach ($this->destinationChildInstanceType as $item1) {
                    $res['DestinationChildInstanceType'][$n1++] = $item1;
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
        if (isset($map['DestinationChildInstanceType'])) {
            if (!empty($map['DestinationChildInstanceType'])) {
                $model->destinationChildInstanceType = [];
                $n1                                  = 0;
                foreach ($map['DestinationChildInstanceType'] as $item1) {
                    $model->destinationChildInstanceType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
