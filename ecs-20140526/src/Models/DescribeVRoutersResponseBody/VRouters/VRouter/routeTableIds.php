<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters\VRouter;

use AlibabaCloud\Dara\Model;

class routeTableIds extends Model
{
    /**
     * @var string[]
     */
    public $routeTableId;
    protected $_name = [
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->routeTableId)) {
            Model::validateArray($this->routeTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeTableId) {
            if (\is_array($this->routeTableId)) {
                $res['RouteTableId'] = [];
                $n1 = 0;
                foreach ($this->routeTableId as $item1) {
                    $res['RouteTableId'][$n1++] = $item1;
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
        if (isset($map['RouteTableId'])) {
            if (!empty($map['RouteTableId'])) {
                $model->routeTableId = [];
                $n1 = 0;
                foreach ($map['RouteTableId'] as $item1) {
                    $model->routeTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
