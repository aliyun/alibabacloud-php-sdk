<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponseBody\accessPointSet\accessPointType;

class accessPointSet extends Model
{
    /**
     * @var accessPointType[]
     */
    public $accessPointType;
    protected $_name = [
        'accessPointType' => 'AccessPointType',
    ];

    public function validate()
    {
        if (\is_array($this->accessPointType)) {
            Model::validateArray($this->accessPointType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPointType) {
            if (\is_array($this->accessPointType)) {
                $res['AccessPointType'] = [];
                $n1 = 0;
                foreach ($this->accessPointType as $item1) {
                    $res['AccessPointType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessPointType'])) {
            if (!empty($map['AccessPointType'])) {
                $model->accessPointType = [];
                $n1 = 0;
                foreach ($map['AccessPointType'] as $item1) {
                    $model->accessPointType[$n1++] = accessPointType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
