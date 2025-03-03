<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $componentId;
    /**
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentId'   => 'ComponentId',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
