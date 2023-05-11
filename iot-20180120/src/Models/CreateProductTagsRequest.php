<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsRequest\productTag;
use AlibabaCloud\Tea\Model;

class CreateProductTagsRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     *
     **Important**
     *
     *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     *   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The **ProductKey** of the product. A **ProductKey** is a GUID that is issued by IoT Platform to a product.
     *
     * You can use the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products within the current account.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var productTag[]
     */
    public $productTag;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'productTag'    => 'ProductTag',
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
        if (null !== $this->productTag) {
            $res['ProductTag'] = [];
            if (null !== $this->productTag && \is_array($this->productTag)) {
                $n = 0;
                foreach ($this->productTag as $item) {
                    $res['ProductTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductTagsRequest
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
        if (isset($map['ProductTag'])) {
            if (!empty($map['ProductTag'])) {
                $model->productTag = [];
                $n                 = 0;
                foreach ($map['ProductTag'] as $item) {
                    $model->productTag[$n++] = null !== $item ? productTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
