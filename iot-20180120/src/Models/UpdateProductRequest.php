<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductRequest extends Model
{
    /**
     * @description The description of the product. The description must be 1 to 100 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.
     *
     *
     *
     **Important**
     *
     *   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     *   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product. A ProductKey is a GUID that is issued by IoT Platform to the product.****
     *
     * You can use the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products within the current Alibaba Cloud account.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The new product name that you want to use.
     *
     * The name must be 4 to 30 characters in length, and can contain letters, digits, and underscores (\_).
     *
     *
     **Important** Each product name must be unique within the current Alibaba Cloud account.
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'description'   => 'Description',
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'productName'   => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
