<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsRequest\productTag;

class CreateProductTagsRequest extends Model
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
     * @var productTag[]
     */
    public $productTag;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'productTag' => 'ProductTag',
    ];

    public function validate()
    {
        if (\is_array($this->productTag)) {
            Model::validateArray($this->productTag);
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

        if (null !== $this->productTag) {
            if (\is_array($this->productTag)) {
                $res['ProductTag'] = [];
                $n1 = 0;
                foreach ($this->productTag as $item1) {
                    $res['ProductTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ProductTag'])) {
            if (!empty($map['ProductTag'])) {
                $model->productTag = [];
                $n1 = 0;
                foreach ($map['ProductTag'] as $item1) {
                    $model->productTag[$n1] = productTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
