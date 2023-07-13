<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteProductTagsRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     *
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-v64***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product. A ProductKey is a GUID that is issued by IoT Platform to a product. You can use the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products within the current account.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example room
     *
     * @var string[]
     */
    public $productTagKey;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'productTagKey' => 'ProductTagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productTagKey) {
            $res['ProductTagKey'] = $this->productTagKey;
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
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductTagKey'])) {
            if (!empty($map['ProductTagKey'])) {
                $model->productTagKey = $map['ProductTagKey'];
            }
        }

        return $model;
    }
}
