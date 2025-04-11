<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Dara\Model;

class destinationCidrBlocks extends Model
{
    /**
     * @var string[]
     */
    public $destinationCidrBlock;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
    ];

    public function validate()
    {
        if (\is_array($this->destinationCidrBlock)) {
            Model::validateArray($this->destinationCidrBlock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            if (\is_array($this->destinationCidrBlock)) {
                $res['DestinationCidrBlock'] = [];
                $n1 = 0;
                foreach ($this->destinationCidrBlock as $item1) {
                    $res['DestinationCidrBlock'][$n1++] = $item1;
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
        if (isset($map['DestinationCidrBlock'])) {
            if (!empty($map['DestinationCidrBlock'])) {
                $model->destinationCidrBlock = [];
                $n1 = 0;
                foreach ($map['DestinationCidrBlock'] as $item1) {
                    $model->destinationCidrBlock[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
