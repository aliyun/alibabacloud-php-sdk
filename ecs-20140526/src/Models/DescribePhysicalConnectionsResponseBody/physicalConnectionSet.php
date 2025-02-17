<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet\physicalConnectionType;

class physicalConnectionSet extends Model
{
    /**
     * @var physicalConnectionType[]
     */
    public $physicalConnectionType;
    protected $_name = [
        'physicalConnectionType' => 'PhysicalConnectionType',
    ];

    public function validate()
    {
        if (\is_array($this->physicalConnectionType)) {
            Model::validateArray($this->physicalConnectionType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->physicalConnectionType) {
            if (\is_array($this->physicalConnectionType)) {
                $res['PhysicalConnectionType'] = [];
                $n1                            = 0;
                foreach ($this->physicalConnectionType as $item1) {
                    $res['PhysicalConnectionType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PhysicalConnectionType'])) {
            if (!empty($map['PhysicalConnectionType'])) {
                $model->physicalConnectionType = [];
                $n1                            = 0;
                foreach ($map['PhysicalConnectionType'] as $item1) {
                    $model->physicalConnectionType[$n1++] = physicalConnectionType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
