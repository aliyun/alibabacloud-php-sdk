<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @example i149549021660892626529
     *
     * @var string
     */
    public $componentId;

    /**
     * @example ACKEdge
     *
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentId'   => 'ComponentId',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}
