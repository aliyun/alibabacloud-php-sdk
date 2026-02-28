<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DeleteProductTagsRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string[]
     */
    public $productTagKey;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'productTagKey' => 'ProductTagKey',
    ];

    public function validate()
    {
        if (\is_array($this->productTagKey)) {
            Model::validateArray($this->productTagKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->productTagKey) {
            if (\is_array($this->productTagKey)) {
                $res['ProductTagKey'] = [];
                $n1 = 0;
                foreach ($this->productTagKey as $item1) {
                    $res['ProductTagKey'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['ProductTagKey'])) {
            if (!empty($map['ProductTagKey'])) {
                $model->productTagKey = [];
                $n1 = 0;
                foreach ($map['ProductTagKey'] as $item1) {
                    $model->productTagKey[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
