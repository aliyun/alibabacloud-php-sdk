<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteProductTagsRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $productTagKey;

    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productTagKey' => 'ProductTagKey',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
        Model::validateRequired('productTagKey', $this->productTagKey, true);
        Model::validateRequired('productKey', $this->productKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productTagKey) {
            $res['ProductTagKey'] = $this->productTagKey;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProductTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductTagKey'])) {
            if (!empty($map['ProductTagKey'])) {
                $model->productTagKey = $map['ProductTagKey'];
            }
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
