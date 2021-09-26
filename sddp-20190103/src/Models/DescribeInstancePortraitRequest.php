<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancePortraitRequest extends Model
{
    /**
     * @var int
     */
    public $productId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemKeys;
    protected $_name = [
        'productId'  => 'ProductId',
        'instanceId' => 'InstanceId',
        'itemKeys'   => 'ItemKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemKeys) {
            $res['ItemKeys'] = $this->itemKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePortraitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemKeys'])) {
            $model->itemKeys = $map['ItemKeys'];
        }

        return $model;
    }
}
