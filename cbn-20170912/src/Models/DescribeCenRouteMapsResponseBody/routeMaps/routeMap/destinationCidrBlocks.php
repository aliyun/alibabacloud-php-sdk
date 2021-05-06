<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRouteMapsResponseBody\routeMaps\routeMap;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationCidrBlocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            if (!empty($map['DestinationCidrBlock'])) {
                $model->destinationCidrBlock = $map['DestinationCidrBlock'];
            }
        }

        return $model;
    }
}
