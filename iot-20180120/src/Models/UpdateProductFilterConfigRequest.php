<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateProductFilterConfigRequest extends Model
{
    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The ProductKey of the product. A ProductKey is a GUID that is issued by IoT Platform to a product.
     *
     * You can use the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products within the current account.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description Specifies whether to deduplicate messages based on the submission time of each property. Valid values:
     *
     *   **true**: deduplicates property messages that have the same timestamp.
     *   **false**: does not deduplicate messages based on timestamps.
     *
     * @example false
     *
     * @var bool
     */
    public $propertyTimestampFilter;

    /**
     * @description Specifies whether to deduplicate messages based on the value of each property. Valid values:
     *
     *   **true**: deduplicates property messages that have the same property value.
     *   **false**: does not deduplicate messages based on property values.
     *
     * @example true
     *
     * @var bool
     */
    public $propertyValueFilter;
    protected $_name = [
        'iotInstanceId'           => 'IotInstanceId',
        'productKey'              => 'ProductKey',
        'propertyTimestampFilter' => 'PropertyTimestampFilter',
        'propertyValueFilter'     => 'PropertyValueFilter',
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
        if (null !== $this->propertyTimestampFilter) {
            $res['PropertyTimestampFilter'] = $this->propertyTimestampFilter;
        }
        if (null !== $this->propertyValueFilter) {
            $res['PropertyValueFilter'] = $this->propertyValueFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProductFilterConfigRequest
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
        if (isset($map['PropertyTimestampFilter'])) {
            $model->propertyTimestampFilter = $map['PropertyTimestampFilter'];
        }
        if (isset($map['PropertyValueFilter'])) {
            $model->propertyValueFilter = $map['PropertyValueFilter'];
        }

        return $model;
    }
}
