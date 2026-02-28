<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class UpdateProductFilterConfigRequest extends Model
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
     * @var bool
     */
    public $propertyTimestampFilter;

    /**
     * @var bool
     */
    public $propertyValueFilter;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey' => 'ProductKey',
        'propertyTimestampFilter' => 'PropertyTimestampFilter',
        'propertyValueFilter' => 'PropertyValueFilter',
    ];

    public function validate()
    {
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

        if (null !== $this->propertyTimestampFilter) {
            $res['PropertyTimestampFilter'] = $this->propertyTimestampFilter;
        }

        if (null !== $this->propertyValueFilter) {
            $res['PropertyValueFilter'] = $this->propertyValueFilter;
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

        if (isset($map['PropertyTimestampFilter'])) {
            $model->propertyTimestampFilter = $map['PropertyTimestampFilter'];
        }

        if (isset($map['PropertyValueFilter'])) {
            $model->propertyValueFilter = $map['PropertyValueFilter'];
        }

        return $model;
    }
}
